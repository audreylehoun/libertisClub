<?php
session_start();

//---Deconnexion
if(isset($_GET["deconnect"]))
{
	try
	{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	include("../config/config.php");
	$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
	$req = $bdd->prepare('UPDATE users SET online_user = :onlineuser WHERE pseudo = :pseudouser');
	$req->execute(array(
	'onlineuser' => "no-online",
	'pseudouser' => $_SESSION["pseudousers"]
	));
	
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
		
	unset($_SESSION["porteouvert"]);
	unset($_SESSION["pseudousers"]);
	unset($_SESSION["passwordusers"]);
	unset($_SESSION["suffixepw"]);
	unset($_SESSION["email"]);
	unset($_SESSION["nomusers"]);
	unset($_SESSION["prenomusers"]);
	unset($_SESSION["ageusers"]);
	unset($_SESSION["nationaliteusers"]);
	unset($_SESSION["contacttelusers"]);
	unset($_SESSION["tailleusers"]);
	unset($_SESSION["Profession"]);
	unset($_SESSION["pieceidentite"]);
	unset($_SESSION["numeropiece"]);
	unset($_SESSION["datedelivrance"]);
	unset($_SESSION["autoritedelivrance"]);
	unset($_SESSION["activitephysique"]);
	unset($_SESSION["religion"]);
	unset($_SESSION["hobby"]);
	unset($_SESSION["statutmembre"]);
	unset($_SESSION["photo"]);
	unset($_SESSION["affichephoto"]);
	unset($_SESSION["objet"]);
	
	unset($_SESSION["pwfinal"]);
	unset($_SESSION["motpass"]);
	unset($_SESSION["password"]);
	unset($_SESSION["statutmembreusers"]);
	
}
//----Verification login
if(!isset($_SESSION["pseudousers"]))
{
   if(!isset($_SESSION["passwordusers"]))
	{
	   header("Location:../seconnecter/");
	}
}
?>