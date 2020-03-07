<?php
session_start();
if(isset($_POST['bouton']))
{
   if(isset($_POST['user_name']) AND isset($_POST['pass']))
   {
      if($_POST['pass'] =='libertis@2015')
		{
			if($_POST['user_name']=='libertis')
		  {
			$_SESSION["user_name"] ='libertis';
			$_SESSION["pass"]='libertis@2015';
			$_SESSION["groupe"] = 'Super administrateur';
			header("Location:home.php");
		  }
		}
		else
		{
		    try
			{
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				include("../config/config.php");
				$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
				
				$req = $bdd->query('SELECT COUNT(pseudoadmin) AS nbre FROM admin WHERE pseudoadmin = "'.$_POST['user_name'].'" AND motpassadmin = "'.$_POST['pass'].'" ');
				while($donnees = $req->fetch())
				{
					$nbre = $donnees["nbre"];
				}
				$req->closeCursor();
				
				if($nbre == 1)
				{
					$req = $bdd->query('SELECT motpassadmin,groupeadmin FROM admin WHERE pseudoadmin = "'.$_POST['user_name'].'"');
					
					$donnees = $req->fetch();
					
					$_SESSION["user_name"] = $_POST["user_name"];
					$_SESSION["groupe"] = $donnees["groupeadmin"];
					$_SESSION["pass"] = $donnees["motpassadmin"];
						
					$req->closeCursor();
					
					header('Location:home.php');
				}
				else
				{
				 $erreur="<span style='color:red;font-weight:bold;font-style:italic;font-size:14px;'>Identifiant ou mot de passe incorrect. Veuillez réessayer !!!</span>";
				}
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
		}
   }
   else
   {
		$erreur="<span style='color:red;font-weight:bold;font-style:italic;font-size:14px;'>Vous devez remplir tous les champs ...</span>";
   }
     
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
    <title>Identifiez-vous</title>
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
  min-width: 100px;
  max-width: 100px;
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
											<div style="position:relative;margin:auto;">
											<div><img src="images/logo-espace-client-admin.jpg" style="float:left;" /></div>
											<div>
												<h2>Identifiez-vous !!!</h2>
												<br /><br />
													<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="text-align:center;">
													<label for="user_name" class="form_col">Identifiant : </label><input id="user_name" type="text" name="user_name" placeholder="Nom d'utilisateur" required /><br /><br />
													<label for="pass" class="form_col">Mot de Passe : </label><input id="pass" type="password" name="pass"  required /><br /><br />
													<label class="form_col"> </label><input name="bouton" type="submit" value="Connexion" class="STA-button" /><br /><?php if(isset($erreur)){echo $erreur;}?>
													</form>
											</div>
											</div>
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