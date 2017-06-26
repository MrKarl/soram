<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-08-01
 * Time: 오후 2:01
 */

class Lecture extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $this->load->view('lecture/index');
    }
}