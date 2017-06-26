<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi">

	<!-- 나눔스퀘어 -->
	<link href="/assets/font/nanumsquare/nanumsquare.css" rel="stylesheet" type="text/css">
	<!-- 나눔바른고딕 -->
	<link href="/assets/font/nanumBarunGothic/NanumBarunGothic.css" rel="stylesheet" type="text/css">

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<title>소람 회원가입</title>
	<style>
		body {
			text-align: center;
			background-color: #f6f6f6;
		}

		#form-field input[type="text"], #form-field input[type="password"], #form-field input[type="email"] {
			height:52px;
			width: 100%;
			background-color: #ffffff;
			border: solid 2px #e1e1e1;
		}

		.btn-group{
			width: 100%;
		}

		.clear-input {
			display: none;
			position: absolute;
			right:5px;
			top:0;
			bottom:0;
			height:18px;
			margin:auto;
			font-size:18px;
			cursor:pointer;
			color:#ccc;
		}

		input:focus ~ .clear-input {
			display:initial;
		}

		input {
			padding-left:18px;
			padding-top:18px;
			padding-bottom: 18px;
			font-family: 'Nanum Barun Gothic';
			font-size: 16px;
			color:black;
		}

		input::-webkit-input-placeholder { 
			color: #868686;
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

		#detailTermsOfUse {
		    /*width: 410px;*/
		    margin: auto;
		    text-align: left;
			background-color: #e9ebed;
			border: solid 2px #ebebeb;
			font-family: 'NanumBarunGothic',
			font-size:14px;
			color:#868686;
		    padding: 23px;
		}

		.terms-detail {
			float:right;
			/*margin-right:15px;*/
			font-family: 'NanumBarunGothic',
			font-size:14px;
			color:#868686;
			text-decoration: underline;
			cursor:pointer;
		}

		.container {
			width: 410px;
			z-index:1;
		}




		.dimmed {
			display: none;
		    position: fixed;
		    top: 0;
		    left: 0;
		    right: 0;
		    bottom: 0;
		    z-index: 100;
		    width: 100%;
		    height: 100%;
		    background: #000;
		    opacity: .7;
		    filter: alpha(opacity=70);
		    -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=70)'
		    z-index:1;
		}

		.myCustomModal {
			display: none;
		    position: absolute;
		    top: 20px;
		    width: 370px;
		    height: 470px;
		    z-index: 200;
		    left: 0;
		    right: 0;
		    margin: auto;
		}

		.myCustomModal-closeBtn {
			background-color: transparent;
			height:50px;
		    text-align: right;
	        color: white;
	        line-height: 3.6;
		}

		.myCustomModal-content {
			background-color:white;
			height: 410px;
		}


		.has-error .checkbox, .has-error .checkbox-inline, .has-error .control-label, .has-error .help-block, .has-error .radio, .has-error .radio-inline, .has-error.checkbox label, .has-error.checkbox-inline label, .has-error.radio label, .has-error.radio-inline label {
			display: block;
			color:red;
			text-align: left;
		}
		
		.help-block {
			display: none;
		}

		.has-error input[type="text"], .has-error input[type="password"] {
			border:2px solid red !important;
		}
	</style>
</head>

