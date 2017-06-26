<script>
    $( document ).ready(function() {
        check_agree = $.cookie('agreement');
        if (check_agree != "ok"){
            alert('약관에 동의 바랍니다.');
            location.href='/member/agreement'
        }
    });
</script>


<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">회원가입</a>
        </div>
        <h3>회원가입</h3>
        <div class="join_process_wrap">
            <div class="join_process_item  ">
                <p class="num">01</p>
                <p class="txt">약관동의</p>
            </div>
            <div class="join_process_item on ">
                <p class="num">02</p>
                <p class="txt">회원정보입력</p>
            </div>
            <div class="join_process_item ">
                <p class="num">03</p>
                <p class="txt">가입완료</p>
            </div>
        </div>
        <h4 class="mt40">개인정보<span class="f_bold">입력</span></h4>
        <p class="f_dotum f_11 line_right mt7"><span class="red_star">*</span> 표시는 필수입력 항목입니다</p>
        <form>
            <input type="hidden" id="user_seq" value="">
            <table class="st_table2 mt7 join_form" summary="이 표는 1:1문의하기로 소람병원에 궁금한점을 문의합니다." width="100%">
                <colgroup>
                    <col style="width:24%;">
                    <col style="width:76%;">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">이름 <span class="red_star">*</span> </th>
                    <td><input type="text"  class="st_input2" id="user_name"/> </td>
                </tr>
                <tr>
                    <th scope="row">아이디 <span class="red_star">*</span> </th>
                    <td><input type="text" class="st_input2" id="user_id"/> </td>
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
                    <th scope="row" >이메일주소 <span class="red_star">*</span></th>
                    <td class="user_email"><input type="text" class="st_email1" id="email1"/><p class="icon_at">@</p>
                        <input type="text" class="st_email1" id="email2" value="naver.com"/>
                        <select name="email_opt" id="email_opt" onchange="emailHandler(this.value);">
                            <option value="naver.com" selected="selected">naver.com</option>
                            <option value="hanmail.net">hanmail.net</option>
                            <option value="nate.com">nate.com</option>
                            <option value="gmail.com">gmail.com</option>
                            <option value="yahoo.co.kr">yahoo.co.kr</option>
                            <option value="hotmail.com">hotmail.com</option>
                            <option value="empal.com">empal.com</option>
                            <option value="paran.com">paran.com</option>
                            <option value="lycos.co.kr">lycos.co.kr</option>
                            <option value="">직접입력</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="wbg">휴대폰 <span class="red_star">*</span></th>
                    <td class="customer_mobile">
                        <select name="cust_tel" id="cust_tel" title="핸드폰첫자리">
                            <option value="010" selected="selected"> 010 </option>
                            <option value="011"> 011 </option>
                            <option value="016"> 016 </option>
                            <option value="017"> 017 </option>
                            <option value="018"> 018 </option>
                            <option value="019"> 019 </option>
                        </select><span class="bar"></span>
                        <input name="wrtr_tel" id="mobile2" type="text" maxlength="4" ><span class="bar"></span>
                        <input name="wrtr_tel" id="mobile3" type="text" maxlength="4" >
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="wbg"><label for="cust_tel">전화번호</label></th>
                    <td class="customer_mobile">
                        <select name="cust_tel" id="cust_tel2" title="전화번호첫자리">
                            <option value="02" selected="selected"> 02 </option>
                            <option value="031"> 031 </option>
                            <option value="032"> 032 </option>
                            <option value="033"> 033 </option>
                            <option value="041"> 041 </option>
                            <option value="042"> 042 </option>
                            <option value="043"> 043 </option>
                            <option value="044"> 044 </option>
                            <option value="051"> 051 </option>
                            <option value="052"> 052 </option>
                            <option value="053"> 053 </option>
                            <option value="054"> 054 </option>
                            <option value="055"> 055 </option>
                            <option value="061"> 061 </option>
                            <option value="062"> 062 </option>
                            <option value="063"> 063 </option>
                            <option value="064"> 064 </option>
                            <option value="070"> 070 </option>
                        </select><span class="bar"></span>
                        <input name="wrtr_tel" id="tel2" type="text" maxlength="4" ><span class="bar"></span>
                        <input name="wrtr_tel" id="tel3" type="text" maxlength="4" >
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="st_top">SMS수신여부</th>
                    <td>
                        <span class="pr20"><input type="radio" name="sns_check" value="Y"/> 받음</span>
                        <input type="radio" name="sns_check" value="N" checked/> 받지않음
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="st_top"><label >이메일수신여부</label></th>
                    <td>
                        <span class="pr20"><input type="radio" name="email_check" value="Y"/> 받음</span>
                        <input type="radio" name="email_check" value="N" checked/> 받지않음
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
                                <option value="환자">환자</option>
                                <option value="보호자">보호자</option>
                                <option value="일반인">일반인</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>거주지역 <span class="red_star">*</span></span>
                            <select name="region" title="거주지역" id="region">
                                <option value="">선택</option>
                                <option value="서울">서울</option>
                                <option value="경기">경기</option>
                                <option value="인천">인천</option>
                                <option value="강원도">강원도</option>
                                <option value="충천남도">충천남도</option>
                                <option value="충천북도">충천북도</option>
                                <option value="대전">대전</option>
                                <option value="경상남도">경상남도</option>
                                <option value="경상북도">경상북도</option>
                                <option value="대구">대구</option>
                                <option value="전라남도">전라남도</option>
                                <option value="전라북도">전라북도</option>
                                <option value="광주">광주</option>
                                <option value="울산">울산</option>
                                <option value="부산">부산</option>
                                <option value="제주도">제주도</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>관심암 <span class="red_star">*</span></span>
                            <select name="interest" id="interest">
                                <option value="">선택</option>
                                <option value="위암">위암</option>
                                <option value="간암">간암</option>
                                <option value="폐암">폐암</option>
                                <option value="대장암">대장암</option>
                                <option value="담도/담낭암">담도/담낭암</option>
                                <option value="췌장암">췌장암</option>
                                <option value="유방암">유방암</option>
                                <option value="난소암">난소암</option>
                                <option value="자궁경부암">자궁경부암</option>
                                <option value="갑상선암">갑상선암</option>
                                <option value="뇌종양">뇌종양</option>
                                <option value="혈액암">혈액암</option>
                                <option value="흑색종">흑색종</option>
                                <option value="림프종">림프종</option>
                                <option value="기타">기타</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>접근경로</span>
                            <select name="route" id="route">
                                <option value="">선택</option>
                                <option value="블로그">블로그</option>
                                <option value="카페/커뮤니티">카페/커뮤니티</option>
                                <option value="SNS">SNS</option>
                                <option value="지식검색">지식검색</option>
                                <option value="인터넷 기사">인터넷 기사</option>
                                <option value="신문지면">신문지면</option>
                                <option value="기타">기타</option>
                            </select>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        <p class="btn_line mt40"><a href="<?=$this->config->item('base_url')?>" class="bt_st3 ">취소</a> <a href="javascript:submitCheck();" class="bt_st4">가입</a></p>
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
