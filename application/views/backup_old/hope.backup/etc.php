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
        <div class="st_hope st_hope_brain">
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

                <!--location -->
                <div class="location">
                    <a href="#"><span class="home"></span></a><a href="#">희망메시지</a><a href="#">기타암</a>
                </div>

                <!--//동영상1-->
                <h3>뇌종양(수모세포종)<span class="bar">이병헌</span></h3>
                <h5><span class="f_roboto">#</span> 스무 살, 꿈이 사라지다</h5>
                <div class="bg_grayBox"><p>“대학 갈 꿈에 부풀어 있었는데 또 재발이라니...”</p> </div>
                <p class="txt_box2">남들은 한창 부모 속을 썩인다는 중학교 2학년, 병헌 씨에게는 뇌종양(수모세포종)이라는 무서운 병이 찾아왔습니다.  </p>
                <p class="txt_color f_20">6년이라는 긴 투병생활, 2번의 수술...하지만 지긋지긋한 암은 또...</p>
                <div class="mt40"><h4>뇌종양 정보</h4></div>
                <div class="txt_box2">뇌종양은 수술이 비교적 잘 되었다고 하더라도 재발이 잘 되는 암입니다.
                    특히 재발하면 악성으로 진행되는 경우가 많기 때문에 재발 방지 치료가 필요합니다.</div>
                <div class="mt20 img100"><img src="/public/front/images/hope/img_brain_01.png" alt="대장암 정모" /></div>
                <p class="btn_line mt40"><a href="/care/brain" class="bt_st2">뇌종양 치료 보기</a></p>
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
                <h5 ><span class="f_roboto">#</span>스무 살, 새로운 꿈이 시작되다 </h5>
                <div class="bg_whiteBox"><p>“좋아지고 있다!”</p></div>
                <div class="txt_box2">
                    긴 투병 기간 동안 잘 먹지 못해 말라가던 병헌 씨는 <br>
                    지금 세 끼를 꼬박꼬박 챙겨먹을 정도로 입맛이 돌아왔고
                    <p class="txt_color f_20 mt20">매일 운동을 할 정도로 체력이 돌아왔습니다. </p>
                </div>
                <div class="mt40 img100"><img src="/public/front/images/hope/img_brain_02.png" alt="" /></div>
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
                <div class="bg_grayBox"><p>“양한방 병행치료의 효과”</p></div>
                <div class="txt_box2">소람한방병원을 오지 않았더라면 지금 <br>어떻게 되었을 지 모르겠다고 말하는 병헌 씨.
                    <p class="txt_color f_20">어떤 치료를 통해 뇌종양이 호전되어가고 있을까요? </p>
                </div>
                <div class="mt40 img100 "><img src="/public/front/images/hope/img_brain_03.png" alt="" /></div>
                <p class="btn_line mt40"><a href="/reference/better_change" class="bt_st2">호전사례바로가기</a></p>
            </article>
        </div>

    </div>
</div>
<!--//right_wrap -->