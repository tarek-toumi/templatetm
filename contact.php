<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" lang="fr-fr" charset="UTF-8">
	<head>
		<title>Tunimarine - Contact</title>
		<?php include 'templates/includes.html';?>
		<link type="text/css" href="styles/services.css" rel="stylesheet" media="all" />
		<link type="text/css" href="styles/contact.css" rel="stylesheet" media="all" />
    	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=fr-FR"></script>
    	<script type="text/javascript" src="/script/contact.js"></script>
	</head>
	
	<body>
		<!--Header-->
		<?php $activeLink = "contact"; include 'templates/header.php';?>

		<!--Content-->
		<div class="content_container">
			<div class="container_12">
				<!-- rightContainer-->
				<div class="prefix_6">
					<div class="grid_5">
						<div class="col3">
							<h2>Tunimarine Contact</h2>
							<p>
								<strong>Adresse:</strong> Zone Industrielle Hergla.<br />
								<strong>Code postal:</strong> 4012.<br />
								<strong>Ville:</strong> Sousse.<br />
								<strong>Pays:</strong> Tunisie.<br />
								<strong>Téléphone:</strong> +216 73 25 13 14.<br />
								<strong>Téléphone:</strong> +216 26 48 08 68.<br />
								<strong>Fax:</strong> +216 73 25 17 26.<br />
								<strong>Email:</strong> <a href="mailto:info@tunimarine.com">info@tunimarine.com</a>.<br />
								<strong>Site Web:</strong> <a target="_blank" href="http://www.tunimarine.com"> http://www.tunimarine.com </a>.
							</p>
						</div>
					</div>
				</div>
				<!-- rightContainer-->
				<div class="prefix_6">
					<div class="grid_5">
						<div class="col3">
							<h2>Nous envoyer un mail</h2>
						</div>
						<div class="col3 contact_item">
							<label id="name_textmsg" for="contact_name">Votre nom: </label>
							<input type="text" value="" size="30" id="contact_name" name="nom" class="inputbox">
						</div>
						<div class="col3 contact_item">
							<label for="contact_email" id="email_textmsg">Votre e-mail: </label>
							<input type="text" value="" size="30" id="contact_email" name="email" class="inputbox required validate-email">
						</div>
						<div class="col3 contact_item">
							<label for="contact_subject" id="subject_textmsg">Objet: </label>
							<input type="text" value="" size="30" id="contact_subject" name="subject" class="inputbox">
						</div>
						<div class="col3 contact_item">
                            <label for="contact_text" id="contact_textmsg">Saisissez votre message:</label>
                            <br>
                            <textarea rows="8" cols="50" id="contact_text" name="message" class="inputbox required"></textarea>
						</div>
						<div class="col3 contact_item">
                    		<input type="checkbox" value="1" id="contact_email_copy" name="email_copy">
                    		<label for="contact_email_copy" id="label_email_copy">Recevoir une copie</label>
                    		<button type="submit" class="button validate">Envoyer</button>
						</div>
					</div>
				</div>
				<!-- rightContainer-->
				<div class="prefix_fullwidth">
					<div class="grid_5">
						<div class="col3" style="width: 100%;">
							<h2>Tracez votre itinéraire</h2>
						    <div id="map-container">
						        <div id="map">
						            <p>Veuillez patienter pendant le chargement de la carte...</p>
						        </div>
						    </div>
						    <div id="destinationForm">
					            <form action="" method="get" name="direction" id="direction">
					                <label>Point de départ :</label>
					                <input type="text" name="origin" id="origin" value="Tunimarine" disabled="disabled">
					                <a href="javascript:void(0)" id="inverser"><img alt="Inverser" title="Inverser" src="/images/double-fleche.png" /></a>
					                <label>Destination :</label>
					                <input type="text" name="destination" id="destination">
					                <input id="calculutin" type="button" value="Calculer l'itinéraire" onclick="javascript:calculate()">
					            </form>
					        </div>
					       	<div id="panel"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!--Footer-->
		<?php include 'templates/footer.php';?>
	</body>
</html>