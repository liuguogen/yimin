
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
<meta name="renderer" content="webkit"> 
		<link rel="shortcut icon" href="/favicon.ico" />
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<title><?php echo $activity_data['title']; ?></title>
        <meta name="renderer" content="webkit">
         <meta name="keywords" content="<?php echo $this->config->item('keywords','home') ?>" />
    <meta name="description" content="<?php echo $this->config->item('description','home') ?>" /> 
    

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


    <link href="../../../assets/home/css/news.css" rel='stylesheet' type='text/css' />
    <script src="http://www.iqiaowai.com/templets/new/js/news.js"></script>
    

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
.pagination {
font-size: 14px;
float:right;
}
.pagination a ,.pagination a.number {
margin: 0 5px 0 0;
padding: 3px 6px;
border: 1px solid #d0d0d0;
}
.pagination a:hover,.pagination a.current {
border-color: #428BCA;
color: #333;
}
 
.page{
/*float:right;*/
width:800px;
margin:0 auto;
}
.pagination a{
    color:#333;
}
</style>
	 <?php $this->load->view('public/header'); ?>
		<div class="w1100">
			<div class="breadcrumb">
				<div class="icon"></div>

				<ul>
					<li>当前位置：<a href="/">首页</a><span>></span></li>
					<li class="current"><?php echo $header; ?></li>
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
									<div class="subtitle"><a target="_blank" href="<?php echo site_url('activity/'.$v['activity_id'].'/activity') ?>"><?php  echo mb_substr($v['title'], 0,16,'utf-8').'...'; ?></a></div>
								</div>
							</div>
                        <?php }} ?>
                            
							<br class="cb"/>



						</div>
                        


					</div>


					
                
				</div>


                <div class="t-l">
                    <?php if($row){
                    foreach($row as $v){
                 ?>
                    <div class="item">
                        <div class="img">
                            <a href="<?php echo $v['url'] ?>" target="_blank"><img src="../../../<?php echo $v['thumb'] ?>" alt="<?php echo $v['title'] ?>" title="<?php echo $v['title'] ?>"></a>
                        </div>
                        <div class="text">
                            <div class="title"><a href="<?php echo $v['url'] ?>" target="_blank"><h3><?php echo $v['title'] ?></h3></a></div>
                            <div class="desc"><?php echo $v['abstract']; ?><a class="detail" target="_blank" href="<?php echo $v['url'] ?>">【详情】</a></div>
                            <div class="ops">
                                <div class="time">
                                    <div class="icon"></div>
                                    <?php echo date('Y-m-d',$v['create_time']); ?>
                                </div>
                               <!--  <div class="tags">
                                    <div class="icon"></div>
                                    <ul><li class="first">河南侨外</li><li>北美投资</li><li>美国移民</li></ul>
                                </div> -->
                                
                                
                                <!-- <div class="collect">
                                    <a class="icon" data-id="38924" data-title="侨外河南分公司盛大开业" href="javascript:void(0);"></a>
                                </div> -->
                                
                               
                                
                            </div>
                        </div>
                        <br class="cb"><br>
                    </div>
                  
                    <?php }} ?>



                    <?php if ($page_links){?><div class="pagination"><?php echo $page_links; ?></div><?php }?>
                   <!--  <div class="pagination">
                    <li><a onclick="javascript:;">首页</a></li>
<li class="thisclass"><a onclick="javascript:;">1</a></li>
<li><a href="/trends-2.html">2</a></li>
<li><a href="/trends-3.html">3</a></li>
<li><a href="/trends-4.html">4</a></li>
<li><a href="/trends-2.html">下一页</a></li>
<li><a href="/trends-4.html">末页</a></li>
<li><span class="pageinfo">共 <strong>4</strong>页<strong>36</strong>条</span></li>

                    </div> -->
                    <br class="cb">


                </div>
				<br class="cb"/>
                

                
			</div>
                


        
		</div>
    




		
    


		<!-- //底部模板 -->
<?php $this->load->view('public/footer') ?>












	</body>
</html>
