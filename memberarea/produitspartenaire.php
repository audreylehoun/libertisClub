<?php
include("verif.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
<!-- 

Conçu par :

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8" />
    <title>Réservation de partenaire | LIBERTIS CLUB</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>

     <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mettre la description">
        <meta name="keywords" content="">

        <!--  Refonte acceuill   -->

        <!-- Styles -->
      
        <link href="./WOUMIAH_files/app.min.css" rel="stylesheet">
        <link href="./WOUMIAH_files/custom.css" rel="stylesheet">

        <!--  Fin Refonte acceuill   -->

        <!--  START AJOUTER POUR LA REFONTE  -->
        <link href="./WOUMIAH_files/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./WOUMIAH_files/dataTables.bootstrap.min.css">
        <link href="./WOUMIAH_files/components.css" id="style_components" rel="stylesheet" type="text/css">
        <link href="./WOUMIAH_files/bootstrap-social.css" rel="stylesheet" type="text/css">

        <!-- BEGIN THEME STYLES -->

        <script src="./WOUMIAH_files/jquery.min.js.téléchargement" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="./WOUMIAH_files/allobesoin.css">
      <link rel="stylesheet" type="text/css" href="./WOUMIAH_files/tjobers.css">
       
        <!-- END THEME STYLES -->
        <link rel="stylesheet" href="./WOUMIAH_files/demo.css">
        <!-- FIN LES SCRIPTS AJOUTER POUR LA REFONTE    -->
    <link href="./WOUMIAH_files/LineIcons.min.css" rel="stylesheet">
        <!-- Style css personnaliser  MEF  -->
        <link href="./WOUMIAH_files/custom_sta.css" rel="stylesheet">
      
    
    
    
    


<style>.club-content .club-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .club-post .club-layout-cell {border:none !important; padding:0 !important; }
.ie6 .club-post .club-layout-cell {border:none !important; padding:0 !important; }

	.form_col {
  display: inline-block;
  margin-right: 15px;
  padding: 3px 0px;
  width: 140px;
  min-height: 1px;
  text-align: right;
}
input {
  padding: 2px;
  border: 1px solid #CCC;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  outline: none; 
}
input:focus {
  border-color: rgba(82, 168, 236, 0.75);
  -moz-box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
  box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);

}
.correct {
  border-color: rgba(68, 191, 68, 0.75);
}
.correct:focus {
  border-color: rgba(68, 191, 68, 0.75);
  -moz-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
  box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
}
.incorrect {
  border-color: rgba(191, 68, 68, 0.75);
}
.incorrect:focus {
  border-color: rgba(191, 68, 68, 0.75);
  -moz-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
  box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
}
.tooltip {
  display: inline-block;
  margin-left: 20px;
  padding: 2px 4px;
  border: 1px solid #555;
  background-color: #CCC;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

    .panierform {
	position: relative;
	 width : 110px;
    
    
    background-color: #2366A8;
    padding:2px;                              
    float: right; 
    bottom:-80%; 
	transition: .5s ease-in-out;
    visibility: hidden;

}
    .allo-category-box:hover .panierform{
bottom:5%;
        visibility: visible;
                                  
    float: right; 
    } 
    
    .tooltiptext {

   visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
        top:30px;
  
  left: 50%;
  margin-left: -60px; 
    
    
    
    
    }
#tooltip .tooltiptext::after {
  content: "";
  position: absolute;
 
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: black transparent transparent transparent;
}


#tooltip:hover .tooltiptext {
  visibility: visible;

    
    
    }
    
    #tooltip{
     /* background:url(images/ajoutpanier25.png); */
    }
    


</style></head>
<body>

<!-- Début entête -->



              <?php
// include("entetehaut.php");
  include("structure/header.php");
?>

    
    <?php
    include("structure/menu.php");
 ?>
