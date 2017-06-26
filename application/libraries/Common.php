<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common {
    function __construct() {
        $this->CI=& get_instance();
        $this->CI->load->model('m_common');
    }

    //코드 리턴 value
    public function getCodeValue($code){
        return $this->CI->m_common->selecCodeValueOne($code);
    }

    //코드 옵션
    public function getCodeArray($entry){
        $code_array = array();
        $result     = $this->CI->m_common->selecCode($entry);
        if (count($result) > 0){
            foreach ($result as $row){
                $code_array[$row["code_key"]] = $row["code_value"];
            }
        }
        return $code_array;
    }

    //코드 옵션2
    public function getCodeArray2($entry){
        $code_array = array();
        $result     = $this->CI->m_common->selecCode($entry);
        if (count($result) > 0){
            foreach ($result as $row){
                $code_array[$row["code_key"]] = $row["code_value2"];
            }
        }
        return $code_array;
    }


    //email 패턴 체크
    public function checkEmail($email){
        $result  = true;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        return $result;
    }

    //글자수 줄이기
    public function cutStr($str, $len, $checkmb=false, $tail='...'){
        preg_match_all('/[\xEA-\xED][\x80-\xFF]{2}|./', $str, $match);

        $m    = $match[0];
        $slen = strlen($str);  // length of source string
        $tlen = strlen($tail);// length of tail string
        $mlen = count($m);// length of matched characters


        if ($slen <= $len) return $str;

        if (!$checkmb && $mlen <= $len) return $str;

        $ret   = array();
        $count = 0;
        for ($i=0; $i < $len; $i++) {
            $count += ($checkmb && strlen($m[$i]) > 1)?2:1;
            if ($count + $tlen > $len) break;
            $ret[] = $m[$i];
        }
        return join('', $ret).$tail;
    }

    //모바일 여부 체크
    public function checkMobile(){
        $mobile_agent = array("iphone","ipod","ipad","android","blackberry","opera Mini", "windows ce", "nokia", "sony" );
        $check_mobile = false;
        for($i=0; $i<sizeof($mobile_agent); $i++){
            if(preg_match("/$mobile_agent[$i]/", strtolower($_SERVER['HTTP_USER_AGENT']))){
                $check_mobile = true;
                break;
            }
        }
        $is_mobile = "N";
        if($check_mobile) {
            $is_mobile = "Y";
        }

        return $is_mobile;
    }

    //아이피 주소 확인
    function getRealIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP']) && getenv('HTTP_CLIENT_IP')){
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']) && getenv('HTTP_X_FORWARDED_FOR')){
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        elseif(!empty($_SERVER['REMOTE_HOST']) && getenv('REMOTE_HOST')){
            return $_SERVER['REMOTE_HOST'];
        }
        elseif(!empty($_SERVER['REMOTE_ADDR']) && getenv('REMOTE_ADDR')){
            return $_SERVER['REMOTE_ADDR'];
        }
        return false;
    }

    //우측 희망메세지
    function cancer(){

        $str = '<div class="right_wrap_inner ">';
        $str .= '    <ul class="cancer_list">';
        $str .= '        <li>';
        $str .= '            <a href="/hope/lung"><p class="title" >폐암</p></a>';
        $str .= '        </li>';
        $str .= '        <li>';
        $str .= '            <a href="/hope/breast"><p class="title">유방암</p></a>';
        $str .= '        </li>';
        $str .= '        <li>';
        $str .= '            <a href="/hope/colorectal"><p class="title">대장암</p></a>';
        $str .= '        </li>';
        $str .= '        <li>';
        $str .= '            <a href="/hope/liver"><p class="title">간,담,췌장암</p></a>';
        $str .= '        </li>';
        $str .= '        <li>';
        $str .= '            <a href="/hope/etc"><p class="title">기타암</p></a>';
        $str .= '        </li>';
        $str .= '    </ul>';
        $str .= '</li>';

        return $str;
    }



    //이메일 보내기
    function sendMail($EMAIL, $NAME, $mailto, $SUBJECT, $CONTENT){
        //$EMAIL : 답장받을 메일주소
        //$NAME : 보낸이
        //$mailto : 보낼 메일주소
        //$SUBJECT : 메일 제목
        //$CONTENT : 메일 내용
        $admin_email = $EMAIL;
        $admin_name = $NAME;

        $header = "Return-Path: ".$admin_email."\n";
        $header .= "From: =?UTF-8?B?".base64_encode($admin_name)."?= <".$admin_email.">\n";
        $header .= "MIME-Version: 1.0\n";
        $header .= "X-Priority: 3\n";
        $header .= "X-MSMail-Priority: Normal\n";
        $header .= "X-Mailer: FormMailer\n";
        $header .= "Content-Transfer-Encoding: base64\n";
        $header .= "Content-Type: text/html;\n \tcharset=utf-8\n";

        $subject = "=?UTF-8?B?".base64_encode($SUBJECT)."?=\n";
        $contents = $CONTENT;

        $message = base64_encode($contents);
        flush();
        return mail($mailto, $subject, $message, $header);
    }


    //로그인 체크
    function loginCheck(){

        if (isset($_SERVER['HTTP_REFERER'])){
            $refer = $_SERVER['HTTP_REFERER'];
        }else{
            exit;
        }

        $MBR_ID = $this->CI->session->userdata("MBR_ID");
        if ($MBR_ID == ""){
            echo "<script>alert('로그인 후 이용 바랍니다.');location.href='" .$refer ."'</script>";
            exit;
        }
    }

    //내 로그인 체크
    function myLoginCheck($checkId){
        self::loginCheck();

        if (isset($_SERVER['HTTP_REFERER'])){
            $refer = $_SERVER['HTTP_REFERER'];
        }else{
            exit;
        }

        if ($this->CI->session->userdata("MBR_ID") != $checkId){
            echo "<script>alert('권한이 없습니다.');location.href='" .$refer  ."'</script>";
            exit;

        }

    }

    //전문의료진 코드값에서 직위가져 오기
    function getStaffCode($code){
        $result = $this->CI->m_common->selecStaffCode($code);
        $data = explode("-" , $result);
        return trim($data[0]);


    }

    //매체 가져오기
    function selectMedia($category){
        $result = $this->CI->m_common->selectMedia($category);
        return $result;
    }
}