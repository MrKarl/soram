<script>
    $(document).ready(function(){
        $('.pop_close3 ').click(function(){
            $('.pop_profile_wrap3').addClass('hide');
			$('.doctors_list3').removeClass('hide');
        });
    });
</script>
<!--doctor_list_wrap -->
<section class="doctor_list_wrap">
    <div class="doctor_list_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">소람한방병원</a><a href="#">의료진</a><a href="#">전담의료진</a>
        </div>
        <h3>전담의료진</h3>
        <h4 class="doctor_title">전담<b>의료진</b><span>21명의 전문의료진 <b>양 · 한방진료</b></span></h4>
        <?
        $cnt = count($result);
        $i  = 0;
        ?>
        <?if ($cnt > 0):?>

            <div class="doctors_list3 <?=($seq == "") ? "" : "hide"?>">
				<ul>
				<?foreach($result as $rows):?>               
					<li>
						<div class="doctor_item">
							<a href="/medical/dedicated?seq=<?=$rows["STF_SEQ"]?>">
								<div class="doctor_name_wrap">
									<p><span class="doctor_name"><?=$rows["STF_NM"]?></span><span class="doctor_position"><?=$this->common->getStaffCode($rows["STF_TYPE"])?></span></p>
								</div>
								<div class="doctor_img"><img src="<?=$rows["STF_STL_IMG"]?>" alt="전담의료진"/></div>								
							</a>
						</div>
					</li>                
                <?$i++;?>
				<?endforeach?>
				</ul>
			</div>
        <?endif?>
		
       
    </div>
    <!--팝업 프로필-->
    <div class="pop_profile_wrap3 <?=($seq == "") ? "hide" : ""?>">		
        <a href="" class="btn_prev"><img src="/public/front/images/medical/btn_prev.png" alt="이전"/></a>
		<a href="" class="btn_next"><img src="/public/front/images/medical/btn_next.png" alt="다음"/></a>
		<div class="profile_wrap3">
            <div class="pop_close3"><img src="/public/front/images/intro/close.png" alt="닫기" /></div>
            <div class="img_doctor_face2">
                <?=(isset($first_row->STF_CENTER_IMG)? "<img src='" .$first_row->STF_CENTER_IMG . "' alt='전담의료진' class='img' />" : "")?>
                <div class="doctor_name2">
                    <p class="txt_name"><?=(isset($first_row->STF_NM)? $first_row->STF_NM : "")?></p>
                    <p  class="doctor_position"><?=(isset($first_row->STF_TYPE)? $this->common->getStaffCode($first_row->STF_TYPE) : "")?></p>
                </div>
            </div>
            <div class="profile_list_wrap">               
				<?if (isset($first_row->STF_CAREER) && $first_row->STF_CAREER != ""):?>
					<div class="slide">
						<div class="profile_tit">약력</div>
						<div class="txt_box2">
							<?=nl2br($first_row->STF_CAREER)?>
						</div>
					</div>
				<?endif?>

				<?if (isset($first_row->STF_THESIS) && $first_row->STF_THESIS != ""):?>
					<div class="slide">
						<div class="profile_tit">논문</div>
						<div class="txt_box2">
							<?=nl2br($first_row->STF_THESIS)?>
						</div>
					</div>
				<?endif?>
				<?if (isset($first_row->STF_BC) && $first_row->STF_BC != ""):?>
					<div class="slide">
						<div class="profile_tit">방송</div>
						<div class="txt_box2">
							<?=nl2br($first_row->STF_BC)?>
						</div>
					</div>
				<?endif?>
            </div>
			
        </div>
    </div>
    <!--//팝업 프로필-->
</section>
<!--//doctor_list_wrap -->

