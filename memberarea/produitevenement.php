<?php
include("verif.php");
 include("mesfonctions.php");


/*session_start(); */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Participer à un Evenement - Soirée | LIBERTIS CLUB</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/produitsliste.css">
      
	
      
           <link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script 	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script 	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
    
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />
      
      
      
      
      <style>
          #cont{
              background-color: blue;
              
          }
          
          #cont a{
             color:white; 
               font-size: 1em;
             
              
          }
          
          #navbarCollapse{
               width: 100%;
          }
          
          .container{
              width: 80%;
          }
      
          #menu_gauche {
  position: fixed;
  right: 0;
  top: 100%;
  width: 8em;
  margin-top: -2.5em;
              
              
              
             
    }
 #lelogo{
        margin-top: 10px;
     
          }
      
          /*STYLES GENERAUX*/
*{
    font-family: Avenir, sans-serif;
    padding: 0px;
    margin: 0px;
    text-align: center;
    box-sizing: border-box;
}

p{
    font-size: 1em;
    line-height: 1.5em;
}
a{
    text-decoration: none;
    color: #000;
}



/*SECTIONS*/
section{
    display: flex; 
    flex-flow: row wrap;
    justify-content: center;
    width: 100%;
    padding-bottom: 20px;
    margin: 20px auto;
    box-shadow: 0px 0px 10px #bbb;
    background-color: #fff;
}

section h2{
    margin: 20px 0;
    width: 90%;
}
section > div{
    width: 90%;
}


/*SECTION EXP ET FORMATION*/
.exp{
    display: flex;
    flex-flow: row wrap;
    border-bottom: 1px solid #bbb;
    padding-bottom: 10px;
    margin-bottom: 10px;
}
.exp-info{
    display: flex;
    flex-flow: column wrap;
}
.exp-logo{
    flex: 0 0 25%;
    max-width: 100px;
}
.exp-info{
    flex: 0 0 70%;
    margin-left: auto;
}
.exp img{
    width: 100%;
}
.exp h3{
    font-size:  1.2em;
}
.exp h4{
    font-size:  1em;
    font-weight: normal;
}



/*VERSION BUREAU DU CV*/
@media screen and (min-width: 980px){
    section{
        width: 80%;
        box-shadow: 0px 0px 10px #bbb;
    }
    a:hover{
        color: #EA0;
    }
    header h1{
        width: 80%;
    }
    .prez, .contact{
        flex: 0 0 45%;
    }
    .prez{
        border-bottom: none;
        border-right: 2px solid #ccc;
        padding-right: 20px;
        margin-left: auto;
    }
    .contact{
        padding-left: 20px;
        margin-right: auto;
    }
    .prez a{
        border: 2px solid transparent;
    }
    .prez a:hover{
        color: #f28835;
        background-color: #fff;
        border: 2px solid #f28835;
        box-shadow: 0px 0px 20px #666;
    }
    .exp-logo{
        flex: 0 0 10%;
    }
    .exp-info, .exp-desc{
        flex: 0 0 85%;
        margin-left: auto;
    }
    .interet{
        flex: 0 1 25%;
    }
}
          
      
 
tr:nth-child(odd) {
    background-color: lightgrey;
}
 
td { border-right: 2px solid white; }
tr:nth-child(even) td {border-color: lightgrey;}
tr td:last-child {border:none;}

         
          
          
          
          
      </style>
      
      
      
      
      
      
  </head>
  
  <body style="background: white;">

    <!-- Header Section Start -->
                    

      
      <?php
include("structure/header.php");



