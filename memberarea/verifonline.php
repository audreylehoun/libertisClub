<?php
include("verif.php");
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		?>
		<table>
			<?php
				
					$req = $bdd->query('SELECT pseudo,prenom,nom,online_user,photo,affichephoto FROM users WHERE pseudo NOT IN ( SELECT pseudo FROM users WHERE pseudo = "'.$_SESSION["pseudousers"].'") AND statutmembre != "Membre Non certifie" ');
					while($donnees = $req->fetch())
					{
						if($donnees["affichephoto"] == "oui")
						{
						?>
						<tr>
							<td style="border:0px;">
							<?php
							if($donnees["online_user"] == "online")
							{
								?>
								<img src="images/button-green-connect.png" />
								<?php
							}
							
							if($donnees["online_user"] == "no-online")
							{
								?>
								<img src="images/button-red-disconnect.png" />
								<?php
							}
							?>
							<img src="../images/usermbrelibertis/<?php echo $donnees["photo"];?>" style="width:50px;border-radius:60px;" />
							
							</td>
							<td style="border:0px;padding-top:25px;font-size:16px;"><a href="discussion.php?iduserdis=<?php echo $donnees["pseudo"];?>"><?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?></a></td>
						</tr>
						<?php
						}
						else
						{
						?>
						<tr>
							<td style="border:0px;">
							<?php
							if($donnees["online_user"] == "online")
							{
								?>
								<img src="images/button-green-connect.png" />
								<?php
							}
							
							if($donnees["online_user"] == "no-online")
							{
								?>
								<img src="images/button-red-disconnect.png" />
								<?php
							}
							?>
							<img src="../images/no-avatar.jpg" style="width:50px;border-radius:60px;" /></td>
							<td style="border:0px;padding-top:25px;font-size:16px;"><a href="discussion.php?iduserdis=<?php echo $donnees["pseudo"];?>"><?php echo $donnees["prenom"];?> <?php echo $donnees["nom"];?></a></td>
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

											