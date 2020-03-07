<?php
include("verif.php");
?>

<!DOCTYPE html>
	<html lang="fr">
	<head>
	<meta charset="UTF-8">
	 <title>Ajouter au panier | LIBERTIS CLUB</title>
	
        <link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script 	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script 	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
    
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	  
        
        
        <script type="text/javascript">
	                $(document).ready(function(){
	                               $("#monModal").modal('show');
	                });
	</script>
      
        
    



<style>.club-content .club-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .club-post .club-layout-cell {border:none !important; padding:0 !important; }
.ie6 .club-post .club-layout-cell {border:none !important; padding:0 !important; }

	.form_col {
  display: inline-block;
  margin-right: 15px;
  padding: 3px 0px;
  width: 140px;
  min-height: 1px;
  text-align: right;
}
input {
  padding: 2px;
  border: 1px solid #CCC;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  outline: none; 
}
input:focus {
  border-color: rgba(82, 168, 236, 0.75);
  -moz-box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
  box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
}
.correct {
  border-color: rgba(68, 191, 68, 0.75);
}
.correct:focus {
  border-color: rgba(68, 191, 68, 0.75);
  -moz-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
  box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
}
.incorrect {
  border-color: rgba(191, 68, 68, 0.75);
}
.incorrect:focus {
  border-color: rgba(191, 68, 68, 0.75);
  -moz-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
  box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
}
.tooltip {
  display: inline-block;
  margin-left: 20px;
  padding: 2px 4px;
  border: 1px solid #555;
  background-color: #CCC;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

    
    
    
    // TEBLEAU CSS
    
    
    body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 10%;
  }
  .col-2 {
    flex-basis: 40%;
  }
  .col-3 {
    flex-basis: 25%;
  }
  .col-4 {
    flex-basis: 25%;
  }
  
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
    
    
    
    
    
    
    
    
    
