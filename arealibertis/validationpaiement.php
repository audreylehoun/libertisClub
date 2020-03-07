<?php 
include("verif/verif.php");
$menu = "validationpaiement.php";

//verification groupe
if($_SESSION['groupe']!='Super administrateur')
{
	       header("Location:home.php");
}	
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Validez un paiement | LIBERTIS</title>
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
			  width: 200px;
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
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
										
										<!-- Validation des paiements des licences -->
										
											<!-- Debut contenu -->
											<?php
											try
											{
												$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
												include("../config/config.php");
												$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
												
												if(isset($_POST["pmtabnmt"]))
												{
													// Valider d'abord le paiement
													$req = $bdd->prepare('UPDATE licenceabnmt SET statut_paiement = :statutpaiement WHERE id_licenceabnmt = :idlicenceabnmt');
													$req->execute(array(
													'idlicenceabnmt' => $_POST["paiementreabnmt"],
													'statutpaiement' => "Valide"));
													
													$req->closeCursor();
													
													if($req)
													{
														// Sélectionner les identifiants des paiements validés
														$req = $bdd->query('SELECT id_licenceabnmt,quantite_abnmt,pseudo_licenceabnmt,nature_licenceabnmt,produit_licenceabnmt,statut_paiement FROM licenceabnmt WHERE id_licenceabnmt = "'.$_POST["paiementreabnmt"].'" AND statut_paiement = "Valide" ');
														while($donnees = $req->fetch())
														{
															$qteabonnemntnew = $donnees["quantite_abnmt"];
															$pseudo = $donnees["pseudo_licenceabnmt"];
															$naturelicence = $donnees["nature_licenceabnmt"];
															$nomproduit = $donnees["produit_licenceabnmt"];
														}
														$req->closeCursor();
														
														// Actualiser les infos compte tenir de la nature du poste
														if($naturelicence == "Monoposte" OR $naturelicence == "Reseau" OR $naturelicence == "Reseau/serveur")
														{
															// Sélectionner les identifiants des paiements validés
															$req = $bdd->query('SELECT qteabonnemnt FROM licence WHERE pseudouser = "'.$pseudo.'" AND naturelicence = "'.$naturelicence.'" AND nomproduit = "'.$nomproduit.'" ORDER BY id_licence DESC LIMIT 0,1 ');
															while($donnees = $req->fetch())
															{
																$qteabonnemntnew = $donnees["qteabonnemnt"] + $qteabonnemntnew;
														
															}
															$req->closeCursor();
														
															$req = $bdd->prepare('UPDATE licence SET qteabonnemnt = :qte_abonnemnt WHERE pseudouser = :pseudo_user AND naturelicence = :nature_licence AND nomproduit = :nom_produit');
															$req->execute(array(
															'pseudo_user' => $pseudo,
															'nature_licence' => $naturelicence,
															'nom_produit' => $nomproduit,
															'qte_abonnemnt' => $qteabonnemntnew));
															
															$req->closeCursor();
															
															if($req)
															{
																$req = $bdd->query('SELECT pseudo_users,email FROM users WHERE pseudo_users = "'.$pseudo.'"');
																while($donnees = $req->fetch())
																{
																	$mailgbafor = $donnees["email"];
																}
																$req->closeCursor();
																
																// Mail à envoyer aux clients
																$message = "Validation du paiement à l'abonnement de <span style='font-size:18px;'>".$nomproduit."</span><br /><br /><br />";
																$message.= "Bonjour, le paiement du réabonnement de votre logiciel : ".$nomproduit." sur le www.stagroupe.com vient d'être validé.<br /><br />";
																$message.= "Profitez-en de votre nouvelle date d'expiration<br />";
																$message.= "Vos identifiants (Pseudo et mot de passe) : Vous les connaissez. <br /><br />";
																$message.= "Utilisez vos identifiants (Pseudo et mot de passe) et le numero de la licence pour attribuer d'abonnement à vos logiciels.<br /><br /><br /> 
																STA-BENIN vous remercie pour la confiance <br /><br /><br /><br />
																--------------- <h1>LIBERTIS</h1> --------------- <br />
																<h3>STA BENIN</h3><br /><br />
																Email : info@stagroupe.com <br /><br />
																Tél : (+229) 21 30 56 12 / 21 15 19 11";
																
																$destinataire = $mailgbafor;
																
																$objet = "Validation du paiement à l'abonnement de ".$nomproduit." sur www.stagroupe.com" ;
																
																$headers = 'MIME-Version: 1.0' . "\r\n";
																$headers .= 'Content-type: text/html; charset=iso-8859-
																1' . "\r\n";
																$headers .= 'De : info@stagroupe.com'. "\r\n";
																
																mail($destinataire, $objet, $message, $headers);
																// Fin mail à envoyer aux clients
															}
															else
															{
																echo "<div class='STA-echec'>L'abonnement n'a pas été mis à jour au niveau du fichier de communication</div>";
															}
															
														}
														elseif($naturelicence == "Reseau/poste-client")
														{
														
															// Sélectionner les identifiants des paiements validés
															$req = $bdd->query('SELECT quantitepstcltabnmt FROM licence WHERE pseudouser = "'.$pseudo.'" AND naturelicence = "'.$naturelicence.'" AND nomproduit = "'.$nomproduit.'" ORDER BY id_licence DESC LIMIT 0,1 ');
															while($donnees = $req->fetch())
															{
																$qteabonnemntnew = $donnees["quantitepstcltabnmt"] + $qteabonnemntnew;
															}
															$req->closeCursor();
														
														
															$req = $bdd->prepare('UPDATE licence SET quantitepstcltabnmt = :quantite_pstcltabnmt WHERE pseudouser = :pseudo_user AND naturelicence = :nature_licence AND nomproduit = :nom_produit');
															$req->execute(array(
															'pseudo_user' => $pseudo,
															'nature_licence' => $naturelicence,
															'nom_produit' => $nomproduit,
															'quantite_pstcltabnmt' => $qteabonnemntnew));
															
															$req->closeCursor();
															
															
															if($req)
															{
																$req = $bdd->query('SELECT pseudo_users,email FROM users WHERE pseudo_users = "'.$pseudo.'"');
																while($donnees = $req->fetch())
																{
																	$mailgbafor = $donnees["email"];
																}
																$req->closeCursor();
																
																// Mail à envoyer aux clients
																$message = "Validation du paiement à l'abonnement de <span style='font-size:18px;'>".$nomproduit."</span><br /><br /><br />";
																$message.= "Bonjour, le paiement du réabonnement de votre logiciel : ".$nomproduit." sur le www.stagroupe.com vient d'être validé.<br /><br />";
																$message.= "Profitez-en de votre nouvelle date d'expiration<br />";
																$message.= "Vos identifiants (Pseudo et mot de passe) : Vous les connaissez. <br /><br />";
																$message.= "Utilisez vos identifiants (Pseudo et mot de passe) et le numero de la licence pour attribuer d'abonnement à vos logiciels.<br /><br /><br /> 
																STA-BENIN vous remercie pour la confiance <br /><br /><br /><br />
																--------------- <h1>LIBERTIS</h1> --------------- <br />
																<h3>STA BENIN</h3><br /><br />
																Email : info@stagroupe.com <br /><br />
																Tél : (+229) 21 30 56 12 / 21 15 19 11";
																
																$destinataire = $mailgbafor;
																
																$objet = "Validation du paiement à l'abonnement de ".$nomproduit." sur www.stagroupe.com" ;
																
																$headers = 'MIME-Version: 1.0' . "\r\n";
																$headers .= 'Content-type: text/html; charset=iso-8859-
																1' . "\r\n";
																$headers .= 'De : info@stagroupe.com'. "\r\n";
																
																mail($destinataire, $objet, $message, $headers);
																// Fin mail à envoyer aux clients
															}
															else
															{
																echo "<div class='STA-echec'>L'abonnement n'a pas été mis à jour au niveau du fichier de communication</div>";
															}
															
														}
														else
														{
															echo "<div class='STA-echec'>L'abonnement n'a pas été mis à jour au niveau du fichier de communication</div>";
														}
														
													}
													else
													{
														echo "<div class='STA-echec'>Echec de la validation du paiement</div>";
													}


													
													//créer un fichier txt
													$file = fopen ("../verif.txt" , "w+");
													$req = $bdd->query("SELECT * FROM licence ORDER BY id_licence DESC ");
													while($donnees = $req->fetch())
													{
														if($donnees["naturelicence"] == "Monoposte" OR $donnees["naturelicence"] == "Reseau")
														{
															$_xml ="<users><idlicence>".$donnees["id_licence"]."</idlicence><proprietaire>".$donnees["proprietaire"]."</proprietaire><nomproduit>".$donnees["nomproduit"]."</nomproduit><naturelicence>".$donnees["naturelicence"]."</naturelicence><pseudo>".$donnees["pseudouser"]."</pseudo><password>".$donnees["passworduser"]."</password><qteabonnmentutilise>".$donnees["qteabnmtutlise"]."</qteabonnmentutilise><qteabonnmentserveur>0</qteabonnmentserveur><qteabonnmentpstclt>0</qteabonnmentpstclt><qteabonnmentmnpstreseau>".$donnees["qteabonnemnt"]."</qteabonnmentmnpstreseau><processor>".$donnees["processeurposte"]."</processor><numserie>".$donnees["licenceproduit"]."</numserie><statut>".$donnees["statut_licence"]."</statut><dateactivation>".$donnees["dateactivation"]."</dateactivation><datepaiement>".$donnees["datepaiement"]."</datepaiement><dateexpiration>".$donnees["dateexpiration"]."</dateexpiration><statutpro>".$donnees["statutprocedure"]."</statutpro><datesysteme>".$date."</datesysteme></users> \r\n";
															fputs ($file , $_xml);
															fputs ($file , "\n");
														}
														elseif($donnees["naturelicence"] == "Reseau/serveur" OR $donnees["naturelicence"] == "Reseau/poste-client")
														{
															$_xml ="<users><idlicence>".$donnees["id_licence"]."</idlicence><proprietaire>".$donnees["proprietaire"]."</proprietaire><nomproduit>".$donnees["nomproduit"]."</nomproduit><naturelicence>".$donnees["naturelicence"]."</naturelicence><pseudo>".$donnees["pseudouser"]."</pseudo><password>".$donnees["passworduser"]."</password><qteabonnmentutilise>".$donnees["qteabnmtutlise"]."</qteabonnmentutilise><qteabonnmentserveur>".$donnees["qteabonnemnt"]."</qteabonnmentserveur><qteabonnmentpstclt>".$donnees["quantitepstcltabnmt"]."</qteabonnmentpstclt><qteabonnmentmnpstreseau>0</qteabonnmentmnpstreseau><processor>".$donnees["processeurposte"]."</processor><numserie>".$donnees["licenceproduit"]."</numserie><statut>".$donnees["statut_licence"]."</statut><dateactivation>".$donnees["dateactivation"]."</dateactivation><datepaiement>".$donnees["datepaiement"]."</datepaiement><dateexpiration>".$donnees["dateexpiration"]."</dateexpiration><statutpro>".$donnees["statutprocedure"]."</statutpro><datesysteme>".$date."</datesysteme></users> \r\n";
															fputs ($file , $_xml);
															fputs ($file , "\n");
														}
														else
														{
															$_xml ="<users><idlicence>".$donnees["id_licence"]."</idlicence><proprietaire>".$donnees["proprietaire"]."</proprietaire><nomproduit>".$donnees["nomproduit"]."</nomproduit><naturelicence>".$donnees["naturelicence"]."</naturelicence><pseudo>".$donnees["pseudouser"]."</pseudo><password>".$donnees["passworduser"]."</password><qteabonnmentutilise>".$donnees["qteabnmtutlise"]."</qteabonnmentutilise><qteabonnmentserveur>".$donnees["qteabonnemnt"]."</qteabonnmentserveur><qteabonnmentpstclt>".$donnees["quantitepstcltabnmt"]."</qteabonnmentpstclt><qteabonnmentmnpstreseau>".$donnees["qteabonnemnt"]."</qteabonnmentmnpstreseau><processor>".$donnees["processeurposte"]."</processor><numserie>".$donnees["licenceproduit"]."</numserie><statut>".$donnees["statut_licence"]."</statut><dateactivation>".$donnees["dateactivation"]."</dateactivation><datepaiement>".$donnees["datepaiement"]."</datepaiement><dateexpiration>".$donnees["dateexpiration"]."</dateexpiration><statutpro>".$donnees["statutprocedure"]."</statutpro><datesysteme>".$date."</datesysteme></users> \r\n";
															fputs ($file , $_xml);
															fputs ($file , "\n");
														}
													}
													fclose($file);
													$req->closeCursor();
													//Fin création d'un fichier txt
													
													?>
														<div class="STA-succes">Le paiement de la licence a bien été validé</div>
													<?php
												}
												
												
												if(isset($_POST["pmtlicence"]))
												{
													
													$req = $bdd->prepare('UPDATE licence SET statutpaiement = :statut_paiement, statutcommande = :statut_commande, statut_licence = :statutlicence, datepaiement = NOW() WHERE id_licence = :idlicence');
													$req->execute(array(
													'idlicence' => $_POST["paiementlicence"],
													'statut_commande' => "Commande validee",
													'statutlicence' => "Desactivee",
													'statut_paiement' => "Paiement valide"));
												
														if($req)
														{
															$req->closeCursor();
														
															// Début création du fichier verif.txt
															
															$req = $bdd->query('SELECT pseudouser FROM licence WHERE id_licence = "'.$_POST["paiementlicence"].'"');
															while($donnees = $req->fetch())
															{
																$pseudogbafor = $donnees["pseudouser"];
																
																if(!isset($bafor))
																{
																	$req1 = $bdd->query('SELECT pseudo_users,email FROM users WHERE pseudo_users = "'.$pseudogbafor.'"');
																	while($donnees1 = $req1->fetch())
																	{
																		$mailgbafor = $donnees1["email"];
																	}
																	$req1->closeCursor();
																}
																
																// Mail à envoyer aux clients
																$message = "Validation du paiement de la licence N°<span style='font-size:18px;'>".$_POST["paiementlicence"]."</span><br /><br /><br />";
																$message.= "Bonjour, le paiement de la licence de votre logiciel : ".$donnees["nomproduit"]." sur le www.stagroupe.com vient d'être validé.<br /><br />";
																$message.= "Le numéro de la licence est : <span style='font-size:18px;'>".$_POST["paiementlicence"]."</span><br />";
																$message.= "Vos identifiants (Pseudo et mot de passe) : Vous les connaissez. <br /><br />";
																$message.= "Utilisez vos identifiants (Pseudo et mot de passe) et le numero de la licence pour activer votre logiciel et valider vos abonnements.<br /><br /><br /> 
																STA-BENIN vous remercie pour la confiance <br /><br /><br /><br />
																--------------- <h1>LIBERTIS</h1> --------------- <br />
																<h3>STA BENIN</h3><br /><br />
																Email : info@stagroupe.com <br /><br />
																Tél : (+229) 21 30 56 12 / 21 15 19 11";
																
																$destinataire = $mailgbafor;
																
																$objet = "Validation du paiement de la licence du logiciel ".$donnees["nomproduit"]." sur www.stagroupe.com" ;
																
																$headers = 'MIME-Version: 1.0' . "\r\n";
																$headers .= 'Content-type: text/html; charset=iso-8859-
																1' . "\r\n";
																$headers .= 'De : info@stagroupe.com'. "\r\n";
																
																mail($destinataire, $objet, $message, $headers);
																// Fin mail à envoyer aux clients
											
															}
															$req->closeCursor();
															
															$date = DATE("Y")."-".DATE("m")."-".DATE("d");
															
															$file = fopen ("../verif.txt" , "w+");
															$req = $bdd->query("SELECT * FROM licence ORDER BY id_licence DESC ");
															while($donnees = $req->fetch())
															{
																if($donnees["naturelicence"] == "Monoposte" OR $donnees["naturelicence"] == "Reseau")
																{
																	$_xml ="<users><idlicence>".$donnees["id_licence"]."</idlicence><proprietaire>".$donnees["proprietaire"]."</proprietaire><nomproduit>".$donnees["nomproduit"]."</nomproduit><naturelicence>".$donnees["naturelicence"]."</naturelicence><pseudo>".$donnees["pseudouser"]."</pseudo><password>".$donnees["passworduser"]."</password><qteabonnmentutilise>".$donnees["qteabnmtutlise"]."</qteabonnmentutilise><qteabonnmentserveur>0</qteabonnmentserveur><qteabonnmentpstclt>0</qteabonnmentpstclt><qteabonnmentmnpstreseau>".$donnees["qteabonnemnt"]."</qteabonnmentmnpstreseau><processor>".$donnees["processeurposte"]."</processor><numserie>".$donnees["licenceproduit"]."</numserie><statut>".$donnees["statut_licence"]."</statut><dateactivation>".$donnees["dateactivation"]."</dateactivation><datepaiement>".$donnees["datepaiement"]."</datepaiement><dateexpiration>".$donnees["dateexpiration"]."</dateexpiration><statutpro>".$donnees["statutprocedure"]."</statutpro><datesysteme>".$date."</datesysteme></users> \r\n";
																	fputs ($file , $_xml);
																	fputs ($file , "\n");
																}
																elseif($donnees["naturelicence"] == "Reseau/serveur" OR $donnees["naturelicence"] == "Reseau/poste-client" OR $donnees["naturelicence"] == "Abonnement-S/PCL")
																{
																	$_xml ="<users><idlicence>".$donnees["id_licence"]."</idlicence><proprietaire>".$donnees["proprietaire"]."</proprietaire><nomproduit>".$donnees["nomproduit"]."</nomproduit><naturelicence>".$donnees["naturelicence"]."</naturelicence><pseudo>".$donnees["pseudouser"]."</pseudo><password>".$donnees["passworduser"]."</password><qteabonnmentutilise>".$donnees["qteabnmtutlise"]."</qteabonnmentutilise><qteabonnmentserveur>".$donnees["qteabonnemnt"]."</qteabonnmentserveur><qteabonnmentpstclt>".$donnees["quantitepstcltabnmt"]."</qteabonnmentpstclt><qteabonnmentmnpstreseau>0</qteabonnmentmnpstreseau><processor>".$donnees["processeurposte"]."</processor><numserie>".$donnees["licenceproduit"]."</numserie><statut>".$donnees["statut_licence"]."</statut><dateactivation>".$donnees["dateactivation"]."</dateactivation><datepaiement>".$donnees["datepaiement"]."</datepaiement><dateexpiration>".$donnees["dateexpiration"]."</dateexpiration><statutpro>".$donnees["statutprocedure"]."</statutpro><datesysteme>".$date."</datesysteme></users> \r\n";
																	fputs ($file , $_xml);
																	fputs ($file , "\n");
																}
																else
																{
																	$_xml ="<users><idlicence>".$donnees["id_licence"]."</idlicence><proprietaire>".$donnees["proprietaire"]."</proprietaire><nomproduit>".$donnees["nomproduit"]."</nomproduit><naturelicence>".$donnees["naturelicence"]."</naturelicence><pseudo>".$donnees["pseudouser"]."</pseudo><password>".$donnees["passworduser"]."</password><qteabonnmentutilise>".$donnees["qteabnmtutlise"]."</qteabonnmentutilise><qteabonnmentserveur>".$donnees["qteabonnemnt"]."</qteabonnmentserveur><qteabonnmentpstclt>".$donnees["quantitepstcltabnmt"]."</qteabonnmentpstclt><qteabonnmentmnpstreseau>".$donnees["qteabonnemnt"]."</qteabonnmentmnpstreseau><processor>".$donnees["processeurposte"]."</processor><numserie>".$donnees["licenceproduit"]."</numserie><statut>".$donnees["statut_licence"]."</statut><dateactivation>".$donnees["dateactivation"]."</dateactivation><datepaiement>".$donnees["datepaiement"]."</datepaiement><dateexpiration>".$donnees["dateexpiration"]."</dateexpiration><statutpro>".$donnees["statutprocedure"]."</statutpro><datesysteme>".$date."</datesysteme></users> \r\n";
																	fputs ($file , $_xml);
																	fputs ($file , "\n");
																}
															}
															fclose($file);
															$req->closeCursor();
															//Fin création du fichier verif.txt
												
															?>
																<div class="STA-succes">Le paiement de la licence a bien été validé</div>
															<?php
															   
														}
														else
														{
														   echo "<div class='STA-echec'>La validation du paiement de la licence a échoué </div>";	   
														}
												
												}
													
											?>
											
											
										
										<!-- Validation des paiements des abonnements -->
										<h3>Validation des paiements des abonnements</h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Ici vous avez la possibilité de valider le paiement des réabonnements.)</p>
										
											<br /><br />
												
											<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
												<p>
												<label class="form_col" for="paiementreabnmt">Paiement abonnement : </label>
												<select name="paiementreabnmt" id="paiementreabnmt" required>
													<option value=" "> </option>
												<?php
													$req = $bdd->query('SELECT * FROM licenceabnmt WHERE statut_paiement = "none" ORDER BY id_licenceabnmt DESC ');
													while($donnees = $req->fetch())
													{
														?>
														<option value="<?php echo $donnees["id_licenceabnmt"];?>">Abonnement (N°<?php echo $donnees["id_licenceabnmt"];?>) de <?php echo $donnees["produit_licenceabnmt	"];?> (<?php echo $donnees["pseudo_licenceabnmt"];?>)</option>
														<?php
													}
													$req->closeCursor();
												?>
												</select>
												</p>
												<p>
													<label class="form_col"></label>
													<input type="submit" name="pmtabnmt" value="Valider le paiement de l'abonnement" class="STA-button" />
												</p>
											</form><br /><br />	
										
										
										<!-- Fin validation des paiements des abonnements -->
										
											
											<br /><br />
												
											
											<h3>Validation des paiements des licences</h3>
											<hr />
											<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Ici vous avez la possibilité de valider le paiement des licences.)</p>
											<br />
											
											<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
													<p>
													<label class="form_col" for="paiementlicence">Paiement licence : </label>
													<select name="paiementlicence" id="paiementlicence" required>
														<option value=" "> </option>
												<?php
															$req = $bdd->query('SELECT id_licence,nomproduit,pseudouser FROM licence WHERE statutpaiement = "En attente de validation" ORDER BY id_licence DESC ');
															while($donnees = $req->fetch())
															{
																?>
																<option value="<?php echo $donnees["id_licence"];?>">Licence (<?php echo $donnees["id_licence"];?>) de <?php echo $donnees["nomproduit"];?> (<?php echo $donnees["pseudouser"];?>)</option>
																<?php
															}
															$req->closeCursor();
												?>
													</select>
													</p>
													<p>
														<label class="form_col"></label>
														<input type="submit" name="pmtlicence" value="Valider le paiement de la licence" class="STA-button" />
													</p>
												</form><br /><br />	
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