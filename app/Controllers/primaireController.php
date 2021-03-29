<?php

require_once ('./app/Views/primaireView.php');
require_once ('./app/Models/primaireModel.php'); 

Class primaireController {
  
    public function primaire()
    {
        $v= new primaireView();
        $v->index(); 
    }
    public function Afficher_rest()
    {
        $v= new primaireView();
        $v->Afficher_rest(); 
    }
    
   public function restau()
    {
        $vuemodel = new primaireModel();
        $r=$vuemodel->Afficher_rest();
        return $r;
    }

    public function Articles_primaire()
    {
        $m= new primaireModel();
        $res=$m->Articles_primaire(); 
        return($res);
    }
 
    public function Afficher_ens()
    {
        $v= new primaireView();
        $v->Afficher_ens(); 
    }
    public function list_enseignants()
    {
        $vuemodel = new primaireModel();
        $r=$vuemodel->list_enseignants();
        return $r;
    }
}
?>