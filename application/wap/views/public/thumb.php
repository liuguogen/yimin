 <div id="slider" class="mui-slider" >
          <div class="mui-slider-group mui-slider-loop">
            <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->


            <?php if($this->config->item('thumb','home')!=''){
            	  		$thumb=explode(',',$this->config->item('thumb','home'));
         				foreach($thumb as $k=>$v){
      		?> 
			                    						<div class="mui-slider-item <?php if($k==0){echo 'mui-slider-item-duplicate';} ?>">
								<a href="http://www.iqiaowai.com/plus/view.php?aid=38756" class='mui-tab-a'>
										<img src="../../../<?php echo $v; ?>"  alt="">
								</a>
						</div>
                        <?php }}?>                  
                              
          </div>
          <div class="mui-slider-indicator">
          	<?php if($this->config->item('thumb','home')!=''){
            	  	$thumb=explode(',',$this->config->item('thumb','home'));
         			foreach($thumb as $k=>$v){
      		?> 
            <div class="mui-indicator <?php if($k==0){echo 'mui-active';} ?>"></div>
			<?php }} ?>
            </div>
        </div>