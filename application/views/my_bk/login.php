<!DOCTYPE>

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


	<title>로그인</title>
	<style>
		body {
			text-align: center;
		}
	</style>
</head>

<body>
<div id="wrap">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>SORAM</h2>
		</div>

		<div class="col-md-12">
			<h6>소람 로그인</h6>
		</div>
	</div>


	<div class="row">
		<form role="form">
			<div class="form-group">
				<!-- <label for="id">
					ID
				</label> -->
				<input type="text" placeholder="아이디" name="login_id"/>
			</div>

			<div class="form-group">
				<!-- <label for="id">
					ID
				</label> -->
				<input type="password" placeholder="비밀번호" name="login_pwd"/>
			</div>


			<div class="form-group">
				<!-- <input id="loginBtn" type="submit" value="로그인" class="btn btn-default"/> -->
				<input id="loginBtn" value="로그인" class="btn btn-default"/>
			</div>
		</form>
	</div>
</div>
</div>


<script>
$(function() {
	$('#loginBtn').click(function(e) {
		// e.preventDefault();
		$.ajax({
		    method: "POST",
		    url: "/test/session/login",
		    data: {
		        login_id: $('input[name="login_id"]').val(),
		        login_pwd: $('input[name="login_pwd"]').val()
		    }
		})
		.done(function(msg) {
			console.log(msg );
		});
	});
});
</script>

</body>
</html>