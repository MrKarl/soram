<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-05-11
 * Time: 오후 6:10
 */

class Adm_answer extends CI_Controller{
    function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }

        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        $this->load->model("admin/m_adm_answer");
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
        $this->data["tot_row"]          = $this->m_adm_answer->selectAdmAnswerCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_adm_answer->selectAdmAnswer();

        $this->load->view('admin/adm_answer/index',$this->data);
    }

    public function regist(){
        $CA_SEQ                         = $this->input->get_post("CA_SEQ");

        $result                         = $this->m_adm_answer->selectAdmAnswerOne($CA_SEQ);

        $this->data['CA_SEQ']           = '';
        $this->data['CA_SORD']          = '';
        $this->data['CA_TTL']           = '';
        $this->data['CA_CONT']          = '';

        if(count($result) > 0){
            $this->data['CA_SEQ']           = $result->CA_SEQ;
            $this->data['CA_SORD']          = $result->CA_SORD;
            $this->data['CA_TTL']           = $result->CA_TTL;
            $this->data['CA_CONT']          = $result->CA_CONT;
        }

        $this->load->view('admin/adm_answer/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                    = FALSE;
        $CA_SEQ                         = $this->input->post("CA_SEQ");
        $CA_SORD                        = $this->input->post("CA_SORD");
        $CA_TTL                         = $this->input->post("CA_TTL");
        $CA_CONT                        = $this->input->post("CA_CONT");

        $data                           = array("CA_SORD"=>$CA_SORD, "CA_TTL"=>$CA_TTL, "CA_CONT"=>$CA_CONT);

        if($CA_SEQ == ""){
            $data['CA_RGST_YMDT']       = date('Y-m-d H:i:s');
            $this->result               = $this->m_adm_answer->insertProcess($data);
        }else{
            $this->result               = $this->m_adm_answer->updateProcess($data, $CA_SEQ);
        }

        echo $this->result;

    }

    public function deleteProcess(){
        $this->yield                    = FALSE;
        $CA_SEQ                         = $this->input->post("CA_SEQ");

        if($CA_SEQ != ""){
            $this->result               = $this->m_adm_answer->deleteProcess($CA_SEQ);

            echo $this->result;
        }

    }
}