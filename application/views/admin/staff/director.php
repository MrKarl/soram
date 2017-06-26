
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">병원장 관리</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-info">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>저서 관리</strong></h4>
            </div>

            <div class="panel-body">
                <?foreach($books as $rows):?>
                    <div class="row center-block">
                        <div class="col-lg-12 alert alert-success">
                            <fieldset>
                                <input type="hidden" id="BK_SEQ_<?=$rows['BK_SEQ']?>" name="BK_SEQ" value="<?=$rows['BK_SEQ']?>"/>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>도서 이름</strong></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="BK_NM_<?=$rows['BK_SEQ']?>" name="BK_NM" value="<?=$rows['BK_NM']?>" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>발간일</strong></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="BK_YMD form-control" id="BK_YMD_<?=$rows['BK_SEQ']?>" name="BK_YMD" value="<?=$rows['BK_YMD']?>" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>이미지</strong></label>
                                    <div class="col-sm-7">
                                        <input type="file" id="book_upload_file_<?=$rows['BK_SEQ']?>" name="book_upload_file" onchange="thumbnail_upload('book','<?=$rows['BK_SEQ']?>')">
                                        <div><a id="book_src_<?=$rows['BK_SEQ']?>" href="<?=$rows['BK_IMG']?>" target="_blank"><?=($rows['BK_IMG'] != "") ? $rows['BK_IMG'] : ""?></a></div>
                                        <small class="text-primary">* 이미지 사이즈는 106 X 160 입니다.</small>
                                        <input type="hidden" id="book_url_<?=$rows['BK_SEQ']?>" name="book_url"  value="<?=($rows['BK_IMG'] != "") ? $rows['BK_IMG'] : ""?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><strong></strong></label>
                                    <div class="col-sm3">
                                        <button type="button" class="book-modify btn btn-primary">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$rows['BK_SEQ']?>', 'book')">삭제</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                <?endforeach?>
                <div class="row center-block">
                    <div class="col-lg-12 alert alert-warning">
                        <fieldset>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>도서 이름</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="BK_NM" name="BK_NM" value="" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>발간일</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="BK_YMD form-control" id="BK_YMD" name="BK_YMD" value="" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>이미지</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="book_upload_file" name="book_upload_file" onchange="thumbnail_upload('book','')">
                                    <div><a id="book_src" href="" target="_blank"></a></div>
                                    <small class="text-primary">* 이미지 사이즈는 106 X 160 입니다.</small>
                                    <input type="hidden" id="book_url" name="book_url"  value="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong></strong></label>
                                <div class="col-sm-3">
                                    <button type="button" class="book-modify btn btn-primary">추가</button>
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
    <div class="col-lg-6">
        <div class="panel panel-danger">
            <div class="panel-heading" style="height:55px;">
                <h4 class="control-label"><strong>감사편지 관리</strong></h4>
            </div>

            <div class="panel-body">
                <?foreach($letters as $rows):?>
                    <div class="row center-block">
                        <div class="col-lg-12 alert alert-success">
                            <fieldset>
                                <input type="hidden" id="LT_SEQ_<?=$rows['LT_SEQ']?>" name="LT_SEQ" value="<?=$rows['LT_SEQ']?>"/>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>편지 제목</strong></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="LT_TTL_<?=$rows['LT_SEQ']?>" name="LT_TTL" value="<?=$rows['LT_TTL']?>" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>발신자</strong></label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="LT_NM_<?=$rows['LT_SEQ']?>" name="LT_NM" value="<?=$rows['LT_NM']?>" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>이미지</strong></label>
                                    <div class="col-sm-7">
                                        <input type="file" id="letter_upload_file_<?=$rows['LT_SEQ']?>" name="letter_upload_file" onchange="thumbnail_upload('letter','<?=$rows['LT_SEQ']?>')">
                                        <div><a id="letter_src_<?=$rows['LT_SEQ']?>" href="<?=$rows['LT_IMG']?>" target="_blank"><?=($rows['LT_IMG'] != "") ? $rows['LT_IMG'] : ""?></a></div>
                                        <small class="text-primary">* 이미지 사이즈는 278 X 347 입니다.</small>
                                        <input type="hidden" id="letter_url_<?=$rows['LT_SEQ']?>" name="letter_url"  value="<?=($rows['LT_IMG'] != "") ? $rows['LT_IMG'] : ""?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><strong></strong></label>
                                    <div class="col-sm-3">
                                        <button type="button" class="letter-modify btn btn-primary" onclick="checkForm('<?=$rows['LT_SEQ']?>')">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$rows['LT_SEQ']?>','letter')">삭제</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                <?endforeach?>
                <div class="row center-block">
                    <div class="col-lg-12 alert alert-warning">
                        <fieldset>
                            <input type="hidden" id="LT_SEQ" name="LT_SEQ" value=""/>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>편지 제목</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="LT_TTL" name="LT_TTL" value="" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>발신자</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="LT_NM" name="LT_NM" value="" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>이미지</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="letter_upload_file" name="letter_upload_file" onchange="thumbnail_upload('letter','')">
                                    <div><a id="letter_src" href="" target="_blank"></a></div>
                                    <small class="text-primary">* 이미지 사이즈는 278 X 347 입니다.</small>
                                    <input type="hidden" id="letter_url" name="letter_url"  value="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong></strong></label>
                                <div class="col-sm-3">
                                    <button type="button" class="letter-modify btn btn-primary" >추가</button>
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
        $(".BK_YMD" ).datepicker({dateFormat:"yy-mm-dd" });

        $('.book-modify').click(function(e) { //on add input button click
            e.preventDefault();

            var BK_SEQ      = $(this).parent('div').parent('div').parent('fieldset').find("input[name='BK_SEQ']").val();
            var BK_NM       = $(this).parent('div').parent('div').parent('fieldset').find("input[name='BK_NM']").val();
            var BK_YMD      = $(this).parent('div').parent('div').parent('fieldset').find("input[name='BK_YMD']").val();
            var BK_IMG      = $(this).parent('div').parent('div').parent('fieldset').find("input[name='book_url']").val();

            checkBook(BK_SEQ, BK_NM, BK_YMD, BK_IMG);
        });

        $('.letter-modify').click(function(e) { //on add input button click
            e.preventDefault();

            var LT_SEQ      = $(this).parent('div').parent('div').parent('fieldset').find("input[name='LT_SEQ']").val();
            var LT_TTL      = $(this).parent('div').parent('div').parent('fieldset').find("input[name='LT_TTL']").val();
            var LT_NM       = $(this).parent('div').parent('div').parent('fieldset').find("input[name='LT_NM']").val();
            var LT_IMG      = $(this).parent('div').parent('div').parent('fieldset').find("input[name='letter_url']").val();

            checkLetter(LT_SEQ, LT_TTL, LT_NM, LT_IMG);
        });

    });

    function thumbnail_upload(type, seq){

        if(seq != ""){
            seq = "_"+seq;
        }

        var ext = $('#'+type+'_upload_file'+seq).val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#'+type+'_upload_file').val('');
            $('#'+type+'_src').val('');
            return;
        }

        var data = new FormData();
        $.each($('#'+type+'_upload_file'+seq)[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , type);

        $.ajax({
            url : "/admin/upload/thumbnail_upload",
            type : "POST",
            processData: false,
            contentType: false,
            data: data,
            dataType : "json",
            success : function(data) {
                /*result = JSON.parse(data);*/
                if (data.result == "SUCCESS"){
                    $('#'+type+'_url'+seq).val(data.img_src);
                    $('#'+type+'_src'+seq).text(data.img_src);
                    $('#'+type+'_src'+seq).prop('href',data.img_src);
                    return;
                }else{
                    $('#'+type+'_upload_file').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }

    function checkBook(BK_SEQ, BK_NM, BK_YMD, BK_IMG){

        var type = 1;

        if(BK_NM == ""){
            alert("도서 이름을 입력해 주세요.");
            return;
        }
        if(BK_YMD == ""){
            alert("발간일을 입력해 주세요.");
            return;
        }
        if(BK_IMG == ""){
            alert("도서 이미지를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/staff/bookProcess",
            type : "POST",
            data : {"BK_SEQ" : BK_SEQ, "type" : type, "BK_NM" : BK_NM, "BK_YMD" : BK_YMD, "BK_IMG" : BK_IMG},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/staff/director";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }

    function checkLetter(LT_SEQ, LT_TTL, LT_NM, LT_IMG){

        var type = 1;

        if(LT_TTL == ""){
            alert("편지 제목을 입력해 주세요.");
            return;
        }
        if(LT_NM == ""){
            alert("발신자를 입력해 주세요.");
            return;
        }
        if(LT_IMG == ""){
            alert("편지 이미지를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/staff/letterProcess",
            type : "POST",
            data : {"LT_SEQ" : LT_SEQ, "type" : type, "LT_TTL" : LT_TTL, "LT_NM" : LT_NM, "LT_IMG" : LT_IMG},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/staff/director";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }

    function del(SEQ, t_type){
        if (confirm('삭제 하시겠습니까?')){

            var type = 1;

            $.ajax({
                url : "/admin/staff/deleteEtcProcess",
                type : "POST",
                data : {"SEQ" : SEQ, "t_type" : t_type, "type" : type},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/staff/director";
                        return;
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }


</script>


