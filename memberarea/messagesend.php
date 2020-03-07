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
    <title>Messages envoyés | LIBERTIS CLUB</title>
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
  width: 200px;
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
								<div class="club-postcontent club-postcontent-0 clearfix">
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
														$donnees = $req->fetch();
														
														$nbrepseudopanierachat = $donnees["nbrepseudopanierachat"];
														
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
								
								<br /><br />
								<div style="border-top:2px dashed #01A2F9;">
									<br />
								</div>
								<br />
								
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
								<br />
								
								<div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 33%;" >
												<!-- Rubrique Messagerie -->
												<table style="width: 100%;">
													<tr>
														<th>Messagerie</th>
													</tr>
													<tr>
														<td>
														<ul>
															<li><a href="editmessage.php" style="text-decoration:none;font-size:14px;">Ecrire message</a></li>
															<li><a href="messagerecu.php" style="text-decoration:none;font-size:14px;">Messages reçus</a></li>
															<li><a href="messagesend.php" style="text-decoration:none;font-size:14px;">Messages envoyés</a></li>
															<li><a href="sendfile.php" style="text-decoration:none;font-size:14px;">Soumettre un fichier</a></li>
															<li><a href="discussion.php" style="text-decoration:none;font-size:14px;">Discussion instantannée</a></li>
														</ul>
														<hr style="width: 90%;" />
														<h6 style="padding-left:10px;color:#404040;"><em>Membres</em></h6>
														<ul>
															<li><a href="signalerabus.php" style="text-decoration:none;font-size:14px;">Signaler un abus</a></li>
															<li><a href="membrecate.php" style="text-decoration:none;font-size:14px;">Membre de même catégorie</a></li>
															<li><a href="mescontacts.php" style="text-decoration:none;font-size:14px;">Tous les membres</a></li>
														</ul>
														</td>
													</tr>
												</table>
												<!-- Fin Messagerie -->
												
												<br /><br />
												
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
											<div class="club-layout-cell layout-item-0" style="width: 66%;" >
												<!-- Messages envoyés -->
												<div>
													<h3>Messages envoyés</h3><hr /><br />
												<!-- Recherche -->
												<div>
													<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
														<input type="text" name="searchmembre" style="font-style:italic;" size="58" placeholder="Recherchez un destinataire" /> <input type="submit" name="search" value="OK" class="club-button" />
													</form>
												</div><br />
												<div>
													<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
														<input type="text" name="searchmessage" style="font-style:italic;" size="58" placeholder="Recherchez un message" /> <input type="submit" name="search2" value="OK" class="club-button" />
													</form>
												</div><br /><br />
												<!-- Fin Recherche -->
												
													<?php 
													if(isset($_POST["search"]))
													{
													?>
													<table style="width: 100%; font-size:13px;">
														<tr>
															<th style="text-align:center;padding:10px;font-size:15px;">Titres messages</th>
															<th style="text-align:center;padding:10px;font-size:15px;">Destinataires </th>
															<th style="text-align:center;padding:10px;font-size:15px;">Dates</th>
															<th style="text-align:center;padding:10px;font-size:15px;">Suppression</th>
														</tr>
														<?php 
														
																$req = $bdd->query('SELECT idmessages,titremessage,naturemessage,destinatairemessage,expediteurmessage,DATE_FORMAT(datemessages, "%d/%m/%Y à %Hh%imin") AS datemessagesfr FROM messages WHERE destinatairemessage = "'.$_POST["searchmembre"].'" expediteurmessage = "'.$_SESSION["pseudousers"].'" AND statutexpedinactifs = "actif" ORDER BY idmessages DESC LIMIT 0,100 ');
																while($donnees = $req->fetch())
																{
														?>
																		<tr>
																			<td style="font-size:15px;padding-left: 15px;"><span style="color:#ED1E02;"><a href="readmessagesend.php?idmessage=<?php echo $donnees["idmessages"];?>"><?php echo $donnees["titremessage"]; ?></a></span>
																			</td>
																			<td style="text-align:center;"><?php echo $donnees["destinatairemessage"]; ?></td>
																			<td style="font-style:italic;text-align:center;line-height: 45px;"><?php echo $donnees["datemessagesfr"]; ?></td>
																			<td style="text-align:center;"><a href="deletemessage.php?iddelete=<?php echo $donnees["idmessages"];?>&pagesend=messagesend.php" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
																		</tr>
														<?php 
																}
														?>
													</table>
													<?php
													}
													elseif(isset($_POST["search2"]))
													{
													?>
													<table style="width: 100%; font-size:13px;">
														<tr>
															<th style="text-align:center;padding:10px;font-size:15px;">Titres messages</th>
															<th style="text-align:center;padding:10px;font-size:15px;">Destinataires </th>
															<th style="text-align:center;padding:10px;font-size:15px;">Dates</th>
															<th style="text-align:center;padding:10px;font-size:15px;">Suppression</th>
														</tr>
														<?php 
														
															$req = $bdd->query("SELECT idmessages,titremessage,naturemessage,destinatairemessage,expediteurmessage,contenumessage,DATE_FORMAT(datemessages, '%d/%m/%Y à %Hh%imin') AS datemessagesfr FROM messages WHERE titremessage LIKE '%".$_POST["searchmessage"]."%' AND expediteurmessage = '".$_SESSION["pseudousers"]."' AND statutexpedinactifs = 'actif' OR contenumessage LIKE '%".$_POST["searchmessage"]."%' AND expediteurmessage = '".$_SESSION["pseudousers"]."' AND statutexpedinactifs = 'actif' ORDER BY idmessages DESC LIMIT 0,100 ");
																while($donnees = $req->fetch())
																{
														?>
																		<tr>
																			<td style="font-size:15px;padding-left: 15px;"><span style="color:#ED1E02;"><a href="readmessagesend.php?idmessage=<?php echo $donnees["idmessages"];?>"><?php echo $donnees["titremessage"]; ?></a></span>
																			</td>
																			<td style="text-align:center;"><?php echo $donnees["destinatairemessage"]; ?></td>
																			<td style="font-style:italic;text-align:center;line-height: 45px;"><?php echo $donnees["datemessagesfr"]; ?></td>
																			<td style="text-align:center;"><a href="deletemessage.php?iddelete=<?php echo $donnees["idmessages"];?>&pagesend=messagesend.php" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
																		</tr>
														<?php 
																}
																
														?>
													</table>
													<?php
													}
													else
													{
													?>
													<table style="width: 100%; font-size:13px;">
														<tr>
															<th style="text-align:center;padding:10px;font-size:15px;">Messages</th>
															<th style="text-align:center;padding:10px;font-size:15px;">Destinataires </th>
															<th style="text-align:center;padding:10px;font-size:15px;">Dates</th>
															<th style="text-align:center;padding:10px;font-size:15px;">Suppression</th>
														</tr>
														<?php 
																
																include 'paginationmessagesend.php';
															   /* On calcule le nombre total d'entrées de notre table 
																09.que l'on stocke dans $nb_entrees */
																$req = $bdd->query("SELECT COUNT(*) AS total FROM messages WHERE expediteurmessage = '".$_SESSION["pseudousers"]."' AND statutexpedinactifs = 'actif' ");
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
														
																$req = $bdd->query('SELECT idmessages,titremessage,naturemessage,destinatairemessage,expediteurmessage,contenumessage,DATE_FORMAT(datemessages, "%d/%m/%Y à %Hh%imin") AS datemessagesfr FROM messages WHERE expediteurmessage = "'.$_SESSION["pseudousers"].'" AND statutexpedinactifs = "actif" ORDER BY idmessages DESC LIMIT '.$start.', '.$entrees_par_page.' ');
																while($donnees = $req->fetch())
																{
														?>
																		<tr>
																			<td style="font-size:15px;padding-left: 15px;"><span style="color:#ED1E02;"><a href="readmessagesend.php?idmessage=<?php echo $donnees["idmessages"];?>"><?php echo $donnees["titremessage"]; ?></a></span>
																			</td>
																			<td style="text-align:center;"><?php echo $donnees["destinatairemessage"]; ?></td>
																			<td style="font-style:italic;text-align:center;line-height: 45px;"><?php echo $donnees["datemessagesfr"]; ?></td>
																			<td style="text-align:center;"><a href="deletemessage.php?iddelete=<?php echo $donnees["idmessages"];?>&pagesend=messagesend.php" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
																		</tr>
														<?php 
																
																}
																
																$req->closeCursor();
																/*Et on affiche la pagination correspondante */
																echo pagination($total_pages,$page_courante);
																
														?>
													</table>
													<?php 
													}
													?>
												</div>
												<!-- Fin Messages envoyés -->
												
												<br />
												
											</div>
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