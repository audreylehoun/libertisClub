<?php
include("verif/verif.php");


if(isset($_POST["idpartenaire"]) && isset($_POST["datedemandee"]) && isset($_POST["heuredemandee"]))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
												
        
		$req = $bdd->prepare('insert into reservationpartenaire (id_partenaire,date_reservation,date_demandee,heuredemandee,statut,pseudouser) values(?,NOW(),?,?,?,?)');
          	$req->execute(array($_POST["idpartenaire"], $_POST["datedemandee"], $_POST["heuredemandee"], 'En Attente',$_SESSION["pseudousers"]));
												
												  
                                                    if($req)
												{
                                                    
                                                    ?>

<script>alert('Réservation effectuée avec succès!')</script>
<?php
																									 
													$req->closeCursor();
												
													$libertis = "LIBERTIS CLUB";
													
													$objet = "LIBERTIS - Réservation d'un partenaire.";
													
                                                    $comments = 'L abonné ' . $_SESSION["pseudousers"] . ' a envoyé une demande de réservervation du partenaire N° ' .$_POST["idpartenaire"] . ' pour le '. $_POST["datedemandee"] . ' à ' .$_POST["heuredemandee"];
                                                    
                                                    
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
                                                    
                                                    
      	
		 
		header('Location:produitspartenaires.php?tranage=tout');
		//header('Location:modale.php');
    
         ?>

<script>alert('Réservation effectuée avec succès!')</script>
       <?php 
        
    }
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}

?>