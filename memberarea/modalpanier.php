<!-- Modal -->

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
     function sendData()
{
  var name = document.getElementById("name");
  var age = document.getElementById("age");
  $.ajax({
    type: 'post',
    url: 'insert.php',
    data: {
      name:name,
      age:age
    },
    success: function (response) {
      $('#res').html("Vos données seront sauvegardées");
    }
  });
    
  return false;
}
    </script>


</head>


<style>
input[type=number]::-webkit-inner-spin-button {
  opacity: 1;
}
.continuer:hover{
	background-color:#E5F1FB;
}
	
.leinput {
  position: absolute;
  left: 10px;
  top: 10px;
  width: 50px;
  height: 20px;
  padding: 0px;
  font-size: 14pt;
  border: solid 0.5px #000;
  z-index: 1;
}

.spinner-button {
  position: absolute;
  cursor: default;
  z-index: 2;
  background-color: #ccc;
  width: 14.5px;
  text-align: center;
  margin: 0px;
  pointer-events: none;
  height: 10px;
  line-height: 10px;
}

#inc-button {
  left: 46px;
  top: 10.5px;
}

#dec-button {
  left: 46px;
  top: 20.5px;
}
</style>

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header" style="height:80px;">
        <h3 class="modal-title" id="exampleModalScrollableTitle">Panier</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
          <span style="margin-top:10px;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);

									if(isset($_POST["acheterart"]))
									{
										if($_POST["codetransact"] == $_SESSION["codetransaction"])
										{
											$req = $bdd->query('SELECT soldetransaction FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction DESC LIMIT 0,1 ');
											$donnees = $req->fetch();
											
											$oldsoldetransaction = $donnees["soldetransaction"];
											
											$req->closeCursor();
														
											if($oldsoldetransaction >= $_POST["prixachat"])
											{		
												$motifs =  "Paiement de(s) produit / prestation(s)";
														
												$comments = $_POST["motifachat"];
												
												$debit = 0;
												
												$newsolde = ($oldsoldetransaction + $debit) - $_POST["prixachat"];
												
												$req = $bdd->prepare('INSERT INTO transaction (pseudotransaction,motifstransaction,debittransaction,credittransaction,soldetransaction,auteurtransaction,commentaire,datetransaction) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())');									
												$req->execute(array($_SESSION["pseudousers"], $motifs, $debit, $_POST["prixachat"], $newsolde, $_SESSION["pseudousers"], $comments));
												
												if($req)
												{
												
													$req = $bdd->prepare('UPDATE panierachat SET statutachat_panierachat = :statutachatpanierachat, statutlivrai_panierachat = :statutlivraipanierachat WHERE id_panierachat = :idpanierachat');
													$req->execute(array(
													'statutachatpanierachat' => "Paye",
													'statutlivraipanierachat' => "En cours",
													'idpanierachat' => $_POST["idpanierachat"]
													));
													 
													$req->closeCursor();
												
													$libertis = "LIBERTIS CLUB";
													
													$objet = "Paiement de(s) produit / prestation(s)";
													
													$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																									
													$req->execute(array($objet, $comments, $_SESSION["pseudousers"], $libertis ));
									
													$req->closeCursor();
													
													echo "<div class='club-succes'>Opération réussie, votre commande est en attente de livraison</div>.";
												}
												else
												{
													echo "<div class='club-echec'>L'opération a échoué. Veuillez réessayer SVP.</div><br /><br />";
												}
												$req->closeCursor();
											}
											else
											{
												echo "<div class='club-echec'>Désolé, vous n'avez pas assez de montant pour effectuer cet achat, veuillez vous approvionner. </div><br /><br />";
											}
											
										}
										else
										{
											echo "<div class='club-echec'>Le code de transaction est incorrect. </div><br /><br />";
										}
									}
									
									
									if(isset($_POST["achetertotal"]))
									{
										if($_POST["codetransact"] == $_SESSION["codetransaction"])
										{
											$req = $bdd->query('SELECT soldetransaction FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction DESC LIMIT 0,1 ');
											$donnees = $req->fetch();
											
											$oldsoldetransaction = $donnees["soldetransaction"];
											
											$req->closeCursor();
														
											if($oldsoldetransaction >= $_POST["montanttotal"])
											{		
												$motifs =  "Paiement de(s) produit / prestation(s)";
														
												$comments = $_POST["motifs"];
												
												$debit = 0;
												
												$newsolde = ($oldsoldetransaction + $debit) - $_POST["montanttotal"];
												
												$req = $bdd->prepare('INSERT INTO transaction (pseudotransaction,motifstransaction,debittransaction,credittransaction,soldetransaction,auteurtransaction,commentaire,datetransaction) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())');									
												$req->execute(array($_SESSION["pseudousers"], $motifs, $debit, $_POST["montanttotal"], $newsolde, $_SESSION["pseudousers"], $comments));
												
												if($req)
												{
												
													$req = $bdd->prepare('UPDATE panierachat SET statutachat_panierachat = :statutachatpanierachat, statutlivrai_panierachat = :statutlivraipanierachat WHERE pseudo_panierachat = :pseudopanierachat');
													$req->execute(array(
													'statutachatpanierachat' => "Paye",
													'statutlivraipanierachat' => "En cours",
													'pseudopanierachat' => $_SESSION["pseudousers"]
													));
													 
													$req->closeCursor();
												
													$libertis = "LIBERTIS CLUB";
													
													$objet = "Paiement de(s) produit / prestation(s)";
													
													$req = $bdd->prepare('INSERT INTO messages (titremessage,contenumessage,expediteurmessage,destinatairemessage,datemessages) VALUES(?, ?, ?, ?, NOW())');
																									
													$req->execute(array($objet, $comments, $_SESSION["pseudousers"], $libertis ));
									
													$req->closeCursor();
													
													echo "<div class='club-succes'>Opération réussie, votre commande est en attente de livraison</div>.";
												    
												
												}
												else
												{
													echo "<div class='club-echec'>L'opération a échoué. Veuillez réessayer SVP.</div><br /><br />";
												}
												$req->closeCursor();
											}
											else
											{
												echo "<div class='club-echec'>Désolé, vous n'avez pas assez de montant pour effectuer cet achat, veuillez vous approvionner. </div><br /><br />";
											}
											
										}
										else
										{
											echo "<div class='club-echec'>Le code de transaction est incorrect. </div><br /><br />";
										}
									}
									
								?>
											
        
        
        <h3 style="color:#01A5FE; ">Payer pour les articles de votre panier</h3><hr />
													<p style="font-style:italic;font-size:13px;margin-top:-5px;">Remplissez les formulaires suivants pour payer vos produits sélectionnés</p><br />
													
												<!-- Produits & Prestations -->
												<?php
													if($_SESSION["codetransaction"] != "0000")
													{
														?>
														
                                               
                                                <table class="table table-striped">
                                                <thead style="backgroud=black;">
    <tr>
        <th> N° </th>
        <th>Nom Produit</th>
        <th>Prix unitaire</th>
        <th>Qte</th>
        <th>Montant</th>
        <th>Validation</th>
    </tr>
</thead>
<tbody>
                                                
                                                
                                                
                                              <!--  <table style="width: 100%;">  -->
														<?php
														$libellemotifs = "Commande de :<br /><ul>";
														
														$motiflibel = "Commande de ";
														
													/*	$req = $bdd->query('SELECT id_panierachat,pseudo_panierachat,libelle_panierachat,prixunit_panierachat,qte_panierachat,montant_panierachat,statutachat_panierachat,image_produitprestation FROM panierachat, produitprestation  WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														$n =1 .'" AND produitprestation.;*/
                                                        
                                                        	
                                                                                                
                                                                                                    
                                                        
                                                        		$req = $bdd->query('SELECT id_panierachat,pseudo_panierachat,libelle_panierachat,prixunit_panierachat,qte_panierachat,montant_panierachat,statutachat_panierachat FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');                                                                 
														
                                                        
                                                        $n =1;
                                                        
                                                        
                                                        
                                                        
                                                        $numero = 1;
                                                        while($donnees = $req->fetch())
														{
															$libellemotifs.= "<li><strong>".$donnees["qte_panierachat"]."</strong> ".$donnees["libelle_panierachat"]." à ".$donnees["prixunit_panierachat"]." F l'unité; </li>";
															
															$motiflibel.= "<span style='font-size:15px;color: red;'><strong>".$donnees["qte_panierachat"]."</strong></span> ".$donnees["libelle_panierachat"]." de <strong>".$donnees["prixunit_panierachat"]."</strong> F <span style='font-size:15px;'>Total</span> :".$donnees["montant_panierachat"];
														
    
    $reqq = $bdd->query('SELECT image_produitprestation from produitprestation  WHERE libelle_produitprestation =  "'.$donnees["libelle_panierachat"].'"');
  
  while($donneess = $reqq->fetch()){
    $images= $donneess["image_produitprestation"];
    
    }
													
    
    ?>
    
    
     <tr>
    
															<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																
                                                               <!-- 
                                                                <span style="font-size:15px;color: red;"><strong><?php echo $donnees["qte_panierachat"];?></strong></span> <?php echo $donnees["libelle_panierachat"];?> de <strong><?php echo $donnees["prixunit_panierachat"];?></strong> F. &nbsp; <span style="font-size:15px;">Total</span> : <strong><?php echo $donnees["montant_panierachat"];?></strong> F
																<br /><br />
																
																<input type="text" name="codetransact" placeholder="Code de transaction" />
																
																<input type="hidden" value="<?php echo $motiflibel;?>" name="motifachat" />
																
																<input type="hidden" value="<?php echo $donnees["prixunit_panierachat"];?>" name="prixachat" />
																
																<input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" name="idpanierachat" />
																
																<br /><br />
																<input type="submit" name="acheterart" value="Payer" class="club-button" />
																<span style="font-size:22px;"><a href="deleteartpanier.php?idartpanier=<?php echo $donnees["id_panierachat"];?>">Annuler </a></span>
															-->
    
                                           
        <td style="font-size:15px; padding: 13px;">
          <!-- <img width="100" height="100" src="../images/imgesprdtsves/<?php echo $images;?>" class="imageprod" alt=""/>   -->
             
             <?php echo $numero ; ?>
         </td>
        <td style="font-size:15px; padding: 13px;">
            
            <?php echo $donnees["libelle_panierachat"]; ?>
                                                        
         </td>
        <td style="font-size:15px; padding: 13px;">
            
            <?php echo $donnees["prixunit_panierachat"];?>
          
       </td>
         
         <td style="font-size:15px;">
            <input  type="number" value="<?php echo $donnees["qte_panierachat"]; ?>" style="width:40px; border: none;" min="0" max="99" name="quantite" required>
         

                                                        
         </td>
        <td style="font-size:15px; padding: 13px;">
            <?php echo  $donnees["montant_panierachat"];?> F
            
          
       </td>
         
                                                 <td>
                                                   <!--  <input style="width:90%; height:40px;" type="text" name="codetransact" placeholder="Code de transaction"<span> /> 
													-->			
																<input type="hidden" value="<?php echo $motiflibel;?>" name="motifachat" />
																
																<input type="hidden" value="<?php echo $donnees["prixunit_panierachat"];?>" name="prixachat" />
																
																<input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" name="idpanierachat" />
																
															
<?php
 $adresse = $_SERVER['PHP_SELF'];
    $i = 0;
    foreach($_GET as $cle => $valeur){
        $adresse .= ($i == 0 ? '?' : '&').$cle.($valeur ? '='.$valeur : '');
        $i++;
    }
?>
																
																
																<input style="margin-left:10px; display:none; " type="submit" name="acheterart" value="Payer" class="club-button" />
																<span style="font-size:22px;"><a href="deleteartpanier.php?idartpanier=<?php echo $donnees["id_panierachat"];?>&lapage=<?php echo $adresse;?>">Annuler </a></span>
            
          
       </td>
                                                                
           
    </form>
			                                                     
    </tr>
   
														<?php $numero++;
														}
														
														$libellemotifs.="</ul>";
														
														$req->closeCursor();
														?>
														</tbody></table>
                                                
                                                
        
        
       
         <!--  <p style="background:black; height:70%; width: 100%; font-size: 1.5em; color:white"> Récapitulatif des commandes</p> -->
                           
														<?php
														
														$req = $bdd->query('SELECT SUM(montant_panierachat) AS montanttotal FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														while($donnees = $req->fetch())
														{
															$montanttotal = $donnees["montanttotal"];
														}
														$req->closeCursor();
														
														?>
														
														<?php
 $adresse = $_SERVER['PHP_SELF'];
    $i = 0;
    foreach($_GET as $cle => $valeur){
        $adresse .= ($i == 0 ? '?' : '&').$cle.($valeur ? '='.$valeur : '');
        $i++;
    }
?>
														
														
														
														
															<!--<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
																
															<form method="post" action="<?php echo $adresse; ?>">
																
                                                               <!-- <div style="font-size:1em; padding:5px;">
                                                             
                                                                
                                                                </div>-->
																
																<div class="row" style="
                                         
                                background-color:#C1C1C1;   margin-top:5px;     ">
            <div class="col-md-4 col-lg-5" style="
                                   
                                height:60px; padding:15px;margin-left:15px; margin-top:16px;">
                <p style="font-size:1em; "> Montant Total : <strong style="color:blue;"><?php echo $montanttotal;?> F CFA </strong></p>
                
            </div>
            <div class="col-md-4 col-lg-6" style="
                                   
                                height:60px; padding:15px; margin-top:5px; margin-left:5px;">
               <input type="submit" name="achetertotal" value="Tout Payer" class="club-button" />
                <input type="text" name="codetransact" placeholder="Code de transaction" required />
																
            </div>
            	                                              
            
                
                
                
                
            
            </div>
			
		
			<br/><br/>
			
	<?php
 $adresse = $_SERVER['PHP_SELF'];
    $i = 0;
    foreach($_GET as $cle => $valeur){
        $adresse .= ($i == 0 ? '?' : '&').$cle.($valeur ? '='.$valeur : '');
        $i++;
    }
?>
						
<div class="row" style="float:right; width:520px;">
					<div class="col-md-5 col-lg-5 continuer" style="background:with;border:2px solid #E5F1FB; padding:5px; border-radius:10px;text-align:center;height:45px;">	
<p  style="font-size:18px;font-style:italic;text-decoration:none;border: 1px soild blue;"><a href="document.getElementById('lelien').value" onclick="window.open(document.getElementById('lelien').value)">Continuer mes achats</a></p>
</div>
		 	<div class="col-md-5 col-lg-5">	
		 <span style="font-size:22px; "><a href="deleteartpanier.php?lepseudo=<?php echo $_SESSION["pseudousers"];?>&lapage=<?php echo $adresse ;?>">Tout Annuler </a></span>

</div>
 </div>
					
				
				
				
																											
																
														
																
																<input type="hidden" value="<?php echo $montanttotal;?>" name="montanttotal" />
																
																<input type="hidden" value="<?php echo $libellemotifs;?>" name="motifs" />
																
																<?php
/* Fonction renvoyant l'adresse de la page actuelle */

 $adresse = $_SERVER['PHP_SELF'];
    $i = 0;
    foreach($_GET as $cle => $valeur){
        $adresse .= ($i == 0 ? '?' : '&').$cle.($valeur ? '='.$valeur : '');
        $i++;
    }






?>
																
																
																
																
																
																
																
															      
                                                                 <!--   <input style="width:350px;" id="lelien" type="text" name="achetertotal" value="<?php echo $adresse ?>" class="club-button" />
																 -->
																
																 <input style="width:450px;" id="lelien" type="hidden" name="achetertotal" value="Tout Payer" class="club-button" />
																
																<input type="hidden" value="<?php echo $adresse;?>" name="lapage" />
																
																<br />
																<hr/>
                                                              
                                                               
                                                                    
                                                                    </form>
                                                          

<div style="display:none;">
    	
     <input type="number" name="age" id="nbre">
     <input type="button" name="submit_form" value="Submit" onclick='
	  var xhReq = new XMLHttpRequest();
 xhReq.open("GET", "deleteartpanier.php?idartpanier=1", false);

	 
	 '>
  </div>




														  
														<?php
													}
													else
													{
													?>
														<div class='club-echec'>Veuillez changer votre code de transaction avant toute transaction. </div><br /><br />
													<?php
													}
												?>	
												<!-- Fin Produits & Prestations -->
						
<script type="text/javascript" src="../script/controle_form.js"></script>
<?php
if($_SESSION["codetransaction"] == "0000")
{
?>
	<script>
	alert("Votre code de transaction par défaut est \"0000\". Par mesure de sécurité, nous vous prions de bien vouloir le changer par un autre code à 4 chiffres dans la rubrique \"Porte feuille\" sous peine de voir votre compte bloqué. Pour cela, entrez le code actuel (\"0000\") pour ouvrir votre porte feuille. Merci ");
	</script>
<?php
}
?>


	            
        
        </div>
      <div class="modal-footer">
        <button type="button" style="color:#FF7800;" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </div>
    </div>
  </div>
</div>