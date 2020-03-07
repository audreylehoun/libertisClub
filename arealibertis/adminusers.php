<?php 
include("verif/verif.php");
$menu = "adminusers.php";

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
    <title>Créer et gestion des administrateurs | LIBERTIS</title>
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
			input {
			  padding: 2px;
			  border: 1px solid #CCC;
			  -moz-border-radius: 2px;
			  -webkit-border-radius: 2px;
			  border-radius: 2px;
			  outline: none; 
			}
			input:focus {
			  border-color: rgba(82, 168, 236, 0.75);
			  -moz-box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
			  -webkit-box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
			  box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
			}
			.correct {
			  border-color: rgba(68, 191, 68, 0.75);
			}
			.correct:focus {
			  border-color: rgba(68, 191, 68, 0.75);
			  -moz-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
			  -webkit-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
			  box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
			}
			.incorrect {
			  border-color: rgba(191, 68, 68, 0.75);
			}
			.incorrect:focus {
			  border-color: rgba(191, 68, 68, 0.75);
			  -moz-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
			  -webkit-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
			  box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
			}
			.tooltip {
			  display: inline-block;
			  margin-left: 20px;
			  padding: 2px 4px;
			  border: 1px solid #555;
			  background-color: #CCC;
			  -moz-border-radius: 4px;
			  -webkit-border-radius: 4px;
			  border-radius: 4px;
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
												
											<h3>Création des administrateurs</h3>
											<hr />
											<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Remplissez le formulaire suivant pour créer un administateur, surtout prenez le soin de lui attribuer un groupe.)</p>
												<!-- Gestion de compte -->
													<?php
													try
													{
														$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
														include_once("../config/config.php");
														$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
														if(isset($_POST["nomadmin"], $_POST["pseudo"], $_POST["password"], $_POST["confirmation"])  and $_POST["pseudo"]!='')//On enleve lechappement si get_magic_quotes_gpc est active
														{
															if(get_magic_quotes_gpc())
															{
																$_POST["nomadmin"] = stripslashes($_POST["nomadmin"]);
																$_POST["pseudo"] = stripslashes($_POST["pseudo"]);
																$_POST["password"] = stripslashes($_POST["password"]);
																$_POST["confirmation"] = stripslashes($_POST["confirmation"]);
																$_POST["email"] = stripslashes($_POST["email"]);
																$_POST["groupe"] = stripslashes($_POST["groupe"]);
															}
															   
																//On verifie si le mot de passe et celui de la verification sont identiques
																if($_POST["password"]==$_POST["confirmation"])
																{
																	//On verifie si le mot de passe a 8 caracteres ou plus
																	if(strlen($_POST["password"])>=8)
																	{
																		 //On echape les variables pour pouvoir les mettre dans une requette SQL
																			
																		$req = $bdd->query('SELECT COUNT(*) AS compte FROM admin WHERE pseudoadmin = "'.$_POST['pseudo'].'"');
																		while($donnees = $req->fetch()){
																		$compte=$donnees['compte'];
																		}
																							$req->closeCursor();
																		if($compte == 0)
																		{
																			$req = $bdd->prepare('INSERT INTO admin (nomadmin, pseudoadmin, motpassadmin, emailadmin, groupeadmin) VALUES(?, ?, ?, ?, ?)');
																			$req->execute(array($_POST["nomadmin"], $_POST["pseudo"], $_POST["password"], $_POST["email"], $_POST["groupe"]));
																			
																			if($req)
																			{
																				$sms = "Création d'un nouvel administrateur de nom et prenoms : ".$_POST["nomadmin"]." <br />";
																				$sms.= "<strong>Pseudo :</strong> : ".$_POST["pseudo"]."<br /> ";
																				$sms.= "<strong>Mot de passe :</strong> : ".$_POST["password"]."<br /> ";
																				$sms.= "<strong>Email :</strong> : ".$_POST["email"]."<br /> ";
																				$sms.= "<strong>Groupe :</strong> : ".$_POST["groupe"]." <br />";
																				
																				$receiver = "admin@clublibertis.com";
																				$sujet =  "Création d'un nouvel administrateur";
																				$entete = 'MIME-Version: 1.0' . "\r\n";
																				$entete .= 'Content-type: text/html; charset=iso-8859-
																				1' . "\r\n";
																				$entete .= 'from : admin@clublibertis.com'. "\r\n";
																				
																				mail($receiver, $sujet, $sms, $entete);
																				
																				
																				$activite = "Création d'un nouvel administrateur de nom et prenoms : ".$_POST["nomadmin"].".";
																				$activite.= "<strong>Pseudo :</strong> : ".$_POST["pseudo"]."; ";
																				$activite.= "<strong>Mot de passe :</strong> : ".$_POST["password"]."; ";
																				$activite.= "<strong>Email :</strong> : ".$_POST["email"]."; ";
																				$activite.= "<strong>Groupe :</strong> : ".$_POST["groupe"]." <br />";
																				
																				$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																				$req3->execute(array($_SESSION["user_name"], $activite));
																				
																				$req3->closeCursor();	
											
																			   $info = true;
																				?>
																				<div class='STA-succes'>Compte bien enrégistré...</div><br /><br />
																				<?php
												   
																			}
																			else
																			{ 
																															   ?>
																				<div class="STA-echec">L'enregistrement a échoué !!!</div><br /><br />
																				  <?php					   
																			}
																			$req->closeCursor();
																		}
																		else
																		{
																															   ?>
																			<div class="STA-echec">Un autre administrateur utilise déjà le pseudo que vous désirez utiliser.</div><br /><br />
																														  <?php
																		}
																	}
																	else
																	{
																	   ?>
																	   <div class="STA-echec">Le mot de passe que vous avez entré contient moins de 8 caractères.</div><br /><br />
																	   <?php
																	}
																}
																else
																{
																   ?>
																	<div class="STA-echec">Les mots de passe que vous avez entré ne sont pas identiques..</div><br /><br />
																   <?php
																}
														}
														else
														{
															$form = true;
														}
													}
													catch(Exception $e)
													{
														die('Erreur : '.$e->getMessage());
													}
													?>
												<form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
												<br />
													<label class="form_col" for="nomadmin">Nom et prenoms : </label><input id="nomadmin" type="text" name="nomadmin" required /><br /><br />
													
													<label class="form_col" for="pseudo">Pseudo : </label><input id="pseudo" type="text" name="pseudo" required /><br /><br />
													
													<label class="form_col" for="password">Mot de Passe : </label><input id="password" type="password" name="password" required /><br /><br />
													
													<label class="form_col" for="confirmation">Confirmer mot de passe : </label><input id="confirmation" type="password" name="confirmation" required /><br /><br />
													
													<label class="form_col" for="email">Email : </label><input id="confirmation" type="email" id="email" name="email" required /><br /><br />
													
													<label class="form_col" for="groupe">Groupe : </label>
													   <select name="groupe" id="groupe" required>
														 <option value=""> </option>
														 <option value="Super administrateur">Super administrateur </option>
														 <option value="Administrateur">Administrateur </option>
													   </select><br /><br />
													<label class="form_col"> </label>
													<input type="submit" name="register" value="Enrégistrer" class="STA-button" />
												</form><br /><br /><br />



												
											</div>
										</div>
									</div>
									<div class="STA-content-layout">
										<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
											
											
											<h3>Gestion de compte des administrateurs</h3>
											<hr />
											<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Cliquez sur le crayon pour modifier ou bloquer un utilisateur quelque soit son groupe et sur la poubelle pour supprimer.)</p>
												<table style="width: 100%; font-size:13px;">
												<tr>
												<td style="text-align:center;padding:10px;font-size:15px;"><strong>Nom Admin</strong></td>
												<td style="text-align:center;padding:10px;font-size:15px;"><strong>Pseudo</strong></td>
												<td style="text-align:center;padding:10px;font-size:15px;"><strong>Mot de passe</strong></td>
												<td style="text-align:center;padding:10px;font-size:15px;"><strong>Groupe Admin</strong></td>
												<td style="text-align:center;padding:10px;font-size:15px;"><strong>Email Admin</strong></td>
												<td style="text-align:center;padding:10px;font-size:15px;"><strong>Modification</strong></td>
												<td style="text-align:center;padding:10px;font-size:15px;"><strong>Suppression</strong></td>
												</tr>
												<?php
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include_once("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
													$messagesParPage=20;
													$req = $bdd->query('SELECT COUNT(*) AS total FROM admin');
													while($donnees_total = $req->fetch()){
													$total=$donnees_total['total'];
													}
																 $req->closeCursor();
													
													$nombreDePages=ceil($total/$messagesParPage);
						 
													if(isset($_GET['page'])) 
													{
														$pageActuelle=intval($_GET['page']);
													 
														if($pageActuelle>$nombreDePages) 
														{
															$pageActuelle=$nombreDePages;
														}
													}
													else 
													{
														$pageActuelle=1;     
													}
													 
													$premiereEntree=($pageActuelle-1)*$messagesParPage; 
													 
													$req = $bdd->query('SELECT * FROM admin ORDER BY pseudoadmin ASC LIMIT '.$premiereEntree.', '.$messagesParPage.'');
													while($donnees = $req->fetch())
													{
														?>
														<tr>
														<td style="text-align:center;"><?php echo $donnees["nomadmin"];?></td>
														<td style="text-align:center;"><?php echo $donnees["pseudoadmin"];?></td>
														<td style="text-align:center;"><strong><em><?php echo $donnees["motpassadmin"];?></em></strong></td>
														<td style="text-align:center;"><?php echo $donnees["emailadmin"];?></td>
														<td style="text-align:center;"><?php echo $donnees["groupeadmin"];?></td>
														<td style="text-align:center;"><a href="saveuser.php?modificationuser=<?php echo $donnees["idadmin"];?>"><img src="images/edit-icone-modifier.png"/></a></td>
														<td style="text-align:center;"><a href="deleteuser.php?suppressionuser=<?php echo $donnees["idadmin"];?>" onclick="return confirm('Êtes-vous sûr de supprimer?');"><img src="images/delete-icone-supprimer.png"/></a></td>
														</tr>
														<?php
													}
													$req->closeCursor();
													
													echo '<span style="position:absolute; left:120px; bottom:30px;font-weight:bold;color:white;">Page : '; //Pour l'affichage, on centre la liste des pages
													for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
													{
														//On va faire notre condition
														if($i==$pageActuelle) //Si il s'agit de la page actuelle...
														{
															echo ' [ '.$i.' ] '; 
														}	
														else //Sinon...
														{
															echo ' <a href="adminusers.php?page='.$i.'">'.$i.'</a> ';
														}
													}
													echo '</span>';
													
												}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
												?>
												</table><br/><br /><br /><br />
												<!-- Fin gestion de compte -->

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