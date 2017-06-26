<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Book_apply extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/book", "refresh");
        }

        $this->load->model('admin/m_book');

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

        $this->data["tot_row"]          = $this->m_book->selectBookApplyCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_book->selectBookApply();
        $this->load->view('admin/book/index',$this->data);
    }

    public function regist(){

        $CL_SEQ                                = $this->input->get_post('CL_SEQ');

        $result                                 = $this->m_book->selectBookApplyOne($CL_SEQ);


        if(count($result) > 0){

            $this->data['cancer']               = $this->m_book->selectCategory("HAAA");

            $this->data['CL_SEQ']              = $result->CL_SEQ;;
            $this->data['CL_NM']               = $result->CL_NM;
            $this->data['CL_TTL']              = $result->CL_TTL;
            $this->data['MBR_ID']              = $result->MBR_ID;
            $this->data['CL_CPH']              = $result->CL_CPH;
            $this->data['CL_EMAIL']            = $result->CL_EMAIL;
            $this->data['CL_CONT']             = $result->CL_CONT;
            $this->data['CL_TEL']              = $result->CL_TEL;
            $this->data['CL_RGST_YMDT']        = $result->CL_RGST_YMDT;
            $this->data['CL_ANS_YMDT']         = $result->CL_ANS_YMDT;
            $this->data['CL_PWD']              = $result->CL_PWD;
            $this->data['ConsultCheck1']       = $result->ConsultCheck1;
            $this->data['ConsultCheck2']       = $result->ConsultCheck2;
            $this->data['ConsultCheck3']       = $result->ConsultCheck3;
            $this->data['ConsultCheck4']       = $result->ConsultCheck4;
            $this->data['ConsultCheck5']       = $result->ConsultCheck5;
            $this->data['ConsultCheck6']       = $result->ConsultCheck6;
            $this->data['CL_advence']          = $result->CL_advence;
            $this->data['CL_ANS']              = $result->CL_ANS;
            $this->data['CL_csTeam']           = $result->CL_csTeam;
            $this->data['CL_gubun']            = $result->CL_gubun;
            $this->data['CL_DIV']              = $result->CL_DIV;
            $this->data['CL_ANS_NM']           = $result->CL_ANS_NM;
            $this->data['CL_COMPANY']          = $result->CL_COMPANY;
            $this->data['CL_ANS_YN']           = $result->CL_ANS_YN;


            $this->load->view('admin/book/regist', $this->data);
        }

    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $CL_SEQ                                 = $this->input->post('CL_SEQ');
        $CL_advence                             = $this->input->post('CL_advence');
        $CL_ANS                                 = $this->input->post('CL_ANS');
        $CL_ANS_NM                              = $this->input->post('CL_ANS_NM');
        $CL_csTeam                              = $this->input->post('CL_csTeam');
        $CL_ANS_YN                              = $this->input->post('CL_ANS_YN');

        $data                                   = array("CL_advence"=>$CL_advence, "CL_ANS"=>$CL_ANS, "CL_ANS_NM"=>$CL_ANS_NM, "CL_csTeam"=>$CL_csTeam, "CL_ANS_YN"=>"Y");


        if($CL_ANS_YN == "N"){
            $data['CL_ANS_YMDT']                = date('Y-m-d H:i:s');
            $this->result                       = $this->m_book->updateProcess($data, $CL_SEQ);
        }else{
            $this->result                       = $this->m_book->updateProcess($data, $CL_SEQ);
        }



        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $CL_SEQ                                 = $this->input->post('CL_SEQ');

        if($CL_SEQ != ""){
            $data                               = array("CL_DEL_FLAG"=>"Y");
            $result                             = $this->m_book->updateProcess($data, $CL_SEQ);

            echo $result;
        }
    }
}