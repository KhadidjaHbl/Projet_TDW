<?php

require_once ('./app/Views/secondView.php');
require_once ('./app/Views/primaireView.php');
require_once ('./app/Models/secondModel.php'); 
Class secondController {

      
        public function second()
        {
            $v= new secondView();
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
    
        public function Articles_second()
        {
            $m= new secondModel();
            $res=$m->Articles_second(); 
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