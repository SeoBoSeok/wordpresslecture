
/**
최초작성자:	정진환(지오넷 eGov사업팀)
최종수정자: 문혜영(지오넷 eBiz사업1팀)
최종수정일: 2014. 04. 07
**/

function leftmenu(){
	var param = $("#lm");
	var hide_obj = param.find(".link_2th+ul");
	var show_obj = param.find(".link_2th_ov+ul");

	hide_obj.hide()
	show_obj.show();

	var btn = param.find(">li>a");
	var elem = $(".link_2th_ov").next().index();
	
	btn.click(function(){
		var t = $(this);
		if(children.attr("target") == "_blank"){
			children.click();
			return false;
		}else if(t.next().is($("div"))){
			location.href = children.attr("href");
			return false;
		}
	});
}


