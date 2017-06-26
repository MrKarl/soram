
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">언론보도 > <?=($RT_SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="RT_SEQ" name="RT_SEQ" value="<?=$RT_SEQ?>">


                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="RT_TTL" name="RT_TTL" value="<?=$RT_TTL?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>보도일</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="RT_RPRT_YMD"  name="RT_RPRT_YMD" value="<?=$RT_RPRT_YMD?>" style="width:100px" placeholder="보도일">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>기사 URL</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="RT_URL" name="RT_URL" value="<?=$RT_URL?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="RT_CONT" name="RT_CONT"><?=$RT_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="RT_EXPS_YN">
                                        <option value="Y" <?=($RT_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($RT_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($RT_SEQ == ""):?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$RT_SEQ?>')">삭제</button>
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
        $( "#RT_RPRT_YMD" ).datepicker({dateFormat:"yy-mm-dd" });

    });

    var oEditors = [];

    // 추가 글꼴 목록
    //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "RT_CONT",
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

    function checkForm(){

        oEditors.getById["RT_CONT"].exec("UPDATE_CONTENTS_FIELD", []);

        var RT_SEQ          = $.trim($('#RT_SEQ').val());
        var RT_TTL          = $.trim($('#RT_TTL').val());
        var RT_CONT         = $.trim($('#RT_CONT').val());
        var RT_URL          = $.trim($('#RT_URL').val());
        var RT_EXPS_YN      = $('#RT_EXPS_YN option:selected').val();
        var RT_RPRT_YMD     = $.trim($('#RT_RPRT_YMD').val());
        if (RT_CONT == "<p>&nbsp;</p>"){
            alert("내용을 입력해 주세요.");
            $('#RT_CONT').focus();
            return;
        }

        $.ajax({
            url : "/admin/news2/registProcess",
            type : "POST",
            data : {"RT_SEQ" : RT_SEQ , "RT_TTL" : RT_TTL, "RT_CONT" : RT_CONT, "RT_EXPS_YN" : RT_EXPS_YN, "RT_RPRT_YMD" : RT_RPRT_YMD , "RT_URL" : RT_URL},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/news2/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }


    function del(RT_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/news2/deleteProcess",
                type : "POST",
                data : {"RT_SEQ" : RT_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/news2/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }

</script>


