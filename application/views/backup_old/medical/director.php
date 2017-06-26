


<script type='text/javascript'>
    $(document).ready(function ($) {

        //book 슬라이드
        book_slider = $('.book_slide').show().bxSlider({
            touchEnabled: true,
            slideMargin: 0,
            infiniteLoop:false,
            controls:true,
            auto: false,
            pager:false,
            responsive: true,
            speed: 1000,
            minSlides: 2,
            maxSlides: 3,
            slideWidth: 500,
            slideMargin: 10
        });


        //감사편지
        letter_slider = $('.letter_slide').show().bxSlider({
            touchEnabled: true,
            slideMargin: 0,
            infiniteLoop:false,
            controls:true,
            auto: false,
            pager:false,
            responsive: true,
            speed: 1000,
            minSlides: 2,
            maxSlides: 3,
            slideWidth: 500,
            slideMargin: 15
        });


    })

    $(window).on("resize", function () {
        <?if(count($books) > 0):?>
            book_slider.reloadSlider();
        <?endif;?>
        <?if(count($letters) > 0):?>
            letter_slider.reloadSlider();
        <?endif;?>
    });

    function goLink(seq){
        $.ajax({
            type: "POST",
            data: {"seq" : seq},
            url : "/medical/upCnt",
            success : function(result){
                if(result == true){
                    location.href="/medical/tv_view?seq="+seq;
                }
            }

        });
    }

</script>


<div class="director_wrap first_director">

    <div class="director_profile_wrap  ">
        <div class="top_face_wrap">
            <p class="img100"><img src="/public/front/images/intro/img_director.jpg" alrt="병원장성신" /></p>
            <!--
                                        <div class="txt_box2 f_myengjo">
                                            치료를 향한 끝 없는 열정<br>한의학박사 한방대표원장
                                            <p class="name">성신</p>
                                        </div>
            -->
            <p class="ar_down "><a href="#top_move2" class="scroll"><img src="/public/front/images/intro/ar_down.png" /></a></p>
        </div>
        <div  class="director_info_wrap" id="top_move2">
            <!--center_wrap -->
            <section class="center_wrap">
                <div class="center_wrap_inner">
                    <!--location -->
                    <div class="location">
                        <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">의료진</a><a href="#">병원장</a>
                    </div>
                    <h3>병원장</h3>
                    <div class="resume_wrap">
                        <div class="img_faee img100"><img src="/public/front/images/intro/img_profile.jpg" alt="병원장 성신" /></div>
                        <div class="resume_list">
                            <div class="tit f_myengjo">암치료에 대한 희망적 도전 <br><span>성신 한의학박사 병원장</span></div>
                            <h4>약력</h4>
                            <ul class="st_list4 mt20">
                                <li>경희대학교 한의과대학 졸업</li>
                                <li>한의학 박사</li>
                                <li>現 경희대학교 한의과대학 외래교수</li>
                                <li>現 소람한방병원 병원장</li>
                                <li>대한암한의학회 정회원</li>
                                <li>대한 한의통증제형학회 정회원</li>
                                <li>SIO 국제 통합암학회 정회원</li>
                            </ul>
                        </div>
                    </div>
                    <h4>논문</h4>
                    <div class="thesis_list">
                        <ul class="st_list4 mt20 f_roboto">
                            <li>nhibitory effects of verrucarin A on tunicamycin-induced ER stress  in FaO rat Liver cells</li>
                            <li>Case of complete remission of breast cancer metastasized to lung treated by traditional korean therapy</li>
                            <li>A case of stage IV non-small cancer treated by Korean medicine therapy alone</li>
                            <li> A case of inoperable klatskin tumor showing response to wild ginseng  phamacopuncture</li>
                            <li>Improved Case of Recurred and Metastatic Ascending Colon Cancer by  Combination of Oriental Medical Therapy and FOLFIRI
                                Chemotherapy </li>
                            <li>Improved Case of Recurred and Metastatic Ascending Colon Cancer by  Combination of Oriental Medical Therapy and
                                FOLFIRI Chemotherapy</li>
                        </ul>
                    </div>
                    <!--저서 슬라이드-->
                    <?if(count($books) > 0):?>
                        <h4>저서</h4>
                        <div class="book_slide_wrap mt20">
                            <div class="book_slide">
                                <?foreach($books as $rows):?>
                                    <div class="slide">
                                        <p class="img_book"><img src="<?=$rows['BK_IMG']?>" alt="<?=$rows['BK_NM']?>" /></p>
                                        <div class="book_info">
                                            <?=$rows['BK_NM']?>
                                            <p class="w_date"><?=$rows['BK_YMD']?></p>
                                        </div>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                    <?endif;?>
                    <!--//저서 슬라이드-->
                    <!--편지 슬라이드-->
                    <?if(count($letters) > 0):?>
                        <h4>감사편지</h4>
                        <div class="letter_slide_wrap mt20">
                            <div class="letter_slide">
                                <?foreach($letters as $rows):?>
                                    <div class="slide">
                                        <p class="img_letter"><img src="<?=$rows['LT_IMG']?>" alt="편지" /></p>
                                        <div class="letter_info">
                                            <?=$rows['LT_TTL']?>
                                            <p class="w_name">작성자 <span><?=$rows['LT_NM']?></span></p>
                                        </div>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                    <?endif;?>
                    <!--//편지 슬라이드-->

                </div>
            </section>
            <!--//center_wrap -->
            <!--right_wrap -->
            <section class="right_wrap right_bg2">
                <div class="right_wrap_inner ">
                    <h4>방송출연</h4>
                    <div class="tv_list_wrap tv_list_wrap2 mt10">
                        <?foreach($videos as $rows):?>
                            <div class="tv_item">
                                <a href="javascript:goLink('<?=$rows['BC_SEQ']?>');">
                                    <div class="img_news">
                                        <!--<div class="bt_play"><img src="/public/front/images/intro/bt_play.png" alt="플레이" /></div>-->
                                        <img src="<?=$rows['BC_MAIN_IMG']?>" alt="방송" />
                                    </div>
                                    <div class="news_txt">
                                        <div class="tit"><p><?=$rows['BC_TTL']?></p></div>
                                        <div class="txt"><?=mb_strimwidth($rows['BC_CONT'], 0, 150, '...')?></div>
                                        <p class="bt_moreview"><span>상세보기</span></p>
                                    </div>
                                </a>
                            </div>
                        <?endforeach?>
                    </div>
                </div>
            </section>
            <!--//right_wrap -->

        </div>

    </div>
    <!--//병원장 성신-->

</div>