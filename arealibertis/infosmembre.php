<?php 
include("verif/verif.php");
$menu = "gestioninternaute.php";
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
    <title>Gestion des internautes | LIBERTIS</title>
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
									<h2 class="STA-postheader">Gestion de compte des utilisateurs</h2><hr />
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
										<!-- Debut contenu -->
											<?php
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include_once("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
													
													if(isset($_GET["idinfos"]))
													{
														$req = $bdd->query('SELECT * FROM users WHERE id_users = "'.$_GET["idinfos"].'"');
														while($donnees = $req->fetch())
														{
														?>
														<p><img src="../images/usermbrelibertis/<?php echo $donnees["photo"];?>" style="max-width:150px;border-radius:400px;" /></p>
														<p>Nom et prenoms : <strong><?php echo $donnees["nom"];?> <?php echo $donnees["prenom"];?></strong></p>
														<p>Date de naissance : <strong><?php echo $donnees["datenaissance"];?></strong></p>
														<p>Nationalité : <strong><?php echo $donnees["nationalite"];?></strong></p>
														<p>Contact Tél : <strong><?php echo $donnees["contacttel"];?></strong></p>
														<p>Profession : <strong><?php echo $donnees["Profession"];?></strong></p>
														<p>Type de pièce d'identité : <strong><?php echo $donnees["pieceidentite"];?></strong></p>
														<p>Numéro pièce d'identité : <strong><?php echo $donnees["numeropiece"];?></strong></p>
														<p>Date de délivrance pièce : <strong><?php echo $donnees["datedelivrance"];?></strong></p>
														<p>Autorité de délivrance : <strong><?php echo $donnees["autoritedelivrance"];?></strong></p>
														<p>Activité physique : <strong><?php echo $donnees["activitephysique"];?></strong></p>
														<p>Réligion : <strong><?php echo $donnees["religion"];?></strong></p>
														<p>Hobby : <strong><?php echo $donnees["hobby"];?></strong></p>
														<p>Objectif d'intégration : <strong><?php echo $donnees["objet"];?></strong></p>
														<br />
														<a href="gestioninternaute.php">RETOUR</a>
														<?php
														}
														$req->closeCursor();
													}
													
												}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
											?><br /><br />
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