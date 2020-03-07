<?php
if(isset($_GET["iddelete"]))
{
							 try
								{
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	                                    include("../config/config.php");
										$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
										
										if($_GET["pagesend"] == "messagerecu.php")
										{
											$req = $bdd->prepare('UPDATE messages SET statutdestinactifs = :statut_destinactifs WHERE idmessages = :id_messages');
											$req->execute(array(
											'statut_destinactifs' => "inactif",
											'id_messages' => $_GET["iddelete"]
											));
											 
											
											header('Location:'.$_GET["pagesend"]);
										}
										
										if($_GET["pagesend"] == "messagesend.php")
										{
											$req = $bdd->prepare('UPDATE messages SET statutexpedinactifs = :statut_expedinactifs WHERE idmessages = :id_messages');
											$req->execute(array(
											'statut_expedinactifs' => "inactif",
											'id_messages' => $_GET["iddelete"]
											));
											 
											
											header('Location:'.$_GET["pagesend"]);
										}
										
										
								}
								catch(Exception $e)
								{
									die('Erreur : '.$e->getMessage());
								}		    
}
?>