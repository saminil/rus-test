<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<!-------------------------
<style>
    @media screen and (max-width:992px){
    #main_visual .roll01{ text-align:left;padding-left:5px;text-shadow: 2px 2px 1px gray; }
    #main_visual .roll02{ text-align:left;padding-left:5px;text-shadow: 2px 2px 1px gray; }
    #main_visual .roll03{ text-align:left;padding-left:5px;text-shadow: 2px 2px 1px #ffff; }
    #main_visual .roll04{ text-align:left;padding-left:5px;text-shadow: 2px 2px 1px gray; }
    }

   @media screen and (max-width:985px){
    #telnum {font-size:1.3em;font-weight:bold;position:fixed;z-index:200;right:100px;top:2.5%;}
    } 
    
    @media screen and (max-width:780px){
    #telnum {font-size:1.3em;font-weight:bold;position:fixed;z-index:200;right:-300px;top:2.5%;}
    } 
    
    @media screen and (max-width:480px){
    #telnum {font-size:1.3em;font-weight:bold;position:fixed;z-index:200;right:none;top:2.5%;}
    #main_visual .roll03{ text-align:left;padding-left:5px;text-shadow: 2px 2px 2px #ffff;}
    } 
    
    
</style>
------------------------->

<div id="main_visual">	
 <h3><a href="/bbs/write.php?bo_table=qa">견적받기</a></h3>
	<div class="slider">
	
		<div class="roll roll01">
		      <!---------------------
		        text-shadow: offset-x offset-y blur-radius color | none | initial | inherit
		      -------------->
			<div class="black"></div>
			<!------영상일 경우 : video src="http://a01.sgedu.co.kr/theme/a01/img/visual01.mp4" autoplay="autoplay" loop="loop" muted="muted"></video------->
			<h2>유라시아 제품인증</h2>
			<hr>
			<p>RUS-TEST는 제품 및 시스템 인증기관입니다.<br class="mobile_no" /><br>RUS-TEST는 신뢰성 있는 동반자로서 고객의 지속 가능한 발전과<br> 성능 향상에 대한 혁신적인 방안을 제공합니다.</p>
			<a href="javascript:" class="btn_more">더보기</a>
	</div>
		
	<div class="roll roll02">
			<h2>RUS-TEST PACIFIC </h2>
			<hr>
			<p>RUS-TEST는 신뢰성 있는 동반자로서 고객의 지속 가능한 발전과 <br>성능 향상에 대한 획기적인 방안을 제공합니다.<br class="mobile_no" />
			<a href="javascript:" class="btn_more">더보기</a>
    </div>
		
    <div class="roll roll03">
			<h2>RUS-TEST인증원</h2>
			<hr>
			<p> RUS-TEST는 고객과 이해관계자들에게 <br>경쟁력 있는 최고의 가치를 제공하며,<br> 지속적 동반 성장을 통해<br> 세계적인 인증기관으로 거듭나고 있습니다.</p>
			<a href="javascript:" class="btn_more">더보기</a>
    </div>
	<!-------------	
    <div class="roll roll04">
			<h2>RUS-TEST인증원2</h2>
			<hr>
			<p>RUS-TEST는 국내외 기업의 경쟁력 향상을 위한 <br>시스템 및 제품인증 서비스를 제공하는 국제인증기관입니다.<br class="mobile_no" /><br> RUS-TEST는 고객과 이해관계자들에게 <br>경쟁력 있는 최고의 가치를 제공하여,<br> 지속적 동반 성장을 통해<br> RUS-TEST는 세계적인 인증기관으로 거듭나고 있습니다.</p>
			<a href="javascript:" class="btn_more">더보기</a>
    </div>
		------->
		
    
 </div><!------++++++div class="slider" 종료 ++++++---->
	
</div>
	
	<!-- 메인 이벤트 /theme/구매테마/skin/latest/event/latest.skin.php -->
	<!----?php echo latest('theme/event', 'event', 1, 10); ?---->
	<!-- /메인 이벤트 -->		




<section class="main_sec main_bbs">
	<div class="wrap">
		<!-- 일반 최근글 /theme/구매테마/skin/latest/basic/latest.skin.php -->
		<section><?php echo latest('theme/basic', 'notice', 5, 40); ?></section>
		<!-- 일반 최근글 /theme/구매테마/skin/latest/basic/latest.skin.php -->
		<section><?php echo latest('theme/basic', 'free', 5, 40); ?></section>
		<!-- 질문과답변 최근글 /theme/구매테마/skin/latest/qna/latest.skin.php -->
		<section><?php echo latest('theme/qna', 'qa', 5, 40); ?></section>
		
	</div>
</section>


<section class="main_sec main_about">
	<div class="bg"></div>
	<div class="wrap animatedParent animateOnce" data-sequence="500">
		<div class="img animated fadeInRightShort" data-id="1">
			<img src="<?php echo G5_THEME_URL ?>/img/main_about_img01.png" alt=" " />
			<img src="<?php echo G5_THEME_URL ?>/img/main_about_img02.png" alt=" " />
		</div>
		<div class="text animated fadeInUpShort" data-id="2">
			<div class="animatedParent animateOnce" data-sequence="250">
				<h2 class="animated fadeInUpShort" data-id="1"><!---about----> <strong>RUS-TEST</strong></h2>
				<h3 class="animated fadeInUpShort" data-id="2">고객님의 성공을 위한 큰 힘이 되겠습니다.</h3>
				<p class="animated fadeInUpShort" data-id="3">전문화된 컨설팅, 인증프로젝트를 통한<br class="pc_only" /> 고도화된 인사이트를 구축해 드립니다.</p>
				<p class="animated fadeInUpShort" data-id="4">기업의 Identity와<br class="pc_only" /> 효과적인 해외진출을 고려한 최적의 제품&시스템<br class="pc_only" /> 인증기관입니다.</p>
				<div class="btn_area animated fadeInUpShort" data-id="5">
					<a href="<?php echo G5_THEME_URL ?>/html/company/introduce.php">회사소개</a>
					<a href="<?php echo G5_THEME_URL ?>/html/company/location.php">오시는길</a>
				</div>
				<dl class="cs animated fadeInUpShort" data-id="6">
					<dt>고객행복센터</dt>
					<dd>02.6749.1160 <small>평일 AM 09:00 ~ PM 6:00</small></dd>
				</dl>
			</div>
		</div>
	</div>
</section>



<section class="main_sec main_product">
	<div class="wrap">
		<h2>회사안내/인증서비스 브로셔 </h2>
		<!-- 제품 슬라이드 /theme/구매테마/skin/latest/pic_block_slide/latest.skin.php -->
		<?php echo latest('theme/pic_block_slide', 'notice', 4, 23); ?>
	</div>
</section>

<!-------section class="main_sec main_gallery"----->
	<h2 style="height: 15px;background-color:#ddd9d9;"></h2>
	<!-- 포트폴리오 슬라이드 /theme/구매테마/skin/latest/portfolio/latest.skin.php -->
	<!----?php echo latest('theme/portfolio', 'portfolio', 5, 40); ?--->
<!----/section----->




<script>
$(document).ready(function(){
	$('#main_visual .slider').bxSlider({
		mode: 'fade',
		auto: true,
		autoControls: true,
		stopAutoOnClick: false,
		speed: 800, 
		pager: true,
		touchEnabled: true,		
		pause: 8000
	});
});
</script>


<script>
$(document).ready(function(){
	
});
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>