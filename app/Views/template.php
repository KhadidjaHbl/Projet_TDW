<?php

Class template{

public function main(){
    $this->entete_page();
    $this->menu();
}

//logo + liens vers les réseaux sociaux
public function entete_page(){?>
    <head>
    <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/style.css"/>
        <meta http-equiv="Pragma" content="no-cache">
        <link rel="stylesheet" href="./app/public/Css/style.css"/>
        <title>Ecole de formation</title>
        <meta name="Ecole de formation" content="Ecole de formation"/>

    <!--social media -->
    <div class="liens">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <a href="https://web.facebook.com/iqaschool" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div>
    <!--Logo-->
        <div class="logo"> <a href="./accueil"><img  class="logoimg"
        src="./public/images/logo.png" alt="logo"></a> </div>

    </head>
    <?php
  }

//le menu
public  function menu(){
?>
  <nav id="menu">
  <ul id="liist">
      <li>
      <a href="http://localhost/HABELHAMES_KHADIDJA_SIL2/accueil">
        <button class="Btn">Accueil</button>
      </a>
      </li>
      <li>
      <a href="./presentation">
        <button class="Btn">Présentation</button>
      </a>
      </li>  
      <li>
      <div class="Cycles_ens">
        <button class="Btn">Cycles d’enseignement</button>
          <div class="dropdown-content">
              <a href="./primaire">Cycle Primaire</a>
              <a href="./moyen">Cycle Moyen</a>
              <a href="./second">Cycle Secondaire</a>
        </div>
      </div>
      </li>
      <li>
      <a href="./eleve">
          <button class="Btn">Espace Elèves</button>
      </a>
      </li>
      <li>
      <a href="parent">
          <button class="Btn">Espace Parents</button>
      </a>
      </li>
      <li>
      <a href="./contact">
          <button class="Btn">Contact</button>
      </a>
      </li>  
  </ul>
  </nav>
<?php
}


//le pied de la page
public  function piedpage(){
?>
  <footer>
    <div class="navbar">
        <a href="#Présentation" class="active">Accueil</a>
        <a href="#Présentation" >Présentation</a>
        <a href="#Cycles d’enseignement">Cycles d’enseignement</a>
        <a href="#>Espace Elèves">Espace Elèves</a>
        <a href="#>Espace Parents">Espace Parents</a>
        <a href="#>Contact">Contact</a>
    </div>
  </footer> 
<?php
}

}
