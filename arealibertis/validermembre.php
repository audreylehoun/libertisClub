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
									<h2 class="STA-postheader">Validation des inscriptions des comptes des utilisateurs</h2><hr /><br />
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
										<!-- Debut contenu -->
											<?php
											if(isset($_GET["idmemberval"]))
											{
												$_SESSION["idmembervalider"] = $_GET["idmemberval"];
											}
											
												if(isset($_POST["validemember"]))
												{
													try
													{
														$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
														include_once("../config/config.php");
														$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
														$req = $bdd->prepare('UPDATE users SET statutmembre = :statut_membre WHERE id_users = :idusers');
														$req->execute(array(
														'statut_membre' => $_POST["statutmembre"],
														'idusers' => $_SESSION["idmembervalider"]
														));
														
														$req->closeCursor();
														
															// Compte rendu et journal
															$req2 = $bdd->query('SELECT pseudo,nom,prenom,email FROM users WHERE id_users = "'.$_SESSION["idmembervalider"].'" ');
															while($donnees = $req2->fetch())
															{
																$pseudo = $donnees["pseudo"];
																$nom = $donnees["nom"];
																$prenom = $donnees["prenom"];
																$email = $donnees["email"];
															}
															$req2->closeCursor();
															
															$sms = "Changement du statut de l'utilisateur : <strong>".$pseudo."</strong><br />";
															$sms.= "Nom de l'utilisateur : <strong>".$nom."</strong><br />";
															$sms.= "Prenom de l'utilisateur : <strong>".$prenom."</strong><br />";
															$sms.= "Email de l'utilisateur : <strong>".$email."</strong><br />";
															$sms.= "Son nouveau statut est : <strong>".$_POST["statutmembre"]."</strong><br />";
															
															$receiver = "admin@clublibertis.com";
															$sujet =  "Changement du statut de l'utilisateur : ".$pseudo." à ".$_POST["statutmembre"]." <br />";
															$entete = 'MIME-Version: 1.0' . "\r\n";
															$entete .= 'Content-type: text/html; charset=iso-8859-
															1' . "\r\n";
															$entete .= 'from : admin@clublibertis.com'. "\r\n";
															
															mail($receiver, $sujet, $sms, $entete);
															
															$activite =  "Changement du statut de l'utilisateur : ".$pseudo." à ".$_POST["statutmembre"]." <br />";
															
															$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
															$req3->execute(array($_SESSION["user_name"], $activite));
															
															$req3->closeCursor();	
															// FIN Compte rendu et journal			

					
														?>
															<div class="STA-succes">Validation réussie<br />
															<a href="gestioninternaute.php">RETOUR</a></div>
														<?php
														
														
													}
													catch(Exception $e)
													{
														die('Erreur : '.$e->getMessage());
													}
												}
												?>
												<br />
												<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
													<label style="font-weight:bold;" for="statutmembre" class="form_col">Statut membre : </label>
													<select name="statutmembre" id="statutmembre" required>
														<option value="Membre Bronze">Membre Bronze</option>
														<option value="Membre Silver">Membre Silver</option>
														<option value="Membre Gold">Membre Gold</option>
														<option value="Membre Diamond">Membre Diamond</option>
														<option value="Membre Non certifie" selected>Membre Non certifie</option>
													</select>
													<br /><br />
													<label class="form_col"></label>
													<input type="submit" name="validemember" value="Valider" class="STA-button" /><br /><br />
												</form>
												<?php
											?><br /><br />
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