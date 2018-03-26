$(function(){
	init();
});

function init() {

	$.each($('.relate .item'), function(i, e){
		$(this).find('.order').html(i + 1);
		if (i < 3) $(this).find('.order').addClass('active');
	});

	$('.sim .item').last().addClass('last');


	$.each($('.cases .item'), function(i, e){
		$(this).find('.order').html(i + 1);
		if (i < 3) $(this).find('.order').addClass('active');
	});

	$.each($('.infos .item'), function(i, e){
		$(this).find('.order').html(i + 1);
		if (i < 3) $(this).find('.order').addClass('active');
	});

	$('.detail-area').html($('pre').html());
	$('pre').remove();

	if ($('.relate .item').length < 1) $('.relate').addClass('hide');
	if ($('.sim .item').length < 1) $('.sim').addClass('hide');


}

function __init(cls) {
	$.each($(cls), function(i, e){
		if (i % 4 == 0) {
			$(this).addClass('first');
		} else if (i % 4 == 3) {
			$(this).addClass('last');
		}
	});


}
