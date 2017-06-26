
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">1:1 상담 답변 설정 > <?=($CA_SEQ == "") ? "등록" : "수정"?></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>설정 내용</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <input type="hidden"  id="CA_SEQ" name="CA_SEQ" value="<?=$CA_SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>우선순위</strong></label>
                                <div class="col-lg-3">
                                    <select class="form-control" id="CA_SORD">
                                        <?for($i = 1; $i <= 5; $i++):?>
                                            <option value="<?=$i?>" <?=($i == $is_rank) ? "selected" : ""?>><?=$i?></option>
                                        <?endfor?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="CA_TTL" value="<?=$CA_TTL?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" id="CA_CONT" width="100%" rows="10" ><?=$CA_CONT?></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($CA_SEQ == ""):?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$CA_SEQ?>')">삭제</button>
                                    <?endif?>
                                    <button type="button" id="btn_cancel" class="btn btn-default" onclick="history.go(-1)">취소</button>
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


</div>
<script type="text/javascript">

    function checkForm(){

        var CA_SEQ          = $.trim($('#CA_SEQ').val());
        var CA_SORD         = $('#CA_SORD option:selected').val();
        var CA_TTL          = $.trim($('#CA_TTL').val());
        var CA_CONT         = $.trim($('#CA_CONT').val());
        if (CA_CONT == "<p>&nbsp;</p>"){
            alert("답변을 입력해 주세요.");
            $('#CA_CONT').focus();
            return;
        }

        $.ajax({
            url : "/admin/adm_answer/registProcess",
            type : "POST",
            data : {"CA_SEQ" : CA_SEQ , "CA_SORD" : CA_SORD, "CA_TTL" : CA_TTL, "CA_CONT" : CA_CONT},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/adm_answer/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(CA_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/adm_answer/deleteProcess",
                type : "POST",
                data : {"CA_SEQ" : CA_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/adm_answer/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }
</script>


