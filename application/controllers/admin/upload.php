<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class upload extends CI_Controller {


    function __construct() {
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->yield 	= FALSE;
    }

    function thumbnail_upload(){
        $folder                     = $this->input->get_post('folder');
        $img_name                   = "file-0";
        $today                      = date('Ymd');
        $img_path                   = '/public/upload/image/' . $folder .'/' . $today . '/';
        $config['upload_path']      = './public/upload/image/' . $folder .'/' . $today. '/';
        $config['allowed_types']    = 'gif|jpg|jpeg|png';
        $config['max_size']         = '10240';
//        $config['max_width']        = '102400';
//        $config['max_height']       = '768';
        $config['encrypt_name']     = true;
        $config['remove_spaces']    = true;


        if(!is_dir($config['upload_path'])){
            mkdir($config['upload_path'] , 0777);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload($img_name);
        if ($this->upload->display_errors() != '') {
            //에러메세지 있을 때
            $result          = array("result" => "ERROR" , "msg" => $this->upload->display_errors());

        } else {
            $data 			 = $this->upload->data();
            $result 		 = array("result" => "SUCCESS" , "img_src" => $img_path . $data['file_name'] , "img_name" => $data['orig_name']);
        }
        echo json_encode($result);
    }



    function movie_upload(){
        $folder                     = $this->input->get_post('folder');
        $img_name                   = "file-0";
        $today                      = date('Ymd');
        $movie_path                 = '/public/upload/movie/' . $folder .'/' . $today . '/';
        $config['upload_path']      = './public/upload/movie/' . $folder .'/' . $today. '/';
        $config['allowed_types']    = 'mp4';
        $config['max_size']         = '10240000';
        $config['encrypt_name']     = true;
        $config['remove_spaces']    = true;


        if(!is_dir($config['upload_path'])){
            mkdir($config['upload_path'] , 0777);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload($img_name);
        if ($this->upload->display_errors() != '') {
            //에러메세지 있을 때
            $result          = array("result" => "ERROR" , "msg" => $this->upload->display_errors());

        } else {
            $data 			 = $this->upload->data();
            $result 		 = array("result" => "SUCCESS" , "movie_src" => $movie_path . $data['file_name'] , "movie_name" => $data['orig_name']);
        }
        echo json_encode($result);
    }

    function popup_upload(){
        $folder                     = $this->input->get_post('folder');
        $img_name                   = "file-0";
        $today                      = date('Ymd');
        $img_path                   = '/public/upload/image/' . $folder .'/' . $today . '/';
        $config['upload_path']      = './public/upload/image/' . $folder .'/' . $today. '/';
        $config['allowed_types']    = 'gif|jpg|jpeg|png';
        $config['max_size']         = '10240';
//        $config['max_width']        = '102400';
//        $config['max_height']       = '768';
        $config['encrypt_name']     = true;
        $config['remove_spaces']    = true;


        if(!is_dir($config['upload_path'])){
            mkdir($config['upload_path'] , 0777);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload($img_name);
        if ($this->upload->display_errors() != '') {
            //에러메세지 있을 때
            $result          = array("result" => "ERROR" , "msg" => $this->upload->display_errors());

        } else {
            $data 			 = $this->upload->data();
            $result 		 = array("result" => "SUCCESS" , "img_src" => $img_path . $data['file_name'] , "img_name" => $data['orig_name'], "img_info" => $img_path . $data['file_name'] . "||" . $data['image_width'] . "||" . $data['image_height'] . "||" . $data['file_name']);
        }
        echo json_encode($result);
    }



    function file_upload(){
        $folder                     = $this->input->get_post('folder');
        $img_name                   = "file-0";
        $today                      = date('Ymd');
        $img_path                   = '/public/upload/document/' . $folder .'/' . $today . '/';
        $config['upload_path']      = './public/upload/document/' . $folder .'/' . $today. '/';
        $config['allowed_types']    = 'hwp|pdf|doc|docx';
        $config['max_size']         = '10240';
//        $config['max_width']        = '102400';
//        $config['max_height']       = '768';
        $config['encrypt_name']     = false;
        $config['remove_spaces']    = false;


        if(!is_dir($config['upload_path'])){
            mkdir($config['upload_path'] , 0777);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload($img_name);
        if ($this->upload->display_errors() != '') {
            //에러메세지 있을 때
            $result          = array("result" => "ERROR" , "msg" => $this->upload->display_errors());

        } else {
            $data 			 = $this->upload->data();
            $result 		 = array("result" => "SUCCESS" , "file_src" => $img_path . $data['file_name'] , "file_name" => $data['orig_name']);
        }
        echo json_encode($result);
    }

}
