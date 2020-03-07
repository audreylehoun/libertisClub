<?php 
include("verif/verif.php");
$menu = "brouillons.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Messages brouillons LIBERTIS</title>
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
			  width: 130px;
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
									<h2 class="STA-postheader">Messages brouillons</h2>
													
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
									
									
								?>
										<br />
													
										<table style="width: 100%; font-size:13px;">
											<tr>
												<th style="text-align:center;padding:10px;font-size:15px;width:22%;">Titres messages</th>
												<th style="text-align:center;padding:10px;font-size:15px;width:10%;">Destinataires </th>
												<th style="text-align:center;padding:10px;font-size:15px;width:50%;">Contenus </th>
												<th style="text-align:center;padding:10px;font-size:15px;width:10%;">Dates</th>
												<th style="text-align:center;padding:10px;font-size:15px;width:7%;">Suppression</th>
											</tr>
											<?php
												$req = $bdd->query('SELECT id_brouillons,titre_brouillons,destinataires_brouillons,contenu_brouillons,DATE_FORMAT(date_brouillons, "%d/%m/%Y") AS date_brouillonsfr FROM brouillons ORDER BY id_brouillons DESC ');
												while($donnees = $req->fetch())
												{
											?>
														<tr>
															<td style="font-size:15px;padding-left: 15px;width:22%;"><?php echo $donnees["titre_brouillons"]; ?></td>
															<td style="text-align:center;width:10%;"><?php echo $donnees["destinataires_brouillons"]; ?></td>
															<td style="text-align:center;width:50%;"><?php echo $donnees["contenu_brouillons"]; ?></td>
															<td style="font-style:italic;text-align:center;line-height: 45px;width:10%;"><?php echo $donnees["date_brouillonsfr"]; ?></td>
															<td style="text-align:center;width:7%;"><a href="deletebrouillon.php?iddelete=<?php echo $donnees["id_brouillons"];?>" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
														</tr>
											<?php 
												}
												
												$req->closeCursor();
													
											?>
										</table>
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