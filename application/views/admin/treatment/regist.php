
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">호전사례 > <?=($TT_SEQ == "") ? "등록" : "수정"?></h3>
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
                            <input type="hidden"  id="TT_SEQ" name="TT_SEQ" value="<?=$TT_SEQ?>">

                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>제목</strong></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="TT_TTL" name="TT_TTL" value="<?=$TT_TTL?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>부제목</strong></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="TT_SUBTTL" name="TT_SUBTTL" value="<?=$TT_SUBTTL?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>암 구분</strong></label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="TT_CNR_TP">
                                        <option value="" <?=($TT_CNR_TP  == "") ? "selected" : ""?>>기타</option>
                                        <?foreach($cnr_type as $rows):?>
                                        <option value="<?=$rows['CC_CD']?>" <?=($rows['CC_CD'] == $TT_CNR_TP) ? "selected" : ""?>><?=$rows['CC_NM']?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>환자 성명</strong></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="TT_NM" name="TT_NM" value="<?=$TT_NM?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>환자 성별</strong></label>
                                <div class="col-sm-1">
                                    <select class="form-control" id="TT_GENDER">
                                        <option value="M" <?=($TT_GENDER == "M") ? "selected" : ""?>>남자</option>
                                        <option value="F" <?=($TT_GENDER == "F") ? "selected" : ""?>>여자</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>환자 나이</strong></label>
                                <div class="col-lg-1">
                                    <input type="text" class="form-control" id="TT_AGE" name="TT_AGE" value="<?=$TT_AGE?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>치료 기간</strong></label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="TT_TRTMT_PRD" name="TT_TRTMT_PRD" value="<?=$TT_TRTMT_PRD?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>썸네일</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="thumbnail_upload_file" name="thumbnail_upload_file" onchange="thumbnail_upload('thumbnail')">
                                    <div><a id="thumbnail_src" href="<?=$TT_THMB_IMG?>" target="_blank"><?=($TT_THMB_IMG != "") ? $TT_THMB_IMG : ""?></a><?if($TT_THMB_IMG!= ""):?> <button type="button" class="btn" id="thumbnail_cut_btn" onclick="cutSrc('thumbnail')"><i class="fa fa-x">X</i></button><?endif?></div>

                                    <small class="text-primary">* 썸네일 이미지 사이즈는 270 X 177 입니다.</small>
                                    <input type="hidden" id="thumbnail_url" name="thumbnail_url"  value="<?=($TT_THMB_IMG != "") ? $TT_THMB_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>동영상 이미지</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="movie_upload_file" name="movie_upload_file" onchange="thumbnail_upload('movie')">
                                    <div><a id="movie_src" href="<?=$TT_STL_IMG?>" target="_blank"><?=($TT_STL_IMG != "") ? $TT_STL_IMG : ""?></a><?if($TT_STL_IMG!= ""):?> <button type="button" class="btn" id="movie_cut_btn" onclick="cutSrc('movie')"><i class="fa fa-x">X</i></button><?endif?></div>
                                    <small class="text-primary">* 이미지 사이즈는 700 X 394 입니다.</small>
                                    <input type="hidden" id="movie_url" name="movie_url"  value="<?=($TT_STL_IMG != "") ? $TT_STL_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>이미지(동영상 없을 시)</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="image_upload_file" name="image_upload_file" onchange="thumbnail_upload('image')">
                                    <div><a id="image_src" href="<?=$TT_SUB_IMG?>" target="_blank"><?=($TT_SUB_IMG != "") ? $TT_SUB_IMG : ""?></a><?if($TT_SUB_IMG!= ""):?> <button type="button" class="btn" id="image_cut_btn" onclick="cutSrc('image')"><i class="fa fa-x">X</i></button><?endif?></div>
                                    <small class="text-primary">* 이미지 사이즈는 700 X 394 입니다.</small>
                                    <input type="hidden" id="image_url" name="image_url"  value="<?=($TT_SUB_IMG != "") ? $TT_SUB_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>CT 사진</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="ct_upload_file" name="ct_upload_file" onchange="thumbnail_upload('ct')">
                                    <div><a id="ct_src" href="<?=$TT_CT_IMG?>" target="_blank"><?=($TT_CT_IMG != "") ? $TT_CT_IMG : ""?></a></div>
                                    <small class="text-primary">* 이미지 사이즈는 자동으로 조정됩니다.</small>
                                    <input type="hidden" id="ct_url" name="ct_url"  value="<?=($TT_CT_IMG != "") ? $TT_CT_IMG : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>동영상</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" id="vod_upload_file" name="vod_upload_file" onchange="movie_upload()">
                                    <div><a id="vod_src" href="<?=$TT_VOD_MP4?>" target="_blank"><?=($TT_VOD_MP4 != "") ? $TT_VOD_MP4 : ""?></a><?if($TT_VOD_MP4!= ""):?> <button type="button" class="btn" id="vod_cut_btn" onclick="cutSrc('vod')"><i class="fa fa-x">X</i></button><?endif?></div>
                                    <!--<small class="text-primary">* 이미지 사이즈는 847 X 452 입니다.</small>-->
                                    <input type="hidden" id="vod_url" name="vod_url"  value="<?=($TT_VOD_MP4 != "") ? $TT_VOD_MP4 : ""?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>치료 전</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;" id="TT_BEFORE" name="TT_BEFORE"><?=$TT_BEFORE?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>치료 후</strong></label>
                                <div class="col-sm-7">
                                    <textarea style="width:100%; height:500px;" id="TT_AFTER" name="TT_AFTER"><?=$TT_AFTER?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>메인 노출여부</strong></label>
                                <div class="col-sm-1">
                                    <select id="TT_MAIN_EXPS_YN" class="form-control">
                                        <option value="Y" <?=($TT_MAIN_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($TT_MAIN_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><strong>노출여부</strong></label>
                                <div class="col-sm-1">
                                    <select id="TT_EXPS_YN" class="form-control">
                                        <option value="Y" <?=($TT_EXPS_YN == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($TT_EXPS_YN == "N") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="ticket-email" class="col-sm-2 control-label text-center"><i class="fa fa-check"></i><strong>등록일</strong></label>
                                <div class="row form-group">
                                    <div class="col-sm-1">
                                        <input class="form-control" type="text" id="TT_RGST_YMDT" name="TT_RGST_YMDT" value="<?=substr($TT_RGST_YMDT,0,10)?>" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="widget-footer" style="text-align:center">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <?if($TT_SEQ == ""):?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">등록</button>
                                    <?else:?>
                                        <button type="button" class="btn btn-primary" onclick="checkForm()">수정</button>
                                        <button type="button" class="btn btn-danger" onclick="del('<?=$TT_SEQ?>')">삭제</button>
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

    $(document).ready(function() {
        $( "#TT_RGST_YMDT" ).datepicker({dateFormat:"yy-mm-dd" });
    });

    function thumbnail_upload(type){
        var ext = $('#'+type+'_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('이미지만 등록해 주세요.');
            $('#'+type+'_upload_file').val('');
            $('#'+type+'_src').val('');
            $('#'+type+'_url').val('');
            return;
        }

        var data = new FormData();
        $.each($('#'+type+'_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'treatment');

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
                    $('#'+type+'_src').text(data.img_src);
                    $('#'+type+'_src').prop('href',data.img_src);
                    $('#'+type+'_url').val(data.img_src);
                    return;
                }else{
                    $('#'+type+'_upload_file').val('');
                    $('#'+type+'_src').val('');
                    $('#'+type+'_url').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }

    function movie_upload(){
        var ext = $('#vod_upload_file').val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['mp4']) == -1) {
            alert('MP4 파일만 등록해 주세요.');
            $('#vod_upload_file').val('');
            return;
        }

        var data = new FormData();
        $.each($('#vod_upload_file')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });
        data.append('folder' , 'treatment');

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
                    $('#vod_url').val(data.movie_src);
                    $('#vod_src').text(data.movie_src);
                    $('#vod_src').prop('href',data.movie_src);
                    alert("동영상 업로드가 완료되었습니다.");
                    return;
                }else{
                    $('#vod_upload_file').val('');
                    alert('오류가 발생 되었습니다.');
                    return;
                }
            }
        });

    }
    
    function checkForm(){

        
        
        var TT_SEQ                  = $.trim($('#TT_SEQ').val());
        var TT_TTL                  = $.trim($('#TT_TTL').val());
        var TT_SUBTTL               = $.trim($('#TT_SUBTTL').val());
        var TT_CNR_TP               = $('#TT_CNR_TP option:selected').val();
        var TT_NM                   = $.trim($('#TT_NM').val());
        var TT_GENDER               = $('#TT_GENDER option:selected').val();
        var TT_AGE                  = $.trim($('#TT_AGE').val());
        var TT_TRTMT_PRD            = $.trim($('#TT_TRTMT_PRD').val());
        var TT_THMB_IMG             = $.trim($('#thumbnail_url').val());
        var TT_STL_IMG              = $.trim($('#movie_url').val());
        var TT_SUB_IMG              = $.trim($('#image_url').val());
        var TT_CT_IMG               = $.trim($('#ct_url').val());
        var TT_VOD_MP4              = $.trim($('#vod_url').val());
        var TT_BEFORE               = $.trim($('#TT_BEFORE').val());
        var TT_AFTER                = $.trim($('#TT_AFTER').val());
        var TT_MAIN_EXPS_YN         = $('#TT_MAIN_EXPS_YN option:selected').val();
        var TT_EXPS_YN              = $('#TT_EXPS_YN option:selected').val();
        var TT_RGST_YMDT           = $.trim($('#TT_RGST_YMDT').val());

        if(TT_TTL == ""){
            alert("제목을 입력해 주세요.");
            return;
        }

        if(TT_NM == ""){
            alert("환자 성명을 입력해 주세요.");
            return;
        }
        if(TT_THMB_IMG == ""){
            alert("썸네일을 업로드해 주세요.");
            return;
        }
        if(TT_MAIN_EXPS_YN == "Y"){
            if(TT_VOD_MP4 == "" && TT_SUB_IMG == ""){
                alert("메인 노출은 동영상이나 이미지 중 하나를 등록해 주세요.");
                return;
            }
        }
        if(TT_RGST_YMDT == ""){
            alert("등록일을 입력해 주세요.");
            return;
        }
        
        $.ajax({
            url : "/admin/treatment/registProcess",
            type : "POST",
            data : {"TT_SEQ" : TT_SEQ , "TT_TTL" : TT_TTL, "TT_SUBTTL" : TT_SUBTTL, "TT_NM" : TT_NM, "TT_CNR_TP" : TT_CNR_TP, "TT_NM" : TT_NM, "TT_GENDER" : TT_GENDER, "TT_AGE" : TT_AGE, 
                    "TT_TRTMT_PRD" : TT_TRTMT_PRD, "TT_THMB_IMG" : TT_THMB_IMG, "TT_STL_IMG" : TT_STL_IMG, "TT_SUB_IMG" : TT_SUB_IMG, "TT_CT_IMG" : TT_CT_IMG, "TT_VOD_MP4" : TT_VOD_MP4, "TT_BEFORE" : TT_BEFORE, "TT_AFTER" : TT_AFTER,
                    "TT_MAIN_EXPS_YN" : TT_MAIN_EXPS_YN, "TT_EXPS_YN" : TT_EXPS_YN, "TT_RGST_YMDT" : TT_RGST_YMDT},
            success : function(result) {
                if (result == true){
                    alert("처리 되었습니다.");
                    location.href="/admin/treatment/";
                }else{
                    alert("오류가 발생 되었습니다.");
                    return;
                }
            }
        });
    }
    function del(TT_SEQ){
        if (confirm('삭제 하시겠습니까?')){
            $.ajax({
                url : "/admin/treatment/deleteProcess",
                type : "POST",
                data : {"TT_SEQ" : TT_SEQ},
                success : function(result) {
                    if (result == true){
                        alert("삭제 되었습니다.");
                        location.href="/admin/treatment/";
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }
            });
        }
    }

    function cutSrc(type){
        $('#'+type+'_src').text('');
        $('#'+type+'_src').prop('href', '');
        $('#'+type+'_url').val('');
        $('#'+type+'_cut_btn').css('display', 'none');
    }


</script>


