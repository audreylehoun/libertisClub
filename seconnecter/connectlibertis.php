<?php
session_start();
 try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
        
		$ousername = '';
		
		if(isset($_POST["connexion"]))
		{
			
            ?> <p>Contient connexion</p> <?php
            if(isset($_POST["username"]))
			{

				$username = $_POST["username"];
				$password = $_POST["password"];
					
				 ?> <p>Contient username </p> <?php
				//Verification pseudo
                $passwordscript = password_hash($password, PASSWORD_BCRYPT);
				
               // $req1 = $bdd->query('SELECT COUNT(pseudo) AS nbreusers FROM users WHERE motpass = "'.$passwordscript.'" AND pseudo = //"'.$username.'"');
				
                $req1 = $bdd->query('SELECT COUNT(pseudo) AS nbreusers FROM users WHERE pseudo = "'.$username.'"');
				
                
                $donnees1 = $req1->fetch();
				
				$nbreusers = $donnees1["nbreusers"];
				
				$req1->closeCursor();
						
				//statut membre
				$req2 = $bdd->query('SELECT * FROM users WHERE pseudo = "'.$username.'"');
				$donnees2 = $req2->fetch();
				
				$numidentifiant = $donnees2["numidentifiant"];
				$motpass = $donnees2["motpass"];
				$statutmembreusers = $donnees2["statutmembre"];
				$suffixepwusers = $donnees2["suffixepw"];
				
				$pwfinal = $motpass."".$suffixepwusers;
				
				
				$req2->closeCursor();
					
					
					
					echo $password . ' et ' .$motpass;
					
				//if(($motpass == $password) AND ($nbreusers == 1) AND ($statutmembreusers != "Membre Non certifie") AND ($numidentifiant != "LC-1425"))
			 $longmot = strlen($password);  // on recupÃ¨re la longueur en nombre de caractÃ¨re du mot de passe
                $pwd = substr($password,0,$longmot-4); // on extrait le mot de passe (avant 4 derniers chiffres)
                 $sufix  =  substr($password,$longmot-4); // on extrait le suffixe (4 derniers chiffres)
                
                
                if((password_verify($password,$motpass)) AND ($nbreusers == 1) AND ($statutmembreusers != "Membre Non certifie") AND ($numidentifiant != "LC-1425"))
				
			
				
				
				
				{
					echo 'password correct';
				
					$_SESSION["form"] = false;
					
					header('Location:../pageleurre.php');
					
				}
				//elseif(($password == $pwfinal) AND ($statutmembreusers != "Membre Non certifie") AND ($numidentifiant != "LC-1425"))
				
             
        
                
                elseif((password_verify($pwd,$motpass)) AND (password_verify($sufix,$suffixepwusers)) AND ($statutmembreusers != "Membre Non certifie") AND ($numidentifiant != "LC-1425"))
								
						{
                            
                       
$datederniercode = new DateTime($donnees2["datederniercode"]); // new Date('2010-07-11 20:11:19'); // Date dans le passÃ©
$datetnow = new DateTime(date("Y-m-d")); //new Date(date("Y-m-d H:i:s"));   // Date du jour (2018-09-07 16:10:21)
$interval = $datederniercode->diff($datetnow);
$nbremois= $interval->format('%m');
    
  echo '$datetnow = ' . $datetnow ->Format('d-m-Y') . '  $datederniercode = ' . $datederniercode->Format('d-m-Y') . '  $nbremois = ' . $nbremois;                          
                            
                            
                            
   if($nbremois >= 2){ 
    
       
       
       
       
       
       
       
       
       
       
       
       //  generer le code
       function motDePasse($longueur=4) 
		{ 
			// par défaut, on affiche un mot de passe de 5 caractères
			// chaine de caractères qui sera mis dans le désordre:
			$Chaine = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // 62 caractères au total
			// on mélange la chaine avec la fonction str_shuffle(), propre à PHP
			$Chaine = str_shuffle($Chaine);
			// ensuite on coupe à la longueur voulue avec la fonction substr(), propre à PHP aussi
			$Chaine = substr($Chaine,0,$longueur);
			// ensuite on retourne notre chaine aléatoire de "longueur" caractères:
			return $Chaine;
		}
		
		$suffixepassword = motDePasse();

			
       
       
       // Envoyer le code par mail et par sms
       $lemail = "Bonjour Mr/Mme " . $donnees2["nom"] . " " . $donnees2["prenom"] . " Pour des raisons de sécurité, nous avons procédé à la modification de votre code secret de connexion à LIBERTIS CLUB. Votre nouveau code est : <strong> " . $suffixepassword . "  </strong>. Merci.";
  

   
        
        ini_set( 'display_errors', 1);

$from = "Libertis";
//$to= $donnees2["email"];
$to ="odreylehoun@gmail.com";
$subject = "LIBERTIS INFO ";
$message =  $lemail;

$headers = "Content-Type: text/html; charset=\"iso-8859-1\"";

$envoimail = mail($to,$subject,$message, $headers);

//echo "L'email a été envoyé.";

        $statutmailenvoye="";
if($envoimail){
    $statutmailenvoye = "ok";
    echo "L'email a été envoyé.";
}else{
    $statutmailenvoye="no";
    echo "L'email n'a pas été envoyé.";
}
       
      ?>
      
       <form   action="index.php" method="post" id="form">
           <input type="hidden" id="changercode" name="cd" value="ok"/>
           <input type="hidden" id="pseudo" name="us" value="<?php echo $donnees2["pseudo"]; ?>"/>
           <input type="hidden" id="lecode" name="lecode" value="<?php echo $suffixepassword; ?>"/>
           <input type="submit" id="btenvoyercode" name="envoyercode" value=""/>
         
        </form>
           
         <script> document.getElementById('form').submit();</script>  
           
           
       <?php
       
       // ouvrir page de connexion pour demander a l'abonné de renseigner le code reçu pour se connecter
       
       //header('Location:../seconnecter/index.php?cd=ok&us='.$donnees2["pseudo"]);
       
       
       
}else{

                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
							echo 'suffix et pwd correct';
							
							
					$_SESSION["form"] = false;
					
					$req = $bdd->query('SELECT * FROM users WHERE pseudo = "'.$username.'" ');
					$donnees = $req->fetch();
					
					$_SESSION["numidentifiant"] = $donnees["numidentifiant"]; 
					$_SESSION["pseudousers"] = $donnees["pseudo"];
					$_SESSION["passwordusers"] = $donnees["motpass"];
					$_SESSION["suffixepw"] = $donnees["suffixepw"]; 
					$_SESSION["codetransaction"] = $donnees["codetransaction"]; 
					$_SESSION["email"] = $donnees["email"];
					$_SESSION["nomusers"] = $donnees["nom"];
					$_SESSION["prenomusers"] = $donnees["prenom"];
					$_SESSION["ageusers"] = $donnees["age"]; 
					$_SESSION["nationaliteusers"] = $donnees["nationalite"];
					$_SESSION["contacttelusers"] = $donnees["contacttel"];
					$_SESSION["tailleusers"] = $donnees["taille"]; 
					$_SESSION["Profession"] = $donnees["Profession"];
					$_SESSION["pieceidentite"] = $donnees["pieceidentite"];
					$_SESSION["numeropiece"] = $donnees["numeropiece"];
					$_SESSION["datedelivrance"] = $donnees["datedelivrance"]; 
					$_SESSION["autoritedelivrance"] = $donnees["autoritedelivrance"];
					$_SESSION["activitephysique"] = $donnees["activitephysique"];
					$_SESSION["religion"] = $donnees["religion"];
					$_SESSION["hobby"] = $donnees["hobby"]; 
					$_SESSION["statutmembre"] = $donnees["statutmembre"];
					$_SESSION["photo"] = $donnees["photo"];
					$_SESSION["affichephoto"] = $donnees["affichephoto"];
					$_SESSION["objet"] = $donnees["objet"]; 
					
					$req->closeCursor();
				 global  $lapageencours ;
$lapageencours = 'pagedetest';
					//header('Location:../memberarea/index.php');
                            header('Location:../memberarea/menuproduitsetservice.php');
					
				
                        
                        
                        
                        }}
				//elseif(($motpass == $password) AND ($nbreusers == 1) AND (isset($_SESSION["pageretour"])))
				elseif((password_verify($password,$motpass)) AND ($nbreusers == 1) AND (isset($_SESSION["pageretour"])))
				
               
                {
					$_SESSION["usermodifregister"] = $username;
					
					header('Location:'.$_SESSION["pageretour"]);
				}
				else
				{
					
					$_SESSION["form"] = true;
					//$_SESSION["message"] = "Mauvaise combinaison, veuillez rÃ©essayer.";
                    
                   $longmot = strlen($password);  // on recupÃ¨re la longueur en nombre de caractÃ¨re du mot de passe
                $pwd = substr($password,0,$longmot-4); // on extrait le mot de passe (avant 4 derniers chiffres)
                 $sufix  =  substr($password,0,$longmot-4); // on extrait le suffixe (4 derniers chiffres)
               
                    
                    $_SESSION["message"] = $pwd . ' et ' .$sufix;
					
					header('Location:index.php');
				}
			}
				
		}
        
        if(isset($_POST["envoyernewcode"]))
		{
            
            
            
            
            
            
            
            
            foreach ( $_POST as $post => $val )  {            
        $$post = $val;
                echo $$post;
    }
   
            
           $username = $_POST["usernamec"];
				
				$newcode = 	$_POST["newcode"]; 
             
                        
  echo '$username = ' . $username . '  $newcode = ' . $newcode . '  lecode = ' . $_POST["lecode"];                
            
            
            
			if(isset($_POST["usernamec"]))
			{

				$username = $_POST["usernamec"];
			
				$newcode = 	$_POST["newcode"];
             
          
                
                if($_POST["newcode"] == $_POST["lecode"]){
                 
                $date = getdate();
                    
                    
                    $req = $bdd->prepare('UPDATE users SET suffixepw = :suffixepw, datederniercode = :datederniercode WHERE pseudo  = :lepseudo');
													$req->execute(array(
													'suffixepw' => password_hash($_POST["lecode"], PASSWORD_BCRYPT)     ,
													'datederniercode' => date('Y-m-d'),
													'lepseudo' => $username
													
                                                    
                                                    ));
													 
													$req->closeCursor();
												
                 header('Location:../memberarea/index.php');
                 
                 
             }else{
               
             }
        
            }}
		
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
?>
















