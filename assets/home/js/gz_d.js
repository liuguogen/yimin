				$(function(){
					$.post("/plus/pro_gzid.php",{status:"load"},function(d){
						var jsono=eval('('+d+')');
						for(var i=0;i<jsono.length;i++){
							$(".romid").each(function(index,el){
								if(jsono[i]['aid'] == $(el).val()){
									$(el).siblings(".h_pro").find(".pro_gz_id").html(jsono[i]['gz_id']);
								}
							});
						}
					});
				});
				function pro_gzid(e){
					var pro_gid = $(e).siblings(".romid").val();
					$(e).find(".pro_gz_id").text(parseInt($(e).find(".pro_gz_id").text())+1);
					$.get('/plus/pro_gzid.php',{gid:pro_gid},function(d){
					});
				}