/*session_start(); */
?>
         <?php
								
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
                                    $bdd->exec('SET NAMES utf8');
									
          
          $req = $bdd->query("SELECT * FROM `evenement` WHERE id_evenement not in (select `idevenement` from participantevenement where pseudouser = '" . $_SESSION["pseudousers"]. "')");
      
        
      
                    ?>
            
      
      <div class="container">
          <br>
          <br><br><br>
          <h2> Participer à un évenement </h2>
 
          <br>
         
        
          
         
          
          
         <div class="container">
        <div class="row" style="
                                         
                                background-color:white;       ">
            <div class="col-md-4" style="
                                   
                                height:60px; padding:15px; margin-top:5px; margin-left:5px;  box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);       ">
                <p> Vous avez : <strong style="color:blue;"> 15000 FCFA </strong> sur votre compte.</p>
                
            </div>
            <div class="col-md-6 col-offset-2" style="
                                padding: 15px;" >
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:0.5em;">Vous pouvez participer à nos soirées et évenements  ! </strong></h3>
            </div>
            
            
             </div>
            </div> 
          <br>
  <table class="table">
    <thead>
      <tr>
        <th>Evenement</th>
        <th>Description / détails</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        
        <tr>
        <td>
           <div class="exp-info">
                <h3 style="color:#FF8610;">Soirée de Gala</h3>
               <br>
                
                <h4>Prévue pour le : <strong>14 Avril 2014 - 4 16h</strong></h4>
               
              
               <br>
            </div>
              
          </td>
          
        <td>
           
            <div class="exp-desc">
                <h4>Consommation <strong>25.000F la bouteille</strong> pour 6 personnes.</h4><br/>
            
             <h4>Prix d'entrée:  <strong> 17.000 FCFA</strong></h4>
            <br/>
            </div>
          
          </td>
          
        <td>
         <form class="form-content" method="post" class="modalL" action="participerevenement.php">
         <!-- <button type="button" class="btn btn-primary" value = "1">Je participe</button> -->
                  <button id="btn-atc-2409" onClick="document.getElementById('temoin').value = this.value;" value="1" type="button"  title="Réserver" class="btn btn-primary" name="addartpanier" data-toggle="modal" data-target="#myModal"><span><span>Je Participe</span></span></button>
            
            </form>
            
            
            
        </td>
      </tr>
        
        
        <?php
        
        
         while(($donnees = $req->fetch())){
			
        ?>
      <tr>
        <td>
           <div class="exp-info">
                <h3 style="color:#FF8610;"><?php echo $donnees["libelle_evenement"];?></h3>
               <br>
              <?php  $date_evenement = $donnees["date_evenement"]; ?>
               
               <h4>Prévue pour le : <strong><?php echo $date_evenement . ' - à ' .$donnees["heure_evenement"];?></strong></h4>
               
              
               <br>
            </div>
              
          </td>
          
        <td>
           
            <div class="exp-desc">
                <p><h4><?php echo $donnees["description_evnenement"];?></h4><br/></p>
            
             <h4>Prix d'entrée:  <strong><?php echo $donnees["prix_evenement"] ;?> FCFA</strong></h4>
            <br/>
            </div>
          
          </td>
          
        <td>
         
             <form class="form-content" method="post" class="modalL" action="participerevenement.php">
         <!-- <button type="button" class="btn btn-primary" value = "1">Je participe</button> -->
                 <button id="btn-atc-2409" onClick="document.getElementById('temoin').value = this.value;" value="<?php echo $donnees["id_evenement"];?>" type="button"  title="Réserver" class="btn btn-primary" name="addartpanier" data-toggle="modal" data-target="#myModal"><span><span>Je Participe</span></span></button>
            
            </form>
            
            
        </td>
      </tr>     
      
    <?php } ?>
      </tbody>
</table>
        
  <!--  GESTION DU MENU MODAL RESERVATION -->
             
<style>


/* Full-width input fields */
#id01 input[type=text], #id01 input[type=password] ,input[type=date],input[type=time]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
#id01 input[type=text]:focus, input[type=password]:focus, input[type=date],input[type=time]:focus {
  background-color: #ddd;
  outline: none;
}
    
    #id01{
        background-color:  red;
    }

/* Set a style for all buttons */
#id01 button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

#id01 button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
#id01 .cancelbtn {
  padding: 14px 20px;
  background-color: #FF8610;
    font: bold 0.7em ;
}
    
  #id01 .cancelbtn:hover {
  padding: 14px 20px;
  background-color: caption;
}  
    
    
    

/* Float cancel and signup buttons and add an equal width */
#id01 .cancelbtn, #id01 .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
 .container {
  padding: 16px;
}

/* The Modal (background) */

    

/* Modal Content/Box */
.form-content {
  background-color: #fefefe;
 
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
#id01 hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
    
    #id01 {
 /* display: none; /* Hidden by default */
 
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: white;
 
        text-align: left;
}
 
/* The Close Button (x) */
#id01 .close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

#id01 .close:hover,
#id01 .close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
#id01 .clearfix::after {
  content: "";
  clear: both;
  display: table;
}
    
    .containerL{
       background-color: #fefefe;
  
  width: 100%; /* Could be more or less, depending on screen size */ 
    }
    
    .modal-content{
         width: 100%;
    }
    
    .modal-title{
        color:#FF8610;
    }
    
    #contentpartenaire{
        background: white;
        width: 700px;
        
    }
    

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
 #id01 .cancelbtn,  #id01.signupbtn {
     width: 100%;
  }
}
</style>

   <!--CHECK  BOX STYLE -->
    <style>
    /* The container */
.lecheckbox {
  display: block;
  position: relative;
  padding-left: 35px;   
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 17px;
    color:#A196A9;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.lecheckbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.lecheckbox:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.lecheckbox input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.lecheckbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.lecheckbox .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
    
    
   
    <div class="container">
  

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered" id="sousmodalpartenaire">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title"><p style="font-size: 1em;"><strong>Voulez-vous venir à l'évenement avec un invité ? </strong></p></h3>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="id01">
   
 
 <form class="form-content" method="post" class="modalL" action="participerevenement.php">
<!-- <form  id="laform" class="form-content"  class="modalL" method="post" onsubmit="return sendData();">  action="reserverpartenaire.php" enctype="multipart/form-data"> -->
      
      
      
      <div class="containerL">
      

 
          
<br/>
      
    
          
          
          <label style="font-size: 1.5em;" class="lecheckbox"><strong>Oui Je viendrai à la soirée avec un invité.</strong>
  <input type="radio" checked="checked" name="radio" value="oui">
  <span class="checkmark"></span>
</label>
<label class="lecheckbox" id="radiooui" value="non">Non je ne viendrai pas avec un invité.
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
         
         
     <input  type="hidden" id="temoin" value="letemoin" name="idevenement"/>
     

      <div class="clearfix">
        
         
          <button type="button" data-dismiss="modal" class="cancelbtn">Annuler</button>
        <button type="submit" class="signupbtn">Envoyer</button>
      </div>
    </div>
            
  </form>
        
    

    
        </div>
        
       
        
      </div>
    </div>
      
        </div> 
    </div>
      </body>


    </html>