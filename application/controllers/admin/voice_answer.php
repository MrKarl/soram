<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-05-11
 * Time: 오후 6:10
 */

class Voice_answer extends CI_Controller{
    function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }

        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        $this->load->model("admin/m_voice_answer");
        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('size') : 20;
        $this->data['start_date']       = $this->input->get_post('start_date');
        $this->data['end_date']         = $this->input->get_post('end_date');
        $this->data['is_rank']          = $this->input->get_post('is_rank')? $this->input->get_post('is_rank') : "";
        $this->data['search_field']     = $this->input->get_post('search_field');
        $this->data['search_string']    = $this->input->get_post('search_string');
        $this->data['base_url']         = current_url() . "&is_rank=" . $this->data['is_rank'] . "&search_string=" . $this->data['search_string'] . "&start_date=" . $this->data['start_date'] . "&end_date=" . $this->data['end_date'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

        //$this->output->enable_profiler(true);
    }

    public function index(){
        $this->data["tot_row"]          = $this->m_voice_answer->selectVoiceAnswerCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_voice_answer->selectVoiceAnswer();

        $this->load->view('admin/voice_answer/index',$this->data);
    }

    public function regist(){
        $SEQ                            = $this->input->get_post("SEQ");

        $result                         = $this->m_voice_answer->selectVoiceAnswerOne($SEQ);

        $this->data['SEQ']           = '';
        $this->data['SORD']          = '';
        $this->data['TTL']           = '';
        $this->data['CONT']          = '';

        if(count($result) > 0){
            $this->data['SEQ']           = $result->SEQ;
            $this->data['SORD']          = $result->SORD;
            $this->data['TTL']           = $result->TTL;
            $this->data['CONT']          = $result->CONT;
        }

        $this->load->view('admin/voice_answer/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                    = FALSE;
        $SEQ                         = $this->input->post("SEQ");
        $SORD                        = $this->input->post("SORD");
        $TTL                         = $this->input->post("TTL");
        $CONT                        = $this->input->post("CONT");

        $data                           = array("SORD"=>$SORD, "TTL"=>$TTL, "CONT"=>$CONT);

        if($SEQ == ""){
            $data['RGST_YMDT']       = date('Y-m-d H:i:s');
            $this->result               = $this->m_voice_answer->insertProcess($data);
        }else{
            $this->result               = $this->m_voice_answer->updateProcess($data, $SEQ);
        }

        echo $this->result;

    }

    public function deleteProcess(){
        $this->yield                    = FALSE;
        $SEQ                         = $this->input->post("SEQ");

        if($SEQ != ""){
            $this->result               = $this->m_voice_answer->deleteProcess($SEQ);

            echo $this->result;
        }

    }
}