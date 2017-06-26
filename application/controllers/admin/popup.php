<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Popup extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }

        $this->load->model('admin/m_popup');

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

        $this->data["tot_row"]          = $this->m_popup->selectPopupCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_popup->selectPopup();
        $this->load->view('admin/popup/index',$this->data);
    }

    public function regist(){

        $PP_SEQ                                 = $this->input->get_post('PP_SEQ');

        $result                                 = $this->m_popup->selectPopupOne($PP_SEQ);

        $this->data['PP_SEQ']                   = '';
        $this->data['PP_TTL']                   = '';
        $this->data['PP_STRT_YMD']              = '';
        $this->data['PP_END_YMD']               = '';
        $this->data['PP_TOP']                   = '';
        $this->data['PP_LEFT']                  = '';
        $this->data['PP_CONT']                  = '';
        $this->data['PP_EXPS_YN']               = 'N';
        $this->data['img_info_1']               = '';
        $this->data['img_info_2']               = '';
        $this->data['img_info_3']               = '';
        $this->data['img_link_1']               = '';
        $this->data['img_link_2']               = '';
        $this->data['img_link_3']               = '';


        if(count($result) > 0){


            $this->data['PP_SEQ']               = $result->PP_SEQ;
            $this->data['PP_TTL']               = $result->PP_TTL;
            $this->data['PP_STRT_YMD']          = $result->PP_STRT_YMD;
            $this->data['PP_END_YMD']           = $result->PP_END_YMD;
            $this->data['PP_TOP']               = $result->PP_TOP;
            $this->data['PP_LEFT']              = $result->PP_LEFT;
            $this->data['PP_CONT']              = $result->PP_CONT;
            $this->data['PP_EXPS_YN']           = $result->PP_EXPS_YN;
            $this->data['img_info_1']           = $result->img_info_1;
            $this->data['img_info_2']           = $result->img_info_2;
            $this->data['img_info_3']           = $result->img_info_3;
            $this->data['img_link_1']           = $result->img_link_1;
            $this->data['img_link_2']           = $result->img_link_2;
            $this->data['img_link_3']           = $result->img_link_3;

            if($result->img_info_1){
                $this->data['popup']['img_info_1'] = explode('||', $result->img_info_1);
            }
            if($result->img_info_2){
                $this->data['popup']['img_info_2'] = explode('||', $result->img_info_2);
            }
            if($result->img_info_3){
                $this->data['popup']['img_info_3'] = explode('||', $result->img_info_3);
            }

        }

        $this->load->view('admin/popup/regist', $this->data);

    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $PP_SEQ                                 = $this->input->post('PP_SEQ');
        $PP_TTL                                 = $this->input->post('PP_TTL');
        $PP_STRT_YMD                            = $this->input->post('PP_STRT_YMD');
        $PP_EMD_YMD                             = $this->input->post('PP_END_YMD');
        $PP_TOP                                 = $this->input->post('PP_TOP');
        $PP_LEFT                                = $this->input->post('PP_LEFT');
        $PP_CONT                                = $this->input->post('PP_CONT');
        $PP_EXPS_YN                             = $this->input->post('PP_EXPS_YN');
        $img_info_1                             = $this->input->post('img_info_1');
        $img_info_2                             = $this->input->post('img_info_2');
        $img_info_3                             = $this->input->post('img_info_3');
        $img_link_1                             = $this->input->post('img_link_1');
        $img_link_2                             = $this->input->post('img_link_2');
        $img_link_3                             = $this->input->post('img_link_3');


        $data                                   = array("PP_TTL"=>$PP_TTL, "PP_STRT_YMD"=>$PP_STRT_YMD, "PP_END_YMD"=>$PP_EMD_YMD, "PP_TOP"=>$PP_TOP, "PP_LEFT"=>$PP_LEFT, "PP_CONT"=>$PP_CONT, "PP_EXPS_YN"=>$PP_EXPS_YN,
                                                        "img_info_1"=>$img_info_1, "img_info_2"=>$img_info_2, "img_info_3"=>$img_info_3, "img_link_1"=>$img_link_1, "img_link_2"=>$img_link_2, "img_link_3"=>$img_link_3);

        if($PP_SEQ == ""){
            $data['PP_RGST_YMDT']               = date('Y-m-d H:i:s');
            $this->result                       = $this->m_popup->insertProcess($data);
        }else{
            $this->result                       = $this->m_popup->updateProcess($data, $PP_SEQ);
        }
        
        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $PP_SEQ                                = $this->input->post('PP_SEQ');

        if($PP_SEQ != ""){
            $result                             = $this->m_popup->deleteProcess($PP_SEQ);

            echo $result;
        }
    }
}