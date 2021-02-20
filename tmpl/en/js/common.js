$(document).ready(function() {
	find_menu (); // find_menu
	total_search (); // total_search 
	rwd_etc (); // rwd_etc	
	mobile_gnb(); // Mobile GNB Menu
	campus_site (); // campus_site
	qa_js(); // 발자취
	student(); //12기
	
	$("#aside .btn").click(function(){
		$(this).prev().stop().slideToggle(200);
		$(this).toggleClass("open");
	});
	
	$(window).resize(function(){	
		if($("#rwd_header").is(":hidden")){
			$("#wrap>*").css("left","0px");	
			$(".shadow_bg").fadeOut(200);
		}
		$(".find_menu").stop().hide();
		$(".search_total").stop().hide();
		$(".shadow_bg").stop().hide();
		$(".search_btn").removeClass("ov");
		$("#campus_site").stop().hide();
		$(".campus_btn").removeClass("open");
	});				
});

function windowPop(slink,width,height){
	var swidth = width;
	var sheight = height;
	
	window.open(slink.href,'','width='+swidth+',height='+sheight+'');
}

// find_menu
function find_menu (){
	$(".find_m_btn").click(function(){
		$(".search_total").hide();
		$(this)	.next().stop().fadeIn(200);
		$(".shadow_bg").stop().fadeIn(200);
	});
	
	$(".find_menu > .close_btn > a").click(function(){
		$(this)	.parent().parent().stop().fadeOut(200);
		$(".shadow_bg").stop().fadeOut(200);
		$(this)	.parent().parent().prev().focus();
		$(".search_total").stop().fadeOut(200);
	});
}


// total_search
function total_search (){
	$(".search_btn").click(function(){
		$(".find_menu").hide();
		$(this).addClass("ov");
		$(this)	.next().stop().fadeIn(200);
		$(".shadow_bg").stop().fadeIn(200);
	});
	
	$(".search_total > .close_btn > a").click(function(){
		$(this)	.parent().parent().stop().fadeOut(200);
		$(".shadow_bg").stop().fadeOut(200);
		$(this)	.parent().parent().prev().removeClass("ov").focus();
	});
}


// rwd_etc
function rwd_etc (){
	$(".etc_btn > a").click(function(){
		$(".find_menu").show();
		$(".search_total").show();
		$(".shadow_bg").stop().fadeIn(200);
	});	
}


// Mobile GNB Menu
$(function() {
	mobileMenu();
	function mobileMenu(){
		$(".depth1 h2").click(function(e){
			e.preventDefault();
			$(".depth1 h2").not(this).removeClass("on").next().slideUp();
			$(this).toggleClass("on").next().slideToggle();
			$(".depth2 h3").not(this).next().slideUp();
		});
		$(".depth2 h3").click(function(e){
			//e.preventDefault();
			if($(this).next().length != 0){
				e.preventDefault();
				$(".depth2 h3").not(this).removeClass("on").next().slideUp();
				$(this).toggleClass("on").next().slideToggle();	
			}
		});
	};
});

function mobile_gnb(a,b,c){
	$('#rwd_header .gnb_btn').click(function(){
		var wrapHeight = $('#wrap').outerHeight();  
		$('.rwd_gnb').css('height',wrapHeight);
		$('#wrap>*').animate({'left':200},300);
		$(".gnb_shadow").fadeIn(200);
		return false;
	});
	
	$("#rwd_header .gnb_shadow").click(function(){
		$("#wrap>*").animate({"left":0},300,function(){
				$(".depth1").find(".on").removeClass("on");
				$(".depth2, .depth3").hide();
				$(".depth1>li").eq(a-1).find("h3").addClass("on").next().show().children("li").eq(b-1).find(".depth3").show().children("li").eq(c-1).addClass("on");
			});
		$(".gnb_shadow").delay(400).fadeOut(200);
		return false;
	});
}

// campus_site
function campus_site (){
	$(".campus_btn").click(function(){
		$("#campus_site").stop().slideToggle(0);
		$(this).toggleClass("open");
	});
	
	$("#campus_site > .close_btn > a").click(function(){
		$("#campus_site").stop().hide();
		$(".campus_btn").removeClass("open").focus();
	});
}


// relate site
function gosite(selectId){
	if(document.getElementById(selectId).value==""){
		alert("이동할 사이트를 선택해주세요.");
		return false;
	}
	//window.location.href=document.getElementById(selectId).value;
	$("#"+selectId).next().find('a').attr("href",document.getElementById(selectId).value);
	return true;
}

// qa_js
/*function qa_js(){
	$(".answer").hide();
	$(".qa_close").hide();
	$(".qa_dl").children("dt").each(function(index){
		$(this).click(function(){
			$("dt").removeClass("on");
			$(".answer").hide();
			$(this).addClass("on");
			$(".answer").eq(index).slideToggle(100);
		});
	});

}*/



function qa_js(){
	$(".undergraduate dd:not(:first)").css("display","none"); // 첫번째 꺼만 빼고 숨기기
	$(".undergraduate dt:first").addClass("on"); // 첫번째 꺼만 클래스 추가
	$(".undergraduate dt a").click(function(){ // 클릭 이벤트
		if(
			!$(this).parent().next(".undergraduate dd").is(':visible')){ // 만약 dd가 닫혀잇으면
			$(".undergraduate dd").slideUp("slow"); // 모든 dd 업 닫기
			$(".undergraduate dt").removeClass("on"); // 모든 클래스 삭제
			$(this).parent().next(".undergraduate dd").slideDown("slow"); // 선택된 클릭의 dd 열기
			$(this).parent(".undergraduate dt").addClass("on"); // 선택된 클릭에 클래스 추가
		}else if(
			$(this).parent(".undergraduate dt").hasClass("on")){ // 만약 선택된거가 닫혀 잇지 않고 on 클래스가 잇다면
			$(".undergraduate dd").not($(this).parent().next(".undergraduate dd")).slideUp("slow"); // dd 업 닫기
			$(".undergraduate dt").removeClass("on"); // 모든 클래스 삭제
		}
	});
};


// student
function student(){
	$(".st_over").hide();
	$(".st_box").mouseenter(function(){
		$(this).find(".st_over").show();
		$(this).find("ul li").addClass("on");
	});
	$(".st_box").mouseleave(function(){
		$(this).find(".st_over").hide();
		$(this).find("ul li").removeClass("on");
	});
}