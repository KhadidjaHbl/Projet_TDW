<?php
require_once ('./app/Controllers/contactController.php');
require_once ('./app/Views/template.php');

Class contactView extends template{
  
public function contactez(){
  $this->entete_page();
  $this->corps_page2();
}

//corps de la page
public function corps_page2(){
  ?>
  <body>
    <?php
      $this->menu();
      $this->contact();
      $this->piedpage();
    ?>
  </body>
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
          <a href="#>Espace Parents">Espace Parents</a>
          <a href="#>Contact"  class="active">Contact</a>
      </div>
    </footer> 
  <?php
  }

//contactez nous
public function contact(){

$cntr=new contactController();
$qtf=$cntr->contactForm();?>

<section id="contact">
<div class="sectionheader">	<h1>CONTACT</h1></div><?php
foreach ($qtf as $row){?>

<pre>   <?php echo $row['Email'];?> </pre>
<pre>   <?php echo $row['Tel1']; ?> </pre>
<pre>   <?php echo $row['Tel2']; ?> </pre>
<pre>   <?php echo $row['Tel3']; ?> </pre>
<?php
}
?>
<pre> Ou bien contactez nous directement via le formulaire suivant </pre>
    
        <label for="checkcontact" class="contactbutton"><div class="mail"></div></label><input id="checkcontact" type="checkbox">

        <form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/contact/contactForm" method="post" class="contactform">
            <p class="input_wrapper"><input type="text" name="contact_nom" value=""  id ="contact_nom"><label for="contact_nom">NOM</label></p>
            <p class="input_wrapper"><input type="text" name="contact_email" value=""  id ="contact_email"><label for="contact_email">EMAIL</label></p>
            <p class="input_wrapper"><input type="text" name="contact_sujet" value=""  id ="contact_sujet"><label for="contact_sujet">SUJET</label></p>
            <p class="textarea_wrapper"><textarea name="contact_message" id="contact_message"></textarea></p>
            <p class="submit_wrapper"><input type="submit" value="ENVOYER"></p>			
        </form>
</section>
<?php
}

}
?>