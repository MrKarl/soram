
<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">이용안내</a><a href="#">고객센터</a><a href="#">1:1 상담</a>
        </div>
        <h3><em class="f_roboto">1:1</em>상담</h3>

        <!-- 상담하기 입력 FORM -->
        <h4 class="mt40">상담<span class="f_bold">하기</span></h4>
        <div class="txt_box f_333">
            <span class="f_500">고객의 궁금증을 1:1로 상담해 드립니다.</span> 소람한방병원에 대한 모든 궁금한 사항을 빠르게 답변하여 편리한 병원이용이 되도록 노력하겠습니다.
        </div>
        <form>
            <table class="st_table2 mt15" summary="이 표는 1:1문의하기로 소람병원에 궁금한점을 문의합니다." width="100%">
                <colgroup>
                    <col style="width:24%;">
                    <col style="width:76%;">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">제목</th>
                    <td>
                    	<!--<input type="text" id="CL_TTL" class="st_input2"/>-->
                    	<select id="CL_TTL" class="st_input2">
                    		<option value="">제목을 선택해주세요.</option>
                    		<option value="진료문의">진료문의</option>
                    		<option value="예약문의">예약문의</option>
                    		<option value="입,퇴원문의">입,퇴원문의</option>
                    		<option value="비용문의">비용문의</option>
                    		<option value="기타문의">기타문의</option>
                    	</select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">작성자</th>
                    <td><input type="text" id="CL_NM" class="st_input2"/> </td>
                </tr>
                <tr>
                    <th scope="row">비밀번호</th>
                    <td><input type="password" id="CL_PWD" class="st_input2" maxlength="10"/> </td>
                </tr>
                <tr>
                    <th scope="row" class="wbg"><label for="cust_tel">휴대폰</label></th>
                    <td class="customer_mobile">
                        <select name="cust_tel" id="cust_tel" title="핸드폰첫자리">
                            <option value=""> 선택 </option>
                            <option value="010" selected=""> 010 </option>
                            <option value="011"> 011 </option>
                            <option value="016"> 016 </option>
                            <option value="017"> 017 </option>
                            <option value="018"> 018 </option>
                            <option value="019"> 019 </option>
                        </select><span class="bar"></span>
                        <input name="wrtr_tel" type="text" id="cust_tel2" maxlength="4" ><span class="bar"></span>
                        <input name="wrtr_tel" type="text" id="cust_tel3" maxlength="4" >
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="st_top"><label >문의 내용</label></th>
                    <td>
                        <div><textarea class="q_cont" id="CL_CONT"></textarea></div>

                    </td>
                </tr>
                <tr>
                    <th scope="row" class="st_top">개인정보<br />제공에 대한동의</th>
                    <td>
                        <div class="privacy_txt">
                            입력하신 고객님의 개인정보는 병원 의료서비스 제공을 위해서만 사용됩니다.각종 의료서비스 제공을 위해 이름, 주소, 전화번호, 휴대폰 번호를 수집하고 있으며 서비스 제공 후 지체없이 파기 합니다.
                        </div>
                        <p class="privacyCheck_box mt10">
                            <input type="checkbox" id="privacy_check" name="privacy_check"> <label for="privacy_check">개인정보 제공에 동의합니다.</label>
                        </p>

                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        
        <?
			$mobilechk = '/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/i';					
			// 모바일 접속인지 PC로 접속했는지 체크합니다.
			if(preg_match($mobilechk, $_SERVER['HTTP_USER_AGENT'])) {
				$is_mobile = "Y";
			}else{
				$is_mobile = "N";
			}
		//모바일		
		?>
		
        <p class="btn_line mt40"><a href="javascript:<?=($is_mobile == "Y")? "AM_PL('/tracking/consulting');": "_PL('http://www.soram.kr/tracking/consulting');
