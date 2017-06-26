
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
                            <input type="hidden"  id="CL_SEQ" name="CL_SEQ" value="<?=$result->CL_SEQ?>">
                            <input type="hidden"  id="CL_ANS_YN" name="CL_ANS_YN" value="<?=$result->CL_ANS_YN?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-lg-3">
                                    <?=$result->CL_TTL?>
                                </div>
                            </div>
                            <!--<div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>상담센터</strong></label>
                                <div class="col-sm-7">
                                    지정안함
                                </div>
                            </div>-->
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>비밀번호</strong></label>
                                <div class="col-sm-7">
                                    <?=$result->CL_PWD?>
                                </div>
                            </div>
<!--                            <div class="row form-group">-->
<!--                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>유입 경로</strong></label>-->
<!--                                <div class="col-sm-7">-->
<!--                                    --><?//=$result->CL_COMPANY?>
<!--                                </div>-->
<!--                            </div>-->
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>휴대전화 번호</strong></label>
                                <div class="col-sm-7">
                                    <?=$result->CL_CPH?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>진단명</strong></label>
                                <div class="col-lg-3">
                                    <?=$result->CL_CNR?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>상담분야</strong></label>
                                <div class="col-lg-3">
                                    <?=$result->CL_AREA?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" width="100%" rows="20" readonly><?=$result->CL_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>구분</strong></label>
                                <div class="col-sm-7">
                                    <?=($result->CL_DIV == "web")? "일반" : "모바일"?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>등록일시</strong></label>
                                <div class="col-sm-7">
                                    <?=$result->CL_RGST_YMDT?>
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
                            <!--<div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>SMS글 선택</strong></label>
                                <div class="col-lg-5">
                                    <select class="form-control" id="SM_SEQ">
                                        <?/*foreach($sms as $rows):*/?>
                                            <option value="<?/*=$rows['SM_SEQ']*/?>" <?/*=($result->SM_SEQ == $rows['SM_SEQ']) ? "selected" : ""*/?>><?/*=$rows['SM_MSG']*/?></option>
                                        <?/*endforeach*/?>
                                    </select>
                                </div>
                            </div>-->
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>답변글 선택</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="CA_SEQ" onchange="changeAns(this.value)">
                                        <option value="" <?=($result->CA_SEQ == "") ? "selected" : ""?>>미선택</option>
                                        <?foreach($ans as $rows):?>
                                            <option value="<?=$rows['CA_SEQ']?>" <?=($result->CA_SEQ == $rows['CA_SEQ']) ? "selected" : ""?>><?=$rows['CA_TTL']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>상담 진행 상황</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="CL_advence">
                                        <option value="" <?=($result->CL_advence == "") ? "selected" : ""?>>미선택</option>
                                        <?foreach($entry as $rows):?>
                                        <option value="<?=$rows['CC_SORT']?>" <?=($result->CL_advence == $rows['CC_SORT']) ? "selected" : ""?>><?=$rows['CC_NM']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>상담자</strong></label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" id="CL_ANS_NM" value="<?=($result->CL_ANS_NM != "") ? $result->CL_ANS_NM : $this->session->userdata('name')?>" readonly/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>진료 팀</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="CL_ANS_TEAM">
                                        <?foreach($teams as $rows):?>
                                        <option value="<?=$rows['idx']?>"><?=$rows['name']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>답 변</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="CL_ANS" name="CL_ANS"><?=$result->CL_ANS?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>진행상황</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;display:none;" id="CL_csTeam" name="CL_csTeam"><?=$result->CL_csTeam?></textarea>
                                </div>
                                <button type="button" class="btn" onclick="add_progress()">상담관리</button>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>등록일시</strong></label>
                                <div class="col-sm-7">
                                    <?=$result->CL_ANS_YMDT?>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($result->CL_DEL_FLAG == "N"):?>
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$seq?>')">삭제</button>
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

</div>
    <script type="text/javascript">
        var oEditors1 = [];
        var oEditors2 = [];

        // 추가 글꼴 목록
        //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors1,
            elPlaceHolder: "CL_ANS",
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

        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors2,
            elPlaceHolder: "CL_csTeam",
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

        function changeAns(seq){
            if(seq != ""){
                $.ajax({
                    type: "POST",
                    url : "/admin/consult/answer",
                    data: {"seq" : seq},
                    success : function(result){
                        oEditors1.getById["CL_ANS"].exec("SET_CONTENTS", [result]);
                        /*$("#CL_ANS").val(result);*/
                    }
                });
            }

        }

        function checkForm(){

            oEditors1.getById["CL_ANS"].exec("UPDATE_CONTENTS_FIELD", []);
            oEditors2.getById["CL_csTeam"].exec("UPDATE_CONTENTS_FIELD", []);

            var CL_SEQ         = $.trim($('#CL_SEQ').val());
            var CA_SEQ         = $('#CA_SEQ option:selected').val();
            var CL_advence     = $('#CL_advence option:selected').val();
            var CL_ANS_NM      = $.trim($('#CL_ANS_NM').val());
            var CL_ANS_TEAM    = $('#CL_ANS_TEAM option:selected').val();
            var CL_ANS         = $.trim($('#CL_ANS').val());
            var CL_csTeam      = $.trim($('#CL_csTeam').val());
            var CL_ANS_YN      = $.trim($('#CL_ANS_YN').val());

			/* 2017.05.10 마케팅 윤재종 요청으로 주석처리 - rill
            if (CL_ANS == "<p>&nbsp;</p>"){
                alert("답변을 입력해 주세요.");
                $('#content').focus();
                return;
            }
			*/
            $.ajax({
                url : "/admin/consult/registProcess",
                type : "POST",
                data : {"CL_SEQ" : CL_SEQ, "CA_SEQ" : CA_SEQ, "CL_advence" : CL_advence, "CL_ANS_NM" : CL_ANS_NM, "CL_ANS_TEAM" : CL_ANS_TEAM, "CL_ANS": CL_ANS, "CL_csTeam" : CL_csTeam, "CL_ANS_YN" : CL_ANS_YN},
                success : function(result) {
                    if (result == true){
                        alert("처리 되었습니다.");
                        location.href="/admin/consult/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
        function del(CL_SEQ){
            if (confirm('삭제 하시겠습니까?')){
                $.ajax({
                    url : "/admin/consult/deleteProcess",
                    type : "POST",
                    data : {"CL_SEQ" : CL_SEQ},
                    success : function(result) {
                        if (result == true){
                            alert("삭제 되었습니다.");
                            location.href="/admin/consult/";
                        }else{
                            alert("오류가 발생 되었습니다.");
                            return;
                        }
                    }
                });
            }
        }

        function add_progress() {
            var d=new Date();

            var year=d.getFullYear();
            var month=d.getMonth()+1;
            if (month<10) month="0"+month;
            var day=d.getDate();
            if (day<10) day="0"+day;
            var hour=d.getHours();
            if (hour<10) hour="0"+hour;
            var minute=d.getMinutes();
            if (minute<10) minute="0"+minute;

            var str="\n============="+year+"-"+month+"-"+day+" "+hour+":"+minute+"=================\n";

            oEditors2.getById["CL_csTeam"].exec("UPDATE_CONTENTS_FIELD", []);

            var CL_csTeam   = $('#CL_csTeam').val();

            oEditors2.getById["CL_csTeam"].exec("SET_CONTENTS", [CL_csTeam+str]);
            /*$('#CL_csTeam').val($('#CL_csTeam').val()+str);*/
        }

    </script>


