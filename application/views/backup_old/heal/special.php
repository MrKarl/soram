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
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">한방치료</a><a href="#">특수치료</a>
        </div>
        <h3>특수치료</h3>
        <div class="tit_img"><img src="/public/front/images/heal/tit_special_img.jpg" alt="특수치료" /></div>
        <div class="txt_box2">소람한방병원의 증류 추출 기술을 이용하여 만든 특수 약물을 신체에 주입하여 소화기 계통 질환 및 자궁 질환을 치료하는 방법입니다.</div>
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
        <h4>청장요법</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_special_01.jpg" alt="청장요법 약이미지" />
        </div>
        <div class="txt_box2">거슨 요법(Gerson therapy)을 응용하여 항문 내에 한약성분 추출액을 주입하는 방법입니다. 주입된 청장탕은 직장내 점막을 통해 흡수되고, 모세혈관을 지나 간문맥을 통해 간으로 빠르게 전달되어 대사됩니다. 원발성 간암이나 전이성 간종양에 사용 할 수 있으며, 간독성은 없는 약재 입니다.
        </div>
        <h5>청장요법 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>대장암 등 소화기 계통 암에 사용됩니다. </li>
                <li>경구로 약을 복용할 수 없는 경우 효과적입니다. </li>
                <li>간 질환이 있는 경우, 복수, 황달 등 간 증상을 완화시킵니다. </li>
                <li>복부의 심한 통증을 가라앉혀 줍니다. </li>
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
        <h4>질내주입법</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_special_02.jpg" alt="질내주입요법 약이미지" />
        </div>
        <div class="txt_box2">황기, 봉출 등의 재료를 소람의 증류추출 기술을 이용하여 만든 고농도 약물을 질내에 주입하는 방법입니다.
            이형성 세포의 단백질 세포를 차단하는 약재를 써서 질내 건강한 세포가 자랄 수 있도록 유도합니다.
        </div>
        <h5>질내주입법 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>증류추출을 통해 질내 투약의 흡수율 및 안정성을 높였습니다. </li>
                <li>자궁경부암, 자궁경부이형성증에 사용됩니다. </li>
                <li>자궁경부 및 질내 면역력을 높여줍니다.</li>
            </ul>
        </div>
    </div>
</section>
<!--//right_wrap -->