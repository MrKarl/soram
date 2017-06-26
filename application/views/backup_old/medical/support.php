<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">의료진</a><a href="#">의료지원팀</a>
        </div>
        <h3>의료지원팀</h3>
        <div class="tab_menu_wrap tab_menu_st3">
            <ul>
                <li class="<?=($type == "FAAD") ? "on" : ""?>"><a href="/medical/support?type=FAAD" >의료지원</a></li>
                <li class="<?=($type == "FAAE") ? "on" : ""?>"><a href="/medical/support?type=FAAE">고객만족/지원실</a></li>
                <li class="<?=($type == "FAAG") ? "on" : ""?>"><a href="/medical/support?type=FAAG">조리실</a></li>
            </ul>
        </div>
        <!--의료지원 리스트-->
        <div class="tab_cont tab1_cont mt20">


                <? if($type != "FAAE"):?>

                    <?
                    $cnt = count($result);
                    $i  = 0;
                    ?>

                <?foreach($result as $rows):?>

                <?if ($i%2 == 0):?>
                <ul class="poeple_list">
                    <?endif?>


                <li>
                    <div class="people_item">
                        <div class="doctor_img "><img src="<?=$rows["STF_STL_IMG"]?>" alt="의료지원"/></div>
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
                <?else:?>




                <h4>고객만족실</h4>

                    <?
                    $cnt = count($result);
                    $i  = 0;
                    ?>

                    <?foreach($result as $rows):?>

                        <?if ($i%2 == 0):?>
                            <ul class="poeple_list <?if ($i == 0):?> mt20 <?endif?>">
                        <?endif?>

                    <li>
                        <div class="people_item">
                            <div class="doctor_img "><img src="<?=$rows["STF_STL_IMG"]?>" alt="의료지원"/></div>
                            <div class="doctor_name_wrap">
                                <span class="doctor_name "><?=$rows["STF_NM"]?></span><span class="doctor_position"><?=$this->common->getStaffCode($rows["STF_TYPE"])?></span>
                            </div>
                        </div>
                    </li>

                        <?if ($i%2 != 0):?>
                            </ul>
                        <?else:?>

                        <?$last = 1;?>
                        <?endif?>
                        <?$i++;?>

                    <?endforeach?>
                    <?=($last ==  1 )? "</ul>" : "";?>
                <h4>고객지원실</h4>


                    <?
                    $cnt = count($result);
                    $i  = 0;
                    ?>

                    <?foreach($result2 as $rows):?>

                    <?if ($i%2 == 0):?>
                    <ul class="poeple_list <?if ($i == 0):?> mt20 <?endif?> ">
                        <?endif?>

                    <li>
                        <div class="people_item">
                            <div class="doctor_img "><img src="<?=$rows["STF_STL_IMG"]?>" alt="의료지원"/></div>
                            <div class="doctor_name_wrap">
                                <span class="doctor_name "><?=$rows["STF_NM"]?></span><span class="doctor_position"><?=$this->common->getStaffCode($rows["STF_TYPE"])?></span>
                            </div>
                        </div>
                    </li>
                        <?if ($i%2 != 0):?>
                            </ul>
                        <?else:?>

                            <?$last2 = 1;?>
                        <?endif?>
                        <?$i++;?>

                    <?endforeach?>
                    <?=($last2 ==  1 )? "</ul>" : "";?>



                <?endif?>
            </ul>
        </div>
        <!--//의료지원 리스트-->
<!--        <!--고객만족/지원실 리스트-->
<!--        <div class="tab_cont tab2_cont hide">-->
<!--            <h4>고객만족실</h4>-->
<!--            <ul class="poeple_list mt40">-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_01.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">고소진</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_02.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">김예슬</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_03.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">노강진</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_04.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">박승희</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_05.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">양지혜</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_06.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">이윤미</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <h4>고객지원실</h4>-->
<!--            <ul class="poeple_list mt40">-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_07.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">전종성</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_08.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">박종용</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_09.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">손창원</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part2_support_10.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">홍성철</span><span class="doctor_position">매니저</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <!--//고객만족/지원실 리스트-->
<!--        <!--조리실 리스트-->
<!--        <div class="tab_cont tab3_cont">-->
<!--            <ul class="poeple_list mt20">-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part3_support_01.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">이효은</span><span class="doctor_position">총괄셰프</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part3_support_02.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">김관일</span><span class="doctor_position">셰프</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part3_support_03.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">김규원</span><span class="doctor_position">셰프</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part3_support_04.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">김대현</span><span class="doctor_position">셰프</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part3_support_05.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">이지은</span><span class="doctor_position">영양사</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part3_support_06.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">윤명애</span><span class="doctor_position">조리사</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part3_support_07.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">윤영숙</span><span class="doctor_position">조리사</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="people_item">-->
<!--                        <div class="doctor_img "><img src="/public/front/images/intro/img_part3_support_08.jpg" alt="의료지원"/></div>-->
<!--                        <div class="doctor_name_wrap">-->
<!--                            <span class="doctor_name ">조금애</span><span class="doctor_position">조리사</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <!--//조리실 리스트-->

    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer();?>
</section>
<!--//right_wrap -->