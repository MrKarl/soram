<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>

#gotoTop {
	cursor:pointer;
    text-align: right;
    padding-right: 80px;
    position: relative;
    top: -60px;
    transition: all 1s ease;
}

#gotoTop:hover {
	transform: translateY(-20px);
}

.footer {
	background-color:black;
	height:600px;

	font-family: 'NanumBarunGothic';
	font-size: 14px;
	font-weight: 300;
	/*line-height: 2.14;*/
	letter-spacing: -0.3px;
	text-align: left;
	color: #868686;

}

.main-link {
	font-family: 'NanumSquare';
	font-size: 16px;
	letter-spacing: -0.3px;
	text-align: left;
	color: #ffffff;
	color:white;
}

.footer-contact {
	height:230px;
}

#footer-private-contact {
	margin-top:65px;
	font-family: 'NanumSquare';
	font-size: 23.5px;
	line-height: 0.79;
	letter-spacing: -0.5px;
	text-align: left;
	color: #ffffff;
	padding:26px 20px 25px 22px;
	background-color: transparent;
	border: solid 2px #ffffff;
}

#footer-private-contact svg {
	transition: all 1s ease;
}

#footer-private-contact:hover svg {
	/*opacity: 1;*/
	transform: translateX(8px);
	webkit-transform: translateX(8px);
}


@media screen and (max-width: 768px) {
	.footer {
		display: none;
	}
}

.footer-link {
	height:158px;
}

.footer-info {
	margin-top:108px;
	font-size:12px;
	
}

.sub-link {
	margin-top:39px;
}

.sub-link-item {
	margin-bottom:16px;
}
</style>

</div>

<footer class="footer">
	<div class="row footer-contact">
		<div class="col-md-8"></div>
		<div class="col-md-4">
			<button id="footer-private-contact">1:1 상담 신청하기 <svg xmlns="http://www.w3.org/2000/svg" width="27.5" height="20.5">
		    	<path fill="none" stroke="#FFF" d="M16.375.492L25.883 10l-9.508 9.508M1.286 9.833h22.836"/>
			</svg>
		</button>
			
		</div>
	</div>


	<div class="row footer-link">
		<div class="col-sm-2">
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="48">
		    <path fill="#FFF" fill-rule="evenodd" d="M39.12 48.011h-9.785V33.357h14.672V48.011H39.12zm0-9.769h-4.894v4.887h4.894v-4.887zm-14.676-9.768h-4.887V13.817h4.887v9.771h9.782v4.886h-9.782zm1.014-18.112l-3.456-3.455-3.459 3.455-3.459 3.455-3.453-3.453 3.453-3.457 3.459-3.452L22.002 0l3.456 3.455 3.459 3.452 3.456 3.455-3.456 3.455-3.459-3.455zM14.664 28.474v4.883h9.78v4.885H9.776v-9.768H-.005v-4.886H14.664v4.886z"/>
		</svg>

		</div>
		<div class="col-sm-2">
			<div class="main-link">
				소람 소개
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					인사말
				</div>
				<div class="sub-link-item">
					의료진 소개
				</div>
				<div class="sub-link-item">
					시설 안내
				</div>
				<div class="sub-link-item">
					방송 및 언론 보도
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="main-link">
				호전 스토리
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					인사말
				</div>
				<div class="sub-link-item">
					의료진 소개
				</div>
				<div class="sub-link-item">
					시설 안내
				</div>
				<div class="sub-link-item">
					방송 및 언론 보도
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="main-link">
				치료법
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					인사말
				</div>
				<div class="sub-link-item">
					의료진 소개
				</div>
				<div class="sub-link-item">
					시설 안내
				</div>
				<div class="sub-link-item">
					방송 및 언론 보도
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="main-link">
				암 치료 정보
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					인사말
				</div>
				<div class="sub-link-item">
					의료진 소개
				</div>
				<div class="sub-link-item">
					시설 안내
				</div>
				<div class="sub-link-item">
					방송 및 언론 보도
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="main-link">
				고객 센터
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					인사말
				</div>
				<div class="sub-link-item">
					의료진 소개
				</div>
				<div class="sub-link-item">
					시설 안내
				</div>
				<div class="sub-link-item">
					방송 및 언론 보도
				</div>
			</div>
		</div>
	</div>

	<div class="row footer-info">
		<div class="col-sm-2 main-link">
			고객 센터<br/>
			1661-1115
		</div>
		<div class="col-sm-2">
			개인정보 취급방침<br/>
			이용약관
		</div>
		<div class="col-sm-2">
			© SORAM HOSPITAL<br/>
			All Rights Reserved.
		</div>
		<div class="col-sm-2">
			전화 02 567 0111<br/>
			팩스 02 553 2850 
		</div>
		<div class="col-md-4">
			서울특별시 강남구 봉은사로 458<br/>
			사업자번호.117-90-09125  대표자 성신
		</div>
	</div>
	<div id="gotoTop">
		<a href="#top">
			<svg xmlns="http://www.w3.org/2000/svg" width="37" height="46">
			    <path fill="none" stroke="#FFF" stroke-width="2" d="M.993 17.516L18 .986l17.006 16.53"/>
			    <path fill="#FFF" fill-rule="evenodd" d="M16.886 44.991V2.631h1.989V45l-1.989-.009z"/>
			</svg>
		</a>
	</div>
</footer>
</body>

<script>
$(document).ready(function() {
	$('a[href="#top"]').click(function() {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, 700);
	});
});
</script>


</html>