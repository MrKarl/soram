
<script type="text/javascript">

    function print_pop() {
        window.open('/guide/print_map','pop_printMap','width=720,height=1000,menubar=no,status=no,toolbar=no')
    }

    function mms_popup() {
        $.smartPop.open({title: 'MMS전송', background: "#000", width: 480, height: 348, url: "/about/mms_popup?type="+i });
        smartPop_frame.focus();
    }
</script>

<!--center_wrap -->
<section class="center_wrap">
    <div class="center_wrap_inner">
        <!--location -->
        <div class="location">
            <a href="#"><span class="home"></span></a><a href="#">이용안내</a><a href="#">오시는길</a>
        </div>
        <h3>오시는 길</h3>
        <div class="naver_map_wrap">
            <div class="naver_map"><img src="/public/front/images/guide/img_map.png" alt="소람병원위치 이미지" /></div>
            <div class="map_btn">
                <a href="http://map.naver.com/?dlevel=12&lat=37.5118250&lng=127.0499868&query=7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDsgrzshLHrj5kgMTE1&type=ADDRESS&tab=1&enc=b64" target="_blank"><img src="/public/front/images/guide/bt_map_naver.png" alt="네이버지도" /></a>
                <a href="javascript:;"  onclick="print_pop();return false;"><img src="/public/front/images/guide/bt_map_print.png" alt="지도프린터" /></a>
            </div>
        </div>

        <h4>주소</h4>
        <div class="txt_box">
            <div class="addr_wrap">
                <p class="new_addr">서울특별시 강남구 봉은사로 458</p>
                <p class="old_addr" >(구, 서울특별시 강남구 삼성동 115번지)</p>
            </div>
        </div>
        <h4>지하철</h4>
        <div class="txt_box">
            <div class="public_transit">
                <div class="subway">
                    <p><span class="station"><b>9</b>9호선 삼성중앙역</span><span>7번 출구에서 도보 3분(국민은행 봉은사로점 건너편)</span></p>
                </div>
            </div>
        </div>
        <h4>버스</h4>
        <div class="txt_box">
            <div class="public_transit">
                <div class="bus">
                    <p><span class="station"><b>마</b>강남 07</span><span>삼성중앙역, 플래티넘아파트 하차</span></p>
                    <p><span class="station"><b>B</b>3412</span><span>삼성중앙역, 플래티넘아파트 하차</span></p>
                    <p><span class="station blue"><b>B</b>351</span><span>삼성중앙역, 플래티넘아파트 하차</span></p>
                </div>
            </div>
        </div>
<!--		
          <h4>셔틀 운행 안내</h4>
        <div class="txt_box">
            <div class="public_transit">
                <div class="bus">
                    <p><span class="station blue">운행시간</span><span>평일 9:00~18:00 / 토요일 9:00~15:00</span></p>
                    <p><span class="station blue">신청방법</span><span>1661-1115 (전화신청)</span></p>
                    <p><span class="station blue">운행장소</span><span>7호선 강남구청역 1번출구</span></p>
					<p><span class="station blue"></span><span>9호선 선정릉역 3번출구</span></p>
					<p><span class="station blue"></span><span>2호선 선릉역 10번출구</span></p>                    
                </div>
            </div>
        </div>    
-->        
        
        <div class="guide_call">
            콜센터 <span class="f_roboto">1661-1115</span>
        </div>
    </div>
</section>
<!--//center_wrap -->
<!--right_wrap -->
<section class="right_wrap right_bg">
    <?=$this->common->cancer()?>
</section>
<!--//right_wrap -->
