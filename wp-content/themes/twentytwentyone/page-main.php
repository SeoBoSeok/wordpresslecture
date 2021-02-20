<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no,email=no,address=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densitydpi=medium-dpi" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"> -->
<title> 충남대학교</title>
<meta name="author" content="충남대학교" />
<!--<meta name="keyword" content="충남대학교" /> -->
<!--<meta http-equiv="Pragma" content="no-cache" />-->
<!--<meta http-equiv="Cache-control" content="no-cache" />-->
<!-- 필수스크립트시작 -->
<script src="tmpl/kr/js/jquery-1.9.0.min.js"></script>
<script src="tmpl/kr/js/jquery.easing.1.3.js"></script>
<!-- 2018 js 추가 시작 -->
<script src="tmpl/kr/js/common/jquery-ui.min.js"></script>
<script src="tmpl/kr/js/common/jquery.touchSlider.js" ></script>
<script src="tmpl/kr/js/common.js"></script>
<script src="tmpl/kr/js/common/common.js"></script>
<script src="tmpl/kr/js/common/stateScrollObj.js"></script>
<script src="tmpl/kr/js/common/common-popup.js"></script>
<!-- 2018 js 추가 끝 -->
<script src="tmpl/kr/js/modernizr.custom.min.js" ></script>
<script src="tmpl/kr/js/topmenu.js"></script>
<script src="tmpl/kr/js/jquery.cycle.all.js"></script>
<!--<script src="/tmpl/kr/js/popupzone.js"></script> -->
<script src="tmpl/kr/js/banner02.js"></script>
<script src="tmpl/kr/js/jquery.lnb.js"></script>
<script src="js/kr/jquery.cookie.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;language=ko&amp;region=kr"></script>


<!-- 필수스크립트끝 -->
<link rel="stylesheet" href="css/kr/board.css" />
<link rel="stylesheet" href="css/kr/popup.css" />
<link rel="stylesheet" href="css/kr/common.css" />
<link rel="stylesheet" href="css/kr/contents.css" />
<link rel="stylesheet" href="css/kr/layout.css" />
<link rel="stylesheet" href="css/kr/layout_rwd.css" />
<!-- <link rel="stylesheet" href="/css/kr/main.css" /> -->
<!-- 2018 css 추가 시작 -->
<link rel="stylesheet" href="css/common/common.css" />
<link rel="stylesheet" href="css/kr/main2018.css" />
<!-- <link rel="stylesheet" href="/css/kr/main.css" /> 캐시미삭제로인한 css새로고침적용이 안되는이유로 파일명을 교체-->
<!-- 2018 css 추가 끝 -->

<!-- <link rel="stylesheet" href="/css/kr/main.css" type="text/css" /> -->
<!--
<link href="BOARD_DOC_DIRskin/common/css/board.css" rel="stylesheet" />
<link href="BOARD_SKIN_DIR/css/board.css" rel="stylesheet" />
-->
<!--<script type="text/javascript" src="/_module/ckeditor/ckeditor.js"></script>-->

<!--[if lt IE 9]>
    <script type="text/javascript">
		document.createElement("header"); document.createElement("nav"); document.createElement("section"); document.createElement("article"); document.createElement("aside"); document.createElement("footer");
	</script>
	<script src="/tmpl/kr/js/respond.min.js"></script>
<![endif]-->

<script>
<!--

	// Facebook
	function facebookOpen() {

		var titl = "";
		titl = titl.replace('"', '&quot;');
		titl = titl.replace('"', '&quot;');
		titl = titl.replace('&gt;','>');
		titl = encodeURIComponent("충남대학교 > ")+encodeURIComponent(titl);

		var link = encodeURIComponent("http://plus.cnu.ac.kr/html/kr/");
		var url = "http://www.facebook.com/sharer.php?u=" + link + "&amp;t=" + titl;

		snswindowOpen (url, 900, 450, 'no');

	}

	// Twitter
	function twitterOpen() {

		var titl = "";
		titl = titl.replace('"', '&quot;');
		titl = titl.replace('"', '&quot;');
		titl = titl.replace('&gt;','>');
		titl = encodeURIComponent("충남대학교 ")+encodeURIComponent(titl);

		var link = encodeURIComponent("http://plus.cnu.ac.kr/html/kr/" );
		var url = "http://twitter.com/share?text=" + titl + "&amp;url=" + link;

		snswindowOpen (url, 800, 400, 'yes');

	}

	function snswindowOpen () {

		var nUrl; var nWidth; var nHeight; var nLeft; var nTop; var nScroll;
		nUrl = arguments[0];
		nWidth = arguments[1];
		nHeight = arguments[2];
		nScroll = (arguments.length > 3 ? arguments[3] : "no");
		nLeft = (arguments.length > 4 ? arguments[4] : (screen.width/2 - nWidth/2));
		nTop = (arguments.length > 5 ? arguments[5] : (screen.height/2 - nHeight/2));

		winopen=window.open(nUrl, 'SNS', "left="+nLeft+",top="+nTop+",width="+nWidth+",height="+nHeight+",scrollbars="+nScroll+",toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no");

	}

	function OnChangeTotalSearchSelect()
	{
		var search_key = document.totalSearchFrom.search_key.value;

		if(search_key == "cms_member")
		{
			document.totalSearchFrom.action="/html/kr/sub01/sub01_010602.html";
			document.totalSearchFrom.target="";
		}
		else// if(search_key == "netpia")
		{	//document.totalSearchFrom.action="/html/kr/";
			document.totalSearchFrom.action="http://search.cnu.ac.kr/RSA/front/Search.jsp"  ;
			document.totalSearchFrom.target="_blank";
		}
	}
	function searchEngine()
	{
		document.totalSearchFrom.action="http://search.cnu.ac.kr/RSA/front/Search.jsp"

		if(document.totalSearchFrom.sval.value == "")
		{
			alert("검색어를 입력하세요");
			document.totalSearchFrom.sval.focus();
			return false;
		}
		else
		{
			//레피아의 통합검색 파라메터를 세팅함//
			var search_key = document.totalSearchFrom.search_key.value;
			if(search_key != "cms_member")
			{
				document.totalSearchFrom.menu.value = search_key;
				document.totalSearchFrom.qt.value = document.totalSearchFrom.sval.value;

			}
		}
	}
//-->
</script>
</head>
<body>
			<!-- skip :s -->
        <div class="skipnavi">
			<a href="#body_layout">본문 바로가기</a>
            <a href="#gnbwrap">주요메뉴 바로가기</a>
            <!--<dd><a href="#footer">하단메뉴 바로가기</a></dd>-->
        </div>
        <!-- //skip :e -->
		<!-- 전체영역시작 -->
	
		<script src="tmpl/kr/js/main.js"></script>
	<!-- slide popup :s -->
	<script src="tmpl/kr/js/top-popup.js"></script>
    <div id="open_popup_wrap">
        <div class="open_popup">
			<div class="open_popup_box">
				<div class="popup_box">
					<ul id="slide_pop_list">
													<li><a href="_prog/_board/index%EF%B9%96code=COVID19&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html" target='_blank' id="bn1"> <img src="Upl/kr/_popup/kr_popup_0_1603936802.jpg" alt="코로나19 대응 관련 안내" /></a></li>

										</ul>
				</div>
				<div class="control">
					<a href="#slide_pop_list" title="팝업존안에서 이전으로" class="prev_btn"><span class="hidden">팝업존안에서 이전으로</span></a>
					<a href="#slide_pop_list" title="팝업존안에서 다음으로" class="next_btn"><span class="hidden">팝업존안에서 다음으로</span></a>
				</div>
				<span class="pop_close">
					<form name="notice_form2">
						<span class="today_close"><input type="checkbox" name="chkbox2" id="chkbox2" /><label for="chkbox2" style="cursor:pointer;">오늘하루 열지 않기</label></span><a href="#chkbox2" class="close_btn"><span class="hidden">팝업존 닫기</span></a>
					</form>
				</span>
			</div>
	    </div>
    </div>
    <!-- slide popup :e -->
		
	<div id="wrap">
	<!-- header :S -->
	<header id="header">
		<div class="al_box">
							<a href="#slide_pop_list" class="pop_btn">알림열기</a>
				<a href="#slide_pop_list" class="pop_btn_x">알림닫기</a>
				<script type="text/javascript">
					popup_slide();
				</script>
						<h1><a href="index.html"><img src="images/kr/common/logo.jpg" alt="CNU 충남대학교" /></a></h1>
			<ul class="top_util">
			<!--
				<li><a href="https://edms.cnu.ac.kr/index_pki.jsp" target="_blank" title="새창">전자결재</a></li>
				-->
				<li><a href="http://cnu.korus.ac.kr/poc/index.jsp" target="_blank" title="새창">코러스시스템</a></li>
				<li><a href="http://cuvic.cnu.ac.kr/" target="_blank" title="새창">웹메일</a></li>
				<li><a href="http://portal.cnu.ac.kr/" target="_blank" title="새창">CNU포털</a></li>
				<li><a href="../en/index.html" target="_blank" title="새창으로 ENGLISH 홈페이지로 이동합니다.">ENGLISH</a></li>
				<li><a href="guide/guide_0801.html">사이트맵</a></li>
									<li><a href="guide/guide_0802.html">로그인</a></li>
				


			</ul>

			<div class="gm_search">
				<form name="totalSearchFrom" method="post" action="" target="_blank" onSubmit="return searchEngine()">
					<input type="hidden" name="menu" >
					<input type="hidden" name="qt" >
						<fieldset>
							<legend>통합검색</legend>
							<label for="_search_key" class="hidden">통합검색 입력</label>
							<select title="검색항목 선택" name="search_key" id="_search_key" OnChange="OnChangeTotalSearchSelect();">
								<!-- <option value="netpia" selected="selected"> 웹통합검색 </option> -->
								<option value="통합검색">통합검색</option>
								<option value="메뉴검색">메뉴검색</option>
								<option value="웹페이지">웹페이지</option>
								<option value="CNU뉴스">CNU뉴스</option>
								<option value="게시판">게시판</option>
								<option value="첨부문서">첨부문서</option>
								<option value="이미지">이미지</option>
								<option value="충대미디어">충대미디어</option>
								<option value="교내사이트">교내사이트</option>
								<option value="대학/대학원">대학/대학원</option>
								<option value="cms_member"> 교직원검색 </option>
							</select>
							<input type="text" name="sval" id="_sval" title="검색어를 입력하세요." placeholder="검색어를 입력하세요." />
							<input type="submit" value="검색" />
						</fieldset>
					</form>
				</div>

		</div>
		<nav id="gnb">
			

<div id="gnbwrap">
    <div id="animate">
        <div class="animate_line"></div>
            <ul id="tm">
