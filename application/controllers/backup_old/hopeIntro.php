<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-04-22
 * Time: ���� 12:01
 */

class HopeIntro extends CI_Controller{


    function index(){

        $this->data['login_check']      = $this->input->get('login_pop');
		
		$this->data['login_close_btn']  = "Y";

        $this->data['media_result']     = $this->common->selectMedia('hope_intro');

        $this->load->view('hope/intro' , $this->data);
    }
}