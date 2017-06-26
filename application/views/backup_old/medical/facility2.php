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
            <?endif?>
        </div>
        <?if($media_result[0]['v_type'] == "3"):?>
            <div class="img100 center_img" >
                <img src="<?=$media_result[0]['media_src']?>" />
            </div>
        <?endif?>
        <!--//동영상1-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap st_heal">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">병원소개</a>  <a href="#">시설안내</a>
        </div>
        <h3>시설안내</h3>
        <div class="tab_menu_wrap ">
            <ul>
                <li><a href="/medical/facility?type=1" >입원실</a></li>
                <li  class="on"><a href="/medical/facility?type=2">치료실</a></li>
                <li><a href="/medical/facility?type=3">환자편의시설</a></li>
                <li><a href="/medical/facility?type=4">약제실·약국</a></li>
            </ul>
        </div>
        <div class="txt_box2 mt40">소람한방병원에는 양한방 병행 면역 암치료를 편안하게 받으실 수 있도록 환자 전용 치료실을
            마련하고 전담 간호사가 집중 케어하고 있습니다.
        </div>
        <!--입원실-->
        <div class="tab_cont tab1_cont ">
            <div class="slide_wrap mt40">
                <ul class="tab1_cont_gallay">
                    <li><img src="/public/front/images/intro/img_part2_gallary_01.jpg" alr="" /></li>
                    <li><img src="/public/front/images/intro/img_part2_gallary_02.jpg" alr="" /></li>
                    <li><img src="/public/front/images/intro/img_part2_gallary_04.jpg" alr="" /></li>
                    <li><img src="/public/front/images/intro/img_part2_gallary_05.jpg" alr="" /></li>
                </ul>
                <div id="bx-pager1" class="thumb_list">
                    <a data-slide-index="0" href=""><img src="/public/front/images/intro/img_part2_gallary_01.jpg" /></a>
                    <a data-slide-index="1" href=""><img src="/public/front/images/intro/img_part2_gallary_02.jpg" /></a>
                    <a data-slide-index="2" href=""><img src="/public/front/images/intro/img_part2_gallary_04.jpg" /></a>
                    <a data-slide-index="3" href=""><img src="/public/front/images/intro/img_part2_gallary_05.jpg" /></a>
                </div>
            </div>
        </div>
        <!--//입원실-->

        <script type="text/javascript">

            $(document).ready(function(){
                tab1_cont_gallay = $('.tab1_cont_gallay').bxSlider({pagerCustom: '#bx-pager1'});

//                                    $('.tab_cont').addClass('hide');
//                                    $('.tab1_cont').removeClass('hide');

            })
        </script>
    </div>
</section>
<!--//right_wrap -->