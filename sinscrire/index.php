<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
<!-- 

Conçu par :

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8" />
    <title>S'inscrire sur APHRODITE CLUB</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>



<style>.club-content .club-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .club-post .club-layout-cell {border:none !important; padding:0 !important; }
.ie6 .club-post .club-layout-cell {border:none !important; padding:0 !important; }

	.form_col {
  display: inline-block;
  margin-right: 15px;
  padding: 3px 0px;
  width: 200px;
  min-height: 1px;
  text-align: right;
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
<div id="club-main">
<!-- Début entête -->
<?php
	include("../structure/header.php");
?>
<!-- Fin entête -->

<div class="club-sheet clearfix">
            <div class="club-layout-wrapper">
                <div class="club-content-layout">
                    <div class="club-content-layout-row">
                        
                        <div class="club-layout-cell club-content">
							<article class="club-post club-article">
                                <h2 class="club-postheader">S'Inscrire</h2><br />
                                                
												
								<div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 100%" >
											
												<div id="wrapper">
												
													<form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" id="contact_form">
													<input type="hidden" name="do" value="contact" />
														<fieldset>
															   <legend>Les détails d'identifiant</legend>
															<label class="form_col" for="pseudo">Identifiant : </label><input  id="pseudo" type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span>
															<span class="tooltip">Le pseudo ne peut pas faire moins de 6 caractères</span><br /><br />
															<label class="form_col" for="password">Mot de Passe : </label><input  id="password" type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span>
															<span class="tooltip">Le mot de passe ne doit pas faire moins de 8 caractères</span><br /><br />
															<label class="form_col" for="confirmation">Confirmer mot de passe: </label><input  id="confirmation" type="password" name="confirmation" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span>
															<span class="tooltip">Le mot de passe de confirmation doit être identique à celui d'origine</span><br /><br />
															<label class="form_col" for="email">Votre email : </label><input  id="email" type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br />
														</fieldset>
														<fieldset>
															   <legend>Les détails de contact</legend>
															<label class="form_col" for="nom">Nom : </label><input  id="nom" type="text" name="nom" value="<?php if(isset($_POST['nom'])) echo $_POST['nom']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span>
															<span class="tooltip">Un nom ne peut pas faire moins de 4 caractères</span><br /><br />
															<label class="form_col" for="prenom">Prenom : </label><input  id="prenom" type="text" name="prenom" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span>
															<span class="tooltip">Un prénom ne peut pas faire moins de 4 caractères</span><br /><br />
															
															<label class="form_col" for="age">Age : </label><input  id="age" type="text" name="age" value="<?php if(isset($_POST['age'])) echo $_POST['age']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="nationalite">Nationalite : </label><input id="nationalite" type="text" name="nationalite" value="<?php if(isset($_POST['nationalite'])) echo $_POST['nationalite']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="taille">Taille : </label><input id="taille" type="text" name="taille" value="<?php if(isset($_POST['taille'])) echo $_POST['taille']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="profession">Profession : </label><input id="profession" type="text" name="profession" value="<?php if(isset($_POST['profession'])) echo $_POST['profession']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col">Type de pièce d'identité : </label>
															<select name='typepieceidentite' id='typepieceidentite' required>
																<option value=" ">------ Aucun ------</option>
																<option value="Carte d’identité nationale">Carte d’identité nationale</option>
																<option value="Passeport">Passeport</option>
																<option value="Carte consulaire">Carte consulaire</option>
																<option value="Autres">Autres</option>
															</select> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="autrepiecedidentite">Autres types de Pièce : </label><input id="autrepiecedidentite" type="text" name="autrepiecedidentite" value="<?php if(isset($_POST['autrepiecedidentite'])) echo $_POST['autrepiecedidentite']; ?>" /> <br /><br />
															
															<label class="form_col" for="numpiecedidentite">N° Pièce d'identité : </label><input id="numpiecedidentite" type="text" name="numpiecedidentite" value="<?php if(isset($_POST['numpiecedidentite'])) echo $_POST['numpiecedidentite']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="datedelivrance">Date de délivrance : </label><input id="datedelivrance" type="date" name="datedelivrance" value="<?php if(isset($_POST['datedelivrance'])) echo $_POST['datedelivrance']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="auteurdelivrance">Auteur de délivrance :  </label><input id="auteurdelivrance" type="text" name="auteurdelivrance" value="<?php if(isset($_POST['auteurdelivrance'])) echo $_POST['auteurdelivrance']; ?>" required/> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="contact">Contact N° :  </label><input  id="contact" type="text" name="contact" value="<?php if(isset($_POST['contact'])) echo $_POST['contact']; ?>" required/> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
														</fieldset>
														<fieldset>
															   <legend>Les autres informations</legend>
															
															<label class="form_col" for="actvitephysique">Activité physique pratiquée : </label><input id="actvitephysique" type="text" name="actvitephysique" value="<?php if(isset($_POST['actvitephysique'])) echo $_POST['actvitephysique']; ?>" required /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="religion">Religion : </label><input id="religion" type="text" name="religion" value="<?php if(isset($_POST['religion'])) echo $_POST['religion']; ?>" /> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
														
															<label class="form_col">Hobby : </label>
															<select name='hobby' id='hobby' required>
																<option value=" ">------ Aucun ------</option>
																<option value="Danse">Danse</option>
																<option value="Promenade">Promenade</option>
																<option value="Lecture">Lecture</option>
																<option value="Voyage">Voyage</option>
																<option value="Excursion">Excursion</option>
																<option value="Autres">Autres</option>
															</select> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
															
															<label class="form_col" for="pays">Pays : </label><input  id="code_postal" type="text" name="code_postal" value="<?php if(isset($_POST['code_postal'])) echo $_POST['code_postal']; ?>" /><br /> <br />
															
															<label class="form_col" for="objectif">Objectifs Visés : </label><textarea name="objectif" rows="5" cols="18" required ><?php if(isset($_POST['objectif'])) echo $_POST['objectif']; ?></textarea> &nbsp;&nbsp;&nbsp;<span style="color:red;">(*)</span><br /><br />
														
															<label style="font-weight:bold;" class="form_col">Photo de profil : </label>
															<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
															<input type="file" name="fich" required />
														
															<br /> <br />
														</fieldset>
													</form>
													<br /><br /><br /><br />
													
												</div>
												
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
<footer class="club-footer">
  <div class="club-footer-inner">
	<p>Copyright © 2015. All Rights Reserved.</p>
    <p class="club-page-footer">
        <span id="club-footnote-links">Created by <a href="http://patrickmonde.over-blog.com/" target="_blank">Patrick O. F. LIGAN</a>.</span>
    </p>
  </div>
</footer>

</div>
<script type="text/javascript" src="../script/controle_form.js"></script>


</body></html>