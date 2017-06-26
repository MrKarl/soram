<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
        <!--
                                <div class="movie_wrap">
                                    <div class="movie_play">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vWiWcmpTN7s" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
        -->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람암치료</a><a href="#">자궁경부암</a>
        </div>
        <h3>자궁경부암<span>uterine cervical cancer</span></h3>
        <!--동영상1-->
        <div class="movie_wrap4 <?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>" style="top:0">
            <?if($media_result[0]['v_type'] == "1"):?>
                <div class="video_wrap2">
                    <video  width="100%" height="100%" id="video1" >
                        <source type="video/mp4" src="<?=$media_result[0]['media_src']?>" />

                        <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                            <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                            <!--<img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />-->
                        </object>

                    </video>
                    <script> // using jQuery
                        $('#video1').mediaelementplayer(/* Options */);
                    </script>

                </div>
            <?elseif($media_result[0]['v_type'] == "2"):?>
                <?$youtube_data = explode("/",$media_result[0]['media_src']);?>
                <?$youtube_id   = $youtube_data[count($youtube_data)-1];?>
                <div class="movie_play" >
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$youtube_id?>?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                </div>
            <?elseif($media_result[0]['v_type'] == "3"):?>
                <div class="img_hope_center" >
                    <img src="<?=$media_result[0]['media_src']?>" />
                </div>
            <?endif?>
        </div>
        <!--//동영상1-->
        <h4 class="red mt40">자궁경부암 <span class="f_bold">특징</span> </h4>
        <div class="txt_box">
            자궁경부암은 자궁의 입구인 경부에 HPV라고 불리는 바이러스 감염이 발생, 악성 종양으로 발전하는 암입니다.
            최근에는 국가 건강검진 사업으로 인해 자궁경부암이 아닌 전 단계인 이형성증 단계에서 발견되는 경우가 많습니다.
            1, 2기에 발견하면 5년 이상 생존율이 70%이상 되지만 수술 후 70~80%가 2년 내에 골반 재발하므로 주의해야 합니다.
        </div>
        <div class="img100 mt20">
            <img src="/public/front/images/care/img_uterine_01.jpg" alt="자궁경부암" />
        </div>
        <!--동영상2-->
        <div class="movie_wrap4 <?=( $media_result[1]['v_type'] == "1" ) ? "st_video" : ""?>" style="top:33%">
            <?if($media_result[1]['v_type'] == "1"):?>
                <div class="video_wrap2">
                    <video  width="100%" height="100%" id="video2" >
                        <source type="video/mp4" src="<?=$media_result[1]['media_src']?>" />

                        <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                            <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                            <!--<img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />-->
                        </object>

                    </video>
                    <script> // using jQuery
                        $('#video2').mediaelementplayer(/* Options */);
                    </script>

                </div>
            <?elseif($media_result[1]['v_type'] == "2"):?>
                <?$youtube_data = explode("/",$media_result[1]['media_src']);?>
                <?$youtube_id   = $youtube_data[count($youtube_data)-1];?>
                <div class="movie_play" >
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$youtube_id?>?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                </div>
            <?elseif($media_result[1]['v_type'] == "3"):?>
                <div class="img_hope_center" >
                    <img src="<?=$media_result[1]['media_src']?>" />
                </div>
            <?endif?>
        </div>
        <!--//동영상2-->
        <h4 class="red">양한방 병행치료 <span class="f_bold f_roboto">Why?</span></h4>
        <div class="line_box line_red">
            <ul class="st_list3">
                <li><div class="icon_check">자궁 수술 후 빠른 회복을 도와줍니다. </div></li>
                <li><div class="icon_check">수술 후 암 재발을 방지합니다.</div></li>
            </ul>
            <ul class="st_list3 mt10">
                <li><div class="icon_check">항암 및 방사선 치료 부작용을 경감시켜줍니다. </div></li>
            </ul>
        </div>
        <!--동영상3-->
        <div class="movie_wrap4 <?=( $media_result[2]['v_type'] == "1" ) ? "st_video" : ""?>" style="top:66%">
            <?if($media_result[2]['v_type'] == "1"):?>
                <div class="video_wrap2">
                    <video  width="100%" height="100%" id="video3" >
                        <source type="video/mp4" src="<?=$media_result[2]['media_src']?>" />

                        <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                            <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                            <!--<img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />-->
                        </object>

                    </video>
                    <script> // using jQuery
                        $('#video3').mediaelementplayer(/* Options */);
                    </script>

                </div>
            <?elseif($media_result[2]['v_type'] == "2"):?>
                <?$youtube_data = explode("/",$media_result[2]['media_src']);?>
                <?$youtube_id   = $youtube_data[count($youtube_data)-1];?>
                <div class="movie_play" >
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$youtube_id?>?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                </div>
            <?elseif($media_result[2]['v_type'] == "3"):?>
                <div class="img_hope_center" >
                    <img src="<?=$media_result[2]['media_src']?>" />
                </div>
            <?endif?>
        </div>
        <!--//동영상3-->
        <h4 class="red">치료<span class="f_bold f_roboto">Point</span></h4>
        <div class="txt_box">
            자궁경부암은 무엇보다도 몸을 따뜻하게 하는 것이 중요합니다.<br/>
            자궁경부암 수술 후 재발을 막으려면 더 이상 바이러스가 살지 못하는 자궁 환경을 만들어줘야 합니다.
            또한 예로부터 효과가 있다고 알려진 자궁의 어혈과 대하, 출혈 등을 방지하는 약재를 사용하여 자궁경부암 단백질 생성을 억제하는 것에 초점을 둡니다.
        </div>
        <h4 class="red">치료<span class="f_bold f_roboto">프로그램</span></h4>
        <div class="txt_box2 mt20 program_list3 program_red">
            <ul class="program_item">
                <li class="img100"><a href="/heal/special"><img src="/public/front/images/care/img_uterine_list01.jpg" alt="질내주입법" /></a></li>
                <li class="txt_box2">고농도 증류추출 한약을 투약해  자궁 면역력을 높이는 치료법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_uterine_list02.jpg" alt="페메렌V" /></a></li>
                <li class="txt_box2">아미노산, 폴리아민 등이 함유된 한약재를 사용해 면역력을 증진시키는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_uterine_list03.jpg" alt="소람단S" /></a></li>
                <li class="txt_box2">면역세포를 활성화시키고 종양 억제 및 재발 방지 효과가 있는 치료제</li>
            </ul>
        </div>
        <div class="txt_box2 mt40 program_list3 program_red">
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/care/img_uterine_list04.jpg" alt="귀전우단" /></li>
                <li class="txt_box2">자궁 어혈, 대하를 치료하고 이형성세포 생성을 억제하는 치료법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/acupuncture"><img src="/public/front/images/care/img_uterine_list05.jpg" alt="건칠단" /></a></li>
                <li class="txt_box2">암종에 따라 맞춤 약물을 처방, 침을 통해 효과를  빠르게 전달하는 치료법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/heat"><img src="/public/front/images/care/img_uterine_list06.jpg" alt="온열치료" /></a></li>
                <li class="txt_box2">심부 체온을 높여 면역력을 높이고 혈액순환을 도와주는 치료법</li>
            </ul>
        </div>
        <p class="txt_notice mt40">본 치료 프로그램은 환자의 증상, 상태, 항암치료 프로그램에 따라 달라질 수 있으며 의료진과 진료상담
            후 1:1맞춤 처방됩니다. </p>

    </div>
</section>
<!--//right_wrap -->