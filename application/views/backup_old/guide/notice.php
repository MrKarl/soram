<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="/"><span class="home"></span></a><a href="#">이용안내</a><a href="#">고객센터</a><a href="#">소람소식</a>
        </div>
        <h3>소람소식</h3>
        <div class="tab_menu_wrap tab_menu_st2">
            <ul>
                <li class="on"><a href="javascript:tab_click('tab1_cont');" >공지사항</a></li>
                <li><a href="./story">소람이야기</a></li>
            </ul>
        </div>
        <script type="text/javascript">
            function search() {
                $("#searchForm").submit();
            }
        </script>

        <!--공지사항 tab_cont-->
        <div class="tab_cont tab1_cont">
            <form id="searchForm" name="searchForm" action="" method="get">
                <div class="search_wrap_st2">
                    <select id="search_field" name="search_field">
                        <option value="all" <?=($search_field == 'all') ? 'selected': ''?>>전체</option>
                        <option value="NI_TTL" <?=($search_field == 'NI_TTL') ? 'selected' : ''?>>제목</option>
                        <option value="NI_CONT" <?=($search_field == 'NI_CONT') ? 'selected' : ''?>>내용</option>
                    </select>
                    <span class="input_box"><input type="text" id="search_string" name="search_string" value="<?=$search_string?>" placeholder="검색어를 입력하세요." /></span>
                    <a href="javascript:search()" class="bt_search" >검색</a>
                </div>
            </form>
            <table class="st_table1 mt10">
                <thead>
                <tr>
                    <th width="9%">번호</th>
                    <th width="71%">제목</th>
                    <th width="20%">등록일</th>
                </tr>
                </thead>
                <tbody>
                <?if( count($result) > 0 ):?>
                    <?foreach($result as $rows):?>
                        <tr>
                            <td><?=$cur_num?></td>
                            <td><div class="st_oneline"><a href="./notice_view?seq=<?=$rows["NI_SEQ"]?>"><?=$rows['NI_TTL']?><?if( floor((strtotime(date("Y-m-d"))-strtotime($rows['NI_RGST_YMDT']))/(60*60)) <= 52 ) {?><span class="icon_new">N</span><?}?></a></div></td>
                            <td class="write_date"><?=substr($rows['NI_RGST_YMDT'],0,10)?></td>
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
        <!--//공지사항 tab_cont-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->