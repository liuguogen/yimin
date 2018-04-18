
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>投资移民旗舰品牌，全方位海外生活规划服务平台【侨外出国官网】</title>
		
	 <meta name="keywords" content="移民机构，投资移民，购房移民，海外移民，海外房产，侨外出国，侨外投资移民，侨外移民，侨外" />
    <meta name="description" content="" />
	<link href="../../../../assets/css/wap/mui.min.css" rel="stylesheet"/>
    <link href="../../../../assets/css/wap/index.css" rel="stylesheet"/>
    <script src="../../../../assets/js/wap/jquery-1.9.1.min.js"></script>
    <script src="../../../../assets/js/wap/mui.min.js"></script>	
	<link href="../../../../assets/css/wap/common.css" rel="stylesheet"/>
	<link href="../../../../assets/css/wap/css/base.css" rel="stylesheet"/>
	<link href="../../../../assets/css/wap/css/common.css" rel="stylesheet"/>
	
	
    <script type="text/javascript" charset="utf-8">
      	mui.init({
      		gestureConfig:{
			   tap: true, //默认为true
			   doubletap: true, //默认为false
			   longtap: true, //默认为false
			   swipe: true, //默认为true
			   drag: true, //默认为true
			   hold:false,//默认为false，不监听
			   release:false//默认为false，不监听
			  }
      	});
      	document.documentElement.style.fontSize = document.documentElement.clientWidth / 7.5 + 'px';
      	
    </script>
	<style type="text/css">
     .page {
        font-size: 14px;
        float:right;
        }
        .page a ,.page a.number {
        margin: 0 5px 0 0;
        padding: 3px 6px;
        border: 1px solid #d0d0d0;
        }
        .page a:hover,.page a.current {
        border-color: #428BCA;
        color: #333;
        }
         
        .page{
        /*float:right;*/
        width:800px;
        margin:0 auto;
        }
        .page a{
            color:#333;
        }   
    </style>
    <link rel="stylesheet" href="../../../../assets/css/wap/css/news.css">	 
    </script>
    <!-- <script type="text/javascript" src="/m/web/js/TouchSlide.1.1.source.js"></script>
    
    <script type="text/javascript" src="http://www.iqiaowai.com/templets/new/js/md5.js"></script>
    <script type="text/javascript" src="http://www.iqiaowai.com/templets/new/js/savepath.js"></script>
    <script src="/m/web/js/html2canvas.js"></script>
    <script src="/m/web/js/main_w.js"></script>      -->   
	
		
        
    	
</head>
<body>	
	<nav class="mui-bar mui-bar-tab m-qw-footer">
        <a href='/' class="mui-tab-item mui-tab-a">
            <i style="background-position-y: 0;"></i>
            <p>首页</p>
        </a>
        <a href='/m/project' class="mui-tab-item mui-tab-a">
            <i style="background-position-y: -.4rem;"></i>
            <p>移民项目</p>
        </a>
        <div class="mui-tab-item mui-tab-consult">
            <i style="background-position-y: -1.2rem;"></i>
            <p>在线咨询</p>
        </div>
          <a href="tel:4007009222" target="_self" class="mui-tab-item mui-tab-a" >
            <i style="background-position-y: -1.6rem ;"></i>
            <p>客服电话</p>
        </a>
    </nav>
    <div class="mui-content mui-scroll-wrapper" id="mui-content">
      <div class="mui-scroll m-qw-main">

        <!--轮播图-->

        <?php $this->load->view('public/thumb') ?>
       <!-- 轮播图end -->
        <!-- 主界面具体展示内容 -->
		<h2 class="listname">
    <?php echo $header; ?>
</h2>
<div class="content">


    <?php if($row){
    foreach($row as $v){
 ?>
       <div class="item clearfix">
         <a href="<?php echo $v['url'] ?>">
            <div class="left">
                <img src="../../..<?php echo $v['thumb'] ?>" alt="">
            </div>
            <div class="right">
                <p class="content_title">
                        <?php echo $v['title'] ?></p>
                <p class="content_desc">
                          <?php echo $v['abstract']; ?></p>
            </div> 
                    </a>
        </div>
    <?php }} ?>
    <!--
    $pagenum 总页数
    $pagesize 每页多少个新闻
    -->
           <div class="page clearfix">
                
        	<ul>
                                
            <?php if ($page_links){?><?php echo $page_links; ?><?php }?>                             
            </ul>
                
                    </div>
</div> 
      </div>
    </div> 
    <script>
        mui('.mui-scroll-wrapper').scroll({
            deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
        });
    </script>
    
	  
</body>
</html>