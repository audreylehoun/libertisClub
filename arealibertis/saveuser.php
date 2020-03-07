<?php
session_start();
//---Deconnexion
if(isset($_GET['logout']))
{
unset($_SESSION["user_name"]);
unset($_SESSION["pass"]);
unset($_SESSION["groupe"]);
}

//----Verification login
if(!isset($_SESSION["user_name"]))
{
   if(!isset($_SESSION['pass']))
	{
	   header("Location:login.php");
	}
}


$menu = "saveuser.php";

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
    <title>Modification des admininstrateurs | LIBERTIS</title>
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
									<h2 class="STA-postheader">Modification administrateur</h2>
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
											<!-- Debut contenu -->
													
											<?php
											if(isset($_GET['modificationuser']))
											{
												include("../config/config.php");
												mysql_connect($hote,$user,$PW);
												mysql_select_db($BD);
												
												//On verifie que le formulaire a ete envoye
												if(isset($_POST["saveadmin"]) and $_POST["pseudo"]!='')
												{
													//On enleve lechappement si get_magic_quotes_gpc est active
													if(get_magic_quotes_gpc())
													{
														$_POST["pseudo"] = stripslashes($_POST["pseudo"]);
														$_POST["password"] = stripslashes($_POST["password"]);
														$_POST["confirmation"] = stripslashes($_POST["confirmation"]);
													}
													//On verifie si le mot de passe et celui de la verification sont identiques
													if($_POST["password"]==$_POST["confirmation"])
													{
														//On verifie si le mot de passe a 8 caracteres ou plus
														if(strlen($_POST["password"])>=8)
														{
															//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
															$dn = mysql_num_rows(mysql_query('select idadmin from admin where pseudoadmin="'.$_POST["pseudo"].'"'));
															if($dn==0 OR $dn==1)
															{
																//On recupere le nombre dutilisateurs pour donner un identifiant a lutilisateur actuel
																$dn2 = mysql_num_rows(mysql_query('select idadmin from admin'));
																$id = $dn2+1;
																//On vérifie l'ancien mot de passe
																$old_pass = mysql_query('select motpassadmin from admin where idadmin = "'.$_SESSION['id_modif'].'"');
																$old_pass_mm = mysql_fetch_array($old_pass);
																if($old_pass_mm["motpassadmin"] == $_POST['old_password'])
																{
																	//On enregistre les informations dans la base de donnee
																	if(mysql_query('update admin set nomadmin = "'.$_POST["nomadmin"].'", pseudoadmin = "'.$_POST["pseudo"].'", motpassadmin = "'.$_POST["password"].'", emailadmin = "'.$_POST["email"].'", groupeadmin = "'.$_POST['groupe'].'" where idadmin = "'.$_SESSION['id_modif'].'" '))
																	{
																		$sms = "Modification des informations de l'administrateur : ".$_SESSION['nomadmin'].".";
																		$sms.= "<strong>Nouveau nom et prenom :</strong> : ".$_POST["nomadmin"]."<br /> ";
																		$sms.= "<strong>Nouveau pseudo :</strong> : ".$_POST["pseudo"]."<br /> ";
																		$sms.= "<strong>Nouveau mot de passe :</strong> : ".$_POST["password"]."<br /> ";
																		$sms.= "<strong>Nouvel email :</strong> : ".$_POST["email"]."<br /> ";
																		$sms.= "<strong>Nouveau groupe :</strong> : ".$_POST["groupe"]." <br />";
																		
																		
																		$receiver = "admin@clublibertis.com";
																		$sujet =  "Modification des informations de l'administrateur : ".$_SESSION['nomadmin'].".";
																		$entete = 'MIME-Version: 1.0' . "\r\n";
																		$entete .= 'Content-type: text/html; charset=iso-8859-
																		1' . "\r\n";
																		$entete .= 'from : admin@clublibertis.com'. "\r\n";
																		
																		mail($receiver, $sujet, $sms, $entete);
																		
																		$activite = "Modification des informations de l'administrateur : ".$_SESSION['nomadmin'].".";
																		$activite.= "<strong>Nouveau nom et prenom :</strong> : ".$_POST["nomadmin"]."; ";
																		$activite.= "<strong>Nouveau pseudo :</strong> : ".$_POST["pseudo"]."; ";
																		$activite.= "<strong>Nouveau mot de passe :</strong> : ".$_POST["password"]."; ";
																		$activite.= "<strong>Nouvel email :</strong> : ".$_POST["email"]."; ";
																		$activite.= "<strong>Nouveau groupe :</strong> : ".$_POST["groupe"]." <br />";
																		
																		$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																		$req3->execute(array($_SESSION["user_name"], $activite));
																		
																		$req3->closeCursor();	
											
																		//Si ca a fonctionne, on naffiche pas le formulaire
																		$form = false;
																		?>
																		<div class="STA-succes">Félicitation, le compte a été bien modifiée.</div>
																		<?php
																	}
																	else
																	{
																		//Sinon on dit quil y a eu une erreur
																		$form = true;
																		$message = 'Une erreur est survenue lors de la modification.';
																	}
																}
																else
																{
																	//Sinon on dit que l'ancien mot de passe est incorrect
																	$form = true;
																	$message = "L'ancien mot de passe est incorrect.";
																}
																
															}
															else
															{
																//Sinon, on dit que le pseudo voulu est deja pris
																$form = true;
																$message = "Un autre utilisateur utilise déjà le nom d'utilisateur que vous désirez utiliser.";
															}
														}
														else
														{
															//Sinon, on dit que le mot de passe nest pas assez long
															$form = true;
															$message = "Le mot de passe que vous avez entré contient moins de 8 caractères.";
														}
													}
													else
													{
														//Sinon, on dit que les mots de passes ne sont pas identiques
														$form = true;
														$message = "Les mots de passe que vous avez entrés ne sont pas identiques.";
													}
												}
												else
												{
													$form = true;
												}
											if($form)
											{
												//On affiche un message sil y a lieu
												if(isset($message))
												{
													echo '<div class="STA-echec">'.$message.'<br /><br /></div>';
												}
											}
												?>
												<form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']) ?>" id="contact_form">
												<input type="hidden" name="do" value="contact" />
												<?php
												 try
													{
														$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
															include("../config/config.php");
															$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
												
															 
														$req = $bdd->query("SELECT * FROM  admin WHERE idadmin = '".$_GET['modificationuser']."' ");
														while($donnees = $req->fetch())
														{
															$_SESSION['id_modif'] = $donnees["idadmin"];
															$_SESSION['nomadmin'] = $donnees["nomadmin"];
															?>
																<label class="form_col" for="nomadmin">Nom et prenoms : </label><input id="nomadmin" type="text" name="nomadmin" value="<?php echo $donnees["nomadmin"]; ?>" required /><br /><br />
													
																<label class="form_col" for="pseudo">Pseudo : </label><input id="pseudo" type="text" name="pseudo" value="<?php echo $donnees["pseudoadmin"]; ?>" required /><br /><br />
																
																<label class="form_col" for="old_password">Ancien mot de Passe : </label><input id="old_password" type="password" name="old_password" required /><br /><br />
																
																<label class="form_col" for="password">Nouveau mot de Passe : </label><input id="password" type="password" name="password" required /><br /><br />
																
																<label class="form_col" for="confirmation">Confirmer mot de Passe : </label><input id="confirmation" type="password" name="confirmation" required /><br /><br />
																
																<label class="form_col" for="email">Email : </label><input id="confirmation" type="email" id="email" name="email" value="<?php echo $donnees["emailadmin"]; ?>" required /><br /><br />
													
																<label class="form_col" for="groupe">Groupe d'administarteur : </label>
																<select name="groupe" id="groupe" required>
																	<option value=""> </option>
																	<option value="Super administrateur" <?php if($donnees["groupeadmin"] == "Super administrateur") echo "selected";?>>Super administrateur </option>
																	<option value="Administrateur" <?php if($donnees["groupeadmin"] == "Administrateur") echo "selected";?>>Administrateur </option>
																</select><br /><br />
																<label class="form_col"> </label>
																<input type="submit" name="saveadmin" value="Modifier ou bloquer" class="STA-button" /><br /><br />
															<?php
														}
														 $req->closeCursor();
													}
													catch(Exception $e)
													{
														die('Erreur : '.$e->getMessage());
													}

												?>
												</form>
												
												<?php
											}
											?>
												<p style="font-size:18px;"><a href="adminusers.php">Retournez sur la gestion des administrateurs</a></p>
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
<script type="text/javascript" src="../script/controle_form.js"></script>

</body></html>