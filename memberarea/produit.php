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
    <title>Acceui | LIBERTIS CLUB</title>
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
          
          .container img:hover{
              color:#FF8610;
              font-size: 1em;
              
          }
 #lelogo{
        margin-top: 10px;
     
          }
      
      </style>
      
      
      
      
      
      
  </head>
  
  <body style="background: white;">

    <!-- Header Section Start -->
                      <div class="container-fluid fixed-top scrolling-navbar" style="background:white;height:50px;" >
          
          <p style="font: 2em bold, red-serif; height: 4%; width:100%;">LIBERTIS CLUB</p>
          </div>


      
      <header id="home" class="hero-area">    
      <div class="overlay" style="visibility:hidden;">
        <span></span>
        <span></span>
      </div>
        
        
         <?php
include("menuhaut.php");



/*session_start(); */
?>
       
        
        
       
     
    <!-- Header Section End --> 
        
        </header>
       
      
  
      
      
      
      
      
      
      
       <?php 
	 $i = 1;
    while ($i < 2){
		
		
			
			?>
      
      
      <section id="team" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="team-text section-header text-center">  
              <div>   
                <h2 style="color:#FF8610" class="section-title">Produits et Prestations </h2>
                <div class="desc-text">
                    <p>Procurez vous tous les produits pour votre consommation</p> 
                  <p>Boissons, repas, fruits, friandises, liqueurs et autres ...</p>
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <a href="produitsboisson.php?catpro=Repas&pro=boi">
              <div class="single-team">
              <div class="team-thumb">
                  
                 <img src="images/repas1.jpg" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list">
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div> 
                  <a href="produitsboisson.php?catpro=Repas&pro=boi" style="text-decoration:none;">
                <div class="team-inner text-center">
                  <h5 class="team-title">Repas</h5>
                  <p>Consulter vos plats préférés</p>
                  </div></a>
              </div>
            </div>
              <a/>
          </div>
          <!-- Start Col -->
 
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <a href="produitsboisson.php?catpro=tout&pro=boi">
              <div class="single-team">
              <div class="team-thumb">
                <img src="images/boisson.jpg" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list">
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
                  <a href="produitsboisson.php?catpro=tout&pro=boi" style="text-decoration:none;">
                <div class="team-inner text-center">
                  <h5 class="team-title">Boissons</h5>
                  <p>Tout pour votre rafraichissement</p>
                </div><a/>
              </div>
            </div><a/>
          </div>
          <!-- Start Col -->
 
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
           <a href="produitsboisson.php?catpro=Fruit&pro=boi">
              <div class="single-team">
              <div class="team-thumb">
                <img src="images/fruit.jpg" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">   
                  <ul class="social-list">
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
                  <a href="produitsboisson.php?catpro=Fruit&pro=boi" style="text-decoration:none;">
                <div class="team-inner text-center">
                  <h5 class="team-title">Fruits</h5>
                  <p>Dessert</p>
                </div>
              </div>
            </div><a/>
          </div>
          <!-- Start Col -->
 
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
             <a href="produitsboisson.php?catpro=Autre&pro=boi">
              <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/04.jpg" class="img-fluid" alt="">
              </div>

              <div class="team-details">
                <div class="team-social-icons">
                  <ul class="social-list">
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
                  <a href="produitsboisson.php?catpro=Autre&pro=boi" style="text-decoration:none;">
                <div class="team-inner text-center">
                  <h5 class="team-title">Extra</h5>
                  <p>Autres produits</p>
                </div>
              </div>
            </div><a/>
          </div>
          <!-- Start Col -->
 

        </div>
        <!-- End Row -->
      </div>
    </section>
      
       <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
           <div class="row">
          <div class="col-lg-12">
            <div class="team-text section-header text-center">    
             <div>  
                  
                <h2 class="section-title" style="color:#FF8610;" >Evenements et partenaires </h2>
                <div class="desc-text">
                    <p>Participer à des évenements de réjouissances</p> 
                  <p>Réservez votre place pour des sublimes soirèes organisées en compagnies des partenaires de votre choix</p>
                </div>
              </div> 
            </div>
          </div>

        </div>
          

          
        <div class="row">
          <!-- Start Col -->
          
            
            
            
             
          <div class="col-lg-4 col-md-6 col-xs-12" id="item1">
           <a href="produitevenement.php " style="text-decoration:none;">
              <div class="services-item text-center">
              <div class="icon">
                   <img width="120" height="120" src="images/danceParty.jpg" class="imageprod" alt=""/> 
          
                 <!-- <i class="lni-cog"></i>-->
              </div>
              <h4>Evenements / Soirées</h4>
              <p>Réservez votre place pour des sublimes soirèes organisées en compagnies des partenaires de votre choix.</p>
               </div></a>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
         
            <div class="col-lg-4 col-md-6 col-xs-12" id="item2">
             <a href="produitspartenaires.php?tranage=tout " style="text-decoration:none;">
                <div class="services-item text-center">
              <div class="icon">
                <img width="120" height="120" src="images/partenaire.jpg" class="imageprod" alt=""/> 
          
                 <!-- <i class="lni-brush"></i>-->
              </div>  
              <h4>Partenaires</h4>
                <p>Catalogue de nos partenaires.<br/><br/><br/></p>    
                 </div></a>
              </div>
          <!-- End Col -->
         

        </div>
     
    </section>
    <!-- Services Section End -->
      
      
      
      
       <?php 
	 ++$i;
		}
			
			?>
     
         
      <div id="monModalPanier" class="modal fade">
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

      <section id="contact" class="section">

<div class="container">

<div class="row">
<div class="col-lg-12">
<div class="contact-text section-header text-center">
<div>
 <h2 class="section-title">Get In Touch</h2>
<div class="desc-text">
<p style="color:#FF8610; font: 35px bold, sans-serif;" >CONTACT</p>
    <br/>
<p>Laissez nous un message nous répondrons généralement </p>
    <p>dans un maximum de 24 heures de temps.</p>
</div>
</div>
</div>
</div>
</div>


<div class="row">

<div class="col-lg-12 col-md-12">
<form id="contactForm" novalidate="true">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Nom" required="" data-error="Veuillez entrer nom">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" placeholder="Objet" id="msg_subject" class="form-control" name="msg_subject" required="" data-error="Veuillez entrer l'objet de votre requete">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" id="email" name="email" placeholder="Email" required="" data-error="Veuillez entrer votre mail">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" placeholder="Pays ou ville" id="budget" class="form-control" name="budget" required="" data-error="Veuillez entrer le nom de votre ville ou pays">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" id="message" name="message" placeholder="Ecrivez votre message" rows="4" data-error="Ecrivez votre message." required=""></textarea>
<div class="help-block with-errors"></div>
</div>
<div class="submit-button">
<button class="btn btn-common disabled" id="submit" type="submit" style="pointer-events: all; cursor: pointer;">Envoyer</button>
<div id="msgSubmit" class="h3 hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</div>
</form>
</div>


<div class="col-lg-1">
</div>


<div class="col-lg-4 col-md-12">
<div class="contact-img">
<img src="./Slick - Bootstrap 4 Template_files/01(3).png" class="img-fluid" alt="">
</div>
</div>


<div class="col-lg-1">
</div>

</div>

</div>
</section>
            
            
            
            
       
      </body>
          <footer class="STA-footer" style="background:#0000FF; height: 45px;">
  <div class="STA-footer-inner">
<p style="color: white; font-size:1.4em;">Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
  </div>
</footer>


    </html>