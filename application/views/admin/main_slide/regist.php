
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">메인 슬라이드 관리 > <?=($MI_SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="MI_SEQ" name="MI_SEQ" value="<?=$MI_SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>제목</strong></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="MI_TTL" name="MI_TTL" value="<?=$MI_TTL?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목(슬라이드)</strong></label>
                                <div class="col-lg-7">
                                    <textarea style="width:100%; height:200px;" class="form-control" id="MI_TTLS" name="MI_TTLS"><?=$MI_TTLS?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>부제목</strong></label>
                                <div class="col-lg-7">
                                    <textarea style="width:100%; height:200px;" class="form-control" id="MI_SUB_TTL" name="MI_SUB_TTL"><?=$MI_SUB_TTL?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>인물소개</strong></label>
                                <div class="col-lg-7">
                                    <textarea style="width:100%; height:200px;" class="form-control" id="MI_NML" name="MI_NML"><?=$MI_NML?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>인터뷰</strong></label>
                                <div class="col-lg-7">
                                    <textarea style="width:100%; height:200px;" class="form-control" id="MI_ITV" name="MI_ITV"><?=$MI_ITV?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>암 구분</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control text-center" req="" fname="구분" name="MI_CNR_TP" id="MI_CNR_TP">
                                        <option value=""  <?=($MI_CNR_TP == "") ? "selected" : ""?>>없음</option>
                                        <?foreach($cnr_type as $rows):?>
                                        <option value="<?=$rows['CC_CD']?>" <?=($MI_CNR_TP == $rows['CC_CD']) ? "selected" : ""?>><?=$rows['CC_NM']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>성명</strong></label>
                                <div class="col-lg-1">
                                    <input type="text" class="form-control" id="MI_NM" name="MI_NM" value="<?=$MI_NM?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>링크 URL</strong></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="MI_LINK" name="MI_LINK" value="<?=$MI_LINK?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>이미지</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="thumbnail_upload_file" name="thumbnail_upload_file" onchange="thumbnail_upload()">
                                    <div><a id="thumbnail_src" href="<?=$MI_IMG?>" target="_blank"><?=($MI_IMG != "") ? $MI_IMG : ""?></a></div>
                                    <small class="text-primary">* 썸네일 이미지 사이즈는 820 X 900 입니다.</small>
                                    <input type="hidden" id="MI_IMG" name="MI_IMG"  value="<?=($MI_IMG != "") ? $MI_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-sm-1">
                                    <select class="form-control" id="MI_EXPS_YN">
                                        <option value="Y" <?=($MI_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($MI_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출순서</strong></label>
                                <div class="col-lg-1">
                                    <input type="text" class="form-control" id="MI_SORT" name="MI_SORT" value="<?if($MI_EXPS_YN == "Y"){?><?=$MI_SORT?><?}?>" />
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($MI_SEQ == ""):?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$MI_SEQ?>')">삭제</button>
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
                    $('#MI_IMG').val(data.img_src);
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

        var MI_SEQ              = $.trim($('#MI_SEQ').val());
        var MI_TTL              = $.trim($('#MI_TTL').val());
        var MI_TTLS              = $.trim($('#MI_TTLS').val());
        var MI_SUB_TTL          = $.trim($('#MI_SUB_TTL').val());
        var MI_NML              = $.trim($('#MI_NML').val());
        var MI_ITV              = $.trim($('#MI_ITV').val());
        var MI_CNR_TP           = $('#MI_CNR_TP option:selected').val();
        var MI_NM               = $.trim($('#MI_NM').val());
        var MI_LINK             = $.trim($('#MI_LINK').val());
        var MI_IMG              = $.trim($('#MI_IMG').val());
        var MI_EXPS_YN          = $('#MI_EXPS_YN option:selected').val();
        var MI_SORT             = $.trim($('#MI_SORT').val());
        
        if(MI_TTL == ""){
            alert("제목을 입력해 주세요.");
            return;
        }
        if(MI_IMG == ""){
            alert("이미지를 등록해 주세요.");
            return;
        }
        if(MI_EXPS_YN == "Y" && MI_SORT == ""){
            alert("노출순서를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/main_slide/registProcess",
            type : "POST",
            data : {"MI_SEQ" : MI_SEQ, "MI_TTL" : MI_TTL, "MI_TTLS" : MI_TTLS, "MI_SUB_TTL" : MI_SUB_TTL, "MI_NML" : MI_NML, "MI_ITV" : MI_ITV, "MI_CNR_TP" : MI_CNR_TP, "MI_NM" : MI_NM, "MI_LINK" : MI_LINK, "MI_IMG" : MI_IMG, "MI_EXPS_YN" : MI_EXPS_YN, "MI_SORT" : MI_SORT},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/main_slide/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(MI_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/main_slide/deleteProcess",
                type : "POST",
                data : {"MI_SEQ" : MI_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/main_slide/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


