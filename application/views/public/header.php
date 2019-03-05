
<style type="text/css">
body{
   margin: 0;
   padding: 0;
   
}
.top{
    background-image: url(../../../<?php echo $this->config->item('top_bg','home') ?>);
   
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
    margin:60px 30px;
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
    margin:15% 40%;
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
    font-family: "黑体";
}
.en-e{
    margin:0 auto;
    text-align: center;
    font-size: 25px;
    color: #000;
    font-weight: bold;
    margin-top: 20px;
    font-family: "黑体";

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
<div class="top box">
    <div class="m">
        <div class="menu">
            <ul class="clear">
                <a href="/"><li>HOME</li></a>
                <a href="<?php echo site_url('info/company_info') ?>"><li>遇见“臻”</li></a>
                <a href="<?php echo site_url('info/direct_project') ?>"><li>遇见“精”</li></a>
                <li style="margin-top: 10px;"><img class="logo" src="../../../assets/images/logo1.png"></li>
                <a href="<?php echo site_url('info/strategy_project') ?>"><li>遇见“品”</li></a>
                <a href="<?php echo site_url('info/tail_custom') ?>"><li>遇见“享”</li></a>
                <a href="<?php echo site_url('info/about_group') ?>"><li>CONTACT</li></a>
            </ul>
        
        </div>

        
    </div>


</div>