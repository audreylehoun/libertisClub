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

                        <li class="active">Boisson</li>   
                    </ul>
                </div>
            
               
                    
            
             
          
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
                
               
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:1em;">Acheter ici vos boissons préférées ! </strong></h3>
                              
                
                </div>
            
            
            
            </div> 
            
            
            
          <p></p><p></p>
        
                     
          
          <div class="row">
            
            
           
                                                  
                
                <div class="col-lg-2 col-md-3 col-sm-6" onClick='window.location.href="produitsboissonsnew.php?catpro=" + document.getElementById("txtchampagne").value + " &pro=boi"'>
                
                             <div class="allo-category-box" style=height:230px;>
                                <a href="#" width="160" height="160" style="cursor: default;">
                                    <picture width="160" height="160">
                                        <img src="../images/imgesprdtsves/champagneok.jpg" width="160" height="160" alt="Champagne">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title" style="font-size:1em;">
                                        <a "#"title="<strong>Catalogue des champagnes" style="pointer-events: none;cursor: default;"><strong>Champagne</strong>&nbsp</a>
                                    </h3>
                                     <input type="hidden" id="txtchampagne" value="Champagne" > 

                                </div>
                               
                                
                            </div>                             
                       
              </div>  
              
        
               <div class="col-lg-2 col-md-3 col-sm-6 " onClick='window.location.href="produitsboissonsnew.php?catpro=" + document.getElementById("txtLiqueur").value + " &pro=boi"'>
                
                            <div class="allo-category-box" style=height:230px;>
                                <a href="#" width="160" height="160" style="pointer-events: none;cursor: default;">
                                    <picture width="160" height="160">
                                        <img src="../images/imgesprdtsves/liqueur.jpg" width="160" height="160" alt="Liqueur">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title" style="font-size:1em;">
                                        <a "#"title="<strong>Catalogue des champagnes" style="pointer-events: none;cursor: default;"><strong>Liqueur</strong>&nbsp</a>
                                    </h3>
                                 <input type="hidden" id="txtLiqueur" value="Liqueur" > 

                                </div>
                                
                                 
                            </div>                          
                       
              </div>  
              
              <div class="col-lg-2 col-md-3 col-sm-6" onClick='window.location.href="produitsboissonsnew.php?catpro=" + document.getElementById("txtVin").value + " &pro=boi"'>
                
                             <div class="allo-category-box" style=height:230px;>
                                <a href="#" width="160" height="160" style="pointer-events: none;cursor: default;">
                                    <picture width="160" height="160">
                                        <img src="../images/imgesprdtsves/boisson13.jpg" width="160" height="160" alt="Vin">
                                    </picture>
                                </a>    
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title" style="font-size:1em;">
                                        <a "#"title="<strong>Catalogue des champagnes" style="pointer-events: none;cursor: default;"><strong>Vin</strong>&nbsp</a>
                                    </h3>
                                    
 <input type="hidden" id="txtVin" value="Vin" > 
                                </div>
                                
                                
                            </div>                                
                       
              </div>  
              
                <div class="col-lg-2 col-md-3 col-sm-6" onClick='window.location.href="produitsboissonsnew.php?catpro=" + document.getElementById("Bière").value + " &pro=boi"'>
                
                            <div class="allo-category-box"  style="height:230px;">
                                <a href="#" width="160" height="160" style="pointer-events: none;cursor: default;" onClick='window.location.href="http://woumiah.com"'>
                                    <picture width="160" height="160">
                                        <img src="../images/imgesprdtsves/boisson8.jpg" width="160" height="160" alt="Bière">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title" style="font-size:1em;">
                                        <a "#"title="<strong>Catalogue des champagnes" style="pointer-events: none;cursor: default;"><strong>Bière</strong>&nbsp</a>
                                    </h3>
                                    
                                    <input type="hidden" id="Bière" value="Bière" > 
                                </div>
                                
                                
                            </div>                           
                       
              </div>  
            
                <div class="col-lg-2 col-md-3 col-sm-6" onClick='window.location.href="produitsboissonsnew.php?catpro=" + document.getElementById("txtsucrerie").value + " &pro=boi"'>
                
                            <div class="allo-category-box" style=height:230px;>
                                <a href="#" width="160" height="160" style="pointer-events: none;cursor: default;">
                                    <picture width="160" height="160">
                                        <img src="../images/imgesprdtsves/boisson5.jpg" width="160" height="160" alt="Sucrerie">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title" style="font-size:1em;">
                                        <a "#"title="<strong>Catalogue des champagnes" style="pointer-events: none;cursor: default;"><strong>Sucrerie</strong>&nbsp</a>
                                    </h3>
                                      <input type="hidden" id="txtsucrerie" value="Sucrerie" > 

                                </div>
                                
                                
                            </div>                          
                       
              </div>  
              
                <div class="col-lg-2 col-md-3 col-sm-6" onClick='window.location.href="produitsboissonsnew.php?catpro=" + document.getElementById("txtcocktail").value + " &pro=boi"'>
                
                             <div class="allo-category-box" style=height:230px;>
                                <a href="#" width="160" height="160" style="pointer-events: none;cursor: default;">
                                    <picture width="160" height="160">
                                        <img src="../images/imgesprdtsves/cocktail.jpg" width="160" height="160" alt="Cocktail">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title" style="font-size:1em;">
                                        <a "#"title="<strong>Catalogue des champagnes" style="pointer-events: none;cursor: default;"><strong>Cocktail</strong>&nbsp</a>
                                    </h3>
                                    <input type="hidden" id="txtcocktail" value="Cocktail" > 

                                </div>
                                
                                
                            </div>                          
                       
              </div>  
              
            </div>
          
          
          
          
          
              
            </div>
        </section>
    
    
        <!-- END Tjobers -->
    
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
    
  </div>
</footer>
    
</body></html>