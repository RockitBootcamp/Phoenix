$(function() {

	
	

	var catTemplate = Handlebars.compile($('#catalog').html());
	$('.masterCat').append(catTemplate(default_companies));

});