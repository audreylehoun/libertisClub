<?php 
include("verif/verif.php");
$menu = "redigerarticles.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Espace admininstrateur LIBERTIS</title>
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
										<h3>Modification et suppression des services et produits</h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Remplissez les formulaires suivant pour modifier ou supprimer un service ou un produit.)</p><br /><br />
											<!-- Debut contenu -->
											<form action="savearticles.php" method="get">
														<p>
														<label class="form_col" for="modificationarticles">Modifier un service ou un produit : </label>
														<select name="modificationarticles" id="modificationarticles">
														<option value="">------ Choisissez le service ou le produit ------</option>
														<?php
														try
														{
															$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
															include("../config/config.php");
															$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
																				
															$req = $bdd->query('SELECT * FROM produitprestation ORDER BY id_produitprestation DESC ');
															while($donnees = $req->fetch())
															{
																?>
																<option value="<?php echo $donnees["id_produitprestation"];?>"><?php echo $donnees["libelle_produitprestation"];?></option>
																<?php
															}
															$req->closeCursor();
															?>
														</select>
														</p>
														<p>
															<label class="form_col"></label>
															<input type="submit" value="Modifier le service ou le produit" class="STA-button" />
														</p>
													</form>
													
													<br />
													<hr />
													<br />
								
													<form action="deletearticles.php" method="get">
														<p>
														<label class="form_col" for="suppressionarticles">Supprimer un service ou un produit : </label>
														<select name="suppressionarticles" id="suppressionarticles">
															<option value="">------ Choisissez le service ou le produit ------</option>
													<?php	
															$req = $bdd->query('SELECT * FROM produitprestation ORDER BY id_produitprestation DESC ');
															while($donnees = $req->fetch())
															{
																?>
																<option value="<?php echo $donnees["id_produitprestation"];?>"><?php echo $donnees["libelle_produitprestation"];?></option>
																<?php
															}
															$req->closeCursor();
													?>
														</select>
														</p>
														<p>
															<label class="form_col"></label>
															<input type="submit" value="Supprimer le service ou le produit" class="STA-button" />
														</p>
													</form>
													
													<br />
													<hr />
													<br /><br />
													
													<table>
													<tr>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Type de produits</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Libellés</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Prix</strong></th>
														<th style="text-align:center;padding:10px;font-size:15px;"><strong>Description</strong></th>
													</tr>
													<?php
															$req = $bdd->query('SELECT * FROM produitprestation ORDER BY id_produitprestation DESC ');
															while($donnees = $req->fetch())
															{
																?>
																<tr>
																<td style="text-align:center;"><?php echo $donnees["type_produitprestation"];?><br /></td>
																<td style="text-align:center;"><?php echo $donnees["libelle_produitprestation"];?><br /></td>
																<td style="text-align:center;font-style:italic;"><strong><?php echo $donnees["prix_produitprestation"];?></strong></td>
																<td style="text-align:center;"><?php echo $donnees["description_produitprestation"];?><br /></td>
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
													</table><br/><br /><br /><br />
											
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