<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Thesis2 extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_thesis2');

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

        $this->data["tot_row"]          = $this->m_thesis2->selectThesis2Count();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_thesis2->selectThesis2();
        $this->load->view('admin/thesis2/index',$this->data);
    }

    public function regist(){

        $idx                                    = $this->input->get_post('idx');

        $result                                 = $this->m_thesis2->selectThesis2One($idx);

        $this->data['idx']                      = '';
        $this->data['title']                    = '';
        $this->data['writer']                   = '';
        $this->data['journal']                  = '';
        $this->data['USE_YN']                   = 'N';


        if(count($result) > 0){

            $this->data['idx']                  = $result->idx;
            $this->data['title']                = $result->title;
            $this->data['writer']               = $result->writer;
            $this->data['journal']              = $result->journal;
            $this->data['USE_YN']               = $result->USE_YN;

        }

        $this->load->view('admin/thesis2/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $idx                                    = $this->input->post('idx');
        $title                                  = $this->input->post('title');
        $writer                                 = $this->input->post('writer');
        $journal                                = $this->input->post('journal');
        $USE_YN                                 = $this->input->post('USE_YN');

        $data                                   = array("title"=>$title, "writer"=>$writer, "journal"=>$journal, "USE_YN"=>$USE_YN);


        if($idx == ""){
            $data['regDate']                    = date('Y-m-d H:i:s');
            $this->result                       = $this->m_thesis2->insertProcess($data, $idx);
        }else{
            $this->result                       = $this->m_thesis2->updateProcess($data, $idx);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $idx                                    = $this->input->post('idx');

        if($idx != ""){
            $result                             = $this->m_thesis2->deleteProcess($idx);

            echo $result;
        }
    }
}