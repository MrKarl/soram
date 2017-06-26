<script type="text/javascript">
    $(document).ready(function($){

        base_setting2()
        setupScrollHandler();

        //동영상 위치
        movie_position()
        //quick 메뉴
        $(window).scroll(function(){
            base_setting2()
        });
    });

    $(window).resize(function(){
        base_setting2()
        movie_position()
    });


    currentScreen = 0;
    scrollReady = true;
    currentScreen = 0;
    screens = 5;
    // 마우스휠 스냅
    function setupScrollHandler() {
        $("body").bind("mousewheel", function (delta, aS, aQ, deltaY) {
            delta.preventDefault();
            if (deltaY > 0) {
                scrollPrev();
            } else {
                if (deltaY < 0) {
                    scrollNext();
                }
            }
            return false;
        });
    }

    //마우스 이동페이지
    function performScroll() {
        scrollReady = false;
        var newYPos = $('#area'+position).offset().top
        $("html, body").animate(
            {scrollTop: newYPos },
            1000, function() { scrollReady = true;}
        );

    }

    function scrollNext() {
        if( position < screens && scrollReady == true ) {
            position++;
            performScroll();
            scrollReady = false;
        }
    }
    function scrollPrev() {
        if( position >= 1 && scrollReady == true ) {
            position--;
            performScroll();
        }
    }
    //로딩 기본 포지션 위치 체크
    function base_setting2(){
        win_top = $(window).scrollTop()
        position = 0;
        //기본 세팅
        tt = $(document).height() - $(window).height()
        area0 = parseInt($("#area0").offset().top) ;
        area1 = parseInt($("#area1").offset().top) ;
        area2 = parseInt($("#area2").offset().top);
        area3 = parseInt($("#area3").offset().top);
        area4 = parseInt($("#area4").offset().top);
        area5 = parseInt($("#area5").offset().top);
        quick_menu()

    }

    function quick_menu() {
        if(win_top < area1 ){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:first-child').addClass('on');
            position = 0;
        }
        else if(win_top >= area1 && win_top < area2 ){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(1)').addClass('on');
            position = 1;
        }
        else if(win_top >= area2 && win_top < area3 ){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(2)').addClass('on');
            position = 2;
        }
        else if(win_top >= area3 && win_top < area4 ){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(3)').addClass('on');
            position = 3;
        }
        else if(win_top >= area4 && win_top < area5 && win_top < tt ){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(4)').addClass('on');
            position = 4;
        }
        else if( win_top == tt || $(window).scrollTop() >= area5){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(5)').addClass('on');
            position = 5;
        }
    }

    function movie_position(){
        if(!$('.sub').hasClass('st_mobile')){
            //case_box 715고정
            var case_h = $('.case_box').innerHeight();
            var case_cont_h = case_h - 120;
            var movie_h = $('.movie_wrap4').innerHeight()
            var margin_val = (case_h - movie_h)/2
            if( movie_h  < 715  ){
                //1024이하에선 동영상 마진60고정
                if( window_w > 1024){
                    $('.movie_wrap4').css('margin-top', margin_val)
                }else{
                    $('.movie_wrap4').css('margin-top',0)
                }
                $('.case_box').css('padding-top','50px')
                $('.case_box').css('padding-bottom','70px')
            }else{
                $('.movie_wrap4').css('margin-top',0)
                $('.case_box').css('padding-top',(case_h - movie_h ) /2)
                $('.case_box').css('padding-bottom',(case_h - movie_h) /2)

            }
        }else{
            $('.movie_wrap4').css('margin-top',50)
        }

    }


</script>
<script>
    <?if($this->session->userdata("MBR_ID") == ""):?>
    loginPopup();
    <?endif?>
</script>
<!--quick_wrap -->
<div class="quick_wrap">
    <ul>
        <li><a href="#area1" class="scroll">area1</a></li>
        <li><a href="#area2" class="scroll">area2</a></li>
        <li><a href="#area3" class="scroll">area3</a></li>
        <li><a href="#area4" class="scroll">area4</a></li>
        <li><a href="#area5" class="scroll">area5</a></li>
    </ul>
</div>
<!--//quick_wrap -->
<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap" id="area0">
    <div class="right_wrap_inner2" >
        <div class="case_intro">
            <!--location -->
            <div class="location">
                <a href="/"><span class="home"></span></a><a href="#">치료사례</a><a href="#">희망 메세지</a>
            </div>
            <h3>호전사례</h3>
            <div class="case_box_wrap" id="area1">
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
                <div class="case_box case_lung" >
                    <h4>폐암</h4>
                    <p class="bar"><span></span></p>
<!--                    <div class="color_txt">“6개월 남았다고 했지만<br>벌써 2년이 지났습니다”</div>-->
                    <div class="case_img"><img src="/public/front/images/case/img_lung01.png" alt="박승근 치료장면" />
                        <div class="info_case"><span>박승근(남,43세)</span><span>폐암4기</span></div>
                    </div>
                    <div class="btn_line mt80"><a href="/reference/better_change" class="bt_st2">폐암호전사례더보기</a></div>
                </div>
            </div>
            <div class="case_box_wrap" id="area2">
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
                <div class="case_box case_breast" >
                    <h4>유방암</h4>
                    <p class="bar"><span></span></p>
