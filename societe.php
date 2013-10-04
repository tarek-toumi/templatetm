<?php 
	/* Forcage de la bonne url */
	$token = explode('?', $_SERVER['REQUEST_URI']);
	if ($token[0] != '/societe') {
		header('HTTP/1.0 301 Moved Permanently');
		header('Location: /societe');
		die();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" lang="fr-fr" charset="UTF-8">
	<head>
		<title>Tunimarine - Soci�t�</title>
		<?php include 'templates/includes.html';?>
		<link type="text/css" href="styles/services.css" rel="stylesheet" media="all" />
		<link type="text/css" href="styles/societe.css" rel="stylesheet" media="all" />
	</head>
	
	<body>
		<!--Header-->
		<?php $activeLink = "societe"; include 'templates/header.php';?>

		<!--Content-->
		<div class="content_container">
			<div class="container_12">
				<div class="prefix_full_width">
					<div class="grid_5">
						<div class="col3">
							<h2>Croissance de l'activit� de TUNIMARINE</h2>
						</div>
						<div id="diagram-container">
							<div class="step-container" id="step-2013">
								<div class="year-content">2013</div>
								<div class="label-content">Mise en place de la d�marche assurance qualit�</div>
							</div>
							<div class="step-container" id="step-2012">
								<div class="year-content">2012</div>
								<div class="label-content">Nouvelle implantation</div>
							</div>
							<div class="step-container" id="step-2011">
								<div class="year-content">2011</div>
								<div class="label-content">Ajout de l'activit� de fonderie</div>
							</div>
							<div class="step-container" id="step-2010">
								<div class="year-content">2010</div>
								<div class="label-content">M�canique / Usinage</div>
							</div>
							<div class="step-container" id="step-2009">
								<div class="year-content">2009</div>
								<div class="label-content">Entr�e en production : m�canique</div>
							</div>
							<div class="step-container" id="step-2008">
								<div class="year-content">2008</div>
								<div class="label-content">Cr�ation</div>
							</div>
						</div>
					</div>
				</div>
				<div class="prefix_full_width">
					<div class="grid_5">
						<div class="col3">
							<h2>Nos partenaires</h2>
							<p>D�coupe Lazer / Soudures / Traitement de surface : Chromage-Zinguage-Galvanisation-Peinture �poxy-traitement cataphor�se.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!--Footer-->
		<?php include 'templates/footer.php';?>
	</body>
</html>