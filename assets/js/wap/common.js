document.write('<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20003027/10086787.js"></script>');
mui("aside").on("tap",".mui-icon-closeempty",function(){
	mui('.mui-off-canvas-wrap').offCanvas('show');
});
function openChat(){
	doyoo.util.openChat("g=10075613");
}

//mui("#refreshContainer").on('tap', '.ulDiv', function (event) {
			//this.click();
//});


mui("body").on("tap",".mui-pull-right",function(){
	mui('.mui-off-canvas-wrap').offCanvas('show');
});

mui('body').on('tap','a',function(){
	
	window.top.location.href=this.href;
});


mui('body').on('tap','.mui-tab-consult',function(){	
	openChat();
});
