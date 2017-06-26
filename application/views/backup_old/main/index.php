<script>
    <?if($login_check == "Y" && $this->session->userdata("MBR_ID") == ""):?>
    loginPopup();
    <?endif?>
</script>


<!--center_wrap -->
<div class="center_wrap">
    <div class="main_slide">
        <?if (count($main)):?>
            <?foreach ($main as $rows):?>
            <div class="slide" onclick="location.href='<?=$rows['MI_LINK']?>'" style="cursor : pointer">
                <img src="<?=$rows['MI_IMG']?>" alt="메인 슬라이드" />
                <div class="txt_box">
                    <h5><?=nl2br($rows['MI_TTLS'])?></h5>
                    <p class="sub_title"><?=nl2br($rows['MI_SUB_TTL'])?></p>
                    <?if ($rows['MI_NML']):?>
                    <p class="case_name"><span><?=nl2br($rows['MI_NML'])?></span></p>
                    <?endif;?>
                    <?if ($rows['MI_LINK']):?>
                    <a href="<?=$rows['MI_LINK']?>" class="bt_detail">자세히 보기</a>
                    <?endif;?>
                    <div class="sub_title2"><?=nl2br($rows['MI_ITV'])?></div>
                </div>
            </div>
            <?endforeach;?>
        <?endif;?>
    </div>

</div>
<!--//center_wrap -->
<!--right_wrap -->
<div class="right_wrap">
    <div class="main_right_box">
        <div class="intro_doctor">
            <div class="img100"><img src="<?=$medical_banner->BN_IMG?>" /></div>
            <a href="<?=$medical_banner->BN_LINK?>">
                <div class="txt_box">
                    <p class="title"><?=$medical_banner->BN_TTL?></p>
                    <p class="subtitle"><?=nl2br($medical_banner->BN_CONT)?></p>
                </div>
            </a>
        </div>
        <div class="main_right_slide">
            <div class="txt_box">
                <p class="title">호전사례</p>
                <p class="subtitle">희망의 증거로 우뚝 선 환자분들이 전하는 호전이야기입니다.</p>
            </div>
            <ul class="case_slide">
                <?if (count($better)):?>
                <?foreach ($better as $rows):?>
                    <li>
                        <a href="<?=$rows['TI_LINK']?>"> <img src="<?=$rows['TI_IMG']?>" />
                            <div class="interview_info">
                                <div class="interview"><p><?=nl2br($rows['TI_ITV'])?></p></div>
                                <p class="info"><?=$rows['TI_NM']?>/<?=$rows['CC_NM']?></p>
                            </div>
                        </a>
                    </li>
                <?endforeach;?>
                <?endif;?>
            </ul>
        </div>
        <div class="hospital_news">
            <div class="news_box box1">
                <div class="img100"><img src="<?=$media_banner->BN_IMG?>" alt="방송" /></div>
                <a href="<?=$media_banner->BN_LINK?>">
                    <div class="txt_box">
                        <p class="title"><?=$media_banner->BN_TTL?></p>
                        <p class="subtitle"><?=nl2br($media_banner->BN_CONT)?></p>
                    </div>
                </a>
            </div>
            <div class="news_box box2">
                <div class="img100"><img src="<?=$apply_banner->BN_IMG?>" alt="책" /></div>
                <a href="<?=$apply_banner->BN_LINK?>">
                    <div class="txt_box">
                        <p class="title"><?=$apply_banner->BN_TTL?></p>
                        <p class="subtitle"><?=nl2br($apply_banner->BN_CONT)?></p>
                    </div>
                    <!--<p class="btn_go">신청하기</p>-->
                </a>
            </div>
        </div>
        <div class="main_right_menu">
            <ul>
                <li>
                    <div class="img100"><img src="public/front/images/icon_mainBottom1.png" alt="아이콘" /></div>
                    <a href="/guide/news_apply">무료도서신청</a>
                </li>
                <li>
                    <div class="img100"><img src="public/front/images/icon_mainBottom2.png" alt="아이콘" /></div>
                    <a href="/guide/map">오시는길</a>
                </li>
                <li>
                    <div class="img100"><img src="public/front/images/icon_mainBottom3.png" alt="아이콘" /></div>
                    <a href="/guide/care_system">진료안내</a>
                </li>
                <li>
                    <div class="img100"><img src="public/front/images/icon_mainBottom4.png" alt="아이콘" /></div>
                    <a href="/reference/thesis">연구논문</a>
                </li>
                <li>
                    <div class="img100"><img src="public/front/images/icon_mainBottom5.png" alt="아이콘" /></div>
                    <a href="/reference/circle">환우회</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//right_wrap -->
</div>


