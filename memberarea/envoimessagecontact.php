<?php
include("verif.php");

echo 'veut demarrer';
if(isset($_POST["pseudo"]) && isset($_POST["message"]) && isset($_POST["objet"])  )
{
 echo 'les parametres sont envoyés';
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
						



                                                    $libertis = "LIBERTIS CLUB";
													
												


                                                    // envoi du mail à l'administrateur//
          $reqk = $bdd->query("SELECT * from users where pseudo = '" .$_POST["pseudo"]. "'");
													while($donnees_user = $reqk->fetch()){
													$nom =$donnees_user['nom'];
													$prenom= $donnees_user['prenom'];
                                                   
                                                    
                                                    }
													 $reqk->closeCursor();
        
        
 $lemail = 'L abonné ' . $nom . $prenom . ' a envoyé un message à Libertis. Veuillez trouver ci dessous son message.'.'\n' . ' OBJET DU MESSAGE : '. $_POST["objet"] .'\n' .'\n' .'Message: ' .$_POST["message"] . '.';
     
   
        
        ini_set( 'display_errors', 1);

$from = "Libertis";
$to ="odreylehoun@gmail.com";
$subject = "Message d'un abonné LIBERTIS";
$message =  $lemail;
$headers = "From:" . $from;
$envoimail = mail($to,$subject,$message, $headers);
//echo "L'email a été envoyé.";

        $statutmailenvoye="";
if($envoimail){
    $statutmailenvoye = "ok";
}else{
    $statutmailenvoye="no";
}
        
        
        
        
      header('Location:nouscontacter.php?stmsg='+$statutmailenvoye);  
    }
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}else{
    echo 'parametres manquant';
}

?>