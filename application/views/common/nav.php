<style>
html {
	min-height: 100%;
	position: relative;
}

/* navBar */
#navBar {
	height:70px;
	background-color:transparent;
	border: none;
}

@media (min-width: 769px) {
	#navBar.whiteBackground {
		background-color:rgba(255,255,255,0.8);
	}

	#navBar.whiteBackground a {
		color:black !important;
	}

	#navBar.whiteBackground a:hover {
		color:black !important;
	}	
}



#navBar.whiteBackground .navbar-nav>li>a:after, #navBar.whiteBackground .navbar-nav>li>a:after {
	content: '';
	display: block;
	height: 2px;
	width: 0;
	background: transparent;
	transition: width 1s ease;
    margin-top: -10px;
}

#navBar.whiteBackground .navbar-nav>li>a:hover:after, #navBar.whiteBackground .navbar-nav>li>a:hover:after  {
	width: 100%;
	background: black;
}

#navBar.whiteBackground .navbar-nav>li>a:hover, #navBar.whiteBackground .navbar-nav>li>a:hover  {
	color:black;
}

#navBar.whiteBackground #private-contact {
	border-color: black;
	color: black;
}

#navBar.whiteBackground #private-contact path {
    stroke: black;
}

#private-contact svg {
	transition: all 1s ease;
}

#private-contact:hover svg {
	/*opacity: 1;*/
	transform: translateX(8px);
	webkit-transform: translateX(8px);
}

#navBar>div {
    height: 70px;
    position: relative;
}

.navbar-nav>li>a {
    line-height: 50px;
}

.nav>li>a {
	padding:10px 8px;
}


.navbar-center {
    display: inline-block;
    float: none;
}

.navbar-collapse {
    text-align: center;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border: none;
}


@media (max-width: 768px) {
	.navbar-collapse {
	    padding-bottom: 50px;
	}

	.navbar-brand {
	    padding:6px 30px;
	}

	.navbar-brand>img {
	    width: 80%;
	}
}

@media (min-width: 992px) {
	.nav>li>a {
	    padding: 10px 24px;
	}
}


#private-contact {
    height: 44px;
    top: 12px;
    position: relative;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
    line-height: 40px;
    border: 2px solid white;
    width: 94px;
    background-color: transparent;
    color: white;
    cursor:pointer;
}

.navbar-right {

	margin-right:initial;
}


@media (min-width: 768px) {
	.navbar-right {
	    margin-right: initial;
	    position: absolute;
	    top: 0;
	    right: 15px;
	}
}


@media (max-width: 768px) {
	.navbar-toggle {
		border:2px solid black;
	}

	.navbar-default .navbar-toggle .icon-bar {
	    background-color: white;
	}

	.navbar-default .navbar-collapse {
		background-color: black;
	}

	.nav.navbar-nav.navbar-right {
		margin-left:0;
    	margin-right:0;
	}

	.nav.navbar-nav.navbar-right a, .navbar-default .navbar-nav>li>a {
		display:inline-block;
	}
}


/* 네비게이션바 폰트 */
.navbar-default .navbar-nav>li>a {
    font-family: 'Nanum Square';
    font-weight: 400;
    font-size: 16px;
    color: #000000;
    color:white;
}

.navbar-default .navbar-right>li>a, .navbar-right>li>button {
    font-family: 'Nanum Square';
    font-weight: 600;
    font-size: 12px;
    color:white;
}



.navbar-default .navbar-nav>li>a:after, .navbar-default .navbar-nav>li>a:after {
	content: '';
	display: block;
	height: 2px;
	width: 0;
	background: transparent;
	transition: width 1s ease;
    margin-top: -10px;
}
.navbar-default .navbar-nav>li>a:hover:after, .navbar-default .navbar-nav>li>a:hover:after  {
	width: 100%;
	background: white;
}

.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:hover  {
	color:white;
}


/* my custom checkbox */
.squareCheckbox > label > input {
    visibility: hidden;
}

.squareCheckbox > label {
    display: block;
    height: 20px;		    
    color: #868686;
    text-align:left;
    /*width: 410px;*/
    margin: auto;
}

.squareCheckbox > label > img {
    display: inline-block;
    padding: 0px;
    height:20px;
    width:20px;
    background-color:white;
    cursor:pointer;
    margin-left: -18px;
}

.squareCheckbox > label > input:checked + img {  
    /*background: url(http://cdn1.iconfinder.com/data/icons/onebit/PNG/onebit_34.png);*/
    background: url(/assets/img/checkbox-20-px-checked.png);
    background-color: white;
    background-repeat: no-repeat;
    background-position:center center;
    background-size:14px 8.6px;
}

