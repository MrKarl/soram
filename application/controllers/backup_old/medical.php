<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-13
 * Time: 오후 2:27
 */

class Medical extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('m_medical');

        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('page') : 10;
        $this->data['search_string']    = trim($this->input->get_post('search_string'));
        $this->data['search_field']     = trim($this->input->get_post('search_field'));


        $this->data['base_url']         = current_url(). "?search_string=" . $this->data['search_string'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;
        //$this->output->enable_profiler(TRUE);

    }

    function representative(){

        $this->data['books1']           = $this->m_medical->selectBook("3");
        $this->data['letters1']         = $this->m_medical->selectLetter("3");
        $this->data['books2']           = $this->m_medical->selectBook("2");
        $this->data['letters2']         = $this->m_medical->selectLetter("2");
        $this->data['videos2']          = $this->m_medical->selectVideo("2");

        $this->load->view('medical/representative', $this->data);
    }

    //전담 의료진
    function dedicated(){
        $this->data['type']             = $this->input->get_post('type')? $this->input->get_post('type') : "FAAA";
        $this->data['seq']              = $this->input->get_post('seq')? $this->input->get_post('seq') : "";

        $this->data["first_row"]        = $this->m_medical->selectDedicatedOne($this->data['seq']);
        $this->data["result"]           = $this->m_medical->selectDedicated();



        $this->load->view('medical/dedicated',$this->data);
    }

    //전담 의료진
    function dedicated_test(){
        $this->data['type']             = $this->input->get_post('type')? $this->input->get_post('type') : "FAAA";
        $this->data['seq']              = $this->input->get_post('seq')? $this->input->get_post('seq') : "";

        $this->data["first_row"]        = $this->m_medical->selectDedicatedOne($this->data['seq']);
        $this->data["result"]           = $this->m_medical->selectDedicated();

        $this->load->view('medical/dedicated_test',$this->data);
    }

    //시설안내
    function facility(){

        $this->data['type']             = $this->input->get_post('type')? $this->input->get_post('type') : 1;
        $this->data['media_result']     = $this->common->selectMedia('medical_facility_'.$this->data['type']);
        if ($this->data['type'] == "1"){
            $this->load->view('medical/facility1', $this->data);
        }elseif($this->data['type'] == "2"){
            $this->load->view('medical/facility2', $this->data);
        }elseif($this->data['type'] == "3"){
            $this->load->view('medical/facility3', $this->data);
        }elseif($this->data['type'] == "4"){
            $this->load->view('medical/facility4', $this->data);
        }

    }



    //간호사
    function nurse(){


        $this->data['type']             = $this->input->get_post('type')? $this->input->get_post('type') : 'FAAC';
        $this->data["result"]           = $this->m_medical->selectNurse();

        $this->load->view('medical/nurse' ,  $this->data);
    }

    //의료 지원팀
    function support(){

        $this->data['type']             = $this->input->get_post('type')? $this->input->get_post('type') : 'FAAD';
        $this->data["result"]           = $this->m_medical->selectSupport();

        if ($this->data["type"] == "FAAE"){

            //고객지원팀 두개 가져오기 위해서 임시로 코드 변경
            $this->data["type"] = "FAAF";
            $this->data["result2"]           = $this->m_medical->selectSupport2();
            $this->data["type"] = "FAAE";
        }
        $this->load->view('medical/support' ,  $this->data);
    }


    function advice(){
        $this->data['media_result']     = $this->common->selectMedia('medical_advice');
        $this->load->view('medical/advice', $this->data);
    }

    function hi(){
        $this->load->view('medical/hi');
    }


    //언론보도
    function media() {
        $this->data['tot_row']          = $this->m_medical->selectMediaCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_medical->selectMedia();

        $this->load->view('medical/media', $this->data);
    }

    //언론보도 view
    function media_view() {
        $seq                            = $this->input->get_post('seq');
        $this->data['result']           = $this->m_medical->selectMediaView($seq);


        $preview                        = $this->m_medical->selectMediaChangePreview($seq);
        $next                           = $this->m_medical->selectMediaChangeNext($seq);
        if ($preview->num_rows() > 0){
            $row = $preview->row();
            $this->data["preview"] =  $row->preview;
        }

        if ($next->num_rows() > 0){
            $row = $next->row();
            $this->data["next"] =  $row->next;
        }

        $this->load->view('medical/media_view', $this->data);
    }

    function media_view_prev() {
        $seq                           = $this->input->get_post('seq');
        $seq_prev                      = $this->m_medical->selectMediaViewPrev($seq);
        $this->data['result']          = $this->m_medical->selectMediaView($seq_prev->RT_SEQ);

        $this->load->view('medical/media_view', $this->data);
    }

    function media_view_next() {
        $seq                            = $this->input->get_post('seq');
        $seq_next                       = $this->m_medical->selectMediaViewNext($seq);
        $this->data['result']           = $this->m_medical->selectMediaView($seq_next->RT_SEQ);

        $this->load->view('medical/media_view', $this->data);
    }


    function tv(){
        $this->data['tot_row']          = $this->m_medical->selectTvCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_medical->selectTv();

        $this->load->view('medical/tv' , $this->data);
    }

    function tv_view() {
        if ($this->session->userdata("MBR_ID") != "") {
            
            $seq = $this->input->get_post('seq');
            $this->data['result'] = $this->m_medical->selectTvOne($seq);

            $preview = $this->m_medical->selectChangePreview($seq);
            $next = $this->m_medical->selectChangeNext($seq);
            if ($preview->num_rows() > 0) {
                $row = $preview->row();
                $this->data["preview"] = $row->preview;
            }

            if ($next->num_rows() > 0) {
                $row = $next->row();
                $this->data["next"] = $row->next;
            }

            $this->load->view('medical/tv_view', $this->data);
        }

    }
    
    function upCnt(){
        $this->yield                    = FALSE;
        $seq                            = $this->input->post('seq');
        $this->result                   = $this->m_medical->updateCnt($seq);

        echo $this->result;
    }
    
    //병원소개
    function intro(){
        $this->data['media_result']     = $this->common->selectMedia('medical_intro');
        $this->load->view('medical/intro', $this->data);
    }

    //엄앵란
    function promotion(){

        $login_check = $this->session->userdata("MBR_ID");
        if($login_check == ""){
            redirect("/?login_pop=Y", "refresh");
        }

        $this->load->view('medical/promotion', $this->data);
    }

    function director(){

        $this->data['books']           = $this->m_medical->selectBook("1");
        $this->data['letters']         = $this->m_medical->selectLetter("1");
        $this->data['videos']          = $this->m_medical->selectVideo("1");

        $this->load->view('medical/director', $this->data);
    }



}