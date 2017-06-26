
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">메인 호전사례 슬라이드 관리 > <?=($TI_SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="TI_SEQ" name="TI_SEQ" value="<?=$TI_SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>제목</strong></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="TI_TTL" name="TI_TTL" value="<?=$TI_TTL?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>인터뷰</strong></label>
                                <div class="col-lg-7">
                                    <textarea style="width:100%; height:200px;" class="form-control" id="TI_ITV" name="TI_ITV"><?=$TI_ITV?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>성명</strong></label>
                                <div class="col-lg-1">
                                    <input type="text" class="form-control" id="TI_NM" name="TI_NM" value="<?=$TI_NM?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>나이</strong></label>
                                <div class="col-lg-1">
                                    <input type="text" class="form-control" id="TI_AGE" name="TI_AGE" value="<?=$TI_AGE?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>암 구분</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control text-center" req="" fname="구분" name="TI_CNR_TP" id="TI_CNR_TP">
                                        <option value=""  <?=($TI_CNR_TP == "") ? "selected" : ""?>>없음</option>
                                        <?foreach($cnr_type as $rows):?>
                                        <option value="<?=$rows['CC_CD']?>" <?=($TI_CNR_TP == $rows['CC_CD']) ? "selected" : ""?>><?=$rows['CC_NM']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>링크 URL</strong></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="TI_LINK" name="TI_LINK" value="<?=$TI_LINK?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>이미지</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="thumbnail_upload_file" name="thumbnail_upload_file" onchange="thumbnail_upload()">
                                    <div><a id="thumbnail_src" href="<?=$TI_IMG?>" target="_blank"><?=($TI_IMG != "") ? $TI_IMG : ""?></a></div>
                                    <small class="text-primary">* 썸네일 이미지 사이즈는 580 X 260 입니다.</small>
                                    <input type="hidden" id="TI_IMG" name="TI_IMG"  value="<?=($TI_IMG != "") ? $TI_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-sm-1">
                                    <select class="form-control" id="TI_EXPS_YN">
                                        <option value="Y" <?=($TI_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($TI_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출순서</strong></label>
                                <div class="col-lg-1">
                                    <input type="text" class="form-control" id="TI_SORT" name="TI_SORT" value="<?if($TI_EXPS_YN == "Y"){?><?=$TI_SORT?><?}?>" />
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($TI_SEQ == ""):?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$TI_SEQ?>')">삭제</button>
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

    function thumbnail_upload(){
        var ext = $('#thumbnail_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#thumbnail_upload_file').val('');
            return;
        }

        var data = new FormData();
        $.each($('#thumbnail_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'main');

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
                    $('#TI_IMG').val(data.img_src);
                    $('#thumbnail_src').text(data.img_src);
                    $('#thumbnail_src').prop('href',data.img_src);
                    return;
                }else{
                    $('#thumbnail_upload_file').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }

    function checkForm(){

        var TI_SEQ              = $.trim($('#TI_SEQ').val());
        var TI_TTL              = $.trim($('#TI_TTL').val());
        var TI_ITV              = $.trim($('#TI_ITV').val());
        var TI_NM               = $.trim($('#TI_NM').val());
        var TI_AGE              = $.trim($('#TI_AGE').val());
        var TI_CNR_TP           = $('#TI_CNR_TP option:selected').val();
        var TI_LINK             = $.trim($('#TI_LINK').val());
        var TI_IMG              = $.trim($('#TI_IMG').val());
        var TI_EXPS_YN          = $('#TI_EXPS_YN option:selected').val();
        var TI_SORT             = $.trim($('#TI_SORT').val());
        
        if(TI_TTL == ""){
            alert("제목을 입력해 주세요.");
            return;
        }
        if(TI_ITV == ""){
            alert("인터뷰를 입력해 주세요.");
            return;
        }
        if(TI_NM == ""){
            alert("성함을 입력해 주세요.");
            return;
        }
        if(TI_AGE == ""){
            alert("나이를 입력해 주세요.");
            return;
        }
        if(TI_CNR_TP == ""){
            alert("암 구분을 선택해 주세요.");
            return;
        }
        if(TI_LINK == ""){
            alert("링크 URL을 입력해 주세요.");
            return;
        }
        if(TI_IMG == ""){
            alert("이미지를 등록해 주세요.");
            return;
        }
        if(TI_EXPS_YN == "Y" && TI_SORT == ""){
            alert("노출순서를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/tmmnt_slide/registProcess",
            type : "POST",
            data : {"TI_SEQ" : TI_SEQ, "TI_TTL" : TI_TTL, "TI_ITV" : TI_ITV, "TI_NM" : TI_NM, "TI_AGE" : TI_AGE, "TI_CNR_TP" : TI_CNR_TP, "TI_LINK" : TI_LINK, "TI_IMG" : TI_IMG, "TI_EXPS_YN" : TI_EXPS_YN, "TI_SORT" : TI_SORT},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/tmmnt_slide/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(TI_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/tmmnt_slide/deleteProcess",
                type : "POST",
                data : {"TI_SEQ" : TI_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/tmmnt_slide/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


