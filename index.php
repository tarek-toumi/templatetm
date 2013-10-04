<?php 
	/* Forcage de la bonne url */
	$token = explode('?', $_SERVER['REQUEST_URI']);
	if ($token[0] != '/accueil') {
		header('HTTP/1.0 301 Moved Permanently');
		header('Location: /accueil');
		die();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" lang="fr-fr" charset="UTF-8">
	<head>
		<title>Tunimarine - Accueil</title>
		<?php include 'templates/includes.html';?>
		<link type="text/css" href="styles/jquery.bxslider.css" rel="stylesheet" />
		<script type="text/javascript" src="/script/index.js"></script>
		<script type="text/javascript" src="/script/jquery.bxslider.js"></script>
	</head>
	
	<body>
		<!--Header-->
		<?php $activeLink = "index"; include 'templates/header.php';?>

		<!--Slider-->
		<div class="slider_container">
			<div class="container_12">
				<div id="main">
					<ul class="bxslider">
						<li>
							<img src="/images/1.jpg" width="980" height="350" alt="Activites Tunimarine" title="Activites Tunimarine" />
						</li>
						<li>
							<img src="/images/2.jpg" width="980" height="350" alt="Avantages Tunimarine" title="Avantages Tunimarine" />
						</li>
						<li>
							<img src="/images/3.jpg" width="980" height="350" alt="Demarche qualite" title="Demarche qualite" />
						</li>
						<li>
							<img src="/images/4.jpg" width="980" height="350" alt="Disponibilite Tunimarine" title="Disponibilite Tunimarine" />
						</li>
					</ul>
				</div>
				<!-- main-->
			</div>
		</div>

		<!--Content-->
		<div class="content_container">
			<div class="container_12">
				<!-- First line of posts-->
				<div class="grid_4_container">
					<div class="grid_4">
						<div class="col1">
							<img src="/images/secteurs_acc.png" alt="image" />
							<h2>Secteurs d'activités</h2>
							<ul class="ul-grid_4" style="display: block; color: #485F8C;">
								<li style="margin-left: 20px;">Automobile</li>
								<li style="margin-left: 20px;">Industrie marine</li>
								<li style="margin-left: 20px;">Mobiliers et accessoires</li>
								<li style="margin-left: 20px;">Aéronautique</li>
								<li style="margin-left: 20px;">Industries  divers</li>
							</ul>
						</div>
					</div>
					<div class="grid_4 grid_center">
						<div class="col1">
							<img id="logoimage_default" src="/images/nos_clients.png" alt="image" />
							<img id="logoimage_ams" alt="AMS" title="AMS" src="/images/clients/logo_ams.jpg" />
							<img id="logoimage_egko" alt="EGKO" title="EGKO" src="/images/clients/logo_egko.jpg" />
							<img id="logoimage_hitchunson" alt="HITCHUNSON" title="HITCHUNSON" src="/images/clients/logo_hitchunson.jpg" />
							<img id="logoimage_lacrorix" alt="LACRORIX" title="LACRORIX" src="/images/clients/logo_lacrorix.jpg" />
							<img id="logoimage_mmic" alt="MMIC" title="MMIC" src="/images/clients/logo_mmic.jpg" />
							<img id="logoimage_zodiac" alt="ZODIAC" title="ZODIAC" src="/images/clients/logo_zodiac.jpg" />
							<h2>Nos clients</h2>
							<ul class="logocontainer">
								<li id="logolabel_ams">Ateliers Mécaniques du Sahel (AMS)</li>
								<li id="logolabel_egko">EGO Paris</li>
								<li id="logolabel_hitchunson">Hitchunson</li>
							</ul>
							<ul class="logocontainer">
								<li id="logolabel_lacrorix">Lacrorix</li>
								<li id="logolabel_mmic">Métallic Manifacture International Corporation (MMIC)</li>
								<li id="logolabel_zodiac">ZODIAC</li>
							</ul>
						</div>
					</div>
					<div class="grid_4">
						<div class="col1">
							<img src="/images/nosclients_acc.png" alt="image" />
							<h2>Nos avantages</h2>
							<p>Le Contrôle de la Qualité interne vérifie en permanence les procédés et les produits, conformément aux procédures certifiées.</p>
							<div class="readMore">
								<a class="linktoqualite" href="javascript:void(0)">Savoir plus <b>></b></a>
							</div>
						</div>
					</div>
				</div>
				<div class="separator">&nbsp;</div>
				<!--Second Line of posts leftContainer-->
				<div class="grid_6">
					<div class="grid_3">
						<div class="col2">
							<img src="/images/staff.png" align="left" alt="Nos Moyens" title="Nos Moyens" />
							<h1>&nbsp; Services</h1>
							<p>Pour répondre à vos besoins, <strong>TUNIMARINE</strong> met à votre disposition ses moyens humaines, logiciels et ses moyens de productions.
							</p>
							<a class="linktoservices linktopage" href="javascript:void(0)">Découvrir nos moyens &gt;</a>
						</div>
					</div>
					<div class="grid_3">
						<div class="col2">
							<img src="/images/qualite.png" align="left" alt="Démarche qualité" title="Démarche qualité" />
							<h1>&nbsp; Qualité</h1>
							<p><strong>TUNIMARINE</strong> s'est engagé dans la mise en place d'une politique d'Assurance Qualité applicable à l'ensemble de ses achats et fabrications.
							</p>
							<a class="linktoqualite linktopage" href="javascript:void(0)">Plus de détails &gt;</a>
						</div>
					</div>
					<div class="grid_3">
						<div class="col2">
							<img src="/images/croissance.png" align="left" alt="Croissance de l'activité" title="Croissance de l'activité" />
							<h1>&nbsp; Société</h1>
							<p>Notre activité, ainsi que le réseau de nos partenaires, sont en croissance permanante.
							</p>
							<a class="linktosociete linktopage" href="javascript:void(0)">Diagramme de croissance &gt;</a>
						</div>
					</div>
					<div class="grid_3">
						<div class="col2">
							<img src="/images/produits.png" align="left" alt="Nos produits" title="Nos produits" />
							<h1>&nbsp; Nos produits</h1>
							<p>Fabrication et sous-traitancedes pièces mécaniques pour la marine et l'industrie.
							</p>
							<a class="linktogalerie linktopage" href="javascript:void(0)">Consulter notre galerie &gt;</a>
						</div>
					</div>
				</div>
				<!-- rightContainer-->
				<div class="prefix_6">
					<div class="grid_5">
						<div class="col3">
							<h1>Présentation</h1>
							<p><strong>TUNIMARINE</strong> est une Société totalement exportatrice. 
							Son domaine d'application est la fabrication des pièces mécaniques pour la 
							marine, l'aéronautique et l'industrie. <br> Fraisage, tournage, découpage, 
							tôle (presse ou laser), découpe fil, fonderie. <br> 
							Notre but est d'atteindre l'excellence dans les domaines de la qualité 
							des délais et de la traçabilité qui sont vos exigences.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!--Footer-->
		<?php include 'templates/footer.php';?>
	</body>
</html>