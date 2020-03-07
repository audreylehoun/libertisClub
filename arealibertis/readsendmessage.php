<?php 
include("verif/verif.php");
$menu = "livraisonscanner.php";

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
    <title>Validez la livraison | LIBERTIS</title>
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
											<!-- Debut contenu -->
												<?php 
													
													try
													{
														$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
														include_once("../config/config.php");
														$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
													
												?>
											
												<table>
													<tr>
														<td style="width:100%;padding-left:80px;border:none;">
																<?php 
																if(isset($_GET["idmessage"]))
																{
																	$req = $bdd->query('SELECT idmessages,titremessage,contenumessage FROM messages WHERE idmessages = "'.$_GET["idmessage"].'" ');
																	$donnees = $req->fetch();
																	
																	$titlemessage = $donnees['titremessage'];
																	
																	$contentmessages = $donnees['contenumessage'];
																	
																	$req->closeCursor();
																}
																?>
																<table><tr><td style="border:none;">Titre : <br /><br /></td><td style="border:none;font-size:15px;"><?php echo $titlemessage; ?><br /><br /></td></tr>
																			
																	<tr><td style="border:none;">Message : </td><td style="border:none;font-size:14px;"><blockquote><?php echo $contentmessages; ?></blockquote></td></tr>
																</table>
														</td>
													</tr>
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