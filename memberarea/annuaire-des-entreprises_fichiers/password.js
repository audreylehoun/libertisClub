// JavaScript Document
$(document).ready(function() {
    
	$('#resetpassword').click(function(e){
    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

    var email = encodeURIComponent( $('#forget-email').val() ); // on sécurise les données
    if(email != ""){ // on vérifie que les variables ne sont pas vides
        $.post(
           'passwordupdate', // on donne l'URL du fichier de traitement
			{
            email : $("#forget-email").val()
			},
		 function(data){
                if(data['type'] == 'update')
				{
					
				$("#news").html("<p>Modification du mot de pass terminée avec succès, veillez vous connecter</p>");
				}else
				{
					if(data['type'] == 'nomatch')
					{
					$("#news").html("<p>l'adresse email saisie n'est pas reconnu</p>");
					}
				
				}
		 },'json'
		 );}else{$("#news").html("<p>Indiquez votre adresse email<p>");}
    });
});