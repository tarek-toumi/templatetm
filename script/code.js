$(document).ready(function() {
	$('#main > ul').tabs({ fx: { height: 'fadeOut', opacity: 'toggle' } });
//////////////////////////////////////////
$('ul.nav li').mousedown(function() {
  $('ul.nav li').removeClass('selected');/*remove all classes from all items*/
  $(this).addClass('selected');/*add class for chosen item*/
currentSlide=$('li').index(this)+1; /*return index*/
  updateButtons();
});
});
