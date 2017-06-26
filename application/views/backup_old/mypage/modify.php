
<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">마이페이지</a><a href="#">내정보관리</a>
        </div>
        <h3>내정보관리</h3>
        <h4 class="mt40">개인정보<span class="f_bold">수정</span></h4>
        <p class="f_dotum f_11 line_right mt7"><span class="red_star">*</span> 표시는 필수입력 항목입니다</p>
        <form>
            <table class="st_table2 mt7 join_form" summary="이 표는 1:1문의하기로 소람병원에 궁금한점을 문의합니다." width="100%">
                <colgroup>
                    <col style="width:24%;">
                    <col style="width:76%;">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">이름 <span class="red_star">*</span> </th>
                    <td>김지훈</td>
                </tr>
                <tr>
                    <th scope="row">아이디 <span class="red_star">*</span> </th>
                    <td>soram0101</td>
                </tr>
                <tr>
                    <th scope="row">비밀번호 <span class="red_star">*</span> </th>
                    <td><input type="password" class="st_input2"/> </td>
                </tr>
                <tr>
                    <th scope="row">비밀번호 확인 <span class="red_star">*</span> </th>
                    <td><input type="password" class="st_input2"/> </td>
                </tr>
                <tr>
                    <th scope="row" >이메일주소</th>
                    <td class="user_email"><input type="text" class="st_email1"/><p class="icon_at">@</p>
                        <input type="text" class="st_email1"/>
                        <select name="email_opt" id="email_opt">
                            <option value="">선택하세요</option>
                            <option value="">naver.com</option>
                            <option value="">hanmail.net</option>
                            <option value="" selected="selected">nate.com</option>
                            <option value="">gmail.com</option>
                            <option value="">yahoo.co.kr</option>
                            <option value="">hotmail.com</option>
                            <option value="">empal.com</option>
                            <option value="">paran.com</option>
                            <option value="">lycos.co.kr</option>
                            <option value="">직접입력</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row" >주소</th>
                    <td class="user_post">
                        <div class="post_num"><a href="#" class="bt_post">우편번호</a><input type="text" class="st_post1" readonly= "readonly" value="15254" /></div>
                        <p class="mt5"><input type="text" class="st_input2 mt7" value="서울특별시 성동구 빛나길542 6" /></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="wbg">휴대폰 <span class="red_star">*</span></th>
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
                        <input name="wrtr_tel" type="text" maxlength="4" value="1234"><span class="bar"></span>
                        <input name="wrtr_tel" type="text" maxlength="4" value="1234">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="wbg"><label for="cust_tel">전화번호</label></th>
                    <td class="customer_mobile">
                        <select name="cust_tel" id="cust_tel2" title="핸드폰첫자리">
                            <option value=""> 선택 </option>
                            <option value="010" selected=""> 010 </option>
                            <option value="011"> 011 </option>
                            <option value="016"> 016 </option>
                            <option value="017"> 017 </option>
                            <option value="018"> 018 </option>
                            <option value="019"> 019 </option>
                        </select><span class="bar"></span>
                        <input name="wrtr_tel" type="text" maxlength="4" value="1234" ><span class="bar"></span>
                        <input name="wrtr_tel" type="text" maxlength="4" value="1234">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="st_top">SNS수신여부</th>
                    <td>
                        <span class="pr20"><input type="radio" name="sns_check" /> 받음</span>
                        <input type="radio" name="sns_check" /> 받지않음
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="st_top"><label >이메일수신여부</label></th>
                    <td>
                        <span class="pr20"><input type="radio" name="email_check" /> 받음</span>
                        <input type="radio" name="email_check" /> 받지않음
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
                            <select>
                                <option>보호자</option>
                                <option>본인</option>
                                <option>부</option>
                                <option>자식</option>
                                <option>친척</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>거주지역</span>
                            <select>
                                <option>서울</option>
                                <option>경기</option>
                                <option>충청</option>
                                <option>경상</option>
                                <option>전라도</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>관심암</span>
                            <select>
                                <option>폐암</option>
                                <option>자궁암</option>
                                <option>위암</option>
                                <option>간암</option>
                            </select>
                        </div>
                        <div class="etc_select">
                            <span>접근경로</span>
                            <select>
                                <option>블로그</option>
                                <option>인터넷</option>
                                <option>지인</option>
                                <option>신문</option>
                                <option>SNS</option>
                            </select>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        <p class="btn_line mt40"><a href="#" class="bt_st3 mr5">취소</a><a href="mem_join3.html" class="bt_st4">수정</a></p>
        <p class="btn_line mt40"><a href="#" class="bt_st5 ">회원탈퇴하기</a></p>
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <div class="right_wrap_inner ">
        <ul class="cancer_list">
            <li>
                <p class="title">폐암</p>
            </li>
            <li>
                <p class="title">유방암</p>
            </li>
            <li>
                <p class="title">대장암</p>
            </li>
            <li>
                <p class="title">간,담,췌장암</p>
            </li>
            <li>
                <p class="title">기타암</p>
            </li>
        </ul>
    </div>
</section>
<!--//right_wrap -->
