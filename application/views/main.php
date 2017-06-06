<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
.fadein, .fadein-up, .fadein_right, .fadein-left, .fadein_down {
	opacity: 0;
}

.fadein-left {
	transition: transform 4s ease;
}

.row {
	max-width: 980px;
	margin:auto;
}

#container {
	text-align: center;
}

#introduce {
	font-family: 'NanumSquare';
	font-weight: 200;
	position: relative;
    width: 100%;
	/*height: 100vh;*/
    /* Firefox */
	height: -moz-calc(100vh + 400px);
	/* WebKit */
	height: -webkit-calc(100vh + 400px);
	/* Opera */
	height: -o-calc(100vh + 400px);
	/* Standard */
	height: calc(100vh + 400px);
}

#introduce .section-background {
	background:url(/assets/img/pic_main_001.png);
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: background 1s ease-in-out;
}

#introduce .section-content {
	/*padding-top:320px;*/
    position: absolute;
    background-color:rgba(0,0,0,0.4);
}

#introduce .section-header {
    position: relative;
    opacity: 0;
    /*top:70px;*/
}
.section-body {
	font-weight: 100;
}
#introduce .section-body {
	position: relative;
    opacity: 0;
    top:45px;
	color:white;
    font-size: 32px;
    line-height: 1.81;
    letter-spacing: -0.6px;
}

#mask {
	position: absolute;
	width:100%;
	height: -moz-calc(100vh + 400px);
	/* WebKit */
	height: -webkit-calc(100vh + 400px);
	/* Opera */
	height: -o-calc(100vh + 400px);
	/* Standard */
	height: calc(100vh + 400px);
	background-color:black;
	opacity: 1;
    z-index: 1500;
}

.section-content {
	width: 100%;
    height: 100%;
    top: 0;
}

#introduce .section-header, #introduce .section-body {
	opacity: 0;
	z-index: 2000;
}

#introduce .section-second .section-body, #introduce .section-second .section-header {
	font-family: 'NanumBarunGothicOTF', 'NanumBarunGothic';
	font-size: 24px;
	font-weight: 300;
	line-height: 1.92;
	letter-spacing: -0.7px;
}

#introduce .section-footer {
    text-align: center;
    width: 100%;
    -webkit-animation-name: footer-see-below; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
    animation-name: footer-see-below;
    animation-duration: 2s;
    animation-iteration-count: infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes footer-see-below {
    0%   {transform: translateY(0);}
    50%   {transform: translateY(20px);}
    100%   {transform: translateY(0);}
}

/* Standard syntax */
@keyframes footer-see-below {
    0%   {transform: translateY(0);}
    50%   {transform: translateY(20px);}
    100%   {transform: translateY(0);}
}



.section {
	position:relative;
    width: 100%;
    min-height: 500px;
    clear: both;
}

#navbar {
	display: none;
}

/*TODO: 전역으로 선언하되, media 쿼리 사용해서 모바일 지원할 것*/
.carousel-inner>.item>a>img, .carousel-inner>.item>img {
    line-height: 1;
    width: 100%;
    object-fit: cover;
    height:720px;
}

.opacity4Black {
	background-color:rgba(255,255,255,0.8);
}

.opacity4Black .navbar-nav>li>a:hover:after, .opacity4Black .navbar-default .navbar-nav>li>a:hover:after {
	background: black;
}

.opacity4Black .navbar-nav>li>a, .opacity4Black .navbar-default .navbar-nav>li>a, .opacity4Black .navbar-nav>li>button, .opacity4Black .navbar-default .navbar-nav>li>button {
	color:black !important;
}

@media screen and (max-width: 768px) {
	.opacity4Black .navbar-collapse {
	background-color:white;
}

}

.opacity4Black #private-contact {
	border-color: black;
}

.opacity4Black #private-contact .menu-item svg path {
	stroke: black;
}


#member .section-body .col-sm-3 img {
	width: 100%;
	margin:auto;
}


.section-title {
    text-align: center;
    font-family: 'NanumSquare';
    font-weight: 200;
	font-size: 14px;
	letter-spacing: -0.3px;
	text-align: center;
	color: #000000;
}

.section-title span {
	font-weight: 400;
	border-bottom: 2px solid black;
	padding-bottom:7px;
}

.section-more {
	position: relative;
	margin-right: 20px;
    top: -20px;
	text-align: right;
	font-size: 16px;
	letter-spacing: -0.3px;
	color: #01b3f1;
    font-weight: 100;
}

.section-more a {
	color: #01b3f1;
	text-decoration: none;	
}

.section-more a:hover {
	opacity:0.5;
}

.section-describe {
	font-family: 'NanumSquare';
	font-weight: 200;
	font-size: 32px;
	letter-spacing: -0.6px;
	text-align: center;
	color: #000000;

}

.section-header {
	max-width: 980px;
    margin-right: auto;
    margin-left: auto;
    padding-bottom: 60px;
    padding-top: 60px;
}

.carousel-control {
	width:5%;
	opacity: 0.4;
}

.carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right {
	padding: 20px;
    background-color: gray;
    width: initial;
    height: initial;
}

.carousel-control.left, .carousel-control.right {
	background-image: none;
}


#remedy {
	background-color:#ecf6ff;
}

#remedy img {
	max-height:155px;
	width:320px;
	max-width: 100%;
}
#member .section-body img {
	width:100%;
	min-height: 400px;
}
/*
추후사용
#member .section-body img {
	-webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    transition: all 0.9s ease;
    cursor:pointer;
}

#member .section-body img:hover {
	-webkit-filter: grayscale(0%);
	filter: grayscale(0%);
}*/

#miracle .section-body .item-img {
	overflow: hidden;
}

#remedy .section-body .item-img {
	overflow: hidden;
}


.item-img-bg {
    min-height: 150px;
}

.item-img-bg, .item-description {
	text-align: center;

    min-width: 150px;
    margin: auto;
}

.item-description {
	margin-left: auto;
    margin-right: auto;
	margin-top:19px;
}

#miracle .item-description {
	margin-top:14px;
}

.item-desc-name {
	color:black;
	font-size: 20px;
	line-height: 1.2;
	letter-spacing: -0.8px;
}

.item-desc-position {
	font-size: 14px;
  	line-height: 1.43;
  	letter-spacing: -0.3px;
  	text-align: center;
  	color: #8e8e8e;
}

#miracle .section-body img, #miracle .section-body .item-img {
	cursor: pointer;
	max-height:180px;
	width:320px;
	max-width: 100%;
	-moz-transition: all 2.0s;
	-webkit-transition: all 2.0s;
	transition: all 2.0s;
}


#remedy .section-body img, #remedy .section-body .item-img {
	cursor: pointer;
	max-height:180px;
	width:320px;
	max-width: 100%;
	-moz-transition: all 2.0s;
	-webkit-transition: all 2.0s;
	transition: all 2.0s;
}

#miracle .item-title {
	margin:20px auto 15px;
	font-size: 22px;
	line-height: 1.09;
	letter-spacing: -0.4px;
	text-align: center;
	color: #02b3f1;
	font-weight: 200;
    margin-bottom: 14px;
    font-family: 'NanumSquare';
    font-weight
}

/*#miracle .item-description {*/
.item-description {
	font-size: 16px;
	font-weight: 300;
	line-height: 1.25;
	letter-spacing: -0.3px;
	text-align: center;
	color: #8e8e8e;
	margin-bottom: 40px;
}

#miracle .section-body .item-img:hover, #miracle .section-body img:focus, #miracle .section-body img:hover, #miracle .section-body img:focus {
	transform: scale(1.05);
	-webkit-transform: scale3d(1.05, 1.05, 1);
    transform: scale3d(1.05, 1.05, 05);
}

#remedy .section-body .item-img:hover, #remedy .section-body img:focus, #remedy .section-body img:hover, #remedy .section-body img:focus {
	transform: scale(1.05);
	-webkit-transform: scale3d(1.05, 1.05, 1);
    transform: scale3d(1.05, 1.05, 05);
}

#miracle .section-content {
    max-width: 980px;
    margin: auto;
}

#introduce .section-first {
	position: relative;
}
#introduce .section-second {
	position: absolute;
    bottom: 300px;
    left: 0;
    right: 0;
}

#introduce .section-footer {
	/*position: relative;*/
}

</style>


