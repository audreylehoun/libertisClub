<?php
include("verif.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- 

Conçu par :

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8" />
    <title>Discussion instantannée | LIBERTIS CLUB</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript">
	var auto_refresh = setInterval(
	  function ()
	  {
		$('#load_donnees').load('minichat.php').fadeIn("slow");
	  }, 3000); // rafraichis toutes les 3000 millisecondes
	 
	</script>
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

	</style>
</head>
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
											<div class="club-layout-cell layout-item-0" style="width: 70%;" >
												<!-- Début discussion -->
												<?php
												if(isset($_GET["iduserdis"]))
												{
													$req = $bdd->query('SELECT nom, prenom, pseudo FROM users WHERE pseudo = "'.$_GET["iduserdis"].'" ');
													while($donnees = $req->fetch())
													{
														$nomentier = $donnees["prenom"]." ".$donnees["nom"];													
													}
													$req->closeCursor();
													
													$_SESSION["idusertchat"] = $_GET["iduserdis"];
												?>
												
												<h3>Dicussion <?php if(isset($nomentier)) {echo "avec ".$nomentier;}else{ echo "instantannée.";}?></h3><hr /><br />
												
													<div id="load_donnees" style="max-height:800px;width:100%;overflow: auto;"></div>
													<br /><br />
													<form method="post" name="tasktitleform" action="">
														<div class="title"></div>
														<textarea style="width:500px;" rows="7" cols="60" class="tasktitle" id="tasktitle" name="tasktitle" type="text" onclick="this.value ='';" /></textarea><br />
														<br><input class="club-button" value="Envoyer message" type="button" />
													</form>
													<?php
												}
												?>
												<!-- Fin discussion -->
											</div>
											<div class="club-layout-cell layout-item-0" style="max-height:1100px;width: 30%;overflow: auto;border-left:1px dashed gray;" >
											<h3>Membres </h3><hr />
											<div id="loadonline"></div>
											<br /><br />
											
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
<script>
$(document).ready(function(){     

		$('.club-button').click(function(e){ 

			var current_time = 123;
			var tasktitle = $("textarea#tasktitle").val();
			var dataString = 'current_time='+ current_time + '&tasktitle=' + tasktitle;
				
			$.ajax({
      			type: "POST",
      			url: "save.php",
      			data: dataString,
      				
      				success: function() {
      					$('.title').html("");
        				$('#message').html("? Logged!")
        				.hide()
       				 
       				 		.fadeIn(1500, function() {
         			 		$('#message').append("");
         			 		});
							alert("Votre message a bien été envoyé");
         				}
			});
			return false;
	    });
	});
</script>
</body></html>