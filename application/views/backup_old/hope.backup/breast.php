<script type="text/javascript">
    $( window ).load(function($){
        //기본 세팅
        base_setting3();
        setupScrollHandler();

    });
    $(window).scroll(function(){
        win_top = $(window).scrollTop();
        tt = $(document).height() - $(window).height();
        position = 1;

        if(win_top < part2 ){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:first-child').addClass('on');
            position = 1;
        }
        else if(win_top == tt || win_top >= part3){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(3)').addClass('on');
            position = 3;
        }
        else {
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(2)').addClass('on');
            position = 2;
        }
    });

    $(window).resize(function(){
        base_setting3();
    });
    currentScreen = 0;
    scrollReady = true;
    currentScreen = 0;
    screens = 3;

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
        var newYPos = $('#part'+position).offset().top;
//            console.log(position)
//            console.log(newYPos)
        $("html, body").animate(
            {scrollTop: newYPos },
            1000, function() { scrollReady = true;}
        );
    }

    function scrollNext() {
        if( position < screens && scrollReady == true ) {
            position++;
            performScroll();
        }
    }
    function scrollPrev() {
        if( position > 1 && scrollReady == true ) {
            position--;
            performScroll();
        }else if(position == 1 && win_top > 0 && scrollReady == true){
            performScroll();
        }
    }

    function base_setting3(){
        part1 = $("#part1").offset().top-1;
        part2 = $("#part2").offset().top-1;
        part3 = $("#part3").offset().top-1;
//            console.log("part1 :"+part1 )
//            console.log("part2 :"+part2 )
//            console.log("part3 :"+part3 )
//            console.log("wintop :"+win_top )
        win_top = $(window).scrollTop();
        tt = $(document).height() - $(window).height();

        if(win_top < part2 ){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:first-child').addClass('on');
            position = 1;
        }
        else if(win_top == tt || win_top >= part3){
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(3)').addClass('on');
            position = 3;
        }
        else {
            $('.quick_wrap li').removeClass('on');
            $('.quick_wrap li:nth-child(2)').addClass('on');
            position = 2;
        }
    }
</script>
<!--quick_wrap -->
<div class="quick_wrap">
    <ul>
        <li><a href="#part1" class="scroll">part1</a>
            <p class="part_title"><span>작별을 고하다.</span></p>
        </li>
        <li><a href="#part2" class="scroll">part2</a>
            <p class="part_title"><span>소람을 만나다.</span></p>
        </li>
        <li><a href="#part3" class="scroll">part3</a>
            <p class="part_title"><span>희망을 되찾다.</span></p>
        </li>
    </ul>
</div>
<!--//quick_wrap -->
<!--center_wrap -->
<div class="center_wrap center_bg">
    <div class="center_wrap_inner2">

    </div>
</div>
<!--//center_wrap -->
<!--right_wrap -->
<div class="right_wrap">
    <div class="right_wrap_inner2">
        <div class="st_hope st_hope_breast">

            <article class="part_box" id="part1">
                <!--동영상1-->
                <div class="movie_wrap3 <?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>">
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
                <!--location -->
                <div class="location">
                    <a href="#"><span class="home"></span></a><a href="#">희망메시지</a><a href="#">유방암</a>
                </div>
                <h3>유방암 <span class="bar">김연</span></h3>
                <h5><span class="f_roboto">#</span> 가슴이 먹먹해지다 </h5>
                <div class="bg_grayBox"><p>“예전으로 돌아갈 수 있을까”</p> </div>
                <p class="txt_box2">가족들과 떨어져 홀로 한국으로 들어온 조선족 김연 씨는 병원에서
                    유방암 3기라는 진단을 받았습니다. 정상적인 생활이 어려울 정도로 힘든 항암의 시간들... </p>
                <p class="txt_color f_20">김연 씨는 예전처럼 살아갈 수 있을까요?</p>
                <div class="mt40"><h4>유방암 정보</h4></div>
                <div class="txt_box2">유방암은 진행이 느리고 조기 발견 시 다른 암에 비해 치료도 잘 되는 편이지만 전이·재발이
                    잘 되기 때문에 이에 대한 관리를 꾸준히 해주어야 합니다.  </div>
                <div class="mt20 img100"><img src="/public/front/images/hope/img_breast_01.png" alt="유방암정보" /></div>
                <p class="btn_line mt40"><a href="/care/breast" class="bt_st2">유방암치료보기</a></p>

            </article>
            <article class="part_box" id="part2">
                <!--동영상2-->
                <div class="movie_wrap3 <?=( $media_result[1]['v_type'] == "1" ) ? "st_video" : ""?>">
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
                <h5 ><span class="f_roboto">#</span> 가슴이 두근거리다</h5>
                <div class="bg_whiteBox"><p>“이제는 혼자가 아니에요”</p></div>
                <div class="txt_box2">
                    이른 아침부터 곱게 화장을 하는 김연 씨, <br>
                    암 환자라는 사실도, 혼자라는 사실도 잊고 들뜬 표정이 된 그녀. <br>
                    <p class="txt_color f_20 mt20">이제는 밥도 잘 먹고 눕는 것도 편해졌다고 하는데...</p>
                </div>
                <div class="mt40 img100"><img src="/public/front/images/hope/img_breast_02.png" alt="" /></div>
            </article>
            <article class="part_box" id="part3">
                <!--동영상3-->
                <div class="movie_wrap3 <?=( $media_result[2]['v_type'] == "1" ) ? "st_video" : ""?>">
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
                <h5><span class="f_roboto">#</span> 소람을 만나다</h5>
                <div class="bg_grayBox"><p>“여성의 몸과 맘까지 치료하는 병원”</p></div>
                <div class="txt_box2">
                    혼자 몸으로 항암 치료를 받는 상황에서 <br>
                    몸도 마음도 많이 피폐해진 김연 씨에게 소람의 의료진은 <br>
                    <p class="txt_color f_20">어떻게 다가가고 어떤 치료를 해주었을까요?</p>
                </div>
                <div class="mt20 img100"><img src="/public/front/images/hope/img_breast_03.png" alt="" /></div>
                <p class="btn_line mt40"><a href="/reference/better_change" class="bt_st2">호전사례바로가기</a></p>
            </article>
        </div>

    </div>
</div>
<!--//right_wrap -->