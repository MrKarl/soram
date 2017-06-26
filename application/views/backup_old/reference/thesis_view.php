<!--center_wrap -->
<div class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="/"><span class="home"></span></a><a href="#">치료사례</a><a href="#">연구논문</a>
        </div>
        <h3>연구논문</h3>
        <!--논문 tab_cont-->
        <div class="tab_menu_wrap tab_menu_st2">
            <ul>
                <li class="on"><a href="javascript:tab_click('tab1_cont');" >소람한방병원논문</a></li>
                <li><a href="/reference/thesis?type=2">국제/국내논문</a></li>
            </ul>
        </div>
        <!--//논문 tab_cont-->
        <!--연구논문 발표view -->
        <div class="viewpage_wrap mt40">
            <div class="title_box">
                <p class="title2"><?=$result->title?></p>
            </div>
            <div class="view_cont">
                <div><?=$result->summary?></div>
                <?if($result->summary):?>
                <div class="mt20"><?=$result->content?></div>
                <?else:?>
                <?=$result->content?>
                <?endif;?>
                <div class="file_down mt20 line_right">
                    <?if($result->HWPfile):?>
                    <a href="<?=$result->HWPfile?>"  download><img src="/public/front/images/case/icon_hwp.png" /></a>
                    <?endif?>
                    <?if($result->Wordfile):?>
                    <a href="<?=$result->Wordfile?>"  download><img src="/public/front/images/case/icon_doc.png" /></a>
                    <?endif?>
                    <?if($result->PDFfile):?>
                    <a href="<?=$result->PDFfile?>"  download><img src="/public/front/images/case/icon_pdf.png" /></a>
                    <?endif?>
                </div>
            </div>
            <div class="btn_line mt20">
                <a href="/reference/thesis" class="btn_list f_roboto">LIST</a>
                <div class="page_navi">
                    <?if($preview != ""):?>
                        <a href="/reference/thesis_view?idx=<?=$preview?>" class="bt_prev">이전</a>
                    <?endif;?>
                    <?if($next != ""):?>
                        <a href="/reference/thesis_view?idx=<?=$next?>" class="bt_next">다음</a>
                    <?endif;?>
                </div>
            </div>
        </div>
        <!--//호전사례 view -->
    </div>
</div>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
