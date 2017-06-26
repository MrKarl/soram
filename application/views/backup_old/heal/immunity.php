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
            <a href="#"><span class="home"></span></a><a href="#">소람맞춤치료</a><a href="#">양방치료</a><a href="#">면역치료</a>
        </div>
        <h3>면역치료</h3>
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
        <div class="tit_img"><img src="/public/front/images/heal/tit_immunity_img.jpg" alt="면역치료" /></div>
        <div class="txt_box2">암환자 뿐만 아니라 정상적인 사람의 몸에도 하루 5000개 이상의 돌연변이 세포가 생겨납니다. 그럼에도 불구하고 암에 걸리지 않는 이유는 NK세포, T세포라고 하는 면역세포가 암 세포를 없애고 다니기 때문입니다. <br>
            면역치료는NK세포와 T세포를 자극 또는 활성화 시켜서 우리 몸의 면역력을 높이고 암세포를 감소시키는 차세대 암 치료법입니다. 
        </div>
        <h4>셀레늄 항산화 요법</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_Immunity_01.jpg" alt="셀레늄 항산화 요법" />
        </div>
        <div class="txt_box2">수술 및 항암 치료, 방사선 치료 후에는 우리 몸의 활성산소가 높아지면서 면역력이 떨어지고 질병에 취약해집니다.
            셀레늄 요법이란, 우리 몸의 활성산소를 제거해주고 항산화 작용이 뛰어난 무기질인 ‘셀레늄’을 주사하여 암 치료에 도움을 주는 요법입니다.
        </div>
        <div class="img100 mt40">
            <img src="/public/front/images/heal/img_Immunity_02.jpg" alt="항암 항산화 항염" />
        </div>
        <h5>셀레늄 항산화 요법 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>활성산소를 제거해 손상된 세포 회복을 돕습니다.  </li>
                <li>항암 치료 및 방사선 치료 효과를 높이고 부작용을 줄여줍니다. </li>
                <li>백혈구 생성을 촉진, 면역력을 높여줍니다. </li>
                <li>암세포의 성장을 억제하고 자연사멸을 유도합니다.</li>
                <li>염증을 제거하고 림프종 부종 완화에 도움이 됩니다.</li>
                <li>혈전을 제거하여 심혈관계 질환에 효과적입니다.</li>
            </ul>
        </div>
        <!--동영상2-->
        <div class="movie_wrap4 <?=( $media_result[1]['v_type'] == "1" ) ? "st_video" : ""?>">
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
        <h4>비타민요법</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_Immunity_03.jpg" alt="비타민요법 이미지" />
        </div>
        <div class="txt_box2">우리 몸에 필수적인 비타민, 미네랄을 주입하는 치료법으로 몸의 면역력을 증강시키고 항암으로 인한 통증이나
            부작용을 감소시켜 줍니다.</div>
        <h5>비타민요법 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>면역력을 높여줍니다.  </li>
                <li>암세포의 자연 사멸을 유도합니다.</li>
                <li>항암 부작용을 감소시켜 줍니다.</li>
                <li>기력 회복 및 수술 후 회복을 도와줍니다.</li>
                <li>식욕 부진 해소 효과가 있습니다.</li>
            </ul>
        </div>
        <h4>헤리주사</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_Immunity_04.jpg" alt="해리주사 이미지" />
        </div>
        <div class="txt_box2">인체의 면역을 담당하는 흉선에서 추출한 면역증강물질인 싸이모신 알파1을 몸속에 주입하여 T세포, NK세포를 활성화시키는 암 치료법입니다.
            또한 면역조절 세포 분비를 증가시켜 바이러스에 감염된 세포 및 종양세포를 파괴합니다.
        </div>
        <h5>헤리주사 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>면역력을 높여줍니다. </li>
                <li>암세포의 성장을 억제합니다.</li>
                <li>특별한 부작용이 보고되지 않았습니다.</li>
                <li>타 제제와 함께 사용이 가능합니다.</li>
            </ul>
        </div>
        <!--동영상3-->
        <div class="movie_wrap4 <?=( $media_result[2]['v_type'] == "1" ) ? "st_video" : ""?>">
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
        <h4>미슬토</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/heal/img_Immunity_05.jpg" alt="미술토 이미지" />
        </div>
        <div class="txt_box2">항암효과가 입증된 겨우살이 추출물인 미슬토 주사제를 인체에 주사하는 치료법으로, 보통 암 수술 전이나
            항암 치료 시작되기 전에 투여합니다. 정상세포는 손상시키지 않으면서도 암세포의 증식을 억제하고, 사멸하는 효과를 나타내는 것으로 밝혀 지고 있습니다.
        </div>
        <h5>미슬토 특징</h5>
        <div class="gray_box">
            <ul class="st_list2">
                <li>종양에 직접 주사하면 종양 퇴축 및 종양 억제 효과가 있습니다. </li>
                <li>방사선 치료 시 나타나는 부작용을 감소시켜 줍니다. </li>
                <li>암의 재발과 전이를 억제하는 효과가 있습니다.</li>
                <li>암 수술 전 및 수술 후 면역체계를 정상화 시켜줍니다. </li>
                <li>악성흉막삼출 및 흉수, 복수 억제 효과가 있습니다  </li>
            </ul>
        </div>
        <!--
                                <h4>이뮨셀(항암면역세포치료)</h4>
                                <div class="img100 mt20">
                                    <img src="/public/front/images/heal/img_Immunity_04.jpg" alt="이뮨셀 이미지" />
                                </div>
                                <div class="txt_box2">환자의 혈액에서 T세포만 추출 배양한 후 다시 몸 속에 투여해 암을 제거하는 치료법입니다.
                                    이미 MD 앤더슨, 존스 홉킨스 같은 세계적으로 유명한 암 전문 종합병원에서 시행하고 있으며 환자 자신의 혈액을 사용하기 때문에 부작용이 거의 없습니다.
                                </div>
                                <h5>이뮨셀(항암면역세포치료) 특징</h5>
                                <div class="gray_box">
                                    <ul class="st_list2">
                                        <li>수술 후 미세하게 남아 있는 잔존암을 제거합니다.  </li>
                                        <li>암의 재발율을 감소시켜 줍니다. </li>
                                        <li>암세포만을 공격하기 때문에 효과적입니다. </li>
                                        <li>다른 화학요법과 병행이 가능합니다. </li>
                                        <li>면역세포를 특수처리하여 항암능력을 극대화시킵니다. </li>
                                        <li>환자의 삶의 질이 높아집니다. </li>
                                    </ul>
                                </div>
                                <h4>면역 치료 프로그램 일정</h4>
                                <div class="heal_program_wrap mt40">
                                    <div class="program_item ">
                                        <ul class="ar_right">
                                            <li class="img"><img src="/public/front/images/heal/img_Immunity_circle_01.jpg" alt="치료이미지" /></li>
                                            <li class="txt">양의학, 한의학 박사와 상담 및 면역치료 처방(7일 면역력 상승, 혈액채취)</li>
                                        </ul>
                                    </div>
                                    <div class="program_item ar_right">
                                        <ul class="ar_right">
                                            <li class="img"><img src="/public/front/images/heal/img_Immunity_circle_02.jpg" alt="치료이미지" /></li>
                                            <li class="txt">강력한 항암능력 획들을 위한 처리</li>
                                        </ul>
                                    </div>
                                    <div class="program_item">
                                        <ul>
                                            <li class="img"><img src="/public/front/images/heal/img_Immunity_circle_02.jpg" alt="치료이미지" /></li>
                                            <li class="txt">약 2~3주간의 배양으로 항암면역 세포 치료제 조제(Immune-Cell)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="heal_program_wrap heal_program_wrap2">
                                    <div class="program_item ">
                                        <ul class="ar_left">
                                            <li class="img"><img src="/public/front/images/heal/img_Immunity_circle_04.jpg" alt="치료이미지" /></li>
                                            <li class="txt">국제안전기준에 따른 치료제 안정성과 효능 검사</li>
                                        </ul>
                                    </div>
                                    <div class="program_item ar_left">
                                        <ul class="ar_left">
                                            <li class="img"><img src="/public/front/images/heal/img_Immunity_circle_05.jpg" alt="치료이미지" /></li>
                                            <li class="txt">소람병원을 방문하여 항암면역세포 치료제 투여</li>
                                        </ul>
                                    </div>
                                </div>
        -->
    </div>
</section>
<!--//right_wrap -->