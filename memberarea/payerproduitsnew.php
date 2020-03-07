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
    <title>Produits et Services | LIBERTIS CLUB</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />
     <link rel="stylesheet" href="style/style_catgorieprod.css" media="all" />
   <link rel="stylesheet" href="style/style_lesproduits.css" media="all" />
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

    
    <!-- chargement des scripts  -->	
       <!-- 
<script type="text/javascript" src="scr/jquery.js" ></script>	
<script type="text/javascript" src="scr/jquery-ui.js"></script>
<script type="text/javascript" src="scr/jquery.spasticNav.js"></script>	
    
   -->	


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

    
    
    
    
    
    #global {
   overflow:auto;
}
#gauche {
   float:left;
   width:30%;
     border-left:  1px solid red;
     border-right:  1px solid red;
}
#droit {
   overflow:auto;
    margin-left: 50px;
}
    
    
    
    
#bloc_prestation {
  border-style:  2px solid #C7C7C7;
     border-bottom: 2px solid #C7C7C7;
  border-right: 3px solid #C7C7C7;
     border-left: 1px solid #C7C7C7;
     border-top: 3px solid #C7C7C7;
  padding: 10px;
  float: left;
  width: 350px;
  margin-left: 2px;
  background-color: white;
  background-position: right top;
  background-repeat: no-repeat;
  background-image: url(images/terrekpZ1goldrorange60.png);
    list-style-type: none;
   
}
#bloc_prestation li {
  list-style-type: none;
    color:#1D1E20;
    list-style-type: none;
   
      
}
#bloc_prestation a {
  color: #1D1E20;
  text-decoration: none;
    font-size: 2em;
    list-style-type: none;
}
#bloc_prestation a:hover {
  color: blue;
}
#bloc_prestation li a:hover {
  border-left: 5px solid red;
  background-color: white;
  padding-left: 5px;
    list-style-type: none;
}
    
    
    }



</style></head>
<body>
<div id="club-main" style="margin-top:-20px;">
<!-- Début entête -->
<?php
	include("structure/header.php");
?>
<!-- Fin entête -->

<div class="club-sheet clearfix">
   
    <div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 24%;" >
												<div style="text-align:center;">
													<p><a href="editpwmtpass.php"><img src="images/users-information.png" /></a></p>
													<p><a href="editpwmtpass.php" style="font-size:18px;">Informations personnelles</a></p>
												</div>
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 24%;" >
												<div style="text-align:center;">
													<p><a href="historiquetransaction.php"><img src="images/francsCFA.png" title="Porte feuille" /></a></p>
													<p><a href="historiquetransaction.php" style="font-size:18px;">Les transactions</a></p>
												</div>
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 24%;" >
												<div style="text-align:center;">
													<p><a href="editmessage.php"><img src="images/email-icon.png" /></a></p>
													<p><a href="editmessage.php" style="font-size:18px;">Les messages</a></p>
												</div>
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 24%;" >
												<div style="text-align:center;">
													<p><a href="editmessage.php"><img src="images/tchat.png" /></a></p>
													<p><a href="editmessage.php" style="font-size:18px;">Discussion</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							
								<br /><br />
								<div style="border-top:2px dashed #01A2F9;">
									<br />
								</div>
								<p><br /></p>
                               
    
                                                <h3 class="text_achet_produit" style="font-style:bold;font-size:20px;margin-left:520px; color:blue">Payer un produits ou une prestation</h3><hr />
													<p style="font-style:italic;font-size:16px;margin-left:10px;">Choisissez les produits que vous désirez puis ajouter les au panier</p><br />
                                                            <p><br /></p>
													
  
       <?php
								
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);

								?>
    
    
    <div id="global">
    <div id="gauche">
    <div iclass="bloc_prestation" id="bloc_prestation">
          <ul>
    <li><a href="payerproduitsnew.php">     Consulter les repas</a></li>
    <hr>
        <li><a href="payerproduitsnew.php">     Consulter les boissons</a></li>
    <hr>
        <li><a href="payerproduitsnew.php">      Consulter les fruits</a></li>
    <hr>
        <li><a href="payerproduits_partenaires.php">       Choisissez votre partenaire</a></li>
    <hr>
        <li><a href="#">       Autres produits</a></li>
    
