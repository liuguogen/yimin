<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
<meta name="renderer" content="webkit"> 
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <title><?php echo $this->config->item('sitename','home') ?></title>
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="<?php echo $activity_data['title']; ?>" />
    <meta name="description" content="<?php echo isset($activity_data['abstract'])?$activity_data['abstract'] : $activity_data['title']; ?>" />
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="pc,mobile">	
		<script src="../../../assets/home/js/ieBetter.js"></script>
		<script src="../../../assets/home/js/jquery.min.js"></script>
		<script src="../../../assets/home/js/jquery.query.js"></script>
		<script src="../../../assets/home/js/jquery.scroll.js"></script>
		<script src="../../../assets/home/js/dedeajax2.js"></script>
		<script src="../../../assets/home/js/jquery.banner.revolution.min.js"></script>
		<script src="../../../assets/home/js/banner.min.js"></script>
		<script src="../../../assets/home/js/jwplayer.js"></script>
		<script src="../../../assets/home/js/header.js"></script>
	  <link href="../../../assets/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../../../assets/home/css/index.css" rel='stylesheet' type='text/css' />
    <link href="../../../assets/home/css/footer.css" rel='stylesheet' type='text/css' />
    <link href="../../../assets/home/css/functional.css" rel='stylesheet' type='text/css' />
    <link href="../../../assets/home/css/banner.css" rel='stylesheet' type='text/css' />
    <link href="../../../assets/home/css/article.css" rel='stylesheet' type='text/css' />
    <script src="../../../assets/home/js/article.js"></script>
    <script src="../../../assets/home/js/req.js"></script>
    <script src="../../../assets/home/js/bgnms.js"></script>
    <link rel="stylesheet" href="../../../assets/home/css/common.css">
    <link rel="stylesheet" href="../../../assets/home/css/css.css">
    <script src="../../../assets/home/js/md5.js"></script>  
    <script src="../../../assets/home/js/common_new.js"></script>  
    <script src="../../../assets/home/js/savepath_uclick.js"></script>
    <script src="../../../assets/home/js/float_year.js"></script>
    <script src="../../../assets/home/js/jquery.SuperSlide.2.1.1.js"></script>

</head>
<body>
	
<style>
body{background:rgb(238,238,238);}
</style>

<?php $this->load->view('public/header'); ?>
    

    <div class="w1100">
      <div class="breadcrumb">
				<div class="icon"></div>
        <ul>
          <li>当前位置：<a href="<?php echo site_url() ?>">首页</a><span>></span></li>
          <li>
            <a href="<?php echo $url ?>" target='_blank'><?php echo $header; ?></a>
            <span>></span>
          </li>
          <li class="current"><?php echo $activity_data['title']; ?></li>
        </ul>
      </div>


      <div class="main">
        
        <div class="t-r">
          <div class="block cases">
            <div class="title">
              <div class="icon"></div>
              <h2>成功案例</h2>
            </div>
            <div class="box">

              <?php if($this->config->item('case','case')){

                foreach($this->config->item('case','case') as $v){
               ?>
              <div class="item">
                <div class="text">
                  <div class="order"></div>
                  <div class="subtitle"><a href="<?php echo site_url('activity/'.$v['case_id'].'/case') ?>" target='_blank'><?php  echo mb_substr($v['title'], 0,16,'utf-8').'...'; ?></a></div>
                </div>
              </div>
<?php }} ?>
              <br class="cb"/>
            </div>
          </div>




          <div class="block infos">
            <div class="title">
              <div class="icon"></div>
              <h2>热门资讯</h2>
            </div>
            <div class="box">
               <?php if($this->config->item('hot','hot')){

                foreach($this->config->item('hot','hot') as $v){
               ?>
              <div class="item">
                <div class="text">
                  <div class="order"></div>
                  <div class="subtitle"><a href="<?php echo site_url('activity/'.$v['activity_id'].'/activity') ?>" target='_blank'><?php  echo mb_substr($v['title'], 0,16,'utf-8').'...'; ?></a></div>
                </div>
              </div>
            <?php }} ?>
              <br class="cb"/>
            </div>
          </div>
        </div>
         <!-- 右边 -->
           <div class="t-l">
          <div class="container content">
            <div class="title">
              <h1><?php echo $activity_data['title']; ?></h1>
            
            </div>
            <div class="sum">
              <div class="pubtime">
                发布时间:<?php echo date('Y-m-d H:i',$activity_data['create_time']); ?>
              </div>
              <div class="author">
                作者:<?php echo $activity_data['author']; ?>
              </div>
              <div class="reads">
                阅读:<?php echo $activity_data['read_num']; ?>
              </div>
              <div class="share">
                <nofollow>        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["weixin","qzone","tsina","tqq","renren"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","qzone","tsina","tqq","renren"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>                </nofollow>
              </div>
              <br class="cb"/>
            </div>
            <div class="ops">
              <nofollow><a class="btn-query" href="javascript:void(0);"></a></nofollow>
              <nofollow><a class="btn-reserve btn-reserve-arc" href="javascript:void(0);"></a></nofollow>
              <nofollow><a class="btn-test" href="javascript:void(0);"></a></nofollow>
              <script>
                document.write('<script type="text/javascript"  data-lxb-uid="22942246" data-lxb-gid="311488" src="http://lxbjs.baidu.com/api/asset/api.js?t=' + new Date().getTime() + '" charset="utf-8"></scr' + 'ipt>');
              </script>             
              <br class="cb"/>
            </div>
            <div class="text">
              <p class="brief news">
                <span><?php echo  isset($activity_data['abstract'])?$activity_data['abstract']:$activity_data['title'] ; ?></span>
              </p>
              <div class="detail news">
                <div>
  &nbsp;</div>
  <?php if(isset($activity_data['activity_time']) && isset($activity_data['prace']) && isset($activity_data['theme'])){ ?>
<div style="text-align: center;">
  <span style="color:#ff0000;"><strong><span style="font-size:14px;">　　时间：<?php echo $activity_data['activity_time']; ?></span></strong></span></div>
<div style="text-align: center;">
  <span style="color:#ff0000;"><strong><span style="font-size:14px;">　　地点：<?php echo $activity_data['prace']; ?></span></strong></span></div>
<div style="text-align: center;">
  <span style="color:#ff0000;"><strong><span style="font-size:14px;">　　主题：<?php echo $activity_data['theme']; ?></span></strong></span></div>
  <?php }?>
<!--  内容区域-->
    <?php echo $activity_data['content']; ?>
</div>                        
</div>
    <div class="news-nav" >
      <div class="prev" style="width:710px; margin-bottom: 15px;">
          上一篇：<?php echo $prev_data; ?>
      </div>
      <div class="next" style="width:710px;">
          下一篇：<?php echo $next_data; ?>
      </div>
      </div>
      </div>
<div class="box">
  <div class="ops">
  </div>
  <br class="cb"/>
  </div>
  </div>
  </div>
<!-- 右边 end -->
  <br class="cb"/>
  </div>
  </div>
<!-- //底部模板 -->
<?php $this->load->view('public/footer') ?>
<!-- 底部模板end-->
</div>
</div>
</div>
</div>

</div>


</body>
</html>
