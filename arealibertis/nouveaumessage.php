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
									<h2 class="STA-postheader">Ecrire nouveau message</h2>
													
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
										
										
										
										$libertis = "LIBERTIS CLUB";
										
										$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																						
										$req->execute(array($_POST["titremessage"], $_POST["contenumessage"], $libertis, $_POST["destinataire"] ));
					
										if($req)
										{	
														
											$sms = "Envoi de message à : <strong>".$_POST["destinataire"]."</strong> <br /><br />";
											$sms.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$receiver = "admin@clublibertis.com";
											$sujet =  "Envoi de message à : ".$_POST["destinataire"];
											$entete = 'MIME-Version: 1.0' . "\r\n";
											$entete .= 'Content-type: text/html; charset=iso-8859-
											1' . "\r\n";
											$entete .= 'from : admin@clublibertis.com'. "\r\n";
											
											mail($receiver, $sujet, $sms, $entete);
											
											
											$activite = "Envoi de message à : <strong>".$_POST["destinataire"]."</strong> <br />";
											$activite.= "<strong>Contenu du message</strong> : ".$_POST["contenumessage"]." <br /><br />";
											
											$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
											$req2->execute(array($_SESSION["user_name"], $activite));
											
											$req2->closeCursor();
																				
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
									<td style="width:100%;border:0px solid gray;">
										<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
											<label class="form_col" for="destinataire">Destinataires : </label>
											<select style="width:460px;" name="destinataire" id="destinataire" required>
												<option value=" ">------------ Choisir Destinataires ------------</option>
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
											
											<label class="form_col" for="destinatairecopie"><span style="font-size:14px;">En copie : </span></label>
											<textarea id="destinatairecopie" name="destinatairecopie" style="font-style:italic;" rows="5" cols="62" style="font-style:italic;" >Ecrivez ici les pseudos de vos destinataires à mettre en copie séparés par une virgule</textarea><br /><br />
											
											<label class="form_col" for="titremessage"><span style="font-size:14px;">Objet ou Titre : </span></label>
											<input id="titremessage" type="text" name="titremessage" style="width:460px;" placeholder="Objet ou Titre message" required /><br /><br />

											<label class="form_col" for="contenumessage"><span style="font-size:14px;">Contenu message : </span></label>
											<textarea id="contenumessage" name="contenumessage" style="" rows="15" cols="62" style="font-style:italic;" required >Ecrivez ici votre Message</textarea><br /><br />
											
											<label class="form_col">Joindre un fichier : </label>
											<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
											<input type="file" name="fich" style="width:460px;" /><br /><br />
														
											<label class="form_col"> </label>
											<input type="submit" name="envoyer" value="Envoyer message" class="STA-button" />
											<input type="submit" name="enregistrer" value="Enregistrer brouillon" class="STA-button" />
										</form>
										<br /><br />
										<p style="font-size:20px;">NB: Joindre que des fichiers de petite taille (3 Mo) au maximum</p>
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