<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">홍보센터</a><a href="#">방송보도</a>
        </div>
        <h3>방송보도</h3>
        <!--방송보도 -->
        <div class="notice_list">
            <div class="search_wrap_st3">
                <form id="searchForm" name="searchForm" action="" method="get">
                    <span class="input_box"><input type="text" placeholder="검색어를 입력하세요." id="search_string" name="search_string" value="<?=$search_string?>"/></span>
                    <a href="javascript:search()" class="bt_search" >검색</a>
                </form>
            </div>
            <div class="tv_list_wrap mt10">

                <?foreach($result as $rows):?>
                <div class="tv_item">
                    <?if ($this->session->userdata("MBR_ID") == ""):?>
                    <a href="javascript:loginPopup();">
                    <?else:?>
                    <a href="javascript:goLink('<?=$rows['BC_SEQ']?>')">
                    <?endif;?>
                        <div class="img_news">
<!--                            <div class="bt_play"><img src="/public/front/images/intro/bt_play.png" alt="플레이" /></div>-->
                            <img src="<?=$rows['BC_MAIN_IMG']?>" alt="<?=$rows['BC_TTL']?>" />
                        </div>
                        <div class="news_txt">
                            <div class="tit"><p><?=$rows['BC_TTL']?></p></div>
                            <p class="txt"><?=$this->common->cutStr(strip_tags($rows['BC_CONT']) , 100)?></p>
                            <p class="tv_date f_roboto"><?=$rows['BC_RPRT_YMD']?></p>
                        </div>
                    </a>
                        
                </div>
                <?endforeach?>

            </div>

            <div class="page_wrap mt40 mb100">
                <?=$paging?>
            </div>
        </div>
        <!--//방송보도-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->

<script>
    function search(){
        $("#searchForm").attr("action", location.href);
        $("#searchForm").submit();
    }

    function goLink(seq){
        $.ajax({
            type: "POST",
            data: {"seq" : seq},
            url : "/medical/upCnt",
            success : function(result){
                if(result == true){
                    location.href="/medical/tv_view?seq="+seq+"&search_string=<?=$search_string?>&page=<?=$page?>";
                }
            }

        });
    }
</script>