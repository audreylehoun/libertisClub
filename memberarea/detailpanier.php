<?php
include("verif.php");

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
<!-- 

Conçu par :

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8" />
    <title>Extra | LIBERTIS CLUB</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen" />
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>

     <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mettre la description">
        <meta name="keywords" content="">

        <!--  Refonte acceuill   -->

        <!-- Styles -->
        <link href="./WOUMIAH_files/app.min.css" rel="stylesheet">
        <link href="./WOUMIAH_files/custom.css" rel="stylesheet">

        <!--  Fin Refonte acceuill   -->

        <!--  START AJOUTER POUR LA REFONTE  -->
        <link href="./WOUMIAH_files/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./WOUMIAH_files/dataTables.bootstrap.min.css">
        <link href="./WOUMIAH_files/components.css" id="style_components" rel="stylesheet" type="text/css">
        <link href="./WOUMIAH_files/bootstrap-social.css" rel="stylesheet" type="text/css">

        <!-- BEGIN THEME STYLES -->

        <script src="./WOUMIAH_files/jquery.min.js.téléchargement" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="./WOUMIAH_files/allobesoin.css">
      <link rel="stylesheet" type="text/css" href="./WOUMIAH_files/tjobers.css">
       
        <!-- END THEME STYLES -->
        <link rel="stylesheet" href="./WOUMIAH_files/demo.css">
        <!-- FIN LES SCRIPTS AJOUTER POUR LA REFONTE    -->
    <link href="./WOUMIAH_files/LineIcons.min.css" rel="stylesheet">
        <!-- Style css personnaliser  MEF  -->
        <link href="./WOUMIAH_files/custom_sta.css" rel="stylesheet">
      
    
    

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
    /* Firefox */
	-moz-appearance: textfield;

	/* Chrome */
	&::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin:0;
	}

	/* Opéra*/
	&::-o-inner-spin-button {
		-o-appearance: none;
		margin: 0; 
	}
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
    
    .container-fluid:hover h2{
        text-decoration: none;
    }
    
   
    #details:hover{
        text-decoration-color: white;
    }
</style></head>
<body>

<!-- Début entête -->
<?php
	include("structure/header.php");
    include("structure/menu.php");
