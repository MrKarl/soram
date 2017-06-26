<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람암치료</a><a href="#">유방암</a>
        </div>
        <h3>유방암<span>breast cancer</span></h3>

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
        <h4 class="pink">유방암<span class="f_bold">특징</span> </h4>
        <div class="txt_box">
            유방암은 유방에 생긴 악성 종양으로, 진행이 느리게 나타나는 비교적 착한 암입니다.
            유방암은 1기에 발견하면 수술이 쉽고 생존율이 매우 높지만 4기의 경우 수술이 어렵기 때문에 항암화학요법을 실시합니다.
            무엇보다 유방암은 전이·재발이 잘 되는 암이어서 항암치료가 끝난 후에도 재발 관리를 꾸준히 해주어야 합니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/care/img_breast_01.jpg" alt="유방암특징" />
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

        <h4 class="pink">양한방 병행치료 <span class="f_bold f_roboto">Why?</span></h4>
        <div class="line_box line_pink">
            <ul class="st_list3">
                <li><div class="icon_check">수술 전 체력을 보강할 수 있습니다 .</div></li>
                <li><div class="icon_check">뼈·폐 등의 전이를 막을 수 있습니다.</div></li>
            </ul>
            <ul class="st_list3 mt10">
                <li><div class="icon_check">수술 후 재발을 막을 수 있습니다.</div></li>
                <li><div class="icon_check">항암 부작용을 완화시켜 줍니다.</div></li>
            </ul>
        </div>
        <!--동영상3-->
        <div class="movie_wrap4 <?=( $media_result[2]['v_type'] == "1" ) ? "st_video" : ""?>" style="top:65%">
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
        <h4 class="pink">치료<span class="f_bold f_roboto">Point</span></h4>
        <div class="txt_box">
            유방암은 암의 진행 정도에 따라 치료법이 달라야 합니다.
            특히 유방암은 재발 시 치료가 어려워지기 때문에 수술 후나 항암 치료 후에도 꾸준한 관리를 통해 재발을 막는 것이 중요합니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/care/img_breast_02.jpg" alt="유방암포인트" />
        </div>
        <div class="txt_line_box">
        </div>
        <h4 class="pink">치료<span class="f_bold f_roboto">프로그램</span></h4>
        <div class="txt_box2 mt20 program_list3 program_pink">
            <ul class="program_item">
                <li class="img100"><a href="/heal/heat"><img src="/public/front/images/care/img_breast_list_01.jpg" alt="온열치료" /></a></li>
                <li class="txt_box2">심부 체온을 높여 면역력을 높이고 혈액순환을 도와주는 치료법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_breast_list_02.jpg" alt="페메렌M" /></a></li>
                <li class="txt_box2">유방암 항암 효과로 특허를  획득한 소람만의 발효환 치료제</li>
            </ul>
        </div>
        <div class="txt_box2 mt40 program_list3 program_pink">
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_breast_list_03.jpg" alt="증류탕약" /></a></li>
                <li class="txt_box2">유방암 맞춤 한약재를 액화시켜 거부감 없이 복용할 수 있는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/high_frequency"><img src="/public/front/images/care/img_breast_list_04.jpg" alt="고주파온열암치료" /></a></li>
                <li class="txt_box2">고주파를 통해 체온을 높여 종양 억제 및 퇴축을 유도하는 치료법</li>
            </ul>
        </div>
        <p class="txt_notice mt40">본 치료 프로그램은 환자의 증상, 상태, 항암치료 프로그램에 따라 달라질 수 있으며 의료진과 진료상담
            후 1:1맞춤 처방됩니다. </p>

    </div>
</section>
<!--//right_wrap -->