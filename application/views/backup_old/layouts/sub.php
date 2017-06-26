
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" id="Viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>소람 한방병원</title>
    <link rel="icon" href="/public/front//images/soram_favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/public/front//images/soram_favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
    <!--[if lt IE 8]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script><![endif]-->
    <!--[if lt IE 7]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script><![endif]-->
    <link type="text/css" href="/public/front/css/jquery.bxslider.css" rel="stylesheet">
    <link type="text/css" href="/public/front/css/common.css" rel="stylesheet">
	<link type="text/css" href="/public/front/css/mediaelementplayer.css" rel="stylesheet">
    <link type="text/css" href="/public/front/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/public/front/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/public/front/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/public/front/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="/public/front/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="/public/front/js/mediaelement-and-player.js"></script>
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

    <div class="skip">
        <h2>컨텐츠 바로가기</h2>
        <ul>
            <li><a href="#main_wrap">본문 바로가기</a></li>
            <li><a href="#gnb_wrap">주메뉴 바로가기</a></li>
            <!--                <li><a href="#footer_wrap">하단 바로가기</a></li>-->
        </ul>
    </div>
    <div class="containerWrap sub">

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
                    <li class="gnb_case"><a href="#">호흡기암</a>
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
                    <!--<li><a href="#">소람암치료</a>
                        <ul class="depth2">
                            <li><a href="/care/lung">폐암</a></li>
                            <li><a href="/care/breast">유방암</a></li>
                            <li><a href="/care/stomach">위암</a></li>
                            <li><a href="/care/colorectal">대장암</a></li>
                            <li><a href="/care/liver">간,담,췌장암</a></li>
                            <li><a href="/care/cervical">자궁경부암</a></li>
                            <li><a href="/care/ovarian">난소암</a></li>
                            <li><a href="/care/brain">뇌종양</a></li>
                            <li><a href="/care/prostate">전립선암</a></li>
                            <li><a href="/care/thyroid">갑상선암</a></li>
                            <li><a href="/care/uterine">자궁이형성증</a></li>
                            <li><a href="/care/gastritis" class="line_st">장상피화생<br />만성위축성위염</a></li>
                        </ul>
                    </li>-->
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
                                    <!--<li><a href="/medical/representative">대표 의료진</a></li>-->
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
                            <!--<li><a href="#">사회공헌</a></li>-->
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
                    <li><span>평&nbsp;&nbsp;&nbsp;&nbsp;일</span><span class="f_roboto">AM 09:30 - PM 06:00</span></li>
                    <li><span>토요일</span><span class="f_roboto">AM 09:30 - PM 03:30</span></li>
                    <li><span>점&nbsp;&nbsp;&nbsp;&nbsp;심</span><span class="f_roboto">AM 12:30 - PM 01:30</span></li>
                </ul>
                <p class="copyright  f_roboto">Copyright &copy; SORAM HOSPITAL OF KOREAN MEDICINE.All Rights Reserved.</p>
            </div>
            <!--//mobile_footer -->

        </div>
    </div>

    <!--//main_wrap -->
</div>
</div>
</body>




<!-- WIDERPLANET  SCRIPT START 2015.5.19 -->
<!--
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
    var wptg_tagscript_vars = wptg_tagscript_vars || [];
    wptg_tagscript_vars.push(
        (function() {
            return {
                wp_hcuid:"",  	/*Cross device targeting을 원하는 광고주는 로그인한 사용자의 Unique ID (ex. 로그인 ID, 고객넘버 등)를 암호화하여 대입.*/
                ti:"22043",	/*광고주 코드*/
                ty:"Home",	/*트래킹태그 타입*/
                device:"web"	/*디바이스 종류 (web 또는 mobile)*/

            };
        }));
</script>
-->

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


<!-- DDN 리마케팅 태그 코드 -->
<script type="text/javascript">
    var roosevelt_params = {
        retargeting_id:'YlavvOY.dbDGLodgE4XYpg00',
        tag_label:'Ai2Q1LMfQJSSlT6L06nasw'
    };
</script>
<script type="text/javascript" src="//adimg.daumcdn.net/rt/roosevelt.js" async>
</script>




