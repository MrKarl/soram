<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class News2 extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_news2');

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

        $this->data["tot_row"]          = $this->m_news2->selectNews2Count();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_news2->selectNews2();
        $this->load->view('admin/news2/index',$this->data);
    }

    public function regist(){

        $RT_SEQ                             = $this->input->get_post('RT_SEQ');

        $result                             = $this->m_news2->selectNews2One($RT_SEQ);

        $this->data['RT_SEQ']               = '';
        $this->data['RT_TTL']               = '';
        $this->data['RT_URL']               = '';
        $this->data['RT_CONT']              = '';
        $this->data['RT_EXPS_YN']           = 'N';
        $this->data['RT_RPRT_YMD']          = '';

        if(count($result) > 0){
            $this->data['RT_SEQ']           = $result->RT_SEQ;
            $this->data['RT_TTL']           = $result->RT_TTL;
            $this->data['RT_URL']           = $result->RT_URL;
            $this->data['RT_CONT']          = $result->RT_CONT;
            $this->data['RT_EXPS_YN']       = $result->RT_EXPS_YN;
            $this->data['RT_RPRT_YMD']      = $result->RT_RPRT_YMD;
        }

        $this->load->view('admin/news2/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                        = FALSE;

        $RT_SEQ                             = $this->input->post('RT_SEQ');
        $RT_TTL                             = $this->input->post('RT_TTL');
        $RT_CONT                            = $this->input->post('RT_CONT');
        $RT_URL                             = $this->input->post('RT_URL');
        $RT_EXPS_YN                         = $this->input->post('RT_EXPS_YN');
        $RT_RPRT_YMD                        = $this->input->post('RT_RPRT_YMD');

        $data                               = array("RT_TTL"=>$RT_TTL, "RT_CONT"=>$RT_CONT, "RT_EXPS_YN"=>$RT_EXPS_YN, "RT_RPRT_YMD"=>$RT_RPRT_YMD, "RT_URL"=>$RT_URL);

        if($RT_SEQ == ""){
            $data['RT_RGST_YMDT']           = date('Y-m-d H:i:s');
            $this->result                   = $this->m_news2->insertProcess($data);
        }else{
            $this->result                   = $this->m_news2->updateProcess($data, $RT_SEQ);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                        = FALSE;

        $RT_SEQ                             = $this->input->post('RT_SEQ');

        if($RT_SEQ != ""){
            $result                         = $this->m_news2->deleteProcess($RT_SEQ);

            echo $result;
        }
    }
}