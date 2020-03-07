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
											<table style="margin-left:0px;width: 100%;margin-left:-120px;">
												<tr>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Identifiants</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Pseudos</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Suffixe</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Noms</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Prenoms</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Email</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Statuts</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Générer ID</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Infos</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Générer suffixes</strong></td>
													<td style="text-align:center;padding:10px;font-size:15px;"><strong>Changer statut</strong></td>
												</tr>
											<?php
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include_once("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
													
													$req = $bdd->query('SELECT id_users,numidentifiant,pseudo,motpass,suffixepw,nom,prenom,email,statutmembre FROM users');
													while($donnees = $req->fetch())
													{
													?>
													<tr>
													<td style="text-align:center;"><strong><?php echo $donnees["numidentifiant"];?></strong></td>
													<td style="text-align:center;"><strong><?php echo $donnees["pseudo"];?></strong></td>
													<td style="text-align:center;"><span style="color: rgb(250, 93, 15);"><strong><em><?php echo $donnees["suffixepw"];?></em></strong></span></td>
													<td style="text-align:center;"><strong><em><?php echo $donnees["nom"];?></em></strong></td>
													<td style="text-align:center;"><strong><em><?php echo $donnees["prenom"];?></em></strong></td>
													<td style="text-align:center;"><?php echo $donnees["email"];?></td>
													<td style="text-align:center;">
													<?php 
													if($donnees["statutmembre"] == "Membre Bronze")
													{
													?>
														<span style="color: rgb(128, 64, 64);"><strong><?php echo $donnees["statutmembre"];?></strong></span>
													<?php
													}
													elseif($donnees["statutmembre"] == "Membre Silver")
													{
													?>
														<span style="color: rgb(0, 128, 255);"><strong><?php echo $donnees["statutmembre"];?></strong></span>
													<?php
													}
													elseif($donnees["statutmembre"] == "Membre Gold")
													{
													?>
														<span style="color: rgb(255, 0, 0);"><strong><?php echo $donnees["statutmembre"];?></strong></span>
													<?php
													}
													elseif($donnees["statutmembre"] == "Membre Diamond")
													{
													?>
														<span style="color: rgb(107, 138, 148);"><strong><?php echo $donnees["statutmembre"];?></strong></span>
													<?php
													}
													else
													{
													?>
														<span style="color: rgb(50, 178, 50);"><strong><?php echo $donnees["statutmembre"];?></strong></span>
													<?php
													}
													?>
													</td>
													<td style="text-align:center;"><a href="generernumident.php?ididentifiant=<?php echo $donnees["id_users"];?>"><img src="images/identifiant-icone.png" /></a></td>
													<td style="text-align:center;"><a href="infosmembre.php?idinfos=<?php echo $donnees["id_users"];?>"><img src="images/icone-valider-membre.png" /></a></td>
													<td style="text-align:center;"><a href="generersuffixe.php?idsuffixe=<?php echo $donnees["id_users"];?>"><img src="images/icon-generator.png" /></a></td>
													<td style="text-align:center;"><a href="validermembre.php?idmemberval=<?php echo $donnees["id_users"];?>"><img src="images/icone-member-libertis.png" /></a></td>
													</tr>
													<?php
													}
													$req->closeCursor();
													
												}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
											?>
											</table><br /><br />
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