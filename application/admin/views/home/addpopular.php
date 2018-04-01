

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>新闻管理 - 添加热门项目</title>
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
    <a href="<?php echo site_url('Admin_controller/popularList') ?>">热门项目列表</a>
    &gt;
    添加热门项目
</div>


<ul id="myTab" class="nav nav-tabs">
    <li class="">
        <a href="<?php echo site_url('Admin_controller/popularList') ?>">新闻列表</a>
    </li>
        <li class="active">
        <a href="javascript:;">添加热门项目</a>
    </li>
</ul>
<!-- 导航栏结束 -->

<form class="form-inline" action="<?php echo site_url('Admin_controller/addpopularList') ?>"  method="post" enctype="multipart/form-data" onsubmit="return checksubmit()">
    <table class="table table-striped table-bordered table-hover table-condensed">
       <input type="hidden" name="popular_id" class="form-control" value="<?php if(isset($data['popular_id']) && $data['popular_id']){ echo $data['popular_id'];}else{echo '';} ?>" />
         <tr>
            <th>国家 <span style="color: red;">*</span></th>
            <td><input type="text" name="city" class="form-control" value="<?php if(isset($data['city']) && $data['city']){ echo $data['city'];}else{echo '';} ?>" /></td>
        </tr>
        <tr>
            <th>标题 <span style="color: red;">*</span></th>
            <td><input type="text" name="title" class="form-control" value="<?php if(isset($data['title']) && $data['title']){ echo $data['title'];}else{echo '';} ?>" /></td>
        </tr>
        
        <tr>
            <th>关注数 <span style="color: red;">*</span></th>
            <td><input type="text" name="follow" class="form-control" value="<?php if(isset($data['follow']) && $data['follow']){ echo $data['follow'];}else{echo 0;} ?>" /></td>
        </tr>
        <tr>
            <th>价格 <span style="color: red;">*</span></th>
            <td><input type="text" name="price" class="form-control" value="<?php if(isset($data['price']) && $data['price']){ echo $data['price'];}else{echo '';} ?>" /></td>
        </tr>
         <tr>
            <th>热门项目封面图 <span style="color: red;">*</span></th>
            
               <td>
                   <div id="thumb" ></div>
                   <div id="add_thumb"></div>
                <?php if(isset($data['thumb']) && $data['thumb']){ ?>
                <img src="../../../<?php echo $data['thumb'] ?>" height="120" />
                <?php }?>
               </td>
        </tr>
        <tr>
            <th>描述 <span style="color: red;">*</span></th>
            <td><textarea name="brief"><?php echo $data['brief']; ?></textarea></td>
        </tr>
        <tr>
            <th>项目介绍 <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="project_intro" cols="60" rows="5"><?php if(isset($data['project_intro']) && $data['project_intro']){ echo $data['project_intro'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('project_intro',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>
        <tr>
            <th>优势介绍 <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="advantage" cols="60" rows="5"><?php if(isset($data['advantage']) && $data['advantage']){ echo $data['advantage'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('advantage',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>
        <tr>
            <th>解读描述 <span style="color: red;">*</span></th>
            <td>
                <textarea class="form-control" name="unscramble" cols="60" rows="5"><?php if(isset($data['unscramble']) && $data['unscramble']){ echo $data['unscramble'];}else{echo '';} ?></textarea>
                <script type="text/javascript">CKEDITOR.replace('unscramble',{ toolbarCanCollapse: true,  toolbar: [['Source','FontSize','JustifyCenter','Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Image','Table']],height: '250px', width: '900px',filebrowserImageUploadUrl:'<?php echo site_url('images/uploads') ?>' })</script>
            </td>
        </tr>
        <tr>
            <th>排序 <span style="color: red;">*</span></th>
            <td><input type="text" name="orderby" class="form-control" value="<?php if(isset($data['orderby']) && $data['orderby']){ echo $data['orderby'];}else{echo 0;} ?>" /><span style="color: red">&nbsp;*数字越大越靠前</span></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input class="btn btn-success" type="submit" value="保存">
            </td>
        </tr>
    </table>
</form>
<script src="../../../assets/aceadmin/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="../../../assets/aceadmin/js/base.js"></script>
<script type="text/javascript">
$('#thumb').diyUpload({
    url:"<?php echo site_url('images/upload') ?>",
    success:function( data ) {
        $('#add_thumb').append('<input type="hidden" name="thumb" value='+data._raw+' />');
        
    },
    error:function( err ) {
        console.info( err );    
    }
});
</script>
</body>
</html>