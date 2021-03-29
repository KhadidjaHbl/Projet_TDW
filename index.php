<?php
require_once "./app/Models/session.php";
require_once "router.php";
require_once "./app/Controllers/primaireController.php";
require_once "./app/Controllers/moyenController.php";
require_once "./app/Controllers/secondController.php";
require_once "./app/Controllers/AccueilController.php";
require_once "./app/Controllers/contactController.php";
require_once "./app/Controllers/AdminController.php";
require_once "./app/Controllers/eleveController.php";
require_once "./app/Controllers/parentController.php";
require_once "./app/Views/eleveView.php";
require_once "./app/Views/parentView.php";
require_once "./app/Views/adminView.php";
require_once "./app/Controllers/ecoleController.php";


//Admin
route('/HABELHAMES_KHADIDJA_SIL2/admin', function () {
    $c = new AdminController();
    $c->Adminpage();
});

//Accueil
route('/HABELHAMES_KHADIDJA_SIL2/accueil', function () {
    $c = new AccueilController();
    $c->index();
});

//Presentation ecole
route('/HABELHAMES_KHADIDJA_SIL2/presentation', function () {
    $c = new ecoleController();
    $c->ecolePresentation();
});

//cycle primaire
route('/HABELHAMES_KHADIDJA_SIL2/primaire', function () {
    $c = new primaireController();
    $c->primaire();
});

//cycle moyen
route('/HABELHAMES_KHADIDJA_SIL2/moyen', function () {
    $c = new moyenController();
    $c->moyen();
});

//cycle Secondaire
route('/HABELHAMES_KHADIDJA_SIL2/second', function () {
    $c = new secondController();
    $c->second();
});

//contact
route('/HABELHAMES_KHADIDJA_SIL2/contact', function () {
    $c = new contactController();
    $c->contact();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_contact', function () {
    $c = new AdminController();
    $c->Ajouter_contact();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/gestion_diapo', function () {
    $c = new adminView();
    $c->gestion_diapo();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/maj_image', function () {
    $c = new AdminController();
    $c->maj_image();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/modifier_diaporama', function () {
    $c = new AdminController();
    $c->modifier_diaporama();
});
route('/HABELHAMES_KHADIDJA_SIL2/accueil/suite', function () {
    $c = new AccueilView();
    $c->suite();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_contact_BDD', function () {
    $c = new AdminController();
    $c->Ajouter_contact_BDD();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/modifier_contact', function () {
    $c = new AdminController();
    $c->modifier_contact();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/contact_modif', function () {
    $c = new AdminController();
    $c->contact_modif();
});
route('/HABELHAMES_KHADIDJA_SIL2/admin/Maj5', function () {
    $c = new AdminController();
    $c->Maj5();
});


route('/HABELHAMES_KHADIDJA_SIL2/admin/gestion_contact', function () {
    $c = new AdminController();
    $c->gestion_contact();
});

route('/HABELHAMES_KHADIDJA_SIL2/contact/contactForm', function () {
    $c = new AdminController();
    $c->contactForm();
});

//eleve space
route('/HABELHAMES_KHADIDJA_SIL2/eleve', function () {
    $c = new eleveController();
    $c->eleveSpace();
});

route('/HABELHAMES_KHADIDJA_SIL2/eleve/deconnexion', function () {
    $c = new eleveController();
    $c->deconnexion();
});

route('/HABELHAMES_KHADIDJA_SIL2/parent/deconnexion', function () {
    $c = new parentController();
    $c->deconnexion();
});
route('/HABELHAMES_KHADIDJA_SIL2/admin/deconnexion', function () {
    $c = new AdminController();
    $c->deconnexion();
});

route('/HABELHAMES_KHADIDJA_SIL2/eleve/activities', function () {
    $c = new eleveController();
    $c->activites();
});


route('/HABELHAMES_KHADIDJA_SIL2/eleve/AfficherEleveInfos', function () {
    $c = new eleveController();
    $c->AfficherEleveInfos();
});

route('/HABELHAMES_KHADIDJA_SIL2/eleve/checkEleve', function () {
    $c = new eleveController();
    $c->checkEleve();
});

route('/HABELHAMES_KHADIDJA_SIL2/eleve/ArticlesEleve', function () {
    $c = new eleveController();
    $c->ArticlesEleve();
});

route('/HABELHAMES_KHADIDJA_SIL2/eleve/Articles_primaire', function () {
    $c = new primaireController();
    $c->Articles_primaire();
});

route('/HABELHAMES_KHADIDJA_SIL2/eleve/Articles_second', function () {
    $c = new secondController();
    $c->Articles_second();
});


route('/HABELHAMES_KHADIDJA_SIL2/parent/Articles_parent', function () {
    $c = new parentController();
    $c->Articles_parent();
});

route('/HABELHAMES_KHADIDJA_SIL2/eleve/connexion', function () {
    $c = new eleveController();
    $c->connexion();
});

route('/HABELHAMES_KHADIDJA_SIL2/eleveView/eleve_infos', function () {
    $c = new eleveView();
    $c->eleve_infos();
});




//Parent space

route('/HABELHAMES_KHADIDJA_SIL2/parent', function () {
    $c = new parentController();
    $c->parentSpace();
});

route('/HABELHAMES_KHADIDJA_SIL2/parent/Afficher_tuteur_infos', function () {
    $c = new parentController();
    $c->Afficher_tuteur_infos();
});

route('/HABELHAMES_KHADIDJA_SIL2/parent/checkParent', function () {
    $c = new parentController();
    $c->checkParent();
});

route('/HABELHAMES_KHADIDJA_SIL2/parent/connexion', function () {
    $c = new parentController();
    $c->connexion();
});

