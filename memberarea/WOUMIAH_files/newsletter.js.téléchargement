// JavaScript Document
$(document).ready(function() {
    
	$('#newsletter_signup').click(function(e){
		
    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

    var email = encodeURIComponent( $('#newsletter-email').val() ); // on sécurise les données
    if(email != ""){ // on vérifie que les variables ne sont pas vides
        $.post(
           'newsletters', // on donne l'URL du fichier de traitement
			{
            email : $("#newsletter-email").val(),
			password : $("#login-password").val()
			},
		 function(data){
                if(data['type'] == 'ok')
				{
					$("#resnews").html("<p>Vous venez de souscrire à la newsletters WOUMI</p>")
				}else
				{
					if(data['type'] == 'deja')
					{
					$("#resnews").html("<p>Vous êtes déja inscrit à la newsletter WOUMI !</p>");
					}
				
				}
		 },'json'
		 );}else{$("#resnews").html("<p>Indiquez votre adresse email<p>");}
    });
});