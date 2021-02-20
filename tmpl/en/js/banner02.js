
$(document).ready(function(){
	qa_setting();
});
var design_qa;
function qa_setting(){
	//변수정의
	design_qa = $(".qa");	
	design_qa.dt = design_qa.find(" dt");
	design_qa.dt.a = design_qa.dt.find(">a");
	design_qa.dd = design_qa.find(" dd");
	design_qa.dd.cnt = design_qa.dd.size();
	design_qa.dd.on = design_qa.find(" dd.on");
	

	//초기 카운터(초기에 .on 가있는 dd를 오픈한다)
	var idx = design_qa.dd.index(design_qa.dd.on);		
	design_qa.save = idx;

	//dd 높이값저장
	for(var i=0; i<design_qa.dd.cnt; i++){
		var obj = design_qa.dd.eq(i);
		var h = Number(obj.height());
		var pt = Number(obj.css("padding-top").replace("px",""));
		var pb = Number(obj.css("padding-bottom").replace("px",""));

		h += pt + pb;

		obj.attr("h",h);
	}

	//모두숨김
	design_qa.dd.stop().animate(
		{"height":"0px"},
		1,
		function(){
			qa_show(idx);//해당카운터 오픈
		}
	);

	design_qa.dt.a.click(function(){
		var idx = design_qa.dt.a.index($(this));
		qa_show(idx);//해당카운터 오픈
	});
	
	$(".lbtn").hide();
	$(".rbtn").hide();
	
	$(".event_area").mouseenter(function(){
		//mouseover
		$(".lbtn").fadeIn(500);
		$(".rbtn").fadeIn(500);
	})
	//mouseout
	$(".event_area").mouseleave(function(){
		//mouseover
		$(".lbtn").fadeOut(500);
		$(".rbtn").fadeOut(500);
	});	
}
//qa open function
function qa_show(str){
	var idx = str;//카운터
	var old_obj = design_qa.dd.eq(design_qa.save);
	var obj = design_qa.dd.eq(idx);
	var h = obj.attr("h");

	if(obj.height() < 10){
		if(design_qa.save != idx){
			old_obj.stop().animate(
				{"height":"0px"},
				300
			);
		}
		//오픈 animate시작
		obj.stop().animate(
			{"height":h+"px"},
			300,
			function(){
				design_qa.save = idx;
			}
		);
	}
}



