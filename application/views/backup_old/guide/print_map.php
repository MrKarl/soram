<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" id="Viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>인쇄 | 소람 한방병원 지도</title>
    <!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
    <!--[if lt IE 8]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script><![endif]-->
    <!--[if lt IE 7]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script><![endif]-->
    <script src="http://b-c.googlecode.com/hg/bin/bc.js"></script>
    <link type="text/css" href="<?=$this->config->item('base_url');?>/public/front/css/common.css" rel="stylesheet">
    <link type="text/css" href="<?=$this->config->item('base_url');?>/public/front/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="<?=$this->config->item('base_url');?>/public/front/js/jquery-1.11.3.min.js"></script>
</head>
<script type="text/javascript">
    window.print();
</script>


<body>
<div class="wrap">
    <div class="containerWrap sub ">
        <!--main_wrap -->
        <div id="main_wrap" style="margin-left:10px">
            <!--center_wrap -->
            <section class="center_wrap" style="width:700px;margin:0">
                <div class="center_wrap_inner" style="padding:0;margin:0">

                    <h3>오시는 길</h3>
                    <div class="naver_map_wrap" style="margin-top:20px;">
                        <div class="naver_map"><img src="<?=$this->config->item('base_url');?>/public/front/images/guide/img_map.png" alt="소람병원위치 이미지" /></div>
                    </div>

                    <h4 style="margin-top:20px;">주소</h4>
                    <div class="txt_box">
                        <div class="addr_wrap">
                            <p class="new_addr" style="font-size:16px;">서울특별시 강남구 봉은사로 458</p>
                            <p class="old_addr" style="font-size:16px;margin-top:5px;">(구, 서울특별시 강남구 삼성동 115번지)</p>
                        </div>
                    </div>
                    <h4 style="margin-top:20px;">지하철</h4>
                    <div class="txt_box">
                        <div class="public_transit">
                            <div class="subway">
                                <p><span class="station">9호선 삼성중앙역</span><span>7번 출구에서 도보 3분(국민은행 봉은사로점 건너편)</span></p>
                            </div>
                        </div>
                    </div>
                    <h4 style="margin-top:20px;">버스</h4>
                    <div class="txt_box">
                        <div class="public_transit">
                            <div class="bus">
                                <p><span class="station">강남 07</span><span>삼성중앙역, 플래티넘아파트 하차</span></p>
                                <p><span class="station">3412</span><span>삼성중앙역, 플래티넘아파트 하차</span></p>
                                <p><span class="station blue">351</span><span>삼성중앙역, 플래티넘아파트 하차</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="guide_call" style="margin-top:20px;">
                        콜센터 <span class="f_roboto">1611-1115</span>
                    </div>
                </div>
            </section>
            <!--//center_wrap -->

        </div>

        <!--//main_wrap -->
    </div>
</div>
</body>

</html>