<?php
require_once ('./app/Controllers/ecoleController.php');
require_once ('./app/Views/template.php');

Class ecoleView extends template{
  
public function template(){
  $this->entete_page();
  $this->corps_page2();
}

//corps de la page
public function corps_page2(){
  ?>
  <body>
    <?php
      $this->menu();
      $this->Pres();
      $this->piedpage();
    ?>
  </body>
  <?php
}


//les articles 
public  function Pres(){
  try{

  $cntr=new ecoleController();
  $qtf=$cntr->presentation();?>
  <article><?php
  foreach ($qtf as $row){?>

<div id="content">
<ul>
<div>
<li>
        <p>
        <div id="image_container" class="">
            <h2 class="ch1" ><?php echo $row['title']; ?></h2>
            <p><?php echo $row['texte']; ?></p>
            <?php
            $var=$row['image'];?>
          <img class="chamb1" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/<?php echo $var; ?>">
        </div>
        </p>      
</li>
</div>
</ul>
</div>
<?php 
}
} 
  catch(Exception $e){
    echo 'erreur'.$e->getMessage();
  }
}

//le pied de la page
public  function piedpage(){
  ?>
    <footer>
      <div class="navbar">
          <a href="#Présentation">Accueil</a>
          <a href="#Présentation"   class="active" >Présentation</a>
          <a href="#Cycles d’enseignement">Cycles d’enseignement</a>
          <a href="#>Espace Elèves">Espace Elèves</a>
          <a href="#>Espace Parents">Espace Parents</a>
          <a href="#>Contact">Contact</a>
      </div>
    </footer> 
  <?php
  }
}
?>