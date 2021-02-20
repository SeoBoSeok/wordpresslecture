$(document).ready(function() {
	find_menu (); // find_menu
	total_search (); // total_search 
	rwd_etc (); // rwd_etc	
	mobile_gnb(); // Mobile GNB Menu
	campus_site (); // campus_site
	qa_js(); // 발자취
	student(); //12기
	symbol_list(); //상징물
		
	$("#aside .btn").click(function(){
		$(this).prev().stop().slideToggle(200);
		$(this).toggleClass("open");
		if($(this).hasClass("open")){
			$(this).parent("#aside").find(".link_m a").eq(0).focus();
			
		}else{
			$(this).find("#footer a").eq(0).focus();
		}
	});
	
	$(".org_more .btn").click(function(){
		$(this).parent().next(".org_box").slideToggle(200);
		$(this).parent(".org_more").toggleClass("open");
	});
	
	$(window).resize(function(){	
//		if($("#rwd_header").is(":hidden")){
//			$("#wrap>*").css("left","0px");	
//			$(".shadow_bg").fadeOut(200);
//		}
//		$(".find_menu").stop().hide();
//		$(".search_total").stop().hide();
//		$(".shadow_bg").stop().hide();
		$(".search_btn").removeClass("ov");
//		$("#campus_site").stop().hide();
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
//		$(this)	.parent().parent().prev().removeClass("ov").focus();
	});
}


// rwd_etc
function rwd_etc (){
	$(".etc_btn > a").click(function(){
		$(".find_menu").show();
		$(".search_total").show();
		$(".shadow_bg").stop().fadeIn(200);
		$("#open_popup_wrap").hide();
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
function qa_js(){
	$(".answer").hide();
	$(".qa_close").hide();
	$(".qa_dl").children("dt").each(function(index){
		$(this).click(function(){
			if ($(this) .hasClass('on')) { return };
			$("dt").removeClass("on");
			$(".answer").hide();
			$(this).addClass("on");
			$(".qa_close").show();
			$(".answer").eq(index).slideToggle(100);
		});
	});
	$(".qa_dl dt").first().addClass("on");
	$(".answer").first().show();
}

// student
function student(){
	$(".st_box a").mouseenter(function(){
		$(".st_over").hide();
		$(".st_box").find("ul li").removeClass("on");
		$(this).find(".st_over").show();
		$(this).find("ul li").addClass("on");
	});
	$(".st_box a").focus(function(){
		$(".st_over").hide();
		$(".st_box").find("ul li").removeClass("on");
		$(this).find(".st_over").show();
		$(this).find("ul li").addClass("on");
	});
	$(".st_box a").mouseleave(function(){
		$(this).find(".st_over").hide();
		$(this).find("ul li").removeClass("on");
	});
	$(".st_box a").focusout(function(){
		$(this).find(".st_over").hide();
		$(this).find("ul li").removeClass("on");
	});
}

// 상징물
function symbol_list(){
	$(".box_close").click(function(){
		$(this).parent().prev().find(".btn_view").focus();
	});
	$(".btn_view").click(function(){
		$(this).parent(".symbol_list").next(".symbol_box").children("a").eq(0).focus();
	});
}

//페이지 인쇄
function printContent(getUrl, site_dvs_cd, menu_dvs_cd) 
{
	window.open("/_module/print/printContent.php?link_url="+getUrl,"print","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=770,height=700");
}
