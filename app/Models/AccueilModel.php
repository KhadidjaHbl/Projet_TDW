<?php

require_once './app/Models/Model.php';   

class AccueilModel extends Model{

//Affichage des articles 
  public function Articles()
  {
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req= 'select * from article';
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }

//Afficher la suite des articles
  public function suite()
  {
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $id=$_POST['id'];
    $req="SELECT * from article where articleID=$id";
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }

//diaporama
  public function diaporama()
  {
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req= 'select * from diaporama';
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }
}
?>
