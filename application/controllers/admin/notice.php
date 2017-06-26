<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Notice extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_notice');

        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('size') : 20;
        $this->data['start_date']       = $this->input->get_post('start_date');
        $this->data['end_date']         = $this->input->get_post('end_date');
        $this->data['is_exps']          = $this->input->get_post('is_exps')? $this->input->get_post('is_exps') : "";
        $this->data['search_field']     = $this->input->get_post('search_field');
        $this->data['search_string']    = $this->input->get_post('search_string');
        $this->data['base_url']         = current_url() ."?is_exps=" . $this->data['is_exps'] . "&search_field=" . $this->data['search_field'] . "&search_string=" . $this->data['search_string'] . "&start_date=" . $this->data['start_date'] . "&end_date=" . $this->data['end_date'] . "&size=" . $this->data['size'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

        //$this->output->enable_profiler(TRUE);
    }

    public function index(){

        $this->data["tot_row"]          = $this->m_notice->selectNoticeCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_notice->selectNotice();
        $this->load->view('admin/notice/index',$this->data);
    }

    public function regist(){

        $NI_SEQ                            = $this->input->get_post('NI_SEQ');

        $result                            = $this->m_notice->selectNoticeOne($NI_SEQ);

        $this->data['NI_SEQ']               = '';
        $this->data['NI_TTL']               = '';
        $this->data['NI_VOD_MP4']           = '';
        $this->data['NI_CONT']              = '';
        $this->data['NI_EXPS_YN']           = 'N';

        if(count($result) > 0){
            $this->data['NI_SEQ']           = $result->NI_SEQ;
            $this->data['NI_TTL']           = $result->NI_TTL;
            $this->data['NI_VOD_MP4']       = $result->NI_VOD_MP4;
            $this->data['NI_CONT']          = $result->NI_CONT;
            $this->data['NI_EXPS_YN']       = $result->NI_EXPS_YN;

        }

        $this->load->view('admin/notice/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                        = FALSE;

        $NI_SEQ                             = $this->input->post('NI_SEQ');
        $NI_TTL                             = $this->input->post('NI_TTL');
        $NI_VOD_MP4                         = $this->input->post('NI_VOD_MP4');
        $NI_CONT                            = $this->input->post('NI_CONT');
        $NI_EXPS_YN                         = $this->input->post('NI_EXPS_YN');

        $data                               = array("NI_TTL"=>$NI_TTL, "NI_VOD_MP4"=>$NI_VOD_MP4, "NI_CONT"=>$NI_CONT, "NI_EXPS_YN"=>$NI_EXPS_YN);

        if($NI_SEQ == ""){
            $data['NI_RGST_YMDT']           = date('Y-m-d H:i:s');
            $this->result                   = $this->m_notice->insertProcess($data);
        }else{
            $this->result                   = $this->m_notice->updateProcess($data, $NI_SEQ);
        }
        
        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                        = FALSE;

        $NI_SEQ                             = $this->input->post('NI_SEQ');

        if($NI_SEQ != ""){
            $result                         = $this->m_notice->deleteProcess($NI_SEQ);

            echo $result;
        }
    }
}