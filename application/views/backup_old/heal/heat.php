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
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">한방치료</a><a href="#">온열치료</a>
        </div>
        <h3>온열치료</h3>
        <div class="tit_img"><img src="/public/front/images/heal/tit_heat_img.jpg" alt="온열치료" /></div>
        <div class="txt_box2">체온은 눈에 보이는 면역입니다. 우리 몸의 체온이 1℃ 올라가면 면역력은 3배 이상 높아집니다.
            소람의 온열요법(쑥뜸)은 기존의 뜸과 달리 복부 기본 혈자리인 관원, 신궐, 중완에 커다른 뜸을 올려놓는데 순간적으로 심부 체온을 40℃까지 올려줍니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/heal/img_heat_o1.jpg" alt="온열치료로 면역력3배증가" />
        </div>
        <h4>원리</h4>
        <div class="txt_box">소람의 온열요법(무연쑥뜸)은 피부의 경혈을 통해 쑥의 뜨거운 열기와 약효를 체내로 흡수시키는 치료법입니다.
            체온이 올라가면서 혈액순환이 빨라지고 고열에 약한 암세포가 더 이상 증식하지 못하도록 막아줍니다.
        </div>
        <h4>효능</h4>
        <div class="txt_box2 ">
            <ul class="st_list_num">
                <li>
                    <div class="st_num"><span>01</span></div>
                    <div class="text_box">면역세포의 활동을 활발하게 해 면역력을 높여줍니다</div>
                </li>
                <li>
                    <div class="st_num"><span>02</span></div>
                    <div class="text_box">교감신경과 부교감 신경의 밸런스를 유지시켜 줍니다</div>
                </li>
                <li>
                    <div class="st_num"><span>03</span></div>
                    <div class="text_box">수술 후 원기 회복에 도움이 됩니다.</div>
                </li>
                <li>
                    <div class="st_num"><span>04</span></div>
                    <div class="text_box">통증 진정 효과가 있습니다.</div>
                </li>
                <li>
                    <div class="st_num"><span>05</span></div>
                    <div class="text_box">혈액순환을 왕성하게 해 신진대사를 촉진시킵니다.</div>
                </li>
                <li>
                    <div class="st_num"><span>06</span></div>
                    <div class="text_box">체내의 각종 분비선의 기능을 개선시켜 줍니다.</div>
                </li>
            </ul>
        </div>
        <h4>장점</h4>
        <div class="txt_box_gray">
            <p class="icon_img"></p>
            <ul class="st_list2">
                <li>연기가 나지 않는 무연쑥뜸을 사용하기 때문에 냄새가 거의 나지않습니다.</li>
                <li>자연치유력을 회복시켜 줍니다. </li>
            </ul>
        </div>
    </div>
</section>
<!--//right_wrap -->