#privateContactAside {
    position: fixed;
    right: 0;
    overflow-y: auto;
    height: 100%;
    width: 802px;
    z-index: -1;
    visibility: hidden;
    background-color: black;
    color: white;
    padding:20px;
    cursor: initial;
    padding: 80px 100px 100px 100px;
}

@media (max-width: 768px) {
	#privateContactAside {
	    width: 100%;
	    padding:40px;
	}	

	#privateContactAside>div {
		width: 100% !important;
	}
}

body {
	transition: all 1s ease;
}

body.non-scrollable {
	overflow: hidden;
	cursor: pointer;
}

.maskAll {
	display: none;
	z-index: 4000;
	position:absolute;
	cursor:pointer;
	left:0;
	top:0;
	/*bottom:0;*/
	right:0;
	height: 100%;
	/*background-color: red;*/
	opacity:0.4;
}

#privateContactAside>div {
	width:602px;
	margin:0;
	padding:0;
}

#privateContactAside h1 {
	font-family: 'Nanum Square';
	font-size:34px;
	line-height: 1.18;
	letter-spacing: -0.7px;
	font-weight: 100;
}

#privateContactAside .description {
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	line-height: 1.75;
	margin-top:31px;
	color: #868686;
	font-weight: 100;
}

#typeOfContact {
	margin-bottom:42px;
    text-align: left;
    margin-top: 80px;
}
/*
#typeOfContact a:hover {
	text-decoration: none;
}
*/

#typeOfContact button {
    outline: none;
	border:none;
	background-color:transparent;
	font-family: 'Nanum Square';
	font-size:22px;
	letter-spacing: -0.4px;
	text-align: center;
	color: rgba(255, 255, 255, 0.2);
	margin-right:10px;
	padding-bottom:8px;s
}

#typeOfContact button.active {
	border-bottom: 2px solid white;
	color: white;
}


#privateContactFormField input, #privateContactFormField button, #privateContactFormField textarea {
	outline: none;
	/*padding-left:17px;*/
	/*padding-top:17px;*/
	padding:17px;
}

#privateContactFormField input:focus, #privateContactFormField textarea:focus {
	background-color:#161616;
}

#privateContactFormField input, #privateContactFormField label {
	color:white;
	height:52px;
	/*background-color:#222222;*/
	
	display: inline-block;
}

#privateContactFormField>.row {

}

#privateContactFormField label {
	font-family: 'Nanum Square';
	font-size: 18px;
	width: 103px;
	padding: 13px;
	text-align: left;
	margin:0;
	font-weight: 200;
}
#privateContactFormField input {
	font-family: 'Nanum Barun Gothic';
	font-size:16px;
	border:none;
	background-color:#222222;
}

#privateContactFormField .form-group {
    background-color: #222222;
    text-align: left;
}

.form-group {
	margin-bottom: 9px;
}

#navBar li.active {
	background : none;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: white;
    background-color: transparent;
}

#navBar.whiteBackground .navbar-nav>li.active>a:after, #navBar.whiteBackground .navbar-nav>li.active>a:after {
	width: 100%;
    background: black;
    content: '';
    display: block;
    height: 2px;
    margin-top: -10px;
}

#navBar .navbar-nav>li.active>a:after, #navBar .navbar-nav>li.active>a:after {
	width: 100%;
    background: white;
    content: '';
    display: block;
    height: 2px;
    margin-top: -10px;
}


input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:active,
input:-webkit-autofill:focus {
	background-color: #222222 !important;
	color: white !important;
	-webkit-box-shadow: 0 0 0 1000px #222222 inset !important;
	-webkit-text-fill-color: white !important;
}


</style>