<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-43047725-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>


<!-- NSM Site Analyst Log Gathering Script V.70.2012031601 -->
<script language='javascript'>
    if( typeof HL_GUL == 'undefined' ){

        var HL_GUL = 'ngc6.nsm-corp.com';var HL_GPT='80'; var _AIMG = new Image(); var _bn=navigator.appName; var _PR = location.protocol=="https:"?"https://"+HL_GUL:"http://"+HL_GUL+":"+HL_GPT;if( _bn.indexOf("Netscape") > -1 || _bn=="Mozilla"){ setTimeout("_AIMG.src = _PR+'/?cookie';",1); } else{ _AIMG.src = _PR+'/?cookie'; };
        var _JV="AMZ2014031401";//script Version
        var HL_GCD = 'CS3B39730316365'; // gcode
        var _UD='undefined';var _UN='unknown';
        function _IX(s,t){return s.indexOf(t)}
        function _GV(b,a,c,d){ var f = b.split(c);for(var i=0;i<f.length; i++){ if( _IX(f[i],(a+d))==0) return f[i].substring(_IX(f[i],(a+d))+(a.length+d.length),f[i].length); }	return ''; }
        function _XV(b,a,c,d,e){ var f = b.split(c);var g='';for(var i=0;i<f.length; i++){ if( _IX(f[i],(a+d))==0){ try{eval(e+"=f[i].substring(_IX(f[i],(a+d))+(a.length+d.length),f[i].length);");}catch(_e){}; continue;}else{ if(g) g+= '&'; g+= f[i];}; } return g;};
        function _NOB(a){return (a!=_UD&&a>0)?new Object(a):new Object()}
        function _NIM(){return new Image()}
        function _IL(a){return a!=_UD?a.length:0}
        function _ILF(a){ var b = 0; try{eval("b = a.length");}catch(_e){b=0;}; return b; }
        function _VF(a,b){return a!=_UD&&(typeof a==b)?1:0}
        function _LST(a,b){if(_IX(a,b)>0){ a=a.substring(0,_IX(a,b));}; return a;}
        function _CST(a,b){if(_IX(a,b)>0) a=a.substring(_IX(a,b)+_IL(b),_IL(a));return a}
        function _UL(a){a=_LST(a,'#');a=_CST(a,'://');return a}
        function _AA(a){return new Array(a?a:0)}
        function _IDV(a){return (typeof a!=_UD)?1:0}
        if(!_IDV(HL_GUL)) var HL_GUL ='ngc6.nsm-corp.com';
        if(!_IDV(HL_GPT)) var HL_GPT ='80';
        _DC = document.cookie ;
        function _AGC(nm) { var cn = nm + "="; var nl = cn.length; var cl = _DC.length; var i = 0; while ( i < cl ) { var j = i + nl; if ( _DC.substring( i, j ) == cn ){ var val = _DC.indexOf(";", j ); if ( val == -1 ) val = _DC.length; return unescape(_DC.substring(j, val)); }; i = _DC.indexOf(" ", i ) + 1; if ( i == 0 ) break; } return ''; }
        function _ASC( nm, val, exp ){var expd = new Date(); if ( exp ){ expd.setTime( expd.getTime() + ( exp * 1000 )); document.cookie = nm+"="+ escape(val) + "; expires="+ expd.toGMTString() +"; path="; }else{ document.cookie = nm + "=" + escape(val);};}
        function SetUID() {     var newid = ''; var d = new Date(); var t = Math.floor(d.getTime()/1000); newid = 'UID-' + t.toString(16).toUpperCase(); for ( var i = 0; i < 16; i++ ){ var n = Math.floor(Math.random() * 16).toString(16).toUpperCase(); newid += n; }       return newid; }
        var _FCV = _AGC("ACEFCID"); if ( !_FCV ) { _FCV = SetUID(); _ASC( "ACEFCID", _FCV , 86400 * 30 * 12 ); _FCV=_AGC("ACEFCID");}
        var _AIO = _NIM(); var _AIU = _NIM();  var _AIW = _NIM();  var _AIX = _NIM();  var _AIB = _NIM();  var __hdki_xit = _NIM();
        var _gX='/?xuid='+HL_GCD+'&sv='+_JV,_gF='/?fuid='+HL_GCD+'&sv='+_JV,_gU='/?uid='+HL_GCD+'&sv='+_JV+"&FCV="+_FCV,_gE='/?euid='+HL_GCD+'&sv='+_JV,_gW='/?wuid='+HL_GCD+'&sv='+_JV,_gO='/?ouid='+HL_GCD+'&sv='+_JV,_gB='/?buid='+HL_GCD+'&sv='+_JV;

        var _d=_rf=_end=_fwd=_arg=_xrg=_av=_bv=_rl=_ak=_xrl=_cd=_cu=_bz='',_sv=11,_tz=20,_ja=_sc=_ul=_ua=_UA=_os=_vs=_UN,_je='n',_bR='blockedReferrer';
        if(!_IDV(_CODE)) var _CODE = '' ;
        _tz = Math.floor((new Date()).getTimezoneOffset()/60) + 29 ;if( _tz > 24 ) _tz = _tz - 24 ;
// Javascript Variables
        if(!_IDV(_amt)) var _amt=0 ;if(!_IDV(_pk)) var _pk='' ;if(!_IDV(_pd)) var _pd='';if(!_IDV(_ct)) var _ct='';
        if(!_IDV(_ll)) var _ll='';if(!_IDV(_ag)) var _ag=0;	if(!_IDV(_id)) var _id='' ;if(!_IDV(_mr)) var _mr = _UN;
        if(!_IDV(_gd)) var _gd=_UN;if(!_IDV(_jn)) var _jn='';if(!_IDV(_jid)) var _jid='';if(!_IDV(_skey)) var _skey='';
        if(!_IDV(_ud1)) var _ud1='';if(!_IDV(_ud2)) var _ud2='';if(!_IDV(_ud3)) var _ud3='';
        if( !_ag ){ _ag = 0 ; }else{ _ag = parseInt(_ag); }
        if( _ag < 0 || _ag > 150 ){ _ag = 0; }
        if( _gd != 'man' && _gd != 'woman' ){ _gd =_UN;};if( _mr != 'married' && _mr != 'single' ){ _mr =_UN;};if( _jn != 'join' && _jn != 'withdraw' ){ _jn ='';};
        if( _ag > 0 || _gd == 'man' || _gd == 'woman'){ _id = 'undefined_member';}
        if( _jid != '' ){ _jid = 'undefined_member'; }
        _je = (navigator.javaEnabled()==true)?'1':'0';_bn=navigator.appName;
        if(_bn.substring(0,9)=="Microsoft") _bn="MSIE";
        _bN=(_bn=="Netscape"),_bI=(_bn=="MSIE"),_bO=(_IX(navigator.userAgent,"Opera")>-1);if(_bO)_bI='';
        _bz=navigator.appName; _pf=navigator.platform; _av=navigator.appVersion; _bv=parseFloat(_av) ;
        if(_bI){_cu=navigator.cpuClass;}else{_cu=navigator.oscpu;};
        if((_bn=="MSIE")&&(parseInt(_bv)==2)) _bv=3.01;_rf=document.referrer;var _prl='';var _frm=false;
        function _WO(a,b,c){window.open(a,b,c)}
        function ACEF_Tracking(a,b,c,d,e,f){ if(!_IDV(b)){var b = 'FLASH';}; if(!_IDV(e)){ var e = '0';};if(!_IDV(c)){ var c = '';};if(!_IDV(d)){ var d = '';}; var a_org=a; b = b.toUpperCase(); var b_org=b;	if(b_org=='FLASH_S'){ b='FLASH'; }; if( typeof CU_rl == 'undefined' ) var CU_rl = _PT(); if(_IDV(HL_GCD)){ var _AF_rl = document.URL; if(a.indexOf('://') < 0  && b_org != 'FLASH_S' ){ var _AT_rl  = ''; if( _AF_rl.indexOf('?') > 0 ){ _AF_rl = _AF_rl.substring(0,_AF_rl.indexOf('?'));}; var spurl = _AF_rl.split('/') ;	for(var ti=0;ti < spurl.length ; ti ++ ){ if( ti == spurl.length-1 ){ break ;}; if( _AT_rl  == '' ){ _AT_rl  = spurl[ti]; }else{ _AT_rl  += '/'+spurl[ti];}; }; var _AU_arg = ''; if( a.indexOf('?') > 0 ){ _AU_arg = a.substring(a.indexOf('?'),a.length); a = a.substring(0,a.indexOf('?')); }; var spurlt = a.split('/') ; if( spurlt.length > 0 ){ a = spurlt[spurlt.length-1];}; a = _AT_rl +'/'+a+_AU_arg;	_AF_rl=document.URL;}; _AF_rl = _AF_rl.substring(_AF_rl.indexOf('//')+2,_AF_rl.length); if( typeof f == 'undefined' ){ var f = a }else{f='http://'+_AF_rl.substring(0,_AF_rl.indexOf('/')+1)+f}; var _AS_rl = CU_rl+'/?xuid='+HL_GCD+'&url='+escape(_AF_rl)+'&xlnk='+escape(f)+'&fdv='+b+'&idx='+e+'&'; var _AF_img = new Image(); _AF_img.src = _AS_rl; if( b_org == 'FLASH' && a_org != '' ){ if(c==''){ window.location.href = a_org; }else{ if(d==''){ window.open(a_org,c);}else{ window.open(a_org,c,d); };};	};} ; }
        function _PT(){return location.protocol=="https:"?"https://"+HL_GUL:"http://"+HL_GUL+":"+HL_GPT}
        function _EL(a,b,c){if(a.addEventListener){a.addEventListener(b,c,false)}else if(a.attachEvent){a.attachEvent("on"+b,c)} }
        function _NA(a){return new Array(a?a:0)}
        function HL_ER(a,b,c,d){_xrg=_PT()+_gW+"&url="+escape(_UL(document.URL))+"&err="+((typeof a=="string")?a:"Unknown")+"&ern="+c+"&bz="+_bz+"&bv="+_vs+"&RID="+Math.random()+"&";
            if(_IX(_bn,"Netscape") > -1 || _bn == "Mozilla"){ setTimeout("_AIW.src=_xrg;",1); } else{ _AIW.src=_xrg; } }
        function HL_PL(a){if(!_IL(a))a=_UL(document.URL);
            _arg = _PT()+_gU;
            if( typeof HL_ERR !=_UD && HL_ERR == 'err'){ _arg = _PT()+_gE;};
            if( _ll.length > 0 ) _arg += "&md=b";
            _AIU.src = _arg+"&url="+escape(a)+"&ref="+escape(_rf)+"&cpu="+_cu+"&bz="+_bz+"&bv="+_vs+"&os="+_os+"&dim="+_d+"&cd="+_cd+"&je="+_je+"&jv="+_sv+"&tz="+_tz+"&ul="+_ul+"&ad_key="+escape(_ak)+"&skey="+escape(_skey)+"&age="+_ag+"&gender="+_gd+"&marry="+_mr+"&join="+_jn+"&member_key="+_id+"&jid="+_jid+"&udf1="+_ud1+"&udf2="+_ud2+"&udf3="+_ud3+"&amt="+_amt+"&frwd="+_fwd+"&pd="+escape(_pd)+"&ct="+escape(_ct)+"&ll="+escape(_ll)+"&RID="+Math.random()+"&";
            setTimeout("",300);
        }
        _EL(window,"error",HL_ER); //window Error
        if( typeof window.screen == 'object'){_sv=12;_d=screen.width+'*'+screen.height;_sc=_bI?screen.colorDepth:screen.pixelDepth;if(_sc==_UD)_sc=_UN;}
        _ro=_NA();if(_ro.toSource||(_bI&&_ro.shift))_sv=13;
        if( top && typeof top == 'object' &&_ILF(top.frames)){eval("try{_rl=top.document.URL;}catch(_e){_rl='';};"); if( _rl != document.URL ) _frm = true;};
        if(_frm){ eval("try{_prl = top.document.URL;}catch(_e){_prl=_bR;};"); if(_prl == '') eval("try{_prl=parent.document.URL;}catch(_e){_prl='';};");
            if( _IX(_prl,'#') > 0 ) _prl=_prl.substring(0,_IX(_prl,'#'));
            _prl=_LST(_prl,'#');
            if( _IX(_rf,'#') > 0 ) _rf=_rf.substring(0,_IX(_rf,'#'));
            if( _IX(_prl,'/') > 0 && _prl.substring(_prl.length-1,1) == '/' ) _prl =_prl.substring(0,_prl.length-1);
            if( _IX(_rf,'/') > 0 && _rf.substring(_rf.length-1,1) == '/' ) _rf =_rf.substring(0,_rf.length-1);
            if( _rf == '' ) eval("try{_rf=parent.document.URL;}catch(_e){_rf=_bR;}");
            if(_rf==_bR||_prl==_bR){ _rf='',_prl='';}; if( _rf == _prl ){ eval("try{_rf=top.document.referrer;}catch(_e){_rf='';}");
                if( _rf == ''){ _rf = 'bookmark';};if( _IX(document.cookie,'ACEN_CK='+escape(_rf)) > -1 ){ _rf = _prl;}
                else{
                    if(_IX(_prl,'?') > 0){ _ak = _prl.substring(_IX(_prl,'?')+1,_prl.length); _prl = _ak; }
                    if( _IX(_prl.toUpperCase(),'OVRAW=') >= 0 ){ _ak = 'src=overture&kw='+_GV(_prl.toUpperCase(),'OVRAW','&','=')+'&OVRAW='+_GV(_prl.toUpperCase(),'OVRAW','&','=')+'&OVKEY='+_GV(_prl.toUpperCase(),'OVKEY','&','=')+'&OVMTC='+_GV(_prl.toUpperCase(),'OVMTC','&','=').toLowerCase() };
                    if(_IX(_prl,'gclid=') >= 0 ){ _ak='src=adwords'; }; if(_IX(_prl,'DWIT=') >= 0 ){_ak='src=dnet_cb';};
                    if( _IX(_prl,"rcsite=") >= 0 &&  _IX(_prl,"rctype=") >= 0){ _prl += '&'; _ak = _prl.substring(_IX(_prl,'rcsite='),_prl.indexOf('&',_IX(_prl,'rcsite=')+7))+'-'+_prl.substring(_IX(_prl,'rctype=')+7,_prl.indexOf('&',_IX(_prl,'rctype=')+7))+'&'; };
                    if( _GV(_prl,'src','&','=') ) _ak += '&src='+_GV(_prl,'src','&','='); if( _GV(_prl,'kw','&','=') ) _ak += '&kw='+_GV(_prl,'kw','&','=');
                    if( _IX(_prl, 'FWDRL')> 0 ){ _prl = _XV(_prl,'FWDRL','&','=','_rf'); _rf = unescape(_rf); }; if( _IX(_ak,'FWDRL') > 0 ){_ak = _XV(_ak,'FWDRL','&','=','_prl');}; if( typeof FD_ref=='string' && FD_ref != '' ) _rf = FD_ref; _fwd = _GV(_prl,'FWDIDX','&','=');
                    document.cookie='ACEN_CK='+escape(_rf)+';path=/;';
                };
                if(document.URL.indexOf('?')>0 && ( _IX(_ak,'rcsite=') < 0 && _IX(_ak,'NVAR=') < 0 && _IX(_ak,'src=') < 0 && _IX(_ak,'source=') < 0 && _IX(_ak,'DMCOL=') < 0 ) ) _ak =document.URL.substring(document.URL.indexOf('?')+1,document.URL.length); };
        }
        else{
            _rf=_LST(_rf,'#');_ak=_CST(document.URL,'?');
            if( _IX(_ak,"rcsite=") > 0 &&  _IX(_ak,"rctype=") > 0){
                _ak += '&';
                _ak = _ak.substring(_IX(_ak,'rcsite='),_ak.indexOf('&',_IX(_ak,'rcsite=')+7))+'-'+_ak.substring(_IX(_ak,'rctype=')+7,_ak.indexOf('&',_IX(_ak,'rctype=')+7))+'&';
            }
        }
        _rl=document.URL;
        var _trl = _rl.split('?'); if(_trl.length>1){ if( _IX(_trl[1],'FWDRL') > 0 ){ _trl[1] = _XV(_trl[1],'FWDRL','&','=','_rf'); _rf = unescape(_rf); _fwd = _GV(_trl[1],'FWDIDX','&','='); _rl=_trl.join('?'); };  if( _IX(_ak,'FWDRL') > 0 ){ _ak = _XV(_ak,'FWDRL','&','=','_prl');}; }; if( typeof FD_ref=='string' && FD_ref != '' ) _rf = FD_ref;
        if( _rf.indexOf('googlesyndication.com') > 0 ){
            var _rf_idx = _rf.indexOf('&url=');  if( _rf_idx > 0 ){ var _rf_t = unescape(_rf.substring(_rf_idx+5,_rf.indexOf('&',_rf_idx+5)));  if( _rf_t.length > 0 ){ _rf = _rf_t ;};  };  };
        _rl = _UL(_rl); _rf = _UL(_rf);

        if( typeof _rf_t != 'undefined' && _rf_t != '' ) _rf = _rf_t ;
        if( typeof _ak_t != 'undefined' && _ak_t != '' ) _ak = _ak_t ;

        if( typeof _rf==_UD||( _rf == '' )) _rf = 'bookmark' ;_cd=(_bI)?screen.colorDepth:screen.pixelDepth;
        _UA = navigator.userAgent;_ua = navigator.userAgent.toLowerCase();
        if (navigator.language){  _ul = navigator.language.toLowerCase();}else if(navigator.userLanguage){  _ul = navigator.userLanguage.toLowerCase();};

        _st = _IX(_UA,'(') + 1;_end = _IX(_UA,')');_str = _UA.substring(_st, _end);_if = _str.split('; ');_cmp = _UN ;

        if(_bI){ _cmp = navigator.appName; _str = _if[1].substring(5, _if[1].length); _vs = (parseFloat(_str)).toString();}
        else if ( (_st = _IX(_ua,"opera")) > 0){ _cmp = "Opera" ;_vs = _ua.substring(_st+6, _ua.indexOf('.',_st+6)); }
        else if ((_st = _IX(_ua,"firefox")) > 0){_cmp = "Firefox"; _vs = _ua.substring(_st+8, _ua.indexOf('.',_st+8)); }
        else if ((_st = _IX(_ua,"netscape6")) > 0){ _cmp = "Netscape"; _vs = _ua.substring(_st+10, _ua.length);
            if ((_st = _IX(_vs,"b")) > 0 ) { _str = _vs.substring(0,_IX(_vs,"b")); _vs = _str ;  };}
        else if ((_st = _IX(_ua,"netscape/7")) > 0){  _cmp = "Netscape";  _vs = _ua.substring(_st+9, _ua.length);  if ((_st = _IX(_vs,"b")) > 0 ){ _str = _vs.substring(0,_IX(_vs,"b")); _vs = _str;};
        }
        else{
            if (_IX(_ua,"gecko") > 0){ if(_IX(_ua,"safari")>0){ _cmp = "Safari";_ut = _ua.split('/');for( var ii=0;ii<_ut.length;ii++) if(_IX(_ut[ii],'safari')>0){ _vst = _ut[ii].split(' '); _vs = _vst[0];} }else{ _cmp = navigator.vendor;  } } else if (_IX(_ua,"nav") > 0){ _cmp = "Netscape Navigator";}else{ _cmp = navigator.appName;}; _av = _UA ;
        }
        if (_IX(_vs,'.')<0){  _vs = _vs + '.0'}
        _bz = _cmp;


        var nhn_ssn={uid:HL_GCD,g:HL_GUL,p:HL_GPT,s:_JV,rl:_rl,m:[],run:nhn_ssn?nhn_ssn.uid:this.uid};
        function CS3B39730316365(){var f={e:function(s,t){return s.indexOf(t);},d:function(s){var r=String(s); return r.toUpperCase();},f:function(o){var a;a=o;if(f.d(a.tagName)=='A' || f.d(a.tagName)=='AREA'){return a;}else if(f.d(a.tagName)=='BODY'){return 0;}else{return f.f(a.parentNode);} },n:function(s){var str=s+"";var ret="";for(i = 0; i < str.length; i++){	var at = str.charCodeAt(i);var ch=String. fromCharCode(at);	if(at==10 || at==32){ret+=''+ch.replace(ch,'');}else if (at==34||at==39|at==35){ret+=''+ch.replace(ch,' ');	}else{ret+=''+ch;}  } return ret;},ea:function(c,f){var wd;if(c=='click'){wd=window.document;}else{wd=window;}if(wd.addEventListener){wd.addEventListener(c,f,false)}else if(wd.attachEvent){wd.attachEvent("on"+c,f)} } };
            var p={h:location.host,p:(location.protocol=='https:')?"https://"+nhn_ssn.g:"http://"+nhn_ssn.g+":"+nhn_ssn.p,s:'/?xuid='+nhn_ssn.uid+'&sv='+nhn_ssn.s,u:function(){var r='';r=String(nhn_ssn.rl);var sh=r.indexOf('#'); if(sh!=-1){r=r.substring(0,sh);}return r+'';},ol:new Image(0,0),xL:function(x){if(typeof(Amz_T_e)==s.u){ p.ol.src=p.p+p.s+'&url='+escape(p.u())+'&xlnk='+escape(x)+'&xidx=0'+'&crn='+Math.random()+'&';nhn_ssn.m.push(p.ol);} } };
            var s={Lp:'a.tagName=="B" || a.tagName=="I" || a.tagName== "U" || a.tagName== "FONT" || a.tagName=="I" || a.tagName=="STRONG"'  ,f:'function',	j:'javascript:',u:'undefined'};var c={Run:function(){f.ea('click',this.ec);},ec:function(e){var ok='';var m = document.all ? event.srcElement : e.target;var a=m;var o=m.tagName;if(o=="A" || o=="AREA" || o=="IMG" || eval(s.Lp)){ok=c.lc(m);if(ok.length != 0){p.xL(unescape(ok));};	};},lc:function(o){ try{var ar='';var obj;obj=f.f(o);if(typeof obj==s.u){return '';};if(typeof(obj.href)==s.u){return '';};ar = String(obj.href);if(ar.length == 0){return '';};ar=f.n(ar);if(f.e(ar,'void(') == -1 && f.e(ar,'void0') == -1){	return ar;}else{return s.j + 'void(0)';};return '';}catch(er){return '';} } };
            if(p.u().charAt(1) != ':'){if(nhn_ssn.uid!=nhn_ssn.run){c.Run(); } };
        };eval(nhn_ssn.uid + '();');


        if( _IX(_pf,_UD) >= 0 || _pf ==  '' ){ _os = _UN ;}else{ _os = _pf ; };
        if( _IX(_os,'Win32') >= 0 ){if( _IX(_av,'98')>=0){ _os = 'Windows 98';}else if( _IX(_av,'95')>=0 ){ _os = 'Windows 95';}else if( _IX(_av,'Me')>=0 ){ _os = 'Windows Me';}else if( _IX(_av,'NT')>=0 ){ _os = 'Windows NT';}else{ _os = 'Windows';};if( _IX(_ua,'nt 5.0')>=0){ _os = 'Windows 2000';};if( _IX(_ua,'nt 5.1')>=0){_os = 'Windows XP';if( _IX(_ua,'sv1') > 0 ){_os = 'Windows XP SP2';};};if( _IX(_ua,'nt 5.2')>=0){_os ='Windows Server 2003';};if( _IX(_ua,'nt 6.0')>=0){_os ='Windows Vista';};if( _IX(_ua,'nt 6.1')>=0){_os ='Windows 7';};};
        _pf_s = _pf.substring(0,4);if( _pf_s == 'Wind'){if( _pf_s == 'Win1'){_os = 'Windows 3.1';}else if( _pf_s == 'Mac6' ){ _os = 'Mac';}else if( _pf_s == 'MacO' ){ _os ='Mac';}else if( _pf_s == 'MacP' ){_os='Mac';}else if(_pf_s == 'Linu'){_os='Linux';}else if( _pf_s == 'WebT' ){ _os='WebTV';}else if(  _pf_s =='OSF1' ){ _os ='Compaq Open VMS';}else if(_pf_s == 'HP-U' ){ _os='HP Unix';}else if(  _pf_s == 'OS/2' ){ _os = 'OS/2' ;}else if( _pf_s == 'AIX4' ){ _os = 'AIX';}else if( _pf_s == 'Free' ){ _os = 'FreeBSD';}else if( _pf_s == 'SunO' ){ _os = 'SunO';}else if( _pf_s == 'Drea' ){ _os = 'Drea'; }else if( _pf_s == 'Plan' ){ _os = 'Plan'; }else{ _os = _UN; };};
        if( _cu == 'x86' ){ _cu = 'Intel x86';}else if( _cu == 'PPC' ){ _cu = 'Power PC';}else if( _cu == '68k' ){ _cu = 'Motorola 680x';}else if( _cu == 'Alpha' ){ _cu = 'Compaq Alpa';}else if( _cu == 'Arm' ){ _cu = 'ARM';}else{ _cu = _UN;};if( _d == '' || typeof _d==_UD ){ _d = '0*0';}

        HL_PL(_rl); // Site Logging
    }
