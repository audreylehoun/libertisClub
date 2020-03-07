<?php 
include("verif/verif.php");
$menu = "messagerecu.php";
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
			  width: 130px;
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
									<h2 class="STA-postheader">Messages envoyés</h2>
													
								<div class="STA-postcontent STA-postcontent-0 clearfix">
								
								<div class="STA-content-layout">
									<div class="STA-content-layout-row">
										<div class="STA-layout-cell layout-item-0" style="width: 100%" >
											<!-- Debut contenu -->
							
												
											<br />
											<!-- Recherche -->
											<table  border="0" style="width: 100%;font-size:13px;border:0px solid gray;">
												<tr>
													<td style="border:0px solid gray;">
														<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
															<input type="text" name="searchmembre" style="font-style:italic;" size="45" placeholder="Recherchez un destinataire" /> <br /><br /><input type="submit" name="search" value="OK" class="STA-button" />
														</form>
													</td>
													<td style="border:0px solid gray;">										
														<form style="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
															<input type="text" name="searchmessage" style="font-style:italic;" size="45" placeholder="Recherchez un message" /> <br /><br /><input type="submit" name="search2" value="OK" class="STA-button" />
														</form>
													</td>
												</tr>
											</table>
											<!-- Fin Recherche -->
												
											<br /><br />
											
													<?php 
													try
													{
														$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
														include_once("../config/config.php");
														$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
													?>
													
													<?php 
													if(isset($_POST["search"]))
													{
													?>
												<table style="width: 100%; font-size:13px;">
													<tr>
														<th style="text-align:center;padding:10px;font-size:15px;">Titres messages</th>
														<th style="text-align:center;padding:10px;font-size:15px;">Destinataires </th>
														<th style="text-align:center;padding:10px;font-size:15px;">Dates</th>
														<?php
														if($_SESSION["groupe"] == "Super administrateur")
														{
														?>
															<th style="text-align:center;padding:10px;font-size:15px;">Suppression</th>
														<?php
														}
														?>
													</tr>
													<?php
															$req = $bdd->query('SELECT idmessages,titremessage,naturemessage,destinatairemessage,expediteurmessage,DATE_FORMAT(datemessages, "%d/%m/%Y à %Hh%imin") AS datemessagesfr FROM messages WHERE expediteurmessage = "LIBERTIS CLUB" AND destinatairemessage = "'.$_POST["searchmembre"].'" AND statutdestinactifs = "actif" ORDER BY idmessages DESC ');
															while($donnees = $req->fetch())
															{
													?>
																	<tr>
																		<td style="font-size:15px;padding-left: 15px;"><a href="readsendmessage.php?idmessage=<?php echo $donnees["idmessages"];?>" title="Cliquer ici pour lire le message" style="color:#000000;"><?php echo $donnees["titremessage"]; ?></a></td>
																		<td style="text-align:center;"><?php echo $donnees["destinatairemessage"]; ?></td>
																		<td style="font-style:italic;text-align:center;line-height: 45px;"><?php echo $donnees["datemessagesfr"]; ?></td>
																<?php
																if($_SESSION["groupe"] == "Super administrateur")
																{
																?>
																		<td style="text-align:center;"><a href="deletemessage.php?iddelete=<?php echo $donnees["idmessages"];?>" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
																<?php
																}
																?>
																	</tr>
													<?php 
															}
															
															$req->closeCursor();
															
													?>
												</table>
													<?php
													}
													elseif(isset($_POST["search2"]))
													{
													?>
												<table style="width: 100%; font-size:13px;">
													<tr>
														<th style="text-align:center;padding:10px;font-size:15px;">Titres messages</th>
														<th style="text-align:center;padding:10px;font-size:15px;">Destinataires </th>
														<th style="text-align:center;padding:10px;font-size:15px;">Dates</th>
														<?php
														if($_SESSION["groupe"] == "Super administrateur")
														{
														?>
															<th style="text-align:center;padding:10px;font-size:15px;">Suppression</th>
														<?php
														}
														?>
													</tr>
													<?php
															$req = $bdd->query("SELECT idmessages,titremessage,naturemessage,destinatairemessage,expediteurmessage,DATE_FORMAT(datemessages, '%d/%m/%Y à %Hh%imin') AS datemessagesfr FROM messages WHERE titremessage LIKE '%".$_POST["searchmessage"]."%' AND expediteurmessage = 'LIBERTIS CLUB' AND statutdestinactifs = 'actif' OR contenumessage LIKE '%".$_POST["searchmessage"]."%' AND expediteurmessage = 'LIBERTIS CLUB' AND statutdestinactifs = 'actif' ORDER BY idmessages DESC ");
															while($donnees = $req->fetch())
															{
													?>
																	<tr>
																		<td style="font-size:15px;padding-left: 15px;"><a href="readsendmessage.php?idmessage=<?php echo $donnees["idmessages"];?>" title="Cliquer ici pour lire le message" style="color:#000000;"><?php echo $donnees["titremessage"]; ?></a></td>
																		<td style="text-align:center;"><?php echo $donnees["destinatairemessage"]; ?></td>
																		<td style="font-style:italic;text-align:center;line-height: 45px;"><?php echo $donnees["datemessagesfr"]; ?></td>
																<?php
																if($_SESSION["groupe"] == "Super administrateur")
																{
																?>
																		<td style="text-align:center;"><a href="deletemessage.php?iddelete=<?php echo $donnees["idmessages"];?>" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
																<?php
																}
																?>
																	</tr>
													<?php 
															}
															
															$req->closeCursor();
															
													?>
												</table>
													<?php
													}
													else
													{
													?>
												<table style="width: 100%; font-size:13px;">
													<tr>
														<th style="text-align:center;padding:10px;font-size:15px;">Titres messages</th>
														<th style="text-align:center;padding:10px;font-size:15px;">Destinataires </th>
														<th style="text-align:center;padding:10px;font-size:15px;">Dates</th>
														<?php
														if($_SESSION["groupe"] == "Super administrateur")
														{
														?>
															<th style="text-align:center;padding:10px;font-size:15px;">Suppression</th>
														<?php
														}
														?>
													</tr>	
													<?php
															$req = $bdd->query('SELECT idmessages,titremessage,naturemessage,destinatairemessage,expediteurmessage,DATE_FORMAT(datemessages, "%d/%m/%Y à %Hh%imin") AS datemessagesfr FROM messages WHERE expediteurmessage = "LIBERTIS CLUB" AND statutdestinactifs = "actif" ORDER BY idmessages DESC ');
															while($donnees = $req->fetch())
															{
													?>
																	<tr>
																		<td style="font-size:15px;padding-left: 15px;"><a href="readsendmessage.php?idmessage=<?php echo $donnees["idmessages"];?>" title="Cliquer ici pour lire le message" style="color:#000000;"><?php echo $donnees["titremessage"]; ?></a></td>
																		<td style="text-align:center;"><?php echo $donnees["destinatairemessage"]; ?></td>
																		<td style="font-style:italic;text-align:center;line-height: 45px;"><?php echo $donnees["datemessagesfr"]; ?></td>
																<?php
																if($_SESSION["groupe"] == "Super administrateur")
																{
																?>
																		<td style="text-align:center;"><a href="deletemessage.php?iddelete=<?php echo $donnees["idmessages"];?>" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
																<?php
																}
																?>
																	</tr>
													<?php 
															}
															
															$req->closeCursor();
															
													?>
												</table>
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