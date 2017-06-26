<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-05-11
 * Time: 오후 7:24
 */

class Voice extends CI_Controller{
    function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }


        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        $this->load->model("admin/m_voice");
        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('size') : 20;
        $this->data['start_date']       = $this->input->get_post('start_date');
        $this->data['end_date']         = $this->input->get_post('end_date');
        $this->data['is_answer']        = $this->input->get_post('is_answer')? $this->input->get_post('is_answer') : "";
        $this->data['search_field']     = $this->input->get_post('search_field');
        $this->data['search_string']    = $this->input->get_post('search_string');
        $this->data['base_url']         = current_url() ."?is_answer=" . $this->data['is_answer'] . "&search_string=" . $this->data['search_string'] . "&start_date=" . $this->data['start_date'] . "&end_date=" . $this->data['end_date'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

        //$this->output->enable_profiler(true);
    }

    public function index(){
        $this->data["tot_row"]          = $this->m_voice->selectVoiceCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_voice->selectVoice();
        $this->load->view('admin/voice/index',$this->data);
    }

    public function regist(){
        $IDX                            = $this->input->get_post("IDX");

        $result                         = $this->m_voice->selectVoiceOne($IDX);


        if(count($result) > 0){
            $this->data['result']       = $result;

            $this->data['ans_choices']  = $this->m_voice->selectAnsChoice();

            $this->load->view('admin/voice/regist',$this->data);
        }
    }

    public function registProcess(){
        $this->yield                    = FALSE;

        $IDX                            = $this->input->post("IDX");
        $ANS_CHOICE                     = $this->input->post("ANS_CHOICE");
        $ANS_CONT                       = $this->input->post("ANS_CONT");
        $ANS_YN                         = $this->input->post("ANS_YN");
        $data                           = array("ANS_CHOICE"=>$ANS_CHOICE, "ANS_CONT"=>$ANS_CONT);

        if($ANS_YN == "N"){
            $data['ANS_YN']		        = 'Y';
            $data["ANS_DATE"]           = date('Y-m-d H:i:s');
        }

        $result                         = $this->m_voice->updateProcess($data, $IDX);

        echo $result;
    }

    public function answer(){
        $this->yield        = FALSE;
        $seq                = $this->input->post("seq");

        $result             = $this->m_voice->selectAnswer($seq);

        echo $result->CONT;
    }

    public function deleteProcess(){
        $this->yield        = FALSE;
        $IDX                = $this->input->post("IDX");

        if($IDX != ""){
            $result         = $this->m_voice->deleteProcess($IDX);

            echo $result;
        }
    }




}
