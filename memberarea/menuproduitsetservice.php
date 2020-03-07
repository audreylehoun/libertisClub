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
    <title>Produits et Services | LIBERTIS CLUB</title>
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

</style></head>
<body>

<!-- Début entête -->
<?php
	include("structure/header.php");
    include("structure/menu.php");
    
?>
<!-- Fin entête -->

      <header class="section-headerr" style="text-align:center;">
                    <h2 class="section-title section-title-color-grey">
                        Produits &amp; Services
                    </h2>
                </header>
    
         
            
    <div class="container-fluid">
    
      
     <section id="_tproduits" class="lightgrey-bg" style="background:lightred;">
     <div class="allo-breadcrumb">
                    <ul class="breadcrumb" style="margin-top:-70px;">
                        <li><a href="#"> Accueil</a></li>
                        <li><a href="boutique.php"> Boutique</a></li>
                        <li class="active">Produits et Services</li>   
                    </ul>
                </div>
         <br/>
        <div class="container">
        <div class="row" style="
                                         
                                background-color:white;       ">
            <div class="col-md-4" style="
                                   
                                height:60px; padding:15px; margin-top:5px; margin-left:5px;  box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);       ">
              
                <!-- Espace solde -->
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
                <h3 style="font:18 bold Verdana; margin-top:2px;" > <strong style="font-size:0.5em;">Vous pouvez vous procurer  vos produits et services préférés ! </strong></h3>
            </div>
            
            
             </div>
            </div> 
                
                <div class="row content-row" style="margin-top:-70px;">
                                            <div class="col-md-3 col-sm-6 col-lg-4 col-lg-offset-2">
                            <div class="allo-category-box" style="height:390px;">
                                <a href="menuproduitsboissonsnew.php">
                                    <picture>
                                        <img src="images/boissonsok.jpg" alt="">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title">
                                        <a href="menuproduitsboissonsnew.php">Boisson</a>
                                    </h3>
                                    <p>Tout pour votre rafraichissement</p>

                                </div>
                            </div>                          
                        </div>
                                      <!--      <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="allo-category-box">
                                <a href="produitsboissonsnew.php?catpro=Repas&pro=boi">
                                    <picture>
                                        <img src="images/repasok.PNG" alt="">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title">
                                        <a href="produitsboissonsnew.php?catpro=Repas&pro=boi">Repas</a>
                                    </h3>
                                    <p>Retrouvez dans cet espace vos meilleurs et préférés plats.</p>

                                </div>
                            </div>                          
                        </div>  -->
                                            <div class="col-md-3 col-sm-6 col-lg-4">
                            <div class="allo-category-box" style="height:390px;">
                                <a href="menuextra.php">
                                    <picture>
                                        <img src="images/massageok1.jpg" alt="">
                                    </picture>
                                </a>
                                <div class="allo-box-caption">
                                    <h3 class="text-center allo-box-caption-title">
                                        <a href="menuextra.php">Extra</a>
                                    </h3>
                                    <p>Séance de massage et réservation de partenaire</p>

                                </div>
                            </div>                          
                        </div>
                                            
                    </div>
    
    </section>
    
    </div>
    
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
    
  </div>
</footer>
    
</body></html>