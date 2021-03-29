<?php

require_once ('./app/Views/contactView.php');
require_once ('./app/Models/contactModel.php');

Class contactController{
  
    public function contact()
    { 
        $v=new contactView();
        $v->contactez();
    }

    public function contactForm()
    { 
        $v=new contactModel();
        $c=$v->contactForm();
        return($c);
    }
}
