/*
	过年执行
	时间说明：
	起始时间 
	-> 
	结束时间...
*/

function showYear(){
	var arr = Array(
			"2017-1-27 00:00:00",
			"2017-1-29 23:59:59",
			
			"2017-1-30 00:00:00",
		    "2017-1-30 9:59:59",
			"2017-1-30 19:00:00",
			"2017-1-30 23:59:59",
			
			"2017-1-31 00:00:00",
			"2017-1-31 9:59:59",
			"2017-1-31 19:00:00",
			"2017-1-31 23:59:59",

			"2017-2-1 00:00:00",
			"2017-2-1 9:59:59",
			"2017-2-1 19:00:00",
			"2017-2-1 23:59:59",

			"2017-2-2 00:00:00",
			"2017-2-2 9:59:59",
			"2017-2-2 19:00:00",
			"2017-2-2 23:59:59"
			);
	var now_time   = new Date(); // 当前时间
	
	var time_start = new Date(arr[0]);
	var time_end   = new Date(arr[1]);// 789
	
	var time_two   = new Date(arr[2]);//30
	var time_three = new Date(arr[3]);
	var time_four  = new Date(arr[4]);
	var time_five  = new Date(arr[5]);//30
	
	var time_six   = new Date(arr[6]);//31
	var time_seven = new Date(arr[7]);
	var time_eight = new Date(arr[8]);
	var time_nine  = new Date(arr[9]);//31
	
	var time_ten   = new Date(arr[10]);//2-1
	var time_eleven= new Date(arr[11]);
	var time_twelve= new Date(arr[12]);
	var time_thirteen = new Date(arr[13]);//2-1
	
	var time_fourteen = new Date(arr[14]);//2-2
	var time_fifteen= new Date(arr[15]);
	var time_sixteen= new Date(arr[16]);
	var time_seventeen = new Date(arr[17]);//2-2
	
	var t_start    = time_start.getTime();
	var t_end      = time_end.getTime();
	
	
	var t_two      = time_two.getTime();
	var t_three    = time_three.getTime();
	var t_four     = time_four.getTime();
	var t_five     = time_five.getTime();
	
	var t_six      = time_six.getTime();
	var t_seven    = time_seven.getTime();
	var t_eight    = time_eight.getTime();
	var t_nine     = time_nine.getTime();
	
	var t_ten      = time_ten.getTime();
	var t_eleven   = time_eleven.getTime();
	var t_twelve   = time_twelve.getTime();
	var t_thirteen = time_thirteen.getTime();
	
	
	var t_fourteen = time_fourteen.getTime();
	var t_fifteen  = time_fifteen.getTime();
	var t_sixteen  = time_sixteen.getTime();
	var t_seventeen= time_seventeen.getTime();
	
	var t_now     = now_time.getTime();
	
	//27-29日之间 全天显示
	if( t_now > t_start && t_now < t_end ){
		$('.rh-years').removeClass('hide');
	}
	// 30 日
	if( t_now > t_two && t_now < t_three ){
		$('.rh-years_t').removeClass('hide');
	}
	if( t_now > t_four && t_now < t_five ){
		$('.rh-years_t').removeClass('hide');
	}
	//31 日
    if( t_now > t_six && t_now < t_seven ){
		$('.rh-years_t').removeClass('hide');
	}
	if( t_now > t_eight && t_now < t_nine ){
		$('.rh-years_t').removeClass('hide');
	}
	//2-1
	if( t_now > t_ten && t_now < t_eleven ){
		$('.rh-years_t').removeClass('hide');
	}
	if( t_now > t_twelve && t_now < t_thirteen ){
		$('.rh-years_t').removeClass('hide');
	}
	//2-2
	if( t_now > t_fourteen && t_now < t_fifteen ){
		$('.rh-years_t').removeClass('hide');
	}
	if( t_now > t_sixteen && t_now < t_seventeen ){
		$('.rh-years_t').removeClass('hide');
	}
}
function hideYear(){
	$('.rh-years_t').addClass('hide');
	$('.rh-years').addClass('hide');
}
function czh_time(time){ 
		var t=2;//设定时间 
		var date = new Date(time);
		//var time = date.getTime();
		var y=date.getFullYear();
		var m=date.getMonth() + 1;
		var d=date.getDate();
		var h=date.getHours();
		var n=date.getMinutes();
		var s=date.getSeconds();
		//setInterval("showYear()",1000); //启动1秒定时 
		return str = y+"-"+m+"-"+d+" "+h+":"+n+":"+s;
		//alert(str);
} 