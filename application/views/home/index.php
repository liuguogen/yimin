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
    <title>【侨外移民官网】全方位海外生活规划服务平台，提供海外置业，投资移民，购房移民，教育规划，全球资产配置等一站式海外安家服务。 </title>
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
                <div class="more"><a href="/projects/" target="_blank">更多...</a></div>
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
				    <!--<script  data-lxb-uid="22942246" data-lxb-gid="311488"  src="http://lxbjs.baidu.com/api/asset/api.js"></script>  -->
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
        <div class="test-box clearfix">
            <div class="qw-adv-test">
                <a target="_blank" href="/pinggu/"><img src="http://www.iqiaowai.com/templets/new/index/images/testbg.jpg" alt=""></a>
            </div>
            <div class="qw-adv-form">
                <form name="fcz" action="/plus/yuyue.php" enctype="multipart/form-data" method="post" onsubmit="return check_require();">
                    <input type="hidden" name="action" value="post" />
                    <input type="hidden" name="diyid" value="3" />
                    <input type="hidden" name="do" value="2" />
                    <div class="formbox">
                        <div class="clearfix boxes">
                            <div class="box">
                                <input name="name" type="text" placeholder="您的姓名">
                            </div>
                            <div class="box">
                                <input name="phone" type="text" placeholder="您的电话">
                            </div>
                            <div class="box">
                                <i></i>
                                <select name='message'>
                                    <option value="null" disabled selected>移民目的</option>
                                    <option value="子女教育">子女教育</option>
                                    <option value="应对CRS">应对CRS</option>
                                    <option value="养老规划">养老规划</option>
                                    <option value="出行便利">出行便利</option>
                                    <option value="海外置业">海外置业</option>
                                    <option value="居住环境">居住环境</option>
                                    <option value="投资理财">投资理财</option>
                                    <option value="福利保障">福利保障</option>
                                    <option value="税务规划">税务规划</option>
                                    <option value="工作就业">工作就业</option>
                                    <option value="创业经商">创业经商</option>
                                    <option value="资产保值">资产保值</option>
                                    <option value='其它'>其它</option>      
                                </select>
                            </div>
                            <div class="box" style="margin-right:0;">
                                <i></i>
                                <select name='city'>
                                    <option value="null" disabled selected>移民国家</option>
                                    <option value="美国">美国</option>
                                    <option value="马耳他">马耳他</option>
                                    <option value="圣基茨和尼维斯">圣基茨和尼维斯</option>
                                    <option value="英国">英国</option>
                                    <option value="意大利">意大利</option>
                                    <option value="西班牙">西班牙</option>
                                    <option value="澳大利亚">澳大利亚</option>
                                    <option value="德国">德国</option>
                                    <option value="葡萄牙">葡萄牙</option>
                                    <option value="荷兰">荷兰</option>
                                    <option value="加拿大">加拿大</option>
                                    <option value="爱尔兰">爱尔兰</option>
                                    <option value="希腊">希腊</option>
                                    <option value="塞浦路斯">塞浦路斯</option>
                                    <option value="韩国">韩国</option>
                                </select>
                            </div>
                        </div>
                        <div class="sub">
                            <input type="submit" name="sub" value="获取私人定制方案"  onclick="_czc.push(['_trackEvent','新官网主页1.5-获取私人定制方案','点击','新官网主页1.5-获取私人定制方案']);">
                        </div>
                    </div>
                    <input name="comeform" value="pc_shouye" type="hidden" id="comeform" />
                    <input type="hidden" name="dede_fields" value="name,text;phone,text;message,select;city,select;comeform,text" />
                    <input type="hidden" name="dede_fieldshash" value="c976bb97a51d6b961372e344e0c730fb" />
                </form>
            </div>
        </div>
    </div>
    <!-- 侨外优势 E-->
    
   <!-- <div class="qw-bottom">
        <div class="w1100">
            <div class="gd-close" onclick="$('.qw-bottom').hide();bottom_flag = false;_czc.push(['_trackEvent','新官网主页1.5-底部条幅-关闭','点击','新官网主页1.5-底部条幅-关闭']);"></div>
            
            <a href="http://www.iqiaowai.com/pinggu/#from=gd_bottom" onclick="_czc.push(['_trackEvent','新官网主页1.5-底部条幅-自评','点击','新官网主页1.5-底部条幅-自评']);" target="_blank" rel="nofollow"></a>
        </div>
    </div> -->
    <script>
  /*  document.getElementById("bottom-dial-btn").onclick = function() {
        lxb.call(document.getElementById("bottom-dial"));
    };*/
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
	 
	 // $(function(){
		// 	$.post("/plus/pgnum_ajax.php",{num:$(".pgnum_ajax").html()},function(d){
		// 			var jsono=eval('('+d+')');
		// 			$('.pgnum_ajax').html(jsono);
		// 	});
	 // });
    </script>
    <!-- 侨外优势 S-->

    <div id="heibj1" class="">
        <div id="showform1">
            <div>
                <div style="width: 435px;height: 20px;line-height: 20px;padding: 0 5px 0 10px;">
                    <a  href="javascript:void(0)" onclick="guanbi();" style="float: right;color: #000;font-size: 12px;">关闭</a>
                </div>
                <div style="text-align:center;margin:5px auto;">
                    <div style="font-size:20px;margin-bottom:15px;">在线预约</div>
                    <form name="view_form2" action="http://www.iqiaowai.com/plus/yuyue.php" enctype="multipart/form-data" method="post" onsubmit="return check_view2();" style="margin-left: 25px;">
                        <input type="hidden" name="action" value="post">
                        <input type="hidden" name="diyid" value="3">
                        <input type="hidden" name="do" value="2">
                        <div style="float:left;">
                            <span style="font-size:14px;">姓名：</span>
                            <input type="text" name="name" value="" style="width:135px;height:27px;border:1px solid #ccc;">
                        </div>
                        <div>
                            <b style='color:red;'>*</b><span style="font-size:14px;">手机：</span>
                            <input type="text" name="phone" id="phone" value="" style="width:135px;height:27px;border:1px solid #ccc;">
                        </div>
                        <div style="float:left; margin-top:15px;">
                            <span style="font-size:14px;">城市：</span>
                            <select name="city" style="width:135px;height:27px;border:1px solid #ccc;">
                                <option value="北京">北京总部</option>
                                <option value="上海">上海</option>
                                <option value="广州">广州</option>
                                <option value="深圳">深圳</option>
                                <option value="佛山">佛山</option>
                                <option value="顺德">顺德</option>
                                <option value="江苏">江苏</option>
                                <option value="浙江">浙江</option>
                                <option value="山东">山东</option>
                                <option value="重庆">重庆</option>
                                <option value="四川">四川</option>
                                <option value="陕西">陕西</option>
								<option value="珠海">珠海</option>
                                <option value="湖北">湖北</option>
								<option value="郑州">郑州</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div style="margin-top:15px;">
                            <span style="font-size:14px;">邮箱：</span>
                            <input type="text" name="email" id="email" value="" style="width:135px;height:27px;border:1px solid #ccc;">
                        </div>
                        <input name="comeform" value="pc_view" type="hidden" id="comeform">
                        <input name="times" value="" type="hidden" id="timesddd">
                        <script type="text/javascript">
							window.onload = function() {
								var nowDate2 = new Date();
								var str2 = nowDate2.getFullYear() + "-" + (nowDate2.getMonth() + 1) + "-" + nowDate2.getDate() + " " + nowDate2.getHours() + ":" + nowDate2.getMinutes() + ":" + nowDate2.getSeconds();
								document.getElementById("timesddd").value = str2;
							}
                        </script>
                        <input type="hidden" name="dede_fields" value="name,text;email,text;phone,text;city,select;times,datetime;comeform,text">
                        <input type="hidden" name="dede_fieldshash" value="71f229e82c53f7373512a2264811d35d">
                        <div align="center" style="height:30px;margin-top:25px;">
                            <input type="submit" name="submit" style="width:100px;height: 30px;margin-left: 8px;color: #fff;cursor: pointer;font-size:14px;background:#d6000f;border:0px;" value="马上预约" onclick="_czc.push(['_trackEvent','新官网主页1.5-马上预约','点击','新官网主页1.5-马上预约']);">
                        </div>
                    </form>
                    <div style="font-size:14px;margin-top:10px;">
                        如需咨询，请拨打热线电话：400-818-1100
                    </div>
                </div>
               <script src="../../../asset/home/js/yz.js"></script>
            </div>
        </div>
    </div>
    <!-- 侨外优势 E-->
	<!-- //底部模板 -->