</style>
        
        
        
        
        
	</head>
	<body>
	
        <div id="monModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" 	data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Confirmation</h4>
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
											
        
        
        <h3>Payer pour les articles de votre panier</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour payer vos produits sélectionnés</p><br />
													
												<!-- Produits & Prestations -->
												<?php
													if($_SESSION["codetransaction"] != "0000")
													{
														?>
														
                                               
                                                <table class="table table-striped">
                                                <thead>
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
    
                                           
        <td>
           <img width="100" height="100" src="../images/imgesprdtsves/<?php echo $images;?>" class="imageprod" alt=""/> 
                                                                
         </td>
        <td>
            
            <?php echo $donnees["libelle_panierachat"]; ?>
                                                        
         </td>
        <td>
            <?php echo$donnees["prixunit_panierachat"];?>
            
          
       </td>
         
                                                                <td>
            
            <?php echo $donnees["qte_panierachat"]; ?>
                                                        
         </td>
        <td>
            <?php echo  $donnees["montant_panierachat"];?> F
            
          
       </td>
         
                                                 <td>
          <input type="text" name="codetransact" placeholder="Code de transaction" />
																
																<input type="hidden" value="<?php echo $motiflibel;?>" name="motifachat" />
																
																<input type="hidden" value="<?php echo $donnees["prixunit_panierachat"];?>" name="prixachat" />
																
																<input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" name="idpanierachat" />
																
																<br /><br />
																<input type="submit" name="acheterart" value="Payer" class="club-button" />
																<span style="font-size:22px;"><a href="deleteartpanier.php?idartpanier=<?php echo $donnees["id_panierachat"];?>">Annuler </a></span>
            
          
       </td>
                                                                
           
    </form>
			                                                     
    </tr>
   


    
    
    
    
    
    											

														<?php
														}
														
														$libellemotifs.="</ul>";
														
														$req->closeCursor();
														?>
														</tbody></table>
                                                
                                                
        
        
        
        
       <?php  } ?>
        
        
        
        
        
        
        
        
        
                </div>
         </div>
         </div>
         </div>
        
        
        
        <?php 
        $m = 0;
        
        
        if($m = 0){
        $m = 1;
        }else{
        ?>
        
        
        <div id="monModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" 	data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Confirmation</h4>
	            </div>
	            <div class="modal-body">
	           
                    
                    
                    
                    
                    
                    
            
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
	
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
<div id="club-main" style="margin-top:-20px;">
<!-- Début entête -->
<?php
	//include("structure/header.php");
?>
<!-- Fin entête -->

<div class="club-sheet clearfix">
            <div class="club-layout-wrapper">
                <div class="club-content-layout">
                    <div class="club-content-layout-row">
                        
                        <div class="club-layout-cell club-content">
							<article class="club-post club-article">
							
							
							
								<div class="club-postcontent club-postcontent-0 clearfix">
								
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 100%;" >
											
									
								<?php
								try
								{
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
											</div>
										</div>
									</div>
								</div>	
							
							
								<div class="club-postcontent club-postcontent-0 clearfix">
								
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											
											
								
							
								<div class="club-postcontent club-postcontent-0 clearfix">
									<div class="club-content-layout">
										<div class="club-content-layout-row">
											<div class="club-layout-cell layout-item-0" style="width: 33%;" >
												
												<!-- Rubrique transaction -->
												
												<!-- Fin Rubrique transaction -->
												
												<br /><br />
												
												<!-- Rubrique règlement -->
											
												<!-- Fin règlement -->
												
											</div>
											<div class="club-layout-cell layout-item-0" style="width: 66%;" >
												<h3>Payer pour les articles de votre panier</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour payer vos produits sélectionnés</p><br />
													
												<!-- Produits & Prestations -->
												<?php
													if($_SESSION["codetransaction"] != "0000")
													{
														?>
														
                                               
                                                <table class="table table-striped">
                                                <thead>
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
														
														$req = $bdd->query('SELECT id_panierachat,pseudo_panierachat,libelle_panierachat,prixunit_panierachat,qte_panierachat,montant_panierachat,statutachat_panierachat FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														$n =1;
                                                        while($donnees = $req->fetch())
														{
															$libellemotifs.= "<li><strong>".$donnees["qte_panierachat"]."</strong> ".$donnees["libelle_panierachat"]." à ".$donnees["prixunit_panierachat"]." F l'unité; </li>";
															
															$motiflibel.= "<span style='font-size:15px;color: red;'><strong>".$donnees["qte_panierachat"]."</strong></span> ".$donnees["libelle_panierachat"]." de <strong>".$donnees["prixunit_panierachat"]."</strong> F <span style='font-size:15px;'>Total</span> :".$donnees["montant_panierachat"];
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
    
                                           
        <td>
            1
                                                                
         </td>
        <td>
            
            <?php echo $donnees["libelle_panierachat"]; ?>
                                                        
         </td>
        <td>
            <?php echo$donnees["prixunit_panierachat"];?>
            
          
       </td>
         
                                                                <td>
            
            <?php echo $donnees["qte_panierachat"]; ?>
                                                        
         </td>
        <td>
            <?php echo  $donnees["montant_panierachat"];?> F
            
          
       </td>
         
                                                 <td>
          <input type="text" name="codetransact" placeholder="Code de transaction" />
																
																<input type="hidden" value="<?php echo $motiflibel;?>" name="motifachat" />
																
																<input type="hidden" value="<?php echo $donnees["prixunit_panierachat"];?>" name="prixachat" />
																
																<input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" name="idpanierachat" />
																
																<br /><br />
																<input type="submit" name="acheterart" value="Payer" class="club-button" />
																<span style="font-size:22px;"><a href="deleteartpanier.php?idartpanier=<?php echo $donnees["id_panierachat"];?>">Annuler </a></span>
            
          
       </td>
                                                                
           
    </form>
			                                                     
    </tr>
   


    
    
    
    
    
    											

														<?php
														}
														
														$libellemotifs.="</ul>";
														
														$req->closeCursor();
														?>
														</tbody></table>
                                                
                                                
                                                              <table class="table table-bordered ">

                                                   
      
                                                
                                                
                                                </table>
													
                                                
       <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																
																
                  
                                             
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <?php
														
														$req = $bdd->query('SELECT SUM(montant_panierachat) AS montanttotal FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														while($donnees = $req->fetch())
														{
															$montanttotal = $donnees["montanttotal"];
														}
														$req->closeCursor();
														
														?><br /><br />
															
                                                                
																
																
                                                                
                                                                <span style="font-size:15px;">Montant Total : <span> <span style="font-size:22px;color:green;"><?php echo $montanttotal;?></span> F CFA
																<br /><br />
																
																<input type="text" name="codetransact" placeholder="Code de transaction" />
																
																<input type="hidden" value="<?php echo $montanttotal;?>" name="montanttotal" />
																
																<input type="hidden" value="<?php echo $libellemotifs;?>" name="motifs" />
																
																<input type="submit" name="achetertotal" value="Tout Payer" class="club-button" />
																
																<span style="font-size:22px;"><a href="deleteartpanier.php">Tout Annuler </a></span>
																<br /><br />
																<p style="font-size:18px;font-style:italic;text-decoration:none;"><a href="payerproduits.php">Continuer mes achats</a></p>
															
                                                                    
                 
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    </form>
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
												
												<br />
											</div>
									</div>
								</div>	
								<br />
									
								<?php
								}
								catch(Exception $e)
								{
									die('Erreur : '.$e->getMessage());
								}
								?>
							</article>
						</div>
						
                    </div>
                </div>
            </div>
			
			
			
    </div>
<footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
  </div>
</footer>

</div>
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
	                <button type="button" class="btn btn-default" 	data-dismiss="modal">Fermer</button>
	                <button type="button" class="btn 	btn-primary">Sauvegarder</button>
	            </div>
	        </div>
	    </div>
	</div>
        <?php } ?>
	</body>
	</html>