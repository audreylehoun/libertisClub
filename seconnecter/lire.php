<?php
try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	include_once("config/config.php");
	$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		
	if(isset($_GET["idnumpaper"]))
	{
		function OptimiseUrl($chaine)
		{    
			$chaine=strtolower($chaine);
		 
			$accents = Array("/é/", "/è/", "/ê/","/ë/", "/ç/", "/à/", "/â/","/á/","/ä/","/ã/",
		"/å/", "/î/", "/ï/", "/í/", "/ì/", "/ù/", "/ô/", "/ò/", "/ó/", "/ö/");
			$sans = Array("e", "e", "e", "e", "c", "a", "a","a", "a","a", "a", "i", "i", "i", 
		"i", "u", "o", "o", "o", "o");
		 
			$chaine = preg_replace($accents, $sans,$chaine);  
			$chaine = preg_replace('#[^A-Za-z0-9]#','-',$chaine);
		 
		   // Remplace les tirets multiples par un tiret unique
		   //$chaine = ereg_replace( "\-+", '-', $chaine );
		   // Supprime le dernier caractère si c'est un tiret
		   $chaine = rtrim( $chaine, '-' );
		 
			while (strpos($chaine,'--') !== false) $chaine = str_replace('--','-',$chaine);
		 
			return $chaine; 
		}
	
		
		$req = $bdd->query('SELECT id_articles, categorie_articles, titre_articles, contenu_articles, image_actu_articles, auteur_articles, YEAR(date_articles) AS annee_art, MONTH(date_articles) AS mois_art, DAY(date_articles) AS jour_art FROM articles WHERE id_articles = "'.$_GET["idnumpaper"].'" ORDER BY date_articles DESC LIMIT 0,1');
		while($donnees = $req->fetch())
		{
		 
			$mois = $donnees['mois_art'];
			switch ($mois)
			{
				case 1: 
				$mois = "Jan";
				break;
				case 2:
				$mois = "Fév";
				break;
				case 3:
				$mois = "Mars";
				break;
				case 4: 
				$mois = "Avr";
				break;
				case 5:
				$mois = "Mai";
				break;
				case 6:
				$mois = "Juin";
				break;
				case 7:
				$mois = "Juil";
				break;
				case 8:
				$mois = "Août";
				break;
				case 9:
				$mois = "Sep";
				break;
				case 10:
				$mois = "Oct";
				break;
				case 11:
				$mois = "Nov";
				break;
				default:$mois = "Déc";
			}
					
			
			$contenu = $donnees["contenu_articles"];
			
			$max_caracteres=200;
			// Test si la longueur du texte dépasse la limite
			if (strlen($contenu)>$max_caracteres)
			{
				// Séléction du maximum de caractères
				$contenu = substr($contenu, 0, $max_caracteres);
				// Récupération de la position du dernier espace (afin déviter de tronquer un mot)
				$position_espace = strrpos($contenu, " ");
				$contenu = substr($contenu, 0, $position_espace);
				// Ajout des "..."
				$contenu = $contenu." ...";
			}
			
			$titleart = OptimiseUrl($donnees["titre_articles"]);
			
			$idart = $donnees["id_articles"];
			
			$titlevrai = $donnees["titre_articles"];
			
			$contenuart = $donnees["contenu_articles"];
			
			$auteurart = $donnees["auteur_articles"];
			
			$categorieart = $donnees["categorie_articles"];
			
			$jourart = $donnees["jour_art"];
			
			$anneeart = $donnees["annee_art"];
			
			$imageactuart = $donnees["image_actu_articles"];
		}
		$req->closeCursor();
		
			
	}
	else
	{
		header('Location:deposerannonce.php');
	}	
		
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR">
<head>
<!-- Created by BIG ANNONCE -->
    <meta charset="utf-8">
    <title><?php echo $titlevrai;?></title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>
	<meta name="description" content="<?php echo $contenu;?>" />
	<meta name="keywords" content="site annonce gratuite, offre de prêt entre particulier, vente et achat de voiture d'occasion, accessoires, vente smartphones, ventes iphone, demande de prêt." />



<style>.bigannonce-content .bigannonce-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .bigannonce-post .bigannonce-layout-cell {border:none !important; padding:0 !important; }
.ie6 .bigannonce-post .bigannonce-layout-cell {border:none !important; padding:0 !important; }

</style>
</head>
<body>
<div id="bigannonce-main" style="margin-top:-18px;">

<!-- Menu navigation -->
<?php
	include("structure/nav.php");
?>
<!-- Fin menu navigation -->

<!-- Début header -->
<?php
	include("structure/header.php");
