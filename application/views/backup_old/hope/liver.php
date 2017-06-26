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
        <div class="st_hope st_hope_liver">
            <article class="part_box" id="part1">
                <!--동영상1-->
                <div class="movie_wrap3 <!--<?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>-->">
                	<?
                	if ($this->session->userdata("MBR_ID") == "")
                	{
                	?>
                		<div class="img_hope_center" >
                            <a href="javascript:loginPopup();"><img src="/public/upload/image/video_cover/04_hope.jpg" /></a>
                        </div>
                	<?
                	} else {
                	?>
                	
                    <?if($media_result[0]['v_type'] == "1"):?>
                        <div class="video_wrap2">
                            <video  width="100%" height="100%" id="video1" poster="/public/upload/image/video_cover/04_0101.jpg">
                                <source type="video/mp4" src="<?=$media_result[0]['media_src']?>" />
								
                                <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                                    <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                                    <img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />
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
                    
                    <?
                    }
                    ?>
                </div>

                <!--location -->
                <div class="location">
                    <a href="#"><span class="home"></span></a><a href="#">희망메시지</a><a href="#">간,담,췌장암</a>
                </div>


                <!--//동영상1-->
                <h3>간,담,췌장암  <span class="bar">유상열</span></h3>
                <h5><span class="f_roboto">#</span> 절망의 끝에 서다</h5>
                <div class="bg_grayBox"><p>“3개월...드시고 싶은 거 다 드세요”</p> </div>
                <p class="txt_box2">택시 운전을 하던 유상열 씨는 담도암 말기 선고를 받고 의사로부터 3개월 밖에<br/>
                    살지 못한다는 말을 들었습니다. 수술을 하기 위해 배를 열었지만...이미 늦은 상태.  </p>
                <p class="txt_color f_20">유상열 씨는 그렇게 혼자 남은 아내와의 이별을 준비해야 했습니다.</p>
                <div class="mt40"><h4>간,담,췌장암 정보</h4></div>
                <div class="txt_box2">담도암은 주변 장기에 혈액을 공급하는 혈관들이 포진해 있어 수술이 어렵고 항암제 효과가
                    떨어지기 때문에 생존율 및 치료율이 매우 낮은 암입니다. </div>
                <div class="mt20 img100"><img src="/public/front/images/hope/img_liver_01.png" alt="간암정도" /></div>
                <p class="btn_line mt40"><a href="/care/liver" class="bt_st2">간,담도암 치료보기</a></p>
            </article>
            <article class="part_box" id="part2">
                <!--동영상3-->
                <div class="movie_wrap3 <!--<?=( $media_result[1]['v_type'] == "1" ) ? "st_video" : ""?>-->">
                	<?
                	if ($this->session->userdata("MBR_ID") == "")
                	{
                	?>
                		<div class="img_hope_center" >
                            <a href="javascript:loginPopup();"><img src="/public/upload/image/video_cover/04_hope.jpg" /></a>
                        </div>
                	<?
                	} else {
                	?>
                	
                    <?if($media_result[1]['v_type'] == "1"):?>
                        <div class="video_wrap2">
                            <video  width="100%" height="100%" id="video2" poster="/public/upload/image/video_cover/04_0102.jpg">
                                <source type="video/mp4" src="<?=$media_result[1]['media_src']?>" />

                                <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                                    <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                                    <img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />
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
                    
                    <?
                    }
                    ?>
                </div>
                <!--//동영상3-->
                <h5 ><span class="f_roboto">#</span> 기적을 마주하다</h5>
                <div class="bg_whiteBox"><p>“4년 동안 잘 살고 있습니다”</p></div>
                <div class="txt_box2">
                    유상열 씨는 지금 놀랍게도…건강하게 지내고 있습니다.<br>
                    더 이상 암 재발의 흔적이 없다는 ‘관해판정’. <br>
                    유상열 씨 인생에 그야말로 기적 같은 일이 벌어진 것입니다.  <br>
                    <p class="txt_color f_20 mt20">4년 전, 유상열 씨에게 무슨 일이 있었을까요?</p>
                </div>
                <div class="mt40 img100"><img src="/public/front/images/hope/img_liver_02.png" alt="" /></div>
            </article>
            <article class="part_box" id="part3">
                <!--동영상3-->
                <div class="movie_wrap3 <!--<?=( $media_result[2]['v_type'] == "1" ) ? "st_video" : ""?>-->">
                	<?
                	if ($this->session->userdata("MBR_ID") == "")
                	{
                	?>
                		<div class="img_hope_center" >
                            <a href="javascript:loginPopup();"><img src="/public/upload/image/video_cover/04_hope.jpg" /></a>
                        </div>
                	<?
                	} else {
                	?>
                	
                    <?if($media_result[2]['v_type'] == "1"):?>
                        <div class="video_wrap2">
                            <video  width="100%" height="100%" id="video3" poster="/public/upload/image/video_cover/04_0103.jpg">
                                <source type="video/mp4" src="<?=$media_result[2]['media_src']?>" />

                                <object width="540" height="304" type="application/x-shockwave-flash" data="/public/front/video/flashmediaelement.swf">
                                    <param name="movie" value="/public/front/video/flashmediaelement.swf" />
                                    <img src="<?/*=($media_result[0][''] != "") ? $media_result[0][''] : ""*/?>" width="540" height="303" alt="No video playback capabilities" />
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
                    
                    <?
                    }
                    ?>
                </div>
                <!--//동영상3-->
                <h5><span class="f_roboto">#</span> 소람을 만나다</h5>
                <div class="bg_grayBox"><p>“환자의 마음까지 치료하는 병원”</p></div>
                <div class="txt_box2">
                    유상열 씨는 처음에 아내 분의 손에 이끌려 억지로 소람을 찾았지만  <br>
                    치료를 안 받겠다고 고집을 피웠습니다. <br>
                    <p class="txt_color f_20">난감해진 의료진은 그래도 유상열 씨를 한 번 설득해보기로 했습니다. </p>
                </div>
                <div class="mt40 img100 "><img src="/public/front/images/hope/img_liver_03.png" alt="" /></div>
                <p class="btn_line mt40"><a href="/reference/better_change" class="bt_st2">호전사례바로가기</a></p>
            </article>
        </div>

    </div>
</div>
<!--//right_wrap -->