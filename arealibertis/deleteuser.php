<?php 
include("verif/verif.php");
$menu = "adminusers.php";

//verification groupe
if($_SESSION['groupe']!='Super administrateur')
{
	       header("Location:deleteuser.php");
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
    <title>Suppression des admininstrateurs | LIBERTIS</title>
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
									<h2 class="STA-postheader">Administration du site www.stagroupe.com</h2>
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
											<!-- Debut contenu -->
											<?php
											if(isset($_GET['suppressionuser']))
											{
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
														
													$req = $bdd->query('DELETE FROM admin WHERE idadmin ="'.$_GET['suppressionuser'].'" ');
													if($req)
													{
														$req2 = $bdd->query('SELECT nomadmin FROM admin WHERE idadmin ="'.$_GET['suppressionuser'].'" ');
														while($donnees = $req2->fetch())
														{
															$nomadmin = $donnees["nomadmin"];
														}
														$req2->closeCursor();
														
														$sms = "Suppression de l'administrateur : ".$nomadmin.".";
														
														$receiver = "admin@clublibertis.com";
														$sujet =  "Suppression d'un administrateur";
														$entete = 'MIME-Version: 1.0' . "\r\n";
														$entete .= 'Content-type: text/html; charset=iso-8859-
														1' . "\r\n";
														$entete .= 'from : admin@clublibertis.com'. "\r\n";
														
														mail($receiver, $sujet, $sms, $entete);
														
														$activite = "Suppression de l'administrateur : ".$nomadmin.".";
														
														$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
														$req3->execute(array($_SESSION["user_name"], $activite));
														
														$req3->closeCursor();	
											
													?>
															<div class="STA-succes">Compte de l'administrateur bien supprimé ...</div>
													<?php
													}
													else
													{
													?>
															<div class="STA-echec">Echec de la suppression du compte ...</div>
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
											
												<p style="font-size:18px;"><a href="adminusers.php">Retournez sur la gestion des administrateurs</a></p>
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