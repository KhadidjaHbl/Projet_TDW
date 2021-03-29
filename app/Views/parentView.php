<?php
require_once ('./app/Controllers/eleveController.php');
require_once ('./app/Views/template.php');


Class parentView extends template{
  

public function index(){
    $this->entete_page();
    $this->corps_page();
}

public function head(){?>
  <head>
      <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/form.css"/>
      <meta http-equiv="Pragma" content="no-cache">
      <title>Ecole de formation</title>
      <meta name="Ecole de formation" content="Ecole de formation"/>
  </head>
<?php
}

public function head2(){?>
  <head>
      <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/style.css"/>
      <meta http-equiv="Pragma" content="no-cache">
  </head>
<?php
}


//logo + liens vers les réseaux sociaux
public function entete_page(){
$this->head2();
?>
<head>
    <!--Logo-->
        <div class="logo"> <a href="#."><img  class="logoimg" 
        src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/logo.png" alt="logo"></a> </div>

    <!--social media -->
    <div class="liens">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div>

    <a href="./parent/connexion">
    <button class="login">Se Connecter</button>
    </a>

</head>
<?php
}

//corps de la page
public function corps_page(){
  ?>
  <body>
    <?php
      $this->head2();
      $this->menu();
      $this->Articles();
      $this->piedpage();
    ?>
  </body>
  <?php
}


public function connexion(){

$this->head();?>
<form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/parent/checkParent" method="POST">
        <div class="logo">
             <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/eleve.png" alt="logo"></a>
        </div>
     	<h2>Se connecter</h2>
     	<label>Email</label>
     	<input type="email" name="email" placeholder="email.." required><br>
        <label>Mot de Passe</label>
     	<input type="password" name="password" placeholder="Mot de Passe.." required><br>
     	<button type="submit" name="submit">Connexion</button>
</form>
<?php
}

//le pied de la page
public  function piedpage(){
  ?>
    <footer>
      <div class="navbar">
          <a href="#Présentation">Accueil</a>
          <a href="#Présentation" >Présentation</a>
          <a href="#Cycles d’enseignement">Cycles d’enseignement</a>
          <a href="#>Espace Elèves">Espace Elèves</a>
          <a href="#>Espace Parents"  class="active">Espace Parents</a>
          <a href="#>Contact" >Contact</a>
      </div>
    </footer> 
  <?php
  }

//Afficher les information d'un eleve
public  function tuteur_infos(){
$this->head();
?>
<body>
<a href="http://localhost/HABELHAMES_KHADIDJA_SIL2/eleve/deconnexion">
  <button>Se deconnecter </button>
</a>
<?php 
  try{
    $cntr=new parentController();
    $infos=$cntr->Afficher_tuteur_infos();
   ?>
    <?php
    foreach ($infos as $row){
    ?><form>

    <h2> Informations Personnelles </h2>
      <div class="info">
            <p><?php echo 'ID : '.$row['ID']; ?></p>
            <p><?php echo 'Nom : '.$row['Nom']; ?></p>
            <p><?php echo 'Prenom : '.$row['Prenom']; ?></p>
            <p><?php echo 'Adresse : '.$row['Adresse'];?></p>
            <p><?php echo 'Tel1 : '.$row['Tel1'];?></p> 
            <p><?php echo 'Tel2 : '.$row['Tel2'];?></p> 
            <p><?php echo 'Tel3 : '.$row['Tel3'];?></p> 
            <p><?php echo 'Date de naissance : '.$row['DateNaiss']; ?></p>
      </div>

     <?php 

    }} 
    catch(Exception $e){
      echo 'erreur'.$e->getMessage();
    }
?>
       
</body>
<?php
}


//les articles qui consernent les parents d'eleves
public  function Articles(){

  $cntr=new parentController();
  $qtf=$cntr->Articles_parent();?>
  
  <?php
  foreach ($qtf as $row){?>
    <div class="card">
        <div class="image"><?php
        $var=$row['image'];?>
        <img src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/<?php echo $var; ?>">
        </div>
        <div class="title">
          <h1><?php echo $row['titre']; ?></h1>
        </div>
        <div class="des">
          <p><?php echo $row['description']; ?></p>
        <button class="suite">Afficher la suite...</button>
        </div>
    </div>
  
  <?php 
}
?></body>
<?php
} 


}
?>