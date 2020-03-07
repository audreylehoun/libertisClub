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
    <title>Règlement Intérieur | APHRODITE CLUB</title>
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
													<h3>Règlement intérieur</h3><hr /><br />
													
													<table border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
													  <tr>
														<td><p align="center" style="font-size:35px;"><strong>REGLEMENT INTERIEUR</strong> </p></td>
													  </tr>
													</table><br /><br />
													<p><strong><u>PREAMBULE</u></strong> <br />
													  Le présent règlement a pour objet de&nbsp;:</p>
													<ul>
													  <li>Déterminer  les règles générales et permanentes relatives à la discipline ainsi </li>
													</ul>
													<p>que la nature  et l’échelle des sanctions;</p>
													<ul>
													  <li> Fixer les relations et l’organisation entre  les membres du Club</li>
													  <li>Préciser  l’application desrègles en matière de discrétion, de confidentialité et </li>
													</ul>
													<p>de sécurité  dans le Club.</p>
													<p>Le présent règlement s’applique à tous les  membres adhérents ou non  sans restrictions  et sans réserves, y compris les prestataires qui interviendront dans  l’organisation des activités du Club.<br />
													Pour une meilleure information, ce document  sera notifié à chaque adhérent à l’adhésion au club et sera disponible sur le  site internet  du Club<strong>.</strong></p>
													<p>&nbsp;</p>
													<p><strong><u>TITRE</u></strong><strong>I&nbsp;: ADHESIONS</strong><br />
													  <strong><u>Article</u></strong><strong> 1&nbsp;: </strong></p>
													<ul>
													  <li><strong>Membres fondateurs</strong></li>
													</ul>
													<p>Les membres  fondateurs sont de pleins droits adhérents,</p>
													<ul>
													  <li><strong>Adhésion des premiers  membres </strong></li>
													</ul>
													<p>L’adhésion des membres se fera par cooptation par des  membres fondateurs. En clair, l’adhésion se fera sur vote des membres  fondateurs. A chaque fois qu’une personne souhaite adhérer, il formalise sa  demande et une fois par mois, les membres fondateurs se réunissent pour voter  au vu des éléments du dossier. </p>
													<p>La décision d’adhésion sera prise à la majorité d’au moins ¾  des votants.  Le membre fondateur ayant  coopté le candidat peut si les circonstances (doute sur la fiabilité du  candidat) le justifient, être écarté des votes. </p>
													<p>Gestion du club<br />
													  La direction sera   assurée par un comité de direction de 5 membres composés entre autres,  d’office des deux(2) membres fondateurs et d’un autre membre. <br />
													  Le Gérant du club sera élu au sein dudit comité</p>
													<p><strong><u>Article  2&nbsp;: </u></strong></p>
													<p>L’obtention de la carte d’adhérents et des attributs qui  vont avec est conditionné par le paiement d’un droit d’adhésion de F CFA  50&nbsp;000. </p>
													<p>Le paiement de ce droit donnera droit à&nbsp;:</p>
													<ul>
													  <li>une carte d’adhérent pour un couple, peu importe la  composition (2 hommes, 2 femmes ou 1 homme et 1 femme), </li>
													  <li>un accès sécurisé au site internet du club,</li>
													</ul>
													<p><strong><u>Article  3&nbsp;: </u></strong><br />
													  Quelque soit la personne (fondateur, adhérent, prestataire,  invités, etc.), la demande d’adhésion doit être obligatoirement composée  de&nbsp;: </p>
													<ul>
													  <li>une fiche de demande dûment remplie (modèle disponible chez  les fondateurs),</li>
													  <li>un engagement de confidentialité et respect de la vie privée  des autres membres,</li>
													  <li>la preuve du versement des droits d’inscription sur le  compte bancaire du club.</li>
													</ul>
													<p><strong><u>Article  4&nbsp;:</u></strong><br />
													  Une  fois la demande validée et les procédures d’adhésion engagées, le club se  réserve le droit d’exiger de chacun de ses membres pour raison de sécurité  (vérification de la correspondance visuelle des membres lors des accès aux  soirées&nbsp;:</p>
													<ul>
													  <li>une photo d’identité numérique,</li>
													  <li>copie d’une pièce d’identité en vigueur</li>
													</ul>
													<p>&nbsp;</p>
													<p align="left"><strong><u>TITRE</u></strong><strong> II&nbsp;: ACCES ET HORAIRES </strong><br />
														<strong><u>Article 5&nbsp;: </u></strong><br />
													  La date, le lieu et les horaires de chaque  évènement seront communiqués par un canal sécurisé dont l’accès sera  conditionné par le renseignement d’un identifiant et d’un mot de passe sécurisé,<br />
													  Les membres organisateurs doivent prendre  toutes les dispositions dans l’organisation de chaque activité de sorte qu’il y  est un respect strict des horaires de déroulement des programmes prévus,<br />
													  <strong><u>Article </u></strong><strong>6&nbsp;: </strong><br />
													  L’accès aux lieux des activités du Club par  les membres est assujetti à contrôle d’identité. Cet accès peut être autorisé  ou non pour des raisons de sécurité ou confidentialité.<br />
													  Aucune personne ne pourra accéder aux  manifestations sans avoir au préalable la qualité d’adhérent ou selon le cas d’invité  (dans tous les cas la présence de l’intéressé doit donner lieu à une  approbation préalables des membres), <br />
													  <strong><u>Article</u></strong><strong>7&nbsp;: </strong><br />
													  L’utilisation de téléphone, d’iphone, d’ipad,  etc, est prohibée à l’intérieur des lieux de rencontres du Club. Ceci pour  préserver la vie privée et l’intimité de tous.<br />
													  Les appareils seront conservés dans des  coffres individuelles fermées à clé et dont la clé sera conservée par chaque  membre.</p>
													<p align="left">&nbsp;</p>
													<p align="left"><strong><u>TITRE</u></strong><strong> III&nbsp;: CONFIDENTIALITE</strong> <br />
														<strong><u>Article</u></strong><strong> 8&nbsp;:</strong> <br />
													  Règles  de confidentialité à respecter par tous les membres</p>
													<div align="left">
													  <ul>
														<li>il est interdit de citer  nommément l’identité d’un membre et/ou de parler d’un membre ou des actes posés  par un membre en dehors des cercles du club, </li>
														<li>une vérification d’identité  obligatoire et une fouille se feront à l’entrée de chaque manifestation afin  d’empêcher l’introduction de caméra, d’appareil photo, d’objets tranchants ou  autres objets prohibés par des membres, </li>
													  </ul>
													</div>
													<p align="left"><strong><u>TITRE</u></strong><strong>VI&nbsp;: FONCTIONNEMENT</strong><br />
														<strong><u>Article  9&nbsp;: </u></strong><br />
													  Les  membres seront informés des manifestations en moyenne une (1) semaine à  l’avance par des messages mails sécurisés, accessibles uniquement sur le site  internet du Club ou par tout autre canal retenu par le comité de gestion du  club. Les informations et indications nécessaires seront communiquées à chaque  membre par les voies autorisées.<br />
													  <strong><u>Article  10&nbsp;: </u></strong><br />
													  Les règles élémentaires de courtoisie doivent être  obligatoirement respectées au cours de la soirée&nbsp;: </p>
													<div align="left">
													  <ul>
														<li>Ne pas importuner les autres participants ou le personnel du  club de part des comportements très peu courtois,</li>
														<li>Respecter le  «&nbsp;Non&nbsp;» dit par une femme ou un homme même si l’intéressé est seul.  Par exemple, ne pas insister pour tenir compagnie à une femme participant seule  à une soirée,</li>
														<li>Ne pas brutaliser ou forcer  un membre ou même trop insister pour contraindre un membre, une participante ou  même un membre du personnel à faire quelque chose (par exemple forcer une fille  à danser&nbsp;: un non est un non),</li>
														<li>Ne pas fumer, chiquer ou  autres sur les lieux de la salle sauf si dans les salles réservées pour cet  usage,</li>
														<li>Même dans l’éventualité où  un membre rencontre une connaissance, se comporter de façon naturelle pour ne  pas indisposer l’autre participant,</li>
														<li>Se comporter en permanence en  vrai «&nbsp;gentleman&nbsp;»,</li>
														<li>Pour des raisons évidentes  de discrétion, ne pas chercher à connaître la vraie identité des membres ou  insister pour avoir le numéro de téléphone d’un(e) membre,</li>
														<li>Ne pas chercher à la fin  des soirées à rencontrer un membre contre son gré en dehors du club,</li>
														<li>Ne jamais posé un acte qui  porterait atteinte à l’intégrité physique ou morale d’un membre, d’un  participant ou du personnel,</li>
														<li>L’usage  (consommation ou distribution) des produits narcotiques (drogue sous toutes ses  formes, produits narcotiques, somnifère, etc. est strictement interdit,</li>
														<li>La vision  du club étant d’être un espace ouvert  de  distraction et de tolérance mutuelle, il est formellement interdit à un membre,  invité ou membre du personnel quelque soit son rang ou son titre, de porter un  jugement de valeur sur les actes posés par un membre durant les manifestation  pour des motifs de croyance réligieuse, de conception ou vision de la vie, de  morale et autres. Au sein du club chacun est libre de ses actes et paroles dans  la limite des interdictions du règlement intérieur. A titre d’illustrations&nbsp;:</li>
														<ul>
														  <li>un membre est libre de danser nu ou d’embrasser sa compagne  en public au cours d’une soirée.</li>
														  <li>un couple de filles peut librement participer aux  manifestations du club et se bécoter en public,</li>
														  <li>un homme ou une femme marié€ peut venir avec un€ autre  partenaire, </li>
														  <li>etc</li>
														</ul>
													  </ul>
													</div>
													<p align="left"><strong><u>&nbsp;</u></strong></p>
													<p><strong><u>Article</u></strong><strong>11&nbsp;: </strong></p>
													<p>Les  prestations en option seront disponibles sur le site avec les prix associés. A  chaque inscription.</p>
													<p>Le bénéfice des  prestations du club est conditionné par le paiement régulier et préalable des  prix fixés pour les prestations.</p>
													<p>Le  club proposera deux grandes catégories de prestations à l’attention de ses  membres&nbsp;: </p>
													<ul>
													  <li><strong>Prestations  d’ordre général&nbsp;: </strong></li>
													</ul>
													<p>&nbsp;</p>
													<ul>
													  <li>vie  associative,</li>
													  <li>accès  et fréquentation de plage privée,</li>
													  <li>bénéfice  de tarifs préférentiels dans certains commerces et hôtels de la place,</li>
													  <li>bénéfice  de la synergie du réseau professionnel et social constitué pour le  développement des activités professionnelles des membres, </li>
													  <li>excursion</li>
													</ul>
													<ul>
													  <li><strong>Prestations  particulières (ouvertes uniquement aux membres y ayant opté)</strong></li>
													</ul>
													<p>&nbsp;</p>
													<p>Soirées  privées (uniquement accessibles aux membres)&nbsp;: </p>
													<ul>
													  <li>Prestation  incluse dans les frais de participation aux soirée </li>
													  <ul>
														<li>Musiques  + piste de danse,</li>
														<li>Collation  (Boissons SOBEBRA + Liqueurs)</li>
														<li>Strip-tease </li>
													  </ul>
													</ul>
													<p>&nbsp;</p>
													<ul>
													  <li><strong>Prestations sur  option (payante)</strong></li>
													</ul>
													<ul>
													  <li>consommation  supplémentaire ou en bouteille de boissons SOBEBRA ou de liqueurs</li>
													  <li>consommation  de champagne, vins, etc.</li>
													  <li>diner  sur commande,</li>
													  <li>escorte  girl pour tenir compagnie (durant une manifestation),</li>
													  <li>massage  privé,</li>
													  <li>salon  privé avec strip-tease,</li>
													  <li>accès  à l’espace liberté,</li>
													  <li>chambre  ou suite,</li>
													  <li>etc.</li>
													</ul>
													<p>&nbsp;</p>
													<p><strong><u>Article</u></strong><strong>12&nbsp;: </strong></p>
													<p>Les  paiements au profit du club se feront par les modes ci-après&nbsp;: </p>
													<ul>
													  <li>Dépôts  ou virements sur le compte bancaire du club. Dans ce cas, il est obligatoire de  transmettre au club une copie électronique visible du bordereau de versement ou  de virement avant la date limite fixée par le club,</li>
													  <li>Paiement  par carte bancaire&nbsp;: les membres qui le souhaitent peuvent souscrire à une  carte bancaire de type porte monnaie électronique encore appelé carte de débit (carte  Tucana ou UBA, etc.) qui sera associé à leur compte électronique du club  ou utiliser leur carte bancaire habituelle</li>
													  <li>Paiement  par le compte électronique du club&nbsp;: dans un rechargement préalable est  obligatoire pour pouvoir bénéficier en temps voulu des prestations du club,</li>
													</ul>
													<p>Le  club n’acceptera aucun paiement fait en espèces que ce soit auprès d’un membre  ou du comité de gestion du club.</p>
													<p>&nbsp;</p>
													<p><strong><u>TITRE</u></strong><strong>V&nbsp;: SANCTIONS </strong><br />
													  <strong><u>Article 13&nbsp;: </u></strong></p>
													<p>Tout(s) manquement à ces règles entrainerait (ent)  l’exclusion pure et simple et sans avis de on auteur du club pour une période  d’au moins 3 mois. Tout récidiviste  sera définitivement exclu du Club.</p>
													<p>Toutefois la  reprise d’un membre sanctionné ne se fera que sur approbation de l’ensemble des  membres du comité de gestion du club,</p>
													<br clear="all" />
													<p><strong>TITRE VI&nbsp;:  DISPOSITIONS DIVERSES</strong></p>
													<p><strong><u>Article 14&nbsp;:</u></strong><strong>  <u></u></strong><br />
													  L’adhésion au club et/participation ne  confère aucun droit de propriété sur le club à un membre ou un adhérent. Le  club reste et demeure la propriété de ses membres fondateurs<br />
													  Aucune  autorisation préalable des membres ne sera nécessaire. <br />
													  <strong><u>Article 15&nbsp;:</u></strong><strong>  <u></u></strong><br />
													  Le comité de gestion club se réserve le droit  de modifier le présent règlement intérieur en cas de besoin.</p>
													<p>Version  Novembre 2015</p>
												
												
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