<script>
$(document).ready(function(){	
	var timeOfMaskOffAfter = 2500;
	var timeOfMaskOffDuring = 4000;

	var timeOfIntroductionLogoFadeInUpDuring = 5000;

	var backgroundTransitionTime = 2000;

	// $('#introduce .section-first').css({
	// 	'top':$(window).height()/2-120,
	// });

	if ($(window).height() > 500) {
		$('#introduce .section-first').css({
			'top':$(window).height()/2-120,
		});		
	} else {
		$('#introduce .section-first').css({
			'top':155
		});
	}



	// $('#introduce .section-footer').css('top', $(window).height()-60);

	$(window).resize(function() {
		if ($(window).height() > 500) {
			$('#introduce .section-first').css({
				'top':$(window).height()/2-120,
			});		

			$('#introduce .section-footer').css('top', $(window).height()-60);
		}



		// $('#introduce section-footer').css('top', $(window).height()-60);
	});

	$('#navbar').css('display','block');
		setTimeout(function() {
			$('#mask').fadeOut(timeOfMaskOffDuring, function() {
			
			});
	}, timeOfMaskOffAfter);
	
	var screenHeight = $(window).height();
	$('#introduce .section-first .section-header').animate({
		opacity: 1,
	}, 2000, function () {
		$(this).animate({
			top: -100,
		}, 1200);
	});
	setTimeout(function() {
		$('#introduce .section-first .section-body').animate({
			top: -130,
			opacity: 1,
		}, 2000, function() {
			$('#introduce .section-first .section-header').css('z-index', 1000);
			$(this).css('z-index', 1000);
			// switching background image for introduce section
			(function () {
				var bgImages = [];
				bgImages[0] = '/assets/img/pic_main_001.png';
				bgImages[1] = '/assets/img/pic_main_002.png';
				bgImages[2] = '/assets/img/pic_main_003.png';
				bgImages[3] = '/assets/img/pic_main_004.png';
				bgImages[4] = '/assets/img/pic_main_005.png';

				
				var currentBgImageIndex = 0;
				setInterval(function() {
					currentBgImageIndex++;
					currentBgImageIndex = currentBgImageIndex % bgImages.length;

					var bgImage = bgImages[currentBgImageIndex];
					var urlString = 'url('+bgImage+')';
					$('#introduce .section-background').css('background-image', urlString);
				}, backgroundTransitionTime);
			})();


			$(document).scroll(function(e) {
				var introduceDIV = $('#introduce');
				var targetHeight = introduceDIV.outerHeight() - 50;
			    var scrollPercent = (targetHeight - window.scrollY) / targetHeight;

			    var secondSectionHeader = $('#introduce .section-second .section-header');
			    var secondSectionBody = $('#introduce .section-second .section-body');

			    var firstSectionHeader = $('#introduce .section-first .section-header');
			    var firstSectionBody = $('#introduce .section-first .section-body');
			    var firstSectionFooter = $('#introduce .section-first .section-footer');

			    if (window.scrollY < 150) {
			    	secondSectionHeader.css('opacity', 0);
		    		secondSectionBody.css('opacity', 0);
		    		firstSectionHeader.css('opacity', 1);
		    		firstSectionBody.css('opacity', 1);
		    		firstSectionFooter.css('opacity', 1);
			    } else if (window.scrollY > 200) {
			    	secondSectionHeader.css('opacity', 1);
		    		secondSectionBody.css('opacity', 1);
		    		firstSectionHeader.css('opacity', 0);
		    		firstSectionBody.css('opacity', 0);
		    		firstSectionFooter.css('opacity', 0);
		    		
			    } else {
			    	var opacityOfSecondSecion = (0.02 * window.scrollY) - 3;
		    		var opacityOfFirstSecion = (-0.02 * window.scrollY) + 4;

			    	secondSectionHeader.css('opacity', opacityOfSecondSecion);
		    		secondSectionBody.css('opacity', opacityOfSecondSecion);

		    		firstSectionHeader.css('opacity', opacityOfFirstSecion);
		    		firstSectionBody.css('opacity', opacityOfFirstSecion);
		    		firstSectionFooter.css('opacity', opacityOfFirstSecion);
			    }

			    if (window.scrollY < 150) {
			    	$('#introduce .section-content').css('background-color', 'rgba(0,0,0,0.4)');
			    } else if (window.scrollY > 450) {
			    	$('#introduce .section-content').css('background-color', 'rgba(0,0,0,0.8)');
			    } else {
			    	var opacityOfMask = (0.0013333 * window.scrollY) + 0.2;

			    	$('#introduce .section-content').css('background-color', 'rgba(0,0,0,'+opacityOfMask+')');
			    	$('#introduce .section-mask').css('opacity', opacityOfMask);
			    }
			});

			// Scroll Speed
			$.fn.moveIt = function(){
			  var $window = $(window);
			  var instances = [];
			  
			  $(this).each(function(){
			    instances.push(new moveItItem($(this)));
			  });
			  
			  window.onscroll = function(){
			    var scrollTop = $window.scrollTop();
			    instances.forEach(function(inst){
			      inst.update(scrollTop);
			    });
			  }
			}

			var moveItItem = function(el){
			  this.el = $(el);
			  this.speed = parseInt(this.el.attr('data-scroll-speed'));
			};

			moveItItem.prototype.update = function(scrollTop){
			  this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
			};

			// Initialization
			$(function(){
			  $('[data-scroll-speed]').moveIt();
			});

		});
	}, 2500);
	


	function addClassWhenScrollIsContactWith($el, className, differenceBetweenElementAndScroll) {
		var top = $el.offset().top;
		var scrollY = window.scrollY;
		
		if ((scrollY + differenceBetweenElementAndScroll - top) > 0) {
			$el.addClass(className);
		}
	}

	$('.fadein').each(function() {
		addClassWhenScrollIsContactWith($(this), 'animated fadeIn', $(window).height()+10);
	});

	$('.fadein-up').each(function() {
		addClassWhenScrollIsContactWith($(this), 'animated fadeInUp', $(window).height()+10);
	});

	$('.fadein-left').each(function() {
		addClassWhenScrollIsContactWith($(this), 'animated fadeInLeft', $(window).height()+10);
	});

	$(document).scroll(function(e){
		$('.fadein').each(function() {
			addClassWhenScrollIsContactWith($(this), 'animated fadeIn', $(window).height()+10);
		});

		$('.fadein-up').each(function() {
			addClassWhenScrollIsContactWith($(this), 'animated fadeInUp', $(window).height()+10);
		});

		$('.fadein-left').each(function() {
			addClassWhenScrollIsContactWith($(this), 'animated fadeInLeft', $(window).height()+10);
		});

		revertNavbarOpacity();
	});

	// switching navbar background color and opacity whenever user enter the every section
    function revertNavbarOpacity() {
    	var navBar = $('#navbar');
    	var topOfIntroduce = $('#introduce').offset().top;
    	var topOfMember = $('#member').offset().top;

	    if (window.scrollY - topOfMember > -70) {
	    	navBar.addClass('opacity4Black');
	    } else if (window.scrollY - topOfIntroduce > 1) {
	    	navBar.removeClass('opacity4Black');
	    }
    };
    revertNavbarOpacity();



});
</script>

