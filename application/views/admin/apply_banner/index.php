
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">도서신청 배너 관리</h3>
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
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>제목</strong></label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" id="BN_TTL" name="BN_TTL" value="<?=$result->BN_TTL?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:200px;" class="form-control" id="BN_CONT" name="BN_CONT"><?=$result->BN_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>이미지</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="thumbnail_upload_file" name="thumbnail_upload_file" onchange="thumbnail_upload()">
                                    <div><a id="thumbnail_src" href="<?=$result->BN_IMG?>" target="_blank"><?=($result->BN_IMG != "") ? $result->BN_IMG : ""?></a></div>
                                    <small class="text-primary">* 썸네일 이미지 사이즈는 290 X 270 입니다.</small>
                                    <input type="hidden" id="BN_IMG" name="BN_IMG"  value="<?=($result->BN_IMG != "") ? $result->BN_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>링크 URL</strong></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="BN_LINK" name="BN_LINK" value="<?=$result->BN_LINK?>" />
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
                    $('#BN_IMG').val(data.img_src);
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

        var BN_TTL      = $.trim($('#BN_TTL').val());
        var BN_CONT     = $.trim($('#BN_CONT').val());
        var BN_IMG      = $.trim($('#BN_IMG').val());
        var BN_LINK     = $.trim($('#BN_LINK').val());

        if(BN_TTL == ""){
            alert("제목을 입력해 주세요.");
            return;
        }
        if(BN_IMG == ""){
            alert("이미지를 등록해 주세요.");
            return;
        }
        if(BN_LINK == ""){
            alert("링크 URL을 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/apply_banner/registProcess",
            type : "POST",
            data : {"BN_TTL" : BN_TTL, "BN_CONT" : BN_CONT, "BN_IMG" : BN_IMG, "BN_LINK" : BN_LINK},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/apply_banner/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }

</script>


