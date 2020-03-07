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
   <link rel="stylesheet" href="style/style_lesproduits_partenaires.css" media="all" />
    
    
    
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
    }
    
    
    
    
    
    #global {
   overflow:auto;
}
#gauche {
   float:left;
   width:30%;
     
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
  border-left: 5px solid #0082F5;
  background-color: white;
  padding-left: 5px;
    list-style-type: none;
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
                               
    
                                                <h3 class="text_achet_produit" style="font-style:bold;font-size:20px;margin-left:520px; color:blue">Reserver un partenaire qui vous tiendra valablement compagnie.</h3><hr />
													<p style="font-style:italic;font-size:16px;margin-left:10px;">Choisissez un partenaire puis cliquer sur réserver</p><br />
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
    <br/>
        <br/>
       
        
        	<!-- Rubrique règlement -->
												<table style="width: 88%;">
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
     
        
        
        
     <!--   <div class="club-layout-cell layout-item-0" style="width: 66%;" >    -->
												
                                                <!--
                                                <h3>Payer un produits ou une prestation</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour notifier l'approvisionnement de votre compte</p><br />
													 -->
												<!-- Produits & Prestations -->
													
            <!--
                                                    <table style="width: 100%;">
													<tr>
														<th colspan="4" style="font-size:24px;font-weight:normal;">Produits & Prestations</th>
													</tr>
													-->
                                                        
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
                                                  $req = $bdd->query('SELECT * FROM partenaires');
													
                                              $changer=1; 
                                                        
                                                        
                                          ?>
            
      
                                             <div class="mycatArchive">  
                                                 <?php
                                    $lenum =1;
                                    while($donnees = $req->fetch())
													  
                                                             
                                                    
                                                    
                                                    
                                                    {
                                                      //   $letypeprod = $donnees["type_produitprestation"];
                                                        
                                                        
													?>
                                                 
                                                        
                                                              
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                      
                                                 
                                                    
                                                    
                                              
                                                      
                                                      
                      <div class="mycatArchiveBloc">
                          <section> 
  <div class="content_part">
  <a href="#">
            <div class="thb-img">
                <img src="../images/imgespartenaire/<?php echo $donnees["image_partenaire"];?>" alt="<?php echo $donnees["prenom_partenaire"];?>" data-original-title=""></div></a>
  </div>

  <div class="menu_part">
     <div class="thb-detail-content"><p class="ville_partenaire"> <?php echo $donnees["prenom_partenaire"] .' ' ;?><a href="#"><?php echo $donnees["age_partenaire"] . ' ans ';?></a>, <a href="#"><?php echo $donnees["ville_partenaire"] ;?></a> </p><p class="description_partenaire" >  <br/><?php echo $donnees["description_partenaire"];?></p> <p> <input type="submit" name="reserver" value="Réserver" class="panel_addpanier"></p>
                </div>
  </div>
                             </section>
    
    </div>                                    
                                                        
                                                        
                                                        
            <?php $lenum++; } ?>                                         
                                                      
                                                      
             </div>                                         
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
           <!--       
      <section>
        
        <div class="exp">
            <div class="exp-logo">
                <a href="#" class="lienImage" ><img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/pierre.png" alt="Logo de Pierre Giraud" class="imageprod"></a>
            </div>
            <div class="exp-info">
                <h1>     Rosaria</h1>
                <h2>    24 ans</h2>
                <h4>    Cotonou</h4>
            </div>
            <div class="exp-desc">
                <p>     Créateur des sites pierre-giraud.fr puis pierre-giraud.com
                début 2015 sur lesquels je partage mes formations complète en
                programmation, optimisation du référencement, etc.</p>
            </div>
        </div>
      
     
    </section>   
                                                    -->
            
                                                  <!--  </div> ->
                                                    
                                                  
                                                        
                                                        
                                                        
                                                        
                                                        
        
        
        
        
        
        <!--  FIN DE CODE DE DROITE NEW   -->
    
    
                                                        



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
         <!--   </div>    -->
    
    
    
    
    
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
   </div>  


</body>
   
   

    
    </html>