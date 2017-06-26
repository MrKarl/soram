
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">고객의소리 답변 설정 > <?=($SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="SEQ" name="SEQ" value="<?=$SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>우선순위</strong></label>
                                <div class="col-lg-3">
                                    <select class="form-control" id="SORD">
                                        <?for($i = 1; $i <= 5; $i++):?>
                                            <option value="<?=$i?>" <?=($i == $is_rank) ? "selected" : ""?>><?=$i?></option>
                                        <?endfor?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="TTL" value="<?=$TTL?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" id="CONT" width="100%" rows="10" ><?=$CONT?></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($SEQ == ""):?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$SEQ?>')">삭제</button>
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

        var SEQ          = $.trim($('#SEQ').val());
        var SORD         = $('#SORD option:selected').val();
        var TTL          = $.trim($('#TTL').val());
        var CONT         = $.trim($('#CONT').val());
        if (CONT == "<p>&nbsp;</p>"){
            alert("답변을 입력해 주세요.");
            $('#CONT').focus();
            return;
        }

        $.ajax({
            url : "/admin/voice_answer/registProcess",
            type : "POST",
            data : {"SEQ" : SEQ , "SORD" : SORD, "TTL" : TTL, "CONT" : CONT},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/voice_answer/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/voice_answer/deleteProcess",
                type : "POST",
                data : {"SEQ" : SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/voice_answer/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }
</script>


