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
   <title>Réservation de partenaires | LIBERTIS CLUB</title>
   
      
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
           <link rel="stylesheet" href="style/partenaires.css">
      
        
	
    
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />
     
     
         <link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script 	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script 	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
      
      
      
      
      
      
      <style>
          
          
          
          
          
          
          #cont{
              background-color: blue;
              
          }
          
          #cont a{
             color:white; 
               font-size: 1em;
             
              
          }
          
          
          
          
         
      
          #menu_gauche {
  position: fixed;
  right: 0;
  top: 100%;
  width: 8em;
  margin-top: -2.5em;
}
      
          
      </script>
      <script type="text/javascript">
                   function valenter(){
                      var surface = document.getElementById("leidpartenaire");
                      var surf = surface.value;
                      alert(surf);
                   }
               </script>
        
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
     function sendData()
{
  var name = document.getElementById("ladate");
  var age = document.getElementById("lheure");
    var age = document.getElementById("temoin");
  $.ajax({
    type: 'post',
    url: 'reserverpartenaire.php',
    data: {idpartenaire:temoin,
      datedemandee:ladate,
          heuredemandee:lheure
    },
    success: function (response) {
      $('#res').html("Vos données seront sauvegardées");
    }
  });
    
  return false;
}
 
          
          </script>

        <script type="text/javascript">  
          ajaxPost=function(){
 $.post("reserverpartenaire.php", $("#laform").serialize()).done(function(
 data ){
 $("#res").html( data );
 });
   $("#lebouton").bind("click",ajaxPost);        
              
 }
     </script>      
          
          
          
          
          
          
          
          
          
          
          
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

    
    
    
    // TEBLEAU CSS
    
    
    body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 10%;
  }
  .col-2 {
    flex-basis: 40%;
  }
  .col-3 {
    flex-basis: 25%;
  }
  .col-4 {
    flex-basis: 25%;
  }
  
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
    
    
        
          body{
              
                
            background:url(images/fille.png) no-repeat right 80px;
              background-attachment: fixed;
              
          }     
          
          
          
          
          
      </style>
      
      <script>
      function chargernewpage(var leid, var leproduit){
         window.open('produitsboisson.php?catpro=' .leid . '&pro=' .leproduit, '_self');
      }
      
      </script>
      
      
      
      
  </head>
  
  <body>
     <script>
          ajaxPost();
         </script>
       <p> calut salut</p>
      
      
     
      <?php
      include("entetehaut.php");
      ?>
     
    <div class="container-fluid fixed-top scrolling-navbar" style="background:white;height:50px;" >
          
          <p style="font: 2em bold, red-serif; height: 4%; width:100%;">LIBERTIS CLUB</p>
          </div>


      
      
    <!-- Header Section Start -->
  
      
      
      <?php
      include("entetehaut.php");
      ?>
     
      
   <?php
include("menuhaut.php");



/*session_start(); */
?>

      
      
            
          
   <div class="centre" >
           
            <section id="team" class="section" >
      <div class="container">
        
        <!-- Start Row -->
       <div class="row">
          
          
          
          </div>
          
           <?php
     
          $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
                                    $bdd->exec('SET NAMES utf8');
          ?>
          
          
          
          
          <h2 style="font:18 bold Verdana; margin-top:2px;" > <strong>Retrouver ici des partenaires !!</strong></h2>
          <div class="row" style="background:#FF8610; padding-bottom:10px;height:1px;">
        
          
          </div>
          <p></p><p></p>
          
          
          <div class="row" >
          <!-- Start Col -->
              
              
              
              
          <div class="col-lg-3 col-md-6 col-xs-12" >
          
    
    
              <div class="single-teamm" id="single-teamm" >
        <p class="block-subtitlee">Affiner la recherche</p>
            <dl id="narrow-by-list"> <dd class="dd-type_biere"> 
                
              <!--   <form action="#" method="post" onsubmit="saveDragDropNodes()" id="leform">
	<input type="hidden" name="tilelist" id="saveContent" value="">
	<input type="submit"  value="Envoyer">
