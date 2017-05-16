<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
	.move-up-50 {
		transform: translateY(-50px);		
	}

	.transform-2s {
		/*transition: transform 2s ease;*/
		transition: transform 2s .2s cubic-bezier(0.77, 0, 0.175, 1);
	}

	.transform-3s {
		/*transition: transform 2s ease;*/
		transition: transform 2s .2s cubic-bezier(0.77, 0, 0.175, 1);
	}

	.move-up-20 {
		/*transition: transform 1s ease;*/
		transition: transform 2s .2s cubic-bezier(0.77, 0, 0.175, 1);
		/*transition: transform 2s 2.2s cubic-bezier(0.77, 0, 0.175, 1)*/
		transform: translateY(-50px);		
	}

	#overlay { 
		position: absolute;
		top: 0;
		left: 0; 
		width: 100%; 
		height: 100vh;
		background: black; 
		opacity: 1; 
		z-index: 100;
	}
</style>



<script>
$(document).ready(function(){
	var height = $(window).height();
	$('#introduce').css('height', height);

	$('#overlay').css('height', $('body').height());
	$('#navbar').css('opacity', '0');
	
	$('#introduce .card-header-logo').css('opacity', '1');
	$('#introduce .card-header-logo img').css('opacity', '0');
	$('#introduce .card-header-title').css('opacity', '0');
	$('#introduce .card-header').css('opacity', '1');

	$('#introduce .card-header').css('z-index', '9999');
	$('#introduce .card-header-logo').css('z-index', '9999');
	$('#introduce .card-header-title').css('z-index', '9999');
	
	setTimeout(function() {
		$('#introduce .card-header-logo img').animate({'opacity':'1'}, 2000, function() {
			$(this).css({
				'transition': 'transform 2s .2s cubic-bezier(0.77, 0, 0.175, 1)',
				'transform': 'translateY(-50px)'
			});

			$(this).animate({
				'transition': 'transform 2s .2s cubic-bezier(0.77, 0, 0.175, 1)',
				'transform': 'translateY(-50px)'
			}, 1000, function() {
				$('#navbar').animate({'opacity':'0.8'}, 100);				
			});

			setTimeout(function(){
				$('#introduce .card-header-title').addClass('move-up-50');
				$('#introduce .card-header-title').addClass('transform-3s');
				$('#introduce .card-header-title').animate({'opacity':'1'}, 2000, function() {

				});
			}, 1000);

				
		});
	}, 400);


	$('#overlay').animate({
		opacity: 0
	}, 1000, function() {
		
		$(this).css('z-index', '-1');
		
	});

	$(window).resize(function(){
		var height = $(window).height();
		$('#introduce').css('height', height);
	});
});


</script>


<div id="overlay"></div>

<div id="container">
	<section id="introduce" class="card hero-img">
		<!-- <div class="card-hero-unit"></div> -->
		<div class="card-header">
			<div class="card-header-logo">
				<img src="assets/img/logo-white.png" alt="소람병원로고_흰색"/>
			</div>
			<div class="card-header-title">
				소람한방병원은 양 한방 협진을 통해<br/>암을 집중적으로 치료하는 병원입니다
			</div>
		</div>
	</section>

	<section id="facility" class="card hide-scrolling">
		<!-- <div class="card-hero-unit"></div> -->
		<div class="card-header">
			<div class="card-header-desc">
				20여 년 암 치료 경험을 바탕으로 소람한방병원은<br/>
				양방전문의와 한방 의료진의 협진을 통하여 암을 진료하고 있습니다.<br/>
				고주파 온열 암치료, 셀레늄 항산화 요법 등 양방의 치료와 함께<br/>
				온열요법, 약침, 한약 등의 한방 치료도 같이 받으실 수 있습니다.
			</div>

			<div class="card-header-button">
				<button class="transparent" id="gotoFacility">시설 둘러보기</button>
			</div>
		</div>
	</section>

	<section id="members" class="card hide-scrolling">
		<div class="card-header">
			<div class="card-header-title">
				소람 의료진
			</div>

			<div class="card-header-left">
				더보기
			</div>
		</div>
		<div class="card-body">
			<div class="col-md-3">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-circle"/>
				</div>
				<div>
					암치료에 대한 희망적 도전<br/>
					성신 한의학박사 병원장
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-circle"/>
				</div>
				<div>
					암치료에 대한 희망적 도전<br/>
					성신 한의학박사 병원장
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-circle"/>
				</div>
				<div>
					암치료에 대한 희망적 도전<br/>
					성신 한의학박사 병원장
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-circle"/>
				</div>
				<div>
					암치료에 대한 희망적 도전<br/>
					성신 한의학박사 병원장
				</div>
			</div>
		</div>
	</section>

	<section id="miracle" class="card hide-scrolling">
		<div class="card-header">
			<div class="card-header-title">
				기적의 주인공
			</div>

			<div class="card-header-left">
				더보기
			</div>

		</div>
		<div class="card-body">
			<div class="col-md-3">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-circle"/>
				</div>
				<div>
					유방암 호전<br/>
					김영희님
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-circle"/>
				</div>
				<div>
					후두암 완치<br/>
					담배인삼공사님
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-circle"/>
				</div>
				<div>
					배고픔 완치<br/>
					다이어터님
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-circle"/>
				</div>
				<div>
					유연함 회복<br/>
					나마스데님
				</div>
			</div>
		</div>
	</section>

	<section id="program" class="card hide-scrolling">
		<div class="card-header">
			<div class="card-header-title">
				치료/프로그램
			</div>

			<div class="card-header-left">
				더보기
			</div>

		</div>
		<div class="card-body">
			<div class="col-md-6">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-rounded"/>
				</div>
				<div>
					명상<br/>
					요가
				</div>
			</div>
			<div class="col-md-6">
				<div>
					<img src="https://app-images.hiive.co.uk/images/static/missing/profile-avatar.png?missing=true&width=140&height=140&quality=70" class="img-rounded"/>
				</div>
				<div>
					아침을 깨우는<br/>
					새벽기도
				</div>
			</div>
		</div>
	</section>

	<section id="contact_us" class="card hide-scrolling">
		<div class="card-header">
			<div class="card-header-title">
				당신도 기적의 주인공이 될 수 있습니다.
			</div>

			<div class="card-header-left">
				더보기
			</div>

		</div>
		<div class="card-body">
			<div class="col-md-6">
				<div id="map" style="width:100%;height:200px;">
					

<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=OKninP45iJ7otwDnWamy&callback=loading_map"></script>
<script>
function loading_map() {
	var mapOptions = {
	    center: new naver.maps.LatLng(37.511839,127.0497138),
	    zoom: 10
	};

	var map = new naver.maps.Map('map', mapOptions);

	var marker = new naver.maps.Marker({
		title:'소람한방병원',
		animation:naver.maps.Animation.DROP,
	    position: new naver.maps.LatLng(37.511839,127.0497138),
	    map: map,
	});

}
</script>

				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-list">
					<div>
						1:1 상담하기
					</div>

					<div>
						연락처 : 070-2333-6555
					</div>

					<div>
						찾아오시는 길
					</div>

				</div>
			</div>
	</section>
	
</div>