<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Tmmnt_slide extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_tmmnt_slide');

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

        $this->data["tot_row"]                  = $this->m_tmmnt_slide->selectTreatmentSlideCount();
        $this->data['cur_num']                  = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']                   = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]                   = $this->m_tmmnt_slide->selectTreatmentSlide();
        $this->load->view('admin/tmmnt_slide/index',$this->data);
    }

    public function regist(){

        $TI_SEQ                                 = $this->input->get_post('TI_SEQ');

        $result                                 = $this->m_tmmnt_slide->selectTreatmentSlideOne($TI_SEQ);

        $this->data['cnr_type']                 = $this->m_tmmnt_slide->selectCategory("BAAB");

        $this->data['TI_SEQ']                   = '';
        $this->data['TI_TTL']                   = '';
        $this->data['TI_ITV']                   = '';
        $this->data['TI_NM']                    = '';
        $this->data['TI_AGE']                   = '';
        $this->data['TI_LINK']                  = '';
        $this->data['TI_CNR_TP']                = '';
        $this->data['TI_IMG']                   = '';
        $this->data['TI_EXPS_YN']               = 'N';
        $this->data['TI_SORT']                  = '';

        if(count($result) > 0){


            $this->data['TI_SEQ']               = $result->TI_SEQ;
            $this->data['TI_TTL']               = $result->TI_TTL;
            $this->data['TI_ITV']               = $result->TI_ITV;
            $this->data['TI_NM']                = $result->TI_NM;
            $this->data['TI_AGE']               = $result->TI_AGE;
            $this->data['TI_LINK']              = $result->TI_LINK;
            $this->data['TI_CNR_TP']            = $result->TI_CNR_TP;
            $this->data['TI_IMG']               = $result->TI_IMG;
            $this->data['TI_EXPS_YN']           = $result->TI_EXPS_YN;
            $this->data['TI_SORT']              = $result->TI_SORT;

        }

        $this->load->view('admin/tmmnt_slide/regist', $this->data);

    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $TI_SEQ                                 = $this->input->post('TI_SEQ');
        $TI_TTL                                 = $this->input->post('TI_TTL');
        $TI_ITV                                 = $this->input->post('TI_ITV');
        $TI_NM                                  = $this->input->post('TI_NM');
        $TI_AGE                                 = $this->input->post('TI_AGE');
        $TI_LINK                                = $this->input->post('TI_LINK');
        $TI_CNR_TP                              = $this->input->post('TI_CNR_TP');
        $TI_IMG                                 = $this->input->post('TI_IMG');
        $TI_EXPS_YN                             = $this->input->post('TI_EXPS_YN');
        $TI_SORT                                = $this->input->post('TI_SORT');

        $data                                   = array("TI_TTL"=>$TI_TTL, "TI_ITV"=>$TI_ITV, "TI_NM"=>$TI_NM, "TI_AGE"=>$TI_AGE, "TI_LINK"=>$TI_LINK, "TI_CNR_TP"=>$TI_CNR_TP, "TI_IMG"=>$TI_IMG, "TI_EXPS_YN"=>$TI_EXPS_YN, "TI_SORT"=>$TI_SORT);

        if($TI_SEQ == ""){
//            $data['TI_SORT']                    = $this->m_tmmnt_slide->selectHighSort()->high+1;
            $data['TI_RGST_YMDT']               = date('Y-m-d H:i:s');
            $this->result                       = $this->m_tmmnt_slide->insertProcess($data);
        }else{
            $this->result                       = $this->m_tmmnt_slide->updateProcess($data, $TI_SEQ);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $TI_SEQ                                 = $this->input->post('TI_SEQ');

        if($TI_SEQ != ""){
            $result                             = $this->m_tmmnt_slide->deleteProcess($TI_SEQ);

            echo $result;
        }
    }

    public function sort(){

        $this->data["result"]                   = $this->m_tmmnt_slide->selectTreatmentSlideAll();
        $this->data['etc_type']                 = $this->m_tmmnt_slide->selectEtcCategory("FA");

        $this->load->view('admin/tmmnt_slide/sort', $this->data);
    }

    public function sortUpdateProcess(){
        $this->yield                            = FALSE;
        $length                                 = $this->input->post('length');

        for($i = 0; $i < $length; $i++){
            $TI_SEQ                             = $this->input->post('sort_'.$i);
            $this->result                       = $this->m_tmmnt_slide->updateSort($i+1, $TI_SEQ);

            if($this->result == FALSE){
                break;
            }
        }

        echo $this->result;
    }
}