function banner_AC(str,str2,str3,str4,str5,str6,str7){
    var b_banner = $("."+str);
	b_banner.view = $("."+str4);
	b_banner.view.maxW = str5;
	b_banner.view.maxH = str6;
    b_banner.saveNum = 0;
    b_banner.speed = 500;
    b_banner.saveClick = "Y";	
    b_banner.lbtn = '<a href="#" class="lbtn"><img src="'+str2+'" alt="이전" /></a>';
    b_banner.rbtn = '<a href="#" class="rbtn"><img src="'+str3+'" alt="다음" /></a>';  
    b_banner.max_width = b_banner.width();
    b_banner.div = b_banner.find(">div");
    b_banner.div.ul = b_banner.div.find(">ul");
    b_banner.div.ul.max_width = 0;
    b_banner.div.ul.li = b_banner.div.ul.find(">li");
    b_banner.div.ul.li.max_height = b_banner.div.ul.li.height();
	b_banner.autoset = str7;
	b_banner.autoInterval = "";
	b_banner.autoSpeed = 5000;
	
	for(var i=0; i<b_banner.div.ul.li.size(); i++){
        var iw = b_banner.div.ul.li.eq(i).width();
         
        b_banner.div.ul.max_width += iw;
    }

    
	//view setting
	//제공하는 view box가 있어야 작동합니다.
	if(b_banner.view.size() != 0){
		if(str5.indexOf("%") != -1) str5 = str5;
		else str5 = str5 + "px";
		b_banner.view.css({"text-align":"center"}).empty();

		var imgs = b_banner.div.ul.li.eq(0).find(">a").attr("href");
		var alts = b_banner.div.ul.li.eq(0).find(">a>img").attr("alt");
		$('<a href="'+imgs+'" rel="pop_blind"><img src="'+imgs+'" alt="'+alts+'" /></a>').prependTo(b_banner.view).css({"width":"100%"});

		
		banner_viewbox(b_banner);//list클릭시		
	}


	banner_check(b_banner);
    $(window).resize(function(){
        banner_check(b_banner);
    });
}
function banner_viewbox(b_banner){	
	b_banner.div.ul.li.find(">a").bind("click",function(){
		var imgs = $(this).attr("href");
		var alts = $(this).find(">img").attr("alt");

		if(!imgs || imgs == "" || imgs == "#") return false; 

		$('<img src="'+imgs+'" alt="'+alts+'" />').prependTo(b_banner.view.empty()).css({"width":"100%","opacity":"0"}).animate({"opacity":1},300);
		banner_check(b_banner);

		return false;
	});
}
function banner_check(b_banner){
    b_banner.max_width = b_banner.width();
	//view setting
	if(b_banner.view.size() != 0){		
		if(b_banner.max_width > b_banner.view.maxW){
			b_banner.view.find(">img").css({"width":b_banner.view.maxW+"px"});
		} else {
			b_banner.view.find(">img").css({"width":"100%"});
		}
	}    
    if(b_banner.max_width < b_banner.div.ul.max_width){
        if(!b_banner.lbtn_ac){
            //총 너비값보다 배너의 길이가 크면 스크립트 셋팅
            b_banner.css({"position":"relative"});
            b_banner.div.css({"position":"relative","z-index":"0","overflow":"hidden","height":b_banner.div.ul.li.max_height+"px","margin":"0 0px"});
            //b_banner.div.ul.css({"position":"absolute","left":"0","top":"0","width":b_banner.div.ul.max_width+"px"});
			b_banner.div.ul.css({"position":"absolute","left":"0","top":"0","width":"100000px"});
            b_banner.div.ul.li.css("float","left");
             
            $(b_banner.lbtn).prependTo(b_banner);//이전버튼 생성적용
            $(b_banner.rbtn).appendTo(b_banner);//다음버튼 생성적용
 
            b_banner.lbtn_ac = b_banner.find(" .lbtn");//버튼적용
            b_banner.rbtn_ac = b_banner.find(" .rbtn");//버튼적용

            b_banner.lbtn_ac.css({"position":"absolute","display":"block","z-index":"1"});
            b_banner.rbtn_ac.css({"position":"absolute","display":"block","z-index":"1"});
 
            b_banner.lbtn_ac.click(function(){
                if(b_banner.saveClick == "Y"){
					clearTimeout(b_banner.autoInterval);
                    b_banner.saveClick = "N";				
                    var move_box = b_banner.find(">div>ul>li").eq(0);
                    var left_set = move_box.width() * -1;
                     
                    b_banner.div.ul.animate(
                        {left:left_set+"px"},
                        b_banner.speed,
                        function(){
                            move_box.appendTo(b_banner.div.ul);//복사후 ul의 마지막요소에 추가                            
                            b_banner.div.ul.css("left","0")//재설정
                            b_banner.saveClick = "Y";
							if(b_banner.autoset == "auto"){
								b_banner.autoInterval = setTimeout(function(){
									 b_banner.lbtn_ac.click();
								},b_banner.autoSpeed);
							}
                        }
                    );
                }
                return false;
            });
 
            b_banner.rbtn_ac.click(function(){
                if(b_banner.saveClick == "Y"){
					clearTimeout(b_banner.autoInterval);
                    b_banner.saveClick = "N";
                    var move_box = b_banner.find(">div>ul>li:last");
                    var left_set = move_box.width() * -1;
                     
                    move_box.prependTo(b_banner.div.ul);//복사후 ul의 첫요소에 추가
                    b_banner.div.ul.css("left",left_set+"px")//재설정
 
                    b_banner.div.ul.animate(
                        {left:"0px"},
                        b_banner.speed,
                        function(){
                            b_banner.saveClick = "Y";
                        }
                    );
                }
                return false;
            });



			if(b_banner.autoset == "auto"){
				b_banner.autoInterval = setTimeout(function(){
					 b_banner.lbtn_ac.click();
				},b_banner.autoSpeed);
			}
        }
    } else {
        banner_reset(b_banner);    
    }
}
 
function banner_reset(b_banner){	
    //초기화 리사이즈시 사용
    b_banner.removeAttr("style");
    b_banner.div.removeAttr("style");
    b_banner.div.ul.removeAttr("style");
    b_banner.div.ul.li.removeAttr("style");
    if(b_banner.lbtn_ac){
        b_banner.lbtn_ac.remove();
        b_banner.rbtn_ac.remove();
        b_banner.lbtn_ac = "";
        b_banner.rlbtn_ac = "";
    }
    b_banner.saveNum = 0;
}



