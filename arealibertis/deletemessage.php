<?php
if(isset($_GET['iddelete']))
{
							 try
								{
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	                                    include("../config/config.php");
										$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
										
										
						                $req = $bdd->query('DELETE FROM messages WHERE idmessages ="'.$_GET['iddelete'].'" ');
									    $req->closeCursor();   
										
										header('Location:message.php');
										
								}
								catch(Exception $e)
								{
									die('Erreur : '.$e->getMessage());
								}		    
}
?>