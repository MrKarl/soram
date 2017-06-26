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
        <div class="st_hope st_hope_colorectal">
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
                    <a href="#"><span class="home"></span></a><a href="#">희망메시지</a><a href="#">대장암</a>
                </div>


                <!--//동영상1-->
                <h3>대장암 <span class="bar">송덕자</span></h3>
                <h5><span class="f_roboto">#</span> 황혼에 그늘이 드리우다</h5>
                <div class="bg_grayBox"><p>“곧 죽을 텐데 항암 받아서 뭐해”</p> </div>
                <p class="txt_box2">자식들을 다 키워 놓고 인생의 황혼기를 지나고 있는 송덕자 씨.
                    남편 간암 수발만 몇 년...그런데 이제는 내가 대장암이라니... </p>
                <p class="txt_color f_20">‘곧 죽을 텐데 이런 거 받아서 뭐하나’ 생각만 드는데...</p>
                <div class="mt40"><h4>대장암 정보</h4></div>
                <div class="txt_box2">대장암은 조기 발견 시 수술 및 항암화학요법으로 치료가 잘 되는 편이지만 근본적인 치료가 이뤄지지 않으면 재발의 위험이 높은 암입니다.</div>
                <div class="mt20 img100"><img src="/public/front/images/hope/img_colorectal_01.png" alt="대장암 정모" /></div>
                <p class="btn_line mt40"><a href="/care/colorectal" class="bt_st2">대장암 치료 보기</a></p>
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
                <h5 ><span class="f_roboto">#</span> 인생은 아름다워</h5>
                <div class="bg_whiteBox"><p>“이제 더 바랄 게 있나 뭐”</p></div>
                <div class="txt_box2">
                    항암 치료를 받고 나서부터 신경안정제 없이는 잠을 못 이루게 된 <br>
                    송덕자 씨가 신경안정제를 끊었습니다.  <br>
                    밥 한 술도 제대로 못 뜨던 분이 밥 맛이 생겼다고 합니다. <br>
                    <p class="txt_color f_20 mt20">그 비결이 뭘까요? </p>
                </div>
                <div class="mt40 img100"><img src="/public/front/images/hope/img_colorectal_02.png" alt="" /></div>
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
                <div class="bg_grayBox"><p>“환자의 아픔에 공감하는 병원”</p></div>
                <div class="txt_box2">
                    송덕자 씨와 소람의 인연은 항암으로 지쳐가던 어느 날...<br>
                    평소 극진했던 아들이 내민 한 권의 책에서 시작 되었습니다. <br>
                    <p class="txt_color f_20">그 책을 본 순간 송덕자 씨는 직감했습니다, 아...내가 죽지는 않겠구나. </p>
                </div>
                <div class="mt40 img100 "><img src="/public/front/images/hope/img_colorectal_03.png" alt="" /></div>
                <p class="btn_line mt40"><a href="/reference/better_change" class="bt_st2">호전사례바로가기</a></p>
            </article>
        </div>

    </div>
</div>
<!--//right_wrap -->
</div>