<li class='th1'><a href='#' class='th1_lnk'>CNU</a><div class='special_m'>
<p>CNU 100년,<br>위대한 미래를 향한 <em>새로운 출발</em><strong>CNU</strong></p>
<span><a href='sub01/sub01_010702.html' target='_blank' title='새창'>홍보브로슈어</a><a href='sub01/sub01_010801.html' target='_blank' title='새창'>사이버투어</a></span>
</div>
<ul id='summery1' class='th2'>
<li><a href="sub01/sub01_010101.html" >이념비전</a><ul>
<li><a href='sub01/sub01_010101.html'>교육이념</a></li>
<li><a href='_prog/history_trace/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=010102.html'>발자취</a></li>
<li><a href='sub01/sub01_010103.html'>60년사</a></li>
</ul>
</li>
<li><a href="sub01/sub01_0102.html" >연혁</a></li>
<li><a href="sub01/sub01_010301.html" >총장실</a><ul>
<li><a href='sub01/sub01_010301.html'>인사말</a></li>
<li><a href='sub01/sub01_010302.html'>총장프로필</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010303_2020&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010303.html'>열린총장실</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010304_2016&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010304.html'>동정</a></li>
<li><a href='_prog/history_president/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=010305.html'>역대총장</a></li>
</ul>
</li>
<li><a href="sub01/sub01_010401.html" >학교현황</a><ul>
<li><a href='sub01/sub01_010401.html'>교육연구현황</a></li>
</ul>
</li>
<li><a href="sub01/sub01_010501.html" >학교상징</a><ul>
<li><a href='sub01/sub01_010501.html'>교기·교시·교가</a></li>
<li><a href='sub01/sub01_010502.html'>상징물</a></li>
<li><a href='sub01/sub01_010503.html'>UI소개</a></li>
<li><a href='sub01/sub01_01050504.html'>CNU Calendar</a></li>
</ul>
</li>
<li><a href="sub01/sub01_010601.html" >대학조직도</a><ul>
<li><a href='sub01/sub01_010601.html'>조직도</a></li>
<li><a href='sub01/sub01_010402.html'>보직자명단</a></li>
<li><a href='sub01/sub01_010603.html'>교학부총장</a></li>
<li><a href='sub01/sub01_010604.html'>연구산학부총장</a></li>
<li><a href='sub01/sub01_010602.html'>교직원검색</a></li>
</ul>
</li>
<li><a href="sub01/sub01_010701.html" >CNU홍보</a><ul>
<li><a href='sub01/sub01_010701.html'>홍보동영상</a></li>
<li><a href='sub01/sub01_010702.html'>홍보브로슈어</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010802&amp;site_dvs_cd=kr&amp;menu_dvs_cd=01071101.html'>CNU 갤러리</a></li>
<li><a href='http://webzine.cnuwebzine.co.kr' target='_blank' title='새창' >CNU Webzine</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010703.html'>CNU Style</a></li>
<li><a href='sub01/sub01_01070401.html'>홍보대사</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=newsletter&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010706&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010706.html'>뉴스레터</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010709&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010709.html'>Korea NU10 MAGAZINE</a></li>
</ul>
</li>
<li><a href="sub01/sub01_010801.html" >캠퍼스안내</a><ul>
<li><a href='sub01/sub01_010801.html'>사이버투어</a></li>
<li><a href='_prog/campus_tour/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=010805.html'>캠퍼스투어신청</a></li>
<li><a href='sub01/sub01_010804.html'>캠퍼스맵</a></li>
<li><a href='sub01/sub01_01080301.html'>찾아오시는길</a></li>
</ul>
</li>
</ul>
</li>
<li class='th1'><a href='#' class='th1_lnk'>대학/대학원</a><div class='special_m'>
<p>CNU 100년,<br>위대한 미래를 향한 <em>새로운 출발</em><strong>대학/대학원</strong></p>
<span><a href='sub01/sub01_010701.html' target='_blank' title='새창'>홍보동영상</a><a href='sub01/sub01_010801.html' target='_blank' title='새창'>사이버투어</a></span>
</div>
<ul id='summery2' class='th2'>
<li><a href="sub02/sub02_020118.html" >대학</a><ul>
<li><a href='sub02/sub02_020118.html'>단과대학소개</a></li>
<li><a href='http://human.cnu.ac.kr/' target='_blank' title='새창' >인문대학</a></li>
<li><a href='http://socialscience.cnu.ac.kr/' target='_blank' title='새창' >사회과학대학</a></li>
<li><a href='http://cns.cnu.ac.kr/' target='_blank' title='새창' >자연과학대학</a></li>
<li><a href='http://cem.cnu.ac.kr/' target='_blank' title='새창' >경상대학</a></li>
<li><a href='http://eng.cnu.ac.kr/' target='_blank' title='새창' >공과대학</a></li>
<li><a href='http://cals.cnu.ac.kr/' target='_blank' title='새창' >농업생명과학대학</a></li>
<li><a href='http://pharm.cnu.ac.kr/' target='_blank' title='새창' >약학대학</a></li>
<li><a href='http://medicine.cnu.ac.kr/' target='_blank' title='새창' >의과대학</a></li>
<li><a href='http://homeco.cnu.ac.kr/' target='_blank' title='새창' >생활과학대학</a></li>
<li><a href='http://art.cnu.ac.kr/' target='_blank' title='새창' >예술대학</a></li>
<li><a href='http://vetmed.cnu.ac.kr' target='_blank' title='새창' >수의과대학</a></li>
<li><a href='http://edu.cnu.ac.kr' target='_blank' title='새창' >사범대학</a></li>
<li><a href='http://nursing.cnu.ac.kr' target='_blank' title='새창' >간호대학</a></li>
<li><a href='http://cbb.cnu.ac.kr/' target='_blank' title='새창' >생명시스템과학대학</a></li>
<li><a href='http://free.cnu.ac.kr/free/index.do' target='_blank' title='새창' >자유전공학부</a></li>
<li><a href='http://soins.cnu.ac.kr' target='_blank' title='새창' >국가안보융합학부</a></li>
</ul>
</li>
<li><a href="sub02/sub02_020201.html" >대학원</a><ul>
<li><a href='sub02/sub02_020201.html'>대학원 소개</a></li>
<li><a href='http://grad.cnu.ac.kr/' target='_blank' title='새창' >대학원 홈페이지</a></li>
</ul>
</li>
<li><a href="sub02/sub02_020406.html" >전문대학원</a><ul>
<li><a href='sub02/sub02_020406.html'>전문대학원소개</a></li>
<li><a href='http://law.cnu.ac.kr/' target='_blank' title='새창' >법학전문대학원</a></li>
<li><a href='http://medicine.cnu.ac.kr/' target='_blank' title='새창' >의학전문대학원</a></li>
<li><a href='http://grast.cnu.ac.kr/' target='_blank' title='새창' >분석과학기술대학원</a></li>
<li><a href='http://gest.cnu.ac.kr/' target='_blank' title='새창' >에너지과학기술대학원</a></li>
<li><a href='http://gsdd.cnu.ac.kr/' target='_blank' title='새창' >신약전문대학원</a></li>
</ul>
</li>
<li><a href="sub02/sub02_020308.html" >특수대학원</a><ul>
<li><a href='sub02/sub02_020308.html'>특수대학원소개</a></li>
<li><a href='http://mba.cnu.ac.kr' target='_blank' title='새창' >경영대학원</a></li>
<li><a href='http://egc.cnu.ac.kr/egc/index.do' target='_blank' title='새창' >교육대학원</a></li>
<li><a href='http://gspa.cnu.ac.kr/' target='_blank' title='새창' >행정대학원</a></li>
<li><a href='http://gsph.cnu.ac.kr' target='_blank' title='새창' >보건대학원</a></li>
<li><a href='http://ind.cnu.ac.kr/' target='_blank' title='새창' >산업대학원</a></li>
<li><a href='http://homepage.cnu.ac.kr/cnuip/index.do' target='_blank' title='새창' >특허법무대학원</a></li>
<li><a href='http://peace.cnu.ac.kr' target='_blank' title='새창' >평화안보대학원</a></li>
<li><a href='http://gnpp.cnu.ac.kr/' target='_blank' title='새창' >국가정책대학원</a></li>
<li><a href='http://smart.cnu.ac.kr/smart/index.do' target='_blank' title='새창' >스마트농업대학원</a></li>
</ul>
</li>
</ul>
</li>
<li class='th1'><a href='#' class='th1_lnk'>입학/취업</a><div class='special_m'>
<p>CNU 100년,<br>위대한 미래를 향한 <em>새로운 출발</em><strong>입학/취업</strong></p>
<span><a href='http://ipsi.cnu.ac.kr/' target='_blank' title='새창'>입학 홈페이지</a><a href='_prog/campus_tour/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=010705.html' target='_blank' title='새창'>캠퍼스투어 신청</a></span>
</div>
<ul id='summery3' class='th2'>
<li><a href="http://ipsi.cnu.ac.kr" target='_blank' title='새창열림'>입학정보</a></li>
<li><a href="http://job.cnu.ac.kr/" target='_blank' title='새창열림'>취업(인재개발원)</a></li>
<li><a href="http://withu.cnu.ac.kr" target='_blank' title='새창열림'>CNU With U   (학생경력통합 관리시스템)</a></li>
</ul>
</li>
<li class='th1'><a href='#' class='th1_lnk'>연구/산학/창업</a><div class='special_m'>
<p>CNU 100년,<br>위대한 미래를 향한 <em>새로운 출발</em><strong>연구/산학/창업</strong></p>
<span><a href='_prog/_board/index%EF%B9%96code=sub06_060604&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060604.html' target='_blank' title='새창'>연구비집행</a><a href='_prog/_board/index%EF%B9%96code=sub06_060305&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060305.html' target='_blank' title='새창'>정책연구과제</a></span>
</div>
<ul id='summery4' class='th2'>
<li><a href="http://iuc.cnu.ac.kr/" target='_blank' title='새창열림'>산학협력단</a></li>
<li><a href="http://connect.cnu.ac.kr/startup" target='_blank' title='새창열림'>창업지원단</a></li>
<li><a href="http://linc.cnu.ac.kr" target='_blank' title='새창열림'>LINC+사업단</a></li>
<li><a href="http://bkplus21.cnu.ac.kr" target='_blank' title='새창열림'>BK21플러스사업</a></li>
<li><a href="http://cnuss.cnu.ac.kr/smain.html" target='_blank' title='새창열림'>스포츠융복합창업육성사업단</a></li>
<li><a href="http://irb.cnu.ac.kr/html/kr/index.html" target='_blank' title='새창열림'>생명윤리위원회</a></li>
<li><a href="http://forb.cnu.ac.kr/" target='_blank' title='새창열림'>산학종합정보시스템</a></li>
<li><a href="http://connect.cnu.ac.kr" target='_blank' title='새창열림'>원스톱토탈케어시스템</a></li>
<li><a href="http://www.scival.com/" target='_blank' title='새창열림'>연구성과분석솔루션(SciVal)</a></li>
<li><a href="http://cnulab.cnu.ac.kr/" target='_blank' title='새창열림'>연구실안전관리통합시스템</a></li>
<li><a href="http://cnucrf.re.kr" target='_blank' title='새창열림'>공동실험실습관</a></li>
</ul>
</li>
<li class='th1'><a href='#' class='th1_lnk'>대학생활</a><div class='special_m'>
<p>CNU 100년,<br>위대한 미래를 향한 <em>새로운 출발</em><strong>대학생활</strong></p>
<span><a href='sub05/sub05_050102.html' target='_blank' title='새창'>증명서발급</a><a href='sub01/sub01_010801.html' target='_blank' title='새창'>사이버투어</a></span>
</div>
<ul id='summery5' class='th2'>
<li><a href="sub05/sub05_050101.html" >학생민원서비스</a><ul>
<li><a href='sub05/sub05_050101.html'>민원서비스소개</a></li>
<li><a href='sub05/sub05_050102.html'>증명서발급</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub05_050103&amp;site_dvs_cd=kr&amp;menu_dvs_cd=050103.html'>자료실(학생,동문)</a></li>
<li><a href='sub05/sub05_050104.html'>자주찾는행정부서</a></li>
<li><a href='http://cnuis.cnu.ac.kr/SchUrgNotiQ.jsp' target='_blank' title='새창' >재학생 등록금고지서</a></li>
<li><a href='http://cnuis.cnu.ac.kr/EntUrgNotiQ.jsp' target='_blank' title='새창' >신입생 등록금고지서</a></li>
<li><a href='http://cnuis.cnu.ac.kr/EntLoginPpaid.jsp' target='_blank' title='새창' >신입생 등록금 분납신청</a></li>
<li><a href='http://cnuis.cnu.ac.kr/EntUrgNotiQSp.jsp' target='_blank' title='새창' >특별학기 수강료 고지서 출력</a></li>
</ul>
</li>
<li><a href="sub05/sub05_05020101.html" >학사안내</a><ul>
<li><a href='sub05/sub05_050202.html'>학사업무안내</a></li>
<li><a href='_prog/academic_calendar/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=05020101.html'>학사일정</a></li>
<li><a href='sub05/sub05_050203.html'>학사행정</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub05_050204&amp;site_dvs_cd=kr&amp;menu_dvs_cd=050204.html'>학사상담</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub05_050205&amp;site_dvs_cd=kr&amp;menu_dvs_cd=050205.html'>온라인FAQ</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=affairs_020405&amp;site_dvs_cd=hub&amp;menu_dvs_cd=020405.html' target='_blank' title='새창' >한 눈에 보는 학사정보</a></li>
</ul>
</li>
<li><a href="sub05/sub05_050401.html" >학생생활서비스</a><ul>
<li><a href='sub05/sub05_050401.html'>학생증발급안내</a></li>
<li><a href='sub05/sub05_05040201.html'>주차안내</a></li>
<li><a href='sub05/sub05_050407.html'>교내현수막관리</a></li>
<li><a href='sub05/sub05_050403.html'>학교셔틀버스</a></li>
<li><a href='sub05/sub05_050404.html'>기타 서비스안내</a></li>
<li><a href='http://counselling.cnu.ac.kr/index.do' target='_blank' title='새창' >학생상담</a></li>
<li><a href='http://job.cnu.ac.kr/' target='_blank' title='새창' >취업정보</a></li>
</ul>
</li>
<li><a href="sub05/sub05_05050101.html" >교내복지안내</a><ul>
<li><a href='sub05/sub05_05050101.html'>편의시설안내</a></li>
<li><a href='http://gymn.cnu.ac.kr/icons/app/cms/?html=/home/int2_3.html&amp;shell=/index.shell:406' target='_blank' title='새창' >시설이용안내</a></li>
<li><a href='_prog/_meeting_room2/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=050503.html'>영탑홀이용안내</a></li>
<li><a href='sub05/sub05_050504.html'>병원진료비감면안내</a></li>
<li><a href='sub05/sub05_050505.html'>교직원병원서비스</a></li>
<li><a href='http://cnuis.cnu.ac.kr/jsp/etc/weekMenuFrame.jsp' target='_blank' title='새창' >금주의식단</a></li>
<li><a href='http://www.cnucoop.co.kr/' target='_blank' title='새창' >소비자생활협동조합</a></li>
<li><a href='sub05/sub05_050508.html'>배상책임보험 청구안내</a></li>
</ul>
</li>
<li><a href="sub05/sub05_050701.html" >예비군정보</a><ul>
<li><a href='sub05/sub05_050701.html'>예비군연대소개</a></li>
<li><a href='sub05/sub05_050702.html'>교육훈련시간</a></li>
<li><a href='Upl/kr/20200818_2.hwp' target='_blank' title='새창' >대학(원)별 훈련일정</a></li>
<li><a href='Upl/kr/20180709.hwp' target='_blank' title='새창' >동원훈련일정</a></li>
<li><a href='sub05/sub05_050703.html'>대원신고절차</a></li>
<li><a href='sub05/sub05_050704.html'>직장민방위</a></li>
<li><a href='http://www.mma.go.kr/' target='_blank' title='새창' >병무안내</a></li>
<li><a href='http://helpcall.mnd.mil.kr' target='_blank' title='새창' >국방헬프콜</a></li>
<li><a href='sub05/sub05_050710.html'>휴일&middot;전국단위 예비군훈련 제도</a></li>
</ul>
</li>
<li><a  onclick="openwin1('view',this.href,1024,768,1);return false;"  href="_prog/_board/index%EF%B9%96code=gaffair_060405&amp;site_dvs_cd=hub&amp;menu_dvs_cd=060405.html" target='_blank' title='새창열림' class="">친절불친절신고센터</a></li>
<li><a href="http://e-learn.cnu.ac.kr" target='_blank' title='새창열림'>대학이러닝지원센터</a></li>
<li><a href="http://cnuwifi.cnu.ac.kr" target='_blank' title='새창열림'>CNU WiFi 서비스</a></li>
<li><a href="sub05/sub05_051101.html" >해외파견프로그램 모아 보기</a><ul>
<li><a href='sub05/sub05_051102.html'>학위과정</a></li>
<li><a href='sub05/sub05_051101.html'>인턴쉽 과정</a></li>
</ul>
</li>
</ul>
</li>
<li class='th1'><a href='#' class='th1_lnk'>대학정보</a><div class='special_m'>
<p>CNU 100년,<br>위대한 미래를 향한 <em>새로운 출발</em><strong>대학정보</strong></p>
<span><a href='_prog/_board/index%EF%B9%96code=sub06_060301&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060301.html' target='_blank' title='새창'>입법예고</a><a href='_prog/rule/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=0605.html' target='_blank' title='새창'>학칙규정</a></span>
</div>
<ul id='summery6' class='th2'>
<li><a href="sub06/sub06_06010101.html" >정보공개</a><ul>
<li><a href='sub06/sub06_06010101.html'>정보공개제도안내</a></li>
<li><a href='_prog/preopen/index%EF%B9%96site_dvs_cd=&amp;menu_dvs_cd=060102.html'>사전정보공표</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060103&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060103.html'>정보목록</a></li>
<li><a href='http://open.go.kr' target='_blank' title='새창' >정보공개청구</a></li>
</ul>
</li>
<li><a href="sub06/sub06_060201.html" >행정기관</a><ul>
<li><a href='sub06/sub06_060201.html'>행정기관소개</a></li>
<li><a href='../hub/main.html#1' target='_blank' title='새창' >교무과</a></li>
<li><a href='http://eduinno.cnu.ac.kr' target='_blank' title='새창' >교육혁신센터</a></li>
<li><a href='../hub/main.html#2' target='_blank' title='새창' >학사지원과</a></li>
<li><a href='../hub/main.html#3' target='_blank' title='새창' >학생과</a></li>
<li><a href='http://job.cnu.ac.kr/' target='_blank' title='새창' >인재개발원</a></li>
<li><a href='../hub/main.html#4' target='_blank' title='새창' >기획평가과</a></li>
<li><a href='../hub/main.html#5' target='_blank' title='새창' >대외협력팀</a></li>
<li><a href='../hub/main.html#10' target='_blank' title='새창' >정보분석센터</a></li>
<li><a href='http://cnuscc.cnu.ac.kr/' target='_blank' title='새창' >사회공헌센터</a></li>
<li><a href='http://orc.cnu.ac.kr/orc/index.do' target='_blank' title='새창' >지역협력본부</a></li>
<li><a href='../hub/main.html#6' target='_blank' title='새창' >총무과</a></li>
<li><a href='../hub/main.html#7' target='_blank' title='새창' >재무과</a></li>
<li><a href='../hub/main.html#8' target='_blank' title='새창' >시설과</a></li>
</ul>
</li>
<li><a href="_prog/_board/index%EF%B9%96code=sub06_060301&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060301.html" >정책정보</a><ul>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060301&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060301.html'>입법예고</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060303&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060303.html'>주간업무추진계획</a></li>
<li><a href='sub06/sub06_060306.html'>정책실명제</a></li>
</ul>
</li>
<li><a href="_prog/_board/index%EF%B9%96code=sub06_060401&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060401.html" >행정정보</a><ul>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060401&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060401.html'>입찰공고</a></li>
<li><a href='http://www.academyinfo.go.kr/pubinfo/pubinfo0020/list.do?schlId=0000029' target='_blank' title='새창' >대학정보공시</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060403&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060403.html'>업무메뉴얼</a></li>
</ul>
</li>
<li><a href="_prog/rule/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=06050101&amp;gubun=1.html" >학칙규정</a><ul>
<li><a href='_prog/rule/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=06050101&amp;gubun=1.html'>학칙규정</a></li>
</ul>
</li>
<li><a href="_prog/_board/index%EF%B9%96code=sub06_060601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060601.html" >청렴행정</a><ul>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=06060101.html'>반부패&middot;청렴정책</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060606&amp;site_dvs_cd=kr&amp;menu_dvs_cd=06060201.html'>청렴정보공개</a></li>
<li><a href='sub06/sub06_06060301.html'>청렴위반신고</a></li>
<li><a href='#'>청탁금지법</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060610&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060610.html'>클린신고</a></li>
</ul>
</li>
<li><a href="sub06/sub06_0608.html" >공공데이터</a></li>
<li><a href="_prog/_meeting_room/index%EF%B9%96code=sub06_0609&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0609&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0609&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0609&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0609.html" >회의실예약</a></li>
</ul>
</li>
<li class='th1'><a href='#' class='th1_lnk'>백마광장</a><div class='special_m'>
<p>CNU 100년,<br>위대한 미래를 향한 <em>새로운 출발</em><strong>백마광장</strong></p>
<span><a href='sub01/sub01_010702.html' target='_blank' title='새창'>홍보브로셔</a><a href='sub01/sub01_010801.html' target='_blank' title='새창'>사이버투어</a></span>
</div>
<ul id='summery7' class='th2'>
<li><a href="_prog/_board/index%EF%B9%96code=COVID19&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html" >코로나19 대응 안내</a><ul>
<li><a href='_prog/_board/index%EF%B9%96code=COVID19&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html'>코로나19 대응 안내</a></li>
</ul>
</li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_0701&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0701.html" >새소식</a></li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_0702&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0702.html" >학사정보</a></li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html" >CNU뉴스</a></li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_0704&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0704.html" >교육정보</a></li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_0709&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0709.html" >사업단 창업ㆍ교육</a></li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_0705&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0705.html" >채용/초빙</a></li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_070601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070601.html" >교직원커뮤니티</a><ul>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070601.html'>공지사항</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070602&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070602.html'>경조사</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070603&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070603.html'>교직원자료실</a></li>
<li><a href='../hub/gaffair/gaffair_060301.html' target='_blank' title='새창' >교직원복지안내</a></li>
<li><a href='http://chungil.cnu.ac.kr/' target='_blank' title='새창' >직원협의회</a></li>
</ul>
</li>
<li><a href="sub07/sub07_0707.html" >교내현수막관리</a></li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_0710&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0710.html" >CNU FORUM</a></li>
<li><a href="_prog/_board/index%EF%B9%96code=sub07_070801&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070801.html" >백마게시판</a><ul>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070801&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070801.html'>대학문화마당</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070802&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070802.html'>CNU장터</a></li>
<li><a href='_prog/lostandfound/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=07080301.html'>분실물광장</a></li>
<li><a href='_prog/recruit/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=07080401.html'>구인/구직</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070806&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070806.html'>거주정보</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070809&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070807.html'>학교에바란다</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070808&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070808.html'>스터디 및 공모전</a></li>
</ul>
</li>
</ul>
</li>
        </ul>
        <div class="slogan-box">
            <img src="images/kr/main2/cnu_slogan_main.png" alt="cnu 100년, 위대한 미래를 향한 새로운 출발">
        </div>
    </div>
</div>

		</nav>
		<script>
		var param = "#gnbwrap";
		var ban = ".special_m";
		var obj = ".th2";
		var btn = ".th1>a";
		var wrap = "#animate";
		var elem = 01; // th1 메뉴코드, index로 사용
		var scale = 1000; // 입력한 해상도 이하애서 실행 안함
		var dur = 500; // 애니메이션 진행 속도
		var meth = "easeOutExpo"; // 애니메이션 진행 타입
		var mno = "";
		gnb(param,ban,obj,btn,wrap,elem,scale,dur,meth);
		</script>
		<!-- rwd_header :S -->
		<div id="rwd_header">
			<div class="gnb_btn"><a href="#rwd_gnb"><span class="hidden">네비게이션메뉴</span></a></div>
			<nav id="rwd_gnb" class="rwd_gnb">
				

