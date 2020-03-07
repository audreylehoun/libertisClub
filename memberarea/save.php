<?php
include("verif.php");
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		
		$tasktitle = $_POST['tasktitle'];
		
		$req = $bdd->prepare('INSERT INTO discussion (paseudoexp, pseudodest, message, datediscu) VALUES(?, ?, ?, NOW())');
		$req->execute(array($_SESSION["pseudousers"], $_SESSION["idusertchat"], $tasktitle));
		
		$req->closeCursor();																	
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
?>