<?php

require_once './app/Models/Model.php';   

class contactModel extends Model{

  public function contactForm()
  {
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req= 'select * from contact';
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }
}



?>
