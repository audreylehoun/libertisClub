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
									
          
          $req = $bdd->query("SELECT * FROM reservationpartenaire");
      
        
      
                    ?>
            
    
    
    
   <div class="container">
          <br>
          
          <h2> Gestion des réservations de partenaires </h2>
 
          <br>
          <br>
  <div class="col-lg-12 col-sm-4">
       
       <table class="table">
    <thead>
      <tr>
        <th>Abonné</th>
        <th>Partenaire choisie</th>
         
          
          <th>Période choisie </th>
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
             
             
              $reqt = $bdd->query("SELECT * from partenaires where id_partenaire = " .$donnees["id_partenaire"]);
													while($donnees_even = $reqt->fetch()){
													$nompartenaire =$donnees_even['nom_partenaire'] . ' ' .$donnees_even['prenom_partenaire'];
													$agepartenaire	= 	$donnees_even['age_partenaire'];				
                                                    $prixpartenaire = $donnees_even['prix_partenaire'];
                                                    $villepartenaire =    $donnees_even['ville_partenaire'];  
                                                    $imagepartenaire = $donnees_even['image_partenaire']; 
                                                    }
													 $reqt->closeCursor();
             
           $dateaccordee =  $donnees["date_demandee"] . ' à ' .$donnees["heuredemandee"];
           $lepseudo = $donnees["pseudouser"];  
             
             
        ?>
      <tr>
        <td style="width: 15%;">
           <div class="exp-info">
                <h2 style="color:#FF8610;"><?php echo $nomprenom ;?></h2>
               <br>
               <h1> A envoyé la demande depuis:</h1>
               <h1> <strong><?php echo $donnees["date_reservation"] ;?></strong></h1>
                 <script> alert($donnees["date_reservation"])</script>          
               <br>
            </div>
              
          </td>
          
          
          
          
          
        <td>
           
            <div class="exp-desc">
                
            
             <h2><?php echo $nompartenaire ;?></h2>
            <br/>
                <p> <?php echo $agepartenaire ;?>  <br/> résidant à <strong> <?php echo $villepartenaire ;?></strong></p>
                
                <script> alert( $donnees["image_partenaire"])</script>
                <?php if($imagepartenaire != "")
															{
															?>
															<p>
																<img src="../images/imgespartenaire/<?php echo $imagepartenaire;?>" style="max-width:120px;max-height:120px;border-radius:5px;" />
															</p>
               
                
                
                
                <?php } ?>
                
                
            </div>
          
          </td>
          
        
         
           
            
            <td>
           
            <div class="exp-desc">
                
            
             <h4> Elle est demandée pour le: <br/> <?php echo $donnees["date_demandee"] . ' à ' .$donnees["heuredemandee"] ;?></h4>
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
                              
                
                <form class="form-content" method="post" class="modalL" action="envoyerdevi.php">
         <!-- <button type="button" class="btn btn-primary" value = "1">Je participe</button> -->
               
                 <input type="hidden" name="pseudo" id="pseudo" value ="<?php echo $lepseudo ;?>" />
                 
                 <input type="hidden" name="nomuser" id="nomuser" value ="<?php echo $nomprenom ;?>" />
                 <input type="hidden" name="prenompartenaire" id="prenompartenaire" value ="<?php echo $nompartenaire ;?>"/>
                 <input type="hidden" name="dateaccordee" id="dateaccordee" value ="<?php echo $dateaccordee ;?>"/>
                 
                 
                 <label type="label" for="montant" Montant facturé></label>
                 <input type="text" name="montant" placeholder="Montant retenu" id="montant"/>
                  <p> </p>
                
                  <label type="label" for="commentaire" Montant facturé></label>
                 <input type="textarea" name="commentaire" style="height:60px;" placeholder="Taper un Commentaire" id="commentaire"/>
                 <p></p>
                 
                 <button id="btn-atc-2409" onClick="document.getElementById('temoin').value = this.value;" value="<?php echo $donnees["id_partenaire"];?>" type="sumit"  title="Envoyerledefi" class="btn btn-primary" name="addartpanier" data-toggle="modal" data-target="#myModal"><span><span>Envoyer le devis </span></span></button>
            <p> </p>
              </form>
            </div> 
                
          </td>
            
            
       
      </tr>     
      
    <?php } ?>
      </tbody>
</table>
         
   </div> 
 		<br/><br/><br/>							<!-- Debut contenu -->
		
    </div>
    
    
    
    
    <footer class="STA-footer">
  <div class="STA-footer-inner">
<p>Copyright © 2015 - <?php echo date("Y");?>. Tous droits réservés.</p>
  </div>
</footer>
</body></html>