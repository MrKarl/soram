<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
        <!--동영상1-->
        <div class="movie_wrap <?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>">
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
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap st_heal">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">특화치료</a>
        </div>
        <h3>특화치료</h3>
        <h4>특화<span class="f_bold">치료</span> </h4>
        <div class="txt_box">
            특화치료는 암에 대한 공포심을 이겨내고 심리적인 안정을 찾을 수 있도록 도와주는 소람한방병원의 치료법입니다.
            웃음과 긍정의 태도는 면역력을 높여 치료 효과를 배가 시켜줍니다.
        </div>
        <h4>웃음<span class="f_bold">치료</span></h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_laugh_01.jpg" alt="웃음치료" />
        </div>
        <div class="txt_box2">소람한방병원의 웃음치료는 매주 한 시간씩 진행하고 있으며, 기본적인 준비운동과
            아이스브레이크로 시작하여 기승전결을 가진 프로그램 진행으로 환자들이 질병 치유에
            대해 긍정적인 의지를 보일 수 있도록 도와줍니다. </div>
        <div class="txt_box2 mt40">
            <ul class="st_img_list2">
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_smile_list01.jpg" alt="암에 대한 공포를 이겨내고 스트레스를 감소시킵니다." /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_smile_list02.jpg" alt="투병으로 인해 떨어진 자신감을 회복시킵니다." /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_smile_list03.jpg" alt="현재의 질병상태를 수용하고 평온한 상태를 유지시켜 줍니다." /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_smile_list04.jpg" alt="면역력을 향상시키고 통증, 불면 등의 증상을 개선시킵니다." /></div>
                </li>
            </ul>
        </div>

    </div>
</section>
<!--//right_wrap -->