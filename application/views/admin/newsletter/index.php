
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

                <form id="searchForm" name="searchForm" action="" method="get">

                    <div class="dataTables_filter" style="display: inline-flex; float:left;">
                        <label>
                            <select class="form-control input-sm pull-left" name="is_exps" id="is_exps" aria-controls="dataTables-example" onchange="searchStatus()">
                                <option class="txt" value="" <?=($is_exps == "") ? 'selected': ''?>>처리현항(전체)</option>
                                <option class="txt" value="1" <?=($is_exps == "1") ? 'selected': ''?> >대기중</option>
                                <option class="txt" value="2" <?=($is_exps == "2") ? 'selected': ''?> >발송완료</option>
                                <option class="txt" value="3" <?=($is_exps == "3") ? 'selected': ''?> >발송취소</option>
                            </select>
                        </label>
                    </div>
                    <div class="dataTables_filter" style="display: inline-flex; float:left;">
                        <label>
                            <select class="form-control input-sm pull-left" name="size" id="size" aria-controls="dataTables-example" onchange="searchStatus()">
                                <option class="txt" value="10" <?=($size == "10") ? 'selected': ''?>>리스트수(10)</option>
                                <option class="txt" value="20" <?=($size == "20") ? 'selected': ''?>>리스트수(20)</option>
                                <option class="txt" value="30" <?=($size == "30") ? 'selected': ''?>>리스트수(30)</option>
                                <option class="txt" value="50" <?=($size == "50") ? 'selected': ''?>>리스트수(50)</option>
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
                                <option value="IMT_NM" <?=($search_field == "IMT_NM") ? 'selected': ''?>>신청자</option>
                                <option value="IMT_CPH" <?=($search_field == "IMT_CPH") ? 'selected': ''?>>핸드폰</option>
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
                            <tr>
                                <th style="width:10%;" class="text-center">No</th>
                                <th style="width:10%;" class="text-center">신청자</th>
                                <th style="width:10%;" class="text-center">핸드폰</th>
                                <th style="width:50%;" class="text-center">이메일</th>
                                <th style="width:10%;" class="text-center">처리현황</th>
                                <th style="width:10%;" class="text-center">등록일</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?foreach($result as $rows):?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?=$cur_num?></td>
                                <td class="text-center"><a href="/admin/newsletter/regist?IMT_SEQ=<?=$rows["IMT_SEQ"]?>"><?=$rows['IMT_NM']?></a></td>
                                <td class="text-center"><?=$rows['IMT_CPH']?></td>
                                <td class="text-center"><?=$rows['IMT_EMAIL']?></td>
                                <td class="text-center"><? if($rows['IMT_STAT'] == "1"){ ?><span class="label label-info">대기</span><? }elseif($rows['IMT_STAT'] == "2"){ ?><span class="label label-success">발송완료</span><? }else{ ?><span class="label label-success">발송취소</span><? }?></td>
                                <td class="text-center"><?=substr($rows['IMT_RGST_YMDT'],0,10)?></td>
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


