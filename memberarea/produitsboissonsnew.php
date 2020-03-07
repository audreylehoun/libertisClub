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
                    <ul class="breadcrumb" style="margin-top:-70px;">
                        <li><a href="#"> Accueil</a></li>
                        <li><a href="boutique.php"> Boutique</a></li>
                                           <li><a href="menuproduitsetservice.php"> Produits et Services</a></li>
 <li><a href="menuproduitsboissonsnew.php"> Menu Boisson</a></li>
                        <li class="active">Boisson</li>   
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
                <?php
															$reql = $bdd->query('SELECT soldetransaction FROM transaction WHERE pseudotransaction = "'.$_SESSION["pseudousers"].'" ORDER BY idtransaction DESC LIMIT 0,1 ');
															$donnees = $reql->fetch();
															$soldetransaction = $donnees["soldetransaction"];
															$reql->closeCursor();?>	
                <p> Vous avez : <strong style="color:blue;"> <?php echo $soldetransaction ?> FCFA </strong> sur votre compte.</p>
                <!-- Fin espace solde -->
           
                
            </div>
            <div class="col-md-6 col-offset-2" style="
                                padding: 15px;" >
                
                <?php
                
                if($_GET["catpro"] != 'Repas'){
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
                            $req = $bdd->query('SELECT * FROM produitprestation where categorie_produit = "' . $_GET["catpro"] . '"  ORDER BY type_produitprestation DESC LIMIT '.$start.', '.$entrees_par_page.' ');
                            
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

        
        
        <?php
 $adresse = $_SERVER['PHP_SELF'];
    $i = 0;
    foreach($_GET as $cle => $valeur){
        $adresse .= ($i == 0 ? '?' : '&').$cle.($valeur ? '='.$valeur : '');
        $i++;
    }
?>
        
        
        
        
                                                                        <input type="hidden" value="<?php echo $adresse; ?>" name="idpageretour" />

                                                                        <input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" />

       
        
        
           <input type="number" name="qteproduit" id="quantite" value="1" min="1" max="99" style="width:40px; height:23px;">
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
    
    
        <!-- END Tjobers -->
    
          
        
            <?php
include("modalpanier.php");
?>
            
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
    
  </div>
</footer>
    
</body></html>