</form> -->
                 
             
                
                
                <ol >
                 
            
            <li class=" type_biere_462">
                
                 <button value="moins de 25 ans" type="button" 
                           onclick='window.location.href="produitspartenaires.php?tranage="+(this.value)+"&pro=part"'>
                         moins de 25 ans</button>
                
                    </li> 
                    
                    <li class=" type_biere_462">
                
                 <button value="25 ans a 35 ans" type="button" 
                            onclick='window.location.href="produitspartenaires.php?tranage="+(this.value)+"&pro=part"'>
                         25 ans à 35 ans</button>
                
                    </li> 
                    
                    <li class=" type_biere_462">
                
                 <button value="35 ans à 40 ans" type="button" 
                           onclick='window.location.href="produitspartenaires.php?tranage="+(this.value)+"&pro=part"'>
                         35 ans à 40 ans</button>
                
                    </li> 
                    
                   <li class=" type_biere_462">
                
                 <button value="plus de 40 ans" type="button" 
                           onclick='window.location.href="produitspartenaires.php?tranage="+(this.value)+"&pro=part"'>
                         plus de 40 ans</button>
                
                    </li>  
                    
        </ol>
</dd>
                                            </dl>
                
                
            </div>
         
              
              </div>
              
              
              
          <!-- Start Col -->
 
            
          
       <!-- <div class="row" > -->
          <div class="col-lg-9 col-md-6 col-xs-12">

              
              
            <div class="single-team"  >
              <div class="col-lg-12 col-md-10 col-xs-12" id="item1"   >
      
           
                  
                   <ol class="products-list " id="products-list" >
                       
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
                        echo ' Tous les partenaires '; 
                            
                            $req = $bdd->query('SELECT * FROM partenaires ORDER BY id_partenaire DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                       
                          }
                     
                           
                         /* AFFICHAGE D'UNE CATEGORIE DE BOSSON DONNEE */
                           if(($_GET["tranage"] != 'tout'))
                        {
                            $req = $bdd->query('SELECT * FROM partenaires where trancheage_partenaire = "'. valid_donnees( $_GET["tranage"]) . '"  ORDER BY id_partenaire DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                             echo valid_donnees("Tranche d'âge : "  .$_GET["tranage"]); 
                        }   
                           
                        }
                           
                           
                           ?> 
                       
                      
                       
                       <?php
                       
         
                                    
                                    while($donnees = $req->fetch()){
                                                        
                                                        
													?>
                                                         
                
            <li class="item odd">
            
            <h2 class="product-name"><a href="#" title=""><?php echo $donnees["prenom_partenaire"] .' , ' . $donnees["age_partenaire"] . ' ans ' .$donnees["ville_partenaire"];?></a></h2>
                    
            
        
                
                
                
               
                <div class="product-shop" id="product-shp">
                    
                    

                    <br>
                           
                            
                <form class="form_panier" method="post" action="" >
                                                               
                                                                        <input type="hidden" value="<?php echo $donnees["id_partenaire"];?>" name="idaddartpanier" id="leidpartenaire"/>

                                                                        <input type="hidden" value="payerproduits.php" name="idpageretour" />

                                                                        <input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" />

                        
                                                                 <input id="qty-2409" type="hidden" class="input-text qty" maxlength="12" value="1" name="qteproduit">
                          
                     <button id="hh" style="width=35px;"onClick="document.getElementById('temoin').value = this.value;" value="<?php echo $donnees["id_partenaire"];?>" type="button"  title="Réserver" class="btonreserv" name="addartpanier" data-toggle="modal" data-target="#myModal"><span><span>Réserver</span></span></button>
                     
                       
              
                                      
                                                            </form>
                
                
                
                
                
                
                                        
            </div> 
            
            
            <!--
                        <a href="https://www.bouteille-de-biere.com/bouteille-de-biere-bud-americaine.html" title="Bouteille de bière Bud Americaine" class="product-image"><img src="Blonde_fichiers/2381-1-bud-biere.jpg" alt="Bouteille de bière Bud Americaine" width="160" height="160"></a>   -->
                        
             <a href="#" title="<?php valid_donnees($donnees["prenom_partenaire"]);?>" class="product-image"><img src="../images/imgespartenaire/<?php echo $donnees["image_partenaire"];?>" alt="<?php echo $donnees["prenom_partenaire"];?>" width="160" height="160" /></a>
                      
            
            <div class="product-desc">
               <p><?php echo $donnees["description_partenaire"];?></p>
                
                
                  <!--
                
                <p>Couleur :<span class="rep">Blonde</span></p> 
                <p>Origine : <span class="rep"> Etats-Unis</span></p> 
                <p>Contenance : <span class="rep"> 0,33&nbsp;L</span></p> 
                <p>Alcool :<span class="rep"> 5°</span></p>  
                -->
                <!--
                                                                                                <div class="desc std">
                                                <a href="" title="" class="link-learn"></a>
                    </div>
                    
                -->
                
                    <!--
                    <ul class="add-to-links">
                                                    <li><a href="" class="link-wishlist"></a></li>
                                                                            <li><span class="separator">|</span> <a href="" class="link-compare"></a></li>
                                            </ul>
                    -->
            </div>
            

            
            
        </li>
                  
                     <?php } ?>
                  
                  </ol>      
                  
                  <!--  FIN TEST  -->
                  
                  
                
                </div>
            </div>
          </div>
          <!-- Start Col -->
   
           
           <!--   </div>    --> 
              
              
              

        </div>
              
        <!-- End Row -->
            
              
              
              
      </div>
   
       </section>
      
      </div>     
      
     
      <?php 
      
      function  chargercateborieproduit($lacategorie){
        
        
        }
          
          ?>
   <!--   
  <form action="getvaleur.php" method="post" onsubmit="saveDragDropNodes()" id="leform">
	<input type="hidden" name="tilelist" id="saveContent" value=""/>
	<input type="submit"  value="Envoyer"/>