<nav id="navBar" class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>

	        <a class="navbar-brand" href="/">
	            <img src="/assets/img/logo.png" alt="soram logo" id="soram_logo" />
	      	</a>
	    </div>


	    <div class="collapse navbar-collapse">
		    <ul class="nav navbar-nav">
	    	<!-- <ul class="nav navbar-nav navbar-center"> -->
	        	<li <?php if($section=="introduce") echo "class='active'";?>><a href="/introduce">소람 소개</a></li>
	        	<li <?php if($section=="story") echo "class='active'";?>><a href="/story">호전 사례</a></li>
	            <li <?php if($section=="remedy") echo "class='active'";?>><a href="/remedy">통합 암 치료법</a></li>
	            <li <?php if($section=="customRemedy") echo "class='active'";?>><a href="/customRemedy">1:1 맞춤 치료법</a></li>
	            <li <?php if($section=="cancer") echo "class='active'";?>><a href="/cancer">암 정보</a></li>
	            <li <?php if($section=="customer") echo "class='active'";?>><a href="/customer">고객센터</a></li>
	        </ul>

	        <ul class="nav navbar-nav navbar-right">
	        	<li><a href="/mypage">마이페이지</a></li>
	            
	            <li>
	            	<div id="private-contact">1:1 상담
		            	<span class="menu-item">
							<!-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10.5">
							    <path fill="none" stroke="#FFF" d="M8.256.498L13.002 5 8.256 9.502"/>
							    <path fill="#FFF" fill-rule="evenodd" d="M-.005 4.497h13.013L13 5.5H0l-.005-1.003z"/>
							</svg> -->

							<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="10.5">
							    <path fill="none" stroke="#FFF" d="M8.756.498L13.502 5 8.756 9.502M.496 4.497h12.011"/>
							</svg>

				        </span>
					</div>
				</li>
	        </ul>
	    </div>

	</div>
</nav>

<aside id="privateContactAside">
	<div class="row">
		<div style="text-align: right;">
			<button id="closePrivateContactMask" style="color: white; border: none; background-color: transparent; font-size: 25px;">X</button>
		</div>

		<div style="text-align:left;">
			<h1>고객의 궁금증을 1:1로 상담해 드립니다.</h1>
			<p class="description gray">소람에 대한 모든 궁금한 사항을 빠르게 답변하여<br/>편리한 병원 이용이 되도록 노력하겠습니다.</p>
		</div>

		<div id="typeOfContact">
			<button class="active">게시판 상담</button>
			<button>전화 상담</button>
		</div>

		<div class="inputField">
			<form role="form" id="privateContactFormField" autocomplete="off">
				<div class="row">
					<div class="form-group" style="margin-right:10px;     display: inline-block;">
						<label class="col-form-label">이름</label>
						<input style="width:184px;" type="text" placeholder="아이디" name="name" />
					</div>

					<div class="form-group" style="display: inline-block;">
						<label class="col-form-label">비밀번호</label>
						<input style="width:190px;" type="password" placeholder="비밀번호" name="password" />
					</div>
				</div>


				<div class="row">
					<div class="form-group">
						<label class="col-form-label">연락처</label>
						<input type="text" placeholder="010-1234-1234" style="width:495px;" name="mobile" maxlength=13/>
					</div>
				</div>


				<div class="row">
					<div class="form-group">
						<label class="col-form-label">상담 분야</label>
						<div class="dropdown" style="display:inline-block;width: 495px;padding-left: 17px;padding-top: 17px;">
					    	<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="outline:none;background-color: transparent;color: white;border: none;padding: 0;width: 495px;position: relative;text-align: left;" aria-expanded="true">선택하세요
					    		<span class="caret" style="position:absolute;right: 25px; top: 10px;"></span>
					    	</button>
					    	<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="width: 495px">
					      		<li role="presentation">
					      			<a role="menuitem" tabindex="-1" href="#">암1</a>
					      		</li>
					      		<li role="presentation">
					      			<a role="menuitem" tabindex="-1" href="#">암2</a>
					      		</li>
					      		<li role="presentation">
					      			<a role="menuitem" tabindex="-1" href="#">암3</a>
					      		</li>
					      		<!-- <li role="presentation" class="divider"></li> -->
					      		<li role="presentation">
					      			<a role="menuitem" tabindex="-1" href="#">암4</a>
					      		</li>
					    	</ul>
					  	</div>
					</div>
					
				</div>

				<div class="row">
					<div class="form-group" style="height:156px;">
						<div style="width:103px;display:inline-block;vertical-align: top;">
							<label class="col-form-label">상담 내용</label>
						</div>
						<div style="width:495px;height:156px;display:inline-block;">
							<textarea id="contactContents" style="background-color:#161616; color:white; width:495px; height:156px; border:none;resize: none;"></textarea>
						</div>
						
					</div>
				</div>

				<div class="row">
					<div class="form-group squareCheckbox" style="background-color: black;">
						<label style="width: initial;background: transparent;height: initial;padding-left: 0;font-weight:100">
							<input type="checkbox" name="allAgreed" style=" height: inherit">
							<img>

							<span style="text-decoration:underline;margin-left:10px;letter-spacing: -0.4px;">개인정보보호정책</span>에 동의합니다.
						</label>
					</div>
				</div>

			</form>
		</div>

			


		<div class="row">
			<!-- <button class="btn btn-primary" style="width:300px; color:white; font-family:'Nanum Square'; font-size:22px; text-align: center;height: 62px; background-color: #0089cf;border-radius: 0;font-weight: 200;margin-top:30px;">상담 접수</button> -->

			<input type="submit" class="btn btn-primary" style="width:300px; color:white; font-family:'Nanum Square'; font-size:22px; text-align: center;height: 62px; background-color: #0089cf;border-radius: 0;font-weight: 200;margin-top:30px;"/ value="상담 접수">
		</div>

	</div>

