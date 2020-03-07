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
					<span><a href="formulaireregistermodif.php">Cliquer ici pour complèter votre formulaire d'inscription</a></span>
					<br /><br />
					<span style="font-size:18px;">Ou remplissez les formulaires suivants pour soumettre votre inscription</span>
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
				
			if(isset($_POST["libertisinscrir"]))
			{
				if($_POST["robotsverif"] == "15")
				{
					if($_FILES["fich"]["name"] != "")
					{
						$nom = $_FILES["fich"]["name"];
						//Enregistrement et renommage du fichier
						$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
						//1. strrchr renvoie l'extension avec le point (« . »).
						//2. substr(chaine,1) ignore le premier caractère de chaine.
						//3. strtolower met l'extension en minuscules.
						$extension_upload = strtolower( substr(
						strrchr($_FILES["fich"]["name"], '.') ,1) );
							if ( in_array($extension_upload,$extensions_valides) )
							{
								$result=copy( $_FILES["fich"]["tmp_name"], '../images/usermbrelibertis/'.$nom);	
								if($result==TRUE)
								{
								//Verification même mot de passe
									if($_POST["password"] == $_POST["confirmation"])
									{
										//On verifie si le mot de passe a 8 caracteres ou plus
										if(strlen($_POST["password"])>=8)
										{
											//On verifie si lemail est valide
											if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
											{
												$req = $bdd->query('SELECT COUNT(pseudo) AS nbrepseudo FROM users WHERE pseudo = "'.$_POST["pseudo"].'" ');
												$donnees = $req->fetch();
												$nbrepseudo = $donnees["nbrepseudo"];
												$req->closeCursor();
												
												if($nbrepseudo == 0)
												{
														$message = "Bonjour ".$_POST["prenom"].", ".$_POST["nom"]." <br /><br />";
														$message.= "Félicitation ! <br />
														Votre enrégistrement sur <a href='http://www.clublibertis.com' target='_blank'>www.clublibertis.com</a> a bien été pris en compte. <br /><br />";
														
														$message.= "Vos identifiants sont :  <br />
														<strong>Pseudo : </strong>".$_POST["pseudo"]."<br />
														<strong>Mot de passe : </strong>(Vous le connaissez)<br />";
														
														$message.= "Nous vous contacterons bientôt pour la suite de la procédure. Nous sommes heureux de vous compter parmi nos membres et nous vous souhaitons une agréable prise en main de votre espace. 
														<br /><br />";
														$message.= "Venez vivre l’expérience de votre vie avec LIBERTIS.";
														
														$destinataire = $_POST["email"];
														$objet = "Enrégistrement sur www.clublibertis.com" ;
														$headers = 'MIME-Version: 1.0' . "\r\n";
														$headers .= 'Content-type: text/html; charset=iso-8859-
														1' . "\r\n";
														$headers .= 'De : admin@clublibertis.com'. "\r\n";
														
															
															
															
														$sms = "Bonjour <br /><br />";
														$sms .= "Mon prenom est : ".$_POST["prenom"].", et mon nom est : ".$_POST["nom"]." <br /><br />";
														$sms .= "Je viens de m'enrégister sur <a href='http://www.clublibertis.com' target='_blank'>www.clublibertis.com</a>. <br /><br />";
														
														$sms .= "Mon	Pseudo : <strong>".$_POST["pseudo"]."</strong><br />";
														
														$sms .= "Merci de bien m'autoriser à accéder à mon espace. 
														<br /><br />";
														
														$receiver = "admin@clublibertis.com";
														$sujet = "Enrégistrement sur www.clublibertis.com" ;
														$entete = 'MIME-Version: 1.0' . "\r\n";
														$entete .= 'Content-type: text/html; charset=iso-8859-
														1' . "\r\n";
														$entete .= 'De :'.$_POST["email"]. "\r\n";
														
													//Type de pièce d'identité
													if($_POST["typepieceidentite"] == "Autres")
													{
														$_POST["pieceidentite"] = $_POST["autrepiecedidentite"];
													}
													else
													{
														$_POST["pieceidentite"] = $_POST["typepieceidentite"];
													}
													
													//Autres Activités physiques
													if($_POST["actvitephysique"] == "Autres")
													{
														$_POST["typeactvitephysique"] = $_POST["autreactivite"];
													}
													else
													{
														$_POST["typeactvitephysique"] = $_POST["actvitephysique"];
													}
													
													//Autres religions
													if($_POST["religion"] == "Autres")
													{
														$_POST["typereligion"] = $_POST["autrereligion"];
													}
													else
													{
														$_POST["typereligion"] = $_POST["religion"];
													}
													
													//Autres hobby
													if($_POST["hobby"] == "Autres")
													{
														$_POST["typehobby"] = $_POST["autrehobby"];
													}
													else
													{
														$_POST["typehobby"] = $_POST["hobby"];
													}
													
													$datenaissance = $_POST["annee"]."-".$_POST["mois"]."-".$_POST["journaissance"];
													
												
                                                    
                                                    $datecodeenrege= date("Y-m-d");
                                                    $datenaissance = "2019-10-18";
                                                        
                                                        echo "la de de naissance est " .$datenaissance;
                                                  
                                                    
                                                    $anneetoday = date('Y');
                                                    
                                              
													
													$age = $anneetoday - $datenaissance;
													$passwordcrypt = password_hash($_POST["password"], PASSWORD_BCRYPT);
													
													$req = $bdd->prepare('INSERT INTO users (pseudo, motpass, email, nom, prenom, datenaissance, age, nationalite, contacttel, taille, Profession, pieceidentite, numeropiece, datedelivrance, autoritedelivrance, activitephysique, religion, hobby, photo, objet,suffixepw,datederniercode) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)');
													
													$req->execute(array($_POST["pseudo"], $passwordcrypt, $_POST["email"], $_POST["nom"], $_POST["prenom"], $datenaissance, $age, $_POST["nationalite"], $_POST["contacttel"], $_POST["taille"], $_POST["profession"], $_POST["pieceidentite"], $_POST["numpiecedidentite"], $_POST["datedelivrance"], $_POST["auteurdelivrance"], $_POST["typeactvitephysique"], $_POST["typereligion"], $_POST["typehobby"], $nom, $_POST["objectif"], password_hash("sufx", PASSWORD_BCRYPT), $datecodeenrege));
									
														if(mail($destinataire, $objet, $message, $headers) AND mail($receiver, $sujet, $sms, $entete)) 
														{
															/// Message pour espace admin 
															
															$libertis = "LIBERTIS CLUB";
															
															$objet = "Inscription sur LIBERTIS CLUB";
															
															$messagecontent = "Bonjour, je viens de m'inscrire sur www.http://clublibertis.com, veuillez m'autoriser à accéder à mon espace. <br /><br />
															Mon nom : <strong>".$_POST["nom"]."</strong><br /><br />
															Mon prenom : <strong>".$_POST["prenom"]."</strong><br /><br />
															Mon pseudo : <strong>".$_POST["pseudo"]."</strong><br /><br />. Merci d'avance";
															
															$req1 = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																											
															$req1->execute(array($objet, $messagecontent, $_POST["pseudo"], $libertis ));
															
															$req1->closeCursor();
														
														}														
															

													if($req)
													{
														/// Redirection
									
														header('Location:fininscription.php?userpseudo='.$_POST["pseudo"].'');
											
													   
													}
													else
													{
													   echo "<div class='club-echec'>Votre enrégistrement a échoué, veuillez réessayer. </div>";	   
													}
													$req->closeCursor();
												}
												else
												{
													echo "<div class='club-echec'>Un autre utilisateur utilise déjà le nom d'utilisateur que vous désirez utiliser</div>";	
												}
												
											}
											else
											{
												echo "<div class='club-echec'>L'email que vous avez entré n'est pas valide.</div>";	
											}
										}
										else
										{
											echo "<div class='club-echec'>Le mot de passe que vous avez entré contient moins de 8 caractères</div>";	
										}
										
									}
									else
									{
                                        
                                        
									   echo "<div class='club-echec'>Les mots de passe ne sont pas identiques, veuillez réessayer. </div>";	   
									}
								}
								 else
								{
									echo "<div class='club-echec'>Désolé, votre photo n'a pas été insérée dans notre base, veuillez réessayer.</div>";
								}
							}
							else
							{
								echo "<div class='club-echec'>L'extension de votre photo n'est pas correcte. Choisissez les images de type jpg, jpeg, png ou gif</div>";
							}
					}
					else
					{
						//Verification même mot de passe
						if($_POST["password"] == $_POST["confirmation"])
						{
							//On verifie si le mot de passe a 8 caracteres ou plus
							if(strlen($_POST["password"])>=8)
							{
								//On verifie si lemail est valide
								if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
								{
									$req = $bdd->query('SELECT COUNT(pseudo) AS nbrepseudo FROM users WHERE pseudo = "'.$_POST["pseudo"].'" ');
									$donnees = $req->fetch();
									$nbrepseudo = $donnees["nbrepseudo"];
									$req->closeCursor();
									
									if($nbrepseudo == 0)
									{
										
										$message = "Bonjour ".$_POST["prenom"].", ".$_POST["nom"]." <br /><br />";
										$message.= "Félicitation ! <br />
										Votre enrégistrement sur <a href='http://www.clublibertis.com' target='_blank'>www.clublibertis.com</a> a bien été pris en compte. <br /><br />";
										
										$message.= "Vos identifiants sont :  <br />
										<strong>Pseudo : </strong>".$_POST["pseudo"]."<br />
										<strong>Mot de passe : </strong>(Vous le connaissez)<br />";
										
										$message.= "Nous vous contacterons bientôt pour la suite de la procédure. Nous sommes heureux de vous compter parmi nos membres et nous vous souhaitons une agréable prise en main de votre espace. 
										<br /><br />";
										$message.= "Venez vivre l’expérience de votre vie avec LIBERTIS.";
										
										$destinataire = $_POST["email"];
										$objet = "Enrégistrement sur www.clublibertis.com" ;
										$headers = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-
										1' . "\r\n";
										$headers .= 'De : admin@clublibertis.com'. "\r\n";
										
											
											
											
										$sms = "Bonjour <br /><br />";
										$sms .= "Mon prenom est : ".$_POST["prenom"].", et mon nom est : ".$_POST["nom"]." <br /><br />";
										$sms .= "Je viens de m'enrégister sur <a href='http://www.clublibertis.com' target='_blank'>www.clublibertis.com</a>. <br /><br />";
										
										$sms .= "Mon	Pseudo : <strong>".$_POST["pseudo"]."</strong><br />";
										
										$sms .= "Merci de bien m'autoriser à accéder à mon espace. 
										<br /><br />";
										
										$receiver = "admin@clublibertis.com";
										$sujet = "Enrégistrement sur www.clublibertis.com" ;
										$entete = 'MIME-Version: 1.0' . "\r\n";
										$entete .= 'Content-type: text/html; charset=iso-8859-
										1' . "\r\n";
										$entete .= 'De :'.$_POST["email"]. "\r\n";
												
												
										if($_POST["typepieceidentite"] == "Autres")
										{
											$_POST["pieceidentite"] = $_POST["autrepiecedidentite"];
										}
										else
										{
											$_POST["pieceidentite"] = $_POST["typepieceidentite"];
										}
													
										//Autres Activités physiques
										if($_POST["actvitephysique"] == "Autres")
										{
											$_POST["typeactvitephysique"] = $_POST["autreactivite"];
										}
										else
										{
											$_POST["typeactvitephysique"] = $_POST["actvitephysique"];
										}
										
										//Autres religions
										if($_POST["religion"] == "Autres")
										{
											$_POST["typereligion"] = $_POST["autrereligion"];
										}
										else
										{
											$_POST["typereligion"] = $_POST["religion"];
										}
										
										//Autres hobby
										if($_POST["hobby"] == "Autres")
										{
											$_POST["typehobby"] = $_POST["autrehobby"];
										}
										else
										{
											$_POST["typehobby"] = $_POST["hobby"];
										}
													
										$nom = "no-avatar.jpg";
										
										$datenaissance = $_POST["annee"]."-".$_POST["mois"]."-".$_POST["journaissance"];
											
										  $datecodeenrege= date("Y-m-d");
										$anneetoday = date('Y');
										
										$age = $anneetoday - $datenaissance;
												
										$req = $bdd->prepare('INSERT INTO users (pseudo, motpass, email, nom, prenom, datenaissance, age, nationalite, contacttel, taille, Profession, pieceidentite, numeropiece, datedelivrance, autoritedelivrance, activitephysique, religion, hobby, photo, objet, datederniercode) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)');
										$req->execute(array($_POST["pseudo"], $_POST["password"], $_POST["email"], $_POST["nom"], $_POST["prenom"], $datenaissance, $age, $_POST["nationalite"], $_POST["contacttel"], $_POST["taille"], $_POST["profession"], $_POST["pieceidentite"], $_POST["numpiecedidentite"], $_POST["datedelivrance"], $_POST["auteurdelivrance"], $_POST["typeactvitephysique"], $_POST["typereligion"], $_POST["typehobby"], $nom, $_POST["objectif"], $datecodeenrege));
						
										if($req)
										{
											
											if(mail($destinataire, $objet, $message, $headers) AND mail($receiver, $sujet, $sms, $entete)) 
											{
												/// Message pour espace admin 
												
												$libertis = "LIBERTIS CLUB";
												
												$objet = "Inscription sur LIBERTIS CLUB";
												
												$messagecontent = "Bonjour, je viens de m'inscrire sur www.http://clublibertis.com, veuillez m'autoriser à accéder à mon espace. <br /><br />
												Mon nom : <strong>".$_POST["nom"]."</strong><br /><br />
												Mon prenom : <strong>".$_POST["prenom"]."</strong><br /><br />
												Mon pseudo : <strong>".$_POST["pseudo"]."</strong><br /><br />. Merci d'avance";
												
												$req1 = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																								
												$req1->execute(array($objet, $messagecontent, $_POST["pseudo"], $libertis ));
												
												$req1->closeCursor();
											
											}														
															
											header('Location:fininscription.php?userpseudo='.$_POST["pseudo"].'');
											
											?>
												<div class="club-succes">Votre enregistrement a bien été pris en compte. Votre adhésion sera examiné par l'administrateur de lIBERTIS</div>
											<?php
										}
										else
										{
										   echo "<div class='club-echec'>Votre enrégistrement a échoué, veuillez réessayer. </div>";	   
										}
										$req->closeCursor();
									}
									else
									{
										echo "<div class='club-echec'>Un autre utilisateur utilise déjà le nom d'utilisateur que vous désirez utiliser</div>";	
									}
								}
								else
								{
									echo "<div class='club-echec'>L'email que vous avez entré n'est pas valide.</div>";	
								}
							}
							else
							{
								echo "<div class='club-echec'>Le mot de passe que vous avez entré contient moins de 8 caractères</div>";	
							}
							
						}
						else
						{
						   echo "<div class='club-echec'>Les mots de passe ne sont pas identiques, veuillez réessayer. </div>";	   
						}
					}
				}
				else
				{
					echo "<div class='club-echec'>Mauvaise réponse, veuillez réessayer SVP.</div>";
				}
						
			}
			
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
	?>
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" id="contact_form" autocomplete="on"> 
                                <h1>Etape 1/2</h1> 
								
									<label class="form_col" for="pseudo">Pseudo <span style="color:red;">(*)</span> : </label><input  id="pseudo" type="text" name="pseudo" value="<?php if(isset($_POST["pseudo"])) echo $_POST["pseudo"]; ?>" required />  
									<span class="tooltip">Le pseudo ne peut pas faire moins de 6 caractères</span><br /><br />
									
									<label class="form_col" for="password">Mot de Passe <span style="color:red;">(*)</span> : </label><input  id="password" type="password" name="password" value="<?php if(isset($_POST["password"])) echo $_POST["password"]; ?>" required />  
									<span class="tooltip">Le mot de passe ne doit pas faire moins de 8 caractères</span><br /><br />
									
									<label class="form_col" for="confirmation">Confirmer mot de passe <span style="color:red;">(*)</span> : </label><input  id="confirmation" type="password" name="confirmation" required />  
									<span class="tooltip">Le mot de passe de confirmation doit être identique à celui d'origine</span><br /><br />
									
									<label class="form_col" for="email">Votre email <span style="color:red;">(*)</span> : </label><input  id="email" type="email" name="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>" required />  <br /><br />
									
									
									<label class="form_col" for="nom">Nom <span style="color:red;">(*)</span> : </label><input  id="nom" type="text" name="nom" value="<?php if(isset($_POST["nom"])) echo $_POST["nom"]; ?>" required /><br /><br />
									
									<label class="form_col" for="prenom">Prenom <span style="color:red;">(*)</span> : </label><input  id="prenom" type="text" name="prenom" value="<?php if(isset($_POST["prenom"])) echo $_POST["prenom"]; ?>" required /> <br /><br />
									
									<label class="form_col">Date de naissance : </label>
									<select name="journaissance" required>
										<option value=" ">- Jour -</option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select> 
									<select name="mois" required>
										<option value=" ">- Mois -</option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select> 
									<select name="annee" required>
										<option value=" ">- Année -</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
										<option value="1949">1949</option>
										<option value="1948">1948</option>
										<option value="1947">1947</option>
										<option value="1946">1946</option>
										<option value="1945">1945</option>
										<option value="1944">1944</option>
										<option value="1943">1943</option>
										<option value="1942">1942</option>
										<option value="1941">1941</option>
										<option value="1940">1940</option>
									</select> 
									<br /><br />
									
									<label class="form_col" for="nationalite">Nationalite <span style="color:red;">(*)</span> : </label><input id="nationalite" type="text" name="nationalite" value="<?php if(isset($_POST['nationalite'])) echo $_POST['nationalite']; ?>" required />  <br /><br />
									
									<label class="form_col" for="contacttel">Contact Tél <span style="color:red;">(*)</span> : </label><input id="contacttel" type="text" name="contacttel" value="<?php if(isset($_POST['contacttel'])) echo $_POST['contacttel']; ?>" required />  <br /><br />
									
									<label class="form_col" for="taille">Taille <span style="color:red;">(*)</span> : </label><input id="taille" type="text" name="taille" value="<?php if(isset($_POST['taille'])) echo $_POST['taille']; ?>" required />  <br /><br />
									
									<label class="form_col" for="profession">Profession <span style="color:red;">(*)</span> : </label><input id="profession" type="text" name="profession" value="<?php if(isset($_POST['profession'])) echo $_POST['profession']; ?>" required />  <br /><br />
									
									<label class="form_col">Type de pièce d'identité <span style="color:red;">(*)</span> : </label>
									<select name='typepieceidentite' id='typepieceidentite' required>
										<option value=" ">------ Aucun ------</option>
										<option value="Carte d’identité nationale">Carte d’identité nationale</option>
										<option value="Passeport">Passeport</option>
										<option value="Carte consulaire">Carte consulaire</option>
										<option value="Autres">Autres</option>
									</select>  <br /><br />
									
									<label class="form_col" for="autrepiecedidentite">Autres types de Pièce : </label><input id="autrepiecedidentite" type="text" name="autrepiecedidentite" value="<?php if(isset($_POST['autrepiecedidentite'])) echo $_POST['autrepiecedidentite']; ?>" /> <br /><br />
									
									<label class="form_col" for="numpiecedidentite">N° Pièce d'identité <span style="color:red;">(*)</span> : </label><input id="numpiecedidentite" type="text" name="numpiecedidentite" value="<?php if(isset($_POST['numpiecedidentite'])) echo $_POST['numpiecedidentite']; ?>" required />  <br /><br />
									
									<label class="form_col" for="datedelivrance">Date de délivrance (Sur Mozila Firefox : AAAA-MM-JJ) <span style="color:red;">(*)</span> : </label><input id="datedelivrance" type="date" name="datedelivrance" value="<?php if(isset($_POST['datedelivrance'])) echo $_POST['datedelivrance']; ?>" required />  <br /><br />
									
									<label class="form_col" for="auteurdelivrance">Autorité de délivrance <span style="color:red;">(*)</span> :  </label><input id="auteurdelivrance" type="text" name="auteurdelivrance" value="<?php if(isset($_POST['auteurdelivrance'])) echo $_POST['auteurdelivrance']; ?>" required/>  <br /><br />
									
									<label class="form_col" for="actvitephysique">Activité physique pratiquée <span style="color:red;">(*)</span> : </label>
									<select name='actvitephysique' id='actvitephysique' required>
										<option value=" ">------ Aucun ------</option>
										<option value="Athlétisme">Athlétisme</option>
										<option value="Baseball">Baseball</option>
										<option value="Basket ball">Basket ball</option>
										<option value="Beach soccer">Beach soccer</option>
										<option value="Beach volley">Beach volley</option>
										<option value="Boxe">Boxe</option>
										<option value="Cyclisme sur piste">Cyclisme sur piste</option>
										<option value="Cyclisme sur route">Cyclisme sur route</option>
										<option value="Danse africaine">Danse africaine</option>
										<option value="Danse classique">Danse classique</option>
										<option value="Danse jazz">Danse jazz</option>
										<option value="Danse moderne jazz">Danse moderne jazz</option>
										<option value="Danse orientale">Danse orientale</option>
										<option value="Danses latines">Danses latines</option>
										<option value="Football">Football</option>
										<option value="Football US">Football US</option>
										<option value="Golf">Golf</option>
										<option value="Gymnastique artistique">Gymnastique artistique</option>
										<option value="Gymnastique douce">Gymnastique douce</option>
										<option value="Gymnastique rythmique">Gymnastique rythmique</option>
										<option value="Handball">Handball</option>
										<option value="Judo">Judo</option>
										<option value="Karaté">Karaté</option>
										<option value="Marche athlétique">Marche athlétique</option>
										<option value="Natation">Natation</option>
										<option value="Natation synchronisée">Natation synchronisée</option>
										<option value="Patinage artistique">Patinage artistique</option>
										<option value="Pêche">Pêche</option>
										<option value="Pêche sous-marine">Pêche sous-marine</option>
										<option value="Pétanque">Pétanque</option>
										<option value="Rugby à XIII">Rugby à XIII</option>
										<option value="Rugby à XV">Rugby à XV</option>
										<option value="Salsa">Salsa</option>
										<option value="Taekwondo">Taekwondo</option>
										<option value="Tango argentin">Tango argentin</option>
										<option value="Tennis">Tennis</option>
										<option value="Tennis de table">Tennis de table</option>
										<option value="Tir à l'arc">Tir à l'arc</option>
										<option value="Voile">Voile</option>
										<option value="Volley ball">Volley ball</option>
										<option value="VTT">VTT</option>
										<option value="Yoga">Yoga</option>
										<option value="Autres">Autres</option>
									</select>  <br /><br />
									
									<label class="form_col" for="autreactivite">Précisez si autre Activité physique : </label><input id="autreactivite" type="text" name="autreactivite" value="<?php if(isset($_POST['autreactivite'])) echo $_POST['autreactivite']; ?>" /> <br /><br />
									
									<label class="form_col" for="religion">Religion <span style="color:red;">(*)</span> : </label>
									<select name="religion" id="religion" required>
										<option value=" ">------ Aucun ------</option>
										<option value="Animisme">Animisme</option>
										<option value="Bouddhisme">Bouddhisme</option>
										<option value="Christianisme">Christianisme</option>
										<option value="Hindouisme">Hindouisme</option>
										<option value="Islam">Islam</option>
										<option value="Judaïsme">Judaïsme</option>
										<option value="Autres">Autres</option>
									</select>  <br /><br />
									
									<label class="form_col" for="autrereligion">Précisez si autre réligion : </label><input id="autrereligion" type="text" name="autrereligion" value="<?php if(isset($_POST['autrereligion'])) echo $_POST['autrereligion']; ?>" /> <br /><br />
									
									<label class="form_col" for="hobby">Hobby <span style="color:red;">(*)</span> : </label>
									<select name='hobby' id='hobby' required>
										<option value=" ">------ Aucun ------</option>
										<option value="Danse">Danse</option>
										<option value="Promenade">Promenade</option>
										<option value="Lecture">Lecture</option>
										<option value="Voyage">Voyage</option>
										<option value="Excursion">Excursion</option>
										<option value="Autres">Autres</option>
									</select>  <br /><br />
									
									<label class="form_col" for="autrehobby">Précisez si autre Hobby : </label><input id="autrehobby" type="text" name="autrehobby" value="<?php if(isset($_POST['autrehobby'])) echo $_POST['autrehobby']; ?>" /> <br /><br />
									
									<label class="form_col" for="objectif">Objectifs Visés <span style="color:red;">(*)</span> : </label><textarea name="objectif" rows="5" cols="18" required ><?php if(isset($_POST['objectif'])) echo $_POST['objectif']; ?></textarea>  <br /><br />
								
									<label style="font-weight:bold;" class="form_col">Photo de profil : </label>
									<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
									<input type="file" name="fich" /> 		
									<br /> <br />
									
									<label class="form_col" for="robotsverif"> Combien font 10 + 5 (Je ne suis pas un robot) <span style="color:red;">(*)</span> :  </label><input id="robotsverif" type="text" name="robotsverif" value="<?php if(isset($_POST['robotsverif'])) echo $_POST['robotsverif']; ?>" placeholder="Tapez ici '15' " required/>  <br /><br />
									
                                <p class="login button"> 
                                    <input type="reset" value="Annuler" /> <input type="submit" name="libertisinscrir" value="Suivant" /> 
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
<script type="text/javascript" src="../script/controle_form.js"></script>

    </body>
</html>