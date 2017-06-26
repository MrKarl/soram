<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
        <!--동영상1-->
        <div class="movie_wrap <?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>" style="top:0">
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
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">한방치료</a><a href="#">비훈치료</a>
        </div>
        <h3>비훈치료</h3>
        <div class="tit_img"><img src="/public/front/images/heal/tit_steam_img.jpg" alt="비훈치료" /></div>
        <div class="txt_box2">비훈요법은 한약재를 끓인 수증기를 코와 입을 통해 흡입하는 치료 방법입니다.
            소람한방병원에서는 효과를 극대화하기 위해 이비인후과에서 사용하는 네뷸라이저를 채택하여 약물 흡수력을 최대한 끌어올리고 있습니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/heal/img_steam.jpg" alt="비강훈증법 기관지훈증법" />
        </div>
        <h4>원리</h4>
        <div class="txt_box">직접적인 약물 전달은 어렵지만 코, 입과 연결되어 있는 부위인 폐, 뇌로 수증기의 미세한 입자를 빠르게 전달시켜
            약물 흡수력을 높여주는 원리입니다.
        </div>
        <h4>효능</h4>
        <div class="txt_box2 ">
            <ul class="st_img_list">
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_steam_list01.jpg" alt="머리가 맑아지는 효과가있습니다." /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_steam_list02.jpg" alt="폐의 면역력을 높여주고 폐의 환경을 촉촉하게 만들어줍니다." /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_steam_list03.jpg" alt="면역력을 높여줍니다." /></div>
                </li>
            </ul>
        </div>
        <h4>장점</h4>
        <div class="txt_box_gray">
            <p class="icon_img"></p>
            <ul class="st_list2">
                <li>구내염 등으로 입안이 헐었을 때에도 약물 섭취가 가능합니다.</li>
                <li>소화기 손상으로 약물 흡수가 어려운 경우에 효과적입니다.</li>
                <li>치료 시 통증이나 거부감이 전혀 없습니다.</li>
                <li>소람약침과 처방 시 치료 효과를 향상시켜 줍니다.</li>
                <li>치료 효과를 빠르게 보실 수 있습니다.</li>
            </ul>
        </div>
    </div>
</section>
<!--//right_wrap -->