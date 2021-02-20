var cookiedata = document.cookie;

$(document).ready(function() {
	main_visual (); // visual
	story_slide(); // story
	popupzone(); // popupzone
	sns_share(); // sns_share
	news_slide(); // news
	board_tab (); //board_tab
	//popup_slide(); // popup	
});


 // 대표 비주얼
function main_visual (){
	$(".auto_btn .stop").click(function() { 
		 $(".slide_event").cycle('pause'); 
	});
	$(".auto_btn .play").click(function() { 
		 $(".slide_event").cycle('resume'); 
	});
		
	$(".slide_event").cycle({
		fx:      'fade',
		timeout:  4000,
		pager:   '#pointer',
		width: 0,
		//next:   '.next', 
		//prev:   '.prev' ,
	});		
}


// story
function story_slide(){
 	var total = $("#story_list li").size();
	
	$("#story_list .prev_btn").bind("click",function(){	
		$("#story_list ul li:last").prependTo("#story_list ul");
	});

	$("#story_list .next_btn").bind("click",function(){  		 
		$("#story_list ul li:first").appendTo("#story_list ul");
	});
}

// news
function news_slide(){
 	var total = $(".news_01 li").size();
	
	$(".news_01 .prev_btn").bind("click",function(){	 
  		$(".news_01 ul li:last").prependTo(".news_01 ul");
	});

	$(".news_01 .next_btn").bind("click",function(){  		 
		$(".news_01 ul li:first").appendTo(".news_01 ul");
	});
}

// sns_share
function sns_share(){
	var sns_ev = $(".sns_share");
		sns_ev.dt = $(".sns_share").find(">dt >a");
		sns_ev.dd = $(".sns_share").find("dd");
		
	sns_ev.dt.click(function(){
		$(this).parent().parent().find("dd").stop().fadeToggle(200);
	});	
}	

// popupzone
function popupzone(){   
	var h= $("#popupzone_list li").height(); 
	var timeout = false;
	var total, num, e, size, change_time=4000, speed=500; 
	num =1
	total = num * h;  
	size = $("#popupzone_list ul li").size();

	$("#popupzone .control_btn").removeClass("hide");
	$("#popupzone .btn-down, #popupzone .btn-up").addClass("check")	
	
	function move(){
		$("#popupzone_list ul").stop(true).animate({
			"top":"-="+total
		},speed,"easeOutQuint",function(){
			$("#popupzone_list ul li:first-child").clone().appendTo("#popupzone_list ul").end().remove();	
			$("#popupzone_list ul").css("top",0);		
		});  
	}
	
	function moveStart(){   
		if(	timeout == false && size > 1){ 
			timeout = setInterval(move, change_time); 
		}	 
	}
	
	function moveStop(){ 		  
		if(timeout != false && size > 1){  			 
			clearInterval(timeout);    
			timeout=false;
		} 
	}
 
	moveStart();
 
	$("#popupzone .btn-down").on("click",function(){ 	
		if(size > 1){	 
			$(this).removeClass("check");
			$("#popupzone_list ul").stop(true).animate({
				"top":"-="+total
			},speed,"easeOutQuint",function(){
				$("#popupzone_list ul li:first-child").clone().appendTo("#popupzone_list ul").end().remove();	
				$("#popupzone_list ul").css("top",0)
				$("#popupzone .btn-down").addClass("check");	
			}); 
		}
	});
	
	$("#popupzone .btn-up").on("click",function(){ 
		if(size > 1){ 
			if($(this).hasClass("check")){
				$(this).removeClass("check");
				$("#popupzone_list ul").css("top","-"+total+"px"); 
				$("#popupzone_list ul li:last-child").clone().prependTo("#popupzone_list ul").end().remove();  
				$("#popupzone_list ul").stop(true).animate({
					"top":"+="+total
				},speed,"easeOutQuint",function(){  
					$("#popupzone .btn-up").addClass("check");	
				}); 
			}
		}
	});

	$("#popupzone #popupzone_list, #popupzone .control_btn").hover(function(){  
		moveStop();
	},function(){
		if(!$("#popupzone").hasClass("stop")){		 	 
			moveStart();
		}
	}); 
 
	$("#popupzone a").on("focusin",function(){
		moveStop();
	});

	
	$("#popupzone .control_btn a").on("click",function(){ 
		return false;
	});
	
	$("#popupzone .btn-stop").on("click",function(){ 
		if(size > 1){ 
			$(this).hide();
			$("#popupzone").addClass("stop")
			$("#popupzone .btn-play").show();
		}	 
	});
	
	$("#popupzone .btn-play").on("click",function(){   
		$(this).hide(); 
		$("#popupzone").removeClass("stop")
		$("#popupzone .btn-stop").show();
	});
 
	//링크가 없을 경우 return false
	$("#popupzone #popupzone_list a").on("click",function(){
		if($(this).attr("href") == "#") return false;
	})
}


// board_tab				
function board_tab (){
	var board_tab = $(".board_tab");
		board_tab.li = board_tab.find(">li");
		board_tab.li.a = board_tab.li.find(">a");
		board_tab.li.text = board_tab.li.find(">.text");
		$(".board_tab > li:eq(0) > a").addClass("ov");
		$(".board_tab > li:eq(0) > .text").show();
		
	board_tab.li.a.click(function(e){
		e.preventDefault();
		board_tab.li.a.removeClass("ov");
		board_tab.li.text.hide();
		$(this).addClass("ov");
		$(this).next().show();
		return false;
	});	
}


/*********팝업관련 자바스크립트 소스****************/
function close_layer(num,todayChk){
	document.getElementById(num).style.display = 'none';
	//쿠키굽기
	if(todayChk == "Y"){
		setCookie(num, 'done' , 1); 
	}
}