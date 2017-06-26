<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-09-19
 * Time: 오후 3:13
 */

class Event extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function mom(){
        $this->load->view('event/mom');
    }
}