<body>
	<div id="wrap">
	<div class="dimmed"></div>

	<div class="myCustomModal">
		<div class="myCustomModal-closeBtn">
			<a href="#">
				<img src="/assets/img/btn_close_term.png"/>
			</a>
		</div>

		<div class="myCustomModal-content">
			<iframe style="width: 100%; height: 100%; border:none;"></iframe>

			<!-- <div class="myCustomModal-header">
				SORAM
			</div>

			<div class="myCustomModal-body">
				<div class="termsOfUse">
					<iframe src="terms/test_termsOfUse" style="width: 100%; height: 100%; border:none;"></iframe>
				</div>

				<div class="privacyList">
					1. 수집하는 개인정보 항목
					회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.
					- 수집항목 : 이름, 생년월일, 성별, 로그인ID, 비밀번호, 비밀번호 질문과 답변, 자택 전화번호, 자택 주소, 휴대전화번호, 이메일, 직업, 취미 결혼여부, 기념일, 서비스 이용기록, 접속 로그
					- 개인정보 수집방법 : 홈페이지(회원가입)
				</div>

				<div class="collectingPrivacy">
					2. 개인정보의 수집 및 이용목적
					회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.
					- 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산 : 콘텐츠 제공
					- 회원 관리 : 회원제 서비스 이용에 따른 본인확인, 개인 식별, 가입 의사 확인, 연령확인
					- 마케팅 및 광고에 활용 : 신규 서비스(제품) 개발 및 특화 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계
					3. 개인정보의 보유 및 이용기간
					회사는 개인정보 수집 및 이용목적이 달성된 후에는 예외 없이 해당 정보를 지체 없이 파기합니다.
				</div>

			</div> -->			
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin-top:50px;">
				<img src="/assets/img/logo.png">
			</div>
			<div class="col-md-12" style="margin:29px auto;"">
				<span class="nanumBarunGothic" style="font-size:16px; font-weight:600">회원가입을 환영합니다.</span>
			</div>
		</div>


		<div class="row">
			<form role="form" id="form-field">
				<div class="form-group">
					<div class="btn-group">
						<input type="text" placeholder="이름" name="user_name"/>
						<span class="clear-input">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
							    <path fill="#868686" fill-rule="evenodd" d="M16.594.026l1.38 1.38L1.406 17.974l-1.38-1.38L16.594.026z"/>
							    <path fill="#868686" fill-rule="evenodd" d="M1.41.014L17.986 16.59l-1.396 1.396L.014 1.41 1.41.014z"/>
							</svg>

						</span>
					</div>
					<span class="help-block">이름을 정확히 입력해주세요.</span>
				</div>

				<div class="form-group">
					<div class="btn-group">
						<input type="text" placeholder="아이디" name="user_id"/>
						<span class="clear-input">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
							    <path fill="#868686" fill-rule="evenodd" d="M16.594.026l1.38 1.38L1.406 17.974l-1.38-1.38L16.594.026z"/>
							    <path fill="#868686" fill-rule="evenodd" d="M1.41.014L17.986 16.59l-1.396 1.396L.014 1.41 1.41.014z"/>
							</svg>
						</span>
					</div>
					<span class="help-block">아이디를 정확히 입력해주세요.</span>
				</div>

				<div class="form-group">
					<div class="btn-group">
						<input type="password" placeholder="비밀번호" name="user_pw"/>
						<span class="clear-input">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
							    <path fill="#868686" fill-rule="evenodd" d="M16.594.026l1.38 1.38L1.406 17.974l-1.38-1.38L16.594.026z"/>
							    <path fill="#868686" fill-rule="evenodd" d="M1.41.014L17.986 16.59l-1.396 1.396L.014 1.41 1.41.014z"/>
							</svg>
						</span>
					</div>
					<span class="help-block">비밀번호를 정확히 입력해주세요.</span>
				</div>

				<div class="form-group">
					<div class="btn-group">
						<input type="password" placeholder="비밀번호 재입력" name="user_pw_check"/>
						<span class="clear-input">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
							    <path fill="#868686" fill-rule="evenodd" d="M16.594.026l1.38 1.38L1.406 17.974l-1.38-1.38L16.594.026z"/>
							    <path fill="#868686" fill-rule="evenodd" d="M1.41.014L17.986 16.59l-1.396 1.396L.014 1.41 1.41.014z"/>
							</svg>
						</span>
					</div>
					<span class="help-block">비밀번호를 정확히 입력해주세요.</span>
				</div>

				<!-- Email : Spec out -->
				<!-- 
				<div class="form-group">
					<div class="btn-group">
						<input type="email" placeholder="soram@soram.kr" name="email"/>
						<span class="clear-input">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
							    <path fill="#868686" fill-rule="evenodd" d="M16.594.026l1.38 1.38L1.406 17.974l-1.38-1.38L16.594.026z"/>
							    <path fill="#868686" fill-rule="evenodd" d="M1.41.014L17.986 16.59l-1.396 1.396L.014 1.41 1.41.014z"/>
							</svg>
						</span>
					</div>
				</div> 
				-->

				<div class="form-group">
					<div class="btn-group">
						<input type="text" placeholder="01052274071" name="mobile" maxlength=13/>
						<!-- <span class="glyphicon glyphicon-remove clear-input"></span> -->
						<span class="clear-input">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
							    <path fill="#868686" fill-rule="evenodd" d="M16.594.026l1.38 1.38L1.406 17.974l-1.38-1.38L16.594.026z"/>
							    <path fill="#868686" fill-rule="evenodd" d="M1.41.014L17.986 16.59l-1.396 1.396L.014 1.41 1.41.014z"/>
							</svg>
						</span>
					</div>
					<span class="help-block">휴대폰번호를 정확히 입력해주세요.</span>
				</div>



				<div class="form-group squareCheckbox">
					<label>
						<input type="checkbox" name="allAgreed" checked">
						<img/>
						아래 내용에 모두 동의합니다.
					</label>
				</div>

				<div class="form-group" id="detailTermsOfUse">
					<div class="form-group squareCheckbox">
						<label>
							<input type="checkbox" name="agreeTermsOfUse" class="checkbox-group">
							<img/>
							서비스 이용약관
						</label>

						<div class="terms-detail" value="termsOfUse">
							보기
						</div>
					</div>

					<div class="form-group squareCheckbox">
						<label>
							<input type="checkbox" name="agreePrivacyList" class="checkbox-group">
							<img/>
							수집하는 개인정보 항목
						</label>

						<div class="terms-detail" value="privacyList">
							보기
						</div>
					</div>

					<div class="form-group squareCheckbox">
						<label>
							<input type="checkbox" name="agreeWithCollectingPrivacy" class="checkbox-group">
							<img/>
							개인정보 수집/이용 동의, 보유 및 이용기간
						</label>

						<div class="terms-detail" value="collectingPrivacy">
							보기
						</div>
					</div>

					<div class="form-group squareCheckbox">
						<label>
							<input type="checkbox" name="agreeAdPush" class="checkbox-group not-necessary-term">
							<img/>
							홍보성 정보 수신 동의 (선택)
						</label>
					</div>

					<span class="help-block" style="margin-top:40px;">필수 이용약관에 동의가 필요합니다.</span>
				</div>
				





				<!-- 
				<div class="form-group">
					<label for="sns">SMS수신여부</label>

					<label class="radio-inline"><input type="radio" name="sns_check" value="Y">수신함</label>
					<label class="radio-inline"><input type="radio" name="sns_check" value="N" selected>수신안함</label>				
				</div>

				<div class="form-group">
					<label for="sns">이메일수신여부</label>

					<label class="radio-inline"><input type="radio" name="email_check" value="Y">수신함</label>
					<label class="radio-inline"><input type="radio" name="email_check" value="N" selected>수신안함</label>				
				</div>


				<div class="form-group">
					<select id="applyer">
	                    <option value="">선택</option>
	                    <option value="환자">환자</option>
	                    <option value="보호자">보호자</option>
	                    <option value="일반인">일반인</option>
	                </select>
				</div>

				<div class="form-group">
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

				<div class="form-group">
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

				<div class="form-group">
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
				</div> -->

				<div class="form-group" style="width:100%;">
					<!-- <input id="loginBtn" type="submit" value="로그인" class="btn btn-default"/> -->
					<input id="signonBtn" value="회원가입" class="btn btn-block" style="width:410px; height:52px; background-color:#0089cf; color:white; font-family:'Nanum Square'; font-weight:400;margin: auto;"/>
				</div>


			</form>
		</div>
	</div>
