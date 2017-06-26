<?php
class Soram extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_soram');

        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('page') : 10;
        $this->data['search_string']    = trim($this->input->get_post('search_string'));



        $this->data['base_url']         = current_url(). "?search_string=" . $this->data['search_string'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

//        $this->output->enable_profiler(TRUE);
            
    }

    //언론보도
    function media() {
        $this->data['tot_row']          = $this->m_soram->selectMediaCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_soram->selectMedia();
        
        $this->load->view('soram/media', $this->data);
    }

    //언론보도 view
    function media_view() {
        $seq                            = $this->input->get_post('seq');
        $this->data['result']           = $this->m_soram->selectMediaView($seq);
        
        $this->load->view('soram/media_view', $this->data);
    }

    function media_view_prev() {
        $seq                           = $this->input->get_post('seq');
        $seq_prev                      = $this->m_soram->selectMediaViewPrev($seq);
        $this->data['result']          = $this->m_soram->selectMediaView($seq_prev->RT_SEQ);

        $this->load->view('soram/media_view', $this->data);
    }

    function media_view_next() {
        $seq                            = $this->input->get_post('seq');
        $seq_next                       = $this->m_soram->selectMediaViewNext($seq);
        $this->data['result']           = $this->m_soram->selectMediaView($seq_next->RT_SEQ);

        $this->load->view('soram/media_view', $this->data);
    }
}