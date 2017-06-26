<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">치료사례</a><a href="#">연구논문</a>
        </div>
        <h3>연구논문</h3>
        <!--논문 tab_cont-->
        <div class="tab_menu_wrap tab_menu_st2">
            <ul>
                <li class="<?=($type == '') ? 'on' : ''?>"><a href="/reference/thesis?type=" >소람한방병원논문</a></li>
                <li class="<?=($type == '2') ? 'on' : ''?>"><a href="/reference/thesis?type=2">국제/국내논문</a></li>
            </ul>
        </div>
        <!--//논문 tab_cont-->

        <? if ($type == ""):?>
        <!--tab1_cont-->
        <div class="tab_cont tab1_cont">
            <div class="thesis_list2 mt40">
                <table class="st_table2 mt10">
                    <tbody>
                    <colgroup>
                        <col style="width:10%;">
                        <col style="width:15%;min-width:80px;vertical-align: top;text-align: center;">
                        <col  >
                    </colgroup>

                    <?foreach($result as $rows):?>
                    <tr>
                        <td><?=$cur_num?></td>
                        <?if($rows['thumbnail_src']):?>
                        <td><div class="img100"><a href="/reference/thesis_view?idx=<?=$rows['idx']?>"><img src="<?=$rows['thumbnail_src']?>" alt="논문"/></a></div></td>
                        <?else:?>
                        <td><div class="img100"><a href="/reference/thesis_view?idx=<?=$rows['idx']?>""><img src="/public/front/images/reference/defalt_thesis.jpg" alt="논문"/></a></div></td>
                        <?endif;?>
                        <td class="thesis_detail">
                            <a href="/reference/thesis_view?idx=<?=$rows['idx']?>"">
                                <?=$rows['title']?>
                                <p class="txt_writer">저자 : <?=$rows['writer']?></p>
                                <p class="txt_writer">단체 : <?=$rows['writerBook']?></p>
                            </a>
                            <div class="file_down">
                                <?if($rows['HWPfile']):?>
                                    <a href="<?=$rows['HWPfile']?>"  download><img src="/public/front/images/case/icon_hwp.png" /></a>
                                <?endif?>
                                <?if($rows['Wordfile']):?>
                                    <a href="<?=$rows['Wordfile']?>"  download><img src="/public/front/images/case/icon_doc.png" /></a>
                                <?endif?>
                                <?if($rows['PDFfile']):?>
                                    <a href="<?=$rows['PDFfile']?>"  download><img src="/public/front/images/case/icon_pdf.png" /></a>
                                <?endif?>
                            </div>
                        </td>
                    </tr>

                        <?$cur_num--?>
                        <?$row_cnt++;?>
                    <?endforeach?>
                    </tbody>
                </table>

            </div>
        </div>
        <!--//tab1_cont-->

        <?else:?>

        <!--tab1_cont-->
        <div class="tab_cont tab2_cont">
            <div class="thesis_list mt40">
                <table class="st_table2 mt10">
                    <tbody>
                    <colgroup>
                        <col style="width:10%;">
                        <col>

                    </colgroup>

                    <?foreach($result as $rows):?>
                    <tr>
                        <td><?=$cur_num?></td>
                        <td><?=$rows['title']?>
                            <p class="txt_writer">저자 : <?=$rows['writer']?></p>
                            <p class="txt_writer">단체 : <?=$rows['journal']?></p>
                        </td>

                    </tr>
                        <?$cur_num--?>
                        <?$row_cnt++;?>
                    <?endforeach?>
                    </tbody>
                </table>

            </div>

        <?endif?>
        <div class="page_wrap mt50 mb100">
            <?=$paging?>
        </div>


    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->