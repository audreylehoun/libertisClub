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
    <title>Effectuer un achat | LIBERTIS CLUB</title>
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
  width: 140px;
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

									if(isset($_POST["payertransact"]))
									{
										if($_POST["codetransact"] == $_SESSION["codetransaction"])
										{
											$req = $bdd->query('SELECT soldetransaction FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction DESC LIMIT 0,1 ');
											$donnees = $req->fetch();
											
											$oldsoldetransaction = $donnees["soldetransaction"];
											
											$req->closeCursor();
															
											$motifs = "Paiement : ".$_POST["produitprestation"];
											
											$debit = 0;
											
											$newsolde = ($oldsoldetransaction + $debit) - $_POST["montantapprovrai"];
											
											$req = $bdd->prepare('INSERT INTO transaction (pseudotransaction,motifstransaction,debittransaction,credittransaction,soldetransaction,auteurtransaction,commentaire,datetransaction) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())');									
											$req->execute(array($_SESSION["pseudousers"], $motifs, $debit, $_POST["montantapprovrai"], $newsolde, $_SESSION["pseudousers"], $_POST["commentairestransact"]));
											
											if($req)
											{
												$libertis = "LIBERTIS CLUB";
												
												$objet = "Paiement pour : ".$_POST["produitprestation"];
												
												$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																								
												$req->execute(array($objet, $_POST["commentairestransact"], $_SESSION["pseudousers"], $libertis ));
								
												$transaction = true;
												$messtransact = "<div class='club-succes'>Opération réussie, vous venez de payer pour ". $_POST['produitprestation'].".";
											}
											else
											{
												$transaction = false;
												$messtransact = "<div class='club-echec'>L'opération a échoué. Veuillez réessayer SVP.</div><br /><br />";
											}
											$req->closeCursor();
												
										}
										else
										{
											$transaction = false;
											$messtransact = "<div class='club-echec'>Le code de transaction est incorrect. </div><br /><br />";
										}
									}
									
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
															<li><a href="payerproduits.php" style="text-decoration:none;font-size:14px;">Payer produits/prestation</a></li>
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
												<h3>Payer un produits ou une prestation</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour notifier l'approvisionnement de votre compte</p><br />
													
												<!-- Produits & Prestations -->
												<?php
												
												if(isset($transaction) AND $transaction==true)
												{
													echo $messtransact;
												}
												
												if(isset($transaction) AND $transaction==false)
												{
													echo $messtransact;
												}
												
												if(isset($_GET["idprosvces"]))
												{
													if($_SESSION["codetransaction"] != "0000")
													{
														$req = $bdd->query('SELECT prix_produitprestation,libelle_produitprestation FROM produitprestation WHERE id_produitprestation = "'.$_GET["idprosvces"].'" ');
														while($donnees = $req->fetch())
														{
															$prixproduit = $donnees["prix_produitprestation"];
															
															$libelleproduitprestation = $donnees["libelle_produitprestation"];
														}
														$req->closeCursor();
														
														if($prixproduit <= $soldetransaction)
														{													
														?>
														<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
															
															
															<label class="form_col" for="codetransact">Code de transaction : </label>
															<input type="password" name="codetransact" id="codetransact" required /><br /><br />
															
															<label class="form_col" for="montantappro">Montant en F CFA : </label>
															<input type="text" disabled value="<?php echo $prixproduit;?>" name="montantappro" id="montantappro" />
															<input type="hidden" value="<?php echo $prixproduit;?>" name="montantapprovrai" id="montantapprovrai" />
															
															<br /><br />
															
															<label class="form_col" for="produitprestation">Produits ou Services : </label>
															<input type="text" disabled value="<?php echo $libelleproduitprestation;?>" name="produitprestation" id="produitprestation" />
															<input type="hidden" value="<?php echo $libelleproduitprestation;?>" name="produitprestation" id="produitprestation" />
															<br /><br />
															
															<label class="form_col" for="commentairestransact"><span style="font-size:14px;">Commentaires : </span></label>
															<textarea id="commentairestransact" name="commentairestransact" rows="5" cols="22" required > </textarea><br /><br />
															
															<label class="form_col"> </label>
															<input type="submit" name="payertransact" value="Payer" onclick="return confirm('Confirmez-vous le paimement des produits/services au prix de <?php echo $prixproduit; ?> F CFA ?');" class="club-button" />
														</form>
														
														<?php
														}
														else
														{
														?>
															<div class='club-echec'>Vous n'avez pas assez de montant sur votre compte. Veuillez vous approvionner afin d'effectuer cette transaction.</div><br /><br />
														<?php
														}
													}
													else
													{
													?>
														<div class='club-echec'>Veuillez changer votre code de transaction avant toute transaction. </div><br /><br />
													<?php
													}
												}
												?>	
												<!-- Fin Produits & Prestations -->
												
												<br />
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