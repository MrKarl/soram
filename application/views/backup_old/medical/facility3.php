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
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">병원소개</a>  <a href="#">시설안내</a>
        </div>
        <h3>시설안내</h3>
        <div class="tab_menu_wrap ">
            <ul>
                <li><a href="/medical/facility?type=1" >입원실</a></li>
                <li ><a href="/medical/facility?type=2">치료실</a></li>
                <li  class="on"><a href="/medical/facility?type=3">환자편의시설</a></li>
                <li><a href="/medical/facility?type=4">약제실·약국</a></li>
            </ul>
        </div>
        <div class="txt_box2 mt40">입원 기간 동안 환자 분들과 보호자 분들께서 보다 편안하고 즐겁게 생활하실 수 있도록 병원 내에
            휴게실, 도서관, 온열힐링룸, 스파 등 각종 편의 공간을 마련해놓았습니다.
        </div>
        <!--입원실-->
        <div class="tab_cont tab1_cont ">
            <div class="slide_wrap mt40">
                <ul class="tab1_cont_gallay">
                    <li><img src="/public/front/images/intro/img_part3_gallary_01.jpg" alr="" /></li>
                    <li><img src="/public/front/images/intro/img_part3_gallary_02.jpg" alr="" /></li>
<!--                    <li><img src="/public/front/images/intro/img_part3_gallary_03.jpg" alr="" /></li>-->
                    <li><img src="/public/front/images/intro/img_part3_gallary_04.jpg" alr="" /></li>
                    <li><img src="/public/front/images/intro/img_part3_gallary_05.jpg" alr="" /></li>
                    <li><img src="/public/front/images/intro/img_part3_gallary_06.jpg" alr="" /></li>
                    <li><img src="/public/front/images/intro/img_part3_gallary_07.jpg" alr="" /></li>
                </ul>
                <div id="bx-pager1" class="thumb_list">
                    <a data-slide-index="0" href=""><img src="/public/front/images/intro/img_part3_gallary_01.jpg" /></a>
                    <a data-slide-index="1" href=""><img src="/public/front/images/intro/img_part3_gallary_02.jpg" /></a>
<!--                    <a data-slide-index="2" href=""><img src="/public/front/images/intro/img_part3_gallary_03.jpg" /></a>-->
                    <a data-slide-index="2" href=""><img src="/public/front/images/intro/img_part3_gallary_04.jpg" /></a>
                    <a data-slide-index="3" href=""><img src="/public/front/images/intro/img_part3_gallary_05.jpg" /></a>
                    <a data-slide-index="4" href=""><img src="/public/front/images/intro/img_part3_gallary_06.jpg" /></a>
                    <a data-slide-index="5" href=""><img src="/public/front/images/intro/img_part3_gallary_07.jpg" /></a>

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