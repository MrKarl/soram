
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">비급여 관리 > <?=($idx == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="idx" name="idx" value="<?=$idx?>">


                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>명칭</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="name" name="name" value="<?=$name?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>가격</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="price"  name="price" value="<?=$price?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>비고</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="spec" name="spec" value="<?=$spec?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>사용여부</strong></label>
                                <div class="col-lg-1">
                                    <select class="form-control" id="exps_yn">
                                        <option value="Y" <?=($exps_yn == "Y") ? "selected" : ""?>>사용</option>
                                        <option value="N" <?=($exps_yn == "N") ? "selected" : ""?>>미사용</option>
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


    function checkForm(){

        var idx             = $.trim($('#idx').val());
        var name            = $.trim($('#name').val());
        var price           = $.trim($('#price').val());
        var spec            = $.trim($('#spec').val());
        var exps_yn         = $('#exps_yn option:selected').val();

        if (name == ""){
            alert("명칭을 입력해 주세요.");
            $('#name').focus();
            return;
        }
        if (price == ""){
            alert("가격을 입력해 주세요.");
            $('#price').focus();
            return;
        }
        if (spec == ""){
            alert("비고를 입력해 주세요.");
            $('#spec').focus();
            return;
        }

        $.ajax({
            url : "/admin/nopay/registProcess",
            type : "POST",
            data : {"idx" : idx , "name" : name, "price" : price, "spec" : spec, "exps_yn" : exps_yn},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/nopay/";
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
                url : "/admin/nopay/deleteProcess",
                type : "POST",
                data : {"idx" : idx},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/nopay/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }

</script>


