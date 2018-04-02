$(function(){
	setBanner();

    $(".project-box .options li").click(function(event) {
        $(this).addClass('on').siblings('li').removeClass('on');
    });

    $(".project .lxb-box").click(function(event) {
    	$(".tips_t").removeClass('hide').css("top",334+$(this).parents(".project").index()*278);
    	event.stopPropagation();
    });
    $(document).click(function(event) {
    	$(".tips_t").addClass('hide');
    });
    $(".tips_t").click(function(event) {
    	event.stopPropagation();
    });
});

 function setBanner(){
    var vHeight = $(window).height();
    var slideHeight = vHeight * 2 / 3;

    if (slideHeight > 525) {
        slideHeight = 525;
    }
    if (slideHeight < 350) {
        slideHeight = 350;
    }

    $('.index-lbt').css('height', slideHeight);
    $('.flexslider').css('height', slideHeight);
    $('.flexslider li').css('height', slideHeight);
    $(".flexslider").flexslider({
        animation : "slide",
        slideshowSpeed: 5000,
        directionNav: true,
        pauseOnAction: false,
        pauseOnHover: true

    }); 
}