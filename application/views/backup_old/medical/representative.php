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
        book_slider2 = $('.book_slide2').show().bxSlider({
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
        letter_slider2 = $('.letter_slide2').show().bxSlider({
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

        //병원장 선택
        /*$('.choice').on("click", function (){
            $('.choice').removeClass("on")
            $(this).addClass("on")
        })*/
        //팝업창 닫기
        $('.director_profile_wrap .btn_close').on("click", function (){
            $.when($('.director_profile_wrap').fadeOut()).done(function(){$('.director_wrap .choice_wrap').removeClass('hide'); })
        })

    });



    function choice_doctor(doctor){

        var dr = doctor;
        $('.director_wrap .choice_wrap').addClass('hide');
        $('#main_wrap').css('height','auto');

        $('.'+dr).fadeIn();

        if(dr == 'choice_director1') {
            <?if(count($books1) > 0):?>
                book_slider.reloadSlider();
            <?endif;?>
            <?if(count($letters1) > 0):?>
                letter_slider.reloadSlider();
           <?endif;?>
        }else{
            <?if(count($books2) > 0):?>
                book_slider2.reloadSlider();
            <?endif;?>
            <?if(count($letters2) > 0):?>
                letter_slider2.reloadSlider();
            <?endif;?>
        }

    }

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


<div class="director_wrap">
    <!--병원장 선택-->
    <div class="choice_wrap">
        <div class="choice choice_01">
            <a href="javascript:choice_doctor('choice_director1');">
                <p class="mask_bg"></p>
                <p class="img100"><img src="/public/front/images/intro/img_director01_thumb.jpg" /></p>
                <div class="txt_box2">
                    <p class="mark_uni"><img src="/public/front/images/intro/mark_university2.png" alt="서울대" /></p>
                    <p>치료를 향한 끝없는 열정 </p>
                    <p>전문의 / 양방대표원장</p>
                    <p>서울대학교 가정의학과 전문의</p>
                    <p class="name">최문구</p>
                </div>
            </a>
        </div>
        <div class="choice choice_02">
            <a href="javascript:choice_doctor('choice_director2');">
                <p class="mask_bg"></p>
                <p class="img100"><img src="/public/front/images/intro/img_director02_thumb.jpg" /></p>
                <div class="txt_box2 ">
                    <p class="mark_uni"><img src="/public/front/images/intro/mark_university.png" alt="서울대" /></p>
                    <p>20년 암치료 노하우</p>
                    <p>한의학박사 / 한방대표원장</p>
                    <p>경희대학교 한의과대학 한의학박사 </p>
                    <p class="name">김성수</p>
                </div>
            </a>
        </div>
    </div>
    <!--//병원장 최문구-->
    <div class="director_profile_wrap choice_director1 hide">
        <div class="top_face_wrap">
            <p class="btn_close"><img src="/public/front/images/btn_close.png" alt="닫기" /></p>
            <p class="img100"><img src="/public/front/images/intro/img_director01.jpg" alrt="병원장 최문구" /></p>
            <p class="ar_down "><a href="#top_move2" class="scroll2"><img src="/public/front/images/intro/ar_down.png" /></a></p>
        </div>
        <div  class="director_info_wrap" id="top_move2">
            <!--center_wrap -->
            <section class="center_wrap">
                <div class="center_wrap_inner">
                    <!--location -->
                    <div class="location">
                        <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">의료진</a><a href="#">대표의료진</a>
                    </div>
                    <h3>대표의료진</h3>
                    <div class="resume_wrap">
                        <div class="img_faee img100"><img src="/public/front/images/intro/img_profile01.jpg" alt="병원장 성신" /></div>
                        <div class="resume_list">
                            <div class="tit f_myengjo"> 치료를 향한 끝없는 열정<br><span> 최문구 원장/전문의 양방대표원장</span></div>
                            <h4>약력</h4>
                            <ul class="st_list4 mt20">
                                <li>서울대학교 의과대학 졸업 </li>
                                <li>가정의학과 전문의 </li>
                                <li>대한위장내시경학회 정회원 </li>
                                <li>대한검진의학회 정회원 </li>
                                <li>대한IMS학회 정회원 </li>
                                <li>대한비타민C 암 연구회 정회원 </li>
                                <li>대한통합기능의학연구회 정회원 </li>
                            </ul>
                        </div>
                    </div>
                    <h4>운명과도 같았던 ‘의사의 길’</h4>
                    <div class="txt_box2">
                        <p class="gray_box2">“나는 한의사가 아닌 의사가 될 거야”</p>
                        어릴 적부터 한의학에 관심이 많았던 큰형은 대입을 앞두고 한의대로 진로를 결정했다. <br>
                        고등학교 3학년, 똑같이 대입을 앞둔 나는 큰형과 조금 다른 결정을 하게 되었다. <br>
                        한의사가 아닌 ‘의사’가 되자...<br>
                        국내 최고의 대학에서 최고의 교육을 받으면 진짜 의술을 펼치는 의사가 될 수 있을 거라 믿었다. <br>
                        그리고 이듬해 봄, 나는 서울대학교 의과 대학에 입학했다.
                    </div>
                    <h4>서울대 의대가 채워주지 않은 ‘갈증’ </h4>
                    <div class="txt_box2">
                        <p class="gray_box2">‘의사들은 왜 저렇게 차갑고 딱딱할까’</p>
                        의대에서 만난 친구들은 하나같이 똑똑하고 아는 것이 많았다. <br>
                        하지만 아는 것이 많다고 해서 환자를 잘 보는 것도 아니었다. <br>
                        아니, 환자를 보지 않고 병명만 보는 친구들이 더 많았다. <br>
                        OOO라는 이름 석 자가 아닌, OO병으로 기억되는 환자들. <br>
                        병과 증상에 따라 기계적으로 약물을 처방하는 것은 <br>
                        내가 평소에 꿈꿔왔던 ‘사람을 위한 의술’이 아니었다. <br>
                        제대로 온 길이 맞는 지, 한 동안 방황이 이어졌다. <br>
                    </div>
                    <h4>암에 걸리신 부모님, 암 치료에 눈을 뜨다  </h4>
                    <div class="txt_box2">
                        <p class="gray_box2">“문구야, 아버지가 위암이래” </p>
                        아버지 위암 발병 소식에 놀란 마음을 추스를 틈도 없이 어머니가 자궁암 진단을 받으셨다.<br>
                        지금과 달리 당시에는 암은 걸리면 죽는 병으로 인식했지만
                        다행히 부모님은  검진으로 암을 조기에 발견한 케이스였고, 무사히 수술을 마쳤다. <br>
                        하지만 수술 이후 힘들어하는 부모님에게  병원에서 해 줄 수 있는 것은 아무것도 없었다.  <br>
                        그때 한의사였던 큰 형이 부랴부랴 부모님께 약을 지어드렸고 이후로 부모님은
                        점차 기력을 회복해 나갔다. 의학의 한계를 한의학으로 극복해내는 것을 보며,
                        운명처럼…양한방 통합 암 치료에 눈을 뜨기 시작했다.
                    </div>
                    <!--저서 슬라이드-->
                    <?if(count($books1) > 0):?>
                        <h4>저서</h4>
                        <div class="book_slide_wrap mt20">
                            <div class="book_slide">
                                <?foreach($books1 as $rows):?>
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
                    <?if(count($letters1) > 0):?>
                        <h4>감사편지</h4>
                        <div class="letter_slide_wrap mt20">
                            <div class="letter_slide">
                                <?foreach($letters1 as $rows):?>
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
                </div>
            </section>
            <!--//center_wrap -->
            <!--right_wrap -->
            <section class="right_wrap right_bg2">
                <div class="right_wrap_inner ">
                    <h4>양한방 통합치료의 가능성을 발견하다 </h4>
                    <div class="txt_box2">
                        가정의학과를 선택한 건 어느 한 가지 병만 보는 것이 아니라
                        병을 통합적으로 보고, 환자 한 사람 한 사람을 장기적으로
                        전인적으로 볼 수 있다는 점에서 매력적이었다. <br>
                        특히 위내시경 검진을 통해 소화기 암 환자들을 자주 접하며
                        간암, 담도암, 췌장암, 위암 등에 대한 진단과 치료에 관심을 갖게 됐다.<br>
                        양한방 통합 암 치료에 대해 열린 갖고 있던 내게
                        소람한방병원은 놀라운 결과를 보여주고 있었다. <br>
                        대학병원에서 ‘치료 종결’ 선고를 받은 환자들,
                        쉽게 말해 더 이상 해 줄 것이 없으니 집으로 돌아가라는 환자들에게도
                        새로운 호전 가능성이 있다는 것을 이곳에서 발견하고
                        처음으로, 의사로서 자부심이 생기기 시작했다. <br>
                        <p class="gray_box2 mt10">‘아…이런 게 진정한 의술이구나. 의사란 이래야 하는 것이구나…’</p>
                    </div>
                    <p class="img100 mt20"><img src="/public/front/images/intro/img_director01_img01.jpg" alt="" /></p>
                    <h4 class="mt40">암 환자와 함께 울고 웃으며 걸어가는 길    </h4>
                    <div class="txt_box2">
                        <p class="gray_box2">“거의 종양이 안 보일 정도래요”</p>
                        얼마 전, 췌장암 2기 판정을 받고 면역 암 치료를 병행하신
                        윤OO 환자로부터 정말 기쁜 소식을 들었다.
                        췌장암은 암 중에서도 치료가 어려운 암으로 꼽히는데…
                        양방이든 한방이든 환자에게 맞는 치료를 집중적으로 한 결과였다.
                        치료실에 있는 간호사, 진료원장들까지 모두가 자기 가족 일처럼
                        기뻐하고 환호하는 모습을 보며 덩달아 가슴이 뜨거워진다.
                    </div>
                    <div class="txt_box2">
                        대한민국에서 이런 병원이 또 있을까? <br>
                        환자들의 아픔을 내 아픔처럼 돌보는 의료진,
                        모든 직원들이 의료진이라는 생각으로 OO병이 아닌
                        OOO님으로  환자를 대하는 곳이 많지는 않을 것이다.<br>
                        그렇기에, 나는 이 곳에서 소람의 의료진들과 더불어
                        암 환자와 함께 울고 웃는 길을 선택할 것이다.
                    </div>
                    <div class="txt_box2">
                        앞으로도 암과 같은 난치성 질환에 대한 새로운 접근으로,
                        말기암 환자들의 삶의 질을 높이고 보다 편안하고 온전하게
                        살 수 있도록 치료와 연구를 계속해 나가리라-
                        오늘도 진료실 문을 열며 새로운 열정을 품는다.
                    </div>
                    <p class="img100 mt20"><img src="/public/front/images/intro/img_director01_img02.jpg" alt="" /></p>

                </div>
            </section>
            <!--//right_wrap -->

        </div>

    </div>
    <!--//양방대표원장 최문구-->
    <!--대표원장 김성수-->
    <div class="director_profile_wrap choice_director2 hide ">
        <div class="top_face_wrap">
            <p class="btn_close"><img src="/public/front/images/btn_close.png" alt="닫기" /></p>
            <p class="img100"><img src="/public/front/images/intro/img_director02.jpg" alrt="병원장김성수" /></p>
            <p class="ar_down "><a href="#top_move" class="scroll2"><img src="/public/front/images/intro/ar_down.png" /></a></p>
        </div>
        <div  class="director_info_wrap" id="top_move">
            <!--center_wrap -->
            <section class="center_wrap">
                <div class="center_wrap_inner">
                    <!--location -->
                    <div class="location">
                        <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">의료진</a><a href="#">대표의료진</a>
                    </div>
                    <h3>대표의료진</h3>
                    <div class="resume_wrap">
                        <div class="img_faee img100"><img src="/public/front/images/intro/img_profile02.jpg" alt="대표원장 김성수" /></div>
                        <div class="resume_list">
                            <div class="tit f_myengjo">암치료에 대한 희망적 도전<br/> <span>김성수 한의학박사 대표원장</span></div>
                            <h4>약력</h4>
                            <ul class="st_list4 mt20">
                                <li>경희대학교 한의과대학 졸업</li>
                                <li>한의학 박사</li>
                                <li>現 경희대학교 한의과대학 외래교수</li>
                                <li>現 소람한방병원 한방대표원장</li>
                                <li>대한약침학회 정회원</li>
                                <li>대한 암 한의학회 정회원</li>
                                <li>대한 한의통증제형학회 정회원</li>
                                <li>대한원전학회 정회원</li>
                            </ul>
                        </div>
                    </div>
                    <h4>논문</h4>
                    <div class="thesis_list">
                        <ul class="st_list4 mt20">
                            <li>Phospholipase A2 inhibits cisplatin-induced acute kidney injury by modulating
                                regulatory T cells by the CD 206 mannose receptor</li>
                            <li>Case of complete remission of breast cancer metastasized to lung treated by
                                traditional korean therapy</li>
                            <li>A case of stage IV non-small cancer treated by Korean medicine therapy alone</li>
                            <li>A case of inoperable klatskin tumor showing response to wild ginseng
                                phamacopuncture</li>
                            <li>Improved Case of Recurred and Metastatic Ascending Colon Cancer
                                by Combination of Oriental Medical Therapy and FOLFIRI Chemotherapy</li>

                        </ul>
                    </div>
                        <!--저서 슬라이드-->
                    <?if(count($books2) > 0):?>
                        <h4>저서</h4>
                        <div class="book_slide_wrap mt20">
                            <div class="book_slide2">
                            <?foreach($books2 as $rows):?>
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
                    <?if(count($letters2) > 0):?>
                        <h4>감사편지</h4>
                        <div class="letter_slide_wrap mt20">
                            <div class="letter_slide2">
                                <?foreach($letters2 as $rows):?>
                                    <div class="slide">
                                        <p class="img_letter"><img src="<?=$rows['LT_IMG']?>" alt="<?=$rows['LT_TTL']?>" /></p>
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
                        <?foreach($videos2 as $rows):?>
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
    <!--//대표원장 김성수-->



</div>