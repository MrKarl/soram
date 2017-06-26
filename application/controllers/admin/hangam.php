<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Hangam extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_hangam');

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

        $this->data["tot_row"]          = $this->m_hangam->selectHangamCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_hangam->selectHangam();
        $this->load->view('admin/hangam/index',$this->data);
    }

    public function regist(){

        $BC_SEQ                             = $this->input->get_post('BC_SEQ');

        $result                             = $this->m_hangam->selectHangamOne($BC_SEQ);

        $this->data['BC_SEQ']               = '';
        $this->data['BC_TTL']               = '';
        $this->data['BC_VOD_MP4']           = '';
        $this->data['BC_MAIN_IMG']          = '';
        $this->data['BC_CONT']              = '';
        $this->data['BC_RPRT_YMD']          = '';
        $this->data['BC_EXPS_YN']           = 'N';
        $this->data['BC_TYPE1_YN']          = 'N';
        $this->data['BC_TYPE2_YN']          = 'N';

        if(count($result) > 0){
            $this->data['BC_SEQ']           = $result->BC_SEQ;
            $this->data['BC_TTL']           = $result->BC_TTL;
            $this->data['BC_VOD_MP4']       = $result->BC_VOD_MP4;
            $this->data['BC_MAIN_IMG']      = $result->BC_MAIN_IMG;
            $this->data['BC_CONT']          = $result->BC_CONT;
            $this->data['BC_RPRT_YMD']      = $result->BC_RPRT_YMD;
            $this->data['BC_EXPS_YN']       = $result->BC_EXPS_YN;
            $this->data['BC_TYPE1_YN']      = $result->BC_TYPE1_YN;
            $this->data['BC_TYPE2_YN']      = $result->BC_TYPE2_YN;
        }

        $this->load->view('admin/hangam/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                        = FALSE;

        $BC_SEQ                             = $this->input->post('BC_SEQ');
        $BC_TTL                             = $this->input->post('BC_TTL');
        $BC_VOD_MP4                         = $this->input->post('BC_VOD_MP4');
        $BC_MAIN_IMG                        = $this->input->post('BC_MAIN_IMG');
        $BC_CONT                            = $this->input->post('BC_CONT');
        $BC_RPRT_YMD                        = $this->input->post('BC_RPRT_YMD');
        $BC_EXPS_YN                         = $this->input->post('BC_EXPS_YN');
        $BC_TYPE1_YN                        = $this->input->post('BC_TYPE1_YN');
        $BC_TYPE2_YN                        = $this->input->post('BC_TYPE2_YN');
        
        $data                               = array("BC_TTL"=>$BC_TTL, "BC_VOD_MP4"=>$BC_VOD_MP4, "BC_MAIN_IMG"=>$BC_MAIN_IMG, "BC_CONT"=>$BC_CONT, "BC_EXPS_YN"=>$BC_EXPS_YN, "BC_RPRT_YMD"=>$BC_RPRT_YMD, "BC_TYPE1_YN"=>$BC_TYPE1_YN, "BC_TYPE2_YN"=>$BC_TYPE2_YN);

        if($BC_SEQ == ""){
            $data['BC_RGST_YMDT']           = date('Y-m-d H:i:s');
            $this->result                   = $this->m_hangam->insertProcess($data);
        }else{
            $this->result                   = $this->m_hangam->updateProcess($data, $BC_SEQ);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                        = FALSE;

        $BC_SEQ                             = $this->input->post('BC_SEQ');

        if($BC_SEQ != ""){
            $result                         = $this->m_hangam->deleteProcess($BC_SEQ);

            echo $result;
        }
    }
}