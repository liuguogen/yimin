function romchange(){
						$.get("/plus/romchange.php",{"romid_one":$(".romid").eq(0).val(),"romid_two":$(".romid").eq(1).val(),"romid_three":$(".romid").eq(2).val()},function(d){
										var json = eval('('+d+')');
										if(d !==""){
											for(var i=0;i<3;i++){
											$(".rom_name").eq(i).html("<b><a class='rom_a' href='' target='_blank'>"+json[i].title+"</a></b>");
											$(".rom_img").eq(i).attr("src",json[i].litpic);
											$(".rom_bud").eq(i).text(json[i].budget);
											$(".rom_desc").eq(i).html("<a class='rom_a' href='' target='_blank'>"+json[i].description.substring(0,42)+"……"+"</a>");
											$(".pro_gz_id").eq(i).text(json[i].gz_id);
											$(".romid").eq(i).val(json[i].id);
											$(".qw-project .item").eq(i).find("a").attr("href",json[i].redirecturl);
											}
										}
							});
						
					}