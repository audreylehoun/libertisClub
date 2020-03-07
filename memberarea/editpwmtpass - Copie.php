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
    <title>Modifier le mot de passe | LIBERTIS CLUB</title>
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
												<!-- Rubrique Informations personnellles -->
												<table style="width: 100%;">
													<tr>
														<th>Informations personnellles</th>
													</tr>
													<tr>
														<td>
														<p style="text-align:center;"><img src="../images/usermbrelibertis/<?php echo $_SESSION["photo"];?>" style="max-width:100px;border-radius:60px;" /></p>
														<p style="padding:10px;font-size:15px;text-align:center;">Bienvenue, <span style="color:#ED1E02;"><?php echo $_SESSION["prenomusers"];?> <?php echo $_SESSION["nomusers"]; ?></span></p>
														
														<p style="font-size:18px;padding-left:10px;"> ID : <span style="color:#01A5FE;"><?php echo $_SESSION["numidentifiant"];?></span></p>
														
														<hr style="width: 90%;" />
														
														<ul>
															<li><a href="changetophedit.php" style="text-decoration:none;font-size:14px;">Changer de photo</a></li>
															<li><a href="editpwmtpass.php" style="text-decoration:none;font-size:14px;">Changer le mot de passe</a></li>
															<li><a href="index.php?deconnect=ok" style="text-decoration:none;font-size:14px;">Déconnexion</a></li>
														</ul>
														<p style="font-size:12px;"><input type="checkbox" <?php if($_SESSION["affichephoto"] == "oui") echo "checked";?> disabled name="afficheuserphoto" id="afficheuserphoto" /><label for="afficheuserphoto"><em>Afficher votre photo pour les autres membres</em></label></p>
														</td>
													</tr>
												</table>
												<!-- Fin Rubrique Informations personnellles -->
												
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
												<!-- Mot de passe à changer -->
												<div>
												<?php
												if(isset($_POST["changepass"]))
												{
													if($_POST["ancienmotdepasse"] == $_SESSION["passwordusers"])
													{
														//Verification même mot de passe
														if($_POST["motdepassenew"] == $_POST["confirmmotpass"])
														{
															//On verifie si le mot de passe a 8 caracteres ou plus
															if(strlen($_POST["motdepassenew"])>=8)
															{
																$req = $bdd->prepare('UPDATE users SET motpass = :mot_pass WHERE pseudo = :pseudousers');
																$req->execute(array(
																'mot_pass' => $_POST["motdepassenew"],
																'pseudousers' => $_SESSION["pseudousers"]
																));
																
																if($req)
																{
																	$message = "Bonjour ".$_SESSION["prenomusers"] .", ".$_SESSION["nomusers"]." <br /><br />";
																	$message.= "Félicitation ! <br />
																	Votre mot de passe sur <a href='http://www.clublibertis.com' target='_blank'>www.clublibertis.com</a> bien été modifié. <br /><br />";
																	
																	$message.= "Si vous n'êtes pas à l'origine de cette action veuillez rapidement nous contacter";
																	
																	$message.= "Venez vivre l’expérience de votre vie avec LIBERTIS. 
																	<br /><br />";
																	
																	$destinataire = $_SESSION["email"];
																	$objet = "Changement de mot de passe sur www.clublibertis.com" ;
																	$headers = 'MIME-Version: 1.0' . "\r\n";
																	$headers .= 'Content-type: text/html; charset=iso-8859-
																	1' . "\r\n";
																	$headers .= 'De : info@clublibertis.com'. "\r\n";
																	
																	mail($destinataire, $objet, $message, $headers);
																	
																	$_SESSION["passwordusers"] = $_POST["motdepassenew"];
																	
																	?>
																	<div class="club-succes">Votre mot de passe a bien été modifié.</div>
																	<?php
																}
																else
																{
																	echo "<div class='club-echec'>La modification a échoué  </div>";
																}
																
																$req->closeCursor();
															}
															else
															{
																echo "<div class='club-echec'>Le nouveau mot de passe ne peut pas faire moins de 8 caractères  </div>";
															}
														}
														else
														{
															echo "<div class='club-echec'>Le nouveau mot de passe n'est pas conforme à sa confirmation  </div>";
														}
													}
													else
													{
														echo "<div class='club-echec'>L'ancien mot de passe n'est pas correct </div>";
													}
												}
												?>
													<h3>Changement mot de passe</h3><hr /><br />
													<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
													<p>
														<label style="font-weight:bold;" class="form_col" for="ancienmotdepasse">Ancien mot de passe : </label>
														<input type="text" id="ancienmotdepasse" name="ancienmotdepasse" required />
													</p>
													<p>
														<label style="font-weight:bold;" class="form_col" for="motdepassenew">Nouveau mot de passe : </label>
														<input type="text" id="motdepassenew" name="motdepassenew" required />
													</p>
													<p>
														<label style="font-weight:bold;" class="form_col" for="confirmmotpass">Confirmer nouveau mot de passe : </label>
														<input type="text" id="confirmmotpass" name="confirmmotpass" required />
													</p>
													<p>
														<label class="form_col"> </label>
														<input type="submit" name="changepass" class="club-button" value="Valider" />
													</p>
													</form>
												</div>
												<!-- Fin Mot de passe à changer -->
												
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