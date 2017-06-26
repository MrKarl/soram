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
                <li><a href="/medical/facility?type=2">치료실</a></li>
                <li><a href="/medical/facility?type=3">환자편의시설</a></li>
                <li class="on"><a href="/medical/facility?type=4">약제실·약국</a></li>
            </ul>
        </div>
        <div class="txt_box2 mt40">소람 환약, 전탕액, 증류한약 등 소람한방병원의 모든 한약은 ㈜소람바이오의학연구소에서 연구
            개발하여 약제실에서 직접  제조합니다. 또한 한방 암 치료제 안전성과 치료 효과에 대한 과학적이고
            체계적인 연구를 이어가고 있습니다. </div>
        <!--입원실-->
        <div class="tab_cont tab1_cont ">
            <div class="slide_wrap mt40">
                <ul class="tab1_cont_gallay">
                    <li><img src="/public/front/images/intro/img_part4_gallary_01.jpg" alr="" /></li>
                </ul>
                <div id="bx-pager1" class="thumb_list">
                    <a data-slide-index="0" href=""><img src="/public/front/images/intro/img_part4_gallary_01.jpg" /></a>
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