<?php
require_once ('./app/Controllers/eleveController.php');
require_once ('./app/Views/template.php');


Class eleveView extends template{
  

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

    <a href="./eleve/connexion">
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
<form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/eleve/checkEleve" method="POST">
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

//Afficher les information d'un eleve
public  function eleve_infos(){?>
<head>
<link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/table.css">
</head>
<?php
$this->head();
?>
<body>

<a href="http://localhost/HABELHAMES_KHADIDJA_SIL2/eleve/deconnexion">
  <button>Se deconnecter </button>
</a>
<?php 
  try{
    $cntr=new eleveController();
    $infos=$cntr->AfficherEleveInfos();
   ?>
  
    <?php
    foreach ($infos as $row){
    ?>
    <form>
    <h2> Informations Personnelles </h2>
      <div class="info">
            <p><?php echo 'ID : '.$row['ID']; ?></p>
            <p><?php echo 'Nom : '.$row['Nom']; ?></p>
            <p><?php echo 'Prenom : '.$row['Prenom']; ?></p>
            <p><?php echo 'Adresse : '.$row['Adresse'];?></p>
            <p><?php echo 'Tel1 : '.$row['Tel1'];?></p> 
            <p><?php echo 'Tel2 : '.$row['Tel2'];?></p> 
            <p><?php echo 'Date de naissance : '.$row['DateNaiss']; ?></p>
            <p><?php echo 'Cycle : '.$row['cycle']; ?></p>
            <p><?php echo 'Classe : '.$row['classe']; ?></p>
      </div>
    <form>
    <?php 
    }?>

    <table class="styled-table">
    <thead>
        <tr>
        <th>Activite ID</th>
        <th>Activite</th>
        </tr>
    </thead><?php
         
    $cntr=new eleveController();
    $inf=$cntr->activities();?>
    <h2> Activites Extrascolaire </h2>

    <tbody><?php
        foreach ($inf as $row){?>
          <tr>
            <td> <b><?php echo $row['activiteID']; ?></b></td>
            <td><?php echo $row['nomActivite']; ?></td>
          </tr><?php }?>  
    </tbody>
    </table>


    <table class="styled-table">
    <thead>
        <tr>
        <th>Nom Module</th>
        <th>Note</th>
        </tr>
    </thead><?php
         
    $cntr=new eleveController();
    $inf=$cntr->notes();?>
    <h2> Affichage des Notes </h2>

    <tbody><?php
        foreach ($inf as $row){?>
          <tr>
            <td> <b><?php echo $row['nomModule']; ?></b></td>
            <td><?php echo $row['note']; ?></td>
          </tr><?php }?>  
    </tbody>
    </table>
<?php
}
  catch(Exception $e){
    echo 'erreur'.$e->getMessage();
  }

}


//les articles qui consernent les eleves
public  function Articles(){

  $cntr=new eleveController();
  $qtf=$cntr->ArticlesEleve();?>
  
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
//le pied de la page
public  function piedpage(){
  ?>
    <footer>
      <div class="navbar">
          <a href="#Présentation">Accueil</a>
          <a href="#Présentation" >Présentation</a>
          <a href="#Cycles d’enseignement">Cycles d’enseignement</a>
          <a href="#>Espace Elèves"  class="active">Espace Elèves</a>
          <a href="#>Espace Parents" >Espace Parents</a>
          <a href="#>Contact" >Contact</a>
      </div>
    </footer> 
  <?php
  }
}

?>