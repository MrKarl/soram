
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" id="Viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>소람 한방병원</title>
    <!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
    <!--[if lt IE 8]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script><![endif]-->
    <!--[if lt IE 7]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script><![endif]-->
    <link rel="icon" href="/public/front//images/soram_favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/public/front//images/soram_favicon.ico" type="image/x-icon" />
    <link type="text/css" href="/public/front/css/jquery.bxslider.css" rel="stylesheet">

    <link type="text/css" href="/public/front/css/common.css" rel="stylesheet">
    <link type="text/css" href="/public/front/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/public/front/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/public/front/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/public/front/js/jquery.bxslider.js"></script>

    <script type="text/javascript" src="/public/front/js/soram.js"></script>
    <script type="text/javascript" src="/public/front/js/soram_pcs.js"></script>
	
	
	<!-- Withpang Tracker v3.0 [공용] start -->
  <script src="http://cdn.megadata.co.kr/js/enliple_min2.js"></script>
  <script type="text/javascript">
  <!--
  	var rf = new EN();
  	rf.setData("sc", encodeURIComponent(""));
  	rf.sendRf();
  //-->
  </script>
<!-- Withpang Tracker v3.0 [공용] end -->

<!-- WIDERPLANET  SCRIPT START 2016.10.18 -->
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
	return {
		wp_hcuid:"",   /*Cross device targeting을 원하는 광고주는 로그인한 사용자의 Unique ID (ex. 로그인 ID, 고객넘버 등)를 암호화하여 대입.
				*주의: 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/
		ti:"22043",	/*광고주 코드*/
		ty:"Home",	/*트래킹태그 타입*/
		device:"web"	/*디바이스 종류 (web 또는 mobile)*/
		
	};
}));
</script>
<script type="text/javascript" async src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
<!-- // WIDERPLANET  SCRIPT END 2016.10.18 -->
	
	

<div id="ttdUniversalPixelTag10c217546924458aa07550d8ab24daf9" style="display:none">

    <script src="https://js.adsrvr.org/up_loader.1.1.0.js" type="text/javascript"></script>

    <script type="text/javascript">

        (function(global) {

            if (typeof TTDUniversalPixelApi === 'function') {

                var universalPixelApi = new TTDUniversalPixelApi();

                universalPixelApi.init("bpajkrw", ["8apl1jo"], "https://insight.adsrvr.org/track/up", "ttdUniversalPixelTag10c217546924458aa07550d8ab24daf9");

            }

        })(this);

    </script>

