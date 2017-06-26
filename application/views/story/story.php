<style>
#firstSection {
	/*height:100vh;*/
	height:512px;
	width: 100%;
}

section {
	text-align: center;
}

.cancel-tab ul {
	border: none;
}

#numOfVisitors {
	text-align: center;
	font-family: 'Nanum Square';
	font-size: 20px;
	letter-spacing: 2px;
	text-align: center;
	color: #ffffff;
}

#numOfVisitors span {
	/*font-family: 'HelveticaNeue', 'Nanum Square';*/
	font-family: 'Helvetica';
	font-weight:400;
	font-size: 140px;
	text-align: center;
	color: #ffffff;
	letter-spacing: 3.4px;
}

section .nav>li>a { 
	border: none;
	color: rgba(0, 0, 0, 0.8);
	padding: 20px 40px 20px 0;
	font-family: 'Nanum Square';
  	font-size: 16px;
}

section .nav-tabs>li.active>a, section .nav-tabs>li.active>a:focus, section .nav-tabs>li.active>a:hover {
	color: #02b3f1;
    cursor: default;
    background-color: initial;
    border: none;
}

section .nav-tabs>li>a:hover {
    border:none;
}

section .nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: initial;
}

#thirdSection {
	background-color: #111111;
	color:white;
}

#thirdSection .nav>li>a {
	color:white;
}

#thirdSection .nav-tabs>li.active>a, #thirdSection .nav-tabs>li.active>a:focus, #thirdSection .nav-tabs>li.active>a:hover {
	color: #02b3f1;
}

.ct-description {
	width:100%;
	background-color: #222222;
	padding:40px;
	text-align: center;
}



#secondSection .item-title {
	font-family: 'Nanum Square';
	font-size: 22px;
	text-align: center;
	color: #02b3f1;
	margin-top:16px;
}

#secondSection .item-description {
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	font-weight: 300;
	line-height: 1.25;
	letter-spacing: -0.3px;
	text-align: center;
	color: #8e8e8e;
	margin-bottom: 40px;
}

#secondSection .item {
	cursor:pointer;
	margin-right: 10px;
}

#secondSection .item img {
	transition: all 1.5s ease;
	overflow: hidden;
}

#secondSection .item:hover img {
	transform: scale(1.1);
}

@media (max-width: 500px) {
	#secondSection .item-title {
		font-size: 18px;
	}

	#secondSection .item-description {
		font-size: 14px;
	}
}

.tab-pagination {
	text-align: right;
    margin-right: 2px;
    margin-bottom:40px;
    margin-top:40px;
}

.tab-pagination button {
	text-align: right;
	width:42px;
	height:42px;
	background-color:transparent;
	border: solid 2px #e1e1e1;
	color: #e1e1e1;;
	font-size:18px;
    text-align: center;
    margin-right: -2px;
}

#firstSection .section-background {
	width: 100%;
    height: 100%;
	position: absolute;
	background: url(/assets/img/story/story-firstSection.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/assets/img/pic_main_001.png', sizingMethod='scale')";
}

#secondSection .section-body {
	font-family: 'Nanum Square';
	font-size: 38px;
	line-height: 1.53;
	letter-spacing: -0.8px;
	text-align: center;
	color: white;
	height: 100%;
    position: relative;
}



</style>


<nav id="scrollSpyMenu">
  <ul class="nav nav-stacked" data-spy="affix" data-offset-top="70">
	<!-- <ul class="nav nav-stacked" data-spy="affix"> -->
		<li><a href="#firstSection">호전사례 영상 01</a></li>
		<li><a href="#secondSection">호전사례 CT 2</a></li>
		<li><a href="#thirdSection">환우회 이야기 3</a></li>
	</ul>
</nav>


