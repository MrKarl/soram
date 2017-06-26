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
            <a href="#"><span class="home"></span></a><a href="#">소람암치료</a><a href="#">대장암</a>
        </div>
        <h3>대장암<span>colorectal cancer</span></h3>
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
        <h4 class="green">대장암의 <span class="f_bold">특징</span> </h4>
        <div class="txt_box">
            대장암은 서구화된 식습관 변화 등으로 최근 꾸준히 증가하는 추세에 있으며 특히 가족력, 유전에 따라 발병률이 높아지는 암입니다.
            대개 수술과 항암화학요법 혹은 방사선치료를 병행하지만 절제술을 시행해도 20~50% 정도는 재발을 합니다.
            결장암은 간 전이 및 복강 내 재발이, 직장암은 국소 재발 및 폐 전이가 많습니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/care/img_colorectal_img01.jpg" alt="대장암의특징" />
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
        <h4 class="green">양한방 병행치료 <span class="f_bold f_roboto">Why?</span></h4>
        <div class="line_box line_green">
            <ul class="st_list3">
                <li><div class="icon_check">항암 치료 부작용을 줄여줍니다.</div></li>
                <li><div class="icon_check">대장 절제술 후유증 및 부작용을 관리합니다.</div></li>
            </ul>
            <ul class="st_list3 mt10">
                <li><div class="icon_check">대장 절제술 후 재발을 방지합니다.</div></li>
                <li><div class="icon_check">방사선 치료로 인한 통증을 관리합니다.</div></li>
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
        <h4 class="green">치료<span class="f_bold f_roboto">Point</span></h4>
        <div class="txt_box">
            대장암은 근치적 절제술 후 장기적인 관리를 요하는 암입니다. 특히 전신마취에 따른 폐합병증, 출혈, 상처 등 수술 후유증과 합병증
            등을 관리하고 백혈구나 혈소판 감소증, 탈모, 오심, 구토, 피로, 설사, 통증 등 항암 치료 및 방사선 치료 부작용을 관리하여 재발을
            방지하는 것이 치료의 핵심입니다.
        </div>
        <h4 class="green">치료<span class="f_bold f_roboto">프로그램</span></h4>
        <div class="txt_box2 mt20 program_list3 program_green">
            <ul class="program_item">
                <li class="img100"><a href="/heal/equipment"><img src="/public/front/images/care/img_colorectal_list01.jpg" alt="청장요법" /></a></li>
                <li class="txt_box2">한약성분 추출액을 항문 내주입하여 직장점막을 통해 체내에 흡수시키는 치료법</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_colorectal_list02.jpg" alt="스피암GC" /></a></li>
                <li class="txt_box2">복통 및 대장암 증상을 개선하고 종양 세포 억제효과가 있는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/acupuncture"><img src="/public/front/images/care/img_colorectal_list03.jpg" alt="소람약침" /></a></li>
                <li class="txt_box2">암종에 따라 맞춤 약물을 처방, 침을  통해 효과를 빠르게 전달하는 치료법</li>
            </ul>
        </div>
        <div class="txt_box2 mt40 program_list3 program_green">
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_colorectal_list04.jpg" alt="소람단S" /></a></li>
                <li class="txt_box2">면역세포를 활성화시키고 종양 억제 및 재발 방지 효과가 있는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/care/img_colorectal_list05.jpg" alt="건칠단" /></li>
                <li class="txt_box2">마른 옻 추출물을 활용, 항암 효과 및 면역력을 증진시키는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/high_frequency"><img src="/public/front/images/care/img_colorectal_list06.jpg" alt="고주파암치료" /></a></li>
                <li class="txt_box2">고주파를 통해 종양을 파괴하고 체온을 높여 면역력을 높여주는 치료법</li>
            </ul>
        </div>
        <p class="txt_notice mt40">본 치료 프로그램은 환자의 증상, 상태, 항암치료 프로그램에 따라 달라질 수 있으며 의료진과 진료상담
            후 1:1맞춤 처방됩니다. </p>

    </div>
</section>
<!--//right_wrap -->