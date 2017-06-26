
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">호전사례 발표 > <?=($PT_SEQ == "") ? "등록" : "수정"?></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>내용 설정</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <input type="hidden"  id="PT_SEQ" name="PT_SEQ" value="<?=$PT_SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>제목</strong></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="PT_TTL" name="PT_TTL" value="<?=$PT_TTL?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>일시</strong></label>
                                <div class="col-lg-1">
                                    <input type="text" class="form-control" id="PT_RPRT_YMD" name="PT_RPRT_YMD" value="<?=$PT_RPRT_YMD?>" placeholder="일시"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>썸네일</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="thumbnail_upload_file" name="thumbnail_upload_file" onchange="thumbnail_upload('thumbnail')">
                                    <div><a id="thumbnail_src" href="<?=$PT_STL_IMG?>" target="_blank"><?=($PT_STL_IMG != "") ? $PT_STL_IMG : ""?></a></div>
                                    <small class="text-primary">* 썸네일 이미지 사이즈는 245 X 163 입니다.</small>
                                    <input type="hidden" id="thumbnail_url" name="thumbnail_url"  value="<?=($PT_STL_IMG != "") ? $PT_STL_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>동영상 이미지</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="movie_upload_file" name="movie_upload_file" onchange="thumbnail_upload('movie')">
                                    <div><a id="movie_src" href="<?=$PT_MAIN_IMG?>" target="_blank"><?=($PT_MAIN_IMG != "") ? $PT_MAIN_IMG : ""?></a></div>
                                    <small class="text-primary">* 이미지 사이즈는 700 X 394 입니다.</small>
                                    <input type="hidden" id="movie_url" name="movie_url"  value="<?=($PT_MAIN_IMG != "") ? $PT_MAIN_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>동영상</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="vod_upload_file" name="vod_upload_file" onchange="movie_upload()">
                                    <div><a id="vod_src" href="<?=$PT_VOD_MP4?>" target="_blank"><?=($PT_VOD_MP4 != "") ? $PT_VOD_MP4 : ""?></a></div>
                                    <!--<small class="text-primary">* 이미지 사이즈는 847 X 452 입니다.</small>-->
                                    <input type="hidden" id="PT_VOD_MP4" name="PT_VOD_MP4"  value="<?=($PT_VOD_MP4 != "") ? $PT_VOD_MP4 : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="PT_CONT" name="PT_CONT"><?=$PT_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-sm-1">
                                    <select id="PT_EXPS_YN" class="form-control">
                                        <option value="Y" <?=($PT_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($PT_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($PT_SEQ == ""):?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$PT_SEQ?>')">삭제</button>
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

    $(document).ready(function(){
        $('#PT_RPRT_YMD').datepicker({dateFormat:"yy-mm-dd" });
    });

    var oEditors = [];

    // 추가 글꼴 목록
    //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "PT_CONT",
        sSkinURI: "/public/admin/smarteditor2/SmartEditor2Skin.html",
        htParams : {
            bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
            bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
            bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
            //aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
            fOnBeforeUnload : function(){
                //alert("완료!");
            }
        }, //boolean
        fOnAppLoad : function(){
            //예제 코드
            //oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
        },
        fCreator: "createSEditor2"
    });

    function thumbnail_upload(type){
        var ext = $('#'+type+'_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#'+type+'_upload_file').val('');
            $('#'+type+'_src').val('');
            $('#'+type+'_url').val('');
            return;
        }

        var data = new FormData();
        $.each($('#'+type+'_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'example');

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
                    $('#'+type+'_src').text(data.img_src);
                    $('#'+type+'_src').prop('href',data.img_src);
                    $('#'+type+'_url').val(data.img_src);
                    return;
                }else{
                    $('#'+type+'_upload_file').val('');
                    $('#'+type+'_src').val('');
                    $('#'+type+'_url').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }

    function movie_upload(){
        var ext = $('#vod_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['mp4']) == -1) {
            alert('MP4 파일만 등록해 주세요.');
            $('#vod_upload_file').val('');
            return;
        }

        var data = new FormData();
        $.each($('#vod_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'example');

        $.ajax({
            url : "/admin/upload/movie_upload",
            type : "POST",
            processData: false,
            contentType: false,
            data: data,
            dataType : "json",
            success : function(data) {
                /*result = JSON.parse(data);*/
                if (data.result == "SUCCESS"){
                    $('#PT_VOD_MP4').val(data.movie_src);
                    $('#vod_src').text(data.movie_src);
                    $('#vod_src').prop('href',data.movie_src);
                    alert("동영상 업로드가 완료되었습니다.");
                    return;
                }else{
                    $('#vod_upload_file').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }
    
    function checkForm(){

        oEditors.getById["PT_CONT"].exec("UPDATE_CONTENTS_FIELD", []);

        var PT_SEQ                  = $.trim($('#PT_SEQ').val());
        var PT_TTL                  = $.trim($('#PT_TTL').val());
        var PT_RPRT_YMD             = $.trim($('#PT_RPRT_YMD').val());
        var PT_STL_IMG              = $.trim($('#thumbnail_url').val());
        var PT_MAIN_IMG             = $.trim($('#movie_url').val());
        var PT_VOD_MP4              = $.trim($('#PT_VOD_MP4').val());
        var PT_CONT               = $.trim($('#PT_CONT').val());
        var PT_EXPS_YN              = $('#PT_EXPS_YN option:selected').val();

        if(PT_TTL == ""){
            alert("제목을 입력해 주세요.");
            return;
        }
        if(PT_RPRT_YMD == ""){
            alert("일시를 입력해 주세요.");
            return;
        }
        if(PT_STL_IMG == ""){
            alert("썸네일을 업로드해 주세요.");
            return;
        }
        if(PT_CONT == "<p>&nbsp;</p>"){
            alert("치료 후를 작성해 주세요.");
            return;
        }
        
        $.ajax({
            url : "/admin/example/registProcess",
            type : "POST",
            data : {"PT_SEQ" : PT_SEQ , "PT_TTL" : PT_TTL, "PT_RPRT_YMD" : PT_RPRT_YMD, "PT_STL_IMG" : PT_STL_IMG, "PT_MAIN_IMG" : PT_MAIN_IMG, "PT_VOD_MP4" : PT_VOD_MP4, "PT_CONT" : PT_CONT, "PT_EXPS_YN" : PT_EXPS_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/example/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(PT_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/example/deleteProcess",
                type : "POST",
                data : {"PT_SEQ" : PT_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/example/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


