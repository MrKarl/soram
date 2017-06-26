<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap st_heal">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">한방치료</a><a href="#">소람한약</a>
        </div>
        <h3>소람한약</h3>
        <div class="tit_img"><img src="/public/front/images/heal/tit_hanyack_img.jpg" alt="소람한약" /></div>
        <!--동영상1-->
        <div class="movie_wrap4 <?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>" style="top:0">
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
        <h4>소람단S</h4>
        <div class="txt_box">8~13년근 산양산삼(Panax ginseng C.A. Meyer)을 주성분으로 한 환제로써 면역세포를 활성화시키고 암세포의 자연사멸과 성장억제, 종양의 전이와 재발을 방지하는데 효과가 있습니다. 특히 종양 활성 억제 효과가 있는 ginsenoside Rg3, Rh2성분을 증량하였습니다.
        </div>
        <!--동영상2-->
        <div class="movie_wrap4 <?=( $media_result[1]['v_type'] == "1" ) ? "st_video" : ""?>" style="top:30%">
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
        <h4>항암단S</h4>
        <div class="txt_box">산양산삼, 동충하초, 산자고 등의 약재들로 구성된 처방에 소람한방병원의 법제 기술로 법제과정을 거쳐 약효를 증대시킨 캡슐형 제제입니다. 종양에 대한 적극적인 치료 목적으로 사용되며, 종양세포 대사 산물인 담음 및 어혈을 제거하고 종양의 신생혈관 생성을 억제하는 효과가 있습니다.
        </div>
        <div class="txt_box_line mt10">
            <dl>
                <dt>진세노사이드의<br>항암효과 </dt>
                <dd>파낙스 진생<span class="f_roboto">(Panax Ginseng)</span>에 있는 진세노사이드 <span class="f_roboto">(Ginsenoside) Rg3, Rh2,</span>
                    성분은 종양세포의 자연 사멸을 유도하여 항암 효과를 낳고,
                    암세포의 전이와 재발을 방지합니다.
                </dd>
            </dl>
        </div>
        <div class="tit_dot">세계적 학술지가 증언하는 진세노사이드<span class="f_roboto">(Ginsenoside)</span> 항암 효과</div>
        <script type="text/javascript">
            $(document).ready(function($){
                $('.tab_menu a').on("click", function(){
                    $('.tab_menu a').removeClass('on')
                    $(this).addClass('on')
                });
            });
        </script>
        <div class="tab_cont_wrap">
            <div class="tab_menu">
                <a href="javascript:tab_click('tab1_cont');" class="on ">국제논문</a>
                <a href="javascript:tab_click('tab2_cont');">국내논문</a>
            </div>
            <div class="tab1_cont tab_cont">
                <dl class="oversea">
                    <dt><img src="/public/front/images/heal/img_book1.jpg" alt="논문"/></dt>
                    <dd>
                        <p>진세노사이드 <span class="f_roboto">Rh2</span>는 <span class="f_roboto">C57B1/6</span> 생쥐에서 항암제
                            (사이쿨로포스파아이드)의 악성흑색종 세포의항암효과증대와 독성물질 감소의 효과를 보인다.</p>
                        <p class="mt10 f_roboto">Basic Clin Pharmacol Toxical. 2006 Apr;98[4]:411-5.
                            Ginsenoside Rh[2] enhances antitumour activity and decreases
                            genotoxic effect of cyclophosphamide.
                            Wang Z. Zheng Q, Liu K, Li G, Zheng R. School of Life Sciences.
                            Lanzhou University, Lanzhou, People's Republic of China
                        </p>
                    </dd>
                </dl>
                <dl class="oversea">
                    <dt><img src="/public/front/images/heal/img_book2.jpg" alt="논문"/></dt>
                    <dd>
                        <p>대장암세포 <span class="f_roboto">HT29»</span> 통한 프로태오익스 분석율 통해 진세노사이드
                            <span class="f_roboto">Rg3</span> 처치 시    세포사얼 관련 유전자인 <span class="f_roboto">Tropomyosinl, annexin5</span>
                            그리고 <span class="f_roboto">Glutathione s-trans -ferasepl</span> 둥의 발현이 증가한다.</p>
                        <p class="mt10 f_roboto">biosci biotechnol biochem. 2009 Apr 23:73[4]:811-6.
                            Epub 2009 Apr 7. proteomic analysis of the anti-cancer effect of
                            20S-ginsenoside Rg3 in human colon cancer cell lines.
                            Lee SY, Kim GT, Roh SH, Song JS, Kim HJ, Hong SS, Kwon SW,
                            Park JH College of Pharmacy and Research Institute of
                            Pharmaceutical Science, Seoul National University, Seoul,157-742, Korea
                        </p>
                    </dd>
                </dl>
            </div>
            <div class="tab2_cont tab_cont hide">
                <dl class="domestic">
                    <dt>동물실험을 통한 대장암-간 전이에서의산삼약침의 항암효과</dt>
                    <dd>
                        동물실험을 통한 대장암-간 전이에서의 산삼약침의 항암효과
                        간의 조직학적 관찰 결과도 산삼약침 주입 시 정상조직 소견이 더 많이 관찰되었습니다.<br>
                        산삼약침 주입 시 비장에서 면역세포 활성화를 관찰한 결과 세포성 면역에 관계된 T림프구가 유익한 증가를 나타내었습니다.
                        면역세포로부터 분비되는 Cytoking의 양을 관찰한 결과 T helper 2를 자극 유도하는 IL4에서 유익한 증가를 나타내었습니다.<br>
                        <p class="mt10 f_roboto">
                            The Jounal of Korean Acupuncture & Moxibustion Society 제23권 제1호(2006년 2월)산삼약침이 Colon26-L5 암세포주를 이용한
                            간전이 모델의 항암 면역증진에 미치는 영향                             </p>
                    </dd>
                </dl>
                <dl class="domestic">
                    <dt>산삼약침의 암세포에 대한 직접적인 항암작용</dt>
                    <dd>
                        <p>A549 사람 폐암세포에 산양산삼 증류약침을 처리하여
                            사멸효과를 관찰하였습니다. 산삼약침액이 세포주기에 영향을 주어 암세포 자살 유도의 직접적인 항암효과가 있음을 실험적으로 입증하였습니다.</p>
                        <p class="mt10 f_roboto">The Jounal of Korean Acupuncture & Moxibustion Society 제21권 제6호(2004년 12월)PH및 전해질 조절
                            산양산삼 증류약침의 Apoptosis에 관한 실험적 연구
                        </p>
                    </dd>
                </dl>
                <dl class="domestic">
                    <dt>동물실험을 통한 대장암-간 전이에서의 산삼약침의 항암효과</dt>
                    <dd>
                        <p>생존 기간 연장 · 종양 증식 속도 억제인 항암효과가 있음을 실험적으로 입증하였습니다.</p>
                        <p class="mt10 f_roboto">Anticancer effect of mountain ginseng Pharmcopuncture to the nude mouse of lung carcinoma induced by
                            NCI-H460 human non-small cell lung cancer cells.
                        </p>
                    </dd>
                </dl>
            </div>
        </div>
        <h4>소람환약</h4>
        <div class="txt_box">나노 분말로 조제하여 유효 성분의 체내 흡수율을 높인 소람의 환약은 각 암종별 특징에 따라 약재를 달리하여 조제하였기
            때문에 맞춤 치료 효과를 보실 수 있습니다.
        </div>
        <div class="cancer_circle_wrap">
            <ul class="cancer_circle_list">
                <li class="img_circle"><img src="/public/front/images/heal/img_hanyack_circle1.jpg" alt="소화기암" /> </li>
                <li><p>SPIAM-GC</p>위암/식도암</li>
                <li><p>SPIAM-CC</p>대장/직장암</li>
                <li><p>SPIAM-HC</p>간암, 담도암, 췌장암</li>
                <li><p>SPIAM-A</p>기타 소화기</li>
            </ul>
            <ul class="cancer_circle_list">
                <li class="img_circle"><img src="/public/front/images/heal/img_hanyack_circle2.jpg" alt="여성암" /> </li>
                <li><p>Femerene-M</p>유방암</li>
                <li><p>Femerene-V</p>자궁경부암</li>
                <li><p>Femerene-O</p>난소암</li>
            </ul>
            <ul class="cancer_circle_list">
                <li class="img_circle"><img src="/public/front/images/heal/img_hanyack_circle3.jpg" alt="폐암,뇌종암" /> </li>
                <li><p>NEW Spira-Q</p>폐암</li>
                <li><p>Spira-C</p>뇌종양</li>
            </ul>
        </div>
        <div class="certification_wrap">
            <ul>
                <li class="img_certification"><p><img src="/public/front/images/heal/img_certification1.jpg" alt="인증서" /></p></li>
                <li class="txt">소람의 환약은 미국 FDA 인체 무해성 테스트를 통과, 안전성을 인증 받았습니다. </li>
            </ul>
            <ul>
                <li class="img_certification"><p><img src="/public/front/images/heal/img_certification2.jpg" alt="인증서" /></p></li>
                <li class="txt">다양한 임상경험과 연구를 통하여 여성암에 특화된, 생약성분으로 부작용이 적은 환약을 특허 출원하였습니다. </li>
            </ul>
        </div>
        <!--동영상3-->
        <div class="movie_wrap4" style="top:75%">
            <div class="movie_play" >
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XuIQnjrryEI?&autoplay=0&rel=0&showinfo=0&controls=1&enablejsapi=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <!--//동영상3-->


        <h4>증류탕약</h4>
        <div class="txt_box">본초강목의 증류한약 조제법을 현대적으로 개량하여 한약재를 끓인 수증기를 냉각, 액화시켜 진액만 추출한 탕약입니다. 무색으로 거의 물에 가깝기 때문에 거부감 없이 편하게 복용하실 수 있습니다.
        </div>

    </div>
</section>
<!--//right_wrap -->