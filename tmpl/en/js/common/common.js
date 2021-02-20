//gnb 시작
$(function(){	
	$("a").click(function(e){
		var href = $(this).attr("href");
		if(href == "#none" || href == "#" || href == ""){
			e.preventDefault();
		}
	});
	$(window).load(function(){
	});
	$(window).ready(function(){
    });
	$(window).load(function(){
		thumbResize();
    });
	$(window).resize(function(){
		thumbResize();
	});
	$(window).scroll(function(){
	});
	
	//클릭오픈 시작
	$(".clickOpen .sev_Open").on("click",function(){
		$(".clickOpen li").removeClass("on");
		$("body").addClass("gray");
		$(this).parent().addClass("on");
	});
	$(".clickOpen div > a").on("click",function(){
		$("body").removeClass("gray");
		$(this).parent().parent().removeClass("on");
	});	
	//클릭오픈 끝
	

	//dropDown 시작
	$(".dropDown a").on("mouseenter focusin",function(){
		$(".dropDown").removeClass("on");
		$(this).parents(".dropDown").addClass("on");
	});
	$(".dropDown > ul").on("mouseleave",function(){
		$(this).parents(".dropDown").removeClass("on");
	});
	$("a, button, input").focus(function(){
		var _boxName = $(this).parents(".dropDown").attr("class");
		//console.log(">>>>>> _boxName:"+_boxName);		
		if(_boxName == "undefined" || _boxName == "" || _boxName == null){
			//console.log(">>>>>> 없다");
			$(".dropDown").removeClass("on");
		}
	});
	//dropDown 끝


	//pullUp 시작
	$(".pullUp a").on("mouseenter focusin",function(){
		$(".pullUp").removeClass("on");
		$(this).parents(".pullUp").addClass("on");
	});
	$(".pullUp > ul").on("mouseleave",function(){
		$(this).parents(".pullUp").removeClass("on");
	});
	$("a, button, input").focus(function(){
		var _boxName = $(this).parents(".pullUp").attr("class");
	 
		if(_boxName == "undefined" || _boxName == "" || _boxName == null){
			$(".pullUp").removeClass("on");
		}
	});
	//pullUp 끝

});


//이미지 리사이즈 시작
function thumbResize(){
	$(".thumbResize_A img").each(function() {        
		$(this).removeAttr("style");
		var thumbHeight = $(this).parent().height();
		var imgHeight = $(this).height();
		
		if(thumbHeight > imgHeight){
			$(this).css({"width":"auto","height":"100%"});
		}else{
			$(this).css({"width":"100%","height":"auto"});
		}
    });
}
//이미지 리사이즈 끝



//탭

function targetOpener(btn,option){
    var btn = $(btn);

    $(option.obj).hide().first().show();

    btn.bind("click",function(event){
        var t = $(this);
        href = t.attr("href").substr(1);


        if(t.children().is('img')){
            var btnIMG = btn.find('img');
            var thisIMG = t.children();
            var thisSRC = thisIMG.attr('src');
            thisSRC = thisSRC.substr(thisSRC.lastIndexOf('_')).split(".");

            if(thisSRC[0] != "_ov"){
                $.each(btnIMG,function(){
                    $(this).attr("src",$(this).attr('src').replace('_ov.'+thisSRC[1],'.'+thisSRC[1]));
                });
                thisIMG.attr("src",thisIMG.attr('src').replace('.'+thisSRC[1],'_ov.'+thisSRC[1]));
            }
        }

        if(option.lv == 0){
            if($("[id="+href+"]").css("display") == "none"){
                $("[id="+href+"]").show().css({'visibility':'visible'});
                t.addClass("ov");
            }else{
                $("[id="+href+"]").hide().css({'visibility':'hidden'});
                t.removeClass("ov");
            }
        }

        if(option.lv == 1){
            $(option.obj).hide().css({'visibility':'hidden'});
            $("[id="+href+"]").show().css({'visibility':'visible'});
            btn.removeClass("ov");
            t.addClass("ov");
        }
        event.preventDefault();
    });
}


function tabObj(_target,_tabBtn,_tabCon,_active){
	_tabBtn.removeClass("on");
	_tabCon.removeClass("on");
	if(_active == undefined){
		_tabBtn.eq(0).addClass("on");
		_tabCon.eq(0).addClass("on");
	}
	_tabBtn.on("click",function(){
		var _clickNum = $(this).index()+1;
		_tabBtn.removeClass("on");
		_tabCon.removeClass("on");
		$(this).addClass("on");
		_target.find(".tab_con.n"+_clickNum).addClass("on");
	});
}
//탭 끝


