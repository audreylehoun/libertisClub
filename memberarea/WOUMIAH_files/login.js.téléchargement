// JavaScript Document
$(document).ready(function() {

    
	$(document).on("click",'#connectlogin',function(e){
    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

    var email = encodeURIComponent( $('#login-email').val() ); // on sécurise les données
    var password = encodeURIComponent( $('#login-password').val() );
    var num = encodeURIComponent( $('#phone').val() ); // on sécurise les données

        var lien_seminaire = encodeURIComponent( $('#lien-seminaire').val() );
        if($('#lien-seminaire').val()==""){
            lien_seminaire = "vide"
        }


    if((num != "" && password != "") || (email != "" && password != "")|| (num != "" && email != "" && password != ""))
	{ // on vérifie que les variables ne sont pas vides
        $("#phonefull").val(iti.getNumber());
          
        $.post(
           '/connect', // on donne l'URL du fichier de traitement
			{

			password : $("#login-password").val(),
                email : $("#login-email").val(),
                full_number : $("#phonefull").val(),
				autretest : "test",
                lien_seminaire : lien_seminaire,
			},
		 function(data)
		 {

             if(data['type'] == 'seminaire'){

                 document.location.href="/inscription-seminaire";
             }


             if(data['type'] == 'connect')
             {
                 document.location.href="/timeline/mailbox";
                 // Le membre est connecté
                 /* $("#resultat").html("<p style='color: green'>Vous avez été connecté avec succès !</p>"); */

             }


             console.log('####### Dans le retour de la fonction ##################  ');

		 	//verifie si labonnee a deja excéder 3 essai
             if(data['type'] =='excessif')
             {
             	// Le membre n'a pas été connecté
                 $('#resultat').html("<p></p>");
                 $('#resultat').append("<p>" + data['valeur']+  "</p>"); // on ajoute le message dans la
                 return;
             }
             //fin verifie si labonnee a deja excéder 3 essai

             if(data['type'] == 'suspendu'){
                 $('#resultat').html("<p></p>");
                 $("#resultat").html("<p>Votre compte est suspendu !</p>");
                 return;
             }
                else
				{
					if(data['type'] == '2etapes')
					{

					$("#resultat").html("<p>Vous avez activez la vérification par étapes, Vous serez redirigé !</p>");
					document.location.href="/etapes/"+ data['id']+"";
					}
					else
					{

						if(data['type'] == 'echec')
						{
							 // Le membre n'a pas été connecté
                            $('#resultat').html("<p></p>");
							$('#resultat').append("<p>" + data['valeur']+  "</p>"); // on ajoute le message dans la
							return;
						}else
						{
							/*
							* //verifie si labonnee a deja excéder 3 essai
							* */
								if(data['type'] == 'bloquer')//compte bloquer
								{
								 // Le membre n'a pas été connecté
                                    $('#resultat').html("<p></p>");
									$("#resultat").html("<p>Votre compte est bloqué !</p>");
									return;
								}else
								{
									if(data['type'] == 'supprimer')//compte bloquer
									{
									 // Le membre n'a pas été connecté
                                        $('#resultat').html("<p></p>");
									 $("#resultat").html("<p> Numero ou E-mail ou mot de passe incorrect </p>");
									 return;
									}
									else
									{
										if(data['type'] == 'inexistant')//compte bloquer
										{
										 // Le membre n'a pas été connecté
                                            $('#resultat').html("<p></p>");
										 $("#resultat").html("<p>Numero ou E-mail ou mot de passe incorrect</p>");
										 return;
										}
										else if(data['type'] == 'confirmation')//compte non confirmé
										{
											 // Le membre n'a pas été connecté
										 document.location.href="/confirmation-connexion/"+ data['id']+"";
										}
										//condition pour un compte suspendu

									}
								}
						//   }  // a supprimer
						}
					}
				}
		 },'json'
		 );
	}else{$("#resultat").html("<p>Les champs telephone ou email et mot de passe sont requis<p>");}

	// return false;

	});
});