function setCookie(name, value, seconds) {  
             seconds = seconds || 0;     
             var expires = "";  
             if (seconds !== 0 ) {
                var date = new Date();  
                date.setTime(date.getTime()+(seconds*1000));  
                expires = "; expires="+date.toGMTString();  
              }  
             document.cookie = name+"="+escape(value)+expires+";path=/";
}
function getCookie(name) {  
                var nameEQ = name + "=";  
                var ca = document.cookie.split(';');   
                for(var i=0;i < ca.length;i++) {  
                    var c = ca[i];                      
                    while (c.charAt(0)===' ') {         
                        c = c.substring(1,c.length);      
                    }  
                    if (c.indexOf(nameEQ) === 0) {        
                      return unescape(c.substring(nameEQ.length,c.length));    
                    }  
                }  
                return "";  
}
$(document).ready(function(){  
			 var p_url   = document.URL;
			 var time = new Date();    
			 var m = time.getMonth() + 1;    
			 var ltime = time.getFullYear() + "-" + m + "-"+ time.getDate() + " " + time.getHours() + ":"+ time.getMinutes()+ ":" + time.getSeconds();
             var NameOfCookie = getCookie("userCk");
			 var Old_Cookie = getCookie("old_uid");
             var c = document.cookie.indexOf(NameOfCookie+"="); 
			 var o = document.cookie.indexOf(Old_Cookie+"="); 
			 setCookie("userLtime",ltime);
			if(getCookie("Lsurl") != null && getCookie("Lsurl").length >1300){
				 setCookie("Lsurl",getCookie("Lsurl").substring(0,1300));
			 }
             if((o != -1 || Old_Cookie == false || Old_Cookie == null)){
					setCookie("userCk",md5(returnCitySN["cip"]+Date.parse(new Date())+Math.random()*1000+9999999));
					setCookie("old_uid",getCookie('userCk'));//,31536000
					var b_url   = document.referrer;
					setCookie("re_burl",b_url);//来源之前的页					
					setCookie("firsturl",p_url);//来源着陆页
					setCookie("Lsurl",b_url+'-->'+p_url);
             }else if(c != -1 || NameOfCookie == false || NameOfCookie == null){
					setCookie("userCk",md5(returnCitySN["cip"]+Date.parse(new Date())+Math.random()*1000+9999999));
					var b_url   = document.referrer;
					setCookie("re_burl",b_url);//来源之前的页					
					setCookie("firsturl",p_url);//来源着陆页
					setCookie("Lsurl",b_url+'-->'+p_url);
			 }else{
					var b_url   = document.referrer;
					setCookie("re_nowburl",b_url);//来源之前的页				
					setCookie("Lsurl",getCookie("Lsurl")+"-->"+p_url);
		     }
});  

function clearCookie(name) {  
    setCookie(name, "", -1);  
}  
function uclick(types){
			 if(types == "查看评估结果"){
					_czc.push(['_trackEvent','手机站查看评估结果','点击','查看评估结果']);
			 }
			 if(types == "PC查看评估结果"){
					_czc.push(['_trackEvent','PC查看评估结果','点击','PC查看评估结果']);
			 }
			 if(types == "手机在线咨询"){
					_czc.push(['_trackEvent','手机站在线咨询','点击','在线咨询']);
			 }
			 if(types == "手机拨打客服"){
					_czc.push(['_trackEvent','手机站底拨打客服','点击','拨打客服']);
			 }
			 if(types == "手机给我回电"){
					_czc.push(['_trackEvent','手机站底给我回电','点击','给我回电']);
			 }
			 if(types == "关键字按扭"){
					_czc.push(['_trackEvent','关键字按钮','点击','关键字按扭']);
			 }
			 if(types == "右侧立即咨询"){
					_czc.push(['_trackEvent','官网右侧立即咨询','点击','右侧立即咨询']);
			 }
			 if(types == "官网主页活动"){
					_czc.push(['_trackEvent','官网主页活动','点击','官网主页活动']);
			 }
             var p_url   = document.URL;
             var b_url   = document.referrer;
             var NameOfCookie = getCookie("userCk");
             var gck = getCookie("userCk");
             var c = document.cookie.indexOf(NameOfCookie+"="); 
                    $.ajax({
                       type:"POST",
					   dataType: "json",
					   async: true,
                       url:'/m/saveurl',
                       data:{
						purl:p_url,//提交页面
						burl:getCookie("Lsurl"),//流水记录
						re_burl:getCookie("re_burl")+"-->"+getCookie("re_nowburl"),//来源之前的页					
						ip:returnCitySN["cip"],//ip地址
						loadtime:getCookie("userLtime"),//首次加载时间
						cname:returnCitySN["cname"],//省市						
						firsturl:getCookie("firsturl"),//第一次访问的页面
						unid:gck,
						ftype:types,
						old_uid:getCookie('old_uid'),
						re_nowburl:b_url
						}
					});
}