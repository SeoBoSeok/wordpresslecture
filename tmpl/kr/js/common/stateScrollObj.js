function stateScrollObj(param,obj,btn,interval,speed,viewSize,moreSize,dir,data,auto,hover,method,op1) {
	var param = $(param);
	var btn = $(btn);
	var obj = param.find(obj);
	var indicator = param.find(".control .indicator a");
	
	var elem = 0;
	var objYScale = obj.eq(elem).outerHeight(true)+moreSize;
	var objXScale = obj.eq(elem).outerWidth(true)+moreSize;
	var str;
	var returnNodes;

	var playdir = data;
	var data = data; // 0:default, 1:prev

	var play = btn.find("[data-control=play]");
	var stop = btn.find("[data-control=stop]");
	
	if(auto == true) play.hide(); else stop.show(); 
	if(op1 == true) obj.not(elem).css({opacity:0}).eq(elem).css({opacity:1});
	if(obj.length <= 1) {
		btn.hide();
	}
	var totalNum = obj.size();
	if(totalNum < "10"){
		_totalNum = "0"+totalNum;
	}else{
		_totalNum = totalNum;
	}
	//console.log(">>> totalNum : "+totalNum);
	param.find(".pageCount .bold").html("01<i>/</i>");
	param.find(".pageCount .totalNum").html(_totalNum);
	obj.eq(0).addClass("on");

	function movement(){
		
		obj.removeClass("on");
		switch(data){
			case 0:
				if(dir == "x"){
					obj.parent().stop(true,true).animate({left:-objXScale},{duration:speed,easing:method,complete:
						function(){
							obj.parent().css("left",0);
							obj.parent().append(obj.eq(elem).detach());
							if(elem == obj.size()-1){
								elem = 0;
							}else{
								elem++;
							}
							objXScale = obj.eq(elem).outerWidth(true)+moreSize;
							//console.log(">>> 1111");
							if(Number(elem+1) < "10"){
								var countNum = "0"+Number(elem+1);
							}else{
								var countNum = Number(elem+1);
							}
							obj.removeClass("on");
							obj.eq(elem).addClass("on");
							indicator.removeClass("on");
							indicator.eq(elem).addClass("on");
							param.find(".pageCount .bold").html(countNum+"<i>/</i>");
						}
					});
				}else{ 
					obj.parent().stop(true,true).animate({top:-objYScale},{duration:speed,easing:method,complete:
						function(){
							obj.parent().css("top",0);
							obj.parent().append(obj.eq(elem).detach());
							if(elem == obj.size()-1){
								elem = 0;
							}else{
								elem++;
							}
							objYScale = obj.eq(elem).outerHeight(true)+moreSize;
						}
					});
				}

				if(op1 == true){
					obj.eq(elem).stop(true,true).animate({opacity:0},{duration:speed,easing:method});
					obj.eq(elem).next().stop(true,true).animate({opacity:1},{duration:speed,easing:method});
					//obj.eq(elem).stop(true,true).fadeOut(speed);
					//obj.eq(elem).next().stop(true,true).fadeIn(speed);
					//obj.eq(elem).css({"z-index":"0"});
					//obj.eq(elem).next().css({"z-index":"1"});
				}
			break;
			
			case 1:
				if(dir == "x"){
					if(elem == 0){
						elem = obj.size()-1;
					}else{
						elem--;
					}
					objXScale = obj.eq(elem).outerWidth()+moreSize;
					obj.parent().css("left",-objXScale);
					obj.parent().prepend(obj.eq(elem).detach());
					obj.parent().stop(true,false).animate({left:0},{duration:speed,easing:method});
							//console.log(">>> 4444");
							if(Number(elem+1) < "10"){
								var countNum = "0"+Number(elem+1);
							}else{
								var countNum = Number(elem+1);
							}
							obj.removeClass("on");
							obj.eq(elem).addClass("on");
							indicator.removeClass("on");
							indicator.eq(elem).addClass("on");
							param.find(".pageCount .bold").html(countNum+"<i>/</i>");
				}else{
					if(elem == 0){
						elem = obj.size()-1;
					}else{
						elem--;
					}
					objYScale = obj.eq(elem).outerHeight()+moreSize;
					obj.parent().css("top",-objYScale);
					obj.parent().prepend(obj.eq(elem).detach());
					obj.parent().stop(true,false).animate({top:0},{duration:speed,easing:method});
				}

				if(op1 == true){
					obj.eq(elem).stop(true,false).animate({opacity:1},{duration:speed,easing:method});
					obj.eq(elem).next().stop(true,false).animate({opacity:0},{duration:speed,easing:method});
					//obj.eq(elem).stop(true,false).fadeIn(speed);
					//obj.eq(elem).next().stop(true,false).fadeOut(speed);
					//obj.eq(elem).css({"z-index":"1"});
					//obj.eq(elem).next().css({"z-index":"0"});
				}
			break;
			
			default: alert("warning, 0:default, 1:prev, data:"+data);
		}
	}

	function rotate(){
		clearInterval(returnNodes);
		returnNodes = setInterval(function(){
			movement();
		},interval);
	}

	if(obj.size() <= viewSize) return false;

	obj.find("a").on("focusin",function(){
		clearInterval(returnNodes);
	});

	btn.find("[data-control=play]").on("click",function(event){
		data = playdir;
		play.hide();
		stop.show();
		rotate();
		return false;
	});

	btn.find("[data-control=stop]").on("click",function(event){
		clearInterval(returnNodes);
		param.find(":animated").stop();
		stop.hide();
		play.show();
		return false;
	});

	btn.find("[data-control=prev]").on("click",function(event){
		if(obj.parent().find(":animated").size()) return false;
		clearInterval(returnNodes);
		data = 1;
		movement();
		// add
		stop.hide();
		play.show();
		return false;
	});

	btn.find("[data-control=next]").on("click",function(event){
		if(obj.parent().find(":animated").size()) return false;
		clearInterval(returnNodes);
		data = 0;
		movement();
		// add
		stop.hide();
		play.show();
		return false;
	});

	if(hover == true){
		obj.hover(function(){
			clearInterval(returnNodes);
		},function(){
			rotate();
		});
	}

	if(auto == true) rotate();

	// 터치 이벤트  플리킹 구현
	var xStartpoint,xEndpoint;

	function docSTART(event){
		if(event.originalEvent.changedTouches != undefined){
			xStartpoint = Math.floor(event.originalEvent.changedTouches[0].clientX - $(this).offset().left);
		}
	}

	function docEND(event){
		if(event.originalEvent.changedTouches != undefined){
			xEndpoint = Math.floor(event.originalEvent.changedTouches[0].clientX - $(this).offset().left) - xStartpoint;
		
			if(xEndpoint < -50){ 
				data = 0;
			}else if(xEndpoint > 50){
				data = 1;
			}else{
				return true;
			} 

			clearInterval(returnNodes);

			stop.hide();
			play.show();

			movement();

			event.preventDefault();
		}
	}

	param.on("touchstart",docSTART);
	param.on("touchend",docEND);
}


