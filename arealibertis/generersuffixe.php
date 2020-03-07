<?php
session_start();
if(isset($_GET["idsuffixe"]))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include_once("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		function motDePasse($longueur=4) 
		{ 
			// par défaut, on affiche un mot de passe de 5 caractères
			// chaine de caractères qui sera mis dans le désordre:
			$Chaine = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // 62 caractères au total
			// on mélange la chaine avec la fonction str_shuffle(), propre à PHP
			$Chaine = str_shuffle($Chaine);
			// ensuite on coupe à la longueur voulue avec la fonction substr(), propre à PHP aussi
			$Chaine = substr($Chaine,0,$longueur);
			// ensuite on retourne notre chaine aléatoire de "longueur" caractères:
			return $Chaine;
		}
		
		$suffixepassword = motDePasse();

			
		$req = $bdd->prepare('UPDATE users SET suffixepw = :suffixe_pw WHERE id_users = :idusers');
		$req->execute(array(
		'suffixe_pw' => $suffixepassword,
		'idusers' => $_GET["idsuffixe"]
		));
		
		$req->closeCursor();
		
		// Compte rendu et journal
		
		$req2 = $bdd->query('SELECT pseudo,nom,prenom,email FROM users WHERE id_users ="'.$_GET["idsuffixe"].'" ');
		while($donnees = $req2->fetch())
		{
			$pseudo = $donnees["pseudo"];
			$nom = $donnees["nom"];
			$prenom = $donnees["prenom"];
			$email = $donnees["email"];
		}
		$req2->closeCursor();
		
		$sms = "Génération de suffixe à l'utilisateur : <strong>".$pseudo."</strong><br />";
		$sms.= "Nom de l'utilisateur : <strong>".$nom."</strong><br />";
		$sms.= "Prenom de l'utilisateur : <strong>".$prenom."</strong><br />";
		$sms.= "Email de l'utilisateur : <strong>".$email."</strong><br />";
		
		$receiver = "admin@clublibertis.com";
		$sujet =  "Génération de suffixe à l'utilisateur : ".$pseudo."<br />";
		$entete = 'MIME-Version: 1.0' . "\r\n";
		$entete .= 'Content-type: text/html; charset=iso-8859-
		1' . "\r\n";
		$entete .= 'from : admin@clublibertis.com'. "\r\n";
		
		mail($receiver, $sujet, $sms, $entete);
		
		$activite = "Génération de suffixe à l'utilisateur : <strong>".$pseudo."</strong>.";
		
		$req3 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
		$req3->execute(array($_SESSION["user_name"], $activite));
		
		$req3->closeCursor();	
		// FIN Compte rendu et journal			

					
		header('Location:gestioninternaute.php');
		
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
}
else
{
	header('Location:gestioninternaute.php');
}
?>