<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Staff extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_staff');

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

        $this->data["tot_row"]                  = $this->m_staff->selectStaffCount();
        $this->data['cur_num']                  = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']                   = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]                   = $this->m_staff->selectStaff();
        $this->load->view('admin/staff/index',$this->data);
    }

    public function regist(){

        $STF_SEQ                                = $this->input->get_post('STF_SEQ');

        $result                                 = $this->m_staff->selectStaffOne($STF_SEQ);

        $this->data['position']                 = $this->m_staff->selectCategory("GAAA");

        $this->data["teams"]                    = $this->m_staff->selectTeam();

        $this->data['stf_type']                 = $this->m_staff->selectCategory("FA");
        $this->data['etc_type']                 = $this->m_staff->selectEtcCategory("FA");

        $this->data['STF_SEQ']                  = '';
        $this->data['STF_TYPE']                 = '';
        $this->data['STF_JOB']                  = '';
        $this->data['STF_NM']                   = '';
        $this->data['STF_CENTER_IMG']           = '';
        $this->data['STF_STL_IMG']              = '';
        $this->data['STF_CAREER']               = '';
        $this->data['STF_THESIS']               = '';
        $this->data['STF_BC']                   = '';
        $this->data['STF_EXPS_YN']              = 'N';

        if(count($result) > 0){


            $this->data['STF_SEQ']              = $result->STF_SEQ;
            $this->data['STF_TYPE']             = $result->STF_TYPE;
            $this->data['STF_JOB']              = $result->STF_JOB;
            $this->data['STF_NM']               = $result->STF_NM;
            $this->data['STF_CENTER_IMG']       = $result->STF_CENTER_IMG;
            $this->data['STF_STL_IMG']          = $result->STF_STL_IMG;
            $this->data['STF_CAREER']           = $result->STF_CAREER;
            $this->data['STF_THESIS']           = $result->STF_THESIS;
            $this->data['STF_BC']               = $result->STF_BC;
            $this->data['STF_EXPS_YN']          = $result->STF_EXPS_YN;


        }

        $this->load->view('admin/staff/regist', $this->data);

    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $STF_SEQ                                = $this->input->post('STF_SEQ');
        $STF_TYPE                               = $this->input->post('STF_TYPE');
        $STF_JOB                                = $this->input->post('STF_JOB');
        $STF_NM                                 = $this->input->post('STF_NM');
        $STF_CENTER_IMG                         = $this->input->post('STF_CENTER_IMG');
        $STF_STL_IMG                            = $this->input->post('STF_STL_IMG');
        $STF_CAREER                             = $this->input->post('STF_CAREER');
        $STF_THESIS                             = $this->input->post('STF_THESIS');
        $STF_BC                                 = $this->input->post('STF_BC');
        $STF_EXPS_YN                            = $this->input->post('STF_EXPS_YN');

        $data                                   = array("STF_TYPE"=>$STF_TYPE, "STF_JOB"=>$STF_JOB, "STF_NM"=>$STF_NM, "STF_CENTER_IMG"=>$STF_CENTER_IMG, "STF_STL_IMG"=>$STF_STL_IMG, "STF_CAREER"=>$STF_CAREER, "STF_THESIS"=>$STF_THESIS, "STF_BC"=>$STF_BC, "STF_EXPS_YN"=>$STF_EXPS_YN);


        if($STF_SEQ == ""){
            $data['STF_SORT']                   = $this->m_staff->selectHighSort()->high+1;
            $data['STF_RGST_YMDT']              = date('Y-m-d H:i:s');
            $this->result                       = $this->m_staff->insertProcess($data);
        }else{
            $this->result                       = $this->m_staff->updateProcess($data, $STF_SEQ);
        }
        
        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $STF_SEQ                                = $this->input->post('STF_SEQ');

        if($STF_SEQ != ""){
            $result                             = $this->m_staff->deleteProcess($STF_SEQ);

            echo $result;
        }
    }

    public function sort(){
        
        $this->data["result"]                   = $this->m_staff->selectStaffAll();
        $this->data['etc_type']                 = $this->m_staff->selectEtcCategory("FA");
        
        $this->load->view('admin/staff/sort', $this->data);
    }
    
    public function sortUpdateProcess(){
        $this->yield                            = FALSE;
        $length                                 = $this->input->post('length');
        
        for($i = 0; $i < $length; $i++){
            $STF_SEQ                            = $this->input->post('sort_'.$i);
            $this->result                       = $this->m_staff->updateSort($i+1, $STF_SEQ);

            if($this->result == FALSE){
                break;
            }
        }
        
        echo $this->result;
    }

    public function director(){
        $this->data['books']                    = $this->m_staff->selectBook(1);
        $this->data['letters']                  = $this->m_staff->selectLetter(1);

        $this->load->view('admin/staff/director', $this->data);
    }

    public function representative(){
        
        $this->data['type']                     = $this->input->get_post('type');       //  1 = 병원장, 2 = 한방대표원장
        if($this->data['type'] == ""){
            $this->data['type'] = 2;
        }
        $this->data['books']                    = $this->m_staff->selectBook($this->data['type']);
        $this->data['letters']                  = $this->m_staff->selectLetter($this->data['type']);

        $this->load->view('admin/staff/representative', $this->data);
    }

    public function bookProcess(){
        $this->yield                            = FALSE;

        $BK_SEQ                                 = $this->input->post('BK_SEQ');
        $BK_TYPE                                = $this->input->post('type');
        $BK_NM                                  = $this->input->post('BK_NM');
        $BK_IMG                                 = $this->input->post('BK_IMG');
        $BK_YMD                                 = $this->input->post('BK_YMD');

        $data                                   = array("BK_TYPE"=>$BK_TYPE, "BK_NM"=>$BK_NM, "BK_IMG"=>$BK_IMG, "BK_YMD"=>$BK_YMD);

        if($BK_SEQ == ""){
            $data['BK_RGST_YMDT']               = date('Y-m-d H:i:s');
            $this->result                       = $this->m_staff->insertEtcProcess($data, "t_book");
        }else{
            $this->result                       = $this->m_staff->updateEtcProcess($data, $BK_SEQ, "BK_SEQ", "t_book");
        }

        echo $this->result;
    }

    public function letterProcess(){
        $this->yield                            = FALSE;

        $LT_SEQ                                 = $this->input->post('LT_SEQ');
        $LT_TYPE                                = $this->input->post('type');
        $LT_TTL                                 = $this->input->post('LT_TTL');
        $LT_IMG                                 = $this->input->post('LT_IMG');
        $LT_NM                                  = $this->input->post('LT_NM');

        $data                                   = array("LT_TYPE"=>$LT_TYPE,"LT_TTL"=>$LT_TTL, "LT_NM"=>$LT_NM, "LT_IMG"=>$LT_IMG);

        if($LT_SEQ == ""){
            $data['LT_RGST_YMDT']               = date('Y-m-d H:i:s');
            $this->result                       = $this->m_staff->insertEtcProcess($data, "t_letter");
        }else{
            $this->result                       = $this->m_staff->updateEtcProcess($data, $LT_SEQ, "LT_SEQ", "t_letter");
        }

        echo $this->result;
    }
    
    public function deleteEtcProcess(){
        $this->yield                            = FALSE;
        
        $SEQ                                    = $this->input->post('SEQ');
        $t_type                                 = $this->input->post('t_type');
        $type                                   = $this->input->post('type');
        
        if($SEQ != ""){
            $this->result                       = $this->m_staff->deleteEtcProcess($SEQ, $type, "t_".$t_type);
            
            echo $this->result;
        }
    }

    public function code(){
        $this->data['result']                   = $this->m_staff->selectCode();
        $this->data['etc_code']                 = $this->m_staff->selectEtcCode();

        $this->load->view('admin/staff/code', $this->data);
    }

    public function codeProcess(){
        $this->yield                            = FALSE;

        $idx                                    = $this->input->post('idx');
        $CCC_CD                                 = $this->input->post('CCC_CD');
        $CC_CD                                  = $this->input->post('CC_CD');
        $CC_NM                                  = $this->input->post('CC_NM');
        $CC_SORT                                = $this->input->post('CC_SORT');
        $CC_USE_YN                              = $this->input->post('CC_USE_YN');

        $data                                   = array("CC_CD"=>$CCC_CD.$CC_CD , "CC_NM"=>$CC_NM , "CC_SORT"=>$CC_SORT, "CC_USE_YN"=>$CC_USE_YN);

        if($idx != ""){
            $this->result                       = $this->m_staff->updateCode($data, $idx);
        }else{
            $this->result                       = $this->m_staff->insertCode($data);
        }

        echo $this->result;
    }

    public function codeDeleteProcess(){
        $this->yield                            = FALSE;
        $idx                                    = $this->input->post('idx');

        if($idx != ""){
            $this->result                       = $this->m_staff->deleteCode($idx);

            echo $this->result;
        }
    }
}