<!DOCTYPE html>
<html lang="en" style="max-width:1920px;min-width:1100px;margin:0 auto">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />              
     <meta http-equiv="Cache-Control" content="no-transform" /> 
     <meta http-equiv="Cache-Control" content="no-siteapp" />
     <meta name="applicable-device" content="pc">	
    <link rel="shortcut icon" href="/favicon.ico" />
    <title><?php echo $this->config->item('sitename','home') ?></title>
    <meta name="keywords" content="侨外移民,侨外移民官网,侨外投资移民,投资移民,美国移民,英国投资移民,侨外,侨外集团" />
    <meta name="description" content="侨外移民，美国投资移民EB-5、英国企业家移民引入机构，侨外为上万家庭实现移民梦想，业务涵盖美国、英国、澳大利亚、葡萄牙、西班牙等十余国，提供投资移民、海外置业、教育规划、家族财富管理、全球资产配置等专业、贴心、省心的全方位海外生活规划服务！" />
    <link rel="stylesheet" href="../../../assets/home/css/common.css">
    <link rel="stylesheet" href="../../../assets/home/css/css.css">
    <link rel="stylesheet" href="../../../assets/home/css/banner.css">
    <link rel="stylesheet" href="../../../assets/home/css/flexslider.css">
    <script src="../../../assets/home/js/jquery.min.js"></script>
    <script src="../../../assets/home/js/jquery.flexslider-min.js"></script>
    <script src="../../../assets/home/js/jwplayer.js"></script>
    <script src="../../../assets/home/js/jquery.kxbdMarquee.js"></script>
    <script src="../../../assets/home/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="../../../assets/home/js/common_new.js"></script>
    <script src="../../../assets/home/js/index.js"></script>
	<script src="../../../assets/home/js/savepath.js"></script>
	<link href="../../../assets/home/css/footer.css" rel='stylesheet' type='text/css'/>
	<script>
	$(document).ready(function(){
		uclick("首页");
	});
	</script>
	<script src="../../../assets/home/js/cnzz.js"></script>
    <script src="../../../assets/home/js/float_year.js"></script>
</head>

