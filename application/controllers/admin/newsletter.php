<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Newsletter extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_newsletter');

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

        $this->data["tot_row"]          = $this->m_newsletter->selectNewsLetterCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_newsletter->selectNewsLetter();
        $this->load->view('admin/newsletter/index',$this->data);
    }

    public function regist(){

        $IMT_SEQ                                = $this->input->get_post('IMT_SEQ');

        $result                                 = $this->m_newsletter->selectNewsLetterOne($IMT_SEQ);


        if(count($result) > 0){

            $this->data['cancer']               = $this->m_newsletter->selectCategory("HAAA");

            $this->data['IMT_SEQ']              = $result->IMT_SEQ;;
            $this->data['IMT_NM']               = $result->IMT_NM;
            $this->data['IMT_CONT']             = $result->IMT_CONT;
            $this->data['IMT_CPH']              = $result->IMT_CPH;
            $this->data['IMT_TEL']              = $result->IMT_TEL;
            $this->data['IMT_EMAIL']            = $result->IMT_EMAIL;
            $this->data['IMT_RGST_YMDT']        = $result->IMT_RGST_YMDT;
            $this->data['IMT_ANS_YMDT']         = $result->IMT_ANS_YMDT;
            $this->data['IMT_ZIPCD']            = $result->IMT_ZIPCD;
            $this->data['IMT_ADDR']             = $result->IMT_ADDR;
            $this->data['IMT_ADDR_DTL']         = $result->IMT_ADDR_DTL;
            $this->data['IMT_BOOK']             = $result->IMT_BOOK;
            $this->data['IMT_STAT']             = $result->IMT_STAT;
            $this->data['IMT_DLVRY_YMD']        = $result->IMT_DLVRY_YMD;
            $this->data['IMT_APPLICANT']        = $result->IMT_APPLICANT;
            $this->data['IMT_REGION']           = $result->IMT_REGION;
            $this->data['IMT_CLASS']            = $result->IMT_CLASS;
            $this->data['IMT_ROUTE']            = $result->IMT_ROUTE;

            $this->load->view('admin/newsletter/regist', $this->data);
        }

    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $IMT_SEQ                                = $this->input->post('IMT_SEQ');
        $IMT_STAT                               = $this->input->post('IMT_STAT');
        $IMT_DLVRY_YMD                          = $this->input->post('IMT_DLVRY_YMD');
        $IMT_ANS_YMDT                           = $this->input->post('IMT_ANS_YMDT');

        $data                                   = array("IMT_STAT"=>$IMT_STAT, "IMT_DLVRY_YMD"=>$IMT_DLVRY_YMD);


        if($IMT_ANS_YMDT == ""){
            $data['IMT_ANS_YMDT']               = date('Y-m-d H:i:s');
            $this->result                       = $this->m_newsletter->updateProcess($data, $IMT_SEQ);
        }else{
            $this->result                       = $this->m_newsletter->updateProcess($data, $IMT_SEQ);
        }



        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $IMT_SEQ                                = $this->input->post('IMT_SEQ');

        if($IMT_SEQ != ""){
            $result                             = $this->m_newsletter->deleteProcess($IMT_SEQ);

            echo $result;
        }
    }
}