?>
<!-- Fin entête -->
<header class="section-headerr" style="text-align:center; margin-top:-20px;">
                  <br/>
    <h2 class="section-title section-title-color-grey">
                        PANIER
                    </h2>
                </header>
    
    
    
    
    
    
    
    
    
    
    
   <div class="container">
    
       
       
       
       
       
  
        <?php
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);

       
     
      
       
       
       
       
       
       /*
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
									*/
									
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
											
        <?php
          $reqk = $bdd->query('SELECT * FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
                                       // $donneesk = $reqk->fetch();            
                                                $t = 0;   
												while($donneesk = $reqk->fetch()){
                                                    $t = 1; 
                                                    
                                                }
   
    
       
       
       if ($t <= 0){
           
        ?>
       
       <div class="row">
       
       <div class="col-md-6 col-offset-2">
           <br/>
           <h3> Vous n'avez aucun produit dans votre panier</h3>
           <input style="width:450px;" id="ouvrirboutique" type="button" name="ouvriboutique" value="Ajouter des produits" class="club-button" onclick="window.open('boutique.php');" />

           
            
       </div>
          <div class="col-md-2">
           
           
           </div> 
          
             </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
         <?php  
           
       }else{
        ?>
        
        <h3 style="color:#01A5FE; ">Payer pour les articles de votre panier</h3><hr />
													<p style="font-style:italic;font-size:13px;margin-top:-5px;">Remplissez les formulaires suivants pour payer vos produits sélectionnés</p><br />
													
												<!-- Produits & Prestations -->
												<?php
													if($_SESSION["codetransaction"] != "0000")
													{
														?>
														
                                <div class="col-lg-12 col-md-6" style="background-color:white;">            
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
                                                        ?>
                                                        <script>
                                                            var numero = 1;
                                                        </script> <?php
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
                                                                        
      	                                                         
	<?php
      if(isset($_POST["lapageencours"])){                                                   
      $lapageencour = $_POST["lapageencours"]; 
                                                        
           if (strstr($lapageencour, "produitsboissonsnew") or strstr($lapageencour, "produitspartenaire") or strstr($lapageencour, "produitevenement")){
   
    }else{
    $lapageencour = 'boutique.php';  }}else{
          $lapageencour = $adresse;
      }                                                   
     
 ?>
        <!--
             <form method="post" action="augmenterquantitepanier.php">
             
             <input  type="number" value="<?php echo $donnees["qte_panierachat"]; ?>" style="width:40px; border: none;" 
                   min="1" max="99" name="quantite" required id="laquantite">
         <div style="margin-left:-10px; display:inline;">
            
             
                          <input type="hidden" value="<?php echo $lapageencour;?>" id="lapage" name="lapage"/>

             
             <input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" id="<?php echo $donnees["id_panierachat"];?>" name="leidpanier"/>
             
              <input type="submit" class="<?php echo $donnees["id_panierachat"];?>" value="-" style="width:15px;" onclick="  document.getElementById('laquantite').value = parseInt(document.getElementById('laquantite').value) - 1;" />
             
              <input type="submit" value="+" style="width:15px;" onclick="  document.getElementById('laquantite').value = parseInt(document.getElementById('laquantite').value) + 1;"/>
            
             
             </div>

             
             
             </form>
             
             -->
             <script>
                var idbuton = "bouton" + numero;  
             </script>
             <?php $idbuton  = "bouton" + $numero; ?>
               
          
             <input  type="number" value="<?php echo $donnees["qte_panierachat"]; ?>" style="width:40px; border: none;" 
                   min="1" max="99" name="quantite" required id="<?php echo $donnees["id_panierachat"];?>" class="<?php echo $donnees["id_panierachat"];?>" onchange="window.open('augmenterquantitepanier.php?idpanierachat=' + this.id + '&qte=' + this.value + '&lapage=' + document.getElementById('lapageencours').value);">
                                                                                        
                                                                                                   
                                                                                                       
                                                                                                   
    
             
         
             
             
             <div style="margin-left:-10px; display:inline;" style="display=none;">
            
             <input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" id="<?php echo $donnees["id_panierachat"];?>" name="leidpanier"/>
             
              <input type="hidden" class="<?php echo $donnees["id_panierachat"];?>" value="-" style="width:15px;" onclick="
            alert(document.getElementById(idbuton.toString()).value);                                                              
          "/>
             
              <input type="hidden" value="+" style="width:15px;" onclick="
                
                                                                                alert(document.getElementById(this.class).value);   
            document.getElementById('laquantite').value = parseInt(document.getElementById('laquantite').value) + 1;       
                                                                          
          alert('augmenterquantitepanier.php?idpanierachat=' + document.getElementById('leidpanier').value + '&qte=' + document.getElementById('laquantite').value + '&lapage=' + document.getElementById('lapageencours').value);                                                                
         window.open('augmenterquantitepanier.php?idpanierachat=' + document.getElementById('leidpanier').value + '&qte=' + document.getElementById('laquantite').value + '&lapage=' + document.getElementById('lapageencours').value);"/>
           
     </div>

             
        

                                                        
         </td>
        <td style="font-size:15px; padding: 13px;">
            <?php echo  $donnees["montant_panierachat"];?> F
            
          
       </td>
         
                                                 <td>
                                                   <!--  <input style="width:90%; height:40px;" type="text" name="codetransact" placeholder="Code de transaction"<span> /> 
													-->			
																<input type="hidden" value="<?php echo $motiflibel;?>" name="motifachat" />
																
																<input type="hidden" value="<?php echo $donnees["prixunit_panierachat"];?>" name="prixachatt" />
																
																<input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" name="idpanierachat" />
																
															
															
																
																<input style="margin-left:10px; display:none; " type="submit" name="acheterart" value="Payer" class="club-button" />
																<!--<span style="font-size:22px;"><a href="deleteartpanier.php?idartpanier=<?php echo $donnees["id_panierachat"];?>&lapage=<?php echo $adresse;?>">Annuler </a></span>  -->
                                                     
                                                     <span style="font-size:22px;"><a href="deleteartpanier.php?idartpanier=<?php echo $donnees["id_panierachat"];?>&lapage=<?php echo $adresse;?>" onclick="return confirm('Voudriez vous retirer le produit  <?php echo $donnees["libelle_panierachat"]; ?> du panier ?');">Annuler </a></span>
            
          
       </td>
                                                                
           
    </form>
			                                                     
    </tr>
   
														<?php $numero++;
														}
														
														$libellemotifs.="</ul>";
														
														$req->closeCursor();
														?>
														</tbody></table>
                                                
                                                </div>  
        
        
       
         <!--  <p style="background:black; height:70%; width: 100%; font-size: 1.5em; color:white"> Récapitulatif des commandes</p> -->
                           
														<?php
														
														$req = $bdd->query('SELECT SUM(montant_panierachat) AS montanttotal FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														while($donnees = $req->fetch())
														{
															$montanttotal = $donnees["montanttotal"];
														}
														$req->closeCursor();
														
														?>
														
														
														
														
														
														
															<!--<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
																
															<form method="post" action="<?php echo $adresse; ?>">
																
                                                               <!-- <div style="font-size:1em; padding:5px;">
                                                             
                                                                
                                                                </div>-->
																
																<div class="row" style="
                                         
                                  margin-top:5px;     ">
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
      if(isset($_POST["lapageencours"])){                                                   
      $lapageencour = $_POST["lapageencours"]; 
                                                        
           if (strstr($lapageencour, "produitsboissonsnew") or strstr($lapageencour, "produitspartenaire") or strstr($lapageencour, "produitevenement")){
   
    }else{
    $lapageencour = 'boutique.php';  }}else{
          $lapageencour = $adresse;
      }                                                   
     
                                                                ?>
						
<div class="row" style="float:right; width:520px;">
					<div class="col-md-5 col-lg-5 continuer" style="background:with;border:2px solid #E5F1FB; padding:5px; border-radius:10px;text-align:center;height:45px;" >	
<p  style="font-size:18px;font-style:italic;text-decoration:none;border: 1px soild blue;"><a href="<?php echo $lapageencour; ?>" id="lien1" >Continuer mes achats</a></p>
                        
                        
                            
    
    
    </div>
		 	<div class="col-md-5 col-lg-5">	
		 <span style="font-size:22px; "><a href="deleteartpanier.php?lepseudo=<?php echo $_SESSION["pseudousers"];?>&lapage=<?php echo $adresse ;?>" onclick="return confirm('Tous les produits seront retirés du panier. Désirez-vous continuer ?');">Tout Annuler </a></span>

</div>
 </div>
					
				
				
				
																											
																
														
																
																<input type="hidden" value="<?php echo $montanttotal;?>" name="montanttotal" />
																
																<input type="hidden" value="<?php echo $libellemotifs;?>" name="motifs" />
																													
																
																
																
																
																
																
															      
                                                                 <!--   <input style="width:350px;" id="lelien" type="text" name="achetertotal" value="<?php echo $adresse ?>" class="club-button" />
																 -->
																
																 <input style="width:450px;" id="lelien" type="hidden" name="achetertotal" value="Tout Payer" class="club-button" />
																
																<input type="hidden" value="<?php echo $adresse;?>" name="lapage" />
																
																<br />
																<hr/>
                                                              
                                                               
                                                                    
                                                                    </form>
                                                          

       
       
       <input type="hidden" value="<?php echo $lapageencour ?>" id="lapageencours"/>
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


	            
	   <?php  } 
       ?></div>       
  
    
    
    
    

  
    
    
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
    
  </div>
</footer>
    
</body></html>