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
    //icon     : "marker_lille.gif" // Chemin de l'image du marqueur pour surcharger celui par défaut
  });
  
  var contentMarker = [
      '<div id="containerTabs">',
      ' content marker',
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
            language 	: 'fr',
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
});

