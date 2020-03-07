<?php 
include("verif/verif.php");
$menu = "redigerarticles.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-FR"><head>

<!-- 

Conçu par

--------- Développeur Web -----------
LIGAN O. F. Patrick ( +229 67 44 62 18)


 -->

    <meta charset="utf-8">
    <title>Ajout des produits ou des prestations LIBERTIS</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all">
     <link rel="stylesheet" href="style/style.moi1.css" media="all">
       <link rel="stylesheet" href="redigerevenement.css" media="all">
    
        

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script src="script/script.responsive.js"></script>
    
    


           <link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script 	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script 	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
    
    
     <link rel="stylesheet" href="../memberarea/css/bootstrap.min.css">
    <link rel="stylesheet" href="../memberarea/css/animate.css">
    <link rel="stylesheet" href="../memberarea/css/LineIcons.css">
    <link rel="stylesheet" href="../memberarea/css/owl.carousel.css">
    <link rel="stylesheet" href="../memberarea/css/owl.theme.css">
    <link rel="stylesheet" href="../memberarea/css/magnific-popup.css">
    <link rel="stylesheet" href="../memberarea/css/nivo-lightbox.css">
    
    <link rel="stylesheet" href="../memberarea/css/responsive.css">
        <link rel="stylesheet" href="../memberarea/css/produitsliste.css">
    
    
    

<style>.STA-content .STA-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .STA-post .STA-layout-cell {border:none !important; padding:0 !important; }
.ie6 .STA-post .STA-layout-cell {border:none !important; padding:0 !important; }


.form_col {
  display: inline-block;
  margin-right: 15px;
  padding: 3px 0px;
  width: 200px;
  min-height: 1px;
  text-align: justify;
}

</style></head>
<body>
<div id="STA-main">
<header class="STA-header">


    <div class="STA-shapes">

            </div>
<h1 class="STA-headline" data-left="2.11%">
    <a href="#">Administration LIBERTIS</a>
</h1>
             
</header>

<!-- Début menu -->
<?php
	include("structure/nav.php");
?>
<!-- Fin menu -->
    
    
    
     <?php
								
								
									$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
                                    $bdd->exec('SET NAMES utf8');
									
          
          $req = $bdd->query("SELECT * FROM participantevenement");
      
        
      
                    ?>
            
    
    
    
   <div class="container">
          <br>
          
          <h2> Gestion des participants aux évenements </h2>
 
          <br>
          <br>
  <div class="col-lg-12 col-sm-4">
       
       <table class="table">
    <thead>
      <tr>
        <th>Abonné</th>
        <th>Evenement choisi</th>
         
          
          <th> Vient avec un invité </th>
          <th>Statut </th>
          <th>Action </th>
      </tr>
    </thead>
    <tbody>
        
        
        
        
        <?php
        
        
         while(($donnees = $req->fetch())){
			
             $reqk = $bdd->query("SELECT * from users where pseudo = '" .$donnees["pseudouser"]. "'");
													while($donnees_user = $reqk->fetch()){
													$nomprenom =$donnees_user['nom'] . ' ' .$donnees_user['prenom'];
													}
													 $reqk->closeCursor();
             
             
              $reqt = $bdd->query("SELECT * from evenement where id_evenement = " .$donnees["idevenement"]);
													while($donnees_even = $reqt->fetch()){
													$libeleevenement =$donnees_even['libelle_evenement'];
													}
													 $reqt->closeCursor();
             
             
             
             if($donnees["inviteunami"] == "oui"){
                 $avecinvite = 'Vient avec Invité';
             }else{
                 $avecinvite = 'Vient sans Invité';
                 
             }
             
             
             
             
             
             
             
        ?>
      <tr>
        <td style="width: 15%;">
           <div class="exp-info">
                <h3 style="color:#FF8610;"><?php echo $nomprenom ;?></h3>
                           
               <br>
            </div>
              
          </td>
          
        <td>
           
            <div class="exp-desc">
                
            
             <h4><?php echo $libeleevenement ;?></h4>
            <br/>
            </div>
          
          </td>
          
        
         
           
            
            <td>
           
            <div class="exp-desc">
                
            
             <h4> <?php echo $avecinvite;?></h4>
            <br/>
            </div>
          
          </td>
          
            <td>
           
            <div class="exp-desc">
                
            
             <h4><?php echo $donnees["statut"] ;?></h4>
            <br/>
            </div>
          
          </td>
          
            <td>
           
            <div class="exp-desc">
                <p> </p>
             <form class="form-content" method="post" class="modalL" action="#">
         <!-- <button type="button" class="btn btn-primary" value = "1">Je participe</button> -->
                 <button id="btn-atc-2409" onClick="document.getElementById('temoin').value = this.value;" value="<?php echo $donnees["idparticipation"];?>" type="button"  title="Valider" class="btn btn-primary" name="addartpanier" data-toggle="modal" data-target="#myModal"><span><span>VALIDER</span></span></button>
            <p> </p>
              <button style="color:red;" id="btn-atc-2409" onClick="document.getElementById('temoin').value = this.value;" value="<?php echo $donnees["idparticipation"];?>" type="button"  title="Valider" class="btn btn-primary" name="addartpanier" data-toggle="modal" data-target="#myModal"><span><span>REJETER</span></span></button>
            
                
                
                
                
                </form>
          </td>
            
            
       
      </tr>     
      
    <?php } ?>
      </tbody>
</table>
         
   </div> 
 									<!-- Debut contenu -->
		
    </div>
    <br/><br/><br/>
    
    
    
    <footer class="STA-footer">
  <div class="STA-footer-inner">
<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
  </div>
</footer>
</body></html>