<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:45
 */

class Manager extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_manager');
        $this->load->helper('security');

        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('size') : 20;
        $this->data['start_date']       = $this->input->get_post('start_date');
        $this->data['end_date']         = $this->input->get_post('end_date');
        $this->data['delete']           = $this->input->get_post('delete');
        $this->data['is_sms']           = $this->input->get_post('is_sms')? $this->input->get_post('is_sms') : "";
        $this->data['search_field']     = $this->input->get_post('search_field');
        $this->data['search_string']    = $this->input->get_post('search_string');
        $this->data['base_url']         = current_url() ."?delete=" . $this->data['delete'] . "&search_field=" . $this->data['search_field'] . "&search_string=" . $this->data['search_string'] . "&start_date=" . $this->data['start_date'] . "&end_date=" . $this->data['end_date'] . "&size=" . $this->data['size'] . "&is_sms=" . $this->data['is_sms'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

        //$this->output->enable_profiler(TRUE);
    }

    public function index(){

        $this->data["tot_row"]          = $this->m_manager->selectManagerCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_manager->selectManager();
        $this->load->view('admin/manager/index',$this->data);
    }

    public function regist(){

        $MGR_SEQ                        = $this->input->get_post('seq');

        $result                         = $this->m_manager->selectManagerOne($MGR_SEQ);

        if(count($result) > 0){
            $this->data['MGR_SEQ']          = $result->MGR_SEQ;
            $this->data['MGR_ID']           = $result->MGR_ID;
            $this->data['MGR_NM']           = $result->MGR_NM;
            $this->data['MGR_TEL']          = $result->MGR_TEL;
            $this->data['MGR_CPH']          = $result->MGR_CPH;
            $this->data['MGR_EMAIL']        = $result->MGR_EMAIL;
            $this->data['MGR_DEPT']         = $result->MGR_DEPT;
            $this->data['MGR_JBPS']         = $result->MGR_JBPS;
            $this->data['MGR_USE_YN']       = $result->MGR_USE_YN;

            $mobile                         = mb_split("-", $this->data['MGR_CPH']);
            $email                          = mb_split("@", $this->data['MGR_EMAIL']);
            $this->data['mobile1']          = $mobile[0];
            $this->data['mobile2']          = $mobile[1];
            $this->data['mobile3']          = $mobile[2];
            $this->data['email1']           = $email[0];
            $this->data['email2']           = $email[1];

            $this->load->view('admin/manager/regist', $this->data);
        }

    }

    public function registProcess(){
        $this->yield                        = FALSE;

        $MGR_SEQ                            = $this->input->post('MGR_SEQ');
        $MGR_ID                             = $this->input->post('MGR_ID');
        $MGR_PWD                            = $this->input->post('MGR_PWD');
        $MGR_NM                             = $this->input->post('MGR_NM');
        $MGR_TEL                            = $this->input->post('MGR_TEL');
        $MGR_CPH                            = $this->input->post('MGR_CPH');
        $MGR_EMAIL                          = $this->input->post('MGR_EMAIL');
        $MGR_DEPT                           = $this->input->post('MGR_DEPT');
        $MGR_JBPS                           = $this->input->post('MGR_JBPS');
        $MGR_USE_YN                         = $this->input->post('MGR_USE_YN');

        $data                           = array("MGR_ID"=>$MGR_ID, "MGR_PWD"=>$MGR_PWD, "MGR_NM"=>$MGR_NM, "MGR_TEL"=>$MGR_TEL, "MGR_CPH"=>$MGR_CPH, "MGR_EMAIL"=>$MGR_EMAIL, "MGR_DEPT"=>$MGR_DEPT, "MGR_JBPS"=>$MGR_JBPS, "MGR_USE_YN"=>$MGR_USE_YN);

        if($MGR_PWD != ""){
            $data['MGR_PWD']            = $MGR_PWD;
        }

        if($MGR_SEQ == ""){
            $data['MGR_AUTH']           = "W";
            $data['MGR_RGST_YMDT']      = date('Y-m-d H:i:s');

            $this->result               = $this->m_manager->insertProcess($data);
        }else{

            $this->result               = $this->m_manager->updateProcess($data, $MGR_SEQ);
        }

        echo $this->result;
    }

    public function deleteProcess(){
        $this->yield                    = FALSE;

        $MGR_SEQ                        = $this->input->post('MGR_SEQ');



        if($MGR_SEQ != ""){

            $result                     = $this->m_manager->selectManagerOne($MGR_SEQ);

            if($result->MGR_LEV_YN == "N"){

                $data                   = array("MGR_LEV_YN"=>"Y", "MGR_LEV_YMDT"=>date("Y-m-d H:i:s"));
                $this->result           = $this->m_manager->deleteProcess($data, $MGR_SEQ);
            }elseif($result->MGR_LEV_YN == "Y"){
                $this->result           = $this->m_manager->perfactDeleteProcess($MGR_SEQ);
            }


            echo $this->result;
        }
    }


}