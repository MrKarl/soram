<?php
/**
 * Created by PhpStorm.
 * User: AdmiFAQstrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Soramfaq extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_faq');

        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('size') : 20;
        $this->data['start_date']       = $this->input->get_post('start_date');
        $this->data['end_date']         = $this->input->get_post('end_date');
        $this->data['is_exps']          = $this->input->get_post('is_exps')? $this->input->get_post('is_exps') : "";
        $this->data['is_category']      = $this->input->get_post('is_category')? $this->input->get_post('is_category') : "";
        $this->data['search_field']     = $this->input->get_post('search_field');
        $this->data['search_string']    = $this->input->get_post('search_string');
        $this->data['base_url']         = current_url() ."?is_exps=" . $this->data['is_exps'] . "&is_category=" . $this->data['is_category'] . "&search_field=" . $this->data['search_field'] . "&search_string=" . $this->data['search_string'] . "&start_date=" . $this->data['start_date'] . "&end_date=" . $this->data['end_date'] . "&size=" . $this->data['size'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

        //$this->output->enable_profiler(TRUE);
    }

    public function index(){

        $this->data["tot_row"]          = $this->m_faq->selectFaqCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_faq->selectFaq();
        $this->data['categorys']        = $this->m_faq->selectCategory("BAAA");
        $this->load->view('admin/faq/index',$this->data);
    }

    public function regist(){

        $FAQ_SEQ                            = $this->input->get_post('FAQ_SEQ');

        $result                             = $this->m_faq->selectFaqOne($FAQ_SEQ);

        $this->data['FAQ_SEQ']              = '';
        $this->data['FAQ_TP']               = '';
        $this->data['FAQ_TTL']              = '';
        $this->data['FAQ_CONT']             = '';
        $this->data['FAQ_EXPS_YN']          = 'N';

        $this->data['categorys']            = $this->m_faq->selectCategory("BAAA");

        if(count($result) > 0){
            $this->data['FAQ_SEQ']          = $result->FAQ_SEQ;
            $this->data['FAQ_TP']           = $result->FAQ_TP;
            $this->data['FAQ_TTL']          = $result->FAQ_TTL;
            $this->data['FAQ_CONT']         = $result->FAQ_CONT;
            $this->data['FAQ_EXPS_YN']      = $result->FAQ_EXPS_YN;

        }

        $this->load->view('admin/faq/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                        = FALSE;

        $FAQ_SEQ                            = $this->input->post('FAQ_SEQ');
        $FAQ_TP                             = $this->input->post('FAQ_TP');
        $FAQ_TTL                            = $this->input->post('FAQ_TTL');
        $FAQ_CONT                           = $this->input->post('FAQ_CONT');
        $FAQ_EXPS_YN                        = $this->input->post('FAQ_EXPS_YN');

        $data                               = array("FAQ_TP"=>$FAQ_TP, "FAQ_TTL"=>$FAQ_TTL, "FAQ_CONT"=>$FAQ_CONT, "FAQ_EXPS_YN"=>$FAQ_EXPS_YN);

        if($FAQ_SEQ == ""){
            $data['FAQ_RGST_YMDT']          = date('Y-m-d H:i:s');
            $this->result                   = $this->m_faq->insertProcess($data);
        }else{
            $this->result                   = $this->m_faq->updateProcess($data, $FAQ_SEQ);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                        = FALSE;

        $FAQ_SEQ                            = $this->input->post('FAQ_SEQ');

        if($FAQ_SEQ != ""){
            $result                         = $this->m_faq->deleteProcess($FAQ_SEQ);

            echo $result;
        }
    }
}