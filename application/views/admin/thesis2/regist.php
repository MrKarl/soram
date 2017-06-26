
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">국제 / 국내 논문 > <?=($idx == "") ? "등록" : "수정"?></h3>
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
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>저자</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="writer" name="writer" value="<?=$writer?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>단체(학술지)</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="journal" name="journal" value="<?=$journal?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-sm-1">
                                    <select id="USE_YN" class="form-control">
                                        <option value="Y" <?=($USE_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($USE_YN == "N") ? "selected" : ""?>>미노출</option>
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

        var idx                 = $.trim($('#idx').val());
        var title               = $.trim($('#title').val());
        var writer              = $.trim($('#writer').val());
        var journal             = $.trim($('#journal').val());
        var USE_YN              = $('#USE_YN option:selected').val();

        if(title == ""){
            alert("제목을 입력해 주세요.");
            return;
        }
        if(writer == ""){
            alert("저자를 입력해 주세요.");
            return;
        }
        if(journal == ""){
            alert("단체(학술지)를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/thesis2/registProcess",
            type : "POST",
            data : {"idx" : idx , "title" : title, "writer" : writer, "journal" : journal, "USE_YN" : USE_YN},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/thesis2/";
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
                url : "/admin/thesis2/deleteProcess",
                type : "POST",
                data : {"idx" : idx},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/thesis2/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


