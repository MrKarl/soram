<style>
.section-background {
	position:absolute;
	height: 100%;
	width: 100%;
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    z-index: -1;
}

.section-header, .section-body {
	position:relative;
}

#firstSection {
	height:200vh;
	color:white;
}

#firstSection .section-background {
	/*background: url(/assets/img/pic_main_001.png) no-repeat center center fixed;*/
	background: url(/assets/img/main/pic-main-firstSection.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/assets/img/pic_main_001.png', sizingMethod='scale')";
}

.section-body {
	font-family: 'Nanum Barun Gothic';
	font-size: 24px;
	font-weight: 300;
	line-height: 1.92;
	letter-spacing: -0.7px;
}

#soramIntroduceLogo>img {
	width:109px;
	height:119px;
}

@media (max-width:767px) {
	#soramIntroduceLogo>img {
		width:73px;
		height:80px;
	}
}

#introduceFirstShowing {
	height:100vh;
	position: relative;
}

#introduceSecondShowing {
	height:100vh;
	position: relative;
}

.section-background-mask {
	position:absolute;
	height: 100%;
	width: 100%;
	background-color: #000;
	opacity:1;
    z-index: 0;
}

.section-header {
    max-width: 980px;
    margin-right: auto;
    margin-left: auto;
    padding-bottom: 60px;
    padding-top: 60px;
}

.section-title {
    font-family: 'Nanum Square';
    font-weight: 200;
	font-size: 14px;
	letter-spacing: -0.3px;
	text-align: center;
	color: #000000;
}

.section-title span {
	font-weight: 400;
	border-bottom: 2px solid black;
	padding-bottom:6px;
}

.section-header-right {
	position: relative;
	margin-right: 20px;
    top: -20px;
	text-align: right;
	font-size: 16px;
	letter-spacing: -0.3px;
	color: #01b3f1;
    font-weight: 100;
}

.section-header-right a {
	font-family: 'Nanum Barun Gothic';
	color: #01b3f1;
	text-decoration: none;	
}

.section-header-right a:hover {
	opacity:0.5;
}


.section-describe {
	font-family: 'Nanum Square';
	font-weight: 200;
	font-size: 32px;
	letter-spacing: -0.6px;
	text-align: center;
	color: #000000;

}

#soramIntroduceLogo {
	opacity:0;
    position: relative; 
    /*처음에 중앙에서 50px만큼 밑으로 내려가게하기위함*/
	margin-top:100px;
}

#soramIntroduceTitle {
	font-size: 32px;
	position: relative; 
	opacity:0;
	margin-top:100px;
}

#soramIntroduceDetail {
	position: relative; 
	opacity:0;
}

#navBar {
	opacity:0;
}

#introduceFirstShowing .section-bottom {
	opacity: 0;
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

@media (max-width:768px) {
	#soramIntroduceTitle {
		font-size: 24px;
	}
	
	#soramIntroduceDetail {
		font-size: 17px;
	}
}
</style>

