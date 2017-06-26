
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">고객의소리</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">

                <form id="searchForm" name="searchForm" action="" method="get">

                    <div class="dataTables_filter" style="display: inline-flex; float:left;">
                        <label>
                            <select class="form-control input-sm pull-left" name="is_answer" id="is_answer" aria-controls="dataTables-example" onchange="searchStatus()">
                                <option class="txt" value="" <?=($is_answer == "") ? 'selected': ''?>>답변여부(전체)</option>
                                <option class="txt" value="Y" <?=($is_answer == "Y") ? 'selected': ''?> >답변완료</option>
                                <option class="txt" value="N" <?=($is_answer == "N") ? 'selected': ''?> >답변대기</option>
                            </select>
                        </label>
                    </div>


                    <div class="dataTables_filter" style="display: inline-flex; float:right;">

                        <label>
                            <div class="input-group" style="padding-right: 5px">
                                <input type="text" class="form-control" id="start_date"  name="start_date" value="<?=$start_date?>" style="width:100px" placeholder="시작일">
                            </div>
                        </label>
                        ~
                        <label>
                            <div class="input-group" style="padding-right: 5px">
                                <input type="text" class="form-control" id="end_date"  name="end_date" value="<?=$end_date?>"  style="width:100px" placeholder="종료일">

                            </div>
                        </label>

                        <label>
                            <select class="form-control input-sm" name="search_field" id="search_field" aria-controls="dataTables-example">
                                <option value="" <?=($search_field == "") ? 'selected': ''?>>전체</option>
                                <option value="UID" <?=($search_field == "UID") ? 'selected': ''?>>작성자</option>
                                <option value="TITLE" <?=($search_field == "TITLE") ? 'selected': ''?>>제목</option>
                                <option value="CONTENTS" <?=($search_field == "CONTENTS") ? 'selected': ''?>>내용</option>
                            </select>
                        </label>

                        <label>
                            <div class="form-group input-group" style="width:200px;text-align: right">
                                <input type="text" class="form-control" id="search_string"  name="search_string" style="width:150px;" value="<?=$search_string?>"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" onclick="search()">검색</button>
                                    </span>
                            </div>
                        </label>
                    </div>
                </form>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <th style="width:10%;" class="text-center">No</th>
                            <th style="width:10%;" class="text-center">작성자</th>
                            <th style="width:60%;" class="text-center">제목</th>
                            <th style="width:10%;" class="text-center">답변여부</th>
                            <th style="width:10%;" class="text-center">등록일</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?foreach($result as $rows):?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?=$cur_num?></td>
                                <td class="text-center"><?=$rows["UID"]?></td>
                                <td class="text_center"><a href="/admin/voice/regist?IDX=<?=$rows["IDX"]?>"><?=$rows['TITLE']?></a></td>
                                <td class="text-center"><? if($rows["ANS_YN"] == "Y"){ ?><span class="label label-success">답변완료</span><? }else{ ?><span class="label label-danger">답변대기</span><? } ?></td>
                                <td class="text-center"><?=substr($rows["REGDATE"],0,10)?></td>
                            </tr>
                            <?$cur_num--?>
                            <?$row_cnt++;?>
                        <?endforeach?>

                        </tbody>
                    </table>
                </div>

                <div class="text-center ">
                    <?if (count($result) > 0):?>
                        <?=$paging?>
                    <?else:?>
                        검색된 결과가 없습니다.
                    <?endif;?>
                </div>
            </div>
        </div>
        <!-- /.panel -->

    </div>
    <!-- /.col-lg-12 -->
</div>


<script>
    $(document).ready(function() {
        $( "#start_date" ).datepicker({dateFormat:"yy-mm-dd" });
        $( "#end_date" ).datepicker({dateFormat:"yy-mm-dd" });

    });

    function search(){
        $("#searchForm").attr("action", location.href);
        $("#searchForm").submit();
    }
    
</script>


