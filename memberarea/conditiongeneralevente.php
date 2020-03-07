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
    <title>Conditions Générales de Ventes | APHRODITE CLUB</title>
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
												<!-- Messages reçus -->
												<div>
													<h3>Conditions Générales de ventes de LIBERTIS</h3><hr /><br />
													<table border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
													  <tr>
														<td><p align="center" style="font-size:35px;"><strong>CGV LIBERTIS CLUB</strong> </p></td>
													  </tr>
													</table><br /><br />
												
													<p><strong>PREAMBULE</strong> : (application et modification des Conditions générales  de vente) </p>
													<p>Les Conditions Générales de vente  régissent toutes commandes passées directement par téléphone ou sur le site internet <a href="http://www.clublibertis.com">www.clublibertis.com</a>  avec la dénomination Club Libertis à la  société STA-BENIN<strong><em>, </em></strong>ou par message électronique à l'adresse <a href="mailto:info@clublibertis.com">info@clublibertis.com</a>. </p>
													<p>L’utilisateur du site ou de  l'adresse électronique s’engage à lire attentivement ces conditions avant de  commander un produit ou un service commercialisé par le Club Libertis. Ce  dernier se réserve le droit de modification de ses conditions générales de  vente. Toutefois, les conditions générales de vente en vigueur lors de la  validation de la commande par l’acheteur seront celles en vigueur jusqu’à  réception du produit ou le bénéfice de la prestation et ce, jusqu’en fin du  contrat de garantie.</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 1 : VALIDATION ET ACCEPTATION DES CONDITIONS GENERALES DE VENTE </strong></p>
													<p>Pour les achats en ligne sur le  site: dès lors que l’utilisateur du site valide sa commande, il reconnaît avoir  pris connaissance des conditions générales de vente et s’engage à les  respecter. Cette s’applique même lorsque l’acheteur n’est pas membres ou  adhérent du Club Libertis.</p>
													<p>Signature : Dans la mesure où le  client achète en ligne, l’acceptation des présentes conditions ne sera pas  confirmée par une signature manuscrite. Le double clic, lors de la validation  de la commande, constitue une signature électronique et donc vaut une  acceptation irrévocable qui ne peut être remise en cause que dans quelques cas  bien précis. </p>
													<p>Un email de confirmation sera  envoyé au client après que celui-ci ait validé sa commande.</p>
													<p>Pour les commandes par message  électronique: dès lors qu’une personne envoie son message, il reconnaît avoir  pris connaissance des conditions générales de vente et s’engage à les  respecter.</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 2 : COMMANDE </strong></p>
													<p>Le client peut passer commande  par : </p>
													<ul>
													  <li>Internet : sur notre site <a href="http://www.stagroupe.com">www.clublibertis.com</a></li>
													</ul>
													<p>Par téléphone  : (229) 31 30 56 12 /21 15 19 11/ 68 88 17 04 </p>
													<ul>
													  <li>Courrier : </li>
													</ul>
													<p>Club Libertis<br />
													  Service Clientèle <br />
													  01 BP 7240 Cotonou (BENIN)</p>
													<p>Après avoir passé commande, vous  recevrez 3 emails : </p>
													<ul>
													  <li>Accusé de réception de votre commande </li>
													  <li>Email de validation de la commande par LIBERTIS</li>
													  <li>Avis d’expédition</li>
													</ul>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 3 : CONTROLES ANTI FRAUDES</strong></p>
													<p>Le contrôle anti-fraude est  assuré par le Club Libertis. Dans le cadre d’une vérification, il est possible  de demander au client certains justificatifs supplémentaires. </p>
													<p>Le délai de livraison des  produits sera à recalculer sur la base de la réception des documents demandés avant  validation de la commande par le Club Libertis. </p>
													<p>Si, dans un délai de 15 jours  ouvrables à compter de la date de demande des justificatifs, le client ne s’est  pas manifesté, ou si les documents présentés ne donnent pas satisfaction, la  commande sera considérée comme annulée.</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 4 : PREUVES </strong></p>
													<p>Les données enregistrées par le  site <a href="http://www.clublibertis.com">www.clublibertis.com</a>  ou dans <a href="mailto:info@clublibertis.com">info@clublibertis.com</a>,  ou les différents documents commerciaux échangés, constituent la preuve de  l’ensemble des transactions entre les parties. </p>
													<p>Il est très fortement conseillé  de garder une copie des données de la commande.</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 5 : PRODUITS </strong></p>
													<ul>
													  <li><strong>MARQUE </strong></li>
													</ul>
													<p>Tous les produits ou prestations  commercialisés par le Club Libertis sur le site <a href="http://www.clublibertis.com">www.clublibertis.com</a> ou par autres  canaux sont des produits de nos marques ou d'autres marques appartenant aux  partenaires. </p>
													<ul>
													  <li><strong>TRANSPARENCE </strong></li>
													</ul>
													<p>Conformément  aux textes en vigueur en matière de  consommation, le consommateur doit être en mesure de trouver sur le site <a href="http://www.clublibertis.com">www.clublibertis.com</a> le descriptif et la  photo de chaque produit ou prestation avant de passer commande. </p>
													<p>Pour faciliter l’utilisation des  produits de la marque, nous mettons à disposition des fiches techniques  interactives pour chaque article</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 6 : DISPONIBILITE </strong></p>
													<p>La disponibilité de nos produits ou  prestations est indiquée sur le site à titre indicatif mais ne représente en  aucun cas un engagement contractuel. </p>
													<p>Nos offres de produits sont  valables dans la limite des stocks disponibles. </p>
													<p>En cas d’indisponibilité après  passation de commande, vous en serez informé par e-mail, téléphone ou par voie  postale et votre commande sera automatiquement annulée. Nous nous engageons  dans les 30 jours à compter de la date de la commande, à vous rembourser par  chèque si votre compte bancaire a été débité.</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 7 : PRIX </strong></p>
													<p>Les offres de prix sont valables  tant qu’elles sont visibles sur le site <a href="http://www.clublibertis.com">www.clublibertis.com</a>. <br />
													  Tous nos prix sont indiqués en  FCFA hors taxes (HT). Ils n’intègrent pas les frais de transport. Les frais de  livraison sont à la charge du client et seront comptabilisés à la fin de la commande  en supplément des articles sélectionnés. </p>
													<p>Toutes les commandes sont  payables en FCFA. <br />
													Le Club Libertis se réserve le  droit de changer les prix à tout moment. Cependant, le tarif qui vous sera  facturé sera le tarif en vigueur lors de la validation de la commande par vos  soins.</p>
													<p><br clear="all" />
													</p>
													<p><strong>ARTICLE 8 : GARANTIE </strong></p>
													<p>La durée de la période de  garantie est celle indiquée sur la facture. </p>
													<p>Pour bénéficier de la garantie,  il est impératif de garder la facture ainsi que le bon de garantie. </p>
													<p>Nous invitons les clients à  contacter le service après-vente au (229) 68 88 17 84. </p>
													<p>Les éventuels frais d’envoi liés  au retour du ou des produits sont à la charge du client. </p>
													<p>Attention : Le Club ne fabriquant  pas de produit mais commercialisant des produits spécifiques liés à ses  prestations de services, il ne pourra en aucun être tenu pour responsable de la  qualité desdits produits sauf cas avéré de négligence notoire et caractérisée  de la part du club (par exemple en cas de vente des boissons à délai d’expiration  périmé, le Club peut être tenu pour responsable de ses actes. Par contre, la  responsabilité du Club ne saurait être engagé lorsque par exemple, une boisson  non périmée et conservée dans les conditions requises s’avèrent de mauvaise  qualité du fait de son fabriquant.)</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 9 : PAIEMENT ACCEPTE </strong></p>
													<p>Les différentes possibilités de  règlement sont les suivantes&nbsp;:</p>
													<ul>
													  <li><strong>Carte bancaire</strong></li>
													</ul>
													<p>Le paiement en ligne est effectué  directement par le service de la banque partenaire du Club Libertis. </p>
													<p>Pour chaque transaction, une  demande d’autorisation est effectuée en ligne. La commande est enregistrée et  validée dès l’acceptation du paiement par votre banque. </p>
													<ul>
													  <li><strong>Chèque bancaire </strong></li>
													</ul>
													<p>Les chèques doivent provenir  d’une banque domiciliée en République du Bénin. En cas de commande à  l’international, un virement pourra être fait.</p>
													<p>Seules les remises de chèque(s)  sur le compte bancaire du Club sont acceptées. Aucune remise de chèque(s) ou  d’espèce(s) à une personne quelque que soit son rang dans la gestion du club ne  sera prise en compte.</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 10: SECURISATION DES DONNEEES </strong></p>
													<p>Aucune coordonnée bancaire ne  transite sur le site www.stagroupe.com, le paiement en ligne s’effectue  directement à travers le site de notre partenaire, la United Bank for Africa.</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 13 : RECLAMATIONS </strong></p>
													<p>Les réclamations doivent être  faites sans délais à l’adresse mail info@clublibertis.com en précisant en objet  RECLAMATION. </p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 14 : DROIT DE RETRACTATION ET RETOUR DE PRODUITS</strong></p>
													<p>Compte tenu de la particularité  des produits vendus et prestations offertes, aucune rétractation n’est  possible.</p>
													<br clear="all" />
													<p><strong>ARTICLE 16 : INFORMATIQUE ET LIBERTES </strong></p>
													<p>Le traitement des données  personnelles se fait dans le respect des textes en vigueur, relative à  l’informatique et aux libertés. </p>
													<p>Le client dispose d’un droit  d’accès permanent et de rectification des données le concernant. </p>
													<p>Pour faire valoir ce droit, le  client doit adresser un courrier à notre adresse.</p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 17 : SERVICE CLIENTELE </strong></p>
													<p>Grâce à ses services de conseil  avant et après-vente, le Club Libertis vous assure un suivi personnalisé. <br />
													  Pour tout complément  d’information, n’hésitez pas à nous contacter par téléphone du lundi au  vendredi de 8h30 à 13h et de 14h30 à 19h ou par email; un chargé de clientèle  vous répondra dans un délai maximum de 48 heures en cas de mail. </p>
													<p>&nbsp;</p>
													<p><strong>ARTICLE 18 : RESPONSABILITES </strong></p>
													<p>Si un cas fortuit ou de force  majeure venait à arriver, quelle que soit la partie, celle-ci échapperait à la  mise en cause de sa responsabilité pour inexécution de ses obligations  contractuelles si elle prouve que ce cas de force majeure l'a empêché  d'exécuter sa prestation contractuelle. </p>
													<p>L'événement qu'elle invoque doit  avoir été imprévisible lors de la conclusion du contrat (un évènement à  caractère soudain, rare ou anormal), irrésistible, c'est-à-dire inévitable, et  extérieur à la volonté des parties, puisque le débiteur ne doit avoir joué  aucun rôle dans la survenance de l'événement invoqué. </p>
													<p align="right" style="color:red;">A jour à Décembre 2015</p>
												
												</div>
												<!-- Fin Messages reçus -->
												
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