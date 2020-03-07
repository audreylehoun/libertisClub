<?php 
include("verif/verif.php");
$menu = "fichierssoumis.php";
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
			  margin-right: 25px;
			  padding: 3px 0px;
			  width: 250px;
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
									<h2 class="STA-postheader">Fichiers des membres soumis</h2>
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
										<!-- Debut contenu -->
											<br />
											<?php 
												
											try
											{
												$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
												include_once("../config/config.php");
												$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
												
											?>
											
											
											<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
												<label style="font-weight:bold;" class="form_col" for="destinataire">Choisir le membre ou une catégorie : </label>
												<select name="destinataire" id="destinataire" required>
													<option value="">------------ Choisir le membre ou une catégorie ------------</option>
													
														<option value=""> </option>
														
													<optgroup label="Selectionner une catégorie de membre">
														<option value="Membre Non certifie">Membre Non certifié</option>
														<option value="Membre Bronze">Membre Bronze</option>
														<option value="Membre Silver">Membre Silver</option>
														<option value="Membre Gold">Membre Gold</option>
														<option value="Membre Diamond">Membre Diamond</option>
													</optgroup>
													
														<option value=""> </option>
														
													<optgroup label="Selectionner Tous les membres">
														<option value="Tous">Tous les membres</option>
													</optgroup>
													
														<option value=""> </option>
													<optgroup label="Selectionner le pseudo d'un membre">
															<?php
															
															$req = $bdd->query('SELECT pseudo,nom,prenom FROM users ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
													</optgroup>
													
														<option value=""> </option>
														
												</select>
												<br /><br />

												<label class="form_col"> </label>
												<input type="submit" name="membreselect" value="Voir les fichiers soumis" class="STA-button" />
											</form><br /><br />
											<?php
															
												if(isset($_POST["membreselect"]))
												{
													if($_POST["destinataire"] != "")
													{
														?>
														<table style="text-align:center;width: 100%;">
															<tr>
																<td><strong>Pseudo</strong></td>
																<td><strong>Pièce d'identité</strong></td>
																<td><strong>Test VIH</strong></td>
															</tr>
														<?php
														if($_POST["destinataire"] != "Membre Bronze" AND $_POST["destinataire"] != "Membre Silver" AND $_POST["destinataire"] != "Membre Gold" AND $_POST["destinataire"] != "Membre Diamond" AND $_POST["destinataire"] != "Membre Non certifie" AND $_POST["destinataire"] != "Tous" AND $_POST["destinataire"] != "")
														{
															$req = $bdd->query('SELECT pseudo,statutmembre,filepiecedidentite,filetestvih FROM users WHERE pseudo = "'.$_POST["destinataire"].'" AND filepiecedidentite != "" AND filetestvih != "" ');
															while($donnees = $req->fetch())
															{		
															?>
																<tr>
																	<td><?php echo $donnees["pseudo"];?></td>
																	<td><a href="../images/filepieceidentite/<?php echo $donnees["filepiecedidentite"];?>" target="_blank">Ouvrir pièce didentité</a></td>
																	<td><a href="../images/filetestvih/<?php echo $donnees["filetestvih"];?>" target="_blank">Voir Test VIH</a></td>
																</tr>
															<?php
															}
															$req->closeCursor();
															
														}
														elseif($_POST["destinataire"] == "Membre Bronze")
														{
															$req = $bdd->query('SELECT pseudo,statutmembre,filepiecedidentite,filetestvih FROM users WHERE statutmembre = "Membre Bronze" AND filepiecedidentite != "" AND filetestvih != "" ');
															while($donnees = $req->fetch())
															{		
															?>
																<tr>
																	<td><?php echo $donnees["pseudo"];?></td>
																	<td><a href="../images/filepieceidentite/<?php echo $donnees["filepiecedidentite"];?>" target="_blank">Ouvrir pièce didentité</a></td>
																	<td><a href="../images/filetestvih/<?php echo $donnees["filetestvih"];?>" target="_blank">Voir Test VIH</a></td>
																</tr>
															<?php
															}
															$req->closeCursor();
															
														}
														elseif($_POST["destinataire"] == "Membre Silver")
														{
															$req = $bdd->query('SELECT pseudo,statutmembre,filepiecedidentite,filetestvih FROM users WHERE statutmembre = "Membre Silver" AND filepiecedidentite != "" AND filetestvih != "" ');
															while($donnees = $req->fetch())
															{		
															?>
																<tr>
																	<td><?php echo $donnees["pseudo"];?></td>
																	<td><a href="../images/filepieceidentite/<?php echo $donnees["filepiecedidentite"];?>" target="_blank">Ouvrir pièce didentité</a></td>
																	<td><a href="../images/filetestvih/<?php echo $donnees["filetestvih"];?>" target="_blank">Voir Test VIH</a></td>
																</tr>
															<?php
															}
															$req->closeCursor();
															
														}
														elseif($_POST["destinataire"] == "Membre Gold")
														{
															$req = $bdd->query('SELECT pseudo,statutmembre,filepiecedidentite,filetestvih FROM users WHERE statutmembre = "Membre Gold" AND filepiecedidentite != "" AND filetestvih != "" ');
															while($donnees = $req->fetch())
															{		
															?>
																<tr>
																	<td><?php echo $donnees["pseudo"];?></td>
																	<td><a href="../images/filepieceidentite/<?php echo $donnees["filepiecedidentite"];?>" target="_blank">Ouvrir pièce didentité</a></td>
																	<td><a href="../images/filetestvih/<?php echo $donnees["filetestvih"];?>" target="_blank">Voir Test VIH</a></td>
																</tr>
															<?php
															}
															$req->closeCursor();
																
														}
														elseif($_POST["destinataire"] == "Membre Diamond")
														{
															$req = $bdd->query('SELECT pseudo,statutmembre,filepiecedidentite,filetestvih FROM users WHERE statutmembre = "Membre Diamond" AND filepiecedidentite != "" AND filetestvih != "" ');
															while($donnees = $req->fetch())
															{		
															?>
																<tr>
																	<td><?php echo $donnees["pseudo"];?></td>
																	<td><a href="../images/filepieceidentite/<?php echo $donnees["filepiecedidentite"];?>" target="_blank">Ouvrir pièce didentité</a></td>
																	<td><a href="../images/filetestvih/<?php echo $donnees["filetestvih"];?>" target="_blank">Voir Test VIH</a></td>
																</tr>
															<?php
															}
															$req->closeCursor();
																
														}
														elseif($_POST["destinataire"] == "Membre Non certifie")
														{
															$req = $bdd->query('SELECT pseudo,statutmembre,filepiecedidentite,filetestvih FROM users WHERE statutmembre = "Membre Non certifie" AND filepiecedidentite != "" AND filetestvih != "" ');
															while($donnees = $req->fetch())
															{		
															?>
																<tr>
																	<td><?php echo $donnees["pseudo"];?></td>
																	<td><a href="../images/filepieceidentite/<?php echo $donnees["filepiecedidentite"];?>" target="_blank">Ouvrir pièce didentité</a></td>
																	<td><a href="../images/filetestvih/<?php echo $donnees["filetestvih"];?>" target="_blank">Voir Test VIH</a></td>
																</tr>
															<?php
															}
															$req->closeCursor();
																
														}
														elseif($_POST["destinataire"] == "Tous")
														{
															$req = $bdd->query('SELECT pseudo,statutmembre,filepiecedidentite,filetestvih FROM users WHERE filepiecedidentite != "" AND filetestvih != "" ');
															while($donnees = $req->fetch())
															{		
															?>
																<tr>
																	<td><?php echo $donnees["pseudo"];?></td>
																	<td><a href="../images/filepieceidentite/<?php echo $donnees["filepiecedidentite"];?>" target="_blank">Ouvrir pièce didentité</a></td>
																	<td><a href="../images/filetestvih/<?php echo $donnees["filetestvih"];?>" target="_blank">Voir Test VIH</a></td>
																</tr>
															<?php
															}
															$req->closeCursor();
														}
														else
														{
															?>
																<div class='STA-echec'>Mauvaise sélection, veuillez reprendre SVP.</div><br /><br />
															<?php
														}
														?>
														</table>
														<?php
													}
													else
													{
														?>
															<div class='STA-echec'>Mauvaise sélection, veuillez reprendre SVP.</div><br /><br />
														<?php
													}
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