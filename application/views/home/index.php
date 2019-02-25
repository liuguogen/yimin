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
</head>
<style type="text/css">
body{
   margin: 0;
   padding: 0;
   
}
.top{
    background-image: url(../../../assets/images/bg.png);
   
    height: 453px;
    background-size: 100% 100%;    
    background-repeat: no-repeat;
    width: 100%;
    background-position: center;
}
.clear{
    clear: both;
}
ul,ol{
    list-style: none;
}
.left{
    float: left;
}
.right{
    float: right;
}
.box{
    width: 100%;
    margin: 0 auto;

}
.menu {
    padding: 0;
    margin: 0;
}
.m{
    width: 960px;
    margin:0 auto;
}

.menu ul{
    margin: 0;
    padding: 0;
}
.menu ul li{
    color: white;
    float: left;
    margin:60px 36px;
    font-family: "微软雅黑"
}
.logo{
    width: 120px;
    height: 100px;
    vertical-align:middle;
}
.text-info{
    height: 40px;
    width: 200px;
    border: 2px solid white;
    margin:120px 380px;
    display: inline-table;
}
.text-info span{
    color: white;
    line-height: 40px;
    text-align: center;
    display: block;
}
.en-text{
    margin:0 auto;
    text-align: center;
    font-size: 18px;
    color: rgb(208,208,208);
    margin-top: 50px;
    font-family: "宋体";
}
.en-e{
    margin:0 auto;
    text-align: center;
    font-size: 25px;
    color: #000;
    font-weight: bold;
    margin-top: 20px;
    font-family: "宋体";

}

.input-t{
    margin-left: 80px;
}
.input-t input{
    border: 2px solid #ccc;
    height: 30px;
    width: 240px;
    margin: 0 0px 0 140px;
}

.input-t button{
    height: 36px;
    width: 100px;
    color: white;
    background: rgb(26,41,68);

}

</style>
<body>
    
<?php $this->load->view('public/header') ?>
 <div class="box">
     <p class="en-text">What's our core ?</p>
     <p class="en-e">P R O G R A M</p>
     

     <section class="" style="width: 760px; margin:0 auto;">
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

 <div class="box" style="background-image: url(../../../assets/images/srdz11.png);background-size: 100% 100%;    
    background-repeat: no-repeat;height: 778px;">

   
     
 </div>

 <div class="box" style="">
     <p class="en-text">Who is going to escort and keep you alive ?</p>
     <p class="en-e">T H E &nbsp;&nbsp;&nbsp;T E A M</p>
     
    
     <section class="" style="width: 760px; margin:0 auto;">
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

  <div class="box" style="background-image: url(../../../assets/images/sw1.png);background-size: 100% 100%;    
    background-repeat: no-repeat;height: 778px;">

   
     
 </div>



 <div class="box">
     <p class="en-text">Professional analysis report</p>
     <p class="en-e" style="font-size: 3.5rem;color: rgb(26,41,68);">报告体系</p>
     

     
    <div class="input-t" style="width: 960px;margin:0 auto;">
        <input type="" name="" placeholder="Your name...">

        <input type="" name="" placeholder="Your phone...">
        <button>咨询报告</button>
    </div>
     <p class="en-text">INVITE YOUR FRIENDS</p>
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


</script>
</html>