<div id="mask"></div>

<section id="introduce" class="section">
	<div class="section-background">
		<div class="section-mask"></div>
	</div>

	<div class="section-content">
		<div class="section-first" data-scroll-speed="1">
			<div class="section-header">
				<img src="assets/img/logo-white.png" alt="소람병원로고_흰색"/>
			</div>

			<div class="section-body">
				양·한방 협진을 통해<br/>
				암을 집중적으로 치료하는 병원
			</div>

			<div class="section-footer">
				<svg xmlns="http://www.w3.org/2000/svg" width="37" height="46">
				    <path fill="none" stroke="#FFF" stroke-width="2" d="M35.007 27.484L18 44.014.994 27.484"/>
				    <path fill="#FFF" fill-rule="evenodd" d="M19.114.009v42.36h-1.989V0l1.989.009z"/>
				</svg>
			</div>
		</div>

		<div class="section-second" data-scroll-speed="3">
			<div class="section-header"></div>

			<div class="section-body">
				소람한방병원은 암 치료 25년 경력의 병원장을 필두로<br/>
				양방/한방 21명의 전문 의료진이 함께하는 통합 암 치료 전문 병원입니다.<br/>
				암 치료의 부작용과 후유증, 전이 재발을 최소화 하고자 면역 암치료, 항암 부작용 개선,<br/>
				암 수술 전후 관리 등 환자의 상태와 증상에 따른 1:1 맞춤 치료를 하고 있습니다.<br/>
				뿐만 아니라 입원치료 및 섭생상담을 통해 최고의 의료서비스를 제공해드립니다.
			</div>
			
		</div>
	</div>
</section>


<section id="member" class="section">
	<!-- <div class="section-mask"></div> -->

	<div class="section-content">
		<div class="section-header">
			<div class="section-title fadein-up">
				<span>소람 의료진</span>
			</div>
			<div class="section-more fadein-left">
				<a href="#">
					자세히 보기
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="10.5">
					    <path fill="none" stroke="#01B3F1" d="M8.256.498L13.002 5 8.256 9.502"/>
					    <path fill="#01B3F1" fill-rule="evenodd" d="M-.005 4.497h13.013L13 5.5H0l-.005-1.003z"/>
					</svg>
				</a>
			</div>
			<div class="section-describe fadein-up">
				다양한 임상 경험을 갖춘 21명의 의료진이 함께 합니다
			</div>
		</div>

		<div class="section-body">
			<div style="min-height: 400px; text-align: center;" class="fadein">
				<img alt="소람 의료진" src="/assets/img/member/pic_member_000.jpg">
			</div>
			<!-- 
			나중에 쓸 것
			<div class="row">
				<div class="col-sm-3 col-xs-6 fadein-up">
					<div class="item-img">
						<img src="/assets/img/member/pic_member_001.jpg" alt="암전문의">
					</div>
					<div class="item-description">
						<div class="item-desc-name">
							<span>박경철</span>
							<span style="font-size:14px;"> 자문의</span>
						</div>
						<div class="item-desc-position">

						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 fadein-up">
					<div class="item-img">
						<img src="/assets/img/member/pic_member_002.jpg" alt="암전문의">
					</div>
					<div class="item-description">
						<div class="item-desc-name">
							<span>성신</span>
							<span style="font-size:14px;"> 병원장</span>
						</div>
						<div class="item-desc-position">
							경희대학교 한의학박사
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 fadein-up">
					<div class="item-img">
						<img src="/assets/img/member/pic_member_003.jpg" alt="암전문의">
					</div>
					<div class="item-description">
						<div class="item-desc-name">
							<span>김성수</span>
							<span style="font-size:14px;"> 한방대표원장</span>
						</div>
						<div class="item-desc-position">
							경희대학교 한의학박사
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 fadein-up">
					<div class="item-img">
						<img src="/assets/img/member/pic_member_004.jpg" alt="암전문의">
					</div>
					<div class="item-description">
						<div class="item-desc-name">
							<span>최문구</span>
							<span style="font-size:14px;"> 양방대표원장</span>
						</div>
						<div class="item-desc-position">
							서울대학교 전문의
						</div>
					</div>
				</div>
			</div>
		</div> 
		-->
	</div>
</section>



