<?php

require_once './app/Models/Model.php';   

class AdminModel extends Model{

//************************Authentification******************************//
public function authentifier(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");


          $sql = 'SELECT * FROM admin WHERE username = :un AND Password =:Password';  
          $statement = $conn->prepare($sql);  
          $statement->execute(  
              array(  
                    'un'           =>     $_POST["uname"],  
                    'Password'     =>     $_POST["password"]  
              )  
          );

          $count = $statement->rowCount();  
          if($count > 0){ 
            $_SESSION["email"]=$email;
            if(isset($_SESSION["email"])) header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Categories");
            $this->deconnexion($conn);
            return $count; 
          }
          else{  
              echo "nom d'utilisateur et/ou mot de passe incorrect";
              $this->deconnexion($conn);
              return 0;
          }
    
}
 
//*************************Gestion des articles*************************//

//Ajouter un article
  public function AjouterArticleBDD(){
  $conn=$this->connexion("TDW","127.0.0.1","root","");

  if (isset($_POST['submit']) && !empty($_POST['titre'])  && !empty($_POST['Description']))
  {
    
      if(!empty($_POST['users'])) {    
            foreach($_POST['users'] as $value){
                if ($value=="Tous"){$categorie="Tous";}
                if ($value=="Enseignants"){$categorie="Enseignants";}
                if ($value=="Primaire"){$categorie="Primaire";}
                if ($value=="Moyen"){$categorie="Moyen";}
                if ($value=="Secondaire"){$categorie="Secondaire";}
                if ($value=="Parents"){$categorie="Parents";}
            }
      }
      $msg = ""; 
      $filename = $_FILES["image"]["name"]; 
      $tempname = $_FILES["image"]["tmp_name"];     
      $folder = "./public/images/".$filename;  
      $titre=$_POST['titre'];
      $descr=$_POST['Description'];

      $sql = "INSERT INTO article (description,CategorieCons,titre,image) VALUES ('$descr','$categorie', '$titre','$filename')";
      $conn->query($sql);

      if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
      }else{ 
            $msg = "Failed to upload image"; 
      } 
    echo "l'article a bien été ajouté";
    }

$this->deconnexion($conn);
}


//Supprimer un article

public function SupprimerArticleBDD(){
  $conn=$this->connexion("TDW","127.0.0.1","root","");

  if (isset($_POST['submit']) && !empty($_POST['id'])){
    $id=$_POST['id'];
    $sql = "DELETE FROM article WHERE articleID=$id";
    $conn->query($sql);
    echo "l'article a bien été supprimé";

  }}


//Modifier un article

  public function AfficherModif(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $id=$_POST['id'];
    if (isset($_POST['submit']) && !empty($_POST['id']))
    {
    $sql= "SELECT * FROM article where articleID=$id ";

    $r= $this->requete($conn,$sql);
    }    
    return $r;
    $this->deconnexion($conn);
  }

  public function Maj(){
    $conn=$this->connexion("TDW","127.0.0.1","root","");

    if (isset($_POST['submit']) && !empty($_POST['titre'])  && !empty($_POST['Description']))
    {
 
        if(!empty($_POST['users'])) {    
            foreach($_POST['users'] as $value){
                if ($value=="Tous"){$categorie="Tous";}
                if ($value=="Enseignants"){$categorie="Enseignants";}
                if ($value=="Primaire"){$categorie="Primaire";}
                if ($value=="Moyen"){$categorie="Moyen";}
                if ($value=="Secondaire"){$categorie="Secondaire";}
                if ($value=="Parents"){$categorie="Parents";}
            }
        }
        $titre=$_POST['titre'];
        $descr=$_POST['Description'];
        $id=$_POST['id'];
        $msg = ""; 
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
        $folder = "./public/images/".$filename;  

        $sql = "UPDATE  article SET description='$descr',CategorieCons='$categorie',titre='$titre',image=' $filename' WHERE articleID=$id";
        $conn->query($sql);

        if (move_uploaded_file($tempname, $folder))  { 
          $msg = "Image uploaded successfully"; 
       }else{ 
          $msg = "Failed to upload image"; 
        } 
        echo "l'article a bien été modifié";
        }
         
$this->deconnexion($conn);

  }

