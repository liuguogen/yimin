var cfg_cmsurl;

$(function() {
    // check page
    var pathname = location.pathname;
    // 是否国家
    var iscountry = false;

    // 是否关于tab
    var isabout = false;

    cfg_cmsurl = $('#cfg_url').val();
    if (!location.origin) {
        location.origin = location.protocol + "//" + location.hostname + (location.port ? ':' + location.port : '');
    }
    if (!cfg_cmsurl) {
        cfg_cmsurl = 'http://www.iqiaowai.com'; //location.origin;
    }

    $('.btn-search').click(function() {
        var type = $('#inputselect').val();
        var title = $("#s-title").val();
        var url = cfg_cmsurl + '/plus/list.php?tid=228';
        var f = '&';
        if (type == 3) {
            url = cfg_cmsurl + '/plus/list.php?tid=257';
        } else if (type == 2) {
            url = cfg_cmsurl + '/plus/list.php?channelid=41';
        }
        if (title) {
            url += f + "title=" + title;
        }
        location.href = url;
    });


    // 国家列表
    var prefix = cfg_cmsurl;
    // 美国、英国、澳大利亚、加拿大、西班牙、葡萄牙、希腊、马耳他、意大利、德国、圣基茨、塞浦路斯、荷兰、爱尔兰、韩国、匈牙利
    var countrys = [
        ["201", "美国", "/america", 500],
        ["281", "英国", "/england", 2000],
        ["532", '澳大利亚', "/australia", 1500],
        ["528", '加拿大', "/canada", 1000],
        ["318", "西班牙", "/spain", 4500],
        ["317", "葡萄牙", "/portugal", 4000],
        ["315", "希腊", "/greece", 6000],
        ["826", '马耳他', "/malta", 9500],
        ["297", "意大利", "/italy", 2500],
        ["530", '德国', "/germany", 3000],
        ["537", '圣基茨', "/saintkitts", 5000],
        ["316", "塞浦路斯", "/cyprus", 5500],
        ["749", '荷兰', "/netherlands", 9000],
        ["714", '爱尔兰', "/ireland", 8500],
        ["527", '韩国', "/korea", 6500],
        ["314", "匈牙利", "/hungary", 3500]
        //529:['香港', "http://www.iqiaowai.com/qiaowai/hongkong", 7500],
        //531:['新西兰', "http://www.iqiaowai.com/qiaowai/newzealand", 6500],

    ];
    for (var i in countrys) {
        var e = countrys[i];
        if (pathname.indexOf(e[2]) !== -1) {
            iscountry = true;
        }
    }

    // 分公司列表
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
        ['郑州', "/?zhengzhou", "郑州侨外", "郑州侨外\n地址：郑州市郑东新区金水东路心怡路交汇处88号楷林IFC A座2512-2513室"]

    ];
    var cityStr = "";
    for (var i in cities) {
        var e = cities[i];
        if (e.length > 0) {
            if (e[2]) {
                cityStr += "<li class='c-city'><a target='_blank' title='" + e[3] + "' href='" + prefix + e[1] + "'>" + e[0] + "<span style='display:none;'>" + e[2] + "</span></a></li>";
            }
        } else {
            cityStr += "<li class='c-line'>|</li>";
        }

    }
    $(".qw-fgs-company .qw-company-box").html('<div class="qw-com">侨外分部:</div><ul>' + cityStr + '</ul>');

    // 分公司选中状态
    var c_url = location.href;
    $.each($('.qw-company-box ul li a'), function(i, e) {
        if ($(this).attr('href') == '') {
            return;
        }
        if (c_url.indexOf($(this).attr('href')) !== -1) {
            $('.qw-company-box ul li').removeClass('active');
            $(this).addClass('active');
        }

    });

    // 关于侨外状态选中
    if (-1 !== $.inArray(pathname, [cfg_cmsurl + "/hotspot/", cfg_cmsurl + "/story/", cfg_cmsurl + "/activity/", cfg_cmsurl + "/contactus.html", cfg_cmsurl + "/jobs/", cfg_cmsurl + "/aboutus.html"])) {
        isabout = true;
    }

    // 设置菜单栏选中状态
    checkTabActive(pathname, iscountry, isabout);
});


