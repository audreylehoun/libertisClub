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
   <title>Produits et Services | LIBERTIS CLUB</title>
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
       <link rel="stylesheet" href="css/produitsliste.css">    
    <link rel="stylesheet" href="css/responsive.css">

      
      
          
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
          body{
              
            background-image: url(images/bier.png);
              background-attachment: fixed;
              background-repeat: no-repeat;
              background-position: left;
        
              
          }
          #team{
              background: white;
          }
          
          #single-teamm{
              height: 400px;
          }
          
      </style>
      
      <script>
      function chargernewpage(var leid, var leproduit){
         window.open('produitsboisson.php?catpro=' .leid . '&pro=' .leproduit, '_self');
      }
      
      </script>
      
      
      
      
  </head>
  
  <body>
     
      

    <!-- Header Section Start -->
  
      
                    <?php
include("entetehaut.php");



/*session_start(); */
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
          <div class="toolbar" style="visibility:hidden;">
    <div class="pager">
        <div class="amount">
                            1 à 25 sur 198                    </div>

        <div class="limiter">
            <select onchange="setLocation(this.value)">
                            <option value="https://www.bouteille-de-biere.com/blonde.html?limit=10">
                    10                </option>
                            <option value="https://www.bouteille-de-biere.com/blonde.html?limit=25" selected="selected">
                    25                </option>
                            <option value="https://www.bouteille-de-biere.com/blonde.html?limit=50">
                    50                </option>
                        </select> par page        </div>

        

                            
        
        
        
            
        
        
        
        
        
        
        
            <div class="sort-by">
                <label>Trier par</label>
                <select onchange="setLocation(this.value)">
                                    <option value="https://www.bouteille-de-biere.com/blonde.html?dir=asc&amp;order=position" selected="selected">
                        Position                    </option>
                                    <option value="https://www.bouteille-de-biere.com/blonde.html?dir=asc&amp;order=name">
                        Nom                    </option>
                                    <option value="https://www.bouteille-de-biere.com/blonde.html?dir=asc&amp;order=price">
                        Prix                    </option>
                                </select>
                                    <a href="https://www.bouteille-de-biere.com/blonde.html?dir=desc&amp;order=position" title="Par ordre décroissant"><img src="Blonde_fichiers/fl-bl-haut.png" alt="Par ordre décroissant" class="v-middle"></a>
                            </div>
                
        
        
    
    
    
        <div class="pages">
        <strong>Page :</strong>
        <ol>
        
        
        
                                    <li class="current">1</li>
                                                <li><a href="https://www.bouteille-de-biere.com/blonde.html?p=2">2</a></li>
                                                <li><a href="https://www.bouteille-de-biere.com/blonde.html?p=3">3</a></li>
                                                <li><a href="https://www.bouteille-de-biere.com/blonde.html?p=4">4</a></li>
                                                <li><a href="https://www.bouteille-de-biere.com/blonde.html?p=5">5</a></li>
                    
                    <li>
                <a class="next i-next" href="https://www.bouteille-de-biere.com/blonde.html?p=2" title="Suivant">
                                            <img src="Blonde_fichiers/pager_arrow_right.gif" alt="Suivant" class="v-middle"/>
                                    </a>
            </li>
                </ol>

    </div>
       
    </div>

  
</div>
          
          
          </div>
          
           
       <?php
								
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
                                    $bdd->exec('SET NAMES utf8');
									
          
          $req = $bdd->query("SELECT `categorie_produit`, count(`id_produitprestation`) as nbre from produitprestation group by `categorie_produit`");
												
           ?>
          
           <h2 style="font:18 bold Verdana; margin-top:2px;" > <strong>Retrouver ici des boissons et vos repas préférés.. !!</strong></h2>
          <div class="row" style="background:#FF8610; padding-bottom:10px;height:1px;">
        <br/>
          
          </div>
          <p><br/></p><p></p>
        
           
          <div class="row" >
          <!-- Start Col -->
              
                <p><br/><br/></p>
              
              
          <div class="col-lg-3 col-md-6 col-xs-12">
          
  
    
              <div class="single-team" id="single-teamm"  >
                
        <p class="block-subtitlee">Affiner la recherche</p>
            <dl id="narrow-by-list">Type <dd class="dd-type_biere"> 
                
              <!--   <form action="#" method="post" onsubmit="saveDragDropNodes()" id="leform">
	<input type="hidden" name="tilelist" id="saveContent" value="">
	<input type="submit"  value="Envoyer">