<div id="wrap">

	<div class="container-fluid">
		<section id="firstSection">
			<div class="section-background">
			</div>
			<div class="section-background-mask">
			</div>

			<!-- <div class="section-header container">
			</div> -->

			<div class="section-body container">
				<div id="introduceFirstShowing">
					<div class="verticalCenterOuter">
						<div class="verticalCenterMiddle">
							<div class="verticalCenterInner">
								<div id="soramIntroduceLogo" class="fadeUp">
									<img src="/assets/img/logo-white.png" alt="소람병원로고_흰색"/>
								</div>

								<div id="soramIntroduceTitle" class="fadeUp nanumSquare">
									양·한방 협진을 통해<br/>
									암을 집중적으로 치료하는 병원
								</div>
							</div>
						</div>

						<div class="section-bottom" style="position:absolute; bottom:35px; left:0; right:0;">
							<a href="#introduceSecondShowing">
								<svg xmlns="http://www.w3.org/2000/svg" width="37" height="46">
								    <path fill="none" stroke="#FFF" stroke-width="2" d="M35.007 27.484L18 44.014.994 27.484"/>
								    <path fill="#FFF" fill-rule="evenodd" d="M19.114.009v42.36h-1.989V0l1.989.009z"/>
								</svg>
							</a>
						</div>


					</div>
					<!-- <div class="section-bottom" style="position:absolute; bottom:10px; left:0; right:0;">
						<svg xmlns="http://www.w3.org/2000/svg" width="37" height="46">
						    <path fill="none" stroke="#FFF" stroke-width="2" d="M35.007 27.484L18 44.014.994 27.484"/>
						    <path fill="#FFF" fill-rule="evenodd" d="M19.114.009v42.36h-1.989V0l1.989.009z"/>
						</svg>
					</div> -->
				</div>
				

				<div id="introduceSecondShowing">
					<div class="verticalCenterOuter">
						<div class="verticalCenterMiddle">
							<div class="verticalCenterInner">
								<div id="soramIntroduceDetail" class="fadeUp">
									소람한방병원은 암 치료 25년 경력의 병원장을 필두로<br/>
									양방/한방 21명의 전문 의료진이 함께하는 통합 암 치료 전문 병원입니다.<br/>
									암 치료의 부작용과 후유증, 전이 재발을 최소화 하고자 면역 암치료, 항암 부작용 개선,<br/>
									암 수술 전후 관리 등 환자의 상태와 증상에 따른 1:1 맞춤 치료를 하고 있습니다.<br/>
									뿐만 아니라 입원치료 및 섭생상담을 통해 최고의 의료서비스를 제공해드립니다.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="secondSection">
			<div class="section-header container">
				<div class="section-title fadein-up">
					<span>소람 의료진</span>
				</div>

				<div class="section-header-right">
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
				<div class="fadein">
					<img alt="소람 의료진" src="/assets/img/member/pic_member_000.jpg">
				</div>
			</div>
		</section>

		<section id="thirdSection">
			<div class="section-header">
				<div class="section-title fadein-up">
					<span>소람의 공간</span>
				</div>
				<div class="section-header-right">
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
<style>


#fifthSection .item-title {
	font-family: 'Nanum Square';
	font-size: 22px;
	text-align: center;
	color: #02b3f1;
	margin-top:16px;
}

#fifthSection .item-description {
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	font-weight: 300;
	line-height: 1.25;
	letter-spacing: -0.3px;
	text-align: center;
	color: #8e8e8e;
	margin-bottom: 40px;
}

#fifthSection .item {
	cursor:pointer;
	margin-right: 10px;
}

#fifthSection .item img {
	transition: all 1.5s ease;
	overflow: hidden;
}

#fifthSection .item:hover img {
	transform: scale(1.1);
}

@media (max-width: 500px) {
	#fifthSection .item-title {
		font-size: 18px;
	}

	#fifthSection .item-description {
		font-size: 14px;
	}
}

</style>


			<div class="section-body">
				<div id="facilityCarousel" class="carousel slide carousel-fade" data-ride="carousel">
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
							<div style="text-align:center; color:white; font-weight: bold; position: relative;">
								<div class="verticalCenterOuter">
									<div class="verticalCenterMiddle">
										<div class="verticalCenterInner">
											<a href="#">더 보기</a>
										</div>
									</div>
								</div>
							</div>

							<!-- <div style="text-align:center; color:white; font-weight: bold;">
								<a href="#">더 보기</a>
							</div> -->
						</li>
					</ol>

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
					<a class="left carousel-control" href="#facilityCarousel" data-slide="prev">
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
		</section>

		<section id="fourthSection">
			<div class="section-header">
				<div class="section-title fadein-up">
					<span>소람 치료법</span>
				</div>
				<div class="section-header-right">
					<a href="#">
						자세히 보기
						<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="10.5">
						    <path fill="none" stroke="#01B3F1" d="M8.756.498L13.502 5 8.756 9.502M.496 4.497h12.011"/>
						</svg>
					</a>
				</div>
				<div class="section-describe fadein-up">
					면역력을 높여주는 소람만의 양·한방 진료법입니다
				</div>
			</div>
