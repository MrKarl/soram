<!--비디오 필요 js css-->
<script type="text/javascript" src="/public/front/js/mediaelement-and-player.js"></script>
<link type="text/css" href="/public/front/css/mediaelementplayer.css" rel="stylesheet">
<!--비디오 필요 js css-->
<!--center_wrap -->
<section class="center_wrap center_bg  ">
    <div class="center_wrap_inner2">
    	
    	
    	
    	
    	
        <?if (isset($result->PT_VOD_MP4) && $result->PT_VOD_MP4 != ""):?>
            <!--비디오영역-->
            <div class="video_wrap  movie_wrap">
                <div class="movie_play" >
                    <video  width="100%" height="100%"  >
                        <source type="video/mp4" src="<?=$result->PT_VOD_MP4 ?>" />
                        <object width="540" height="304" type="application/x-shockwave-flash" data="video/flashmediaelement.swf">
                            <param name="movie" value="video/flashmediaelement.swf" />
                            <param name="flashvars" value="controls=true&amp;file=<?=$result->PT_VOD_MP4 ?>" />
                            <!--                        <img src="/public/front/images/intro/thumb_tv01.jpg" width="540" height="303" alt="No video playback capabilities" />-->
                        </object>
                    </video>
                </div>
                <script> // using jQuery
                    $('video,audio').mediaelementplayer(/* Options */);
                </script>

            </div>

        <?elseif(isset($result->PT_STL_IMG) && $result->PT_STL_IMG != ""):?>

            <div class="center_img img100"><img src="<?=$result->PT_STL_IMG?>" alt="" /></div>
        <?endif?>
        
        
       

    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">치료사례</a><a href="#">호전사례 발표</a>
        </div>
        <h3>호전사례 발표</h3>
        <!--호전사례 발표view -->
        <div class="viewpage_wrap mt40">
            <div class="title_box">
                <p class="title one_line"><?=$result->PT_TTL?></p>
                <p class="w_date f_roboto"><?=$result->PT_RPRT_YMD?></p>
            </div>
            <div class="view_cont">
                <?=str_replace("&lt;" , "<" ,str_replace("&gt;" , ">" ,$result->PT_CONT))?>

            </div>
            <div class="btn_line mt20">
                <a href="/reference/announcement?&search_string=<?=$search_string?>&page=<?=$page?>" class="btn_list f_roboto">LIST</a>
                <div class="page_navi">
                    <?if ($preview != ""):?>
                        <a href="/reference/announcement_view?seq=<?=$preview?>&search_string=<?=$search_string?>&page=<?=$page?>" class="bt_prev">이전</a>
                    <?endif?>
                    <?if ($next != ""):?>
                        <a href="/reference/announcement_view?seq=<?=$next?>&search_string=<?=$search_string?>&page=<?=$page?>" class="bt_next">다음</a>
                    <?endif?>
                </div>
            </div>
        </div>
        <!--//호전사례 view -->
    </div>
</section>
<!--//right_wrap -->