<script>

    $(document).ready(function() {
        var max_fields      = 50;
        var wrapper         = $(".party_wrap"); //Fields wrapper
        var add_button      = $(".add_btn"); //Add button ID

        var x = 1; //initlal text box count



        $(add_button).click(function(e){ //on add input button click

            e.preventDefault();
            add_html = '';
            add_html = add_html + '<label class="well">';
            add_html = add_html + '    <input type="hidden" id="idx" name="idx" />';
            add_html = add_html + '    <label class="form-group input-group">';
            add_html = add_html + '        <span class="input-group-addon">분류</span>';
            add_html = add_html + '        <select type="text" id="CCC_CD" class="form-control" >';
            <?foreach($etc_code as  $rows):?>
            add_html = add_html + '             <option value="<?=$rows['CCC_CD']?>" ><?=$rows['CCC_NM']?></option>';
            <?endforeach?>
            add_html = add_html + '        </select>';
            add_html = add_html + '    </label>';
            add_html = add_html + '    <label class="form-group input-group">';
            add_html = add_html + '        <span class="input-group-addon">코드</span>';
            add_html = add_html + '        <input type="text" class="form-control" id="CC_CD" />';
            add_html = add_html + '    </label>';
            add_html = add_html + '    <label class="form-group input-group">';
            add_html = add_html + '        <span class="input-group-addon">구분 명</span>';
            add_html = add_html + '        <input type="text" class="form-control" id="CC_NM" />';
            add_html = add_html + '    </label>';
            add_html = add_html + '    <label class="form-group input-group">';
            add_html = add_html + '        <span class="input-group-addon">순서</span>';
            add_html = add_html + '        <input type="text" class="form-control" id="CC_SORT" />';
            add_html = add_html + '    </label>';
            add_html = add_html + '    <label class="form-group input-group">';
            add_html = add_html + '        <span class="input-group-addon">노출여부</span>';
            add_html = add_html + '        <select type="text" class="form-control" id="CC_USE_YN" >';
            add_html = add_html + '             <option value="Y" >노출</option>';
            add_html = add_html + '             <option value="N" >미노출</option>';
            add_html = add_html + '        </select>';
            add_html = add_html + '    </label>';
            add_html = add_html + '    <p class="text-center">';
            add_html = add_html + '        <button type="button" class="btn btn-primary btn-sm save_btn">저장</button>';
            add_html = add_html + '        <button type="button" class="btn btn-warning btn-sm remove_btn">취소</button>';
            add_html = add_html + '    </p>';
            add_html = add_html + '</label>';


            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).prepend(add_html); //add input box
            }
        });

        $(wrapper).on("click",".remove_btn", function(e){ //user click on remove text
            e.preventDefault();
            $(this).parent('p').parent('label').remove();
            x--;
        });

        $(wrapper).on("click",".save_btn", function(e){ //user click on remove text
            e.preventDefault();
            CCC_CD          = $(this).parent('p').parent('label').find("#CCC_CD").val();
            CC_CD          = $(this).parent('p').parent('label').find("#CC_CD").val();
            CC_NM           = $(this).parent('p').parent('label').find("#CC_NM").val();
            CC_SORT         = $(this).parent('p').parent('label').find("#CC_SORT").val();
            CC_USE_YN       = $(this).parent('p').parent('label').find("#CC_USE_YN").val();
            idx             = $(this).parent('p').parent('label').find("#idx").val();

            if ($.trim(CC_CD) == ""){
                alert("코드를 입력해 주세요.");
                return;
            }
            if ($.trim(CC_NM) == ""){
                alert("구분 명을 입력해 주세요.");
                return;
            }
            if ($.trim(CC_SORT) == ""){
                alert("순서를 입력해 주세요.");
                return;
            }

            $.ajax({
                url : "/admin/staff/codeProcess",
                type : "POST",
                data: { "idx" : idx , "CCC_CD" : CCC_CD , "CC_CD" : CC_CD , "CC_NM": CC_NM , "CC_SORT" : CC_SORT , "CC_USE_YN" : CC_USE_YN },
                dataType : "JSON",
                success : $.proxy(function(result) {
                    if (result == true){
                        alert("처리 되었습니다.");
                        location.reload();
                    }else{
                        alert("오류가 발생 되었습니다.");
                        return;
                    }
                }, $(this))
            });

        });

        $(wrapper).on("click",".del_btn", function(e){ //user click on remove text
            e.preventDefault();
//            var idx = $(this).parent('p').parent('label').parent('label').find('#idx').val();
//            if (idx != ""){
//                if(!confirm("삭제 하시겠습니까?")){
//                    return;
//                }
//            }
            $(this).parent('p').parent('label').parent('label').find('#menu_name').val('');
            $(this).parent('p').parent('label').parent('label').find('#menu_url').val('');

        });


        $(wrapper).on("click",".del_row_btn", function(e){ //user click on remove text
            e.preventDefault();
            if (confirm("삭제 하시겠습니까?\n삭제 하시면 해당 데이터는 모두 삭제 됩니다.")){
                idx = $(this).parent('p').parent('label').find('#idx').val();
                $.ajax({
                    url : "/admin/staff/codeDeleteProcess",
                    type : "POST",
                    data: {"idx": idx },
                    success : function(result) {
                        if (result == true){
                            alert("처리 되었습니다.");
                            location.reload();
                        }else{
                            alert("오류가 발생 되었습니다.");
                            return;
                        }
                    }
                });
            }
        });

        $(wrapper).on("click",".modify_btn", function(e){ //user click on remove text
            e.preventDefault();
            CCC_CD          = $(this).parent('p').parent('label').find("#CCC_CD").val();
            CC_CD          = $(this).parent('p').parent('label').find("#CC_CD").val();
            CC_NM           = $(this).parent('p').parent('label').find("#CC_NM").val();
            CC_SORT         = $(this).parent('p').parent('label').find("#CC_SORT").val();
            CC_USE_YN       = $(this).parent('p').parent('label').find("#CC_USE_YN").val();
            var idx         = $(this).parent('p').parent('label').find('#idx').val();

            if (confirm("저장 하시겠습니까?")){
                idx = $(this).parent('p').parent('label').find('#idx').val();
                $.ajax({
                    url : "/admin/staff/codeProcess",
                    type : "POST",
                    data: { "idx" : idx , "CCC_CD" : CCC_CD , "CC_CD" : CC_CD , "CC_NM": CC_NM , "CC_SORT" : CC_SORT , "CC_USE_YN" : CC_USE_YN },
                    success : function(result) {
                        if (result == true){
                            alert("처리 되었습니다.");
                            location.reload();
                        }else{
                            alert("오류가 발생 되었습니다.");
                            return;
                        }
                    }
                });
            }
        });
    });

