$(document).ready(function(){

	$('body').on('focus', '.champ-contact', function(){
		$(this).removeAttr('style');
		$(this).removeClass('champ-invalide');
		$(this).next().removeAttr('style');
	});
	
	$('body').on('blur', '#contact-email', function(){
		var email = $(this).val();
		if (email != '' && email != 'undefined')
		{
			if (!validation_email(email))
			{
				$(this).css({'color':'#f00', 'border-bottom':'1px #f00 solid'});
				$(this).next().css('color','#f00');
			}
		}
	});

	$('body').on('click', '#contact-send', function(){
		var nom = $('#contact-nom').val();
		var email = $('#contact-email').val();
		var objet = $('#contact-objet').val();
		var msg = $('#contact-message').val();

		if (trim(nom) == '' || nom == 'undefined')
		{
			$('#contact-nom').addClass('champ-invalide');
		}

		if (trim(email) == '' || email == 'undefined')
		{
			$('#contact-email').addClass('champ-invalide');
		}
		else if (!validation_email(email))
		{
			$('#contact-email').addClass('champ-invalide');
		}

		if (trim(objet) == '' || objet == 'undefined')
		{
			$('#contact-objet').addClass('champ-invalide');
		}

		if (trim(msg) == '' || trim(msg).length <= 10 || msg == 'undefined')
		{
			$('#contact-message').addClass('champ-invalide');
		}

		if ($('.champ-invalide').length > 0)
		{
			$('.champ-invalide').each(function(){
				$(this).css({'color':'#f00', 'border-bottom':'1px #f00 solid'});
				$(this).next().css('color','#f00');
			});
			return false;
		}
		else
		{
			$('body').append('<div id="envoi-contact" class="spinner-border" role="status" style="position: fixed; top: 30%; left: 45%; width: 100px; height: 100px;"><span class="sr-only">Envoi en cours...</span></div>');
			$.ajax({
				url: "http://"+location.hostname+"/smadev/page/ajax/ajax_envoi_contact.php",
				type: 'POST',
				data: {
					nom : nom,
					email : email,
					objet : objet,
					msg : msg
				},
				success: function(){
					$('body').append('<div id="envoi-reussi" style="display: none; position: fixed;top: 30%;right: 45%;width: 100px;height: 100px;background: #ffffff;text-align: center;border-radius: 50%;padding-top: 7px;color: #1b6d86;border: 1px solid #b6cdda;border-right: none;box-shadow: 0px 0px 10px -2px #5a5a5a;font-size: 3.8em;"><i class="fas fa-check"></i></div>');
					setTimeout(function(){
						$('#envoi-contact').remove();
						$('#envoi-reussi').fadeIn(500, 'linear', function(){
							$('#envoi-reussi').fadeOut(1000, 'linear', function(){
								$('#envoi-reussi').remove();
								setTimeout(function(){
									$(window).scrollTop(0);
								}, 500);
							});
						});
						$('.champ-contact').each(function(){
							$(this).val('');
						});
					}, 500)
				}
			});
		}

	});

});

function validation_email(email)
{
    var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(String(email).toLowerCase());
}

function trim(text)
{
	return text.replace(/\s/g,'');
}
