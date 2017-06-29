<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Remedy extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }
    
	public function index()
	{
		$data = array(
            'section' => 'remedy'
        );

        $this->load->view('common/header');
        $this->load->view('common/nav', $data);
		$this->load->view('remedy/remedy');
		$this->load->view('common/footer');
	}
}
