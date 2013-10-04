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
						<li class="<?= $LinkClasses['index'] ?>"><a href="/accueil">Accueil</a></li>
						<li class="<?= $LinkClasses['services'] ?>"><a href="/services">Services</a></li>
						<li class="<?= $LinkClasses['societe'] ?>"><a href="/societe">Société</a></li>
						<li class="<?= $LinkClasses['galerie'] ?>"><a href="/galerie">Galerie</a></li>
						<li class="<?= $LinkClasses['qualite'] ?>"><a href="/qualite">Qualité</a></li>
						<li class="<?= $LinkClasses['contact'] ?>"><a href="/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>