<!--비디오 필요 js css-->
<script type="text/javascript" src="/public/front/video/mediaelement-and-player.js"></script>
<link type="text/css" href="/public/front/video/mediaelementplayer.css" rel="stylesheet">
<!--비디오 필요 js css-->

<!--center_wrap -->
<div class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">홍보센터</a><a href="#">언론보도</a>
        </div>
        <h3>방송보도</h3>
        <!--언론보도 view-->
        <div class="viewpage_wrap mt40 ">
            <div class="title_box">
                <p class="title"><?=$result->BC_TTL?></p>
                <p class="w_date f_roboto"><?=$result->BC_RPRT_YMD?></p>
            </div>
            <!--비디오영역-->
            <div class="video_wrap mt40">
                <video  width="100%" height="100%"  poster="<?=$result->BC_MAIN_IMG?>">
                    <source type="video/mp4" src="<?=$result->BC_VOD_MP4?>" />
                    <object width="540" height="304" type="application/x-shockwave-flash" data="video/flashmediaelement.swf">
                        <param name="movie" value="video/flashmediaelement.swf" />
                        <param name="flashvars" value="controls=true&amp;file=<?=$result->BC_VOD_MP4?>" />
<!--                        <img src="images/intro/thumb_tv01.jpg" width="540" height="303" alt="No video playback capabilities" />-->
                    </object>

                </video>
                <script> // using jQuery
                    $('video,audio').mediaelementplayer(/* Options */);
                </script>

            </div>
            <!--//비디오영역-->
            <div class="view_cont">
                <?=$result->BC_CONT?>
            </div>
            <div class="btn_line mt20">
                <a href="/medical/tv?search_string=<?=$search_string?>&page=<?=$page?>" class="btn_list f_roboto">LIST</a>
                <div class="page_navi">
                    <?if ($preview != ""):?>
                    <a href="javascript:goLink('<?=$preview?>')" class="bt_prev">이전</a>
                    <?endif?>
                    <?if ($next != ""):?>
                    <a href="javascript:goLink('<?=$next?>')" class="bt_next">다음</a>
                    <?endif?>
                </div>
            </div>
        </div>
        <!--//언론보도 view-->
    </div>
</div>
<!--//center_wrap -->
<!--right_wrap -->
<div class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</div>
<!--//right_wrap -->
<script>
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
