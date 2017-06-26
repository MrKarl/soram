
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">도서 신청 > <?=($CL_SEQ != "") ? "등록" : "수정"?></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>신청자 정보</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <input type="hidden"  id="CL_SEQ" name="CL_SEQ" value="<?=$CL_SEQ?>">
                            <input type="hidden"  id="CL_ANS_YN" name="CL_ANS_YN" value="<?=$CL_ANS_YN?>">
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>제목</strong></label>
                                <div class="col-lg-3">
                                    <?=$CL_TTL?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>비밀번호</strong></label>
                                <div class="col-sm-7">
                                    <?=$CL_PWD?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>작성자</strong></label>
                                <div class="col-sm-7">
                                    <?=($MBR_ID != "") ? $MBR_ID : $CL_NM ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이메일</strong></label>
                                <div class="col-sm-7">
                                    <?=$CL_EMAIL?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>관계</strong></label>
                                <div class="col-sm-7">
                                    <?=$CL_COMPANY?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>전화번호</strong></label>
                                <div class="col-sm-7">
                                    <?=$CL_TEL?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>휴대전화번호</strong></label>
                                <div class="col-sm-7">
                                    <?=$CL_CPH?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>내용</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" cols="100%" rows="10" readonly><?=$CL_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>구분</strong></label>
                                <div class="col-sm-7">
                                    <?if ($CL_gubun=="1" || $CL_gubun=="2") echo("event_05");elseif ($CL_gubun=="3") echo("event_06");elseif ($CL_DIV=="mobile") echo("모바일");else echo("일반");?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>신청자</strong></label>
                                <div class="col-sm-7">
                                    <?$applyer  = array(""=>"미선택","1"=>"환자","2"=>"보호자","3"=>"일반인");?>
                                    <?=$applyer[$ConsultCheck1]?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>연령</strong></label>
                                <div class="col-sm-7">
                                    <?$age  = array(""=>"미선택","1"=>"10세 미만","2"=>"11~20세","3"=>"21~30세","4"=>"31~40세","5"=>"41~50세","6"=>"51~60세","7"=>"61~70세","8"=>"71~80세","9"=>"81세 이상");?>
                                    <?=$age[$ConsultCheck2]?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>암의기간</strong></label>
                                <div class="col-sm-7">
                                    <?$cnr  = array(""=>"미선택","1"=>"각종 암의 1기~3기초","2"=>"수술/방사선/항암치료 후유증","3"=>"각종 암의 3기후 ~4기(말기)","4"=>"기타");?>
                                    <?=$cnr[$ConsultCheck3]?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>암 분류</strong></label>
                                <div class="col-sm-7">
                                    <?$cancer = array(""=>"미선택","1"=>"위암","2"=>"간암","3"=>"폐암","4"=>"대장암","5"=>"담도/담낭암","6"=>"췌장암","7"=>"유방암","8"=>"난소암","9"=>"자궁경부암","10"=>"갑상선암","11"=>"뇌종양","12"=>"혈액암","13"=>"흑색종","14"=>"림프종","15"=>"기타");?>
                                    <?=$cancer[$ConsultCheck4]?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>거주지역</strong></label>
                                <div class="col-sm-7">
                                    <?$region   = array(""=>"","1"=>"서울","2"=>"경기","3"=>"인천","4"=>"강원도","5"=>"충청남도","6"=>"충청북도","7"=>"대전","8"=>"경상남도","9"=>"경상북도","10"=>"대구","11"=>"전라남도","12"=>"전라북도","13"=>"광주","14"=>"울산","15"=>"부산","16"=>"제주도");?>
                                    <?=$region[$ConsultCheck5]?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>접근경로</strong></label>
                                <div class="col-sm-7">
                                    <?$route=array(""=>"미선택","1"=>"블로그","2"=>"카페/커뮤니티","3"=>"SNS","4"=>"지식검색","5"=>"인터넷 기사","6"=>"신문지면","7"=>"기타");?>
                                    <?=$route[$ConsultCheck6]?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>등록일시</strong></label>
                                <div class="col-sm-7">
                                    <?=$CL_RGST_YMDT?>
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
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>상담 진행 상황</strong></label>
                                <div class="col-sm-2">
                                    <?$advence=array(""=>"미선택","1"=>"부재중","2"=>"결번","3"=>"상담거절","4"=>"재통화 예정","5"=>"상담 후 고려","8"=>"중복 접수","9"=>"기 상담","6"=>"예약완료","10"=>"단순문의-비용","11"=>"단순문의-위치","14"=>"단순문의-2","12"=>"단순상담","13"=>"입원실","7"=>"해당 없음");?>
                                    <select class="form-control" id="CL_advence">
                                        <?foreach($advence as $key=>$value):?>
                                        <option value="<?=$key?>" <?=($key == $CL_advence) ? "selected" : ""?>><?=$value?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>상담 팀</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="CL_ANS_NM" value="<?if($CL_ANS_NM != "") { echo $CL_ANS_NM;}else{ if($CL_ANS_YN == "N"){echo $this->session->userdata('name');}  }?>" readonly/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>답변</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" cols="100%" rows="10" id="CL_ANS"><?=$CL_ANS?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>주소</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" cols="100%" rows="1" id="CL_csTeam"><?=$CL_csTeam?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>답변일시</strong></label>
                                <div class="col-sm-7">
                                    <?=$CL_ANS_YMDT?>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$CL_SEQ?>')">삭제</button>
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


    function checkForm(){

        var CL_SEQ              = $.trim($('#CL_SEQ').val());
        var CL_advence          = $('#CL_advence option:selected').val();
        var CL_ANS              = $.trim($('#CL_ANS').val());
        var CL_ANS_NM           = $.trim($('#CL_ANS_NM').val());
        var CL_csTeam           = $.trim($('#CL_csTeam').val());
        var CL_ANS_YN           = $.trim($('#CL_ANS_YN').val());

        $.ajax({
            url : "/admin/book_apply/registProcess",
            type : "POST",
            data : {"CL_SEQ" : CL_SEQ , "CL_advence" : CL_advence, "CL_ANS" : CL_ANS, "CL_ANS_NM" : CL_ANS_NM, "CL_csTeam" : CL_csTeam, "CL_ANS_YN" : CL_ANS_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/book_apply/";
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
                url : "/admin/book_apply/deleteProcess",
                type : "POST",
                data : {"CL_SEQ" : CL_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/book_apply/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


