<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Se joindre à nous</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Se joindre à LIBERTIS CLUB" />
		
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>LIBERTIS CLUB</span></h1>
				<nav class="codrops-demos">
					<span style="font-size:18px;">Remplissez les formulaires suivants pour finir la soumission de votre inscription</span>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
				
	<?php 
		try
		{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			include("../config/config.php");
			$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
				
			if(isset($_POST["terminelibertisinscrir"]))
			{
				if($_POST["robotsverif"] == "15")
				{
					if(($_FILES["fichfile"]["name"][0] != "") AND ($_FILES["fichfile"]["name"][1] != ""))
					{
						$nom = $_FILES["fichfile"]["name"][0];
						$nom1 = $_FILES["fichfile"]["name"][1];
						
						//Enregistrement et renommage du fichier
						$extensions_valides = array( 'pdf' , 'docx' , 'jpg' , 'png' );
						//1. strrchr renvoie l'extension avec le point (« . »).
						//2. substr(chaine,1) ignore le premier caractère de chaine.
						//3. strtolower met l'extension en minuscules.
						$extension_upload = strtolower(substr(strrchr($_FILES["fichfile"]["name"][0], '.') ,1));
						
						$extension_upload = strtolower($extension_upload);
						
						if(in_array($extension_upload,$extensions_valides))
						{	
							$result=move_uploaded_file($_FILES["fichfile"]["tmp_name"][0], '../images/filepieceidentite/'.$nom);	
							
							if($result==TRUE)
							{
								$fileinsert = true;
							}
						}
						else
						{
							$inscrit1 = false;
							$mess1 = "<div class='club-echec'>Les extensions de vos fichiers ne sont pas correctes. Choisissez les fichiers de type pdf, docx, jpg, ou png</div>";
						}
						
						
						//Enregistrement et renommage du fichier
						$extensions_valides1 = array( 'pdf' , 'docx' , 'jpg' , 'png' );
						//1. strrchr renvoie l'extension avec le point (« . »).
						//2. substr(chaine,1) ignore le premier caractère de chaine.
						//3. strtolower met l'extension en minuscules.
						$extension_upload1 = strtolower( substr(strrchr($_FILES["fichfile"]["name"][1], '.') ,1) );
						
						$extension_upload1 = strtolower($extension_upload1);
						
						if(in_array($extension_upload1,$extensions_valides1))
						{
							$result1=move_uploaded_file($_FILES["fichfile"]["tmp_name"][1], '../images/filetestvih/'.$nom1);		
							
							if($result1==TRUE)
							{
								$fileinsert1 = true;
							}
								
						}
						else
						{
							$inscrit2 = false;
							$mess2 = "<div class='club-echec'>Les extensions de vos fichiers ne sont pas correctes. Choisissez les fichiers de type pdf, docx, jpg, ou png</div>";
						}
						
								if($fileinsert==true AND $fileinsert1==true)
								{		
									$req = $bdd->prepare('UPDATE users SET filepiecedidentite = :file_piecedidentite, filetestvih = :file_testvih WHERE pseudo = :pseudousers');
									$req->execute(array(
									'file_piecedidentite' => $nom,
									'file_testvih' => $nom1,
									'pseudousers' => $_POST["pseudocache"]
									));
									
									if($req)
									{
										$inscrit = true;
										$mess = "<div class='club-succes'>Votre enregistrement a bien été pris en compte. Votre adhésion sera examiné par l'administrateur de lIBERTIS</div>";
										
									}
									else
									{
										$inscrit = false;
										$mess = "<div class='club-echec'>Votre enrégistrement a échoué, veuillez réessayer. </div>";	   
									}
									
									$req->closeCursor();
									
								}
								 else
								{
									$inscrit = false;
									$mess = "<div class='club-echec'>Désolé, vos fichiers n'ont pas été insérés</div>";
								}
					}
					
					if(($_FILES["fichfile"]["name"][0] == "") AND ($_FILES["fichfile"]["name"][1] == ""))
					{
						$inscrit = true;
						$mess = "<div class='club-succes'>Votre enregistrement a bien été pris en compte. Votre adhésion sera examiné par l'administrateur de lIBERTIS</div>";
					}
				}
				else
				{
					$inscrit = false;
					$mess = "<div class='club-echec'>Mauvaise réponse, veuillez réessayer SVP.</div>";
				}
						
			}
			
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		
		if(isset($inscrit) AND $inscrit = true)
		{
			echo $mess;
		}
		
		if(isset($inscrit) AND $inscrit = false)
		{
			echo $mess;
		}
		
		if(isset($inscrit1) AND $inscrit1 = false)
		{
			echo $mess1;
		}
		
		if(isset($inscrit2) AND $inscrit2 = false)
		{
			echo $mess2;
		}
	?>
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" id="contact_form" autocomplete="on"> 
                                <h1>Etape 2/2</h1> 
								
									<label class="form_col" for="pseudo">Pseudo <span style="color:red;">(*)</span> : </label><input id="pseudo" type="text" name="pseudo" disabled value="<?php if(isset($_GET["userpseudo"])) echo $_GET["userpseudo"]; ?>" required /><input type="hidden" name="pseudocache" value="<?php if(isset($_GET["userpseudo"])) echo $_GET["userpseudo"]; ?>" /><br /><br />
									
									<label style="font-weight:bold;" class="form_col">Copie de la pièce d'identité : </label>
									<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
									<input type="file" name="fichfile[]" /> 		
									<br /> <br />
									
									<label style="font-weight:bold;" class="form_col">Joindre autres documents : </label>
									<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
									<input type="file" name="fichfile[]" /> 		
									<br /> <br />
									
									<label class="form_col" for="robotsverif"> Combien font 10 + 5 (Je ne suis pas un robot) <span style="color:red;">(*)</span> :  </label><input id="robotsverif" type="text" name="robotsverif" placeholder="Tapez ici '15' " required/>  <br /><br />
									
									<input type="checkbox" required /><label class="form_col"> <a href="conditions-dadhesion-des-membres.pdf" target="_blank">Je reconnais avoir pris connaissance et accepté les conditions d'inscription</a></label><br /> <br />
									
                                <p class="login button"> 
                                    <input type="submit" name="terminelibertisinscrir" value="Terminer" /> 
								</p>
                                <p class="change_link">
									Déjà membre ?
									<a href="../seconnecter/" class="to_register">Se connecter</a>
								</p>
                            </form>
                        </div>

                    </div>
                </div>  
            </section>
        </div>

    </body>
</html>