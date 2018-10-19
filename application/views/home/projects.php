<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
    <title><?php echo $this->config->item('sitename','home') ?></title>
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="<?php echo $this->config->item('keywords','home') ?>" />
    <meta name="description" content="<?php echo $this->config->item('description','home') ?>" /> 
    <link rel="stylesheet" href="../../../assets/home/css/flexslider.css">
    <link rel="stylesheet" href="../../../assets/home/css/project.css" />
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
    <script src="../../../assets/home/js/jquery.flexslider-min.js"></script>
    <script src="../../../assets/home/js/projects.js"></script>
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
body{
background:rgb(238,238,238);
}
</style>
	 <!-- 头部 S -->
    <?php $this->load->view('public/header'); ?>
    <?php $this->load->view('public/thumb'); ?>
    <!-- 面包屑导航 S -->
    <div class="breadcrumb qw-center">
        <div class="icon"></div>
        <ul>
            <li>当前位置：<a href="/">首页</a><span>&gt;</span></li>
            <li class="current">热门项目</li>
        </ul>
    </div>
    <div class="qw-center">
		<div class="project-box"  id='md'>
			<div class="options">
				<div class="country  clearfix">
					<div class="item">                                      
	    				移民国家： <i style="background:url(../../../assets/images/strengths.png) -189px -150px no-repeat;"></i>
	    			</div>
	    			<ul class="clearfix" id="cityall">
		    				<li data='cityall' class="on">全部</li>
                            <?php if($city){
                               foreach($city as $v){ 
                             ?>
		    				<li data="<?php echo $v; ?>"><?php echo $v; ?></li>
		    				<?php }}?>
	    			</ul>
				</div>
				<div class="type clearfix  ctytype">
					<div class="item">                                      
	    				移民目的： <i style="background:url(../../../assets/images/strengths.png) -215px -150px no-repeat;"></i>
	    			</div>
	    			<ul class="clearfix" id="objectiveall">
	    				<li data="objectiveall" class="on">全部</li>
	    				 <?php if($objective){
                               foreach($objective as $v){ 
                             ?>
                            <li data="<?php echo $v; ?>"><?php echo $v; ?></li>
                            <?php }}?>
	    			</ul>
				</div>
			</div>
			<div class="no-project hide" id="no-project">
				<i></i><p>抱歉！没有您所筛选的项目</p>
			</div>
			<div class="project-list clearfix">
				<!--注： 热销项目 有类名 project-hot -->
				



                

				<div class="tips_t hide">
                    <input type="text" placeholder="请输入您的电话" id="about-china-dial">
                    <a target="_blank" id="about-china-dial-btn" href="javascript:void(0);">
                        立即免费通话
                     </a>
                </div>
                
				<div class="pagination" style="clear: both;">
							
				</div>
			</div>
			
		</div>
		
		<!-- 类似项目推荐 S -->
	
		<!-- 类似项目推荐 E -->
    </div>	
    <!-- 面包屑导航 E -->
	
    <!-- //底部模板 -->
<?php $this->load->view('public/footer') ?>

</div>

</div>

</div>

</div>
<link rel="stylesheet" href="../../../asset/home/css/general8.css">
</div>
<script src="http://www.iqiaowai.com/data/enums/country.js"></script>
<script src="http://www.iqiaowai.com/data/enums/city.js"></script>
</body>
<script type="text/javascript">
    $(function(){
        var cityclass = $("#cityall>li").attr('class');
        var objectiveclass = $("#objectiveall>li").attr('class');
        if(cityclass=='on') {
            var cityall  = $("#cityall>li").attr('data');
        }
        if(objectiveclass=='on') {
            var objectiveall  = $("#objectiveall>li").attr('data');
        }

        $.post("<?php echo site_url('getprojects')?>", {"city":cityall,"objective":objectiveall}, function(data){
            $('.project-list').children().remove();
            $('.project-list').append(data);
        },'html');

        $("#cityall li").on('click',function(e){
           cityall = this.getAttribute('data');
           var objectiveclass = $("#objectiveall>li").attr('class');
           if(objectiveclass=='on') {
             objectiveall  = $("#objectiveall>li").attr('data');
            }
           $.post("<?php echo site_url('getprojects')?>", {"city":cityall,"objective":objectiveall}, function(data){
                if(data=='no') {
                $('.no-project').removeClass('hide');
                $('.project-list').children().remove();
               }else {
                $('.no-project').removeClass('hide');
                $('.project-list').children().remove();
                 $('.project-list').append(data);
               }
            },'html');
        });
        $("#objectiveall li").on('click',function(e){
           objectiveall = this.getAttribute('data');
           var cityclass = $("#cityall>li").attr('class');
           if(cityclass=='on') {
                cityall  = $("#cityall>li").attr('data');
            }
           $.post("<?php echo site_url('getprojects')?>", {"city":cityall,"objective":objectiveall}, function(data){
               if(data=='no') {
                $('.no-project').removeClass('hide');
                $('.project-list').children().remove();
               }else {
                $('.no-project').removeClass('hide');
                $('.project-list').children().remove();
                 $('.project-list').append(data);
               }
            },'html');
        });
    })
</script>
</html>