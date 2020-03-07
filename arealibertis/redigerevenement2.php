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
    
    <h3>Enrégistrement des produits et prestations</h3>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red;">(Remplissez les formulaires suivants pour enrégistrer les produits et les prestations.)</p>
											<!-- Debut contenu -->
											
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    <?php                                                                                                                                                                         
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
													if((isset($_POST["libelle"])) || (isset($_POST["descript"])) || (isset($_POST["date"])) || (isset($_POST["Heure"])) || (isset($_POST["prixprdtsvce"]))) 
													{	
														if($_FILES["fich"]["name"] != "")
														{
															$nom = $_FILES["fich"]["name"];
															//Enregistrement et renommage du fichier
															$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
															//1. strrchr renvoie l'extension avec le point (« . »).
															//2. substr(chaine,1) ignore le premier caractère de chaine.
															//3. strtolower met l'extension en minuscules.
															$extension_upload = strtolower( substr(
															strrchr($_FILES["fich"]["name"], '.') ,1) );
															if ( in_array($extension_upload,$extensions_valides) )
															{
																$result=copy( $_FILES["fich"]["tmp_name"], '../images/imgesevenement/'.$nom);	
																if($result==TRUE)
																{
																	$req = $bdd->prepare('INSERT INTO evenement (libelle_evenement, description_evnenement, date_evenement,heure_evenement, prix_evenement, image_evenement,statut) VALUES(?, ?, ?, ?, ?,?,?)');
																	$req->execute(array($_POST["libelle"], $_POST["description"], $_POST["date"], $_POST["heure"], $_POST["prixprdtsvce"], $nom, 'En Cours'));
													
																	if($req)
																	{	
																		
																		
																		
																		$activite = "Enrégistrement  évenement : ".$_POST["libelle"] ;
																		$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																		$req2->execute(array($_SESSION["user_name"], $activite));
																		
																		$req2->closeCursor();
																	
																		?>
																		<div class="STA-succes"><?php echo $_POST["libelle_evenement"];?> bien enrégistré(e)</div>
																		   <?php
																	   
																	}
																	else
																	{
																	   echo "<div class='STA-echec'>L'enrégistrement a échoué </div>";	   
																	}
																	$req->closeCursor();
																}
																 else
																{
																	echo "<div class='STA-echec'>Désolé, l'image n'a été insérée</div>";
																}
															}
															else
															{
																echo "<div class='STA-echec'>L'extension de l'image n'est pas correcte. Choisissez les images de type jpg, jpeg, png ou gif</div>";
															}
														
															   
															}
															else
															{
															   echo "<div class='STA-echec'>L'enrégistrement a échoué </div>";	   
															}
															$req->closeCursor();
														}
                                                
													}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
													?>
    
    
    
  

    
    
    
    
      
    <div id="global">
    <div id="gauche">
        <!--
    <div iclass="bloc_prestation" id="bloc_prestation">
        <ul>
            <li><a href="index.html">     Consulter les repas</a></li>
            <hr>
                <li><a href="menuDyn.html">     Consulter les boissons</a></li>
            <hr>
                <li><a href="inserer_images2.html">      Consulter les fruits</a></li>
            <hr>
                <li><a href="class_texte.html">       Choisissez votre partenaire</a></li>
            <hr>
                <li><a href="class_texte.html">       Autres produits</a></li>

        </ul> 
    </div>
    <br/>
        <br/>
       
        -->
        	
        
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
       

     
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
													
                                                    
 
 <div>
 <label for="libelle">Libelé de l'évenement/soirée :</label>
   <input type="text" name="libelle" size="20" 
   maxlength="40" style="widht:70px;" /></div>

    <p> <br/></p>
    <div class="descript">
  <label for="description">Description de l'évenement :</label>
   <textarea name="description" id="description" cols="20" rows="4">
   </textarea></div>
 <p> <br/></p> <p> <br/></p>
    
    <div class="date">
   <label for="date">Date :</label>
   <input type="date" name="date" size="120" 
   maxlength="40" /></div>
     
     <p> <br/></p> <p> <br/></p>
    
          <div class="heure">
    <label for="heure">Heure :</label>
   <input type="heure" name="heure" size="120" 
          maxlength="40" />   </div>
        
               <p> <br/></p> <p> <br/></p>
              
    <label style="font-weight:bold;" for="prixprdtsvce" class="prix">Prix (En F CFA): </label>
	<input type="number" min="500" step="100" id="prixprdtsvce" name="prixprdtsvce" size="58" required />
				 <p> <br/></p> <p> <br/></p>									
    
        
        

 <p>
 <input type="submit" value="Envoyer" />
 <input type="reset" value="Annuler" />
 </p>
              
              <p>
														<label style="font-weight:bold;" class="form_col">Vignettes : </label>
														<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
														<input type="file" name="fich" size="50" />
													</p>
    </form>
                                               
        </div>
 <br/>
  
          <div id="droit">
        
       
        
        <?php 
              
                 
                  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
									include("../config/config.php");
									$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);

                  
                $req = $bdd->query('SELECT DISTINCT * FROM evenement ORDER BY date_evenement');
									
                  ?>
    

                 
    
    
    
     <table  style="width: 50%; float:right;" class="latable">
													<tr>
														<th colspan="4" style="font-size:24px;font-weight:normal;">Evenements / Soirées</th>
													</tr>
                   
                  
                  <?php
                  while($donnees = $req->fetch())
													{
													?>
													<tr>
														<td style="width: 20%;padding:0px 15px;">
															<?php if($donnees["image_evenement"] != "")
															{
															?>
															<p>
																<img src="../images/imgesevenement/<?php echo $donnees["image_evenement"];?>" style="max-width:70px;max-height:70px;border-radius:60px;" />
															</p>
															<?php
															}
															?>
															<p style="font-size:15px;color:#01A2F9;text-align:center;"><?php echo $donnees["libelle_evenement"]; ?></p>
														</td>
														<td style="width: 20%;padding:0px 15px;">
															<p style="color: rgb(250, 93, 15);font-size:15px;text-align:center;"><?php echo $donnees["prix_evenement"]; ?> F CFA</p>
														</td>
														<td style="width: 30%;padding:0px 15px;">
															<p><?php echo $donnees["description_evnenement"]; ?></p>
														</td>
                                                        <td style="width: 30%;padding:0px 15px;">
															<p><?php echo $donnees["date_evenement"] .' ' . $donnees["heure_evenement"]; ?></p>
														</td>
                                                        
                                                        <td style="width: 30%;padding:0px 15px;">
															<p>																<input onclick="<?php envoimail(); ?> ?');" type="submit" name="addartpanier" value="Publier" width="50" />
                                                                </p>
														</td>
                                                        
                                                                                                                
                                                        
													</tr>
                    
                      
													<?php
													}
													$req->closeCursor(); ?>
                  
                  </table>
                  
                   </div>  
                  
             <?php 
        
                                                  
                function envoimail(){
                    
                }
                                                    
                                                    
                                                    
                ?>                                    
                                                    
                                                   
                                                    
                                                    
    
    


</div>


</body></html>