<ul class="depth1">
<li><h2><a href='sub01/sub01_010101.html' class='th1_lnk'>CNU</a></h2><ul class='depth2'>
<li><h3><a href="sub01/sub01_010101.html" >이념비전</a></h3><ul class='depth3'>
<li><a href='sub01/sub01_010101.html'>교육이념</a></li>
<li><a href='_prog/history_trace/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=010102.html'>발자취</a></li>
<li><a href='sub01/sub01_010103.html'>60년사</a></li>
</ul>
</li>
<li><h3><a href="sub01/sub01_0102.html" >연혁</a></h3></li>
<li><h3><a href="sub01/sub01_010301.html" >총장실</a></h3><ul class='depth3'>
<li><a href='sub01/sub01_010301.html'>인사말</a></li>
<li><a href='sub01/sub01_010302.html'>총장프로필</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010303_2020&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010303.html'>열린총장실</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010304_2016&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010304.html'>동정</a></li>
<li><a href='_prog/history_president/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=010305.html'>역대총장</a></li>
</ul>
</li>
<li><h3><a href="sub01/sub01_010401.html" >학교현황</a></h3><ul class='depth3'>
<li><a href='sub01/sub01_010401.html'>교육연구현황</a></li>
</ul>
</li>
<li><h3><a href="sub01/sub01_010501.html" >학교상징</a></h3><ul class='depth3'>
<li><a href='sub01/sub01_010501.html'>교기·교시·교가</a></li>
<li><a href='sub01/sub01_010502.html'>상징물</a></li>
<li><a href='sub01/sub01_010503.html'>UI소개</a></li>
<li><a href='sub01/sub01_01050504.html'>CNU Calendar</a></li>
</ul>
</li>
<li><h3><a href="sub01/sub01_010601.html" >대학조직도</a></h3><ul class='depth3'>
<li><a href='sub01/sub01_010601.html'>조직도</a></li>
<li><a href='sub01/sub01_010402.html'>보직자명단</a></li>
<li><a href='sub01/sub01_010603.html'>교학부총장</a></li>
<li><a href='sub01/sub01_010604.html'>연구산학부총장</a></li>
<li><a href='sub01/sub01_010602.html'>교직원검색</a></li>
</ul>
</li>
<li><h3><a href="sub01/sub01_010701.html" >CNU홍보</a></h3><ul class='depth3'>
<li><a href='sub01/sub01_010701.html'>홍보동영상</a></li>
<li><a href='sub01/sub01_010702.html'>홍보브로슈어</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010802&amp;site_dvs_cd=kr&amp;menu_dvs_cd=01071101.html'>CNU 갤러리</a></li>
<li><a href='http://webzine.cnuwebzine.co.kr'>CNU Webzine</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010703.html'>CNU Style</a></li>
<li><a href='sub01/sub01_01070401.html'>홍보대사</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=newsletter&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010706&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010706.html'>뉴스레터</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub01_010709&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010709.html'>Korea NU10 MAGAZINE</a></li>
</ul>
</li>
<li><h3><a href="sub01/sub01_010801.html" >캠퍼스안내</a></h3><ul class='depth3'>
<li><a href='sub01/sub01_010801.html'>사이버투어</a></li>
<li><a href='_prog/campus_tour/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=010805.html'>캠퍼스투어신청</a></li>
<li><a href='sub01/sub01_010804.html'>캠퍼스맵</a></li>
<li><a href='sub01/sub01_01080301.html'>찾아오시는길</a></li>
</ul>
</li>
</ul>
</li>
<li><h2><a href='sub02/sub02_020118.html' class='th1_lnk'>대학/대학원</a></h2><ul class='depth2'>
<li><h3><a href="sub02/sub02_020118.html" >대학</a></h3><ul class='depth3'>
<li><a href='sub02/sub02_020118.html'>단과대학소개</a></li>
<li><a href='http://human.cnu.ac.kr/'>인문대학</a></li>
<li><a href='http://socialscience.cnu.ac.kr/'>사회과학대학</a></li>
<li><a href='http://cns.cnu.ac.kr/'>자연과학대학</a></li>
<li><a href='http://cem.cnu.ac.kr/'>경상대학</a></li>
<li><a href='http://eng.cnu.ac.kr/'>공과대학</a></li>
<li><a href='http://cals.cnu.ac.kr/'>농업생명과학대학</a></li>
<li><a href='http://pharm.cnu.ac.kr/'>약학대학</a></li>
<li><a href='http://medicine.cnu.ac.kr/'>의과대학</a></li>
<li><a href='http://homeco.cnu.ac.kr/'>생활과학대학</a></li>
<li><a href='http://art.cnu.ac.kr/'>예술대학</a></li>
<li><a href='http://vetmed.cnu.ac.kr'>수의과대학</a></li>
<li><a href='http://edu.cnu.ac.kr'>사범대학</a></li>
<li><a href='http://nursing.cnu.ac.kr'>간호대학</a></li>
<li><a href='http://cbb.cnu.ac.kr/'>생명시스템과학대학</a></li>
<li><a href='http://free.cnu.ac.kr/free/index.do'>자유전공학부</a></li>
<li><a href='http://soins.cnu.ac.kr'>국가안보융합학부</a></li>
</ul>
</li>
<li><h3><a href="sub02/sub02_020201.html" >대학원</a></h3><ul class='depth3'>
<li><a href='sub02/sub02_020201.html'>대학원 소개</a></li>
<li><a href='http://grad.cnu.ac.kr/'>대학원 홈페이지</a></li>
</ul>
</li>
<li><h3><a href="sub02/sub02_020406.html" >전문대학원</a></h3><ul class='depth3'>
<li><a href='sub02/sub02_020406.html'>전문대학원소개</a></li>
<li><a href='http://law.cnu.ac.kr/'>법학전문대학원</a></li>
<li><a href='http://medicine.cnu.ac.kr/'>의학전문대학원</a></li>
<li><a href='http://grast.cnu.ac.kr/'>분석과학기술대학원</a></li>
<li><a href='http://gest.cnu.ac.kr/'>에너지과학기술대학원</a></li>
<li><a href='http://gsdd.cnu.ac.kr/'>신약전문대학원</a></li>
</ul>
</li>
<li><h3><a href="sub02/sub02_020308.html" >특수대학원</a></h3><ul class='depth3'>
<li><a href='sub02/sub02_020308.html'>특수대학원소개</a></li>
<li><a href='http://mba.cnu.ac.kr'>경영대학원</a></li>
<li><a href='http://egc.cnu.ac.kr/egc/index.do'>교육대학원</a></li>
<li><a href='http://gspa.cnu.ac.kr/'>행정대학원</a></li>
<li><a href='http://gsph.cnu.ac.kr'>보건대학원</a></li>
<li><a href='http://ind.cnu.ac.kr/'>산업대학원</a></li>
<li><a href='http://homepage.cnu.ac.kr/cnuip/index.do'>특허법무대학원</a></li>
<li><a href='http://peace.cnu.ac.kr'>평화안보대학원</a></li>
<li><a href='http://gnpp.cnu.ac.kr/'>국가정책대학원</a></li>
<li><a href='http://smart.cnu.ac.kr/smart/index.do'>스마트농업대학원</a></li>
</ul>
</li>
</ul>
</li>
<li><h2><a href='http://ipsi.cnu.ac.kr' class='th1_lnk'>입학</a></h2><ul class='depth2'>
<li><h3><a href="http://ipsi.cnu.ac.kr" target='_blank' title='새창열림'>입학정보</a></h3></li>
<li><h3><a href="http://job.cnu.ac.kr/" target='_blank' title='새창열림'>취업(인재개발원)</a></h3></li>
<li><h3><a href="http://withu.cnu.ac.kr" target='_blank' title='새창열림'>CNU With U   (학생경력통합 관리시스템)</a></h3></li>
</ul>
</li>
<li><h2><a href='http://iuc.cnu.ac.kr/' class='th1_lnk'>연구</a></h2><ul class='depth2'>
<li><h3><a href="http://iuc.cnu.ac.kr/" target='_blank' title='새창열림'>산학협력단</a></h3></li>
<li><h3><a href="http://connect.cnu.ac.kr/startup" target='_blank' title='새창열림'>창업지원단</a></h3></li>
<li><h3><a href="http://linc.cnu.ac.kr" target='_blank' title='새창열림'>LINC+사업단</a></h3></li>
<li><h3><a href="http://bkplus21.cnu.ac.kr" target='_blank' title='새창열림'>BK21플러스사업</a></h3></li>
<li><h3><a href="http://cnuss.cnu.ac.kr/smain.html" target='_blank' title='새창열림'>스포츠융복합창업육성사업단</a></h3></li>
<li><h3><a href="http://irb.cnu.ac.kr/html/kr/index.html" target='_blank' title='새창열림'>생명윤리위원회</a></h3></li>
<li><h3><a href="http://forb.cnu.ac.kr/" target='_blank' title='새창열림'>산학종합정보시스템</a></h3></li>
<li><h3><a href="http://connect.cnu.ac.kr" target='_blank' title='새창열림'>원스톱토탈케어시스템</a></h3></li>
<li><h3><a href="http://www.scival.com/" target='_blank' title='새창열림'>연구성과분석솔루션(SciVal)</a></h3></li>
<li><h3><a href="http://cnulab.cnu.ac.kr/" target='_blank' title='새창열림'>연구실안전관리통합시스템</a></h3></li>
<li><h3><a href="http://cnucrf.re.kr" target='_blank' title='새창열림'>공동실험실습관</a></h3></li>
</ul>
</li>
<li><h2><a href='sub05/sub05_050101.html' class='th1_lnk'>대학생활</a></h2><ul class='depth2'>
<li><h3><a href="sub05/sub05_050101.html" >학생민원서비스</a></h3><ul class='depth3'>
<li><a href='sub05/sub05_050101.html'>민원서비스소개</a></li>
<li><a href='sub05/sub05_050102.html'>증명서발급</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub05_050103&amp;site_dvs_cd=kr&amp;menu_dvs_cd=050103.html'>자료실(학생,동문)</a></li>
<li><a href='sub05/sub05_050104.html'>자주찾는행정부서</a></li>
<li><a href='http://cnuis.cnu.ac.kr/SchUrgNotiQ.jsp'>재학생 등록금고지서</a></li>
<li><a href='http://cnuis.cnu.ac.kr/EntUrgNotiQ.jsp'>신입생 등록금고지서</a></li>
<li><a href='http://cnuis.cnu.ac.kr/EntLoginPpaid.jsp'>신입생 등록금 분납신청</a></li>
<li><a href='http://cnuis.cnu.ac.kr/EntUrgNotiQSp.jsp'>특별학기 수강료 고지서 출력</a></li>
</ul>
</li>
<li><h3><a href="sub05/sub05_05020101.html" >학사안내</a></h3><ul class='depth3'>
<li><a href='sub05/sub05_050202.html'>학사업무안내</a></li>
<li><a href='_prog/academic_calendar/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=05020101.html'>학사일정</a></li>
<li><a href='sub05/sub05_050203.html'>학사행정</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub05_050204&amp;site_dvs_cd=kr&amp;menu_dvs_cd=050204.html'>학사상담</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub05_050205&amp;site_dvs_cd=kr&amp;menu_dvs_cd=050205.html'>온라인FAQ</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=affairs_020405&amp;site_dvs_cd=hub&amp;menu_dvs_cd=020405.html'>한 눈에 보는 학사정보</a></li>
</ul>
</li>
<li><h3><a href="sub05/sub05_050401.html" >학생생활서비스</a></h3><ul class='depth3'>
<li><a href='sub05/sub05_050401.html'>학생증발급안내</a></li>
<li><a href='sub05/sub05_05040201.html'>주차안내</a></li>
<li><a href='sub05/sub05_050407.html'>교내현수막관리</a></li>
<li><a href='sub05/sub05_050403.html'>학교셔틀버스</a></li>
<li><a href='sub05/sub05_050404.html'>기타 서비스안내</a></li>
<li><a href='http://counselling.cnu.ac.kr/index.do'>학생상담</a></li>
<li><a href='http://job.cnu.ac.kr/'>취업정보</a></li>
</ul>
</li>
<li><h3><a href="sub05/sub05_05050101.html" >교내복지안내</a></h3><ul class='depth3'>
<li><a href='sub05/sub05_05050101.html'>편의시설안내</a></li>
<li><a href='http://gymn.cnu.ac.kr/icons/app/cms/?html=/home/int2_3.html&amp;shell=/index.shell:406'>시설이용안내</a></li>
<li><a href='_prog/_meeting_room2/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=050503.html'>영탑홀이용안내</a></li>
<li><a href='sub05/sub05_050504.html'>병원진료비감면안내</a></li>
<li><a href='sub05/sub05_050505.html'>교직원병원서비스</a></li>
<li><a href='http://cnuis.cnu.ac.kr/jsp/etc/weekMenuFrame.jsp'>금주의식단</a></li>
<li><a href='http://www.cnucoop.co.kr/'>소비자생활협동조합</a></li>
<li><a href='sub05/sub05_050508.html'>배상책임보험 청구안내</a></li>
</ul>
</li>
<li><h3><a href="sub05/sub05_050701.html" >예비군정보</a></h3><ul class='depth3'>
<li><a href='sub05/sub05_050701.html'>예비군연대소개</a></li>
<li><a href='sub05/sub05_050702.html'>교육훈련시간</a></li>
<li><a href='Upl/kr/20200818_2.hwp'>대학(원)별 훈련일정</a></li>
<li><a href='Upl/kr/20180709.hwp'>동원훈련일정</a></li>
<li><a href='sub05/sub05_050703.html'>대원신고절차</a></li>
<li><a href='sub05/sub05_050704.html'>직장민방위</a></li>
<li><a href='http://www.mma.go.kr/'>병무안내</a></li>
<li><a href='http://helpcall.mnd.mil.kr'>국방헬프콜</a></li>
<li><a href='sub05/sub05_050710.html'>휴일&middot;전국단위 예비군훈련 제도</a></li>
</ul>
</li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=gaffair_060405&amp;site_dvs_cd=hub&amp;menu_dvs_cd=060405.html" target='_blank' title='새창열림' class="">친절불친절신고센터</a></h3></li>
<li><h3><a href="http://e-learn.cnu.ac.kr" target='_blank' title='새창열림'>대학이러닝지원센터</a></h3></li>
<li><h3><a href="http://cnuwifi.cnu.ac.kr" target='_blank' title='새창열림'>CNU WiFi 서비스</a></h3></li>
<li><h3><a href="sub05/sub05_051101.html" >해외파견프로그램 모아 보기</a></h3><ul class='depth3'>
<li><a href='sub05/sub05_051102.html'>학위과정</a></li>
<li><a href='sub05/sub05_051101.html'>인턴쉽 과정</a></li>
</ul>
</li>
</ul>
</li>
<li><h2><a href='sub06/sub06_06010101.html' class='th1_lnk'>대학정보</a></h2><ul class='depth2'>
<li><h3><a href="sub06/sub06_06010101.html" >정보공개</a></h3><ul class='depth3'>
<li><a href='sub06/sub06_06010101.html'>정보공개제도안내</a></li>
<li><a href='_prog/preopen/index%EF%B9%96site_dvs_cd=&amp;menu_dvs_cd=060102.html'>사전정보공표</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060103&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060103.html'>정보목록</a></li>
<li><a href='http://open.go.kr'>정보공개청구</a></li>
</ul>
</li>
<li><h3><a href="sub06/sub06_060201.html" >행정기관</a></h3><ul class='depth3'>
<li><a href='sub06/sub06_060201.html'>행정기관소개</a></li>
<li><a href='../hub/main.html#1'>교무과</a></li>
<li><a href='http://eduinno.cnu.ac.kr'>교육혁신센터</a></li>
<li><a href='../hub/main.html#2'>학사지원과</a></li>
<li><a href='../hub/main.html#3'>학생과</a></li>
<li><a href='http://job.cnu.ac.kr/'>인재개발원</a></li>
<li><a href='../hub/main.html#4'>기획평가과</a></li>
<li><a href='../hub/main.html#5'>대외협력팀</a></li>
<li><a href='../hub/main.html#10'>정보분석센터</a></li>
<li><a href='http://cnuscc.cnu.ac.kr/'>사회공헌센터</a></li>
<li><a href='http://orc.cnu.ac.kr/orc/index.do'>지역협력본부</a></li>
<li><a href='../hub/main.html#6'>총무과</a></li>
<li><a href='../hub/main.html#7'>재무과</a></li>
<li><a href='../hub/main.html#8'>시설과</a></li>
</ul>
</li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub06_060301&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060301.html" >정책정보</a></h3><ul class='depth3'>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060301&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060301.html'>입법예고</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060303&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060303.html'>주간업무추진계획</a></li>
<li><a href='sub06/sub06_060306.html'>정책실명제</a></li>
</ul>
</li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub06_060401&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060401.html" >행정정보</a></h3><ul class='depth3'>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060401&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060401.html'>입찰공고</a></li>
<li><a href='http://www.academyinfo.go.kr/pubinfo/pubinfo0020/list.do?schlId=0000029'>대학정보공시</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060403&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060403.html'>업무메뉴얼</a></li>
</ul>
</li>
<li><h3><a href="_prog/rule/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=06050101&amp;gubun=1.html" >학칙규정</a></h3><ul class='depth3'>
<li><a href='_prog/rule/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=06050101&amp;gubun=1.html'>학칙규정</a></li>
</ul>
</li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub06_060601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060601.html" >청렴행정</a></h3><ul class='depth3'>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=06060101.html'>반부패&middot;청렴정책</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060606&amp;site_dvs_cd=kr&amp;menu_dvs_cd=06060201.html'>청렴정보공개</a></li>
<li><a href='sub06/sub06_06060301.html'>청렴위반신고</a></li>
<li><a href='#'>청탁금지법</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub06_060610&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060610.html'>클린신고</a></li>
</ul>
</li>
<li><h3><a href="sub06/sub06_0608.html" >공공데이터</a></h3></li>
<li><h3><a href="_prog/_meeting_room/index%EF%B9%96code=sub06_0609&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0609&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0609&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0609&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0609.html" >회의실예약</a></h3></li>
</ul>
</li>
<li><h2><a href='_prog/_board/index%EF%B9%96code=COVID19&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html' class='th1_lnk'>백마광장</a></h2><ul class='depth2'>
<li><h3><a href="_prog/_board/index%EF%B9%96code=COVID19&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html" >코로나19 대응 안내</a></h3><ul class='depth3'>
<li><a href='_prog/_board/index%EF%B9%96code=COVID19&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html'>코로나19 대응 안내</a></li>
</ul>
</li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_0701&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0701.html" >새소식</a></h3></li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_0702&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0702.html" >학사정보</a></h3></li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html" >CNU뉴스</a></h3></li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_0704&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0704.html" >교육정보</a></h3></li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_0709&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0709.html" >사업단 창업ㆍ교육</a></h3></li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_0705&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0705.html" >채용/초빙</a></h3></li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_070601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070601.html" >교직원커뮤니티</a></h3><ul class='depth3'>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070601.html'>공지사항</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070602&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070602.html'>경조사</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070603&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070603.html'>교직원자료실</a></li>
<li><a href='../hub/gaffair/gaffair_060301.html'>교직원복지안내</a></li>
<li><a href='http://chungil.cnu.ac.kr/'>직원협의회</a></li>
</ul>
</li>
<li><h3><a href="sub07/sub07_0707.html" >교내현수막관리</a></h3></li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_0710&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0710.html" >CNU FORUM</a></h3></li>
<li><h3><a href="_prog/_board/index%EF%B9%96code=sub07_070801&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070801.html" >백마게시판</a></h3><ul class='depth3'>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070801&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070801.html'>대학문화마당</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070802&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070802.html'>CNU장터</a></li>
<li><a href='_prog/lostandfound/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=07080301.html'>분실물광장</a></li>
<li><a href='_prog/recruit/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=07080401.html'>구인/구직</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070806&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070806.html'>거주정보</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070809&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070807.html'>학교에바란다</a></li>
<li><a href='_prog/_board/index%EF%B9%96code=sub07_070808&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070808.html'>스터디 및 공모전</a></li>
</ul>
</li>
</ul>
</li>
</ul>
<dl class="tm_mob">
    <dt>탑유틸 메뉴</dt>
			<dd><a href="guide/guide_0802.html">로그인</a></dd>
	    <dd><a href="guide/guide_0801.html">사이트맵</a></dd>
    <dd><a href="../en/index.html" target="_blank" title="새창으로 열립니다.">ENGLISH</a></dd>
</dl>
			</nav>
			<div class="gnb_shadow"></div>
		</div>
		<!-- rwd_header :E -->
	</header>
	<!-- header :E -->


	

<!-- 탭메뉴 및 좌측메뉴 펼침기능 시작 부분 -->
<!-- 탭메뉴 및 좌측메뉴 펼침기능 종료 부분 -->

	<!-- container :S -->
	<div id="body_layout">
		<div class="body_wrap">
	        <div id="mquick">
	            <strong>QUICK<br>MENU</strong>
	            <div class="user_service">
	                <b>이용자별 서비스</b>
	                <ul class="sev_list clickOpen">
	                    <li><a href="#" class="sev_Open">재학생</a>
							<div class="sev_link">
		                        <div class="linkbox">
		                        	<strong class="titwrap">
		                        		<span class="cnu"><em>CNU</em>충남대학교</span>
		                        		<span>이용자별링크서비스</span>
		                        		<span class="infoti">재학생</span>
		                        	</strong>
		                        	<ul class="bnwrap">
					                    <li class="ico1"><a href="_prog/academic_calendar/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=05020101.html">학사일정</a></li>
										<li class="ico2"><a href="http://job.cnu.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">취업정보</a></li>
										<li class="ico3"><a href="sub05/sub05_050405.html">학생상담</a></li>
										<li class="ico4"><a href="http://library.cnu.ac.kr/" title="새창으로 해당사이트가 보여줍니다." target="_blank">디지털도서관</a></li>
										<li class="ico5"><a href="sub05/sub05_050102.html">증명서</a></li>
										<li class="ico6"><a href="http://e-learn.cnu.ac.kr" title="새창으로 해당사이트가 보여집니다." target="_blank">대학이러닝지원센터</a></li>
										<li class="ico7"><a href="../hub/support/support_030301.html" title="새창으로 해당사이트가 보여집니다." target="_blank">장학제도</a></li>
										<li class="ico8"><a href="http://press.cnu.ac.kr/news/articleList.html?sc_section_code=S1N1&amp;view_type=sm" title="새창으로 해당사이트가 보여집니다." target="_blank">충대신문</a></li>
										<li class="ico11"><a href="_prog/_board/index%EF%B9%96code=sub07_070801&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070801.html">백마게시판</a></li>
										<li class="ico12"><a href="http://cuvic.cnu.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">웹메일</a></li>
										<li class="ico13"><a href="http://portal.cnu.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">통합정보시스템</a></li>
										<li class="ico14"><a href="http://mobile.cnu.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">모바일캠퍼스</a></li>
										<li class="ico24"><a href="http://withu.cnu.ac.kr" title="새창으로 해당사이트가 보여집니다." target="_blank">CNU With U <br>(학생경력통합 관리시스템)</a></li>
									</ul>
		                        </div>
		                        <a href="#" class="close">close</a>
		                    </div>
	                    </li>
	                    <li><a href="#" class="sev_Open">예비<span>대학생</span></a>
	                    <div class="sev_link">
		                        <div class="linkbox">
		                        	<strong class="titwrap">
		                        		<span class="cnu"><em>CNU</em>충남대학교</span>
		                        		<span>이용자별링크서비스</span>
		                        		<span class="infoti">예비대학생</span>
		                        	</strong>
		                        	<ul class="bnwrap">
					                    <li class="ico31"><a href="http://ipsi.cnu.ac.kr/intro.html" title="새창으로 해당사이트가 보여집니다." target="_blank">입학안내</a></li>
										<li class="ico33"><a href="http://ipsi.cnu.ac.kr/html/uadm/sub01/sub01_0103.html" title="새창으로 해당사이트가 보여집니다." target="_blank">수시모집</a></li>
										<li class="ico32"><a href="http://addon.jinhakapply.com/ApplyV8/addon/NesinService/nesin/CalCNU201801.aspx" title="새창으로 해당사이트가 보여집니다." target="_blank">성적산출(수시)</a></li>
										<li class="ico35"><a href="http://ipsi.cnu.ac.kr/html/uadm/sub02/sub02_0203.html" title="새창으로 해당사이트가 보여집니다." target="_blank">정시모집</a></li>
										<li class="ico32"><a href="http://addon.jinhakapply.com/Nesin/1140/2021/Sn.html" title="새창으로 해당사이트가 보여집니다." target="_blank">성적산출(정시)</a></li>
										<li class="ico41"><a href="http://ipsi.cnu.ac.kr/html/uadm/sub06/sub06_0603.html" title="새창으로 해당사이트가 보여집니다." target="_blank">재외국민</a></li>
										<li class="ico24"><a href="http://ipsi.cnu.ac.kr/html/uadm/sub09/sub09_090201.html" title="새창으로 해당사이트가 보여집니다." target="_blank"><span class="width">고교-대학 <br>연계 프로그램</span> </a></li>
										<li class="ico34"><a href="http://ipsi.cnu.ac.kr/_prog/ipsi_fair/?site_dvs_cd=uadm&amp;menu_dvs_cd=0901" title="새창으로 해당사이트가 보여집니다." target="_blank">고교방문설명회 신청 </a></li>
										<li class="ico36"><a href="sub02/sub02_020118.html">학과소개</a></li>
										<li class="ico7"><a href="../hub/support/support_030301.html" title="새창으로 해당사이트가 보여집니다." target="_blank">장학제도</a></li>
										<li class="ico42"><a href="http://dorm.cnu.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">학생생활관</a></li>
										<li class="ico44"><a href="sub01/sub01_01080301.html">찾아오시는길</a></li>
									</ul>
		                        </div>
		                        <a href="#" class="close">close</a>
		                    </div>
	                    </li>
	                    <li><a href="#" class="sev_Open">교직원</a>
	                    <div class="sev_link">
		                        <div class="linkbox">
		                        	<strong class="titwrap">
		                        		<span class="cnu"><em>CNU</em>충남대학교</span>
		                        		<span>이용자별링크서비스</span>
		                        		<span class="infoti">교직원</span>
		                        	</strong>
		                        	<ul class="bnwrap">
					                    <li class="ico13"><a href="http://portal.cnu.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">통합정보시스템</a></li>
										<li class="ico15"><a href="_prog/_board/index%EF%B9%96code=sub07_070602&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070602.html">경조사</a></li>
										<li class="ico16"><a href="http://cnu.korus.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">코러스시스템</a></li>
										<li class="ico17"><a href="_prog/_board/index%EF%B9%96code=sub07_070603&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070603.html">교직원자료실</a></li>
										<li class="ico18"><a href="https://forb.cnu.ac.kr/main_0001_01.act" title="새창으로 해당사이트가 보여집니다." target="_blank">산학종합정보시스템</a></li>
										<li class="ico12"><a href="http://cuvic.cnu.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">웹메일</a></li>
										<li class="ico21"><a href="_prog/_meeting_room/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=0609.html">회의실예약</a></li>
										<li class="ico22"><a href="http://library.cnu.ac.kr/" title="새창으로 해당사이트로 보여줍니다." target="_blank">디지털도서관</a></li>
										<li class="ico23"><a href="sub05/sub05_050505.html">교직원편의</a></li>
										<li class="ico24"><a href="_prog/_board/index%EF%B9%96code=sub07_0705&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0705.html">채용/초빙</a></li>
										<li class="ico25"><a href="../hub/gaffair/gaffair_060201.html" title="새창으로 해당사이트로 보여줍니다." target="_blank">교직원복지</a></li>
										<li class="ico26"><a href="sub05/sub05_050102.html">교직원증명발급</a></li>
									</ul>
		                        </div>
		                        <a href="#" class="close">close</a>
		                    </div>
		               	</li>
	                    <li><a href="#" class="sev_Open">동문/<span>일반인</span></a>
	                    <div class="sev_link">
		                        <div class="linkbox">
		                        	<strong class="titwrap">
		                        		<span class="cnu"><em>CNU</em>충남대학교</span>
		                        		<span>이용자별링크서비스</span>
		                        		<span class="infoti">동문/일반인</span>
		                        	</strong>
		                        	<ul class="bnwrap">
								         <li class="ico51"><a href="http://www.icnu.net/page/sub1_1.html" title="새창으로 해당사이트가 보여집니다." target="_blank">총동창회소개</a></li>
										<li class="ico53"><a href="http://www.icnu.net/page/sub2_1.html" title="새창으로 해당사이트가 보여집니다." target="_blank">재경동문회</a></li>
										<li class="ico55"><a href="http://www.icnu.net/page/sub2_2.html" title="새창으로 해당사이트가 보여집니다." target="_blank">대학별동문회</a></li>
										<li class="ico61"><a href="http://www.icnu.net/page/sub3_1.html" title="새창으로 해당사이트가 보여집니다." target="_blank">동문찾기</a></li>
										<li class="ico62"><a href="http://www.icnu.net/page/sub5_2.html" title="새창으로 해당사이트가 보여집니다." target="_blank">동문기업정보</a></li>
										<li class="ico22"><a href="sub01/sub01_01080301.html">홍보동영상</a></li>
										<li class="ico34"><a href="sub01/sub01_01080301.html">홍보브로슈어</a></li>
										<li class="ico58"><a href="sub01/sub01_01080301.html">뉴스레터</a></li>
										<li class="ico56"><a href="_prog/_board/index%EF%B9%96code=sub01_010802&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010802.html">캠퍼스갤러리</a></li>
										<li class="ico44"><a href="sub01/sub01_01080301.html">찾아오시는길</a></li>


										<!-- <li class="ico54"><a href="http://www.icnu.net/page/sub6_1.html" title="새창으로 해당사이트가 보여집니다." target="_blank">회비납부안내</a></li>
										<li class="ico57"><a href="http://www.icnu.net/page/sub1_6.html" title="새창으로 해당사이트가 보여집니다." target="_blank">회칙</a></li>
										<li class="ico58"><a href="http://www.icnu.net/page/sub4_3.html" title="새창으로 해당사이트가 보여집니다." target="_blank">동창회보</a></li>
										<li class="ico63"><a href="http://www.icnu.net/page/sub4_1.html" title="새창으로 해당사이트가 보여집니다." target="_blank">동문소식</a></li>
										<li class="ico52"><a href="http://www.icnu.net/page/sub4_2.html" title="새창으로 해당사이트가 보여집니다." target="_blank">행사일정</a></li>
										<li class="ico64"><a href="/html/kr/sub01/sub01_010801.html">캠퍼스안내</a></li> -->
									</ul>
		                        </div>
		                        <a href="#" class="close">close</a>
		                    </div>
	                    </li>
	                </ul>
	            </div>
	            <ul class="sec_tab">
	                <li><a href="#cont2">NOTICE</a></li>
	                <li><a href="#cont4">NEWS</a></li>
	                <li><a href="#cont5">SNS</a></li>
	                <li><a href="#cont7">교내사이트</a></li>
	            </ul>
	            <div id="topBtn">
	                <a href="#header">Top</a>
	            </div>
	        </div>
	        <script type="text/javascript">

	            $(window).load(function(){
	                mscrolling();
	            });
	            $(window).resize(function(){
	                $("#mquick").removeClass("fixed");
	                $(".body_wrap").removeAttr("style");
	                mscrolling();
	            });

	            function mscrolling(){
	                $(window).scroll(function () {
	                    var _browserWidth = $(window).width();
	                    var _mnavHeight = 200;

	                    var _mquick = $("#mquick").offset().top;
	                    var _thisScroll = $(window).scrollTop();

	                    if(_browserWidth < 1599){
	                        if(_thisScroll > _mnavHeight){
	                            $("#mquick").addClass("fixed");
	                            $(".body_wrap").css("padding-top",112);
	                        }else{
	                            $("#mquick").removeClass("fixed");
	                            $(".body_wrap").removeAttr("style");
	                        }
	                    }else{
	                        $("#mquick").removeClass("fixed");
	                        $(".body_wrap").removeAttr("style");
	                    }

	                })

	                $("#mquick .sec_tab a").on("click", function(e){
	                    e.preventDefault();
	                    var _target = $(this).attr("href");
	                    var offset_y = $(_target).offset().top-112;
	                    var _browserWidth = $(window).width();
	                    console.log(_target)
	                    console.log(offset_y)
	                    if(_browserWidth < 1599){
	                        $("html, body").stop(false,false).animate({scrollTop:offset_y}, 300);
	                    }else if(_browserWidth > 1600){
	                        $("html, body").stop(false,false).animate({scrollTop:offset_y+112}, 300);
	                    }
	                })
	            }

	        </script>
	    	<section id="cont1">
	            <h2 class="skip">메인 비주얼</h2>
	            <p class="left_tit">cnungnam national university</p>
	            <div class="inner">
