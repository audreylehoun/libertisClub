<?php
include("verif/verif.php");


if(isset($_POST["idevenement"]) && isset($_POST["radio"]))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		 $bdd->exec('SET NAMES utf8');
												
        
		$req = $bdd->prepare('insert into participantevenement (pseudouser,idevenement,inviteunami,statut) values(?,?,?,?)');
          	$req->execute(array($_SESSION["pseudousers"], $_POST["idevenement"], $_POST["radio"],'En Attente'));
												
												  
                                                    if($req)
												{
                                                    
                                                    ?>

<script>alert('Réservation effectuée avec succès!')</script>
<?php
																									 
													$req->closeCursor();
												
													$libertis = "LIBERTIS CLUB";
													
													$objet = "LIBERTIS - Notification de participation à un évenement.";
													
                                                    $comments = 'L abonné ' . $_SESSION["pseudousers"] . ' désire participer à l\'évenement N° ' .$_POST["idevenement"]. 'Il ne viendra pas avec d\'invité ce jour la';
                                                    
                                                    
														$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																									
													$req->execute(array($objet, $comments, $_SESSION["pseudousers"], $libertis ));
									
													$req->closeCursor();
													
													/*echo "<div class='club-succes'>Opération réussie, votre demande est en attente de validation. Nous vous tenons informé dans le plus vite possible.</div>.";
												}
												else
												{
													echo "<div class='club-echec'>L'opération a échoué. Veuillez réessayer SVP.</div><br /><br />";*/
												}
												$req->closeCursor();
                                                    
                                                    
      	
		 
		header('Location:produitevenement.php?sus=k');
		//header('Location:modale.php');
    
         ?>

<script>alert('Réservation effectuée avec succès!')</script>
       <?php 
        
    }
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}else{
      ?>

<script>alert('Echoué!')</script>
       <?php 
    echo $_POST["idevenement"];
        echo $_POST["radio"];
}

?>