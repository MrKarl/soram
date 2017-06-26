<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-05-11
 * Time: 오후 2:52
 */

class Engqna extends CI_Controller{
    function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }

        //$this->output->enable_profiler(true);
        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        $this->load->model("admin/m_engqna");
        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('size') : 20;
        $this->data['start_date']       = $this->input->get_post('start_date');
        $this->data['end_date']         = $this->input->get_post('end_date');
        $this->data['is_answer']        = $this->input->get_post('is_answer');
        $this->data['search_field']     = $this->input->get_post('search_field');
        $this->data['search_string']    = $this->input->get_post('search_string');
        $this->data['base_url']         = current_url() ."?search_string=" . $this->data['search_string'] . "&start_date=" . $this->data['start_date'] . "&end_date=" . $this->data['end_date'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

    }

    public function index(){
        $this->data["tot_row"]          = $this->m_engqna->selectEngQnaCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_engqna->selectEngQna();
        $this->load->view('admin/engqna/index',$this->data);
    }

    public function regist(){
        $idx                            = $this->input->get_post("idx");

        $result                         = $this->m_engqna->selectEngQnaOne($idx);



        if(count($result) > 0){
            $this->data['result']       = $result;

            $this->data['teams']        = $this->m_engqna->selectTeam();

            $this->load->view('admin/engqna/regist',$this->data);
        }
    }

    public function registProcess(){
        $this->yield                    = FALSE;

        $idx                            = $this->input->post("idx");
        $answer_team_idx                = $this->input->post("answer_team_idx");
        $content                        = $this->input->post("content");
        $answer_yn                      = $this->input->post("answer_yn");
        $data                           = array("answer_team_idx"=>$answer_team_idx, "content"=>$content);

        if($answer_yn == "N"){
            $data["answer_date"]        = date('Y-m-d H:i:s');
        }

        $result                         = $this->m_engqna->updateProcess($data, $idx);

        echo $result;
    }

    public function deleteProcess(){
        $this->yield                    = FALSE;

        $idx                            = $this->input->post("idx");

        if($idx != ""){
            $data                       = array("del_flag"=>"Y");
            $result                     = $this->m_engqna->updateProcess($data, $idx);

            echo $result;
        }
    }
}