route('/HABELHAMES_KHADIDJA_SIL2/parentView/tuteur_infos', function () {
    $c = new parentView();
    $c->tuteur_infos();
});



route('/HABELHAMES_KHADIDJA_SIL2/admin/authentifier', function () {
    $c = new AdminController();
    $c->authentifier();
});


route('/HABELHAMES_KHADIDJA_SIL2/admin/Categories', function () {
    $c = new AdminController();
    $c->Categories();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/gestionArticles', function () {
    $c = new AdminController();
    $c->gestionArticles();
});
route('/HABELHAMES_KHADIDJA_SIL2/admin/gestion_Utilisateurs', function () {
    $c = new AdminController();
    $c->gestion_Utilisateurs();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/gestion_ens', function () {
    $c = new AdminController();
    $c->gestion_ens();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_user', function () {
    $c = new AdminController();
    $c->Ajouter_user();
});
route('/HABELHAMES_KHADIDJA_SIL2/admin/AjouterArticle', function () {
    $c = new AdminController();
    $c->AjouterArticle();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/AjouterArticleBDD', function () {
    $c = new AdminController();
    $c->AjouterArticleBDD();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/SupprimerArticle', function () {
    $c = new AdminController();
    $c->SupprimerArticle();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/SupprimerArticleBDD', function () {
    $c = new AdminController();
    $c->SupprimerArticleBDD();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/ModifierArticle', function () {
    $c = new AdminController();
    $c->ModifierArticle();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/AfficherModif', function () {
    $c = new AdminController();
    $c->AfficherModif();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/ModificationView', function () {
    $c = new AdminController();
    $c->ModificationView();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Maj', function () {
    $c = new AdminController();
    $c->Maj();
});


route('/HABELHAMES_KHADIDJA_SIL2/admin/gestionPresentations', function () {
    $c = new AdminController();
    $c->gestionPresentations();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/AjouterPresentation', function () {
    $c = new AdminController();
    $c->AjouterPresentation();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/AjouterPresBDD', function () {
    $c = new AdminController();
    $c->AjouterPresBDD();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/SupprimerPresentation', function () {
    $c = new AdminController();
    $c->SupprimerPresentation();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/SupprimerPresBDD', function () {
    $c = new AdminController();
    $c->SupprimerPresBDD();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/ModifierPresentation', function () {
    $c = new AdminController();
    $c->ModifierPresentation();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/modification_Pres', function () {
    $c = new AdminController();
    $c->modification_Pres();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Afficher_Pres', function () {
    $c = new AdminController();
    $c->Afficher_Pres();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Maj2', function () {
    $c = new AdminController();
    $c->Maj2();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_user_BDD', function () {
    $c = new AdminController();
    $c->Ajouter_user_BDD();
});
route('/HABELHAMES_KHADIDJA_SIL2/admin/modifier_user', function () {
    $c = new AdminController();
    $c->modifier_user();
});
route('/HABELHAMES_KHADIDJA_SIL2/admin/supprimer_user', function () {
    $c = new AdminController();
    $c->supprimer_user();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/User_Modif_view', function () {
    $c = new AdminController();
    $c->User_Modif_view();
});


route('/HABELHAMES_KHADIDJA_SIL2/admin/Ens_Modif_view', function () {
    $c = new AdminController();
    $c->Ens_Modif_view();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Maj3', function () {
    $c = new AdminController();
    $c->Maj3();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Maj6', function () {
    $c = new AdminController();
    $c->Maj6();
});


route('/HABELHAMES_KHADIDJA_SIL2/admin/gestion_Restauration', function () {
    $c = new AdminController();
    $c->gestion_Restauration();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_repas_BDD', function () {
    $c = new AdminController();
    $c->Ajouter_repas_BDD();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_repas', function () {
    $c = new AdminController();
    $c->Ajouter_repas();
});
route('/HABELHAMES_KHADIDJA_SIL2/admin/modifier_repas', function () {
    $c = new AdminController();
    $c->modifier_repas();
});
route('/HABELHAMES_KHADIDJA_SIL2/admin/supprimer_repas', function () {
    $c = new AdminController();
    $c->supprimer_repas();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Maj4', function () {
    $c = new AdminController();
    $c->Maj4();
});

route('/HABELHAMES_KHADIDJA_SIL2/admin/Repas_Modif_view', function () {
    $c = new AdminController();
    $c->Repas_Modif_view();
});

route('/HABELHAMES_KHADIDJA_SIL2/primaire/restau', function () {
    $c = new primaireController();
    $c->restau();
});
route('/HABELHAMES_KHADIDJA_SIL2/primaire/Afficher_rest', function () {
    $c = new primaireController();
    $c->Afficher_rest();
});

route('/HABELHAMES_KHADIDJA_SIL2/primaire/Afficher_ens', function () {
    $c = new primaireController();
    $c->Afficher_ens();
});
route('/HABELHAMES_KHADIDJA_SIL2/primaire/list_enseignants', function () {
    $c = new primaireController();
    $c->list_enseignants();
});


route('/HABELHAMES_KHADIDJA_SIL2/moyen/Afficher_ens', function () {
    $c = new moyenController();
    $c->Afficher_ens();
});
route('/HABELHAMES_KHADIDJA_SIL2/moyen/list_enseignants', function () {
    $c = new moyenController();
    $c->list_enseignants();
});


route('/HABELHAMES_KHADIDJA_SIL2/second/Afficher_ens', function () {
    $c = new secondController();
    $c->Afficher_ens();
});
route('/HABELHAMES_KHADIDJA_SIL2/second/list_enseignants', function () {
    $c = new secondController();
    $c->list_enseignants();
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);