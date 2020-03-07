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
    
    <h2 style="margin-top:10px;">Enrégistrement des évenements et soirées.</h2>
										<hr />
										<p style="font-style:italic;font-size:10px;margin-top:0px;color:red; margin-left:100px; ">(Remplissez le formulaire suivant pour enrégistrer les partenaires.)</p>
											<!-- Debut contenu -->
											
    

    
    
    <?php                                                                                                                                                                                                                                                                                                     
												try
												{
													$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
													include("../config/config.php");
													$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
														
													if((isset($_POST["nom"])) || (isset($_POST["prenom"])) || (isset($_POST["ville"])) || (isset($_POST["age"])) || (isset($_POST["prix"])) || (isset($_POST["statut"]))) 
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
																$result=copy( $_FILES["fich"]["tmp_name"], '../images/imgespartenaire/'.$nom);	
																if($result==TRUE)
																{
																	$req = $bdd->prepare('INSERT INTO partenaires (nom_partenaire, prenom_partenaire, ville_partenaire,age_partenaire, description_partenaire, prix_partenaire,image_partenaire,statut) VALUES(?, ?, ?, ?, ?,?,?,?)');
																	$req->execute(array($_POST["nom"], $_POST["prenom"], $_POST["ville"], $_POST["age"], $_POST["description"], $_POST["prix"], $nom, 'Disponible'));
													
																	if($req)
																	{	
																		
																		
																		
																		$activite = "Enrégistrement  partenaire : ".$_POST["nom"] . " " . $_POST["prenom"] ;
																		$req2 = $bdd->prepare('INSERT INTO journal (nomauteur, activite, datejournal) VALUES(?, ?, NOW())');
																		$req2->execute(array($_SESSION["user_name"], $activite));
																		
																		$req2->closeCursor();
																	
																		?>
																		<div class="STA-succes"><?php echo $_POST["nom"] ." " .$_POST["prenom"];?> bien enrégistré(e)</div>
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
                                                        try{$req->closeCursor();}catch(Exception $e)
                                                        {}
															
														}
                                                   
													}
												catch(Exception $e)
												{
													die('Erreur : '.$e->getMessage());
												}
													?>
    
    
    
  

    
    
    
    
    
   <div id="global">
    <div id="gauche">

     
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
													
                                                    
 
 <div>
 <label for="nom">Nom :</label>
   <input type="text" name="nom" size="20" 
   maxlength="40" /></div>

    <p> <br/></p>
   
     <div>
 <label for="prenom">Prenom :</label>
   <input type="text" name="prenom" size="20" 
   maxlength="40" /></div>

    <p> <br/></p>
     
       
     
     <div class="descript">
  <label for="description">Description : </label>
   <textarea name="description" id="description" cols="20" rows="4">
   </textarea></div>
 <p> <br/></p> <p> <br/></p>
     
        <div>

                   
    <label style="font-weight:bold;" for="age" class="age">Age (En An): </label>
	<input type="number" min="18" step="100" id="age" name="age" size="58" required />
     </div>
     
    <p> <br/></p>
     
     
     <div class="ville">
  <label for="ville">Ville : </label>
   <textarea name="ville" id="ville" cols="20" rows="4">
   </textarea></div>
 <p> <br/></p> <p> <br/></p>
     
   
     
         <p> <br/></p> <p> <br/></p>
               <div class="prix">
    <label style="font-weight:bold;" for="prix" class="prix">Prix (En F CFA): </label>
	<input type="number" min="500" step="100" id="prix" name="prix" size="58" required />
            </div>
                   
                   <p> <br/></p> <p> <br/></p>	
    
  
        

 <p>
 <input type="submit" value="Envoyer" />
     
 <input type="reset" value="Annuler" />
     <br/><br/>
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

                  
                $req = $bdd->query('SELECT DISTINCT * FROM partenaires');
									
                  ?>
   
    
     <table  style="width: 50%; float:right;" class="latable">
													<tr>
														<th colspan="6" style="font-size:24px;font-weight:normal;">Liste des partenaires</th>
													</tr>
                   
                  
                  <?php
                  while($donnees = $req->fetch())
													{
													?>
													<tr>
														<td style="width: 20%;padding:0px 15px; height:150px">
															<?php if($donnees["image_partenaire"] != "")
															{
															?>
															<p>
																<img src="../images/imgespartenaire/<?php echo $donnees["image_partenaire"];?>" style="max-width:70px;max-height:100px;border-radius:60px;" />
															</p>
															<?php
															}
															?>
															<p style="font-size:15px;color:#01A2F9;text-align:center;"><?php echo $donnees["nom_partenaire"] . " " . $donnees["prenom_partenaire"] ;?> </p>
														</td>
														
                                                        <td style="width: 30%;padding:0px 15px;">
															<p><?php echo $donnees["description_partenaire"]; ?></p>
														</td>
                                                        
                                                        <td style="width: 20%;padding:0px 15px;">
															<p style="color: rgb(250, 93, 15);font-size:15px;text-align:center;"><?php echo $donnees["age_partenaire"] . " an(s) "; ?> </p>
														</td>
														
                                                        
                                                        <td style="width: 20%;padding:0px 15px;">
															<p style="color: rgb(250, 93, 15);font-size:15px;text-align:center;"><?php echo $donnees["prix_partenaire"]; ?> F CFA</p>
														</td>
														<td style="width: 30%;padding:0px 15px;">
															<p><?php echo $donnees["statut"]; ?></p>
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