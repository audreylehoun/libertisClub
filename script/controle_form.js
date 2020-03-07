(function() { // On utilise une IEF pour ne pas polluer l'espace global
   
    // Fonction de désactivation de l'affichage des "tooltips"
   
    function deactivateTooltips() {
    var spans = document.getElementsByTagName('span'),
        spansLength = spans.length;
    for (var i = 0 ; i < spansLength ; i++) {
        if (spans[i].className == 'tooltip') {
            spans[i].style.display = 'none';
        }
    }
  }
   
   
    // La fonction ci-dessous permet de récupérer la "tooltip" qui correspond à notre input
   
    function getTooltip(element) {
   
        while (element = element.nextSibling) {
            if (element.className === 'tooltip') {
                return element;
            }
        }
       
        return false;
   
    }
	 
    // Fonctions de vérification du formulaire, elles renvoient "true" si tout est ok
   
    var check = {}; // On met toutes nos fonctions dans un objet littéral
	check['nom'] = function(id) {
   
        var name = document.getElementById(id),
            tooltipStyle = getTooltip(name).style;
   
        if (name.value.length >= 4) {
            name.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            name.className = 'incorrect';
			            tooltipStyle.display = 'inline-block';
            return false;
        }
   
    };
   
    check['prenom'] = check['nom']; // La fonction pour le prénom est la même que celle du nom
	
	check['pseudo'] = function() {
   
        var pseudo = document.getElementById('pseudo'),
            tooltipStyle = getTooltip(pseudo).style;
       
        if (pseudo.value.length >= 6) {
            pseudo.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            pseudo.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }
   
    };
   
    check['password'] = function() {
   
        var password = document.getElementById('password'),
            tooltipStyle = getTooltip(password).style;
        
        if (password.value.length >= 8) {
            password.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            password.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }
   
    };
	
	
   
    check['confirmation'] = function() {
   
        var password = document.getElementById('password'),
            confirmation = document.getElementById('confirmation'),
            tooltipStyle = getTooltip(confirmation).style;
        
        if (password.value == confirmation.value && confirmation.value != '') {
            confirmation.className = 'correct';
            tooltipStyle.display = 'none';
			            return true;
        } else {
            confirmation.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }
   
    };
	// Mise en place des événements
   
    (function() { // Utilisation d'une fonction anonyme pour éviter les variables globales.
   
        var myForm = document.getElementById('myForm'),
            inputs = document.getElementsByTagName('input'),
            inputsLength = inputs.length;
   
        for (var i = 0 ; i < inputsLength ; i++) {
            if (inputs[i].type == 'text' || inputs[i].type == 'password') {
   
                inputs[i].onkeyup = function() {
                    check[this.id](this.id); // "this" représente l'input actuellement modifié
                };
   
            }
        }
   
   
        myForm.onreset = function() {
   
            for (var i = 0 ; i < inputsLength ; i++) {
                if (inputs[i].type == 'text' || inputs[i].type == 'password') {
                    inputs[i].className = '';
                }
				            }
   
            deactivateTooltips();
   
        };
   
    })();
   
   
    // Maintenant que tout est initialisé, on peut désactiver les "tooltips"
   
    deactivateTooltips();
})();