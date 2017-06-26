
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">연구 논문 > <?=($idx == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="idx" name="idx" value="<?=$idx?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>제목</strong></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="title" name="title" value="<?=$title?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>요약</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" id="summary" name="summary"><?=$summary?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>저자</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="writer" name="writer" value="<?=$writer?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>단체(학술지)</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="writerBook" name="writerBook" value="<?=$writerBook?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>논문 발행일</strong></label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="writerDate" name="writerDate" value="<?=$writerDate?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>논문 한글파일</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="hwp_upload_file" name="hwp_upload_file" onchange="file_upload('hwp')">
                                    <div><a id="hwp_src" href="<?=$HWPfile?>" target="_blank"><?=($HWPfile != "") ? $HWPfile : ""?></a></div>
                                    <!--<small class="text-primary">* 썸네일 이미지 사이즈는 847 X 452 입니다.</small>-->
                                    <input type="hidden" id="hwp_file" name="hwp_file"  value="<?=($HWPfile != "") ? $HWPfile : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>논문 PDF파일</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="pdf_upload_file" name="pdf_upload_file" onchange="file_upload('pdf')">
                                    <div><a id="pdf_src" href="<?=$PDFfile?>" target="_blank"><?=($PDFfile != "") ? $PDFfile : ""?></a></div>
                                    <!--<small class="text-primary">* 썸네일 이미지 사이즈는 847 X 452 입니다.</small>-->
                                    <input type="hidden" id="pdf_file" name="pdf_file"  value="<?=($PDFfile != "") ? $PDFfile : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>논문 워드파일</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="doc_upload_file" name="doc_upload_file" onchange="file_upload('doc')">
                                    <div><a id="doc_src" href="<?=$Wordfile?>" target="_blank"><?=($Wordfile != "") ? $Wordfile : ""?></a></div>
                                    <!--<small class="text-primary">* 썸네일 이미지 사이즈는 847 X 452 입니다.</small>-->
                                    <input type="hidden" id="doc_file" name="doc_file"  value="<?=($Wordfile != "") ? $Wordfile : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>썸네일</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="thumbnail_upload_file" name="thumbnail_upload_file" onchange="thumbnail_upload()">
                                    <div><a id="thumbnail_src" href="<?=$thumbnail_src?>" target="_blank"><?=($thumbnail_src != "") ? $thumbnail_src : ""?></a></div>
                                    <small class="text-primary">* 썸네일 이미지 사이즈는 94 X 126 입니다.</small>
                                    <input type="hidden" id="thumbnail_url" name="thumbnail_url"  value="<?=($thumbnail_src != "") ? $thumbnail_src : ""?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="content" name="content"><?=$content?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-sm-1">
                                    <select id="states" class="form-control">
                                        <option value="Y" <?=($states == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($states == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($idx == ""):?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$idx?>')">삭제</button>
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
        $( "#writerDate" ).datepicker({dateFormat:"yy-mm-dd" });

    });

    var oEditors = [];

    // 추가 글꼴 목록
    //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "content",
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

    function file_upload(type){
        var ext = $('#'+type+'_upload_file').val().split('.').pop().toLowerCase();

        if(type =='doc'){
            if($.inArray(ext, [type,'docx']) == -1) {
                alert(type+', docx 만 등록해 주세요.');
                $('#'+type+'_upload_file').val('');
                $('#'+type+'_src').val('');
                return;
            }
        }else{
            if($.inArray(ext, [type]) == -1) {
                alert(type+' 만 등록해 주세요.');
                $('#'+type+'_upload_file').val('');
                $('#'+type+'_src').val('');
                return;
            }
        }


        var data = new FormData();
        $.each($('#'+type+'_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'thesis/'+type);

        $.ajax({
            url : "/admin/upload/file_upload",
            type : "POST",
            processData: false,
            contentType: false,
            data: data,
            dataType : "json",
            success : function(data) {
                /*result = JSON.parse(data);*/
                if (data.result == "SUCCESS"){
                    $('#'+type+'_file').val(data.file_src);
                    $('#'+type+'_src').text(data.file_src);
                    $('#'+type+'_src').prop('href',data.file_src);
                    return;
                }else{
                    $('#'+type+'_upload_file').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }


    function thumbnail_upload(){
        var ext = $('#thumbnail_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#'+type+'_upload_file').val('');
            $('#'+type+'_src').val('');
            return;
        }

        var data = new FormData();
        $.each($('#thumbnail_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'thesis');

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
                    $('#thumbnail_url').val(data.img_src);
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

        oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);
        
        var idx                 = $.trim($('#idx').val());
        var title               = $.trim($('#title').val());
        var summary             = $.trim($('#summary').val());
        var writer              = $.trim($('#writer').val());
        var writerBook          = $.trim($('#writerBook').val());
        var writerDate          = $.trim($('#writerDate').val());
        var HWPfile             = $.trim($('#hwp_file').val());
        var PDFfile             = $.trim($('#pdf_file').val());
        var Wordfile            = $.trim($('#doc_file').val());
        var thumbnail_src       = $.trim($('#thumbnail_url').val());
        var content             = $.trim($('#content').val());
        var states              = $('#states option:selected').val();

        if(title == ""){
            alert("제목을 입력해 주세요.");
            return;
        }
        if(writer == ""){
            alert("저자를 입력해 주세요.");
            return;
        }
        if(writerBook == ""){
            alert("단체(학술지)를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/thesis/registProcess",
            type : "POST",
            data : {"idx" : idx , "title" : title, "summary" : summary, "writer" : writer, "writerBook" : writerBook, "writerDate" : writerDate, "HWPfile" : HWPfile, "PDFfile" : PDFfile, "Wordfile" : Wordfile, "thumbnail_src" : thumbnail_src, "content" : content, "states" : states},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/thesis/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(idx){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/thesis/deleteProcess",
                type : "POST",
                data : {"idx" : idx},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/thesis/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


