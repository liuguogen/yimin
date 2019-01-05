<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <script src="../../../assets/home/js/jquery.min.js"></script>
    <style>
        .input {
            width: 90%;
            margin: 10px 0px;
            border-radius: 5px;
            height: 38px;
            line-height: 1.3;
            border-width: 1px;
            border-style: solid;
            background-color: white;
            border-radius: 16px;
            padding-left: 15px;
            background-color: #f7f7f7;
        }

        label {
            color: white;
        }

        button {
            background-color: #f3644b;
            display: inline-block;
            height: 38px;
            line-height: 38px;
            padding: 0 18px;
            color: #fff;
            white-space: nowrap;
            text-align: center;
            font-size: 14px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }

        button:hover {
            opacity: .8;
            filter: alpha(opacity=80);
            color: #fff;
        }
    </style>
</head>
<body style="background-image: url('../../../assets/images/bg.jpeg');background-size:cover;">


<div style="width: 90%;height: 800px;display: flex;">
    <div style="flex: 3;margin-left: 5%;margin-top: 200px;text-align: center;">
        <div style="color: white;font-size: 18px;font-weight: 600">
            <p>复杂的各国政策与错综复杂的资讯刷新着认知者的盲区</p>
            <p>却鲜少有平台结合认知者的各项综合指标进行综合服务</p>
        </div>

        <div>
            <p style="padding: 5px 30px;background-color: #c00003;display: inline-block;color: white;font-size: 16px;font-weight: 600;">
                BBS结合自身资源与需求人群营运而生</p>
        </div>

    </div>
    <div style="flex: 2;">
        <div style="padding-bottom: 50px;margin-left: 28%;margin-top: 150px;background-color:rgba(0, 0, 0, 0.3);width: 100%;text-align: left;padding-top: 20px;margin-left: 50px;margin-right: 50px;">
            <div style="margin: 20px 50px;">
                <p style="font-size: 20px;font-weight: bold;color:white;width: 100%;">REGISTER FOR AN ACCOUNT</p>
                <p style="font-size: 18px;font-weight: bold;color:white;width: 100%;margin: 0;">Welcome！</p>
                <p style="font-size: 14px;font-weight: bold;color:white;width: 100%;margin: 0;">We just need to get a
                    few details
                    from you to get you signed up to the service.！</p>

                <div style="margin-top: 20px;">
                    <label></label>
                    <input placeholder="ID" class="input" name="username" style="display: inline-block;"/>
                </div>
                <di2>
                    <label></label>
                    <input placeholder="PASSWORD" type="password" name="password" class="input" style="display: inline-block;"/>
                </di2>

                <div style="color: white;margin-top: 15px;">
                    <input type="checkbox" checked="checked"/> I agree to the Terms & Conditions
                </div>
                <div style="color: white;text-align: center">
                <button style="margin: 20px auto" id="sign_up">SIGN UP</button>
                </div>
            </div>
        </div>
    </div>
    
    <img src="../../../assets/images/logo.png" style="position: absolute;left: 50px;width: 100px;bottom: 0px;">
</div>
</body>
</html>

<script type="text/javascript">
    $("#sign_up").on('click',function(){
        var username = $("input[name='username']").val();
        var password = $("input[name='password']").val();
        if(username=='') {
            alert('ID cannot be empty!');return;
        }
         if(password=='') {
            alert('password cannot be empty!');return;
        }
        $.post("<?php echo site_url('login_up') ?>",{username:username,password:password},function(rs){
            if(rs.code==1) {
                window.location.href = rs.url;
            }

            if(rs.code==0) {
                alert(rs.msg);
            }
        },'json');
    })
</script>