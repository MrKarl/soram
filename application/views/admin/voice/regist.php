
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">고객의소리 > 답변</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>문의 내용</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <input type="hidden"  id="IDX" name="IDX" value="<?=$result->IDX?>">
                            <input type="hidden"  id="ANS_YN" name="ANS_YN" value="<?=$result->ANS_YN?>">
                            
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>작성자</strong></label>
                                <div class="col-lg-3">
                                    <?=$result->UID?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="TITLE" value="<?=$result->TITLE?>" readonly/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" id="CONTENTS" width="100%" rows="20" readonly><?=$result->CONTENTS?></textarea>
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


    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>관리자 답변</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>답변글 선택</strong></label>
                                <div class="col-lg-3">
                                    <select class="form-control" id="ANS_CHOICE" onchange="changeAns(this.value)">
                                        <option value="" <?=($result->ANS_CHOICE == "") ? "selected" : ""?>>선택</option>
                                        <?foreach($ans_choices as $rows):?>
                                        <option value="<?=$rows['SEQ']?>" <?=($result->ANS_CHOICE == $rows['SEQ']) ? "selected" : ""?>><?=$rows['TTL']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>답 변</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="ANS_CONT" name="ANS_CONT"><?=$result->ANS_CONT?></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$result->IDX?>')">삭제</button>
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

</div>
<script type="text/javascript">

    var oEditors = [];

    // 추가 글꼴 목록
    //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "ANS_CONT",
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

        oEditors.getById["ANS_CONT"].exec("UPDATE_CONTENTS_FIELD", []);

        var IDX             = $.trim($('#IDX').val());
        var ANS_CHOICE      = $('#ANS_CHOICE option:selected').val();
        var ANS_CONT        = $.trim($('#ANS_CONT').val());
        var ANS_YN          = $.trim($('#ANS_YN').val());
        if (ANS_CONT == "<p>&nbsp;</p>"){
            alert("답변을 입력해 주세요.");
            $('#ANS_CONT').focus();
            return;
        }

        $.ajax({
            url : "/admin/voice/registProcess",
            type : "POST",
            data : {"IDX" : IDX , "ANS_CHOICE" : ANS_CHOICE, "ANS_CONT" : ANS_CONT, "ANS_YN" : ANS_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/voice/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }


    function changeAns(seq){
        if(seq != ""){
            $.ajax({
                type: "POST",
                url : "/admin/voice/answer",
                data: {"seq" : seq},
                success : function(result){
                    oEditors.getById["ANS_CONT"].exec("SET_CONTENTS", [result]);
                }
            });
        }

    }

    function del(IDX){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/voice/deleteProcess",
                type : "POST",
                data : {"IDX" : IDX},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/voice/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }

</script>


