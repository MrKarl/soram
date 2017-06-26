<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="/"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">홍보센터</a><a href="#">언론보도</a>
        </div>
        <h3>언론보도</h3>
        <script type="text/javascript">
            function search() {
                $("#searchForm").submit();
            }
        </script>
        <!--언론보도 -->
        <div class="notice_list">
            <form id="searchForm" name="searchForm" action="" method="get">
                <div class="search_wrap_st3">
                    <span class="input_box"><input type="text" id="search_string" name="search_string" value="<?=$search_string?>" placeholder="검색어를 입력하세요." /></span>
                    <a href="javascript:search()" class="bt_search" >검색</a>
                </div>
            </form>
            <table class="st_table1 mt10">
                <thead>
                <tr>
                    <th width="9%">번호</th>
                    <th width="71%">제목</th>
                    <th width="20%">보도일</th>
                </tr>
                </thead>
                <tbody>
                <?if( count($result) > 0 ):?>
                    <?foreach($result as $rows):?>
                    <tr>
                        <td><?=$cur_num?></td>
                        <td><div class="st_oneline"><a href="./media_view?seq=<?=$rows['RT_SEQ']?>&search_string=<?=$search_string?>&page=<?=$page?>"><?=$rows['RT_TTL']?><?if(floor((strtotime(date("Y-m-d"))-strtotime($rows['RT_RGST_YMDT']))/(60*60)) <= 52 ) {?><span class="icon_new">N</span><?}?></a></div></td>
                        <td class="write_date"><?=$rows['RT_RPRT_YMD']?></td>
                    </tr>
                    <?$cur_num--?>
                    <?$row_cnt++?>
                    <?endforeach?>
                <?else:?>
                    <tr>
                        <td colspan="3"><div class="no_result btn_line" >검색된 데이터가 없습니다. </div></td>
                    </tr>
                <?endif?>
                </tbody>
            </table>
            <div class="page_wrap mt40 mb100">
                <?=$paging?>
            </div>
        </div>
        <!--//언론보도-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
