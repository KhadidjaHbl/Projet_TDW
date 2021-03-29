<?php

require_once './app/Models/Model.php';   

class parentModel extends Model{


//Se connecter en tant qu'eleve
  public function login(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");

    if (isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['password'])){

          $sql = 'SELECT * FROM utilisateur WHERE Type = :Type AND Email = :Email AND Password =:Password';  
          $statement = $conn->prepare($sql);  
          $statement->execute(  
              array(  
                    'Type'         =>     "Parent",  
                    'Email'        =>     $_POST["email"],  
                    'Password'     =>     $_POST["password"]  
              )  
          );

          $count = $statement->rowCount();  
          if($count > 0){  
            $this->deconnexion($conn);
            return $count;          }
          else{  
              echo 'email et/ou mot de passe incorrect';
          }
    }
    $this->deconnexion($conn);

}

//Afficher les informations du tuteur
public function Afficher_tuteur_infos(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $emailParent= $_SESSION["email"];
    $req= "SELECT * FROM utilisateur where Email='$emailParent' and type='Parent'";
    $r= $this->requete($conn,$req);
    return $r;
    $this->deconnexion($conn);
}


public function Articles_parent()
  {
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req= 'SELECT * from article where CategorieCons="Parents"';
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }

}
?>
