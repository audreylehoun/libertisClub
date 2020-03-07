<?php
include("verif/verif.php");


if(isset($_POST["pseudo"]) && isset($_POST["message"]) && isset($_POST["objet"])  )
{
 
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
						



                                                    $libertis = "LIBERTIS CLUB";
													
												

        
        
   
   
 $lemail = "L'abonné " . $nom . " ". $prenom . " a envoyé un message à Libertis. Veuillez trouver ci dessous son message.<br/> <strong> OBJET DU MESSAGE :  </strong>"  . $_POST["objet"] . " <br/> " . "<strong> Message: </strong> "  .$_POST["message"] . ".";
            
        
        
        ini_set( 'display_errors', 1);

$from = "Libertis";
$to ="odreylehoun@gmail.com";
$subject = "Message d'un abonné LIBERTIS";
$message =  $lemail;
$headers = "From:" . $from;
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

$envoimail = mail($to,$subject,$message, $headers);
//echo "L'email a été envoyé.";

        $statutmailenvoye="";
if($envoimail){
    $statutmailenvoye = "ok";
}else{
    $statutmailenvoye="no";
}
        
        
        
        
      header('Location:nouscontacter.php?stmsg='.$statutmailenvoye);  
    }
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}

?>