//****************Gestion des présentation de l'école**********************//

//Ajout
  public function AjouterPresBDD(){

      $conn=$this->connexion("TDW","127.0.0.1","root","");
    
      if (isset($_POST['submit']) && !empty($_POST['titre'])  && !empty($_POST['Description']))
      {
          $msg = ""; 
          $filename = $_FILES["image"]["name"]; 
          $tempname = $_FILES["image"]["tmp_name"];     
          $folder = "./public/images/".$filename;  
          $titre=$_POST['titre'];
          $descr=$_POST['Description'];
    
          $sql = "INSERT INTO paragraphe (texte,title,image) VALUES ('$descr', '$titre','$filename')";
          $conn->query($sql);
    
          if (move_uploaded_file($tempname, $folder))  { 
                $msg = "Image uploaded successfully"; 
          }else{ 
                $msg = "Failed to upload image"; 
          } 
        echo "la présentation a bien été ajouté";
        }
    
    $this->deconnexion($conn);
}

//Suppression
public function SupprimerPresBDD(){

  $conn=$this->connexion("TDW","127.0.0.1","root","");

  if (isset($_POST['submit']) && !empty($_POST['id'])){
    $id=$_POST['id'];
    $sql = "DELETE FROM paragraphe WHERE ParagID=$id";
    $conn->query($sql);
    echo "la présentation a bien été supprimé";
}}

//Modification

public function Afficher_Pres(){
    $conn=$this->connexion("TDW","127.0.0.1","root","");

    $id=$_POST['id'];
    if (isset($_POST['submit']) && !empty($_POST['id'])){
    $sql= "SELECT * FROM paragraphe where ParagID=$id ";

    $r= $this->requete($conn,$sql);
    $this->deconnexion($conn);
  }    
    return $r;
    $this->deconnexion($conn);
  }


  public function Maj2(){
    $conn=$this->connexion("TDW","127.0.0.1","root","");

    if (isset($_POST['submit']) && !empty($_POST['titre'])  && !empty($_POST['Description']))
    {
        $titre=$_POST['titre'];
        $descr=$_POST['Description'];
        $id=$_POST['id'];
        $msg = ""; 
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
        $folder = "./public/images/".$filename;  
        echo "vvv";
        $sql = "UPDATE  paragraphe SET texte='$descr',title='$titre',image=' $filename' WHERE ParagID=$id";
        $conn->query($sql);

        if (move_uploaded_file($tempname, $folder))  { 
          $msg = "Image uploaded successfully"; 
       }else{ 
          $msg = "Failed to upload image"; 
        } 
        echo "l'article a bien été modifié";
        }
         
$this->deconnexion($conn);

}

//****************Gestion des utilisateurs*********************//

//Ajouter un utilisateur

public function Ajouter_user_BDD(){

  $conn=$this->connexion("TDW","127.0.0.1","root","");

  if (isset($_POST['submit']))
  {
     
      $sql ="INSERT INTO utilisateur (Nom,Prenom,Adresse,Tel1,Tel2,Tel3,Email,Type,DateNaiss) VALUES (:nom, :pre, :adr,:t1,:t2,:t3,:em,:type,:dateN)";
      $statement = $conn->prepare($sql); 
      $statement->execute(  
        array(  
              'nom'      =>   $_POST['nom'],   
              'pre'      =>   $_POST['prenom'],
              'adr'      =>   $_POST['adresse'],  
              't1'       =>   $_POST['tel1'],
              't2'       =>   $_POST['tel2'],  
              't3'       =>   $_POST['tel3'],
              'em'       =>   $_POST['email'],
              'type'     =>   $_POST['type'],
              'dateN'    =>   $_POST['datenaiss'],
        )  
        );
   echo "l'utilisateur a bien été ajouté";
  }

$this->deconnexion($conn);
}

//Affichage des utilisateurs

public function Afficher_users()
{
    $conn=$this->connexion("TDW","127.0.0.1","root","");

    $req = 'SELECT * FROM utilisateur';  
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
}

