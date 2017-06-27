<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Introduce extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('introduce/introduce');
		$this->load->view('common/footer');
	}


	public function member()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('introduce/member');
		$this->load->view('common/footer');
	}
}
