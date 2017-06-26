<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-15
 * Time: 오후 11:01
 */

class Main extends CI_Controller{
    function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
    }
    
    function index(){
        redirect('/admin/consult');
    }
}