public function Afficher_ens()
{
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req = 'SELECT * FROM utilisateur as u join heurerecep as h on u.ID=h.EnsID where type="Enseignant"';  
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
}

  public function modifier_user(){
   
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $id=$_POST['id'];
    if (isset($_POST['submit']))
    {
      $sql= "SELECT * FROM utilisateur WHERE ID=$id";
      $r= $this->requete($conn,$sql);

    }    
    $this->deconnexion($conn);
    return $r;
}

public function modifier_ens(){
   
  $conn=$this->connexion("TDW","127.0.0.1","root","");
  $id=$_POST['id'];
  if (isset($_POST['submit']))
  {
    $sql= "SELECT * FROM utilisateur as u join heurerecep as h on u.ID=h.ensID WHERE ID=$id";
    $r= $this->requete($conn,$sql);

  }    
  $this->deconnexion($conn);
  return $r;
}

  public function Supprimer_user(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");

    if (isset($_POST['submit'])){
    $id=$_POST['id'];

    if(!empty($_POST['id'])) {
      $query = "DELETE FROM utilisateur WHERE ID=$id";
      $conn->query($query);
      echo "l'utilisateur a bien été supprimé";
  } }}
  
  public function Maj3(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");

    if (isset($_POST['submit']))
    {
    
            
        $sql ="UPDATE  utilisateur SET ID=:id,Nom=:nom,Prenom=:pre,Adresse=:adr,Tel1=:t1,Tel2=:t2,Tel3=:t3,Email=:em,Type=:type,DateNaiss=:dateN WHERE ID=:id";
        $statement = $conn->prepare($sql); 
        $statement->execute(  
          array(  
                'id'       =>   $_POST['id'],   
                'nom'      =>   $_POST['nom'],   
                'pre'      =>   $_POST['prenom'],
                'adr'      =>   $_POST['Adresse'],  
                't1'       =>   $_POST['Tel1'],
                't2'       =>   $_POST['Tel2'],  
                't3'       =>   $_POST['Tel3'],
                'em'       =>   $_POST['email'],
                'type'     =>   $_POST['type'],
                'dateN'    =>   $_POST['Datenaiss'],
          )  
          );

    }  
    echo "l'utilisateur a bien été modifié ";     
$this->deconnexion($conn);
}
/********************************************************************************** */
public function Maj6(){

  $conn=$this->connexion("TDW","127.0.0.1","root","");

  if (isset($_POST['submit']))
  {
  
          
      $sql ="UPDATE  utilisateur SET ID=:id,Nom=:nom,Prenom=:pre WHERE ID=:id";
      $statement = $conn->prepare($sql); 
      $statement->execute(  
        array(  
              'id'       =>   $_POST['id'],   
              'nom'      =>   $_POST['nom'],   
              'pre'      =>   $_POST['prenom']
        )  
        );
      $sql2 ="UPDATE  heurerecep SET EnsID=:id,Jour=:jour,Heure=:heure WHERE ensID=:id";
      $statement2 = $conn->prepare($sql2); 
      $statement2->execute(  
        array(  
              'id'        =>   $_POST['id'],   
              'jour'      =>   $_POST['jour'],   
              'heure'     =>   $_POST['heure']
        )  
        );

  }  
  echo "l'enseignant a bien été modifié ";     
$this->deconnexion($conn);
}
/******************************************************************************** */
public function afficher_contats()
{
    $conn=$this->connexion("TDW","127.0.0.1","root","");

    $req = 'SELECT * FROM contact';  
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
}
/**********************************************************************************/

public function Afficher_repas()
{
    $conn=$this->connexion("TDW","127.0.0.1","root","");

    $req = 'SELECT * FROM restauration';  
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
}

/********************************************************************************* */

public function Ajouter_repas_BDD(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");
  
    if (isset($_POST['submit']))
    {
       
        $sql ="INSERT INTO restauration (Jour,Repas,dessert) VALUES (:jour, :repas, :dessert)";
        $statement = $conn->prepare($sql); 
        $statement->execute(  
          array(  
                'jour'       =>   $_POST['jour'],   
                'repas'      =>   $_POST['repas'],
                'dessert'    =>   $_POST['dessert'],  
          )  
          );
     echo "le repas a bien été ajouté";
    }
  
  $this->deconnexion($conn);
}