</div>


<script>
$(function() {
	$('#signonBtn').click(function(e) {
		(function allResetCSS() {
			$('#form-field input').css('border', 'none');
			$('#form-field .form-group').removeClass('has-error');
		})();


		function validCheckElement($element, minLength) {
			if (minLength === undefined) {
				minLength = 1;
			}
			var valueOfElement = $.trim($element.val());
			var lengthOfElement = valueOfElement.length;
			if (lengthOfElement < minLength) {
				$element.parents('.form-group').addClass('has-error');
				return false;
			} else {
				$element.parents('.form-group').removeClass('has-error');
				return true;
			}
		}

		function passWordClear() {
			$('#form-field input[type="password"]').text('');
			$('#form-field input[type="password"]').val('');
			
			$('.squareCheckbox input').prop('checked', false);
		}
	
		var $userDataElements = [
			$('input[name="user_name"]'),
			$('input[name="user_id"]'),
			$('input[name="user_pw"]'),
			$('input[name="user_pw_check"]'),
			$('input[name="mobile"]'),
		];

		var isAllValid = true;
		for (var i=0; i<$userDataElements.length; i++) {
			if (validCheckElement($userDataElements[i]) == false) {
				isAllValid = false;
			}
		}

		if (isAllValid == false) {
			//passWordClear();
			return;
		}


		// 패스워드 같은지 체크
		function checkPasswordSame() {
			var pass = $.trim($('input[name="user_pw"]').val());
			var passAgain = $.trim($('input[name="user_pw_check"]').val());
			
			if (pass != passAgain) {
				$('input[name="user_pw_check"]').parents('.form-group').addClass('has-error');

				
				$('input[name="user_pw_check"]').parents('.form-group').children('.help-block').text('비밀번호가 서로 다릅니다.');
				$('input[name="user_pw_check"]').text('');
				$('input[name="user_pw_check"]').val('');


				// passWordClear();
				return false;
			}
			return true;
		}

		if (checkPasswordSame() === false) {
			console.log("비밀번호가 서로 다릅니다.");
			return;
		}



		// 이용약관 동의 체크
		function checkTermsOfUse() {
			var isSuccess = true;;
			$('.checkbox-group').not('.not-necessary-term').each(function() {
				if ($(this).prop('checked') == false) {
					isSuccess = false;
					return false;
				}
			});
			return isSuccess;
		};

		if (checkTermsOfUse() == false) {
			$('#detailTermsOfUse').addClass('has-error');
		} else {
			$('#detailTermsOfUse').removeClass('has-error');
		}


		//validCheckElement($('input[name="user_name"]'))

		// var jsonData = {
	 //    	"user_seq" : user_seq,
	 //    	"user_name" : user_name,
	 //    	"user_id" : user_id, 
	 //    	"user_pw" : user_pw, 
	 //    	"email" : email, 
	 //    	"mobile" : mobile,
	 //    	"telephone" : telephone, 
	 //    	"sns_check" : sns_check, 
	 //    	"email_check" : email_check, 
	 //    	"applyer" : applyer, 
	 //    	"region" : region, 
	 //    	"interest" : interest, 
	 //    	"route" : route
	 //    },




		var user_seq        = $.trim($('#user_seq').val());
	    var user_name       = $.trim($('input[name="user_name"]').val());
	    var user_id         = $.trim($('input[name="user_id"]').val());
	    var user_pw         = $.trim($('input[name="user_pw"]').val());
	    var user_pw_check   = $.trim($('input[name="user_pw_check"]').val());
	    var email           = $.trim($('input[name="email"]').val());
	    var mobile           = $.trim($('input[name="mobile"]').val());
	    var telephone           = $.trim($('input[name="mobile"]').val());
	    
	    var sns_check       = $('input:radio[name="sns_check"]:checked').val();
	    var email_check     = $('input:radio[name="email_check"]:checked').val();


	    var applyer         = $('#applyer option:selected').val();
	    var region          = $('#region option:selected').val();
	    var interest        = $('#interest option:selected').val();
	    var route           = $('#route option:selected').val();

	    // var validElementCheck = function(ele, minLength) {
	    // 	if (minLength === undefined) {
	    // 		minLength = 1;
	    // 	}
	    // 	if (ele === undefined || ele.length < minLength) {
	    // 		return false;
	    // 	}

	    // 	return true;
	    // }

	    // var validElementsCheck = function(arr) {
	    // 	for(var i=0; i<arr.length; i++) {
	    // 		if (validElementCheck(arr[i]) == false) {
	    // 			return false;
	    // 		}
	    // 	}

	    // 	return true;
	    // }

	    // var isValid = validElementsCheck([user_name, user_id, user_pw, user_pw_check, mobile]);
	    // console.log(isValid);



/*

		$.ajax({
	        type:"POST",
	        url:"/test/session/signup",
	        data:{
	        	"user_seq" : user_seq ,
	        	"user_name" : user_name,
	        	"user_id" : user_id, 
	        	"user_pw" : user_pw, 
	        	"email" : email, 
	        	"mobile" : mobile,
	        	"telephone" : telephone, 
	        	"sns_check" : sns_check, 
	        	"email_check" : email_check, 
	        	"applyer" : applyer, 
	        	"region" : region, 
	        	"interest" : interest, 
	        	"route" : route
	        },
	        success : function(result){
	            console.log(result);
	            // if (result == true) {
	            //     //location.href=final_url;

	            // } else {
	            //     if (result == "id_overlap") {
	            //         alert("사용중인 아이디 입니다.");
	            //         return;
	            //     } else {
	            //         alert("오류가 발생하였습니다.");
	            //         return;
	            //     }

	            // }
	        }
	    });
*/
	});



	$('input[name="mobile"]').keyup(function(e) {
		var number = autoHypenPhone($(this).val());
		$(this).val(number);
	});


	// Clear a Sibling input field value
	$('.clear-input').click(function() {
		$(this).siblings('input').val('');
	});


	$('.terms-detail').click(function() {
		var termsType = $(this).attr('value');
		var termsURL = '/test/terms/' + termsType;
		$('.myCustomModal .myCustomModal-content iframe').attr('src', termsURL);

		$('.dimmed').show();
		$('.myCustomModal').show();
	});


	$('.myCustomModal-closeBtn').click(function() {
		$('.dimmed').hide();
		$('.myCustomModal').hide();
	});


	$('input[name="allAgreed"]').click(function() {
		if ($(this).prop('checked')) {
			// $('.checkbox-group').prop('checked', 'checked');
			$('.checkbox-group').prop('checked', true);
		} else {
			$('.checkbox-group').prop('checked', false);
		}
	});

	$('.checkbox-group').change(function() {
		var isAllChecked = true;

		$('.checkbox-group').each(function() {
			if ($(this).is(':checked') != true) {
				isAllChecked = isAllChecked && false;
				return;
			}
		});

		if (isAllChecked) {
			$('input[name="allAgreed"]').prop('checked', true);
		} else {
			$('input[name="allAgreed"]').prop('checked', false);
		}
	});
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

</script>

</body>
</html>