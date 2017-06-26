<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">홍보센터</a><a href="#">언론보도</a>
        </div>
        <h3>언론보도</h3>
        <!--언론보도 view-->
        <div class="viewpage_wrap mt40 ">
            <div class="title_box">
                <p class="title"><?=$result->RT_TTL?></p>
                <p class="w_date f_roboto"><?=$result->RT_RPRT_YMD?></p>
            </div>
            <div class="view_cont"><?=$result->RT_CONT?>
                <?if($result->RT_URL) {?>
                <!--뉴스링크-->
                <div class="news_link_wrap">
                    <p class="news_link_tit"><span>기사바로보기</span></p>
                    <p class="news_line_url"><a href="<?=$result->RT_URL?>" target="_blank"><?=$result->RT_URL?></a></p>
                </div>
                <!--//뉴스링크-->
                <?}?>
            </div>
            <div class="btn_line mt20">
                <a href="/medical/media?search_string=<?=$search_string?>&page=<?=$page?>" class="btn_list f_roboto">LIST</a>
                <div class="page_navi">
                    <?if($preview != ""):?>
                    <a href="/medical/media_view?seq=<?=$preview?>" class="bt_prev">이전</a>
                    <?endif?>
                    <?if($next != ""):?>
                    <a href="/medical/media_view?seq=<?=$next?>" class="bt_next">다음</a>
                    <?endif?>
                </div>
            </div>
        </div>
        <!--//언론보도 view-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
