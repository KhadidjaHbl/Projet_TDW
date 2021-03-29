<?php
require_once ('./app/Controllers/AdminController.php');
require_once ('./app/Controllers/AccueilController.php');


Class adminView{

public function Adminpage(){
    $this->header();
    $this->authentifier();
}

/*******************************************************************************************/
public function header(){
?>
<head>
  <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/admin.css"/>
  <title></title>
</head>
<?php
}
/*******************************************************************************************/
public function authentifier(){
?>

<body class="auth">
<form action="./admin/authentifier" method="POST">
        <div class="logo">
             <img  class="logoimg" src="./public/images/logo.png" alt="logo"></a> </div>
        </div>
     	<h2>Se connecter</h2>
     	<label>Nom d'utilisateur</label>
     	<input type="text" name="uname" placeholder="Nom d'utilisateur.." required><br>
        <label>Mot de Passe</label>
     	<input type="password" name="password" placeholder="Mot de Passe.." required><br>
     	<button type="submit" name="submit">Connexion</button>
</form>
</body>
<?php
}
/*******************************************************************************************/
public function Categories(){
        ?>
<head>
    <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/style.css"/>
     <title>Espace Admin</title>
</head>
<body> 

          <div class="card">
              <div class="image">
                <img   src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/article.jpg">
              </div>
              <div class="title">
                <h1>Gestion Des Articles</h1>
              </div>
              <div class="des">
                <p>Vous pouvez faire la gestion des articles</p>
              </div>
              <a href="./gestionArticles" >
              <button>Afficher</button>
              </a>
          </div>
        
        
          <div class="card">
              <div class="image">
                <img  src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/form4.jpg">
              </div>
              <div class="title">
                <h1>Gestion de présentation de l'ecole</h1>
              </div>
              <div class="des">
                <p>Vous pouvez faire la gestion de présentation de l'école</p>
              </div>
            <a href="./gestionPresentations" >
           <button>Afficher</button>
           </a>
          </div>
        
          <div class="card">
              <div class="image">
                <img src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/edt.jpg"></a>
              </div>
              <div class="title">
                <h1>Gestion des emplois du temps</h1>
              </div>
              <div class="des">
                <p> <p>Vous pouvez faire la gestion des EDT</p></p>
              </div>
              <button>Afficher</button>
          </div>

          <div class="card">
              <div class="image">
                <img src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/ens.png"></a>
              </div>
              <div class="title">
                <h1>Gestion des enseignants</h1>
              </div>
              <div class="des">
                <p>Vous pouvez faire la gestion des enseignants</p>
              </div>
              <a href="./gestion_ens" >
              <button>Afficher</button>
              </a>
          </div>
           
          <div class="card">
                <div class="image">
                        <img  src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/user.png">
                </div>
                <div class="title">
                  <h1>Gestion des utilisateurs</h1>
                </div>
                <div class="des">
                    <p>Vous pouvez faire la gestion des utilisateurs</p>
                </div>
                <a href="./gestion_Utilisateurs">
                <button>Afficher</button>
                </a>

          </div>

          <div class="card">
              <div class="image">
                <img  src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/restau.jpg">
              </div>
              <div class="title">
                <h1>Gestion de la Restauration</h1>
              </div>
              <div class="des">
                <p>Vous pouvez faire la gestion de la restauration</p>
              </div>
              <a href="./gestion_Restauration">
              <button >Afficher</button>
              </a>
          </div>
   

          <div class="card">
                <div class="image">
                        <img  src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/contact.png">
                </div>
                <div class="title">
                        <h1>Gestion de la page contact</h1>
                </div>
                <div class="des">
                        <p>Vous pouvez faire la gestion de la page contact</p>
                </div>
                <a href="./gestion_contact">
                <button>Afficher</button>
                </a>
          </div>

          
          <div class="card">
                <div class="image">
                        <img  src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/param.jpg">
                </div>
                <div class="title">
                        <h1>Paramètres</h1>
                </div>
                <div class="des">
                        <p>Vous pouvez ici modifier les images de diaporama</p>
                </div>
                <a href="./gestion_diapo">
                <button>Afficher</button>
                </a>
          </div>
<a href="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/deconnexion">
<button type="submit" name="submit">Se deconnecter</button>
</a>   

<a href="http://localhost/HABELHAMES_KHADIDJA_SIL2/accueil">
<button type="submit" name="submit">Aller Vers le site web</button>
</a> 

</body>
<?php 
}

/*******************************************************************************************/
//Parametres de diaporama

public function gestion_diapo(){?>
<html>
<head>

<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/diapo.css"/>
</head>

<body>
<?php
$cntr=new AdminController();
$qtf=$cntr->modifier_diaporama();
?>
<div class="row">
<?php
foreach ($qtf as $row){ 
   ?>

</body>
</html>


   <div class="col-xs-3">
    <img src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/<?php echo $row['image']; ?>" class="img-rounded" width="250px" height="250px" />
    <p class="page-header">
    <span>
    <form action ="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/maj_image" method="POST" enctype="multipart/form-data">
    
    <input type="file" name="image" required>
    <input type="hidden" value="<?php echo $row['id'];?>" name="id"><br>
    <button name="submit" >modifier</button>
    </form>
    </span>
    </p>
   </div>       
   <?php
  }

}





//Gestion de la page contact
public function gestion_contact(){
  
  $this->Tableheader();
  ?>
  <body>
  <div class="container">
  <div class="row">
              <div class="col-md-12 header"></div>
                <div class="col-md-10 col-md-offset-1">
                    <table class="">
                        <a href="./Ajouter_contact">
                          <button type="button" class="btnn">Ajouter</button>
                        </a>
                    </table>
                </div>
              </div>
  </div>
  </div>
  <div class="container-xl">
      <div class="table-responsive">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-8"><h2>Gestion de <b> La Page contact</b></h2></div>
                      <div class="col-sm-4">
                          <div class="search-box">
                              <i class="material-icons">&#xE8B6;</i>
                              <input type="text" action ='post'svalue="Search" name="search" class="form-control"  placeholder="Search&hellip;">
                          </div>
                      </div>
                  </div>
              </div>
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Email <i class="fa fa-sort"></i></th>
                          <th>Tel1</th>
                          <th>Tel2 </th>
                          <th>Tel3 </th>
                          <th>Modifier </th>
                      </tr>
                  </thead><?php
                  $cntr=new AdminModel();
                  $qtf=$cntr->afficher_contats();?>
                  <tbody><?php
                  foreach ($qtf as $row){
                 ?>
                      <tr>
                      <?php
                          $id= $row['id'];?>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['Email'];?></td>
                          <td><?php echo $row['Tel1'];?></td>
                          <td><?php echo $row['Tel2'];?></td>
                          <td><?php echo $row['Tel3'];?></td>
                          
                          <td>
                          <form method="post" action="./contact_modif" >     
                           <input type="hidden" value="<?php echo $row['id'];?>" name="id" placeholder="Type.." required><br>
                          <button name="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></button>
                          </td>
                        </form>         
                      </tr>
                  <?php }?>  
                  </tbody>
              </table>
          </div>
      </div>  
  </div>   
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  <?php
}
/************************************************************************************ */
public function contact_modif(){
  $this->header2();
try{
  
  $cntr=new AdminController();
  $qtf=$cntr->modifier_contact();

foreach ($qtf as $row){
  ?>
  <body>
  <form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Maj5" method="POST" enctype="multipart/form-data">
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/contact.png" alt="logo"></a> </div>
          </div>
          
         <h2>Modifier Contact</h2>
  
          <label>ID</label>
          <input  value =<?php echo $row['id'];?> type="text" name="id" placeholder="Article ID.." value required><br>
  
          <label>Email</label>
          <input  value =<?php echo $row['Email'];?> type="text" name="email" placeholder="Email.." value required><br>
         
          <label >Tel1</label>
          <input  value =<?php echo $row['Tel1'];?> type="text" name="Tel1" placeholder="Tel1.." value required><br>
           </textarea><br>
  
          <label>Tel2</label>
          <input  value =<?php echo $row['Tel2'];?> type="text" name="Tel2" placeholder="Tel2.." value required><br>
              
          
          <label>Tel3</label>
          <input  value =<?php echo $row['Tel3'];?> type="text" name="Tel3" placeholder="Tel3.." value required ><br>
                                  
        <?php
         ?>
        <button  name="submit">Modifier contact</button>
  </form>
  </body>
  <?php
  }}
  catch(Exception $e)
  {
      echo 'erreur'.$e->getMessage();
  }
  }

//Gestion des utilisateurs
public function Tableheader(){
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/Users.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>
<?php
}
/******************************************************************************************* */

public function contactHeader(){
  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion des Utilisateurs</title>
    <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/cont.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  </head>
  <?php
  }
/**********************************************************************************************/

public function Tableheader2(){
  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion des Utilisateurs</title>
    <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/food.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  </head>
  <?php
  }
/***********************************************************************************************/  
public function gestion_Utilisateurs(){
$this->Tableheader();
?>
<body>
<div class="container">
<div class="row">
            <div class="col-md-12 header"></div>
              <div class="col-md-10 col-md-offset-1">
                  <table class="">
                      <a href="./Ajouter_user">
                        <button type="button" class="btnn">Ajouter Utilisateur</button>
                      </a>
                        <button type="button" class="btni" onclick="print()">Imprimer</button>
                  </table>
              </div>
            </div>
</div>
</div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Gestion des <b>Utilisateurs</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" action ='post'svalue="Search" name="search" class="form-control"  placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom <i class="fa fa-sort"></i></th>
                        <th>Prenom</th>
                        <th>Adresse </th>
                        <th>Tel1</th>
                        <th>Tel2 </th>
                        <th>Tel3</th>
                        <th>Email </th>
                        <th>Type </th>
                        <th>DateNaiss </th>
                        <th>Actions</th>
                    </tr>
                </thead><?php
                $cntr=new AdminModel();
                $qtf=$cntr->Afficher_users();?>
                <tbody><?php
                foreach ($qtf as $row){
               ?>
                    <tr>
                    <?php
                        $id= $row['ID'];?>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['Nom'];?></td>
                        <td><?php echo $row['Prenom'];?></td>
                        <td><?php echo $row['Adresse'];?></td>
                        <td><?php echo $row['Tel1'];?></td>
                        <td><?php echo $row['Tel2'];?></td>
                        <td><?php echo $row['Tel3'];?></td>
                        <td><?php echo $row['Email'];?></td>
                        <td><?php echo $row['Type'];?></td>
                        <td><?php echo $row['DateNaiss'];?></td>
                        <td>
                        
                        <form method="post" action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/supprimer_user" >     
                         <input type="hidden" value="<?php echo $row['ID'];?>" name="id" placeholder="Type.." required><br>
                        <button name="submit" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                        </form>
                        <form method="post" action="./User_Modif_view" >     
                         <input type="hidden" value="<?php echo $row['ID'];?>" name="id" placeholder="Type.." required><br>
                        <button name="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></button>
                        </form>
                        </td>
                    </tr>
                <?php }?>  
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text"></div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  
</div>   
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
<?php
}

/*******************************************************************************************/
public function gestion_ens(){
  $this->Tableheader();
  ?>
  <body>
  <div class="container">
  <div class="row">
              <div class="col-md-12 header"></div>
                <div class="col-md-10 col-md-offset-1">
                    <table class="">
                        <a href="./Ajouter_user">
                          <button type="button" class="btnn">Ajouter Utilisateur</button>
                        </a>
                          <button type="button" class="btni" onclick="print()">Imprimer</button>
                    </table>
                </div>
              </div>
  </div>
  </div>
  <div class="container-xl">
      <div class="table-responsive">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-8"><h2>Gestion des <b>Enseignants</b></h2></div>
                      <div class="col-sm-4">
                          <div class="search-box">
                              <i class="material-icons">&#xE8B6;</i>
                              <input type="text" action ='post'svalue="Search" name="search" class="form-control"  placeholder="Search&hellip;">
                          </div>
                      </div>
                  </div>
              </div>
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                      <tr>
                         <th>ID</th>
                          <th>Nom <i class="fa fa-sort"></i></th>
                          <th>Prenom</th>
                          <th>Jour </th>
                          <th>Heures de reception </th>
                          <th>Actions</th>
                      </tr>
                  </thead><?php
                  $cntr=new AdminModel();
                  $qtf=$cntr->Afficher_ens();?>
                  <tbody><?php
                  foreach ($qtf as $row){
                 ?>
                      <tr>
                      <?php
                          $id= $row['ID'];?>
                          <td><?php echo $row['ID'];?></td>
                          <td><?php echo $row['Nom'];?></td>
                          <td><?php echo $row['Prenom'];?></td>
                          <td><?php echo $row['Nom'];?></td>
                          <td><?php echo $row['Jour'];?></td>
                          <td><?php echo $row['Heure'];?></td>
                          <td>
                          
                          <form method="post" action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/supprimer_user" >     
                           <input type="hidden" value="<?php echo $row['ID'];?>" name="id" placeholder="Type.." required><br>
                          <button name="submit" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                          </form>
                          <form method="post" action="./Ens_Modif_view" >     
                           <input type="hidden" value="<?php echo $row['ID'];?>" name="id" placeholder="Type.." required><br>
                          <button name="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></button>
                          </form>
                          </td>
                      </tr>
                  <?php }?>  
                  </tbody>
              </table>
              <div class="clearfix">
                  <div class="hint-text"></div>
                  <ul class="pagination">
                      <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                      <li class="page-item"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item active"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link">5</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>  
  </div>   
           
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  <?php
  }
  






public function header2(){
  ?>
  <head>
    <link rel="stylesheet" href="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/Css/gestion.css"/>
    <title></title>
  </head>
  <?php
  }

/*******************************************************************************************/
public function Ajouter_user(){
$this->header2();
?>
<form  action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_user_BDD"  method="POST">
        <div class="logo">
             <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/user2.png" alt="logo"></a> </div>
        </div>

     	<h2>Ajouter Utilisateur</h2>
       <label>Type</label>
        <input type="text" name="type" placeholder="Type.." required><br>

        <label>Nom</label>
        <input type="text" name="nom" placeholder="Nom.." required><br>

        <label>Prenom</label>
        <input type="text" name="prenom" placeholder="Prenom.." required><br>

        <label>Adresse</label>
        <input type="text" name="adresse" placeholder="Adresse.." required><br>
        
        <label>Tel1</label>
        <input type="tetx" name="tel1" placeholder="Tel1.." required><br>
        <label>Tel2</label>
        <input type="text" name="tel2" placeholder="Tel2.." ><br>
        <label>Tel3</label>
        <input type="text" name="tel3" placeholder="Tel3.." ><br>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email.." required ><br>
        <label>Date de Naissance</label>
        <input type="date" name="datenaiss" placeholder="Date de Naissance.." ><br>

      <button  name="submit">Ajouter Utilisateur</button>
</form>
</body>

<?php
}

/*******************************************************************************************/

public function User_Modif_view(){
$this->header2();
try{
  $cntr=new AdminController();
  $qtf=$cntr->modifier_user();

foreach ($qtf as $row){
  ?>
  <body>
  <form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Maj3" method="POST" enctype="multipart/form-data">
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/user2.png" alt="logo"></a> </div>
          </div>
          
         <h2>Modifier Utilisateur</h2>
  
          <label>ID</label>
          <input  value =<?php echo $row['ID'];?> type="text" name="id" placeholder="Article ID.." value required><br>
  
          <label>Nom</label>
          <input  value =<?php echo $row['Nom'];?> type="text" name="nom" placeholder="nom.." value required><br>
         
          <label >Prenom</label>
          <input  value =<?php echo $row['Prenom'];?> type="text" name="prenom" placeholder="prenom.." value required><br>
           </textarea><br>
  
          <label>Adresse</label>
          <input  value =<?php echo $row['Adresse'];?> type="text" name="Adresse" placeholder="Adresse.." value required><br>
              
          
          <label>Tel1</label>
          <input  value =<?php echo $row['Tel1'];?> type="text" name="Tel1" placeholder="Adresse.." value required ><br>
                  
               
          <label>Tel2</label>
          <input  value =<?php echo $row['Tel2'];?> type="text" name="Tel2" placeholder="Tel2.." value ><br>
                  
               
          <label>Tel3</label>
          <input  value ="<?php echo $row['Tel3'];?>"type="text" name="Tel3" placeholder="Tel3.." value ><br>
                  
               
          <label>Email</label>
          <input  value =<?php echo $row['Email'];?> type="text" name="email" placeholder="Adresse.." value required><br>
                  
               
          <label>Type</label>
          <input  value =<?php echo $row['Type'];?> type="text" name="type" placeholder="Type.." value required><br>
             
          <label>Date De Naissance</label>
          <input  value =<?php echo $row['DateNaiss'];?> type="text" name="Datenaiss" placeholder="Date De Naissance.." value required><br>
                     
        <?php
         ?>
        <button  name="submit">Modifier l'utilisateur</button>
  </form>
  </body>
  <?php
  }}
  catch(Exception $e)
  {
      echo 'erreur'.$e->getMessage();
  }
  }
/********************************************************************************************/

public function Ens_Modif_view(){
  $this->header2();
  try{
    $cntr=new AdminController();
    $qtf=$cntr->modifier_Ens();
  
  foreach ($qtf as $row){
    ?>
    <body>
    <form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Maj6" method="POST" enctype="multipart/form-data">
            <div class="logo">
                 <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/user2.png" alt="logo"></a> </div>
            </div>
            
           <h2>Modifier Enseignant</h2>
           <label>ID</label>
            <input  value =<?php echo $row['ID'];?> type="text" name="id" placeholder="ID.." value required><br>
           
    
            <label>Nom</label>
            <input  value =<?php echo $row['Nom'];?> type="text" name="nom" placeholder="nom.." value required><br>
           
            <label >Prenom</label>
            <input  value =<?php echo $row['Prenom'];?> type="text" name="prenom" placeholder="prenom.." value required><br>
             </textarea><br>
                    
                 
            <label>Jour </label>
            <input  value =<?php echo $row['Jour'];?> type="text" name="jour" placeholder="Jour.." value required><br>
                    
                 
            <label>Heure de reception</label>
            <input  value =<?php echo $row['Heure'];?> type="text" name="heure" placeholder="Heure.." value required><br>
                  
          <?php
           ?>
          <button  name="submit">Modifier</button>
    </form>
    </body>
    <?php
    }}
    catch(Exception $e)
    {
        echo 'erreur'.$e->getMessage();
    }
    }
  


/*******************************************************************************************/
//Gestion des articles
public function gestionArticles(){
$this->header();
?>
<body>
<div class="btn-group">
                <h1 class="gest"> Gestion des Articles</h1>
                <a href="./AjouterArticle">
                    <button>Ajouter Article</button>  
                </a> 
                <a href="./ModifierArticle">         
                    <button>Modifier Article</button>
                </a> 
                <a href="./SupprimerArticle">         
                    <button>Supprimer Article</button>
                </a>
<a href="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Categories">
<button id="categ" type="submit" name="submit">Allez vers categories</button>
</a>  
</div>

</body>
<?php
}
/*******************************************************************************************/
public function AjouterArticle(){
$this->header();
?>
<body>
<form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/AjouterArticleBDD" method="POST" enctype="multipart/form-data">
        <div class="logo">
             <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/article.jpg" alt="logo"></a> </div>
        </div>

     	<h2>Ajouter Article</h2>
        <label>Titre</label>
        <input type="text" name="titre" placeholder="titre.." required><br>

        <label >Description</label>
        <textarea rows = "5" cols = "60" name = "Description" placeholder="Description.." required>
         </textarea><br>

        <label>Image</label>
        <input type="file" name="image" placeholder="Image.." required><br>

        <label>Les utilisateurs les plus concernés</label>
        <ul>
        <li>
        <label class="container">Tous
          <input type="checkbox" name='users[]'  value="Tous" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Enseignants
          <input type="checkbox" name='users[]'  value="Enseignants" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Primaire
          <input type="checkbox" name="users[]"  value="Primaire" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Moyen
          <input type="checkbox" name="users[]"  value="Moyen" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Secondaire
          <input type="checkbox" name="users[]"  value="Secondaire" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Parents
          <input type="checkbox" name="users[]"  value="Parents" />
          <span class="checkmark"></span>
        </label>
        </li>
       </ul>
      <button  name="submit">Ajouter Article</button>
</form>
</body>
<?php
}
/*******************************************************************************************/

public function SupprimerArticle(){
$this->header();
?>

  <body>
  <form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/SupprimerArticleBDD" method="POST">
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/article.jpg" alt="logo"></a> </div>
          </div>
  
         <h2>Supprimer Article</h2>
          <label>Introduisez l'id de l'article que vous voulez supprimer</label>
          <input type="text" name="id" placeholder="id Article.." required><br>
         
        <button  name="submit">Supprimer l'article</button>
  </form>
  </body>
  <?php
}

/*******************************************************************************************/
public function ModifierArticle(){
$this->header();
?>
<body>
  <form action="./ModificationView" method="POST" >
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/article.jpg" alt="logo"></a> </div>
          </div>
         <h2>Modifier Article</h2>
          <label>Introduisez l'id de l'article que vous voulez modifier</label>
          <input type="text" name="id" placeholder="id Article.." required><br>
        <button  name="submit">Modifier l'article</button>
  </form>
</body>
<?php
}
/*******************************************************************************************/
public function ModificationView(){
$this->header();
try{
    $cntr=new AdminController();
    $qtf=$cntr->AfficherModif();
foreach ($qtf as $row){
?>
<body>
<form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Maj" method="POST" enctype="multipart/form-data">
        <div class="logo">
             <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/article.jpg" alt="logo"></a> </div>
        </div>
        
     	<h2>Modifier Article</h2>

        <label>Article ID</label>
        <input  value =<?php echo $row['articleID'];?> type="text" name="id" placeholder="Article ID.." value required><br>

        <label>Titre</label>
        <input  value =<?php echo $row['titre'];?> type="text" name="titre" placeholder="titre.." value required><br>
       
        <label >Description</label>
        <textarea  rows = "5" cols = "60" name = "Description" placeholder="Description.." required ><?php echo $row['description'];?>
         </textarea><br>

        <label>Image</label>
        <input  type="file" name="image" placeholder="Image.."><br>
                <?php
       ?>
        <label>- Les utilisateurs les plus concernés de cet article sont :  <?php echo $row['CategorieCons'];?></br>
        <label>- Vous pouvez modifier la catégorie :</label>
        <ul>
        <li>
        <label class="container">Tous
          <input type="checkbox" name='users[]'  value="Tous" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Enseignants
          <input type="checkbox" name='users[]'  value="Enseignants" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Primaire
          <input type="checkbox" name="users[]"  value="Primaire" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Moyen
          <input type="checkbox" name="users[]"  value="Moyen" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Secondaire
          <input type="checkbox" name="users[]"  value="Secondaire" />
          <span class="checkmark"></span>
        </label>
        </li>
        <li>
        <label class="container">Parents
          <input type="checkbox" name="users[]"  value="Parents" />
          <span class="checkmark"></span>
        </label>
        </li>
       </ul>
      <button  name="submit">Modifier l'article</button>
</form>
</body>
<?php
}}
catch(Exception $e)
{
    echo 'erreur'.$e->getMessage();
}
}
/*******************************************************************************************/

//Gestion de présentation de l'école
public function gestionPresentations(){
$this->header();
?>
<body>
<div class="btn-group">

                <h1 class="gest">Gestion de la présentation de l’école</h1>
                <a href="./AjouterPresentation">
                    <button>Ajouter Présentation</button>  
                </a> 
                <a href="./ModifierPresentation">         
                    <button>Modifier Présentation</button>
                </a> 
                <a href="./SupprimerPresentation">         
                    <button>Supprimer Présentation</button>
                </a> 
                
<a href="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Categories">
<button id="categ" type="submit" name="submit">Allez vers categories</button>
</a> 
</div>
</body>
<?php
}

/*******************************************************************************************/
public function SupprimerPresentation(){

$this->header();  
?>
  <body>
  <form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/SupprimerPresBDD" method="POST">
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/form4.jpg" alt="logo"></a> </div>
          </div>
  
         <h2>Supprimer Une Présentation</h2>
          <label>Introduisez l'id de la présentation que vous voulez supprimer</label>
          <input type="text" name="id" placeholder="id Article.." required><br>
         
        <button  name="submit">Supprimer La présentation</button>
  </form>
  </body>
  <?php
}
/*******************************************************************************************/
public function AjouterPresentation(){
$this->header();  
?> 
  <body>
  <form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/AjouterPresBDD" method="POST" enctype="multipart/form-data">
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/form4.jpg" alt="logo"></a> </div>
          </div>
  
         <h2>Ajouter Une Présentation</h2>
          <label>Titre</label>
          <input type="text" name="titre" placeholder="titre.." required><br>
  
          <label >Paragraphe</label>
          <textarea rows = "5" cols = "60" name = "Description" placeholder="Description.." required>
           </textarea><br>
  
          <label>Image</label>
          <input type="file" name="image" placeholder="Image.."><br>

        <button  name="submit">Ajouter La Présentation</button>
  </form>
  </body>
  <?php
}

/*******************************************************************************************/

public function ModifierPresentation(){
$this->header();  
?>

  <body>
    <form action="./modification_Pres" method="POST" >
            <div class="logo">
                 <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/form4.jpg" alt="logo"></a> </div>
            </div>
           <h2>Modifier Une Présentation</h2>
            <label>Introduisez l'id de la présentation que vous voulez modifier</label>
            <input type="text" name="id" placeholder="id Article.." required><br>
          <button  name="submit">Modifier la présentation</button>
    </form>
  </body>
  <?php
}

/*******************************************************************************************/
public function modification_Pres(){
$this->header();  
try{
      $cntr=new AdminController();
      $qtf=$cntr->Afficher_Pres();
  foreach ($qtf as $row){
  ?>
  <body>
  <form action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Maj2" method="POST" enctype="multipart/form-data">
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/form4.jpg" alt="logo"></a> </div>
          </div>
          
         <h2>Modifier Une Présentation</h2>
  
          <label>Presentation ID</label>
          <input  value =<?php echo $row['ParagID'];?> type="text" name="id" placeholder="Article ID.." value required><br>
  
          <label>Titre</label>
          <input  value =<?php echo $row['title'];?> type="text" name="titre" placeholder="titre.." value required><br>
         
          <label >Paragraphe</label>
          <textarea  rows = "5" cols = "60" name = "Description" placeholder="Description.." required ><?php echo $row['texte'];?>
           </textarea><br>
  
          <label>Image</label>
          <input  type="file" name="image" placeholder="Image.."><br>
                  <?php
         ?>

        <button  name="submit">Modifier la présenation</button>
  </form>
  </body>
  <?php
  }}
  catch(Exception $e)
  {
      echo 'erreur'.$e->getMessage();
  }
  }
/*******************************************************************************************/

//Gestion de la réstauration
public function gestion_Restauration(){

  $this->Tableheader();
  ?>
  <body>
  <div class="container">
  <div class="row">
              <div class="col-md-12 header"></div>
                <div class="col-md-10 col-md-offset-1">
                    <table class="">
                        <a href="./Ajouter_repas">
                          <button type="button" class="btnn">Ajouter</button>
                        </a>
                          <button type="button" class="btni" onclick="print()">Imprimer</button>
                    </table>
                </div>
              </div>
  </div>
  </div>
  <div class="container-xl">
      <div class="table-responsive">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-8"><h2>Gestion de <b> La Réstauration</b></h2></div>
                      <div class="col-sm-4">
                          <div class="search-box">
                              <i class="material-icons">&#xE8B6;</i>
                              <input type="text" action ='post'svalue="Search" name="search" class="form-control"  placeholder="Search&hellip;">
                          </div>
                      </div>
                  </div>
              </div>
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Jour <i class="fa fa-sort"></i></th>
                          <th>Repas principal</th>
                          <th>Dessert </th>
                          <th>Supprimer </th>
                          <th>Modifier </th>
                      </tr>
                  </thead><?php
                  $cntr=new AdminModel();
                  $qtf=$cntr->Afficher_repas();?>
                  <tbody><?php
                  foreach ($qtf as $row){
                 ?>
                      <tr>
                      <?php
                          $id= $row['id'];?>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['Jour'];?></td>
                          <td><?php echo $row['Repas'];?></td>
                          <td><?php echo $row['dessert'];?></td>
                          
                          <td>
                          <form method="post" action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/supprimer_repas" >     
                           <input type="hidden" value="<?php echo $row['id'];?>" name="id" placeholder="Type.." required><br>
                          <button name="submit" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                          </form> 
                          </td>
                          <td>
                          <form method="post" action="./Repas_Modif_view" >     
                           <input type="hidden" value="<?php echo $row['id'];?>" name="id" placeholder="Type.." required><br>
                          <button name="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></button>
                          </td>
                        </form>
                       
                      </tr>
                  <?php }?>  
                  </tbody>
              </table>
              <div class="clearfix">
                  <div class="hint-text"></div>
                  <ul class="pagination">
                      <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                      <li class="page-item"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item active"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link">5</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>  
  </div>   
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  <?php
}
/********************************************************************************************/

public function Ajouter_repas(){
  $this->Tableheader2();
  ?>
  <form  action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_repas_BDD"  method="POST">
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/restau.jpg" alt="logo"></a> </div>
          </div>
  
         <h2>Ajouter Repas</h2>
         <label>Jour</label>
          <input type="text" name="jour" placeholder="Jour.." required><br>
  
          <label>Repas Principal</label>
          <input type="text" name="repas" placeholder="Repas.." required><br>
  
          <label>Dessert</label>
          <input type="text" name="dessert" placeholder="Dessert.." required><br>
  
        <button  name="submit">Ajouter Repas</button>
  </form>
  </body>
  
  <?php
  }

/*********************************************************************************************/

public function Ajouter_contact(){
  $this->contactHeader();
  ?>
  <form  action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Ajouter_contact_BDD"  method="POST">
          <div class="logo">
               <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/contact.png" alt="logo"></a> </div>
          </div>
  
         <h2>Ajouter Contact</h2>
         <label>Email</label>
          <input type="text" name="Email" placeholder="Email.." required><br>
  
          <label>Tel1</label>
          <input type="text" name="tel1" placeholder="tel1.." required><br>
  
          <label>Tel2</label>
          <input type="text" name="tel2" placeholder="Tel2.." required><br>

          <label>Tel3</label>
          <input type="text" name="tel3" placeholder="Tel3.." required><br>
  
  
        <button  name="submit">Ajouter Contact</button>
  </form>
  </body>
  
  <?php
  }
/************************************************************************************************ */

public function Repas_Modif_view(){
  $this->Tableheader2();
  try{
    $cntr=new AdminController();
    $qtf=$cntr->modifier_repas();
  
  foreach ($qtf as $row){
    ?>
    <body>
    <form class="modif_rep" action="http://localhost/HABELHAMES_KHADIDJA_SIL2/admin/Maj4" method="POST" enctype="multipart/form-data">
            <div class="logo">
                 <img  class="logoimg" src="http://localhost/HABELHAMES_KHADIDJA_SIL2/public/images/restau.jpg" alt="logo"></a> </div>
            </div>
            
           <h2>Modifier Repas</h2>
    
            <label>ID</label>
            <input  value =<?php echo $row['id'];?> type="text" name="id" placeholder="repas ID.." value required><br>
    
            <label>Jour</label>
            <input  value =<?php echo $row['Jour'];?> type="text" name="jour" placeholder="jour.." value required><br>
           
            <label >Repas Principal</label>
            <input  value =<?php echo $row['Repas'];?> type="text" name="repas" placeholder="repas.." value required><br>
             </textarea><br>
    
            <label>Dessert</label>
            <input  value =<?php echo $row['dessert'];?> type="text" name="dessert" placeholder="Dessert.." value required><br>
                  
          <?php
           ?>
          <button  name="submit">Modifier le repas</button>
    </form>
    </body>
    <?php
    }}
    catch(Exception $e)
    {
        echo 'erreur'.$e->getMessage();
    }
    }
  
}

/**************************************************************************************************/


?>
