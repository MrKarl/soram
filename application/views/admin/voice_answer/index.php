
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">고객의소리 답변 설정</h3>
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
                            <select class="form-control input-sm pull-left" name="is_rank" id="is_rank" aria-controls="dataTables-example" onchange="searchStatus()">
                                <option class="txt" value="" <?=($is_rank == "") ? 'selected': ''?>>우선순위(전체)</option>
                                <option class="txt" value="1" <?=($is_rank == "1") ? 'selected': ''?> >1</option>
                                <option class="txt" value="2" <?=($is_rank == "2") ? 'selected': ''?> >2</option>
                                <option class="txt" value="3" <?=($is_rank == "3") ? 'selected': ''?> >3</option>
                                <option class="txt" value="4" <?=($is_rank == "4") ? 'selected': ''?> >4</option>
                                <option class="txt" value="5" <?=($is_rank == "5") ? 'selected': ''?> >5</option>
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
                                <option value="TTL" <?=($search_field == "TTL") ? 'selected': ''?>>제목</option>
                                <option value="CONT" <?=($search_field == "CONT") ? 'selected': ''?>>내용</option>
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
                            <th style="width:10%;" class="text-center">우선순위</th>
                            <th style="width:60%;" class="text-center">제목</th>
                            <th style="width:20%;" class="text-center">등록일시</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?foreach($result as $rows):?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?=$cur_num?></td>
                                <td class="text-center"><?=$rows["SORD"]?></td>
                                <td class="text_center"><a href="/admin/voice_answer/regist?SEQ=<?=$rows["SEQ"]?>"><?=$rows['TTL']?></a></td>
                                <td class="text-center"><?=substr($rows["RGST_YMDT"],0,10)?></td>
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
            <div class="panel-footer" style="height:55px;">
                <button type="button" class="btn btn-success pull-right" onclick="location.href='/admin/voice_answer/regist';">등록</button>
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


