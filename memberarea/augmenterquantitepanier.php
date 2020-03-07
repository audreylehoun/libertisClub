<?php
if(isset($_GET["idpanierachat"]) && isset($_GET["qte"]) && isset($_GET["lapage"]))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("../config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
        // RECUPERATION DU PRIX UNITAIRE
        $req = $bdd->query('SELECT * FROM panierachat WHERE id_panierachat = '.$_GET["idpanierachat"]);
											$donnees = $req->fetch();
											
											$leprixunitaire = $donnees["prixunit_panierachat"];
											
											$req->closeCursor();
        
        // CALCUL DU MONTANT TOTAL 
        
        $montanttotal= $leprixunitaire * (int)$_GET["qte"];
        
        
        
		echo 	'UPDATE panierachat SET qte_panierachat = ' . $_GET["qte"] . ' and  montant_panierachat = ' . $montanttotal . ' where id_panierachat ='.$_GET["idpanierachat"];
        
        
        echo '\n';
        echo $montanttotal;
        $req = $bdd->query('UPDATE panierachat SET qte_panierachat = ' . $_GET["qte"] . ' ,  montant_panierachat = ' . $montanttotal . ' where id_panierachat ='.$_GET["idpanierachat"]);
		$req->closeCursor(); 	
        
        
        
      /*  $req = $bdd->prepare('UPDATE panierachat SET qte_panierachat = :qte_panierachat WHERE id_panierachat = :idpanierachat');
													$req->execute(array(
													
													'idpanierachat' => $_GET["idpanierachat"],
													'qte_panierachat' => $_GET["qte"]
                                                    
                                                    ));
													 
													$req->closeCursor();
			*/
        
        
		//header('Location:ajoutpanier.php');
		header('Location:'.$_GET["lapage"]);
    
    }
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}		    
}

?>