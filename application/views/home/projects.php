<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
    <title><?php echo $this->config->item('sitename','home') ?></title>
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="移民项目,投资移民项目,购房移民,永居移民,海外移民房源介绍,海外购房费用,技术移民项目" />
    <meta name="description" content="侨外移民官网投资移民项目甄选栏目诚心为您提供移民项目,投资移民项目,移民项目介绍,海外购房移民,海外房源等相关信息，侨外移民官网为您推荐更合适自身的移民项目." /> 
    <link rel="stylesheet" href="../../../assets/home/css/flexslider.css">
    <link rel="stylesheet" href="../../../assets/home/css/project.css" />
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="pc,mobile">	
              	
        <!-- <script src="http://www.iqiaowai.com/templets/new/js/html5.js"></script> -->
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
</head>

<body>
   


	<link rel="stylesheet" href="../../../assets/home/css/common.css">
    <link rel="stylesheet" href="../../../assets/home/css/css.css">
    <script src="../../../assets/home/js/md5.js"></script>  
    <script src="../../../assets/home/js/common_new.js"></script>  
    <script src="../../../assets/home/js/savepath_uclick.js"></script>
    <script src="../../../assets/home/js/float_year.js"></script>
    <script src="../../../assets/home/js/jquery.SuperSlide.2.1.1.js"></script>
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
            <li>当前位置：<a href="http://www.iqiaowai.com/">首页</a><span>&gt;</span></li>
            <li class="current">热门项目</li>
        </ul>
    </div>
    <div class="qw-center">
		<div class="project-box"  id='md'>
			<div class="options">
				<div class="country  clearfix">
					<div class="item">                                      
	    				移民国家： <i style="background:url(http://www.iqiaowai.com/templets/new/index/images/strengths.png) -189px -150px no-repeat;"></i>
	    			</div>
	    			<ul class="clearfix">
		    				<li value='' class="on">全部</li>
		    				<li value='500'>美国</li>
		    				<li value='1000'>英国</li>
		    				<li value='2500'>加拿大</li>
							<li value='5500'>澳大利亚</li>
		    				<li value='3000'>西班牙</li>
		    				<li value='2000'>葡萄牙</li>
		    				<li value='7000'>希腊</li>
		    				<li value='9500'>马耳他</li>
		    				<li value='6000'>意大利</li>
		    				<li value='8000'>德国</li>
		    				<li value='4000'>圣基茨</li>
		    				<li value='5000'>塞浦路斯</li>
		    				<li value='9000'>荷兰</li>
		    				<li value='8500'>爱尔兰</li>
		    				<li value='4500'>韩国</li>
							<li value='10000'>泰国</li>
							<li value='10500'>多米尼克</li>
							<li value='11000'>几内亚比绍</li>
							<li value='11500'>圣卢西亚</li>
							<li value='12000'>瓦努阿图</li>
	    			</ul>
				</div>
				<div class="type clearfix  ctytype">
					<div class="item">                                      
	    				移民目的： <i style="background:url(http://www.iqiaowai.com/templets/new/index/images/strengths.png) -215px -150px no-repeat;"></i>
	    			</div>
	    			<ul class="clearfix">
	    				<li class="on">全部</li>
	    				<li>投资移民</li>
	    				<li>购房移民</li>
	    				<li>护照移民</li>
	    				<li>技术移民</li>
	    				<li>国债移民</li>
	    				<li>其他</li>
	    			</ul>
				</div>
			</div>
			<div class="no-project hide">
				<i></i><p>抱歉！没有您所筛选的项目</p>
			</div>
			<div class="project-list clearfix">
				<!--注： 热销项目 有类名 project-hot -->
				<div class="project clearfix project-hot">
					<a href="#" target="_blank" rel="nofollow">
						<div class="left">
							<img alt="" src="" />
						</div>
						<div class="right">
							<div class="title">
								<div class="flag">
									<img src="" alt="" />
								</div>
								<h3></h3>
							</div>
							<div class="type types">
								<!--<div class="share"></div>-->
							</div>
							<div class="detail">
								<p class="text">
									
								</p>
							</div>
							<div class="time">
								<i></i>办理周期：<span></span>
							</div>
							<div class="money">
								<i></i>资产要求：<span>1111</span>
							</div>
							<p class="link">查看详情 <i></i></p>
						</div>
					</a>
					<div class="btns">
						<div class="online-consult" onclick="openChat();">在线咨询</div>
						<div class="lxb-box">电话咨询</div>
					</div>	
					<i class="hot"></i>				
				</div>
