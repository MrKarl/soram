<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-04-22
 * Time: ���� 12:01
 */

class Guide extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_guide');
        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('size') : 10;
        $this->data['search_string']    = trim($this->input->get_post('search_string'));
        $this->data['search_field']     = $this->input->get_post('search_field');



        $this->data['base_url']         = current_url() . "?search_string=" . $this->data['search_string'] . "&search_field=" . $this->data['search_field'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

//        $this->output->enable_profiler(TRUE);
//        error_reporting(E_ALL);
//        ini_set("display_errors", 1);

    }

    //1:1상담
    function consulting(){

        $this->data['tot_row']          = $this->m_guide->selectConsultingCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_guide->selectConsulting();


        $this->load->view('guide/consulting', $this->data);
    }

    function consultingProcess(){
        $this->yield        = FALSE;


        $CL_TTL         = $this->input->post("CL_TTL");
        $CL_NM          = $this->input->post("CL_NM");
        $CL_PWD         = $this->input->post("CL_PWD");
        $CL_CPH         = $this->input->post("CL_CPH");
        $CL_CONT        = $this->input->post("CL_CONT");
        $MBR_ID         = $this->session->userdata("MBR_ID");

        $data           = array("CL_TTL"=>$CL_TTL, "CL_NM"=>$CL_NM, "CL_PWD"=> $CL_PWD, "CL_CPH"=>$CL_CPH, "CL_CONT"=>$CL_CONT, "MBR_ID" =>  $MBR_ID,  "CL_RGST_YMDT"=>date('Y-m-d H:i:s') , "USER_IP" => $this->input->ip_address());

        if (self::check_referer() && $CL_NM != ""){
            $result         = $this->m_guide->insertCousultingProcess($data);
        }


        echo $result;
    }


    function check_referer(){
        $host = 'http://'.getenv('HTTP_HOST');
        if($host == substr(getenv('HTTP_REFERER'),0,strlen($host)))
            return 1;
        else
            return 0;
    }

    //1:1 비밀번호 비교
    function comparePwd(){
        $this->yield        = FALSE;


        $this->data["consulting_seq"]         = $this->input->post("consulting_seq");
        $this->data["consulting_pwd"]         = $this->input->post("consulting_pwd");
        $result                               = $this->m_guide->selectCousultingOne();

        if (count($result) <= 0){
            echo 0;
        }else{
            echo 1;
        }
    }

    //1:1 상세페이지
    function consulting_view(){
        $this->data["consulting_seq"]         = $this->input->get("consulting_seq");
        $this->data["consulting_pwd"]         = $this->input->get("consulting_pwd");
        $this->data["result"]                 = $this->m_guide->selectCousultingOne();

        if (count($this->data["result"]) <= 0){
            exit;
        }else{
            $this->load->view('guide/consulting_view', $this->data);
        }

    }

    //고객의 소리
//    function customer_voice(){
//
//        $this->data['tot_row']          = $this->m_guide->selectVoiceCount();
//        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
//        $this->paging->init($this->data);
//        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
//        $this->data['result']           = $this->m_guide->selectVoice();
//
//        $this->load->view('guide/customer_voice', $this->data);
//    }

    //고객의 소리 view
