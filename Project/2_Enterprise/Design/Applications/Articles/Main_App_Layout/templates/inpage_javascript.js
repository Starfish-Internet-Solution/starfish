$(document).ready(function() {
	$('span.addCategory').click(function(){
		category_id		= $(this).children('input[name=category_id]').val();
		$('div.addArticle_popUp input[name=category_id]').val(category_id);
	$('span.keep_article, span.cancel').click(function(){
