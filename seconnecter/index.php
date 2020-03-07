<?php
session_start();
if(isset($_SESSION["pseudousers"]))
{
		unset($_SESSION["porteouvert"]);
		unset($_SESSION["pseudousers"]);
		unset($_SESSION["passwordusers"]);
		unset($_SESSION["suffixepw"]);
		unset($_SESSION["email"]);
		unset($_SESSION["nomusers"]);
		unset($_SESSION["prenomusers"]);
		unset($_SESSION["ageusers"]);
		unset($_SESSION["nationaliteusers"]);
		unset($_SESSION["contacttelusers"]);
		unset($_SESSION["tailleusers"]);
		unset($_SESSION["Profession"]);
		unset($_SESSION["pieceidentite"]);
		unset($_SESSION["numeropiece"]);
		unset($_SESSION["datedelivrance"]);
		unset($_SESSION["autoritedelivrance"]);
		unset($_SESSION["activitephysique"]);
		unset($_SESSION["religion"]);
		unset($_SESSION["hobby"]);
		unset($_SESSION["statutmembre"]);
		unset($_SESSION["photo"]);
		unset($_SESSION["affichephoto"]);
		unset($_SESSION["objet"]);
		
		unset($_SESSION["pwfinal"]);
		unset($_SESSION["motpass"]);
		unset($_SESSION["password"]);
		unset($_SESSION["statutmembreusers"]);
	
		$_SESSION["form"] = true;
		$_SESSION["message"] = 'Vous avez été bien déconnectés.';
}
?>
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
        <title>Identifiez-vous</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Identifiez sur LIBERTIS CLUB" />
		
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        
        
          <link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script 	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script 	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
    
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />
      
      
   
    <script>
		function aff_code_panel(action){ //la fonction JS
			if (action == "oui") //on regarde si tu veux afficher ou cacher le input
			{
                alert("action = oui");
				document.getElementById("usercode").style.display="block"; //Si oui, on l'affiche
			}
			else
			{
				document.getElementById("usercode").style.visibility="hidden"; //Si non, on le cache
			} 
		return true;
		}
	</script>
        
    
    
    </head>
    <body>
        <div class="container">
            <header>
                <h1>LIBERTIS CLUB</h1>
				<nav class="codrops-demos">
                    <span>Cliquer sur <strong>"S'inscrire"</strong>strong> pour vous joindre à nous</span>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                         
                               
                                
                                <?php

								if(isset($_SESSION["form"]) AND $_SESSION["form"] == true)
								{
									if(isset($_SESSION["message"]))
									{
										echo '<div class="club-echec">'.$_SESSION["message"].'</div><br /><br />';
									}				
								}
								
								if(isset($_SESSION["form"]))
								{
									unset($_SESSION["form"]);
									unset($_SESSION["message"]);
								}
								?>
                            
                            <?php
								if(!isset($_POST["cd"]) )
                        {
							
								?>
                            
						<p>code non changé</p>		
       <form method="post" action="connectlibertis.php" autocomplete="on"> 
                                <h1>Se Connecter</h1> 
							
                                <p> 
                                    
                             <label for="username" class="uname" data-icon="u" > Votre pseudo </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Votre pseudo"/>
                         
           
                                </p>
                                <p id="panelpassword"> 
                                    <label for="password" class="youpasswd" data-icon="p" id="labelpassword"> Votre mot de passe </label >
                                    <input id="password" name="password" required="required" type="password" placeholder="Ex. X8df!90EO" /> 
                                   
          
           </p>
           
            
           
           
           
                             <!--   <div id="codepanel" style="border: 1px solid red;">
                                <p style="padding: 5%;"> 
                                    <label for="usercode" class="ucode" data-icon="u" > Veuillez taper votre nouveau code </label>
                                    <input id="usercode" name="ucode" required="required" type="text" placeholder="Votre nouveau code" style="width: 50%;"  />
                                <span> <input type="submit" name="code" value="Envoyer" style="border: 1px solid red;" /> </span></p>
                                
                                
                                </div>-->
                                
                                
                                
                                <p class="login button" id="btconnexion"> 
                                    <input type="submit" name="connexion" value="Se connecter" /> 
								</p>
                                <p class="change_link">
									Pas encore membre ?
									<a href="inscription.php" class="to_register">S'inscrire</a>
								</p>
                            </form>
							<?php } else{ ?>
                            <p>code  changé</p>	
                            <form method="post" action="connectlibertis.php" autocomplete="on"> 
                                <h1>Se Connecter</h1> 
							
                                <p> 
                                    
                             <label for="username2" class="uname" data-icon="u" > Votre pseudo </label>
                                    <input id="username2" name="usernamec" required="required" type="text" placeholder="Votre pseudo" value="<?php echo $_POST['us'];?>"/>
                         
           
                                </p>
                                
           
            <div id="lespancode" style="padding:10px; width:102%; background:red;">
           <p id="panelnewcode"> 
                                    <label for="newcode" class="youpasswd" data-icon="p" id="labelnewcode" style="font-size:1.3em; color:black;"> <strong>Veuillez entrer votre nouveau code</strong> </label>
                                    <input id="newcode" name="newcode" required="required" type="password" placeholder="Ex. X8df!90EO" style="width:90%;" value="<?php echo $_POST['lecode'];?>"/> 
                                   
                        <?php if(isset($_POST['cd'])){ // le code d'acces a été changé , cd = k  pour dire code changé
                      
                    ?>         
                 <input type="hidden" id="lecode" name="lecode" value="<?php echo $_POST['lecode']; ?>"/>
               
               <input type="hidden" id="pseudouser" name="pseudouser" value="<?php echo $_POST['us']; ?>"/>
               
               <?php } ?>
                
                </p>
                               
                                <p class="login button" id="btenvoyercode"> 
                                    <input type="submit" name="envoyernewcode" value="Envoyer" /> 
								</p>
           </div>
           
           
           
                             <!--   <div id="codepanel" style="border: 1px solid red;">
                                <p style="padding: 5%;"> 
                                    <label for="usercode" class="ucode" data-icon="u" > Veuillez taper votre nouveau code </label>
                                    <input id="usercode" name="ucode" required="required" type="text" placeholder="Votre nouveau code" style="width: 50%;"  />
                                <span> <input type="submit" name="code" value="Envoyer" style="border: 1px solid red;" /> </span></p>
                                
                                
                                </div>-->
                                
                                
                                
                                
                                <p class="change_link">
									Pas encore membre ?
									<a href="inscription.php" class="to_register">S'inscrire</a>
								</p>
                            </form>
                            <?php } ?>
                            
                            
                         
							
                        </div>
                        
                    </div>
                </div>  
            </section>
                    
                    <?php if(isset($_POST['cd'])){ // le code d'acces a été changé , cd = k  pour dire code changé
                      
                    
                    ?>
            <input id="nameduuser" type="hidden" value="<?php echo $_POST['us']; ?>"/>
                  <!--<script>document.getElementById('panelnewcode').style.display = 'block';</script> 
                    <script>document.getElementById('btenvoyercode').style.display = 'block';</script>  
                     <script>document.getElementById('panelpassword').style.display = 'none';</script> 
                     <script>document.getElementById('btconnexion').style.display = 'none';</script> --> 
                      <script>document.getElementById('pseudouser').disabled = true;</script> 
                  
                   
           <script> document.getElementById('lespancode').style.backgroundColor = '#EF3F3F';  </script>
            <script> document.getElementById('username').value = document.getElementById('nameduuser').value; </script>
                     
                     
                    <script> document.getElementById('password').value = document.getElementById('nameduuser').value;  </script>
                 
            
            
            
                     
                    
                  
                    
                    <?php
                           
                       
    
                        }else{ ?>
                    
                  <!--  <script>document.getElementById('panelnewcode').style.display = 'none';</script> 
                     <script>document.getElementById('btconnexion').style.display = 'block';</script>  
                            
                    <script>document.getElementById('panelpassword').style.display = 'block';</script> 
                     <script>document.getElementById('btenvoyercode').style.display = 'none';</script>  -->
             <script>document.getElementById('username').disabled = false;
               document.getElementById('newcode').value = "1234";
                 </script>  
            
                    
                    
                    
                                  <?php 
    
                        }
                    ?>
                 
                           
                           
                           
                       
                 

                    
          
        </div>
            
    </body>
</html>