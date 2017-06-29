<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }
    
	public function index()
	{
		$data = array(
            'section' => 'mypage'
        );

        $this->load->view('common/header');
        $this->load->view('common/nav', $data);
		$this->load->view('mypage/mypage');
		$this->load->view('common/footer');
	}
}
