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
					setCookie("re_burl",b_url);//鏉ユ簮涔嬪墠鐨勯〉					
					setCookie("firsturl",p_url);//鏉ユ簮鐫€闄嗛〉
					setCookie("Lsurl",b_url+'-->'+p_url);
             }else if(c != -1 || NameOfCookie == false || NameOfCookie == null){
					setCookie("userCk",md5(returnCitySN["cip"]+Date.parse(new Date())+Math.random()*1000+9999999));
					var b_url   = document.referrer;
					setCookie("re_burl",b_url);//鏉ユ簮涔嬪墠鐨勯〉					
					setCookie("firsturl",p_url);//鏉ユ簮鐫€闄嗛〉
					setCookie("Lsurl",b_url+'-->'+p_url);
			 }else{
					var b_url   = document.referrer;
					setCookie("re_nowburl",b_url);//鏉ユ簮涔嬪墠鐨勯〉				
					setCookie("Lsurl",getCookie("Lsurl")+"-->"+p_url);
		     }
});  

function clearCookie(name) {  
    setCookie(name, "", -1);  
}  
function uclick(types){
			 if(types == "鏌ョ湅璇勪及缁撴灉"){
					_czc.push(['_trackEvent','鎵嬫満绔欐煡鐪嬭瘎浼扮粨鏋�','鐐瑰嚮','鏌ョ湅璇勪及缁撴灉']);
			 }
			 if(types == "PC鏌ョ湅璇勪及缁撴灉"){
					_czc.push(['_trackEvent','PC鏌ョ湅璇勪及缁撴灉','鐐瑰嚮','PC鏌ョ湅璇勪及缁撴灉']);
			 }
			 if(types == "鎵嬫満鍦ㄧ嚎鍜ㄨ"){
					_czc.push(['_trackEvent','鎵嬫満绔欏湪绾垮挩璇�','鐐瑰嚮','鍦ㄧ嚎鍜ㄨ']);
			 }
			 if(types == "鎵嬫満鎷ㄦ墦瀹㈡湇"){
					_czc.push(['_trackEvent','鎵嬫満绔欏簳鎷ㄦ墦瀹㈡湇','鐐瑰嚮','鎷ㄦ墦瀹㈡湇']);
			 }
			 if(types == "鎵嬫満缁欐垜鍥炵數"){
					_czc.push(['_trackEvent','鎵嬫満绔欏簳缁欐垜鍥炵數','鐐瑰嚮','缁欐垜鍥炵數']);
			 }
			 if(types == "鍏抽敭瀛楁寜鎵�"){
					_czc.push(['_trackEvent','鍏抽敭瀛楁寜閽�','鐐瑰嚮','鍏抽敭瀛楁寜鎵�']);
			 }
			 if(types == "鍙充晶绔嬪嵆鍜ㄨ"){
					_czc.push(['_trackEvent','瀹樼綉鍙充晶绔嬪嵆鍜ㄨ','鐐瑰嚮','鍙充晶绔嬪嵆鍜ㄨ']);
			 }
			 if(types == "瀹樼綉涓婚〉娲诲姩"){
					_czc.push(['_trackEvent','瀹樼綉涓婚〉娲诲姩','鐐瑰嚮','瀹樼綉涓婚〉娲诲姩']);
			 }
}