<section id="facility" class="section">
	<div class="section-content">
		<div class="section-header">
			<div class="section-title fadein-up">
				<span>소람의 공간</span>
			</div>
			<div class="section-more fadein-left">
				<a href="#">
					시설 둘러보기
					<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="10.5">
					    <path fill="none" stroke="#01B3F1" d="M8.756.498L13.502 5 8.756 9.502M.496 4.497h12.011"/>
					</svg>
				</a>
			</div>
			<div class="section-describe fadein-up">
				100병상이 넘는 규모로 암 치료를 위한 최고의 시설입니다
			</div>
		</div>

		<div class="section-body">
			<div id="facilityCarousel" class="carousel slide carousel-fade" data-ride="carousel">
<style>

.carousel-indicators li img, .carousel-indicators li>div {
    height: 72px;
    width: 72px;
    padding:2px;
}
.carousel-indicators li>div {
	padding: 0;
}

.carousel-indicators li>div {
	background-color: #01b3f1;
    line-height: 5;
}

.carousel-indicators li>div>a {
	text-decoration: none;
	color:white;
	font-weight: 200;
}
.carousel-indicators li>div>a:hover {
	text-decoration: none;
}

.carousel-indicators li, .carousel-indicators li.active {
	text-indent:initial;
    width: initial;
    height: initial;
    border:none;
}

.carousel-indicators li:hover img, .carousel-indicators li:hover div {
	border:2px #01b3f1 solid;
}

.carousel-indicators li img:hover, .carousel-indicators li div:hover {
	padding:0;
}

.carousel-indicators li.active::before {
	position: absolute;
	width: 72px;
	height: 72px;
	content: ' ';
	background-color: rgba(1, 179, 241, 0.4);
	border:2px #01b3f1 solid;
}

.carousel-indicators li.active:hover img {
	border:none;
}

.carousel-indicators li.active img {
	background-color: white;
	padding:0px;


}

</style>

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-slide-to="0" class="active" data-slide-to="0" data-target="#facilityCarousel">
						<img alt="소람의 공간" src="/assets/img/facility/pic_faci_001.jpg">
					</li>
					<li data-slide-to="1" class="" data-slide-to="1" data-target="#facilityCarousel">
						<img alt="소람의 공간" src="/assets/img/facility/pic_faci_002.jpg">
					</li>
					<li data-slide-to="2" class="" data-slide-to="2" data-target="#facilityCarousel">
						<img alt="소람의 공간" src="/assets/img/facility/pic_faci_003.jpg">
					</li>
					<li data-slide-to="3" class="" data-slide-to="3" data-target="#facilityCarousel">
						<img alt="소람의 공간" src="/assets/img/facility/pic_faci_004.jpg">
					</li>
					<li data-slide-to="4" class="" data-slide-to="4" data-target="#facilityCarousel">
						<img alt="소람의 공간" src="/assets/img/facility/pic_faci_005.jpg">
					</li>
					<li data-slide-to="5" class="" data-slide-to="5" data-target="#facilityCarousel">
						<img alt="소람의 공간" src="/assets/img/facility/pic_faci_006.jpg">
					</li>
					<li data-slide-to="6" class="" data-slide-to="6" data-target="#facilityCarousel">
						<img alt="소람의 공간" src="/assets/img/facility/pic_faci_007.jpg">
					</li>
					<li>
						<div style="text-align:center; color:white; font-weight: bold;">
							<a href="#">더 보기</a>
						</div>
					</li>
				</ol>




<style>
.carousel-inner .item {
	transition-property: opacity;
}

