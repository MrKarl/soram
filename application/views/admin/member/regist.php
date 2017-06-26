
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">회원관리 > 상세 정보</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <input type="hidden"  id="MBR_SEQ" name="MBR_SEQ" value="<?=$MBR_SEQ?>">
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이름</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="MBR_NM" name="MBR_NM" value="<?=$MBR_NM?>" readonly>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>아이디</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="MBR_ID" name="MBR_ID" value="<?=$MBR_ID?>" readonly>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>비밀번호</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="MBR_PWD" name="MBR_PWD" value="" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이메일주소</strong></label>
                                <div class="col-sm-2 pull-left">
                                    <input type="text" class="form-control" id="MBR_EMAIL" name="MBR_EMAIL" value="<?=$MBR_EMAIL?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>핸드폰번호</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="MBR_CPH" name="MBR_CPH" value="<?=$MBR_CPH?>" />

                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>SMS 수신여부</strong></label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="MBR_SMS_YN" name="MBR_SMS_YN" value="<?=($MBR_SMS_YN == "Y") ? "수신" : "미수신"?>" readonly/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이메일 수신여부</strong></label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="MBR_SMS_YN" name="MBR_SMS_YN" value="<?=($MBR_EMAIL_YN == "Y") ? "수신" : "미수신"?>" readonly/>
                                </div>
                            </div>


                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$MBR_SEQ?>')">삭제</button>
                                    <button type="button" id="btn_cancle" class="btn btn-default" onclick="history.go(-1)">취소</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <script type="text/javascript">

        function checkForm(){

            var MBR_SEQ     = $.trim($('#MBR_SEQ').val());
            var MBR_PWD     = $.trim($('#MBR_PWD').val());
            var MBR_EMAIL   = $.trim($('#MBR_EMAIL').val());
            var MBR_CPH     = $.trim($('#MBR_CPH').val());

            if (MBR_CPH == ""){
                alert("휴대폰번호를 입력해 주세요.");
                $('#MBR_CPH').focus();
                return;
            }


            $.ajax({
                url : "/admin/member/registProcess",
                type : "POST",
                data : {"MBR_SEQ" : MBR_SEQ , "MBR_PWD" : MBR_PWD, "MBR_EMAIL" : MBR_EMAIL , "MBR_CPH" : MBR_CPH},
                success : function(result) {
                    if (result == true){
                        alert("처리 되었습니다.");
                        location.href="/admin/member/index";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
        function del(MBR_SEQ){
            if (confirm('삭제 하시겠습니까?')){
                $.ajax({
                    url : "/admin/member/deleteProcess",
                    type : "POST",
                    data : {"MBR_SEQ" : MBR_SEQ},
                    success : function(result) {
                        if (result == true){
                            alert("삭제 되었습니다.");
                            location.href="/admin/member/index";
                        }else{
                            alert("오류가 발생 되었습니다.");
                            return;
                        }
                    }
                });
            }
        }


    </script>


