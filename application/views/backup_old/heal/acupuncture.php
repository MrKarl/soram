<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
        <!--
                                <div class="movie_wrap">
                                    <div class="movie_play">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vWiWcmpTN7s" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                               <p><img src="/public/front/images/hope/hope_movie.png" alt="동영상" style="width:100%" /></p>
        -->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap st_heal">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">한방치료</a><a href="#">소람약침</a>
        </div>
        <h3>소람약침</h3>
        <!--동영상1-->
        <div class="movie_wrap4 <?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>">
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
        <div class="tit_img"><img src="/public/front/images/heal/tit_acupuncture_img.jpg" alt="소람약침" /></div>
        <div class="txt_box2">암세포의 사멸 촉진과 항암효과를 지닌 기본 약침과 함께 20여 가지의 약물이 원발암의 특성에 따라 다양하게 처방되는 침구요법입니다. 멸균된순수 한약재에 복합 처방 한약을 침을 통해 몸에 직접 투여함으로써 약과 침의 효과를 동시에 볼 수 있습니다.
        </div>
        <!--동영상2-->
        <div class="movie_wrap4 <?=( $media_result[1]['v_type'] == "1" ) ? "st_video" : ""?>" style="top:35%">
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
        <div class="img100 mt40">
            <img src="/public/front/images/heal/img_acupuncture_01.jpg" alt="혈맥약침 경혈약침" />
        </div>
        <h4>원리</h4>
        <div class="txt_box">우리 몸에서 암세포와 싸우는 면역세포인 T세포, NK세포, B세포를 인위적으로 활성화시켜 자연스럽게 암세포 퇴축을 유도하는 치료법입니다. 암종별로, 증상별로 다른 약침이 처방됩니다.
        </div>
        <h4>효능</h4>
        <div class="txt_box2 ">
            <ul class="st_list_num">
                <li>
                    <div class="st_num"><span>01</span></div>
                    <div class="text_box">림프구를 증가시켜 면역력을 높여줍니다.</div>
                </li>
                <li>
                    <div class="st_num"><span>02</span></div>
                    <div class="text_box">항암으로 인해 떨어진 기력을 증진시킵니다.</div>
                </li>
                <li>
                    <div class="st_num"><span>03</span></div>
                    <div class="text_box">염증을 억제하고 조직을 보호합니다. </div>
                </li>
                <li>
                    <div class="st_num"><span>04</span></div>
                    <div class="text_box">암 전이를 방지하고 종양의 퇴축을 돕습니다.</div>
                </li>
                <li>
                    <div class="st_num"><span>05</span></div>
                    <div class="text_box">암 수술 후 조직 재생 속도를 높여 빠른 회복을 도와줍니다.    </div>
                </li>
            </ul>
        </div>
        <h4>장점</h4>
        <div class="txt_box_gray">
            <p class="icon_img"></p>
            <ul class="st_list2">
                <li>혈맥에 약물을 직접 투여하기 때문에 효과가 빠릅니다.</li>
                <li>소화기능이 약하거나 한약 복용이 어려운 환자도 처방이가능합니다.</li>
                <li>복잡한 질환에 따라 개별 맞춤 치료가 가능합니다.</li>
            </ul>
        </div>

    </div>
</section>
<!--//right_wrap -->