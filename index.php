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
							<h2>Secteurs d'activit�s</h2>
							<ul class="ul-grid_4" style="display: block; color: #485F8C;">
								<li style="margin-left: 20px;">Automobile</li>
								<li style="margin-left: 20px;">Industrie marine</li>
								<li style="margin-left: 20px;">Mobiliers et accessoires</li>
								<li style="margin-left: 20px;">A�ronautique</li>
								<li style="margin-left: 20px;">Industries  divers</li>
							</ul>
						</div>
					</div>
					<div class="grid_4 grid_center">
						<div class="col1">
							<img src="/images/nos_clients.png" alt="image" />
							<h2>Nos clients</h2>
							<p>
								Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing
								elit. Aliquam tincidunt mi id libero egestas ut interdum nibh
								cursus.
							</p>
						</div>
					</div>
					<div class="grid_4">
						<div class="col1">
							<img src="/images/nosclients_acc.png" alt="image" />
							<h2>Nos avantages</h2>
							<p>Le Contr�le de la Qualit� interne v�rifie en permanence les proc�d�s et les produits, conform�ment aux proc�dures certifi�es.</p>
							<div class="readMore">
								<a href="/qualite.php">Savoir plus <b>></b></a>
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
							<h2>&nbsp; Services</h2>
							<p>Pour r�pondre � vos besoins, <strong>TUNIMARINE</strong> met � votre disposition ses moyens humaines, logiciels et ses moyens de productions.
							</p>
							<a class="linktopage" href="/services">D�couvrir nos moyens &gt;</a>
						</div>
					</div>
					<div class="grid_3">
						<div class="col2">
							<img src="/images/qualite.png" align="left" alt="D�marche qualit�" title="D�marche qualit�" />
							<h2>&nbsp; Qualit�</h2>
							<p><strong>TUNIMARINE</strong> s'est engag� dans la mise en place d'une politique d'Assurance Qualit� applicable � l'ensemble de ses achats et fabrications.
							</p>
							<a class="linktopage" href="/qualite">Plus de d�tails &gt;</a>
						</div>
					</div>
					<div class="grid_3">
						<div class="col2">
							<img src="/images/croissance.png" align="left" alt="Croissance de l'activit�" title="Croissance de l'activit�" />
							<h2>&nbsp; Soci�t�</h2>
							<p>Notre activit�, ainsi que le r�seau de nos partenaires, sont en croissance permanante.
							</p>
							<a class="linktopage" href="/societe">Diagramme de croissance &gt;</a>
						</div>
					</div>
					<div class="grid_3">
						<div class="col2">
							<img src="/images/produits.png" align="left" alt="Nos produits" title="Nos produits" />
							<h2>&nbsp; Nos produits</h2>
							<p>Fabrication et sous-traitancedes pi�ces m�caniques pour la marine et l'industrie.
							</p>
							<a class="linktopage" href="/galerie">Consulter notre galerie &gt;</a>
						</div>
					</div>
				</div>
				<!-- rightContainer-->
				<div class="prefix_6">
					<div class="grid_5">
						<div class="col3">
							<h2>Pr�sentation</h2>
							<p><strong>TUNIMARINE</strong> est une Soci�t� totalement exportatrice. 
							Son domaine d'application est la fabrication des pi�ces m�caniques pour la 
							marine, l'a�ronautique et l'industrie. <br> Fraisage, tournage, d�coupage, 
							t�le (presse ou laser), d�coupe fil, fonderie. <br> 
							Notre but est d'atteindre l'excellence dans les domaines de la qualit� 
							des d�lais et de la tra�abilit� qui sont vos exigences.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!--Footer-->
		<?php include 'templates/footer.php';?>
	</body>
</html>