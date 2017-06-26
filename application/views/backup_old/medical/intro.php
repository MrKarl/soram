<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">병원소개</a><a href="#">병원소개</a>
        </div>
        <h3>병원소개</h3>
        <!--동영상1-->
        <div class="movie_wrap5 mt50 <?=( $media_result[0]['v_type'] == "1" ) ? "st_video" : ""?>">
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
        <div class="intro_hospital_wrap">
            <div class="txt_advice f_myengjo mt30">암, 불치병이 아니라 난치병입니다. </div>
            <div class="txt_box2 btn_line mt30">
                불과 몇 년 전만해도 암은 치료가 되지 않는,
                결국에는 목숨을 잃게 되는 불치병으로만 생각했습니다. <br>
                하지만 이제는 암 환자의 5년 이상 생존율이 70%를 넘을 만큼
                치료가 가능한 병이 되었습니다. <br>
            </div>
            <div class="img100 mt40"><img src="/public/front/images/intro/img_hospital_01.jpg" alt="병원장 성신" /></div>
            <div class="txt_box2 btn_line mt30">
                다만 항암의 과정이 체력적으로 많이 힘들고<br>
                암 = 죽음이라는 인식 때문에 치료 자체를 <br>
                아예 포기하는 분들도 적지 않습니다. <br>
            </div>
            <div class="txt_box2 btn_line mt30">
                암을 진단 받으신 분들은 병 뿐만 아니라 <br>
                절망감이라는, 보이지 않는 ‘마음의 병’ 과도 싸워야 합니다. <br>
                앞이 캄캄한 절망에서 벗어나 희망을 찾게 되는 것, <br>
                그것이 소람한방병원 의료진의 바람이자, 보람입니다. <br>
            </div>
            <div class="txt_box2 btn_line mt30 f_20 f_500 f_333 line_bottom">
                당신은 소중한 사람입니다. <br>
                소람한방병원은 소중한 가족을 대하듯 <br>
                암 환자 한 분, 한 분께 언제나 최선을 다하겠습니다. <br>
            </div>
            <div class="img_txt_box1 mt80">
                <p class="img"><img src="/public/front/images/intro/img_hospital_02.jpg" alt=""/></p>
                <div class="txt_box2">
                    <p class="txt_box_tit">양·한방 협진을 통해 암을 집중적으로 치료하는 병원 </p>
                    <p class="mt20">소람한방병원은 20여 년 암 치료 경험을 바탕으로 양방전문의와 한방 의료진의 협진을 통하여 암을 진료하고 있습니다.<br>
                        고주파 온열 암치료, 셀레늄 항산화 요법 등 양방의 치료와 함께 온열요법, 약침, 한약 등의 한방 치료도 같이 받으실 수 있습니다. </p>
                </div>
                <div class="txt_box2 mt60">
                    <p class="txt_box_tit">면역 암치료를 통해 암 전이·재발을
                        방지하는 병원</p>
                    <p class="mt20">우리 몸에는 약 하루 3천~5천 개의 암세포가 생기는데 모든 사람이 암에 걸리지 않는 이유는
                        암과 싸워 이길 수 있는 힘, 면역력의 차이 때문입니다. <br>
                        소람한방병원은 항암 치료 효과를 높이고 암 세포를 퇴축, 억제시켜  전이, 재발을 방지하는 양한방 통합 ‘면역 암치료’를 시행하고 있습니다.
                    </p>
                </div>
            </div>
            <div class="img_txt_box1 img_txt_box2 mt60">
                <p class="img"><img src="/public/front/images/intro/img_hospital_03.jpg" alt=""/></p>
                <div class="txt_box2">
                    <p class="txt_box_tit">암 치료의 체계화,세계화에 앞장서는 병원 </p>
                    <p class="mt20">소람한방병원의 모든 의료진은 암 분야 최고 전문가가 되기 위해 논문 발표를 비롯한 학술 연구 활동과
                        더불어 미국 MD 앤더슨과 같은 세계 최고의 암 전문센터의 선진 의료기술을 벤치마킹 하고 있습니다.
                    </p>
                    <p class="mt30"><a href="/reference/thesis" class="bt_st6">연구 논문 보러가기 </a> <a href="/reference/better_change" class="bt_st6">치료 사례 보러가기  </a></p>
                </div>
            </div>
            <div class="txt_box2 mt40">
                <p class="txt_box_tit">항암 치료와 병행을 통해 항암 효과를 높여주는 병원  </p>
                <p class="mt20">소람한방병원에서는 항암, 방사선 치료 중 오게 되는 각종 부작용을 낮추고 항암 치료 효과를 높여 드립니다. </p>
            </div>
            <div class="img100 mt20"><img src="/public/front/images/intro/img_hospital_04.jpg" alt="" /></div>
            <div class="txt_box2 mt60">
                <p class="txt_box_tit">암 환자의 삶의 질을 향상시켜 주는 병원 </p>
                <p class="mt20">소람한방병원에서는 양한방 협진 방식의 면역 암치료를 통해 암 환자 분들의 삶의 질을 높여드리고 있습니다. </p>
            </div>
            <div class="img100 mt20"><img src="/public/front/images/intro/img_hospital_05.jpg" alt="" /></div>
            <p class="f_14 mt10">* 조사기관: 한국갤럽 / 조사기간: 2013. 12. 11~18(총 7일간) / 응답자수: 170명(1:1 개별면접) </p>


        </div>


    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->