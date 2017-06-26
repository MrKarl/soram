<script type="text/javascript">
    $(document).ready(function($){
        //기본 세팅
        base_setting2();
        setupScrollHandler();
        lecture_center();

        //quick 메뉴
        $(window).scroll(function(){
            win_top = $(window).scrollTop()
        });
    });

    $(window).resize(function(){
        base_setting2();
        lecture_center();
    });

    currentScreen = 0;
    scrollReady = true;
    currentScreen = 0;
    screens = 4; //스크롤 영역수

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
        var newYPos ;
        if(position == screens){
            newYPos = $('#part'+position).offset().top +  $('#part'+position).innerHeight()
        }else if($('.sub').hasClass('st_mobile')){  //모바일 화면일때
            newYPos = $('#part'+position).offset().top - 60
        }else{
            newYPos = $('#part'+position).offset().top
        }
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

    function base_setting2(){
        win_top = $(window).scrollTop()
        part1 = $("#part1").offset().top;
        part2 = $("#part2").offset().top;
        part3 = $("#part3").offset().top;
        part4 = $("#part4").offset().top;
        var tt = $(document).height() - $(window).height()
//            console.log('part1:'+ part1)
//            console.log('part2:'+ part2)
//            console.log('part3:'+ part3)
//            console.log('part4:'+ part3)
        position = 1;

        if(win_top < part2 ){
            position = 1;
        }else if(win_top > part2 && win_top < part3 ){
            position = 2;
        }else if(win_top > part3 && win_top < part4 ){
            position = 3;
        }else if( win_top == tt ){
            position = 4;
        }
//            console.log('resize position:'+ position)
    }
    function lecture_center(){
        var win_h = $(window).height();
        var center_img_h = $('.center_lecture').height()
        var top_val2 = (win_h - center_img_h)/2
        if(center_img_h < win_h && win_w > 1024 ){
            $('.center_lecture').css('top',top_val2)
        }else{
            $('.center_lecture').css('top',0)
        }
    }


</script>
    <!--center_wrap -->
    <section class="center_wrap center_bg">
        <div class="center_wrap_inner2">
            <div class="center_lecture img100"><img src="public/front/images/img_center.jpg" alt="소람암특강" /></div>
        </div>
    </section>
    <!--//center_wrap -->
    <!--right_wrap -->
    <section class="right_wrap">
        <div class="right_wrap_inner">
            <div class="st_lecture">
                <article class="" id="part1">
                    <!--location -->
                    <div class="location">
                        <a href="#"><span class="home"></span></a><a href="#">소람 암 특강</a>
                    </div>
                    <h3>소람 암癌 특강</h3>
                    <h4>소람 의료진이 알려주는 병원에서<br>말해주지 않는 암 이야기 <span class="color_txt">&lt;암,알아야 이긴다!&gt;</span></h4>
                    <div class="img100 mt40"><img src="public/front/images/img_lecture1.jpg" alt="강의내용" /></div>
                </article>
                <article class="mt40" id="part2">
                    <div class="img100"><img src="public/front/images/img_lecture2.jpg" alt="강의내용" /></div>
                </article>
                <article class="mt40" id="part3">
                    <div class="img100"><img src="public/front/images/img_lecture3.jpg" alt="강의내용" /></div>
                </article>
                <article class="mt40" id="part4">
                    <div class="lecture_date">
                        <table>
                            <tr>
                                <th>일정</th>
                                <td>매주 화요일 오후3시</td>
                            </tr>
                            <tr>
                                <th>장소</th>
                                <td>소람한방병원 9층(카페테리아) </td>
                            </tr>
                            <tr>
                                <th>신청</th>
                                <td>1661-1115</td>
                            </tr>
                        </table>

                    </div>
                </article>
            </div>

        </div>
    </section>
    <!--//right_wrap -->