</form> 
     -->                              
      
                               <script type="text/javascript">
 var lacategorie= document.getElementById('saveContent').value;
                                   document.getElementById('saveContent').value='Bonjour Checo Pola';
document.getElementById('leform').submit(); 
 
    
       

                               </script>           
                            
      
      
          
          
      }
      
      
      
      ?>
      
      <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      
      
      
      
      
      <div id="monModalPanier" class="modal fade" >
	    <div class="modal-dialog" id="sousmodalpanier">
	        <div class="modal-content" id="contentpartenaire">
	            <div class="modal-header">
	                <button type="button" class="close" 	data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Confirmation</h4>
	            </div>
	            <div class="modal-body">
	           
                    
								<?php
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);

									if(isset($_POST["acheterart"]))
									{
										if($_POST["codetransact"] == $_SESSION["codetransaction"])
										{
											$req = $bdd->query('SELECT soldetransaction FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction DESC LIMIT 0,1 ');
											$donnees = $req->fetch();
											
											$oldsoldetransaction = $donnees["soldetransaction"];
											
											$req->closeCursor();
														
											if($oldsoldetransaction >= $_POST["prixachat"])
											{		
												$motifs =  "Paiement de(s) produit / prestation(s)";
														
												$comments = $_POST["motifachat"];
												
												$debit = 0;
												
												$newsolde = ($oldsoldetransaction + $debit) - $_POST["prixachat"];
												
												$req = $bdd->prepare('INSERT INTO transaction (pseudotransaction,motifstransaction,debittransaction,credittransaction,soldetransaction,auteurtransaction,commentaire,datetransaction) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())');									
												$req->execute(array($_SESSION["pseudousers"], $motifs, $debit, $_POST["prixachat"], $newsolde, $_SESSION["pseudousers"], $comments));
												
												if($req)
												{
												
													$req = $bdd->prepare('UPDATE panierachat SET statutachat_panierachat = :statutachatpanierachat, statutlivrai_panierachat = :statutlivraipanierachat WHERE id_panierachat = :idpanierachat');
													$req->execute(array(
													'statutachatpanierachat' => "Paye",
													'statutlivraipanierachat' => "En cours",
													'idpanierachat' => $_POST["idpanierachat"]
													));
													 
													$req->closeCursor();
												
													$libertis = "LIBERTIS CLUB";
													
													$objet = "Paiement de(s) produit / prestation(s)";
													
													$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																									
													$req->execute(array($objet, $comments, $_SESSION["pseudousers"], $libertis ));
									
													$req->closeCursor();
													
													echo "<div class='club-succes'>Opération réussie, votre commande est en attente de livraison</div>.";
												}
												else
												{
													echo "<div class='club-echec'>L'opération a échoué. Veuillez réessayer SVP.</div><br /><br />";
												}
												$req->closeCursor();
											}
											else
											{
												echo "<div class='club-echec'>Désolé, vous n'avez pas assez de montant pour effectuer cet achat, veuillez vous approvionner. </div><br /><br />";
											}
											
										}
										else
										{
											echo "<div class='club-echec'>Le code de transaction est incorrect. </div><br /><br />";
										}
									}
									
									
									if(isset($_POST["achetertotal"]))
									{
										if($_POST["codetransact"] == $_SESSION["codetransaction"])
										{
											$req = $bdd->query('SELECT soldetransaction FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction DESC LIMIT 0,1 ');
											$donnees = $req->fetch();
											
											$oldsoldetransaction = $donnees["soldetransaction"];
											
											$req->closeCursor();
														
											if($oldsoldetransaction >= $_POST["montanttotal"])
											{		
												$motifs =  "Paiement de(s) produit / prestation(s)";
														
												$comments = $_POST["motifs"];
												
												$debit = 0;
												
												$newsolde = ($oldsoldetransaction + $debit) - $_POST["montanttotal"];
												
												$req = $bdd->prepare('INSERT INTO transaction (pseudotransaction,motifstransaction,debittransaction,credittransaction,soldetransaction,auteurtransaction,commentaire,datetransaction) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())');									
												$req->execute(array($_SESSION["pseudousers"], $motifs, $debit, $_POST["montanttotal"], $newsolde, $_SESSION["pseudousers"], $comments));
												
												if($req)
												{
												
													$req = $bdd->prepare('UPDATE panierachat SET statutachat_panierachat = :statutachatpanierachat, statutlivrai_panierachat = :statutlivraipanierachat WHERE pseudo_panierachat = :pseudopanierachat');
													$req->execute(array(
													'statutachatpanierachat' => "Paye",
													'statutlivraipanierachat' => "En cours",
													'pseudopanierachat' => $_SESSION["pseudousers"]
													));
													 
													$req->closeCursor();
												
													$libertis = "LIBERTIS CLUB";
													
													$objet = "Paiement de(s) produit / prestation(s)";
													
													$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																									
													$req->execute(array($objet, $comments, $_SESSION["pseudousers"], $libertis ));
									
													$req->closeCursor();
													
													echo "<div class='club-succes'>Opération réussie, votre commande est en attente de livraison</div>.";
												}
												else
												{
													echo "<div class='club-echec'>L'opération a échoué. Veuillez réessayer SVP.</div><br /><br />";
												}
												$req->closeCursor();
											}
											else
											{
												echo "<div class='club-echec'>Désolé, vous n'avez pas assez de montant pour effectuer cet achat, veuillez vous approvionner. </div><br /><br />";
											}
											
										}
										else
										{
											echo "<div class='club-echec'>Le code de transaction est incorrect. </div><br /><br />";
										}
									}
									
								?>
											
        
        
        <h3 style="color:#01A5FE; ">Payer pour les articles de votre panier</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour payer vos produits sélectionnés</p><br />
													
												<!-- Produits & Prestations -->
												<?php
													if($_SESSION["codetransaction"] != "0000")
													{
														?>
														
                                               
                                                <table class="table table-striped">
                                                <thead style="backgroud=black;">
    <tr>
        <th> N° </th>
        <th>Nom Produit</th>
        <th>Prix unitaire</th>
        <th>Qte</th>
        <th>Montant</th>
        <th>Validation</th>
    </tr>
</thead>
<tbody>
                                                
                                                
                                                
                                              <!--  <table style="width: 100%;">  -->
														<?php
														$libellemotifs = "Commande de :<br /><ul>";
														
														$motiflibel = "Commande de ";
														
													/*	$req = $bdd->query('SELECT id_panierachat,pseudo_panierachat,libelle_panierachat,prixunit_panierachat,qte_panierachat,montant_panierachat,statutachat_panierachat,image_produitprestation FROM panierachat, produitprestation  WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														$n =1 .'" AND produitprestation.;*/
                                                        
                                                        	
                                                                                                
                                                                                                    
                                                        
                                                        		$req = $bdd->query('SELECT id_panierachat,pseudo_panierachat,libelle_panierachat,prixunit_panierachat,qte_panierachat,montant_panierachat,statutachat_panierachat FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');                                                                 
														
                                                        
                                                        $n =1;
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        while($donnees = $req->fetch())
														{
															$libellemotifs.= "<li><strong>".$donnees["qte_panierachat"]."</strong> ".$donnees["libelle_panierachat"]." à ".$donnees["prixunit_panierachat"]." F l'unité; </li>";
															
															$motiflibel.= "<span style='font-size:15px;color: red;'><strong>".$donnees["qte_panierachat"]."</strong></span> ".$donnees["libelle_panierachat"]." de <strong>".$donnees["prixunit_panierachat"]."</strong> F <span style='font-size:15px;'>Total</span> :".$donnees["montant_panierachat"];
														
    
    $reqq = $bdd->query('SELECT image_produitprestation from produitprestation  WHERE libelle_produitprestation =  "'.$donnees["libelle_panierachat"].'"');
  
  while($donneess = $reqq->fetch()){
    $images= $donneess["image_produitprestation"];
    
    }
													
    
    ?>
    
    
     <tr>
    
															<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																
                                                               <!-- 
                                                                <span style="font-size:15px;color: red;"><strong><?php echo $donnees["qte_panierachat"];?></strong></span> <?php echo $donnees["libelle_panierachat"];?> de <strong><?php echo $donnees["prixunit_panierachat"];?></strong> F. &nbsp; <span style="font-size:15px;">Total</span> : <strong><?php echo $donnees["montant_panierachat"];?></strong> F
																<br /><br />
																
																<input type="text" name="codetransact" placeholder="Code de transaction" />
																
																<input type="hidden" value="<?php echo $motiflibel;?>" name="motifachat" />
																
																<input type="hidden" value="<?php echo $donnees["prixunit_panierachat"];?>" name="prixachat" />
																
																<input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" name="idpanierachat" />
																
																<br /><br />
																<input type="submit" name="acheterart" value="Payer" class="club-button" />
																<span style="font-size:22px;"><a href="deleteartpanier.php?idartpanier=<?php echo $donnees["id_panierachat"];?>">Annuler </a></span>
															-->
    
                                           
        <td>
           <img width="100" height="100" src="../images/imgesprdtsves/<?php echo $images;?>" class="imageprod" alt=""/> 
                                                                
         </td>
        <td>
            
            <?php echo $donnees["libelle_panierachat"]; ?>
                                                        
         </td>
        <td>
            <?php echo$donnees["prixunit_panierachat"];?>
            
          
       </td>
         
                                                                <td>
            
            <?php echo $donnees["qte_panierachat"]; ?>
                                                        
         </td>
        <td>
            <?php echo  $donnees["montant_panierachat"];?> F
            
          
       </td>
         
                                                 <td>
                                                     <input style="width:90%; height:40px;" type="text" name="codetransact" placeholder="Code de transaction" /> 
																
																<input type="hidden" value="<?php echo $motiflibel;?>" name="motifachat" />
																
																<input type="hidden" value="<?php echo $donnees["prixunit_panierachat"];?>" name="prixachat" />
																
																<input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" name="idpanierachat" />
																
																<br /><br />
																<input style="margin-left:10px; " type="submit" name="acheterart" value="Payer" class="club-button" />
																<span style="font-size:22px;"><a href="deleteartpanier.php?idartpanier=<?php echo $donnees["id_panierachat"];?>">Annuler </a></span>
            
          
       </td>
                                                                
           
    </form>
			                                                     
    </tr>
   
														<?php
														}
														
														$libellemotifs.="</ul>";
														
														$req->closeCursor();
														?>
														</tbody></table>
                                                
                                                
        
        
        <hr/><hr/>
           <p style="background:black; height:70%; width: 100%; font-size: 1.5em; color:white"> Récapitulatif des commandes</p> 
                           
														<?php
														
														$req = $bdd->query('SELECT SUM(montant_panierachat) AS montanttotal FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														while($donnees = $req->fetch())
														{
															$montanttotal = $donnees["montanttotal"];
														}
														$req->closeCursor();
														
														?><br /><br />
															<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																
																
                                                                <div style="font-size:1em; padding:5px;">
                                                                 <?php echo $libellemotifs; ?>
                                                                
                                                                </div>
                                                                
                                                               
																
																
																<span style="font-size:15px;">Montant Total : <span> <span style="font-size:22px;color:green;"><?php echo $montanttotal;?></span> F CFA
																<br /><br />
																
																<input type="text" name="codetransact" placeholder="Code de transaction" />
																
																<input type="hidden" value="<?php echo $montanttotal;?>" name="montanttotal" />
																
																<input type="hidden" value="<?php echo $libellemotifs;?>" name="motifs" />
																
																<input type="submit" name="achetertotal" value="Tout Payer" class="club-button" />
																
																<span style="font-size:22px;"><a href="deleteartpanier.php">Tout Annuler </a></span>
																<br />
																<hr/>
                                                              
                                                                    <p style="font-size:18px;font-style:italic;text-decoration:none;"><a href="payerproduits.php">Continuer mes achats</a></p>
															</form>
                                                                     
                                                                    
														<?php
													}
													else
													{
													?>
														<div class='club-echec'>Veuillez changer votre code de transaction avant toute transaction. </div><br /><br />
													<?php
													}
												?>	
												<!-- Fin Produits & Prestations -->
						
<script type="text/javascript" src="../script/controle_form.js"></script>
<?php
if($_SESSION["codetransaction"] == "0000")
{
?>
	<script>
	alert("Votre code de transaction par défaut est \"0000\". Par mesure de sécurité, nous vous prions de bien vouloir le changer par un autre code à 4 chiffres dans la rubrique \"Porte feuille\" sous peine de voir votre compte bloqué. Pour cela, entrez le code actuel (\"0000\") pour ouvrir votre porte feuille. Merci ");
	</script>
<?php
}
?>


	            </div>
	           
                                                                
                                                                
                       <div id="monModalResrever" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
                    Réserver pour quand ?
                </div>
                
                
                
      <div class="row col-8">
      
      <p> Veullez indiquer la date et l'heure que vous désirez</p>
      
      </div>
      
      
       <form class="form_panier" method="post" action="" >
      <div class="row">
      <div class="col-6">
          <p> <label> Date désirée </label> : <input type="date" name="datedesiree" /> </p>
              
      </div>
       
      </div>
          
      <div class="row">
     
          <div class="col-6">
               <p> <label> Heure voulue  </label> : <input type="date" name="heurevoulue" /> </p>
           
      </div>
      
      </div>
      
      
      </form>
      
                
                
                
            </div>
           </div>
           </div>                
                                         
                                                                
                                                                
                                                                
                                                                
                
                
                <div class="modal-footer">
	                <button type="button" class="btn btn-default" 	data-dismiss="modal">Fermer</button>
	                <button type="button" class="btn 	btn-primary">Sauvegarder</button>
	            </div>
	        </div>
	    </div>
	</div>
            
            
           

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

        
  
            
            
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
        
            
            
      </body>
    </html>