<div id="wrap">

	<div class="container-fluid">
		<section id="firstSection">

			<div class="section-background">
			</div>
			<div class="section-background-mask">
			</div>

			<div class="verticalCenterOuter">
				<div class="verticalCenterMiddle">
					<div class="verticalCenterInner">
						<div style="font-family: 'Nanum Square'; font-size:36px; text-align: center; color:white;">
		            		소람을 내원해주신 분
		            	</div>
		            	<div id="dateOfVisitors" style="color:white">
		            		<span>2017년 5월</span> 현재
		            	</div>
		            	<div id="numOfVisitors">
		            		<span>15,800</span>명
		            	</div>
					</div>
				</div>
			</div>
			<!-- 
            <div style="height:512px; width:100%; background-color:blue; position:relative">
            	<div style="position:absolute;display: table;height: 100%;width: 100%;">
            		<div style="display: table-cell;vertical-align: middle;">
				        <div style="font-family: 'Nanum Square'; font-size:36px; text-align: center; color:white;">
		            		소람을 내원해주신 분
		            	</div>
		            	<div id="dateOfVisitors" style="color:white">
		            		<span>2017년 5월<span> 현재
		            	</div>
		            	<div id="numOfVisitors">
		            		<span>15,800</span>명
		            	</div>
	            	</div>
            	</div>
            </div> -->
        </section>
        <section id="secondSection">
            <div class="section-body">

	            <div class="container">
	            	<div class="cancel-tab">
		            	<ul class="nav nav-tabs" role="tablist">
						    <li role="presentation" class="active">
						    	<a href="#cancerAll" aria-controls="cancerAll" role="tab" data-toggle="tab">전체</a>
						    </li>
						    <li role="presentation">
						    	<a href="#cancerLung" aria-controls="cancerLung" role="tab" data-toggle="tab">폐암</a>
						    </li>
						    <li role="presentation">
						    	<a href="#cancerBreast" aria-controls="cancerBreast" role="tab" data-toggle="tab">유방암</a>
						    </li>
					    </ul>
						
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="cancerAll">
								<div class="row container">
									<div class="col-sm-4 col-xs-6 fadein-up">
										<div class="item">
											<div class="item-img">
												<div style="position:relative; height: 100%;">
													<img src="/assets/img/miracle/pic_miracle_001.jpg" alt="기적의 주인공">
												</div>
												<div style="position:absolute; top:0; bottom:0; left:0; right:0;">
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


								<div class="tab-pagination">
				            		<span>1</span> / <span>8<span>    <button>&lt;</button><button>&gt;</button>
				            	</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="cancerLung">
								<div class="row container">
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
								</div>
								<div class="tab-pagination">
				            		<span>1</span> / <span>8<span>    <button>&lt;</button><button>&gt;</button>
				            	</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="cancerBreast">
								<div class="row container">
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
								</div>
								<div class="tab-pagination">
				            		<span>1</span> / <span>8<span>    <button>&lt;</button><button>&gt;</button>
				            	</div>
							</div>
						</div>
					</div>
	            	
	            </div>
            </div>
		</section>
<style>

#thirdSection .cancel-tab .nav.nav-tabs {
	margin-top:20px;
	margin-bottom: 20px;
}

</style>
		<section id="thirdSection">
			<div class="container">
				<div class="cancel-tab">
	            	<ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active">
					    	<a href="#cancerAll2" aria-controls="cancerAll2" role="tab" data-toggle="tab">전체</a>
					    </li>
					    <li role="presentation">
					    	<a href="#cancerLung2" aria-controls="cancerLung2" role="tab" data-toggle="tab">폐암</a>
					    </li>
					    <li role="presentation">
					    	<a href="#cancerBreast2" aria-controls="cancerBreast2" role="tab" data-toggle="tab">유방암</a>
					    </li>
				    </ul>
					
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="cancerAll2">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<img src="/assets/img/story/before.png">
								</div>
								<div class="col-xs-12 col-sm-6">
									<img src="/assets/img/story/after.png">
								</div>

								<div class="col-xs-12 ct-description">
									<div style="font-family: 'Nanum Square'; font-size:18px; color:#01dbfc;">
										췌장암	
									</div>
									<div style="font-family: 'Nanum Barun Gothic'; font-size:16px; color:white; text-align: center;">
										<span>최길O, (남, 76세)</span>&nbsp;&nbsp;<span>치료기간 3개월</span>
									</div>

									<div style="width:22px; height:10px; border-bottom:2px solid white; margin:20px auto 22px auto;"></div>
									
									<div style="font-family: 'Nanum Barun Gothic'; font-size:30px; color:white; text-align: center;">
										췌장 재발 부위, 간 전이 부위 종양 크기 감소
									</div>
								</div>
							</div>

							<div class="row">
								<div class="tab-pagination">
				            		<span>1</span> / <span>8<span>    <button>&lt;</button><button>&gt;</button>
				            	</div>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane" id="cancerLung2">
							<div class="row container">
								폐암 CT 사진이 들어올 자리입니다 ~
							</div>
						</div>

						<div role="tabpanel" class="tab-pane" id="cancerBreast2">
							<div class="row container">
								유방 CT 사진이 들어올 자리입니다 ~
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
<style>
.soramHwanwoo {
	margin-top: 120px;
	font-family: 'Nanum Square';
	font-size: 30px;
	line-height: 1.6;
	letter-spacing: -0.6px;
	text-align: left;
	color: #000000;
	margin-bottom:40px;
}
.soramHwanwooDescription {
	font-family: 'Nanum Barun Gothic';
	font-size: 18px;
	line-height: 1.78;
	text-align: left;
	color: #868686;
	margin-bottom: 50px;
}
.soramHwanwooWork {
	height: 330px;
}

