<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-07-25
 * Time: 오후 4:24
 * 영상 관리
 */

class Video extends CI_Controller{

    function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }


        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        $this->load->model("admin/m_video");
        $this->data['category']         = $this->input->get_post('category')? $this->input->get_post('category') : 'hope_intro';
        $this->data['base_url']         = current_url() ."?category=" . $this->data['category'];
        $this->data['row_cnt']          = 0;

        //$this->output->enable_profiler(true);
    }

    public function index(){
        $this->data['category_result']  = $this->m_video->selectVideoCategory();
        $this->data["result"]           = $this->m_video->selectVideo($this->data['category']);
        $this->load->view('admin/video/index',$this->data);
    }

    public function updateProcess(){
        $this->yield                    = FALSE;

        $idx                            = $this->input->post("idx");
        $v_type                         = $this->input->post("v_type");
        $media_src                      = $this->input->post("media_src");
        $data                           = array("v_type"=>$v_type, "media_src"=>$media_src);

        $result                         = $this->m_video->updateProcess($data, $idx);

        echo $result;
    }

}