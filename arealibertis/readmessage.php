<?php 
include("verif/verif.php");
$menu = "livraisonscanner.php";

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
    <title>Validez la livraison | LIBERTIS</title>
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
											<!-- Debut contenu -->
											<br />
								<?php 
									
									try
									{
										$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
										include_once("../config/config.php");
										$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
										
									
								?>
							
							<table>
								<tr>
									<td style="width:30%;border:none;">
										<div class="STA-smstext">
											<?php  
											if(isset($_GET["idmessage"]))
											{
													$req = $bdd->prepare('UPDATE messages SET naturemessage = :nature_message WHERE idmessages = :idsms');
													$req->execute(array(
													'nature_message' => "lu",
													'idsms' => $_GET["idmessage"]
													));
													
													$req->closeCursor();
											}
													
													
											$req = $bdd->query('SELECT COUNT(expediteurmessage) AS nbremessages FROM messages WHERE destinatairemessage = "LIBERTIS CLUB" AND naturemessage = "non lu" ');
											$donnees = $req->fetch();
											
											$nbremessages = $donnees['nbremessages'];
											
											$req->closeCursor();
											?>
											<br /><p style="font-size:45px;color:#ED1E02;"><?php echo $nbremessages; ?></p>
											
											<p style="font-size:20px;"><a href="messages.php" style="color:#ED1E02;text-decoration:none;">Message(s)</a></p>
										</div>
									</td>
									<td style="width:65%;padding-left:80px;border:none;">
											<?php 
											if(isset($_GET["idmessage"]))
											{
												$req = $bdd->query('SELECT idmessages,titremessage,contenumessage FROM messages WHERE idmessages = "'.$_GET["idmessage"].'" ');
												$donnees = $req->fetch();
												
												$titlemessage = $donnees['titremessage'];
												
												$contentmessages = $donnees['contenumessage'];
												
												$req->closeCursor();
											}
											?>
											<table><tr><td style="border:none;">Titre : <br /><br /></td><td style="border:none;font-size:15px;"><?php echo $titlemessage; ?><br /><br /></td></tr>
														
												<tr><td style="border:none;">Message : </td><td style="border:none;font-size:14px;"><blockquote><?php echo $contentmessages; ?></blockquote></td></tr>
											</table>
									</td>
								</tr>
							</table>
								<br /><br />
								
							<h3>Boîte de réception</h3>
							<hr />
							<br />
							<table cellspacing="0" cellpadding="0">
								<tr>
									<th style="text-align:center;padding:10px;font-size:15px;">Titres messages</th>
									<th style="text-align:center;padding:10px;font-size:15px;">Expéditeur </th>
									<th style="text-align:center;padding:10px;font-size:15px;">Dates</th>
									<th style="text-align:center;padding:10px;font-size:15px;">Suppression</th>
								</tr>
								<?php  
								
										$req = $bdd->query('SELECT idmessages,destinatairemessage,expediteurmessage,titremessage,naturemessage,DATE_FORMAT(datemessages, "%d/%m/%Y à %Hh%imin") AS datemessagesfr FROM messages WHERE destinatairemessage = "LIBERTIS CLUB" ORDER BY idmessages DESC ');
										while($donnees = $req->fetch())
										{
										
											if($donnees["naturemessage"] == "non lu")
											{
								?>
												<tr>
													<td style="font-size:15px;padding-left: 15px;"><span style="color:#ED1E02;"><a href="readmessage.php?idmessage=<?php echo $donnees["idmessages"];?>&titlemessage=<?php echo $donnees["titremessage"];?>" title="Cliquer ici pour lire le message"><?php echo $donnees["titremessage"]; ?></a></span></td>
													<td style="text-align:center;"><?php echo $donnees["expediteurmessage"]; ?></td>
													<td style="font-style:italic;text-align:center;line-height: 45px;"><?php echo $donnees["datemessagesfr"]; ?></td>
													<td style="text-align:center;"><a href="deletemessage.php?iddelete=<?php echo $donnees["idmessages"];?>&titledelete=<?php echo $donnees["titremessage"];?>" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
												</tr>
								<?php 
											}
											else
											{
								?>
												<tr>
													<td style="font-size:15px;padding-left: 15px;"><a href="readmessage.php?idmessage=<?php echo $donnees["idmessages"];?>&titlemessage=<?php echo $donnees["titremessage"];?>" title="Cliquer ici pour lire le message" style="color:#000000;"><?php echo $donnees["titremessage"]; ?></a></td>
													<td style="text-align:center;"><?php echo $donnees["expediteurmessage"]; ?></td>
													<td style="font-style:italic;text-align:center;line-height: 45px;"><?php echo $donnees["datemessagesfr"]; ?></td>
													<td style="text-align:center;"><a href="deletemessage.php?iddelete=<?php echo $donnees["idmessages"];?>&titledelete=<?php echo $donnees["titremessage"];?>" onclick="return confirm('Etes vous sûr de supprimer ce message ?');"><img src="images/delete-icone-supprimer.png" /></a></td>
												</tr>
								<?php 
											}
										}
										
										$req->closeCursor();
										
									}
									catch(Exception $e)
									{
										die('Erreur : '.$e->getMessage());
									}
								?>
							</table>
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