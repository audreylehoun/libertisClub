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
    <title>Achat de boissons | LIBERTIS CLUB</title>
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

    .panierform {
	position: relative;
	 width : 110px;
    
    
    background-color: #2366A8;
    padding:2px;                              
    float: right; 
    bottom:-80%; 
	transition: .5s ease-in-out;
    visibility: hidden;

}
    .allo-category-box:hover .panierform{
bottom:5%;
        visibility: visible;
                                  
    float: right; 
    } 
    
    .tooltiptext {

   visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
        top:30px;
  
  left: 50%;
  margin-left: -60px; 
    
    
    
    
    }
#tooltip .tooltiptext::after {
  content: "";
  position: absolute;
 
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: black transparent transparent transparent;
}


#tooltip:hover .tooltiptext {
  visibility: visible;

    
    
    }
    
    #tooltip{
     /* background:url(images/ajoutpanier25.png); */
    }
    


</style></head>
<body>

<!-- Début entête -->



              <?php
// include("entetehaut.php");
  include("structure/header.php");
?>

    
    <?php
    include("structure/menu.php");
 ?>
<!-- Fin entête -->

    
    <!--  DEBUT CODE MENU -->
    
 
    
    
    
    
    
    
    <!--  FIN CODE MENU -->
    
    
    
    <section id="_tjobers" class="lightgrey-bg" style="background:white;">
          
        
        
        <div class="container">
            
           
            
               
             <div class="allo-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="active">Boutique</li>   
                    </ul>
                 
                 
                </div>
            
            
              <?php
								
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
                                    $bdd->exec('SET NAMES utf8');
									
          
          $req = $bdd->query("SELECT `categorie_produit`, count(`id_produitprestation`) as nbre from produitprestation group by `categorie_produit`");
												
           ?>
          
        <!--   <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong>Retrouver ici des boissons et vos repas préférés.. !!</strong></h3>
          <div class="row" style="background:#FF8610; padding-bottom:10px;height:0.2px;">
        <br/> -->
          
         
            <div class="row" style="
                                         
                                background-color:white;       ">
            <div class="col-md-4" style="
                                   
                                height:60px; padding:15px; margin-top:5px; margin-left:5px;  box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);       ">
                <p> Vous avez : <strong style="color:blue;"> 15000 FCFA </strong> sur votre compte.</p>
                
            </div>
            <div class="col-md-6 col-offset-2" style="
                                padding: 15px;" >
                
                <?php
                
                if($_GET["catpro"] == 'Boisson'){
                ?>
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:1em;">Acheter ici vos boissons préférées ! </strong></h3>
                <?php } ?>

                   <?php
                
                if($_GET["catpro"] == 'Repas'){
                ?>
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:1em;">Acheter ici vos repas préférés ! </strong></h3>
                <?php } ?>
                
                
                </div>
            
            
            
            </div> 
            
            
            
          <p></p><p></p>
        
           <?php
													include 'paginationprdtssveces.php';
												   /* On calcule le nombre total d'entrées de notre table 
													09.que l'on stocke dans $nb_entrees */
													$req = $bdd->query("SELECT COUNT(*) AS total FROM produitprestation ");
													while($donnees_total = $req->fetch()){
													$total=$donnees_total['total'];
													}
													 $req->closeCursor();
													 
													/*On configure les variables pour afficher notre requête */
													$entrees_par_page = 50;
													// nombre d'entrée à afficher par page
													$total_pages = ceil($total/$entrees_par_page);
													
													// calcul du nombre de pages nécessaires pour tout afficher
													//(on arrondit à l'entier supérieur)
													/*On récupère le numéro de la page depuis l'URL avec la méthode GET*/
													if(!isset($_GET['page'])){
													$page_courante = 1;
													// si aucune page n'existe dans l'URL, on attribue 1 à la page courante
													} else {
													$page = $_GET['page'];
													if ($page<1) $page_courante=1;
													// on ne peut avoir de page inférieure à 1 :
													//dans ce cas la valeur par défaut est 1
													elseif ($page>$total_pages) $page_courante=$total_pages;
													// on ne peut avoir de page supérieure au nombre total de pages :
													//dans ce cas la valeur par défaut est la dernière page
													else $page_courante=$page;
													// sinon la page courante est celle indiquée dans l'URL
													}
													// $start est la valeur de départ du LIMIT dans notre requête SQL
													//(est fonction de la page courante)
													$start = ($page_courante * $entrees_par_page - $entrees_par_page);
								
								
													/* On a toute les données pour récupérer les entrées à afficher,
													41.que l'on stocke dans $resultat */
											
												//	$req = $bdd->query('SELECT * FROM produitprestation ORDER BY id_produitprestation DESC LIMIT 
                                                                    
                       
                       if(isset($_GET["catpro"]) && (isset($_GET["pro"]) ))
                        {
                           
                           /* AFFICHAGE DE TOUTES LES BOISSONS */
                           if(($_GET["catpro"] == 'tout') && ($_GET["pro"] == "boi") ) {
                        echo ' toutes les boissons : catpro = ' .$_GET["catpro"]; 
                            
                            $req = $bdd->query('SELECT * FROM produitprestation ORDER BY type_produitprestation DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                       
                          }
                     
                           
                         /* AFFICHAGE D'UNE CATEGORIE DE BOSSON DONNEE */
                           if(($_GET["catpro"] != 'tout') && ($_GET["pro"] == "boi") )
                        {
                            $req = $bdd->query('SELECT * FROM produitprestation where type_produitprestation = "' . $_GET["catpro"] . '"  ORDER BY type_produitprestation DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                            
                        }   
                           
                        }
                           
                           
                           ?> 
                       
                       <!--
                           <form action="getvaleur.php" method="post" onsubmit="saveDragDropNodes()" id="leform">
	<input type="hidden" name="tilelist" id="saveContent" value="">
	<input type="submit"  value="Envoyer">
</form> 
                                   
                               <script type="text/javascript">
 var lacategorie= document.getElementById('saveContent').value;
                                   document.getElementById('saveContent').value='Bonjour Checo Pola';
document.getElementById('leform').submit(); 
 
    
       

                               </script>           
                            
                            -->
                      
                       
                      
                                                  
                
          
          <div class="row">
            
            
              <?php
                       
         
                                    
                                    while($donnees = $req->fetch()){
                                                         $letypeprod = $donnees["type_produitprestation"];
                                                        
                                                        
													?>
                                                        
                                                        
													
                                                  
                
                <div class="col-lg-2 col-md-3 col-sm-6">
                
                            <div class="allo-category-box">
                                <a href="#" width="160" height="160" style="pointer-events: none;cursor: default;">
                                    <picture width="160" height="160">
                                        <img src="../images/imgesprdtsves/<?php echo $donnees["image_produitprestation"];?>" width="160" height="160" alt="<?php echo $donnees["libelle_produitprestation"];?>">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title" style="font-size:0.8em;">
                                        <a "#"title="<strong><?php echo $donnees["libelle_produitprestation"]; ?>" style="pointer-events: none;cursor: default;"><strong><?php echo $donnees["categorie_produit"] . ' : ' .$donnees["libelle_produitprestation"]; ?></strong>&nbsp</a>
                                    </h3>
                                    <p>
                                     <span class="regular-price" id="product-price-2409">
                                            <span class="price"><strong><?php echo $donnees["prix_produitprestation"]; ?> F CFA</strong>&nbsp;</span>                                    </span>
                                    
                                    </p>

                                </div>
                                
                                
                                                              
       <form  method="post" action="ajoutartpanier.php" id="myform" style="height:35px; top:10px;
                                           width : 90%;
    margin-left : 40%;
    
    
                            ">
 <!-- <label id="dimunier" onclick="
    
    if(document.getElementById('quantite').value == 1){}else{
    document.getElementById('quantite').value = parseInt(document.getElementById('quantite').value) - 1    
    }"  style="background:white; height:25px; margin-top:5px;margin-left:5px; padding: 5px;    "><strong>-</strong>&nbsp</label> -->
    <div id = "Container" class="panierform" style="
                                 
    width : 110px;
    
    
    background-color: #2366A8;
                                 padding:2px;
                                 
                                float: right;
                                 
                                 
                                 ">
           
          <input type="hidden" value="<?php echo $donnees["id_produitprestation"];?>" name="idaddartpanier" />

                                                                        <input type="hidden" value="produitsboissonsnew.php?catpro=Boisson&pro=boi" name="idpageretour" />

                                                                        <input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" />

        
        
        
           <input type="number" name="qteproduit" id="quantite" value="1" style="width:40px; height:23px;">
                           <!--  <label id="augmenter" onclick="document.getElementById('quantite').value = parseInt(document.getElementById('quantite').value) + 1" style="background:white; height:25px; margin-top:5px; width:20px;margin-left=0px;   "><strong>+</strong>&nbsp</label> -->
  <!--<i class="glyphicon  glyphicon-shopping-cart" title="Panier"></i>-->
        <button id="tooltip" type="submit" style="width:60px; height:23px; "name="addartpanier" onclick="return confirm('Voudriez vous payer pour le(la) <?php echo $donnees["type_produitprestation"]; ?> ?');">Ajouter<span class="tooltiptext">Ajouter au panier</span>
      
            
        
                        
            
            

</button>
        </div>
</form>
                                                          
                                
                                
                           
                                
                                
                            </div>                          
                       
         
              
              
              
              
              
              </div>  
          
              <?php  } ?>
              
            
            
            
            </div>
          
          
          
          
          
              
            </div>
        </section>
    
    
    
    <div id="monModalPanier" class="modal fade">
	    <div class="modal-dialog" id="sousmodalpanier">
	        <div class="modal-content" id="contentpartenaire">
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
											
        
        
        <h3 style="color:#01A5FE; ">Payer pour les articles de votre panier</h3><hr />
													<p style="font-style:italic;font-size:11px;margin-top:-5px;">Remplissez les formulaires suivants pour payer vos produits sélectionnés</p><br />
													
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
                                                   <!--  <input style="width:90%; height:40px;" type="text" name="codetransact" placeholder="Code de transaction"<span> /> 
													-->			
																<input type="hidden" value="<?php echo $motiflibel;?>" name="motifachat" />
																
																<input type="hidden" value="<?php echo $donnees["prixunit_panierachat"];?>" name="prixachat" />
																
																<input type="hidden" value="<?php echo $donnees["id_panierachat"];?>" name="idpanierachat" />
																
																<br /><br />
																<input style="margin-left:10px; display:none; " type="submit" name="acheterart" value="Payer" class="club-button" />
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
                                                
                                                
        
        
        <hr/><hr/>
         <!--  <p style="background:black; height:70%; width: 100%; font-size: 1.5em; color:white"> Récapitulatif des commandes</p> -->
                           
														<?php
														
														$req = $bdd->query('SELECT SUM(montant_panierachat) AS montanttotal FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														while($donnees = $req->fetch())
														{
															$montanttotal = $donnees["montanttotal"];
														}
														$req->closeCursor();
														
														?><br /><br />
															<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																
																
                                                               <!-- <div style="font-size:1em; padding:5px;">
                                                             
                                                                
                                                                </div>-->
                                                                
                                                               <div class="row">
                                                                
                                                                <div class="col-md-3">
                                                                    <h3 style="font-size:15px;">Montant Total : </h3>
                                                                   
                                                                </div>
                                                                
                                                                    <div class="col-md-3">
                                                                        <h2 style="font-size:22px;color:green;"><?php echo $montanttotal;?> F CFA </h2>
                                                                   
                                                                </div>
                                                                   
                                                                    <div class="col-md-3">
                                                                   	<span style="font-size:22px;"><a href="deleteartpanier.php">Tout Annuler </a></span>
                                                                   
                                                                </div>
                                                                
                                                                
                                                                </div>
																
																
																<span style="font-size:15px;">Montant Total : <span> <span style="font-size:22px;color:green;"><?php echo $montanttotal;?></span> F CFA
																<br /><br />
																
																<input type="text" name="codetransact" placeholder="Code de transaction" />
																
																<input type="hidden" value="<?php echo $montanttotal;?>" name="montanttotal" />
																
																<input type="hidden" value="<?php echo $libellemotifs;?>" name="motifs" />
																
																<input type="submit" name="achetertotal" value="Tout Payer" class="club-button" />
                                                                    
                                                                    
                                                                    <input id="lelien" type="text" name="achetertotal" value="<?php echo $_SERVER['PHP_SELF'] ?>" class="club-button" />
																
																<span style="font-size:22px;"><a href="deleteartpanier.php">Tout Annuler </a></span>
																<br />
																<hr/>
                                                              
                                                                    <p style="font-size:18px;font-style:italic;text-decoration:none;"><a href="document.getElementById('lelien').value" onclick="window.open(document.getElementById('lelien').value)">Continuer mes achats</a></p>
															
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
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
   
    
    
        <!-- END Tjobers -->
    
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
    
  </div>
</footer>
    
</body></html>