<div class="footer" style="">
    <div class="friend-links">
        <div class="friend-links-box">
            <p class="title">友情链接</p>
            <ul class="clearfix">
                <li><a href="http://edu.163.com/" target="_blank">网易教育</a></li>
<li><a href="http://edu.sina.com.cn/yimin/" target="_blank">新浪移民</a></li>
<li><a href="http://news.szhk.com" target="_blank">今日新闻</a></li>
<li><a href="http://www.23.cn/" target="_blank">招商网</a></li>
<li><a href="http://world.house.ifeng.com/" target="_blank">海外置业</a></li>
<li><a href="http://edu.qq.com/abroad/" target="_blank">海外教育</a></li>
<li><a href="http://www.qianzhengdaiban.com/" target="_blank">出国签证</a></li>
<li><a href="http://www.italyclassico.com" target="_blank">进口家具</a></li>
<li><a href="http://www.xuekeedu.com/" target="_blank">小学英语</a></li>
<li><a href="http://www.17liuxue.com" target="_blank">澳洲留学</a></li>
<li><a href="http://www.haitaolab.com/" target="_blank">海淘购物攻略</a></li>
<li><a href="http://www.beimeigoufang.com/" target="_blank">海外购房</a></li>

            </ul>
            <a class="qq-chat" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2880750946&site=qq&menu=yes">申请加入</a>
        </div>        
    </div>
    <div class="footer-keywords">
        <p class="title">快速移民</p>
        <ul class="clearfix">   
            <li><a href="http://www.iqiaowai.com/zhuanti/america171205/#footer" target="_blank">eb5投资移民排期</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/england170407/#footer" target="_blank">20万英镑移民英国</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/portugal0913/#footer" target="_blank">葡萄牙购房移民</a></li>
            <li><a href="http://www.iqiaowai.com/expert/32791.html#footer" target="_blank">西班牙购房移民</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/australia1014/#footer" target="_blank">澳洲移民的条件</a></li>
            <li><a href="http://www.iqiaowai.com/hotspot/37464.html#footer" target="_blank">德国移民新政策</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/saintkitts171030/#footer" target="_blank">圣基茨移民政策</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/malta171215/#footer" target="_blank">马耳他移民新政</a></li>
            <li><a href="http://www.iqiaowai.com/hotspot/36994.html#footer" target="_blank">塞浦路斯购房移民</a></li>
            <li><a href="http://www.iqiaowai.com/hotspot/37330.html#footer" target="_blank">希腊移民政策</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/helan180204/#footer" target="_blank">荷兰移民多少钱</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/ireland1214/#footer" target="_blank">爱尔兰移民新政策</a></li>
            <li><a href="http://www.iqiaowai.com/hotspot/33813.html#footer" target="_blank">韩国移民政策</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/italy170420/#footer" target="_blank">意大利移民条件</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/canada170628/#footer" target="_blank">加拿大移民新政策</a></li>
            <li><a href="http://www.iqiaowai.com/zhuanti/thailand171117/#footer" target="_blank">泰国移民政策</a></li>
        </ul>
    </div> 
    <div class="footer-detail clearfix">
        <div class="left">
            <div class="qrphone">
                <img src="http://www.iqiaowai.com/templets/new/images/qrphone.png">
                <p>侨外出国官网<br/>手机版</p>
            </div>
            <div class="qrcode">
                <img src="http://www.iqiaowai.com/templets/new/images/qrcode.png">
                <p>侨外出国官方<br/>微信公众号</p>
            </div>
        </div>
        <div class="right">
            <div class="column clearfix">
                <p class="title">网站栏目</p>
                <ul class="clearfix">
                    <li><a href="http://www.iqiaowai.com" rel="nofollow" target="_blank">网站首页 </a></li>
                    <li><a href="http://www.iqiaowai.com/sitemap.html" rel="nofollow" target="_blank">网站地图</a></li>
                    <li><a href="http://www.iqiaowai.com/jobs/" rel="nofollow" target="_blank">招贤纳士</a></li>
                    <li><a href="http://www.iqiaowai.com/contactus.html" rel="nofollow" target="_blank">联系我们</a></li>
                </ul>
            </div>             
            <div class="footer-list"> 
                <ul class="clearfix">
                    <li><a href="http://www.iqiaowai.com/projects/#footer" rel="nofollow" target="_blank">海外投资项目</a></li>
                    <li><a href="http://house.iqiaowai.com/#footer" rel="nofollow" target="_blank">海外购房移民</a></li>
                    <li><a href="http://www.iqiaowai.com/club/#footer" rel="nofollow" target="_blank">侨Club</a></li>
                    <li><a href="http://www.iqiaowai.com/activity/#footer" rel="nofollow" target="_blank">侨外热门活动</a></li>
                    <li><a href="http://www.iqiaowai.com/story/#footer" rel="nofollow" target="_blank">海外移民故事</a></li>
                </ul>
            </div>
            <p class="title">侨外咨询服务热线：400-818-1100</p>
            <div class="city">
                <p class="title">侨外分公司</p>
                <ul class="clearfix">
                    <li><a href="http://www.iqiaowai.com/beijing.html#footer" rel="nofollow" target="_blank">北京</a></li>
                    <li><a href="http://www.iqiaowai.com/shanghai.html#footer" rel="nofollow" target="_blank">上海</a></li>
                    <li><a href="http://www.iqiaowai.com/shenzhen.html#footer" rel="nofollow" target="_blank">深圳</a></li>
                    <li><a href="http://www.iqiaowai.com/guangzhou.html#footer" rel="nofollow" target="_blank">广州</a></li>
                    <li><a href="http://www.iqiaowai.com/jiangsu.html#footer" rel="nofollow" target="_blank">江苏</a></li>
                    <li><a href="http://www.iqiaowai.com/zhejiang.html#footer" rel="nofollow" target="_blank">浙江</a></li>
                    <li><a href="http://www.iqiaowai.com/qingdao.html#footer" rel="nofollow" target="_blank">青岛</a></li>
                    <li><a href="http://www.iqiaowai.com/hubei.html#footer" rel="nofollow" target="_blank">湖北</a></li>
                    <li><a href="http://www.iqiaowai.com/henan.html#footer" rel="nofollow" target="_blank">河南</a></li>
                    <li><a href="http://www.iqiaowai.com/zhuhai.html#footer" rel="nofollow" target="_blank">珠海</a></li>
                    <li><a href="http://www.iqiaowai.com/foshan.html#footer" rel="nofollow" target="_blank">佛顺</a></li>
                    <li><a href="http://www.iqiaowai.com/sichuan.html#footer" rel="nofollow" target="_blank">四川</a></li>
                    <li><a href="http://www.iqiaowai.com/chongqing.html#footer" rel="nofollow" target="_blank">重庆</a></li>
                    <li><a href="http://www.iqiaowai.com/shaanxi.html#footer" rel="nofollow" target="_blank">陕西</a></li>
                </ul>
            </div>
        </div>
    </div> 
    <div class="copy-right w1100">
         <p>京公境准字[2008]0008号<img src ="http://www.iqiaowai.com/templets/new/images/gaba.png" />京公安备11010502033230 京ICP备11035523号  Copyright © 北京侨外出国咨询服务有限公司</p>
    </div>           
