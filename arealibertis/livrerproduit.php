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
    <title>Détails solde des internautes LIBERTIS</title>
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
										<h3>Détails des soldes des membres</h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Selectionnez un membre pour voir les détails de son solde.)</p>
											<!-- Debut contenu -->
											<?php 
											try
											{
												$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
												include("../config/config.php");
												$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
												if(isset($_POST["livraison"]))
												{
													$req = $bdd->query('SELECT codetransaction FROM users WHERE pseudo = "'.$_POST["pseudolivraison"].'" ');
													$donnees = $req->fetch();
													
													$codetransact = $donnees["codetransaction"];
													
													$req->closeCursor();
													
													if($codetransact == $_POST["codetransaction"])
													{
														$req = $bdd->prepare('UPDATE panierachat SET statutlivrai_panierachat = :statutlivraipanierachat, datelivr_panierachat = NOW() WHERE id_panierachat = :idpanierachat');
														$req->execute(array(
														'statutlivraipanierachat' => "Produit livré",
														'idpanierachat' => $_POST["idlivraison"]
														));
														
														if($req)
														{
														?>
															<div class='STA-succes'> Produit/prestation livré(e), veuillez réessayer. <br />
															<a href="livraisoncommande.php"> RETOUR </a>
															</div><br /><br />
														<?php	
														}
														else
														{
														?>
															<div class='STA-echec'> Echec de la livraison, veuillez réessayer. <br />
															<a href="livraisoncommande.php"> RETOUR </a>
															</div><br /><br />
														<?php	   
														}
														
														$req->closeCursor();
													}
													else
													{
													?>
														<div class='STA-echec'> Mauvais code de transaction, veuillez réessayer. <br />
															<a href="livraisoncommande.php"> RETOUR </a></div><br /><br />
													<?php
													}
												}
												
												if(isset($_GET["idprodlivre"]))
												{
												?>
												<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
												
													<label class="form_col" for="codetransaction">Code de transaction membres : </label>
													<input type="password" name="codetransaction" id="codetransaction" />
													<br /><br />
													
													<input type="hidden" name="idlivraison" value="<?php echo $_GET["idprodlivre"];?>" />
													
													<input type="hidden" name="pseudolivraison" value="<?php echo $_GET["nomprodlivre"];?>" />
													
													<label class="form_col"></label>
													<input type="submit" name="livraison" value="Valider livraison" class="STA-button" /><br /><br />
												</form>
												<?php
												}
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