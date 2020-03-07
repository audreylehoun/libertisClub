<?php 
include("verif/verif.php");
$menu = "detailsolde.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Livraison des commandes</title>
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
  margin-right: 15px;
  padding: 3px 0px;
  width: 200px;
  min-height: 1px;
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
										<h3>Livraison des commandes</h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Valider la livraison des commandes en attente)</p>
											<!-- Debut contenu -->
											<?php 
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
													
													if(isset($_POST["comdevalider"]))
													{
														$req = $bdd->query('SELECT pseudo,codetransaction FROM users WHERE pseudo = "'.$_POST["pseudocahe"].'" ');
														while($donnees = $req->fetch())
														{
															$pseudotransact = $donnees["pseudo"];
															$codetransact = $donnees["codetransaction"];
														}
														$req->closeCursor();
														
														if($_POST["codetransaction"] == $codetransact)
														{
															$req = $bdd->prepare('UPDATE panierachat SET statutlivrai_panierachat = :statutlivraipanierachat WHERE id_panierachat = :idpanierachat');
															$req->execute(array(
															'statutlivraipanierachat' => "Produit livré",
															'idpanierachat' => $_POST["idpanier"]
															));
															
															if($req)
															{
														
																$sms = "Validation de la commande de : <strong>".$_POST["produitcahe"]."</strong> de : ".$_POST["pseudocahe"] ;
																
																$receiver = "admin@clublibertis.com";
																$sujet = "Validation de la commande";
																$entete = 'MIME-Version: 1.0' . "\r\n";
																$entete .= 'Content-type: text/html; charset=iso-8859-
																1' . "\r\n";
																$entete .= 'from : admin@clublibertis.com'. "\r\n";
																
																mail($receiver, $sujet, $sms, $entete);
																
																
																$activite = "Validation de la commande de : <strong>".$_POST["produitcahe"]."</strong> de : ".$_POST["pseudocahe"] ;
																$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																$req2->execute(array($_SESSION["user_name"], $activite));
																
																$req2->closeCursor();
																			
																?>
																	<div class='STA-succes'> La livraison de la commande a été un succès .</div><br /><br />
																<?php
															}
															else
															{
															?>
																<div class='STA-echec'>Echec de la livraison veuillez reprendre SVP.</div><br /><br />
															<?php
															}
															$req->closeCursor();
															
														}
														else
														{
														?>
															<div class='STA-echec'>Mauvaise code de transaction, veuillez reprendre SVP.</div><br /><br />
														<?php
														}
													}
												}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
												?>
												<p style="font-size:25px;"><a href="livraisoncommande.php" style="text-decoration:none;">Retour sur les commandes en attentes</a></p>
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