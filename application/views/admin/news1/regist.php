
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">방송보도 > <?=($BC_SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="BC_SEQ" name="BC_SEQ" value="<?=$BC_SEQ?>">


                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="BC_TTL" name="BC_TTL" value="<?=$BC_TTL?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>썸네일</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="thumbnail_upload_file" name="thumbnail_upload_file" onchange="thumbnail_upload()">
                                    <div><a id="thumbnail_src" href="<?=$BC_MAIN_IMG?>" target="_blank"><?=($BC_MAIN_IMG != "") ? $BC_MAIN_IMG : ""?></a></div>
                                    <small class="text-primary">* 썸네일 이미지 사이즈는 480 X 271 입니다.</small>
                                    <input type="hidden" id="BC_MAIN_IMG" name="BC_MAIN_IMG"  value="<?=($BC_MAIN_IMG != "") ? $BC_MAIN_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>동영상</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="movie_upload_file" name="movie_upload_file" onchange="movie_upload()">
                                    <div><a id="movie_src" href="<?=$BC_VOD_MP4?>" target="_blank"><?=($BC_VOD_MP4 != "") ? $BC_VOD_MP4 : ""?></a></div>
                                    <!--<small class="text-primary">* 동영상 크기는 1GB 입니다.</small>-->
                                    <input type="hidden" id="BC_VOD_MP4" name="BC_VOD_MP4"  value="<?=($BC_VOD_MP4 != "") ? $BC_VOD_MP4 : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>보도일</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="BC_RPRT_YMD"  name="BC_RPRT_YMD" value="<?=$BC_RPRT_YMD?>" style="width:100px" placeholder="보도일">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="BC_CONT" name="BC_CONT"><?=$BC_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="BC_EXPS_YN">
                                        <option value="Y" <?=($BC_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($BC_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>병원장 동영상</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="BC_TYPE1_YN">
                                        <option value="Y" <?=($BC_TYPE1_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($BC_TYPE1_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>한방대표원장 동영상</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="BC_TYPE2_YN">
                                        <option value="Y" <?=($BC_TYPE2_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($BC_TYPE2_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($BC_SEQ == ""):?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$BC_SEQ?>')">삭제</button>
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

    $(document).ready(function() {
        $( "#BC_RPRT_YMD" ).datepicker({dateFormat:"yy-mm-dd" });

    });

    var oEditors = [];

    // 추가 글꼴 목록
    //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "BC_CONT",
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

    function thumbnail_upload(){
        var ext = $('#thumbnail_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#thumbnail_upload_file').val('');
            $('#thumbnail_src').val('');
            return;
        }

        var data = new FormData();
        $.each($('#thumbnail_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'broadcasting');

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
                    $('#BC_MAIN_IMG').val(data.img_src);
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
        data.append('folder' , 'TV');

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
                    $('#BC_VOD_MP4').val(data.movie_src);
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

        oEditors.getById["BC_CONT"].exec("UPDATE_CONTENTS_FIELD", []);

        var BC_SEQ          = $.trim($('#BC_SEQ').val());
        var BC_TTL          = $.trim($('#BC_TTL').val());
        var BC_CONT         = $.trim($('#BC_CONT').val());
        var BC_VOD_MP4      = $.trim($('#BC_VOD_MP4').val());
        var BC_MAIN_IMG     = $.trim($('#BC_MAIN_IMG').val());
        var BC_EXPS_YN      = $('#BC_EXPS_YN option:selected').val();
        var BC_RPRT_YMD     = $.trim($('#BC_RPRT_YMD').val());
        var BC_TYPE1_YN     = $('#BC_TYPE1_YN option:selected').val();
        var BC_TYPE2_YN     = $('#BC_TYPE2_YN option:selected').val();

        if (BC_CONT == "<p>&nbsp;</p>"){
            alert("내용을 입력해 주세요.");
            $('#BC_CONT').focus();
            return;
        }

        $.ajax({
            url : "/admin/news1/registProcess",
            type : "POST",
            data : {"BC_SEQ" : BC_SEQ , "BC_TTL" : BC_TTL, "BC_CONT" : BC_CONT, "BC_VOD_MP4" : BC_VOD_MP4, "BC_MAIN_IMG" : BC_MAIN_IMG, "BC_EXPS_YN" : BC_EXPS_YN, "BC_RPRT_YMD" : BC_RPRT_YMD, "BC_TYPE1_YN" : BC_TYPE1_YN, "BC_TYPE2_YN" : BC_TYPE2_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/news1/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }


    function del(BC_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/news1/deleteProcess",
                type : "POST",
                data : {"BC_SEQ" : BC_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/news1/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }

</script>


