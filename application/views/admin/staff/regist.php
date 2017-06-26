
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">전문 의료진 관리 > 전문 의료진 <?=($STF_SEQ == "") ? "등록" : "수정"?></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>의료진 관리</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <input type="hidden"  id="STF_SEQ" name="STF_SEQ" value="<?=$STF_SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>이름</strong></label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="STF_NM" name="STF_NM" value="<?=$STF_NM?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>구분</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control text-center" req="" fname="구분" name="STF_TYPE" id="STF_TYPE">
                                        <option value=""  <?=($STF_TYPE == "") ? "selected" : ""?>>없음</option>
                                        <?$type = array(); $i = 0;?>
                                        <?foreach($etc_type as $rows){ $type[$rows['CCC_CD']] = $rows['CCC_NM']; $i++;}?>
                                        <?foreach($stf_type as $rows):?>
                                        <option value="<?=$rows['CC_CD']?>" <?=($STF_TYPE == $rows['CC_CD']) ? "selected" : ""?>><?=$type[substr($rows['CC_CD'],0,4)]?> - <?=$rows['CC_NM']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>직책</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="STF_JOB" name="STF_JOB">
                                        <option value="" <?=($STF_JOB == "") ? "selected" : ""?>>없음</option>
                                        <?foreach($position as $rows):?>
                                        <option value="<?=$rows['CC_NM']?>" <?=($STF_JOB == $rows['CC_NM']) ? "selected" : ""?>><?=$rows['CC_NM']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>프로필 사진</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="center_upload_file" name="center_upload_file" onchange="thumbnail_upload('center')">
                                    <div><a id="center_src" href="<?=$STF_CENTER_IMG?>" target="_blank"><?=($STF_CENTER_IMG != "") ? $STF_CENTER_IMG : ""?></a></div>
                                    <small class="text-primary">* 이미지 사이즈는 580 X 450 입니다.</small>
                                    <input type="hidden" id="STF_CENTER_IMG" name="STF_CENTER_IMG"  value="<?=($STF_CENTER_IMG != "") ? $STF_CENTER_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>썸네일</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="thumbnail_upload_file" name="thumbnail_upload_file" onchange="thumbnail_upload('thumbnail')">
                                    <div><a id="thumbnail_src" href="<?=$STF_STL_IMG?>" target="_blank"><?=($STF_STL_IMG != "") ? $STF_STL_IMG : ""?></a></div>
                                    <small class="text-primary">* 썸네일 이미지 사이즈는 284 X 280 입니다.</small>
                                    <input type="hidden" id="STF_STL_IMG" name="STF_STL_IMG"  value="<?=($STF_STL_IMG != "") ? $STF_STL_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>약력</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;" class="form-control" id="STF_CAREER" name="STF_CAREER"><?=$STF_CAREER?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>논문</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;" class="form-control" id="STF_THESIS" name="STF_THESIS"><?=$STF_THESIS?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>방송</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;" class="form-control" id="STF_BC" name="STF_BC"><?=$STF_BC?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-sm-7">
                                    <select class="form-control" id="STF_EXPS_YN">
                                        <option value="Y" <?=($STF_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($STF_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($STF_SEQ == ""):?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$STF_SEQ?>')">삭제</button>
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

    function thumbnail_upload(type){
        var ext = $('#'+type+'_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#'+type+'_upload_file').val('');
            $('#'+type+'_src').val('');
            return;
        }

        var data = new FormData();
        $.each($('#'+type+'_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'staff');

        $.ajax({
            url : "/admin/upload/thumbnail_upload",
            type : "POST",
            processData: false,
            contentType: false,
            data: data,
            dataType : "json",
            success : function(data) {
                /*result = JSON.parse(data);*/
                if (data.result == "SUCCESS"){
                    if(type == 'center'){
                        $('#STF_CENTER_IMG').val(data.img_src);
                    }else{
                        $('#STF_STL_IMG').val(data.img_src);
                    }
                    $('#'+type+'_src').text(data.img_src);
                    $('#'+type+'_src').prop('href',data.img_src);
                    return;
                }else{
                    $('#'+type+'_upload_file').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }

    function checkForm(){

        var STF_SEQ             = $.trim($('#STF_SEQ').val());
        var STF_TYPE            = $('#STF_TYPE option:selected').val();
        var STF_JOB             = $.trim($('#STF_JOB').val());
        var STF_NM              = $.trim($('#STF_NM').val());
        var STF_CENTER_IMG      = $.trim($('#STF_CENTER_IMG').val());
        var STF_STL_IMG         = $.trim($('#STF_STL_IMG').val());
        var STF_CAREER          = $.trim($('#STF_CAREER').val());
        var STF_THESIS          = $.trim($('#STF_THESIS').val());
        var STF_BC              = $.trim($('#STF_BC').val());
        var STF_EXPS_YN         = $('#STF_EXPS_YN option:selected').val();
        
        if(STF_NM == ""){
            alert("이름을 입력해 주세요.");
            return;
        }
        if(STF_TYPE == ""){
            alert("구분을 선택해 주세요.");
            return;
        }
        if(STF_STL_IMG == ""){
            alert("썸네일 이미지를 등록해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/staff/registProcess",
            type : "POST",
            data : {"STF_SEQ" : STF_SEQ, "STF_TYPE" : STF_TYPE, "STF_JOB" : STF_JOB, "STF_NM" : STF_NM, "STF_CENTER_IMG" : STF_CENTER_IMG, "STF_STL_IMG" : STF_STL_IMG, "STF_CAREER" : STF_CAREER, "STF_THESIS" : STF_THESIS, "STF_BC" : STF_BC, "STF_EXPS_YN" : STF_EXPS_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/staff/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(STF_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/staff/deleteProcess",
                type : "POST",
                data : {"STF_SEQ" : STF_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/staff/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


