<?php

require('./app/Views/parentView.php');
require('./app/Models/parentModel.php'); 

Class parentController {
  
    public function parentSpace()
    {
        $v= new parentView();
        $v->index(); 
    }

    public function deconnexion()
    {
        $_SESSION["email"]=0;
        header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/accueil");
    }

    public function connexion()
    {
        $v= new parentView();
        $v->connexion(); 
    }

    public function checkParent()
    {
        if (isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['password'])){
        $email = trim($_POST["email"]);
        $m= new parentModel();
        $result=$m->login(); 
        if($result!=0 ){
            $_SESSION["email"]=$email;
            if(isset($_SESSION["email"])) header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/parentView/tuteur_infos");
        }
    }}   

    
    public function checkEleve()
    {
        if (isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['password'])){
            $email = trim($_POST["email"]);
            $m= new eleveModel();
            $result=$m->login(); 
            if($result!=0 ){
                $_SESSION["email"]=$email;
                if(isset($_SESSION["email"])) header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/eleveView/eleve_infos");
            }
        }    
    }

    public function Articles_parent()
    {
        $m= new parentModel();
        $res=$m->Articles_parent(); 
        return($res);
    }

    public function Afficher_tuteur_infos()
    {
        $pModel = new parentModel();
        $e=$pModel->Afficher_tuteur_infos();
        return($e);
    }

    
    public function tuteur_infos()
    {
        $pv = new parentView();
        $pv->tuteur_infos();
    }
}

?>
