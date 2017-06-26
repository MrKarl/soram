
<script type="text/javascript" src="/public/admin/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>
<script>
    function change_v_type(type, idx){
        if(type == "1"){
            $('#v_type_1_'+idx).css('display', 'block');$('#v_type_2_'+idx).css('display', 'none');$('#v_type_3_'+idx).css('display', 'none');
        }else if(type == "2"){
            $('#v_type_1_'+idx).css('display', 'none');$('#v_type_2_'+idx).css('display', 'block');$('#v_type_3_'+idx).css('display', 'none');
        }else if(type == "3"){
            $('#v_type_1_'+idx).css('display', 'none');$('#v_type_2_'+idx).css('display', 'none');$('#v_type_3_'+idx).css('display', 'block');
        }
    }
</script>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">영상 관리</h3>
        <div class="col-lg-8" style="margin-bottom: 10px; ">
            <div class="row">
                <label for="ticket-email" class="col-sm-4 control-label text-center" style="width:80px;"><h5 class="h5" style="width: 60px;"><strong>페이지</strong></h5></label>
                <div class="col-lg-4">
                    <select class="form-control" id="category" onchange="changeType(this.value);">
                        <?foreach($category_result as $rows):?>
                            <option value="<?=$rows['category']?>" <?=($category == $rows['category']) ? "selected" : ""?>><?=$rows['char_val']?></option>
                        <?endforeach?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-info">
            <div class="panel-body">
                <?foreach($result as $rows):?>
                    <div class="row center-block">
                        <div class="col-lg-12 alert alert-success">
                            <fieldset>
                                <input type="hidden" id="idx_<?=$rows['idx']?>" name="idx" value="<?=$rows['idx']?>"/>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>매체 구분</strong></label>
                                    <div class="col-lg-5">
                                        <select class="form-control" id="v_type_<?=$rows['idx']?>" name="v_type" onchange="change_v_type(this.value, '<?=$rows['idx']?>');">
                                            <option value="1" <?=( $rows['v_type'] == "1" ) ? "selected" : ""?>>동영상</option>
                                            <option value="2" <?=( $rows['v_type'] == "2" ) ? "selected" : ""?>>유투브</option>
                                            <option value="3" <?=( $rows['v_type'] == "3" ) ? "selected" : ""?>>이미지</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group" id="v_type_1_<?=$rows['idx']?>">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>동영상</strong></label>
                                    <div class="col-sm-7">
                                        <input type="file" id="video_upload_file_<?=$rows['idx']?>" name="video_upload_file" onchange="movie_upload('<?=$rows['idx']?>')">
                                        <div><a id="video_src_<?=$rows['idx']?>" href="<?=($rows['v_type'] == "1") ?  $rows['media_src'] : ""?>" target="_blank"><?=($rows['v_type'] == "1") ?  $rows['media_src'] : ""?></a></div>
                                        <input type="hidden" id="video_url_<?=$rows['idx']?>" name="video_url"  value="<?=($rows['v_type'] == "1") ?  $rows['media_src'] : ""?>">
                                    </div>
                                </div>
                                <div class="row form-group" id="v_type_2_<?=$rows['idx']?>">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>유투브</strong></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="youtube_url_<?=$rows['idx']?>" name="youtube_url" value="<?=($rows['v_type'] == "2") ?  $rows['media_src'] : ""?>"/>
                                    </div>
                                </div>
                                <div class="row form-group" id="v_type_3_<?=$rows['idx']?>">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이미지</strong></label>
                                    <div class="col-sm-7">
                                        <input type="file" id="img_upload_file_<?=$rows['idx']?>" name="img_upload_file" onchange="thumbnail_upload('<?=$rows['idx']?>')">
                                        <div><a id="image_src_<?=$rows['idx']?>" href="<?=($rows['v_type'] == "3") ?  $rows['media_src'] : ""?>" target="_blank"><?=($rows['v_type'] == "3") ?  $rows['media_src'] : ""?></a></div>
                                        <small class="text-primary">* 이미지 사이즈는 700 X 394 입니다.</small>
                                        <input type="hidden" id="image_url_<?=$rows['idx']?>" name="image_url"  value="<?=($rows['v_type'] == "3") ?  $rows['media_src'] : ""?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="ticket-email" class="col-sm-2 control-label text-center"><strong></strong></label>
                                    <div class="col-sm-2">
                                        <button type="button" class="video-modify btn btn-primary">수정</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                    <script>
                        change_v_type('<?=$rows['v_type']?>','<?=$rows['idx']?>');
                    </script>
                <?endforeach?>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

<script type="text/javascript">

    $(document).ready(function() {

        $('.video-modify').click(function(e) { //on add input button click
            e.preventDefault();

            var idx         = $(this).parent('div').parent('div').parent('fieldset').find("input[name='idx']").val();
            var v_type      = $(this).parent('div').parent('div').parent('fieldset').find("select[name='v_type'] option:selected").val();
            var media_src   = "";
            if(v_type == "1"){
                media_src   = $(this).parent('div').parent('div').parent('fieldset').find("input[name='video_url']").val();
            }else if(v_type == "2"){
                media_src   = $(this).parent('div').parent('div').parent('fieldset').find("input[name='youtube_url']").val();
            }else if(v_type == "3"){
                media_src   = $(this).parent('div').parent('div').parent('fieldset').find("input[name='image_url']").val();
            }
            checkForm(idx, v_type, media_src);
        });
    });

    function changeType(type){
        location.href="/admin/video?category="+type;
        return;
    }

    function movie_upload(idx){
        var ext = $('#video_upload_file_'+idx).val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['mp4']) == -1) {
            alert('MP4 파일만 등록해 주세요.');
            return;
        }

        var data = new FormData();
        $.each($('#video_upload_file_'+idx)[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'video');

        $.ajax({
            url : "/admin/upload/movie_upload",
            type : "POST",
            processData: false,
            contentType: false,
            data: data,
            dataType : "json",
            success : function(data) {
                /*result = JSON.parse(data);*/
                if (data.result == "SUCCESS"){
                    $('#video_url_'+idx).val(data.movie_src);
                    $('#video_src_'+idx).text(data.movie_src);
                    $('#video_src_'+idx).prop('href',data.movie_src);
                    alert("동영상 업로드가 완료되었습니다.");
                    return;
                }else{
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }


    function thumbnail_upload(idx){

        var ext = $('#img_upload_file_'+idx).val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#img_upload_file_'+idx).val('');
            return;
        }

        var data = new FormData();
        $.each($('#img_upload_file_'+idx)[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'video');

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
                    $('#image_url_'+idx).val(data.img_src);
                    $('#image_src_'+idx).text(data.img_src);
                    $('#image_src_'+idx).prop('href',data.img_src);
                    return;
                }else{
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }

    function checkForm(idx, v_type, media_src){

        if(v_type == ""){
            alert("매체 구분을 선택해 주세요");
            return;
        }
        if(media_src == ""){
            alert("영상 및 이미지를 입력하거나 유투브 주소를 입력해 주세요.");
            return;
        }

        $.ajax({
            url : "/admin/video/updateProcess",
            type : "POST",
            data : {"idx" : idx, "v_type" : v_type, "media_src" : media_src},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/video?category="+"<?=$category?>";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }


</script>


