<?php

    require './app/Models/moyenModel.php'; 
    require './app/Views/moyenView.php';   

Class moyenController{
  
    public function moyen()
    {
        $v= new moyenView();
        $v->index(); 
    }
    
 
}