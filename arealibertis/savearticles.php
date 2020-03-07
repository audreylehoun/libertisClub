<?php 
include("verif/verif.php");
$menu = "savearticles.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Modification des produits ou des prestations | LIBERTIS</title>
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
										<h3>Modification des produits ou des prestations</h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Remplissez les formulaires suivant pour modifier un produit ou une prestation.)</p>
											<!-- Debut contenu -->
												<?php 
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														


													if(isset($_POST["modifproduit"]))
													{	
														$nom = "";
														
														if($_FILES["fichier"]["name"] != "")
														{
															$nom = $_FILES["fichier"]["name"];
															//Enregistrement et renommage du fichier
															$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
															//1. strrchr renvoie l'extension avec le point (« . »).
															//2. substr(chaine,1) ignore le premier caractère de chaine.
															//3. strtolower met l'extension en minuscules.
															$extension_upload = strtolower( substr(
															strrchr($_FILES["fichier"]["name"], '.') ,1) );
															if ( in_array($extension_upload,$extensions_valides) )
															{
																$result=copy( $_FILES["fichier"]["tmp_name"], '../images/imgesprdtsves/'.$nom);
															}
															
															$req = $bdd->prepare('UPDATE produitprestation SET libelle_produitprestation = :libelleproduitprestation, description_produitprestation = :descriptionproduitprestation, prix_produitprestation = :prixproduitprestation, type_produitprestation = :typeproduitprestation, image_produitprestation = :imageproduitprestation WHERE id_produitprestation = :idproduitprestation');
															$req->execute(array(
															'idproduitprestation' => $_SESSION["id_produitprestation"],
															'libelleproduitprestation' => $_POST["libelle"],
															'descriptionproduitprestation' => $_POST["description"],
															'prixproduitprestation' => $_POST["prixprdtsvce"],
															'typeproduitprestation' => $_POST["typeproduitprestation"],
															'imageproduitprestation' => $_FILES["fichier"]["name"]));
														
															if($req)
															{	
																$sms = "Modification du produit : <strong>".$_POST["libelle"]."</strong> <br /><br />";
																$sms .= "Le prix du produit est : <strong>".$_POST["prixprdtsvce"]."<strong> <br /><br />";
																$sms .= "Description : ".$_POST["description"]."<br /><br />";
																
																$receiver = "admin@clublibertis.com";
																$sujet = "Modification du produit : ".$_POST["libelle"] ;
																$entete = 'MIME-Version: 1.0' . "\r\n";
																$entete .= 'Content-type: text/html; charset=iso-8859-
																1' . "\r\n";
																$entete .= 'De : admin@clublibertis.com'. "\r\n";
																
																mail($receiver, $sujet, $sms, $entete);
																
																
																$activite = "Modification du produit : ".$_POST["libelle"] ;
																$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																$req2->execute(array($_SESSION["user_name"], $activite));
																
																$req2->closeCursor();
																	
																echo "<div class='STA-succes'>".$_POST["typeproduitprestation"]." bien modifié(e) </div>";
															   
															}
															else
															{
																echo "<div class='STA-echec'>La modification a échoué </div>";	   
															}
															$req->closeCursor();
														
														}
														else
														{
															$req = $bdd->prepare('UPDATE produitprestation SET libelle_produitprestation = :libelleproduitprestation, description_produitprestation = :descriptionproduitprestation, prix_produitprestation = :prixproduitprestation, type_produitprestation = :typeproduitprestation WHERE id_produitprestation = :idproduitprestation');
															$req->execute(array(
															'idproduitprestation' => $_SESSION["id_produitprestation"],
															'libelleproduitprestation' => $_POST["libelle"],
															'descriptionproduitprestation' => $_POST["description"],
															'prixproduitprestation' => $_POST["prixprdtsvce"],
															'typeproduitprestation' => $_POST["typeproduitprestation"]));
														
															if($req)
															{
																$sms = "Modification du produit : <strong>".$_POST["libelle"]."</strong> <br /><br />";
																$sms .= "Le prix du produit est : <strong>".$_POST["prixprdtsvce"]."<strong> <br /><br />";
																$sms .= "Description : ".$_POST["description"]."<br /><br />";
																
																$receiver = "admin@clublibertis.com";
																$sujet = "Modification du nouveau produit : ".$_POST["libelle"] ;
																$entete = 'MIME-Version: 1.0' . "\r\n";
																$entete .= 'Content-type: text/html; charset=iso-8859-
																1' . "\r\n";
																$entete .= 'De : admin@clublibertis.com'. "\r\n";
																
																mail($receiver, $sujet, $sms, $entete);
																
																
																$activite = "Modification du nouveau produit : ".$_POST["libelle"] ;
																$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																$req2->execute(array($_SESSION["user_name"], $activite));
																
																$req2->closeCursor();
																	
																echo "<div class='STA-succes'>".$_POST["typeproduitprestation"]." bien modifié(e) </div>";
															}
															else
															{
																echo "<div class='STA-echec'>La modification a échoué </div>";	   
															}
															$req->closeCursor();
														}
													}
												?>

												<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
												<?php
													if(isset($_GET['modificationarticles']))
													{
														$req = $bdd->query('SELECT * FROM produitprestation WHERE id_produitprestation = "'.$_GET['modificationarticles'].'"');
														while($donnees = $req->fetch())
														{
															$_SESSION["id_produitprestation"] = $donnees["id_produitprestation"];
															?>
															<label style="font-weight:bold;" for="typeproduitprestation" class="form_col">Type de produits : </label>
															<select name="typeproduitprestation" id="typeproduitprestation" required>
																<option value=" ">------ Aucun ------</option>
																<option value="Prestation" <?php if($donnees["type_produitprestation"] == "Prestation") echo "selected";?>>Prestation</option>
																<option value="Produit" <?php if($donnees["type_produitprestation"] == "Produit") echo "selected";?>>Produit</option>
															</select>
															<br />
															<p>
																<label style="font-weight:bold;" for="libelle" class="form_col">Libellés Produits/Services : </label>
																<input type="text" id="libelle" name="libelle" value="<?php echo $donnees["libelle_produitprestation"];?>" size="58" required />
															</p>
															<p>
																<label style="font-weight:bold;" for="description" class="form_col">Description : </label>
																<textarea name="description" id="description" rows="5" cols="60" required ><?php echo $donnees["description_produitprestation"];?></textarea>
															</p>
															<p>
																<label style="font-weight:bold;" for="prixprdtsvce" class="form_col">Prix (En F CFA): </label>
																<input type="number" min="500" step="100" value="<?php echo $donnees["prix_produitprestation"];?>" id="prixprdtsvce" name="prixprdtsvce" size="58" required />
															</p>
															<p>
															<label class="form_col">Vignettes : </label>
															  <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
															  <input type="file" name="fichier" />
															</p>
															<p>
															<label class="form_col"></label>
															<input  style="font-weight:bold;" type="submit" name="modifproduit"  value="Modifier" class="STA-button" />
															</p>
															<br />
														<?php
														}
																	 
													}
												}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
												?>
												</form>
												<p style="font-size:18px;"><a href="gestionarticles.php">Retournez sur la gestion des produits ou des prestations</a></p>
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