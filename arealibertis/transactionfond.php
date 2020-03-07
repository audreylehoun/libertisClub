<?php 
include("verif/verif.php");
$menu = "transactionfond.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Ajout de fond LIBERTIS</title>
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
  width: 230px;
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
										<h3>Ajout et retrait de fonds </h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Remplissez les formulaires suivants pour ajouter et/ou retirer de fonds sur le compte d'un membre.)</p>
											<!-- Debut contenu -->
											<?php 
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
													if(isset($_POST["validetransact"]))
													{	
														if($_POST["typetransaction"] == "ajout")
														{
															$montantajout = $_POST["montanttransaction"];
															$montantretrait = 0;
														}
															
														if($_POST["typetransaction"] == "regularisation")
														{
															$montantretrait = $_POST["montanttransaction"];
															$montantajout = 0;
														}
														
															// Solde débiteur membre
															$req = $bdd->query('SELECT SUM(debittransaction) AS debitmembre FROM transaction WHERE pseudotransaction = "'.$_POST["pseudomembre"].'" ');
															while($donnees = $req->fetch())
															{		
																$comptedebitmembre = $donnees["debitmembre"];
															}
															$req->closeCursor();
															
															// Solde créditeur membre
															$req = $bdd->query('SELECT SUM(credittransaction) AS creditmembre FROM transaction WHERE pseudotransaction = "'.$_POST["pseudomembre"].'" ');
															while($donnees = $req->fetch())
															{		
																$comptecreditmembre = $donnees["creditmembre"];
															}
															$req->closeCursor();
															
															//Calcul solde
															$soldemembre = ((($comptecreditmembre + $comptedebitmembre) + $montantajout) - $montantretrait);
															
															// Valider transaction
															$req = $bdd->prepare('INSERT INTO transaction (pseudotransaction, motifstransaction, debittransaction, credittransaction, soldetransaction, auteurtransaction, commentaire, datetransaction) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())');
															$req->execute(array($_POST["pseudomembre"], $_POST["motifstransaction"], $montantajout, $montantretrait, $soldemembre, $_SESSION["user_name"], $_POST["commenttransact"]));
										
															if($req)
															{
														
																$sms = $_POST["motifstransaction"]." pour le membre : <strong>".$_POST["pseudomembre"]."</strong> <br /><br />";
																
																$receiver = "admin@clublibertis.com";
																$sujet = $_POST["motifstransaction"] ;
																$entete = 'MIME-Version: 1.0' . "\r\n";
																$entete .= 'Content-type: text/html; charset=iso-8859-
																1' . "\r\n";
																$entete .= 'De : admin@clublibertis.com'. "\r\n";
																
																mail($receiver, $sujet, $sms, $entete);
																
																
																$activite = $_POST["motifstransaction"] ;
																$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																$req2->execute(array($_SESSION["user_name"], $activite));
																
																$req2->closeCursor();
																			
																?>
																<div class="STA-succes">La transaction, <?php echo $_POST["motifstransaction"];?> a réussie</div>
																   <?php
															   
															}
															else
															{
															   echo "<div class='STA-echec'>La transaction a échoué </div>";	   
															}
															$req->closeCursor();
													}
													
											?>
												<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
												
													<label style="font-weight:bold;" class="form_col" for="pseudomembre">Choisir membres : </label>
													<select name="pseudomembre" id="pseudomembre" required>
														<option value=" ">------ Aucun ------</option>
														<optgroup label="Membre Bronze">
															<?php
															
															$req = $bdd->query('SELECT id_users,pseudo,nom,prenom,email,statutmembre FROM users WHERE statutmembre = "Membre Bronze" ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
														</optgroup>
														<optgroup label="Membre Silver">
															<?php
															
															$req = $bdd->query('SELECT id_users,pseudo,nom,prenom,email,statutmembre FROM users WHERE statutmembre = "Membre Silver" ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
														</optgroup>
														<optgroup label="Membre Gold">
															<?php
															
															$req = $bdd->query('SELECT id_users,pseudo,nom,prenom,email,statutmembre FROM users WHERE statutmembre = "Membre Gold" ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
														</optgroup>
														<optgroup label="Membre Diamond">
															<?php
															
															$req = $bdd->query('SELECT id_users,pseudo,nom,prenom,email,statutmembre FROM users WHERE statutmembre = "Membre Diamond" ORDER BY pseudo ASC ');
															while($donnees = $req->fetch())
															{
															?>
																<option value="<?php echo $donnees["pseudo"];?>"><?php echo $donnees["pseudo"];?> (<?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?>)</option>
															<?php
															}
															$req->closeCursor();
															?>
														</optgroup>
													</select>
													<br />
													
													<p>
														<label style="font-weight:bold;" class="form_col" for="motifstransaction">Type de transaction : </label>
														<select name="typetransaction" id="typetransaction" required>
															<option value=""> Type de transaction </option>
															<option value="ajout"> Ajout de fonds </option>
															<option value="regularisation"> Régularisation de compte </option>
														</select>
													</p>
													<p>
														<label style="font-weight:bold;" class="form_col" for="motifstransaction">Motifs transactions : </label>
														<input type="text" id="motifstransaction" name="motifstransaction" size="58" required />
													</p>
													<p>
														<label style="font-weight:bold;" class="form_col" for="montanttransaction">Montants transaction (En F CFA) : </label>
														<input type="number" step="100" id="montanttransaction" name="montanttransaction" size="58" required />
													</p>
													<p>
														<label style="font-weight:bold;" class="form_col" for="commenttransact">Commentaires : </label>
														<textarea id="commenttransact" name="commenttransact" rows="5" cols="60" required ></textarea>
													</p>
														<label class="form_col"></label>
														<input type="submit" name="validetransact" value="Valider la transaction" class="STA-button" /><br /><br />
												</form>
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