<?php

require_once './app/Models/Model.php';   

class primaireModel extends Model{

  public function Afficher_rest()
  {
      $conn=$this->connexion("TDW","127.0.0.1","root","");
      $req= 'SELECT * from restauration';
      $r= $this->requete($conn,$req);
      $this->deconnexion($conn);
      return $r;
  }

  public function list_enseignants()
  {
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req= 'SELECT * from utilisateur as u INNER JOIN enseigner as e ON u.ID=e.ensID where e.Cycle="Primaire"';
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }

  public function Articles_primaire()
  {
    $conn=$this->connexion("TDW","127.0.0.1","root","");
    $req= 'SELECT * from article where CategorieCons="Primaire"';
    $r= $this->requete($conn,$req);
    $this->deconnexion($conn);
    return $r;
  }
}
?>
