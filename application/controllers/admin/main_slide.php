<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Main_slide extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_main_slide');

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

        $this->data["tot_row"]                  = $this->m_main_slide->selectMainSlideCount();
        $this->data['cur_num']                  = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']                   = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]                   = $this->m_main_slide->selectMainSlide();
        $this->load->view('admin/main_slide/index',$this->data);
    }

    public function regist(){

        $MI_SEQ                                 = $this->input->get_post('MI_SEQ');

        $result                                 = $this->m_main_slide->selectMainSlideOne($MI_SEQ);

        $this->data['cnr_type']                 = $this->m_main_slide->selectCategory("BAAB");

        $this->data['MI_SEQ']                   = '';
        $this->data['MI_TTL']                   = '';
        $this->data['MI_TTLS']                   = '';
        $this->data['MI_SUB_TTL']               = '';
        $this->data['MI_NML']                   = '';
        $this->data['MI_ITV']                   = '';
        $this->data['MI_CNR_TP']                = '';
        $this->data['MI_NM']                    = '';
        $this->data['MI_LINK']                  = '';
        $this->data['MI_IMG']                   = '';
        $this->data['MI_EXPS_YN']               = 'N';
        $this->data['MI_SORT']                  = '';

        if(count($result) > 0){


            $this->data['MI_SEQ']               = $result->MI_SEQ;
            $this->data['MI_TTL']               = $result->MI_TTL;
            $this->data['MI_TTLS']               = $result->MI_TTLS;
            $this->data['MI_SUB_TTL']           = $result->MI_SUB_TTL;
            $this->data['MI_NML']               = $result->MI_NML;
            $this->data['MI_ITV']               = $result->MI_ITV;
            $this->data['MI_CNR_TP']            = $result->MI_CNR_TP;
            $this->data['MI_NM']                = $result->MI_NM;
            $this->data['MI_LINK']              = $result->MI_LINK;
            $this->data['MI_IMG']               = $result->MI_IMG;
            $this->data['MI_EXPS_YN']           = $result->MI_EXPS_YN;
            $this->data['MI_SORT']              = $result->MI_SORT;

        }

        $this->load->view('admin/main_slide/regist', $this->data);

    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $MI_SEQ                                 = $this->input->post('MI_SEQ');
        $MI_TTL                                 = $this->input->post('MI_TTL');
        $MI_TTLS                                = $this->input->post('MI_TTLS');
        $MI_SUB_TTL                             = $this->input->post('MI_SUB_TTL');
        $MI_NML                                 = $this->input->post('MI_NML');
        $MI_ITV                                 = $this->input->post('MI_ITV');
        $MI_CNR_TP                              = $this->input->post('MI_CNR_TP');
        $MI_NM                                  = $this->input->post('MI_NM');
        $MI_LINK                                = $this->input->post('MI_LINK');
        $MI_IMG                                 = $this->input->post('MI_IMG');
        $MI_EXPS_YN                             = $this->input->post('MI_EXPS_YN');
        $MI_SORT                                = $this->input->post('MI_SORT');

        $data                                   = array("MI_TTL"=>$MI_TTL, "MI_TTLS"=>$MI_TTLS, "MI_SUB_TTL"=>$MI_SUB_TTL, "MI_NML"=>$MI_NML, "MI_ITV"=>$MI_ITV,  "MI_CNR_TP"=>$MI_CNR_TP, "MI_NM"=>$MI_NM, "MI_LINK"=>$MI_LINK, "MI_IMG"=>$MI_IMG, "MI_EXPS_YN"=>$MI_EXPS_YN, "MI_SORT"=>$MI_SORT);

        if($MI_SEQ == ""){
//            $data['MI_SORT']                    = $this->m_main_slide->selectHighSort()->high+1;
            $data['MI_RGST_YMDT']               = date('Y-m-d H:i:s');
            $this->result                       = $this->m_main_slide->insertProcess($data);
        }else{
            $this->result                       = $this->m_main_slide->updateProcess($data, $MI_SEQ);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $MI_SEQ                                 = $this->input->post('MI_SEQ');

        if($MI_SEQ != ""){
            $result                             = $this->m_main_slide->deleteProcess($MI_SEQ);

            echo $result;
        }
    }

    public function sort(){

        $this->data["result"]                   = $this->m_main_slide->selectMainSlideAll();
        $this->data['etc_type']                 = $this->m_main_slide->selectEtcCategory("FA");

        $this->load->view('admin/main_slide/sort', $this->data);
    }

    public function sortUpdateProcess(){
        $this->yield                            = FALSE;
        $length                                 = $this->input->post('length');

        for($i = 0; $i < $length; $i++){
            $MI_SEQ                             = $this->input->post('sort_'.$i);
            $this->result                       = $this->m_main_slide->updateSort($i+1, $MI_SEQ);

            if($this->result == FALSE){
                break;
            }
        }

        echo $this->result;
    }
}