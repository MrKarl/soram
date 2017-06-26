<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">이용안내</a><a href="#">고객센터</a><a href="#">1:1상담</a>
        </div>
        <h3><em class="f_roboto">1:1</em>상담</h3>
        <!--1_1상담 view -->
        <div class="viewpage_wrap mt40 st_answers">
            <div class="title_box">
                <p class="title2 one_line"><?=$result->CL_TTL?></p>
                <p class="w_date f_roboto"><?=substr($result->CL_RGST_YMDT,0,10)?><span class="pl10"><?=substr($result->CL_RGST_YMDT,10,6)?></span></p>
                <p class="answers_icon <?=($result->CL_ANS_YN == "Y") ? "done" : ""?>"><?=($result->CL_ANS_YN == "Y") ? "답변완료" : "접수중"?></p>
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
                <a href="/guide/consulting" class="btn_list f_roboto">LIST</a>
<!--                <div class="page_navi">-->
<!--                    <a href="#" class="bt_prev">이전</a>-->
<!--                    <a href="#" class="bt_next">다음</a>-->
<!--                </div>-->
            </div>

        </div>
        <!--//1_1상담 view -->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