</div>
<!-- <script src="http://www.iqiaowai.com/templets/new/js/theater.js"></script>
<DIV id="kw_gd" style="width:280px;background:#555454;height:52px;border-radius:5px;rgba(85,84,84,0.72);position:absolute;top:10px;left:34%;z-index:9999;cursor:pointer;display:none;" onclick="kw_fun()">
    <span id="vader" style="width:155px;height:40px;border:0px;margin:5px 0px 6px 10px;border-top-left-radius:5px;border-bottom-left-radius:5px;float:left;font-size:18px;color:#555454;display: block;background:#fff;line-height:40px;padding-left:15px;"></span>
    <button type="submit"  style="cursor:pointer;float:left;width:80px;height:40px;margin-top:5px;background:url(http://www.iqiaowai.com/templets/new/images/btn.gif)no-repeat;border:0px;background-size:100% 100%;"></button>
</DIV> -->
<input type="hidden" value="" id="kw_hide" />
<script>
function getDomainQuery(url) {
    var d = [];
    var st = url.indexOf('//', 1);
    var _domain = url.substring(st + 1, url.length);
    var et = _domain.indexOf('/', 1);
    d.push(_domain.substring(1, et));
    d.push(_domain.substring(et + 1, url.length));
    return d
}

function route() {
    var eg = [];
    eg.push(['baidu', 'wd']);
    eg.push(['sogou', 'query']);
    eg.push(['so', 'q']);
    var dq = getDomainQuery(document.referrer);
    var keyword = null;
    var grep = null;
    var str = null;
    for (var el in eg) {
        var s = eg[el];
        var DandQ = String(s).split(","); //字符分割  
        if (dq[0].indexOf(DandQ[0]) > 0) {
            eval("grep=/" + DandQ[1] + "\=.*\&/i;");
            str = dq[1].match(grep);
            keyword = str.toString().split("=")[1].split("&")[0];
            keyword = decodeURIComponent(keyword);
            return keyword;
        }
    }

}
(function() {
    var theater = new TheaterJS();
    var rte = route();
     if (rte != "" && rte != null) {
     if(rte!="侨外移民" && rte!="侨外"){
        $("#kw_gd").css("display", "block");
           $("#kw_hide").val(rte);
        }
     }
   
   
    theater
        .describe("Vader", .5, "#vader")
    theater
        .write("Vader:" + $("#kw_hide").val(), 500)
})();

