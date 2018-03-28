  <div class="flexslider" style="height:525px;">
        <ul class="slides">


         <?php if($this->config->item('thumb','home')!=''){

         $thumb=explode(',',$this->config->item('thumb','home'));
         foreach($thumb as $v){
      ?> 
            <li  style="background:url(../../../<?php echo $v; ?>) 50% 0 no-repeat;background-size:auto 100%;height:525px;">
                <a href="javascript:;" target="_blank" rel="nofollow" onclick="_czc.push(['_trackEvent','新官网主页1.5-banner-38554','点击','新官网主页1.5-banner-38554']);"></a>
            </li>
            <?php }}?>
        </ul> 
        <div class="hotspot banner-leyu" onclick="_czc.push(['_trackEvent','新官网主页1.5-banner-leyu','点击','新官网主页1.5-banner-leyu']);"></div>
    </div>