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
													
													?>
													
												<table style="margin-left:0px;width: 100%;">
													<tr>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Pseudos</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Libellés</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Montants</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Date d'achat</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Valider livraison</strong></th>
													</tr>
												<?php
													$req = $bdd->query('SELECT id_panierachat, pseudo_panierachat, libelle_panierachat, prixunit_panierachat, qte_panierachat, montant_panierachat, statutachat_panierachat, statutlivrai_panierachat, DATE_FORMAT(dateachat_panierachat, "%d/%m/%Y") AS dateachat_panierachatfr FROM panierachat WHERE statutlivrai_panierachat = "En cours" AND statutachat_panierachat = "Paye" ORDER BY pseudo_panierachat ASC ');
													while($donnees = $req->fetch())
													{	
														$libel = "<span style='font-size:15px;color: red;'><strong>".$donnees["qte_panierachat"]."</strong></span> ".$donnees["libelle_panierachat"]." de <strong>".$donnees["prixunit_panierachat"]."</strong> F ";	
														?>
															<tr>
																<td style="padding-top:40px;text-align:center;font-size:15px;"><strong><?php echo $donnees["pseudo_panierachat"];?></strong></td>
																<td style="padding-top:40px;text-align:center;"><strong><em><?php echo $libel;?></em></strong></td>
																<td style="padding-top:40px;text-align:center;"><strong><?php echo $donnees["montant_panierachat"];?></strong></td>
																<td style="padding-top:40px;text-align:center;"><em><?php echo $donnees["dateachat_panierachatfr"];?></em></td>
																<td style="text-align:center;">
																	<form method="post" action="validercommande.php"><br />
																		<input type="text" style="width:92px;" name="codetransaction" placeholder="Code" /><br /><br />
																		<input type="hidden" name="idpanier" value="<?php echo $donnees["id_panierachat"];?>" />
																		<input type="hidden" name="pseudocahe" value="<?php echo $donnees["pseudo_panierachat"];?>" />
																		<input type="hidden" name="produitcahe" value="<?php echo $donnees["libelle_panierachat"];?>" />
																		<input type="submit" name="comdevalider" value="Valider" class="STA-button" />
																	</form>
																</td>
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