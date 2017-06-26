<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }

	public function termsOfUse() {
        $this->load->view("terms/termsOfUse");
    }

    public function privacyList() {
        $this->load->view("terms/privacyList");
    }

    public function collectingPrivacy() {
        $this->load->view("terms/collectingPrivacy");
    }


}