<body>
    <?php $this->load->view('public/header'); ?>
    
    <?php $this->load->view('public/thumb') ?>
    
    <div class="qw-project">
        <div class="qw-center" onclick="_czc.push(['_trackEvent','新官网主页1.5-热门项目','点击','新官网主页1.5-热门项目']);">
            <div class="title-box clearfix">
                <i></i>
                <div class="title">热门项目 <span>Popular project</span></div>
                <div class="more"><a href="<?php echo site_url('projects') ?>" target="_blank">更多...</a></div>
               <!--  <div class="change" onclick="romchange();">换一批</div> -->
				 <script src="../../../asset/home/js/gz_d2.js"></script>
            </div>
            <div class="project-item clearfix">
			 <!-- <div class="tips_t hide">
                    <input type="text" placeholder="请输入您的电话" id="project-dial">
                    <a target="_blank" id="project-dial-btn" href="javascript:void(0);">
                        立即免费通话
                    </a>
                </div> -->
				 <script src="../../../asset/home/js/gz_d.js"></script>
				   
                <script>
                document.write('<script type="text/javascript"  data-lxb-uid="22942246" data-lxb-gid="311488" src="http://lxbjs.baidu.com/api/asset/api.js?t=' + new Date().getTime() + '" charset="utf-8"></scr' + 'ipt>');
                document.getElementById("project-dial-btn").onclick = function() {
                    lxb.call(document.getElementById("project-dial"));
                };
                </script>

                 <?php if($popular_data){

                    foreach ($popular_data as $k => $v) {
                        
                    
                  ?>
			<div class="item">
					<input type="hidden" class="romid" name="romid" value="<?php echo $v['popular_id']; ?>"/>
                    <div class="heart h_pro"><span class="pro_gz_id"><?php echo $v['follow']; ?></span>关注</div><!-- onclick="pro_gzid(this);"-->
                    <a class="rom_a" href="<?php echo site_url('popular/'.$v['popular_id'].'')?>" target="_blank"><img src="../../../<?php echo $v['thumb'] ?>" class="rom_img"  width="350px" height="200" alt="<?php echo $v['title'] ?>"/></a>
                    <p class="name rom_name"><b><a class="rom_a" href="<?php echo site_url('popular/'.$v['popular_id'].'')?>" target="_blank"> <?php echo $v['title'] ?></a></b></p>
                    <p class="desc rom_desc"><a class="rom_a" href="<?php echo site_url('popular/'.$v['popular_id'].'')?>" target="_blank"><?php echo mb_substr($v['brief'],0,120,'utf-8').'...'; ?></a></p>
                    <p class="price">价格：<span class="rom_bud"><?php echo $v['price'] ?></span></p>
                    <div class="project-consult clearfix">
                        <a href="<?php echo site_url('popular/'.$v['popular_id'].'')?>"><div class="" style="width: 300px;background: #3ab6ca;line-height: 36px;height: 36p;margin:10px 22px;color: white;text-align: center;">查看详情</div></a>
                       
                    </div>
                </div>

<?php }}?>


            </div>
        </div>
    </div>
    <!-- 热门项目 E-->
    <!-- 侨外活动 S-->
    <div class="qw-activity">
        <div class="qw-center">
            <div class="title-box clearfix">
                <i></i>
                <div class="title">移民热点 <span>Hotspot</span></div>
                <div class="more"><a href="/activity/" target="_blank">更多>></a></div>
            </div>
            <div class="qw-activity-box clearfix" onclick="_czc.push(['_trackEvent','新官网主页1.5-侨外活动','点击','新官网主页1.5-侨外活动']);">

                <?php if($activity_data){

                    foreach ($activity_data as $ak => $av) {
                        
                    
                  ?>
            <div class="detail" data-num="<?php echo $av['activity_id'] ?>">
                    <i></i>
                    <a href="<?php echo site_url('activity/'.$av['activity_id'].'')?>" target="_blank"><img src="../../../<?php echo $av['thumb'] ?>" alt="<?php echo $av['title'] ?>"></a>
                    <div class="text-box">
                        <a href="<?php echo site_url('activity/'.$av['activity_id'].'')?>" target="_blank"><p class="profile"><?php echo mb_substr($av['abstract'],0,60,'utf-8').'...'; ?></p></a>
                        <p class="time">
                            时间：<?php echo $av['activity_time']; ?>
                        </p>
                        <p class="address">
                            地点：<?php echo $av['prace']; ?>
                        </p>
                    </div>
                </div>
<?php }}?>


                <div class="list" id="pro_end">
                    <ul>

                       <?php if($activity_data){

                    foreach ($activity_data as $ak => $av) {
                        
                    
                  ?>
                    <input type="hidden" value="<?php echo $av['activity_id'] ?>" class="act_id"/>
                        <li class="clearfix now" data-num="<?php echo $av['activity_id'] ?>">
                            <input type="hidden" value="<?php echo date('Y-m-d',$av['create_time']); ?>" class=""/>
                            <a  target="_blank" href="<?php echo site_url('activity/'.$av['activity_id'].'')?>" alt="<?php echo $av['title'] ?>" ><?php echo $av['title'] ?></a>
                            <span onclick="tanchu();" class="act34">预约</span>
                        </li>

                    
<?php }} ?>

                    </ul>   
                    <script src="../../../asset/home/js/active_sort.js"></script>
                </div>
            </div>
        </div>
    </div>
    <!-- 侨外活动 E-->
    <!-- 移民国家 S-->
    <div class="qw-country">
        <div class="qw-center">
            <div class="title-box clearfix">
                <i></i>
                <div class="title">移民国家 <span>Immigrant country</span></div>
            </div>
            <div class="items clearfix">
			<div class="item">
					<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-美  国','点击','新官网主页1.5-大图片移民国家-美  国']);"  href="http://www.iqiaowai.com/america/">
                    <img src="http://img8.iqiaowai.com/uploads/170911/153-1F91115412A01.jpg" alt="美  国"/>
                    <div class="text-box">
                        <p class="name">美  国</p>
						<p class="tag">世界第一大经济体</p>
                        <div class="heart"><span>60268</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="30723"/>
                    <div class="desc-box">
                        <div class="name">美  国<span></span></div>
                        <div class="desc">无语言要求，无移民监限制<br/>投资期满后返还投资款项<br/>全家得绿卡，享受美国各类福利</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
					<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-英  国','点击','新官网主页1.5-大图片移民国家-英  国']);"  href="http://www.iqiaowai.com/england/">
                    <img src="http://img4.iqiaowai.com/uploads/170911/153-1F91115442J32.jpg" alt="英  国"/>
                    <div class="text-box">
                        <p class="name">英  国</p>
						<p class="tag">移民同时获英企工作</p>
                        <div class="heart"><span>44941</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="30728"/>
                    <div class="desc-box">
                        <div class="name">英  国<span></span></div>
                        <div class="desc">首付10万镑，分期投资更灵活<br/>获批平均仅1个月，侨外最快当天获批<br/>3-18岁随行子女享免费公立教育</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
					<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-加 拿 大','点击','新官网主页1.5-大图片移民国家-加 拿 大']);"  href="http://www.iqiaowai.com/canada/">
                    <img src="http://img6.iqiaowai.com/uploads/170911/153-1F911154614445.jpg" alt="加 拿 大"/>
                    <div class="text-box">
                        <p class="name">加 拿 大</p>
						<p class="tag">宜居的福利天堂</p>
                        <div class="heart"><span>34240</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="31092"/>
                    <div class="desc-box">
                        <div class="name">加 拿 大<span></span></div>
                        <div class="desc">拥有优质的居住环境，高质量教育<br/>福利体系完善，社会制度开明<br/>双语社会，移民融合度高</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
					<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-荷   兰','点击','新官网主页1.5-大图片移民国家-荷   兰']);"  href="http://www.iqiaowai.com/netherlands/">
                    <img src="http://img5.iqiaowai.com/uploads/170911/153-1F911154QS60.jpg" alt="荷   兰"/>
                    <div class="text-box">
                        <p class="name">荷   兰</p>
						<p class="tag">性价比超高移民项目</p>
                        <div class="heart"><span>36911</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="33814"/>
                    <div class="desc-box">
                        <div class="name">荷   兰<span></span></div>
                        <div class="desc">多种方案，灵活享受高福利<br/>无移民监，不影响国内生活<br/>便捷快速，登陆后即可拿卡</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
					<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-西 班 牙','点击','新官网主页1.5-大图片移民国家-西 班 牙']);"  href="http://www.iqiaowai.com/spain/">
                    <img src="http://img8.iqiaowai.com/uploads/170911/153-1F9111545091T.jpg" alt="西 班 牙"/>
                    <div class="text-box">
                        <p class="name">西 班 牙</p>
						<p class="tag">欧元区第四大经济体</p>
                        <div class="heart"><span>31258</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="30731"/>
                    <div class="desc-box">
                        <div class="name">西 班 牙<span></span></div>
                        <div class="desc">申请门槛低，简单快捷<br/>一人申请，三代获身份<br/>拥有永久产权，无遗产税<br/></div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
					<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-希  腊','点击','新官网主页1.5-大图片移民国家-希  腊']);"  href="http://www.iqiaowai.com/greece/">
                    <img src="http://img3.iqiaowai.com/uploads/170911/153-1F9111546003W.jpg" alt="希  腊"/>
                    <div class="text-box">
                        <p class="name">希  腊</p>
						<p class="tag">全欧投资额最低</p>
                        <div class="heart"><span>30479</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="31054"/>
                    <div class="desc-box">
                        <div class="name">希  腊<span></span></div>
                        <div class="desc">投资额低，三代移民<br/>一步到位拿绿卡<br/>房产升值空间大，回报率高达5%</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>

            </div>
            <div class="items clearfix hide">
              <div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-澳大利亚','点击','新官网主页1.5-大图片移民国家-澳大利亚']);"  href="http://www.iqiaowai.com/australia/">
                    <img src="http://img5.iqiaowai.com/uploads/170911/153-1F911154629400.jpg" alt="澳大利亚"/>
                    <div class="text-box">
                        <p class="name">澳大利亚</p>
						<p class="tag">世界公认的宜居城市</p>
                        <div class="heart"><span>32672</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="31093"/>
                    <div class="desc-box">
                        <div class="name">澳大利亚<span></span></div>
                        <div class="desc">移民澳大利亚，同享新西兰永居</br>享受大国福利、世界教育</br>多个城市常列世界最宜居城市榜单</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-马 耳 他','点击','新官网主页1.5-大图片移民国家-马 耳 他']);"  href="http://www.iqiaowai.com/malta/">
                    <img src="http://img3.iqiaowai.com/uploads/170911/153-1F911154RLL.jpg" alt="马 耳 他"/>
                    <div class="text-box">
                        <p class="name">马 耳 他</p>
						<p class="tag">地中海心脏</p>
                        <div class="heart"><span>17316</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="35375"/>
                    <div class="desc-box">
                        <div class="name">马 耳 他<span></span></div>
                        <div class="desc">欧洲唯一的国债移民项目，风险低</br>无移民监，无语言等要求</br>一步到位6个月获永居，四代移民</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-葡 萄 牙','点击','新官网主页1.5-大图片移民国家-葡 萄 牙']);"  href="http://www.iqiaowai.com/portugal/">
                    <img src="http://img2.iqiaowai.com/uploads/170911/153-1F911154450640.jpg" alt="葡 萄 牙"/>
                    <div class="text-box">
                        <p class="name">葡 萄 牙</p>
						<p class="tag">年收益高达6.1%</p>
                        <div class="heart"><span>10209</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="30729"/>
                    <div class="desc-box">
                        <div class="name">葡 萄 牙<span></span></div>
                        <div class="desc">宜居国家，福利完善</br>办理简单，无移民监</br>房产直购，房价透明</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-意 大 利','点击','新官网主页1.5-大图片移民国家-意 大 利']);"  href="http://www.iqiaowai.com/italy/">
                    <img src="http://img3.iqiaowai.com/uploads/170911/153-1F9111545411Y.jpg" alt="意 大 利"/>
                    <div class="text-box">
                        <p class="name">意 大 利</p>
						<p class="tag">世界艺术与时尚之都</p>
                        <div class="heart"><span>16544</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="31053"/>
                    <div class="desc-box">
                        <div class="name">意 大 利<span></span></div>
                        <div class="desc">门槛较低，办理轻松</br>无背景、语言要求，无移民监</br>审批仅3-4个月，享受欧盟永居</br></div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-德  国','点击','新官网主页1.5-大图片移民国家-德  国']);"  href="http://www.iqiaowai.com/germany/">
                    <img src="http://img5.iqiaowai.com/uploads/170911/153-1F911154F15a.jpg" alt="德  国"/>
                    <div class="text-box">
                        <p class="name">德  国</p>
						<p class="tag">欧洲第一大经济体</p>
                        <div class="heart"><span>13318</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="31097"/>
                    <div class="desc-box">
                        <div class="name">德  国<span></span></div>
                        <div class="desc">总费用14万欧元，可分期付款</br>本科申请全家同行，0登陆无语言要求</br>1周获批90天登陆，21个月可转永居</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-圣 基 茨','点击','新官网主页1.5-大图片移民国家-圣 基 茨']);"  href="http://www.iqiaowai.com/saintkitts/">
                    <img src="http://img1.iqiaowai.com/uploads/170911/153-1F911154GV47.jpg" alt="圣 基 茨"/>
                    <div class="text-box">
                        <p class="name">圣 基 茨</p>
						<p class="tag">资金避险圣地</p>
                        <div class="heart"><span>11260</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="31098"/>
                    <div class="desc-box">
                        <div class="name">圣 基 茨<span></span></div>
                        <div class="desc">合法规避CRS，最快28天获批</br>无语言、学历、年龄等要求</br>四代移民，全球免签154国</br></div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-塞浦路斯','点击','新官网主页1.5-大图片移民国家-塞浦路斯']);"  href="http://www.iqiaowai.com/cyprus/">
                    <img src="http://img4.iqiaowai.com/uploads/170911/153-1F91115452U46.jpg" alt="塞浦路斯"/>
                    <div class="text-box">
                        <p class="name">塞浦路斯</p>
						<p class="tag">快速便捷获欧盟身份</p>
                        <div class="heart"><span>32924</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="30732"/>
                    <div class="desc-box">
                        <div class="name">塞浦路斯<span></span></div>
                        <div class="desc">90天即可成为欧盟公民</br>享受欧洲各项福利制度</br>规避CRS，实现资产有效配置</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-爱 尔 兰','点击','新官网主页1.5-大图片移民国家-爱 尔 兰']);"  href="http://www.iqiaowai.com/ireland">
                    <img src="http://img2.iqiaowai.com/uploads/170911/153-1F911154I6194.jpg" alt="爱 尔 兰"/>
                    <div class="text-box">
                        <p class="name">爱 尔 兰</p>
						<p class="tag">西欧福利大国</p>
                        <div class="heart"><span>37021</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="32147"/>
                    <div class="desc-box">
                        <div class="name">爱 尔 兰<span></span></div>
                        <div class="desc">无移民监、语言、管理背景等要求</br>先获批得身份后投资</br>护照免签172国，直通欧洲</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-韩  国','点击','新官网主页1.5-大图片移民国家-韩  国']);"  href="http://www.iqiaowai.com/korea/">
                    <img src="http://img1.iqiaowai.com/uploads/170911/153-1F911154P4426.jpg" alt="韩  国"/>
                    <div class="text-box">
                        <p class="name">韩  国</p>
						<p class="tag">进入大国的最佳跳板</p>
                        <div class="heart"><span>63994</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="32469"/>
                    <div class="desc-box">
                        <div class="name">韩  国<span></span></div>
                        <div class="desc">投资额低，申请流程简单</br>5天即可获得身份</br>国家福利制度完善</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-泰   国','点击','新官网主页1.5-大图片移民国家-泰   国']);"  href="http://www.iqiaowai.com/zhuanti/thailand171117/#banner-1">
                    <img src="http://img8.iqiaowai.com/uploads/171130/156-1G13015011O00.jpg" alt="泰   国"/>
                    <div class="text-box">
                        <p class="name">泰   国</p>
						<p class="tag">国家级贵宾礼遇</p>
                        <div class="heart"><span>33780</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="37389"/>
                    <div class="desc-box">
                        <div class="name">泰   国<span></span></div>
                        <div class="desc">出入泰国尊享快速通道</br>高端旅游项目专属折扣</br>泰国税号CRS应急开户</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-多米尼克','点击','新官网主页1.5-大图片移民国家-多米尼克']);"  href="http://www.iqiaowai.com/zhuanti/dominic171204/">
                    <img src="http://img7.iqiaowai.com/uploads/180124/187-1P1240924352F.jpg" alt="多米尼克"/>
                    <div class="text-box">
                        <p class="name">多米尼克</p>
						<p class="tag">10万美元起四代移民</p>
                        <div class="heart"><span>32424</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="38327"/>
                    <div class="desc-box">
                        <div class="name">多米尼克<span></span></div>
                        <div class="desc">可投资政府首个五星酒店项目</br>快速应对CRS、对接迪拜长签</br>简单快捷，性价比高</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>
