<style>
#firstSection {
	width: 100%;

}

#secondSection {
	padding-top:60px;
	padding-bottom:60px;
}
#preMovie {
	position: relative;
	width: 100%;
	height: 100%;
}

.movie_play {
	/*position:absolute;*/
	top:0;
	left:0;
	right:0;
	bottom:0;
	width:100%;
	height:100%;
}

.patient-name {
	font-family: 'Nanum Barun Gothic';
	font-size: 20px;
	font-weight: bold;
	margin-top:15px;
}

.patient-position {
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	margin-top:10px;
}

.patient-devider {
	width:20px;
	height:2px;
	border: solid 2px black;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
}

#thirdSection {
	padding-bottom: 60px;
}

.patient-thumbnail {
	width: 130px;
	height:130px;
    margin: auto;
}

section {
	text-align: center;
}

.goback {
	border:none;
	background-color:transparent;
}

.patient-type {
    margin-bottom: 40px;
	font-family: 'Nanum Square';
    font-weight: 100;
	font-size: 24px;
	line-height: 1.25;
	letter-spacing: -0.5px;
	color: #000000;
}

.patient-info-title {
	width: 80px;
    vertical-align: top;
	display: inline-block;
	font-family: 'Nanum Square';
	font-size: 18px;
	line-height: 1.67;
	letter-spacing: -0.4px;
	text-align: left;
	color: #000000;
}

.patient-info-detail {
	display: inline-block;
	width: 285px;
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	line-height: 1.88;
	letter-spacing: -0.3px;
	color: #000000;
	text-align: left;
}

.patient-section {
	width: 370px;
	text-align: left;
	margin:auto;
    margin-top: 4px;
}

</style>

<div id="wrap">

	<div class="container-fluid">
		<section id="firstSection">
			<!-- <div id="preImage" style="position: relative;">
			    <img src="http://soram.kr/public/upload/image/treatment/20170616/6e275ebd4ec9c8902abd8df56f566dbc.jpg">
			  	<a href="javascript:playPre();">
			  		<img src="http://soram.kr/public/front/images/video_cover.png" style="position:absolute; left:0; top:0; width:100%; height:100%;">
			  		</a>
            </div> -->

            <div id ="preMovie">
	            <div class="movie_play">
					<video id="preVideo" autoplay style="width:100%;" controls="true">
		                <source type="video/mp4" src="http://soram.kr/public/upload/pre_movie/treatment/20170615/a16d3bf3a5943693bfb8a6294fcc275b.mp4">
		                <object width="540" height="304" type="application/x-shockwave-flash" data="video/flashmediaelement.swf">
		                    <param name="movie" value="video/flashmediaelement.swf">
		                    <param name="flashvars" value="controls=true&amp;file=/public/upload/pre_movie/treatment/20170615/a16d3bf3a5943693bfb8a6294fcc275b.mp4">
		                </object>
		            </video>
	            </div>
            </div>
        </section>
        



        <section id="secondSection">
            <div class="container">
	            <div class="row">
					<div class="patient-section">
						<div class="patient-type">
							림프암 3기
						</div>
					</div>
				</div>


				<div class="row">
					<div class="patient-section">
						<div class="patient-info-title">
							환자
						</div>
						<div class="patient-info-detail">
							배종성 (남, 70세)
						</div>
					</div>

					<div class="patient-section">
						<div class="patient-info-title">
							치료기간
						</div>
						<div class="patient-info-detail">
							3개월
						</div>
					</div>

					<div class="patient-section">
						<div class="patient-info-title">
							치료전
						</div>
						<div class="patient-info-detail">
							림프암 3기<br/>몸 전체 혹덩어리가 15~20개
						</div>
					</div>

					<div class="patient-section">
						<div class="patient-info-title">
							치료후
						</div>
						<div class="patient-info-detail">
							림프암 혹 1개 남은 상황
						</div>
					</div>
				</div>

            </div>
		</section>


<style>

</style>

		<section id="thirdSection">
			<div class="container">

				<div class="row">
					<div class="col-xs-12">
						<div class="goback">
							<svg xmlns="http://www.w3.org/2000/svg" width="45" height="37">
							    <path fill="none" stroke="#000" stroke-width="2" d="M17.516 34.993L.986 17.989 17.516.987"/>
							    <path fill-rule="evenodd" d="M2 16.562h42v2.001H2v-2.001z"/>
							</svg>
							이전페이지로
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

</div>



<script>

function playPre() {
	$("#preMovie").show();
	$("#preImage").hide();
	var preMovie = $("#preVideo");
	preMovie.on('ended',function(){
		loginPopup();
	});
	preMovie.get(0).play();
}


$(document).ready(function() {
	$('#navBar').hide();

	$(document).scroll(function(e) {
		var heightOfScroll = window.scrollY;

		if (heightOfScroll > 70) {
			$('#navBar').show();
		} else {
			$('#navBar').hide();
		}
	});


	$('.goback').click(function() {
		window.history.back();
	});
});

</script>