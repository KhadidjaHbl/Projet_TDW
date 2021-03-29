<?php

  require_once ('./app/Views/adminView.php');   
  require_once ('./app/Models/AdminModel.php'); 

class AdminController{


  public function Adminpage(){
    $v= new adminView();
    $v->Adminpage(); 
  }

  public function authentifier(){

    if (isset($_POST['submit']) && !empty($_POST['uname'])  && !empty($_POST['password'])){
        $email =trim($_POST["email"]);
        $v= new adminModel();
        $res=$v->authentifier(); 
        if($res!=0 ){
            $_SESSION["email"]=$email;
            if(isset($_SESSION["email"])) header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Categories");
       }
        else header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/admin");
  }}


  public function deconnexion()
  {
      $_SESSION["email"]=0;
      header("Location: http://localhost/HABELHAMES_KHADIDJA_SIL2/admin");
  }


  public function Categories(){
    if(isset($_SESSION["email"])) {

      $admv = new adminView();
      $e=$admv->Categories();
      return($e);
  }}
  
/************************************************************************/  
  public function gestion_contact(){
    $v= new adminView();
    $v->gestion_contact(); 
  }

  public function Ajouter_contact(){
    $v= new adminView();
    $v->Ajouter_contact(); 
  }
  
  public function Ajouter_contact_BDD(){
    $v= new AdminModel();
    $v->Ajouter_contact_BDD(); 
  }

  public function modifier_contact(){
    $v= new AdminModel();
    $r=$v->modifier_contact(); 
    return $r;
  }
  public function contact_modif(){
    $v= new AdminView();
    $r=$v->contact_modif(); 
    return $r;
  }

  public function Maj5(){
    $v= new AdminModel();
    $v->Maj5(); 
  }
/********************************************************************* */
public function gestion_diapo(){
  $v= new adminView();
  $r=$v->gestion_diapo(); 
  return($r);
}

public function modifier_diaporama(){
  $v= new AdminModel();
  $r=$v->modifier_diaporama(); 
  return($r);
}

public function maj_image(){
  $v= new AdminModel();
  $r=$v->maj_image(); 
  return($r);
}

/************************************************************************/

  public function gestionArticles(){
    $v= new adminView();
    $v->gestionArticles(); 
  }

  public function AjouterArticle(){
    $v= new adminView();
    $v->AjouterArticle(); 
  }

  public function AjouterArticleBDD(){
    $v= new AdminModel();
    $v->AjouterArticleBDD(); 
  }
  
  public function SupprimerArticle(){
    $v= new adminView();
    $v->SupprimerArticle(); 
  }
  public function SupprimerArticleBDD(){
    $v= new adminModel();
    $v->SupprimerArticleBDD(); 
  }

  public function ModifierArticle(){
    $v= new adminView();
    $v->ModifierArticle(); 
  }

  public function ModificationView(){
    $v= new adminView();
    $v->ModificationView(); 
  }

  public function AfficherModif(){
    $v= new AdminModel();
    $r=$v->AfficherModif(); 
    return $r;
  }
  public function Maj(){
    $v= new AdminModel();
    $v->Maj(); 
  }

/***********************************************************************/

  public function gestionPresentations(){
    $v= new adminView();
    $v->gestionPresentations(); 
  }

  public function AjouterPresentation(){
    $v= new adminView();
    $v->AjouterPresentation(); 
  }

  public function AjouterPresBDD(){
    $v= new AdminModel();
    $v->AjouterPresBDD(); 
  }

  public function SupprimerPresentation(){
    $v= new adminView();
    $v->SupprimerPresentation(); 
  }
  public function SupprimerPresBDD(){
    $v= new adminModel();
    $v->SupprimerPresBDD(); 
  }

  public function ModifierPresentation(){
    $v= new adminView();
    $v->ModifierPresentation(); 
  }

  public function modification_Pres(){
    $v= new adminView();
    $v->modification_Pres(); 
  }

  public function Afficher_Pres(){
    $v= new AdminModel();
    $r=$v->Afficher_Pres(); 
    return $r;
  }
  
  public function Maj2(){
    $v= new AdminModel();
    $v->Maj2(); 
  }
 
/****************************************************************************/

public function gestion_Utilisateurs(){
  $v= new adminView();
  $v->gestion_Utilisateurs(); 
}
public function gestion_ens(){
  $v= new adminView();
  $v->gestion_ens(); 
}
public function Ajouter_user(){
  $v= new adminView();
  $v->Ajouter_user(); 
}

public function Ajouter_user_BDD(){
  $v= new AdminModel();
  $v->Ajouter_user_BDD(); 
}

public function modifier_user(){
  $v= new AdminModel();
  $r=$v->modifier_user(); 
  return $r;
}

public function modifier_ens(){
  $v= new AdminModel();
  $r=$v->modifier_ens(); 
  return $r;
}

public function supprimer_user(){
  $v= new AdminModel();
  $v->supprimer_user(); 
}

public function User_Modif_view(){
  $v= new adminView();
  $v->User_Modif_view(); 
}

public function Ens_Modif_view(){
  $v= new adminView();
  $v->Ens_Modif_view(); 
}

public function Maj3(){
  $v= new AdminModel();
  $v->Maj3(); 
}

public function Maj6(){
  $v= new AdminModel();
  $v->Maj6(); 
}
/****************************************************************************/
public function gestion_Repas(){
  $v= new adminView();
  $v->gestion_Repas(); 
}

public function Ajouter_repas(){
  $v= new adminView();
  $v->Ajouter_repas(); 
}

public function Ajouter_repas_BDD(){
  $v= new AdminModel();
  $v->Ajouter_repas_BDD(); 
}

public function gestion_Restauration(){
  $v= new adminView();
  $v->gestion_Restauration(); 
} 

public function supprimer_repas(){
  $v= new AdminModel();
  $v->supprimer_repas(); 
}

public function modifier_repas(){
  $v= new AdminModel();
  $r=$v->modifier_repas(); 
  return $r;
}

public function Repas_Modif_view(){
  $v= new adminView();
  $v->Repas_Modif_view(); 
}
public function Maj4(){
  $v= new AdminModel();
  $v->Maj4(); 
}


}

