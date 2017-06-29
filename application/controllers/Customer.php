<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }
    
	public function index()
	{
		$data = array(
            'section' => 'customer'
        );

        $this->load->view('common/header');
        $this->load->view('common/nav', $data);
		$this->load->view('customer/customer');
		$this->load->view('common/footer');
	}
}
