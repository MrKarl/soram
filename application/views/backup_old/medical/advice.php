
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
<section class="right_wrap">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">자문위원</a>
        </div>
        <h3>자문위원</h3>
        <div class="img100 mt40"><img src="/public/front/images/intro/img_advice_01.jpg" alt="시골의사 박경철"/></div>
        <div class="txt_box btn_line mt30"> 사람들은, 익숙한 것은 쉽게 받아들이지만 <br>
            낯선 것들에 대해서는 막연한 두려움을 갖고 있습니다. <br>
            하지만 인류의 역사는 언제나 낯선 것들을 통해 발전되어 왔습니다. <br>
        </div>
        <div class="txt_box btn_line mt30">

            암 치료도 마찬가지입니다. <br>
            과거에는 암이라고 하면 필연적으로 죽을 수 밖에 없는<br>
            ‘사형선고’처럼 받아들여지던 시절이 있었습니다. <br>
            지금도 영화나 드라마에서 시한부라는 소재로 쓰일 정도로 <br>
            암은 현대 의학이 정복하지 못한 질병이기도 합니다. <br>
        </div>
        <div class="txt_box btn_line mt30">
            하지만 수많은 낯선 것들에 대한 거침 없는 도전 결과, <br>
            이제는 어느 정도 극복 가능한 수준까지 왔습니다. <br>
            앞으로 암을 완벽하게 정복하기 위해서 <br>
            이러한 도전은 계속되어야 한다고 봅니다. <br>
        </div>
        <div class="txt_box btn_line mt30">
            소람한방병원의 치료와 도전이 낯설게 느껴질 수도 있습니다. <br>
            하지만 이러한 도전이 환자들에게 좋은 결과를 맺게 하고 <br>
            암 분야에서 의학적으로 의미 있는 성과를 낼 거라 기대합니다. <br>
        </div>
        <div class="txt_advice f_myengjo">소람한방병원의 발전을 기원합니다. </div>

    </div>
</section>
<!--//right_wrap -->
