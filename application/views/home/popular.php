<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->config->item('sitename','home') ?></title>
   <meta name="keywords" content="<?php echo $this->config->item('keywords','home') ?>" />
    <meta name="description" content="<?php echo $this->config->item('description','home') ?>" /> 
    <link href="../../../assets/home/css/popular_css.css" rel="stylesheet" />
    <script src="../../../assets/home/js/jquery.min.js"></script>
    <script src="../../../assets/home/js/jquery.flexslider-min.js"></script>
    <script src="../../../assets/home/js/jwplayer.js"></script>
    <script src="../../../assets/home/js/jquery.kxbdMarquee.js"></script>
    <script src="../../../assets/home/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="../../../assets/home/js/common_new.js"></script>
    <script src="../../../assets/home/js/index.js"></script>
    <script src="../../../assets/home/js/savepath.js"></script>
    <link rel="stylesheet" href="../../../assets/home/css/common.css">
    <link rel="stylesheet" href="../../../assets/home/css/css.css">
    <link rel="stylesheet" href="../../../assets/home/css/banner.css">
    <link rel="stylesheet" href="../../../assets/home/css/flexslider.css">
</head>
<body>
    
       <?php $this->load->view('public/header'); ?>
    <!-- 分公司导航 S -->
     <?php $this->load->view('public/thumb') ?>
        <!--头部调用结束-->
        <div style="background: #FFF;">
            <div class="clear"></div>
            <div class="warp">
                
                <div class="nav1">
                    <div class="nav_div bodydiv">
                        <div class="on" onclick="check_emun('part_1');">
                            项目介绍
                        </div>
                        <div class="" onclick="check_emun('part_2');">
                            项目优势
                        </div>
                        <div class="" onclick="check_emun('part_3');">
                            解读移民
                        </div>
                    </div>
                </div>
                <div id="part_1" class="xqf">
                    <div class="bodydiv">                        
                        <?php echo $popular_data['project_intro']; ?>
                    </div>
                </div>
                <div id="part_2">
                    <div class="bodydiv">
                        <?php echo $popular_data['advantage']; ?>
                    </div>
                </div>
                <div id="part_3">
                    <div class="bodydiv">
                        <?php echo $popular_data['unscramble']; ?>
                    </div> 
                </div> 
              
            </div>
        </div>
        <div class="clear"></div>
        <!--尾部调用开始-->
        <div>
	   <!-- //底部模板 -->
<link rel="stylesheet" href="../../../assets/home/css/footer.css">
<?php $this->load->view('public/footer') ?>

<script>
jQuery.divselect("#divselect", "#s-title");
</script>
        </div>
        <!--尾部调用结束-->
        
    </div>
    <script>
    $(function() {
        $(".online-consult").click(function(event) {
            openChat();
        });
         $(".nav_div div").click(function(event) {
            $(this).addClass('on').siblings('div').removeClass('on');
        });
         //固定导航栏
        $(window).scroll(function(e) {
            var maxh = $("#header_layouts").height() + $(".head_k").height();
            if ($(window).scrollTop() > maxh) {
                $(".nav1").css({
                    position: 'fixed',
                    top: 0,
                    zIndex: 999
                });
                $(".xqf").css("margin-top", $(".nav1").height() + "px");
            } else {
                $(".nav1").css({
                    position: 'relative',
                    zIndex: 0
                });
                $(".xqf").css("margin-top", 0);
            }
        });
        $("#part_3 .slide-main .item").eq(0).show().siblings('.item').hide();
        $("#part_3 .slide .top div").click(function() {
            $(this).addClass('on').siblings('div').removeClass('on');
            $("#part_3 .slide-main .item").eq($(this).index()).show().siblings('.item').hide();
        });
    });

    function check_emun(part_id) {
        var scroll_offset = document.getElementById(part_id).offsetTop;
        $("body,html").animate({
            scrollTop: scroll_offset - $(".nav1").height()
        }, 1000);
    }
</script>
</body>

</html>
