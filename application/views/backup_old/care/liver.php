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
            <a href="#"><span class="home"></span></a><a href="#">소람암치료</a><a href="#">간,담,췌장암</a>
        </div>
        <h3>간,담,췌장암<span>liver, gall bladder, pancreatic cancer</span></h3>
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
        <h4 class="purple">간,담,췌장암 <span class="f_bold">특징</span> </h4>
        <div class="txt_box2">
            <ul class="st_list_dot">
                <li>간암은 간에서 일차적으로 발생한 악성 종양을 의미하여 별다른 증상이 없다가 발견 당시 암이 상당히 진행되어 있어
                    ‘침묵의 장기’라고 부릅니다.
                    간암의 경우 항암 반응률이 낮고 치료 후 재발 확률도 높습니다.
                </li>
                <li>간에서 분비된 담즙이 십이지장으로 흘러 들어가는 담관에 발생하는 선암종을 담도암이라고 합니다.
                    담도암 또한 수술이 어렵고 항암제의 반응률이 췌장암보다 떨어져 생존율 및 치료율이 매우 낮은 암입니다.
                </li>
                <li>췌장암은 조기 발견이 어렵기 때문에 발견 당시 4기인 경우가 대부분이고 환자의 20% 이하만 수술이 가능합니다.
                    항암제 반응률도 낮지만 생존율은 10% 미만으로 암 중에서도 가장 무서운 암으로 꼽힙니다.
                </li>
            </ul>
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/care/img_liver_01.jpg" alt="간암의특징" />
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
        <h4 class="purple">양한방 병행치료 <span class="f_bold f_roboto">Why?</span></h4>
        <div class="line_box line_purple">
            <ul class="st_list3">
                <li><div class="icon_check">항암제 반응률을 높여줍니다.</div></li>
                <li><div class="icon_check">공통 증상인 황달, 복수를 관리합니다.</div></li>
            </ul>
            <ul class="st_list3 mt10">
                <li><div class="icon_check">간 독성을 낮춰 간 기능을 개선시킵니다 .</div></li>
                <li><div class="icon_check">암성 통증을 줄이고 관리합니다.</div></li>
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
        <h4 class="purple">치료<span class="f_bold f_roboto">Point</span></h4>
        <div class="txt_box">
            간암, 담도암, 췌장암은 공통적으로 황달, 복수 등의 증상을 겪게 되는데 이러한 증상을 완화시켜야 암 치료도 이어나갈 수 있고 항암 효과도 높일 수 있습니다.
            특히 간 기능이 유지되고 개선될 수 있도록 항염, 항산화, 항암 작용을 돕는 것이 치료의 핵심이라고 할 수 있습니다.
        </div>
        <h4 class="purple">치료<span class="f_bold f_roboto">프로그램</span></h4>
        <div class="txt_box2 mt20 program_list3 program_purple">
            <ul class="program_item">
                <li class="img100"><a href="/heal/intensive_care"><img src="/public/front/images/care/img_liver_list01.jpg" alt="집중 간 해독프로그램 " /></a></li>
                <li class="txt_box2">면역세포 활성 치료를 통해 간의 항염, 항암, 항산화 효과를 높이는 치료법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/immunity"><img src="/public/front/images/care/img_liver_list02.jpg" alt="비타민주사 미슬토 주사헤리 주사" /></a></li>
                <li class="txt_box2">소람한방병원의 면역 주사 요법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_liver_list03.jpg" alt="스피암HC" /></a></li>
                <li class="txt_box2">복통, 복수, 피로감을 개선하고  항암 반응률을 높여주는 치료제</li>
            </ul>
        </div>
        <div class="txt_box2 mt40 program_list3 program_purple">
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/care/img_liver_list04.jpg" alt="소람전탕액IJO50" /></li>
                <li class="txt_box2">간 기능을 개선하고 복수, 황달, 부종 등을 다스리는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/equipment"><img src="/public/front/images/care/img_liver_list05.jpg" alt="페인스크램블러" /></a></li>
                <li class="txt_box2">암성 통증을 저주파 전기 자극을 통해 경감시켜주는 치료법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/care/img_liver_list06.jpg" alt="극초단파" /></li>
                <li class="txt_box2">장기 깊숙이까지 열을 전달해 통증 진정 효과가 있는 치료제</li>
            </ul>
        </div>
        <p class="txt_notice mt40">본 치료 프로그램은 환자의 증상, 상태, 항암치료 프로그램에 따라 달라질 수 있으며 의료진과 진료상담
            후 1:1맞춤 처방됩니다. </p>

    </div>
</section>
<!--//right_wrap -->