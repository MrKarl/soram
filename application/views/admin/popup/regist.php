 
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">팝업 관리 > <?=($PP_SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="PP_SEQ" name="PP_SEQ" value="<?=$PP_SEQ?>">
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>제목</strong></label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" id="PP_TTL" name="PP_TTL" value="<?=$PP_TTL?>" />
                                </div>
                            </div>
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
                                        <input class="form-control" type="text" id="PP_STRT_YMD" name="PP_STRT_YMD" value="<?=$PP_STRT_YMD?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><i class="fa fa-check"></i><strong>종료</strong></label>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <input class="form-control" type="text" id="PP_END_YMD" name="PP_END_YMD" value="<?=$PP_END_YMD?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>위치</strong></label>
                                <div class="col-sm-7">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><i class="fa fa-check"></i><strong>상단</strong></label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" id="PP_TOP" name="PP_TOP" value="<?=$PP_TOP?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><i class="fa fa-check"></i><strong>좌측</strong></label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" id="PP_LEFT" name="PP_LEFT" value="<?=$PP_LEFT?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이미지</strong></label>
                                <div class="col-sm-7">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><strong>이미지1</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="img_upload_file_1" name="img_upload_file_1" onchange="popup_upload('1')">

                                    <div><a id="img_src_1" href="<?=($img_info_1 != "") ? $this->config->item('base_url')."/".$popup['img_info_1'][0] : ""?>" target="_blank"><?=($img_info_1 != "") ? $popup['img_info_1'][0] : ""?></a></div>
                                    <small class="text-primary">* 이미지 사이즈는 847 X 452 입니다.</small>
                                    <input type="hidden" id="img_info_1" name="img_info_1"  value="<?=($img_info_1 != "") ? $img_info_1 : ""?>">

                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><strong>이미지1 링크</strong></label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" id="img_link_1" name="img_link_1"  value="<?=$img_link_1?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><strong>이미지2</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="img_upload_file_2" name="img_upload_file_2" onchange="popup_upload('2')">

                                    <div><a id="img_src_2" href="<?=($img_info_2 != "") ? $this->config->item('base_url')."/".$popup['img_info_2'][0] : ""?>" target="_blank"><?=($img_info_2 != "") ? $popup['img_info_2'][0] : ""?></a></div>
                                    <small class="text-primary">* 이미지 사이즈는 847 X 452 입니다.</small>
                                    <input type="hidden" id="img_info_2" name="img_info_2"  value="<?=($img_info_2 != "") ? $img_info_2 : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><strong>이미지2 링크</strong></label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" id="img_link_2" name="img_link_2"  value="<?=$img_link_2?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><strong>이미지3</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="img_upload_file_3" name="img_upload_file_3" onchange="popup_upload('3')">

                                    <div><a id="img_src_3" href="<?=($img_info_3 != "") ? $this->config->item('base_url')."/".$popup['img_info_3'][0] : ""?>" target="_blank"><?=($img_info_3 != "") ? $popup['img_info_3'][0] : ""?></a></div>
                                    <small class="text-primary">* 이미지 사이즈는 847 X 452 입니다.</small>
                                    <input type="hidden" id="img_info_3" name="img_info_3"  value="<?=($img_info_3 != "") ? $img_info_3 : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-right"><strong>이미지3 링크</strong></label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" id="img_link_3" name="img_link_3"  value="<?=$img_link_3?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="PP_CONT" name="PP_CONT"><?=$PP_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>노출여부</strong></label>
                                <div class="col-lg-2">
                                    <select class="form-control" id="PP_EXPS_YN">
                                        <option value="Y" <?=($PP_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($PP_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($PP_SEQ == ""):?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">작성</button>
                                    <?else:?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$PP_SEQ?>')">삭제</button>
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
        $( "#PP_STRT_YMD" ).datepicker({dateFormat:"yy-mm-dd" });
        $( "#PP_END_YMD" ).datepicker({dateFormat:"yy-mm-dd" });

    });


    var oEditors = [];

    // 추가 글꼴 목록
    //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "PP_CONT",
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

    function popup_upload(type){
        var ext = $('#img_upload_file_'+type).val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#img_upload_file_'+type).val('');
            return;
        }

        var data = new FormData();
        $.each($('#img_upload_file_'+type)[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'popup');

        $.ajax({
            url : "/admin/upload/popup_upload",
            type : "POST",
            processData: false,
            contentType: false,
            data: data,
            dataType : "json",
            success : function(data) {
                /*result = JSON.parse(data);*/
                if (data.result == "SUCCESS"){
                    $('#img_info_'+type).val(data.img_info);
                    $('#img_src_'+type).text(data.img_src);
                    $('#img_src_'+type).prop('href',data.img_src);
                    return;
                }else{
                    $('#thumbnail_upload_file').val('');
                    alert('오류가 발생 되었습니다.'+data.msg); 
                    return;
                }
            }
        }); 

    }


    function checkForm(){

        oEditors.getById["PP_CONT"].exec("UPDATE_CONTENTS_FIELD", []);
        
        var PP_SEQ          = $.trim($('#PP_SEQ').val());
        var PP_TTL          = $.trim($('#PP_TTL').val());
        var PP_STRT_YMD     = $.trim($('#PP_STRT_YMD').val());
        var PP_END_YMD      = $.trim($('#PP_END_YMD').val());
        var PP_TOP          = $.trim($('#PP_TOP').val());
        var PP_LEFT         = $.trim($('#PP_LEFT').val());
        var PP_CONT         = $.trim($('#PP_CONT').val());
        var PP_EXPS_YN      = $('#PP_EXPS_YN option:selected').val();
        var img_info_1      = $.trim($('#img_info_1').val());
        var img_info_2      = $.trim($('#img_info_2').val());
        var img_info_3      = $.trim($('#img_info_3').val());
        var img_link_1      = $.trim($('#img_link_1').val());
        var img_link_2      = $.trim($('#img_link_2').val());
        var img_link_3      = $.trim($('#img_link_3').val());

        if(PP_TTL == ""){
            alert("제목을 입력해 주세요.");
            return;
        }
        if(PP_STRT_YMD == ""){
            alert("시작일을 입력해 주세요.");
            return;
        }
        if(PP_END_YMD == ""){
            alert("종료일을 입력해 주세요.");
            return;
        }
        if(PP_TOP == ""){
            alert("상단 위치를 입력해 주세요.");
            return;
        }
        if(PP_LEFT == ""){
            alert("좌측 위치를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/popup/registProcess",
            type : "POST",
            data : {"PP_SEQ" : PP_SEQ , "PP_TTL" : PP_TTL, "PP_STRT_YMD" : PP_STRT_YMD, "PP_END_YMD" : PP_END_YMD, "PP_TOP" : PP_TOP, "PP_LEFT" : PP_LEFT, "PP_CONT" : PP_CONT, "PP_EXPS_YN" : PP_EXPS_YN, "img_info_1" : img_info_1, 
                    "img_info_2" : img_info_2, "img_info_3" : img_info_3, "img_link_1" : img_link_1, "img_link_2" : img_link_2, "img_link_3" : img_link_3},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/popup/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(PP_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/popup/deleteProcess",
                type : "POST",
                data : {"PP_SEQ" : PP_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/popup/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>