<div class="item">
				<a target="_blank" onclick="gzid(this);_czc.push(['_trackEvent','新官网主页1.5-大图片移民国家-圣卢西亚','点击','新官网主页1.5-大图片移民国家-圣卢西亚']);"  href="http://www.iqiaowai.com/zhuanti/saintlucia180117/">
                    <img src="http://img4.iqiaowai.com/uploads/180124/187-1P12409333OP.jpg" alt="圣卢西亚"/>
                    <div class="text-box">
                        <p class="name">圣卢西亚</p>
						<p class="tag">先批复后投资</p>
                        <div class="heart"><span>30271</span>关注</div>
                    </div>
					<input type="hidden" class="input_gz" value="38328"/>
                    <div class="desc-box">
                        <div class="name">圣卢西亚<span></span></div>
                        <div class="desc">英联邦国家、英伦教育</br>10万美元起、一人申请三代移民</br>对接迪拜长签、免签150国</div>
                        <div class="a-link">查看详情</div>
                    </div>
					</a>
                </div>

            </div>
			<script>
				$(function(){
					$.post("/plus/gzid.php",{status:"load"},function(d){
						var jsonobj=eval('('+d+')');
						for(var i=0;i<jsonobj.length;i++){
							$(".input_gz").each(function(index,el){
								if(jsonobj[i]['aid'] == $(el).val()){
									$(el).siblings(".text-box").find(".heart span").html(jsonobj[i]['gz_id']);
								}
							});
						}
					});
				});
				function gzid(e){
					var gids = $(e).find("input").val();
					$.get('/plus/gzid.php',{gid:gids},function(d){
					});
				}
			</script>
            <div class="country-add"  onclick="_czc.push(['_trackEvent','新官网主页1.5-查看更多移民国家','点击','新官网主页1.5-查看更多移民国家']);">查看更多移民国家  <i></i></div>
        </div>
    </div>
    <!-- 移民国家 E-->
    <!-- 侨外动态 S-->
    <div class="qw-news-video qw-center clearfix">
        <div class="qw-news">
            <div class="title-box clearfix">
                <i></i>
                <div class="title" style="width:275px;">侨外动态 <span>Qiaowai news</span></div>
				<span style="float:right;line-height: 53px;"><a href='/trends/' style="color:#c1c1c1;" target="_blank">更多>></a></span>
            </div>
            <div class="items clearfix" id="slide" onclick="_czc.push(['_trackEvent','新官网主页1.5-侨外动态','点击','新官网主页1.5-侨外动态']);">
                <ul>
                    
						<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/trends/37130.html"><img src="http://img1.iqiaowai.com/uploads/171106/156-1G1061Q42XN.jpg" alt="美国投资移民行业盛典来了！" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/trends/37130.html" target="_blank">美国投资移民行业盛典来了！…</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/trends/37130.html" target="_blank">11月3日，侨外集团联袂美国权威地产媒体《The …</a></p>
									<a class="link" href="http://www.iqiaowai.com/trends/37130.html" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/plus/view.php?aid=36932"><img src="http://img2.iqiaowai.com/uploads/allimg/171020/153-1G0201R0210-L.jpg" alt="侨外移民带您走进英联邦" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/plus/view.php?aid=36932" target="_blank">侨外移民带您走进英联邦</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/plus/view.php?aid=36932" target="_blank">10月20日，侨外集团第五次在英国驻华大使官邸举…</a></p>
									<a class="link" href="http://www.iqiaowai.com/plus/view.php?aid=36932" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/trends/36540.html"><img src="http://img6.iqiaowai.com/uploads/allimg/170926/156-1F9261159210-L.jpg" alt="有一种标准，叫侨外" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/trends/36540.html" target="_blank">有一种标准，叫侨外</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/trends/36540.html" target="_blank">2004年侨外移民创始人丁颖将美国投资移民EB-5项目…</a></p>
									<a class="link" href="http://www.iqiaowai.com/trends/36540.html" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/trends/36324.html"><img src="http://img6.iqiaowai.com/uploads/allimg/170906/153-1FZ61IH90-L.jpg" alt="《中国新移民》在京开播" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/trends/36324.html" target="_blank">《中国新移民》在京开播</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/trends/36324.html" target="_blank">由凤凰卫视与侨外移民联合打造的《逐梦彼岸-…</a></p>
									<a class="link" href="http://www.iqiaowai.com/trends/36324.html" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/plus/view.php?aid=36310"><img src="http://img6.iqiaowai.com/uploads/allimg/170711/156-1FG11R602L3.jpg" alt="侨外海外规划展催热学区房" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/plus/view.php?aid=36310" target="_blank">侨外海外规划展催热学区房…</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/plus/view.php?aid=36310" target="_blank">7月8日、9日，侨外海外生活规划服务展在青岛、…</a></p>
									<a class="link" href="http://www.iqiaowai.com/plus/view.php?aid=36310" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/plus/view.php?aid=36309"><img src="http://img4.iqiaowai.com/uploads/170711/194-1FG109111K52.jpg" alt="《私校见面会》解析英国教育" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/plus/view.php?aid=36309" target="_blank">《私校见面会》解析英国教育…</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/plus/view.php?aid=36309" target="_blank">2017年7月9日，侨外集团联合英国大使馆文化教育…</a></p>
									<a class="link" href="http://www.iqiaowai.com/plus/view.php?aid=36309" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/plus/view.php?aid=36307"><img src="http://img5.iqiaowai.com/uploads/allimg/170627/153-1F62G436430-L.jpg" alt="英国投资移民趋势看过来！" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/plus/view.php?aid=36307" target="_blank">英国投资移民趋势看过来！…</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/plus/view.php?aid=36307" target="_blank">6月23日，恰逢脱欧公投一周年之际，由侨外集团…</a></p>
									<a class="link" href="http://www.iqiaowai.com/plus/view.php?aid=36307" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/trends/36541.html"><img src="http://img6.iqiaowai.com/uploads/170926/156-1F92612142A93.jpg" alt="马光远解析海外投资机遇" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/trends/36541.html" target="_blank">马光远解析海外投资机遇</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/trends/36541.html" target="_blank">9月23日，独立经济学家马光远在“侨外海外生活…</a></p>
									<a class="link" href="http://www.iqiaowai.com/trends/36541.html" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/plus/view.php?aid=36308"><img src="http://img2.iqiaowai.com/uploads/allimg/170628/156-1F62QFA1c6.jpg" alt="李稻葵侨外谈海外规划重要性" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/plus/view.php?aid=36308" target="_blank">李稻葵侨外谈海外规划重要性…</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/plus/view.php?aid=36308" target="_blank">对于移民目的国的选择，部分投资人目标极为明…</a></p>
									<a class="link" href="http://www.iqiaowai.com/plus/view.php?aid=36308" target="_blank">详情>></a>
								</div> 
							</li>
