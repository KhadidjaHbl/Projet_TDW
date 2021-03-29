<?php

require('./app/Views/eleveView.php');
require('./app/Models/eleveModel.php'); 

Class eleveController {
  
    public function eleveSpace()
    {
        $v= new eleveView();
        $v->index(); 
    }

    public function connexion()
    {
        $v= new eleveView();
        $v->connexion(); 
    }

    public function deconnexion()
    {
        $_SESSION["email"]=0;
        header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/accueil");
    }

    public function activities()
    {
        if(isset($_SESSION["email"])) {
            $elevModel = new eleveModel();
            $e=$elevModel->activities();
            return($e);
        }
        else header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/accueil");
    }

    public function notes()
    {
        if(isset($_SESSION["email"])) {
            $elevModel = new eleveModel();
            $e=$elevModel->notes();
            return($e);
        }
        else header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/accueil");
    }


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

    public function ArticlesEleve()
    {
        $m= new eleveModel();
        $res=$m->ArticlesEleve(); 
        return($res);
    }

    public function AfficherEleveInfos()
    {
        if(isset($_SESSION["email"])) {
            $elevModel = new eleveModel();
            $e=$elevModel->AfficherEleveInfos();
            return($e);
        }
        else header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/accueil");
    }
}
