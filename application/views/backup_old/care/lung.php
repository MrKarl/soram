<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
        <!--
                                <div class="movie_wrap">
                                    <div class="movie_play">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vWiWcmpTN7s" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
        -->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람암치료</a><a href="#">폐암</a>
        </div>
        <h3>폐암<span>lung cancer</span></h3>
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
        <h4 class="yellow">폐암의<span class="f_bold">특징</span> </h4>
        <div class="txt_box">
            폐암은 종류에 따라 비소세포 폐암과 소세포 폐암으로 구분되는데 비소세포폐암 진단 시약 80%는 상당히 진행되었거나 전이가 되어 있습니다.
            특히 소세포 폐암은 매우 빨리 자라는데다 전신으로 퍼져나가 수술이 불가능합니다.
            폐암은 진행 속도가 매우 빠른 암이기 때문에 치료 계획을 빨리 세우시는 게 좋습니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/care/img_lung_01.jpg" alt="폐암특징" />
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
        <h4 class="yellow">양한방 병행치료 <span class="f_bold f_roboto">Why?</span></h4>
        <div class="img100 mt40">
            <img src="/public/front/images/care/img_lung_02.jpg" alt="양한방 병행치료" />
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
        <h4 class="yellow mt80">치료<span class="f_bold f_roboto">Point</span></h4>
        <div class="txt_box">
            폐암은 속도전입니다. 먼저 암의 증상부터 잡고 암의 진행을 막아야 합니다. 폐암의 증상이 호전되면 폐암을 치료할 확률도 높아집니다.
            항암치료와 양한방 치료를 병행하면서 암의 진행을 늦추는 데  초점을 맞춰야 합니다.
        </div>
        <div class="line_box line_yellow">
            <ul class="st_list3">
                <li><div class="icon_check">폐암의 증상을 개선 시켜 줍니다.</div></li>
                <li><div class="icon_check">항암제 반응률을 높여줍니다. </div></li>
            </ul>
            <ul class="st_list3 mt10">
                <li><div class="icon_check">항암 부작용을 완화시켜 줍니다.</div></li>
                <li><div class="icon_check">종양 억제 및 소실 효과를 볼 수 있습니다.</div></li>
            </ul>
        </div>
        <div class="txt_line_box">
        </div>
        <h4 class="yellow">치료<span class="f_bold f_roboto">프로그램</span></h4>
        <div class="txt_box2 mt20 program_list3">
            <ul class="program_item">
                <li class="img100"><a href="/heal/nose_steam"><img src="/public/front/images/care/img_lung_list01.jpg" alt="비훈치료" /></a></li>
                <li class="txt_box2">호흡기를 통해 약물을 흡입하여 폐의  환경을 개선시켜주는 치료법  </li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/high_frequency"><img src="/public/front/images/care/img_lung_list02.jpg" alt="고주파온열암치료" /></a></li>
                <li class="txt_box2">고주파를 통해 종양을 파괴하고  체온을 높여 면역력을 높여주는 치료법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/acupuncture"><img src="/public/front/images/care/img_lung_list03.jpg" alt="소람약침" /></a></li>
                <li class="txt_box2">암종에 따라 맞춤 약물을 처방, 침을 통해 효과를 빠르게 전달하는 치료법</li>
            </ul>
        </div>
        <div class="txt_box2 mt40 program_list3">
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_lung_list04.jpg" alt="함암단S" /></a></li>
                <li class="txt_box2">담읍 및 어혈을 제거하고 종양 신생혈관 생성을 억제하는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/care/img_lung_list05.jpg" alt="폐암단" /></li>
                <li class="txt_box2">폐암 종양활성을 억제하고 항염 효과를 볼 수 있는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_lung_list06.jpg" alt="New스피라Q" /></a></li>
                <li class="txt_box2">면역 반응을 높이고 신경세포 손상과 종양 활성을 억제하는 치료제</li>
            </ul>
        </div>
        <p class="txt_notice mt40">본 치료 프로그램은 환자의 증상, 상태, 항암치료 프로그램에 따라 달라질 수 있으며 의료진과 진료상담
            후 1:1맞춤 처방됩니다. </p>

    </div>
</section>
<!--//right_wrap -->