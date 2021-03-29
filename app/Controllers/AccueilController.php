<?php

    require './app/Models/AccueilModel.php'; 
    require './app/Views/AccueilView.php';   

Class AccueilController{
  
    public function index()
    {
        $v= new AccueilView();
        $v->index(); 
    }
    

    public function diaporama()
    {
        $vuemodel = new AccueilModel();
        $r=$vuemodel->diaporama();
        return $r;
    }

   public function Articles()
    {
        $vuemodel = new AccueilModel();
        $r=$vuemodel->Articles();
        return $r;
    }

    public function suite()
    {
        if (isset($_POST['submit'])){
        $vuemodel = new AccueilModel();
        $r=$vuemodel->suite();
        return $r;
    }}
}