<?php
if(isset($_GET['bloqueruser']))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		
		$req = $bdd->prepare('UPDATE users SET password = :pass_word WHERE id_users = :idusers');
		$req->execute(array(
		'pass_word' => "libertisblocage",
		'idusers' => $_GET["bloqueruser"]
		));
		
		$req->closeCursor();
		
		header('Location:gestioninternaute.php');
			
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}
?>