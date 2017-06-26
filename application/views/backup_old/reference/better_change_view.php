<!--비디오 필요 js css-->
<script type="text/javascript" src="/public/front/js/mediaelement-and-player.js"></script>
<link type="text/css" href="/public/front/css/mediaelementplayer.css" rel="stylesheet">
<!--비디오 필요 js css-->
<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">
        <?if (isset($result->TT_VOD_MP4) && $result->TT_VOD_MP4 != ""):?>
            <!--비디오영역-->
            <div class="video_wrap  movie_wrap">
                <div class="movie_play" >
                    <video  width="100%" height="100%" poster="<?=$result->TT_STL_IMG?>" controls="true">
                        <source type="video/mp4" src="<?=$result->TT_VOD_MP4 ?>" />
                        <object width="540" height="304" type="application/x-shockwave-flash" data="video/flashmediaelement.swf">
                            <param name="movie" value="video/flashmediaelement.swf" />
                            <param name="flashvars" value="controls=true&amp;file=<?=$result->TT_VOD_MP4 ?>" />
                            <!--                        <img src="/public/front/images/intro/thumb_tv01.jpg" width="540" height="303" alt="No video playback capabilities" />-->
                        </object>
                    </video>
                </div>
                <script> // using jQuery
                	$(document).ready(function(){
                		/* 
                			mediaelementplayer에 문제가 있음. 
                			이 부분을 실행하면 모바일에서 동영상 영역이 표시되지 않음 (피씨는 괜찮음)
                			플레이어를 제외시키고 html5 기본 플레이어로 전환함 - 2016. 10. 12 - 
                		*/
                    	//$('video,audio').mediaelementplayer(/* Options */);
                    });
                </script>

            </div>

        <?elseif(isset($result->TT_SUB_IMG) && $result->TT_SUB_IMG != ""):?>

            <div class="center_img img100"><img src="<?=$result->TT_SUB_IMG?>" alt="" /></div>
        <?else:?>

            <div class="center_img img100"><img src="/public/front/images/img_defalt.jpg" alt="" /></div>
        <?endif?>

    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">치료사례</a><a href="#">호전사례</a>
        </div>
        <h3>호전사례</h3>
        <!--호전사례 view -->
        <div class="viewpage_wrap mt40">
            <div class="title_box">
                <p class="title one_line"><?=$result->TT_TTL?></p>
                <p></p>
                <ul class="case_index">
                    <li><span>환자명</span> : <?=$result->TT_NM?></li>
                    <li><span>성별</span> : <?=($result->TT_GENDER == "F") ? "여" : "남"?></li>
                    <li><span>나이</span> : <?=$result->TT_AGE?>세</li>
                    <li><span>치료기간</span> : <?=$result->TT_TRTMT_PRD?></li>
                </ul>
            </div>
            <div class="view_cont">
                <p class="view_sub_tit"># 치료전</p>
                <div class="mt20">
                    <?=nl2br($result->TT_BEFORE)?>
                </div>
                <p class="view_sub_tit mt40"># 치료후</p>
                <div class="mt20">
                    <?=nl2br($result->TT_AFTER)?>
                </div>

                <?if(isset($result->TT_CT_IMG) && $result->TT_CT_IMG != ""):?>
                <div class="case_img max_img100 mt40"><img src="<?=$result->TT_CT_IMG?>" alt="치료전후" /></div>
                <?endif?>



            </div>
            <div class="btn_line mt20">
                <a href="/reference/better_change?type=<?=$type?>&search_string=<?=$search_string?>&page=<?=$page?>" class="btn_list f_roboto">LIST</a>
                <div class="page_navi">
                    <?if ($preview != ""):?>
                    <a href="/reference/better_change_view?seq=<?=$preview?>&type=<?=$type?>&search_string=<?=$search_string?>&page=<?=$page?>" class="bt_prev">이전</a>
                    <?endif?>
                    <?if ($next != ""):?>
                    <a href="/reference/better_change_view?seq=<?=$next?>&type=<?=$type?>&search_string=<?=$search_string?>&page=<?=$page?>" class="bt_next">다음</a>
                    <?endif?>
                </div>
            </div>
        </div>
        <!--//호전사례 view -->



    </div>
</section>
<!--//right_wrap -->