<!--	            	<span class="top_slogan">Jump!CNU</span>-->
	                <div id="slide_slide" class="mvisual">
	                    <div class="sliderBox">
	                        <ul>
	                            				<li>
					<a href="_prog/_board/index%EF%B9%96mode=V&amp;no=2476279&amp;code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703&amp;skey=&amp;sval=&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=.html" target="_blank">
					<div class="mvisual_txt">
						<span class="cate">CNU 뉴스</span>
						<h2 class="mvtit">충남대학교, 세종캠퍼스 입주 확정</h2>
						<p class="mvtxt">충남대학교, 세종캠퍼스 입주 확정</p>
						<!--<span class="more">MORE</span>-->
					</div>
					<span class="thumbResize_A">
						<img src='Upl/kr/_main_swap/kr_main_swap_0_1612424030.jpg'  alt='충남대학교  세종캠퍼스 입주 확정 이미지' class='item_img'  > 					</span>
					</a>
				</li>
							<li>
					<a href="_prog/_board/index%EF%B9%96mode=V&amp;no=2471143&amp;code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703&amp;skey=&amp;sval=&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=.html" target="_blank">
					<div class="mvisual_txt">
						<span class="cate">CNU 뉴스</span>
						<h2 class="mvtit">'CNU Honor Scholarship' 신설<br />
1인당 2억원 상당 파격 장학금</h2>
						<p class="mvtxt">'CNU Honor Scholarship' 신설<br />
1인당 2억원 상당 파격 장학금</p>
						<!--<span class="more">MORE</span>-->
					</div>
					<span class="thumbResize_A">
						<img src='Upl/kr/_main_swap/kr_main_swap_0_1609314514.jpg'  alt=' CNU Honor Scholarship  신설
1인당 2억원 상당 파격 장학금 이미지' class='item_img'  > 					</span>
					</a>
				</li>
							<li>
					<a href="_prog/_board/index%EF%B9%96mode=V&amp;no=2472792&amp;code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703&amp;skey=&amp;sval=&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=2.html" target="_blank">
					<div class="mvisual_txt">
						<span class="cate">CNU 뉴스</span>
						<h2 class="mvtit">‘스포츠콤플렉스’ 건립 확정<br />
국비 270억원 확보</h2>
						<p class="mvtxt">“스포츠콤플렉스 건립에 도움 준 지역사회에 감사” <br />
<br />
 <br />
<br />
충남대학교의 오랜 숙원사업이자 지역민의 건강과 복지 증진에 기여할 것으로 기대되고 있는 ‘(가칭)스포츠콤플렉스’ 건립 예산 확보는 지역사회의 힘이 결집해 이룬 성과로 평가받고 있다.<br />
<br />
지난 12월 2일, 2021년 국회 예산안 심의가 최종 의결된 ‘충남대학교 실내체육관 리모델링 및 확충(스포츠콤플렉스 건립)’ 사업의 설계비 11억 5,200만원 예산이 확정됨에 따라 사업이 본격화됐다.</p>
						<!--<span class="more">MORE</span>-->
					</div>
					<span class="thumbResize_A">
						<img src='Upl/kr/_main_swap/kr_main_swap_0_1608791674.jpg'  alt='‘스포츠콤플렉스’ 건립 확정
국비 270억원 확보 이미지' class='item_img'  > 					</span>
					</a>
				</li>
							<li>
					<a href="_prog/_board/index%EF%B9%96mode=V&amp;no=2474818&amp;code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703&amp;skey=&amp;sval=&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=.html" target="_blank">
					<div class="mvisual_txt">
						<span class="cate">CNU 뉴스</span>
						<h2 class="mvtit">충남대, 취업률 2년 연속 거점국립대 1위</h2>
						<p class="mvtxt">충남대, 취업률 2년 연속 거점국립대 1위</p>
						<!--<span class="more">MORE</span>-->
					</div>
					<span class="thumbResize_A">
						<img src='Upl/kr/_main_swap/kr_main_swap_0_1610687837.jpg'  alt='충남대  취업률 2년 연속 거점국립대 1위 이미지' class='item_img'  > 					</span>
					</a>
				</li>
							<li>
					<a href="_prog/_board/index%EF%B9%96mode=V&amp;no=2474207&amp;code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703&amp;skey=&amp;sval=&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=.html" target="_blank">
					<div class="mvisual_txt">
						<span class="cate">CNU 뉴스</span>
						<h2 class="mvtit">타이어뱅크 김정규 회장 <br />
'CNU Honor Scholarship' <br />
장학기금(5억원) 1호 기부</h2>
						<p class="mvtxt">타이어뱅크 김정규 회장 <br />
'CNU Honor Scholarship' <br />
장학기금(5억원) 1호 기부</p>
						<!--<span class="more">MORE</span>-->
					</div>
					<span class="thumbResize_A">
						<img src='Upl/kr/_main_swap/kr_main_swap_0_1609894845.jpg'  alt='타이어뱅크 김정규 회장 
 CNU Honor Scholarship  
장학기금 5억원  1호 기부 이미지' class='item_img'  > 					</span>
					</a>
				</li>
							<li>
					<a href="_prog/_board/index%EF%B9%96mode=V&amp;no=2463262&amp;code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703&amp;skey=&amp;sval=&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=4.html" target="_blank">
					<div class="mvisual_txt">
						<span class="cate">CNU 뉴스</span>
						<h2 class="mvtit">충남대 첨단학과 4개 신설<br />
136명 정원 증원</h2>
						<p class="mvtxt">충남대 첨단학과 4개 신설 136명 정원 증원</p>
						<!--<span class="more">MORE</span>-->
					</div>
					<span class="thumbResize_A">
						<img src='Upl/kr/_main_swap/kr_main_swap_0_1608534056.jpg'  alt='충남대 첨단학과 4개 신설
136명 정원 증원 이미지' class='item_img'  > 					</span>
					</a>
				</li>
							<li>
					<a href="_prog/_board/index%EF%B9%96mode=V&amp;no=2471766&amp;code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703&amp;skey=title&amp;sval=4%EB%8B%A8%EA%B3%84&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=.html" target="_blank">
					<div class="mvisual_txt">
						<span class="cate">CNU 뉴스</span>
						<h2 class="mvtit">4단계 BK21사업 23개 교육연구단(팀) 선정</h2>
						<p class="mvtxt">4단계 BK21사업 23개단(팀) 선정</p>
						<!--<span class="more">MORE</span>-->
					</div>
					<span class="thumbResize_A">
						<img src='Upl/kr/_main_swap/kr_main_swap_0_1610687883.jpg'  alt='4단계 BK21사업 23개 교육연구단 팀  선정 이미지' class='item_img'  > 					</span>
					</a>
				</li>
							<li>
					<a href="_prog/_board/index%EF%B9%96mode=V&amp;no=2471680&amp;code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703&amp;skey=title&amp;sval=%EC%9B%90%EA%B2%A9&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=.html" >
					<div class="mvisual_txt">
						<span class="cate">CNU 뉴스</span>
						<h2 class="mvtit">충남대, 원격교육지원센터 선정</h2>
						<p class="mvtxt">충남대, 원격교육지원센터 선정</p>
						<!--<span class="more">MORE</span>-->
					</div>
					<span class="thumbResize_A">
						<img src='Upl/kr/_main_swap/kr_main_swap_0_1608793232.jpg'  alt='충남대  원격교육지원센터 선정 이미지' class='item_img'  > 					</span>
					</a>
				</li>
				                        </ul>
	                    </div>
	                    <div class="controlBox">
	                        <div class="countwrap">
	                            <div class="pageCount"></div>
	                            <div class="paging"></div>
	                            <button type="button" class="btn_stop"><span>비쥬얼 정지</span></button>
	                            <button type="button" class="btn_play"><span>비쥬얼 재생</span></button>
	                        </div>
	                        <div class="leftright">
	                            <button type="button" class="btn_prev"><span>비쥬얼 이전</span></button>
	                            <button type="button" class="btn_next"><span>비쥬얼 다음</span></button>
	                        </div>
	                    </div>
	                </div>
	                <script type="text/javascript">
	                    (function(){
	                        var _id = "#slide_slide";//시작 아이디
	                        var _view = 1;//슬라이더 컨텐츠 수
	                        var _auto = true;//오토플레이 아닐시 false
	                        var _slide = true;//슬라이더 아닐시 false(fade in/out)
	                        var _speed = 150;//슬라이더 속도 기본150
							var _interval = 15000;
	                        touchSlider(_id,_view,_auto,_slide,_speed, _interval);
	                    }());
	                </script>
	            </div>
	        </section>
	        <section id="cont2">
	            <h2><b>CNU</b> NOTICE</h2>
	            <p>충남대학교의 새로운 소식들을 여러분들께 전달 드립니다.</p>
	            <div class="inner">
	                <div class="mnotice">
	                    <div class="mboard-wrap">
	                        <div class="mboardbox">
	                           <strong class="firstchild">
	                           <a class="ov bd_lbk" href="_prog/_board/index%EF%B9%96code=COVID19&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html" style="color:red;">코로나19</a></strong>
	                           <div id="mboard-1" class="grap">
	                              <ul class="obj">
	                                <li class="item">
	<a href="_prog/_board/index%EF%B9%96code=COVID19&amp;mode=V&amp;no=2476555&amp;upr_ntt_no=2476555&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html">
	<b>코로나19 대응 비상대책위원회 76차 회의결과에 따른 결정사항 안내</b>
	<span class="board_txt">부서명결정사항(76차 회의결과)비고체육진흥원  학생선수 훈련을 위한 웰니스센터 제한적 운영(안) 승인   - 2021. 2. 15.(월)부터 실시세부사항은 해당부서에 문의 요망의과대학  2020학년도 전기 의과대학 학위수여식 계획(안) 승인</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=COVID19&amp;mode=V&amp;no=2476070&amp;upr_ntt_no=2476070&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html">
	<b>코로나19 대응 비상대책위원회 75차 회의결과에 따른 결정사항 안내</b>
	<span class="board_txt">부서명결정사항(75차 회의결과)비고인문대학  HSK한국사무국 주관 한어수평고시시험 시행 계획 승인세부사항은 해당부서에 문의 요망</span>
	<span class="date"><strong>02</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=COVID19&amp;mode=V&amp;no=2475674&amp;upr_ntt_no=2475674&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html">
	<b>코로나19 대응 비상대책위원회 74차 회의결과에 따른 결정사항 안내</b>
	<span class="board_txt">부서명결정사항(74차 회의결과)비고사회과학대학 국가자격검정시험 시험장 대관(안) 승인세부사항은 해당부서에 문의 요망기초교양교육원 한국사능력검정시험 시험장 대관(안) 승인LINC+ 사업단 산업연계형 실무교육 프로그램 운영(안) 승인간호대학 충남대학교 간호대학 50주년 기념행사 개최(안) 승인국제언어교육원 한국어 교육과정 기말고사 대면 운영(안) 승인...</span>
	<span class="date"><strong>26</strong>Jan.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=COVID19&amp;mode=V&amp;no=2475126&amp;upr_ntt_no=2475126&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html">
	<b>코로나19 대응 비상대책위원회 73차 회의결과에 따른 결정사항 안내</b>
	<span class="board_txt">부서명결정사항(73차 회의결과) 비고국제언어교육원◎ 소수정예 맞춤형 영어회화 운영(안) 승인 세부사항은 해당부서에 문의 요망</span>
	<span class="date"><strong>19</strong>Jan.</span>
	</a>
