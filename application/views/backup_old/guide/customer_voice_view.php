<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="/"><span class="home"></span></a><a href="#">이용안내</a><a href="#">고객센터</a><a href="#">고객의 소리</a>
        </div>
        <h3>고객의 소리</h3>
        <!--고객의 소리view -->
        <div class="viewpage_wrap mt40 st_answers">
            <div class="title_box">
                <p class="title one_line"><?=$result->TITLE?></p>
                <p class="w_date f_roboto"><?=substr($result->REGDATE,0,10)?><span class="pl10"><?=substr($result->REGDATE,10,6)?></span></p>
                <p class="answers_icon <?=($result->ANS_YN == "N") ? '' : 'done'?>"><?=($result->ANS_YN == "N") ? '접수중' : '답변완료'?></p>
            </div>
            <div class="view_cont">
                <p><?=nl2br($result->CONTENTS)?></p>
            </div>
            <?if($result->ANS_CONT) {?>
                <div class="answers_wrap">
                    <div class="title_box">
                        <p class="title">답변내용</p>
                        <p class="w_date f_roboto"><?=substr($result->REGDATE,0,10)?><span class="pl10"><?=substr($result->REGDATE,10,6)?></span></p>
                    </div>
                    <div class="answers_cont">
                        <p><?=nl2br($result->ANS_CONT)?></p>
                    </div>
                </div>
            <?}?>
            <div class="btn_line mt20">
                <a href="./customer_voice" class="btn_list f_roboto">LIST</a>
                <div class="page_navi">
<!--                    <a href="./customer_voice_view_prev?idx=--><?//=$result->IDX?><!--" class="bt_prev">이전</a>-->
<!--                    <a href="./customer_voice_view_next?idx=--><?//=$result->IDX?><!--" class="bt_next">다음</a>-->
                </div>
            </div>
        </div>
        <!--//고객의 소리 view -->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
