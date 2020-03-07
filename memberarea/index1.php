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
    <title>Espace membre | LIBERTIS CLUB</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>
	<script type="text/javascript">
	var auto_refresh = setInterval(
	  function ()
	  {
		$('#loadonline').load('verifonline.php').fadeIn("slow");
	  }, 3000); // rafraichis toutes les 3000 millisecondes
	 
	</script>



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
									
									
									$req = $bdd->prepare('UPDATE users SET online_user = :onlineuser WHERE pseudo = :pseudouser');
									$req->execute(array(
									'onlineuser' => "online",
									'pseudouser' => $_SESSION["pseudousers"]
									));
											 
									
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
											<div class="club-layout-cell layout-item-0" style="width: 100%;" >
											
												<!-- Message de bienvenue -->
												<blockquote style="width: 89%;margin-left:0px;margin-top:-2px;">
													Bienvenue au <strong>LIBERTIS Club</strong><br /><br />

													Le <strong>LIBERTIS Club</strong> est un club privé, un  espace de distraction, de diversité, d’ouverture et de tolérance spécialement pensé et créé pour vous donner entière satisfaction et vous permettre de vivre enfin la vie dont vous rêvez tout bas.
													<br /><br />
													Au <strong>LIBERTIS Club</strong>, vous pourrez vivre des expériences nouvelles, réaliser vos fantasmes même les plus insolites, rencontrer des partenaires glamour et sympathiques et surtout libres et disposés et  participer à des soirées « libres ». 
													<br /><br />
													Au <strong>LIBERTIS Club</strong>,  le slogan est où tout est possible mais rien n’est obligatoire et notre vision est la liberté de penser et d’agir mais dans le respect des autres. Notre objectif est d’offrir à nos membres et adhérents, un espace de tolérance et de joie, où chaque membre pourra dans la limite du respect des autres et du règlement intérieur, laisser libre court à ses envie et fantasmes sans craindre d’être jugé et étiqueté par la société.
													<br /><br />
													Venez vivre l’expérience de votre vie 

												</blockquote>
												<!-- Fin Message de bienvenue -->
												
												<br />
												<br />
												
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
												
											<br />
												<!-- Nouveaux membres -->
												<h3>Les 20 tous derniers nouveaux membres de LIBERTIS </h3><hr /><br />
													<table style="width: 100%;">
														<tr>
															<th>Photos et Pseudos</th>
															<th>Noms et Prenoms</th>
															<th>Autres informations</th>
														</tr>
														<?php
														$req = $bdd->query('SELECT pseudo,nom,prenom,age,nationalite,Profession,statutmembre,activitephysique,religion,hobby,photo,affichephoto FROM users WHERE pseudo NOT IN ( SELECT pseudo FROM users WHERE pseudo = "'.$_SESSION["pseudousers"].'") AND statutmembre != "Membre Non certifie" ORDER BY pseudo ASC LIMIT 0,20 ');
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
														?>
													</table>
												<!-- Fin Nouveaux membres -->
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