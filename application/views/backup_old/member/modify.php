<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="/"><span class="home"></span></a><a href="#">마이페이지</a>
        </div>
        <h3>마이페이지</h3>
        <div class="tab_menu_wrap tab_menu_st2">
            <ul>
                <li class="on"><a href="javascript:tab_click('tab1_cont');" >내정보관리</a></li>
                <li><a href="/member/consulting">1:1상담관리</a></li>
            </ul>
        </div>
        <h4 class="mt40">개인정보<span class="f_bold">수정</span></h4>
        <p class="f_dotum f_11 line_right mt7"><span class="red_star">*</span> 표시는 필수입력 항목입니다</p>
        <form>
            <input type="hidden" id="user_name" name="user_name" value="<?=$result->MBR_NM?>">
            <input type="hidden" id="user_id" name="user_id" value="<?=$result->MBR_ID?>">
            <input type="hidden" id="user_seq" name="user_seq" value="<?=$result->MBR_SEQ?>">
            <table class="st_table2 mt7 join_form" summary="이 표는 1:1문의하기로 소람병원에 궁금한점을 문의합니다." width="100%">
                <colgroup>
                    <col style="width:24%;">
                    <col style="width:76%;">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">이름 <span class="red_star">*</span> </th>
                    <td><div class="td_h"><?=$result->MBR_NM?></div></td>
                </tr>
                <tr>
                    <th scope="row">아이디 <span class="red_star">*</span> </th>
                    <td><div class="td_h"><?=$result->MBR_ID?></div></td>
                </tr>
                <tr>
                    <th scope="row">비밀번호 <span class="red_star">*</span> </th>
                    <td><input type="password" class="st_input2" id="user_pw"/> </td>
                </tr>
                <tr>
                    <th scope="row">비밀번호 확인 <span class="red_star">*</span> </th>
                    <td><input type="password" class="st_input2" id="user_pw_check"/> </td>
                </tr>



                <tr>
                    <th scope="row" >이메일주소</th>
                    <?
                    $email = explode("@",$result->MBR_EMAIL);
                    if(!is_array($email)){
                        $email = array(0 => "" , 1 => "");
                    }
                    ?>
                    <td class="user_email"><input type="text" class="st_email1" id="email1" value="<?=$email[0]?>"/><p class="icon_at">@</p>
                        <input type="text" class="st_email1" id="email2" value="<?=$email[1]?>" />
                        <select name="email_opt" id="email_opt" onchange="emailHandler(this.value);">
                            <option value="">직접입력</option>
                            <option value="naver.com" <?=($email[1] == "naver.com") ? "selected" : ""?>>naver.com</option>
                            <option value="hanmail.net" <?=($email[1] == "hanmail.net") ? "selected" : ""?>>hanmail.net</option>
                            <option value="nate.com" <?=($email[1] == "nate.com") ? "selected" : ""?>>nate.com</option>
                            <option value="gmail.com" <?=($email[1] == "gmail.com") ? "selected" : ""?>>gmail.com</option>
                            <option value="yahoo.co.kr" <?=($email[1] == "yahoo.co.kr") ? "selected" : ""?>>yahoo.co.kr</option>
                            <option value="hotmail.com" <?=($email[1] == "hotmail.com") ? "selected" : ""?>>hotmail.com</option>
                            <option value="empal.com" <?=($email[1] == "empal.com") ? "selected" : ""?>>empal.com</option>
                            <option value="paran.com" <?=($email[1] == "paran.com") ? "selected" : ""?>>paran.com</option>
                            <option value="lycos.co.kr" <?=($email[1] == "lycos.co.kr") ? "selected" : ""?>>lycos.co.kr</option>

                        </select>
                    </td>
                </tr>
                <?
                $mobile = explode("-",$result->MBR_CPH);
                if(!is_array($mobile)){
                    $mobile = array(0 => "" , 1 => "" , 2 => "");
                }
                ?>
                <tr>
                    <th scope="row" class="wbg">휴대폰 <span class="red_star">*</span></th>
                    <td class="customer_mobile">
                        <select name="cust_tel" id="cust_tel" title="핸드폰첫자리">
                            <option value="010" <?=($mobile[0] == "010") ? "selected" : ""?>> 010 </option>
                            <option value="011" <?=($mobile[0] == "011") ? "selected" : ""?>> 011 </option>
                            <option value="016" <?=($mobile[0] == "016") ? "selected" : ""?>> 016 </option>
                            <option value="017" <?=($mobile[0] == "017") ? "selected" : ""?>> 017 </option>
                            <option value="018" <?=($mobile[0] == "018") ? "selected" : ""?>> 018 </option>
                            <option value="019" <?=($mobile[0] == "019") ? "selected" : ""?>> 019 </option>
                        </select><span class="bar"></span>
                        <input name="wrtr_tel" id="mobile2" type="text" value="<?=$mobile[1]?>" maxlength="4" ><span class="bar"></span>
                        <input name="wrtr_tel" id="mobile3" type="text" value="<?=$mobile[1]?>" maxlength="4" >
                    </td>
                </tr>
                <?
                $phone = explode("-",$result->MBR_PHONE);
                if(!is_array($mobile)){
                    $phone = array(0 => "" , 1 => "" , 2 => "");
                }
                ?>

                <tr>
                    <th scope="row" class="wbg"><label for="cust_tel">전화번호</label></th>
                    <td class="customer_mobile">
                        <select name="cust_tel" id="cust_tel2" title="전화번호첫자리">
                            <option value="02" <?=($phone[0] == "02") ? "selected" : ""?>> 02 </option>
                            <option value="031" <?=($phone[0] == "031") ? "selected" : ""?>> 031 </option>
                            <option value="032" <?=($phone[0] == "032") ? "selected" : ""?>> 032 </option>
                            <option value="033" <?=($phone[0] == "033") ? "selected" : ""?>> 033 </option>
                            <option value="041" <?=($phone[0] == "041") ? "selected" : ""?>> 041 </option>
                            <option value="042" <?=($phone[0] == "042") ? "selected" : ""?>> 042 </option>
                            <option value="043" <?=($phone[0] == "043") ? "selected" : ""?>> 043 </option>
                            <option value="044" <?=($phone[0] == "044") ? "selected" : ""?>> 044 </option>
                            <option value="051" <?=($phone[0] == "051") ? "selected" : ""?>> 051 </option>
                            <option value="052" <?=($phone[0] == "052") ? "selected" : ""?>> 052 </option>
                            <option value="053" <?=($phone[0] == "053") ? "selected" : ""?>> 053 </option>
                            <option value="054" <?=($phone[0] == "054") ? "selected" : ""?>> 054 </option>
                            <option value="055" <?=($phone[0] == "055") ? "selected" : ""?>> 055 </option>
                            <option value="061" <?=($phone[0] == "061") ? "selected" : ""?>> 061 </option>
                            <option value="062" <?=($phone[0] == "062") ? "selected" : ""?>> 062 </option>
                            <option value="063" <?=($phone[0] == "063") ? "selected" : ""?>> 063 </option>
                            <option value="064" <?=($phone[0] == "064") ? "selected" : ""?>> 064 </option>
                            <option value="070" <?=($phone[0] == "070") ? "selected" : ""?>> 070 </option>
                        </select><span class="bar"></span>
                        <input name="wrtr_tel" id="tel2" value="<?=$phone[1]?>" type="text" maxlength="4" ><span class="bar"></span>
                        <input name="wrtr_tel" id="tel3" value="<?=$phone[2]?>" type="text" maxlength="4" >
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="st_top">SMS수신여부</th>
                    <td>
                        <span class="pr20"><input type="radio" name="sns_check" <?=($result->MBR_SMS_YN == "Y") ? "checked" : ""?> value="Y" /> 받음</span>
                        <input type="radio" name="sns_check" <?=($result->MBR_SMS_YN == "N") ? "checked" : ""?> value="N" /> 받지않음
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="st_top"><label >이메일수신여부</label></th>
                    <td>
                        <span class="pr20"><input type="radio" name="email_check" <?=($result->MBR_EMAIL_YN == "Y") ? "checked" : ""?> value="Y"  /> 받음</span>
                        <input type="radio" name="email_check" <?=($result->MBR_EMAIL_YN == "N") ? "checked" : ""?> value="N" /> 받지않음
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
                            <select id="applyer">
                                <option value="">선택</option>
                                <option value="환자" <?=($result->applyer == "환자") ? "selected" : ""?>>환자</option>
                                <option value="보호자" <?=($result->applyer == "보호자") ? "selected" : ""?>>보호자</option>
                                <option value="일반인" <?=($result->applyer == "일반인") ? "selected" : ""?>>일반인</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>거주지역 <span class="red_star">*</span></span>
                            <select name="region" title="거주지역" id="region">
                                <option value="" >선택</option>
                                <option value="서울"  <?=($result->region == "서울") ? "selected" : ""?>>서울</option>
                                <option value="경기"  <?=($result->region == "경기") ? "selected" : ""?>>경기</option>
                                <option value="인천"  <?=($result->region == "인천") ? "selected" : ""?>>인천</option>
                                <option value="강원도"  <?=($result->region == "강원도") ? "selected" : ""?>>강원도</option>
                                <option value="충천남도"  <?=($result->region == "충천남도") ? "selected" : ""?>>충천남도</option>
                                <option value="충천북도"  <?=($result->region == "충천북도") ? "selected" : ""?>>충천북도</option>
                                <option value="대전"  <?=($result->region == "대전") ? "selected" : ""?>>대전</option>
                                <option value="경상남도"  <?=($result->region == "경상남도") ? "selected" : ""?>>경상남도</option>
                                <option value="경상북도"  <?=($result->region == "경상북도") ? "selected" : ""?>>경상북도</option>
                                <option value="대구"  <?=($result->region == "대구") ? "selected" : ""?>>대구</option>
                                <option value="전라남도"  <?=($result->region == "전라남도") ? "selected" : ""?>>전라남도</option>
                                <option value="전라북도"  <?=($result->region == "전라북도") ? "selected" : ""?>>전라북도</option>
                                <option value="광주" <?=($result->region == "광주") ? "selected" : ""?>>광주</option>
                                <option value="울산" <?=($result->region == "울산") ? "selected" : ""?>>울산</option>
                                <option value="부산" <?=($result->region == "부산") ? "selected" : ""?>>부산</option>
                                <option value="제주도" <?=($result->region == "제주도") ? "selected" : ""?>>제주도</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>관심암 <span class="red_star">*</span></span>
                            <select name="interest" id="interest">
                                <option value="">선택</option>
                                <option value="위암" <?=($result->interest == "위암") ? "selected" : ""?>>위암</option>
                                <option value="간암" <?=($result->interest == "간암") ? "selected" : ""?>>간암</option>
                                <option value="폐암" <?=($result->interest == "폐암") ? "selected" : ""?>>폐암</option>
                                <option value="대장암" <?=($result->interest == "대장암") ? "selected" : ""?>>대장암</option>
                                <option value="담도/담낭암" <?=($result->interest == "담도/담낭암") ? "selected" : ""?>>담도/담낭암</option>
                                <option value="췌장암" <?=($result->interest == "췌장암") ? "selected" : ""?>>췌장암</option>
                                <option value="유방암" <?=($result->interest == "유방암") ? "selected" : ""?>>유방암</option>
                                <option value="난소암" <?=($result->interest == "난소암") ? "selected" : ""?>>난소암</option>
                                <option value="자궁경부암" <?=($result->interest == "자궁경부암") ? "selected" : ""?>>자궁경부암</option>
                                <option value="갑상선암" <?=($result->interest == "갑상선암") ? "selected" : ""?>>갑상선암</option>
                                <option value="뇌종양" <?=($result->interest == "뇌종양") ? "selected" : ""?>>뇌종양</option>
                                <option value="혈액암" <?=($result->interest == "혈액암") ? "selected" : ""?>>혈액암</option>
                                <option value="흑색종" <?=($result->interest == "흑색종") ? "selected" : ""?>>흑색종</option>
                                <option value="림프종" <?=($result->interest == "림프종") ? "selected" : ""?>>림프종</option>
                                <option value="기타" <?=($result->interest == "기타") ? "selected" : ""?> >기타</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>접근경로</span>
                            <select name="route" id="route">
                                <option value="">선택</option>
                                <option value="블로그" <?=($result->route == "블로그") ? "selected" : ""?>>블로그</option>
                                <option value="카페/커뮤니티" <?=($result->route == "카페/커뮤니티") ? "selected" : ""?>>카페/커뮤니티</option>
                                <option value="SNS" <?=($result->route == "SNS") ? "selected" : ""?>>SNS</option>
                                <option value="지식검색" <?=($result->route == "지식검색") ? "selected" : ""?>>지식검색</option>
                                <option value="인터넷 기사" <?=($result->route == "인터넷 기사") ? "selected" : ""?>>인터넷 기사</option>
                                <option value="신문지면" <?=($result->route == "신문지면") ? "selected" : ""?>>신문지면</option>
                                <option value="기타" <?=($result->route == "기타") ? "selected" : ""?>>기타</option>
                            </select>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        <p class="btn_line mt40"><a href="/" class="bt_st3 mr5">취소</a><a href="javascript:submitCheck()" class="bt_st4">수정</a></p>
        <p class="btn_line mt40"><a href="javascript:memberLeave()" class="bt_st5 ">회원탈퇴하기</a></p>
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->

<script>
    function memberLeave(){
        if(confirm("회원탈퇴 하시겠습니까?")){
            location.href = "/member/leave";
        }
    }
</script>