<?php
require_once ('./app/Controllers/AccueilController.php');
require_once ('./app/Controllers/ecoleController.php');
require_once ('./app/Views/template.php');


Class AccueilView extends template{

public function index(){
    $this->main();
    $this->corps_page();

}

//corps de la page
public function corps_page(){
  ?>
  <body>
    <?php
      $this->diaporama();
      $this->Articles();
      $this->piedpage();
    ?>
  </body>
  <?php
}

//les articles 
public  function Articles(){
try{
$cntr=new AccueilController();
$qtf=$cntr->Articles();?>
<?php

foreach ($qtf as $row)
{?>
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
      <form method="post" action='http://localhost/HABELHAMES_KHADIDJA_SIL2/accueil/suite'>
        <input type="hidden" value="<?php echo $row['articleID'];?>" name="id"><br>
        <button type="submit" name="submit" class="suite">Afficher la suite...</button>
      </form>
      </div>
</div>
<?php
}?>}
<button type="submit" name="submit" class="suite">Afficher les articles les plus anciens</button>
<?php

} 
catch(Exception $e){
    echo 'erreur'.$e->getMessage();
}
}

//diaporama
public  function diaporama()
{
$cntr=new AccueilController();
$qtf=$cntr->diaporama();?>
<div class="diaporama">
    <div class="slides"> 
    <?php
    foreach ($qtf as $row){
      $var=$row['image'];?>
      <div class="slide"><img src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/<?php echo $var;?>"
       width="1100px" height="420px"></div>
    <?php
    }?>
    </div>
  </div>
<?php
}



public  function suite(){
$this->menu();?>
  <head>
  <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/style.css"/>
      <meta http-equiv="Pragma" content="no-cache">
      <link rel="stylesheet" href="./app/public/Css/style.css"/>
      <title>Ecole de formation</title>
      <meta name="Ecole de formation" content="Ecole de formation"/>
  </head><?php
  $cntr=new AccueilController();
  $qtf=$cntr->suite();?>
  <?php
foreach ($qtf as $row){?>
?>
  <div id="content">
  <ul>
  <div>
  <li>
          <p>
          <div id="image_container" class="">
              <h2 class="ch1" ><?php echo $row['titre']; ?></h2>
              <?php $var=$row['image'];?>
              <img class="chamb1" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/<?php echo $var; ?>">
              <p><?php echo $row['txt']; ?></p> 
          </div>
          </p>      
  </li>
  </div>
  </ul>
  </div>
<?php
}
}}