</div>


    <script type="text/javascript">
        //
        $( window ).load(function() {
            main_slide.reloadSlider();
            case_slider.reloadSlider();
            right_h()
        });
        $(window).resize(function($){
            main_slide.reloadSlider();
            case_slider.reloadSlider();
        });


        $(document).ready(function() {
            <?foreach ($result as $rows):?>
            checkCookie('<?=$rows['PP_SEQ']?>');
            <?endforeach;?>
        });


        function closeWin(id) {
            $("#popup_"+id).attr("class", "hide");
            if ( $("#chk_" + id).is(":checked")) {
                setCookie( "cookie_" + id, "done" , 1);
            }
        }

        function setCookie( name, value, expiredays ) {
            var todayDate = new Date();
            todayDate.setDate( todayDate.getDate() + expiredays );
            document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
        }

        function checkCookie(id) {
            if (getCookie("cookie_" + id) == "done") {
                $("#popup_"+id).attr("class", "hide");
            } else {
                $("#popup_"+id).removeClass("hide");
            }
        }

        function getCookie(name) {
            var nameOfCookie = name + "=";
            var x = 0;
            while (x <= document.cookie.length) {
                var y = (x+nameOfCookie.length);
                if (document.cookie.substring(x, y) == nameOfCookie) {
                    if ((endOfCookie=document.cookie.indexOf(";", y)) == -1)
                        endOfCookie = document.cookie.length;
                    return unescape(document.cookie.substring(y, endOfCookie));
                }
                x = document.cookie.indexOf(" ", x) + 1;
                if (x == 0) break;
            }
            return "";
        }

        function closeConsult(){
            $("#consult_popup").attr("class", "hide");
        }

        function checkConsultForm(){

            var CL_NM               = $.trim($("#CL_NM").val());
            var tel1                = $.trim($("#tel1").val());
            var tel2                = $.trim($("#tel2").val());
            var tel3                = $.trim($("#tel3").val());
            var CL_CPH              = tel1 + "-" + tel2 + "-" + tel3;
            var CL_CNR              = $.trim($("#CL_CNR").val());
            var CL_AREA             = $.trim($("#CL_AREA").val());
            var CL_CONT             = $.trim($("#CL_CONT").val());

            if (CL_NM == ""){
                alert("이름을 입력해 주세요.");
                return;
            }
            if (tel1 == "" || tel2 == "" || tel3 == ""){
                alert("폰번호를 입력해 주세요.");
                return;
            }
            if (CL_CNR == ""){
                alert("진단명을 선택해 주세요.");
                return;
            }
            if (CL_AREA == ""){
                alert("상담분야를 선택해 주세요.");
                return;
            }
            if (CL_CONT == ""){
                alert("상담내용을 입력해 주세요.");
                return;
            }
            if (! $('#privacy_check').is(':checked')){
                alert("개인정보 수집 및 이용에 동의해 주세요.");
                return;
            }

            $.ajax({
                url : "/main/registProcess",
                type : "POST",
                data : {"CL_NM" : CL_NM, "CL_CPH" : CL_CPH, "CL_CNR" : CL_CNR, "CL_AREA" : CL_AREA, "CL_CONT" : CL_CONT},
                success : function(result) {
                    if (result == true){
                        alert("처리 되었습니다.");
                        location.href="/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }

    </script>
	
<!-- Screenview 리타겟팅Script Start-->
<script>var rGroupNeo = new function(){this.playGoods = function(eSRC,fnc) {var script = document.createElement('script');script.type = 'text/ja'+'vasc'+'ript';script.charset = 'utf-8';script.onreadystatechange = function() {if((!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete') && fnc!=undefined && fnc!='' ) { eval(fnc); };};script.onload = function() {if(fnc!=undefined && fnc!='') { eval(fnc); };};script.src= eSRC;document.getElementsByTagName('head')[0].appendChild(script);};};</script>
<script>rGroupNeo.playGoods('//nscreen.neoebiz.co.kr/xCData.php?adCode=MTE3CDkwCDg0CDk1CDExOQg');</script>
<!-- Screenview 리타겟팅Script End-->

</head>

<body>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-88248530-1', 'auto');
	ga('send', 'pageview');
</script>

<div class="wrap">

    <?if (count($result)):?>
        <?foreach ($result as $rows):?>
            <!--팝업1-->
            <div class="main_pop hide " style="top:<?=$rows['PP_TOP']?>px;left:<?=$rows['PP_LEFT']?>px;" name="<?=$rows['PP_SEQ']?>" id="popup_<?=$rows['PP_SEQ']?>">
                <div class="pop_cont">
                    <?if ($rows['img_info_1']):?>
                        <?$pop1 = explode('||', $rows['img_info_1'])?>
                        <div class="img100"><a href="<?=$rows['img_link_1']?>"><img src="<?=$pop1[0]?>" alt="이미지1"></a></div>
                    <?endif;?>
                    <?if ($rows['img_info_2']):?>
                        <?$pop2 = explode('||', $rows['img_info_2'])?>
                        <div class="img100"><a href="<?=$rows['img_link_2']?>"><img src="<?=$pop2[0]?>" alt="이미지2"></a></div>
                    <?endif;?>
                    <?if ($rows['img_info_3']):?>
                        <?$pop3 = explode('||', $rows['img_info_3'])?>
                        <div class="img100"><a href="<?=$rows['img_link_3']?>"><img src="<?=$pop3[0]?>" alt="이미지3"></a></div>
                    <?endif;?>
                    <?if ($rows['PP_CONT']):?>
                        <div class="txt_box2 hide"><?=$rows['PP_CONT']?></div>
                    <?endif;?>
                </div>
                <div class="today_check">오늘하루 창열지 않음 <input type="checkbox" id="chk_<?=$rows['PP_SEQ']?>" /></div>
                <p class="main_pop_close"><a href="javascript:closeWin('<?=$rows['PP_SEQ']?>')">닫기</a></p>
            </div>
            <!--//팝업1-->
        <?endforeach;?>
    <?endif;?>

    <div class="containerWrap main">

        <!--온라인 상담 -->
        <?if (count($consult_popup) > 0):?>
            <div class="pop_online_consulting" id="consult_popup">
                <div class="pop_cont ">
                    <p class="pop_close"><a href="javascript:closeConsult()"><img src="public/front/images/btn_pop_close.gif" alt="닫기" /></a></p>
                    <div class="online_consulting">
                        <p class="tit"><span class="f_bold">온라인</span>상담</p>
                        <form name="consultForm" id="consultForm" action="" method="get">
                            <ul class="">
                                <li><input type="text" name="CL_NM" id="CL_NM" placeholder="이름" /></li>
                                <li class="customer_mobile">
                                    <select name="tel1" id="tel1" title="핸드폰첫자리">
                                        <option value=""> 선택 </option>
                                        <option value="010"> 010 </option>
                                        <option value="011"> 011 </option>
                                        <option value="016"> 016 </option>
                                        <option value="017"> 017 </option>
                                        <option value="018"> 018 </option>
                                        <option value="019"> 019 </option>
                                    </select><span class="bar">-</span>
                                    <input name="tel2" id="tel2" type="text" maxlength="4" ><span class="bar">-</span>
                                    <input name="tel3" id="tel3" type="text" maxlength="4" >
                                </li>
                                <li>
                                    <select name="CL_CNR" id="CL_CNR" title="진단명을 선택해 주세요">
                                        <option value="">진단명을 선택해 주세요</option>
                                        <option value="폐암">폐암</option>
                                        <option value="유방암">유방암</option>
                                        <option value="위암">위암</option>
                                        <option value="대장암">대장암</option>
                                        <option value="간,담,췌장암">간,담,췌장암</option>
                                        <option value="자궁경부암">자궁경부암</option>
                                        <option value="난소암">난소암</option>
                                        <option value="뇌종양">뇌종양</option>
                                        <option value="전립선암">전립선암</option>
                                        <option value="갑상선암">갑상선암</option>
                                        <option value="자궁이형성증">자궁이형성증</option>
                                        <option value="장상피화생 만성위축성위염">장상피화생 만성위축성위염</option>
                                        <option value="기타암">기타암</option>
                                    </select>
                                </li>
                                <li>
                                    <select name="CL_AREA" id="CL_AREA" title="상담분야를 선택해 주세요">
                                        <option value="">상담분야를 선택해 주세요</option>
                                        <option value="입원">입원</option>
                                        <option value="비용">비용</option>
                                        <option value="진료">진료</option>
                                    </select>
                                </li>
                                <li class="q_cont">
                                    <div><textarea name="CL_CONT" id="CL_CONT" placeholder="상담내용"></textarea></div>
                                </li>
                            </ul>
                            <div class="mt10 line_right f_14"><input type="checkbox" name="privacy_check" id="privacy_check"><label for="privacy_check">개인정보 수집 및 이용동의</label></div>
                        </form>
                        <div class="btn_line mt10"><a href="javascript:checkConsultForm()" class="bt_st4">상담하기</a></div>
                    </div>
                </div>
            </div>
        <?endif;?>
        <!--//온라인 상담-->

        <!--비밀번호 팝업-->
        <div class="pop pop_passwd hide ">
            <input type="hidden" id="consulting_seq">
            <div class="pop_passwd_form">
                <div class="pop_close"><img src="/public/front/images/btn_close.png" alt="창닫기" /></div>
                <div class="pop_title">
                    <h4>비밀번호입력</h4>
                </div>
                <div class="pw_input">
                    <form>
                        <p class="mt25"><input type="password" id="consulting_pwd" placeholder="비밀번호를 입력해 주세요" ></p>
                    </form>
                </div>
                <p class="mt15"><a href="javascript:comparePwdProcess()" class="bt_st4">확인</a></p>
            </div>
        </div>

        <!--로그인 팝업-->
        <div class="pop pop_login_wrap hide">
            <div class="pop_login">
                <div class="pop_close"><img src="/public/front/images/btn_close.png" alt="창닫기" /></div>
                <div class="pop_title">
                    <h4>로그인</h4>
                    <p class="mt15">소람한방병원은 의료법 준수를 위해 일부서비스는 로그인 후 이용 가능합니다.</p>
                </div>
                <div class="login_input">
                    <p class="txt_error"><span id="id_pwd_error" class="hide" >아이디 또는 비밀번호를 잘못 입력하셨습니다.</span></p>
                    <form>
                    	<input type="hidden" name="onLoginReturnUrl" id="onLoginReturnUrl">
                        <p><input type="text" id="login_id" placeholder="아이디를 입력해 주세요" onfocus="loginReset()"></p>
                        <p class="mt10"><input type="password" id="login_pwd" placeholder="비밀번호를 입력해 주세요" onfocus="loginReset()"></p>
                        <div class="mt20" ><a href="javascript:loginCheck()" class="bt_st">로그인</a></div>
                    </form>
                    <div class="find_id_pw">
                        <a href="javascript:find_idpw('id');">아이디찾기</a>
                        <a href="javascript:find_idpw('pw')">비밀번호찾기</a>
                        <div class="bt_join"><a href="/member/agreement" class="bt_st3">회원가입</a></div>
                    </div>
                </div>
                <div class="pop_footer mt30">회원관련문의 <span class="f_roboto">1661-1115</span></div>
            </div>

        </div>
        <!--//로그인 팝업-->

        <!--ID PW팝업-->
        <div class="pop pop_find_id hide ">
            <div class="pop_login">
                <div class="pop_close"><img src="/public/front/images/btn_close.png" alt="창닫기" /></div>
                <div class="pop_title">
                    <h4>아이디 · 비밀번호 찾기</h4>
                    <p class="mt15">회원님의 아이디 · 비밀번호를 알려드립니다.</p>
                </div>
                <div class="tab_menu">
                    <a href="javascript:$('.pop_find_id .login_input').addClass('hide');tab_click('tab_cont1');" class="on find_id">아이디찾기</a>
                    <a href="javascript:$('.pop_find_id .login_input').addClass('hide');tab_click('tab_cont2');" class="find_pw">비밀번호 찾기</a>
                </div>
                <!--아이디찾기-->
                <div class="login_input tab_cont1 tab_cont ">
                    <form>
                        <p><input type="text" id="search_id_name" placeholder="이름을 입력해 주세요" ></p>
                        <p class="mt10"><input type="text" id="search_id_email"  placeholder="가입시 이메일을 입력해 주세요." ></p>
                    </form>
                    <div class="mt10" ><a href="javascript:searchId()" class="bt_st">아이디찾기</a></div>
                </div>
                <!--//아이디찾기-->
                <!--패스워드 찾기-->
                <div class="login_input tab_cont2 tab_cont hide">
                    <form>
                        <p><input type="text" id="search_pwd_name" placeholder="이름을 입력해 주세요" ></p>
                        <p class="mt10"><input type="text" id="search_pwd_email"  placeholder="가입시 이메일을 입력해 주세요." ></p>
                        <p class="mt10"><input type="text" id="search_pwd_id"  placeholder="회원 아이디를 입력해주세요." ></p>
                    </form>
                    <div class="mt10" ><a href="javascript:searchPwd()" class="bt_st">비밀번호찾기</a></div>
                </div>
                <!--//패스워드 찾기-->
                <!--ID찾기완료-->
                <div class="login_input find_id_txt hide">
                    <div class="find_id_txtbox">회원님의 아이디는 <span class="f_roboto f_blue2" id="find_id"></span>입니다.</div>
                </div>
                <!--//ID찾기완료-->
                <!--PW찾기완료-->
                <div class="login_input find_pw_txt hide">
                    <div class="find_pw_txtbox">

                        <div class="find_id_txtbox">회원님의 임시비밀번호는 <span class="f_roboto f_blue2" id="find_pwd"></span>입니다.</div>
                        <p class="f_14 mt10">로그인 후 반드시 비밀번호를 재설정 해주시기 바랍니다.</p>
                    </div>
                </div>
                <!--//pW찾기완료-->
                <div class="find_id_pw mt30"><a href="javascript:$('.pop').addClass('hide');$('.pop_login_wrap').removeClass('hide')">로그인</a><a href="/member/agreement">회원가입</a></div>
                <div class="pop_footer mt30">회원관련문의 <span class="f_roboto">1661-1115</span></div>
            </div>
        </div>
        <!--//ID PW팝업-->




        <!-- 모바일 메뉴 마스크-->
        <div class="menu_mask hide"></div>
        <!--left_wrap -->
        <div class="left_wrap ">
            <div class="left_wrap_top ">
                <h1><a href="/"><img src="/public/front/images/logo.png" alt="소람한방병원" /></a></h1>
            </div>
            <!-- 모바일 메뉴-->

            <div class="mobile_left_wrap_top">
                <a href="#" class="menu_bar"><img src="/public/front/images/icon_m_menu.png" alt="모바일메뉴"/></a>
                <h1><a href="/"><img src="/public/front/images/logo.png" alt="소람한방병원" /></a></h1>

                <?if($this->session->userdata("MBR_ID") == ""):?>

                    <a href="javascript:loginPopup()" class="login"><img src="/public/front/images/icon_m_login.png" alt="로그인" /></a>
                <?else:?>
                    <a href="javascript:logout();" class="login"><img src="/public/front/images/icon_m_logout.png" alt="로그아웃" /></a>
                <?endif?>

            </div>


            <!-- 모바일 메뉴 클릭-->
            <div class="mobile_menu_active">
                <p class="home_bar"><a href="/"><img src="/public/front/images/icon_m_home.png" alt="홈"/> 메인으로</a></p>
                <p class="menu_close"><a href="#"><img src="/public/front/images/btn_m_close.png" alt="닫기"/></a></p>
            </div>
            <div id="gnb_wrap">
                <ul class="depth1">
                    <li><a href="#">희망메시지</a>
                        <ul class="depth2">
                            <li><a href="/hope/lung">폐암</a></li>
                            <li><a href="/hope/breast">유방암</a></li>
                            <li><a href="/hope/colorectal">대장암</a></li>
                            <li><a href="/hope/liver">간,담,췌장암</a></li>
                            <li><a href="/hope/etc">기타암</a></li>
                        </ul>
                    </li>
					<li><a href="#">호전사례</a>
						<ul class="depth2">
							<li><a href="/reference/better_change">전체</a></li>
							<li><a href="/reference/better_change?type=BAABAAAC">폐암</a></li>
							<li><a href="/reference/better_change?type=BAABAAFG">유방암</a></li>
							<li><a href="/reference/better_change?type=BAABAAAA">위암</a></li>
							<li><a href="/reference/better_change?type=BAABAAAD">대장암</a></li>
							<li><a href="/reference/better_change?type=BAABAAAB">간/담/췌장암</a></li>
							<li><a href="/reference/better_change?type=etc">기타암</a></li>
						</ul>
					</li>
                    <li  class="gnb_case"><a href="#">호흡기암</a>
                        <ul class="depth2">
                            <li><a href="/care/lung">폐암</a></li>
                            <li><a href="/care/brain">뇌종양</a></li>
                            <li>
                                <a href="#">두경부암</a>
                                <ul class="depth3">
                                    <li><a href="/care/headnneck">구강,설암</a></li>
                                    <li><a href="/care/tonsillar">편도,후두암</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">흉선암</a>
                                <ul class="depth3">
                                    <li><a href="/care/thymic">흉선암,종격동암</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="gnb_case"><a href="#">여성암</a>
                        <ul class="depth2">
                            <li><a href="/care/breast">유방암</a></li>
                            <li><a href="/care/cervical">자궁경부암</a></li>
                            <li><a href="/care/ovarian">난소암</a></li>
                            <li><a href="/care/uterine">자궁이형성증</a></li>
                        </ul>
                    </li>
                    <li class="gnb_case"><a href="#">소화기암</a>
                        <ul class="depth2">
                            <li><a href="/care/colorectal">대장암</a></li>
                            <li><a href="/care/stomach">위암</a></li>
                            <li><a href="/care/liver">간,담,췌장암</a></li>
                            <li><a href="/care/esophageal">식도암</a></li>
                            <li><a href="/care/gastritis" class="line_st">장상피화생<br />만성위축성위염</a></li>
                        </ul>
                    </li>
                    <li class="gnb_case"><a href="#">기타암</a>
                        <ul class="depth2">
                            <li>
                                <a href="#">림프암/혈액암</a>
                                <ul class="depth3">
                                    <li><a href="/care/lymphoma">림프암(비호지킨)</a></li>
                                    <li><a href="/care/acute">혈액암/백혈병</a></li>
                                </ul>
                            </li>
                            <li><a href="/care/thyroid">갑상선암</a></li>
                            <li><a href="/care/prostate">전립선암</a></li>
                            <li><a href="/care/renal">신장암</a></li>
                            <li><a href="/care/bladder">방광암</a></li>
                            <li><a href="/care/sarcoma">육종암/흑색종</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">소람맞춤치료</a>
                        <ul class="depth2">
                            <li><a href="#">한방치료</a>
                                <ul class="depth3">
                                    <li><a href="/heal/acupuncture">소람약침</a></li>
                                    <li><a href="/heal/hanyack">소람한약</a></li>
                                    <li><a href="/heal/nose_steam">비훈치료</a></li>
                                    <li><a href="/heal/heat">온열치료</a></li>
                                    <li><a href="/heal/special">특수치료</a></li>
                                </ul>
                            </li>
                            <li><a href="#">양방치료</a>
                                <ul class="depth3">
                                    <li><a href="/heal/immunity">면역치료</a></li>
                                    <li><a href="/heal/high_frequency">고주파 온열암치료</a></li>
                                    <li><a href="/heal/equipment">치료장비</a></li>
                                </ul>
                            </li>
                            <li><a href="/heal/intensive_care">집중치료</a></li>
                            <li><a href="#">입원치료</a>
                                <ul class="depth3">
                                    <li><a href="/heal/admission">입원치료</a></li>
                                    <li><a href="/heal/food">소람치료식</a></li>
                                </ul>
                            </li>
                            <li><a href="/heal/specialized_treatment">특화치료</a></li>
                            <!--<li><a href="/heal/foodlife">섭생상담</a></li>-->
                        </ul>
                    </li>
                    <li><a href="#">소람한방병원</a>
                        <ul class="depth2">
                            <li><a href="#">병원소개</a>
                                <ul class="depth3">
                                    <li><a href="/medical/intro">병원소개</a></li>
                                    <li><a href="/medical/facility">시설안내</a></li>
                                </ul>
                            </li>
                            <li><a href="#">의료진</a>
                                <ul class="depth3">
                                    <!--<li><a href="/medical/director">병원장 </a></li>-->
                                    <li><a href="/medical/dedicated">전체 의료진</a></li>
                                    <!--<li><a href="/medical/nurse">전담 간호사</a></li>
                                    <li><a href="/medical/support">의료 지원팀</a></li>-->
                                    <li><a href="/medical/advice">자문위원</a></li>
                                </ul>
                            </li>
                            <li><a href="#">홍보센터</a>
                                <ul class="depth3">
                                    <li><a href="/medical/hi">HI소개</a></li>
                                    <li><a href="/medical/media">언론보도</a></li>
                                    <li><a href="/medical/tv">방송보도</a></li>
                                </ul>
                            </li>
                            <!--                            <li><a href="#">사회공헌</a></li>-->
                        </ul>
                    </li>
                    <li><a href="#">치료사례</a>
                        <ul class="depth2">
                            <li><a href="/reference/circle">환우회</a></li>
                            <li><a href="/reference/better_change">호전사례</a></li>
                            <li><a href="/reference/announcement">호전사례발표</a></li>
                            <li><a href="/reference/thesis">연구논문</a></li>
                        </ul>
                    </li>
                    <li><a href="/guide/map">약도 / 셔틀운행</a></li>
                    <li><a href="#">이용안내</a>
                        <ul class="depth2">
                            <li><a href="#">진료안내</a>
                                <ul class="depth3">
                                    <li><a href="/guide/care_system">진료시스템</a></li>
                                    <li><a href="/guide/uninsured">비급여 진료비</a></li>
                                </ul>
                            </li>
                            <li><a href="/guide/map">오시는길</a>
                            <li><a href="#">고객센터</a>
                                <ul class="depth3">
                                    <li><a href="/guide/notice">소람소식</a></li>
                                    <li><a href="/guide/faq">FAQ</a></li>
                                    <li><a href="/guide/consulting">1:1 상담</a></li>
                                    <?if ($this->session->userdata("MBR_ID") == ""):?>
                                        <li><a href="javascript:loginPopup();">고객의 소리</a></li>
                                    <?else:?>
                                        <li><a href="/guide/customer_voice_write">고객의 소리</a></li>
                                    <?endif?>
                                    <!--                                    <li><a href="/guide/customer_voice">고객의 소리</a></li>-->
                                    <li><a href="/guide/news_apply">소람 암도서/소식지 신청</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>


                <div class="mobile_join hide" >

                    <?if($this->session->userdata("MBR_ID") == ""):?>

                        <p><a href="javascript:loginPopup();">로그인</a><a href=/member/agreement>회원가입</a></p>
                    <?else:?>
                        <p><a href="javascript:logout();">로그아웃</a><a href="/member/modify">마이페이지</a></p>

                    <?endif?>
                </div>


            </div>
            <!-- 메뉴하단 사이트맵 고객센터-->
            <div class="left_wrap_bottom">
                <div class="cs_box">
                    <p class="cs_call f_roboto" onclick="AM_PL('/tracking/call.php');"><a href="tel:1661-1115" onMouseDown="AM_PL('/tracking/call.php')">1661-1115</a></p>
                    <p class="cs_call cs_consult f_roboto "><a href="/guide/consulting">1:1상담</a></p>
                    <!--<p class="kakao_banner"><a href="http://plus.kakao.com/home/@소람한방병원" target="_blank"><img src="/public/front/images/kakao_banner.jpg"></a></p>-->
                </div>
                <div class="login_wrap">
                    <span>
                        <?if($this->session->userdata("MBR_ID") == ""):?>
                            <a href="javascript:loginPopup();">로그인</a>
                        <?else:?>
                            <a href="javascript:logout();">로그아웃</a>
                        <?endif?>
                    </span>
                    <span>
                        <?if($this->session->userdata("MBR_ID") == ""):?>
                            <a href="/member/agreement">회원가입</a>
                        <?else:?>
                            <a href="/member/modify">마이페이지</a>
                        <?endif?>


                    </span>
                </div>
                <ul class="site_map">
                    <li><a href="/sitemap/index">SITEMAP</a></li>
                    <li><a href="/eng">ENGLISH</a></li>
                </ul>
                <div class="copyright f_roboto">
                    Copyright &copy; SORAM HOSPITAL.All Rights Reserved.
                </div>
            </div>
        </div>

        <!--//left_wrap -->
        <!--main_wrap -->
        <div id="main_wrap" >
            <!--center_wrap -->
            {yield}

            <!--mobile_footer -->
			<div class="quick_call">
				<a class="call" href="tel:1661-1115"><img src="/public/front/images/img_call2.png" alt="전화걸기 1661-1115" /></a>
				<a class="counsel" href="/guide/consulting"><img src="/public/front/images/img_counsel2.png" alt="1:1상담" /></a>
			</div>
			<!--
			<div class="quick_call"><a href="tel:1661-1115" onMouseDown="AM_PL('/tracking/call.php')"><img src="/public/front/images/img_call.png" alt="전화걸기 1661-1115" /></a></div>
			-->
            <div class="mobile_footer">
                <div class="cs_box">
                    <p>고객센터</p>
                    <p class="cs_call f_roboto" onMouseDown="AM_PL('/tracking/call.php');"><a href="tel:1661-1115" onMouseDown="AM_PL('/tracking/call.php');">1661-1115</a></p>
                </div>
                <!--
                <div class="kakao_banner">
                	<a href="http://plus.kakao.com/home/@소람한방병원" target="_blank"><img src="/public/front/images/kakao_banner.jpg"></a>
                </div>
                -->
                <p class="office_hours">진료시간</p>
                <ul>
                    <li><span>평&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일</span><span class="f_roboto">AM 09:30 - PM 06:00</span></li>
                    <li><span>토&nbsp;요&nbsp;일</span><span class="f_roboto">AM 09:30 - PM 03:30</span></li>
                    <li><span>점&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;심</span><span class="f_roboto">AM 12:30 - PM 01:30</span></li>
                </ul>
                <p class="copyright f_roboto">Copyright &copy; SORAM HOSPITAL OF KOREAN MEDICINE.All Rights Reserved.</p>
            </div>
            <!--//mobile_footer -->

        </div>
    </div>

    <!--//main_wrap -->
</div>

<?php
	// HTTP_USER_AGENT 로 체크해보면 다음과 같은 결과를 보여줍니다.
	// 결과: Mozilla/5.0 (Linux; U; Android 2.2; ko-k...
	
	// 모바일 목록
	$mobilechk = '/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/i';
	
	// 모바일 접속인지 PC로 접속했는지 체크합니다.
	if(preg_match($mobilechk, $_SERVER['HTTP_USER_AGENT'])) {
	//모바일
	    ?>
	
	    <!-- AceCounter Mobile WebSite Gathering Script V.7.5.20120817 -->
	    <script language='javascript'>
	        var _AceGID=(function(){var Inf=['soram.kr','soram.kr,www.soram.kr','AZ2A52846','AM','0','NaPm,Ncisy','ALL','0']; var _CI=(!_AceGID)?[]:_AceGID.val;var _N=0;if(_CI.join('.').indexOf(Inf[3])<0){ _CI.push(Inf);  _N=_CI.length; } return {o: _N,val:_CI}; })();
	        var _AceCounter=(function(){var G=_AceGID;if(G.o!=0){var _A=G.val[G.o-1];var _G=( _A[0]).substr(0,_A[0].indexOf('.'));var _C=(_A[7]!='0')?(_A[2]):_A[3];	var _U=( _A[5]).replace(/\,/g,'_');var _S=((['<scr','ipt','type="text/javascr','ipt"></scr','ipt>']).join('')).replace('tt','t src="'+location.protocol+ '//cr.acecounter.com/Mobile/AceCounter_'+_C+'.js?gc='+_A[2]+'&py='+_A[4]+'&up='+_U+'&rd='+(new Date().getTime())+'" t');document.writeln(_S); return _S;} })();
	    </script>
	    <noscript><img src='http://gmb.acecounter.com/mwg/?mid=AZ2A52846&tp=noscript&ce=0&' border='0' width='0' height='0' alt=''></noscript>
	    <!-- AceCounter Mobile Gathering Script End -->
	
	<?
	} else {
	//PC
	?>
	
	    <!-- AceCounter Log Gathering Script V.7.5.2013010701 -->
	    <script language='javascript'>
	        var _AceGID=(function(){var Inf=['gtp5.acecounter.com','8080','AB2A36639447664','AW','0','NaPm,Ncisy','ALL','0']; var _CI=(!_AceGID)?[]:_AceGID.val;var _N=0;var _T=new Image(0,0);if(_CI.join('.').indexOf(Inf[3])<0){ _T.src =( location.protocol=="https:"?"https://"+Inf[0]:"http://"+Inf[0]+":"+Inf[1]) +'/?cookie'; _CI.push(Inf);  _N=_CI.length; } return {o: _N,val:_CI}; })();
	        var _AceCounter=(function(){var G=_AceGID;if(G.o!=0){var _A=G.val[G.o-1];var _G=( _A[0]).substr(0,_A[0].indexOf('.'));var _C=(_A[7]!='0')?(_A[2]):_A[3];	var _U=( _A[5]).replace(/\,/g,'_');var _S=((['<scr','ipt','type="text/javascr','ipt"></scr','ipt>']).join('')).replace('tt','t src="'+location.protocol+ '//cr.acecounter.com/Web/AceCounter_'+_C+'.js?gc='+_A[2]+'&py='+_A[4]+'&gd='+_G+'&gp='+_A[1]+'&up='+_U+'&rd='+(new Date().getTime())+'" t');document.writeln(_S); return _S;} })();
	    </script>
	    <noscript><img src='http://gtp5.acecounter.com:8080/?uid=AB2A36639447664&je=n&' border='0' width='0' height='0' alt=''></noscript>
	    <!-- AceCounter Log Gathering Script End -->
	
	
	
	<?
	}
	?>
</body>



</html>