<php
     /* Cette fonction permet de securiser les données envoyées via les champs de formulaires en enlevant
     les saisies nuisibles */
     
      function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

     
?>