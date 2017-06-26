<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>소람병원 관리자</title>

    <!-- Core CSS - Include with every page -->
    <link href="/public/admin/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/public/admin/bower_components/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="/public/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <script src="/public/admin/js/jquery-1.11.3.min.js"></script>
</head>

<body>
<script>
    $(function(){
        $(document).on("keyup", "input:text[numberOnly]", function() {$(this).val( $(this).val().replace(/[^0-9]/gi,"") );});
    });

    function loginCheck(){
        var id          = $("#id").val();
        var password    = $("#password").val();

        if (id == ""){
            alert("아이디를 입력해 주세요.");
            return;
        }

        if (password == ""){
            alert("비밀번호를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/session/loginProcess",
            type : "POST",
            data : {"id" : id , "password" : password},
            success : function(result) {
                if (result == true){
                    location.href="/admin/main";
                }else{
                    alert("아이디와 패스워드를 다시 확인 바랍니다.");
                    return;
                }
            }
        });

    }
</script>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">소람병원 관리자</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="ID" name="id" id="id" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                            </div>
                            <!--                            <div class="checkbox">-->
                            <!--                                <label>-->
                            <!--                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me-->
                            <!--                                </label>-->
                            <!--                            </div>-->
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="javascript:loginCheck()" class="btn btn-lg btn-success btn-block">Login</a>

                        </fieldset>
                    </form>

                </div>


            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="/public/admin/js/jquery-1.11.3.min.js"></script>
<script src="/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>

</html>
