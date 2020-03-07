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
    
    
    

    <?php
    if(isset($_GET["stmsg"])){
       
    if ($_GET["stmsg"] == "ok"){
        ?>
    <script>alert('Votre plainte a été bien transmise. Nous ne tardons pas généralement à répondre.')</script>
        
        <?php }
        
        if ($_GET["stmsg"] == "no"){
        ?>
    <script>alert('Votre plainte n\'a pas été transmise. Veuillez réessayer.')</script>
        
        <?php  } } ?>
        
        

    
    
    
    <section id="_tjobers" class="lightgrey-bg" style="background:white;">
          
        
        
            <div class="container-fluid">

                    <div class="breadcrumb" style="margin-top:-40px;">
                    
                    <h3 style="margin-top:-5px; padding:5px;color:#337AB7;"><strong>Soumettre votre plainte</strong></h3>
               
                    </div>
               
                
             
                
                
                
                
                <div class="col-md-8 contact-right"> 
                <form action="envoiemessageplainte.php" method="post">  

                    <input type="hidden" name="pseudo" value="<?php echo $_SESSION["pseudousers"];?>" />

                    


                    <!--    Ceci est la portion pour faire apparaitre un champ pour entreprise  -->     

                    <div>


                        <script>
                            $(function() {

                                $('#typepersonne').change(function() {
                                    $('.selecttypePersonne').slideUp("slow");
                                    $('#' + $(this).val()).slideDown("slow");
                                });
                            }); 
                        </script>


                       

                      


                    </div>

                    <!--  Fin portion pour faire apparaitre un champ pour entreprise  -->     


                  


                    <br>


 <input type="text" name="objet" placeholder="Objet*" required="" style="    margin: 1em 0; height:40px;width:100%;">


  <br>



                    <textarea name="message" placeholder="Message*" required="" style="margin: 0;  height:200px; width:100%;"></textarea>




<br/>
                    <br/>


                    
                    <input type="submit" value="Envoyer" name="submit" style="background: #337ab7; outline: 2px solid #337ab7; width:150px;"> 



                </form>
            </div>
            
            <div class="col-md-4 contact-left">

                <!--  DEBUT DES DIV DEMANDER UN DEVIS ET ETRE CONTACTE ET PLAINTE ********************************************************************** -->  



                
<!--  DEBUT DES DIV DEMANDER UN DEVIS ET ETRE CONTACTE ET PLAINTE -->  
<div class="b0 address" style="margin-left: 10px;">

   

</div>  

 

<!-- Mis en commentaire
<div class="b0 address" style="margin-left: 50px;">

    <div id="block-block-13" class="block block-block btnFormStyle">

        <div class="content" style="border-radius: 76px;">
            <a style="display: block;  font-size: 2em;" href="index.php?ms=plainte"><h3 class="goodCenterWrite" style="text-align: -webkit-right;">Formuler une Plainte</h3></a>
        </div>

    </div>

</div>

-->


<!--  FIN DES DIV DEMANDER UN DEVIS ET ETRE CONTACTE ET PLAINTE -->                 <!--  Mis pour les le btoutons d'envoi de plintes -->

                <div class="b0 address" style="margin-left: 50px;">

                    <div id="block-block-13" class="block block-block btnFormStyle">

                        <div class="content" style="border-radius: 76px;">
                            <a style="display: block;  font-size: 2em;" href="nouscontacter.php"><h3 class="goodCenterWrite">Nous écrire</h3></a>
                        </div>

                    </div>

                </div>




                <!--  FIN DES DIV DEMANDER UN DEVIS ET ETRE CONTACTE ET PLAINTE    ********************************************************************** --> 

                <br><br>



                <!--  DEBUT DES DIV POUR LE CONTENEUR D ADRESSE  ********************************************************************** -->  



                <div class="address adresseStyle" style="">
    <h5>Adresse:</h5>
    <p class="adresseAllPage"><i class="glyphicon glyphicon-home"></i> LIBERTIS CLUB  </p>

    <p class="adresseAllPage">XX BP XXXX Cotonou </p>
    <p class="adresseAllPage">Rue 413, Lion</p>

</div>
<div class="address address-mdl_old adresseStyle" style="">
    <h5>Tel:</h5>
    <p class="adresseAllPage  phone"><i class="glyphicon glyphicon-earphone"></i>  (229) xx xx xx xx <br>
        <i class="glyphicon glyphicon-earphone"></i>  (229) xx xx xx xx <br>


    </p>

    <!--
<p><i class="glyphicon glyphicon-earphone"></i> +1 999 888 777</p>
<p><i class="glyphicon glyphicon-phone"></i> +11 222 333</p>
-->
</div>
<div class="address adresseStyle" style="">
    <h5>Email:</h5>
    <p class="adresseAllPageMail"><i class="glyphicon glyphicon-envelope" style=" margin-right: 0%; "></i> <a href="">mail@libertis.com</a></p>
</div>




                <!--  FIN DES DIV POUR LE CONTENEUR D ADRESSE      ********************************************************************** --> 

                
                
                

            </div>
            
            <br/>
            
               
            
            
            
            </div>
        </section>
        <!-- END Tjobers -->
    
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Launch demo modal
</button>


     <?php
include("modalpanier.php");
?>
    
    
    
    <footer class="club-footer">
  <div class="club-footer-inner">
		<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
    
  </div>
</footer>
    
</body></html>