<?php 
include("verif/verif.php");
$menu = "detailsolde.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Détails solde des internautes LIBERTIS</title>
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
										<h3>Détails des soldes des membres</h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Selectionnez un membre pour voir les détails de son solde.)</p>
											<!-- Debut contenu -->
											<?php 
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
													if(isset($_POST["detailsolde"]))
													{
														?>
														<table style="margin-left:0px;width: 100%;">
															<tr>
																<td style="text-align:center;padding:10px;font-size:15px;"><strong>Motifs transactions</strong></td>
																<td style="text-align:center;padding:10px;font-size:15px;"><strong>Débit compte</strong></td>
																<td style="text-align:center;padding:10px;font-size:15px;"><strong>Crédit compte</strong></td>
																<td style="text-align:center;padding:10px;font-size:15px;"><strong>Solde compte</strong></td>
																<td style="text-align:center;padding:10px;font-size:15px;"><strong>Auteurs</strong></td>
																<td style="text-align:center;padding:10px;font-size:15px;"><strong>Commentaires</strong></td>
																<td style="text-align:center;padding:10px;font-size:15px;"><strong>Dates transactions</strong></td>
															</tr>
														<?php
														include 'paginationdetailsolde.php';
													   /* On calcule le nombre total d'entrées de notre table 
														09.que l'on stocke dans $nb_entrees */
														$req = $bdd->query('SELECT COUNT(*) AS total FROM transaction WHERE pseudotransaction = "'.$_POST["pseudosoldedetail"].'" ');
														while($donnees_total = $req->fetch()){
														$total=$donnees_total['total'];
														}
														 $req->closeCursor();
														 
														/*On configure les variables pour afficher notre requête */
														$entrees_par_page = 10;
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
														
														// Solde débiteur membre
														$req = $bdd->query('SELECT pseudotransaction, motifstransaction, debittransaction, credittransaction, soldetransaction, auteurtransaction, commentaire, datetransaction FROM transaction WHERE pseudotransaction = "'.$_POST["pseudosoldedetail"].'" ORDER BY idtransaction ASC LIMIT '.$start.', '.$entrees_par_page.' ');
														while($donnees = $req->fetch())
														{	
															?>
																<tr>
																<td style="text-align:center;"><strong><?php echo $donnees["motifstransaction"];?></strong></td>
																<td style="text-align:center;"><span style="color: rgb(50, 178, 50);"><strong><?php echo $donnees["debittransaction"];?></strong></span></td>
																<td style="text-align:center;"><span style="color: rgb(255, 0, 0);"><strong><?php echo $donnees["credittransaction"];?></strong></span></td>
																<td style="text-align:center;"><span style="color: rgb(0, 128, 255);"><strong><em><?php echo $donnees["soldetransaction"];?></em></strong></span></td>
																<td style="text-align:center;"><?php echo $donnees["auteurtransaction"];?></td>
																<td style="text-align:center;"><em><?php echo $donnees["commentaire"];?></strong></em></td>
																<td style="text-align:center;"><strong><em><?php echo $donnees["datetransaction"];?></em></strong></td>
																</tr>
															<?php
														}
														$req->closeCursor();
														/*Et on affiche la pagination correspondante */
														echo pagination($total_pages,$page_courante);
														
														?>
														</table><br /><br />
														<?php
													}
													
											?>
												<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
												
													<label style="font-weight:bold;" class="form_col" for="pseudosoldedetail">Choisir membres : </label>
													<select name="pseudosoldedetail" id="pseudosoldedetail" required>
														<option value=" ">------ Aucun ------</option>
														<optgroup label="Membre Bronze">
															<?php
															
															$req = $bdd->query('SELECT id_users,pseudo,nom,prenom,email,statutmembre FROM users WHERE statutmembre = "Membre Bronze" ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
														</optgroup>
														<optgroup label="Membre Silver">
															<?php
															
															$req = $bdd->query('SELECT id_users,pseudo,nom,prenom,email,statutmembre FROM users WHERE statutmembre = "Membre Silver" ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
														</optgroup>
														<optgroup label="Membre Gold">
															<?php
															
															$req = $bdd->query('SELECT id_users,pseudo,nom,prenom,email,statutmembre FROM users WHERE statutmembre = "Membre Gold" ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
														</optgroup>
														<optgroup label="Membre Diamond">
															<?php
															
															$req = $bdd->query('SELECT id_users,pseudo,nom,prenom,email,statutmembre FROM users WHERE statutmembre = "Membre Diamond" ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
														</optgroup>
													</select>
													<br /><br />
													
														<label class="form_col"></label>
														<input type="submit" name="detailsolde" value="Détail Solde" class="STA-button" /><br /><br />
												</form>
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