</script>
<!-- NSM Site Analyst Log Gathering Script End -->


<!-- adinsight 공통스크립트 start
<script type="text/javascript">
var TRS_AIDX = 7468;
var TRS_PROTOCOL = document.location.protocol;
document.writeln();
var TRS_URL = TRS_PROTOCOL + '//' + ((TRS_PROTOCOL=='https:')?'analysis.adinsight.co.kr':'adlog.adinsight.co.kr') +  '/emnet/trs_esc.js';
document.writeln("<scr"+"ipt language='javascript' src='" + TRS_URL + "'></scr"+"ipt>");
</script>
-->
<!-- adinsight 공통스크립트 end -->





<!-- N2S 스크립트 광고  수집용 Start
<script language="javascript" src="http://web.n2s.co.kr/js/_n2s_sp_log_soram.js"></script>
-->
<!-- N2S 스크립트 광고  수집용 End -->

<!-- 공통 적용 스크립트 , 모든 페이지에 노출되도록 설치. 단 전환페이지 설정값보다 항상 하단에 위치해야함 -->
<script type="text/javascript" src="http://wcs.naver.net/wcslog.js"> </script>
<script type="text/javascript">
    if (!wcs_add) var wcs_add={};
    wcs_add["wa"] = "s_1f158f477d2";
    if (!_nasa) var _nasa={};
    wcs.inflow();
    wcs_do(_nasa);
