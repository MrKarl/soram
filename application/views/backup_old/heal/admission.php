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
<section class="right_wrap st_heal">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">입원치료</a><a href="#">입원치료</a>
        </div>
        <h3>입원치료</h3>
        <h4>입원치료</h4>
        <div class="txt_box">소람한방병원은 4개 층 100병상을 두고 1인실, 4인실 입원실이 준비되어 있습니다. 입원하신 환자 분을 위한 1:1 맞춤 치료 프로그램
            및 식단을 통해 세심하게 케어해드립니다.
        </div>


        <h4>1:1 맞춤 치료</h4>
        <div class="txt_box2 st_list_num2 ">
            <table>
                <colgroup>
                    <col width="26%" style="margin-right:2%">
                    <col width="*">
                </colgroup>
                <tbody>
                <tr>
                    <td class="img"><img src="/public/front/images/heal/img_Custom_circle01.jpg" alt="아침의료진회진" /></td>
                    <td class="st_line">매일 오전 의료진이 입원실을 직접 회진하고
                        이를 통해 환자의 불편 사항을 개선하고 환자 컨디션에
                        따라 맞춤 처방을 내립니다.</td>
                </tr>
                <tr>
                    <td class="img"><img src="/public/front/images/heal/img_Custom_circle02.jpg" alt="1일 1회집중치료" /></td>
                    <td class="st_line">증상 개선을 위해 1일 1회 집중적으로 치료를 시행하고
                        영양 공급 또는 암 치료를 위한 수액 처치를 합니다.</td>
                </tr>
                <tr>
                    <td class="img"><img src="/public/front/images/heal/img_Custom_circle03.jpg" alt="특화치료" /></td>
                    <td class="st_line">매주 시행되는 웃음치료 등 특화치료를 받으실 수 있으며 병원 내 족욕실, 사랑방, 도서관, 스파 등
                        편의시설도 자유롭게 이용하실 수 있습니다.</td>
                </tr>
                <tr>
                    <td class="img"><img src="/public/front/images/heal/img_Custom_circle04.jpg" alt="무료고압산소치료" /></td>
                    <td class="st_line">전문의의 처방에 따라 암 성장 억제 및 노폐물 제거 효과가 있는 고압산소치료를 제공 받으 실 수 있습니다.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--//right_wrap -->
