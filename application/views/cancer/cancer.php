<style>
#firstSection {
	height:512px;
	color:white;
}

#firstSection .section-background {
	width: 100%;
    height: 100%;
	position: absolute;
	background: url(/assets/img/cancer/cancer-firstSection.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/assets/img/pic_main_001.png', sizingMethod='scale')";
}

#firstSection .section-body {
	font-family: 'NanumSquare';
	font-size: 38px;
	line-height: 1.53;
	letter-spacing: -0.8px;
	text-align: center;
	color: white;
	height: 100%;
    position: relative;
}

#secondSection {
	margin-top:115px;
    text-align: left;
}

.cancer {
	height:230px;
	width:230px;
	position: relative;
	display:inline-block;
	color:white;
	font-family: 'NanumSquare';
	margin-right:9px;
	margin-bottom:9px;
    text-align: center;
}

.cancer:not(.cancer-title):hover {
	cursor: pointer;
	outline: black;
    outline-style: solid;
    outline-width: 2px;
}

.cancer.woman {
	background-color: #e974eb;
}

.cancer-title {
	font-family: 'NanumSquare';
	font-size: 34px;
	line-height: 0.32;
	letter-spacing: -0.7px;
}

.cancer.woman-title {
	color: #e974eb;
}

.cancer.respiratory {
	background-color: #1cbbb4;
}

.cancer.respiratory-title {
	color: #1cbbb4;
}

.cancer.digestive {
	background-color: #4381ff;
}

.cancer.digestive-title {
	color: #4381ff;
}

.cancer.etc {
	background-color: #ffa039;
}

.cancer.etc-title {
	color: #ffa039;
}

.cancer-name {
    line-height: 1.1;
	margin-top:20px;
	font-size:24px;
}

.cancer-english {
    margin-top: 10px;
    line-height: 1.0;
    font-size: 16px;
    font-weight: 100;
    min-height: 142px;
}

.cancer-icon {
    margin-top: 9px;
    height: 90px;
    line-height: 1.0;
    position: absolute;
    right: 0;
    left: 0;
    bottom: 42px;
}
.cancer-icon img {
	height: 100%;
    width: initial;
}
.cancer-goto {
    position: absolute;
    bottom: -10px;
    right: 0;
    left: 0;
    margin-top: 10px;
    line-height: 1.0;
    font-family: 'Nanum Barun Gothic';
    font-size: 14px;
    text-decoration: underline;
    margin-bottom: 30px;
    font-weight: 100;
    opacity: 0.8;
}

</style>


<div id="wrap">

	<div class="container-fluid">
		<section id="firstSection">
			<div class="section-background">
			</div>
			<div class="section-background-mask">
			</div>

			<div class="section-body container">
				<div class="verticalCenterOuter">
					<div class="verticalCenterMiddle">
						<div class="verticalCenterInner">
							<div>
								양·한방 협진 의료진이<br/>
								암의 기본 지식을 알기 쉽게 제공합니다
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="secondSection">
			<div class="section-body container">
				<div class="row">
					<div class="cancer fadein-up respiratory-title cancer-title">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									호흡기암
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up respiratory">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										폐암
									</div>
									<div class="cancer-english">
										Lung Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-lung.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up respiratory">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										뇌종양
									</div>
									<div class="cancer-english">
										Brain Tumor
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-brain.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up respiratory">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										두경부암
									</div>
									<div class="cancer-english">
										Head and Neck Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-head.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up respiratory">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										편도암·후두암
									</div>
									<div class="cancer-english">
										Tonsillar·Larynx Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-tons.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up respiratory">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										흉선암
									</div>
									<div class="cancer-english">
										Thymic Carcinoma
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-thymic.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up woman-title cancer-title">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									여성암
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up woman">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										유방암
									</div>
									<div class="cancer-english">
										Breast Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-breast-cancer.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up woman">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										자궁경부암
									</div>
									<div class="cancer-english">
										Uterine Cervical Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-uterine-cancer.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up respiratory">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										난소암
									</div>
									<div class="cancer-english">
										Ovarian Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-ovarian.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up respiratory">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										자궁이형성증
									</div>
									<div class="cancer-english">
										Uterine Cervical Dysplasia
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-uterine.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="cancer fadein-up digestive-title cancer-title">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									소화기암
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up digestive">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										대장암
									</div>
									<div class="cancer-english">
										Colorectal Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-color.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up digestive">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										위암
									</div>
									<div class="cancer-english">
										Gastric Adenocarcinoma
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-gastric.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up digestive">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										간·담·췌장암
									</div>
									<div class="cancer-english">
										Liver, Gall Bladder,<br/>
										Pancreatic Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-liver.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up digestive">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										식도암
									</div>
									<div class="cancer-english">
										Esophageal Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-eso.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up digestive">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										장상피화생<br/>
										만성위축성위염
									</div>
									<div class="cancer-english">
										Chronic Atrophic Gastritis
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-chronic.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="cancer fadein-up etc-title cancer-title">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									기타암
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up etc">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										림프암<br/>
										비호지킨림프종
									</div>
									<div class="cancer-english">
										Lymphoma
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-lymp.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up etc">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										혈액암·백혈병
									</div>
									<div class="cancer-english">
										Acute Myeloid Leukemia
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-acute.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up etc">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										갑상선암
									</div>
									<div class="cancer-english">
										Thyroid Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-thy.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up etc">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										전립선암
									</div>
									<div class="cancer-english">
										Prostate Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-prostate.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up etc">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										신장암
									</div>
									<div class="cancer-english">
										Renal Cell Carcinoma
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-renal.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up etc">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										방광암
									</div>
									<div class="cancer-english">
										Bladder Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-bladder.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cancer fadein-up etc">
						<div class="verticalCenterOuter">
							<div class="verticalCenterMiddle">
								<div class="verticalCenterInner">
									<div class="cancer-name">
										육종암·흑색종
									</div>
									<div class="cancer-english">
										Sarcoma Cancer
									</div>
									<div class="cancer-icon">
										<img src="/assets/img/cancer/icon-sarcoma.png">
									</div>
									<div class="cancer-goto">
										바로가기
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
	</div>

</div>



<script>

$(document).ready(function() {
	$(document).scroll(function(e) {
		var heightOfScroll = window.scrollY;
		var heightOfFirstSection = $('#firstSection').outerHeight();
		var heightOfSecondSection = heightOfFirstSection;

		if (heightOfScroll < heightOfSecondSection-75) {
			$('#navBar').removeClass('whiteBackground');
		} else if (heightOfScroll >= heightOfSecondSection - 75) {
			$('#navBar').addClass('whiteBackground');
		}
	});
});
</script>