//슬라이드 시작
function touchSlider(id,num,autoplay,slide,speed){
	var $touchSlider = $(id);
	var $autoplay = autoplay;
	var $slidNum = num;
	var $slide = slide;
	var $speed = speed;
	if($slidNum==null || $slidNum=="auto" || $slidNum==0){
		var boxWidth = $touchSlider.find(".sliderBox").width();
		var conWidth = $touchSlider.find(".sliderBox > ul > li").width();
		$slidNum = Number(boxWidth/conWidth).toFixed();
		//console.log("$slidNum:"+$slidNum);
	}
	if($autoplay==null || $autoplay == true){
		$touchSlider.find(".btn_play").hide();
		$touchSlider.find(".btn_stop").show();
	}else{
		$touchSlider.find(".btn_play").show();
		$touchSlider.find(".btn_stop").hide();
	}
	if ($touchSlider.find('.sliderBox > ul > li').length > 1) {
		$touchSlider.find("> .sliderBox").touchSlider({
			view:$slidNum,
			speed : $speed,
			transition : false,
			autoplay : {
				enable : $autoplay,
				pauseHover : false,
				addHoverTarget : "", // 다른 오버영역 추가 ex) ".someBtn, .someContainer"
				interval : 7500,
			},
			initComplete : function (e) {
				var _this = this;
				var $this = $(this);
				var paging = $touchSlider.find(".paging");
				
				this._btn_play = null;
				this._btn_stop = null;	
 
				paging.html("");
				$this.find(" > ul > li").each(function (i, el) {
					var num = (i+1) / _this._view;
					if((i+1) % _this._view == 0) {
						paging.append('<button type="button" class="btn_page">page' + num + '</button>');
					}
				});
				paging.find(".btn_page").bind("click", function (e) {
					_this.go_page($(this).index());
					$touchSlider.find(".btn_play").show();
					$touchSlider.find(".btn_stop").hide();
					_this.autoStop();
				});				
				
				$touchSlider.find(".btn_play").bind("click", function() {
					$touchSlider.find(".btn_play").hide();
					$touchSlider.find(".btn_stop").show();
					_this.autoPlay();
				});
				$touchSlider.find(".btn_stop").bind("click", function() {
					$touchSlider.find(".btn_play").show();
					$touchSlider.find(".btn_stop").hide();
					_this.autoStop();
				});
				$this.find(" > ul > li a").on("focus",function(e){
					e.preventDefault();
					if(Number($slidNum) > 1){
						var _thisNumb = Math.floor(Number($(this).parents("li").index()/$slidNum));
					}else{
						var _thisNumb = $(this).parents("li").index();
					}
					$touchSlider.find(".btn_play").show();
					$touchSlider.find(".btn_stop").hide();
					_this.autoStop();
					_this.go_page(_thisNumb);
					
					$touchSlider.find("> .sliderBox > ul").css({"position":"fixed"});
					setTimeout(function(){
						$touchSlider.find("> .sliderBox > ul").css({"position":""});
					},50);
					
				});
				$this.find(" > ul > li a").on("focusout",function(){
					$touchSlider.find(".btn_play").hide();
					$touchSlider.find(".btn_stop").show();
					_this.autoPlay();
				});
			},
			counter : function (e) {
				$touchSlider.find(".paging .btn_page").removeClass("on").eq(e.current-1).addClass("on");
				$touchSlider.find(".pageCount").html("<span class='num'>"+e.current + "</span>/<span class='totalNum'>" + e.total+"</sapn>");				
				if($slide==false){
					$touchSlider.find(".sliderBox > ul > li").stop();
					$touchSlider.find(".sliderBox > ul > li").css({"opacity":"0","z-index":"1","left":"0"});
					$touchSlider.find(".sliderBox > ul > li.on").removeClass("on").css({"z-index":"2","opacity":"1","left":"0"});
					$touchSlider.find(".sliderBox > ul > li").eq(e.current-1).addClass("on").css({"z-index":"3","opacity":"0","left":"0"}).animate({"opacity":"1"},1000);
				}
			},
			btn_prev : $touchSlider.find(".btn_prev"),
			btn_next : $touchSlider.find(".btn_next")
		});
	}
}
//슬라이드 끝