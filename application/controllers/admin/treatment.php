<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Treatment extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_treatment');

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

        $this->data["tot_row"]          = $this->m_treatment->selectTreatmentCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_treatment->selectTreatment();
        $this->load->view('admin/treatment/index',$this->data);
    }

    public function regist(){

        $TT_SEQ                                 = $this->input->get_post('TT_SEQ');

        $result                                 = $this->m_treatment->selectTreatmentOne($TT_SEQ);

        $this->data['cnr_type']                 = $this->m_treatment->selectCategory('BAAB');

        $this->data['TT_SEQ']                   = '';       //idx
        $this->data['TT_TTL']                   = '';       //제목
        $this->data['TT_SUBTTL']                = '';       //부제목
        $this->data['TT_CNR_TP']                = '';       //암구분
        $this->data['TT_NM']                    = '';       //환자성명
        $this->data['TT_GENDER']                = '';       //환자성별
        $this->data['TT_AGE']                   = '';       //환자나이
        $this->data['TT_TRTMT_PRD']             = '';       //치료기간
        $this->data['TT_THMB_IMG']              = '';       //썸네일
        $this->data['TT_STL_IMG']               = '';       //영상 이미지
        $this->data['TT_SUB_IMG']               = '';       //영상 없을시 대체 이미지
        $this->data['TT_CT_IMG']                = '';       //CT 사진
        $this->data['TT_VOD_MP4']               = '';       //CT 사진
        $this->data['TT_BEFORE']                = '';       //치료전
        $this->data['TT_AFTER']                 = '';       //치료후
        $this->data['TT_MAIN_EXPS_YN']          = 'N';      //메인 노출여부
        $this->data['TT_EXPS_YN']               = 'N';      //노출여부
        $this->data['TT_RGST_YMDT']             = '';       //등록일자


        if(count($result) > 0) {

            $this->data['TT_SEQ']               = $result->TT_SEQ;
            $this->data['TT_TTL']               = $result->TT_TTL;
            $this->data['TT_SUBTTL']            = $result->TT_SUBTTL;
            $this->data['TT_CNR_TP']            = $result->TT_CNR_TP;
            $this->data['TT_NM']                = $result->TT_NM;
            $this->data['TT_GENDER']            = $result->TT_GENDER;
            $this->data['TT_AGE']               = $result->TT_AGE;
            $this->data['TT_TRTMT_PRD']         = $result->TT_TRTMT_PRD;
            $this->data['TT_THMB_IMG']          = $result->TT_THMB_IMG;
            $this->data['TT_STL_IMG']           = $result->TT_STL_IMG;
            $this->data['TT_SUB_IMG']           = $result->TT_SUB_IMG;
            $this->data['TT_CT_IMG']            = $result->TT_CT_IMG;
            $this->data['TT_VOD_MP4']           = $result->TT_VOD_MP4;
            $this->data['TT_BEFORE']            = $result->TT_BEFORE;
            $this->data['TT_AFTER']             = $result->TT_AFTER;
            $this->data['TT_MAIN_EXPS_YN']      = $result->TT_MAIN_EXPS_YN;
            $this->data['TT_EXPS_YN']           = $result->TT_EXPS_YN;
            $this->data['TT_RGST_YMDT']         = $result->TT_RGST_YMDT;
        }

        $this->load->view('admin/treatment/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $TT_SEQ                                 = $this->input->post('TT_SEQ');
        $TT_TTL                                 = $this->input->post('TT_TTL');
        $TT_SUBTTL                              = $this->input->post('TT_SUBTTL');
        $TT_CNR_TP                              = $this->input->post('TT_CNR_TP');
        $TT_NM                                  = $this->input->post('TT_NM');
        $TT_GENDER                              = $this->input->post('TT_GENDER');
        $TT_AGE                                 = $this->input->post('TT_AGE');
        $TT_TRTMT_PRD                           = $this->input->post('TT_TRTMT_PRD');
        $TT_THMB_IMG                            = $this->input->post('TT_THMB_IMG');
        $TT_STL_IMG                             = $this->input->post('TT_STL_IMG');
        $TT_SUB_IMG                             = $this->input->post('TT_SUB_IMG');
        $TT_CT_IMG                              = $this->input->post('TT_CT_IMG');
        $TT_VOD_MP4                             = $this->input->post('TT_VOD_MP4');
        $TT_BEFORE                              = $this->input->post('TT_BEFORE');
        $TT_AFTER                               = $this->input->post('TT_AFTER');
        $TT_MAIN_EXPS_YN                        = $this->input->post('TT_MAIN_EXPS_YN');
        $TT_EXPS_YN                             = $this->input->post('TT_EXPS_YN');
        $TT_RGST_YMDT                           = $this->input->post('TT_RGST_YMDT');

        $data                                   = array("TT_TTL"=>$TT_TTL, "TT_SUBTTL"=>$TT_SUBTTL, "TT_CNR_TP"=>$TT_CNR_TP, "TT_NM"=>$TT_NM, "TT_GENDER"=>$TT_GENDER, 
                                                        "TT_AGE"=>$TT_AGE, "TT_TRTMT_PRD"=>$TT_TRTMT_PRD, "TT_THMB_IMG"=>$TT_THMB_IMG, "TT_STL_IMG"=>$TT_STL_IMG, "TT_SUB_IMG"=>$TT_SUB_IMG,
                                                        "TT_CT_IMG"=>$TT_CT_IMG, "TT_VOD_MP4"=>$TT_VOD_MP4, "TT_BEFORE"=>$TT_BEFORE, "TT_AFTER"=>$TT_AFTER,
                                                        "TT_MAIN_EXPS_YN"=>$TT_MAIN_EXPS_YN, "TT_EXPS_YN"=>$TT_EXPS_YN, "TT_RGST_YMDT"=>$TT_RGST_YMDT);
        
        if($TT_SEQ == ""){
            $data['TT_READ_CNT']                = 0;
//            $data['TT_RGST_YMDT']               = date('Y-m-d H:i:s');
            $this->result                       = $this->m_treatment->insertProcess($data);
        }else{
            $this->result                       = $this->m_treatment->updateProcess($data, $TT_SEQ);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

            $TT_SEQ                             = $this->input->post('TT_SEQ');

        if($TT_SEQ != ""){
            $result                             = $this->m_treatment->deleteProcess($TT_SEQ);

            echo $result;
        }
    }
}