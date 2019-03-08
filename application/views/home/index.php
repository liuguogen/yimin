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
     <meta name="keywords" content="<?php echo $this->config->item('keywords','home') ?>" />
    <meta name="description" content="<?php echo $this->config->item('description','home') ?>" /> 
    <link type="text/css" rel="stylesheet" href="../../../assets/home/css/style.css">
    <script type="text/javascript" src="../../../assets/js/jquery-1.10.2.min.js"></script>
</head>
<style type="text/css">
    img{width: 100%;}
</style>
<body>
    
<?php $this->load->view('public/header') ?>
 <div class="box">
     <p class="en-text">What's our core ?</p>
     <p class="en-e">P R O G R A M</p>
     

     <section class="" style="width: 960px; margin:0 auto;">
    <div class="swiper-container">
        <div class="swiper-wrapper">

             <?php if($this->config->item('thumb','home')!=''){

         $thumb=explode(',',$this->config->item('thumb','home'));
         foreach($thumb as $v){
      ?> 
            <div class="swiper-slide swiper-slide-center none-effect">
                
                    <img src="../../../<?php echo $v; ?>">
                
                
            </div>
        <?php }} ?>
            
        </div>
        <div class="button">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>


 </div>

 <a href="<?php echo site_url('info/company_info') ?>"><div class="box" style="background-image: url(../../../assets/images/srdz11.png);background-size: 100% 100%;    
    background-repeat: no-repeat;height: 778px;">

   
     
 </div></a>

 <div class="box" style="">
     <p class="en-text">Who is going to escort and keep you alive ?</p>
     <p class="en-e">T H E &nbsp;&nbsp;&nbsp;T E A M</p>
     
    
     <section class="" style="width: 960px; margin:0 auto;">
    <div class="swiper-container">
        <div class="swiper-wrapper">


            <?php if($this->config->item('thumb2','home')!=''){

         $thumb2=explode(',',$this->config->item('thumb2','home'));
         foreach($thumb2 as $v){
      ?> 
            <div class="swiper-slide swiper-slide-center none-effect">
                
                    <img src="../../../<?php echo $v; ?>">
               
                
            </div>
            <?php }} ?>
           
        </div>
        <div class="button">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<div style="margin:0 auto;display: block;width: 960px;margin-top: -120px;">
    <img src="../../../assets/images/5dec1.png" height="415" width="960">
</div>

 </div>

  <a href="<?php echo site_url('info/tail_custom') ?>"><div class="box" style="background-image: url(../../../assets/images/sw1.png);background-size: 100% 100%;    
    background-repeat: no-repeat;height: 778px;">

   
     
 </div></a>



 <div class="box">
     <p class="en-text">Professional analysis report</p>
     <p class="en-e" style="font-size: 3.5rem;color: rgb(26,41,68);margin-bottom: 10px;">报告体系</p>
     

     
    <div class="input-t" style="width: 960px;margin:0 auto;">
        <input type="text" name="names" placeholder="Your name...">

        <input type="text" name="phone" placeholder="Your phone...">
        <button id="a_action">咨询报告</button>
    </div>
     <p class="en-text">INVITE YOUR FRIENDS</p>
     <?php echo  $this->config->item('copy_info','home'); ?>
 </div>
</body>
<script type="text/javascript" src="../../../assets/js/swiper.min.js"></script>
<script type="text/javascript">

    window.onload = function() {
        var swiper = new Swiper('.swiper-container',{
            autoplay: 3000,
            speed: 1000,
            autoplayDisableOnInteraction: false,
            loop: true,
            centeredSlides: true,
            slidesPerView: 2.99,
            pagination: '.swiper-pagination',
            paginationClickable: false,
            prevButton: '.swiper-button-prev',
            nextButton: '.swiper-button-next',
            onInit: function(swiper) {
                swiper.slides[2].className = "swiper-slide swiper-slide-active";
            },
            breakpoints: {
                668: {
                    slidesPerView: 1,
                }
            }
        });
    }

$('#a_action').on('click',function(){
 var name = $("input[name='names']").val();
 var phone = $("input[name='phone']").val();
 $.post("<?php echo site_url('info/save') ?>",{name:name,phone:phone},function(rs){
    if(rs.code==1) {
        alert(rs.msg);
        window.location.reload();
    }else {
        alert(rs.msg);
        //window.location.reload();
    }
 },'json');
})
</script>
</html>