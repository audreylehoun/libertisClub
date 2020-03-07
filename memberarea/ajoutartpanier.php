<?php
if(isset($_POST["idaddartpanier"]))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include_once("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
			
		$req = $bdd->query('SELECT libelle_produitprestation,prix_produitprestation FROM produitprestation WHERE id_produitprestation = "'.$_POST["idaddartpanier"].'" ');
		$donnees = $req->fetch();
		
		$libelleproduitprestation = $donnees["libelle_produitprestation"];
		
		$prixproduitprestation = $donnees["prix_produitprestation"];
		
		$req->closeCursor();
				
		$montanttotal = $prixproduitprestation * $_POST["qteproduit"];
		
		$req = $bdd->prepare('INSERT INTO panierachat (pseudo_panierachat, libelle_panierachat, prixunit_panierachat, qte_panierachat, montant_panierachat, dateachat_panierachat) VALUES(?, ?, ?, ?, ?, NOW())');
		$req->execute(array($_POST["pseudoaddartpanier"], $libelleproduitprestation, $prixproduitprestation, $_POST["qteproduit"], $montanttotal));

		$req->closeCursor();
		
		header('Location:'.$_POST["idpageretour"]);
		
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
}
?>