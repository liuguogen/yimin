	$(function(){
								$.extend({    
									myTime: { 
										/*** 当前时间戳* @return <int>unix时间戳(秒) */      
										CurTime: function(){         
										return Date.parse(new Date())/1000;      
										},       
										/*** 日期 转换为 Unix时间戳 * @param <string> 2014-01-01 20:20:20 日期格式* @return <int>    unix时间戳(秒)*/      
										DateToUnix: function(string) {         
										var f = string.split(' ', 2);         
										var d = (f[0] ? f[0] : '').split('-', 3);         
										var t = (f[1] ? f[1] : '').split(':', 3);         
										return (new Date(             parseInt(d[0], 10) || null,(parseInt(d[1], 10) || 1) - 1, parseInt(d[2], 10) || null,parseInt(t[0], 10) || null,parseInt(t[1], 10) || null,parseInt(t[2], 10) || null)).getTime() / 1000;}, 
										/*** 时间戳转换日期* @param <int> unixTime  待时间戳(秒)* @param <bool> isFull  返回完整时间(Y-m-d 或者 Y-m-d H:i:s)* @param <int> timeZone 时区*/      
										UnixToDate: function(unixTime, isFull, timeZone) {         
											if (typeof (timeZone) == 'number')         {           
											unixTime = parseInt(unixTime) + parseInt(timeZone) * 60 * 60;         
											}         
											var time = new Date(unixTime * 1000);         
											var ymdhis = ""; 
											ymdhis += time.getUTCFullYear() + "-";
											ymdhis += (time.getUTCMonth()+1) + "-";
											ymdhis += time.getUTCDate();         
											if (isFull === true){
											ymdhis += " " + time.getUTCHours() + ":";           
											ymdhis += time.getUTCMinutes() + ":";           
											ymdhis += time.getUTCSeconds();         
											}         
											return ymdhis;       
										}     
									}   
								}); 

								 var ul = $("#pro_end ul");
								var lis = [];

								lis = $("#pro_end ul li");
								var ux = [];
								//循环提取时间，并调用排序方法进行排序
								for (var i=0; i<lis.length; i++){
									var tmp = {};
									tmp.dom = lis.eq(i);
									tmp.date = new Date(lis.eq(i).find(".act_date").eq(0).val()+" 00:00:00".replace(/-/g,'/'));
									ux.push(tmp);
								}
								//数组排序，支持年的比较
								ux.sort(function(a,b){
								   var myDate = new Date();
								   var year = myDate.getYear();
								   if(a.date.getYear < year && b.date.getYear == year){
									  return true;
								   }
								   return b.date - a.date;
								});
								//移除原先顺序错乱的li内容
								$('.ul_sort ul li').remove();
								//重新填写排序好的内容
								for (var i=0; i<ux.length; i++){
								   ul.append(ux[i].dom);
								}
								
								
								var data  = [];
								for(var i=0;i<$(".act34").length;i++){
									 data[i]   = $(".act34:eq("+i+")").text();
								}
								$.each(data,function(key,val){	
								  if($.trim(val).indexOf("结束")!= -1){
									    $(".act34:eq("+key+")").parent("li").hide();
										var atxt = $(".act34:eq("+key+")").siblings("a").text();
										var actid = $(".act34:eq("+key+")").parent("li").siblings(".act_id:eq("+key+")").val();
										var actdate = $(".act34:eq("+key+")").siblings(".act_date").val();
										$("#pro_end ul").append("<li class='clearfix past' data-num='"+actid+"'><input type='hidden' value='"+actdate+"' class='act_date'/><a href='/activity/"+actid+".html'>"+atxt+"</a> <span  class='act34'>"+val+"</span>");
								  }
								});
									
						});