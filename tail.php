<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<?php if (!defined("_INDEX_")) { ?>
		</div>
	</div>
</div>
<? } ?>

<script src="<?php echo G5_THEME_URL ?>/js/css3-animate-it.js"></script>


<!-- 하단 시작 { -->
<footer id="footer" <?php if (defined("_INDEX_")) { ?>class="main"<? }?>>
	<div class="wrap">
		<h1><a href="/"></a></h1>
		<nav class="gnb" style="margin-top:-5px;">
			<ul style="position:relative;left:0px;">
			    
				   <li style=margin-right:-10px;><a href="<?php echo get_pretty_url('content', 'privacy'); ?>"><span>개인정보처리방침</span></a></li> &nbsp; &nbsp; &nbsp; &nbsp;
				   <li style=margin-right:-10px;><a href="<?php echo get_pretty_url('content', 'provision'); ?>"><span>서비스이용약관</span></a></li>
				   <div style="margin-right:0px;">
				      <hr style="border-top: 1px solid #cccccc;display:block;margin-bottom:-10px;margin-top:0px;width:95%;right:0px;">
				   </div>
				   
				<li class="sites" style="padding:5px;clear:both;">
				   <select onchange="copyrtChgUrl(this.value)">
	                  <option value=""> 관련사이트 </option>
	                  <option value="http://dna-tec.org">WWW.DNA-TEC.ORG</option>
	                  <option value="http://rus-test.org">WWW.RUS-TEST.ORG</option>
	                  <option value="http://igcert.org">WWW.(구)IGCERT.ORG</option>
	                  <option value="https://www.gicert.org/?l=ko">WWW.GICERT.ORG</option>
	                  <option value="http://www.patscorp.com/">WWW.PATSCORP.COM</option>
	                  <option value="https://www.asiaitc.com/">WWW.ASIAITC.COM</option>
                      <option value="http://aemiworld.com/">WWW.AEMIWORLD.COM</option>
                      <option value="https://data.igcert.org/">WWW.DATACERTORG</option>
                      
                      <option value="https://blog.naver.com/kate_0432">네이버 블로그1</option>
                      <option value="https://blog.naver.com/woheni19">네이버 블로그2</option>
                      <option value="https://blog.naver.com/djrrlforyou">네이버 블로그3</option>
                      <option value="https://blog.naver.com/kate_0432">네이버 블로그4</option>
                   </select>
				</li>
			</ul>			
		</nav>
		<br class="s_mobile_only" />
		<div class="f_left" style="padding-left:30px;margin-top:-5px;color:#999999;">
			<dl>  
				<dt>회사 : (주)러스테스트퍼시픽</dt>&nbsp; &nbsp;<br class="s_mobile_only" />			
				<dt class="mobile_no">주소 : </dt> 
				<dt>(08504) 서울특별시 금천구 서부샛길 638, 402-5호(가산동, 대륭테크노타운7차)</dt><br />
				<dt>러시아 본사 : 143002, Moscow Region, Odintsovo, Yuzhnaya Street, 8, rooms No. 192-195 &nbsp; <a href="http://www.rus-test24.ru" target="_blank">http://www.rus-test24.ru</a></dt><br />
				
				<dt>대표 : </dt><dt>공원주</dt>&nbsp; &nbsp;
				<dt>사업자등록번호 : </dt>
				<dt>605-88-01253</dt>&nbsp; &nbsp;  <br class="s_mobile_only" />
				<a href="tel:02-6749-0723">
				<dt>전화바로하기 : </dt>
				<dt>02-6749-1160</dt>
				</a> &nbsp; &nbsp;
				<dt>팩스 : </dt>
				<dt>02-6749-0711</dt> &nbsp; &nbsp; <br class="s_mobile_only" />
				<br/>
				<a href="mailto:info@rus-test.org">
				<dt>이메일 바로가기 : </dt>
				<dt>info@rus-test.org</dt> &nbsp; &nbsp;</a>
				<dt>한국 Tel : +82 2 6749-1160, Fax: +82 2 6749 0711</dt>
                <dt>러시아 Tel : +7 977 482 1681</dt>
                
				
			</dl>
			<p class="copyright">Copyright &copy; <strong>(주)러스테스트퍼시픽</strong> All rights reserved.</p>
		</div>
	</div>    
   
    <a href="javascript:" id="top_btn"><i class="fa fa-angle-up" aria-hidden="true"></i><span class="sound_only">상단으로</span> </a>
    
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '1000');
            return false;
        });
    });
    </script>
    
    <!---FamilySites 시작------>
    <script>
    function copyrtChgUrl(url){
	if(url){
		window.open(url);
	}
    }
    <!---FamilySites 종료------>
</script>
</footer>
<!-- } 하단 끝 -->

<!-- 20200402 QuickMenu -->

<!----------
tail.php 60라인~ 추가
head.php 204,207라인 추가
design.css 564라인~ 추가
------>
<?php if (!defined("_INDEX_")) { ?>
<div id="rightQuick">
	<header><i class="fa fa-bars" aria-hidden="true"></i> Quick Menu</header>
	<ul>
		<li><a href="<?php echo G5_THEME_URL ?>/sub01/sub01.php"><i class="fa fa-building" aria-hidden="true"></i> <span>회사소개</span></a></li>
		<li><a href="<?php echo G5_THEME_URL ?>/html/russia/ru01_trcueac.php"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>제공서비스</span></a></li>
		<!----li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>자료실</span></a></li-------->
		<!----li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>묻고답하기</span></a></li-------->
		<!----li><a href="<?php echo G5_BBS_URL ?>/qalist.php"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>1:1상담</span></a></li-------->
		<!----li><a href="<?php echo G5_BBS_URL ?>/search.php"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>통합검색</span></a></li-------->
		<!----li><a href="<?php echo G5_THEME_URL ?>/sub01/sub06.php"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>오시는길</span></a></li-------->
	</ul>
</div>
<? } ?>
<!-- /20200402 QuickMenu -->

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>