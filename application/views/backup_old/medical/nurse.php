
<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">의료진</a><a href="#">전담간호사</a>
        </div>
        <h3>전담간호사</h3>
        <div class="tab_menu_wrap tab_menu_st2">
            <ul>
                <li class="<?=($type == "FAAC") ? "on" : ""?>"><a href="/medical/nurse?type=FAAC">치료실</a></li>
                <li class="<?=($type == "FAAB") ? "on" : ""?>"><a href="/medical/nurse?type=FAAB" >병동</a></li>
            </ul>
        </div>
        <!--병동간호사 리스트-->
        <div class="tab_cont tab1_cont mt40">





            <?
            $cnt = count($result);
            $i  = 0;
            ?>
            <?if ($cnt > 0):?>

                <?foreach($result as $rows):?>
                    <?if ($i%2 == 0):?>
                        <ul class="poeple_list">
                    <?endif?>
                    <li>
                        <div class="people_item">
                            <div class="doctor_img "><img src="<?=$rows["STF_STL_IMG"]?>" alt="전담간호사병동"/></div>
                            <div class="doctor_name_wrap">
                                <span class="doctor_name "><?=$rows["STF_NM"]?></span><span class="doctor_position"><?=$this->common->getStaffCode($rows["STF_TYPE"])?></span>
                            </div>
                        </div>
                    </li>
                    <?if ($i%2 != 0):?>
                        </ul>
                    <?endif?>
                    <?$i++;?>

                <?endforeach?>

            <?endif?>




        </div>
        <!--//병동간호사 리스트-->


    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
