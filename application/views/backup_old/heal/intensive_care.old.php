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
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">집중치료</a>
        </div>
        <h3>집중치료</h3>
        <h4>집중<span class="f_bold">치료</span> </h4>
        <div class="txt_box">
            소람한방병원은 4개 층 100병상을 두고 1인실, 4인실 입원실이 준비되어 있습니다. 입원하신 환자 분을 위한 1:1 맞춤 치료 프로그램  및
            식단을 통해 세심하게 케어해드립니다.
        </div>
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
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/W3_IqYmoZTw/?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                </div>
            <?elseif($media_result[0]['v_type'] == "3"):?>
                <div class="img_hope_center" >
                    <img src="<?=$media_result[0]['media_src']?>" />
                </div>
            <?endif?>
        </div>
        <!--//동영상1-->

        <h4>항암부작용 집중 <span class="f_bold">치료</span></h4>
        <div class="txt_box">방사선, 항암 치료로 인해 생기는 각종 부작용을 관리하고 완화시키는 치료를 집중 시행합니다. </div>
        <div class="txt_box2 mt40">
            <ul class="st_img_list">
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_intensive_list01.jpg" alt="오심,구토,식욕부진" /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_intensive_list02.jpg" alt="손발 저림, 말초 신경계 이상 관리" /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_intensive_list03.jpg" alt="면역력, 기력 저하로 인한 각종 부작용 관리" /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_intensive_list04.jpg" alt="피부 발진,여드름 관리" /></div>
                </li>
                <li>
                    <div class="img100"><img src="/public/front/images/heal/img_intensive_list05.jpg" alt="설사, 소화기계이상 관리" /></div>
                </li>
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
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/E3Awi4LpkCE/?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                </div>
            <?elseif($media_result[1]['v_type'] == "3"):?>
                <div class="img_hope_center" >
                    <img src="<?=$media_result[1]['media_src']?>" />
                </div>
            <?endif?>
        </div>
        <!--//동영상2-->
        <h4>말기암 집중 <span class="f_bold">치료</span></h4>
        <div class="txt_box">암 전이가 상당히 진행되고 병원에서 의사로부터 더 이상의 치료가 불가능하다고 한 경우,
            암이 더 이상 진행되지 못하도록 진행 속도를 늦추고 통증을 관리함으로써 암 환자의 삶의 질을 높이는 집중 치료를 진행하고 있습니다.
        </div>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_specialized_01.jpg" alt="통증관리 암성장억제 증상개선" />
        </div>
        <h4>집중 간 해독<span class="f_bold">프로그램</span></h4>
        <div class="txt_box">간암, 담도암, 췌장암의 증상 개선 및 간 기능 개선이 필요하다고 판단되는 경우 집중 간
            해독 프로그램을 통해 간 내 항염, 항암, 항산화 효과를 볼 수 있습니다.
        </div>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_specialized_02.jpg" alt="항암작용 항염작용 항산화작용" />
        </div>
        <div class="txt_box2 mt40 program_list2">
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/heal/img_specialized_04.jpg" alt="치료이미지" /></li>
                <li class="txt"><p class="title">비타민</p>
                    <p>고용량의 비타민을 정맥주사하여 면역력을 증가시키고 암세포의 자연사멸을 유도합니다.</p>
                </li>
            </ul>
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/heal/img_specialized_05.jpg" alt="치료이미지" /></li>
                <li class="txt"><p class="title">미슬토 요법</p>
                    <p>함암효과가 입증된 미슬토 주사액을 투여해 암 재발과 전이를 방지하고 복수를 억제합니다.</p>
                </li>
            </ul>
            <ul class="program_item">
                <li class="img100"><img src="/public/front/images/heal/img_specialized_06.jpg" alt="치료이미지" /></li>
                <li class="txt"><p class="title">헤리주사 요법</p>
                    <p>간암치료에 효과적인 싸이모산알1을 주사해 면역력을 높이고 감염세포 및 종양세포를 감소시킵니다.</p>
                </li>
            </ul>
        </div>

    </div>
</section>
<!--//right_wrap -->