</form> -->
                
                <ol >
                    <?php 
                    $t = 1;
                     while(($donnees_TotalCateg = $req->fetch())){
													
													
                                                    ?>
                  
            <li class=" type_biere_462">
        
                 <button value="<?php echo $donnees_TotalCateg['categorie_produit'] ;?>" type="button" 
                         onclick='window.location.href="produitsboisson.php?catpro="+(this.value)+"&pro=boi"'> <?php echo $donnees_TotalCateg['categorie_produit'].'(' .$donnees_TotalCateg['nbre']. ')' ;?></button>
                <?php $t++; } ?>    
                    </li>
                
        </ol>
            </dd>
            </dl>
        </div></div>
              
              
              
          <!-- Start Col -->
 
            
          
       
          <div class="col-lg-9 col-md-6 col-xs-12" >

              
              
            <div class="single-team" >
              <div class="col-lg-12 col-md-6 col-xs-12" id="item1" >
      
           
                  
                   <ol class="products-list " id="products-list">
                       
                       <?php
													include 'paginationprdtssveces.php';
												   /* On calcule le nombre total d'entrées de notre table 
													09.que l'on stocke dans $nb_entrees */
													$req = $bdd->query("SELECT COUNT(*) AS total FROM produitprestation ");
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
                                                                    
                       
                       if(isset($_GET["catpro"]) && (isset($_GET["pro"]) ))
                        {
                           
                           /* AFFICHAGE DE TOUTES LES BOISSONS */
                           if(($_GET["catpro"] == 'tout') && ($_GET["pro"] == "boi") ) {
                        echo ' toutes les boissons : catpro = ' .$_GET["catpro"]; 
                            
                            $req = $bdd->query('SELECT * FROM produitprestation ORDER BY type_produitprestation DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                       
                          }
                     
                           
                         /* AFFICHAGE D'UNE CATEGORIE DE BOSSON DONNEE */
                           if(($_GET["catpro"] != 'tout') && ($_GET["pro"] == "boi") )
                        {
                            $req = $bdd->query('SELECT * FROM produitprestation where categorie_produit = "' . $_GET["catpro"] . '"  ORDER BY type_produitprestation DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                             echo valid_donnees(' Categories de  boissons :  '  .$_GET["catpro"]); 
                        }   
                           
                        }
                           
                           
                           ?> 
                       
                       <!--
                           <form action="getvaleur.php" method="post" onsubmit="saveDragDropNodes()" id="leform">
	<input type="hidden" name="tilelist" id="saveContent" value="">
	<input type="submit"  value="Envoyer">
</form> 
                                   
                               <script type="text/javascript">
 var lacategorie= document.getElementById('saveContent').value;
                                   document.getElementById('saveContent').value='Bonjour Checo Pola';
document.getElementById('leform').submit(); 
 
    
       

                               </script>           
                            
                            -->
                      
                       
                       <?php
                       
         
                                    
                                    while($donnees = $req->fetch()){
                                                         $letypeprod = $donnees["type_produitprestation"];
                                                        
                                                        
													?>
                                                         
                
            <li class="item odd">
            
            <h2 class="product-name"><a href="#" title="<strong><?php echo $donnees["libelle_produitprestation"]; ?> F CFA</strong>&nbsp"><strong><?php echo $donnees["libelle_produitprestation"]; ?></strong>&nbsp</a></h2>
                    
            
            <div class="product-shop ">
                    
                    

                                    
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-2409">
                                            <span class="price"><strong><?php echo $donnees["prix_produitprestation"]; ?> F CFA</strong>&nbsp;</span>                                    </span>
                        
        </div>

                    <br>
                            <!--                
                            <input id="qty-2409" name="qty" type="text" class="input-text qty" maxlength="12" value="1">
                            <button id="btn-atc-2409" type="button" title="Ajouter au panier" class="button btn-cart" onclick="setLocation('https://www.bouteille-de-biere.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYm91dGVpbGxlLWRlLWJpZXJlLmNvbS9ibG9uZGUuaHRtbA,,/product/2409/form_key/edA7q5lUmDiGK5U0/'+'qty/'+jQuery('#qty-2409').val()+'/')"><span><span>Ajouter au panier</span></span></button>
-->
                            
                <form class="form_panier" method="post" action="ajoutartpanier.php" >
                                                                    
                                                                <!--
                                                                        <input class="add_panier" type="submit" name="addartpanier" value="Ajouter au panier"
                                                                 
                                                                   onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanierf" src="images/ajoutpanier.png" width="50" /> 
                                                                   -->
                                                                 
                                                                
                                                               
                                                                 
                                                               

                                                                        <input type="hidden" value="<?php echo $donnees["id_produitprestation"];?>" name="idaddartpanier" />

                                                                        <input type="hidden" value="produitsboisson.php?catpro=tout&pro=boi" name="idpageretour" />

                                                                        <input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" />

                        
                                                                 <input id="qty-2409" type="number" class="input-text qty" maxlength="12" value="1" name="qteproduit">
                                                                 
                 
                    
                      <!-- 
                                                        
                    <button id="btn-atc-2409" type="button" title="Ajouter au panier" class="button btn-cart" name="addartpanier"   onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanierf" src="images/ajoutpanier.png" width="50" margin-top="5px" ><span><span>Ajouter au panier</span></span></button>
                    
                       -->         
                    
                     <button id="btn-atc-2409" type="submit" title="Ajouter au panier" class="button btn-cart" name="addartpanier" onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');"><span><span>Ajouter au panier</span></span></button>
                     
                    
                            
                    
                          <!-- 
                    
                 <input id="btn-atc-2409" class="btn-cart" type="submit" name="addartpanier" value="Ajouter au panier"
                                                                 
                                                                   onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanierf" src="images/ajoutpanier.png" width="50" margin-top="5px" /> 
                
                
                
                
                      
                                                       
                                                                <input onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanier" src="images/ajoutpanier.png" width="50" <span><label>Ajouter au panier:</label> </span> />
                                                            
                                                             <button class="button btn-cart" id="btn-atc-2409" type="button" name="addartpanier" value="Ajouter au panier"
                                                                 
                                                                   onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanierf" src="images/ajoutpanier.png" width="50" margin-top="5px" /> 
                                                              --> 
                                                            
                                                            </form>
                
                
                
                
                
                
                                        
            </div> 
            
            
            <!--
                        <a href="https://www.bouteille-de-biere.com/bouteille-de-biere-bud-americaine.html" title="Bouteille de bière Bud Americaine" class="product-image"><img src="Blonde_fichiers/2381-1-bud-biere.jpg" alt="Bouteille de bière Bud Americaine" width="160" height="160"></a>   -->
                                                                  
             <a href="#" class="product-image"><img src="../images/imgesprdtsves/<?php echo $donnees["image_produitprestation"];?>" width="160" height="160" alt="<?php echo $donnees["libelle_produitprestation"];?>" /></a>
                       
            
            
            
            <div class="product-desc">
               
               <?php
                
                
                
                if ($_GET["catpro"] == 'Repas'){
                
                    ?>
                     <p>Catégorie : <span class="rep"><?php echo $donnees["categorie_produit"];?></span></p> 
               <p><strong><?php echo $donnees["libelle_produitprestation"];?></strong></p>
                  <p>Pour : <span class="rep"><?php echo $donnees["nombre_personne_produit"];?>&nbsp personnes;</span></p> 
                    
                 <?php   
                    
                    
                    
                }elseif ($_GET["catpro"] == 'Fruit'){ 
                     ?>
                     <p>Catégorie : <span class="rep"><?php echo $donnees["categorie_produit"];?></span></p> 
               <p><strong><?php echo $donnees["libelle_produitprestation"];?></strong></p>
                    
                 <?php  
                    
                }elseif ($_GET["catpro"] == 'Friandise'){ 
                     ?>
                    <p>Catégorie : <span class="rep"><?php echo $donnees["categorie_produit"];?></span></p> 
               <p><strong><?php echo $donnees["libelle_produitprestation"];?></strong></p>
                  <p>Pour : <span class="rep"><?php echo $donnees["nombre_personne_produit"];?>&nbsp personne(s);</span></p> 
                    
                 <?php  
                
                   }else{
                                          
                ?>
                                
                <p>Catégorie : <span class="rep"><?php echo $donnees["categorie_produit"];?></span></p> 
                <p>Contenance : <span class="rep"><?php echo $donnees["contenance_produit"];?>&nbsp;</span></p> 
                <p>Alcool :<span class="rep"><?php echo $donnees["taux_alcool_produit"];?></span></p>  
                <?php
                }
               ?>
                
                
                
                
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
                                                     <input style="width:90%; height:40px;" type="text" name="codetransact" placeholder="Code de transaction"<span> /> 
																
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
                                                                    
                                                                    
                                                                    <input id="lelien" type="text" name="achetertotal" value="<?php echo $_SERVER['PHP_SELF'] ?>" class="club-button" />
																
																<span style="font-size:22px;"><a href="deleteartpanier.php">Tout Annuler </a></span>
																<br />
																<hr/>
                                                              
                                                                    <p style="font-size:18px;font-style:italic;text-decoration:none;"><a href="document.getElementById('lelien').value" onclick="window.open(document.getElementById('lelien').value)">Continuer mes achats</a></p>
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
	           
                
                
                <div class="modal-footer">
	                <button type="button" class="btn btn-default" 	data-dismiss="modal">Fermer</button>
	                <button type="button" class="btn 	btn-primary">Sauvegarder</button>
	            </div>
	        </div>
	    </div>
	</div>
      
      
      
      
      
      
      </body>
    </html>