<!-- Fin entête -->

    
    <!--  DEBUT CODE MENU -->
    
 
    
    
    
    
    
    
    <!--  FIN CODE MENU -->
    
    
    
    <section id="_tjobers" class="lightgrey-bg" style="background:white;">
          
        
        
        <div class="container">
            
           
            
               
             <div class="allo-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
                         <li><a href="boutique.php"><i class="fa fa-home"></i> Boutique</a></li>
                       <li><a href="menuproduitsetservice.php"><i class="fa fa-home"></i> Produits et Services</a></li>
                        
                        <li class="active">Partenaires</li>   
                    </ul>
                 
                 
                </div>
            
            
              <?php
								
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
                                    $bdd->exec('SET NAMES utf8');
									
          
          $req = $bdd->query("SELECT `categorie_produit`, count(`id_produitprestation`) as nbre from produitprestation group by `categorie_produit`");
												
           ?>
          
        <!--   <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong>Retrouver ici des boissons et vos repas préférés.. !!</strong></h3>
          <div class="row" style="background:#FF8610; padding-bottom:10px;height:0.2px;">
        <br/> -->
          
         
            <div class="row" style="
                                         
                                background-color:white;       ">
            <div class="col-md-4" style="
                                   
                                height:60px; padding:15px; margin-top:5px; margin-left:5px;  box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);       ">
                <?php
															$reql = $bdd->query('SELECT soldetransaction FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction DESC LIMIT 0,1 ');
															$donnees = $reql->fetch();
															$soldetransaction = $donnees["soldetransaction"];
															$reql->closeCursor();?>	
                <p> Vous avez : <strong style="color:blue;"> <?php echo $soldetransaction ?> FCFA </strong> sur votre compte.</p>
                <!-- Fin espace solde -->
           
                
            </div>
            <div class="col-md-6 col-offset-2" style="
                                padding: 15px;" >
                
               
                
                
                
                
              
                
              
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:0.5em;">Réservez ici les partenaires qui vous tiendront compagnie toute une soirée. </strong></h3>
                
                        
            
                
                </div>
            
            
            
            </div> 
            
               <div class="row" style="display:none;">
                <div class="col-md-6 col-offset-5" style="
                                padding: 10px;" >
                
               <p>  <input type="radio" id="reponse-1" name="question" value="reponse-1" />
      <label for="reponse-1">Moins de 25 ans       </label>   <input type="radio" id="reponse-2" name="question" value="reponse-2" />
      <label for="reponse-2">De 25 ans à 35 ans</label>   <input type="radio" id="reponse-3" name="question" value="De 25 ans à 35 ans" />
      <label for="reponse-3">De 36 ans à 40 ans</label>  <input type="radio" id="reponse-4" name="question" value="De 25 ans à 35 ans" />
      <label for="reponse-4">plus de 40 ans</label> </p>
                
                
                
                
                <?php
                
                if($_GET["tranage"] == 'Boisson'){
                ?>
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:1em;">Acheter ici vos boissons préférées ! </strong></h3>
                <?php } ?>

                   <?php
                
                if($_GET["tranage"] == 'Repas'){
                ?>
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:1em;">Acheter ici vos repas préférés ! </strong></h3>
                <?php } ?>
                
                
                </div>
            
            
            
            </div> 
            
            
          <p></p><p></p>
        
           <?php
													include 'paginationprdtssveces.php';
												   /* On calcule le nombre total d'entrées de notre table 
													09.que l'on stocke dans $nb_entrees */
													$req = $bdd->query("SELECT COUNT(*) AS total FROM partenaires");
													while($donnees_total = $req->fetch()){
													$total=$donnees_total['total'];
													}
													 $req->closeCursor();
													 
													/*On configure les variables pour afficher notre requête */
													$entrees_par_page = 50;
													// nombre d'entrée à afficher par page
													$total_pages = ceil($total/$entrees_par_page);
													
													// calcul du nombre de pages nécessaires pour tout afficher
													//(on arrondit à l'entier supérieur)
													/*On récupère le numéro de la page depuis l'URL avec la méthode GET*/
													if(!isset($_GET['page'])){
													$page_courante = 1;
													// si aucune page n'existe dans l'URL, on attribue 1 à la page courante
													} else {
                                                        
                                                        
													$page = $_GET['page'];
													if ($page<1) $page_courante=1;
													// on ne peut avoir de page inférieure à 1 :
													//dans ce cas la valeur par défaut est 1
													elseif ($page>$total_pages) $page_courante=$total_pages;
													// on ne peut avoir de page supérieure au nombre total de pages :
													//dans ce cas la valeur par défaut est la dernière page
													else $page_courante=$page;
													// sinon la page courante est celle indiquée dans l'URL
													}
                       
                       
                       
													// $start est la valeur de départ du LIMIT dans notre requête SQL
													//(est fonction de la page courante)
													$start = ($page_courante * $entrees_par_page - $entrees_par_page);
								
								
													/* On a toute les données pour récupérer les entrées à afficher,
													41.que l'on stocke dans $resultat */
											
												//	$req = $bdd->query('SELECT * FROM produitprestation ORDER BY id_produitprestation DESC LIMIT 
                                                                    
                       
                     
                if(isset($_GET["tranage"]))
                        {
                           
                           /* AFFICHAGE DE TOUTES LES BOISSONS */
                           if(($_GET["tranage"] == 'tout')) {
                       
                            
                            $req = $bdd->query('SELECT * FROM partenaires ORDER BY id_partenaire DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                       
                          }
                     
                           
                         /* AFFICHAGE D'UNE CATEGORIE DE BOSSON DONNEE */
                           if(($_GET["tranage"] != 'tout'))
                        {
                            $req = $bdd->query('SELECT * FROM partenaires where trancheage_partenaire = "'. valid_donnees( $_GET["tranage"]) . '"  ORDER BY id_partenaire DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                            
                        }   
                           
                        }
                           
                           
                           ?> 
                       
                      
         
                                    
                                 
                                                          
                
          
          <div class="row">
            
            
              <?php
                       
         
                                    
                                      while($donnees = $req->fetch()){
                                                        
                                                        
													?>
                                                        
                                                        
													
                                                  
                
                <div class="col-lg-2 col-md-3 col-sm-6">
                
                            <div class="allo-category-box">
                                <a href="#" width="160" height="160" style="pointer-events: none;cursor: default;">
                                    <picture width="160" height="160">
                                        <img src="../images/imgespartenaire/<?php echo $donnees["image_partenaire"];?>" alt="<?php echo $donnees["prenom_partenaire"];?>" width="160" height="160">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title" style="font-size:0.8em;">
                                        <a "#"title="<strong><?php echo $donnees["prenom_partenaire"]; ?></strong>" style="pointer-events: none;cursor: default;"><strong><?php echo $donnees["prenom_partenaire"] .' , ' . $donnees["age_partenaire"] . ' ans '; ?></strong>&nbsp</a>
                                    </h3>
                                     
                                     <p>
                                     <span class="regular-price" id="product-price-2409">
                                            <span class="price"><strong><?php echo $donnees["ville_partenaire"]; ?></strong>&nbsp;</span>                                    </span>
                                    
                                    </p>
                                    
                                    <p>
                                     <span class="regular-price" id="product-price-2409">
                                            <span class="price"><strong><?php echo $donnees["prix_partenaire"]; ?> F CFA</strong>&nbsp;</span>                                    </span>
                                    
                                    </p>

                                </div>
                                
                 
                                
                             
                                
                                
                                
                                
                                
                                                              
       <form  method="post" action="reserverpartenairesdetails.php"  id="myform" style="height:35px; top:10px;
                                           width : 90%;
    margin-left : 40%;
    
    
                            ">
 <!-- <label id="dimunier" onclick="
    
    if(document.getElementById('quantite').value == 1){}else{
    document.getElementById('quantite').value = parseInt(document.getElementById('quantite').value) - 1    
    }"  style="background:white; height:25px; margin-top:5px;margin-left:5px; padding: 5px;    "><strong>-</strong>&nbsp</label> -->
    <div id = "Container" class="panierform" style="
                                 
    width : 110px;
    
    
    background-color: #2366A8;
                                 padding:2px;
                                 
                                float: right;
                                 
                                  background-color: rgba(0, 0, 255, 0);
                                 ">
           
         <input type="hidden" value="<?php echo $donnees["id_partenaire"];?>" name="idaddartpanierpartenaire" id="leidpartenaire"/>
 <input type="hidden" value="<?php echo $donnees["nom_partenaire"];?>" name="nompartenaire" id="nompartenaire"/>
<input type="hidden" value="<?php echo $donnees["prenom_partenaire"];?>" name="prenompartenaire" id="prenompartenaire"/>
 <input type="hidden" value="<?php echo $donnees["ville_partenaire"];?>" name="villepartenaire" id="villepartenaire"/>       
 <input type="hidden" value="<?php echo $donnees["age_partenaire"];?>" name="agepartenaire" id="agepartenaire"/>       
  <input type="hidden" value="<?php echo $donnees["description_partenaire"];?>" name="descriptionpartenaire" id="descriptionpartenaire"/> 
          <input type="hidden" value="<?php echo $donnees["prix_partenaire"];?>" name="prixpartenaire" id="prixpartenaire"/>  
          <input type="hidden" value="<?php echo $donnees["image_partenaire"];?>" name="imagepartenaire" id="imagepartenaire"/>  
         
        
        
        
                                                                        <input type="hidden" value="produitspartenaire.php?tranage=tout&pro=part" name="idpageretour" />

                                                                        <input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" />

                        
                                                                 <input id="qty-2409" type="hidden" class="input-text qty" maxlength="12" value="1" name="qteproduit">
                           <!--  <label id="augmenter" onclick="document.getElementById('quantite').value = parseInt(document.getElementById('quantite').value) + 1" style="background:white; height:25px; margin-top:5px; width:20px;margin-left=0px;   "><strong>+</strong>&nbsp</label> -->
  <!--<i class="glyphicon  glyphicon-shopping-cart" title="Panier"></i>-->
        <button id="tooltip" type="submit" style="width:100px; height:27px; border-radius:5px; font-size:1em; "name="addartpanier" onClick="document.getElementById('temoin').value = this.value;" value="<?php echo $donnees["id_partenaire"];?>" type="button"  title="Réserver ce partenaire" class="btonreserv" name="addartpanier" data-toggle="modal" data-target="#myModalReservation">Réserver<span class="tooltiptextr"></span>
      
         
                        
            
            

</button>
        </div>
</form>
                                                          
                                
                                
                           
                                
                                
                            </div>                          
                       
         
              
              
              
              
              
              </div>  
          
              <?php  } ?>
              
            
            
            
            </div>
          
          
          
          
          
              
            </div>
        </section>
    
    
    
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

    <div class="container">
  

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered" id="sousmodalpartenaire">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Réservation</h3>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="id01">
   
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
 <form class="form-content" method="post" class="modalL" action="reserverpartenaire.php">
<!-- <form  id="laform" class="form-content"  class="modalL" method="post" onsubmit="return sendData();">  action="reserverpartenaire.php" enctype="multipart/form-data"> -->
      
      
      
      <div class="containerL">
      
      <p>Veuillez indiquer pour quand désirez-vous résever le partenaire.</p>
      <hr>
      <label for="ladate"><b>Date désirée</b></label>
      <input id="ladate" type="date" placeholder="jj/mm/AAAA" name="datedemandee" required>

      <label for="lheure"><b>Heure voulue</b></label>
      <input id="lheure" type="time" placeholder="Heure voulue" name="heuredemandee" required>

     <input  type="hidden" id="temoin" value="letemoin" name="idpartenaire"/>
      <p> <a href="#" style="color:dodgerblue">Libertis Club</a>.</p>

      <div class="clearfix">
        <button type="button" data-dismiss="modal" class="cancelbtn">Annuler</button>
        <button type="submit" class="signupbtn">Réserver</button>
     
          
          
          
          </div>
    </div>
            
  </form>
        
    
            <?php
           echo "<div class='club-succes' style='background:#74AC1E; color:white; padding 15px;'>Faites votre réservation. Nous allons vous revenir dans un cours instant par rapport à la confirmation de la disponibilité du partenaire à la date et heure que vous choisirez. LIBERTIS CLUB..</div>."; 
            
            ?>
                
            
            
    <script>
            alert(echo "Opération réussie, votre demande est en attente de validation. Nous vous tenons informé dans le plus vite possible.");
            </script>
    

    
        </div>
        
       
        
      </div>
    </div>
  </div>
  
</div>
    <!--  MODAL RESERVATION PARTENAIRE -->
    
    <div class="modal fade" id="myModalReservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="contactForm" name="sentMessage" action="https://reportiah.com/web/contact" method="POST">
                            <div class="modal-header">
                                <h4 class="modal-title left" id="myModalLabel">Nous contacter</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body" id="corps_modal">
                                <div>
                                    <div class="form-group">
                                        <input class="form-control" name="c_nom" id="c_nom" type="text" placeholder="Votre nom" required="required" data-validation-required-message="Veuillez saisir votre nom.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="c_prenom" id="c_prenom" type="text" placeholder="Votre prénom" required="required" data-validation-required-message="Veuillez saisir votre prénom.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="c_mail" id="c_mail" type="email" placeholder="Votre adresse mail" required="required" data-validation-required-message="Veuillez saisir une adresse mail valide.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="c_phone" id="c_phone" type="tel" placeholder="Votre numéro de téléphone" required="required" data-validation-required-message="Veuillez saisir votre numéro de téléphone.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="c_text" id="c_text" placeholder="Votre message" required="required" data-validation-required-message="Veuillez saisir votre message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <!--div class="clearfix"></div>
                                    <div>
                                        <button type="button" class="btn btn-default" id="close_modal" data-dismiss="modal">Annuler</button>
                                        <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
                                    </div-->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-xl text-uppercase" id="close_modal" data-dismiss="modal">Annuler</button>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
                                <!--button type="button" class="btn btn-default" id="close_modal" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary" id="del_dept">Supprimer</button-->
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
    
    
    
    
    
    
        <!-- END Tjobers -->
    
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
    
  </div>
</footer>
    
</body></html>