#soramHwanwooWorks .soramHwanwooWork {
	background-color: #007bd1;
	margin-right:10px;
	margin-bottom:10px;
	padding: 60px 25px 55px 25px;
}

/*#soramHwanwooWorks .soramHwanwooWork:last-child {
	margin-right:0px;
}*/

.hwanwooTitle {
	font-family: 'Nanum Square';
	font-size: 26px;
	line-height: 1.23;
	text-align: left;
	color: #ffffff;
	font-weight: 100;
	margin-bottom: 60px;
}
.hwanwooDescription {
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	line-height: 1.63;
	letter-spacing: -0.3px;
	text-align: left;
	color: #ffffff;
	font-weight: 100;
}


@media (max-width:1000px) {
	.soramHwanwooWork {
		height: 400px
	}

	.hwanwooTitle {
		margin-bottom: 40px;
	}
}
</style>
		<section id="fourthSection">
			<div class="container">
				<div class="row">
					<div class="soramHwanwoo">
						소람 환우회란
					</div>

					<div class="soramHwanwooDescription">
						소람 환우회는 소람한방방병원에서 양한방 병행 암치료를 통해 <br/>
						암을 희망적으로 이겨내고행복한 투병을 함께하고 계신 환우들의 모임입니다.
					</div>					
				</div>

				<div id="soramHwanwooWorks">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooWork">
								<div class="hwanwooTitle">
									소중한 만남
								</div>
								<div class="hwanwooDescription">
									매주 화요일, 암 정보와 치료 노하우를 <br/>
									공유하는 소중한 만남을 가집니다. <br/>
									사전 신청(1661-1115) 하시면 암 멘토로 <br/>
									소람 환우회를 만나실 수 있습니다. 
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooWork">
								<div class="hwanwooTitle">
									봉사활동
								</div>
								<div class="hwanwooDescription">
									매주 화요일, 암 정보와 치료 노하우를 <br/>
									공유하는 소중한 만남을 가집니다. <br/>
									사전 신청(1661-1115) 하시면 암 멘토로 <br/>
									소람 환우회를 만나실 수 있습니다. 
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooWork">
								<div class="hwanwooTitle">
									힐링여행
								</div>
								<div class="hwanwooDescription">
									매주 화요일, 암 정보와 치료 노하우를 <br/>
									공유하는 소중한 만남을 가집니다. <br/>
									사전 신청(1661-1115) 하시면 암 멘토로 <br/>
									소람 환우회를 만나실 수 있습니다. 
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooWork">
								<div class="hwanwooTitle">
									바자회
								</div>
								<div class="hwanwooDescription">
									소람 환우회는 이웃과 희망을 나누기 위해 <br/>
									정기적으로 봉사활동을 하고 있습니다. <br/>
									저소득층 지원을 위한 바자회 등 나눔 활동을 <br/>
									통해 지역 사회의 소외된 이웃을 돌아보고 <br/>
									희망을 더합니다.
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooWork">
								<div class="hwanwooTitle">
									힐링센터
								</div>
								<div class="hwanwooDescription">
									매주 화요일, 암 정보와 치료 노하우를 <br/>
									공유하는 소중한 만남을 가집니다. <br/>
									사전 신청(1661-1115) 하시면 암 멘토로 <br/>
									소람 환우회를 만나실 수 있습니다. 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


