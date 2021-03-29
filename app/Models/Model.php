
<?php

class Model {

  protected $database = "TDW";  
  protected $host = "127.0.0.1";  
  protected $username  = "root";  
  protected $password = ""; 

  //Se connecter à la bdd
  protected function connexion($database, $host,$username,$password){ 
      try{
        $conn=new PDO("mysql:host=$host;dbname=$database",$username,$password);
      }
      catch(PDOException $ex){
        printf(" Erreur de conncsexion: ". $ex->getMessage()); 
        exit(); 
      }
      return $conn;
  }  

  //fermer la connexion
  protected function deconnexion(&$conn){  
      $conn=null;  
  } 

  protected function requete($conn,$r){
    return $conn->query($r);
  }

}
?>