<style>
#fourthSection {
    background-color: #ecf6ff;
}

#fourthSection .item-description {
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	font-weight: 300;
	line-height: 1.25;
	letter-spacing: -0.3px;
	text-align: center;
	color: #8e8e8e;
	margin-bottom: 40px;
	margin-top:20px;
}

#fourthSection .item {
	cursor:pointer;
	margin-right: 10px;
}

#fourthSection .item img {
	transition: all 1.5s ease;
	overflow: hidden;
}


#fourthSection .item-img-text::before {
/*#fourthSection .item-img::before {*/
	content:' ';
	position: absolute;
	top:0;
	bottom:0;
	right:0;
	left:0;
	background-color:black;
	opacity:0.5;
}

#fourthSection .item:hover img {
	transform: scale(1.1);
}

@media (max-width: 500px) {
	#fourthSection .item-title {
		font-size: 18px;
	}

	#fourthSection .item-description {
		font-size: 14px;
	}
}

#fourthSection .item-img-text {
	font-family: 'Nanum Square';
	font-size: 22px;
	line-height: 1.18;
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	right:0;
	color:white;
}

</style>
			<div class="section-body">
				<div class="row container">
					<div class="col-md-2 col-xs-4 fadein-up">
						<div class="item">
							<div class="item-img">
								<div style="position:relative; height: 100%;">
									<img src="/assets/img/remedy/pic_remedy_001.jpg"/>
								</div>
								<div class="item-img-text">
									<div class="verticalCenterOuter">
										<div class="verticalCenterMiddle">
											<div class="verticalCenterInner">
												한방<br/>치료
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item-description fadein-up animated fadeInUp">
								면역 세포 활성화 및<br/>암세포 퇴축 유도
							</div>
						</div>
					</div>


					<div class="col-md-2 col-xs-4 fadein-up">
						<div class="item">
							<div class="item-img">
								<div style="position:relative; height: 100%;">
									<img src="/assets/img/remedy/pic_remedy_002.jpg"/>
								</div>
								<div class="item-img-text">
									<div class="verticalCenterOuter">
										<div class="verticalCenterMiddle">
											<div class="verticalCenterInner">
												양방<br/>치료
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item-description fadein-up animated fadeInUp">
								암세포 성장을 억제,<br/>사멸 시키는 치료
							</div>
						</div>
					</div>



					<div class="col-md-2 col-xs-4 fadein-up">
						<div class="item">
							<div class="item-img">
								<div style="position:relative; height: 100%;">
									<img src="/assets/img/remedy/pic_remedy_003.jpg"/>
								</div>
								<div class="item-img-text">
									<div class="verticalCenterOuter">
										<div class="verticalCenterMiddle">
											<div class="verticalCenterInner">
												입원<br/>치료
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item-description fadein-up animated fadeInUp">
								입원하신 환자 분을<br/>위한 1:1 맞춤 치료
							</div>
						</div>
					</div>


					<div class="col-md-2 col-xs-4 fadein-up">
						<div class="item">
							<div class="item-img">
								<div style="position:relative; height: 100%;">
									<img src="/assets/img/remedy/pic_remedy_004.jpg"/>
								</div>
								<div class="item-img-text">
									<div class="verticalCenterOuter">
										<div class="verticalCenterMiddle">
											<div class="verticalCenterInner">
												집중<br/>치료
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item-description fadein-up animated fadeInUp">
								항암/방사선 부작용 및<br/>말기암 치료
							</div>
						</div>
					</div>




					<div class="col-md-2 col-xs-4 fadein-up">
						<div class="item">
							<div class="item-img">
								<div style="position:relative; height: 100%;">
									<img src="/assets/img/remedy/pic_remedy_005.jpg"/>
								</div>
								<div class="item-img-text">
									<div class="verticalCenterOuter">
										<div class="verticalCenterMiddle">
											<div class="verticalCenterInner">
												섭생<br/>상담
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item-description fadein-up animated fadeInUp">
								한방 약선 식단을 통한<br/>암치료 식이요법 상담
							</div>
						</div>
					</div>

					<div class="col-md-2 col-xs-4 fadein-up">
						<div class="item">
							<div class="item-img">
								<div style="position:relative; height: 100%;">
									<img src="/assets/img/remedy/pic_remedy_006.jpg"/>
								</div>
								<div class="item-img-text">
									<div class="verticalCenterOuter">
										<div class="verticalCenterMiddle">
											<div class="verticalCenterInner">
												특화<br/>치료
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item-description fadein-up animated fadeInUp">
								심리적인 안정을 찾을 수<br/>있도록 돕는 치료
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




		<section id="fifthSection">
			<div class="section-header">
				<div class="section-title fadein-up">
					<span>치료사례</span>
				</div>
				<div class="section-header-right">
					<a href="#" style="font-size:16px;">
						더 보기
						<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="10.5">
						    <path fill="none" stroke="#01B3F1" d="M8.756.498L13.502 5 8.756 9.502M.496 4.497h12.011"/>
						</svg>
					</a>
				</div>
				<div class="section-describe fadein-up">
					소람과 함께한 기적의 주인공입니다.
				</div>
			</div>

			<div class="section-body">
				<div class="row container">
					<div class="col-sm-4 col-xs-6 fadein-up">
						<div class="item">
							<div class="item-img">
								<div style="position:relative; height: 100%;">
									<img src="/assets/img/miracle/pic_miracle_001.jpg" alt="기적의 주인공">
								</div>
								<div style="position:absolute; top:0; bottom:0; left:0; right:0; margin-top: 22px;">
									<div class="verticalCenterOuter">
										<div class="verticalCenterMiddle">
											<div class="verticalCenterInner">
												<svg xmlns="http://www.w3.org/2000/svg" width="35" height="47">
												    <path fill="none" stroke="#FFF" stroke-width="2" d="M33.015 22.994L1.002 44.996V.994l32.013 22z"/>
												</svg>
											</div>
										</div>
									</div>
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
					<div class="col-sm-4 col-xs-6 fadein-up">
						<div class="item">
							<div class="item-img">
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
					<div class="col-sm-4 col-xs-6 fadein-up">
						<div class="item">
							<div class="item-img">
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
					<div class="col-sm-4 col-xs-6 fadein-up">
						<div class="item">
							<div class="item-img">
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
					<div class="col-sm-4 col-xs-6 fadein-up">
						<div class="item">
							<div class="item-img">
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
					<div class="col-sm-4 col-xs-6 fadein-up">
						<div class="item">
							<div class="item-img">
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
		</section>





		<section id="sixthSection">
			<div class="section-header">
				<div class="section-title fadein-up">
					<span>오시는 길</span>
				</div>
				<div class="section-header-right">
					<a href="#">
						자세히 보기
						<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="10.5">
						    <path fill="none" stroke="#01B3F1" d="M8.756.498L13.502 5 8.756 9.502M.496 4.497h12.011"/>
						</svg>
					</a>
				</div>
				<div class="section-describe fadein-up">
					이제, 당신이 기적의 주인공입니다.
				</div>
			</div>

				<div class="section-body">
					<div id="map" style="width:100%;height:550px;">
