<?php 
include("verif/verif.php");
$menu = "journaladmin.php";
//verification groupe
if($_SESSION['groupe']!='Super administrateur')
{
	       header("Location:home.php");
}	
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Journal de l'administrateur</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>



<style>.STA-content .STA-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .STA-post .STA-layout-cell {border:none !important; padding:0 !important; }
.ie6 .STA-post .STA-layout-cell {border:none !important; padding:0 !important; }


.form_col {
  display: inline-block;
  margin-right: 15px;
  padding: 3px 0px;
  width: 200px;
  min-height: 1px;
  text-align: justify;
}

</style></head>
<body>
<div id="STA-main">
<header class="STA-header">


    <div class="STA-shapes">

            </div>
<h1 class="STA-headline" data-left="2.11%">
    <a href="#">Administration LIBERTIS</a>
</h1>




                        
                    
</header>

<!-- Début menu -->
<?php
	include("structure/nav.php");
?>
<!-- Fin menu -->

<div class="STA-sheet clearfix">
            <div class="STA-layout-wrapper">
                <div class="STA-content-layout">
                    <div class="STA-content-layout-row">
                        
                        <div class="STA-layout-cell STA-content">
							<article class="STA-post STA-article">
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
										<h3>Journal de l'administrateur</h3>
										<hr />
												<!-- Recherche -->
												<table style="width: 100%;" border="0" style="border:0px solid gray;">
													<tr>
														<td style="padding:10px;text-align:center;">
															<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																<input type="text" name="searchmot" style="font-style:italic;width:250px;" placeholder="Mot à Rechercher dans les activités" required />
																<input type="submit" name="searchfirst" value="OK" class="STA-button" />
															</form>
														</td>
														<td style="padding:10px;text-align:center;">
															<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																<input type="text" name="auteur" style="font-style:italic;width:250px;" placeholder="Rechercher un auteur" /> <input type="submit" name="auteursearch" value="OK" class="STA-button" />
															</form>
														</td>
													</tr>
													<tr>
														<td colspan="2" style="padding:10px;text-align:center;">
														<p style="font-size:15px;">Sur Mozilla Firefox (Entrer les dates sous forme de : <em>AAAA-MM-JJ</em>)</p>
															<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																<label>Date début : </label><input type="date" name="datedebut" /> <br /><br /><label>Date Fin : </label><input type="date" name="datefin" /> <br /><br /><input type="submit" name="datefiltre" value="Filtrer" class="STA-button" />
															</form>
														</td>
													</tr>
												</table>
												<!-- Fin Recherche --><br /><br />
											<!-- Debut contenu -->
											<?php 
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
													
													?>
													
												<table style="margin-left:0px;width: 100%;">
													<tr>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Nom de l'auteur</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Activités</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Date de l'activité</strong></th>
													</tr>
												<?php
												if(isset($_POST["searchfirst"]))
												{
													$req = $bdd->query('SELECT 	nomauteur, activite, DATE_FORMAT(datejournal, "%d/%m/%Y") AS datejournalfr FROM journal WHERE activite LIKE "%'.$_POST["searchmot"].'%" ORDER BY datejournal DESC ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
																<td style="padding-top:5px;padding-left:10px;text-align:left;font-size:15px;"><strong><?php echo $donnees["nomauteur"];?></strong></td>
																<td style="padding-top:5px;padding-left:10px;text-align:left;"><strong><?php echo $donnees["activite"];?></strong></td>
																<td style="padding-top:5px;padding-left:10px;text-align:left;"><em><?php echo $donnees["datejournalfr"];?></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
												}
												elseif(isset($_POST["auteursearch"]))
												{
													$req = $bdd->query('SELECT 	nomauteur, activite, DATE_FORMAT(datejournal, "%d/%m/%Y") AS datejournalfr FROM journal WHERE nomauteur = "'.$_POST["auteur"].'" ORDER BY datejournal DESC ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
																<td style="padding-top:5px;padding-left:10px;text-align:left;font-size:15px;"><strong><?php echo $donnees["nomauteur"];?></strong></td>
																<td style="padding-top:5px;padding-left:10px;text-align:left;"><strong><?php echo $donnees["activite"];?></strong></td>
																<td style="padding-top:5px;padding-left:10px;text-align:left;"><em><?php echo $donnees["datejournalfr"];?></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
												}
												elseif(isset($_POST["datefiltre"]))
												{
													$req = $bdd->query('SELECT 	nomauteur, activite, DATE_FORMAT(datejournal, "%d/%m/%Y") AS datejournalfr FROM journal WHERE datejournal BETWEEN "'.$_POST["datedebut"].'" AND "'.$_POST["datefin"].'" ORDER BY datejournal DESC ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
																<td style="padding-top:5px;padding-left:10px;text-align:left;font-size:15px;"><strong><?php echo $donnees["nomauteur"];?></strong></td>
																<td style="padding-top:5px;padding-left:10px;text-align:left;"><strong><?php echo $donnees["activite"];?></strong></td>
																<td style="padding-top:5px;padding-left:10px;text-align:left;"><em><?php echo $donnees["datejournalfr"];?></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
												}
												else
												{
													include 'paginationjournal.php';
												   /* On calcule le nombre total d'entrées de notre table 
													09.que l'on stocke dans $nb_entrees */
													$req = $bdd->query('SELECT COUNT(*) AS total FROM journal');
													while($donnees_total = $req->fetch()){
													$total=$donnees_total['total'];
													}
													 $req->closeCursor();
													 
													/*On configure les variables pour afficher notre requête */
													$entrees_par_page = 200;
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
													
													$req = $bdd->query('SELECT 	nomauteur, activite, DATE_FORMAT(datejournal, "%d/%m/%Y") AS datejournalfr FROM journal ORDER BY datejournal DESC LIMIT '.$start.', '.$entrees_par_page.'  ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
																<td style="padding-top:5px;padding-left:10px;text-align:left;font-size:15px;"><strong><?php echo $donnees["nomauteur"];?></strong></td>
																<td style="padding-top:5px;padding-left:10px;text-align:left;"><strong><?php echo $donnees["activite"];?></strong></td>
																<td style="padding-top:5px;padding-left:10px;text-align:left;"><em><?php echo $donnees["datejournalfr"];?></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
													/*Et on affiche la pagination correspondante */
													echo pagination($total_pages,$page_courante);
												}
												?>
												</table>
													<?php
												}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
												?>
												<!-- Fin contenu -->
										</div>
									</div>
								</div>
								</div>


							</article>
						</div>
                    </div>
                </div>
            </div>
    </div>
<footer class="STA-footer">
  <div class="STA-footer-inner">
<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
  </div>
</footer>

</div>


</body></html>