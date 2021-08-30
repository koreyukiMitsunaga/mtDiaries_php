var url = location.href ;
var count_url = url.indexOf('page=');
var target_url = url.slice(count_url+5);

$(function() {
	var count = 68;
	$('.text_limit').each(function() {
		var thisText = $(this).text();
		var textLength = thisText.length;
		if (textLength > count) {
			var showText = thisText.substring(0, count);
			var insertText = showText += '…';
			$(this).html(insertText);
		};
	});
});