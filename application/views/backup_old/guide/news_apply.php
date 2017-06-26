<!--우편번호 팝업-->
<form id="zipForm" name="zipForm" action="" method="get" onsubmit="return false;">
<div id="zipcode" class="pop hide">
    <div class="pop_post">
        <div class="pop_close"><img src="/public/front/images/btn_close.png" alt="창닫기" /></div>
        <div class="pop_title">
            <h4>우편번호 찾기</h4>
            <p class="mt15">찾고 싶으신 주소의 동(읍,면)을 정확히 입력해주세요.</p>
        </div>
        <div class="post_input_wrap">
            <div class="post_input">
                <form>
                    <p class="tit_post">주소 입력</p>
                    <p class="input_post"><input type="text" id="dong" placeholder="예) 논현동, 을지로1가, 동송읍,양촌면" ></p>
                    <a href="javascript:searchZipcode()" class="bt_st">검색</a>
                </form>
            </div>
<!--            <div class="post_result">-->
<!--                <p class="tit_result">해당되는 주소를 선택해주세요.</p>-->
<!--                <div class="no_result mt10">검색결과가 없습니다.</div>-->
<!--            </div>-->
            <div class="post_result">
                <p class="tit_result" id="zip_title"></p>
                <div class="result_wrap mt10">
                    <table >
                        <tbody id="zip_result">
<!--                        <tr>-->
<!--                            <td width="20%">135-010</td>-->
<!--                            <td width="80%">서울시 강남구 논현동</td>-->
<!--                        </tr>-->

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!--//우편번호 팝업-->

<script>
    function viewZipcode(){
        $("#zipcode").removeClass('hide');
    }

    function searchZipcode(){
        str = "";
        $.ajax({
            type:"POST",
            datatype : "json",
            url:"/guide/zipcode",
            data:{"dong" : $("#dong").val()},
            success : function(data){
                result = JSON.parse(data);
                console.log(result);
                $("#zip_title").html('총 <span>'+ result.cnt +'</span>개의 우편번호가 검색 되었습니다.');
                $.each(result.data,function(i,v){
                    //데이터 인풋
                    str +="<tr onclick=setZipcode('" + v.ZC_CD +"','" + v.ZC_SIDO + "','" + v.ZC_GUGUN + "','" + v.ZC_DONG + "','" + v.ZC_RI + "')>";
                    str +="<td width='20%'>"+ v.ZC_CD+"</td>";
                    str +="<td width='80%'>"+ (v.ZC_SIDO + ' ').replace(/^\s+/,"") + (v.ZC_GUGUN + ' ').replace(/^\s+/,"") + (v.ZC_DONG + ' ').replace(/^\s+/,"") + (v.ZC_RI + ' ').replace(/^\s+/,"") + (v.ZC_BUNJI + ' ').replace(/^\s+/,"")+"</td>";
                    str +="</a></tr >";
                });

                $("#zip_result").html(str);
            }

        });
    }

    function setZipcode(zipcode , ZC_SIDO , ZC_GUGUN, ZC_DONG , ZC_RI){
        address1 = ZC_SIDO + " " + ZC_GUGUN + " " + ZC_DONG ;
        if (ZC_RI != ""){
            address1 += " " + ZC_RI;
        }

        $("#IMT_ZIPCD").val(zipcode);
        $("#IMT_ADDR").val(address1);
        $("#zipcode").addClass('hide');
    }

    function check(){
        IMT_NM              = $.trim($("#IMT_NM").val());
        IMT_ZIPCD           = $.trim($("#IMT_ZIPCD").val());
        IMT_ADDR            = $.trim($("#IMT_ADDR").val());
        IMT_ADDR_DTL        = $.trim($("#IMT_ADDR_DTL").val());
        IMT_CPH01           = $('#IMT_CPH01 option:selected').val();
        IMT_CPH02           = $.trim($("#IMT_CPH02").val());
        IMT_CPH03           = $.trim($("#IMT_CPH03").val());

        mobileExp           = /^\d{3}-\d{3,4}-\d{4}$/;
        IMT_CPH             = IMT_CPH01 + "-" + IMT_CPH02 + "-" + IMT_CPH03;


        IMT_TEL01           = $.trim($("#IMT_TEL01").val());
        IMT_TEL02           = $.trim($("#IMT_TEL02").val());
        IMT_TEL03           = $.trim($("#IMT_TEL03").val());

        IMT_CONT            = $.trim($("#IMT_CONT").val());

        IMT_TEL             = IMT_TEL01 + "-" + IMT_TEL02 + "-" + IMT_TEL03;

        email1              = $.trim($("#email1").val());
        email2              = $.trim($("#email2").val());
        IMT_EMAIL           = email1 + "@" + email2;

        IMT_BOOK            = $('#IMT_BOOK option:selected').val();
        IMT_APPLICANT       = $('#IMT_APPLICANT option:selected').val();
        IMT_REGION          = $('#IMT_REGION option:selected').val();
        IMT_CLASS           = $('#IMT_CLASS option:selected').val();
        IMT_ROUTE           = $('#IMT_ROUTE option:selected').val();
        
        if (IMT_NM == ""){
            alert("이름을 입력해 주세요.");
            return;
        }
        if (IMT_ZIPCD == ""){
            alert("우편번호를 입력해 주세요.");
            return;

        }
        if (IMT_ADDR_DTL == ""){
            alert("상세 주소를 입력해 주세요.");
            return;

        }
        if ( !mobileExp.test(IMT_CPH) ) {
            alert("휴대폰 번호를 정확히 입력해 주세요.");
            return false
        }
        if (IMT_BOOK == ""){
            alert("신청책자를 선택해 주세요.");
            return;

        }
        if ( $(":checkbox[name='privacy_check']:checked").length==0){
            alert('개인정보수집을 동의해 주세요.');
            return;
        }
		
		$.ajax({
            type:"POST",
            url:"/guide/news_apply_process",
            data:{"IMT_NM" : IMT_NM, "IMT_ZIPCD" : IMT_ZIPCD, "IMT_ADDR" : IMT_ADDR, "IMT_ADDR_DTL" : IMT_ADDR_DTL, "IMT_CPH" : IMT_CPH, "IMT_TEL" : IMT_TEL, "IMT_EMAIL" : IMT_EMAIL, "IMT_BOOK" : IMT_BOOK, "IMT_APPLICANT" : IMT_APPLICANT,
                "IMT_REGION" : IMT_REGION, "IMT_CLASS" : IMT_CLASS, "IMT_ROUTE" : IMT_ROUTE , "IMT_CONT" : IMT_CONT},
            success : function(result){
                if(result == true){
	                
                    alert("신청 되었습니다.");
                    location.reload();
                }else{
                    alert("오류가 발생하였습니다.");
                    return;
                }
            }

        });


    }

    $(document).ready(function() {
        $("#resetBtn").click(function() {
            $("form").each(function() {
                this.reset();
            });
        });
    });

