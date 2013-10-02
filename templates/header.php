<?php 
	
	$LinkClasses = array (
			'index' => 'notactive',
			'services' => 'notactive',
			'societe' => 'notactive',
			'galerie' => 'notactive',
			'qualite' => 'notactive',
			'contact' => 'notactive');
	$LinkClasses[$activeLink] = 'isactive';
?>
		<div class="header_cotainer">
			<div class="container_12">
				<div class="grid_3">
					<a href="/accueil"><img src="images/logo.png"
						alt="Tunimarine" width="160" /></a>
				</div>
				<div class="grid_9">
					<ul id="menu">
						<li class="<?= $LinkClasses['index'] ?>"><a href="/index.php">Accueil</a></li>
						<li class="<?= $LinkClasses['services'] ?>"><a href="/services.php">Services</a></li>
						<li class="<?= $LinkClasses['societe'] ?>"><a href="/societe.php">Société</a></li>
						<li class="<?= $LinkClasses['galerie'] ?>"><a href="/galerie.php">Galerie</a></li>
						<li class="<?= $LinkClasses['qualite'] ?>"><a href="/qualite.php">Qualité</a></li>
						<li class="<?= $LinkClasses['contact'] ?>"><a href="/contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>