<style>
.hwanwooAlbumDescription {
	font-family: 'Nanum Square';
	font-size: 18px;
	line-height: 2.67;
	letter-spacing: -0.4px;
	text-align: center;
	color: #000000;
}

.hwanwooAlbumDescriptionDate {
	font-family: 'Nanum Square';
	font-size: 16px;
	line-height: 3;
	letter-spacing: -0.3px;
	text-align: center;
	color: #868686;
}

.soramHwanwooAlbum {
	/*height:330px;*/
	background-color: #ffffff;
	border: solid 1px #e1e1e1;
}
#soramHwanwooAlbums {
	padding-bottom: 100px;
}

#soramHwanwooAlbums .soramHwanwooAlbum {
	margin-right:10px;
	margin-bottom:10px;
}

.hwanwooAlbumImage {
	/*height:70px;*/
}

</style>
			<div class="container">
				<div class="row">
					<div class="soramHwanwoo">
						활동 앨범
					</div>
				</div>

				<div id="soramHwanwooAlbums">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooAlbum">
								<div class="hwanwooAlbumImage">
									<img src="/assets/img/miracle/pic_miracle_003.jpg"/>
								</div>
								<div class="hwanwooAlbumDescription">
									<div>
										아웃사랑 바자회 봉사활동
									</div>	

									<div style="width:24px; height:2px; border-bottom: 1px solid black; margin:auto; text-align:center;"></div>

									<div class="hwanwooAlbumDescriptionDate">
										2017.07.01
									</div>

								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooAlbum">
								<div class="hwanwooAlbumImage">
									<img src="/assets/img/miracle/pic_miracle_003.jpg"/>
								</div>
								<div class="hwanwooAlbumDescription">
									<div>
										아웃사랑 바자회 봉사활동
									</div>	

									<div style="width:24px; height:2px; border-bottom: 1px solid black; margin:auto; text-align:center;"></div>

									<div class="hwanwooAlbumDescriptionDate">
										2017.07.01
									</div>

								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooAlbum">
								<div class="hwanwooAlbumImage">
									<img src="/assets/img/miracle/pic_miracle_003.jpg"/>
								</div>
								<div class="hwanwooAlbumDescription">
									<div>
										아웃사랑 바자회 봉사활동
									</div>	

									<div style="width:24px; height:2px; border-bottom: 1px solid black; margin:auto; text-align:center;"></div>

									<div class="hwanwooAlbumDescriptionDate">
										2017.07.01
									</div>

								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooAlbum">
								<div class="hwanwooAlbumImage">
									<img src="/assets/img/miracle/pic_miracle_003.jpg"/>
								</div>
								<div class="hwanwooAlbumDescription">
									<div>
										아웃사랑 바자회 봉사활동
									</div>	

									<div style="width:24px; height:2px; border-bottom: 1px solid black; margin:auto; text-align:center;"></div>

									<div class="hwanwooAlbumDescriptionDate">
										2017.07.01
									</div>

								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooAlbum">
								<div class="hwanwooAlbumImage">
									<img src="/assets/img/miracle/pic_miracle_003.jpg"/>
								</div>
								<div class="hwanwooAlbumDescription">
									<div>
										아웃사랑 바자회 봉사활동
									</div>	

									<div style="width:24px; height:2px; border-bottom: 1px solid black; margin:auto; text-align:center;"></div>

									<div class="hwanwooAlbumDescriptionDate">
										2017.07.01
									</div>

								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="soramHwanwooAlbum">
								<div class="hwanwooAlbumImage">
									<img src="/assets/img/miracle/pic_miracle_003.jpg"/>
								</div>
								<div class="hwanwooAlbumDescription">
									<div>
										아웃사랑 바자회 봉사활동
									</div>	

									<div style="width:24px; height:2px; border-bottom: 1px solid black; margin:auto; text-align:center;"></div>

									<div class="hwanwooAlbumDescriptionDate">
										2017.07.01
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="fifthSection">

		</section>

	</div>

</div>