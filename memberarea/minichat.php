<?php
include("verif.php");
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		?>
		<table style="width:90%;">
		<?php
		
		$req = $bdd->query('SELECT paseudoexp, pseudodest, message, DATE_FORMAT(datediscu, "%d/%m/%Y à %Hh%imin%ss") AS datediscufr FROM discussion WHERE paseudoexp = "'.$_SESSION["pseudousers"].'" AND pseudodest = "'.$_SESSION["idusertchat"].'" OR paseudoexp = "'.$_SESSION["idusertchat"].'" AND pseudodest = "'.$_SESSION["pseudousers"].'" ORDER BY iddiscussion ASC LIMIT 0,100 ');
		while($donnees = $req->fetch())
		{
			if($donnees["paseudoexp"] == $_SESSION["pseudousers"])
			{
			?>
			<tr>
				<td style="width:20%;padding-right:15px;border:0px solid gray;"> </td>
				<td style="padding:15px;border:0px solid gray;"><blockquote style="width:70%;"><span style="color:red;font-size:10px;"><?php echo $donnees["datediscufr"];?></span><br />
				<span style="font-style:normal;"><?php echo $donnees["message"];?></span></blockquote></td>
			</tr>
			<?php
			}
			else
			{
			?>
			<tr>
				<td style="padding:15px;border:0px solid gray;"><blockquote style="width:70%;"><span style="color:red;font-size:10px;"><?php echo $donnees["datediscufr"];?></span><br />
				<span style="font-style:normal;"><?php echo $donnees["message"];?></span></blockquote></td>
				<td style="width:20%;padding:15px;border:0px solid gray;"> </td>
			</tr>
			<?php
			}
		}
		$req->closeCursor();
			
		?>
		</table>
		<?php
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
?>