</ul> 
    </div>
    <br/>
        <br/>
       
        
        	<!-- Rubrique règlement -->
												<table style="width: 88%; visibility:hidden" >
													<tr>
														<th>LIBER TIS</th>
													</tr>
													<tr>
														<td>
														<ul>
															<li><a href="reglementinterieur.php" style="text-decoration:none;font-size:14px;">Règlement intérieur de LIBERTIS</a></li>
															<li><a href="conditiongeneralevente.php" style="text-decoration:none;font-size:14px;">Conditions Générales de ventes de LIBERTIS</a></li>
														</ul>
														</td>
													</tr>
												</table>
												<!-- Fin règlement -->
        
    
    
    
    
    </div>
 
    <div id="droit">
       
     
        
        
        
        <div class="club-layout-cell layout-item-0" style="width: 66%;" >
												
                                                <!--
                                                <h3>Payer un produits ou une prestation</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour notifier l'approvisionnement de votre compte</p><br />
													 -->
												<!-- Produits & Prestations -->
													
            
                                                    <table style="width: 100%; visibility:hidden">
													<tr>
														<th colspan="4" style="font-size:24px;font-weight:normal;">Produits & Prestations</th>
													</tr>
													
                                                        
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
                                                  $req = $bdd->query('SELECT * FROM produitprestation ORDER BY type_produitprestation DESC LIMIT 
                                                    
                                                    
                                                    '.$start.', '.$entrees_par_page.' ');
													
                                              $changer=0;     
                                    
                                    while($donnees = $req->fetch())
													  
                                                             
                                                    
                                                    
                                                    
                                                    {
                                                         $letypeprod = $donnees["type_produitprestation"];
                                                        
                                                        
													?>
                                                        
                                                        <div class="mycatArchiveBloc" >

                                                          
                                                             <a href="#" class=" lienprod">
                                                                 
                                                                 
                                                                 <img width="200" height="200" src="../images/imgesprdtsves/<?php echo $donnees["image_produitprestation"];?>" class="imageprod" alt="" sizes="(max-width: 300px) 100vw, 300px" 
                                                                        
                                                           
                                                            
                                                            
                                                            <span class="price"><p class="produit_prix"> <br/> <strong><?php echo $donnees["prix_produitprestation"]; ?> F CFA</strong>&nbsp;</p></span>
                                                            
                                                            <p> <br/></p> 
                                                
                                                            <h1 class="produit_type"><?php echo str_ireplace("Produit-","",$letypeprod); ?></h1>
                                                             
                                                           
                                                           
                                                            
                                                             <h2 class="produit_nom"><?php echo $donnees["libelle_produitprestation"]; ?></h2></a>


                                                        <div class="panel_addpanier">

                                                          <!--  <input class="add_panier" type="submit" name="addpanier" value="Ajouter au panier"  
                                                              <input class="add_panier" type="submit" name="addartpanier" value="Ajouter au panier"
                                                                 
                                                                   onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanierf" src="images/ajoutpanier.png" width="50" /> 
                                                                   
                                                                   -->
                                                               
                                                                  
                                                            <p style="color:#6DC4C5">--------------</p>
                                                            
                                                            
                                                            
                                                            <form class="form_panier" method="post" action="ajoutartpanier.php" >
                                                                    
                                                                <!--
                                                                        <input class="add_panier" type="submit" name="addartpanier" value="Ajouter au panier"
                                                                 
                                                                   onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanierf" src="images/ajoutpanier.png" width="50" /> 
                                                                   -->
                                                                 
                                                                
                                                               
                                                                     
                                                                
                                                                <input type="number" name="qteproduit" id="qteproduit" size="100" placeholder="Quantité" />
                                                               

                                                                        <input type="hidden" value="<?php echo $donnees["id_produitprestation"];?>" name="idaddartpanier" />

                                                                        <input type="hidden" value="payerproduits.php" name="idpageretour" />

                                                                        <input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" />

                                                               <!--         
                                                                <input onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanier" src="images/ajoutpanier.png" width="50" <span><label>Ajouter au panier:</label> </span> />
                                                                --> 
                                                             <br/>
                                                             <input class="add_panier" type="submit" name="addartpanier" value="Ajouter au panier"
                                                                 
                                                                   onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanierf" src="images/ajoutpanier.png" width="50" margin-top="5px" /> 
                                                            
                                                            
                                                            </form>
                                                        </div>       

                                                        
                                                        
													<tr>
														<td style="width: 20%;padding:0px 15px;">
															<?php if($donnees["image_produitprestation"] != "")
															{
															?>
															<p>
																<img src="../images/imgesprdtsves/<?php echo $donnees["image_produitprestation"];?>" style="max-width:70px;max-height:70px;border-radius:60px;" />
															</p>
															<?php
															}
															?>
															<p style="font-size:15px;color:#01A2F9;text-align:center;"><?php echo $donnees["libelle_produitprestation"]; ?></p>
														</td>
														<td style="width: 20%;padding:0px 15px;">
															<p style="color: rgb(250, 93, 15);font-size:15px;text-align:center;"><?php echo $donnees["prix_produitprestation"]; ?> F CFA</p>
														</td>
														<td style="width: 30%;padding:0px 15px;">
															<p><?php echo $donnees["description_produitprestation"]; ?></p>
														</td>
														<td style="width: 30%;padding:0px 15px;">
															<form method="post" action="ajoutartpanier.php">
																<br />
																<label for="qteproduit"> Quantité : </label><br /><br />
																<input type="number" name="qteproduit" id="qteproduit" size="100" />
																
																<input type="hidden" value="<?php echo $donnees["id_produitprestation"];?>" name="idaddartpanier" />
																			
																<input type="hidden" value="payerproduits.php" name="idpageretour" />
																																
																<input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" /><br /><br />
																
																<input onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanier" src="images/ajoutpanier.png" width="50" />
															</form>
														</td>
													</tr>


													<?php
													}
													$req->closeCursor();
													/*Et on affiche la pagination correspondante */
													echo pagination($total_pages,$page_courante);
													?>
													</table>
												<!-- Fin Produits & Prestations -->
												
												<br />
											</div>
        
        
        
        
        
        
        
        
        
        <!--  FIN DE CODE DE DROITE NEW   -->>
    
    </div>
</div>


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   <div class="club-layout-wrapper">
                <div class="club-content-layout" style="visibility:hidden">
                    <div class="club-content-layout-row">
                        
                        <div class="club-layout-cell club-content">
							<article class="club-post club-article">
								<?php
								try
								{
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);

								?>
                                
                              
                                
                                <!--
                                <ul   class="menu">
                                            
                                                <li class="current"><a href="#"><b>Accueil</b></a></li>
                                                <li><a href="editpwmtpass.php">Informations personnelles <span>Voir vos informations personnelles</span></a></li>
                                                <li><a href="historiquetransaction.php">Les transactions <span>Consulter vos transactions effectuées</span></a></li>
                                                <li><a href="editmessage.php">Les messages <span>Consulter l'hystorique de vos messages</span></a></li>
                                                <li><a href="editmessage.php">Discussion <span>Démarrer une discussion avec un ami</span></a></li>
                                            </ul>
                                
                                -->
                                
                                
                                <!-- Emplacement du menu	
                                        <div id="container">
                                            <ul  class="menu">
                                              <!--  <li id="selected"><a href="#">Accueil</a></li> -->
                                               <!--
                                                <li class="current"><a href="#"><b>Accueil</b></a></li>
                                                <li><a href="editpwmtpass.php">Informations personnelles <span>Voir vos informations personnelles</span></a></li>
                                                <li><a href="historiquetransaction.php">Les transactions <span>Consulter vos transactions effectuées</span></a></li>
                                                <li><a href="editmessage.php">Les messages <span>Consulter l'hystorique de vos messages</span></a></li>
                                                <li><a href="editmessage.php">Discussion <span>Démarrer une discussion avec un ami</span></a></li>
                                            </ul>
                                        </div>
 -->	
                                        <!-- 	
                                        <script type="text/javascript">
                                        $('#nav').spasticNav();
                                        </script>
Initialisation de la fonction -->	
                                
                                
                                
                                
								<div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 24%;" style=" visibility:hidden">
												<div style="text-align:center;">
													<p><a href="editpwmtpass.php"><img src="images/users-information.png" /></a></p>
													<p><a href="editpwmtpass.php" style="font-size:18px;">Informations personnelles</a></p>
												</div>
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 24%;" >
												<div style="text-align:center;">
													<p><a href="historiquetransaction.php"><img src="images/francsCFA.png" title="Porte feuille" /></a></p>
													<p><a href="historiquetransaction.php" style="font-size:18px;">Les transactions</a></p>
												</div>
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 24%;" >
												<div style="text-align:center;">
													<p><a href="editmessage.php"><img src="images/email-icon.png" /></a></p>
													<p><a href="editmessage.php" style="font-size:18px;">Les messages</a></p>
												</div>
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 24%;" >
												<div style="text-align:center;">
													<p><a href="editmessage.php"><img src="images/tchat.png" /></a></p>
													<p><a href="editmessage.php" style="font-size:18px;">Discussion</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							
								<br /><br />
								<div style="border-top:2px dashed #01A2F9;">
									<br />
								</div>
								<br />
								
								<div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 33%;" >												
												<!-- Rubrique transaction -->
												<?php
												
												if(isset($_POST["codesubmit"]))
												{
													$req = $bdd->query('SELECT codetransaction FROM users WHERE pseudo = "'.$_SESSION["pseudousers"].'" ');
													$donnees = $req->fetch();
													
													$codetransaction = $donnees["codetransaction"];
													
													$req->closeCursor();
													
													if($codetransaction == $_POST["codetransaction"])
													{
														$_SESSION["porteouvert"] = true;
													}
													else
													{
														?>
															<script>
															alert("Code de transaction incorrect. Veuillez réessayer SVP");
															</script>
														<?php
													}
												}
												?>
                                    
                                              </div>
                                    
                                     <!--       
                                            
                                    <?php
												if(isset($_SESSION["porteouvert"]) AND $_SESSION["porteouvert"]==true)
												{
												?>
						         
                                            
                                            
                                            
                                            
                                               <!--
												   <div class="bloc_prestation" id="bloc_prestation">
													  <ul class="liste-catgproduit">
														<li class="mv-item"><a href="#">Consulter les repas</a></li>
														<li class="mv-item"><a href="#">Consulter les boissons</a></li>
														<li class="mv-item"><a href="#">Consulter les fruits </a></li>
														<li class="mv-item"><a href="#">Choisissez votre partenaire</a></li>
														<li class="mv-item"><a href="#">Autres produits</a></li>
														
													  </ul>
													</div>    
												-->
												 <br /><br />
												
												
                                               
												<?php
												}
												else
												{
												?>
												<table style="width: 50%;">
													<tr>
														<th>Porte feuille</th>
													</tr>
													<tr>
														<td style="text-align:center;padding:10px;">
														<img src="images/petitdollars.png" /><br />
														<p>Entrez ici votre code de transaction pour ouvrir votre porte feuille</p>
														<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
															<input type="text" style="width:100px;" placeholder="Votre code ici" name="codetransaction" required /> <input type="submit" name="codesubmit" class="club-button" value="OK" />
														</form>
														</td>
													</tr>
												</table>
												<?php
												}
												?>
												<!-- Fin Rubrique transaction -->
												
                                     
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
												
												<!-- Rubrique règlement -->
												<table style="width: 88%;  visibility:hidden">
													<tr>
														<th>LIBERTIS</th>
													</tr>
													<tr>
														<td>
														<ul>
															<li><a href="reglementinterieur.php" style="text-decoration:none;font-size:14px;">Règlement intérieur de LIBERTIS</a></li>
															<li><a href="conditiongeneralevente.php" style="text-decoration:none;font-size:14px;">Conditions Générales de ventes de LIBERTIS</a></li>
														</ul>
														</td>
													</tr>
												</table>
												<!-- Fin règlement -->
												
											</div>
											
                                            
											<div class="club-layout-cell layout-item-0" style="width: 66%;  visibility:hidden" >
												
                                                
                                                <h3>Payer un produits ou une prestation</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour notifier l'approvisionnement de votre compte</p><br />
													
												<!-- Produits & Prestations -->
													<table style="width: 100%;">
													<tr>
														<th colspan="4" style="font-size:24px;font-weight:normal;">Produits & Prestations</th>
													</tr>
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
                                                  $req = $bdd->query('SELECT * FROM produitprestation ORDER BY type_produitprestation DESC LIMIT 
                                                    
                                                    
                                                    '.$start.', '.$entrees_par_page.' ');
													
                                              $changer=0;     
                                    
                                    while($donnees = $req->fetch())
													  
                                                             
                                                    
                                                    
                                                    
                                                    {
                                                         $letypeprod = $donnees["type_produitprestation"];
                                                        
                                                        
													?>
                                                        
                                                        <div class="mycatArchiveBloc">

                                                           
                                                             <a href="https://store.orificegroup.net/produit/biscuit-de-souchet-tiger-nut-biscuit/" class="lienprod">
                                                                 
                                                                 
                                                                 <img width="200" height="200" src="../images/imgesprdtsves/<?php echo $donnees["image_produitprestation"];?>" class="imageprod" alt="" sizes="(max-width: 300px) 100vw, 300px" 
                                                                        
                                                           
                                                            
                                                            
                                                            <span class="price"><p class="produit_prix"> <strong><?php echo $donnees["prix_produitprestation"]; ?> F CFA</strong>&nbsp;</p></span>
                                                            
                                                            <p> </p> 
                                                
                                                            <h1 class="produit_type"><?php echo str_ireplace("Produit-","",$letypeprod); ?></h1>
                                                             
                                                           
                                                           
                                                            
                                                             <h2 class="produit_nom"><?php echo $donnees["libelle_produitprestation"]; ?></h2></a>


                                                        <div class="panel_addpanier">

                                                            <input class="add_panier" type="submit" name="addpanier" value="Ajouter au panier"/>

                                                        </div>       

                                                        
                                                        
													<tr>
														<td style="width: 20%;padding:0px 15px;">
															<?php if($donnees["image_produitprestation"] != "")
															{
															?>
															<p>
																<img src="../images/imgesprdtsves/<?php echo $donnees["image_produitprestation"];?>" style="max-width:70px;max-height:70px;border-radius:60px;" />
															</p>
															<?php
															}
															?>
															<p style="font-size:15px;color:#01A2F9;text-align:center;"><?php echo $donnees["libelle_produitprestation"]; ?></p>
														</td>
														<td style="width: 20%;padding:0px 15px;">
															<p style="color: rgb(250, 93, 15);font-size:15px;text-align:center;"><?php echo $donnees["prix_produitprestation"]; ?> F CFA</p>
														</td>
														<td style="width: 30%;padding:0px 15px;">
															<p><?php echo $donnees["description_produitprestation"]; ?></p>
														</td>
														<td style="width: 30%;padding:0px 15px;">
															<form method="post" action="ajoutartpanier.php">
																<br />
																<label for="qteproduit"> Quantité : </label><br /><br />
																<input type="number" name="qteproduit" id="qteproduit" size="100" />
																
																<input type="hidden" value="<?php echo $donnees["id_produitprestation"];?>" name="idaddartpanier" />
																			
																<input type="hidden" value="payerproduits.php" name="idpageretour" />
																																
																<input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" /><br /><br />
																
																<input onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanier" src="images/ajoutpanier.png" width="50" />
															</form>
														</td>
													</tr>
													<?php
													}
													$req->closeCursor();
													/*Et on affiche la pagination correspondante */
													echo pagination($total_pages,$page_courante);
													?>
													</table>
												<!-- Fin Produits & Prestations -->
												
												<br />
											</div>
									</div>
								</div>	
								<br />
									
								<?php
								}
								catch(Exception $e)
								{
									die('Erreur : '.$e->getMessage());
								}
								?>
							</article>
						</div>
						
                    </div>
                </div>
            </div>
    
    
    
    
    
</div>
           
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   <div class="club-layout-wrapper">
                <div class="club-content-layout">
                    <div class="club-content-layout-row">
                        
                        <div class="club-layout-cell club-content">
							<article class="club-post club-article">
								<?php
								try
								{
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);

								?>
                                
                              
                                -->
                               
                                
                                <?php
												
												if(isset($_POST["codesubmit"]))
												{
                                        ?>
								
								<div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 33%;" >												
												<!-- Rubrique transaction -->
												
                                            <?php
													$req = $bdd->query('SELECT codetransaction FROM users WHERE pseudo = "'.$_SESSION["pseudousers"].'" ');
													$donnees = $req->fetch();
													
													$codetransaction = $donnees["codetransaction"];
													
													$req->closeCursor();
													
													if($codetransaction == $_POST["codetransaction"])
													{
														$_SESSION["porteouvert"] = true;
													}
													else
													{
														?>
															<script>
															alert("Code de transaction incorrect. Veuillez réessayer SVP");
															</script>
														<?php
													}
												}
												?>
                                      
                                              </div>
                                    
                                    <?php
												if(isset($_SESSION["porteouvert"]) AND $_SESSION["porteouvert"]==true)
												{
												?>
												
                           <div iclass="bloc_prestation" id="bloc_prestation">

<ul>
    <li><a href="#">     Consulter les repas</a></li>
    <hr>
        <li><a href="#">     Consulter les boissons</a></li>
    <hr>
        <li><a href="#">      Consulter les fruits</a></li>
    <hr>
        <li><a href="payerproduits_partenaires.php">       Choisissez votre partenaire</a></li>
    <hr>
        <li><a href="#">       Autres produits</a></li>
    
</ul> 

  
</div>
                                               <!--
												   <div class="bloc_prestation" id="bloc_prestation">
													  <ul class="liste-catgproduit">
														<li class="mv-item"><a href="#">Consulter les repas</a></li>
														<li class="mv-item"><a href="#">Consulter les boissons</a></li>
														<li class="mv-item"><a href="#">Consulter les fruits </a></li>
														<li class="mv-item"><a href="#">Choisissez votre partenaire</a></li>
														<li class="mv-item"><a href="#">Autres produits</a></li>
														
													  </ul>
													</div>    
												-->
												 <br /><br />
												
												
                                               
												<?php
												}
												else
												{
												?>
												<table style="width: 50%;">
													<tr>
														<th>Porte feuille</th>
													</tr>
													<tr>
														<td style="text-align:center;padding:10px;">
														<img src="images/petitdollars.png" /><br />
														<p>Entrez ici votre code de transaction pour ouvrir votre porte feuille</p>
														<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
															<input type="text" style="width:100px;" placeholder="Votre code ici" name="codetransaction" required /> <input type="submit" name="codesubmit" class="club-button" value="OK" />
														</form>
														</td>
													</tr>
												</table>
												<?php
												}
												?>
												<!-- Fin Rubrique transaction -->
												
                                  
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
												
												<!-- Rubrique règlement -->
												<table style="width: 88%;">
													<tr>
														<th>LIBERTIS</th>
													</tr>
													<tr>
														<td>
														<ul>
															<li><a href="reglementinterieur.php" style="text-decoration:none;font-size:14px;">Règlement intérieur de LIBERTIS</a></li>
															<li><a href="conditiongeneralevente.php" style="text-decoration:none;font-size:14px;">Conditions Générales de ventes de LIBERTIS</a></li>
														</ul>
														</td>
													</tr>
												</table>
												<!-- Fin règlement -->
												
											</div>
											
                                            
											<div class="club-layout-cell layout-item-0" style="width: 66%;" >
												
                                                
                                                <h3>Payer un produits ou une prestation</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour notifier l'approvisionnement de votre compte</p><br />
													
												<!-- Produits & Prestations -->
													<table style="width: 100%;">
													<tr>
														<th colspan="4" style="font-size:24px;font-weight:normal;">Produits & Prestations</th>
													</tr>
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
                                                  $req = $bdd->query('SELECT * FROM produitprestation ORDER BY type_produitprestation DESC LIMIT 
                                                    
                                                    
                                                    '.$start.', '.$entrees_par_page.' ');
													
                                              $changer=0;     
                                    
                                    while($donnees = $req->fetch())
													  
                                                             
                                                    
                                                    
                                                    
                                                    {
                                                         $letypeprod = $donnees["type_produitprestation"];
                                                        
                                                        
													?>
                                                        
                                                        <div class="mycatArchiveBloc">

                                                           
                                                             <a href="https://store.orificegroup.net/produit/biscuit-de-souchet-tiger-nut-biscuit/" class="lienprod">
                                                                 
                                                                 
                                                                 <img width="200" height="200" src="../images/imgesprdtsves/<?php echo $donnees["image_produitprestation"];?>" class="imageprod" alt="" sizes="(max-width: 300px) 100vw, 300px" 
                                                                        
                                                           
                                                            
                                                            
                                                            <span class="price"><p class="produit_prix"> <strong><?php echo $donnees["prix_produitprestation"]; ?> F CFA</strong>&nbsp;</p></span>
                                                            
                                                            <p> </p> 
                                                
                                                            <h1 class="produit_type"><?php echo str_ireplace("Produit-","",$letypeprod); ?></h1>
                                                             
                                                           
                                                           
                                                            
                                                             <h2 class="produit_nom"><?php echo $donnees["libelle_produitprestation"]; ?></h2></a>


                                                        <div class="panel_addpanier">

                                                            <input class="add_panier" type="submit" name="addpanier" value="Ajouter au panier"/>

                                                        </div>       

                                                        
                                                        
													<tr>
														<td style="width: 20%;padding:0px 15px;">
															<?php if($donnees["image_produitprestation"] != "")
															{
															?>
															<p>
																<img src="../images/imgesprdtsves/<?php echo $donnees["image_produitprestation"];?>" style="max-width:70px;max-height:70px;border-radius:60px;" />
															</p>
															<?php
															}
															?>
															<p style="font-size:15px;color:#01A2F9;text-align:center;"><?php echo $donnees["libelle_produitprestation"]; ?></p>
														</td>
														<td style="width: 20%;padding:0px 15px;">
															<p style="color: rgb(250, 93, 15);font-size:15px;text-align:center;"><?php echo $donnees["prix_produitprestation"]; ?> F CFA</p>
														</td>
														<td style="width: 30%;padding:0px 15px;">
															<p><?php echo $donnees["description_produitprestation"]; ?></p>
														</td>
														<td style="width: 30%;padding:0px 15px;">
															<form method="post" action="ajoutartpanier.php">
																<br />
																<label for="qteproduit"> Quantité : </label><br /><br />
																<input type="number" name="qteproduit" id="qteproduit" size="100" />
																
																<input type="hidden" value="<?php echo $donnees["id_produitprestation"];?>" name="idaddartpanier" />
																			
																<input type="hidden" value="payerproduits.php" name="idpageretour" />
																																
																<input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" /><br /><br />
																
																<input onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');" type="image" name="addartpanier" src="images/ajoutpanier.png" width="50" />
															</form>
														</td>
													</tr>
													<?php
													}
													$req->closeCursor();
													/*Et on affiche la pagination correspondante */
													echo pagination($total_pages,$page_courante);
													?>
													</table>
												<!-- Fin Produits & Prestations -->
												
												<br />
											</div>
									</div>
								</div>	
								<br />
									
								<?php
								}
								catch(Exception $e)
								{
									die('Erreur : '.$e->getMessage());
								}
								?>
							</article>
						</div>
						
                    </div>
                </div>
            </div>
    


</div>
    
    
    
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

</body>
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
  </div>
</footer>
    
    </html>