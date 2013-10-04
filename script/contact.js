var map;
var initialize;
var panel;
var calculate;
var direction;
var latLng = new google.maps.LatLng(36.028505526, 10.495427361);


initialize = function(){
  var myOptions = {
    zoom      : 14, // Zoom par défaut
    center    : latLng, // Coordonnées de départ de la carte de type latLng 
    mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    maxZoom   : 20
  };
  
  map      = new google.maps.Map(document.getElementById('map'), myOptions);
  panel    = document.getElementById('panel');
  
  var marker = new google.maps.Marker({
    position : latLng,
    map      : map,
    title    : "Tunimarine"
  });
  
  var contentMarker = [
      '<div id="containerTabs">',
      ' Tunimarine',
      '</div>'
  ].join('');

  var infoWindow = new google.maps.InfoWindow({
    content  : contentMarker,
    position : latLng
  });
  
  google.maps.event.addListener(marker, 'mouseover', function() {
    infoWindow.open(map,marker);
  });
  
  direction = new google.maps.DirectionsRenderer({
	    map   : map, 
	    panel : panel 
  });
};
calculate = function(){
	if ($('#origin').attr('disabled') == 'disabled') {
	    origin      = latLng; // Le point départ = Tunimarine
	    destination = $('#destination').val(); // Le point d'arrivé
	} else {
	    origin      = $('#origin').val(); // Le point départ = Tunimarine
	    destination = latLng; // Le point d'arrivé = Tunimarine
	}
    if(origin && destination){
        var request = {
            origin      : origin,
            destination : destination,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Mode de conduite
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
        directionsService.route(request, function(response, status){ // Envoie de la requête pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
            }
        });
    }
};
$(document).ready(function() {
	initialize();
	$('#inverser').click(function(){
		if ($('#origin').attr('disabled') == 'disabled') {
			$('#origin').val($('#destination').val());
			$('#destination').val('Tunimarine');
			$('#origin').removeAttr('disabled');
			$('#destination').attr('disabled', 'disabled');
		} else {
			$('#destination').val($('#origin').val());
			$('#origin').val('Tunimarine');
			$('#destination').removeAttr('disabled');
			$('#origin').attr('disabled', 'disabled');
		}
	});
	
	/* Form Validator */
	var formvalidator = $('#contact-form').validate({
		rules: {
			nom: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			subject: {
				required: true
			},
			message: {
				required: true
			}
		},
		messages: {
			nom: "",
			email: "",
			subject: "",
			message: ""
		}
	});
	$('#contact-form').submit(function(){
		if (formvalidator.valid()) {
			var ctcmail = $('input#contact_email').val();
			var ctcnom = $('input#contact_name').val();
			var ctcobjet = $('input#contact_subject').val();
			var ctcmessage = $('textarea#contact_text').val();
			var ctccopy = $('input#contact_email_copy').is(':checked');
			$.post( "/outils/mail.php", {mail: ctcmail, nom: ctcnom, objet: ctcobjet, message: ctcmessage, copy: ctccopy},
					function( data ) {
					  if (data == 'Ok') {
						  $('.validmail').show();
					  } else {
						  $('.errormail').show();
					  }
				});
		}
		return false;
	});
});