</script>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">전문 의료진 코드 관리</h3>
    </div>
    <!-- /.col-lg-12 -->


    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <button type="button" class="btn btn-success add_btn">추가</button>
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body  ">

                <div class="col-sm-12 ">
                    <div class="party_wrap">

                        <?foreach($result as $rows):?>
                            <label class="well">
                                <input type="hidden" id="idx" name="idx" value="<?=$rows["CC_CD"]?>" />
                                <label class="form-group input-group">
                                    <span class="input-group-addon">분류</span>
                                    <select type="text" id="CCC_CD" class="form-control" >
                                        <?foreach($etc_code as  $row):?>
                                            <option value="<?=$row['CCC_CD']?>" <?=($row['CCC_CD'] == mb_substr($rows['CC_CD'],0,4)) ? "selected" : ""?>><?=$row['CCC_NM']?></option>
                                        <?endforeach?>
                                    </select>
                                </label>
                                <label class="form-group input-group">
                                    <span class="input-group-addon">코드</span>
                                    <input type="text" class="form-control" id="CC_CD" value="<?=mb_substr($rows['CC_CD'],4)?>" />
                                </label>
                                <label class="form-group input-group">
                                    <span class="input-group-addon">구분 명</span>
                                    <input type="text" class="form-control" id="CC_NM" value="<?=$rows['CC_NM']?>" />
                                </label>
                                <label class="form-group input-group">
                                    <span class="input-group-addon">순서</span>
                                    <input type="text" class="form-control" id="CC_SORT" value="<?=$rows['CC_SORT']?>" />
                                </label>
                                <label class="form-group input-group">
                                    <span class="input-group-addon">노출여부</span>
                                    <select type="text" id="CC_USE_YN" class="form-control" >
                                        <option value="Y" <?=($rows['CC_USE_YN'] == "Y") ? "selected" : ""?>>노출</option>
                                        <option value="N" <?=($rows['CC_USE_YN'] != "Y") ? "selected" : ""?>>미노출</option>
                                    </select>
                                </label>

                                <p class="text-center">
                                    <button type="button" class="btn btn-outline btn-success btn-sm modify_btn">저장</button>
                                    <button type="button" class="btn btn-outline btn-danger btn-sm del_row_btn">삭제</button>
                                </p>
                            </label>
                        <?endforeach?>
                    </div>

                    <!--                    <div class="widget-footer" style="text-align:center">-->
                    <!--                        <fieldset>-->
                    <!--                            <div class="form-group">-->
                    <!--                                <div class="col-sm-12 ">-->
                    <!--                                    <button type="button" class="btn btn-primary" onclick="checkForm()">저장</button>-->
                    <!--                                    <button type="button" id="btn_cancle" class="btn btn-default" onclick="location.reload()">취소</button>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </fieldset>-->
                    <!--                    </div>-->
                </div>






            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>

