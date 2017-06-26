
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">전문 의료진 관리 > 전문 의료진 순서 관리</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>의료진</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong></strong></label>
                                <div class="col-lg-7 form-group">
                                    <button type="button" class="btn btn-default" onclick="selectUp();"><i class="fa fa-arrow-circle-up fa-fw"></i></button>
                                    <button type="button" class="btn btn-default" onclick="selectDown();"><i class="fa fa-arrow-circle-down fa-fw"></i></button>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong></strong></label>
                                <div class="col-lg-7 form-group">
                                    <select  class="form-control" multiple="multiple" id="STF_SEQ" style="height:500px;" >
                                        <?$type = array(); $i = 0;?>
                                        <?foreach($etc_type as $rows){ $type[$rows['CCC_CD']] = $rows['CCC_NM']; $i++;}?>
                                        <?foreach($result as $rows):?>
                                        <option value="<?=$rows['STF_SEQ']?>"><?=$rows['STF_NM']?> - <?=$type[substr($rows['CC_CD'],0,4)]?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">저장</button>
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

    var data_length = <?=count($result)?>;

    function selectUp(){
        $('#STF_SEQ option:selected').each(function(){
            var selectObj = $(this);
            if(selectObj.index() == 0 ){
                return false;
            }

            var targetObj = $('#STF_SEQ option:eq('+(selectObj.index()-1)+')');
            targetObj.before(selectObj);
        });
    }
    function selectDown(){
        $($('#STF_SEQ option:selected').get().reverse()).each(function(){
            var selectObj = $(this);
            if(selectObj.index() == $('#STF_SEQ').children().length ){
                return false;
            }
            var targetObj = $('#STF_SEQ option:eq('+(selectObj.index()+1)+')');
            targetObj.after(selectObj);
        });
    }

    function checkForm(){

        var data = new FormData();
        $('#STF_SEQ option').each(function(i, option) {
            data.append('sort_' + i, option.value);
        });
        
        data.append('length', data_length);
        
        $.ajax({
            url : "/admin/staff/sortUpdateProcess",
            type : "POST",
            processData: false,
            contentType: false,
            data: data,
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/staff/sort";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }


</script>


