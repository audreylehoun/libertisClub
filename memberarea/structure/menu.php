<?php
include("mesfonctions.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>navbar example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style>
.navbar-default {
  background-color: white;
  border-color: white;
}
.navbar-default .navbar-brand {
  color: #d7e2e9;
}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
  color: #e5dbdb;
}
.navbar-default .navbar-text {
  color: #d7e2e9;
}
.navbar-default .navbar-nav > li > a {
  color: #2366A8;
    font: 17px Arial; 
  
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
  color: #FF8610;
      background:lightblue;
    border-radius: 10px;
      

}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: white;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #2366A8;
    font: 13px Arial; 
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #FF8610;
      background:lightblue;
    border-radius: 10px;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #69899f;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
  color: #e5dbdb;
  background-color: #425766;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
  color: #e5dbdb;
  background-color: #425766;
}
.navbar-default .navbar-toggle {
  border-color: #425766;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background-color: #425766;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #d7e2e9;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #d7e2e9;
}
.navbar-default .navbar-link {
  color: #d7e2e9;
}
.navbar-default .navbar-link:hover {
  color: #e5dbdb;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #d7e2e9;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #e5dbdb;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #e5dbdb;
    background-color: #425766;
  }
}
    #menuboutique:hover ul{
        
        display:block;
position:relative;
    }  
    
    
    
</style>
</head>
<body >
  <div class="menus" style="background:white; padding:8px;height:90px;
                     box-shadow: 2px 2px 2px 1px red;       
                            
                            ">  
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" style="visibility:hidden;"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li class="active" style="visibility:hidden;"><a href="#">Home <span class="sr-only">(current)</span></a></li>

          <!--<li><a href="../index.php?cnt=ok">ACCUEIL</a></li> -->
       
	   <li><a href="indexconnecte.php">ACCUEIL</a></li>
	   
          <li><a href="boutique.php">BOUTIQUE</a></li>
        
                      
           
              
              <li><a href="historiquetransaction.php">MES TRANSATIONS</a></li>
           <li><a href="nouscontacter.php">CONTACT</a></li>
              <li class="active" style="visibility:hidden;"><a href="#">Home <span class="sr-only">(current)</span></a>
          
          
          </li>
       
         
      </ul>
      <form class="navbar-form navbar-left" role="search" action="detailpanier.php" method="post">
        <div class="form-group">
            
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
          
                    
                    <?php
          /* Fonction renvoyant l'adresse de la page actuelle */

 $adres = $_SERVER['PHP_SELF'];
    $i = 0;
    foreach($_GET as $cle => $valeur){
        $adres .= ($i == 0 ? '?' : '&').$cle.($valeur ? '='.$valeur : '');
        $i++;
    }

                   $adresse = $adres;



?>
                        
                     <input type="hidden" name="lapageencours" id="lapageencours" value="<?php echo $adres ?>"/> 
                    
                 <button type="submit" class="btn btn-primary" style="background:#FF8610; margon-left:25;" >
  Mon Panier( <?php echo $nbrepseudopanierachat; ?> )
</button>       
          
                    
                       
                     </div>
             
         
        </div>
       
      </form>
      <ul class="nav navbar-nav navbar-right">
        
       
          <li class="dropdown">
            
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon Compte <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editpwmtpass.php">Mes informations personnelles</a></li>
            <li><a href="index.php?deconnect=ok">Déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
    
  </div>  
               <?php
include("modalpanier.php");
?>
 
</body>
</html>
