$(function(){
    setBanner();
    initFgs();
    setHot();
    
    $("#marquee").kxbdMarquee({direction:"up",scrollDelay:50});
    // $("#case-slide").kxbdMarquee({direction:"up",scrollDelay:50});
    // $("#slide").kxbdMarquee({direction:"left",scrollDelay:30});
    jQuery("#slide").slide({mainCell:"ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});
    jQuery("#case-slide").slide({mainCell:"ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50});
    // jQuery("#marquee").slide({mainCell:"ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});

    // 侨外活动
    $(".qw-activity-box .now").hover(function() {
        var i = $(this).attr("data-num");
        $(".qw-activity-box .detail").each(function(index, el) {
            if($(this).attr("data-num")==i){
                $(this).show().siblings('.detail').hide();
            }
        });
    });

    // 国家简介
    $(".qw-country .item").hover(function() {
    	$(this).find('.text-box').stop(false, false).animate({opacity:0}, 500);
    	$(this).find('.desc-box').stop(false, false).animate({bottom:0}, 500);
    }, function() {
    	$(this).find('.text-box').stop(false, false).animate({opacity:1}, 500);
    	$(this).find('.desc-box').stop(false, false).animate({bottom:-160}, 500);
    });

    $(".country-add").click(function(event) {
        $(this).hide();
        $(this).siblings('.items.hide').removeClass('hide');
    });

    // 热销项目离线宝
    $("body").click(function(event) {
        $(".project-item .tips_t").addClass('hide');
    });
    $(".project-item .item .lxb-box").click(function(event) {
        $(".project-item .tips_t").removeClass('hide').css("left",-86+$(this).parents(".item").index(".project-item .item")*350);
        return false;
    });
	 $(".project-item .item .lxb-box").hover(function(event) {
        $(".project-item .tips_t").removeClass('hide').css("left",-86+$(this).parents(".item").index(".project-item .item")*350);
        return false;
    });
    $(".project-item .tips_t").click(function(event) {
        return false;
    });
    $(".project-item .item .online-consult").click(function(event) {
        openChat();
    });
	
});
document.writeln("<script type=\"text/javascript\" src=\"http://pv.sohu.com/cityjson\"></script>");
document.writeln("<script type=\"text/javascript\" src=\"http://www.iqiaowai.com/templets/new/js/md5.js\"></script>");
document.writeln("<script type=\"text/javascript\" src=\"http://www.iqiaowai.com/zhuanti/check_require.js\"></script>");
function initFgs(){
    // 分公司列表
    var prefix = "http://www.iqiaowai.com";
    var cities = [
        ["北京总部", "/beijing.html", "北京侨外总部", "北京侨外总部\n地址：北京市朝阳区东大桥路8号尚都国际中心A座32层"],
        ['上海', "/shanghai.html", "上海侨外", "上海侨外\n地址：上海市静安区南京西路1515号嘉里中心一座1906-1909"],
        ['广州', "/guangzhou.html", "广州侨外", "广州侨外\n地址：广州市天河区珠江新城华夏路16号【富力盈凯广场】2505-11单元"],
        ["深圳", "/shenzhen.html", "深圳侨外", "深圳侨外\n地址：深圳市福田区金田路金中环商务大厦4102A"],
        [],
        ["浙江", "/zhejiang.html", "浙江侨外", "浙江侨外\n地址：浙江省杭州市下城区环城北路208号坤和中心21楼"],
        ['江苏', "/jiangsu.html", "江苏侨外", "江苏侨外\n地址：南京市玄武区洪武北路55号置地广场"],
        ["山东", "/qingdao.html", "山东侨外", "山东侨外\n地址：青岛市市南区香港中路2号海航万邦中心2002室"],
        [],
        ["珠海", "/zhuhai.html", "珠海侨外", "珠海侨外\n地址：红山路288号国际科技大厦A座301室"],
        ["佛山", "/foshan.html?fs", "佛山侨外", "佛山侨外\n地址：佛山市禅城区季华五路2号卓远国际商务大厦一座1403-1404室"],
        ['顺德', "/shunde.html", "顺德侨外", "顺德侨外\n地址：佛山市顺德区大良新桂中路明日广场一座1802室"],
        [],
        ['四川', "/sichuan.html", "四川侨外", "四川侨外\n地址：成都市人民南路一段86号城市之心26楼E座"],
        ["重庆", "/chongqing.html", "重庆侨外", "重庆侨外\n地址：重庆市渝中区解放碑大都会商厦20层"],
        [],
        ["陕西", "/shaanxi.html", "陕西侨外", "陕西侨外\n地址：西安市高新区唐延南路都市之门C座1504室"],
        [],
        ['湖北', "/hubei.html", "湖北侨外", "湖北侨外\n地址：武汉市武昌区积玉桥万达中心写字楼29层2901室"],
        ['郑州', "/", "郑州侨外", "郑州侨外\n地址：郑州市郑东新区金水东路心怡路交汇处88号楷林IFC A座2512-2513室"]

    ];

    for (var i in cities) {
        var e = cities[i];
        if (e.length > 0) {
            if (e[2]) {
                $("<li>").html("<a target='_blank' title='" + e[3] + "' href='" + prefix + e[1] + "'>" + e[0] + "<span style='display:none;'>" + e[2] + "</span></a>").addClass("c-city").appendTo($('.qw-company-box ul'));
            }
        } else {
            $("<li>").html("|").addClass("c-line").appendTo($('.qw-company-box ul'));
        }

    }
    // 分公司选中状态
    // var c_url = location.href;
    // $.each($('.qw-company-box ul li a'), function(i, e) {
    //     if ($(this).attr('href') == '') {
    //         return;
    //     }
    //     if (c_url.indexOf($(this).attr('href')) !== -1) {
    //         $('.qw-company-box ul li').removeClass('active');
    //         $(this).addClass('active');
    //     }

    // });
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
// 热点轮播效果
function setHot(){
    // var api = $('.qw-hot .slide').revolution({
    //     delay: 5000,
    //     startheight: 520,
    //     startwidth: 0,

    //     hideThumbs: 200,

    //     thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
    //     thumbHeight: 1,
    //     thumbAmount: 5,

    //     navigationType: "bullet", //bullet, thumb, none, both       (No Thumbs In FullWidth Version !)
    //     navigationArrows: "none", //nexttobullets, verticalcentered, none
    //     navigationStyle: "round", //round,square,navbar
    //     navOffsetHorizontal: 18,
    //     navOffsetVertical: 50,

    //     touchenabled: "on", // Enable Swipe Function : on/off
    //     onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

    //     stopAtSlide: -1,
    //     stopAfterLoops: -1,

    //     shadow: 0, //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
    //     fullWidth: "on" // Turns On or Off the Fullwidth Image Centering in FullWidth Modus
    // });
    $(".qw-hot .item-hot").flexslider({
        animation : "slide",
        slideshowSpeed: 5000,
        directionNav: true,
        pauseOnAction: false,
        pauseOnHover: true

    }); 
}


