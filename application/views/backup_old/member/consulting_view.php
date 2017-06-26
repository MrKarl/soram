<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="/"><span class="home"></span></a><a href="#">마이페이지</a>
        </div>
        <h3>마이페이지</h3>
        <div class="tab_menu_wrap tab_menu_st2">
            <ul>
                <li><a href="/member/modify" >내정보관리</a></li>
                <li class="on"><a href="javascript:tab_click('tab2_cont');">1:1상담관리</a></li>
            </ul>
        </div>
        <!--공지사항 view tab_cont-->
        <div class="tab_cont tab1_cont">
            <div class="viewpage_wrap mt40 ">
                <div class="title_box">
                    <p class="title2"><?=$result->CL_TTL?></p>
                    <p class="w_date f_roboto"><?=substr($result->CL_RGST_YMDT,0,10)?><span class="pl10"><?=substr($result->CL_RGST_YMDT,10,6)?></span></p>
                </div>
                <div class="view_cont">
                    <?=nl2br($result->CL_CONT)?>
                </div>

                <?if($result->CL_ANS_YN == "Y"):?>
                    <div class="answers_wrap">
                        <div class="title_box">
                            <p class="title">답변내용</p>
                            <p class="w_date f_roboto"><?=substr($result->CL_ANS_YMDT,0,10)?><span class="pl10"><?=substr($result->CL_ANS_YMDT,10,6)?></span></p>
                        </div>
                        <div class="answers_cont">
                            <?=nl2br($result->CL_ANS)?>
                        </div>
                    </div>
                <?endif?>
                <div class="btn_line mt20">
                    <a href="/member/consulting" class="btn_list f_roboto">LIST</a>
                    <div class="page_navi">
                        <?if($preview != ""):?>
                            <a href="/member/consulting_view?seq=<?=$preview?>" class="bt_prev">이전</a>
                        <?endif;?>
                        <?if($next != ""):?>
                            <a href="/member/consulting_view?seq=<?=$next?>" class="bt_next">다음</a>
                        <?endif;?>
                    </div>
                </div>
            </div>
        </div>
        <!--//공지사항 view tab_cont-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
