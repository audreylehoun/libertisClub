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
    <title>Historique de transaction | LIBERTIS CLUB</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>



<style>.club-content .club-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .club-post .club-layout-cell {border:none !important; padding:0 !important; }
.ie6 .club-post .club-layout-cell {border:none !important; padding:0 !important; }

	.form_col {
  display: inline-block;
  margin-right: 15px;
  padding: 3px 0px;
  width: 300px;
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

</style></head>
<body>
<div id="club-main" style="margin-top:-20px;">
<!-- Début entête -->
<?php
	include("structure/header.php");
    include("structure/menu.php");
?>
<!-- Fin entête -->

<div class="club-sheet clearfix">
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
								<div class="club-postcontent club-postcontent-0 clearfix" style="display:none;">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 33%;" >
												<div class="libertis-smstext">
													<!-- Espace solde -->
														<?php
															$req = $bdd->query('SELECT soldetransaction FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction DESC LIMIT 0,1 ');
															$donnees = $req->fetch();
															
															$soldetransaction = $donnees["soldetransaction"];
															
															$req->closeCursor();
														?>
														<br /><p style="font-size:40px;color:#01A2F9;"><?php echo $soldetransaction; ?></p>
														
														<p style="font-size:20px;margin-top:30px;"><a href="historiquetransaction.php" style="color:#404040;text-decoration:none;">Solde en F CFA</a></p>
													<!-- Fin espace solde -->
												</div>
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 33%;" >
												<div class="libertis-smstextmessage">
													<!-- Espace Messages non lus -->
														<?php 
															
															$req = $bdd->query('SELECT COUNT(titremessage) AS nbremessages FROM messages WHERE destinatairemessage = "'.$_SESSION["pseudousers"].'" AND naturemessage = "non lu" AND statutdestinactifs = "actif" ');
															$donnees = $req->fetch();
															
															$nbremessages = $donnees['nbremessages'];
															
															$req->closeCursor();
														?>
														<br /><p style="font-size:45px;color: rgb(255, 0, 0);"><?php echo $nbremessages; ?></p>
														
														<p style="font-size:20px;margin-top:30px;"><a href="messagerecu.php" style="color:#404040;text-decoration:none;">Message(s) non lu(s)</a></p>
													<!-- Fin espace Messages non lus -->
												</div>
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 33%;" >
												<div class="libertis-smstextamis">
													<!-- Espace article en panier -->
														<?php
														$req = $bdd->query('SELECT COUNT(pseudo_panierachat) AS nbrepseudopanierachat FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														$donnees = $req->fetch();								$nbrepseudopanierachat = $donnees["nbrepseudopanierachat"];
														
														$req->closeCursor();
														?>
														<br /><p style="font-size:45px;color:rgb(50, 178, 50);"><?php echo $nbrepseudopanierachat; ?></p>
														
														<p style="font-size:20px;margin-top:30px;"><a href="ajoutpanier.php" style="color:#404040;text-decoration:none;">Articles en panier</a></p>
													<!-- Fin article en panier -->
												</div>
											</div>
										</div>
									</div>
								</div>	
								
								
								<div style="border-top:2px dashed #01A2F9; display:none;">
									<br />
								</div>
								
								
								<div class="club-postcontent club-postcontent-0 clearfix" style="display:none;">
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
							
								
								<div style="border-top:2px dashed #01A2F9; display:block;">
									<br />
								</div>
								<br />
								
								<div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width:50%;" >
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
												
												if(isset($_SESSION["porteouvert"]) AND $_SESSION["porteouvert"]==true)
												{
												?>
												<table style="width: 100%;">
													<tr>
														<th>Porte feuille</th>
													</tr>
													<tr>
														<td>
														<ul>
															<li><a href="ajoutfonds.php" style="text-decoration:none;font-size:14px;">Approvisionnement</a></li>
															<li><a href="menuproduitsetservice.php" style="text-decoration:none;font-size:14px;">Payer produits/prestation</a></li>
															<li><a href="commandesart.php" style="text-decoration:none;font-size:14px;">Historiques commandes</a></li>
															<li><a href="transfertfonds.php" style="text-decoration:none;font-size:14px;">Transfert fonds</a></li>
															<li><a href="modificationcode.php" style="text-decoration:none;font-size:14px;">Modifier code de transaction</a></li>
															<li><a href="historiquetransaction.php" style="text-decoration:none;font-size:14px;">Historique de transaction</a></li>
															<li><a href="fairereclamation.php" style="text-decoration:none;font-size:14px;">Faire une réclamation</a></li>
														</ul>
														</td>
													</tr>
												</table>
												<?php
												}
												else
												{
												?>
												<table style="width: 100%;">
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
											</div>
											<div class="club-layout-cell layout-item-0" style="width:50%;" >
											
												<!-- Rubrique règlement -->
												<table style="width: 100%;">
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
										</div>
									</div>
								</div>	
								<br />
							</article>
						</div>
						
                    </div>
                </div>
            </div>
			
            <div class="club-layout-wrapper" style="border-top:1px dashed gray;">
                <div class="club-content-layout">
                    <div class="club-content-layout-row">
                        
                        <div class="club-layout-cell club-content">
							<article class="club-post club-article">
												
								<div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 100%;" >
												<!-- Recherche -->
												<div>
												<br /><br />
												<table style="width: 100%;" border="0" style="border:0px solid gray;">
													<tr>
														<td style="padding:10px;text-align:center;">
															<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																<input type="text" name="searchmot" style="font-style:italic;" placeholder="Mot à Rechercher" required />
																<select name="searchin" required>
																<option value=""> Rechercher dans </option>
																<option value="motif"> Motifs </option>
																<option value="comment"> Commentaires </option>
																</select>
																<br /><br />
																<input type="submit" name="searchfirst" value="OK" class="club-button" />
															</form>
														</td>
														<td style="padding:10px;text-align:center;">
															<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																<input type="number" name="montant" style="font-style:italic;" placeholder="Un montant" /> <input type="submit" name="montantsearch" value="OK" class="club-button" />
															</form>
														</td>
													</tr>
													<tr>
														<td colspan="2" style="padding:10px;text-align:center;">
														<p style="font-size:15px;">Sur Mozilla Firefox (Entrer les dates sous forme de : <em>AAAA-MM-JJ</em>)</p>
															<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																<label>Date début : </label><input type="date" name="datedebut" /> <br /><br /><label>Date Fin : </label><input type="date" name="datefin" /> <br /><br /><input type="submit" name="datefiltre" value="Filtrer" class="club-button" />
															</form>
														</td>
													</tr>
												</table>
												</div><br />
												<div>
												</div>
												<!-- Fin Recherche -->
												
												<table style="margin-left:0px;width: 100%;">
													<tr>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Motifs transactions</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Débit</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Crédit</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Solde</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Commentaires</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Dates transactions</strong></th>
													</tr>
												<?php
												if(isset($_POST["datefiltre"]))
												{
													$req = $bdd->query('SELECT pseudotransaction, motifstransaction, debittransaction, credittransaction, soldetransaction, commentaire, DATE_FORMAT(datetransaction, "%d/%m/%Y") AS datetransactionfr FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" AND datetransaction BETWEEN "'.$_POST["datedebut"].'" AND "'.$_POST["datefin"].'" ORDER BY idtransaction ASC LIMIT 0,100 ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
															<td style="text-align:center;"><strong><em><?php echo $donnees["datetransactionfr"];?></em></strong></td>
															<td style="text-align:center;"><strong><?php echo $donnees["motifstransaction"];?></strong></td>
															<td style="text-align:center;"><span style="color: rgb(50, 178, 50);"><strong><?php echo $donnees["debittransaction"];?></strong></span></td>
															<td style="text-align:center;"><span style="color: rgb(255, 0, 0);"><strong><?php echo $donnees["credittransaction"];?></strong></span></td>
															<td style="text-align:center;"><span style="color: rgb(0, 128, 255);"><strong><em><?php echo $donnees["soldetransaction"];?></em></strong></span></td>
															<td style="text-align:center;"><em><?php echo $donnees["commentaire"];?></strong></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
												}
												elseif(isset($_POST["montantsearch"]))
												{
													$req = $bdd->query('SELECT pseudotransaction, motifstransaction, debittransaction, credittransaction, soldetransaction, commentaire, DATE_FORMAT(datetransaction, "%d/%m/%Y") AS datetransactionfr FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" AND debittransaction = "'.$_POST["montant"].'" OR pseudotransaction = "'.$_SESSION["pseudousers"].'" AND credittransaction = "'.$_POST["montant"].'" OR pseudotransaction = "'.$_SESSION["pseudousers"].'" AND soldetransaction = "'.$_POST["montant"].'" ORDER BY idtransaction ASC LIMIT 0,100 ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
															<td style="text-align:left;"><strong><em><?php echo $donnees["datetransactionfr"];?></em></strong></td>
															<td style="text-align:left;"><strong><?php echo $donnees["motifstransaction"];?></strong></td>
															<td style="text-align:left;"><span style="color: rgb(50, 178, 50);"><strong><?php echo $donnees["debittransaction"];?></strong></span></td>
															<td style="text-align:left;"><span style="color: rgb(255, 0, 0);"><strong><?php echo $donnees["credittransaction"];?></strong></span></td>
															<td style="text-align:left;"><span style="color: rgb(0, 128, 255);"><strong><em><?php echo $donnees["soldetransaction"];?></em></strong></span></td>
															<td style="text-align:left;"><em><?php echo $donnees["commentaire"];?></strong></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
												}
												elseif(isset($_POST["searchfirst"]) AND $_POST["searchin"] == "comment")
												{
													$req = $bdd->query('SELECT pseudotransaction, motifstransaction, debittransaction, credittransaction, soldetransaction, commentaire, DATE_FORMAT(datetransaction, "%d/%m/%Y") AS datetransactionfr FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" AND commentaire LIKE "%'.$_POST["searchmot"].'%" ORDER BY idtransaction ASC LIMIT 0,100 ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
															<td style="text-align:left;"><strong><em><?php echo $donnees["datetransactionfr"];?></em></strong></td>
															<td style="text-align:left;"><strong><?php echo $donnees["motifstransaction"];?></strong></td>
															<td style="text-align:left;"><span style="color: rgb(50, 178, 50);"><strong><?php echo $donnees["debittransaction"];?></strong></span></td>
															<td style="text-align:left;"><span style="color: rgb(255, 0, 0);"><strong><?php echo $donnees["credittransaction"];?></strong></span></td>
															<td style="text-align:left;"><span style="color: rgb(0, 128, 255);"><strong><em><?php echo $donnees["soldetransaction"];?></em></strong></span></td>
															<td style="text-align:left;"><em><?php echo $donnees["commentaire"];?></strong></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
												}
												elseif(isset($_POST["searchfirst"]) AND $_POST["searchin"] == "motif")
												{
													$req = $bdd->query('SELECT pseudotransaction, motifstransaction, debittransaction, credittransaction, soldetransaction, commentaire, DATE_FORMAT(datetransaction, "%d/%m/%Y") AS datetransactionfr FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" AND motifstransaction LIKE "%'.$_POST["searchmot"].'%" ORDER BY idtransaction ASC LIMIT 0,100 ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
															<td style="text-align:left;"><strong><em><?php echo $donnees["datetransactionfr"];?></em></strong></td>
															<td style="text-align:left;"><strong><?php echo $donnees["motifstransaction"];?></strong></td>
															<td style="text-align:left;"><span style="color: rgb(50, 178, 50);"><strong><?php echo $donnees["debittransaction"];?></strong></span></td>
															<td style="text-align:left;"><span style="color: rgb(255, 0, 0);"><strong><?php echo $donnees["credittransaction"];?></strong></span></td>
															<td style="text-align:left;"><span style="color: rgb(0, 128, 255);"><strong><em><?php echo $donnees["soldetransaction"];?></em></strong></span></td>
															<td style="text-align:left;"><em><?php echo $donnees["commentaire"];?></strong></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
												}
												else
												{
													include 'paginationhistorique.php';
												   /* On calcule le nombre total d'entrées de notre table 
													09.que l'on stocke dans $nb_entrees */
													$req = $bdd->query('SELECT COUNT(*) AS total FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ');
													while($donnees_total = $req->fetch()){
													$total=$donnees_total['total'];
													}
													 $req->closeCursor();
													 
													/*On configure les variables pour afficher notre requête */
													$entrees_par_page = 100;
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
													$req = $bdd->query('SELECT pseudotransaction, motifstransaction, debittransaction, credittransaction, soldetransaction, commentaire, DATE_FORMAT(datetransaction, "%d/%m/%Y") AS datetransactionfr FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction ASC LIMIT '.$start.', '.$entrees_par_page.' ');
													while($donnees = $req->fetch())
													{	
														?>
															<tr>
															<td style="text-align:left;"><strong><em><?php echo $donnees["datetransactionfr"];?></em></strong></td>
															<td style="text-align:left;"><strong><?php echo $donnees["motifstransaction"];?></strong></td>
															<td style="text-align:left;"><span style="color: rgb(50, 178, 50);"><strong><?php echo $donnees["debittransaction"];?></strong></span></td>
															<td style="text-align:left;"><span style="color: rgb(255, 0, 0);"><strong><?php echo $donnees["credittransaction"];?></strong></span></td>
															<td style="text-align:left;"><span style="color: rgb(0, 128, 255);"><strong><em><?php echo $donnees["soldetransaction"];?></em></strong></span></td>
															<td style="text-align:left;"><em><?php echo $donnees["commentaire"];?></strong></em></td>
															</tr>
														<?php
													}
													$req->closeCursor();
													/*Et on affiche la pagination correspondante */
													echo pagination($total_pages,$page_courante);
												}
												?>
												</table><br /><br />
											</div>
										</div>
									</div>
								</div>
								
									
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
<footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
  </div>
</footer>

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

</body></html>