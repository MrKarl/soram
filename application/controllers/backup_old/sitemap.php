<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-04-22
 * Time: 오후 1:16
 */

class Sitemap extends CI_Controller{

    function __construct(){
        parent::__construct();
        /*$this->yield    = FALSE;*/
    }

    function index(){

        $this->load->view('sitemap/index');
    }
}
