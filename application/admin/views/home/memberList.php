<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>会员管理 - 会员列表</title>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
      <?php  $this->load->view('public/header') ?>

</head>
<body>
<style type="text/css">
.page .pagination {
font-size: 14px;
float:right;
}
.pagination a ,.pagination a.number {
margin: 0 5px 0 0;
padding: 3px 6px;
border: 1px solid #d0d0d0;
}
.pagination a:hover,.pagination a.current {
border-color: #428BCA;
color: #333;
}
 
.page{
/*float:right;*/
width:800px;
margin:0 auto;
}
.pagination a{
    color:#333;
}
</style>
<div class="bjy-admin-nav">
    <i class="fa fa-home"></i> 首页
    &gt;
    会员列表
</div>
<form action="<?php echo site_url('Admin_controller/memberList') ?>" method="post">

    <table class="table table-striped table-bordered table-hover table-condensed">
        
            <td width="15%">
                <input class="form-control" type="text" name="username" value="<?php echo $username ?>" placeholder="用户名" />
            </td>
            <td width="55%">
                <input class="btn btn-success" type="submit" value="搜索">
            </td>
        </tr>
    </table>
</form>
<ul id="myTab" class="nav nav-tabs">
    <li class="active">
        <a href="javascript:;">会员列表</a>
    </li>
        <li>
        <a href="<?php echo site_url('Admin_controller/addMember') ?>">添加用户</a>
    </li>
</ul>
<table class="table table-striped table-bordered table-hover table-condensed">
    <tr>
        <th>编号</th>
        
        <th>用户名</th>
        
        <th>创建时间</th>
        
        <th>操作</th>
    </tr>
   <?php if($row){
    foreach($row as $v){
    ?>
        <tr>
            <td>
              <?php echo $v['member_id'] ?>
            </td>
            <td>
                <?php echo $v['username'] ?>
            </td>
          
            
             <td>
            <?php echo date('Y-m-d H:i:s',$v['create_time']) ?>
            </td>
            <td>

            
               
                <a href="<?php echo site_url('Admin_controller/editMember?member_id='.$v['member_id']); ?>">编辑</a> |
                
               
                
                <a href="javascript:if(confirm('确定删除吗？'))location='<?php echo site_url('Admin_controller/delMember?member_id='.$v['member_id']) ?>'" >删除</a>
                
            </td>
    </tr>
   <?php }}?>
</table>
<?php if ($page_links){?><div class="page"><?php echo $page_links; ?></div><?php }?>
<script src="../../../assets/aceadmin/js/jquery-1.10.2.min.js"></script>
<script src="../../../assets/aceadmin/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="../../../assets/aceadmin/js/base.js"></script>
</body>
</html>