<div class="project clearfix project-hot">
					<a href="#" target="_blank" rel="nofollow">
						<div class="left">
							<img alt="" src="" />
						</div>
						<div class="right">
							<div class="title">
								<div class="flag">
									<img src="" alt="" />
								</div>
								<h3></h3>
							</div>
							<div class="type types">
								<!--<div class="share"></div>-->
							</div>
							<div class="detail">
								<p class="text">
									
								</p>
							</div>
							<div class="time">
								<i></i>办理周期：<span></span>
							</div>
							<div class="money">
								<i></i>资产要求：<span></span>
							</div>
							<p class="link">查看详情 <i></i></p>
						</div>
					</a>
					<div class="btns">
						<div class="online-consult" onclick="openChat();">在线咨询</div>
						<div class="lxb-box">电话咨询</div>
					</div>	
					<i class="hot"></i>				
				</div>
<div class="project clearfix project-hot">
					<a href="#" target="_blank" rel="nofollow">
						<div class="left">
							<img alt="" src="" />
						</div>
						<div class="right">
							<div class="title">
								<div class="flag">
									<img src="" alt="" />
								</div>
								<h3></h3>
							</div>
							<div class="type types">
								<!--<div class="share"></div>-->
							</div>
							<div class="detail">
								<p class="text">
									
								</p>
							</div>
							<div class="time">
								<i></i>办理周期：<span></span>
							</div>
							<div class="money">
								<i></i>资产要求：<span></span>
							</div>
							<p class="link">查看详情 <i></i></p>
						</div>
					</a>
					<div class="btns">
						<div class="online-consult" onclick="openChat();">在线咨询</div>
						<div class="lxb-box">电话咨询</div>
					</div>	
					<i class="hot"></i>				
				</div>
<div class="project clearfix project-hot">
					<a href="#" target="_blank" rel="nofollow">
						<div class="left">
							<img alt="" src="" />
						</div>
						<div class="right">
							<div class="title">
								<div class="flag">
									<img src="" alt="" />
								</div>
								<h3></h3>
							</div>
							<div class="type types">
								<!--<div class="share"></div>-->
							</div>
							<div class="detail">
								<p class="text">
									
								</p>
							</div>
							<div class="time">
								<i></i>办理周期：<span></span>
							</div>
							<div class="money">
								<i></i>资产要求：<span></span>
							</div>
							<p class="link">查看详情 <i></i></p>
						</div>
					</a>
					<div class="btns">
						<div class="online-consult" onclick="openChat();">在线咨询</div>
						<div class="lxb-box">电话咨询</div>
					</div>	
					<i class="hot"></i>				
				</div>
<div class="project clearfix project-hot">
					<a href="#" target="_blank" rel="nofollow">
						<div class="left">
							<img alt="" src="" />
						</div>
						<div class="right">
							<div class="title">
								<div class="flag">
									<img src="" alt="" />
								</div>
								<h3></h3>
							</div>
							<div class="type types">
								<!--<div class="share"></div>-->
							</div>
							<div class="detail">
								<p class="text">
									
								</p>
							</div>
							<div class="time">
								<i></i>办理周期：<span></span>
							</div>
							<div class="money">
								<i></i>资产要求：<span></span>
							</div>
							<p class="link">查看详情 <i></i></p>
						</div>
					</a>
					<div class="btns">
						<div class="online-consult" onclick="openChat();">在线咨询</div>
						<div class="lxb-box">电话咨询</div>
					</div>	
					<i class="hot"></i>				
				</div>

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
		<div class="project-recommend">
            <div class="qw-title">
                <div class="icon"></div>
                <h2>类似项目推荐</h2>
            </div>
			<div class="recommend-box clearfix">
			<div class="item">
					<a href='http://www.iqiaowai.com/plus/view.php?aid=36361'><img src="http://img8.iqiaowai.com/uploads/allimg/170908/153-1FZR025420-L.jpg" alt="塞浦路斯购房移民" /></a>
					<a href='http://www.iqiaowai.com/plus/view.php?aid=36361'><p>塞浦路斯购房移民</p></a>
				</div>
<div class="item">
					<a href='http://www.iqiaowai.com/plus/view.php?aid=36362'><img src="http://img2.iqiaowai.com/uploads/allimg/170908/153-1FZR043130-L.jpg" alt="爱尔兰投资移民" /></a>
					<a href='http://www.iqiaowai.com/plus/view.php?aid=36362'><p>爱尔兰投资移民</p></a>
				</div>
<div class="item">
					<a href='http://www.iqiaowai.com/plus/view.php?aid=36251'><img src="http://img5.iqiaowai.com/uploads/170908/153-1FZQA241W3.jpg" alt="美国EB-5：宾州PECO政府基建项目" /></a>
					<a href='http://www.iqiaowai.com/plus/view.php?aid=36251'><p>美国EB-5：宾州PECO政府基建项目</p></a>
				</div>

			</div>
		</div>
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

</html>