</script>




<!-- RealClick 리얼타겟팅 Checking Script V.20130115 Start-->
<script type='text/javascript'>
    function loadrtgJS(b,c){var d=document.getElementsByTagName("head")[0],a=document.createElement("script");a.type="text/javascript";null!=c&&(a.charset="euc-kr");a.src=b;d.appendChild(a)}function load_rtg(b){loadrtgJS(("https:"==document.location.protocol?" https://":" http://")+b,"euc-kr")}load_rtg("event.realclick.co.kr/rtarget/rtget.js?rtcode=soramsrhp");
</script>
<!-- RealClick 리얼타겟팅 Checking Script V.20130115 End -->

</html>


<!-- RealClick 리얼타겟팅 Checking Script V.20130115 Start-->
<script type='text/javascript'>
    function loadrtgJS(b,c){var d=document.getElementsByTagName("head")[0],a=document.createElement("script");a.type="text/javascript";null!=c&&(a.charset="euc-kr");a.src=b;d.appendChild(a)}function load_rtg(b){loadrtgJS(("https:"==document.location.protocol?" https://":" http://")+b,"euc-kr")}load_rtg("event.realclick.co.kr/rtarget/rtget.js?rtcode=soramsrhp");
</script>
<!-- RealClick 리얼타겟팅 Checking Script V.20130115 End -->









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

</html>