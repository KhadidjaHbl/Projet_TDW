<?php
require_once ('./app/Controllers/secondController.php');
require_once ('./app/Views/template.php');


Class secondView extends template{
  

public function index(){
    $this->entete_page();
    $this->corps_page();
}


//corps de la page
public function corps_page(){
  ?>
  <body>
    <?php
      $this->menu();
      $this->part1();
      $this->part2();
      $this->piedpage();
    ?>
  </body>
  <?php
}

public  function part1(){
  ?>
<div class="div1">
    <div class="card">
      <div class="image">
        <img  src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/edt.jpg">
      </div>
      <div class="title">
        <h1>Emplois de temps</h1>
      </div>
      <div class="des">
        <p>bla bla bla</p>
      <button class="suite"> Afficher l'emploi du temps </button>
     </div>
</div>


  <div class="card">
      <div class="image">
        <img src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/ens.png">
      </div>
      <div class="title">
        <h1>Liste des enseignants</h1>
      </div>
      <div class="des">
        <p>bla bla bla</p>
      <a href="./primaire/Afficher_ens">
      <button class="suite">Afficher la liste des enseignants</button>
      </a>
      </div>
  </div>
        <meta http-equiv="Pragma" content="no-cache">

  <div class="card">
      <div class="image">
        <img src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/pratique.jpg"></a>
      </div>
      <div class="title">
        <h1>Informations Pratiques</h1>
      </div>
      <div class="des">
        <p>bla bla bla</p>
      <button class="suite">Afficher les informations Pratiques</button>
      </div>
  </div>

  <div class="card">
      <div class="image">
        <img  src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/restau.jpg">
      </div>
      <div class="title">
        <h1>Restauration</h1>
      </div>
      <div class="des">
        <p>bla bla bla</p>
      <a href="./primaire/Afficher_rest">
      <button class="suite">Afficher la restauration</button>
      </A>
      </div>
  </div>
</div>

<?php 
}
/*********************************************************************************************/

public  function part2(){

  $cntr=new secondController();
  $qtf=$cntr->Articles_second();?>
  
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

/*********************************************************************************************/

public function Afficher_rest(){?>
<head>
<link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/tableau.css">
</head>
<body>
<h1> <center>Liste des Repas<center> </h1>
<table class="styled-table">
          <thead>
              <tr>
              <th>Jour</th>
              <th>Repas</th>
              <th>Dessert</th>
              </tr>
          </thead><?php
               
          $cntr=new primaireController();
          $qtf=$cntr->restau();?>
          <tbody><?php
              foreach ($qtf as $row){?>
                <tr>
                  <td> <b><?php echo $row['Jour']; ?></b></td>
                  <td><?php echo $row['Repas']; ?></td>
                  <td><?php echo $row['dessert']; ?></td>      
                </tr><?php }?>  
          </tbody>
</table>
</body>
<?php
} 
/*******************************************************************************************/
public function Afficher_ens(){
?>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/ens.css">
</head>
  <body>
<h1> <center>Liste des Ensiegnants<center> </h1>
  <table class="styled-table">
            <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Num Tel</th>
                  <th>Adresse Email</th>
                  <th>Module</th>
                </tr>
            </thead><?php
                 
            $cntr=new primaireController();
            $qtf=$cntr->list_enseignants();?>
            <tbody><?php
                foreach ($qtf as $row){?>
                  <tr>
                    <td><?php echo $row['Nom']; ?></td>
                    <td><?php echo $row['Prenom']; ?></td>
                    <td><?php echo $row['Tel1']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['nomModule']; ?></td>
                  </tr><?php }?>  
            </tbody>
  </table>
  </body>
  <?php
}
/*******************************************************************************************/

//le pied de la page
public  function piedpage(){
?>
  <footer>
    <div class="navbar">
        <a href="#Présentation" >Accuiel</a>
        <a href="#Présentation" >Présentation</a>
        <a href="#Cycles d’enseignement" class="active">Cycles d’enseignement</a>
        <a href="#>Espace Elèves">Espace Elèves</a>
        <a href="#>Espace Parents">Espace Parents</a>
        <a href="#>Contact">Contact</a>
    </div>
  </footer> 
<?php
}

}
?>