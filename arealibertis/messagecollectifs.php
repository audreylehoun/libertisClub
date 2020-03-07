<?php 
include("verif/verif.php");
$menu = "messagerecu.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Espace admininstrateur LIBERTIS</title>
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
			  margin-right: 25px;
			  padding: 3px 0px;
			  width: 130px;
			  min-height: 2px;
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
									<h2 class="STA-postheader">Messages collectifs</h2>
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
											<!-- Debut contenu -->
								<br />
								<?php 
									
								try
								{
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include_once("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
									
									if(isset($_POST["envoyer"]))
									{
										if($_POST["destinataire"] == "Membre Bronze")
										{
											$req = $bdd->query('SELECT pseudo FROM users WHERE statutmembre = "Membre Bronze" ');
											while($donnees = $req->fetch())
											{
												$libertis = "LIBERTIS CLUB";
												
												$req2 = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																								
												$req2->execute(array($_POST["titremessage"], $_POST["contenumessage"], $libertis, $donnees["pseudo"] ));
							
												$req2->closeCursor();
											}
											$req->closeCursor();
													
														
											$sms = "Envoi de message aux membres Bronzes <br /><br />";
											$sms.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$receiver = "admin@clublibertis.com";
											$sujet =  "Envoi de message aux membres Bronzes";
											$entete = 'MIME-Version: 1.0' . "\r\n";
											$entete .= 'Content-type: text/html; charset=iso-8859-
											1' . "\r\n";
											$entete .= 'De : admin@clublibertis.com'. "\r\n";
											
											mail($receiver, $sujet, $sms, $entete);
											
											
											$activite = "Envoi de message aux membres Bronzes <br />";
											$activite.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
											$req3->execute(array($_SESSION["user_name"], $activite));
											
											$req3->closeCursor();
											
											?>
												<div class='STA-succes'>Message envoyé. </div><br /><br />
											<?php
										}
										elseif($_POST["destinataire"] == "Membre Silver")
										{
											$req = $bdd->query('SELECT pseudo FROM users WHERE statutmembre = "Membre Silver" ');
											while($donnees = $req->fetch())
											{
												$libertis = "LIBERTIS CLUB";
												
												$req2 = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																								
												$req2->execute(array($_POST["titremessage"], $_POST["contenumessage"], $libertis, $donnees["pseudo"] ));
							
												$req2->closeCursor();
											}
											$req->closeCursor();
														
											$sms = "Envoi de message aux membres Silvers <br /><br />";
											$sms.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$receiver = "admin@clublibertis.com";
											$sujet =  "Envoi de message aux membres Silvers";
											$entete = 'MIME-Version: 1.0' . "\r\n";
											$entete .= 'Content-type: text/html; charset=iso-8859-
											1' . "\r\n";
											$entete .= 'De : admin@clublibertis.com'. "\r\n";
											
											mail($receiver, $sujet, $sms, $entete);
											
											
											$activite = "Envoi de message aux membres Silvers <br />";
											$activite.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
											$req3->execute(array($_SESSION["user_name"], $activite));
											
											$req3->closeCursor();
													
											?>
												<div class='STA-succes'>Message envoyé. </div><br /><br />
											<?php
										}
										elseif($_POST["destinataire"] == "Membre Gold")
										{
											$req = $bdd->query('SELECT pseudo FROM users WHERE statutmembre = "Membre Gold" ');
											while($donnees = $req->fetch())
											{
												$libertis = "LIBERTIS CLUB";
												
												$req2 = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																								
												$req2->execute(array($_POST["titremessage"], $_POST["contenumessage"], $libertis, $donnees["pseudo"] ));
							
												$req2->closeCursor();
											}
											$req->closeCursor();
															
											$sms = "Envoi de message aux membres Golds <br /><br />";
											$sms.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$receiver = "admin@clublibertis.com";
											$sujet =  "Envoi de message aux membres Golds";
											$entete = 'MIME-Version: 1.0' . "\r\n";
											$entete .= 'Content-type: text/html; charset=iso-8859-
											1' . "\r\n";
											$entete .= 'De : admin@clublibertis.com'. "\r\n";
											
											mail($receiver, $sujet, $sms, $entete);
											
											
											$activite = "Envoi de message aux membres Golds <br />";
											$activite.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
											$req3->execute(array($_SESSION["user_name"], $activite));
											
											$req3->closeCursor();
														
											?>
												<div class='STA-succes'>Message envoyé. </div><br /><br />
											<?php
										}
										elseif($_POST["destinataire"] == "Membre Diamond")
										{
											$req = $bdd->query('SELECT pseudo FROM users WHERE statutmembre = "Membre Diamond" ');
											while($donnees = $req->fetch())
											{
												$libertis = "LIBERTIS CLUB";
												
												$req2 = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																								
												$req2->execute(array($_POST["titremessage"], $_POST["contenumessage"], $libertis, $donnees["pseudo"] ));
							
												$req2->closeCursor();
											}
											$req->closeCursor();
																
											$sms = "Envoi de message aux membres Diamonds <br /><br />";
											$sms.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$receiver = "admin@clublibertis.com";
											$sujet =  "Envoi de message aux membres Diamonds";
											$entete = 'MIME-Version: 1.0' . "\r\n";
											$entete .= 'Content-type: text/html; charset=iso-8859-
											1' . "\r\n";
											$entete .= 'De : admin@clublibertis.com'. "\r\n";
											
											mail($receiver, $sujet, $sms, $entete);
											
											
											$activite = "Envoi de message aux membres Diamonds <br />";
											$activite.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
											$req3->execute(array($_SESSION["user_name"], $activite));
											
											$req3->closeCursor();	
											?>
												<div class='STA-succes'>Message envoyé. </div><br /><br />
											<?php
										}
										elseif($_POST["destinataire"] == "Tous")
										{
											$req = $bdd->query('SELECT pseudo FROM users WHERE statutmembre != "Membre Non certifie" ');
											while($donnees = $req->fetch())
											{
												$libertis = "LIBERTIS CLUB";
												
												$req2 = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																								
												$req2->execute(array($_POST["titremessage"], $_POST["contenumessage"], $libertis, $donnees["pseudo"] ));
							
												$req2->closeCursor();
											}
											$req->closeCursor();
																
											$sms = "Envoi de message à tous les membres <br /><br />";
											$sms.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$receiver = "admin@clublibertis.com";
											$sujet =  "Envoi de message à tous les membres";
											$entete = 'MIME-Version: 1.0' . "\r\n";
											$entete .= 'Content-type: text/html; charset=iso-8859-
											1' . "\r\n";
											$entete .= 'from : admin@clublibertis.com'. "\r\n";
											
											mail($receiver, $sujet, $sms, $entete);
											
											
											$activite = "Envoi de message à tous les membres <br />";
											$activite.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
											$req3->execute(array($_SESSION["user_name"], $activite));
											
											$req3->closeCursor();	
											
											?>
												<div class='STA-succes'>Message envoyé. </div><br /><br />
											<?php
										}
										else
										{
											?>
												<div class='STA-echec'>Message non envoyé. </div><br /><br />
											<?php
										}
									}
									
									
									
									if(isset($_POST["enregistrer"]))
									{
										$libertis = "LIBERTIS CLUB";
										
										$req = $bdd->prepare('INSERT INTO brouillons (titre_brouillons,contenu_brouillons,destinataires_brouillons,date_brouillons) VALUES(?, ?, ?, NOW())');
																						
										$req->execute(array($_POST["titremessage"], $_POST["contenumessage"], $_POST["destinataire"] ));
					
										if($req)
										{	
														
											$sms = "Enregistrement de message dans brouillon destiner à : <strong>".$_POST["destinataire"]."</strong> <br /><br />";
											$sms.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$receiver = "admin@clublibertis.com";
											$sujet =  "Enregistrement de message dans brouillon";
											$entete = 'MIME-Version: 1.0' . "\r\n";
											$entete .= 'Content-type: text/html; charset=iso-8859-
											1' . "\r\n";
											$entete .= 'from : admin@clublibertis.com'. "\r\n";
											
											mail($receiver, $sujet, $sms, $entete);
											
											
											$activite = "Enregistrement de message dans brouillon destiner à : <strong>".$_POST["destinataire"]."</strong> <br />";
											$activite.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
											$req2->execute(array($_SESSION["user_name"], $activite));
											
											$req2->closeCursor();
																				
											?>
												<div class='STA-succes'>Message enregistré. </div><br /><br />
											<?php
										}
										else
										{
											?>
												<div class='STA-echec'>Message non enregistré. </div><br /><br />
											<?php
										}
									}
									
								?>
							
							<table style="text-align:center;">
								<tr>
									<td style="width:50%;border:0px solid gray;">
										<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
											<label style="font-weight:bold;" class="form_col" for="destinataire"> </label>
											<select name="destinataire" id="destinataire" required>
												<option value=" ">------------ Choisir Destinataires ------------</option>
												<option value="Membre Bronze">Membre Bronze</option>
												<option value="Membre Silver">Membre Silver</option>
												<option value="Membre Gold">Membre Gold</option>
												<option value="Membre Diamond">Membre Diamond</option>
												<option value="Tous">Tous les membres</option>
											</select>
											<br /><br />
											
											<label class="form_col" for="titremessage"><span style="font-size:14px;">Objet ou Titre : </span></label>
											<input id="titremessage" type="text" name="titremessage" style="width:260px;" placeholder="Objet ou Titre message" required /><br /><br />

											<label class="form_col" for="contenumessage"><span style="font-size:14px;">Contenu message : </span></label>
											<textarea id="contenumessage" name="contenumessage" rows="5" cols="33" style="font-style:italic;" required >Ecrivez ici votre Message</textarea><br /><br />
											
											<label class="form_col"> </label>
											<input type="submit" name="envoyer" value="Envoyer message" class="STA-button" />
											<input type="submit" name="enregistrer" value="Enregistrer brouillon" class="STA-button" />
										</form>
									</td>
								</tr>
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