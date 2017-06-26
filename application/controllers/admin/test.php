<?php
class Test extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
    }

    function index(){
        $this->load->view("admin/test");
    }
}