/*********************************************************************************** */
public function Supprimer_repas(){

  $conn=$this->connexion("TDW","127.0.0.1","root","");
  if (isset($_POST['submit'])){
  $id=$_POST['id'];

  if(!empty($_POST['id'])){
      $query = "DELETE FROM restauration WHERE ID=$id";
      $conn->query($query);
      echo "le repas a bien été supprimé";
}}
}
/*********************************************************************************** */
public function modifier_repas(){
   
  $conn=$this->connexion("TDW","127.0.0.1","root","");
  $id=$_POST['id'];
  if (isset($_POST['submit']))
  {
    $sql= "SELECT * FROM restauration WHERE ID=$id";
    $r= $this->requete($conn,$sql);
  }    
  $this->deconnexion($conn);
  return $r;
}
/********************************************************************************** */
public function Maj4(){

  $conn=$this->connexion("TDW","127.0.0.1","root","");

  if (isset($_POST['submit']))
  {        
      $sql ="UPDATE  restauration SET id=:id,Jour=:j,Repas=:r,dessert=:d WHERE id=:id";
      $statement = $conn->prepare($sql); 
      $statement->execute(  
        array(  
              'id'     =>   $_POST['id'],   
              'j'      =>   $_POST['jour'],   
              'r'      =>   $_POST['repas'],
              'd'      =>   $_POST['dessert'],  
        )  
        );

  }  
  echo "le repas a bien été modifié ";     
$this->deconnexion($conn);
}
 /****************************************************************************************/

//Emplois de temps
    public function Ajouter_edt_cycle(){
        return;
  }
 /****************************************************************************************/

public function Ajouter_contact_BDD(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");
  
    if (isset($_POST['submit']))
    {
       
        $sql ="INSERT INTO contact (Email,Tel1,Tel2,Tel3) VALUES (:e, :t1, :t2, :t3)";
        $statement = $conn->prepare($sql); 
        $statement->execute(  
          array(  
                'e'       =>   $_POST['Email'],   
                't1'      =>   $_POST['tel1'],
                't2'    =>   $_POST['tel2'],  
                't3'    =>   $_POST['tel3'], 
          )  
          );
     echo "le contact a bien été ajouté";
    }
  
  $this->deconnexion($conn);
}


//Modifier un contact
/****************************************************************** */
public function modifier_contact(){

  $conn=$this->connexion("TDW","127.0.0.1","root","");
  $id=$_POST['id'];
  if (isset($_POST['submit']))
  {
  $sql= "SELECT * FROM contact where id=$id ";

  $r= $this->requete($conn,$sql);
  }    
  return $r;
  $this->deconnexion($conn);
}
/******************************************************************** */
public function Maj5(){

  $conn=$this->connexion("TDW","127.0.0.1","root","");

  if (isset($_POST['submit']))
  {        
      $sql ="UPDATE  contact SET id=:id,Email=:e,Tel1=:t1,Tel2=:t2,Tel3=:t3 WHERE id=:id";
      $statement = $conn->prepare($sql); 
      $statement->execute(  
        array(  
              'id'     =>   $_POST['id'],   
              'e'   =>   $_POST['email'],   
              't1'      =>   $_POST['Tel1'],
              't2'      =>   $_POST['Tel2'],  
              't3'      =>   $_POST['Tel3'],  
        )  
        );
  }  
  echo "le contact a bien été modifié ";     
$this->deconnexion($conn);
}
/****************************************************************************************/
public function modifier_diaporama(){

    $conn=$this->connexion("TDW","127.0.0.1","root","");
      
      $sql = "SELECT * from diaporama";
      $r= $this->requete($conn,$sql);
      $this->deconnexion($conn);
      return $r;
}

public function maj_image(){
  {
      $conn=$this->connexion("TDW","127.0.0.1","root","");
    
      if (isset($_POST['submit']))
      {
        echo "heeeey";
        $id=$_POST['id'];
        
          $msg = ""; 
          $filename = $_FILES["image"]["name"]; 
          $tempname = $_FILES["image"]["tmp_name"];     
          $folder = "./public/images/".$filename;  
    
          $sql = "UPDATE diaporama set image='$filename' where id=$id";
          $conn->query($sql);
          header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/gestion_diapo");
        }
  }
}

}
?>
