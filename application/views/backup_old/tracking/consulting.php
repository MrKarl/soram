
<script type="text/javascript" src="/public/front/js/jquery-1.11.3.min.js"></script>
<?php
// HTTP_USER_AGENT 로 체크해보면 다음과 같은 결과를 보여줍니다.
// 결과: Mozilla/5.0 (Linux; U; Android 2.2; ko-k...

// 모바일 목록
$mobilechk = '/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/i';

// 모바일 접속인지 PC로 접속했는지 체크합니다.
if(preg_match($mobilechk, $_SERVER['HTTP_USER_AGENT'])) {
//모바일
    ?>

    <!-- AceCounter Mobile WebSite Gathering Script V.7.5.20120817 -->
    <script language='javascript'>

        var _AceGID=(function(){var Inf=['soram.kr','soram.kr,www.soram.kr','AZ2A52846','AM','0','NaPm,Ncisy','ALL','0']; var _CI=(!_AceGID)?[]:_AceGID.val;var _N=0;if(_CI.join('.').indexOf(Inf[3])<0){ _CI.push(Inf);  _N=_CI.length; } return {o: _N,val:_CI}; })();
        var _AceCounter=(function(){var G=_AceGID;if(G.o!=0){var _A=G.val[G.o-1];var _G=( _A[0]).substr(0,_A[0].indexOf('.'));var _C=(_A[7]!='0')?(_A[2]):_A[3];	var _U=( _A[5]).replace(/\,/g,'_');var _S=((['<scr','ipt','type="text/javascr','ipt"></scr','ipt>']).join('')).replace('tt','t src="'+location.protocol+ '//cr.acecounter.com/Mobile/AceCounter_'+_C+'.js?gc='+_A[2]+'&py='+_A[4]+'&up='+_U+'&rd='+(new Date().getTime())+'" t');document.writeln(_S); return _S;} })();

    </script>
    <noscript><img src='http://gmb.acecounter.com/mwg/?mid=AZ2A52846&tp=noscript&ce=0&' border='0' width='0' height='0' alt=''></noscript>

    <!-- AceCounter Mobile Gathering Script End -->
    <script>
        AM_PL('/tracking/consulting');
    </script>
<?
} else {
//PC
    ?>

    <!-- AceCounter Log Gathering Script V.7.5.2013010701 -->
    <script language='javascript'>




        var _AceGID=(function(){var Inf=['gtp5.acecounter.com','8080','AB2A36639447664','AW','0','NaPm,Ncisy','ALL','0']; var _CI=(!_AceGID)?[]:_AceGID.val;var _N=0;var _T=new Image(0,0);if(_CI.join('.').indexOf(Inf[3])<0){ _T.src =( location.protocol=="https:"?"https://"+Inf[0]:"http://"+Inf[0]+":"+Inf[1]) +'/?cookie'; _CI.push(Inf);  _N=_CI.length; } return {o: _N,val:_CI}; })();
        var _AceCounter=(function(){var G=_AceGID;if(G.o!=0){var _A=G.val[G.o-1];var _G=( _A[0]).substr(0,_A[0].indexOf('.'));var _C=(_A[7]!='0')?(_A[2]):_A[3];	var _U=( _A[5]).replace(/\,/g,'_');var _S=((['<scr','ipt','type="text/javascr','ipt"></scr','ipt>']).join('')).replace('tt','t src="'+location.protocol+ '//cr.acecounter.com/Web/AceCounter_'+_C+'.js?gc='+_A[2]+'&py='+_A[4]+'&gd='+_G+'&gp='+_A[1]+'&up='+_U+'&rd='+(new Date().getTime())+'" t');document.writeln(_S); return _S;} })();


    </script>
    <noscript><img src='http://gtp5.acecounter.com:8080/?uid=AB2A36639447664&je=n&' border='0' width='0' height='0' alt=''></noscript>
    <!-- AceCounter Log Gathering Script End -->

    <script>
        _PL('http://www.soram.kr/tracking/consulting');
    </script>

<?
}
?>
