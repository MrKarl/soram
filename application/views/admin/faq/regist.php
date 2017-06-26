
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">소람 FAQ > <?=($FAQ_SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="FAQ_SEQ" name="FAQ_SEQ" value="<?=$FAQ_SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>카테고리</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="FAQ_TP">
                                        <?foreach($categorys as $rows):?>
                                        <option value="<?=$rows['CC_CD']?>" <?=($FAQ_TP == $rows['CC_CD']) ? "selected" : ""?>><?=$rows['CC_NM']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>질문</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="FAQ_TTL" name="FAQ_TTL" value="<?=$FAQ_TTL?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>답변</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="FAQ_CONT" name="FAQ_CONT"><?=$FAQ_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="FAQ_EXPS_YN">
                                        <option value="Y" <?=($FAQ_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($FAQ_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($FAQ_SEQ == ""):?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$FAQ_SEQ?>')">삭제</button>
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
        elPlaceHolder: "FAQ_CONT",
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

        oEditors.getById["FAQ_CONT"].exec("UPDATE_CONTENTS_FIELD", []);

        var FAQ_SEQ         = $.trim($('#FAQ_SEQ').val());
        var FAQ_TP          = $.trim($('#FAQ_TP').val());
        var FAQ_TTL         = $.trim($('#FAQ_TTL').val());
        var FAQ_CONT        = $.trim($('#FAQ_CONT').val());
        var FAQ_EXPS_YN     = $('#FAQ_EXPS_YN option:selected').val();

        if (FAQ_CONT == "<p>&nbsp;</p>"){
            alert("내용을 입력해 주세요.");
            $('#FAQ_CONT').focus();
            return;
        }

        $.ajax({
            url : "/admin/soramfaq/registProcess",
            type : "POST",
            data : {"FAQ_SEQ" : FAQ_SEQ , "FAQ_TP" : FAQ_TP, "FAQ_TTL" : FAQ_TTL, "FAQ_CONT" : FAQ_CONT, "FAQ_EXPS_YN" : FAQ_EXPS_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/soramfaq/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });         
    }


    function del(FAQ_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/soramfaq/deleteProcess",
                type : "POST",
                data : {"FAQ_SEQ" : FAQ_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/soramfaq/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }

</script>


