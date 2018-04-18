
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>【深圳4.22】抄底欧洲房产，移民赚钱一举两得!【侨外出国官网】</title>
        
    <meta name="keywords" content="<?php echo $activity_data['title']; ?>" />
    <meta name="description" content="【深圳4.22】抄底欧洲房产，移民赚钱一举两得!" />  
    <link href="../../../../assets/css/wap/xincss/mui.min.css" rel="stylesheet"/>
    <link href="../../../../assets/css/wap/common.css" rel="stylesheet"/>
    
    <link href="../../../../assets/css/wap/css/base.css" rel="stylesheet"/>
    <link href="../../../../assets/css/wap/css/common.css" rel="stylesheet"/>
   <script src="../../../../assets/js/wap/jquery-1.9.1.min.js"></script>
    <script src="../../../../assets/js/wap/mui.min.js"></script>   
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

    <link rel="stylesheet" href="../../../../assets/css/wap/css/artical.css">   
        
</head>
<body>  
   
       <?php $this->load->view('public/nav') ?>
    <div class="mui-content mui-scroll-wrapper" id="mui-content">
      <div class="mui-scroll m-qw-main">

       
        <!-- 主界面具体展示内容 -->
         <div class="content">
        <!-- 文章标题 -->
        <div class="title">
            <h2><?php echo $activity_data['title'] ?></h2>
        </div>
        <!-- 文章作者信息 -->
        <div class="sum clearfix">
            <div class="author">
                作者/<span><?php echo $activity_data['author'] ?></span>
            </div>
            <div class="pubtime">
                <?php echo date('Y-m-d H:i:s',$activity_data['create_time']) ?>
            </div>
        </div>
        <div class="text">
        <!-- 摘要
            <p class="brief">
                <span><-?php echo $info["description"];?></span>
            </p> -->
            <!-- 文章具体内容 -->
            <div class="detail news">
               <p>
    &nbsp;</p>
<?php if(isset($activity_data['activity_time']) && isset($activity_data['prace']) && isset($activity_data['theme'])){ ?>
<p style="text-align: center;">
    <span style="font-size:16px;"><span style="color:#ff0000;"><strong>主题：<?php echo $activity_data['theme']; ?></strong></span></span></p>
<p style="text-align: center;">
    <span style="font-size:16px;"><span style="color:#ff0000;"><strong>时间：<?php echo $activity_data['activity_time']; ?></strong></span></span></p>
<p style="text-align: center;">
    <span style="font-size:16px;"><span style="color:#ff0000;"><strong>地点：<?php echo $activity_data['prace']; ?></strong></span></span></p>
<p style="text-align: center;">
    <span style="font-size:16px;"><span style="color:#ff0000;"><strong>预约热线：<?php echo $activity_data['tel']; ?><br />
    
</p>
<?php } ?>
<?php echo $activity_data['content']; ?>
<?php if(isset($activity_data['activity_time']) && isset($activity_data['prace']) && isset($activity_data['theme'])){ ?>
<p style="text-align: center;">
    <span style="color:#ff0000;"><span style="font-size:14px;">　　<strong>主题：<?php echo $activity_data['theme']; ?></strong></span></span></p>
<p style="text-align: center;">
    <span style="color:#ff0000;"><span style="font-size:14px;"><strong>　　时间：<?php echo $activity_data['activity_time']; ?></strong></span></span></p>
<p style="text-align: center;">
    <span style="color:#ff0000;"><span style="font-size:14px;"><strong>　　地点：<?php echo $activity_data['prace']; ?></strong></span></span></p>
<p style="text-align: center;">
    <span style="color:#ff0000;"><span style="font-size:14px;"><strong>　　预约热线：<?php echo $activity_data['tel']; ?></strong></span></span><br />
    &nbsp;</p>
    <?php } ?>
            </div>
        </div>
        <div class="list_nav">
            <div class="prev clearfix">
                </a>            </div>
            <div class="next clearfix">
                <span>下一篇：</span>&nbsp;&nbsp;<?php echo  $next_data ?> </div>
        </div>
    </div>
    <!-- 热点资讯 -->
    <div class="hot">
        <div class="title">
            <i></i>
            <p>热点资讯</p>
        </div>
        <div class="hotlist">
            <ul>
                <?php if($hot){
                    foreach($hot as $v){
                 ?>
                                <li class="minlist">
                    <a href="<?php echo site_url('activity/'.$v['activity_id'].'/activity')?>">
                        <i class="icon1"></i> <?php echo $v['title'] ?>                  </a>
                </li>
                <?php  }}?>
                               
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