<!-- <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=OKninP45iJ7otwDnWamy&callback=loading_map"></script> -->

<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=N8aPmuq43buhHUW4HUqQ&callback=loading_map"></script>

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
	    	size: new naver.maps.Size(55.4, 64.8),
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
		</section>
	</div>

</div>


<script>

$(function() {
	(function animateSoramMain() {
		var timeOfMaskOffStart = 500;
		var timeOfMaskOffDuring = 3000;

		var timeOfIntroduceLogoFadeIn = 800;
		var timeOfIntroduceLogoUp= 1000;

		var timeOfIntroduceTitleFadeIn = 400;
		var timeOfIntroduceTitleUp= 700;


		setTimeout(function() {
			$('#soramIntroduceLogo').animate({
				opacity:1
			}, timeOfIntroduceLogoFadeIn, function() {

				$('#soramIntroduceLogo').animate({
					top: -50,
				}, timeOfIntroduceLogoUp, function() {
				});
			});
		}, timeOfMaskOffStart);

		setTimeout(function() {
			$('#soramIntroduceTitle').animate({
				opacity:1
			}, timeOfIntroduceTitleFadeIn);

			$('#soramIntroduceTitle').animate({
				top: -100,
			}, timeOfIntroduceTitleUp, function() {
				$('.section-bottom').animate({
					opacity:1
				}, timeOfIntroduceTitleFadeIn);
			});

			$('#firstSection .section-background-mask').animate({
				opacity:0.4
			}, timeOfMaskOffDuring);

			$('#navBar').animate({
				opacity:1
			}, timeOfMaskOffDuring);


			
		}, timeOfIntroduceLogoFadeIn+timeOfIntroduceLogoUp);
	})();

	$(document).scroll(function(e) {
		// 1. Scroll이 #introduceSecondShowing 높이에 오면,
		// #soramIntroduceDetail opacity 를 0->1
		// #introduceFirstShowing opacity 를 1->0

		var heightOfFirstSection = $('#firstSection').outerHeight();
		var heightOfSecondSection = heightOfFirstSection;
		var heightOfIntroduceSecondShowing = $('#introduceSecondShowing').outerHeight();

		var heightOfScroll = window.scrollY;
		var startHeight = heightOfIntroduceSecondShowing * 1 / 2 ;
		var endHeight = heightOfIntroduceSecondShowing;
		var ratioH = heightOfScroll/endHeight;

		var startHeight2 = heightOfIntroduceSecondShowing * 1 / 3 ;
		var endHeight2 = heightOfIntroduceSecondShowing * 2 / 3;
		var ratioH2 = heightOfScroll/heightOfIntroduceSecondShowing;



		$('#soramIntroduceDetail').css({
			opacity:(2*ratioH - 1)
		});


		if (heightOfScroll <= startHeight) {
			$('#firstSection .section-background-mask').css({
				opacity:0.4,
			});
		} else if (heightOfScroll > startHeight && heightOfScroll <= endHeight) {
			$('#firstSection .section-background-mask').css({
				opacity:(0.8*ratioH)
			});
		}


		if (heightOfScroll <= startHeight2) {
			$('#introduceFirstShowing').css({
				// opacity:(-2*ratioH + 2)
				opacity:1
			});
		} else if (heightOfScroll > startHeight2 && heightOfScroll <= endHeight2) {
			$('#introduceFirstShowing').css({
				// opacity:(-2*ratioH + 2)
				opacity:(-3*ratioH2 + 2)
			});
		}



		// 2. Scroll이 #secondSection 높이에 오면,
		// navBar 컬러 반전시켜주기 !!
		if (heightOfScroll < heightOfSecondSection-75) {
			$('#navBar').removeClass('whiteBackground');
		} else if (heightOfScroll >= heightOfSecondSection - 75) {
			$('#navBar').addClass('whiteBackground');
		}		


		// 3. Scroll이 특정 component에 오면(.fadeInUp)
		// 특정 컴포넌트들의 클래스 동작 시작 !
		// -> style.js 로 뺴자 !
		// $('.fadein').each(function() {
		// 	addClassWhenScrollIsContactWith($(this), 'animated fadeIn', $(window).height()+10);
		// });

		// $('.fadein-up').each(function() {
		// 	addClassWhenScrollIsContactWith($(this), 'animated fadeInUp', $(window).height()+10);
		// });

		// $('.fadein-left').each(function() {
		// 	addClassWhenScrollIsContactWith($(this), 'animated fadeInLeft', $(window).height()+10);
		// });

	});

	$('a[href="#introduceSecondShowing"]').click(function() {
		event.preventDefault();
		var scrollTopOfIntroduceSecondShowing = $('#introduceSecondShowing').outerHeight();
		$('html, body').animate({scrollTop: scrollTopOfIntroduceSecondShowing}, 700);
	});
});


</script>