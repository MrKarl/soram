
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">상담 팝업 관리</h3>
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
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>기간</strong></label>
                                <div class="row form-group">
                                    <div class="col-sm-7">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><i class="fa fa-check"></i><strong>시작</strong></label>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <input class="form-control" type="text" id="CP_START_YMD" name="CP_START_YMD" value="<?=$result->CP_START_YMD?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><i class="fa fa-check"></i><strong>종료</strong></label>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <input class="form-control" type="text" id="CP_END_YMD" name="CP_END_YMD" value="<?=$result->CP_END_YMD?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>노출여부</strong></label>
                                <div class="col-lg-2">
                                    <select class="form-control" id="CP_EXPS_YN">
                                        <option value="Y" <?=($result->CP_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($result->CP_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
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

    $(document).ready(function() {
        $( "#CP_START_YMD" ).datepicker({dateFormat:"yy-mm-dd" });
        $( "#CP_END_YMD" ).datepicker({dateFormat:"yy-mm-dd" });

    });

    function checkForm(){
        
        var CP_START_YMD    = $.trim($('#CP_START_YMD').val());
        var CP_END_YMD      = $.trim($('#CP_END_YMD').val());
        var CP_EXPS_YN      = $('#CP_EXPS_YN option:selected').val();
        
        if(CP_START_YMD == ""){
            alert("시작일을 입력해 주세요.");
            return;
        }
        if(CP_END_YMD == ""){
            alert("종료일을 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/main_popup/registProcess",
            type : "POST",
            data : {"CP_START_YMD" : CP_START_YMD, "CP_END_YMD" : CP_END_YMD, "CP_EXPS_YN" : CP_EXPS_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/main_popup/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    
</script>


