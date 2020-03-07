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
    <title>Ajout des produits ou des prestations LIBERTIS</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all">
     <link rel="stylesheet" href="style/style.moi1.css" media="all">

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
										<h3>Enrégistrement des produits et prestations</h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Remplissez les formulaires suivants pour enrégistrer les produits et les prestations.)</p>
											<!-- Debut contenu -->
											<?php                                                                                                                                                                                                                                                                                                          
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
													if(isset($_POST["saveactu"]))
													{	
														if($_FILES["fich"]["name"] != "")
														{
															$nom = $_FILES["fich"]["name"];
															//Enregistrement et renommage du fichier
															$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
															//1. strrchr renvoie l'extension avec le point (« . »).
															//2. substr(chaine,1) ignore le premier caractère de chaine.
															//3. strtolower met l'extension en minuscules.
															$extension_upload = strtolower( substr(
															strrchr($_FILES["fich"]["name"], '.') ,1) );
															if ( in_array($extension_upload,$extensions_valides) )
															{
																$result=copy( $_FILES["fich"]["tmp_name"], '../images/imgesprdtsves/'.$nom);	
																if($result==TRUE)
																{
																	$req = $bdd->prepare('INSERT INTO produitprestation (libelle_produitprestation, description_produitprestation, prix_produitprestation, type_produitprestation, image_produitprestation,categorie_produit, 	contenance_produit ,taux_alcool_produit,nombre_personne_produit) VALUES(?, ?, ?, ?, ?,?,?,?,?)');
																	$req->execute(array($_POST["libelle"], $_POST["description"], $_POST["prixprdtsvce"], $nom, $_POST["typeproduitprestation"], $_POST["categorieproduitprestation"], $_POST["contenance"], $_POST["tauxalcool"], 1));
													
																	if($req)
																	{	
																		$sms = "Enrégistrement du produit : <strong>".$_POST["libelle"]."</strong> <br /><br />";
																		$sms .= "Le prix du produit est : <strong>".$_POST["prixprdtsvce"]."<strong> <br /><br />";
																		$sms .= "Description : ".$_POST["description"]."<br /><br />";
																		
																		$receiver = "admin@clublibertis.com";
																		$sujet = "Enrégistrement du nouveau produit : ".$_POST["libelle"] ;
																		$entete = 'MIME-Version: 1.0' . "\r\n";
																		$entete .= 'Content-type: text/html; charset=iso-8859-
																		1' . "\r\n";
																		$entete .= 'De : admin@clublibertis.com'. "\r\n";
																		
																		mail($receiver, $sujet, $sms, $entete);
																		
																		
																		$activite = "Enrégistrement du nouveau produit : ".$_POST["libelle"] ;
																		$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																		$req2->execute(array($_SESSION["user_name"], $activite));
																		
																		$req2->closeCursor();
																	
																		?>
																		<div class="STA-succes"><?php echo $_POST["typeproduitprestation"];?> bien enrégistré(e)</div>
																		   <?php
																	   
																	}
																	else
																	{
																	   echo "<div class='STA-echec'>L'enrégistrement a échoué </div>";	   
																	}
																	$req->closeCursor();
																}
																 else
																{
																	echo "<div class='STA-echec'>Désolé, l'image n'a été insérée</div>";
																}
															}
															else
															{
																echo "<div class='STA-echec'>L'extension de l'image n'est pas correcte. Choisissez les images de type jpg, jpeg, png ou gif</div>";
															}
														}
														else
														{
															$req = $bdd->prepare('INSERT INTO produitprestation (libelle_produitprestation, description_produitprestation, prix_produitprestation, type_produitprestation,categorie_produit, 	contenance_produit ,taux_alcool_produit,nombre_personne_produit)) VALUES(?, ?, ?, ?,?,?,?,?)');
															$req->execute(array($_POST["libelle"], $_POST["description"], $_POST["prixprdtsvce"], $_POST["typeproduitprestation"],  $_POST["categorieproduitprestation"], $_POST["contenance"], $_POST["tauxalcool"], 1));
											
															if($req)
															{	
																$sms = "Enrégistrement du produit : <strong>".$_POST["libelle"]."</strong> <br /><br />";
																$sms .= "Le prix du produit est : <strong>".$_POST["prixprdtsvce"]."<strong> <br /><br />";
																$sms .= "Description : ".$_POST["description"]."<br /><br />";
																
																$receiver = "admin@clublibertis.com";
																$sujet = "Enrégistrement du nouveau produit : ".$_POST["libelle"] ;
																$entete = 'MIME-Version: 1.0' . "\r\n";
																$entete .= 'Content-type: text/html; charset=iso-8859-
																1' . "\r\n";
																$entete .= 'De : admin@clublibertis.com'. "\r\n";
																
																mail($receiver, $sujet, $sms, $entete);
																
																
																$activite = "Enrégistrement du nouveau produit : ".$_POST["libelle"] ;
																$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																$req2->execute(array($_SESSION["user_name"], $activite));
																
																$req2->closeCursor();
																?>
																<div class="STA-succes"><?php echo $_POST["typeproduitprestation"];?> bien enrégistré(e)</div>
																   <?php
															   
															}
															else
															{
															   echo "<div class='STA-echec'>L'enrégistrement a échoué </div>";	   
															}
															$req->closeCursor();
														}
													}
													
												}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
											?>
												<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
													
                                                  <div class="panel_1">
                                                     
                                                           <section>
                                                    <div class="panel_typeproduit">
                                                    <div>
                                                        <label style="font-weight:bold;" for="typeproduitprestation" class="form_col">Type de produits : </label>
                                                        </div>
													<div><select name="typeproduitprestation" id="typeproduitprestation" required>
														<option value=" ">------ Aucun ------</option>
														<option value="Prestation">Prestation</option>
														<option value="Produit">Produit</option>
													</select></div>
                                                   
                                                    
                                                        </div>
													
                                                               
                                                               
                                                               
                                                               
                                                               
                                                               
                                                    <!-- 
													<br />
													-->
                                                        <label style="font-weight:bold;" for="categorieproduitprestation" class="form_col">Categorie du produit : </label>
                                                        <div class="panel_libelléproduit">
                                                            <div><select name="categorieproduitprestation" id="categorieproduitprestation" required>
														<option value=" ">------ Aucune ------</option>
                                                        <option value="Bière">Bière</option>
                                                        <option value="Sucrerie">Sucrerie</option>
                                                        <option value="Liqueur">Liqueur</option>
														<option value="Repas">Repas</option>
														<option value="Friandises">Friandises</option>
                                                        <option value="Fruit">Fruit</option>
                                                          <option value="Vin">Vin</option>
                                                          <option value="Autres">Autres</option>
                                                        
													</select></div>          
                                                               
                                                           
                                                            
                                                            
                                                            
                                                            
                                                    <div>
														<label style="font-weight:bold;" for="libelle" class="form_col">Libellés Produits/Services : </label></div>
                                                            
														<div><input type="text" id="libelle" name="libelle" size="58" required /></div>
                                                           
                                                      
                                                      <div>
														<label style="font-weight:bold;" for="contenance" class="form_col">Contenance : </label></div>
                                                            
														<div><input type="text" id="contenance" name="contenance" size="58" /></div>
                                                            
                                                     <p><br/></p>
                                                     <p><br/></p>
                                                     <p><br/></p>
                                                     <p><br/></p>
                                                    
                                                     <p><br/></p>
                                                     <p><br/></p>
                                                    
                                                     <div>
														<label style="font-weight:bold;" for="tauxalcool" class="form_col">Taux alcool (En %) : </label></div>
                                                           
														<div><input type="text" id="tauxalcool" name="tauxalcool" size="58" /></div>
                                                            </div>
                                                
                                                      
                                                     </section>
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      </div>
													
													<p>
														<label style="font-weight:bold;" for="description" class="form_col">Description : </label>
														<textarea name="description" id="description" rows="5" cols="60" required ></textarea>
													</p>
													<p>
														<label style="font-weight:bold;" for="prixprdtsvce" class="form_col">Prix (En F CFA): </label>
														<input type="number" min="500" step="100" id="prixprdtsvce" name="prixprdtsvce" size="58" required />
													</p>
													<p>
														<label style="font-weight:bold;" class="form_col">Vignettes : </label>
														<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
														<input type="file" name="fich" size="50" />
													</p>
														<label class="form_col"></label>
														<input type="submit" name="saveactu" value="Enregistrer" class="STA-button" /><br /><br />
												</form>
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