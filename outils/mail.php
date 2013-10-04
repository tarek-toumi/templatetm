<?php
	/** Récupération des informations **/
	if (isset($_POST['mail']) && $_POST['mail'] != '') {
		$mail = $_POST['mail'];
	} else {
		echo 'Err'; exit;
	}
	if (isset($_POST['nom']) && $_POST['nom'] != '') {
		$nom = $_POST['nom'];
	} else {
		echo 'Err'; exit;
	}
	if (isset($_POST['objet']) && $_POST['objet'] != '') {
		$objet = $_POST['objet'];
	} else {
		echo 'Err'; exit;
	}
	if (isset($_POST['message']) && $_POST['message'] != '') {
		$message = $_POST['message'];
	} else {
		echo 'Err'; exit;
	}
	if (isset($_POST['copy']) && $_POST['copy'] != '') {
		$copy = $_POST['copy'];
	} else {
		echo 'Err'; exit;
	}
	
	/** Validation des données **/
	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		echo 'Err'; exit;
	}
	
	/** Envoie du mail */
	$destination = 'Tunimarine <tarek.2mi@gmail.com>';
    $headers = "From: $nom <$mail>";
	if ($copy === 'true') {
    	$headers .=  "\r\nCc: $nom <$mail>";
	}
	$result = mail($destination, $objet, $message, $headers);
	if ($result) {
		echo 'Ok';
	} else {
		echo 'Err';
	}
?>