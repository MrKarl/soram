<!--비디오 필요 js css-->
<script type="text/javascript" src="/public/front/js/mediaelement-and-player.js"></script>
<link type="text/css" href="/public/front/css/mediaelementplayer.css" rel="stylesheet">
<!--비디오 필요 js css-->
<!--center_wrap -->
<section class="center_wrap center_bg">
    <div class="center_wrap_inner2">


		<?
		if ($this->session->userdata("MBR_ID") == "")
		{
		?>
		 	<div class="center_img img100" style="position:relative;">
		 		<?
		 		if ($first_row->PT_STL_IMG != "")
		 		{
		 		?>
	          	  <img src="<?=$first_row->PT_STL_IMG?>" />
	          	  <a href="javascript:loginPopup();"><img src="/public/front/images/video_cover.png" style="position:absolute; left:0; top:0; width:100%; height:100%;"></a>
	            <?
	            } else {
	            ?>
	            	<a href="javascript:loginPopup();"><img src="/public/front/images/video_cover.png"></a>
	            <?
	            }
	            ?>
	        </div>
		<?
		} else {
		?>

        <?if (isset($first_row->PT_VOD_MP4) && $first_row->PT_VOD_MP4 != ""):?>
            <!--비디오영역-->
            <div class="video_wrap  movie_wrap">
                <div class="movie_play" >
                    <video  width="100%" height="100%"  >
                        <source type="video/mp4" src="<?=$first_row->PT_VOD_MP4 ?>" />
                        <object width="540" height="304" type="application/x-shockwave-flash" data="video/flashmediaelement.swf">
                            <param name="movie" value="video/flashmediaelement.swf" />
                            <param name="flashvars" value="controls=true&amp;file=<?=$first_row->PT_VOD_MP4 ?>" />
                            <!--                        <img src="/public/front/images/intro/thumb_tv01.jpg" width="540" height="303" alt="No video playback capabilities" />-->
                        </object>
                    </video>
                </div>
                <script> // using jQuery
                    $('video,audio').mediaelementplayer(/* Options */);
                </script>

            </div>

        <?elseif(isset($first_row->PT_STL_IMG) && $first_row->PT_STL_IMG != ""):?>

            <div class="center_img img100"><img src="<?=$first_row->PT_STL_IMG?>" alt="" /></div>
        <?endif?>

        <!--//비디오영역-->
        <!--이미지
        <div class="center_img img100"><img src="/public/front/images/intro/img_part1_gallary_01.jpg" alt="" /></div>
        <!--//이미지-->
        
         <?
         }
         ?>


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
        <form id="searchForm" name="searchForm" action="" method="get">
        <div class="search_wrap_st3">
            <span class="input_box"><input type="text" id="search_string" name="search_string" value="<?=$search_string?>" placeholder="검색어를 입력하세요." /></span>
            <a href="javascript:search()" class="bt_search" >검색</a>
        </div>
        </form>
        <!-- 호전사례 리스트-->
        <div class="case_list_wrap mt10">

            <?if(count($result) > 0):?>

            <?
            $cnt = count($result);
            $i  = 0;
            ?>
            <?if ($cnt > 0):?>
            <?foreach($result as $rows):?>
            <?if (floor($i%3) == 0):?>
            <ul class="case_list">
            <?endif?>
                <li>
                    <div class="case_item">
                        <a href="/reference/announcement_view?seq=<?=$rows["PT_SEQ"]?>&search_string=<?=$search_string?>&page=<?=$page?>">
                            <div class="img_face"><img src="<?=$rows["PT_STL_IMG"]?>" alr=""/></div>
                            <div class="txt_box3">
                                <p><?=$rows["PT_RPRT_YMD"]?></p>
                                <p class="txt"><?=$rows["PT_TTL"]?></p>
                            </div>
                        </a>
                    </div>
                </li>
            <?if (floor($i%3) > 1):?>
             </ul>
            <?endif?>
            <?$i++;?>
            <?endforeach?>
            <?endif?>


            <?else:?>
            <ul class="case_list">
                <div class="result_wrap" style="margin-top: 10px;">
                    <div class="no_result" >등록된 데이터가 없습니다. </div>
                </div>
            </ul>

            <?endif?>
        </div>
        <!--// 호전사례 리스트-->
        <div class="page_wrap mt50 mb100">
            <?=$paging?>
        </div>



    </div>
</section>
<!--//right_wrap -->

<script>
    function search(){
        $("#searchForm").attr("action", location.href);
        $("#searchForm").submit();
    }
</script>