//    function customer_voice_view() {
//
//
//
//        $this->data['result']           = $this->m_guide->selectVoiceView($this->input->get_post('idx'));
//
//        //내 게시물 체크
//        $this->common->myLoginCheck($this->data['result']->UID);
//
//        $this->load->view('guide/customer_voice_view', $this->data);
//    }

    //고객의 소리 write
    function customer_voice_write() {

        $this->load->model('m_member');
        $this->common->loginCheck();
        $MBR_ID = $this->session->userdata("MBR_ID");
        $this->data["result"]        = $this->m_member->selectUser($MBR_ID);

        if (count($this->data["result"]) > 0){
            $this->load->view('guide/customer_voice_write' , $this->data);
        }


    }

    function customer_voice_process(){
        $this->yield    = FALSE;
        $this->data['TITLE']            = $this->input->get_post('TITLE');
        $this->data['CONTENTS']         = $this->input->get_post('CONTENTS');

        $this->common->loginCheck();

        $MBR_ID = $this->session->userdata("MBR_ID");
        $data = array("UID" =>$MBR_ID , "TITLE" => $this->data['TITLE'] , "CONTENTS" => $this->data['CONTENTS'] , "REGDATE" => date("Y-m-d H:i:s"));
        echo $this->m_guide->insertVioce($data);


    }

    //FAQ
    function faq(){

        $this->data['faq_type']         = $this->input->get_post('faq_type');

        $this->data['tot_row']          = $this->m_guide->selectFaqCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_guide->selectFaq();
        $this->load->view('guide/faq' , $this->data);
    }

    // 공지사항
    function notice(){
        $this->data['tot_row']          = $this->m_guide->selectNoticeCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_guide->selectNotice();
    
        $this->load->view('guide/notice', $this->data);
    }

    // 공지사항 view
    function notice_view(){
        $seq                            = $this->input->get_post('seq');
        $this->data['result']           = $this->m_guide->selectNoticeView($seq);

        
        $preview                        = $this->m_guide->selectNoticeChangePreview($seq);
        $next                           = $this->m_guide->selectNoticeChangeNext($seq);
        if($preview->num_rows() > 0) {
            $row = $preview->row();
            $this->data['preview'] = $row->preview;
        }
        
        if($next->num_rows() > 0) {
            $row = $next->row();
            $this->data['next'] = $row->next;
        }

        $this->load->view('guide/notice_view', $this->data);
    }

    // 소람이야기
    function story(){
        $this->data['tot_row']          = $this->m_guide->selectStoryCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_guide->selectStory();

        $this->load->view('guide/story', $this->data);
    }

    // 소람이야기 view
    function story_view(){
        $seq                            = $this->input->get_post('seq');
        $this->data['result']           = $this->m_guide->selectStoryView($seq);


        $preview                        = $this->m_guide->selectStoryChangePreview($seq);
        $next                           = $this->m_guide->selectStoryChangeNext($seq);
        if($preview->num_rows() > 0) {
            $row = $preview->row();
            $this->data['preview'] = $row->preview;
        }
        
        if($next->num_rows() > 0) {
            $row = $next->row();
            $this->data['next'] = $row->next;
        }

        $this->load->view('guide/story_view', $this->data);
    }


    function uninsured(){
        $this->data['tot_row']          = $this->m_guide->selectUninsuredCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_guide->selectUninsured();
		
        $this->load->view('guide/uninsured', $this->data);
    }

    function news(){
        $this->load->view('guide/news');
    }

    //소식지 신청
    function news_apply(){

        $this->data["zipcode_cnt"]      = "0";


        $this->data['tot_row']          = $this->m_guide->selectVoiceCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_guide->selectVoice();
        $this->load->view('guide/news_apply', $this->data);
    }

    function news_apply_process(){
        $result             = 0;
        $this->yield                    = FALSE;
        $IMT_NM             = $this->input->get_post('IMT_NM');
        $IMT_ZIPCD          = $this->input->get_post('IMT_ZIPCD');
        $IMT_ADDR           = $this->input->get_post('IMT_ADDR');
        $IMT_ADDR_DTL       = $this->input->get_post('IMT_ADDR_DTL');

        $IMT_ADDR_DTL       = $this->input->get_post('IMT_ADDR_DTL');

        $IMT_CPH            = $this->input->get_post('IMT_CPH');
        $IMT_TEL            = $this->input->get_post('IMT_TEL');
        $IMT_EMAIL          = $this->input->get_post('IMT_EMAIL');
        $IMT_BOOK           = $this->input->get_post('IMT_BOOK');
        $IMT_APPLICANT      = $this->input->get_post('IMT_APPLICANT');
        $IMT_REGION         = $this->input->get_post('IMT_REGION');
        $IMT_CLASS          = $this->input->get_post('IMT_CLASS');
        $IMT_ROUTE          = $this->input->get_post('IMT_ROUTE');
        $IMT_CONT           = $this->input->get_post('IMT_CONT');


        $MBR_ID             = $this->session->userdata("MBR_ID");
        $IMT_TYPE           = "T1";
        $IMT_STAT           = 1; //대기상태
        $data               = array("IMT_NM" => $IMT_NM, "IMT_ZIPCD" => $IMT_ZIPCD , "IMT_ADDR" => $IMT_ADDR, "IMT_ADDR_DTL" => $IMT_ADDR_DTL, "IMT_CPH" => $IMT_CPH, "IMT_CONT" => $IMT_CONT, "IMT_TEL" => $IMT_TEL, "IMT_EMAIL" => $IMT_EMAIL, "IMT_BOOK" => $IMT_BOOK, "IMT_APPLICANT" => $IMT_APPLICANT
        , "IMT_REGION" => $IMT_REGION, "IMT_CLASS" => $IMT_CLASS, "IMT_ROUTE" => $IMT_ROUTE , "IMT_TYPE" =>  $IMT_TYPE , "IMT_STAT" => $IMT_STAT, "MBR_ID" => $MBR_ID , "IMT_RGST_YMDT" =>  date('Y-m-d H:i:s'));

        if (self::check_referer() && $IMT_NM != ''){
            $result        =  $this->m_guide->insertNewsApply($data);
        }

        echo $result;



    }

    //우편번호 검색
    function zipcode(){
        $this->yield                    = FALSE;
        $this->data['dong']             = $this->input->get_post('dong');

        $result                         = $this->m_guide->selectZipcode();

        $data = array("cnt" => $result->num_rows() ,  "data" => $result->result_array());
        echo json_encode($data);

    }

    //진료 시스템
    function care_system(){

        $this->load->view('guide/care_system');
    }


    function map(){
        $this->load->view('guide/map');
    }

    function print_map(){
        $this->yield    = FALSE;
        $this->load->view('guide/print_map');
    }
}