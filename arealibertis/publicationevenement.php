<?php
include("verif/verif.php");


if(isset($_POST["dateevenement"]))
{
 
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
						



                                                    $libertis = "LIBERTIS CLUB";
													
													$objet = "LIBERTIS - Un géant évenement est programmé.";
													
                                                    $comments = ' Un évenement est programmé et vient d être publié pour se tenir le  ' .  $_POST["dateevenement"];
                                                    
                                                    
														$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																									
													$req->execute(array($objet, $comments, $_SESSION["pseudousers"], $libertis ));
									
													$req->closeCursor();


                                                    // envoi du mail à l'utilisateur//
          $reqk = $bdd->query("SELECT * from users");
													while($donnees_user = $reqk->fetch()){
													$nomprenomuser = $donnees_user['nom'] . ' '. $donnees_user['prenom'];
                                                        $mail =$donnees_user['email'];
													$telephone= $donnees_user['contacttel'];
                                                   
                                                    
                                            $lemail  = 'Bonjour Mr (Mme) ' .$nomprenomuser.  ' Un géant évenement est programmé sur LIBERTIS pour le ' .$_POST["dateevenement"].  ' et pourrait bien vous interesser. Veuillez vous connecter sur LIBERTIS pour plus de détails. Cordialement.';
     
 
        
        
        ini_set( 'display_errors', 1);

$from = "Libertis";
$to =$mail;
$subject = "Information";
$message =  $lemail;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
//echo "L'email a été envoyé.";
        
                                                    
 $lesms = 'Bonjour Mr (Mme) ' .$nomprenomuser. ' Un service vous a été accordé sur Libertis. Faites y un tonr pour plus de détails.';      
        
                                                           
                                                    
                                                    
                                                    
                                                    
                                                    }
													 $reqk->closeCursor();
        
        
header('Location:evenementgestion.php');

        
    }
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}

?>