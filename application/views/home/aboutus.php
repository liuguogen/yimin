
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
    <title>关于我们</title>
    <meta name="renderer" content="webkit">
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
   


	

	 <!-- 头部 S -->
    
   
   
    <?php $this->load->view('public/header'); ?>
    
    <div class="box" style="width: 960px;margin:0 auto;">

        <?php if ($type =='about_group'){ ?>
    <?php echo $this->config->item('about_group','home') ?>
    <?php }?>
    			
    <?php if ($type =='company_info'){ ?>
    <?php echo $this->config->item('company_info','home') ?>
    <?php }?>

    <?php if ($type =='tail_custom'){ ?>
    <?php echo $this->config->item('tail_custom','home') ?>
    <?php }?>

    <?php if ($type =='direct_project'){ ?>
    <?php echo $this->config->item('direct_project','home') ?>
    <?php }?>

    <?php if ($type =='strategy_project'){ ?>
    <?php echo $this->config->item('strategy_project','home') ?>
    <?php }?>
	    	
    </div>






</body>

</html>