function kw_fun() {
    openChat();
    uclick("关键字按钮");
}
</script>
<link rel="stylesheet" href="../../../asset/home/css/general8.css">
<!-- <div class="qw-nav-bag"><a href="http://www.iqiaowai.com/zhuanti/survey180104/#newyear" target="_blank" rel="nofollow"></a></div> -->
<div class="rightbar">
   <!--  <div class="sidebar_h">
        <i></i><p>在<br/>线<br/>咨<br/>询</p>
    </div> -->
    <!-- 宽屏对联 -->
    <!-- <div class="sidebar sidebar_b">
        <div class="closebox">
        </div>
        <div class="sidebar_top">
            <p  onclick="openLy1('右侧导航宽版');">移民咨询 <i></i></p>
            <ul>
                <li id="side_beijing_l" onclick="openLy('北京');uclick('北京');">北 京 <i></i></li>
                <li id="side_shanghai_l" onclick="openLy('上海');uclick('上海');">上 海 <i></i></li>
                <li id="side_guangzhou_l" onclick="openLy('广州');uclick('广州');">广 州 <i></i></li>
                <li id="side_shenzhen_l" onclick="openLy('深圳');uclick('深圳');">深 圳 <i></i></li>
                <li id="side_zhejiang_l" onclick="openLy('浙江');uclick('浙江');">浙 江 <i></i></li>
                <li id="side_jiangsu_l" onclick="openLy('江苏');uclick('江苏');">江 苏 <i></i></li>
                <li id="side_shandong_l" onclick="openLy('山东');uclick('山东');">山 东 <i></i></li>
                <li id="side_zhuhai_l" onclick="openLy('珠海');uclick('珠海');">珠 海 <i></i></li>
                <li id="side_foshan_l" onclick="openLy('佛山');uclick('佛山');">佛 山 <i></i></li>
                <li id="side_shunde_l" onclick="openLy('顺德');uclick('顺德');">顺 德 <i></i></li>
                <li id="side_sichuan_l" onclick="openLy('四川');uclick('四川');">四 川 <i></i></li>
                <li id="side_chongqing_l" onclick="openLy('重庆');uclick('重庆');">重 庆 <i></i></li>
                <li id="side_shaanxi_l" onclick="openLy('陕西');uclick('陕西');">陕 西 <i></i></li>
                <li id="side_hubei_l" onclick="openLy('湖北');uclick('湖北');">湖 北 <i></i></li>
                <li id="side_zhengzhou_l" onclick="openLy('英国');uclick('郑州');">郑 州 <i></i></li>
                <li id="side_england_l" onclick="openLy('英国');uclick('英国');">英 国 <i></i></li>
                <li id="side_spain_l" onclick="openLy('西班牙');uclick('西班牙');">西班牙 <i></i></li>
                <li id="side_portugal_l" onclick="openLy('葡萄牙');uclick('葡萄牙');">葡萄牙 <i></i></li>
                <li id="side_italy_l" onclick="openLy('意大利');uclick('意大利');">意大利 <i></i></li>
                <li id="side_qita_l" onclick="openLy('其他');uclick('其他');" class="last">其 他 <i></i></li>
            </ul>
        </div>
        <div class="callback">
            <div>
                免费移民方案
            </div>
            <div class="callbox">
                <div>
                    <input type="text" placeholder="请输入您的手机号" id="dl-phone1">
                </div>
                <a class="takephone" id="dl-dail1" href="javascript:void(0);">立即回电</a>
                <span></span>
            </div>
        </div>
        <div class="gotop" onclick='$("body,html").animate({scrollTop: 0}, 1000);'>
            回到顶部 <i></i>
        </div>
    </div> -->
    <!-- 小屏对联 -->
    <!-- <div class="sidebar sidebar_s">
        <div class="closebox">
        </div> -->
        <!-- <div class="sidebar_top">
            <p id="side_ask_s" class="zx" onclick="openLy1('右侧导航小版');">移民咨询 <i></i></p>
            <div class="city">
                <div class="branch">
                    <ul>
                        <li id="side_beijing_s" onclick="openLy2('北京');uclick();">北   京 </li>
                        <li id="side_shanghai_s" onclick="openLy2('上海');uclick();">上   海 </li>
                        <li id="side_guangzhou_s" onclick="openLy2('广州');uclick();">广   州 </li>
                        <li id="side_shenzhen_s" onclick="openLy2('深圳');uclick();">深   圳 </li>
                        <li id="side_zhejiang_s" onclick="openLy2('浙江');uclick();">浙   江 </li>
                        <li id="side_jiangsu_s" onclick="openLy2('江苏');uclick();">江   苏 </li>
                        <li id="side_shandong_s" onclick="openLy2('山东');uclick();">山   东 </li>
                        <li id="side_zhuhai_s" onclick="openLy2('珠海');uclick();">珠   海 </li>
                        <li id="side_foshan_s" onclick="openLy2('佛山');uclick();">佛   山 </li>
                        <li id="side_shunde_s" onclick="openLy2('顺德');uclick();">顺   德 </li>
                        <li id="side_sichuan_s" onclick="openLy2('四川');uclick();">四    川 </li>
                        <li id="side_chongqing_s" onclick="openLy2('重庆');uclick();">重   庆 </li>
                        <li id="side_shaanxi_s" onclick="openLy2('陕西');uclick();">陕   西 </li>
                        <li id="side_hubei_s" onclick="openLy2('湖北');uclick();">湖   北 </li>
                        <li id="side_zhengzhou_s" onclick="openLy2('郑州');uclick();" >郑   州 </li>
                        <li id="side_england_s" onclick="openLy2('英国');uclick();" >英   国 </li>
                        <li id="side_spain_s" onclick="openLy2('西班牙');uclick();" >西 班 牙 </li>
                        <li id="side_portugal_s" onclick="openLy2('葡萄牙');uclick();" >葡 萄 牙 </li>
                        <li id="side_italy_s" onclick="openLy2('意大利');uclick();" >意 大 利 </li>
                        <li id="side_qita_s" onclick="openLy2('其他');uclick();" class="last">其   他 </li>
                    </ul>
                </div>
            </div>            
        </div> -->
       <!--  <div class="callback">
            <div>
                免费移民方案
            </div>
            <div class="callbox">
                <div>
                    <input type="text" placeholder="请输入您的手机号" id="dl-phone2">
                </div>
                <a class="takephone" id="dl-dail2" href="javascript:void(0);">立即回电</a>
                <span></span>
            </div>
        </div> -->
       <!--  <div class="gotop" onclick='$("body,html").animate({scrollTop: 0}, 1000);'>
            回到顶部 <i></i>
        </div>
    </div> -->
