
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

<body>
   


	

	 <!-- 头部 S -->
    
   
   
    <?php $this->load->view('public/header'); ?>
    
    <div class="box" style="width: 100%;margin:0 auto;">

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
	 <?php echo  $this->config->item('copy_info','home'); ?>   	
    </div>



    


</body>

</html>