<li class="clearfix">
								<div class="item">
									<a target="_blank" href="http://www.iqiaowai.com/plus/view.php?aid=35093"><img src="http://img6.iqiaowai.com/uploads/170901/153-1FZ11P05Q19.jpg" alt="侨外：“全方位海外生活规划服务平台”" width='270px' height='180px'/></a>
									<p class="name"><b><a href="http://www.iqiaowai.com/plus/view.php?aid=35093" target="_blank">侨外：“全方位海外生活规划…</a></b></p>
									<p class="desc"><a href="http://www.iqiaowai.com/plus/view.php?aid=35093" target="_blank">2017年4月23日，“侨首以待-侨外品牌战略升级发布…</a></p>
									<a class="link" href="http://www.iqiaowai.com/plus/view.php?aid=35093" target="_blank">详情>></a>
								</div> 
							</li>

                   
                </ul>
            </div>
        </div>
        <div class="qw-video" onclick="_czc.push(['_trackEvent','新官网主页1.5-侨外视频','点击','新官网主页1.5-侨外视频']);">
            <div class="video-box">
                <div class="title-box clearfix">
                    <div class="title" style="width:275px;">侨外视频 <span>Qiaowai video</span><span style="margin-left:10px;"><a href='/video/' style="color:#fff;" target="_blank">更多>></a></span></div>
                </div>
                <div class="video" id="player"></div>
				<script type="text/javascript">
                jwplayer("player").setup({
                    stretching: "fill",
                    flashplayer: "http://www.iqiaowai.com/templets/new/js/player.swf",
                    image: "http://img4.iqiaowai.com/uploads/170929/156-1F9291R0235F.png",
                    width: 270,
                    height: 180,
                    levels: [{
                        file: "http://img4.iqiaowai.com/uploads/video/20170929yjcy.flv"
                    }]
                });
                </script>

                <p>
                  作为侨外一年一度最为重要的答谢新老客户的品牌活动之一，侨CLUB中秋答谢到2017年已经连续举办了十一届，今年的晚会尤为精彩。...
                </p>
                <a target="_blank" href="http://www.iqiaowai.com/trends/36542.html" class="link">详情>></a>
            </div>
        </div>
    </div>
    <!-- 侨外动态 E-->
    <!-- 项目案例 S-->
    <div class="qw-case">
        <div class="qw-center">
            <div class="title-box clearfix">
                <i></i>
                <div class="title">项目案例 <span>Project case</span></div>
            </div>
            <div class="items clearfix">
                <div class="item">
                    <p class="name">美国项目案例<i style="background:url(http://www.iqiaowai.com/templets/new/index/images/icon.png) -47px -40px no-repeat;"></i></p>
                    <div id="case-slide" class="list-box">
                        <ul>
						<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/38303.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">侨外解决资金证明难题，快速获</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/38090.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">美国投资移民免排期获批</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/37669.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">一年不到获批美国绿卡</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/37558.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">为事业发展，高管移民美国</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/37429.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">告别职场重压，赴美开启新生活</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/36247.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">移民美国上法律名校</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/37032.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">贾老师谈美国投资移民之——</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/36248.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">美式教育完美过渡</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/36246.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">教育规划圆音乐梦想</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/36188.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例','点击','新官网主页1.5-项目案例']);">为儿女教育移民美国</a>
                            </li>

                        </ul>
                    </div>
                    <div class="link-box">
                        <p>侨外美国90个项目,26批还款</p>
                        <a href="/case/america/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-项目案例-更多','点击','新官网主页1.5-项目案例-更多']);">more</a>
                    </div>
                </div>
                <div class="item">
                    <p class="name">其他国家案例 <i style="background:url(http://www.iqiaowai.com/templets/new/index/images/icon.png) -72px -40px no-repeat;"></i></p>
                    <div class="list-box">
                        <ul>
						<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/38533.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">25岁毕业生2天获批，侨外英国，助你圆梦…</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/38505.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">让孩子有一个新起点！</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/plus/view.php?aid=38491" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">移民加拿大，“意外的”必然之选</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/plus/view.php?aid=38490" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">选择加拿大从遥不可及到梦想成真</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/plus/view.php?aid=38489" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">赴美还是赴加？适合孩子的就是最好</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/plus/view.php?aid=38488" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">感受加拿大天翻地覆的生活环境大逆转…</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/plus/view.php?aid=38487" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">诗和远方都在加拿大</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/plus/view.php?aid=38486" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">加拿大——为了孩子，我又来了</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/38484.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">侨外英国一直都在，圆您英伦梦不是问题…</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/case/38461.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-其他国家案例','点击','新官网主页1.5-其他国家案例']);">＂双非＂院校毕业生也能申请到英国名校…</a>
                            </li>

                        </ul>
                    </div>
                    <div class="link-box">
                        <p>侨外,已帮助2万余家庭成功移民</p>
                        <a href="/case/" target="_blank">more</a>
                    </div>
                </div>
                <div class="item">
                    <p class="name">每日移问<i style="background:url(http://www.iqiaowai.com/templets/new/index/images/icon.png) 0px -63px no-repeat;"></i></p>
                    <div class="list-box">
                        <ul>
                          <li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/37974.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">2018圣基茨和尼维斯护照移民需要多少钱？</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/37984.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">移民加拿大的费用大概是多少？</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/37985.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">加拿大移民过去的方式有哪几种？如何移民</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/37987.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">加拿大曼省移民政策怎样的？曼省移民费用</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/37988.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">加拿大投资移民是否有风险?</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/37989.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">魁北克投资移民申请流程具体是什么？难吗</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/38201.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">加拿大永久居民和公民有什么区别？</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/38203.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">魁省投资移民什么时候打投资款？安全吗？</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/38204.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">听说魁省都说法语，生活起来很困难吧？</a>
                            </li>
