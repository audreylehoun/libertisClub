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
    <title>Ecrire un message | LIBERTIS CLUB</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>
    
    
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mettre la description">
        <meta name="keywords" content="">

        <!--  Refonte acceuill   -->

        <!-- Styles -->
      
        <link href="./WOUMIAH_files/app.min.css" rel="stylesheet">
        <link href="./WOUMIAH_files/custom.css" rel="stylesheet">

        <!--  Fin Refonte acceuill   -->

        <!--  START AJOUTER POUR LA REFONTE  -->
        <link href="./WOUMIAH_files/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./WOUMIAH_files/dataTables.bootstrap.min.css">
        <link href="./WOUMIAH_files/components.css" id="style_components" rel="stylesheet" type="text/css">
        <link href="./WOUMIAH_files/bootstrap-social.css" rel="stylesheet" type="text/css">

        <!-- BEGIN THEME STYLES -->

        <script src="./WOUMIAH_files/jquery.min.js.téléchargement" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="./WOUMIAH_files/allobesoin.css">
      <link rel="stylesheet" type="text/css" href="./WOUMIAH_files/tjobers.css">
       
        <!-- END THEME STYLES -->
        <link rel="stylesheet" href="./WOUMIAH_files/demo.css">
        <!-- FIN LES SCRIPTS AJOUTER POUR LA REFONTE    -->
    <link href="./WOUMIAH_files/LineIcons.min.css" rel="stylesheet">
        <!-- Style css personnaliser  MEF  -->
        <link href="./WOUMIAH_files/custom_sta.css" rel="stylesheet">
      



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
   include("structure/menu.php");
?>
<!-- Fin entête -->
<br/><br/>
    <div style="border-top:2px dashed #01A2F9;">
									<br />
								</div>
								
    <div class="container">
            <div class="row" style="
                                         
                                background-color:white;       ">
            <div class="col-md-4" style="
                                   
                                height:60px; padding:15px; margin-top:5px; margin-left:5px;  box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);       ">
                <p> Vous avez :  <strong style="color:blue;"> 0 messages(s) </strong> non lus.</p>
                
            </div>
            <div class="col-md-6 col-offset-2" style="
                                padding: 15px;" >
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:1em;">Consulter et rédiger vos messages </strong></h3>
            </div>
            
            
            
            </div>              
                         
                         </div>
    
    
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
								<div style="border-top:2px dashed #01A2F9; display:none;" >
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
							
								
								<div style="border-top:2px dashed #01A2F9; display:none;">
									<br />
								</div>
								
								
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
												<div>
												<?php
												
													if(isset($_POST["envoyer"]))
													{
														$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																										
														$req->execute(array($_POST["titremessage"], $_POST["contenumessage"], $_SESSION["pseudousers"], $_POST["destinataire"] ));
									
														if($req)
														{		
															?>
																<div class='club-succes'>Message envoyé. </div><br /><br />
															<?php
														}
														else
														{
															?>
																<div class='club-echec'>Message non envoyé. </div><br /><br />
															<?php
														}
													}
									
												?>
													<h3>Ecrire un message</h3><hr /><br />
													
													<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
														<label class="form_col" for="destinataire"><span style="font-size:14px;">Destinataires </span></label>
														<?php
														if(isset($_GET["reponsanswer"]))
														{
															?>
															<input id="destinataire" type="text" name="destinataire" value="<?php echo $_GET["reponsanswer"];?>" required />
															<?php
														}
														else
														{
														?>
														<select name="destinataire" id="destinataire" required>
															<option value=" ">------------ Choisir ------------</option>
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
														<?php
														}
														?>
														<br /><br />
														
											
														<label class="form_col" for="destinatairecopie"><span style="font-size:14px;">En copie : </span></label>
														<textarea id="destinatairecopie" name="destinatairecopie" style="font-style:italic;" rows="5" cols="22" style="font-style:italic;" >Ecrivez ici les pseudos de vos destinataires à mettre en copie séparés par une virgule</textarea><br /><br />
														
														<label class="form_col" for="titremessage"><span style="font-size:14px;">Objet ou Titre : </span></label>
														<input id="titremessage" type="text" name="titremessage" value="<?php if(isset($_GET["objetsms"])) echo "Re :".$_GET["objetsms"];?>" placeholder="Objet ou Titre message" required /><br /><br />

														<label class="form_col" for="contenumessage"><span style="font-size:14px;">Contenu message : </span></label>
														<textarea id="contenumessage" name="contenumessage" rows="15" cols="22" style="font-style:italic;" required >Ecrivez ici votre Message</textarea><br /><br />
											
														<label class="form_col">Joindre un fichier : </label>
														<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
														<input type="file" name="fich" size="50" /><br /><br />
														
														<label class="form_col"> </label>
														<input type="submit" name="envoyer" value="Envoyer message" class="club-button" />
													</form>
												</div>
												
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