</li>	                              </ul>
	                              <a href="_prog/_board/index%EF%B9%96code=COVID19&amp;site_dvs_cd=kr&amp;menu_dvs_cd=07110101.html" class="more">코로나19 더보기</a>
							   </div>
							   <strong>
								<a class="bd_lbk" href="#mboard-2">새소식</a></strong>
								<div id="mboard-2" class="grap">
								   <ul class="obj">
									 <li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0701&amp;mode=V&amp;no=2476556&amp;upr_ntt_no=2476556&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0701.html">
	<b>2021학년도 1학기 수강신청 순번대기 시스템 도입 안내(수정)</b>
	<span class="board_txt">□ 수강신청 개선 추진사항  ① 수강신청 관련 WAS서버 임시 증설(4대→8대)  ② 「순번대기시스템 도입」을 통해 시스템 용량보다 이용 사용자가 많은 경우 순차적으로 수강신청을 할 수 있도록 지원※자세한 사항은 첨부파일을 참고바랍니다.</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0701&amp;mode=V&amp;no=2476536&amp;upr_ntt_no=2476536&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0701.html">
	<b>2020년도 충남대학교 자체평가 결과 알림</b>
	<span class="board_txt">1) 13개 단과대학 81개 학과의  「비전과 목표, 교육 및 사회봉사, 연구 및 학술활동, 국제화, 자구노력, 전년도 평가결과」  6개 영역 23개 지표를 종합적으로      평가하고,2) 이를 바탕으로 대학 및 학과(부)가 경쟁력 강화방안을 자율적으로 마련하는 것을 지원하기 위해, 「2020년도 학문분야평가」를 실시하였습니다.3) 평가 결과 ‘인문·사회 / 이공의약 / 예체능 계열’ 모두 ...</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0701&amp;mode=V&amp;no=2476394&amp;upr_ntt_no=2476394&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0701.html">
	<b>통합정보시스템 전용브라우저 운영 재안내</b>
	<span class="board_txt">1. Adobe사의 플래시 중단에 따라 익스플로우, 크롬 등의 인터넷 브라우저에서는 ‘21년 1월이후부터는 플래시를 이용할 수 없습니다.2. 이에따라 지능형 차세대 통합정보시스템 개발 완료(‘21년01월 ~‘22년01월 예정*) 전까지 플래시로 되어 있는 학사‧행정 운영 프로그램인 통합정보시스템을 안정적으로  운영하기 위하여 ‘21년 1월부터 전용브라우저(윈도우OS 전용)를 도입하...</span>
	<span class="date"><strong>07</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0701&amp;mode=V&amp;no=2476271&amp;upr_ntt_no=2476271&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0701.html">
	<b>2021년 2월 코로나19예방 방역소독 일정 안내</b>
	<span class="board_txt">1. 목적 : 학교 구성원의 보건 향상 및 전염병 예방 2. 대상 : 충남대학교(보운캠퍼스 포함) 건물 내부 및 외부 전체    ※ 학생생활관은 제외 3. 기간 : 2021. 2. 22. ~ 2. 26. 4. 내용 : 바이러스·살균 등 실내 소독 5. 방법 : 바이러스 살균 약제 분무 등 6. 협조 사항   - 소독 후 입실가능 시간은 30분(마스크착용시) ~ 2시간(마스크 미착용시)   - 살충소독(2. 15. ~ 2. 18.)이 코로나소독(2. 22. ~ 2....</span>
	<span class="date"><strong>04</strong>Feb.</span>
	</a>
</li>								   </ul>
								   <a href="_prog/_board/index%EF%B9%96code=sub07_0701&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0701.html" class="more">새소식더보기</a>
								</div>
	                           <strong><a href="#mboard-3" class="bd_lbk">학사정보</a></strong>
	                           <div id="mboard-3" class="grap">
	                                <ul class="obj">
	                                <li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0702&amp;mode=V&amp;no=2476606&amp;upr_ntt_no=2476606&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0702.html">
	<b>2021년도 (재)제주삼다수재단 장학생 선발 공고 안내</b>
	<span class="board_txt">1. 신청요건    1) 공고일 현재 주민등록상 제주특별자치도내에 1년 이상(연속) 주소지로 등록되어 있으며, 사실상 거주하고 있는 제주도민 또는 제주도민의 자녀    2) 신입생: 2021학년도 대학수학능력시험성적 또는 고3 내신성적이 등급합산 평균 3등급 이상      - 과목: 국어･수학･영어･탐구(택 2과목)영역, 총 5과목         ※ 이 중 해당(과목) 성적이 없는 경우 직전학년 해당(...</span>
	<span class="date"><strong>10</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0702&amp;mode=V&amp;no=2476518&amp;upr_ntt_no=2476518&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0702.html">
	<b>2021학년도 제1학기 1차 국가근로장학사업 희망근로기관 신청 안내</b>
	<span class="board_txt">가. 2021학년도 제1학기 1차 국가근로장학사업 희망근로기관 신청기간 안내    - 신청기간: 2021. 2. 9.(화), 10:00 ~ 2. 15.(월), 18:00까지    - 신청방법: 한국장학재단 홈페이지(www.kosaf.go.kr)에서 신청    - 신청대상: 2021학년도 제1학기 1차 국가근로장학사업을 신청한 학생  나. 유의사항    - 2차 신청기간에 신청한 학생은 학기 중 교체선발 발생 시 대체자로 선발됨    - 희망근로기관은 참...</span>
	<span class="date"><strong>08</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0702&amp;mode=V&amp;no=2476517&amp;upr_ntt_no=2476517&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0702.html">
	<b>2021학년도 제1학기 학부 신입생 수강신청 안내</b>
	<span class="board_txt">가. 학부 신입생 수강신청 기간    - (1차) 2021. 2. 15.(월) 09:00 ~ 2. 16.(화) 18:00    - (추가 합격자) 2021. 2. 25.(목) 09:00 ~ 2. 26.(금) 18:00   나. 수강신청 방법: 통합정보시스템(http://cnuis.cnu.ac.kr/jsp/lectureF.jsp) 접속하여 신청     ※ 충남대학교 홈페이지에 신입생 수강신청 바로가기 게시 예정  다. 주요사항    - 학부 신입생들은 수강신청 전에 소속 학과의 수강신청 관련 공지사항 반드시 숙...</span>
	<span class="date"><strong>08</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0702&amp;mode=V&amp;no=2476487&amp;upr_ntt_no=2476487&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0702.html">
	<b>2021학년도 신입생 학생증 발급 안내문</b>
	<span class="board_txt">2021년 충남대학교 신입생 학생증 발급안내학생증 신청방법 (www.kebhana.com)*2021년 학번만 신청가능. (그 외 학번은 충남대 영업점에서 개별 신청)☞하나은행 홈페이지 – 첫화면 - 검색 (오른쪽상단) 에 “학생증” 입력 학생증카드 예약등록 클릭 본인정보 등 입력 후 신청서 출력 (로그인 불필요) 및 충남대하나은행에 서류접수☞접수시 준비서류 : 출력물 (총 9장) 과 신분증(주민...</span>
	<span class="date"><strong>08</strong>Feb.</span>
	</a>
</li>	                                </ul>
	                                <a href="_prog/_board/index%EF%B9%96code=sub07_0702&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0702.html" class="more">학사정보 더보기</a>
	                            </div>
	                            <strong><a href="#mboard-4" class="bd_lbk">교육정보</a></strong>
	                           <div id="mboard-4" class="grap">
	                                <ul class="obj">
	                                <li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0704&amp;mode=V&amp;no=2476558&amp;upr_ntt_no=2476558&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0704.html">
	<b>2020년도 동기방학 공기업 취업대비 맞춤형 아카데미 운영 안내</b>
	<span class="board_txt">가. 사 업 명: 공기업 취업대비 맞춤형 아카데미  나. 운영기간: 2021. 2월  다. 대    상: 충남대학교 재학생(학부 및 대학원)  ※ 단, 본 사업 참여학과 소속인 경우로 한정(붙임 1 참조)  라. 신청방법: 사업단 홈페이지(http://lead.cnu.ac.kr)를 통해 참가신청서(붙임2) 제출  마. 선정방법: 선착순 선발  바. 모집인원 및 세부일정  ※ 본 아카데미 과정은 비대면(ZOOM)으로 실시구    분기    ...</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0704&amp;mode=V&amp;no=2476534&amp;upr_ntt_no=2476534&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0704.html">
	<b>2020년도 지역선도대학 육성사업 비대면 교육 포럼 개최 안내</b>
	<span class="board_txt">1. 일    시: 2021. 2. 16.(화) 14:00 ~ 18:00  2. 방    법: 비대면 방식(Youtube 온라인 생중계)      ※ 충남대학교 지역선도대학육성사업 Youtube 채널 활용         (https://www.youtube.com/channel/UCUzKElgP2z75rrayTvHjYBQ)  3. 주최․주관: 충남대학교 지역선도대학육성사업단  4. 대    상: 대전·세종·충남 권역 대학 관계자  5. 세부내용: 포스터 참조</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0704&amp;mode=V&amp;no=2476533&amp;upr_ntt_no=2476533&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0704.html">
	<b>2021학년도 신입생특별과정</b>
	<span class="board_txt">○ 모집대상 : 2021학년도 신입생 500명○ 등록기간 : 2021.02.01. ~ 접수순 마감○ 강의기간 : 2021.03.02. ~ 2021.11.26.○ 과정설명 : http://blog.naver.com/cnuglobal ←클릭○ 접수방법 :   -온라인접수: http://blog.naver.com/cnuglobal (링크클릭-접수)   -전화  접수: 042-821-8810 (신입생과정 접수처)   ○ 문의 : 042-821-8810</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0704&amp;mode=V&amp;no=2476064&amp;upr_ntt_no=2476064&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0704.html">
	<b>2020학년도 CNU 강사를 위한 교수법 워크숍 실시 안내</b>
	<span class="board_txt">가. 주제: 비대면 파워포인트 교안 클리닉  나. 운영방법: ZOOM을 활용한 실시간 온라인 워크숍 실시  다. 일시(시리즈 형식으로, 동일한 내용 아님)    1) 1탄: 2021. 2. 4.(목) 14:00~16:00    2) 2탄: 2021. 2. 5.(금) 14:00~16:00  라. 대상: 충남대학교 강사 선착순 50명    ※ 강사 신청 인원이 50명이 안될 경우 전임교원도 참여 가능  마. 강연자: 김지훈 강사(PT Story)  바. 사전 신청 방법: http://naver.m...</span>
	<span class="date"><strong>02</strong>Feb.</span>
	</a>
</li>	                                </ul>
	                                <a href="_prog/_board/index%EF%B9%96code=sub07_0704&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0704.html" class="more">교육정보 더보기</a>
	                            </div>
	                            <strong><a href="#mboard-5" class="bd_lbk">채용/초빙</a></strong>
	                           <div id="mboard-5" class="grap">
	                                <ul class="obj">
	                                <li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0705&amp;mode=V&amp;no=2476564&amp;upr_ntt_no=2476564&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0705.html">
	<b>한국어 비전임강사 채용-변경 공고</b>
	<span class="board_txt">○ 채용공고: 2021. 2. 4.(목) ~ 2021. 2. 22.(목) 18:00까지 ○ 응시원서 접수: 2021. 2. 4.(목) ~ 2021. 2. 22.(목) 18:00까지</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0705&amp;mode=V&amp;no=2476560&amp;upr_ntt_no=2476560&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0705.html">
	<b>BK21 FOUR 세계시민교육 미래인재 양성사업단 산학협력 전담 인력 공고</b>
	<span class="board_txt">1. 채용분야분야채용형태채용인원업무 분야(내용)산학협력전담인력계약직1명- 세계시민교육 미래인재 양성사업단 사업목적 달성 및 산학협력 활성화를 위한 업무- 사업단장을 보좌하여 기타 사업단 관련 업무 수행     2. 응시자격 및 우대사항구분내   용자격요건 가. 국가공무원법 제33조에 의한 결격사유가 없는 자 나. 공직선거법 제266조 및 공무원임용시험령 등 관계법령에...</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0705&amp;mode=V&amp;no=2476557&amp;upr_ntt_no=2476557&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0705.html">
	<b>대학원 정부재정지원사업 행정사무원(기간제계약직) 채용 공고 안내</b>
	<span class="board_txt">가. 채용분야별 인원 및 담당업무구분인원필수 자격 요건담당 업무 (예정)행정사무원(기간제계약직)1명◦학사 학위 이상 ※ 우대조건   ‧ 정부재정지원사업 유경험자  ‧ 대학 등 유사 직종 경력자  ◦정부재정지원사업 운영, 예산 관리 등 - 사업계획서 및 평가보고서 작성 - 대학원 정부재정지원사업 운영, 예산관리◦기타 대학원장이 지정하는 업무  나. 채용 일정구 분일 정...</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0705&amp;mode=V&amp;no=2476554&amp;upr_ntt_no=2476554&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0705.html">
	<b>충남대학교 심리학과 4단계 BK21사업 산학협력전담인력 채용공고(한국사회...</b>
	<span class="board_txt">충남대학교 심리학과 4단계 BK21사업한국사회의 심리적 통증, 중독, 그리고 자기조절 교육연구단 산학협력전담인력 채용 공고         충남대학교 심리학과 4단계 BK21사업 &lt;한국사회의 심리적 통증, 중독, 그리고 자기조절 교육연구단&gt;에서 근무할 산학협력전담인력을 다음과 같이 모집합니다.                                              2020년  2월  9일                           한국사회의 ...</span>
	<span class="date"><strong>09</strong>Feb.</span>
	</a>
</li>	                                </ul>
	                                <a href="_prog/_board/index%EF%B9%96code=sub07_0705&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0705.html" class="more">채용/초빙 더보기</a>
	                            </div>
	                            <strong><a href="#mboard-6" class="bd_lbk">언론속CNU</a></strong>
	                           <div id="mboard-6" class="grap">
	                                <ul class="obj">
	                                <li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub01_010707&amp;mode=V&amp;no=2476601&amp;upr_ntt_no=2476601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010707.html">
	<b>[중도시평=이진숙 총장] 팁스(TIPS) 타운, 스타트업(Start-up) 파크와 대학의 ...</b>
	<span class="board_txt">대전을 대한민국 최고의 기술창업도시로 만들겠다는 대전시의 강한 의지가 팁스(TIPS) 타운과 스타트업(Start-up) 파크의 조성으로 구체화 되고 있다. 우수한 인프라가 밀집된 충남대, 카이스트, 대덕연구단지를 잇는 &#039;스타트업 밸리&#039; 조성으로 이 일대를 혁신기술창업의 메카인 한국형 실리콘밸리로 만들겠다는 시의 계획이 속도를 내고 있다. 팁스(TIPS: Technology Incubator Prog...</span>
	<span class="date"><strong>10</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub01_010707&amp;mode=V&amp;no=2476600&amp;upr_ntt_no=2476600&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010707.html">
	<b>충남대 오정환 교수, 한국체육교육학회장 선임 &lt;2021.2.9. 중도일보&gt;</b>
	<span class="board_txt">충남대 체육교육과 오정환 교수가 한국체육교육학회장에 선임됐다. 오정환 교수는 최근 온라인으로 개최된 &#039;2020년 한국체육교육학회정기총회&#039;에서 제13대 회장으로 선임됐다. 임기는 2021년 3월부터 23년 2월까지다. 오정환 신임회장은 2001년 충남대 체육교육과 교수로 임용된 이후 한국체육교육학회 상임이사와 부회장 등을 역임........[기사원본보기]</span>
	<span class="date"><strong>10</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub01_010707&amp;mode=V&amp;no=2476599&amp;upr_ntt_no=2476599&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010707.html">
	<b>충남대 홍기현 교수팀, ‘신개념 발광 스위칭 소자’ 기술 개발 &lt;2021.2.9....</b>
	<span class="board_txt">충남대학교(총장 이진숙) 홍기현 교수 등 국내 연구진이 젤 형태의 전해질 소재를 활용해 ‘신개념 발광 스위칭 소자’ 기술을 개발했다. 충남대 신소재공학과 홍기현 교수, 이선정 석사과정생, 인하대 화학공학과 이근형 교수 연구팀은 이온 전달이 가능한 전해질에 발광 염료를........[기사원본보기]</span>
	<span class="date"><strong>10</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub01_010707&amp;mode=V&amp;no=2476598&amp;upr_ntt_no=2476598&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010707.html">
	<b>충남대 윤순길김현유 교수팀 국제학술지 게재 &lt;2021.2.9. 금강일보&gt;</b>
	<span class="board_txt">충남대학교(총장 이진숙)는 신소재공학과 윤순길·김현유 교수팀이 저온인 100°C에서 직접 성장된 그래핀을 이용해 세계 최초로 낮은 팽창률(Stretchability·약 10%)을 140%까지 획기적으로 향상시킨 탄력적인 FET(field-effect transistor)를 개발했다고........[기사원본보기]</span>
	<span class="date"><strong>10</strong>Feb.</span>
	</a>
</li>	                                </ul>
	                                <a href="_prog/_board/index%EF%B9%96code=sub01_010707&amp;site_dvs_cd=kr&amp;menu_dvs_cd=010707.html" class="more">언론속CNU 더보기</a>
	                            </div>
	                            <strong class="lastchild"><a href="#mboard-7" class="bd_lbk">사업단 창업교육</a></strong>
	                           <div id="mboard-7" class="grap">
	                                <ul class="obj">
	                                <li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0709&amp;mode=V&amp;no=2476015&amp;upr_ntt_no=2476015&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0709.html">
	<b>[창업지원단] 아두이노 교육 2차 안내</b>
	<span class="board_txt">교내 학생들의 메이커스 역량 강화를 목적으로 제2학생회관(인재개발원)3층메이커스빌에 위치한 마루빌에서 아두이노 교육을 실시하오니 관심있는 학생들의 많은 참여 바랍니다. 1. 교 육 명 : 아두이노 교육(2차) 2. 일 정 : 2021. 02. 09.(화). 13:00 ~ 17:00 3. 장 소 : 인재개발원 3층 메이커스빌, 마루빌 4. 대 상 : 교내 재학생 선착순 15명 5. 신청방법 : 학생경력통합관리시스템 6. 신청...</span>
	<span class="date"><strong>01</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0709&amp;mode=V&amp;no=2475976&amp;upr_ntt_no=2475976&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0709.html">
	<b>[창업지원단] 2021학년도 1학기 창업현장실습 신청</b>
	<span class="board_txt">2021학년도 1학기 창업현장실습 신청을 받고 있습니다.창업으로 인해 학업과 병행이 어려운 경우 창업활동을 통해 학습목표를 달성하여 학점을 인정받도록 창업현장실습을 운영하고 있습니다. 접수 기간 : 2021. 02. 01.(월) ~ 02. 17.(수)까지대상 - 4학기 이상 이수한 본교 재학생 - 사업자등록증 상 대표(공동대표 포함)인 자 신청방법 : [통합정보시스템] → [학습 및 취업] → [경력개...</span>
	<span class="date"><strong>01</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0709&amp;mode=V&amp;no=2475975&amp;upr_ntt_no=2475975&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0709.html">
	<b>[창업지원단] 2021학년도 1학기 창업휴학 신청</b>
	<span class="board_txt">2021학년도 1학기 창업휴학 신청을 받고 있습니다.창업으로 인해 학업과 병행이 어려운 경우 창업으로 인한 학업단절을 막기 위해일반휴학 외에 창업사유로 최대 2년 휴학이 가능하도록 창업휴학 제도를 운영하고 있습니다. 접수 기간 : 2021. 02. 01.(월) ~ 02. 17.(수) 18:00까지대상 : 창업 후 3년 내 충남대학교 학생신청방법 : [통합정보시스템] → [학습 및 취업] → [경력개발프로그...</span>
	<span class="date"><strong>01</strong>Feb.</span>
	</a>
</li><li class="item">
	<a href="_prog/_board/index%EF%B9%96code=sub07_0709&amp;mode=V&amp;no=2473714&amp;upr_ntt_no=2473714&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0709.html">
	<b>[LINC+사업단] 인문사회, 대학원 창의 아이디어 경진대회</b>
	<span class="board_txt">1. 행 사 명: 인문사회, 대학원 창의 아이디어 경진대회  2. 행사진행: 온라인 접수를 통한 비대면 평가 및 시상  3. 참가분야: 인문사회 분야 / 대학원 분야  4. 참가대상: 캡스톤디자인 정규 교과목 수강생(팀)  5. 신청기간: 공고일 ~ 2021. 1. 15.(금)까지  6. 시상일정: 2021. 1. 27.(수) 예정  7. 제출서류: 참가신청서, 결과보고서(한글), 발표자료(PPT), 발표동영상 각 1부  8. 제출방법: 충남...</span>
	<span class="date"><strong>28</strong>Dec.</span>
	</a>
</li>	                                </ul>
	                                <a href="_prog/_board/index%EF%B9%96code=sub07_0709&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0709.html" class="more">사업단 창업교육 더보기</a>
	                            </div>
	                        </div>
								                        <script type="text/javascript">
	                           $(document).ready(function(){
	                           var btn = ".mnotice strong>.bd_lbk";
							   var vIdx = '1';

	                           var option = {lv:1,obj:".mnotice .grap",view:vIdx};
	                           targetOpener(btn,option);
	                           });
	                        </script>
	                    </div>
	                </div>
	                <div class="popupzone">
	                    <h3>POPUP<br> ZONE</h3>
                        <div class="grap">
                            <ul class="obj">
								<li class='item'><a href='http://#' target='_blank' title='새창열림'><span class='thumbResize_A'><img src='Upl/kr/_popup_zone/kr_popup_zone_0_1612397881.jpg' alt='2021년 1학기 2차 국가장학금 신청 이미지'></span></a></li><li class='item'><a href='http://homepage.cnu.ac.kr/eduinno/community/community01.do?mode=view&amp;articleNo=205294&amp;article.offset=0&amp;articleLimit=10' target='_blank' title='새창열림'><span class='thumbResize_A'><img src='Upl/kr/_popup_zone/kr_popup_zone_0_1610340284.jpg' alt='나노학위과정신설 이미지'></span></a></li><li class='item'><a href='_prog/_board/index%EF%B9%96mode=V&amp;no=2473885&amp;code=sub07_0702&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0702&amp;skey=&amp;sval=&amp;site_dvs=&amp;ntt_tag=&amp;GotoPage=.html' target='_blank' title='새창열림'><span class='thumbResize_A'><img src='Upl/kr/_popup_zone/kr_popup_zone_0_1610426718.jpg' alt='2021학년도 제1학기 등록금 납부 안내 이미지'></span></a></li><li class='item'><a href='http://#' target='_blank' title='새창열림'><span class='thumbResize_A'><img src='Upl/kr/_popup_zone/kr_popup_zone_0_1611904906.jpg' alt='2020년도 부패방지 시책평가 결과 이미지'></span></a></li>                            </ul>
                        </div>
                        <div class="count"><i>1</i>/3</div>
                        <div class="control">
                           <button type="button" class="ir" data-type="prev">팝업존 이전</button>
                           <button type="button" class="ir" data-type="stop">팝업존 멈춤</button>
                           <button type="button" class="ir" data-type="play" style="display: none;">팝업존 시작</button>
                           <button type="button" class="ir" data-type="next">팝업존 다음</button>
                        </div>
                        <script type="text/javascript">
		                     (function(){
		                     var param = ".popupzone",
		                     btn = ".control",
		                     obj = ".item",
		                     auto = true,
		                     f = 1000,
		                     s = 3000,
		                     p = {use:true,type:1,path:".count"},
		                     h = true;
		                     popzone(param,btn,obj,auto,f,s,p,h);
		                     }());
		                 </script>
	                </div>
	            </div>
	        </section>
	        <section id="cont3">
	            <h2 class="skip">퀵 메뉴 서비스</h2>
	            <div class="inner">
	                <div class="qservice clickOpen">
		                <a class="qtit sev_Open" href="#"><b>취업&middot;창업<br>CNU With U</b>(학생경력통합관리시스템)</a>
		                <div class="q_link">
		                	<div class="linkbox">
	                        	<strong class="titwrap">
	                        		<span class="cnu"><em>CNU</em>충남대학교</span>
	                        		<span>링크서비스</span>
	                        		<span class="infoti">취업&middot;창업</span>
	                        	</strong>
	                        	<ul class="bnwrap">
				                    <li class="ico1"><a href="http://job.cnu.ac.kr/" title="새창으로 해당사이트가 보여집니다." target="_blank">인재개발원</a></li>
									<li class="ico3"><a href="http://withu.cnu.ac.kr" title="새창으로 해당사이트가 보여집니다." target="_blank">CNU With U<br>(학생경력통합 관리시스템)</a></li>
									<li class="ico2"><a href="https://connect.cnu.ac.kr/startup" title="새창으로 해당사이트가 보여집니다." target="_blank">창업지원단</a></li>
								</ul>
	                        </div>
		                	<a href="#" class="close">close</a>
		                </div>
		                <script type="text/javascript">
                           $(document).ready(function(){
		                		$(".qservice .qtit").on("click",function(){
									$("#body_layout").addClass("quic_on");
								});
		                		$(".qservice .close").on("click",function(){
									$("#body_layout").removeClass("quic_on");
								});
		                	});
		                </script>
	                    <div class="grap">
	                        <ul class="obj">
	                            <li class="item">
	                                <ul>
	                                    <li class="ico1"><a href="http://portal.cnu.ac.kr/" target="_blank" title="새창열림">CNU포털</a></li>
	                                    <li class="ico2"><a href="http://library.cnu.ac.kr/" target="_blank" title="새창열림">도서관</a></li>
	                                    <li class="ico3"><a href="http://cnu.korus.ac.kr/" target="_blank" title="새창열림">코러스시스템</a></li>
	                                    <li class="ico4"><a href="http://cnufund.cnu.ac.kr/" target="_blank" title="새창열림">발전기금</a></li>
	                                    <li class="ico5"><a href="http://job.cnu.ac.kr/" target="_blank" title="새창열림">인재개발원</a></li>
	                                    <li class="ico6"><a href="https://cnu.icerti.com/icerti/index_internet.jsp" target="_blank" title="새창열림">인터넷증명</a></li>
	                                    <li class="ico7"><a href="../cyber/cyber.html" target="_blank" title="새창열림">사이버투어</a></li>
	                                    <li class="ico8"><a href="sub01/sub01_010701.html">홍보동영상</a></li>
										<li class="ico10"><a href="http://webzine.cnuwebzine.co.kr/" target="_blank" title="새창열림" rel="noopener noreferer">CNU<br>Webzine</a></li>
										<li class="ico9"><a href="http://www.knu39.org" target="_blank" title="새창열림" rel="noopener noreferer">국립대학<br>육성사업</a></li>
										<li class="ico11"><a href="http://lead.cnu.ac.kr/" target="_blank" title="새창열림" rel="noopener noreferer">지역선도대학<br>육성사업</a></li>
	                                </ul>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </section>
	        <section id="cont4">
	            <h2><b>CNU</b> NEWS</h2>
	            <p>충남대학교의 새롭고 알찬 뉴스내용을 여러분께 전달합니다.</p>
	            <div class="inner">
	                <div class="mnews">
	                    <div class="grap">
	                        <ul class="obj clearfix">
	                        	

<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476652&amp;upr_ntt_no=2476652&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612945850.jpg' alt='‘대전.세종.충남 지역혁신 플랫폼 사업’ 설명회 ... 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">‘대전.세종.충남 지역혁신 플랫폼 사업’ 설명회 ...</b>
            <span class="mp_txt">지역혁신 및 국가균형발전을 위한 지역과 대학의 협력방안 구축  충남대와 대전․세종․충남 3개 지자체, 공주대 관계자로 구성된 ‘대전․세종․충남 지역혁신사업 준비추진단’이 지역혁신플랫폼 구축을 위한 사업설명회 및 공청회를 개최했다.대전․세종․충남 지역혁신사업 준비추진단은 2월 10일 오전 10시 30분, 각 기관 관계자들이 참석한 가운데 공주대 대학본부 1층 ...</span>
            <em class="date">2021-02-10</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476650&amp;upr_ntt_no=2476650&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612942417.jpg' alt='신소재공학과 김현유 교수팀, &#039;제27회 휴먼테크... 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">신소재공학과 김현유 교수팀, &#039;제27회 휴먼테크...</b>
            <span class="mp_txt">유미, 하연우, 최혁, 강은지 연구원 수상 공과대학 신소재공학과 유미(석박사통합과정, 주저자), 하현우(박사과정, 공동저자), 최혁(석박사통합과정, 공동저자), 강은지(석박사통합과정, 공동저자) 연구원이 제27회 휴먼테크논문대상 Material Science &amp; Engineering 분야에서 동상을 수상했다.신소재공학과 연구팀(지도교수 김현유)은 이번 연구에서 세륨 산화물과 티타늄 산화물을 ...</span>
            <em class="date">2021-02-10</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476569&amp;upr_ntt_no=2476569&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612859062.jpg' alt='충남대, 장애대학생 교육복지지원 ‘최우수’ 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">충남대, 장애대학생 교육복지지원 ‘최우수’</b>
            <span class="mp_txt">423개 캠퍼스 중 9.2%만 최우수2011년, 2014년, 2017년, 2020년 3년 주기 평가 모두 ‘최우수’ 충남대학교가 ‘2020 장애대학생 교육복지지원 실태평가’에서 최우수 대학에 선정됐다.국립특수교육원이 2월 8일, ‘2020 장애대학생 교육복지지원 실태평가’ 결과를 발표한 가운데 충남대가 전국 343개 대학, 423개 캠퍼스 중 최우수 대학에 선정됐다. 최우수(90점 이상) 대학은 324개 중 39개 ...</span>
            <em class="date">2021-02-09</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476568&amp;upr_ntt_no=2476568&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612858926.jpg' alt='체육교육과 오정환 교수, 한국체육교육학회장 선임 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">체육교육과 오정환 교수, 한국체육교육학회장 선임</b>
            <span class="mp_txt">제13대 한국체육교육학회장  사범대학 체육교육과 오정환 교수가 한국체육교육학회장에 선임됐다.오정환 교수는 최근 온라인으로 개최된 ‘2020년 한국체육교육학회정기총회’에서 제13대 회장으로 선임됐다. 임기는 2021년 3월부터 23년 2월까지다.오정환 신임회장은 2001년 충남대 체육교육과 교수로 임용된 이후 한국체육교육학회 상임이사와 부회장 등을 역임한 바 있다.오정...</span>
            <em class="date">2021-02-09</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476572&amp;upr_ntt_no=2476572&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612860702.jpg' alt='영어영문학과 이상철 교수, 부총리 겸 교육부 장관... 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">영어영문학과 이상철 교수, 부총리 겸 교육부 장관...</b>
            <span class="mp_txt">교육부 학술연구지원사업 기여 공로 인정인문대학 영어영문학과 이상철 교수가 인문사회분야 학술연구지원 사업을 추진함에 있어 원활한 사업 추진에 공적이 있고 해당 분야 역량 강화에 적극적으로 기여한 공로를 인정받아 부총리겸 교육부 장관상을 수상했다. 한편, 이상철 교수는 2018년 4월 1일부터 한국연구재단 인문사회연구본부 (책임) 전문위원, 학술지평가 전문평가...</span>
            <em class="date">2021-02-09</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476567&amp;upr_ntt_no=2476567&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612858846.jpg' alt='윤순길, 김현유 교수팀 &#039;Advanced Science&#039; 논문 ... 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">윤순길, 김현유 교수팀 &#039;Advanced Science&#039; 논문 ...</b>
            <span class="mp_txt">뛰어난 연신성을 보유한 Graphene-FET 개발  신소재공학과 윤순길 교수팀과 김현유 교수팀이 저온인 100°C에서 직접 성장된 그래핀을 이용해 세계 최초로 낮은 Stretchability(약 10%)를 140%까지 획기적으로 향상시킨 stretchable field-effect transistor (FET)를 개발했다.이번 연구 결과는 재료 분야 유명 저널 학술지인 &#039;Advanced Science&#039; (IF: 15.840)에 2월 1일자 온라인판에 게재됐다. (논문 제목...</span>
            <em class="date">2021-02-09</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476566&amp;upr_ntt_no=2476566&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612858713.jpg' alt='신소재공학과 홍기현 교수팀, ‘신개념 발광 스위... 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">신소재공학과 홍기현 교수팀, ‘신개념 발광 스위...</b>
            <span class="mp_txt">디스플레이 &amp; 광전 소자 분야에 전기화학적 원리 도입 충남대-인하대 공동 연구팀 기술 개발 신소재공학과 홍기현 교수 등 국내 연구진이 젤 형태의 전해질 소재를 활용해 ‘신개념 발광 스위칭 소자’ 기술을 개발했다. 신소재공학과 홍기현 교수, 이선정 석사과정생, 인하대 화학공학과 이근형 교수 연구팀은 이온 전달이 가능한 전해질에 발광 염료를 첨가해 고품질의 유...</span>
            <em class="date">2021-02-09</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476565&amp;upr_ntt_no=2476565&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612857811.jpg' alt='㈜카보엑스퍼트, 충남대에 화장품세트 기부 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">㈜카보엑스퍼트, 충남대에 화장품세트 기부</b>
            <span class="mp_txt">자체 화장품 브랜드 ‘테라피토에이벨’ 380세트 기부  “추운 날씨에 고생하는 대학 청소 노동자들에게 피부 보호를 위해 화장품을 기부합니다”충남대학교 기술지주 자회사이자 교수 창업 벤처기업인 ㈜카보엑스퍼트가 추운 날씨에 고생하고 있는 충남대 청소 노동자 등을 위해 화장품 세트를 기부했다.카보엑스퍼트 박종태 대표이사는 설 명절을 앞두고 2월 8일(월), 충남...</span>
            <em class="date">2021-02-09</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476570&amp;upr_ntt_no=2476570&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612860249.jpg' alt='의류학과 엄란이 연구원, 부총리 겸 교육부장관 표... 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">의류학과 엄란이 연구원, 부총리 겸 교육부장관 표...</b>
            <span class="mp_txt">우수 연구 역량과 발전가능성 인정​생활과학대학 의류학과 엄란이 연구원이 지난 1월 4일 부총리 겸 교육부장관 표창을 수상했다. 의류학과 엄란이 연구원은 BK21플러스 사업 ‘헬스케어용 고기능성 의류 디자인 인재양성 사업팀’ 참여기간동안 뛰어난 연구역량과 발전가능성을 보여주었으며, 4년 동안 SCIE 3편, SCOPUS 4편, KCI 8편을 게재하는 등 우수한 연구 성과를 인정받았다...</span>
            <em class="date">2021-02-09</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476588&amp;upr_ntt_no=2476588&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612861721.jpg' alt='간호대학-희망진료센터 업무협약 체결 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">간호대학-희망진료센터 업무협약 체결</b>
            <span class="mp_txt">간호대학(학장 송라윤)이 노숙자 진료시설인 희망진료센터와 업무협약식을 체결했다.간호대학은 업무 협약에 따라 취약군 대상 건강증진사업을 올해에도 지속할 예정이다.대학혁신지원사업의 공동연구플랫폼 사업의 지원을 받아 진행된 ‘지역사회 취약군 건강증진사업’은 치매위험군과 대사증후군을 가진 대상자 두 집단을 선별하고, 주 2회 건강타이치교실을 12주간 제...</span>
            <em class="date">2021-02-09</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476350&amp;upr_ntt_no=2476350&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612514130.jpg' alt='충남대에 지역주민 위한 치유의 숲 생긴다 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">충남대에 지역주민 위한 치유의 숲 생긴다</b>
            <span class="mp_txt">유성구 ‘2021년 숲길 정비사업’에 충남대 산책로 포함이진숙 총장, ‘CNU 산책로 조성’ 공약 실천 대전시 유성구의 ‘2021년 숲길 정비사업’에 이진숙 총장이 공약한 ‘CNU 산책로 조성’이 포함돼 충남대 캠퍼스가 지역민들에게 힐링의 공간으로 거듭난다.유성구(청장 정용래)가 최근 ‘2021년 숲길 정비사업’을 발표한 가운데 충남대 이진숙 총장의 ‘CNU 산책로 조성’ 공약...</span>
            <em class="date">2021-02-05</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476349&amp;upr_ntt_no=2476349&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612513388.jpg' alt='환경공학과 서동일 교수, 한국수자원학회 학술상 ... 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">환경공학과 서동일 교수, 한국수자원학회 학술상 ...</b>
            <span class="mp_txt">수자원 분야 학술발전 기여공과대학 환경공학과 서동일 교수가 수자원 분야 학술발전에 기여한 공로를 인정받아 한국수자원학회 학술상을 수상했다.한국수자원학회는 지난 1월 22일(금), 건설회관 중회의실에서 정기총회를 개최하고, 서동일 교수에게 상패를 전달했다.서동일 교수는 지난 30년간 우리나라 하천 및 호소 주요 수자원의 녹조현상을 포함한 수질 모델 분야 지속...</span>
            <em class="date">2021-02-05</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476279&amp;upr_ntt_no=2476279&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612423399.jpg' alt='충남대학교, 세종캠퍼스 입주 확정 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">충남대학교, 세종캠퍼스 입주 확정</b>
            <span class="mp_txt">임대형, 분양형 모두 입주 ‘유일’, 정원 ‘최다’, 규모 ‘최대’의학, 인공지능(AI), 정보통신기술(ICT) 특화 충남대학교가 세종캠퍼스 진출을 확정지었다.행정중심복합도시건설청과 한국토지주택공사가 2월 3일, 세종시 공동캠퍼스(4-2생활권) 입주 대학 선정 결과를 발표한 가운데 충남대의 임대형 및 분양형 캠퍼스 입주가 확정됐다. 이번 공동캠퍼스 입주에는 총 13개 대학...</span>
            <em class="date">2021-02-04</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476291&amp;upr_ntt_no=2476291&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612429680.jpg' alt='S조형연구소 김희상(조소 91) 대표, 발전기금 기부 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">S조형연구소 김희상(조소 91) 대표, 발전기금 기부</b>
            <span class="mp_txt">조소과 발전기금 2천만 원 전달  예술대학 조소과를 졸업한 김희상 동문이 발전기금을 기부했다.S조형연구소 김희상(조소 91) 대표는 2월 4일(목) 오후 2시, 이진숙 총장을 방문해 조소과 발전기금 2천만 원을 전달했다.김희상 대표는 “모교와 학과 발전에 보탬이 되고자 이번 기부를 결심하게 됐다”며, “비록 적은 금액이지만 후배들의 밝은 앞날에 자양분이 됐으면 한다”고 ...</span>
            <em class="date">2021-02-04</em>
        </span>
    </a>
</li>




<li class="item">
    <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;mode=V&amp;no=2476290&amp;upr_ntt_no=2476290&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html">
    <div class='thumb'><img src='Upl/_board/sub07_0703/sub07_0703_0_1612429610.jpg' alt='분석과학기술대학원, 온라인 역량강화교육 개최 이미지'  height='55'  /></div>
        <span class="mphoto_txt">
            <b class="mp_tit">분석과학기술대학원, 온라인 역량강화교육 개최</b>
            <span class="mp_txt">예비 신입생 및 재학생 대상 역량강화교육 진행  분석과학기술대학원(원장 안현주)이 제4차 산업혁명시대 분석장비 전문가 양성을 위해 온라인 역량강화교육을 개최했다.분석과학기술대학원은 2월 1일(월)부터 4일(목)까지 2021학년도 예비 신입생들과 재학생들을 대상으로 역량강화교육을 온라인(ZOOM)으로 진행했다.이번 역량강화교육은 분석전문가 기본교육(분석 소프트웨어,...</span>
            <em class="date">2021-02-04</em>
        </span>
    </a>
</li>


	                        </ul>
	                    </div>
	                    
	                    <div class="control">
							<div class="indicator"></div>
	                        <button type="button" data-control="prev" class="btn_prev"><span>뉴스 이전</span></button>
	                        <button type="button" data-control="next" class="btn_next"><span>뉴스 다음</span></button>
	                        <button type="button" data-control="play" class="btn_play"><span>뉴스 재생</span></button>
	                        <button type="button" data-control="stop" class="btn_stop"><span>뉴스 정지</span></button>
	                    </div>
                        <a href="_prog/_board/index%EF%B9%96code=sub07_0703&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0703.html" class="more"><span>뉴스 더보기</span></a>
						
	                    <script type="text/javascript">
        					$(document).ready(function(){   
        					
        						(function(){
		                            var param = ".mnews",
		                                obj = ".item",
		                                btn = ".mnews .control",
		                                interval = 3000,
		                                speed = 300,
		                                viewSize = 0,
		                                moreSize = 0,
		                                dir = "x",
		                                data = 0,
		                                auto = true,
		                                hover = false,
		                                method = "easeInOutCubic",
		                                op1 = false;

		                            stateScrollObj(param,obj,btn,interval,speed,viewSize,moreSize,dir,data,auto,hover,method,op1);
		                        }());

        					});

        				</script>
						<script type="text/javascript">
							$(document).ready(function(){ 
								$(".mnews .control button.btn_stop").on("click",function(){
									$(".mnews .control button.btn_play").focus();
								});
								$(".mnews .control button.btn_play").on("click",function(){
									$(".mnews .control button.btn_stop").focus();
								});
							});
						</script>
						<script type="text/javascript">
        					$(document).ready(function(){
        						// li갯수
        						var liLength = $(".mnews ul li").size();

        						// indicator Length
        						for(var i=0 ; i<liLength ; i++){

        							$(".indicator").append("<a href='#' class='n"+Number(i+1)+"'>"+Number(i+1)+"</a>");
        							$(".mnews ul li").eq(i).addClass("n"+Number(i+1));
        						}
        						$(".indicator a").eq(0).addClass("on");
        						// indicator index
        						$(".indicator a").click(function(e){
        							e.preventDefault();
        							var _clickNum = Number($(this).index()+1); //현재페이징인덱스
        							var current_item = $(".mnews .obj .item.n" + _clickNum).index();//활성화하려는 아이템

        							$(".indicator a").removeClass("on");
        							$(".indicator a").eq(Number(_clickNum-1)).addClass("on");
        							for(var i=0;i<current_item;i++){
        								$(".mnews .control button.btn_next").click();
        							}

        						});
        						(function(){
		                            var param = ".mnews",
		                                obj = ".item",
		                                btn = ".mnews .control",
		                                interval = 3000,
		                                speed = 300,
		                                viewSize = 0,
		                                moreSize = 0,
		                                dir = "x",
		                                data = 0,
		                                auto = true,
		                                hover = false,
		                                method = "easeInOutCubic",
		                                op1 = false;

		                            stateScrollObj(param,obj,btn,interval,speed,viewSize,moreSize,dir,data,auto,hover,method,op1);
		                        }());

        					});

        				</script>
	                </div>
										<div class="calendar clearfix">
	                    <span class="cate">학사일정</span>
	                    <p class="ctrMm"><strong id="calTitle">2021.02</strong></p>
	                    <table class="schCal_tbl">
	                        <caption>
	                            <strong>02월 학사일정</strong>
	                            <summary>02월 학사일정입니다.</summary>
	                        </caption>
	                        <colgroup>
	                            <col>
	                            <col>
	                        </colgroup><thead>
	                        <tr>
	                            <th scope="col">SUN</th>
	                            <th scope="col">MON</th>
	                            <th scope="col">TUE</th>
	                            <th scope="col">WED</th>
	                            <th scope="col">THU</th>
	                            <th scope="col">FRI</th>
	                            <th scope="col">SAT</th>
	                        </tr>
	                        </thead>
	                        <tbody>


							  <tr>
<td class="today"><p><a class="date" href="#">14</a></p></td><td ><p><a class="date" href="#">15</a></p></td><td ><p><a class="date" href="#">16</a></p></td><td ><p><a class="date" href="#">17</a></p></td><td ><p><a class="date" href="#">18</a></p></td><td ><p><a class="date" href="#">19</a></p></td><td ><p><a class="date" href="#">20</a></p></td>	                               <!--<td>&nbsp;</td>
	                                <td>&nbsp;</td>
	                                <td class="today"><p><a class="date" href="#">1</a></p></td>
	                                <td><p><a class="date" href="#">2</a></p></td>
	                                <td><p><a class="date" href="#">3</a></p></td>
	                                <td><p><a class="date" href="#">4</a></p></td>   -->
	                            </tr>
	                        </tbody>
	                    </table>
	                    <ul class="schCal_cont">

							<li><span class="date">02.23(화)~02.26(금)</span> <b>대학일정</b>2021학년도 제1학기 등...</li>
							<li><span class="date">02.23(화)~02.26(금)</span> <b>일반대학원</b>2021학년도 제1학기 등...</li>
							<li><span class="date">02.25(목)</span> <b>대학일정</b>학위수여식(2020학년...</li>
							<li><span class="date">02.25(목)</span> <b>일반대학원</b>학위수여식(2020학년...</li>
							<li><span class="date">02.26(금)</span> <b>대학일정</b>2021학년도 입학식</li>
	                    </ul>
	                    <a class="more" href="_prog/academic_calendar/index%EF%B9%96site_dvs_cd=kr&amp;menu_dvs_cd=05020101.html">전체보기</a>
	                </div>	                <!-- <div class="calendar clearfix">
	                    <span class="cate">학사일정</span>
	                    <p class="ctrMm"><strong id="calTitle">2018.12</strong></p>
	                    <table class="schCal_tbl">
	                        <caption>
	                            <strong>12월 학사일정</strong>
	                            <summary>12월 학사일정입니다.</summary>
	                        </caption>
	                        <colgroup>
	                            <col>
	                            <col>
	                        </colgroup><thead>
	                        <tr>
	                            <th scope="col">SUN</th>
	                            <th scope="col">MON</th>
	                            <th scope="col">TUE</th>
	                            <th scope="col">WED</th>
	                            <th scope="col">THU</th>
	                            <th scope="col">FRI</th>
	                            <th scope="col">SAT</th>
	                        </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                                <td>&nbsp;</td>
	                                <td>&nbsp;</td>
	                                <td>&nbsp;</td>
	                                <td class="today"><p><a class="date" href="#">1</a></p></td>
	                                <td><p><a class="date" href="#">2</a></p></td>
	                                <td><p><a class="date" href="#">3</a></p></td>
	                                <td><p><a class="date" href="#">4</a></p></td>
	                            </tr>
	                        </tbody>
	                    </table>
	                    <ul class="schCal_cont">
	                        <li><span class="date">10.01(월)~10.05(금)</span> <b>대학일정</b>조기졸업 신청</li>
	                        <li><span class="date">10.01(월)</span> <b>일반대학원</b>수업일수 1/4선</li>
	                        <li><span class="date">10.01(월)</span> <b>전문/특수대학원</b>개천절</li>
	                        <li><span class="date">10.01(월)~10.05(금)</span> <b>대학일정</b>수강신청 취소</li>
	                        <li><span class="date">10.01(월)</span> <b>대학일정</b>한글날</li>
	                    </ul>
	                    <a class="more" href="#">전체보기</a>
	                </div> -->
	            </div>
	        </section>
	        <section id="cont5">
	            <h2><b>CNU</b> SNS</h2>
	            <p>소통하는 충남대학교, 여러분과 함께 만들어갑니다.</p>
	            <div class="inner">
	                <div class="msns">
	                    <div class="mboard-wrap">
	                        <div class="mboardbox">
	                           <div id="msns-1" class="grap">
	                              <ul class='obj'><li class='item yt'>
				<a href='https://www.youtube.com/watch?v=tHBYUeiRH8U' target='_blank' title='새창열림'>
					<span class='cate'>Youtube</span>
					<span class='thumb'>
						<img src='https://i.ytimg.com/vi/tHBYUeiRH8U/mqdefault.jpg' alt=홍보대사가 대신 전해드리는 특별한 설날인사🙋‍♀️🖐'>
					</span>
					<span class='txt_box'>
						<b>홍보대사가 대신 전해드리는 특별한 설날인사🙋‍♀️🖐</b>
						<span class='date'>2021-02-11</span>
					</span>
				</a>
			</li><li class='item yt'>
				<a href='https://www.youtube.com/watch?v=ihqqHWvrP38' target='_blank' title='새창열림'>
					<span class='cate'>Youtube</span>
					<span class='thumb'>
						<img src='https://i.ytimg.com/vi/ihqqHWvrP38/mqdefault.jpg' alt=📣2020 CNU 우수강의 공유·확산 사업 최우수강의교수 선정📣'>
					</span>
					<span class='txt_box'>
						<b>📣2020 CNU 우수강의 공유·확산 사업 최우수강의교수 선정📣</b>
						<span class='date'>2021-02-09</span>
					</span>
				</a>
			</li><li class='item yt'>
				<a href='https://www.youtube.com/watch?v=jxuJuQ3n140' target='_blank' title='새창열림'>
					<span class='cate'>Youtube</span>
					<span class='thumb'>
						<img src='https://i.ytimg.com/vi/jxuJuQ3n140/mqdefault.jpg' alt=2021년 충남대의 겨울 ❄⛄ | CNU IN WINTER'>
					</span>
					<span class='txt_box'>
						<b>2021년 충남대의 겨울 ❄⛄ | CNU IN WINTER</b>
						<span class='date'>2021-02-03</span>
					</span>
				</a>
			</li></ul>	                              <ul class="obj">
	                                <li class="item fb">
	                                	<span class="cate">facebook</span>
	                                    <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCNUNOW&amp;width=400&amp;height=280&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=227321604055044" width="100%" height="280" scrolling="yes" frameborder="0" allowTransparency="true" id="sns_list_box1" title=" 페이스북"></iframe>
	                                </li>
	                              </ul>
	                           </div>
								<ul class="sns_link">
		                           	<li><strong class="fb_btn"><a class="ov bd_lbk" href="https://www.youtube.com/channel/UCq7akI5OzcKwtn0Sd9TFL0w" target="_blank" title="새창열림">Youtube</a></strong></li>
		                           	<li><strong class="yt_btn"><a href="https://ko-kr.facebook.com/CNUNOW/" class="bd_lbk" target="_blank" title="새창열림">Facebook</a></strong></li>
		                            <li><strong class="it_btn"><a href="https://cnunow.blog.me/" class="bd_lbk" target="_blank" title="새창열림">Blog</a></strong></li>
		                            <li><strong class="bl_btn"><a href="https://www.instagram.com/cnu_now/" class="bd_lbk" target="_blank" title="새창열림">Instagram</a></strong></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>
	        <section id="cont6">
	            <h2 class="skip">후원의 집</h2>
	            <div class="inner">
	                <div class="cnu_fund">
	                	<div class="cnu_fund_ti">
	                    <strong>충남대학교의 발전을 위해 후원해 주시는 따스한 곳, 사랑을 후원하는 CNU 후원의 집</strong>
	                    <a href="https://cnufund.cnu.ac.kr" target="_blank" title="새창열림" class="more">자세히보기</a>
	                	</div>
	                    <div class="grap">

		                <ul class="mlink obj">
							<li class="item ico1"><a href="https://cnu.icerti.com/icerti/index_internet.jsp" target="_blank" id="btn1" title="인터넷증명새창열림">인터넷증명</a></li>
							<li class="item ico2"><a href="http://e-learn.cnu.ac.kr" target="_blank" id="btn2" title="대학이러닝지원센터새창열림">대학이러닝지원센터</a></li>
							<li class="item ico3"><a href="http://jsh.cnu.ac.kr/" target="_blank" id="btn3" title="정심화국제문화회관새창열림">정심화국제문화회관</a></li>
							<li class="item ico4"><a href="http://ile.cnu.ac.kr" target="_blank" id="btn4" title="기초교양교육원새창열림">기초교양교육원</a></li>
							<li class="item ico5"><a href="http://wise.cnu.ac.kr" target="_blank" id="btn5" title="SW중심대학 사업단새창열림">SW중심대학 사업단</a></li>
							<li class="item ico6"><a href="http://faculty.cnu.ac.kr/" target="_blank" id="btn6" title="교수회새창열림">교수회</a></li>
							<li class="item ico7"><a href="http://cnuis.cnu.ac.kr/EntUrgNotiQ.jsp" target="_blank" id="btn7" title="신입생 등록금고지서새창열림">신입생 등록금고지서</a></li>
							<li class="item ico8"><a href="http://cnuis.cnu.ac.kr/EntLoginPpaid.jsp" target="_blank" id="btn8" title="신입생 등록금 분납신청새창열림">신입생 등록금 분납신청</a></li>
							<li class="item ico11"><a href="http://linc.cnu.ac.kr" target="_blank" id="btn9" title="LINC PLUS 사업단새창열림">LINC PLUS 사업단</a></li>
							<li class="item ico12"><a href="http://connect.cnu.ac.kr" target="_blank" id="btn10" title="산학협력 토탈케어 서비스새창열림">산학협력 토탈케어 서비스</a></li>
							<li class="item ico13"><a href="https://www.academyinfo.go.kr/pubinfo/pubinfo0020/list.do?schlId=0000029" target="_blank" id="btn11" title="대학정보공시새창열림">대학정보공시</a></li>
							<li class="item ico14"><a href="../hub/support/support_030301.html" target="_blank" id="btn12" title="장학 학자금 관리새창열림">장학 학자금 관리</a></li>
							<li class="item ico15"><a href="http://www.cnucoop.co.kr/" target="_blank" id="btn13" title="소비자생활협동조합새창열림">소비자생활협동조합</a></li>
							<li class="item ico16"><a href="http://cic.cnu.ac.kr" target="_blank" id="btn14" title="정보화본부새창열림">정보화본부</a></li>
							<li class="item ico17"><a href="http://dream.cnu.ac.kr/" target="_blank" id="btn15" title="국제언어교육원새창열림">국제언어교육원</a></li>
							<li class="item ico18"><a href="http://library.cnu.ac.kr/" target="_blank" id="btn16" title="도서관새창열림">도서관</a></li>
							<li class="item ico21"><a href="http://dorm.cnu.ac.kr" target="_blank" id="btn17" title="학생생활관새창열림">학생생활관</a></li>
							<li class="item ico22"><a href="http://ck9.cnu.ac.kr" target="_blank" id="btn18" title="특성화사업단새창열림">특성화사업단</a></li>
							<li class="item ico23"><a href="../imhae/index.html" target="_blank" id="btn19" title="임해수련원새창열림">임해수련원</a></li>
							<li class="item ico24"><a href="http://cnuis.cnu.ac.kr/jsp/etc/toDayMenu.jsp" target="_blank" id="btn20" title="오늘의 점심새창열림">오늘의 점심</a></li>
							<li class="item ico25"><a href="http://www.cicnu.ac.kr" target="_blank" id="btn21" title="공자학원새창열림">공자학원</a></li>
							<li class="item ico26"><a href="http://cuvic.cnu.ac.kr" target="_blank" id="btn22" title="웹메일새창열림">웹메일</a></li>
							<li class="item ico27"><a href="http://cnucore.cnu.ac.kr" target="_blank" id="btn23" title="인문역량강화사업단새창열림">인문역량강화사업단</a></li>
							<li class="item ico28"><a href="http://counselling.cnu.ac.kr/usr/board.do?bbsId=BBSMSTR_000000000004" target="_blank" id="btn24" title="ONE-STOP 학생상담 서비스새창열림">ONE-STOP 학생상담<br>서비스</a></li>
							<li class="item ico31"><a href="http://counselling.cnu.ac.kr/index.do" target="_blank" id="btn25" title="학생상담센터새창열림">학생상담센터</a></li>
							<li class="item ico32"><a href="http://rc.cnu.ac.kr/xe/" target="_blank" id="btn26" title="충남대학교 RC센터새창열림">충남대학교 RC센터</a></li>
							<li class="item ico33"><a href="http://lifelong.cnu.ac.kr/" target="_blank" id="btn27" title="평생교육원새창열림">평생교육원</a></li>
							<li class="item ico34"><a href="_prog/_board/index%EF%B9%96code=sub06_060601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=060601.html" id="btn28">청렴행정</a></li>
							<li class="item ico35"><a href="http://fovu.cnu.ac.kr/index.do" target="_blank" id="btn29" title="인권센터새창열림">인권센터</a></li>
							<li class="item ico36"><a href="http://cnuss.cnu.ac.kr/smain.html" target="_blank" id="btn30" title="스포츠융복합사업단새창열림">스포츠융복합<br>창업육성사업단</a></li>
							<!-- <li class="item ico39"><a href="http://cnuelection19th.com/smain.html" target="_blank" id="btn31" title="제19대총장임용추천위원회새창열림">제19대총장임용추천위원회</a></li> -->
						</ul>
	                    </div>
	                    <div class="control">
	                        <button type="button" data-control="prev" class="btn_prev"><span>이전</span></button>
	                        <button type="button" data-control="stop" class="btn_stop"><span>멈춤</span></button>
	                        <button type="button" data-control="play" class="btn_play"><span>재생</span></button>
	                        <button type="button" data-control="next" class="btn_next"><span>다음</span></button>
	                    </div>
	                </div>
	                <script type="text/javascript">
	                    (function(){
	                        var param = ".cnu_fund",
	                            obj = ".item",
	                            btn = ".cnu_fund .control",
	                            interval = 3000,
	                            speed = 300,
	                            viewSize = 0,
	                            moreSize = 0,
	                            dir = "y",
	                            data = 0,
	                            auto = true,
	                            hover = false,
	                            method = "easeInOutCubic",
	                            op1 = false;

	                        stateScrollObj(param,obj,btn,interval,speed,viewSize,moreSize,dir,data,auto,hover,method,op1);
	                    }());
	                </script>
	            </div>
	        </section>
	        <section id="cont7">
	            <h2 class="skip">주요사이트 링크</h2>
	            <div class="inner">
	                <div class="fsite_box">
	                    <!--<strong class="jc_tit">Jump CNU</strong class="jump_tit">
	                    <p>위대한 미래를 향한 새로운 출발</p>-->
	                    <div class="site_wrap clearfix">
	                        <div class="site1 linkOpen">
	                            <strong>주요사이트</strong>
	                            <a href="#" class="molink_tit">주요사이트</a>
	                            <div class="linkwrap">
	                            <ul class="clearfix">
<li><a href="https://cnu.icerti.com/icerti/index_internet.jsp" target="_blank" title="새창으로 인터넷 증명서발급 홈페이지로 이동합니다.">인터넷 증명서 발급</a></li>
	                                <li><a href="../hub/index.html" target="_blank" title="새창으로 3처1국 부서홈페이지로 이동합니다.">3처1국 부서</a></li>
									<li><a href="http://portal.cnu.ac.kr/" target="_blank" title="새창으로 CNU포털홈페이지로 이동합니다.">CNU포털</a></li>
									<li><a href="http://ipsi.cnu.ac.kr/" target="_blank" title="새창으로 입학홈페이지로 이동합니다.">입학</a></li>
									<li><a href="http://www.icnu.net/" target="_blank" title="새창으로 동문홈페이지로 이동합니다.">동문</a></li>
									<li><a href="https://cnufund.cnu.ac.kr/" target="_blank" title="새창으로 발전기금홈페이지로 이동합니다.">발전기금</a></li>
									<li><a href="_prog/recruit/index%EF%B9%96menu_dvs_cd=07080401&amp;site_dvs_cd=kr.html" target="_blank" title="새창으로 구인구직홈페이지로 이동합니다.">구인구직</a></li>
                                    <li><a href="_prog/_board/index%EF%B9%96code=sub07_070801&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070801.html" target="_blank" title="새창으로 대학문화마당홈페이지로 이동합니다.">대학문화마당</a></li>
									<li><a href="http://iuc.cnu.ac.kr/" target="_blank" title="새창으로 산학협력단홈페이지로 이동합니다.">산학협력단</a></li>
									<li><a href="http://www.cnupress.co.kr/" target="_blank" title="새창으로 출판문화원홈페이지로 이동합니다.">출판문화원</a></li>
									<li><a href="https://www.cnuh.co.kr/" target="_blank" title="새창으로 충남대학교병원홈페이지로 이동합니다.">충남대학교병원</a></li>
									<li><a href="http://dorm.cnu.ac.kr/" target="_blank" title="새창으로 학생생활관홈페이지로 이동합니다.">학생생활관</a></li>
                                    <li><a href="http://cuvic.cnu.ac.kr/" target="_blank" title="새창으로 웹메일홈페이지로 이동합니다.">웹메일</a></li>
                                    <li><a href="https://cnu.korus.ac.kr/poc/uf/LoginCtr/lginView.do?naunvId=108&amp;locale=ko" target="_blank" title="새창으로 코러스홈페이지로 이동합니다.">코러스</a></li>
	                            </ul>
	                            <a href="#" class="close">주요사이트 닫기</a>
	                            </div>
	                        </div>
	                        <div class="site2 linkOpen">
	                            <strong>대학원</strong>
	                            <a href="#" class="molink_tit">대학원</a>
	                            <div class="linkwrap">
	                            <ul class="clearfix">
	                                <li><a href="http://grad.cnu.ac.kr/" target="_blank" title="새창으로 대학원홈페이지로 이동합니다.">대학원</a></li>
									<li><a href="https://mba.cnu.ac.kr" target="_blank" title="새창으로 경영대학원홈페이지로 이동합니다.">경영대학원</a></li>
									<li><a href="http://egc.cnu.ac.kr/" target="_blank" title="새창으로 교육대학원홈페이지로 이동합니다.">교육대학원</a></li>
									<li><a href="http://www.gnppcnu.org/" target="_blank" title="새창으로 국가정책대학원홈페이지로 이동합니다.">국가정책대학원</a></li>
									<li><a href="https://law.cnu.ac.kr/law/index.do" target="_blank" title="새창으로 법학전문대학원홈페이지로 이동합니다.">법학전문대학원</a></li>
									<li><a href="https://gsph.cnu.ac.kr/" target="_blank" title="새창으로 보건대학원홈페이지로 이동합니다.">보건대학원</a></li>
									<li><a href="http://grast.cnu.ac.kr/" target="_blank" title="새창으로 분석과학기술대학원홈페이지로 이동합니다.">분석과학기술대학원</a></li>
									<li><a href="http://ind.cnu.ac.kr/" target="_blank" title="새창으로 산업대학원홈페이지로 이동합니다.">산업대학원</a></li>
									<li><a href="http://gsdd.cnu.ac.kr/" target="_blank" title="새창으로 신약전문대학원홈페이지로 이동합니다.">신약전문대학원</a></li>
									<li><a href="http://gest.cnu.ac.kr/" target="_blank" title="새창으로 에너지과학기술대학원홈페이지로 이동합니다.">에너지과학기술대학원</a></li>
									<li><a href="http://medicine.cnu.ac.kr" target="_blank" title="새창으로 의학전문대학원홈페이지로 이동합니다.">의학전문대학원</a></li>
									<li><a href="https://homepage.cnu.ac.kr/cnuip/index.do" target="_blank" title="새창으로 특허법무대학원홈페이지로 이동합니다.">특허법무대학원</a></li>
									<li><a href="http://cnups.web-store.kr" target="_blank" title="새창으로 평화안보대학원홈페이지로 이동합니다.">평화안보대학원</a></li>
									<li><a href="https://gspa.cnu.ac.kr" target="_blank" title="새창으로 행정대학원홈페이지로 이동합니다.">행정대학원</a></li>
	                            </ul>
	                            <a href="#" class="close">대학원 닫기</a>
	                            </div>
	                        </div>
	                        <div class="site3 linkOpen">
	                            <strong>대학/학부</strong>
	                            <a href="#" class="molink_tit">대학/학부</a>
	                            <div class="linkwrap">
	                            <ul class="clearfix">
	                                <li><a href="http://nursing.cnu.ac.kr/" target="_blank" title="새창으로 간호대학홈페이지로 이동합니다.">간호대학</a></li>
									<li><a href="http://cem.cnu.ac.kr/" target="_blank" title="새창으로 경상대학홈페이지로 이동합니다.">경상대학</a></li>
									<li><a href="http://eng.cnu.ac.kr/" target="_blank" title="새창으로 공과대학홈페이지로 이동합니다.">공과대학</a></li>
									<li><a href="http://soins.cnu.ac.kr/soins/index.do" target="_blank" title="새창으로 국가안보융합학부홈페이지로 이동합니다.">국가안보융합학부</a></li>
									<li><a href="https://cals.cnu.ac.kr/" target="_blank" title="새창으로 농업생명과학대학홈페이지로 이동합니다.">농업생명과학대학</a></li>
									<!-- <li><a href="http://www.cnulaw.ac.kr/" target="_blank" title="새창으로 법과대학홈페이지로 이동합니다.">법과대학</a></li> -->
									<li><a href="http://edu.cnu.ac.kr/" target="_blank" title="새창으로 사범대학홈페이지로 이동합니다.">사범대학</a></li>
									<li><a href="http://socialscience.cnu.ac.kr/" target="_blank" title="새창으로 사회과학대학홈페이지로 이동합니다.">사회과학대학</a></li>
									<li><a href="https://cbb.cnu.ac.kr/" target="_blank" title="새창으로 생명시스템과학대학홈페이지로 이동합니다.">생명시스템과학대학</a></li>
									<li><a href="http://homeco.cnu.ac.kr/" target="_blank" title="새창으로 생활과학대학홈페이지로 이동합니다.">생활과학대학</a></li>
									<li><a href="http://vetmed.cnu.ac.kr/" target="_blank" title="새창으로 수의과대학홈페이지로 이동합니다.">수의과대학</a></li>
									<li><a href="https://pharm.cnu.ac.kr" target="_blank" title="새창으로 약학대학홈페이지로 이동합니다.">약학대학</a></li>
									<li><a href="http://art.cnu.ac.kr/" target="_blank" title="새창으로 예술대학홈페이지로 이동합니다.">예술대학</a></li>
									<li><a href="http://medicine.cnu.ac.kr/" target="_blank" title="새창으로 의과대학홈페이지로 이동합니다.">의과대학</a></li>
									<li><a href="http://human.cnu.ac.kr/" target="_blank" title="새창으로 인문대학홈페이지로 이동합니다.">인문대학</a></li>
									<li><a href="http://cns.cnu.ac.kr/" target="_blank" title="새창으로 자연과학대학홈페이지로 이동합니다.">자연과학대학</a></li>
									<li> <a href="https://free.cnu.ac.kr/free/index.do" target="_blank" title="새창으로 자유전공학부홈페이지로 이동합니다."> 자유전공학부</a></li>
	                            </ul>
	                            <a href="#" class="close">대학/학부 닫기</a>
	                            </div>
	                        </div>
	                        <div class="site4 linkOpen">
	                            <strong>부속시설</strong>
	                            <a href="#" class="molink_tit">부속시설</a>
	                            <div class="linkwrap">
	                            <ul class="clearfix">
	                                                                <li><a href="http://www.cnucrf.re.kr/" target="_blank" title="새창으로 공동실험실습관홈페이지로 이동합니다.">공동실험실습관</a></li>
									<li><a href="http://workshop.cnu.ac.kr/" target="_blank" title="새창으로 공학교육실습관홈페이지로 이동합니다.">공학교육실습관</a></li>
									<li><a href="http://www.cicnu.ac.kr/" target="_blank" title="새창으로 공자아카데미(공자학원)홈페이지로 이동합니다.">공자아카데미(공자학원)</a></li>
									<li><a href="http://gifted.cnu.ac.kr/" target="_blank" title="새창으로 과학영재교육원홈페이지로 이동합니다.">과학영재교육원</a></li>
									<!-- <li><a href="http://www.cnu.ac.kr/~cnujud/" target="_blank" title="새창으로 교육연수원홈페이지로 이동합니다.">교육연수원</a></li>
 -->									<li><a href="http://ttc.cnu.ac.kr/" target="_blank" title="새창으로 교직부홈페이지로 이동합니다.">교직부</a></li>
									<li><a href="http://cnuint.cnu.ac.kr/" target="_blank" title="새창으로 국제교류본부홈페이지로 이동합니다.">국제교류본부</a></li>
									<li><a href="http://dream.cnu.ac.kr/" target="_blank" title="새창으로 국제언어교육센터홈페이지로 이동합니다.">국제언어교육원</a></li>
									<li><a href="http://ile.cnu.ac.kr/" target="_blank" title="새창으로 기초교양교육원홈페이지로 이동합니다.">기초교양교육원</a></li>
									<li><a href="http://library.cnu.ac.kr/" target="_blank" title="새창으로 도서관홈페이지로 이동합니다.">도서관</a></li>
                                                                                                            <li><a href="http://www.cnu.ac.kr/~cnulegal/" target="_blank" title="새창으로 법률센터홈페이지로 이동합니다.">법률센터</a></li>
									<li><a href="https://vetmed.cnu.ac.kr/cnuah/index.do" target="_blank" title="새창으로 부속동물병원홈페이지로 이동합니다.">부속동물병원</a></li>
									<li><a href="http://museum.cnu.ac.kr/" target="_blank" title="새창으로 박물관홈페이지로 이동합니다.">박물관</a></li>
                                                                                                            <li><a href="https://cnuscc.cnu.ac.kr/" target="_blank" title="새창으로 사회공헌센터홈페이지로 이동합니다.">사회공헌센터</a></li>
									<li><a href="https://health.cnu.ac.kr/" target="_blank" title="새창으로 보건진료소홈페이지로 이동합니다.">보건진료소</a></li>
									<li><a href="http://forb.cnu.ac.kr/" target="_blank" title="새창으로 산학종합정보시스템홈페이지로 이동합니다.">산학종합정보시스템</a></li>
									<li><a href="http://news.cnu.ac.kr/" target="_blank" title="새창으로 신문방송사홈페이지로 이동합니다.">신문방송사</a></li>
									<li><a href="http://safety.cnu.ac.kr/" target="_blank" title="새창으로 안전관리본부홈페이지로 이동합니다.">안전관리본부</a></li>
                                                                                                            <li><a href="http://cnukids.cnu.ac.kr" target="_blank" title="새창으로 어린이집홈페이지로 이동합니다.">어린이집</a></li>
									<li><a href="http://fovu.cnu.ac.kr/" target="_blank" title="새창으로 인권센터홈페이지로 이동합니다.">인권센터</a></li>
									<li><a href="http://job.cnu.ac.kr/" target="_blank" title="새창으로 인재개발원홈페이지로 이동합니다.">인재개발원</a></li>
									<li><a href="http://nhm.cnu.ac.kr/" target="_blank" title="새창으로 자연사박물관홈페이지로 이동합니다.">자연사박물관</a></li>
									<li><a href="http://doumi.cnu.ac.kr/" target="_blank" title="새창으로 장애학생지원센터홈페이지로 이동합니다.">장애학생지원센터</a></li>
									<li><a href="http://cic.cnu.ac.kr/" target="_blank" title="새창으로 정보화본부홈페이지로 이동합니다.">정보화본부</a></li>
									<li><a href="http://dice.cnu.ac.kr/" target="_blank" title="새창으로 창업교육센터홈페이지로 이동합니다.">창업교육센터</a></li>
                                    <li><a href="https://connect.cnu.ac.kr/startup" target="_blank" title="새창으로 창업지원단홈페이지로 이동합니다.">창업지원단</a></li>
									<li><a href="http://gymn.cnu.ac.kr/" target="_blank" title="새창으로 체육진흥원홈페이지로 이동합니다.">체육진흥원</a></li>
									<li><a href="http://cnutrans.cnu.ac.kr/" target="_blank" title="새창으로 통역번역원홈페이지로 이동합니다.">통역번역원</a></li>
									<li><a href="http://lifelong.cnu.ac.kr/" target="_blank" title="새창으로 평생교육원홈페이지로 이동합니다.">평생교육원</a></li>
	                                                                <li><a href="http://counselling.cnu.ac.kr/" target="_blank" title="새창으로 학생상담센터홈페이지로 이동합니다.">학생상담센터</a></li>
	                            </ul>
	                            <a href="#" class="close">부속시설 닫기</a>
	                            </div>
	                        </div>
	                        <div class="site5 linkOpen">
	                            <strong>연구소</strong>
	                            <a href="#" class="molink_tit">연구소</a>
	                            <div class="linkwrap">
	                            <ul class="clearfix">
	                                <li><a href="http://www.meri.re.kr/" target="_blank" title="새창으로 경영경제연구소홈페이지로 이동합니다.">경영경제연구소</a></li>
									<li><a href="http://indedu.cnu.ac.kr" target="_blank" title="새창으로 공업교육연구소홈페이지로 이동합니다.">공업교육연구소</a></li>
									<li><a href="http://cnuedu.cnu.ac.kr/" target="_blank" title="새창으로 교육연구소홈페이지로 이동합니다.">교육연구소</a></li>
                                                                                                            <li><a href="https://coev.cnu.ac.kr/policy/index.do" target="_blank" title="새창으로 국가정책연구소홈페이지로 이동합니다.">국가정책연구소</a></li>
									<li><a href="http://cnuibs.cnu.ac.kr/" target="_blank" title="새창으로 기초과학연구원홈페이지로 이동합니다.">기초과학연구원</a></li>
                                                                                                            <li><a href="http://www.cnu.ac.kr/~intam/" target="_blank" title="새창으로 나노ㆍ신소재공학원홈페이지로 이동합니다.">나노ㆍ신소재공학원</a></li>
									<li><a href="http://agro.cnu.ac.kr/" target="_blank" title="새창으로 농업과학연구소홈페이지로 이동합니다.">농업과학연구소</a></li>
									<li><a href="http://instivet.cnu.ac.kr/instivet/index.do" target="_blank" title="새창으로 동물의과학연구소홈페이지로 이동합니다.">동물의과학연구소</a></li>
									<li><a href="https://baekje.zininzin.co.kr:6035/" target="_blank" title="새창으로 백제연구소홈페이지로 이동합니다.">백제연구소</a></li>
									<li><a href="https://cnulawi.jams.or.kr" target="_blank" title="새창으로 법학연구소홈페이지로 이동합니다.">법학연구소</a></li>
									<li><a href="http://cnuiss.jams.or.kr/" target="_blank" title="새창으로 사회과학연구소홈페이지로 이동합니다.">사회과학연구소</a></li>
									<li><a href="http://cnuibt.cnu.ac.kr/" target="_blank" title="새창으로 생물공학연구소홈페이지로 이동합니다.">생물공학연구소</a></li>
									<li><a href="http://sorec.cnu.ac.kr/" target="_blank" title="새창으로 소프트웨어연구센터홈페이지로 이동합니다.">소프트웨어연구센터</a></li>
									<li><a href="https://www.cnuh.co.kr/institute/main.jsp" target="_blank" title="새창으로 암연구소홈페이지로 이동합니다.">암연구소</a></li>
                                                                                                            <li><a href="https://homepage.cnu.ac.kr/artculture" target="_blank" title="새창으로 예술문화연구소홈페이지로 이동합니다.">예술문화연구소</a></li>
									<li><a href="https://edueval.cnu.ac.kr/edueval/index.do" target="_blank" title="새창으로 응용교육측정평가연구소홈페이지로 이동합니다.">응용교육측정평가연구소</a></li>									<li><a href="http://cnu.ac.kr/~hum_res/contents/collo.htm" target="_blank" title="새창으로 인문과학연구소홈페이지로 이동합니다.">인문과학연구소</a></li>
									<li><a href="http://rins.cnu.ac.kr/" target="_blank" title="새창으로 자연과학연구소홈페이지로 이동합니다.">자연과학연구소</a></li>
									<li><a href="http://www.radioelec.re.kr/" target="_blank" title="새창으로 전파·전기공학연구소홈페이지로 이동합니다.">전파·전기공학연구소</a></li>
									<!-- <li><a href="http://www.smbpcnu.or.kr/" target="_blank" title="새창으로 중소기업정책연구소홈페이지로 이동합니다.">중소기업정책연구소</a></li>
 -->									<li><a href="http://iatv.cnu.ac.kr/" target="_blank" title="새창으로 첨단수송체연구소홈페이지로 이동합니다.">첨단수송체연구소</a></li>
									<li><a href="http://ieb.cnu.ac.kr/" target="_blank" title="새창으로 환경·생물시스템연구소홈페이지로 이동합니다.">환경·생물시스템연구소</a></li>
									<li><a href="http://www.aric.re.kr/" target="_blank" title="새창으로 회계연구소홈페이지로 이동합니다.">회계연구소</a></li>
	                            </ul>
	                            <a href="#" class="close">연구소 닫기</a>
	                            </div>
	                        </div>
	                        <div class="site6 linkOpen">
	                            <strong>자치기구</strong>
	                            <a href="#" class="molink_tit">자치기구</a>
	                            <div class="linkwrap">
	                            <ul class="clearfix">
	                                <li><a href="http://faculty.cnu.ac.kr/" target="_blank" title="새창으로 교수회홈페이지로 이동합니다.">교수회</a></li>
									<li><a href="https://cnustudent.com/" target="_blank" title="새창으로 총학생회홈페이지로 이동합니다.">총학생회</a></li>
									<li><a href="http://chungil.cnu.ac.kr/" target="_blank" title="새창으로 직원협의회홈페이지로 이동합니다.">직원협의회</a></li>
									<!-- <li><a href="http://cnusc.kr/flow/" target="_blank" title="새창으로 총학생회홈페이지로 이동합니다.">총학생회</a></li>
 -->	                            </ul>
	                            <a href="#" class="close">자치기구 닫기</a>
	                            </div>
	                        </div>
	                        <div class="site7 linkOpen">
	                            <strong>기타</strong>
	                            <a href="#" class="molink_tit">기타</a>
	                            <div class="linkwrap">
	                            <ul class="clearfix">
	                                <li><a href="http://wisetcnu.co.kr" target="_blank" title="새창으로 WISET 충청권역사업단홈페이지로 이동합니다.">WISET 충청권역사업단</a></li>
									<li><a href="http://ceeca.cnu.ac.kr/" target="_blank" title="새창으로 공학교육혁신센터홈페이지로 이동합니다.">공학교육혁신센터</a></li>
									<!-- <li><a href="http://www.cnu.ac.kr/~mcard/" target="_blank" title="새창으로 다기능카드홈페이지로 이동합니다.">다기능카드</a></li>
 -->									<li><a href="http://linc.cnu.ac.kr/" target="_blank" title="새창으로 LINC+사업단홈페이지로 이동합니다.">LINC+사업단</a></li>
									<li><a href="http://www.academyinfo.go.kr/" target="_blank" title="새창으로 대학알리미홈페이지로 이동합니다.">대학알리미</a></li>
									
                                                                        <li><a href="http://cnuss.cnu.ac.kr/smain.html" target="_blank" title="새창으로 스포츠융복합창업육성사업단 페이지로 이동합니다.">스포츠융복합창업육성사업단</a></li>

									<li><a href="http://e-learn.cnu.ac.kr/" target="_blank" title="새창으로 대학이러닝지원센터홈페이지로 이동합니다.">대학이러닝지원센터</a></li>
									<li><a href="http://prevent.cnu.ac.kr" target="_blank" title="새창으로 심리적 위기 예방교육 관리 시스템 홈페이지로 이동합니다.">심리적 위기 예방교육 관리 시스템</a></li>
								<!--	<li><a href="http://cnucore.cnu.ac.kr/" target="_blank" title="새창으로 인문역량강화사업단 홈페이지로 이동합니다.">인문역량강화사업단</a></li>  -->
									<!-- <li><a href="http://wcc.cnustory.com/" target="_blank" title="새창으로 여대생커리어개발센터홈페이지로 이동합니다.">여대생커리어개발센터</a></li>
 -->									<li><a href="http://cnulab.cnu.ac.kr/" target="_blank" title="새창으로 연구실안전관리통합시스템홈페이지로 이동합니다.">연구실안전관리통합시스템</a></li>
									<li><a href="../imhae/index.html" target="_blank" title="새창으로 임해수련원홈페이지로 이동합니다.">임해수련원</a></li>
									<li><a href="http://jsh.cnu.ac.kr/" target="_blank" title="새창으로 정심화국제문화회관홈페이지로 이동합니다.">정심화국제문화회관</a></li>
                                                                                                   <!--    <li><a href="http://cnuelection19th.com/smain.html" target="_blank" title="새창으로 제19대총장임용추천위원회 홈페이지로 이동합니다.">제19대총장임용추천위원회</a></li> -->
									<li><a href="http://www.ccseagrant.org/" target="_blank" title="새창으로 충청씨그랜트사업단홈페이지로 이동합니다.">충청씨그랜트사업단</a></li>
									<li><a href="http://news.cnu.ac.kr/" target="_blank" title="새창으로 충대신문홈페이지로 이동합니다.">충대신문방송사</a></li>
								<!--	<li><a href="http://cnuace.plani.co.kr/" target="_blank" title="새창으로 학부교육선도대학육성사업단홈페이지로 이동합니다.">학부교육선도대학육성사업단</a></li> -->
	                            </ul>
	                            <a href="#" class="close">기타 닫기</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>
	        <script>
	            $(function(){
	                $(".linkOpen > a").on("click",function(){
	                    $(".linkOpen a.close").parents(".linkOpen").removeClass("on");
	                    $(this).parent().addClass("on");
	                });
	                $(".linkOpen a.close").on("click",function(){
	                    $(this).parents(".linkOpen").removeClass("on");
	                });
	            });
	        </script>
	    </div>
	</div>
	<!-- container :E -->

	<script language="JavaScript"type="text/javascript">
	function getCookie(sName){
			var aCookie = document.cookie.split("; ");
			for (var i=0; i < aCookie.length; i++){
				var aCrumb = aCookie[i].split("=");
				if (sName == aCrumb[0])
					return unescape(aCrumb[1]);
			}
			return null;
		}
	if ( getCookie( "popup" ) != "done" )
		{
	  //window.open('/html/kr/popup.html', 'popup', 'toolbar=no, resizable=no, scrollbars=no, width=500, height=550, left=10, top=10');
		};

	if ( getCookie( "popup2" ) != "done" )
		{
		//window.open('popup_cnu_3.html', 'popup_cnu_3', 'toolbar=no, resizable=no, scrollbars=yes, width=500, height=685, left=500, top=10');
		};

	if ( getCookie( "popup1" ) != "done" )
		{
	   // window.open('popup_cnu_4.html', 'popup_cnu_1', 'toolbar=no, resizable=no, scrollbars=no, width=396, height=546, left=10, top=10');
		};
	</script>


				</div>
				<!-- content :E -->
			</div>
		</div>
	</div>
	<!-- container :E -->
	<!-- aside :S -->
	<aside id="aside">
				<div class="al_box" style="display:block">
			<h4 class="u_t">CNU YouTube</h4>
			<div class="map sns_list">
			
			<ul>
							<li><a href="https://www.youtube.com/watch?v=tHBYUeiRH8U" title="새창열림" target="_blank"><img src="https://i.ytimg.com/vi/tHBYUeiRH8U/mqdefault.jpg" alt="홍보대사가 대신 전해드리는 특별한 설날인사🙋‍♀️🖐" /><div class="con"><p class="tit">홍보대사가 대신 전해드리는 특별한 설날인사🙋‍♀️🖐</p><div class="date">2021-02-11</div></div><span class="icon ut"></span></a></li>
							<li><a href="https://www.youtube.com/watch?v=ihqqHWvrP38" title="새창열림" target="_blank"><img src="https://i.ytimg.com/vi/ihqqHWvrP38/mqdefault.jpg" alt="📣2020 CNU 우수강의 공유·확산 사업 최우수강의교수 선정📣" /><div class="con"><p class="tit">📣2020 CNU 우수강의 공유·확산 사업 최우수강의교수 선정📣</p><div class="date">2021-02-09</div></div><span class="icon ut"></span></a></li>
							<li><a href="https://www.youtube.com/watch?v=jxuJuQ3n140" title="새창열림" target="_blank"><img src="https://i.ytimg.com/vi/jxuJuQ3n140/mqdefault.jpg" alt="2021년 충남대의 겨울 ❄⛄ | CNU IN WINTER" /><div class="con"><p class="tit">2021년 충남대의 겨울 ❄⛄ | CNU IN WINTER</p><div class="date">2021-02-03</div></div><span class="icon ut"></span></a></li>
						</ul>
			</div>

			<div class="link_m">
				<div class="infor_link">
					<a href="sub01/sub01_010602.html">직원검색</a>
					<a href="popup_number.html" target="_blank" onclick="window.open('/html/kr/popup_number.html','','width=600,height=600, scrollbars=yes'); return false;" title="새창으로 주요 전화번호창이 열립니다.">주요전화번호</a>
					<a href="sub01/sub01_01080301.html">학교 오시는길</a>
				</div>

			</div>
		</div>
		<a href="#toggle_button" class="btn"><span class="hidden">버튼을 클릭시 직원검색, 주요전화번호, 학교 오시는길 SNS Youture 링크, 페이스북링크, 트위터 링크를 볼수 있습니다 한번더 클릭시 내용을 닫아 둡니다</span></a>
	</aside>
	<!-- aside :E -->
	<!-- footer :S -->
	<footer id="footer">
		<div class="al_box">
    		<div class="accessibility_link">
				<img src="images/kr/common/link_accessibility.png" border="0" alt="미래창조과학부 WEB ACCESSIBILITY 마크(웹 접근성 품질인증 마크)">
                <a href="https://www.mois.go.kr/innogov/" target="_blank" title="새창열림" rel="noopener noreferer"><img src="images/kr/common/innogov.png" border="0" alt="보다나은정부 정부혁신BI" title="보다나은정부" style="margin-left:20px;"></a>
			</div>
        	<!--<div class="gov30_link"><a href="http://www.gov30.go.kr" title="새창으로 정부3.0사이트로 이동합니다." target="_blank"><img src="/images/kr/common/link_gov30.png" alt="정부3.0" /></a></div>
			<div class="ck_link"><a href="http://ck9.cnu.ac.kr/" title="새창으로 충남대학교 특성화사업단 홈페이지로 이동합니다." target="_blank"><img src="/images/kr/common/ck_logo.png" alt="특성화사업단" /></a></div>
        	<div class="ace_link"><a href="http://cnuace.plani.co.kr/" title="새창으로 ACE사업단사이트로 이동합니다." target="_blank"><img src="/images/kr/common/link_ace.png" alt="ACE사업단" /></a></div>
            <div class="linc_link"><a href="http://linc.cnu.ac.kr/" title="새창으로 LINC사이트로 이동합니다." target="_blank"><img src="/images/kr/common/link_linc.png" alt="LINC사업단" /></a></div>
			 <div class="link_cnucore"><a href="http://cnucore.cnu.ac.kr" title="새창으로 cnucore사이트로 이동합니다." target="_blank"><img src="/images/kr/common/link_cnucore.png" alt="cnu core" /></a></div>-->
            			<ul class="footer_m">
				<li><a href="guide/guide_080501.html">개인정보처리방침</a></li>
				<li><a href="_prog/_board/index%EF%B9%96code=sub06_060601&amp;site_dvs_cd=kr&amp;menu_dvs_cd=06060101.html">청렴행정</a></li>
				<!--<li><a href="/html/kr/guide/guide_080801.html">교육행정서비스헌장</a></li>-->
				<li><a href="guide/guide_0806.html">이메일수집거부</a></li>
				<li><a href="_prog/%C3%AD__%C3%AA%C2%B5_%C3%AD__%C3%AD__%C3%AC_%C2%B4%C3%AC%C2%A7_%C3%AA%C2%B4_%C3%AB%C2%A6%C2%AC%C3%AA%C2%B7_%C3%AC%C2%A0_.hwp" title="학교홈페이지관리규정을 다운로드합니다." >학교홈페이지관리규정</a></li>

				<li><a href="_prog/_board/index%EF%B9%96code=guide_0812&amp;site_dvs_cd=kr&amp;menu_dvs_cd=0812.html"> 홈페이지 건의사항</a><li>
				<li><a href="guide/guide_0813.html">교육행정서비스헌장</a></li>
			</ul>
			<address>34134 대전광역시 유성구 대학로 99 충남대학교 | T.042-821-5114 | 입학문의 : 1644-8433</address>
			<p>Copyright (C) 2015 CNU All Rights Reserved.</p>
		</div>
	</footer>
	<!-- footer :E -->
	<script src="tmpl/kr/js/tab_list.js"></script>
</div>
		<!-- //컨텐츠 -->
<!--구글웹로그분석 적용_kr_2015년 3월 2일-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60254238-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