.carousel-fade .carousel-inner .item {
	opacity: 0;
	-webkit-transition-property: opacity;
	-moz-transition-property: opacity;
	-o-transition-property: opacity;
	transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
	opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
	left: 0;
	opacity: 0;
	z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-control {
	z-index: 2;
}

.carousel-control svg {
    position: absolute;
    top: 43%;
    z-index: 5;
    display: inline-block;
    background-color: #464646;
}

.left.carousel-control svg {
	left: 50%;
}

.right.carousel-control svg {
	right: 50%;
}

</style>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="/assets/img/facility/pic_faci_001.jpg" alt="소람의 공간">
					</div>

					<div class="item">
						<img src="/assets/img/facility/pic_faci_002.jpg" alt="소람의 공간">
					</div>

					<div class="item">
						<img src="/assets/img/facility/pic_faci_003.jpg" alt="소람의 공간">
					</div>

					<div class="item">
						<img src="/assets/img/facility/pic_faci_004.jpg" alt="소람의 공간">
					</div>

					<div class="item">
						<img src="/assets/img/facility/pic_faci_005.jpg" alt="소람의 공간">
					</div>

					<div class="item">
						<img src="/assets/img/facility/pic_faci_006.jpg" alt="소람의 공간">
					</div>

					<div class="item">
						<img src="/assets/img/facility/pic_faci_007.jpg" alt="소람의 공간">
					</div>
				</div>

				<!-- Left and right controls -->
				<!-- <a class="left carousel-control" href="#facilityCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				
				<a class="right carousel-control" href="#facilityCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a> -->

				<a class="left carousel-control" href="#facilityCarousel" data-slide="prev">
					<!-- <span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="83" height="96">
					    <defs>
					        <filter id="a" width="84" height="97" x="-1" y="-1" filterUnits="userSpaceOnUse">
					            <feOffset in="SourceAlpha"/>
					            <feGaussianBlur result="blurOut" stdDeviation="5.657"/>
					            <feFlood flood-color="#000" result="floodOut"/>
					            <feComposite in="floodOut" in2="blurOut" operator="atop"/>
					            <feComponentTransfer>
					                <feFuncA slope=".5" type="linear"/>
					            </feComponentTransfer>
					            <feMerge>
					                <feMergeNode/>
					                <feMergeNode in="SourceGraphic"/>
					            </feMerge>
					        </filter>
					    </defs>
					    <path fill="none" stroke="#FFF" stroke-width="2" d="M47.212 61.861L32.267 47l14.945-14.861" filter="url(#a)"/>
					</svg>
				</a>
				
				<a class="right carousel-control" href="#facilityCarousel" data-slide="next">
					<svg xmlns="http://www.w3.org/2000/svg" width="83" height="96">
					    <defs>
					        <filter id="a" width="84" height="97" x="-1" y="-1" filterUnits="userSpaceOnUse">
					            <feOffset in="SourceAlpha"/>
					            <feGaussianBlur result="blurOut" stdDeviation="5.657"/>
					            <feFlood flood-color="#000" result="floodOut"/>
					            <feComposite in="floodOut" in2="blurOut" operator="atop"/>
					            <feComponentTransfer>
					                <feFuncA slope=".5" type="linear"/>
					            </feComponentTransfer>
					            <feMerge>
					                <feMergeNode/>
					                <feMergeNode in="SourceGraphic"/>
					            </feMerge>
					        </filter>
					    </defs>
					    <path fill="none" stroke="#FFF" stroke-width="2" d="M33.787 32.139L48.733 47 33.787 61.86" filter="url(#a)"/>
					</svg>
				</a>

			</div>

		</div>
	</div>
</section>

<style>
#remedy .section-body .item-img::before {
	content: ' ';
	background-color:black;
	opacity: 0.4;
	width:100%;
	height:100%;
    position: absolute;
}

#remedy .section-body .item-img>p {
	font-size:22px;
	line-height:1.18;

	position:absolute; 
	color:white;

	position: absolute;
	top:50%; left:50%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}

#remedy .section-body .item-description {
	min-width: initial;
}

#remedy .section-body .row>div {
    padding: 0 4px;
}
</style>


<section id="remedy" class="section">
	<div class="section-content">
		<div class="section-header">
			<div class="section-title fadein-up">
				<span>소람 치료법</span>
			</div>
			<div class="section-more fadein-left">
				<a href="#">자세히 보기
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="10.5">
					    <path fill="none" stroke="#01B3F1" d="M8.256.498L13.002 5 8.256 9.502"/>
					    <path fill="#01B3F1" fill-rule="evenodd" d="M-.005 4.497h13.013L13 5.5H0l-.005-1.003z"/>
					</svg>
				</a>
			</div>
			
			<div class="section-describe fadein-up">
				면역력을 높여주는 소람만의 양·한방 진료법입니다
			</div>
		</div>

		<div class="section-body">
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-4 fadein-up">
					<div class="item">
						<!-- <div class="item-img item-img-bg" style="background-image:url(/assets/img/remedy/pic_remedy_001.jpg)">
						</div> -->

						<div class="item-img" style="position:relative;">
							<img src="/assets/img/remedy/pic_remedy_001.jpg"/>
							<p>한방<br/>치료</p>
						</div>
						
						<!-- <div class="item-description">
							입원하신 환자 분을<br/>위한 1:1 맞춤 치료
						</div> -->
					</div>	
					<div class="item-description">
						면역 세포 활성화 및<br/>암세포 퇴축 유도
					</div>			
				</div>

				<div class="col-md-2 col-sm-3 col-xs-4 fadein-up">
					<div class="item">
						<!-- <div class="item-img item-img-bg" style="background-image:url(/assets/img/remedy/pic_remedy_002.jpg)">
						</div>

						<div class="item-mask" style="position: absolute; background-color:rgba(0,0,0,0.4); top:0; left:0; width:100%; height:100%">
							
						</div> -->

						<div class="item-img" style="position:relative;">
							<img src="/assets/img/remedy/pic_remedy_002.jpg"/>
							<p>양방<br/>치료</p>
						</div>

						
						<div class="item-description">
							암세포 성장을 억제,<br/>사멸 시키는 치료
						</div>
					</div>				
				</div>

				<div class="col-md-2 col-sm-3 col-xs-4 fadein-up">
					<div class="item">
						<!-- <div class="item-img item-img-bg" style="background-image:url(/assets/img/remedy/pic_remedy_003.jpg)">
						</div> -->

						<div class="item-img" style="position:relative;">
							<img src="/assets/img/remedy/pic_remedy_003.jpg"/>
							<p>입원<br/>치료</p>
						</div>

						
						<div class="item-description">
							입원하신 환자 분을<br/>위한 1:1 맞춤 치료
						</div>
					</div>				
				</div>

				<div class="col-md-2 col-sm-3 col-xs-4 fadein-up">
					<div class="item">
						<!-- <div class="item-img item-img-bg" style="background-image:url(/assets/img/remedy/pic_remedy_004.jpg)">
						</div> -->

						<div class="item-img" style="position:relative;">
							<img src="/assets/img/remedy/pic_remedy_004.jpg"/>
							<p>집중<br/>치료</p>
						</div>
						
						<div class="item-description">
							항암/방사선 부작용 및<br/>말기암 치료
						</div>
					</div>				
				</div>

				<div class="col-md-2 col-sm-3 col-xs-4 fadein-up">
					<div class="item">
						<!-- <div class="item-img item-img-bg" style="background-image:url(/assets/img/remedy/pic_remedy_005.jpg)">
						</div> -->

						<div class="item-img" style="position:relative;">
							<img src="/assets/img/remedy/pic_remedy_005.jpg"/>
							<p>섭생<br/>상담</p>
						</div>
						
						<div class="item-description">
							한방 약선 식단을 통한<br/>암치료 식이요법 상담
						</div>
					</div>				
				</div>

				<div class="col-md-2 col-sm-3 col-xs-4 fadein-up">
					<div class="item">
						<!-- <div class="item-img item-img-bg" style="background-image:url(/assets/img/remedy/pic_remedy_006.jpg)">
						</div> -->

						<div class="item-img" style="position:relative;">
							<img src="/assets/img/remedy/pic_remedy_006.jpg"/>
							<p>특화<br/>치료</p>
						</div>
						
						<div class="item-description">
							심리적인 안정을 찾을 수<br/>있도록 돕는 치료
						</div>
					</div>				
				</div>
			</div>
		</div> 
	</div>
