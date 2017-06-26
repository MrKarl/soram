
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">회원관리</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="height:55px;">

                <form id="searchForm" name="searchForm" action="" method="get">
                    <input type="hidden" name="delete" id="delete" value="<?=$delete?>"/>
                    <div class="dataTables_filter" style="display: inline-flex; float:left;">
                        <label>
                            <select class="form-control input-sm" name="is_sms" id="is_sms" aria-controls="dataTables-example" onchange="searchStatus()">
                                <option class="txt" value="" <?=($is_sms == "") ? 'selected': ''?>>(SMS)전체</option>
                                <option class="txt" value="Y" <?=($is_sms == "Y") ? 'selected': ''?> >(SMS)수신</option>
                                <option class="txt" value="N" <?=($is_sms == "N") ? 'selected': ''?> >(SMS)미수신</option>
                            </select>
                        </label>
                    </div>


                    <div class="dataTables_filter" style="display: inline-flex; float:left;">
                        <label>
                            <select class="form-control input-sm" name="size" id="size" aria-controls="dataTables-example" onchange="searchStatus()">
                                <option class="txt" value="10" <?=($size == 10) ? 'selected': ''?>>리스트수(10)</option>
                                <option class="txt" value="20" <?=($size == 20) ? 'selected': ''?> >리스트수(20)</option>
                                <option class="txt" value="30" <?=($size == 30) ? 'selected': ''?> >리스트수(30)</option>
                                <option class="txt" value="50" <?=($size == 50) ? 'selected': ''?> >리스트수(50)</option>
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
                                <option value="MBR_ID" <?=($search_field == "MBR_ID") ? 'selected': ''?>>아이디</option>
                                <option value="MBR_NM" <?=($search_field == "MBR_NM") ? 'selected': ''?>>회원명</option>
                                <option value="MBR_CPH" <?=($search_field == "MBR_CPH") ? 'selected': ''?>>핸드폰</option>
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
                        <th style="width:15%;" class="text-center">아이디</th>
                        <th style="width:15%;" class="text-center">회원명</th>
                        <th style="width:25%;" class="text-center">이메일</th>
                        <th style="width:15%;" class="text-center">핸드폰</th>
                        <th style="width:10%;" class="text-center">SMS</th>
                        <th style="width:10%;" class="text-center">가입일자</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?foreach($result as $rows):?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?=$cur_num?></td>
                                <td class="text-center"><a href="/admin/member/regist?seq=<?=$rows["MBR_SEQ"]?>" ><?=$rows["MBR_ID"]?></a></td>
                                <td class="text-center"><a href="/admin/member/regist?seq=<?=$rows["MBR_SEQ"]?>" ><?=$rows["MBR_NM"]?></a></td>
                                <td class="text-center"><?=$rows["MBR_EMAIL"]?></td>
                                <td class="text-center"><?=$rows["MBR_CPH"]?></td>
                                <td class="text-center"><?=($rows["MBR_SMS_YN"] == "Y") ? "수신" : "미수신"?></td>
                                <td class="text-center"><?=substr($rows["MBR_RGST_YMDT"],0,10)?></td>
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


