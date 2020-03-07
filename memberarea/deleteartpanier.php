<?php
if(isset($_GET["idartpanier"]))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
			
		$req = $bdd->query('DELETE FROM panierachat WHERE id_panierachat ="'.$_GET["idartpanier"].'" ');
		$req->closeCursor(); 	
		 
		//header('Location:ajoutpanier.php');
		header('Location:'.$_GET["lapage"]);
    
    }
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}
else
{
    if(isset($_GET["lapage"])){
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		//$req = $bdd->query('DELETE FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" ');
		
        $req = $bdd->query('DELETE FROM panierachat WHERE pseudo_panierachat = "'.$_GET["lepseudo"].'" ');
		
        $req->closeCursor(); 	
		
		//header('Location:ajoutpanier.php');
		header('Location:'.$_GET["lapage"]);
	}

	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
        }
}
?>