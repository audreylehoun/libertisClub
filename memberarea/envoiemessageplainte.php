<?php
include("verif.php");

echo 'veut demarrer';
if(isset($_POST["pseudo"]) && isset($_POST["message"]) && isset($_POST["objet"])  )
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



$lemail = "L'abonné " . $nom . " " . $prenom . " a adressé une plainte à Libertis. Veuillez trouver ci dessous sa plainte.<br/> <br/><br/><strong> OBJET DU MESSAGE :  </strong>"  . $_POST["objet"] . " <br/><br/><br/> " . "<strong> Message: </strong> "  .$_POST["message"] . ".";
  

   
        
        ini_set( 'display_errors', 1);

$from = "Libertis";
$to ="odreylehoun@gmail.com, odreylebon@gmail.com";
$subject = "Message d'un abonné LIBERTIS";
$message =  $lemail;

$headers = "Content-Type: text/html; charset=\"iso-8859-1\"";

$envoimail = mail($to,$subject,$message, $headers);

//echo "L'email a été envoyé.";

        $statutmailenvoye="";
if($envoimail){
    $statutmailenvoye = "ok";
}else{
    $statutmailenvoye="no";
}
        
    header('Location:formuleruneplainte.php?stmsg='.$statutmailenvoye);                
        
 




	    
}else{
    echo 'parametres manquant';
}

?>