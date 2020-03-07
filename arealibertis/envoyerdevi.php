<?php
include("verif/verif.php");


if(isset($_POST["pseudo"]) && isset($_POST["nomuser"]) && isset($_POST["prenompartenaire"]) && isset($_POST["dateaccordee"]) && isset($_POST["montant"]) )
{
 
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
						



                                                    $libertis = "LIBERTIS CLUB";
													
													$objet = "LIBERTIS - Envoi de dévi pour réservation d'un partenaire à un abonné.";
													
                                                    $comments = 'L abonné ' . $_POST["nomuser"] . ' a envoyé une demande de réservervation du partenaire  ' .$_POST["prenompartenaire"] . ' pour le '. $_POST["dateaccordee"]. '. Un dévis de : ' . $_POST["montant"]. ' lui a été envoyé. ' ;
                                                    
                                                    
														$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																									
													$req->execute(array($objet, $comments, $_SESSION["pseudousers"], $libertis ));
									
													$req->closeCursor();


                                                    // envoi du mail à l'utilisateur//
          $reqk = $bdd->query("SELECT * from users where pseudo = '" .$_POST["pseudo"]. "'");
													while($donnees_user = $reqk->fetch()){
													$mail =$donnees_user['email'];
													$telephone= $donnees_user['contacttel'];
                                                    }
													 $reqk->closeCursor();
        
        


 $lemail  = 'Bonjour Mr (Mme)' .$_POST["nomuser"]. 'Un service que vous avez demandé sur Libertis vous a été accordé pour le '. $_POST["dateaccordee"]. ' Veuillez vous connecter pour plus de détails. Cordialement.';
     
 $lesms = 'Bonjour Mr (Mme)' .$_POST["nomuser"]. ' Un service vous a été accordé sur Libertis. Faites y un tonr pour plus de détails.';      
        
        
        
        
        ini_set( 'display_errors', 1);

$from = "Libertis";
$to ="odreylehoun@gmail.com";
$subject = "Information";
$message =  $lemail;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
//echo "L'email a été envoyé.";


      header('Location:lesreservationpartenaires.php');  
    }
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}

?>