</section>



<style>
	#miracle .section-body .item svg {
		-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);
	}

	#miracle .section-body .col-sm-4, #miracle .section-body .col-xs-6 {
		padding:5px;
	}
</style>
<section id="miracle" class="section">
	<div class="section-content">
		<div class="section-header">
			<div class="section-title fadein-up">
				<span>치료사례</span>
			</div>
			<div class="section-more fadein-left">
				<a href="#">
					더 보기
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="10.5">
					    <path fill="none" stroke="#01B3F1" d="M8.256.498L13.002 5 8.256 9.502"/>
					    <path fill="#01B3F1" fill-rule="evenodd" d="M-.005 4.497h13.013L13 5.5H0l-.005-1.003z"/>
					</svg>
				</a>
			</div>
			<div class="section-describe fadein-up">
				소람과 함께한 기적의 주인공입니다.
			</div>
		</div>

		<div class="section-body">
			<div class="row">
				<div class="col-sm-4 col-xs-6">
					<div class="item">
						<div class="item-img fadein-up">
							<img src="/assets/img/miracle/pic_miracle_001.jpg" alt="기적의 주인공">

							<div style="position: absolute; top:50%; left:50%; -webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="47">
								    <path fill="none" stroke="#FFF" stroke-width="2" d="M33.015 22.994L1.002 44.996V.994l32.013 22z"/>
								</svg>
							</div>

						</div>
						<div class="item-title fadein-up">
							#두 번째 생일을 맞이하다
						</div>
						<div class="item-description fadein-up">
							박승근 (남, 43세)<br/>
							폐암 4기
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6">
					<div class="item">
						<div class="item-img fadein-up">
							<img src="/assets/img/miracle/pic_miracle_002.jpg" alt="기적의 주인공">
							<div style="position: absolute; top:50%; left:50%; -webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="47">
								    <path fill="none" stroke="#FFF" stroke-width="2" d="M33.015 22.994L1.002 44.996V.994l32.013 22z"/>
								</svg>
							</div>
						</div>
						<div class="item-title fadein-up">
							#가슴이 두근거리다
						</div>
						<div class="item-description fadein-up">
							김연 (여, 44세)<br/>
							유방암 3기
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6">
					<div class="item">
						<div class="item-img fadein-up">
							<img src="/assets/img/miracle/pic_miracle_003.jpg" alt="기적의 주인공">
							<div style="position: absolute; top:50%; left:50%; -webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="47">
								    <path fill="none" stroke="#FFF" stroke-width="2" d="M33.015 22.994L1.002 44.996V.994l32.013 22z"/>
								</svg>
							</div>
						</div>
						<div class="item-title fadein-up">
							#인생은 아름다워
						</div>
						<div class="item-description fadein-up">
							송덕자 (여, 74세)<br/>
							대장암 3기
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6">
					<div class="item">
						<div class="item-img fadein-up">
							<img src="/assets/img/miracle/pic_miracle_004.jpg" alt="기적의 주인공">
							<div style="position: absolute; top:50%; left:50%; -webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="47">
								    <path fill="none" stroke="#FFF" stroke-width="2" d="M33.015 22.994L1.002 44.996V.994l32.013 22z"/>
								</svg>
							</div>
						</div>
						<div class="item-title fadein-up">
							#기적을 마주하다
						</div>
						<div class="item-description fadein-up">
							유상열 (남, 60세)<br/>
							담도암 말기
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6">
					<div class="item">
						<div class="item-img fadein-up">
							<img src="/assets/img/miracle/pic_miracle_005.jpg" alt="기적의 주인공">
							<div style="position: absolute; top:50%; left:50%; -webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="47">
								    <path fill="none" stroke="#FFF" stroke-width="2" d="M33.015 22.994L1.002 44.996V.994l32.013 22z"/>
								</svg>
							</div>
						</div>
						<div class="item-title fadein-up">
							#스무살, 새로운 꿈의 시작
						</div>
						<div class="item-description fadein-up">
							이병헌 (남, 20세)<br/>
							수모세포종 2차례 재발
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6">
					<div class="item">
						<div class="item-img fadein-up">
							<img src="/assets/img/miracle/pic_miracle_006.jpg" alt="기적의 주인공">
							<div style="position: absolute; top:50%; left:50%; -webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="47">
								    <path fill="none" stroke="#FFF" stroke-width="2" d="M33.015 22.994L1.002 44.996V.994l32.013 22z"/>
								</svg>
							</div>
						</div>
						<div class="item-title fadein-up">
							#제목을 지어주세요
						</div>
						<div class="item-description fadein-up">
							이길자 (여, 74세))<br/>
							간암 3기
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section id="where" class="section">
	<div class="section-content">
		<div class="section-header">
			<div class="section-title fadein-up">
				<span>오시는 길</span>
			</div>
			<div class="section-more fadein-left">
				<a href="#">
					자세히 보기
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="10.5">
					    <path fill="none" stroke="#01B3F1" d="M8.256.498L13.002 5 8.256 9.502"/>
					    <path fill="#01B3F1" fill-rule="evenodd" d="M-.005 4.497h13.013L13 5.5H0l-.005-1.003z"/>
					</svg>
				</a>
			</div>
			<div class="section-describe fadein-up">
				이제, 당신이 기적의 주인공입니다.
			</div>
		</div>

		<div class="section-body">
			<div id="map" style="width:100%;height:550px;">
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=OKninP45iJ7otwDnWamy&callback=loading_map"></script>

