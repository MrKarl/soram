
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">면역책자 / 소식지</h3>
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
                            <input type="hidden"  id="IMT_SEQ" name="IMT_SEQ" value="<?=$IMT_SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>신청자</strong></label>
                                <div class="col-lg-3">
                                    <?=$IMT_NM?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>우편번호</strong></label>
                                <div class="col-sm-7">
                                    <?=$IMT_ZIPCD?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>주소</strong></label>
                                <div class="col-sm-7">
                                    <?=$IMT_ADDR?> <?=$IMT_ADDR_DTL?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>전화번호</strong></label>
                                <div class="col-sm-7">
                                    <?=$IMT_TEL?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>전화번호</strong></label>
                                <div class="col-sm-7">
                                    <?=$IMT_CPH?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이메일</strong></label>
                                <div class="col-sm-7">
                                    <?=$IMT_EMAIL?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>신청책자</strong></label>
                                <div class="col-sm-7">
                                    <?$books = array("B1"=>"면역책자","B2"=>"소식지", "B3"=>"폐암, 속도전이 답이다", "B4"=>"위암, 먹어야 산다", "B5"=>"유방암, 당신의 방심을 노린다", "B6"=>"뇌종양, 독한 치료에 자신을 내주지 마라", "B7"=>"고맙습니다. 꽃으로 살게 해주셔서", "B8"=>"통합 암 치료, 12주 면역요법", ""=>"");?>
                                    <?$str = array();?>
                                    <?if($IMT_BOOK != ""){ $str = explode("|", $IMT_BOOK);}?>
                                    <?=$books[$str[0]]?><?=(count($str) > 1 && $str[1] != "") ? ",".$books[$str[1]] : ""?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>비고</strong></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" cols="100%" rows="10" readonly><?=$IMT_CONT?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>등록일</strong></label>
                                <div class="col-sm-7">
                                    <?=$IMT_RGST_YMDT?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>신청자</strong></label>
                                <div class="col-sm-7">
                                    <?if($IMT_APPLICANT == "1"):?>
                                        환자
                                    <?elseif ($IMT_APPLICANT == "2"):?>
                                        보호자
                                    <?elseif ($IMT_APPLICANT == "3"):?>
                                        일반인
                                    <?endif?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>거주지역</strong></label>
                                <div class="col-sm-7">
                                    <?$region   = array("","서울","경기","인천","강원도","충청남도","충청북도","대전","경상남도","경상북도","대구","전라남도","전라북도","광주","울산","부산","제주도");?>
                                    <?=($IMT_REGION != "") ? $region[$IMT_REGION] : ""?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>관심암</strong></label>
                                <div class="col-sm-7">
                                    <?foreach($cancer as $rows):?>
                                        <?=($rows['CC_SORT'] == $IMT_CLASS) ? $rows['CC_NM'] : ""?>
                                    <?endforeach?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>접근경로</strong></label>
                                <div class="col-sm-7">
                                    <?$route   = array("","블로그","카페/커뮤니티","SNS","지식검색","인터넷 기사","신문지면","기타");?>
                                    <?=($IMT_ROUTE != "") ? $region[$IMT_ROUTE] : ""?>
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
                <h4 class="control-label"><strong>관리자 정보</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div>
                        <fieldset>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>처리현황</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="IMT_STAT">
                                        <option value="1" <?=($IMT_STAT == "1" || $IMT_STAT == "") ? "selected" : ""?>>대기중</option>
                                        <option value="2" <?=($IMT_STAT == "2") ? "selected" : ""?>>발송완료</option>
                                        <option value="3" <?=($IMT_STAT == "3") ? "selected" : ""?>>발송취소</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>발송날짜</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="IMT_DLVRY_YMD"  name="IMT_DLVRY_YMD" value="<?=$IMT_DLVRY_YMD?>" style="width:100px" placeholder="발송일">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>처리일</strong></label>
                                <div class="col-sm-7">
                                    <?=$IMT_ANS_YMDT?>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($IMT_ANS_YMDT == ""):?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">작성</button>
                                    <?else:?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                    <?endif?>
                                    <button type="button" class="btn btn-danger" onclick="del('<?=$IMT_SEQ?>')">삭제</button>
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

    $(document).ready(function() {
        $( "#IMT_DLVRY_YMD" ).datepicker({dateFormat:"yy-mm-dd" });

    });

    function checkForm(){

        var IMT_SEQ         = $.trim($('#IMT_SEQ').val());
        var IMT_STAT        = $('#IMT_STAT option:selected').val();
        var IMT_DLVRY_YMD   = $.trim($('#IMT_DLVRY_YMD').val());
        var IMT_ANS_YMDT    = '<?=$IMT_ANS_YMDT?>';

        $.ajax({
            url : "/admin/newsletter/registProcess",
            type : "POST",
            data : {"IMT_SEQ" : IMT_SEQ , "IMT_STAT" : IMT_STAT, "IMT_DLVRY_YMD" : IMT_DLVRY_YMD, "IMT_ANS_YMDT" : IMT_ANS_YMDT},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/newsletter/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(IMT_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/newsletter/deleteProcess",
                type : "POST",
                data : {"IMT_SEQ" : IMT_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/newsletter/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


