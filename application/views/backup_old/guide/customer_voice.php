<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">이용안내</a><a href="#">고객센터</a><a href="#">고객의 소리</a>
        </div>
        <h3>고객의 소리</h3>
        <form id="searchForm" name="searchForm" action="" method="get">
        <div class="search_wrap_st2">
            <select  name="search_field" id="search_field">
                <option value="all" <?=($search_field == 'all') ? 'selected': ''?>>전체</option>
                <option value="UID" <?=($search_field == 'UID') ? 'selected': ''?>>작성자</option>
                <option value="TITLE" <?=($search_field == 'TITLE') ? 'selected': ''?>>제목</option>
                <option value="CONTENTS" <?=($search_field == 'CONTENTS') ? 'selected': ''?>>내용</option>
            </select>
            <span class="input_box"><input type="text"  id="search_string"  name="search_string" value="<?=$search_string?>"/></span>
            <a href="javascript:search()" class="bt_search" >검색</a>
        </div>
        </form>
        <table class="st_table1 st_table3 mt10">
            <tr>
                <th width="*">제목</th>
                <th width="18%">작성자</th>
                <th width="15%">등록일</th>
                <th width="12%">답변여부</th>
            </tr>
            <tbody>
            <?if(count($result) > 0):?>
                <?foreach($result as $rows):?>
            <tr>
                <td>
                    <?if ($this->session->userdata("MBR_ID") == ""):?>
                    <a href="javascript:loginPopup();"><?=$rows['TITLE']?></a>
                    <?else:?>
                    <a href="./customer_voice_view?idx=<?=$rows['IDX']?>"><?=$rows['TITLE']?></a>
                    <?endif?>
                </td>
                <td><?=$rows['UID']?></td>
                <td><span class="f_roboto"><?=substr($rows['REGDATE'] , 0 ,10)?></span></td>
                <td><span class="<?=($rows["ANS_YN"] == "N") ? 'icon_doing' : 'icon_done'?>"><?=($rows["ANS_YN"] == "N") ? '접수중' : '답변완료'?></span></td>
            </tr>
                <?endforeach?>
            <?else:?>
            <tr>
                <td colspan="4">
                    <div class="no_result btn_line" >등록된 데이터가 없습니다. </div>
                </td>
            </tr>
            <?endif;?>

            </tbody>
        </table>
        <div class="page_wrap mt50 mb100">
            <?=$paging?>
        </div>
        <div class="write_box">
            <span>자유롭게 게시물을 등록해주세요.</span>
            <?if ($this->session->userdata("MBR_ID") == ""):?>
                <a href="javascript:loginPopup();" class="bt_st bt_regist2">등록</a>

            <?else:?>
                <a href="./customer_voice_write" class="bt_st bt_regist2">등록</a>
            <?endif?>

        </div>


    </div>
</section>

<script>
    function search(){
        $("#searchForm").attr("action", location.href);
        $("#searchForm").submit();
    }
</script>

<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->