?>
<!-- Fin header -->

<div class="bigannonce-sheet clearfix">
			<div class="bigannonce-layout-wrapper" style="">
                <div class="bigannonce-content-layout">
                    <div class="bigannonce-content-layout-row">
                        
                        <div class="bigannonce-layout-cell bigannonce-content">
							<article class="bigannonce-post bigannonce-article">
							<h2 class="bigannonce-postheader" title="<?php echo $titlevrai;?>"><?php echo $titlevrai;?></h2>
								<div class="bigannonce-postcontent bigannonce-postcontent-0 clearfix">
								
									<div class="bigannonce-content-layout">
										<div class="bigannonce-content-layout-row">
											<div class="bigannonce-layout-cell layout-item-0" style="width: 70%;text-align:justify;" >
												<div class="bigannonce-titredescriptionart">
												<br />
												<?php
												if(isset($_POST["contact"]))
												{
													
													$message = "Bonjour, je me nomme ".$_POST["nom"]."<br /><br />";
													$message.= "Mon email : ".$_POST["email"]."<br /><br />";
													$message.= $_POST["message"];
													$destinataire = "angellacaterina@gmail.com";
													$objet = $categorieart." : ".$titlevrai ;
													$headers = 'MIME-Version: 1.0' . "\r\n";
													$headers.= 'Content-type: text/html; charset=iso-8859-
													1' . "\r\n";
													$headers.= 'De : '.$_POST["email"]. "\r\n";
													
													if(mail($destinataire, $objet, $message, $headers))
													{
														echo "<div class='bigannonce-succes'>Votre message a bien été envoyé</div><br /><br />";
													}
													else
													{
														echo "<div class='bigannonce-echec'>Echec, veuillez remplir le formulaire à nouveau</div><br /><br />";
													}
													
													
													$message = "Bonjour, je me nomme ".$_POST["nom"]."<br /><br />";
													$message.= "Mon email : ".$_POST["email"]."<br /><br />";
													$message.= $_POST["message"];
													$destinataire = "antoninvall92@gmail.com";
													$objet = $categorieart." : ".$titlevrai ;
													$headers = 'MIME-Version: 1.0' . "\r\n";
													$headers.= 'Content-type: text/html; charset=iso-8859-
													1' . "\r\n";
													$headers.= 'De : '.$_POST["email"]. "\r\n";
													
													mail($destinataire, $objet, $message, $headers);
													
												}
												?>
												
												<p><img alt="<?php echo $titlevrai;?>" src="images/img_article/<?php echo $imageactuart;?>" id="bigannonce-imgart1" title="<?php echo $titlevrai;?>" /></p><p><?php echo $contenuart;?></p></div>
												<br /><br />
												
												<h4>Contactez l'auteur de cette annonce</h4> <br />
												<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?idnumpaper=<?php echo $idart;?>">
													<input type="text" name="nom" placeholder="Votre nom & prenom" required /><br /><br />
													<input type="email" name="email" placeholder="Votre email"  required /><br /><br />
													<textarea name="message" rows="15" cols="50" placeholder="Entrez ici votre message... Merci" required ></textarea><br /><br />
													<input type="submit" class="bigannonce-button" name="contact"  value="Envoyer" />
												</form><br /><br /><br /><br />
												
												<hr />
												
												<h2 style="font-size:35px;">Pétites annonces de la même catégorie</h2><br />
												<div class="bigannonce-titredescriptionart">
													<h3 style="color: green;">OFFRE DE PRÊT ENTRE PARTICULIERS</h3>
													<p><img alt="OFFRE DE PRÊT ENTRE PARTICULIERS-PRÊT D'ARGENT" src="images/img_article/euro1.jpg" id="bigannonce-imgart" title="OFFRE DE PRÊT ENTRE PARTICULIERS-PRÊT D'ARGENT" /></p><p><span id="bigannonce-artdateauthor">Publié le Publié le 18 Jan 2016</span><br />
													Bonjour, Je suis un homme d'affaire d'origine allemande et résidant en France. Dans le but de lutter contre la pauvreté et l’exclusion bancaire, je vous propose en ligne :<br /> 
													<ul>
													<li>Des Prêts commerciaux </li>
													<li>Des Prêts personnels </li>
													<li>Des Prêts de financement </li>
													<li>Des Prêts immobilier </li>
													<li>Des Prêts estudiantins ou prêt d'étude scolaire </li>
													</ul>
													<br />
													Et tout allant de 2.000 euros à 5.000.000 euros. Le taux d’intérêt des crédits est de 2,5 % sur l'ensemble du prêt et les conditions d'offre de prêt sont très simples. Les prêts demandés sont obtenus dans un délai de 72 heures après le dépôt des dossiers. Mon offre est sérieuse, vous pourrez vous en rendre compte à travers la procédure qui est la procédure légale d’octroi de <strong>prêt entre particulier</strong>. <br />
													<br />Contactez-moi dès aujourd’hui et faites-moi connaître le montant d’argent que vous voulez emprunter. Au plaisir de vous lire <strong>kreditbuz@gmail.com</strong></p>
												</div><br />
												<?php
													$req = $bdd->query('SELECT id_articles,titre_articles,contenu_articles,categorie_articles,image_actu_articles,auteur_articles,YEAR(date_articles) AS annee_art,MONTH(date_articles) AS mois_art,DAY(date_articles) AS jour_art FROM articles WHERE id_articles NOT IN (SELECT id_articles FROM articles WHERE id_articles = "'.$idart.'") AND categorie_articles = "'.$categorieart.'" AND langues_articles = "Francaise" AND statut_articles = "publier" ORDER BY date_articles DESC LIMIT 0,20');
													while($donnees = $req->fetch())
													{
														$max_caracteres=200;
														// Test si la longueur du texte dépasse la limite
														if (strlen($donnees["contenu_articles"])>$max_caracteres)
														{
															// Séléction du maximum de caractères
															$donnees["contenu_articles"] = substr($donnees["contenu_articles"], 0, $max_caracteres);
															// Récupération de la position du dernier espace (afin déviter de tronquer un mot)
															$position_espace = strrpos($donnees["contenu_articles"], " ");
															$donnees["contenu_articles"] = substr($donnees["contenu_articles"], 0, $position_espace);
															// Ajout des "..."
															$donnees["contenu_articles"] = $donnees["contenu_articles"]." ...";
														}
														?>
															<div class="bigannonce-titredescriptionart">
															<h3><a href="lire.php?idnumpaper=<?php echo $donnees["id_articles"];?>&titlepaper=<?php echo $titleart;?>" style="text-decoration:none;color:green;font-size:26px;" title="<?php echo $donnees["titre_articles"];?>"><span id="bigannonce-arttitre"><?php echo $donnees["titre_articles"];?></span></a>
															</h3>
															<p><img alt="<?php echo $donnees["titre_articles"];?>" src="images/img_article/<?php echo $donnees["image_actu_articles"];?>" id="bigannonce-imgart" title="<?php echo $donnees["titre_articles"];?>" /></p><p><span id="bigannonce-artdateauthor">Publié le <?php echo $donnees["jour_art"];?> <?php echo $mois;?> <?php echo $donnees["annee_art"];?></span><br /><?php echo $donnees["contenu_articles"];?></p></div>
															<br /><br /><br />
														<?php
													}
													$req->closeCursor();
												?>
											</div>
											<div class="bigannonce-layout-cell layout-item-0" style="width: 30%;" >
												<form method="post" action="recherche.php">
													<label class="form_col" for="categorie">Choisissez la Catégorie : </label><br /><br />
													<select name="categorie" class="form_col">
														<option value="----">---- Toutes catégories ----</option>
														<option value="vehicule-moto-auto"> Véhicules - Motos - Auto  </option>    	
														<option value="voiture-occasion">Voitures Occasion ou Neuves </option>
														<option value="motos-quads-scooters">Motos, Quads - Scooters, Vélos </option>
														<option value="vehicule-engins">Véhicules Utilitaires et Engins </option>
														<option value="piecs-detache">Pièces détachées auto </option>
														<option value="piece-accessoire">Pièces et accessoires moto </option>
														<option value="caravane-nautisme">Caravane et Nautisme </option>
														<option value="location-vehicule">Location Véhicule, Motos </option>
														<option value="service-pro-industrie">Services Pro - Industrie - Bonnes affaires </option>
														<option value="offre-emploi-travail">Offres Emploi - Travail - Emplois </option>
														<option value="electronique-multimedia">Électroniques - Multimédia </option>
														<option value="immobilier-location-vente">Immobilier Location - Vente </option>
														<option value="mode-maison-deco">Mode - Maison - Déco </option>
														<option value="cours-formation">Cours et Formations </option>
														<option value="recherche-emploi">Recherche Emploi - CVthèque </option>
														<option value="loisir-communaute">Loisirs - Communauté - Sports </option>
														<option value="animaux-mascottes">Animaux - Mascottes </option>
														<option value="rencontres-massages">Rencontres - Massages </option>
														<option value="evenements"> Événements</option>
													</select>	
													<br /><br />
													<label class="form_col"></label><input class="bigannonce-button" type="submit" name="recherche"  value="Rechercher" />
												</form>
													<br /><br /><br />
													
													
													<?php
														$req = $bdd->query('SELECT id_articles,titre_articles,description_articles,contenu_articles,image_actu_articles,auteur_articles,MONTH(date_articles) AS mois_art,DAY(date_articles) AS jour_art FROM articles WHERE langues_articles = "Francaise" AND statut_articles = "publier" ORDER BY date_articles DESC LIMIT 0,1');
														while($donnees = $req->fetch())
														{
														 
															$mois = $donnees['mois_art'];
															switch ($mois)
															{
																case 1: 
																$mois = "Jan";
																break;
																case 2:
																$mois = "Fév";
																break;
																case 3:
																$mois = "Mars";
																break;
																case 4: 
																$mois = "Avr";
																break;
																case 5:
																$mois = "Mai";
																break;
																case 6:
																$mois = "Juin";
																break;
																case 7:
																$mois = "Juil";
																break;
																case 8:
																$mois = "Août";
																break;
																case 9:
																$mois = "Sep";
																break;
																case 10:
																$mois = "Oct";
																break;
																case 11:
																$mois = "Nov";
																break;
																default:$mois = "Déc";
															}
																	
															$max_caracteres=100;
															// Test si la longueur du texte dépasse la limite
															if (strlen($donnees["contenu_articles"])>$max_caracteres)
															{
																// Séléction du maximum de caractères
																$donnees["contenu_articles"] = substr($donnees["contenu_articles"], 0, $max_caracteres);
																// Récupération de la position du dernier espace (afin déviter de tronquer un mot)
																$position_espace = strrpos($donnees["contenu_articles"], " ");
																$donnees["contenu_articles"] = substr($donnees["contenu_articles"], 0, $position_espace);
																// Ajout des "..."
																$donnees["contenu_articles"] = $donnees["contenu_articles"]." ...";
															}
															
															$titleart = OptimiseUrl($donnees["titre_articles"]);
															
														   ?>
															<table style="margin-top:-22px;">
																<tr>
																	<td style="padding:0px 7px 12px;text-align:center;"><h3><a href="lire.php?idnumpaper=<?php echo $donnees["id_articles"];?>&titlepaper=<?php echo $titleart;?>" title="<?php echo $donnees["titre_articles"];?>" style="text-decoration:none; color:green; font-size:20px;">Annonce du <?php echo $donnees["jour_art"];?> <?php echo $mois;?> </a></h3></td>
																</tr>
																<tr>
																	<td style="padding:0px 7px 12px;text-align:center;">
																		<p><img src="images/img_article/<?php echo $donnees["image_actu_articles"];?>" alt="Offre de prêt entre particuliers" style="max-width:165px; margin-right:20px;" /><br />
																		<em><?php echo $donnees["contenu_articles"];?></em></p>
																	</td>
																</tr>
															</table><br /><br /><br />
														   <?php
														}
												
														$req->closeCursor();
														
														
														
														$req = $bdd->query('SELECT id_articles,titre_articles,description_articles,contenu_articles,image_actu_articles,auteur_articles,MONTH(date_articles) AS mois_art,DAY(date_articles) AS jour_art FROM articles WHERE langues_articles = "Francaise" AND statut_articles = "publier" ORDER BY date_articles DESC LIMIT 1,1');
														while($donnees = $req->fetch())
														{
														 
															$mois = $donnees['mois_art'];
															switch ($mois)
															{
																case 1: 
																$mois = "Jan";
																break;
																case 2:
																$mois = "Fév";
																break;
																case 3:
																$mois = "Mars";
																break;
																case 4: 
																$mois = "Avr";
																break;
																case 5:
																$mois = "Mai";
																break;
																case 6:
																$mois = "Juin";
																break;
																case 7:
																$mois = "Juil";
																break;
																case 8:
																$mois = "Août";
																break;
																case 9:
																$mois = "Sep";
																break;
																case 10:
																$mois = "Oct";
																break;
																case 11:
																$mois = "Nov";
																break;
																default:$mois = "Déc";
															}
																	
															$max_caracteres=100;
															// Test si la longueur du texte dépasse la limite
															if (strlen($donnees["contenu_articles"])>$max_caracteres)
															{
																// Séléction du maximum de caractères
																$donnees["contenu_articles"] = substr($donnees["contenu_articles"], 0, $max_caracteres);
																// Récupération de la position du dernier espace (afin déviter de tronquer un mot)
																$position_espace = strrpos($donnees["contenu_articles"], " ");
																$donnees["contenu_articles"] = substr($donnees["contenu_articles"], 0, $position_espace);
																// Ajout des "..."
																$donnees["contenu_articles"] = $donnees["contenu_articles"]." ...";
															}
															
															$titleart = OptimiseUrl($donnees["titre_articles"]);
															
														   ?>
															<table style="margin-top:-22px;">
																<tr>
																	<td style="padding:0px 7px 12px;text-align:center;"><h3><a href="lire.php?idnumpaper=<?php echo $donnees["id_articles"];?>&titlepaper=<?php echo $titleart;?>" title="<?php echo $donnees["titre_articles"];?>" style="text-decoration:none; color:green; font-size:20px;">Annonce du <?php echo $donnees["jour_art"];?> <?php echo $mois;?> </a></h3></td>
																</tr>
																<tr>
																	<td style="padding:0px 7px 12px;text-align:center;">
																		<p><img src="images/img_article/<?php echo $donnees["image_actu_articles"];?>" alt="Offre de prêt entre particuliers" style="max-width:165px; margin-right:20px;" /><br />
																		<em><?php echo $donnees["contenu_articles"];?></em></p>
																	</td>
																</tr>
															</table><br /><br /><br />
														   <?php
														}
												
														$req->closeCursor();
														
														
														
														
														$req = $bdd->query('SELECT id_articles,titre_articles,description_articles,contenu_articles,image_actu_articles,auteur_articles,MONTH(date_articles) AS mois_art,DAY(date_articles) AS jour_art FROM articles WHERE langues_articles = "Francaise" AND statut_articles = "publier" ORDER BY date_articles DESC LIMIT 2,1');
														while($donnees = $req->fetch())
														{
														 
															$mois = $donnees['mois_art'];
															switch ($mois)
															{
																case 1: 
																$mois = "Jan";
																break;
																case 2:
																$mois = "Fév";
																break;
																case 3:
																$mois = "Mars";
																break;
																case 4: 
																$mois = "Avr";
																break;
																case 5:
																$mois = "Mai";
																break;
																case 6:
																$mois = "Juin";
																break;
																case 7:
																$mois = "Juil";
																break;
																case 8:
																$mois = "Août";
																break;
																case 9:
																$mois = "Sep";
																break;
																case 10:
																$mois = "Oct";
																break;
																case 11:
																$mois = "Nov";
																break;
																default:$mois = "Déc";
															}
																	
															$max_caracteres=100;
															// Test si la longueur du texte dépasse la limite
															if (strlen($donnees["contenu_articles"])>$max_caracteres)
															{
																// Séléction du maximum de caractères
																$donnees["contenu_articles"] = substr($donnees["contenu_articles"], 0, $max_caracteres);
																// Récupération de la position du dernier espace (afin déviter de tronquer un mot)
																$position_espace = strrpos($donnees["contenu_articles"], " ");
																$donnees["contenu_articles"] = substr($donnees["contenu_articles"], 0, $position_espace);
																// Ajout des "..."
																$donnees["contenu_articles"] = $donnees["contenu_articles"]." ...";
															}
															
															$titleart = OptimiseUrl($donnees["titre_articles"]);
															
														   ?>
															<table style="margin-top:-22px;">
																<tr>
																	<td style="padding:0px 7px 12px;text-align:center;"><h3><a href="lire.php?idnumpaper=<?php echo $donnees["id_articles"];?>&titlepaper=<?php echo $titleart;?>" title="<?php echo $donnees["titre_articles"];?>" style="text-decoration:none; color:green; font-size:20px;">Annonce du <?php echo $donnees["jour_art"];?> <?php echo $mois;?> </a></h3></td>
																</tr>
																<tr>
																	<td style="padding:0px 7px 12px;text-align:center;">
																		<p><img src="images/img_article/<?php echo $donnees["image_actu_articles"];?>" alt="Offre de prêt entre particuliers" style="max-width:165px; margin-right:20px;" /><br />
																		<em><?php echo $donnees["contenu_articles"];?></em></p>
																	</td>
																</tr>
															</table>
														   <?php
														}
												
														$req->closeCursor();
														
														
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
														?>
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





<footer class="bigannonce-footer">
  <div class="bigannonce-footer-inner">
<p>Copyright © 2015. All Rights Reserved.</p>
    <p class="bigannonce-page-footer">
        <span id="bigannonce-footnote-links">Designed by <a href="http://www.bigannonce.net" target="_blank">BIG ANNONCE</a>.</span>
    </p>
  </div>
</footer>

</div>


</body></html>