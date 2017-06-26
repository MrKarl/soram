<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">이용안내</a><a href="#">진료안내</a><a href="#">비급여 진료비</a>
        </div>
        <h3>비급여진료비</h3>
        <h4>제증명수수료</h4>
        <div class="img100 mt20">
            <img src="/public/front/images/guide/img_uninsured_01.jpg" alt="제증명수수료" />
        </div>

        <h4>비급여 진료비 정보 및 <span class="f_bold">조회방법</span></h4>
        <div class="txt_box">
            <ul class="st_list">
                <li>의료법 제 45조 제 1항 및 제 2항 시행규칙 제 42조의 2 제 1항 및 제 2항에 의하여 비급여 진료비용을 고지합니다.</li>
                <li>검색을 통해 원하시는 모든 비급여 항목을 확인하실 수 있으며, 검색어는 2자 이상 입력해 주시기 바랍니다.</li>
                <li>조회된 비급여 진료비용은 단일 개별 항목의 1회 비용이므로 진료과정에서 처방량에 따라 해당 항목의 비용이 달라질 수 있습니다.</li>
            </ul>
        </div>
        
		<form id="searchForm" name="searchForm" action="" method="get">
        <div class="search_wrap">
            <p class="title">항목명 조회</p>
            <div class="search_box">
                <input type="text" placeholder="검색어를 입력하세요." id="search_string"  name="search_string" value="<?=$search_string?>" /><a href="javascript:search()" class="bt_search">검색</a>
            </div>

        </div>
		</form>
		<table class="st_table1 mt10">
			<thead>
			<tr>
				<th width="80%">명칭</th>
				<th width="20%">금액</th>
			</tr>
			</thead>
			<tbody>
			<?if(count($result) > 0):?>
				<?foreach($result as $rows):?>
				<tr>
					<td><div class="st_oneline"><?=$rows['name']?></div></td>
					<td style="text-align: center;"><?=number_format($rows['price'])?>원</td>
				</tr>
				<?endforeach?>

			<?else:?>
				<tr>
					<td colspan="2"><div class="no_result btn_line" >검색된 데이터가 없습니다. </div></td>
				</tr>
			<?endif?>
			</tbody>
		</table>
		<?if(count($result) > 10):?>
		<div class="page_wrap mt50 mb100">
			<?=$paging?>
		</div>
        <?endif?>
    </div>
</section>

<script>
    function search(){
        $("#searchForm").attr("action", location.href);
        $("#searchForm").submit();
    }
</script>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->