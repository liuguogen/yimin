
$(function(){
  $('.btn-req').click(function(e){
        e.preventDefault();
        var mobile = $("#mobile").val();
        var reg = /^[0-9]{11}$/;
        if (! reg.test(mobile)) {
          alert("请输入有效的手机号");
          return;
        }
		$.post("/plus/diyform_all_insert.php",{'phone':mobile,'name':$(".form-inline #name").val(),'comeform':$("input[name='comeform']").val()},function(d){
			if(d==1){
				alert("发布成功");
			}else{
				alert("系统较忙稍后再试！");
			}
		});
      });


});

