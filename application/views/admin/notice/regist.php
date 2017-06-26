
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">공지사항 > <?=($NI_SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="NI_SEQ" name="NI_SEQ" value="<?=$NI_SEQ?>">
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="NI_TTL" name="NI_TTL" value="<?=$NI_TTL?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>동영상</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="movie_upload_file" name="movie_upload_file" onchange="movie_upload()">
                                    <div><a id="movie_src" href="<?=$NI_VOD_MP4?>" target="_blank"><?=($NI_VOD_MP4 != "") ? $NI_VOD_MP4 : ""?></a></div>
                                    <!--<small class="text-primary">* 동영상 크기는 1GB 입니다.</small>-->
                                    <input type="hidden" id="NI_VOD_MP4" name="NI_VOD_MP4"  value="<?=($NI_VOD_MP4 != "") ? $NI_VOD_MP4 : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-9">
                                    <textarea style="width:100%; height:500px;display:none;" id="NI_CONT" name="NI_CONT"><?=$NI_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="NI_EXPS_YN">
                                        <option value="Y" <?=($NI_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($NI_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($NI_SEQ == ""):?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$NI_SEQ?>')">삭제</button>
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

    var oEditors = [];

    // 추가 글꼴 목록
    //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "NI_CONT",
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

    function movie_upload(){
        var ext = $('#movie_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['mp4']) == -1) {
            alert('MP4 파일만 등록해 주세요.');
            $('#movie_upload_file').val('');
            $('#movie_src').val('');
            return;
        }

        var data = new FormData();
        $.each($('#movie_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'NOTICE');

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
                    $('#NI_VOD_MP4').val(data.movie_src);
                    $('#movie_src').text(data.movie_src);
                    $('#movie_src').prop('href',data.movie_src);
                    alert("동영상 업로드가 완료되었습니다.");
                    return;
                }else{
                    $('#movie_upload_file').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }

    function checkForm(){

        oEditors.getById["NI_CONT"].exec("UPDATE_CONTENTS_FIELD", []);

        var NI_SEQ          = $.trim($('#NI_SEQ').val());
        var NI_TTL          = $.trim($('#NI_TTL').val());
        var NI_VOD_MP4      = $.trim($('#NI_VOD_MP4').val());
        var NI_CONT         = $.trim($('#NI_CONT').val());
        var NI_EXPS_YN      = $('#NI_EXPS_YN option:selected').val();

        if (NI_CONT == "<p>&nbsp;</p>"){
            alert("내용을 입력해 주세요.");
            $('#NI_CONT').focus();
            return;
        }

        $.ajax({
            url : "/admin/notice/registProcess",
            type : "POST",
            data : {"NI_SEQ" : NI_SEQ , "NI_TTL" : NI_TTL, "NI_VOD_MP4" : NI_VOD_MP4, "NI_CONT" : NI_CONT, "NI_EXPS_YN" : NI_EXPS_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/notice/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }


    function del(NI_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/notice/deleteProcess",
                type : "POST",
                data : {"NI_SEQ" : NI_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/notice/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }

</script>


