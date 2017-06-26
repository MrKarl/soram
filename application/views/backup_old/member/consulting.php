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
        <script type="text/javascript">
            function search() {
                $("#searchForm").submit();
            }
        </script>

        <!--1:1상담 tab_cont2-->
        <div class="tab_cont tab2_cont">
            <form id="searchForm" name="searchForm" action="" method="get">
                <div class="search_wrap_st2 search_wrap_right">
                    <span class="input_box"><input type="text" id="search_string" name="search_string" value="<?=$search_string?>" placeholder="검색어를 입력하세요." /></span>
                    <a href="javascript:search()" class="bt_search" >검색</a>
                </div>
            </form>

            <table class="st_table1 st_table3 mt10">
                <colgroup>
                    <col width="*">
                    <col >
                    <col >
                </colgroup>
                <thead>
                <tr>
                    <th >제목</th>
                    <th style="width:15%;min-width:80px">등록일</th>
                    <th style="width:14%;min-width:60px;">답변여부</th>
                </tr>
                </thead>
                <tbody>
                <?if( count($result) > 0 ):?>
                    <?foreach($result as $rows):?>
                    <tr>
                        <td><a href="/member/consulting_view?seq=<?=$rows['CL_SEQ']?>"><?=$rows['CL_TTL']?></a></td>

                        <td><span class="f_roboto"><?=substr($rows['CL_RGST_YMDT'],0,10)?></span></td>
                        <td><span class="<?=($rows["CL_ANS_YN"] == "Y")? "icon_done" : "icon_doing" ?>"><?=($rows["CL_ANS_YN"] == "Y")? "답변완료" : "접수중" ?></span></td>
                    </tr>
                    <?endforeach?>
                <?else:?>
                    <tr>
                        <td colspan="3"><div class="no_result btn_line" >검색된 데이터가 없습니다. </div></td>
                    </tr>
                <?endif?>
                </tbody>
            </table>
            <div class="page_wrap mt50 mb100">
               <?=$paging?>
            </div>
        </div>
        <!--//1:1상담 tab_cont2-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
