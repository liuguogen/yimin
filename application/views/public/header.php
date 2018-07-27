<!-- 头部 S -->
    <div class="qw-header">
        <div class="qw-center">
            <div class="qw-logo">
                <a  target="_blank" href="/">
                    <img src="../../../<?php echo $this->config->item('top_logo','home') ?>" style="width:436px;height:40px;" alt="<?php echo $this->config->item('sitename','home') ?>">
                </a>
            </div>
            
            <!-- 手机二维码 -->
            <div class="qr-code">
                <a href='/wap' target="_blank">
                    <p>进入手机版</p>
                    <i></i>
                </a>
                <div class="codeimg" style="">
                    <img src="../../../<?php echo $this->config->item('mobile_qrcode','home') ?>" alt="<?php echo $this->config->item('sitename','home') ?>">
                </div>
            </div>
            <!-- 官网电话 -->
            <div class="qw-phone">
                <i></i>
                <p style="">24小时移民热线：<span><?php echo $this->config->item('hot_tel','home') ?></span></p>
            </div>
        </div>
    </div>
    <!-- 头部 E -->
    <!-- 导航 S  -->
    <div class="qw-nav" style="background: #3ab6ca;">
        <ul class="qw-center">
            <li class="on nav-box"><a href="/" class="nav-link"    onclick="_czc.push(['_trackEvent','新官网主页1.5-导航首页','点击','新官网主页1.5-导航首页']);">首  页</a><i class="nav-line"></i></li>
            <!-- <li class="nav-box nav-country-box">
                <a href="http://www.iqiaowai.com/country/" class="nav-link" target="_blank"  onclick="_czc.push(['_trackEvent','新官网主页1.5-导航移民国家','点击','新官网主页1.5-导航移民国家']);">移民国家</a>
                <i class="nav-line"></i>
                <div class="qw-country-menu">
                    <i></i>
                    <div class="country-menu clearfix">
                        <p>美洲：</p>
                        <ul>
                            <li><a href="http://www.iqiaowai.com/america/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-美国','点击','新官网主页1.5-导航国家-美国']);"><span>美国</span></a></li>
                            <li><a href="http://www.iqiaowai.com/canada/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-加拿大','点击','新官网主页1.5-导航国家-加拿大']);"><span>加拿大</span></a></li>
                            <li><a href="http://www.iqiaowai.com/saintkitts/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-圣基茨','点击','新官网主页1.5-导航国家-圣基茨']);">圣基茨和尼维斯</a></li>
							<li><a href="http://www.iqiaowai.com/zhuanti/dominic171204/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-多米尼克','点击','新官网主页1.5-导航国家-多米尼克']);">多米尼克</a></li>
							<li><a href="http://www.iqiaowai.com/zhuanti/saintlucia180117/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-圣卢西亚','点击','新官网主页1.5-导航国家-圣卢西亚']);">圣卢西亚</a></li>
					   </ul>
                    </div> 
                    <div class="country-menu clearfix">
                        <p>欧洲：</p>
                        <ul class="clearfix">
							<li><a href="http://www.iqiaowai.com/england/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-英国','点击','新官网主页1.5-导航国家-英国']);"><span>英国</span></a></li>
							<li><a href="http://www.iqiaowai.com/spain/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-西班牙','点击','新官网主页1.5-导航国家-西班牙']);"><span>西班牙</span></a></li>
							<li><a href="http://www.iqiaowai.com/greece/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-希腊','点击','新官网主页1.5-导航国家-希腊']);">希腊</a></li>
							<li><a href="http://www.iqiaowai.com/netherlands/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-荷兰','点击','新官网主页1.5-导航国家-荷兰']);">荷兰</a></li>
							<li><a href="http://www.iqiaowai.com/malta/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-马耳他','点击','新官网主页1.5-导航国家-马耳他']);"><span>马耳他</span></a></li>
							<li><a href="http://www.iqiaowai.com/italy/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-意大利','点击','新官网主页1.5-导航国家-意大利']);"><span>意大利</span></a></li>
							<li><a href="http://www.iqiaowai.com/portugal/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-葡萄牙','点击','新官网主页1.5-导航国家-葡萄牙']);">葡萄牙</a></li>
							<li><a href="http://www.iqiaowai.com/germany/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-德国','点击','新官网主页1.5-导航国家-德国']);">德国</a></li>
							<li><a href="http://www.iqiaowai.com/ireland/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-爱尔兰','点击','新官网主页1.5-导航国家-爱尔兰']);">爱尔兰</a></li>
							<li><a href="http://www.iqiaowai.com/cyprus/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-塞浦路斯','点击','新官网主页1.5-导航国家-塞浦路斯']);">塞浦路斯</a></li>
                            
                        </ul>
                    </div>
                    <div class="country-menu clearfix">
                        <p>大洋洲：</p>
                        <ul>
                            <li><a href="http://www.iqiaowai.com/australia/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-澳大利亚','点击','新官网主页1.5-导航国家-澳大利亚']);">澳大利亚</a></li>
							<li><a href="http://www.iqiaowai.com/zhuanti/passport170830/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-瓦努阿图','点击','新官网主页1.5-导航国家-瓦努阿图']);">瓦努阿图</a></li>
                        </ul>
                    </div>
                    <div class="country-menu clearfix">
                        <p>亚洲：</p>
                        <ul>
                            <li><a href="http://www.iqiaowai.com/korea/" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-韩国','点击','新官网主页1.5-导航国家-韩国']);">韩国</a></li>
                            <li><a href="http://www.iqiaowai.com/zhuanti/thailand171117/#country" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航国家-泰国','点击','新官网主页1.5-导航国家-泰国']);">泰国</a></li>
                        </ul>
                    </div>
                    <div class="country-menu">
                        <p>非洲：</p>
                        <ul>
                            <li><a href="http://www.iqiaowai.com/zhuanti/passport170830/" target="_blank">几内亚比绍</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-box nav-type-box">
                <a href="javascript:;" class="nav-link">移民类别</a>
                <i class="nav-line"></i>
                <div class="qw-type-menu">
                    <i></i>
                    <div class="type-menu clearfix">                                        
                        <p>创业类：</p>
                        <ul>
							<li><a href="http://www.iqiaowai.com/canada/" target="_blank"><span>加拿大</span></a></li>
                            <li><a href="http://www.iqiaowai.com/italy/" target="_blank"><span>意大利</span></a></li>
                            <li><a href="http://www.iqiaowai.com/germany/" target="_blank">德国</a></li>
                            <li><a href="http://www.iqiaowai.com/netherlands/" target="_blank">荷兰</a></li>
                            <li><a href="http://www.iqiaowai.com/australia/" target="_blank">澳大利亚</a></li>
                        </ul>
                    </div>
                    <div class="type-menu clearfix">                                                                                
                        <p>商业类：</p>
                        <ul>
                            <li><a href="http://www.iqiaowai.com/america/" target="_blank"><span>美国</span></a></li>
                            <li><a href="http://www.iqiaowai.com/england/" target="_blank"><span>英国</span></a></li>
                            <li><a href="http://www.iqiaowai.com/italy/" target="_blank">意大利</a></li>
                            <li><a href="http://www.iqiaowai.com/ireland/" target="_blank">爱尔兰</a></li>
                            <li><a href="http://www.iqiaowai.com/germany/" target="_blank">德国</a></li>
                            <li><a href="http://www.iqiaowai.com/spain/" target="_blank">西班牙</a></li>
                            <li><a href="http://www.iqiaowai.com/zhuanti/thailand171117/#project" target="_blank">泰国</a></li>
                        </ul>
                    </div>
                    <div class="type-menu clearfix">                                                        
                        <p>技术类：</p>
                        <ul>
                            <li><a href="http://www.iqiaowai.com/netherlands/" target="_blank">荷兰</a></li>
                            <li><a href="http://www.iqiaowai.com/australia/" target="_blank">澳大利亚</a></li>
                            <li><a href="http://www.iqiaowai.com/germany/" target="_blank"><span>德国</span></a></li>
                        </ul>
                    </div>
                    <div class="type-menu clearfix">                                        
                        <p>金融类：</p>                                                
                        <ul>
						    <li><a href="http://www.iqiaowai.com/canada/" target="_blank"><span>加拿大</span></a></li>
                            <li><a href="http://www.iqiaowai.com/australia/" target="_blank">澳大利亚</a></li>
                            <li><a href="http://www.iqiaowai.com/england/" target="_blank">英国</a></li>
                            <li><a href="http://www.iqiaowai.com/netherlands/" target="_blank">荷兰</a></li>
                            <li><a href="http://www.iqiaowai.com/malta/" target="_blank">马耳他</a></li>

                        </ul>
                    </div>
                    <div class="type-menu clearfix">                                        
                        <p>房产类：</p>                                                
                        <ul>   
							<li><a href="http://www.iqiaowai.com/spain/" target="_blank"><span>西班牙</span></a></li>
							<li><a href="http://www.iqiaowai.com/greece/" target="_blank"><span>希腊</span></a></li>							
                            <li><a href="http://www.iqiaowai.com/portugal/" target="_blank"><span>葡萄牙</span></a></li>
                            <li><a href="http://www.iqiaowai.com/cyprus/" target="_blank">塞浦路斯</a></li>
                            <li><a href="http://www.iqiaowai.com/italy/" target="_blank">意大利</a></li>
                            <li><a href="http://www.iqiaowai.com/korea/" target="_blank">韩国</a></li>
                        </ul>
                    </div>
                    <div class="type-menu clearfix">
                        <p>护照类：</p>                                                
                        <ul>
							<li><a href="http://www.iqiaowai.com/zhuanti/passport170830/" target="_blank">几内亚比绍</a></li>
							<li><a href="http://www.iqiaowai.com/zhuanti/passport170830/" target="_blank">圣卢西亚</a></li>
							<li><a href="http://www.iqiaowai.com/zhuanti/passport170830/" target="_blank">瓦努阿图</a></li>                             
                            <li><a href="http://www.iqiaowai.com/malta/" target="_blank"><span>马耳他</span></a></li>
                            <li><a href="http://www.iqiaowai.com/cyprus/" target="_blank">塞浦路斯</a></li>
                            <li><a href="http://www.iqiaowai.com/saintkitts/" target="_blank">圣基茨和尼维斯</a></li>
							<li><a href="http://www.iqiaowai.com/zhuanti/dominic171204" target="_blank">多米尼克</a></li>
                        </ul>
                    </div>
                </div>
            </li>-->
            <li class="nav-box nav-project-box">
                <a href="<?php echo site_url('list/activity') ?>" class="nav-link" target="_blank">移民热点</a>
                <i class="nav-line"></i>
            </li>
            <li class="nav-box nav-project-box">
                <a href="<?php echo site_url('list/yujian') ?>" class="nav-link" target="_blank">裕鉴动态</a>
                <i class="nav-line"></i>
            </li>
            <li class="nav-box nav-project-box">
                <a href="<?php echo site_url('projects'); ?>" class="nav-link" target="_blank">热门项目</a>
                <i class="nav-line"></i>
            </li>
           <li class="nav-box nav-project-box">
                <a href="<?php echo site_url('list/case') ?>" class="nav-link" target="_blank">成功案例</a>
                <i class="nav-line"></i>
            </li>
           <!--  <li class="nav-box"><a href="http://house.iqiaowai.com/" class="nav-link" target="_blank" onclick="_czc.push(['_trackEvent','新官网主页1.5-导航-海外房产','点击','新官网主页1.5-导航-海外房产']);">海外房产</a><i class="nav-line"></i></li> -->
            
            <li class="nav-box nav-about-box">
                <a href="<?php echo site_url('aboutus') ?>" class="nav-link" target="_blank">关于我们</a>
             
            </li>
        </ul>
    </div>
    <!-- 导航 E  -->