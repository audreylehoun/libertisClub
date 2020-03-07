﻿<?php
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
    <title>Tous les membres | LIBERTIS CLUB</title>
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
											
												<!-- Membres de LIBERTIS -->
												<h3> Membres de LIBERTIS </h3><hr /><br />
												<div>
													<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
														<input type="text" name="searchmembre" style="font-style:italic;" size="58" placeholder="Recherchez un membre (Entrez le pseudo, le nom ou le prenom)" /> <input type="submit" name="search" value="OK" class="club-button" />
													</form>
												</div><br />
												<table>
													<tr>
														<th>Photos et Pseudos</th>
														<th>Noms et Prenoms</th>
														<th>Autres informations</th>
													</tr>
													<?php
													if(isset($_POST["search"]))
													{
														$req = $bdd->query("SELECT pseudo,nom,prenom,age,nationalite,Profession,statutmembre,activitephysique,religion,hobby,photo,affichephoto FROM users WHERE pseudo NOT IN ( SELECT pseudo FROM users WHERE pseudo = '".$_SESSION["pseudousers"]."') AND statutmembre != 'Membre Non certifie' AND pseudo LIKE '%".$_POST["searchmembre"]."%' OR pseudo NOT IN ( SELECT pseudo FROM users WHERE pseudo = '".$_SESSION["pseudousers"]."') AND statutmembre != 'Membre Non certifie' AND nom LIKE '%".$_POST["searchmembre"]."%' OR pseudo NOT IN ( SELECT pseudo FROM users WHERE pseudo = '".$_SESSION["pseudousers"]."') AND statutmembre != 'Membre Non certifie' AND prenom LIKE '%".$_POST["searchmembre"]."%' ORDER BY pseudo ASC LIMIT 0,100 ");
														while($donnees = $req->fetch())
														{
														?>
															<tr>
																<td>
																	<?php
																	if($donnees["affichephoto"] == "oui")
																	{
																	?>
																		<p style="text-align:center;"><img src="../images/usermbrelibertis/<?php echo $donnees["photo"];?>" style="max-width:100px;border-radius:60px;" /></p>
																	<?php
																	}
																	else
																	{
																	?>
																		<p style="text-align:center;"><img src="../images/no-avatar.jpg" style="max-width:100px;border-radius:60px;" /></p>
																	<?php
																	}
																	?>
																	<p style="padding:10px;font-size:15px;text-align:center;"><span style="color:#01A2F9;"><?php echo $donnees["pseudo"];?></span></p>
																</td>
																<td>
																	<p style="padding:10px;font-size:15px;text-align:center;"><span style="color:#ED1E02;"><?php echo $donnees["nom"];?> <?php echo $donnees["prenom"];?> </span>
																	<br /><br /><a href="discussion.php?iduserdis=<?php echo $donnees["pseudo"];?>" class="club-button" style="padding-top:10px;">DISCUTER</a></p>
																</td>
																<td style="padding:10px;">
																	<strong>Age : </strong><?php echo $donnees["age"];?> ans <br />
																	<strong>Nationalité : </strong><?php echo $donnees["nationalite"];?><br />
																	<strong>Profession : </strong><?php echo $donnees["Profession"];?> <br />
																	<?php 
																	if($donnees["statutmembre"] == "Membre Bronze")
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(128, 64, 64);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	elseif($donnees["statutmembre"] == "Membre Silver")
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(0, 128, 255);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	elseif($donnees["statutmembre"] == "Membre Gold")
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(255, 0, 0);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	elseif($donnees["statutmembre"] == "Membre Diamond")
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(107, 138, 148);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	else
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(50, 178, 50);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	?><br />
																	<strong>Activité physique : </strong><?php echo $donnees["activitephysique"];?> <br />
																	<strong>Religion : </strong><?php echo $donnees["religion"];?> <br />
																	<strong>Hobby : </strong><?php echo $donnees["hobby"];?> <br />
																</td>
															</tr>
														<?php
														}
														
														$req->closeCursor();
													}
													else
													{
														include 'paginationmembres.php';
													   /* On calcule le nombre total d'entrées de notre table 
														09.que l'on stocke dans $nb_entrees */
														$req = $bdd->query("SELECT COUNT(*) AS total FROM users WHERE pseudo NOT IN ( SELECT pseudo FROM users WHERE pseudo = '".$_SESSION["pseudousers"]."') AND statutmembre != 'Membre Non certifie' ");
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
												
														$req = $bdd->query('SELECT pseudo,nom,prenom,age,nationalite,Profession,statutmembre,activitephysique,religion,hobby,photo,affichephoto FROM users WHERE pseudo NOT IN ( SELECT pseudo FROM users WHERE pseudo = "'.$_SESSION["pseudousers"].'") AND statutmembre != "Membre Non certifie" ORDER BY pseudo ASC LIMIT '.$start.', '.$entrees_par_page.' ');
														while($donnees = $req->fetch())
														{
														?>
															<tr>
																<td>
																	<?php
																	if($donnees["photo"] == "oui")
																	{
																	?>
																		<p style="text-align:center;"><img src="../images/usermbrelibertis/<?php echo $donnees["photo"];?>" style="max-width:100px;border-radius:60px;" /></p>
																	<?php
																	}
																	else
																	{
																	?>
																		<p style="text-align:center;"><img src="../images/no-avatar.jpg" style="max-width:100px;border-radius:60px;" /></p>
																	<?php
																	}
																	?>
																	<p style="padding:10px;font-size:15px;text-align:center;"><span style="color:#01A2F9;"><?php echo $donnees["pseudo"];?></span></p>
																</td>
																<td>
																	<p style="padding:10px;font-size:15px;text-align:center;"><span style="color:#ED1E02;"><?php echo $donnees["nom"];?> <?php echo $donnees["prenom"];?> </span></p>
																</td>
																<td style="padding:10px;">
																	<strong>Age : </strong><?php echo $donnees["age"];?> ans <br />
																	<strong>Nationalité : </strong><?php echo $donnees["nationalite"];?><br />
																	<strong>Profession : </strong><?php echo $donnees["Profession"];?> <br />
																	<?php 
																	if($donnees["statutmembre"] == "Membre Bronze")
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(128, 64, 64);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	elseif($donnees["statutmembre"] == "Membre Silver")
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(0, 128, 255);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	elseif($donnees["statutmembre"] == "Membre Gold")
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(255, 0, 0);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	elseif($donnees["statutmembre"] == "Membre Diamond")
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(107, 138, 148);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	else
																	{
																	?>
																		<strong>Catégorie membre : </strong><span style="color: rgb(50, 178, 50);"><?php echo $donnees["statutmembre"];?></span>
																	<?php
																	}
																	?><br />
																	<strong>Activité physique : </strong><?php echo $donnees["activitephysique"];?> <br />
																	<strong>Religion : </strong><?php echo $donnees["religion"];?> <br />
																	<strong>Hobby : </strong><?php echo $donnees["hobby"];?> <br />
																</td>
															</tr>
														<?php
														}
														
														$req->closeCursor();
														
														/*Et on affiche la pagination correspondante */
														echo pagination($total_pages,$page_courante);
													}		
													?>
												</table>
												<!-- Fin Membres de LIBERTIS -->
												
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