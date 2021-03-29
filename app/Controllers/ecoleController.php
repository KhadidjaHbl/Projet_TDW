<?php

require_once ('./app/Views/ecoleView.php');   
require_once ('./app/Models/ecoleModel.php'); 

Class ecoleController {
  
    public function ecolePresentation()
    {
        $v= new ecoleView();
        $v->template(); 
    }

    public function presentation()
    {
        $ecmodel = new ecoleModel();
        $r=$ecmodel->pres();
        return $r;    
    }
}
