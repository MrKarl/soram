<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-13
 * Time: 오후 2:27
 */

class Reference extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('m_reference');

        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('page') : 12;
        $this->data['search_string']    = trim($this->input->get_post('search_string'));
        $this->data['search_field']     = trim($this->input->get_post('search_field'));
        $this->data['type']             = $this->input->get_post('type')? $this->input->get_post('type') : "";

        $this->data['base_url']         = current_url(). "?search_string=" . $this->data['search_string']. "&type=" . $this->data['type'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;
//        $this->output->enable_profiler(TRUE);

    }

    //호전사례 발표
    function announcement(){

        $this->data['tot_row']          = $this->m_reference->selectAnnounceCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_reference->selectAnnounce();


        if (count($this->data['result']) > 0){

            foreach($this->data['result'] as $row){

                $data = $this->m_reference->selectAnnounceOne($row["PT_SEQ"]);
                break;
            }

            $this->data["first_row"] = $data;
        }


        $this->load->view('reference/announcement' , $this->data);
    }
    function announcement_view(){

        $this->data['seq']             = $this->input->get_post('seq');
        $this->data["result"]          = $this->m_reference->selectAnnounceOne($this->data['seq']);

        $preview        = $this->m_reference->selectAnnouncePreview($this->data['seq']);
        $next           = $this->m_reference->selectAnnounceNext($this->data['seq']);
        if ($preview->num_rows() > 0){
            $row = $preview->row();
            $this->data["preview"] =  $row->preview;
        }

        if ($next->num_rows() > 0){
            $row = $next->row();
            $this->data["next"] =  $row->next;
        }



        $this->load->view('reference/announcement_view' , $this->data);
    }
    
    //호전사례 인트로
    function better_change_intro(){
        $this->data['media_result']     = $this->common->selectMedia('reference_better_change_intro');
        $this->load->view('reference/better_change_intro', $this->data);
    }
    
    //호전사례
    function better_change(){

        $this->data['tot_row']          = $this->m_reference->selectChangeCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
        $this->data['result']           = $this->m_reference->selectChange();
        $this->data['main_vod']         = $this->m_reference->selectChangeMainVOD();

        if (count($this->data['result']) > 0){

            foreach($this->data['result'] as $row){

                $data = $this->m_reference->selectChangeOne($row["TT_SEQ"]);
                break;
            }

            $this->data["first_row"] = $data;
        }

		$this->data['login_close_btn']	= "Y";

        $this->load->view('reference/better_change' , $this->data);
    }


    function better_change_view(){

        if ($this->session->userdata("MBR_ID") == ""){
            redirect("/");
            exit;
        }
        $this->data['seq']             = $this->input->get_post('seq');
        $this->data["result"]          = $this->m_reference->selectChangeOne($this->data['seq']);
        $this->m_reference->updateReadCount($this->data['seq']);

        $preview        = $this->m_reference->selectChangePreview($this->data['seq']);
        $next           = $this->m_reference->selectChangeNext($this->data['seq']);
        if ($preview->num_rows() > 0){
            $row = $preview->row();
            $this->data["preview"] =  $row->preview;
        }

        if ($next->num_rows() > 0){
            $row = $next->row();
            $this->data["next"] =  $row->next;
        }


        $this->load->view('reference/better_change_view' , $this->data);
    }


    function thesis(){


        $this->data['size'] = $this->input->get_post('size') ? $this->input->get_post('page') : 10;
        if ($this->data['type'] == "") {


            $this->data['tot_row'] = $this->m_reference->selectThesisCount();
            $this->data['cur_num'] = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page'] - 1);
            $this->paging->init($this->data);
            $this->data['paging'] = $this->paging->create_front_page($this->data['size'], $this->data['page']);
            $this->data['result'] = $this->m_reference->selectThesis();

            if (count($this->data['result']) > 0){

                foreach($this->data['result'] as $row){

                    $data = $this->m_reference->selectThesisOne($row["idx"]);
                    break;
                }

                $this->data["first_row"] = $data;
            }


        }else{
            $this->data['tot_row'] = $this->m_reference->selectThesis2Count();
            $this->data['cur_num'] = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page'] - 1);
            $this->paging->init($this->data);
            $this->data['paging'] = $this->paging->create_front_page($this->data['size'], $this->data['page']);
            $this->data['result'] = $this->m_reference->selectThesis2();

            if (count($this->data['result']) > 0){

                foreach($this->data['result'] as $row){

                    $data = $this->m_reference->selectThesis2One($row["idx"]);
                    break;
                }

                $this->data["first_row"] = $data;
            }

        }




        $this->load->view('reference/thesis' , $this->data);
    }
    
    //연구논문 view
    function thesis_view(){
        $idx                            = $this->input->get_post('idx');
        $this->data['result']           = $this->m_reference->selectThesisView($idx);


        $preview                        = $this->m_reference->selectThesisChangePreview($idx);
        $next                           = $this->m_reference->selectThesisChangeNext($idx);
        if($preview->num_rows() > 0) {
            $row = $preview->row();
            $this->data['preview'] = $row->preview;
        }

        if($next->num_rows() > 0) {
            $row = $next->row();
            $this->data['next'] = $row->next;
        }
        
        $this->load->view('reference/thesis_view', $this->data);
    }
    
    
    //환우회
    function circle(){
        $this->load->view('reference/circle');
    }

}