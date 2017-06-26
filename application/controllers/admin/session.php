<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-02-26
 * Time: 오전 11:56
 * 약관 관리
 */

class Session extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('admin/m_session');
        $this->yield 	= FALSE;


    }

    public function index(){


        $this->load->view('admin/session/login');
    }


    public function loginProcess(){

        $id          = $this->input->post('id');
        $password    = $this->input->post('password');

        $result      = $this->m_session->selectUserOne($id, $password);

        if (count($result) > 0){
            $data = array( 'idx'  => $result->MGR_SEQ, 'name' => $result->MGR_NM);
            $this->session->set_userdata($data);
            echo 1;
        }else{
            echo 0;
        }


    }


    function logout(){
        $data = array('idx' => '' , 'name' => '', 'auth' => '');
        $this->session->unset_userdata($data);
        redirect("/admin/session/");
    }

}