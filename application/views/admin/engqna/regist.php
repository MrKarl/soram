
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">1:1 상담</h3>
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
                            <input type="hidden"  id="idx" name="idx" value="<?=$result->idx?>">
                            <input type="hidden"  id="answer_yn" name="answer_yn" value="<?=$result->answer_yn?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-lg-3">
                                    <?=$result->title?>
                                </div>
                            </div>
                            <!--<div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>상담센터</strong></label>
                                <div class="col-sm-7">
                                    지정안함
                                </div>
                            </div>-->
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>작성자</strong></label>
                                <div class="col-sm-7">
                                    <?=$result->firstname?> <?=$result->lastname?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이메일</strong></label>
                                <div class="col-sm-7">
                                    <?=$result->email?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" width="100%" rows="10" readonly><?=$result->content?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>등록일시</strong></label>
                                <div class="col-sm-7">
                                    <?=$result->q_date?>
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
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>진료 팀</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="answer_team_idx">
                                        <?foreach($teams as $rows):?>
                                            <option value="<?=$rows['idx']?>" <?=($rows['idx'] == $result->answer_team_idx) ? "selected" : ""?>><?=$rows['name']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>답 변</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="content" name="content"><?=$result->content?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>등록일시</strong></label>
                                <div class="col-sm-7">
                                    <?=$result->answer_date?>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <button type="button" class="btn pull-left">메일발송</button>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$result->idx?>')">삭제</button>
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

    function checkForm(){

        oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);

        var idx             = $.trim($('#idx').val());
        var answer_team_idx = $('#answer_team_idx option:selected').val();
        var content         = $.trim($('#content').val());
        var answer_yn       = $.trim($('#answer_yn').val());
        if (content == "<p>&nbsp;</p>"){
            alert("답변을 입력해 주세요.");
            $('#content').focus();
            return;
        }

        $.ajax({
            url : "/admin/engqna/registProcess",
            type : "POST",
            data : {"idx" : idx , "answer_team_idx" : answer_team_idx, "content" : content},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/engqna/";
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
                url : "/admin/engqna/deleteProcess",
                type : "POST",
                data : {"idx" : idx},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/engqna/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }

    function send_mail() {
        $.post("/admin/engqna/send_mail",{idx:"<?=$result->idx?>",msg:$('#content').val()},function(data) {
            if (data=="SUCCESS")
            {
                alert('메일을 전송하였습니다.');
            } else {
                alert('메일 발송중 오류가 발생하였습니다.');
            }
        });
    }
</script>


