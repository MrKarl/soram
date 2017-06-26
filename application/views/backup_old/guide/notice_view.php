<!--비디오 필요 js css-->
<script type="text/javascript" src="/public/front/video/mediaelement-and-player.js"></script>
<link type="text/css" href="/public/front/video/mediaelementplayer.css" rel="stylesheet">
<!--비디오 필요 js css-->

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
                <li><a href="/guide/story">소람이야기</a></li>
            </ul>
        </div>
        <!--공지사항 view tab_cont-->
        <div class="tab_cont tab1_cont">
            <div class="viewpage_wrap mt40 ">
                <div class="title_box">
                    <p class="title"><?=$result->NI_TTL?></p>
                    <p class="w_date f_roboto"><?=substr($result->NI_RGST_YMDT,0,10)?></p>
                </div>
                <!--비디오영역-->
                <?if($result->NI_VOD_MP4):?>
                <div class="video_wrap mt40">
                    <video  width="100%" height="100%">
                        <source type="video/mp4" src="<?=$result->NI_VOD_MP4?>" />
                        <object width="540" height="304" type="application/x-shockwave-flash" data="video/flashmediaelement.swf">
                            <param name="movie" value="video/flashmediaelement.swf" />
                            <param name="flashvars" value="controls=true&amp;file=<?=$result->NI_VOD_MP4?>" />
                            <!--                        <img src="images/intro/thumb_tv01.jpg" width="540" height="303" alt="No video playback capabilities" />-->
                        </object>

                    </video>
                    <script> // using jQuery
                        $('video,audio').mediaelementplayer(/* Options */);
                    </script>

                </div>
                <?endif;?>
                <!--//비디오영역-->
                <div class="view_cont"><?=$result->NI_CONT?>
                </div>
                <div class="btn_line mt20">
                    <a href="/guide/notice" class="btn_list f_roboto">LIST</a>
                    <div class="page_navi">
                        <?if($preview != ""):?>
                        <a href="/guide/notice_view?seq=<?=$preview?>" class="bt_prev">이전</a>
                        <?endif;?>
                        <?if($next != ""):?>
                        <a href="/guide/notice_view?seq=<?=$next?>" class="bt_next">다음</a>
                        <?endif;?>
                    </div>
                </div>
            </div>
        </div>
        <!--//공지사항 view tab_cont-->
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
