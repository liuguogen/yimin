//设置头部背景
document.getElementById("mui-content").addEventListener("drag",function(){
	var length = -parseInt($(".m-qw-main").css("transform").replace(/[^0-9\-,]/g,'').split(',')[5]);
	if(length>0){
		$("header").css("background","rgba(214,0,15,0.9)");
		$("header .logo").attr("src","../../images/wap/logo_white.png");
	}else{
		$("header").css("background","rgba(0,0,0,0.3)");
		$("header .logo").attr("src","../../images/wap/logo.png");
	}		
})