</div>
<!-- 左侧对联 -->
<!-- <div class="leftbar">
    <div class="sidebarLeft_h"></div>
    <div class="sidebarLeft">
        <div class="sidebar_top"></div>
        <div class="list" id="slider">
            <div class="bd">
                <ul>
                    <li onclick="openLy1('问题-移民美国多少钱？');">移民美国多少钱？</li>
                    <li onclick="openLy1('问题-100万移民去哪？');">100万移民去哪？</li>
                    <li onclick="openLy1('问题-哪国房产收益高？');">哪国房产收益高？</li>
                    <li onclick="openLy1('问题-怎么移民澳洲？');">怎么移民澳洲？</li>
                    <li onclick="openLy1('问题-海外教育哪国好？');">海外教育哪国好？</li>
                    <li onclick="openLy1('问题-怎么移民加拿大？');">怎么移民加拿大？</li>
                    <li onclick="openLy1('问题-资产如何升值？');">资产如何升值？</li>
                </ul>
            </div>
            <i></i>
        </div>
        <div class="leftbar-test">
            <a href="http://www.iqiaowai.com/pinggu/#form=right20171211" target="_blank" rel="nofollow">免费自测 <i style="background:url(http://www.iqiaowai.com/templets/new/images/nav/6/icon.png) 0 0 no-repeat;"></i></a>
            <div class="test-line"></div>
            <a href="http://www.iqiaowai.com/contrast/#form=right20171211" target="_blank" rel="nofollow">国家对比 <i style="background:url(http://www.iqiaowai.com/templets/new/images/nav/6/icon.png) -18px 0 no-repeat;"></i></a>
        </div>
        <div class="leftbar-lxb">
            <p>免费<br/>移民规划</p>
            <input type="text" placeholder="手机号" id="dl-phone3">
            <div class="leftbar-lxb-btn" id="dl-dail3">立即获取</div>
        </div>
        <div class="leftbar-qrcode">
            <img src="http://www.iqiaowai.com/templets/new/images/nav/6/code.jpg" alt="侨外移民二维码">
        </div>
        <script>
            jQuery("#slider").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:3,interTime:80});
        </script>
        <div class="closebox">
        </div>
    </div>
