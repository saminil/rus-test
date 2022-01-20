<?php 	
	include "../../../../common.php";
	$tmenu_ = "회사안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "사이트맵"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>



<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<style>

	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
    
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:13px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
    
	body{padding-top:0px; padding-bottom:0px;}
    
	ul,ol,li{margin:0px;padding-bottom:0px;list-style:none;}
    
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
    
        /* 신규 테이블 삽입   */
    table{width:100%;min-width:240px;border: 1px solid #444444;overflow-x: auto;}
    
    .table_big { 
        border-color:#ff3366;
        width: 85%;
        height: auto;
    }
    
    th,td{border: 1px solid #444444;font-size:100%;padding:5px;margin-top:-10px;}
    
    .sitemap1 {
        border: 1px solid blue;
        padding:20px;
        padding-top: 20px;
        padding-bottom:20px;
        
    }

    
    
    /*상세페이지 타이틀 박스 txtBox02 */
 .txtBox02 { 
        /*border-width: 2px; */
        padding: 0px; 
        margin:0px;
        word-break: break-all; 
        width:100%;
        text-align:center;
        float:none;
        border-radius:10px;
        /*background-color:#3399ff;*/
        font-size:2.2em;
        border-style: solid; 
        border-width: 0 10px 0 10px; /* 양쪽 라인 */
        padding: 25px; 
        line-height:50%;
        border-color: DodgerBlue; 
        background-color:rgba(30, 144, 255, 0.2); 
    } 
    
     /*  출처: https://bssow.tistory.com/127    */
    
    /*
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:10px;}
    td {font-size:96%;padding-left:10px;}
    */
    
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---->



<style>
	.fc_pointer {color:#006699; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type1 {width:100%; min-width:320px;  margin:0 auto; }
	.vision_type1:after{content:""; clear:both; display:block;}
	.vision_type1 h2.title {text-align:center; font-size:2em; font-weight:400; color:#333; line-height:1.2em; margin-bottom:40px; }
	.vision_type1 span.stitle {display:block; width:100%; text-align:center; margin:0 auto; font-size:1.1em; font-weight:400; color:#666; line-height:1.6em; margin-bottom:40px; }
	.vision_type1 .img_div img{width:100%; max-width:1200px;}
	.vision_type1 ul {margin:0; border:1px solid #ddd; overflow:hidden;}
	.vision_type1 ul li {float:left; display:inline-block; padding:30px 0; padding-bottom:15px; width:33.33333%; height:250px; text-align:center;  }
	.vision_type1 ul li:nth-child(3n) {border-right:0; }
	.vision_type1 ul li:nth-child(2n) {background-color:#f7f7f7;}
	.vision_type1 ul li .icon {display:block; width:100px; height:100px; margin:0 auto; overflow:hidden;margin-bottom:-40px;padding:20px;}
	.vision_type1 ul li .icon i {display:inline-block; font-size:2em; line-height:50px; color:#333;}
	.vision_type1 ul li p {display:block; font-size:1.85em; color:#006699; margin-top:10px;}
	.vision_type1 ul li span { display:block; font-size:1em; color:#555; margin-top:10px; line-height:1.5em;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    /*------RUS-TEST PACIFIC이 유라시아 지역의 인증에 대하여 제공하는 서비스 시작------*/
	.business_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.business_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.business_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.business_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.business_type2 .con_box{ width:100%; padding:0px 0; border-top:1px solid #000; border-bottom:1px solid #000; text-align:left;}
	.business_type2 .con_box:after{content:""; display:block; clear:both;}
	.business_type2 .con_box ul { padding:0; margin:0; }
	.business_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
	.business_type2 .con_box ul li p{display:table; width:100%; }
	.business_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.business_type2 .con_box ul li p > em{ width:30px; }
	.business_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.business_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 10px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
	@media screen and (max-width: 992px){

		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.vision_type1 h2.title { font-size:1.5em; }
		.vision_type1 span.stitle{font-size:1em; width:90%;}
		.vision_type1 ul{border-bottom:0px;}
		.vision_type1 ul li { width:49.8%; border-bottom:1px solid #ddd; height:220px; border-right:1px solid #ddd;}
		.vision_type1 ul li:nth-child(3n) {border-right:1px solid #ddd;; }
		.vision_type1 ul li:nth-child(2n) {border-right:0px; }
		.vision_type1 ul li p {font-size:1.2em;}
		.vision_type1 ul li span{font-size:0.8em;}
		.vision_type1 ul li:nth-child(2n) {background-color:#fff;}
        
        
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
        
        
        .txtBox02 { 
        /*border-width: 2px; */
        padding: 0px; 
        margin:0px;
        word-break: break-all; 
        width:100%;
        text-align:center;
        float:none;
        border-radius:10px;
        /*background-color:#3399ff;*/
        font-size:1.5em;
        border-style: solid; 
        border-width: 0 10px 0 10px; /* 양쪽 라인 */
        padding: 25px; 
        line-height:50%;
        border-color: DodgerBlue; 
        background-color:rgba(30, 144, 255, 0.2); 
    } 
        
        
        
	}
</style>

<div class="content_wrap">

	<section class="page_title">

	
		<div class="txtBox02">
		   <span class="fc_pointer">사이트맵 | SiteMap</span>
            <br><br>
		   <h5>www.rus-test.org</h5>

		</div>
	</section>

	<section class="vision_type1">
          <div class="sitemap1">
             <span style="display:block;text-align:right;color:#27adec;">&#10046;메뉴를 클릭하시면 관련내용을 확인하실 수 있습니다.</span>
             
<table cellspacing="0" cellpadding="0">
  <col width="128">
  <col width="128">
  <col width="156">
  <col width="121">
  <col width="156">
  <col width="99">
  <tr>
    <td width="128" align="center" valign="middle"></td>
    <td width="561" colspan="4" align="center" valign="middle"><strong>RUS-TEST  사이트 맵</strong></td>
    <td width="99" align="center" valign="middle"></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><strong>회사안내</strong></td>
    <td colspan="2" align="center" valign="middle"><strong>인증서비스</strong></td>
    <td align="center" valign="middle"><strong>인증사례</strong></td>
    <td align="center" valign="middle"><strong>기술지원서비스</strong></td>
    <td align="center" valign="middle"><strong>고객센터</strong></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/company/introduce.php">회사소개</a></td>
    <td rowspan="10"><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">러시아</a></td>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">TRCU    EAC</a></td>
    <td><a href="http://www.rus-test.org/theme/rustest/html/audits/audits_views.php">인증사례</a></td>
    <td><a href="http://www.rus-test.org/bbs/board.php?bo_table=technology_document&wr_id=2">기술문서    번역서비스</a></td>
    <td><a href="http://www.rus-test.org/bbs/board.php?bo_table=notice">공지사항</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/company/location.php">오시는길</a></td>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">GOST    R</a></td>
    <td rowspan="20"></td>
    <td><a href="http://www.rus-test.org/bbs/board.php?bo_table=technology_document&wr_id=2">지정대리인서비스</a></td>
    <td><a href="http://www.rus-test.org/bbs/board.php?bo_table=free">자료실</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/company/sitemap.php">사이트맵</a></td>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">방폭인증</a></td>
    <td rowspan="19"></td>
    <td><a href="http://www.rus-test.org/bbs/write.php?bo_table=qa">견적받기</a></td>
  </tr>
  <tr>
    <td rowspan="18"></td>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">ISE산업안전평가</a></td>
    <td><a href="http://www.rus-test.org/bbs/board.php?bo_table=faq">FAQ</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">화재안전</a></td>
    <td><a href="http://www.rus-test.org/bbs/search.php">통합검색</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">위생등록</a></td>
    <td rowspan="16"></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">의료기기    등록</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">계측기기    인증(PAC)</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">러시아    통신인증</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/russia/ru01_trcueac.php">Rejection    Letter</a></td>
  </tr>
  <tr>
    <td rowspan="7"><a href="http://www.rus-test.org/theme/rustest/html/kazahstan/ka01_trcueac.php">카자흐스탄</a></td>
    <td><a href="http://www.rus-test.org/theme/rustest/html/kazahstan/ka01_trcueac.php">TRCU </a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/kazahstan/ka01_trcueac.php">EAC </a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/kazahstan/ka01_trcueac.php">GOST    K </a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/kazahstan/ka01_trcueac.php">방폭인증 </a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/kazahstan/ka01_trcueac.php">ISE    K </a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/kazahstan/ka01_trcueac.php">화재안전    K </a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/kazahstan/ka01_trcueac.php">계측기기    K</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/valakrgiarmenia/vka01_trcu.php">벨라루스외2</a></td>
    <td rowspan="4"></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/uz/uz_gostus.php">우즈베키스탄</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/yzervaizen/azs_audits.php">아제르바이잔</a></td>
  </tr>
  <tr>
    <td><a href="http://www.rus-test.org/theme/rustest/html/turook/tds_audits.php">툭르크메이스탄</a></td>
  </tr>
</table>
             
        </div>
         
         <br>
	</section>	
	<br><br>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<div class="business_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
		  		<li><p><em><strong>01.</strong></em><span> EAC 및 GOST 인증 서비스</span><br><br></p></li>
		  		<li><p><em><strong>02.</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span><br><br></p></li>
		  		<li><p><em><strong>03.</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span><br><br></p></li>
		  		<li><p><em><strong>04.</strong></em><span> Eurasia Representative 서비스</span><br><br></p></li>
		  		<li><p><em><strong>05.</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span><br><br></p></li>
		  	</ul>
		</div>
     </div>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>   

</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>