</script>


<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">이용안내</a><a href="#">소람암도서/소식지 신청</a>
        </div>
        <h3>소람 암도서/소식지 신청</h3>
        <div class="img100 mt40">
            <img src="/public/front/images/guide/img_book_top.png" alt="소람 암도서/소식지 신청" />
        </div>
        <h4>신청하기</h4>
        <div class="txt_box">
            <p class="f_blue2">소람한방병원 원장님 저서인 암 관련 도서를 보내드립니다.</p>
            <p>폐암, 유방암, 위암 등 의학 정보 및 치료 사례가 담겨 있습니다.</p>
        </div>
        <div class="gray_box">
            <ul class="st_list2">
                <li>발송 기간은 2-5일이며, 경우에 따라 7일 이상 소요될 수 있습니다.</li>
                <li>신청하기를 누르시면 입력하신 주소로 도서와 환우회 소식지를 보내드립니다. </li>
            </ul>
        </div>
        <h4>개인정보입력</h4>
        <form id="theForm" name="theForm">
            <table class="st_table2 mt7 join_form" summary="이 표는 1:1문의하기로 소람병원에 궁금한점을 문의합니다." width="100%">
                <colgroup>
                    <col style="width:24%;min-width:100px;">
                    <col style="">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row" width="24%">이름<span class="red_star">*</span></th>
                    <td ><input type="text" id="IMT_NM" class="st_input2" /> </td>
                </tr>
                <tr>
                    <th scope="row" >주소 <span class="red_star">*</span></th>
                    <td class="user_post">
                        <div class="post_num"><a href="javascript:viewZipcode()" class="bt_post">우편번호</a><input type="text" class="st_post1" id="IMT_ZIPCD" readonly= "readonly" /></div>
                        <p class="mt5"><input type="text" class="st_input2 mt7" id="IMT_ADDR" readonly= "readonly" /></p>
                        <p class="mt5"><input type="text" class="st_input2 mt7" id="IMT_ADDR_DTL" /></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="wbg"><label for="cust_tel">휴대폰 <span class="red_star">*</span></label></th>
                    <td  class="customer_mobile">
                        <select name="IMT_CPH01" id="IMT_CPH01"  title="핸드폰첫자리">
                            <option value="010" selected="selected"> 010 </option>
                            <option value="011"> 011 </option>
                            <option value="016"> 016 </option>
                            <option value="017"> 017 </option>
                            <option value="018"> 018 </option>
                            <option value="019"> 019 </option>
                        </select>
                        <span class="bar"></span>
                        <input name="wrtr_tel" type="text" id="IMT_CPH02" maxlength="4" ><span class="bar"></span>
                        <input name="wrtr_tel" type="text" id="IMT_CPH03" maxlength="4" >

                    </td>
                </tr>
                <tr>
                    <th scope="row" class="wbg"><label for="cust_tel">전화번호</label></th>
                    <td class="customer_mobile">
                        <input name="wrtr_tel" id="IMT_TEL01" type="text" maxlength="3" class="first_tel" ><span class="bar"></span>
                        <input name="wrtr_tel" id="IMT_TEL02" type="text" maxlength="4" ><span class="bar"></span>
                        <input name="wrtr_tel" id="IMT_TEL03"type="text" maxlength="4" >
                    </td>
                </tr>
                <tr>
                    <th scope="row" >이메일주소</th>
                    <td class="user_email"><input type="text" class="st_email1" id="email1"/><p class="icon_at">@</p>
                        <input type="text" class="st_email1" id="email2"/>
                        <select name="email_opt" id="email_opt" onchange="emailHandler(this.value);">
                            <option value="">직접입력</option>
                            <option value="naver.com">naver.com</option>
                            <option value="hanmail.net">hanmail.net</option>
                            <option value="nate.com">nate.com</option>
                            <option value="gmail.com">gmail.com</option>
                            <option value="yahoo.co.kr">yahoo.co.kr</option>
                            <option value="hotmail.com">hotmail.com</option>
                            <option value="empal.com">empal.com</option>
                            <option value="paran.com">paran.com</option>
                            <option value="lycos.co.kr">lycos.co.kr</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">신청책자 선택 <span class="red_star">*</span></th>
                    <td class="select_letter">
                        <select name="IMT_BOOK" id="IMT_BOOK">
                            <option value="">도서</option>
                            <option value="B3" >폐암, 속도전이 이다</option>
                            <option value="B4" >위암, 먹어야 산다</option>
                            <option value="B5" >유방암, 당신의 방심을 노린다</option>
                            <option value="B6" >뇌종양, 독한 치료에 자신을 내주지 마라</option>
                            <option value="B7" >고맙습니다. 꽃으로 살게 해주셔서</option>
                            <option value="B8" >통합 암 치료, 12주 면역요법</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label >비고</label></th>
                    <td>
                        <div><textarea name="IMT_CONT" id="IMT_CONT" class="etc_cont" ></textarea></div>

                    </td>
                </tr>
                </tbody>
            </table>
            <table class="st_table2 mt40 join_form" summary="회원가입시 부가정보 입력을 합니다." width="100%">
                <colgroup>
                    <col style="width:24%;">
                    <col style="width:76%;">
                </colgroup>
                <tbody>
                <tr>
                    <th >부가정보입력 </th>
                    <td class="etc_wrap">
                        <div class="etc_select">
                            <span>신청자</span>
                            <select name="IMT_APPLICANT" id="IMT_APPLICANT">
                                <option value="">선택</option>
                                <option value="1">환자</option>
                                <option value="2">보호자</option>
                                <option value="3">일반인</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>거주지역</span>
                            <select name="IMT_REGION" id="IMT_REGION">
                                <option value="">선택</option>
                                <option value="1">서울</option>
                                <option value="2">경기</option>
                                <option value="3">인천</option>
                                <option value="4">강원도</option>
                                <option value="5">충천남도</option>
                                <option value="6">충천북도</option>
                                <option value="7">대전</option>
                                <option value="8">경상남도</option>
                                <option value="9">경상북도</option>
                                <option value="10">대구</option>
                                <option value="11">전라남도</option>
                                <option value="12">전라북도</option>
                                <option value="13">광주</option>
                                <option value="14">울산</option>
                                <option value="15">부산</option>
                                <option value="16">제주도</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>관심암</span>
                            <select name="IMT_CLASS" id="IMT_CLASS">
                                <option value="">선택</option>
                                <option value="1">위암</option>
                                <option value="2">간암</option>
                                <option value="3">폐암</option>
                                <option value="4">대장암</option>
                                <option value="5">담도/담낭암</option>
                                <option value="6">췌장암</option>
                                <option value="7">유방암</option>
                                <option value="8">난소암</option>
                                <option value="9">자궁경부암</option>
                                <option value="10">갑상선암</option>
                                <option value="11">뇌종양</option>
                                <option value="12">혈액암</option>
                                <option value="13">흑색종</option>
                                <option value="14">림프종</option>
                                <option value="15">기타</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>접근경로</span>
                            <select name="IMT_ROUTE" id="IMT_ROUTE">
                                <option value="">선택</option>
                                <option value="1">블로그</option>
                                <option value="2">카페/커뮤니티</option>
                                <option value="3">SNS</option>
                                <option value="4">지식검색</option>
                                <option value="5">인터넷 기사</option>
                                <option value="6">신문지면</option>
                                <option value="7">기타</option>
                            </select>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="st_table2 mt40 join_form" summary="회원가입시 개인정보 제공에 대한 동의" width="100%">
                <colgroup>
                    <col style="width:24%;">
                    <col style="width:76%;">
                </colgroup>
                <tbody>
                <tr>
                    <th >개인정보<br/>제공에 대한 동의 </th>
                    <td >
                        <div class="privacy_txt">
                            입력하신 고객님의 개인정보는 병원 의료서비스 제공을 위해서만 사용됩니다.<br/>각종 의료서비스 제공을 위해 이름, 주소, 전화번호, 휴대폰 번호를 수집하고 있으며 서비스 제공 후 지체없이 파기 합니다.
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
		
        <p class="btn_line mt40" ><a href="javascript:<?=($is_mobile == "Y")? "AM_PL('/tracking/consulting');": "_PL('http://www.soram.kr/tracking/consulting');
"?>check()" class="bt_st4 ">신청하기</a></p>
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
