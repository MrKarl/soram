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
    <div class="right_wrap_inner2">
        <div class="part_box st_chef">
            <!--location -->
            <div class="location">
                <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">입원치료</a><a href="#">소람치료식</a>
            </div>
            <h3>소람치료식</h3>
            <h4><span class="f_bold">특급 호텔 출신 셰프</span>가 직접 만듭니다</h4>
            <div class="txt_box">소중한 분이 드시는 음식이기에 의료진이 직접 처방하고 특급 호텔 조리실 출신 셰프들이 요리해서 병실까지
                갖다드립니다.
            </div>
        </div>
        <div class="part_box st_chef bg_chef">
            <div class="txt_orange">“큰 병도 이겨낼 수 있도록 <br/>몸에 약이 되는 밥상을 준비합니다”</div>
            <div class="img100"><img src="/public/front/images/heal/img_foods_img01.jpg" alt="" /></div>
            <div class="chef_list">
                <ul>
                    <li><img src="/public/front/images/heal/img_chef_01.jpg" alt="" /></li>
                    <li><img src="/public/front/images/heal/img_chef_02.jpg" alt="" /></li>
                    <li><img src="/public/front/images/heal/img_chef_03.jpg" alt="" /></li>
                    <li><img src="/public/front/images/heal/img_chef_04.jpg" alt="" /></li>
                    <li><img src="/public/front/images/heal/img_chef_05.jpg" alt="" /></li>
                    <li><img src="/public/front/images/heal/img_chef_06.jpg" alt="" /></li>
                </ul>
            </div>
            <div class="txt_orange2">“한 번이라도 더 드실 수 있도록<br>재료부터 요리까지 정성을 다 합니다”</div>
        </div>
        <div class="part_box st_chef">
            <h4>소람의 ‘치료식’은 <span class="f_bold">기본부터 다릅니다 </span></h4>
            <div class="txt_box">소중한 분이 드시는 음식이기에 의료진이 직접 처방하고 특급 호텔 조리실 출신 셰프들이 요리해서
                병실까지 갖다드립니다.
            </div>
            <div class="foods_list">
                <ul>
                    <li>
                        <div class="food_item">
                            <p class="img100"><img src="/public/front/images/heal/img_foods_02.jpg" alt="" /></p>
                            <div class="txt_box2">
                                <p>환자 상태에 따라</p>
                                <p class="f_bold">의료진 맞춤 처방</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="food_item">
                            <p class="img100"><img src="/public/front/images/heal/img_foods_03.jpg" alt="" /></p>
                            <div class="txt_box2">
                                <p>전문 영양사의 </p>
                                <p class="f_bold">맞춤 식단 구성 </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="food_item">
                            <p class="img100"><img src="/public/front/images/heal/img_foods_04.jpg" alt="" /></p>
                            <div class="txt_box2">
                                <p>셰프 및 조리사</p>
                                <p class="f_bold">1:1 맞춤 요리 </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="food_item">
                            <p class="img100"><img src="/public/front/images/heal/img_foods_05.jpg" alt="" /></p>
                            <div class="txt_box2">
                                <p>몸에 약이 되는 </p>
                                <p class="f_bold">약선 요리 전문</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="img100 mt40 pb70">
                <img src="/public/front/images/heal/img_Custom_01.jpg" alt="약식동원" />
            </div>
        </div>

        <!--동영상2
        <div class="movie_wrap4" >
            <div class="movie_play" >
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/1QV7-GRgCIs?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <!--//동영상2-->


    </div>
</section>
<!--//right_wrap -->
