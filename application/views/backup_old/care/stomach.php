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
            <a href="#"><span class="home"></span></a><a href="#">소람암치료</a><a href="#">위암</a>
        </div>
        <h3>위암<span>gastric adenocarcinoma</span></h3>
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
        <h4 class="blue">위암의<span class="f_bold">특징</span> </h4>
        <div class="txt_box">
            위암은 위에 발생하는 악성종양으로, 우리나라는 위암 발병률이 가장 높은 국가입니다.
            조기 발견 시 내시경 절제술로 치료가 가능하기 때문에 생존율이 매우  높지만 진행성의 위암의 경우 원격 전이나 수술 후 재발이 문제가 됩니다.
            특히 원격전이가 있는 위암의 경우 수술이 불가합니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/care/img_stomach_01.jpg" alt="위암특징" />
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
        <h4 class="blue">양한방 병행치료 <span class="f_bold f_roboto">Why?</span></h4>
        <div class="line_box line_blue">
            <ul class="st_list3">
                <li><div class="icon_check">수술 전 체력을 보강할 수 있습니다.</div></li>
                <li><div class="icon_check">위절제술 후 부작용 및 증상을 관리합니다.</div></li>
            </ul>
            <ul class="st_list3 mt10">
                <li><div class="icon_check">암의 성장과 전이를 방지합니다.</div></li>
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
        <h4 class="blue">치료<span class="f_bold f_roboto">Point</span></h4>
        <div class="txt_box">
            위암의 항암 치료는 장기적인 소모전입니다. 위의 소화 기능이 살아나서 영양공급이 되어야만 면역력도 유지되고 항암 치료 효과를 높일 수 있습니다.
            위암 치료는 위 본연의 소화 기능을 높이고 잘 먹게 하는 것에 중점을 두고 있습니다.
        </div>
        <h4 class="blue">치료<span class="f_bold f_roboto">프로그램</span></h4>
        <div class="txt_box2 mt20 program_list3 program_blue">
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_stomach_list01.jpg" alt="증류탕약" /></a></li>
                <li class="txt_box2">먹기 힘든 위암 환자를 위해 약재를 액화시켜 복용할 수 있는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/hanyack"><img src="/public/front/images/care/img_stomach_list02.jpg" alt="스리암GC" /></a></li>
                <li class="txt_box2">오심, 구토, 복통을 개선하고 종양세포 성장을 억제하는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/heat"><img src="/public/front/images/care/img_stomach_list03.jpg" alt="온열치료" /></a></li>
                <li class="txt_box2">심부 체온을 높여 면역력을 높이고 혈액순환을 도와주는 치료법</li>
            </ul>
        </div>
        <div class="txt_box2 mt40 program_list3 program_blue">
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/care/img_stomach_list04.jpg" alt="해암단" /></li>
                <li class="txt_box2">독성과 어혈을 제거하고 암 환자의 몸상태를 개선시키는 치료약</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/care/img_stomach_list05.jpg" alt="항암단" /></li>
                <li class="txt_box2">담읍 및 어혈을 제거하고 종양 신생혈관 생성을 억제하는 치료제</li>
            </ul>
            <ul class="program_item">
                <li class="img100"><a href="/heal/equipment"><img src="/public/front/images/care/img_stomach_list06.jpg" alt="바이오포톤" /></a></li>
                <li class="txt_box2">태양광선에서 나오는 원적외선을 이용해 면역력을 증강시키는 치료법</li>
            </ul>
        </div>
        <p class="txt_notice mt40">본 치료 프로그램은 환자의 증상, 상태, 항암치료 프로그램에 따라 달라질 수 있으며 의료진과 진료상담
            후 1:1맞춤 처방됩니다. </p>

    </div>
</section>
<!--//right_wrap -->