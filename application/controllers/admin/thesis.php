<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-12
 * Time: 오전 11:13
 */

class Thesis extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_thesis');

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

        $this->data["tot_row"]          = $this->m_thesis->selectThesisCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_thesis->selectThesis();
        $this->load->view('admin/thesis/index',$this->data);
    }

    public function regist(){

        $idx                                    = $this->input->get_post('idx');

        $result                                 = $this->m_thesis->selectThesisOne($idx);

        $this->data['idx']                      = '';
        $this->data['title']                    = '';
        $this->data['summary']                  = '';
        $this->data['writer']                   = '';
        $this->data['writerBook']               = '';
        $this->data['writerDate']               = '';
        $this->data['HWPfile']                  = '';
        $this->data['Wordfile']                 = '';
        $this->data['PDFfile']                  = '';
        $this->data['thumbnail_src']            = '';
        $this->data['content']                  = '';
        $this->data['states']                   = 'N';


        if(count($result) > 0){

            $this->data['idx']                  = $result->idx;
            $this->data['title']                = $result->title;
            $this->data['summary']              = $result->summary;
            $this->data['writer']               = $result->writer;
            $this->data['writerBook']           = $result->writerBook;
            $this->data['writerDate']           = $result->writerDate;
            $this->data['HWPfile']              = $result->HWPfile;
            $this->data['Wordfile']             = $result->Wordfile;
            $this->data['PDFfile']              = $result->PDFfile;
            $this->data['thumbnail_src']        = $result->thumbnail_src;
            $this->data['content']              = $result->content;
            $this->data['states']               = $result->states;

        }

        $this->load->view('admin/thesis/regist', $this->data);
    }

    public function registProcess(){
        $this->yield                            = FALSE;

        $idx                                    = $this->input->post('idx');
        $title                                  = $this->input->post('title');
        $summary                                = $this->input->post('summary');
        $writer                                 = $this->input->post('writer');
        $writerBook                             = $this->input->post('writerBook');
        $writerDate                             = $this->input->post('writerDate');
        $HWPfile                                = $this->input->post('HWPfile');
        $Wordfile                               = $this->input->post('Wordfile');
        $PDFfile                                = $this->input->post('PDFfile');
        $thumbnail_src                          = $this->input->post('thumbnail_src');
        $content                                = $this->input->post('content');
        $states                                 = $this->input->post('states');

        $data                                   = array("title"=>$title, "summary"=>$summary, "writer"=>$writer, "writerBook"=>$writerBook, "writerDate"=>$writerDate, "HWPfile"=>$HWPfile, "Wordfile"=>$Wordfile, "PDFfile"=>$PDFfile, "thumbnail_src"=>$thumbnail_src, "content"=>$content, "states"=>$states);


        if($idx == ""){
            $data['regDate']                    = date('Y-m-d H:i:s');
            $data['readCount']                  = 0;
            $this->result                       = $this->m_thesis->insertProcess($data, $idx);
        }else{
            $this->result                       = $this->m_thesis->updateProcess($data, $idx);
        }
        
        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                            = FALSE;

        $IMT_SEQ                                = $this->input->post('idx');

        if($IMT_SEQ != ""){
            $result                             = $this->m_thesis->deleteProcess($IMT_SEQ);

            echo $result;
        }
    }
}