<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="/"><span class="home"></span></a><a href="#">이용안내</a><a href="#">고객센터</a><a href="#">FAQ</a>
        </div>
        <h3><em class="f_roboto">FAQ</em></h3>

        <form id="searchForm" name="searchForm" action="" method="get">
        <input type="hidden" id="faq_type" name="faq_type" >
        <div class="tab_menu_wrap">
            <ul>
                <li <?=($faq_type == '') ? 'class="on"' : ''?>><a href="javascript:search('')">전체</a></li>
                <li <?=($faq_type == 'BAAAAAAA') ? 'class="on"' : ''?>><a href="javascript:search('BAAAAAAA')">치료효과</a></li>
                <li <?=($faq_type == 'BAAAAAAB') ? 'class="on"' : ''?>><a href="javascript:search('BAAAAAAB')">치료비용</a></li>
                <li <?=($faq_type == 'BAAAAAAC') ? 'class="on"' : ''?>><a href="javascript:search('BAAAAAAC')">진료상담</a></li>
            </ul>
        </div>

        <div class="search_wrap_st2 mt35">

            <select  name="search_field" id="search_field">
                <option value="all" <?=($search_field == 'all') ? 'selected': ''?>>전체</option>
                <option value="f.FAQ_TTL" <?=($search_field == 'f.FAQ_TTL') ? 'selected': ''?>>제목</option>
                <option value="f.FAQ_CONT" <?=($search_field == 'f.FAQ_CONT') ? 'selected': ''?>>내용</option>
            </select>
            <span class="input_box"><input type="text" id="search_string"  name="search_string" value="<?=$search_string?>"/></span>
            <a href="javascript:search('<?=$faq_type?>')" class="bt_search" >검색</a>

        </div>
        <?if(count($result) > 0):?>
        <div class="faq_list_wrap">

            <?foreach($result as $rows):?>
            <div class="faq_item">
                <div class="q_wrap"><span class="q_wrap_tit"><?=$rows['CC_NM']?></span><a href="#"><?=$rows['FAQ_TTL']?></a><a href="#" class="bt_ar">답변보기</a></div>
                <div class="a_wrap"><span class="a_wrap_tit">답변</span><?=$rows['FAQ_CONT']?></div>
            </div>
            <?endforeach?>

        </div>
        <?else:?>
        <div class="result_wrap" style="margin-top: 10px;">
            <div class="no_result" >등록된 데이터가 없습니다. </div>
        </div>
        <?endif?>

        <div class="page_wrap mt50 mb100">
            <?=$paging?>
        </div>

        </form>
    </div>
</section>

<script>
    function search(type){
        $("#faq_type").val(type);
        $("#searchForm").attr("action", location.href);
        $("#searchForm").submit();
    }
</script>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->