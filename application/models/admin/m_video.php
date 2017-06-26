<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-08-01
 * Time: 오전 10:37
 */

class M_video extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    function selectVideo($category){

        $this->db->where('category', $category);
        $this->db->order_by('idx asc');
        $query = $this->db->get('t_video');
        return $this->result_array = $query->result_array();
    }

    function updateProcess($data, $idx){
        $this->db->where("idx", $idx);
        return $this->db->update("t_video", $data);
    }

    function selectVideoCategory(){
        $query = $this->db->get('t_vdo_ctgy');
        return $this->result_array = $query->result_array();
    }

}