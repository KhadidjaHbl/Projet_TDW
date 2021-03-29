<?php

require_once './app/Models/Model.php';   

class eleveModel extends Model{

//Se connecter en tant qu'eleve
  public function login(){

    $conn=$this->connexion("projet_tdw","127.0.0.1","root","");
          $sql = 'SELECT * FROM utilisateur WHERE Type = :Type AND Email = :Email AND Password =:Password';  
          $statement = $conn->prepare($sql); 
          echo $_POST["password"]; 
          $statement->execute(  
              array(  
                    'Type'         =>     "Eleve",  
                    'Email'        =>     $_POST["email"],  
                    'Password'     =>     $_POST["password"]  
              )  
          );

          $count = $statement->rowCount();  
          if($count > 0){  
            $this->deconnexion($conn);
              return $count;
          }
          else{  
              echo 'email et/ou mot de passe incorrect';
              $this->deconnexion($conn);
              return 0;
          } 

}

//Afficher les informations d'un eleve
public function AfficherEleveInfos(){

    $conn=$this->connexion("projet_tdw","127.0.0.1","root","");
    $emailEleve= $_SESSION["email"];
    $req= "SELECT * FROM utilisateur as u join anneescolaire as a on u.ID=a.eleveID  where Email='$emailEleve'";
    $r= $this->requete($conn,$req);
    return $r;
    $this->deconnexion($conn);
}

//Afficher les informations d'un eleve
public function activities(){

    $conn=$this->connexion("projet_tdw","127.0.0.1","root","");
    $emailEleve= $_SESSION["email"];
    $req= "SELECT * FROM utilisateur as u join activite as a on u.ID=a.eleveID  where Email='$emailEleve'";
    $r= $this->requete($conn,$req);
    return $r;
    $this->deconnexion($conn);
}

//Afficher les notes des eleves
public function notes(){

  $conn=$this->connexion("TDW","127.0.0.1","root","");
  $emailEleve= $_SESSION["email"];
  $req1= "SELECT ID FROM utilisateur where Email='$emailEleve'";
  $r= $this->requete($conn,$req1);
  foreach ($r as $row){
    $id=$row['ID'];
  }
  $req= "SELECT * FROM note,module where eleveID=$id and module.moduleID=note.moduleID";
  $r= $this->requete($conn,$req);
  return $r;
  $this->deconnexion($conn);
}

//filtrer les articles qui consernent les eleves
public function ArticlesEleve()
  {
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req= 'SELECT * from article where CategorieCons="Secondaire" or CategorieCons="Moyen" or CategorieCons="Primaire"';
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }

}
?>
