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


	<title>소람 로그인</title>
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
						<input type="text" placeholder="아이디" name="login_id"/>
						<span class="clear-input">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
							    <path fill="#868686" fill-rule="evenodd" d="M16.594.026l1.38 1.38L1.406 17.974l-1.38-1.38L16.594.026z"/>
							    <path fill="#868686" fill-rule="evenodd" d="M1.41.014L17.986 16.59l-1.396 1.396L.014 1.41 1.41.014z"/>
							</svg>
						</span>
					</div>
				</div>

				<div class="form-group">
					<div class="btn-group">
						<input type="password" placeholder="비밀번호" name="login_pwd"/>
						<span class="clear-input">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
							    <path fill="#868686" fill-rule="evenodd" d="M16.594.026l1.38 1.38L1.406 17.974l-1.38-1.38L16.594.026z"/>
							    <path fill="#868686" fill-rule="evenodd" d="M1.41.014L17.986 16.59l-1.396 1.396L.014 1.41 1.41.014z"/>
							</svg>
						</span>
					</div>
				</div>

				<div class="form-group" style="width:100%;">
					<input id="signInBtn" value="로그인" class="btn btn-block" style="width:410px; height:52px; background-color:#0089cf; color:white; font-family:'Nanum Square'; font-weight:400;margin: auto;"/>
				</div>


			</form>
		</div>
	</div>
</div>


<script>
$(function() {
	$('#signInBtn').click(function(e) {
		var login_id         = $.trim($('input[name="login_id"]').val());
	    var login_pwd         = $.trim($('input[name="login_pwd"]').val());
	    
		$.ajax({
	        type: "POST",
		    url: "/test/session/login",
	        data:{
	        	"login_id" : login_id, 
	        	"login_pwd" : login_pwd, 
	        },
	        success : function(result){
	        	alert(result);
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
				console.log(isAllChecked);
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