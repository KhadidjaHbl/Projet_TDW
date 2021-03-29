<?php
require_once './app/Models/Model.php';   

class ecoleModel extends Model{

//La présentation de l'école
  public function pres(){
    
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req= 'select * from paragraphe';
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }
}
?>
