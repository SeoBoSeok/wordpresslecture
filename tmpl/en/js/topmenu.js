// 풀다운
function gnb(param,ban,obj,btn,wrap,elem,scale,dur,meth){
	var param = $(param);
	var ban = param.find(ban);
	var obj = param.find(obj);
	var btn = param.find(btn);
	var wrap = param.find(wrap); 
	var elem = elem-1; // jsp 메뉴 코드가 1부터 시작하기 때문에
	var old_h = 85;
	var n = elem;

	///////////////////////////////////////////////
	var openHeight = [460,560,420,520,420,420];
	///////////////////////////////////////////////

	ban.hide();
	obj.hide();

	function _open(){
		btn.not(elem).removeClass("current").eq(elem).addClass("current");
		ban.not(elem).hide().eq(elem).show();
		obj.not(elem).hide().eq(elem).show();
		wrap.stop(true,false).animate({"height":openHeight[elem]},dur,meth);
	}

	function _close(){
		btn.removeClass("current");
		obj.children().find("a").removeClass("on");
		obj.children().find("ul").removeClass("on");
		wrap.stop(true,false).animate({"height":old_h},dur,meth,function(){ obj.hide(); });
	}

	// 테블릿 터치 헨들링
	btn.bind("touchstart click",function(event){
		elem = $(this).parent().index();
		_open();
		//event.preventDefault();
		event.stopPropagation();
		//return false;
	});
	
	btn.bind("click",function(e){
		if (Modernizr.touch) {
			e.preventDefault();
			e.stopPropagation();
		}
	});

	btn.bind("mouseenter focusin",function(event){
		elem = $(this).parent().index();
		_open();
		event.stopPropagation();
	});

	param.bind("mouseleave",function(){
		_close();
	});

	obj.last().find(">li>a").last().bind("focusout",function(){
		_close();
	});
	
	obj.children().find("ul>li>a:last").bind("focusout",function(){
		$(this).parents("ul").removeClass("on");
	});	

	obj.children().bind("mouseenter",function(event){
		obj.children().find("a").removeClass("on");
		obj.children().find("ul").removeClass("on");
		$(this).children().addClass("on");
		event.stopPropagation();
	}).find("a").bind("focusin",function(event){
		obj.children().find("a").removeClass("on");
		$(this).next("ul").addClass("on");			
		$(this).parents("ul").prev().addClass("on");
		event.stopPropagation();
	});
}