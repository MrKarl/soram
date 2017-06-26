<script>
    <?if($this->session->userdata("MBR_ID") == ""):?>
    //loginPopup();
    <?endif?>
</script>
<!--비디오 필요 js css-->
<script type="text/javascript" src="/public/front/js/mediaelement-and-player.js"></script>
<link type="text/css" href="/public/front/css/mediaelementplayer.css" rel="stylesheet">
<!--비디오 필요 js css-->
<!--center_wrap -->
<div class="center_wrap center_bg">
    <div class="center_wrap_inner2">

        <?if ($type == "" && ($page == "" || $page == 1)):?>
    		<?
        	if ($this->session->userdata("MBR_ID") == "")
        	{
        	?>
        	 	<div class="center_img img100" style="position:relative;">
        	 		<?
        	 		if ($first_row->TT_STL_IMG != "")
        	 		{
        	 		?>
                  	  <img src="<?=$first_row->TT_STL_IMG?>" />
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
        	
            <?if (isset($main_vod->TT_VOD_MP4) || $main_vod->TT_VOD_MP4 != ""):?>
                <div class="video_wrap  movie_wrap">
                    <div class="movie_play" >
                        <video  width="100%" height="100%" poster="<?=$main_vod->TT_STL_IMG?>" controls="true">
                            <source type="video/mp4" src="<?=$main_vod->TT_VOD_MP4?>" />
                            <object width="540" height="304" type="application/x-shockwave-flash" data="video/flashmediaelement.swf">
                                <param name="movie" value="video/flashmediaelement.swf" />
                                <param name="flashvars" value="controls=true&amp;file=<?=$main_vod->TT_VOD_MP4?>" />
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
            <?elseif(isset($first_row->TT_SUB_IMG) && $first_row->TT_SUB_IMG != ""):?>

                <div class="center_img img100"><img src="<?=$first_row->TT_SUB_IMG?>" alt="" /></div>

            <?else:?>

                <div class="center_img img100"><img src="/public/front/images/img_defalt.jpg" alt="" /></div>
            <?endif?>
            
            <?
            }
            ?>

        <?else:?>
        	<?
        	if ($this->session->userdata("MBR_ID") == "")
        	{
        	?>
        		<div class="center_img img100" style="position:relative;">
	        	 	<?
	    	 		if ($first_row->TT_STL_IMG != "")
	    	 		{
	    	 		?>
		              	<img src="<?=$first_row->TT_STL_IMG?>" />
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
        	
            <?if (isset($first_row->TT_VOD_MP4) && $first_row->TT_VOD_MP4 != ""):?>
                <!--비디오영역-->
                <div class="video_wrap  movie_wrap">
                    <div class="movie_play" >
                        <video  width="100%" height="100%" poster="<?=$first_row->TT_STL_IMG?>">
                            <source type="video/mp4" src="<?=$first_row->TT_VOD_MP4 ?>" />
                            <object width="540" height="304" type="application/x-shockwave-flash" data="video/flashmediaelement.swf">
                                <param name="movie" value="video/flashmediaelement.swf" />
                                <param name="flashvars" value="controls=true&amp;file=<?=$first_row->TT_VOD_MP4 ?>" />
                                <!--                        <img src="/public/front/images/intro/thumb_tv01.jpg" width="540" height="303" alt="No video playback capabilities" />-->
                            </object>
                        </video>
                    </div>
                    <script> // using jQuery
                        $('video,audio').mediaelementplayer(/* Options */);
                    </script>
                </div>

            <?elseif(isset($first_row->TT_SUB_IMG) && $first_row->TT_SUB_IMG != ""):?>

                <div class="center_img img100"><img src="<?=$first_row->TT_SUB_IMG?>" alt="" /></div>

            <?else:?>

                <div class="center_img img100"><img src="/public/front/images/img_defalt.jpg" alt="" /></div>
            <?endif?>
            
            <?
            }
            ?>
        <?endif?>

    </div>
</div>
<!--//center_wrap -->
<!--right_wrap -->
<div class="right_wrap">
    <div class="right_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">치료사례</a><a href="#">호전사례</a>
        </div>
        <h3>호전사례</h3>
        <form id="searchForm" name="searchForm" action="" method="get">
            <input type="hidden" id="type" name="type" >
            <div class="search_wrap_st3 search_wrap_st4">
                <div class="bt_back"><a href="/reference/better_change_intro" >이전페이지</a></div>
                <span class="input_box"><input type="text" id="search_string" name="search_string" value="<?=$search_string?>" placeholder="검색어를 입력하세요." /></span>
                <a href="javascript:search()" class="bt_search" >검색</a>
            </div>
        </form>
        <!--공지사항 tab_cont-->
        <div class="tab_menu_wrap tab_menu_st4">
            <ul>
                <li class="<?=($type == '') ? 'on' : ''?>"><a href="javascript:search('')" >전체</a></li>
                <li class="<?=($type == 'BAABAAAC') ? 'on' : ''?>"><a href="javascript:search('BAABAAAC')">폐암</a></li>
                <li class="<?=($type == 'BAABAAFG') ? 'on' : ''?>"><a href="javascript:search('BAABAAFG')">유방암</a></li>
                <li class="<?=($type == 'BAABAAAA') ? 'on' : ''?>"><a href="javascript:search('BAABAAAA')">위암</a></li>
                <li class="<?=($type == 'BAABAAAD') ? 'on' : ''?>"><a href="javascript:search('BAABAAAD')">대장암</a></li>
                <li class="<?=($type == 'BAABAAAB') ? 'on' : ''?>"><a href="javascript:search('BAABAAAB')"><span>간/담/췌장암</span></a></li>
                <li class="<?=($type == 'etc') ? 'on' : ''?>"><a href="javascript:search('etc')">기타암</a></li>
            </ul>
        </div>
        <!--//공지사항 tab_cont-->
        <!-- 호전사례 리스트-->
        <div class="case_list_wrap mt40">



            <?if(count($result) > 0):?>

                <?
                $cnt = count($result);
                $i  = 0;
                $row_nem = 0;
                ?>
                <?if ($cnt > 0):?>
                    <?foreach($result as $rows):?>
                        <?if (floor($i%3) == 0):?>
                            <ul class="case_list">
                        <?endif?>
                        <li>
                            <div class="case_item">

                                <?if ($this->session->userdata("MBR_ID") == ""):?>
                                <a href="javascript:loginPopup();">

                                    <?else:?>
                                    <a href="/reference/better_change_view?seq=<?=$rows["TT_SEQ"]?>&type=<?=$type?>&search_string=<?=$search_string?>&page=<?=$page?>">

                                        <?endif?>

                                        <div class="img_face"><img src="<?=$rows["TT_THMB_IMG"]?>" alr=""/></div>
                                        <div class="txt_box3">
                                            <p>[<?=($rows["CC_NM"]) ? $rows['CC_NM'] : "기타"?>] <?=$rows["TT_NM"]?></p>
                                            <p class="txt"><?=$rows["TT_TTL"]?></p>
                                            <!--                                        <p class="txt">--><?//=$rows["TT_AFTER"]?><!--</p>-->
                                        </div>
                                    </a>

                            </div>
                        </li>
                        <?if (floor($i%3) > 1 || $cnt == 1):?>
                            </ul>
                        <?endif?>
                        <?$i++;$cnt--;?>
                    <?endforeach?>
                <?endif?>


            <?else:?>
                <ul class="case_list">
                    <div class="result_wrap" style="margin-top: 10px;">
                        <div class="no_result" >등록된 데이터가 없습니다. </div>
                    </div>
                </ul>

            <?endif?>





            <!--// 호전사례 리스트-->


            <!--// 호전사례 리스트-->
            <div class="page_wrap mt50 mb100">
                <?=$paging?>
            </div>




        </div>
</div>
<!--//right_wrap -->


<script>
    function search(type){
        $("#type").val(type);
        $("#searchForm").attr("action", location.href);
        $("#searchForm").submit();
    }
</script>