<li>
                                <i></i>
                                <a href="http://www.iqiaowai.com/interact/38202.html" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问','点击','新官网主页1.5-每日移问']);">加拿大的福利有哪些？</a>
                            </li>

                        </ul>
                    </div>
                    <div class="link-box">
                        <p>侨外19年,值得每个家庭托付</p>
                        <a href="/interact/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-每日移问-更多','点击','新官网主页1.5-每日移问-更多']);">more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 项目案例 E-->
    <!-- 侨外优势 S-->
    <div class="qw-advantage qw-center">
        <div class="items clearfix">
            <div class="item">
                <p class="title"> 专业可靠 <i style="background:url(http://www.iqiaowai.com/templets/new/index/images/icon.png) 0 -85px no-repeat;"></i></p>
                <p class="desc"  style="text-align: center;">
                   19年移民行业经验<br/>中国及海外21家分公司
                </p>
            </div>
            <div class="item">
                <p class="title"> 全程服务 <i style="background:url(http://www.iqiaowai.com/templets/new/index/images/icon.png) -34px -85px no-repeat;"></i></p>
                <p class="desc"  style="text-align: center;">
                  全流程移居服务<br/>贴心管家服务
                </p>
            </div>
            <div class="item">
                <p class="title"> 信誉品牌 <i style="background:url(http://www.iqiaowai.com/templets/new/index/images/icon.png) -70px -85px no-repeat;"></i></p>
                <p class="desc" style="text-align: center;">
                   成功服务上万家庭<br/>值得每个家托付
                </p>
            </div>
            <div class="item">
                <p class="title">引领行业<i style="background:url(http://www.iqiaowai.com/templets/new/index/images/icon.png) 5px -120px no-repeat;"></i></p>
                <p class="desc" style="line-height: 17px;text-align: center;">
                  移民项目开创及引入者<br/>行业标准制定者
                </p>
            </div>
            <div class="item" style="width:172px;">
                <p class="title"> 实力雄厚 <i style="background:url(http://www.iqiaowai.com/templets/new/index/images/icon.png) -32px -120px no-repeat;"></i></p>
                <p class="desc" style="text-align: center;">
                   合作汇集全球顶级机构<br/>多项目独家推出
                </p>
            </div>
        </div>
       
    </div>
    
    <script>

    var bottom_flag = true;
     if (screen.height < 900) {
        $(".qw-bottom").hide();
        $(window).scroll(function(event) {
            if($(window).scrollTop()>360 && bottom_flag){
                $(".qw-bottom").show();
            }else{
               $(".qw-bottom").hide(); 
            }
        });
        
     }
	 
	 
    </script>
    
	<!-- //底部模板 -->
    <?php $this->load->view('public/footer') ?>
<!-- 底部模板end-->



<link rel="stylesheet" href="../../../asset/home/css/general8.css">


<!-- 左侧对联 -->






</body>

</html>