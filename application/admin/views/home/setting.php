

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>系统管理 - 配置信息</title>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
      <?php  $this->load->view('public/header') ?>
    <script src="../../../assets/aceadmin/js/jquery-1.10.2.min.js"></script>
    <script  type="text/javascript"  src="../../../assets/aceadmin/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../assets/aceadmin/diyUpload/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/aceadmin/diyUpload/css/diyUpload.css">
    <script type="text/javascript" src="../../../assets/aceadmin/diyUpload/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="../../../assets/aceadmin/diyUpload/js/diyUpload.js"></script>
    <style>
        .btn-upload {
            width: 106px;
            height: 32px;
            position: relative;
            margin-bottom: 10px;
        }
        .btn-upload a {
            display: block;
            width: 104px;
            line-height: 18px;
            padding: 6px 0;
            text-align: center;
            color: #4c4c4c;
            background: #fff;
            border: 1px solid #cecece;
        }
        .btn-upload input {
            width: 106px;
            height: 32px;
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: 1;
            filter: alpha(opacity=0);
            -moz-opacity: 0;
            opacity: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- 导航栏开始 -->
<div class="bjy-admin-nav">
    <i class="fa fa-home"></i> 首页
    &gt;
    
    配置信息
</div>


<ul id="myTab" class="nav nav-tabs">
    
        <li class="active">
        <a href="javascript:;">配置信息</a>
    </li>
</ul>
<!-- 导航栏结束 -->

<form class="form-inline"  method="post" enctype="multipart/form-data">
    <table class="table table-striped table-bordered table-hover table-condensed">
       <input type="hidden" name="setting_id" class="form-control" value="<?php if(isset($data['top_logo']) && $data['setting_id']){echo $data['setting_id'];}else{echo '';} ?>" />

       <tr>
            <th>站点名称 <span style="color: red;">*</span></th>
            <td><input type="text" name="sitename" class="form-control" value="<?php if(isset($data['sitename']) && $data['sitename']){echo $data['sitename'];}else{echo '';} ?>"  style="width: 800px;" /></td>
        </tr>
         <tr>
            <th>服务热线 <span style="color: red;">*</span></th>
            <td><input type="text" name="hot_tel" class="form-control" value="<?php if(isset($data['hot_tel']) && $data['hot_tel']){echo $data['hot_tel'];}else{echo '';} ?>"  style="width: 800px;" /></td>
        </tr>
        <tr>
            <th>网站关键字 <span style="color: red;">*</span></th>
            <td><input type="text" name="keywords" class="form-control" value="<?php if(isset($data['keywords']) && $data['keywords']){echo $data['keywords'];}else{echo '';} ?>"  style="width: 800px;" /></td>
        </tr>
        <tr>
            <th>网站介绍 <span style="color: red;">*</span></th>
            <td><input type="text" name="description" class="form-control" value="<?php if(isset($data['description']) && $data['description']){echo $data['description'];}else{echo '';} ?>"  style="width: 800px;" /></td>
        </tr>
        <tr>
            <th>手机版二维码 <span style="color: red;">*</span></th>
            
               <td>
                   <div id="mobile_qrcode" ></div>
                   <div id="add_mobile_qrcode"></div>
                <?php if(isset($data['mobile_qrcode']) && $data['mobile_qrcode']){ ?>
                <img src="../../../<?php echo $data['mobile_qrcode'] ?>" height="80" />
                <?php }?>
               </td>
        </tr>
        <tr>
            <th>微信公众号二维码 <span style="color: red;">*</span></th>
            
               <td>
                   <div id="wechat_qrcode" ></div>
                   <div id="add_wechat_qrcode"></div>
                <?php if(isset($data['wechat_qrcode']) && $data['wechat_qrcode']){ ?>
                <img src="../../../<?php echo $data['wechat_qrcode'] ?>" height="80" />
                <?php }?>
               </td>
        </tr>
        <tr>
            <th>头部背景 <span style="color: red;">*</span></th>
            
               <td>
                   <div id="top_bg" ></div>
                   <div id="add_top_bg"></div>
                <?php if(isset($data['top_bg']) && $data['top_bg']){ ?>
                <img src="../../../<?php echo $data['top_bg'] ?>" height="80" />
                <?php }?>
               </td>
        </tr>
        <tr>
            <th>LOGO <span style="color: red;">*</span></th>
            
               <td>
                   <div id="top_logo" ></div>
                   <div id="add_top_logo"></div>
                <?php if(isset($data['top_logo']) && $data['top_logo']){ ?>
                <img src="../../../<?php echo $data['top_logo'] ?>" height="80" />
                <?php }?>
               </td>
        </tr>
        <tr>
            <th>第一个轮播图 <span style="color: red;">*</span></th>
            
               <td>
                   <div id="thumb" ></div>
                   <div id="add_thumb"></div>
                <?php if(isset($data['thumb']) && $data['thumb']) {
                   foreach($data['thumb'] as $v){
                 ?>

                 <img src="../../../<?php echo $v ?>" height="100" />
            <?php  }}?>
               </td>
        </tr>
         
        <tr>
            <th>第二个轮播图 <span style="color: red;">*</span></th>
            
               <td>
                   <div id="thumb2" ></div>
                   <div id="add_thumb2"></div>
                <?php if(isset($data['thumb2']) && $data['thumb2']) {
                   foreach($data['thumb2'] as $v){
                 ?>

                 <img src="../../../<?php echo $v ?>" height="100" />
            <?php  }}?>
               </td>
        </tr>
           
        
      
       
        
        
        
         
        <tr>
            <th>关于我们介绍 <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="about_group" cols="60" rows="5"><?php if(isset($data['about_group']) && $data['about_group']){ echo $data['about_group'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('about_group',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>
        <tr>
    
        

        
        <tr>
            <th>版权信息 <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="copy_info" cols="60" rows="5"><?php if(isset($data['copy_info']) && $data['copy_info']){ echo $data['copy_info'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('copy_info',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>

        <tr>
            <th>遇见“享” <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="tail_custom" cols="60" rows="5"><?php if(isset($data['tail_custom']) && $data['tail_custom']){ echo $data['tail_custom'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('tail_custom',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>

        <tr>
            <th>遇见“精” <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="direct_project" cols="60" rows="5"><?php if(isset($data['direct_project']) && $data['direct_project']){ echo $data['direct_project'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('direct_project',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>
        <tr>
            <th>遇见“品” <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="strategy_project" cols="60" rows="5"><?php if(isset($data['strategy_project']) && $data['strategy_project']){ echo $data['strategy_project'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('strategy_project',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>
        <tr>
            <th>遇见“臻” <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="company_info" cols="60" rows="5"><?php if(isset($data['company_info']) && $data['company_info']){ echo $data['company_info'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('company_info',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>
            <th></th>
            <td>
                <input class="btn btn-success" type="submit" value="保存">
            </td>
        </tr>
    </table>
</form>

<script src="../../../assets/aceadmin/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="../../../assets/aceadmin/js/base.js"></script>

</body>
</html>
 <script type="text/javascript">


$('#top_logo').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_top_logo').append('<input type="hidden" name="top_logo" value='+data._raw+' />');
        //console.info( data._raw );
    },
    error:function( err ) {
        console.info( err );    
    }
});
$('#thumb').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_thumb').append('<input type="hidden" name="thumb[]" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});

$('#thumb2').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_thumb2').append('<input type="hidden" name="thumb2[]" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});
$('#mobile_qrcode').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_mobile_qrcode').append('<input type="hidden" name="mobile_qrcode" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});
$('#wechat_qrcode').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_wechat_qrcode').append('<input type="hidden" name="wechat_qrcode" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});

$('#top_bg').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_top_bg').append('<input type="hidden" name="top_bg" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});

//合作伙伴
$('#partner_img').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_partner_img').append('<input type="hidden" name="partner_img[]" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});
//核心业务图片
$('#core_businessImg').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_core_businessImg').append('<input type="hidden" name="core_businessImg[]" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});
//底部logo
$('#bottom_logo').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_bottom_logo').append('<input type="hidden" name="bottom_logo" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});
$('#about_groupImg').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_about_groupImg').append('<input type="hidden" name="about_groupImg" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});

$("#add_params").on('click',function(){
    
    var str='<span><input type="text"  name="key[]"  />:<input type="text" name="val[]" /><span onclick="rem_obj(this)">移除</span><br/><br/></span>';
    
    $("#params_str").append(str);
});
$("#add_core_business").on('click',function(){
    
    var str='<span><input type="text"  name="core_business_key[]"  />:<textarea class="form-control" name="core_business_val[]" cols="60" rows="5"></textarea><span onclick="core_business_obj(this)">移除</span><br/><br/></span>';
    
    $("#core_business_str").append(str);
});
//联系我们
$("#add_contactus").on('click',function(){
    
    var str='<span><input type="text"  name="contactus_key[]"  />:<textarea class="form-control" name="contactus_val[]" cols="60" rows="5"></textarea><span onclick="contactus_obj(this)">移除</span><br/><br/></span>';
    
    $("#contactus_str").append(str);
});
function study_obj(obj){
    $(obj).parent().remove();
}
function core_business_obj(obj){
    $(obj).parent().remove();
}
function contactus_obj(obj){
    $(obj).parent().remove();
}
function rem_obj(obj){
    $(obj).parent().remove();
}

    </script>