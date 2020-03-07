<footer class="webedit-footer">
	<div class="webedit-footer-inner">
		<div class="webedit-footerhome">
			<div class="webedit-footerkpevi" style="text-align:left;">
				<a href="contact.php"> Contact </a><br />
				<a href="galerie.php"> Galerie </a><br />
				<a href="faireundon.php"> Faire un don </a><br />
				<a href="motdufondateur.php"> Mot du Fondateur</a><br />
			</div>
			
			<div class="webedit-footerkpevi1" style="text-align:left;">
				<p style="text-align:left;line-height:7px;"><img src="images/icones/benindrapeau.png" />&nbsp;<img src="images/icones/cameroundrapeau.png" />&nbsp;<img src="images/icones/congodrapeau.png" /><br />
				<img src="images/icones/cotedrapeau.png" />&nbsp;<img src="images/icones/drapeaugabon.png" />&nbsp;<img src="images/icones/drapeaughana.png" /><br />
				<img src="images/icones/drapeauguinee.png" />&nbsp;<img src="images/icones/drapeauniger.png" />&nbsp;<img src="images/icones/drapeausenegal.png" /></p>
			</div>
			
			<div class="webedit-footerkpevi2" style="text-align:left;">
				
				<?php
				if(isset($_POST['submit']))
				{
					if(!empty($_POST['email'])) /* On vérifie que la variable $_POST['email'] contient bien quelque chose, que la variable $_GET['email'] est égale à 1 et que la variable $_POST['new'] existe. */
					{
						if(isset($_POST['new']))
						{
							if (preg_match("#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i", $_POST['email'])) // On vérifie qu'on a bien rentré une adresse e-mail valide.
							{
								if($_POST['new']==0) // Si la variable $_POST['new'] est égale à 0, cela signifie que l'on veut s'inscrire.
								{
									// On définit les paramètres de l'e-mail.
									$email = $_POST['email'];
									$message = 'Pour valider votre inscription à la
									newsletter d\'Africa Touch Infos, <a
									href="http://www.africatouchinfos.org/inscrirenewsletter.php?
									tru=1&amp;email='.$email.'">cliquez ici</a>.';
									$destinataire = $email;
									$objet = "Inscription à la newsletter d'Africa Touch Infos" ;
									$headers = 'MIME-Version: 1.0' . "\r\n";
									$headers .= 'Content-type: text/html; charset=iso-8859-
									1' . "\r\n";
									$headers .= 'From: contact@africatouchinfos.org' . "\r\n";
									if ( mail($destinataire, $objet, $message, $headers)
									) // On envoie l'e-mail.
									{
									echo "Veuillez cliquer sur le lien dans votre email.";
									}
									else
									{
									echo "Il y a eu une erreur lors de l'envoi du mail.";
									}
								}
								elseif($_POST['new']==1) // Si la variable $_POST['new'] est égale à 1, cela signifie que l'on veut se désinscrire.
								{
									// On définit les paramètres de l'e-mail.
									$email = $_POST['email'];
									$message = 'Pour valider votre désinscription de la
									newsletter d\'Africa Touch Infos, <a
									href="http://www.africatouchinfos.org/desinscrirenewsletter.php?
									tru=1&amp;email='.$email.'">cliquez ici</a>.';
									$destinataire = $email;
									$objet = "Désinscription de la newsletter d'Africa Touch Infos";
									$headers = 'MIME-Version: 1.0' . "\r\n";
									$headers .= 'Content-type: text/html; charset=iso-8859-
									1' . "\r\n";
									$headers .= 'From: contact@africatouchinfos.org' . "\r\n";
									if ( mail($destinataire, $objet, $message, $headers))
									{
									echo "<span style='color:green;font-size:13px;'>Veuillez cliquer sur le lien dans votre e-mail .</span>";
									}
									else
									{
									echo "<span style='color:red;font-size:13px;'>Il y a eu une erreur lors de l'envoi du mail.</span>";
									}
								}
								else
								{
									echo "<span style='color:red;font-size:13px;'>Veuillez cochez une des cases ci-dessous!</span>";
								}
							}
							else
							{
							echo "<span style='color:red;font-size:13px;'>Vous n\'avez pas entré une adresse e-mail valide !</span>";
							}
						}
						else
						{
							echo "<span style='color:red;font-size:13px;'>Veuillez cochez une des cases ci-dessous!</span>";
						}
					}
					else
					{
					echo "<span style='color:red;font-size:13px;'>Entrez votre mail</span>";
					}
				}
				?>
					<h2 style="text-align:left;color:#000000;margin-bottom:-40px;margin-top:-20px;font-size:12px;">NEWSLETTERS</h2><br />
					<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?email=1" style="margin-bottom:20px;">
					<table>
						<tr>
							<td><input type="email" name="email" placeholder="Entrez ici votre mail" class="web_edit-footernewsletterinputemail" required/>&nbsp;&nbsp;</td>
						</tr>
						<tr>
							<td><input type="radio" name="new" value="0" class="web_edit-footernewsletterradio2" /><label>S'inscrire</label>
							<input type="radio" name="new" value="1" class="web_edit-footernewsletterradio1" /><label>Désinscrire</label></td>
						</tr>
						<tr>
						<td colspan="2"><input type="submit" value="Ok" name="submit" /></td>
						</tr>
					</table>
					</form>
			</div>
			
		</div><br />
			<p>Copyright © Février 2015 - <?php echo date("Y");?>. Africa Touch Infos. Tous droits réservés.</p><br />
    </div>
    <div class="webedit-footer-inner1">
		<div style="position:relative;display:inline-block;padding-left:40px;padding-right:40px;">
			<p class="webedit-page-footer">
					<span style="color:#FFF;">Designed by <a href="http://www.webeditsolution.com/" style="color:#E06500;" target="_blank">Web Edit</a></span>
			</p>
		</div>
    </div>
	
</footer>