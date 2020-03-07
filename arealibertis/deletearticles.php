<?php 
include("verif/verif.php");
$menu = "deletearticles.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Suppression des produits ou des prestations | LIBERTIS</title>
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
											<!-- Debut contenu -->
											<?php
											if(isset($_GET['suppressionarticles']))
											{
											    try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
													
													
													$req = $bdd->query('SELECT libelle_produitprestation,prix_produitprestation,description_produitprestation FROM produitprestation WHERE id_produitprestation ="'.$_GET['suppressionarticles'].'" ');
													
													$donnees = $req->fetch();
													
													$libelle = $donnees["libelle_produitprestation"];
													$prixprdtsvce = $donnees["prix_produitprestation"];
													$description = $donnees["description_produitprestation"];
														
													$req->closeCursor();
					
													$req = $bdd->query('DELETE FROM produitprestation WHERE id_produitprestation ="'.$_GET['suppressionarticles'].'" ');
													if($req)
													{
														
														$sms = "Suppression du produit : <strong>".$libelle."</strong> <br /><br />";
														$sms .= "Le prix du produit est : <strong>".$prixprdtsvce."<strong> <br /><br />";
														$sms .= "Description : ".$description."<br /><br />";
														
														$receiver = "admin@clublibertis.com";
														$sujet = "Suppression du produit : ".$libelle ;
														$entete = 'MIME-Version: 1.0' . "\r\n";
														$entete .= 'Content-type: text/html; charset=iso-8859-
														1' . "\r\n";
														$entete .= 'De : admin@clublibertis.com'. "\r\n";
														
														mail($receiver, $sujet, $sms, $entete);
														
														
														$activite = "Suppression du produit : ".$libelle ;
														$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
														$req2->execute(array($_SESSION["user_name"], $activite));
														
														$req2->closeCursor();
																	
													?>
														<div class="STA-succes">Suppression réussie ...</div>
													<?php
													}
													else
													{
													?>
														<div class="STA-echec">Echec de la suppression ...</div>
													<?php
													}	
													$req->closeCursor();
												}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}		    
											}
											?>
												<p style="font-size:18px;"><a href="gestionarticles.php">Retournez sur la gestion des produits ou prestations</a></p>
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