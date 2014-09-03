$(function() {
$('#city').focus();
//$('#search_box').css('display' , 'none');

$('#search').click(function(){
	$('#search_box').fadeIn();
	$('#results').css('z-index', '40');
	console.log('search open');
});

$('#submitted').click(function(){
	console.log('submitted');
});

$('#close_search').click(function(){
	$('#search_box').fadeOut();
	$('#results').empty();
	$('#results').css('display' , 'none')
	console.log('search closed');
});

});