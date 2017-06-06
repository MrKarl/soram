<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>

#gotoTop {
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

	/*font-family: 'NanumBarunGothic';
	font-size: 14px;
	font-weight: 300;
	letter-spacing: -0.3px;
	text-align: left;
	color: #868686;*/

}

.footer a {
	text-decoration: none;
	font-family: 'NanumBarunGothic';
	font-size: 14px;
	font-weight: 300;
	letter-spacing: -0.3px;
	text-align: left;
	color: #868686;
}

.footer a:focus, .footer a:hover {
	text-decoration: none;
	/*color: #ffffff;*/
}

.main-link, .main-link a {
	font-family: 'NanumSquare';
	font-size: 16px;
	letter-spacing: -0.3px;
	text-align: left;
	color:white;
}

.footer-contact {
	height:230px;
}

#footer-private-contact {
	font-family: 'NanumSquare';
	font-size: 23.5px;
	letter-spacing: -0.5px;
	text-align: left;
	color: #ffffff;
	padding:26px 20px 25px 22px;
	background-color: transparent;
	border: solid 2px #ffffff;
    position: relative;
    top: 90px;
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
	height: 158px;
}

.footer-info {
	margin-top: 108px;
	font-size: 12px;
}

.footer-info .main-link {
	font-size: 14px;
}

.footer-info .sub-link {
	color:#868686;
	font-size:12px;
	font-weight: 300;
	line-height: 1.33;
	margin-top:2px;
}
.sub-link {
	margin-top: 39px;
}

.sub-link-item {
	margin-bottom: 16px;
}

</style>

</div>

<footer class="footer">
	<div class="row footer-contact">
		<div class="col-md-8"></div>
		<div class="col-md-4">
			<!-- <button id="footer-private-contact">
				<a href="#">
					1:1 상담 신청하기 
					<svg xmlns="http://www.w3.org/2000/svg" width="27.5" height="20.5">
			    		<path fill="none" stroke="#FFF" d="M16.375.492L25.883 10l-9.508 9.508M1.286 9.833h22.836"/>
					</svg>
				</a>
			</button> -->
			
			<a id="footer-private-contact" href="#">
				1:1 상담 신청하기 
				<svg xmlns="http://www.w3.org/2000/svg" width="27.5" height="20.5">
		    		<path fill="none" stroke="#FFF" d="M16.375.492L25.883 10l-9.508 9.508M1.286 9.833h22.836"/>
				</svg>
			</a>
			
			
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
				<a href="#">소람 소개</a>
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					<a href="#">인사말</a>
				</div>
				<div class="sub-link-item">
					<a href="#">의료진 소개</a>
				</div>
				<div class="sub-link-item">
					<a href="#">시설 안내</a>
				</div>
				<div class="sub-link-item">
					<a href="#">방송 및 언론 보도</a>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="main-link">
				<a href="#">호전 스토리</a>
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					<a href="#">인사말</a>
				</div>
				<div class="sub-link-item">
					<a href="#">의료진 소개</a>
				</div>
				<div class="sub-link-item">
					<a href="#">시설 안내</a>
				</div>
				<div class="sub-link-item">
					<a href="#">방송 및 언론 보도</a>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="main-link">
				<a href="#">치료법</a>
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					<a href="#">인사말</a>
				</div>
				<div class="sub-link-item">
					<a href="#">의료진 소개</a>
				</div>
				<div class="sub-link-item">
					<a href="#">시설 안내</a>
				</div>
				<div class="sub-link-item">
					<a href="#">방송 및 언론 보도</a>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="main-link">
				<a href="#">암 치료 정보</a>
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					<a href="#">인사말</a>
				</div>
				<div class="sub-link-item">
					<a href="#">의료진 소개</a>
				</div>
				<div class="sub-link-item">
					<a href="#">시설 안내</a>
				</div>
				<div class="sub-link-item">
					<a href="#">방송 및 언론 보도</a>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="main-link">
				<a href="#">고객 센터</a>
			</div>

			<div class="sub-link">
				<div class="sub-link-item">
					<a href="#">인사말</a>
				</div>
				<div class="sub-link-item">
					<a href="#">의료진 소개</a>
				</div>
				<div class="sub-link-item">
					<a href="#">시설 안내</a>
				</div>
				<div class="sub-link-item">
					<a href="#">방송 및 언론 보도</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row footer-info">
		<div class="col-sm-2 main-link">
			고객센터<br/>
			<a href="tel:1661-1115">1661-1115</a>
		</div>
		<div class="col-sm-2">
			<div class="sub-link">
				<a href="#">개인정보 취급방침</a>
			</div>
			<div class="sub-link">
				<a href="#">이용약관</a>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="sub-link">
				© SORAM HOSPITAL<br/>
				All Rights Reserved.
			</div>

			
		</div>
		<div class="col-sm-2">
			<div class="sub-link">
				<a href="#">전화 02 567 0111</a>
			</div>
			<div class="sub-link">
				<a href="#">팩스 02 553 2850</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="sub-link">
				서울특별시 강남구 봉은사로 458<br/>
				사업자번호.117-90-09125  대표자 성신
			</div>

			
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