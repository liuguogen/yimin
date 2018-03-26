$(function() {
    initHeader();
	setFrom();
  //  topSlides();
  // 底部切换
    $(".footer-company .hd li").hover(function() {
        $(this).addClass('on').siblings().removeClass('on');
        $(".footer-company .bd ul").eq($(this).index()/2).show().siblings('ul').hide();
    });
});
// 页面头部效果
function initHeader(){
    $(".qw-company").mouseover(function(event) {
        /* Act on the event */
        $(".qw-company .qw-company-box").show();
        $(".qw-company .qw-company-box").stop(false, false).animate({
                opacity: 1
            },
            500);
    });
    $(".qw-company").mouseout(function(event) {
        /* Act on the event */
        $(".qw-company .qw-company-box").hide();
        $(".qw-company .qw-company-box").stop(false, false).animate({
                opacity: 0
            },1000);

    });
    $(".qr-code").mouseover(function(event) {
        /* Act on the event */
        $(".codeimg").show();
        $(".codeimg").stop(false, false).animate({
                top: "35px",
                opacity: 1
            },
            500);
    });
    $(".qr-code").mouseout(function(event) {
        /* Act on the event */
        $(".codeimg").stop(false, false).animate({
                top: "55px",
                opacity: 0
            },
            500,
            function() {
                $(".codeimg").hide();
            });

    });
}

// 轮播图特效
function topSlides() {

    // $('.fullwidthbanner li').attr('data-transition', $('#cfg_slidetype').val());

    var vHeight = $(window).height();
    var slideHeight = vHeight * 2 / 3;

    if (slideHeight > 525) {
        slideHeight = 525;
    }
    if (slideHeight < 350) {
        slideHeight = 350;
    }

    $('.swiper-container').css('height', slideHeight);

    var api = $('.fullwidthbanner').revolution({
        delay: 5000,
        startheight: slideHeight,
        startwidth: 0,

        hideThumbs: 200,

        thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
        thumbHeight: 1,
        thumbAmount: 5,

        navigationType: "bullet", //bullet, thumb, none, both       (No Thumbs In FullWidth Version !)
        navigationArrows: "none", //nexttobullets, verticalcentered, none
        navigationStyle: "round", //round,square,navbar
        navOffsetHorizontal: 18,
        navOffsetVertical: 18,

        touchenabled: "on", // Enable Swipe Function : on/off
        onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

        stopAtSlide: -1,
        stopAfterLoops: -1,

        shadow: 0, //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
        fullWidth: "on" // Turns On or Off the Fullwidth Image Centering in FullWidth Modus
    });



    $(document).on('click', '.swiper-img', function() {
        var url = $(this).attr('data-href');
        if (url != '') {
            window.open(url);
        }
    });



    // 画热区 415 * 40
    // 缩放后宽度高度
    //var hotw = 415 * 
    var ratio = slideHeight / 525;
    var vWidth = $(window).width();
    $('.banner-leyu').css({
        width: 420 * ratio + "px",
        height: 40 * ratio + "px",
        position: "absolute",
        cursor: 'pointer',
        'z-index': 999,
        top: 435 * ratio + "px",
        left: (vWidth + 1100 * ratio) / 2 - 420 * ratio + "px"
    });
    $(document).on('click', '.banner-leyu', function() {
        _czc.push(["_trackEvent", "全站除专题外", "轮播图弹出", "在线咨询", "4", "lunbotu4leyu"]);
        openChat();
    });



    if (!document.addEventListener) //判断是否支持
    {
        $('.tp-bullets').css('width', $('.tp-bullets').width() + 20 + "px");

    }

}

function setFrom(){
    var str = "";
    if (document.URL.split('?').length > 1) {
        str = document.URL.split('?')[1];
    }else if(document.URL.split('#').length > 1){
        str = document.URL.split('#')[1];
    }else{
        str = location.hash + location.search;
    }
    $("input[name='comeform']").each(function(index, el) {
        $(this).val($(this).val() + "_" + str);
    });
}



function check_view2() {
                    //var mail = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
    var tel = /^0?(13[0-9]|15[012356789]|18[02356789]|14[57])[0-9]{8}$/;
    if (document.view_form2.phone.value === "") {
        alert("您的手机号不能为空！");
        this.view_form2.phone.focus();
        return false;
    } else if (!tel.test(document.view_form2.phone.value)) {
        alert("手机号不正确！");
        this.view_form2.phone.focus();
        return false;
    } else {
        view_form2.submit();
    }
}


function openChat() {
doyoo.util.openChat('g=10075613');return false;
}
function openChatCenter(){
 doyoo.util.openChat('g=10075876');return false;	 
}
// 设置轮播图
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
    
    var ratio = slideHeight / 525;
    var vWidth = $(window).width();
    $('.banner-leyu').css({
        width: 420 * ratio + "px",
        height: 40 * ratio + "px",
        position: "absolute",
        cursor: 'pointer',
        'z-index': 999,
        top: 435 * ratio + "px",
        left: (vWidth + 1100 * ratio) / 2 - 420 * ratio + "px"
    });
    $(document).on('click', '.banner-leyu', function() {
        _czc.push(["_trackEvent", "全站除专题外", "轮播图弹出", "在线咨询", "4", "lunbotu4leyu"]);
        openChat();
    });
}
