<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap st_heal">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">양방치료</a><a href="#">치료장비</a>
        </div>
        <h3>치료장비</h3>
        <h4>치료장비 </h4>
        <div class="txt_box">
            소람한방병원은 암 치료 및 항암 부작용 개선 효과와 안전성을 인정 받은 첨단 치료 장비들을 보유하고 있습니다.
        </div>
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
        <h4>고압산소치료 </h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_equipmetn_01.jpg" alt="고압산소치료" />
        </div>
        <div class="txt_box2">
            대부분의 암 조직은 저산소 상태에 있고 에너지의 효율성이 매우 떨어져 있습니다.
            고밀도 산소치료는 고밀도 산소를 흡입하여 이러한 저산소 상태를 개선시켜 줌으로써 암 치료의 보조수단으로 널리 활용되고 있습니다.
        </div>
        <h5>고압산소치료 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>암 조직의 성장을 억제합니다.</li>
                <li>몸 속 노폐물을 제거합니다.</li>
                <li>수술 후 손상된 조직을 빠르게 재생시킵니다.</li>
                <li>혈관 벽에 붙어 있는 불순물을 정화시켜 혈액순환을 촉진시킵니다.</li>
                <li>피로 물질을 분해시켜 만성 피로를 개선시켜 줍니다.</li>
            </ul>
        </div>
        <!--동영상2-->
        <div class="movie_wrap4 <?=( $media_result[1]['v_type'] == "1" ) ? "st_video" : ""?>">
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
        <h4>바이오포톤 </h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_equipmetn_02.jpg" alt="바이오포톤" />
        </div>
        <div class="txt_box2">
            인체흡수성이 뛰어난 다이나믹 파동 에너지를 심부(40~50mm)까지 전달하여 통증 완화에 도움을 줄 수 있는 온열요법입니다.
            통증 때문에 뜸을 하기 힘든 환자, 허약 체질, 어린이의 경우 적합합니다.
        </div>
        <h5>바이오포톤 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>통증 진정 및 억제 작용이 있습니다. </li>
                <li>모세혈관을 확장시켜 혈액순환을 촉진시킵니다. </li>
                <li>체온을 높여 면역력을 향상시켜줍니다.</li>
                <li>어깨결림, 효통, 근육 피로 등 피로 개선 효과가 있습니다. </li>
                <li>세포 기능을 활성화시켜 신진대사를 촉진시킵니다. </li>
                <li>조직 기능을 정상으로 되돌려줍니다. </li>
            </ul>
        </div>
        <!--동영상3-->
        <div class="movie_wrap4 <?=( $media_result[2]['v_type'] == "1" ) ? "st_video" : ""?>">
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

        <h4>페인스크램블러 </h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_equipmetn_03.jpg" alt="페인스크램블러" />
        </div>
        <div class="txt_box2">
            Pain Scrambler는 주사, 수술, 약물없이 통증을 치료하는 첨단 의료기기로서 유럽의 CE인증을 2008년, 미국FDA승인을 2009년에 득하였고,
            신의료기술 인정에 엄격한 미국의료협회에서 신 의료기술코드를 획득한 신 의료기입니다.
        </div>
        <h5>페인스크램블러 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>통증을 경감시켜 진통제 사용량을 줄여주는 효과가 있습니다.  </li>
            </ul>
        </div>
        <h4>단파온열요법 </h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_equipmetn_04.jpg" alt="단파온열요법" />
        </div>
        <div class="txt_box2">
            마이크로 웨이브(Micro Wave)요법이라고도 하며 각 조사 장치를 환부에 조사하여 열 에너지로 전환 시키는 온열 치료법입니다.
        </div>
        <h5>단파온열요법 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>통증 진정 효과가 있습니다. </li>
                <li>신진대사를 활성화 시켜 줍니다.  </li>
                <li>깊은 장기까지 열을 공급하여 소화기, 배설기관의 혈액순환을 도와줍니다.  </li>
            </ul>
        </div>
        <!--동영상4-->
        <div class="movie_wrap4 <?=( $media_result[3]['v_type'] == "1" ) ? "st_video" : ""?>">
            <?if($media_result[3]['v_type'] == "1"):?>
                <div class="video_wrap2">
                    <video  width="100%" height="100%" id="video4" >
                        <source type="video/mp4" src="<?=$media_result[3]['media_src']?>" />

                        <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                            <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                            <!--<img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />-->
                        </object>

                    </video>
                    <script> // using jQuery
                        $('#video4').mediaelementplayer(/* Options */);
                    </script>

                </div>
            <?elseif($media_result[3]['v_type'] == "2"):?>
                <?$youtube_data = explode("/",$media_result[3]['media_src']);?>
                <?$youtube_id   = $youtube_data[count($youtube_data)-1];?>
                <div class="movie_play" >
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$youtube_id?>?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                </div>
            <?elseif($media_result[3]['v_type'] == "3"):?>
                <div class="img_hope_center" >
                    <img src="<?=$media_result[3]['media_src']?>" />
                </div>
            <?endif?>
        </div>
        <!--//동영상4-->

        <h4>혈관레이저 </h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_equipmetn_05.jpg" alt="혈관레이저" />
        </div>
        <div class="txt_box2">
            혈관레이저는 손이나 발등을 지나는 정맥 혈관에 레이저광선을 침투시켜 세포 대사 활성화를 통해 혈액순환을 촉진시키는 치료법입니다.
        </div>
        <h5>혈관레이저 특징</h5>
        <div class="gray_box">
            <p class="icon_img"></p>
            <ul class="st_list2">
                <li>인체 세포를 진동시켜 얻어지는 에너지가 열 에너지로 바뀌어 통증이 완화됩니다.</li>
                <li>혈액순환 및 신진대사를 활성화시켜줍니다.  </li>
                <li>세포 증식 및 분열이 활발하게 일어납니다.  </li>
            </ul>
        </div>
    </div>
</section>
<!--//right_wrap -->