<script>
function loading_map() {
	var mapOptions = {
	    center: new naver.maps.LatLng(37.511850,127.0499298),
	    zoom: 12,
	    zoomControl:true,
	    scrollWheel:false,
	    pinchZoom:false,
	    maxZoom:15,
	    minZoom:6,
	    logoControl:false,
	};

	var map = new naver.maps.Map('map', mapOptions);

	var marker = new naver.maps.Marker({
		title:'소람한방병원',
		// animation:naver.maps.Animation.BOUNCE,
	    position: new naver.maps.LatLng(37.511850,127.0499298),
	    map: map,
	    icon: {
	    	//url: '/assets/img/logo.png',
	    	size: new naver.maps.Size(54.4, 64.8),
	        origin: new naver.maps.Point(0, 0),
	        anchor: new naver.maps.Point(30, 60),
	        // content: '<svg xmlns="http://www.w3.org/2000/svg" width="61" height="67"> <defs> <filter id="a" width="61" height="67" x="0" y="0" filterUnits="userSpaceOnUse"> <feOffset dx="4.728" dy="1.628" in="SourceAlpha"/> <feGaussianBlur result="blurOut"/> <feFlood flood-color="#000" result="floodOut"/> <feComposite in="floodOut" in2="blurOut" operator="atop"/> <feComponentTransfer> <feFuncA slope=".2" type="linear"/> </feComponentTransfer> <feMerge> <feMergeNode/> <feMergeNode in="SourceGraphic"/> </feMerge> </filter> </defs> <path fill="#01B3F1" fill-rule="evenodd" d="M55.192 27.048c0-14.884-12.176-26.95-27.196-26.95C12.976.098.8 12.164.8 27.048c0 7.022 2.712 13.415 7.153 18.212l20.043 19.645L48.04 45.26c4.44-4.797 7.152-11.19 7.152-18.212z" filter="url(#a)"/> <path fill="#FFF" fill-rule="evenodd" d="M37.898 40.788h-5.866V32.005h8.799V40.788h-2.933zm0-5.855h-2.933v2.927h2.933v-2.927zm-8.799-5.856h-2.933v-8.782h2.933v5.855h5.866v2.927h-5.866zm.58-10.879l-2.074-2.07-2.074 2.07-2.074 2.07-2.074-2.07 2.074-2.07 2.074-2.07 2.074-2.071 2.074 2.071 2.074 2.07 2.074 2.07-2.074 2.07-2.074-2.07zm-6.446 10.879v2.928h5.866v2.928H20.3v-5.856h-5.866V26.15h8.799v2.927z"/> </svg>',
	        url: '/assets/img/map-pin-soram.png'
	    }
	});

	naver.maps.Event.addListener(marker, 'click', getClickMarkerHandler());
	function getClickMarkerHandler() {
		return function(e) {
			window.open('http://map.naver.com/local/siteview.nhn?code=19732953', '_blank');
		}

	}
}
</script>
			</div> <!-- Map -->
		</div>
	</div>
</section>


