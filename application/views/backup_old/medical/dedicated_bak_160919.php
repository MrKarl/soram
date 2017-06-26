
<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">의료진</a><a href="#">전체의료진</a>
        </div>
        <h3>전체의료진</h3>
        <h4>전체<span class="f_bold">의료진</span></h4>
        <div class="txt_box">환자 중심 진료를 통해 치료에 최선을 다하겠습니다.  </div>
        <div class="profile_wrap mt20">
            <div class="img_doctor_face img100">
                <?=(isset($first_row->STF_CENTER_IMG)? "<img src='" .$first_row->STF_CENTER_IMG . "' alt='전담의료진' />" : "")?>
                <div class="doctor_name">
                    <p class="txt_name f_myengjo"><?=(isset($first_row->STF_NM)? $first_row->STF_NM : "")?></p>
                    <p  class="doctor_position mt10"><?=(isset($first_row->STF_TYPE)? $this->common->getStaffCode($first_row->STF_TYPE) : "")?></p>
                </div>
            </div>
            <div class="prifile_slide_wrap">
                <div class="prifile_slide">
                    <?if (isset($first_row->STF_CAREER) && $first_row->STF_CAREER != ""):?>
                    <div class="slide">
                        <div class="profile_tit">약력</div>
                        <div class="txt_box2 mt40">
                            <?=nl2br($first_row->STF_CAREER)?>
                        </div>
                    </div>
                    <?endif?>

                    <?if (isset($first_row->STF_THESIS) && $first_row->STF_THESIS != ""):?>
                    <div class="slide">
                        <div class="profile_tit">논문</div>
                        <div class="txt_box2 mt40">
                            <?=nl2br($first_row->STF_THESIS)?>
                        </div>
                    </div>
                    <?endif?>
                    <?if (isset($first_row->STF_BC) && $first_row->STF_BC != ""):?>
                    <div class="slide">
                        <div class="profile_tit">방송</div>
                        <div class="txt_box2 mt40">
                            <?=nl2br($first_row->STF_BC)?>
                        </div>
                    </div>
                    <?endif?>
                </div>
            </div>

        </div>
        <script>
            $(document).ready(function ($) {
                //메인 슬라이드
                prifile_slide = $('.prifile_slide').bxSlider({
                    touchEnabled: true,
                    slideMargin: 0,
                    infiniteLoop:false,
                    hideControlOnEnd:true,
                    controls:true,
                    auto: false,
                    pager:true,
                    responsive: true,
                    autoHover:false,
                    speed: 1000
                });
            })
        </script>
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg3">
    <div class="right_wrap_inner ">

        <?
        $cnt = count($result);
        $i  = 0;
        ?>
        <?if ($cnt > 0):?>

        <?foreach($result as $rows):?>
        <?if ($i%2 == 0):?>
        <ul class="doctors_list">
        <?endif?>
            <li>
                <div class="doctor_item <?=($rows["STF_SEQ"] == $first_row->STF_SEQ)? "on" : ""?>">
                    <a href="/medical/dedicated?seq=<?=$rows["STF_SEQ"]?>">
                        <div class="doctor_img "><img src="<?=$rows["STF_STL_IMG"]?>" alt="전담의료진"/></div>
                        <div class="doctor_name_wrap">
                            <span class="doctor_name "><?=$rows["STF_NM"]?></span><span class="doctor_position"><?=$this->common->getStaffCode($rows["STF_TYPE"])?></span>
                        </div>
                    </a>
                </div>
            </li>
        <?if ($i%2 != 0):?>
        </ul>
        <?endif?>
        <?$i++;?>

        <?endforeach?>

        <?endif?>

    </div>
</section>
<!--//right_wrap -->