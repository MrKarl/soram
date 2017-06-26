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
            <?endif?>
        </div>
        <?if($media_result[0]['v_type'] == "3"):?>
            <div class="img100 center_img" >
                <img src="<?=$media_result[0]['media_src']?>" />
            </div>
        <?endif?>
        <!--//동영상1-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">섭생상담</a>
        </div>
        <h3>섭생상담</h3>
        <h4>암환자의 섭생, <span class="f_bold">왜 중요할까요?</span></h4>
        <div class="txt_box">최근 의학사를 보면 히말라야에 살고 있는 훈자족은 암에 걸리지 않는 것으로 알려져 있습니다.
            그들은 자신들이 사는 땅에서 자연농법에 따라 자란 것들만 먹는다고 합니다. <br>
            섭생이란, 병에 걸리지 않도록 생활습관과 식습관을 관리하는 것을 말합니다. 암은 신체의 신진 대사의 균형이 무너져 생기는 병으로, 수술로 눈에
            보이는 암세포를 제거해도 이전의 습관을 고치지 않는다면 또 다른 곳에 암세포가 생길 수 있습니다. 이것이 바로 ‘재발’입니다. <br>
            암의 재발을 방지하고 암을 근본적으로 치료하기 위해서는 수술, 항암화학요법 등의  적절한 치료와 함께 균형이 깨진 몸을 원래대로 되돌 수 있는
            자연 식사요법과 생활습관 개선이 반드시 필요합니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/heal/img_foodLife_01.jpg" alt="섭생상담" />
        </div>
        <h4>섭생의학연구소 <span class="f_bold"> 토탈 컨설팅 프로그램</span></h4>
        <div class="txt_box">소람한방병원 섭생의학연구소에서는 동서의학 섭생연구 전문가가 암 환자 분들에게 최적화된 1:1 맞춤 상담을 해드립니다.<br>
            특히 말기암 환자를 치료하면서 개발한 막스 게르손(Max Gerson) 박사의  자연 식이치료법과 세계적인 SCI저널에 기재된 최신 암치료 식이요법을
            접목시켜 최상의 암종별 프로그램을 제공합니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/heal/img_foodLife_02.jpg" alt="섭생상담" />
        </div>
        <h4>소람한방병원 <span class="f_bold"> 섭생관리 시스템</span></h4>
        <div class="txt_box">한국인 암환자에게는 한국인의 체질에 맞는 전통 한방 약선치료 식단을 적용하는 것이 가장 좋습니다.
            소람한방병원 암 환자분들에게 해독/면역/항암 식이요법 제공하여 몸의 독소를 제거하고(해독식이요법), 면역력을 강화시켜(면역식이요법),암세포를 저지시키는
            “항암약선치료식단”을 제공하고 있습니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/heal/img_foodLife_03.jpg" alt="섭생상담" />
        </div>
        <h4>섭생의학연구소  <span class="f_bold">1:1 맞춤 암 식이요법 교육 </span></h4>
        <div class="txt_box">입원 환자 및 외래 환자 분과 보호자를 대상으로 진단명과 증상에 따라 집에서도 손쉽게 할 수 있는 암종별 식이요법에 대해
            1:1 맞춤 교육해드립니다.
        </div>
        <div class="gray_box ">
            <ul class="st_list2">
                <li>간암, 위암, 자궁암, 뇌종양, 폐암 등 각종 암에 효과적인 항암성분 Phytochemical<br>식이요법 교육  </li>
                <li>암 종별, 수술 전/후 특별 치료식사요법 표준 기준 교육  </li>
                <li>환자의 한방 진단명/ 질병 원인 등에 맞춘 한방 암치료 약선 식사요법 교육</li>
                <li>세계적인 SCI 저널 암 연구 결과에 맞춘 최신 암 식사 요법 교육</li>
            </ul>
        </div>







    </div>
</section>
<!--//right_wrap -->