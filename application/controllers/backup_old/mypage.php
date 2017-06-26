<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-09
 * Time: 오후 12:47
 */

class Mypage extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function consulting(){
        $this->load->view('mypage/consulting');
    }
    function modify(){
        $this->load->view('mypage/modify');
    }

    function index() {
    	$this->load->view('phpinfo');
    }
}