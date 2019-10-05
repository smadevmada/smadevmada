<?php
# NOUS CONTACTER
require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/include/general.php');
?>

<div class="container ">
	<section id="contact" class="section mb-4 ">
		<h2 class="blue-text text-center text-uppercase font-weight-bold my-5 pt-5 wow fadeIn " data-wow-delay="0.2s ">
			Contacter nous <i class="fas fa-sms"></i>
		</h2>

    	<p class="text-center w-responsive mx-auto grey-text mb-5 wow fadeIn " data-wow-delay="0.2s ">
    		N'hesitez pas &agrave; nous contacter pour plus d'informations sur nos services. Ainsi , vous trouverez ci-dessous nos coordonn&eacute;es. On serais bien ravis de collaborer avec vous.
		</p>
		<div class="row wow fadeIn " data-wow-delay="0.4s ">
			<div class="col-md-8 mb-5">
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="contact-nom" class="form-control champ-contact">
								<label for="contact-nom"id="label-contact-nom">Votre nom</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="contact-email" class="form-control champ-contact">
								<label for="contact-email"id="label-contact-email">Votre email</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<input type="text" id="contact-objet" class="form-control champ-contact">
								<label for="contact-objet"id="label-contact-objet">Objet</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<textarea type="text" id="contact-message" class="md-textarea form-control champ-contact" rows="3"></textarea>
								<label for="contact-message">Messages</label>
							</div>
						</div>
					</div>
				</form>
				<div class="text-center text-md-left mt-4">
					<a class="btn btn-rounded btn-outline-black waves-effect " id="contact-send">
						Envoyer <i class="far fa-paper-plane"></i>
					</a>
				</div>
			</div>
			<div class="col-md-4 ">
				<ul class="contact-icons list-unstyled text-center">
					<li>
						<i class="fas fa-map-marker-alt fa-2x "></i>
						<p class="grey-text ">Antananarivo 101, Madagascar</p>
					</li>
					<li>
						<i class="fas fa-phone fa-2x "></i>
						<p class="grey-text ">+261 34 04 034 04</p>
					</li>
					<li>
						<i class="fas fa-envelope fa-2x "></i>
						<p class="grey-text ">smadevmada@gmail.com</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
</div>