</div> -->

<div class="leftbar" style="display:none;">
    <div class="sidebarLeft_h"></div>
    <div class="sidebarLeft">
        <div class="contact-btn" style="cursor:pointer;background:#e70003;box-shadow: 0 0 12px #b20409;"  onclick="openLy1('左侧在线咨询');">
            <i style="background:url(http://www.iqiaowai.com/templets/new/images/nav/5/ask.png) no-repeat;" class="nav-ask"></i> 在线咨询
        </div>
        <div class="contact-btn">
            <a class="contact-test" target="_blank" href="http://www.iqiaowai.com/pinggu#form=left">
                <i style="background:url(http://www.iqiaowai.com/templets/new/images/nav/5/icon.png) 0 -23px no-repeat;"></i>
                免费自评
            </a>
        </div>
        <div class="contact-btn">
            <a class="contact-test" target="_blank" href="http://www.iqiaowai.com/contrast/#form=left">
                <i style="background:url(http://www.iqiaowai.com/templets/new/images/nav/5/icon.png) 0 -52px no-repeat;"></i>
                国家对比
            </a>
        </div>
        <div class="contact-btn qrcode">
            <i style="background:url(http://www.iqiaowai.com/templets/new/images/nav/5/icon.png) 0 -79px no-repeat;"></i>
            <p>关注微信</p>
            <div class="qrcode_box"></div>
        </div>
        <div class="deer"></div>
        <div class="closebox">
        </div>
    </div>
</div>
<!-- <script type="text/javascript" charset="utf-8" src="http://www.iqiaowai.com/templets/new/index/js/sidebar1.js"></script>
<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20003027/10086744.js"></script> -->
<!-- <script src="http://www.iqiaowai.com/templets/new/js/public.js"></script>
<script src="http://www.iqiaowai.com/zhuanti/jiance.js"></script> -->


</body>

</html>