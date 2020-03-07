<?php
session_start();
//----Verification login
if(!isset($_SESSION["user_name"]))
{
   if(!isset($_SESSION["pass"]))
	{
	   header("Location:login.php");
	}
}

if(isset($_GET["ididentifiant"]))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include_once("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		function motDePasse1($longueur=3) 
		{ 
			// par défaut, on affiche un mot de passe de 4 caractères
			// chaine de caractères qui sera mis dans le désordre:
			$Chaine = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
			// on mélange la chaine avec la fonction str_shuffle(), propre à PHP
			$Chaine = str_shuffle($Chaine);
			// ensuite on coupe à la longueur voulue avec la fonction substr(), propre à PHP aussi
			$Chaine = substr($Chaine,0,$longueur);
			// ensuite on retourne notre chaine aléatoire de "longueur" caractères:
			return $Chaine;
		}
		
		function motDePasse2($longueur=3) 
		{ 
			// par défaut, on affiche un mot de passe de 4 caractères
			// chaine de caractères qui sera mis dans le désordre:
			$Chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
			// on mélange la chaine avec la fonction str_shuffle(), propre à PHP
			$Chaine = str_shuffle($Chaine);
			// ensuite on coupe à la longueur voulue avec la fonction substr(), propre à PHP aussi
			$Chaine = substr($Chaine,0,$longueur);
			// ensuite on retourne notre chaine aléatoire de "longueur" caractères:
			return $Chaine;
		}
		
		$numidentifiant1 = motDePasse1();
		
		$numidentifiant2 = motDePasse2();
		
		$vraiidentifiant = "LC-".$numidentifiant1."-".$numidentifiant2;	
		
		$req = $bdd->prepare('UPDATE users SET numidentifiant = :num_identifiant WHERE id_users = :idusers');
		$req->execute(array(
		'num_identifiant' => $vraiidentifiant,
		'idusers' => $_GET["ididentifiant"]
		));
		
		$req->closeCursor();
		
		
		$req = $bdd->query('SELECT pseudo,email,nom,prenom FROM users WHERE id_users = "'.$_GET["ididentifiant"].'" ');
		$donnees = $req->fetch();
		
		$pseudo = $donnees["pseudo"];
		$nom = $donnees["nom"];
		$prenom = $donnees["prenom"];
		$email = $donnees["email"];
		
		$req->closeCursor();								
		
		$message = "Bonjour ".$prenom.", ".$nom." <br /><br />";
		$message.= "Votre identifiant sur <a href='http://www.clublibertis.com' target='_blank'>www.clublibertis.com</a> est : ".$vraiidentifiant.". <br /><br />";
		
		$message.= "Vos identifiants sont :  <br />
		<strong>Pseudo : </strong>".$pseudo."<br />
		<strong>Mot de passe : </strong>(Vous le connaissez)<br />";
		
		$message.= "Venez vivre l’expérience de votre vie avec LIBERTIS.";
		
		$destinataire = $email;
		$objet = "Numéro d'identification sur www.clublibertis.com" ;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-
		1' . "\r\n";
		$headers .= 'De : admin@clublibertis.com'. "\r\n";
		
		mail($destinataire, $objet, $message, $headers);
				

		// Compte rendu et journal
		
		$req2 = $bdd->query('SELECT pseudo,nom,prenom,email FROM users WHERE id_users ="'.$_GET["ididentifiant"].'" ');
		while($donnees = $req2->fetch())
		{
			$pseudo = $donnees["pseudo"];
			$nom = $donnees["nom"];
			$prenom = $donnees["prenom"];
			$email = $donnees["email"];
		}
		$req2->closeCursor();
		
		$sms = "Génération d'identifiant à l'utilisateur : <strong>".$pseudo."</strong><br />";
		$sms.= "Nom de l'utilisateur : <strong>".$nom."</strong><br />";
		$sms.= "Prenom de l'utilisateur : <strong>".$prenom."</strong><br />";
		$sms.= "Email de l'utilisateur : <strong>".$email."</strong><br />";
		
		$receiver = "admin@clublibertis.com";
		$sujet =  "Génération d'identifiant à l'utilisateur : ".$pseudo."<br />";
		$entete = 'MIME-Version: 1.0' . "\r\n";
		$entete .= 'Content-type: text/html; charset=iso-8859-
		1' . "\r\n";
		$entete .= 'from : admin@clublibertis.com'. "\r\n";
		
		mail($receiver, $sujet, $sms, $entete);
		
		$activite = "Génération d'identifiant à l'utilisateur : <strong>".$pseudo."</strong><br />";
		
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