"?>check()" class="bt_st4 ">등록</a></p>
        <!--// 상담하기 입력 FORM -->
        <script>
            function check(){
                var CL_TTL          = $.trim($('#CL_TTL').val());
                var CL_NM           = $.trim($('#CL_NM').val());
                var CL_PWD          = $.trim($('#CL_PWD').val());
                var cust_tel        = $('#cust_tel option:selected').val();
                var cust_tel2       = $.trim($('#cust_tel2').val());
                var cust_tel3       = $.trim($('#cust_tel3').val());

                var CL_CPH          = cust_tel + "-" + cust_tel2 + "-" + cust_tel3;

                var CL_CONT         = $.trim($('#CL_CONT').val());


                if(CL_TTL == ""){
                    alert("제목을 입력해 주세요.");
                    return;
                }
                if(CL_NM == ""){
                    alert("이름을 입력해 주세요.");
                    return;
                }
                if(CL_PWD == ""){
                    alert("비밀번호를 입력해 주세요.");
                    return;
                }
                if(cust_tel2 == "" || cust_tel3 == ""){
                    alert("전화번호를 입력해 주세요.");
                    return;
                }
                if(CL_CONT == ""){
                    alert("내용을 입력해 주세요.");
                    return;
                }


                if ( $(":checkbox[name='privacy_check']:checked").length==0){
                    alert('개인정보 제공에 동의해 주세요.');
                    return;
                }
				
			
                $.ajax({
                    type:"POST",
                    url:"/guide/consultingProcess",
                    data:{"CL_TTL" : CL_TTL, "CL_NM" : CL_NM, "CL_PWD" : CL_PWD, "CL_CPH" : CL_CPH, "CL_CONT" : CL_CONT},
                    success : function(result){
                        if(result == true){
                            
                            alert("등록 되었습니다.");
                            location.href="/guide/consulting";
                        }else{
                            alert("오류가 발생하였습니다.");
                            return;
                        }
                    }
                });
            }

            function search(type){
                $("#faq_type").val(type);
                $("#searchForm").attr("action", location.href);
                $("#searchForm").submit();
            }

        </script>
        <!-- 상담목록-->

        <h4 >상담 <spna class="f_bold">목록</spna></h4>
        <div class="search_wrap_st2">
            <form id="searchForm" name="searchForm" action="" method="get">
            <input type="hidden" id="faq_type" name="faq_type" >
            <select name="search_field" id="search_field">
                <option value="all" <?=($search_field == 'f.FAQ_TTL') ? 'selected': ''?>>전체</option>
                <option value="CL_NM" <?=($search_field == 'CL_NM') ? 'selected': ''?>>작성자</option>
                <option value="CL_TTL" <?=($search_field == 'CL_TTL') ? 'selected': ''?>>제목</option>
                <option value="CL_CONT" <?=($search_field == 'CL_CONT') ? 'selected': ''?>>내용</option>
            </select>
            <span class="input_box"><input type="text" id="search_string"  name="search_string" value="<?=$search_string?>" placeholder="검색어을 입력하세요."/></span>
            <a href="javascript:search()" class="bt_search" >검색</a>
            </form>
        </div>
        <table class="st_table1 st_table3 mt10">
            <tr>
                <th width="*">제목</th>
                <th width="18%">작성자</th>
                <th width="15%">등록일</th>
                <th width="12%">답변여부</th>
            </tr>
            <tbody>
            <?foreach($result as $rows):?>
            <tr>
                <td><a href="javascript:comparePwd('<?=$rows["CL_SEQ"]?>')"><?=$rows["CL_TTL"]?></a></td>
                <td><?=$rows["CL_NM"]?></td>
                <td><span class="f_roboto"><?=substr($rows["CL_RGST_YMDT"] ,0 , 10)?></span></td>
                <td><span class="<?=($rows["CL_ANS_YN"] == "Y")? "icon_done" : "icon_doing" ?>"><?=($rows["CL_ANS_YN"] == "Y")? "답변완료" : "접수중" ?></span></td>
            </tr>
            <?endforeach?>
            </tbody>
        </table>
        <div class="page_wrap mt50 mb100">
            <?=$paging?>
        </div>
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->