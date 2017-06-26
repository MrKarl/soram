<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }
    
	public function e404()
	{
		$this->load->view('common/header');
		$this->load->view('error/404');
	}
}
