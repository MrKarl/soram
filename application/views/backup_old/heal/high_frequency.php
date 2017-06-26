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
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">양방치료</a><a href="#">고주파온열암치료</a>
        </div>
        <h3>고주파온열암치료</h3>
        <div class="tit_img"><img src="/public/front/images/heal/tit_highfrequency_img.jpg" alt="고주파온열암치료" /></div>
        <div class="txt_box2">암세포의 경우, 38.5~42도 사이에서 파괴되지만 이 온도에서 정상세포는 큰 문제가 없습니다.
            고주파온열요법은 이러한 온도차이를 이용해 종양조직에 42~43도의 열을 가하여 종양조직을 괴사시키거나 스스로 죽게 만드는 치료법입니다. </div>
        <div class="txt_box2 mt40">
            <ul class="st_img_list">
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_highfrequency_list01.jpg" alt="항암,방사선치료,한방,면역치료" /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_highfrequency_list02.jpg" alt="항암,방사선치료,한방,면역치료" /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_highfrequency_list03.jpg" alt="항암,방사선치료,한방,면역치료" /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_highfrequency_list04.jpg" alt="항암,방사선치료,한방,면역치료" /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_highfrequency_list05.jpg" alt="항암,방사선치료,한방,면역치료" /></div>
                </li>
            </ul>
        </div>
        <h4>온코써미아</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_highfrequency_01.jpg" alt="온코써미아 이미지" />
        </div>
        <div class="txt_box2">온코써미아는 인체에 고주파 전류를 유도해 열을 발생, 암세포의 자살을 유도하고 서서히 파괴시켜 주는 치료 장비입니다.
            열이 발생하면 생체 대사가 높아져 암세포에 산소 공급을 차단하고, 증식을 억제해 암이 호전될 수 있습니다. </div>
        <h5>온코써미아 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>환자가 움직여도 암 조직을 따라 자동으로 맞춤 조절 가능  </li>
                <li>자동조절 기능으로 암 조직에만 에너지 집중 효과 </li>
                <li>방사선 치료 효과 증대</li>
                <li>항암 약물이 잘 전달되게 함으로써 항암 효과 극대화 </li>
                <li>환자의 체중, 신체 사이즈에 따라 실시간으로 에너지의 양 조절 가능 </li>
            </ul>
        </div>
        <h4>셀시우스</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_highfrequency_02.jpg" alt="셀시우스 이미지" />
        </div>
        <div class="txt_box2">독일에서 개발한 제5세대 첨단 디지털 방식의 고추파 온열 암치료 장비로 2009년 식약청 허가를 획득하였습니다.
            체내의 깊은 조직까지 열을 42℃까지 올려주며 선택적으로 암조직에만 에너지를 가해 암세포의 괴사, 자연사를 유도합니다.
        </div>
        <h5>셀시우스 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>독일에서 온열치료전문 의료진들이 개발한 환자 맞춤형 최신장비</li>
                <li>환자의 체형, 체중에 관계없이 종양부위에 3초 이내 자동맞춤</li>
                <li>고성능 파워로 안정적인 온열 효과</li>
                <li>환자 스스로 원스톱 버튼 사용, 치료제어 가능</li>
                <li>뛰어난 쿨링시스템(피부온도 8℃~25℃) 가동</li>
                <li>전극 자동초점 및 자동추적 가능</li>
            </ul>
        </div>
    </div>
</section>
<!--//right_wrap -->