<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Example extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_example');

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

        $this->data["tot_row"]          = $this->m_example->selectExampleCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_example->selectExample();
        $this->load->view('admin/example/index',$this->data);
    }

    public function regist(){

        $PT_SEQ                                 = $this->input->get_post('PT_SEQ');

        $result                                 = $this->m_example->selectExampleOne($PT_SEQ);

        $this->data['PT_SEQ']                   = '';       //idx
        $this->data['PT_TTL']                   = '';       //제목
        $this->data['PT_CONT']                  = '';       //내용
        $this->data['PT_RPRT_YMD']              = '';       //일시
        $this->data['PT_STL_IMG']               = '';       //썸네일
        $this->data['PT_MAIN_IMG']              = '';       //동영상 이미지
        $this->data['PT_VOD_MP4']               = '';       //동영상
        $this->data['PT_EXPS_YN']               = 'N';       //노출여부

        if(count($result) > 0) {

            $this->data['PT_SEQ']               = $result->PT_SEQ;
            $this->data['PT_TTL']               = $result->PT_TTL;
            $this->data['PT_RPRT_YMD']          = $result->PT_RPRT_YMD;
            $this->data['PT_STL_IMG']           = $result->PT_STL_IMG;
            $this->data['PT_MAIN_IMG']          = $result->PT_MAIN_IMG;
            $this->data['PT_VOD_MP4']           = $result->PT_VOD_MP4;
            $this->data['PT_CONT']              = $result->PT_CONT;
            $this->data['PT_EXPS_YN']           = $result->PT_EXPS_YN;
        }

        $this->load->view('admin/example/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $PT_SEQ                                 = $this->input->post('PT_SEQ');
        $PT_TTL                                 = $this->input->post('PT_TTL');
        $PT_RPRT_YMD                            = $this->input->post('PT_RPRT_YMD');
        $PT_STL_IMG                             = $this->input->post('PT_STL_IMG');
        $PT_MAIN_IMG                            = $this->input->post('PT_MAIN_IMG');
        $PT_VOD_MP4                             = $this->input->post('PT_VOD_MP4');
        $PT_CONT                                = $this->input->post('PT_CONT');
        $PT_EXPS_YN                             = $this->input->post('PT_EXPS_YN');


        $data                                   = array("PT_TTL"=>$PT_TTL, "PT_RPRT_YMD"=>$PT_RPRT_YMD, "PT_STL_IMG"=>$PT_STL_IMG, "PT_MAIN_IMG"=>$PT_MAIN_IMG, "PT_VOD_MP4"=>$PT_VOD_MP4, "PT_CONT"=>$PT_CONT, "PT_EXPS_YN"=>$PT_EXPS_YN);

        if($PT_SEQ == ""){
            $data['PT_READ_CNT']                = 0;
            $data['PT_RGST_YMDT']               = date('Y-m-d H:i:s');
            $this->result                       = $this->m_example->insertProcess($data);
        }else{
            $this->result                       = $this->m_example->updateProcess($data, $PT_SEQ);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $PT_SEQ                             = $this->input->post('PT_SEQ');

        if($PT_SEQ != ""){
            $result                             = $this->m_example->deleteProcess($PT_SEQ);

            echo $result;
        }
    }
}