function checkTabActive(pathname, iscountry, isabout) {
    if (iscountry) {
        $($('.qw-nav .nav-box')[1]).addClass('on').siblings('li').removeClass('on');
    } else if (isabout) {
        $('.qw-nav .nav-box').last().addClass('on').siblings('li').removeClass('on');
    } else if (pathname == "/" || pathname == "/index.html") {
        $('.qw-nav .nav-box').first().addClass('on').siblings('li').removeClass('on');
    } else {
        var url = location.href;
        $.each($('.qw-nav .nav-box'), function(i, e) {
            if ($(this).find("a").attr('href') == '') {
                return;
            }
            if (url.indexOf($(this).find("a").attr('href')) !== -1) {
                $($('.qw-nav .nav-box')[0]).removeClass('on');
                $(this).addClass('on').siblings('li').removeClass('on');
            }
        });
    }
}

function _checkLogin() {
    $.ajax({
        url: cfg_cmsurl + '/member/ajax_loginstatus.php',
        dataType: 'json',
        type: 'post',
        success: function(data) {
            if (data.code == 0) {
                if (data.data.islogin == 1) {
                    $('.btn-login-dlg').closest('li').remove();
                    $('.btn-regist-dlg').closest('li').remove();

                    $('.uname-tag span').html(data.data.uname);
                    $('.avatar-tag img').attr('src', data.data.avatar);

                    var $li = $('<li ><a  href="javascript:void(0);" title="' + data.data.uname + '">您好，' + data.data.uname + '</a></li>');
                    var $li2 = $('<li ><a href="#" class="logout">退出</a></li>');
                    $li.appendTo('.header .ops ul');
                    $li2.appendTo('.header .ops ul');

                }
            }
        }
    });


}

function CheckLogin() {
    if (!cfg_cmsurl) {
        cfg_cmsurl = $('#cfg_url').val();
    }
    var taget_obj = document.getElementById('_ajax_feedback');
    myajax = new DedeAjax(taget_obj, false, false, '', '', '');
    myajax.SendGet2(cfg_cmsurl + "/member/ajax_feedback.php");
    DedeXHTTP = null;
}


function postBadGood(ftype, fid) {
    var taget_obj = document.getElementById(ftype + fid);
    var saveid = GetCookie('badgoodid');
    if (saveid != null) {
        var saveids = saveid.split(',');
        var hasid = false;
        saveid = '';
        j = 1;
        for (i = saveids.length - 1; i >= 0; i--) {
            if (saveids[i] == fid && hasid) continue;
            else {
                if (saveids[i] == fid && !hasid) hasid = true;
                saveid += (saveid == '' ? saveids[i] : ',' + saveids[i]);
                j++;
                if (j == 10 && hasid) break;
                if (j == 9 && !hasid) break;
            }
        }
        if (hasid) { alert('您刚才已表决过了喔！');
            return false; } else saveid += ',' + fid;
        SetCookie('badgoodid', saveid, 1);
    } else {
        SetCookie('badgoodid', fid, 1);
    }
    myajax = new DedeAjax(taget_obj, false, false, '', '', '');
    myajax.SendGet2(cfg_cmsurl + "/plus/feedback.php?aid=" + fid + "&action=" + ftype + "&fid=" + fid);
}

function postDigg(ftype, aid) {
    var taget_obj = document.getElementById('newdigg');
    var saveid = GetCookie('diggid');
    if (saveid != null) {
        var saveids = saveid.split(',');
        var hasid = false;
        saveid = '';
        j = 1;
        for (i = saveids.length - 1; i >= 0; i--) {
            if (saveids[i] == aid && hasid) continue;
            else {
                if (saveids[i] == aid && !hasid) hasid = true;
                saveid += (saveid == '' ? saveids[i] : ',' + saveids[i]);
                j++;
                if (j == 20 && hasid) break;
                if (j == 19 && !hasid) break;
            }
        }
        if (hasid) { alert("您已经顶过该帖，请不要重复顶帖 ！");
            return; } else saveid += ',' + aid;
        SetCookie('diggid', saveid, 1);
    } else {
        SetCookie('diggid', aid, 1);
    }
    myajax = new DedeAjax(taget_obj, false, false, '', '', '');
    var url = cfg_cmsurl + "/plus/digg_ajax.php?action=" + ftype + "&id=" + aid;
    myajax.SendGet2(url);
}

function getDigg(aid) {
    var taget_obj = document.getElementById('newdigg');
    myajax = new DedeAjax(taget_obj, false, false, '', '', '');
    myajax.SendGet2(cfg_cmsurl + "/plus/digg_ajax.php?id=" + aid);
    DedeXHTTP = null;
}