</aside>


<style>
#scrollSpyMenu {
	width:243px;
    z-index: 1000;
    position: fixed;
    right: 0;
    top: 0;
    bottom: 0;
    vertical-align: middle;
}

@media (max-width: 767px) {
	#scrollSpyMenu {
	    display: none!important;
	}
}


#scrollSpyMenu li {
	margin-top:0;
}

#scrollSpyMenu li::before {
	content:' ';
	background-color: black;
	opacity: 0.5;
	top:0;
	bottom:0;
	left:0;
	right:0;
	position:absolute;
    height: 100%;
    width: 100%;
}

#scrollSpyMenu>ul {
    margin: auto;
    display: block;
    max-height: 300px;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
}

#scrollSpyMenu li.active a {
	font-size: 28px;
	/*font-weight: 400;*/
}

#scrollSpyMenu li a {
	color:white;
	font-family: 'Nanum Square';
	font-size: 16px;
	line-height: 1.71;
	letter-spacing: -0.6px;
	text-align: right;
	color: #ffffff;
}
</style>



<div class="maskAll"></div>



<script>
function revealPrivateContactAside() {
	$('.maskAll').css('display', 'block');
	var $body = $('body');
	var $privateContactAside = $('#privateContactAside');
	slideLeft('-802px', [$('body').children().not('#privateContactAside').not('style').not('script').not('.maskAll').not('#navBar'), $('#navBar .container').eq(0)], function() {
		$body.addClass('non-scrollable');	

		$privateContactAside.css({
			'z-index': '5000',
			'visibility': 'visible'
		});			

	});
}

function closePrivateContactAside() {
	var $body = $('body');
	var $privateContactAside = $('#privateContactAside');
	$privateContactAside.css({
		'z-index': '-1',
		'visibility': 'hidden'
	});
	slideLeft('0', [$('body').children().not('#privateContactAside').not('style').not('script').not('.maskAll').not('#navBar'), $('#navBar .container').eq(0)], function() {	
		$('.maskAll').css('display', 'none');
		$body.removeClass('non-scrollable');
	});
}

function slideLeft(left, $elements, completion) {
	for (i=0; i<$elements.length; i++) {
		var $ele = $($elements[i]);
		console.log($elements[i]);
		console.log($ele);
		$ele.animate({'left' : left}, completion);
	}
}

$(document).ready(function() {
	$('.maskAll').click(function() {
		closePrivateContactAside();
	});
	
	$('#closePrivateContactMask').click(function() {
		closePrivateContactAside();
	});
	$('#private-contact').click(function() {
		revealPrivateContactAside();
	});

	$('input[name="mobile"]').keyup(function(e) {
		var number = autoHypenPhone($(this).val());
		$(this).val(number);
	});

	function autoHypenPhone(str) {
		str = str.replace(/[^0-9]/g, '');
		var tmp = '';
		if (str.length < 4) {
			return str;
		} else if(str.length < 7) {
			tmp += str.substr(0, 3);
			tmp += '-';
			tmp += str.substr(3);
			return tmp;
		} else if(str.length < 11) {
			tmp += str.substr(0, 3);
			tmp += '-';
			tmp += str.substr(3, 3);
			tmp += '-';
			tmp += str.substr(6);
			return tmp;
		} else {
			tmp += str.substr(0, 3);
			tmp += '-';
			tmp += str.substr(3, 4);
			tmp += '-';
			tmp += str.substr(7);
			return tmp;
		}
		return str;
	}

});
</script>

<script>
$(document).ready(function() {
	$('#scrollSpyMenu a').click(function(event) {
		event.preventDefault();

		// var scrollTop = $(this).hash

		// $('html, body').animate({scrollTop: 0}, 700);

		$('html, body').animate({scrollTop: $($.attr(this, 'href')).offset().top}, 700);
	});
});
</script>