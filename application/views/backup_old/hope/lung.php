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
        <div class="st_hope st_hope_lung">
            <article class="part_box" id="part1">
                <!--동영상1-->
                <div class="movie_wrap3 <!--<?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>-->">
                	<?
                	if ($this->session->userdata("MBR_ID") == "")
                	{
                	?>
                		<div class="img_hope_center" >
                            <a href="javascript:loginPopup();"><img src="/public/upload/image/video_cover/01_hope.jpg" /></a>
                        </div>
                	<?
                	} else {
                	?>
                	
                    <?if($media_result[0]['v_type'] == "1"):?>
                        <div class="video_wrap2">
                            <video  width="100%" height="100%" id="video1" poster="/public/upload/image/video_cover/01_0101.jpg">
                                <source type="video/mp4" src="<?=$media_result[0]['media_src']?>" />
                                	
                                <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                                    <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                                    <img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />
                                </object>

                            </video>
                            <script> // using jQuery
                            	$(document).ready(function(){
                                	$('#video1').mediaelementplayer(/* Options */);
                                });
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
                    
                    <?
                    }
                    ?>
                </div>
                <!--//동영상1-->
                <!--location -->
                <div class="location">
                    <a href="#"><span class="home"></span></a><a href="#">희망메시지</a><a href="#">폐암</a>
                </div>

                <h3>폐암 <span class="bar">박승근</span></h3>
                <h5><span class="f_roboto">#</span> 인생에 천둥이 치다</h5>
                <div class="bg_grayBox"><p>“<span class="f_bold">6개월,</span>마음의 준비를 하세요.”</p> </div>
                <p class="txt_box2">운동 후 샤워를 하다가 가슴에 딱딱한 것이 만져져 부랴부랴 병원을 찾게 된 박승근 씨.<br>
                    의사로부터 폐암 말기에 수술도 안 된다는 말을 들었습니다.  </p>
                <p class="txt_color f_20">남은 시간은 단 6개월...시간이 얼마 남지 않았습니다.</p>
                <div class="mt40"><h4>폐암정보</h4></div>
                <div class="txt_box2">폐암은 암 사망률 1위에 해당하는 암으로, 진행 속도가 매우 빠른 암이기 때문에  치료 계획을 빨리 세우시는 게 좋습니다.  </div>
                <div class="mt20 img100"><img src="/public/front/images/hope/img_lung_01.png" alt="폐암정보" /></div>
                <p class="btn_line mt40"><a href="/care/lung" class="bt_st2">폐암치료 보기</a></p>
            </article>
            <article class="part_box" id="part2">
                <!--동영상2-->
                <div class="movie_wrap3 <!--<?=( $media_result[1]['v_type'] == "1" ) ? "st_video" : ""?>-->">
                	<?
                	if ($this->session->userdata("MBR_ID") == "")
                	{
                	?>
                		<div class="img_hope_center" >
                            <a href="javascript:loginPopup();"><img src="/public/upload/image/video_cover/01_hope.jpg" /></a>
                        </div>
                	<?
                	} else {
                	?>
                	
                    <?if($media_result[1]['v_type'] == "1"):?>
                        <div class="video_wrap2">
                            <video  width="100%" height="100%" id="video2"  poster="/public/upload/image/video_cover/01_0102.jpg">
                                <source type="video/mp4" src="<?=$media_result[1]['media_src']?>" />

                                <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                                    <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                                    <img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />
                                </object>

                            </video>
                            <script> // using jQuery
                            	$(document).ready(function(){
                                	$('#video2').mediaelementplayer(/* Options */);
                                });
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
                    
                    <?
                    }
                    ?>
                </div>
                <!--//동영상2-->
                <h5 ><span class="f_roboto">#</span> 두 번째 생일을 맞이하다</h5>
                <div class="bg_whiteBox"><p>“저는 이제 두 살이 되었습니다”</p></div>
                <div class="txt_box2">
                    2년이 흐른 뒤, 박승근 씨는 두 번째 생일을 맞이했습니다. <br>
                    6개월 밖에 안 남았다고 했는데 <br>
                    지금 오히려 건강한 모습으로 살아가고 있습니다. <br>
                    <p class="txt_color f_20">지난 2년 간, 그에게 도대체 무슨 일이 있었던 걸까요?</p>
                </div>
                <div class="mt40 img100"><img src="/public/front/images/hope/img_lung_02.png" alt="두번째 생일을 맞다" /></div>
            </article>
            <article class="part_box" id="part3">
                <!--동영상3-->
                <div class="movie_wrap3 <!--<?=( $media_result[2]['v_type'] == "1" ) ? "st_video" : ""?>-->">
                	<?
                	if ($this->session->userdata("MBR_ID") == "")
                	{
                	?>
                		<div class="img_hope_center" >
                            <a href="javascript:loginPopup();"><img src="/public/upload/image/video_cover/01_hope.jpg" /></a>
                        </div>
                	<?
                	} else {
                	?>
                	
                    <?if($media_result[2]['v_type'] == "1"):?>
                        <div class="video_wrap2">
                            <video  width="100%" height="100%" id="video3"  poster="/public/upload/image/video_cover/01_0103.jpg">
                                <source type="video/mp4" src="<?=$media_result[2]['media_src']?>" />

                                <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                                    <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                                    <img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />
                                </object>

                            </video>
                            <script> // using jQuery
                            	$(document).ready(function(){
                                	$('#video3').mediaelementplayer(/* Options */);
                                });
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
                    
                    <?
                    }
                    ?>
                </div>
                <!--//동영상3-->
                <h5><span class="f_roboto">#</span> 소람을 만나다</h5>
                <div class="bg_grayBox"><p>“암, 면역력이 중요합니다”</p></div>
                <div class="txt_box2">
                    처음에 박승근 씨 사례를 접한 의료진은 깊은 고민에 빠졌습니다. <br>
                    대학병원에서도 수술을 포기했는데…어떻게 해야 할까? <br>
                    <p class="txt_color f_20">결국 의료진은 선택을 해야만 했습니다. </p>
                </div>
                <div class="mt20 img100"><img src="/public/front/images/hope/img_lung_03.png" alt="" /></div>
                <p class="btn_line mt40"><a href="/reference/better_change" class="bt_st2">호전사례바로가기</a></p>
            </article>

        </div>

    </div>
</div>
<!--//right_wrap -->