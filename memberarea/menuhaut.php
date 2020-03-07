<nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar" id="cont" style="margin-top:25px;">
       
         
          
          <div class="container">
          <a href="produit.php" class="navbar-brandd" id="lelogo"><img src="img/logo.png" alt=""></a>    
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="produit.php">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll"  href="produitsboisson.php?catpro=tout&pro=boi">Produits et Prestations </a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="produitspartenaires.php?tranage=tout">Réserver un partenaire</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="produitevenement.php">Evenements  et Soirées</a>
              </li>       
              <li class="nav-item">
                <a class="nav-link page-scroll" href="messagerecu.php">Discussion / Messages</a>
              </li>     
             
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li> 
                 <li class="nav-item">
                <p style="color:#0000FF;"> .        .      <br/></p>
              </li> 
               
              
              <li class="nav-item">
                <div id="lepanier">
                    <!-- Espace article en panier -->
														<?php
														 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
                                    $bdd->exec('SET NAMES utf8');
                        
                        $req = $bdd->query('SELECT COUNT(pseudo_panierachat) AS nbrepseudopanierachat FROM panierachat WHERE pseudo_panierachat = "'.$_SESSION["pseudousers"].'" AND statutachat_panierachat = "non paye" ');
														$donnees = $req->fetch();
														
														$nbrepseudopanierachat = $donnees["nbrepseudopanierachat"];
														
														$req->closeCursor();
														?>
														<!-- <br /><p style="font-size:45px;color:rgb(50, 178, 50);"><?php echo $nbrepseudopanierachat; ?></p>
														
														<p style="font-size:20px;margin-top:30px;"><a href="ajoutpanier.php" style="color:#404040;text-decoration:none;">Articles en panier</a></p>
													 Fin article en panier -->
                 
          
                        
                                     
                 <button type="button" class="btn btn-primary" style="background:#FF8610; margon-left:25;" data-toggle="modal" data-target="#monModalPanier">
  Mon Panier( <?php echo $nbrepseudopanierachat; ?> )
</button>       
          
                    
                       
                     </div>
              </li>
            </ul>
          </div>
        </div>
      </nav> 