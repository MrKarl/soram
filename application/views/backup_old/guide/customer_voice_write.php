<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="/"><span class="home"></span></a><a href="#">이용안내</a><a href="#">고객센터</a><a href="#">고객의 소리</a>
        </div>
        <h3>고객의 소리</h3>
        <h4 class="mt40"><span class="f_bold">등록</span>하기</h4>
        <form>
            <table class="st_table2 mt7 join_form" summary="이 표는 고객의 소리 등록화면입니다." width="100%">
                <colgroup>
                    <col style="width:24%;">
                    <col style="width:76%;">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">제목  </th>
                    <td><input type="text" id="TITLE" class="st_input2"/></td>
                </tr>
                <tr>
                    <th scope="row">작성자 </th>
                    <td><div class="td_h"><?=$result->MBR_NM?></div></td>
                </tr>
                <tr >
                    <th scope="row" >내용</th>
                    <td class="write_cont">
                        <div class="box">
                            <textarea  id="CONTENTS"></textarea>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>

        </form>
        <p class="btn_line mt40"><a href="javascript:resetForm()" class="bt_st3 mr5">취소</a><a href="javascript:check()" class="bt_st4">등록</a></p>
        <script>
            function resetForm(){
                $("form").each(function() {
                    this.reset();
                });
            }

            function check(){
                TITLE       = $.trim($("#TITLE").val());
                CONTENTS    = $.trim($("#CONTENTS").val());

                if (TITLE == ""){
                    alert("제목을 입력해 주세요.");
                    return;
                }
                if (CONTENTS == ""){
                    alert("내용을 입력해 주세요.");
                    return;
                }
                $.ajax({
                    type:"POST",
                    url:"/guide/customer_voice_process",
                    data:{"TITLE" : TITLE, "CONTENTS" : CONTENTS},
                    success : function(result){
                        if(result == false){
                            alert('오류가 발생 되었습니다');
                            return;
                        }else{
                            alert('등록 되었습니다.');
                            location.href = "/";
                        }
                    }
                });

            }
        </script>
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
