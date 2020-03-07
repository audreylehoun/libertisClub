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
    
    .club-succes
{
	background-color: #EBF6E0;
	color: #5F9025;
	border: 1px solid #5F9025;
	padding: 14px 18px;
	background-image: -moz-linear-gradient(center bottom , #EBF6E0 0%, #F0FAE7 100%);
	max-width:300px;
	margin:20px auto;
	text-align:center;
	font-size:15px;
}

.club-echec
{
	background-color: rgb(204,36,66);
	color: #FFFFFF;
	border: 1px solid rgb(120,1,10);
	padding: 14px 18px;
	background-image: -moz-linear-gradient(center bottom , rgb(204,36,66) 0%, rgb(232,70,102) 50%);
	max-width:300px;
	margin:20px auto;
	text-align:center;
	font-size:15px;
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
                    <h2 class="section-title section-title-color-grey" style="color:grey;">
                        Réservation de partenaire
                    </h2>
                </header>
    
         
            
    <div class="container-fluid">
    
      
     <section id="_tproduits" class="lightgrey-bg" style="background:lightred;" style="margin-top:-30px;">
     
        <div class="container" style="margin-top:-70px;">
        <div class="row" style="
                                         
                                background-color:white;       ">
            
           
            
            
             </div>
            </div> 
                
                <div class="row content-row" style="margin-top:-70px;">
                                            <div class="col-md-3 col-sm-6 col-lg-4 col-lg-offset-2">
                            <div class="allo-category-bo" style="height:400px;">
                                
                                    <picture>
                                        
                                        <img src="../images/imgespartenaire/<?php echo $_POST["imagepartenaire"];?>" alt="<?php echo $_POST['nompartenaire'] . " " . $_POST['prenompartenaire'];?>" style="height:300px;">
                                    </picture>
                                
                                
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
                            <div class="allo-category-bo" style="height:390px;">
<br/>
                                    <h3 class="text-LEFT allo-box-caption-title">
                                        <?php echo $_POST['nompartenaire'] . " " . $_POST['prenompartenaire'];?>
                                    </h3>
                                <h3 class="text-LEFT allo-box-caption-title">
                                        <?php echo $_POST['agepartenaire'] . " ans ; " . $_POST['villepartenaire'];?>
                                    </h3>
                                <h4 class="text-LEFT allo-box-caption-title" style="color:blue;">
                                        Disponible ce jour.
                                    </h4>
                                   <br/>
                                <div class="te" style="min-height:30%; max-height:35%;" id="description">
                                <p >    <?php echo $_POST['descriptionpartenaire'];?></p>
                                </div>
                                    <br/>
                                
                                <div class="eya" style="left:10px;">
                               
                                   
                                    <?php 
                                       
                                    
                                    if(isset($_POST["dejareserve"])){
									/*
                                      echo "SELECT * FROM reservationpartenaire WHERE id_partenaire = " .$_POST["idaddartpanierpartenaire"]. " and date_reservation = '" .$_POST["datereservation"]. "'";  
                                            
                                            
                                            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
                                    $req = $bdd->query("SELECT * FROM reservationpartenaire WHERE id_partenaire = " .$_POST["idaddartpanierpartenaire"]. " and date_reservation = '" .$_POST["datereservation"]. "'");
                                        echo "SELECT * FROM reservationpartenaire WHERE id_partenaire = " .$_POST["idaddartpanierpartenaire"]. " and date_reservation = '" .$_POST["datereservation"]. "'";                                       
                                    $existe = 0;
                                   while($donnees == $req->fetch()){
											$existe = 1;
				                   }
											
											$req->closeCursor();
														
                                  
                                        
                                     if($existe == 1)   {
                                       
                                        ?> <script>document.getElementById('textindisponibe').style.display = block; </script> <?php
                                         
                                     }else{
                                         
                                         
                                         
                                     
                                        
                                        
                                        
                                        
                                       
                                    
                                    echo "<div class='club-succes'>Opération réussie, Cette partenaire vous est réservée.</div>.";
                                     }
                                    */
                                       
                                    
                                         
                                    echo "<div class='club-succes'>Opération réussie, Cette partenaire vous est réservée.</div>";
                                                                    
                                    

                                    
                                    
                                    }else{
                                    
                                    ?>
                                        
                                 
                                    
                                    
                                    
                                    
                                    <form style="bottom:10px;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?dejareserve=ok">
                                
                                    <h4 class="text-LEFT allo-box-caption-title">
                                        Indiquer ici la date à laquelle vous désirez avoir le partenaire.
                                    </h4>
                                   
                                         <input type="hidden" value="<?php echo $_POST["idaddartpanierpartenaire"];?>" name="idaddartpanierpartenaire" />

        
        
        
        
        
        
                                                                        <input type="hidden" value="<?php echo $_POST['idpageretour']; ?>" name="idpageretour" />

                                                                        <input type="hidden" value="<?php echo $_SESSION["pseudousers"];?>" name="pseudoaddartpanier" />

       
        <input type="hidden" value="<?php echo $_POST["nompartenaire"];?>" name="nompartenaire" id="nompartenaire"/>
<input type="hidden" value="<?php echo $_POST["prenompartenaire"];?>" name="prenompartenaire" id="prenompartenaire"/>
 <input type="hidden" value="<?php echo $_POST["prixpartenaire"];?>" name="prixpartenaire" id="prixpartenaire"/>
        
           <input type="hidden" name="qteproduit" id="quantite" value="1" min="1" max="99" style="width:40px; height:23px;">
                                   
               
        <input type="hidden" value="<?php echo $_POST["agepartenaire"];?>" name="agepartenaire" id="agepartenaire"/>
                                        <input type="hidden" value="<?php echo $_POST["villepartenaire"];?>" name="villepartenaire" id="villepartenaire"/>
                                        <input type="hidden" value="<?php echo $_POST["descriptionpartenaire"];?>" name="descriptionpartenaire" id="descriptionpartenaire"/>
                                        <input type="hidden" value="<?php echo $_POST["imagepartenaire"];?>" name="imagepartenaire" id="imagepartenaire"/>
                                        
                                   <input type="hidden" value="ok" name="dejareserve" id="imagepadejareservertenaire"/>       
                                               
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    
                                        
                                        
                                        
                                        
                                    <input type="date" name="datereservation" id="datereservation" style="font-size:1.5em;" required/>
                                    <p style="display:none; color:red;" id="textindisponibe"> Le partenanire n'est pas disponible à la date que vous demandez. Veuillez sélectionner un autre jour.</p>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <br/>
                                      <br/>
                                  <h4 class="text-LEFT allo-box-caption-title" style="color:blue;">
                                        Coût: <?php echo $_POST['prixpartenaire']; ?> FCFA
                                    </h4>
                                    <button onclick="return confirm('Vous êtes sur le point d'effectuer le payement pour la réservation du partenaire.');" type="submit" class="btn btn-primary"  >
  Payer pour Réserver ce partenaire
</button>
                                        <!--       <button type="submit" class="btn btn-primary" onclick="
                    var hauteur=document.getElementById('description').offsetHeight;     
        alert(document.getElementById('description').style.height=hauteur+'px');">
  Reserver ce partenaire
</button>   -->
                                    
                                  
                                   
                                
                                </form>
                                    
                                 <?php } ?>   
                                    
                                    
                                    
                                <div/>

                                </div>
                            </div>                          
                        </div>
                                            
                    </div>
    
    </section>
        <br/>
    <a href="<?php echo $_POST['idpageretour']; ?>"><button type="button" class="btn btn-primary" style="float:right;background:white; color:blue;" >
  Retourner sur le catalogue des partenaires
        </button></a>
    </div>
    
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
    
  </div>
</footer>
    
</body></html>