<!--                    <div class="color_txt">“저보고 암 환자 같지 않다고<br>다들 그래요”</div>-->
                    <div class="case_img"><img src="/public/front/images/case/img_breast.png" alt="치료장면" />
                        <div class="info_case"><span>김연 (여, 44세)</span><span>유방암 3기</span></div>
                    </div>
                    <div class="btn_line mt80"><a href="/reference/better_change" class="bt_st2">유방암호전사례더보기</a></div>
                </div>
            </div>
            <div class="case_box_wrap" id="area3">
                <!--동영상3-->
                <div class="movie_wrap4 <?=( $media_result[2]['v_type'] == "1" ) ? "st_video" : ""?>">
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
                <div class="case_box case_colorectal" >
                    <h4>대장암</h4>
                    <p class="bar"><span></span></p>
<!--                    <div class="color_txt">“예전엔 안그랬는데<br>지금은 밥이 꿀맛이야”</div>-->
                    <div class="case_img"><img src="/public/front/images/case/img_colorectal.png" alt=" 치료장면" />
                        <div class="info_case"><span>송덕자 (여, 74세)</span><span>대장암 3기</span></div>
                    </div>
                    <div class="btn_line mt80"><a href="/reference/better_change" class="bt_st2">대장암 호전 사례더보기</a></div>
                </div>
            </div>
            <div class="case_box_wrap" id="area4">
                <!--동영상4-->
                <div class="movie_wrap4 <?=( $media_result[3]['v_type'] == "1" ) ? "st_video" : ""?>">
                    <?if($media_result[3]['v_type'] == "1"):?>
                        <div class="video_wrap2">
                            <video  width="100%" height="100%" id="video4" >
                                <source type="video/mp4" src="<?=$media_result[3]['media_src']?>" />

                                <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                                    <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                                    <!--<img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />-->
                                </object>

                            </video>
                            <script> // using jQuery
                                $('#video4').mediaelementplayer(/* Options */);
                            </script>

                        </div>
                    <?elseif($media_result[3]['v_type'] == "2"):?>
                        <?$youtube_data = explode("/",$media_result[3]['media_src']);?>
                        <?$youtube_id   = $youtube_data[count($youtube_data)-1];?>
                        <div class="movie_play" >
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$youtube_id?>?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                        </div>
                    <?elseif($media_result[3]['v_type'] == "3"):?>
                        <div class="img_hope_center" >
                            <img src="<?=$media_result[3]['media_src']?>" />
                        </div>
                    <?endif?>
                </div>
                <!--//동영상4-->
                <div class="case_box case_liver" >
                    <h4>간,담,췌장암</h4>
                    <p class="bar"><span></span></p>
<!--                    <div class="color_txt">“3개월 밖에 못산다고 했는데<br>다시 살게 해줘 고맙죠”</div>-->
                    <div class="case_img"><img src="/public/front/images/case/img_liver.png" alt="유상열 치료장면" />
                        <div class="info_case"><span>유상열 (남, 60세)</span><span>담도암 말기</span></div>
                    </div>
                    <div class="btn_line mt80"><a href="/reference/better_change" class="bt_st2">간,담,췌장암 호전 사례더보기</a></div>
                </div>
            </div>
            <div class="case_box_wrap" id="area5">
                <!--동영상5-->
                <div class="movie_wrap4 <?=( $media_result[4]['v_type'] == "1" ) ? "st_video" : ""?>">
                    <?if($media_result[4]['v_type'] == "1"):?>
                        <div class="video_wrap2">
                            <video  width="100%" height="100%" id="video5" >
                                <source type="video/mp4" src="<?=$media_result[4]['media_src']?>" />

                                <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                                    <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                                </object>

                            </video>
                            <script> // using jQuery
                                $('#video5').mediaelementplayer(/* Options */);
                            </script>

                        </div>
                    <?elseif($media_result[4]['v_type'] == "2"):?>
                        <?$youtube_data = explode("/",$media_result[4]['media_src']);?>
                        <?$youtube_id   = $youtube_data[count($youtube_data)-1];?>
                        <div class="movie_play" >
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$youtube_id?>?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                        </div>
                    <?elseif($media_result[4]['v_type'] == "3"):?>
                        <div class="img_hope_center" >
                            <img src="<?=$media_result[4]['media_src']?>" />
                        </div>
                    <?endif?>
                </div>
                <!--//동영상5-->
                <div class="case_box case_brain" >
                    <h4>뇌종양(기타암)</h4>
                    <p class="bar"><span></span></p>
<!--                    <div class="color_txt">“그동안 놓았던 공부를<br>다시 하고 싶어졌어요”</div>-->
                    <div class="case_img"><img src="/public/front/images/case/img_brain.png" alt="유상열 치료장면" />
                        <div class="info_case"><span>이병헌 (남, 20세)</span><span>수모세포종 2차례 재발</span></div>
                    </div>
                    <div class="btn_line mt80"><a href="/reference/better_change" class="bt_st2">기타암 호전 사례더보기</a></div>
                </div>
            </div>


        </div>

    </div>
</section>
<!--//right_wrap -->
