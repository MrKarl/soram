<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Nopay extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_nopay');

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

        $this->data["tot_row"]          = $this->m_nopay->selectNopayCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_nopay->selectNopay();
        $this->load->view('admin/nopay/index',$this->data);
    }

    public function regist(){

        $idx                             = $this->input->get_post('idx');

        $result                          = $this->m_nopay->selectNopayOne($idx);

        $this->data['idx']               = '';
        $this->data['name']              = '';
        $this->data['price']             = '';
        $this->data['spec']              = '';
        $this->data['exps_yn']           = 'N';

        if(count($result) > 0){
            $this->data['idx']           = $result->idx;
            $this->data['name']          = $result->name;
            $this->data['price']         = $result->price;
            $this->data['spec']          = $result->spec;
            $this->data['exps_yn']       = $result->exps_yn;
        }

        $this->load->view('admin/nopay/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                        = FALSE;

        $idx                                = $this->input->post('idx');
        $name                               = $this->input->post('name');
        $price                              = $this->input->post('price');
        $spec                               = $this->input->post('spec');
        $exps_yn                            = $this->input->post('exps_yn');

        $data                               = array("name"=>$name, "price"=>$price, "spec"=>$spec, "exps_yn"=>$exps_yn);

        if($idx == ""){
            $data['reg_date']               = date('Y-m-d H:i:s');
            $this->result                   = $this->m_nopay->insertProcess($data);
        }else{
            $this->result                   = $this->m_nopay->updateProcess($data, $idx);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                        = FALSE;

        $idx                             = $this->input->post('idx');

        if($idx != ""){
            $result                         = $this->m_nopay->deleteProcess($idx);

            echo $result;
        }
    }
}