<style>
#firstSection {
	/*height:100vh;*/
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

.profile-name {
	font-family: 'Nanum Barun Gothic';
	font-size: 20px;
	font-weight: bold;
	margin-top:15px;
}

.profile-position {
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	margin-top:10px;
}

.profile-devider {
	width:20px;
	height:2px;
	border: solid 2px black;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
}

.profile-bio {
	font-family: 'Nanum Barun Gothic';
	font-size: 20px;
	line-height: 1.8;
	letter-spacing: -0.4px;
	text-align: left;
	color: #000000;
}

#thirdSection {
	background-color:#e9ebed;
}

.profile-thumbnail {
	width: 130px;
	height:130px;
    margin: auto;
}

.profile-bio-type {
	font-family: 'Nanum Square';
	font-size: 24px;
	line-height: 1.25;
    text-align: right;
    padding-right: 18px;
}

.profile-bio-detail {
	font-family: 'Nanum Barun Gothic';
	font-size: 20px;
	line-height: 1.5;
	letter-spacing: -0.4px;
	text-align: left;
	color: #000000;
	font-weight: 200;
}

.profile-list {
	margin-top:65px;
	margin-left:auto;
	margin-right:auto;
}

section {
	text-align: center;
}

.goback {
	border:none;
	background-color:transparent;
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

            <!-- <div id ="preMovie" style="display:none;"> -->
            <div id ="preMovie">
	            <div class="movie_play">
					<!-- <video id="preVideo" autoplay style="width:100%;" poster="http://soram.kr/public/upload/image/treatment/20170616/6e275ebd4ec9c8902abd8df56f566dbc.jpg" controls="true"> -->
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
					
					<div class="col-xs-12">
						<div class="profile-thumbnail">
							<img class="img-circle" src="/assets/img/introduce/img-doc-s-002.png"/>
						</div>

						<div class="profile-name">
							김성수
						</div>

						<div class="profile-position">
							경희대학교 한의학박사
						</div>

						<div class="profile-devider"></div>
					</div>
				</div>

				<div class="row">
					<div class="profile-list">
						<div class="col-xs-5">
							<div class="profile-bio-type">
								주요경력
							</div>
						</div>

						<div class="col-xs-7">
							<div class="profile-bio">
								現 소람한방병원 한방대표원장<br/>
								現 경희대학교 한의과대학 외래교수<br/>
								경희대학교 한의과대학 졸업<br/>
								한의학 박사<br/>
								대한약침학회 정회원<br/>
								대한 암 한의학회 정회원<br/>
								대한 한의통증제형학회 정회원<br/>
								대한원전학회 정회원<br/>
							</div>
						
						</div>
					</div>
	            </div>
            </div>
		</section>




		<section id="thirdSection">
			<div class="container">
				<div class="row">
					<div class="profile-list">
						<div class="col-xs-5">
							<div class="profile-bio-type">
								논문
							</div>
						</div>

						<div class="col-xs-7">
							<div class="profile-bio-detail">
								Phospholipase A2 inhibits cisplatin-induced acute<br/>
							kidney injury by modulating regulatory T cells by<br/>
							the CD 206 mannose receptor<br/><br/>

							Case of complete remission of breast cancer metastasized<br/>
							to lung treated by traditional korean therapy<br/><br/>

							A case of stage IV non-small cancer treated by Korean<br/>
							medicine therapy alone<br/><br/>

							A case of inoperable klatskin tumor showing response<br/>
							to wild ginseng phamacopuncture<br/><br/>

							Improved Case of Recurred and Metastatic Ascending<br/>
							Colon Cancer by Combination of Oriental Medical Therapy<br/>
							and FOLFIRI Chemotherapy
							</div>
						
						</div>
					</div>
	            </div>




	            <div class="row">
					<div class="profile-list">
						<div class="col-xs-5">
							<div class="profile-bio-type">
								방송
							</div>
						</div>

						<div class="col-xs-7">
							<div class="profile-bio-detail">
								[KBS] KBS 2TV 여유만만 '내 몸 안의 주치의, 면역력'<br/>
								[KBS] KBS 1TV 무엇이든 물어보세요 '면역 암치료'<br/>
								[SBS] SBS생활경제 <한방과 양방의 방송<br/>
								[MBC] 기분 좋은 날 <양한방 전문가 3인이 말하는<br/>
								여성암의 모든 것>합작, 병행치료 <br/>
								외 다수
							</div>
						
						</div>
					</div>
	            </div>



				<!-- <div class="row">
					<div class="col-xs-12 col-sm-2">
						<div class="profile-bio-type">
							논문
						</div>
					</div>

					<div class="col-xs-12 col-sm-10">
						<div class="profile-bio-detail">
							Phospholipase A2 inhibits cisplatin-induced acute<br/>
							kidney injury by modulating regulatory T cells by<br/>
							the CD 206 mannose receptor<br/><br/>

							Case of complete remission of breast cancer metastasized<br/>
							to lung treated by traditional korean therapy<br/><br/>

							A case of stage IV non-small cancer treated by Korean<br/>
							medicine therapy alone<br/><br/>

							A case of inoperable klatskin tumor showing response<br/>
							to wild ginseng phamacopuncture<br/><br/>

							Improved Case of Recurred and Metastatic Ascending<br/>
							Colon Cancer by Combination of Oriental Medical Therapy<br/>
							and FOLFIRI Chemotherapy
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-2">
						<div class="profile-bio-type">
							방송
						</div>
					</div>

					<div class="col-xs-12 col-sm-10">
						<div class="profile-bio-detail">
							[KBS] KBS 2TV 여유만만 '내 몸 안의 주치의, 면역력'<br/>
							[KBS] KBS 1TV 무엇이든 물어보세요 '면역 암치료'<br/>
							[SBS] SBS생활경제 <한방과 양방의 방송<br/>
							[MBC] 기분 좋은 날 <양한방 전문가 3인이 말하는<br/>
							여성암의 모든 것>합작, 병행치료 <br/>
							외 다수
						</div>
					</div>
				</div>
				
				 -->



				<div class="row">
					<div class="col-xs-12">
						<button class="goback">
							<div style="display: inline-block; height:40px;">
								<svg xmlns="http://www.w3.org/2000/svg" width="45" height="37">
								    <path fill="none" stroke="#000" stroke-width="2" d="M17.516 34.993L.986 17.989 17.516.987"/>
								    <path fill-rule="evenodd" d="M2 16.562h42v2.001H2v-2.001z"/>
								</svg>
							</div>

							<div style="display: inline-block; height:40px;">
								<span style="font-family: 'Nanum Barun Gothic'; font-size: 18.5px; line-height: 1; letter-spacing: -0.4px;color:black;"> 이전페이지로 
								</span>
							</div>
						</button>
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