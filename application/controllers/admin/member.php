<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:45
 */

class Member extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }
        
        $this->load->model('admin/m_member');
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

        $this->data["tot_row"]          = $this->m_member->selectMemberCount();
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['cur_page']);
        $this->data["result"]           = $this->m_member->selectMember();
        $this->load->view('admin/member/index',$this->data);
    }

    public function regist(){

        $MBR_SEQ                        = $this->input->get_post('seq');

        $result                         = $this->m_member->selectMemberOne($MBR_SEQ);

        if(count($result) > 0){
            $this->data['MBR_SEQ']          = $result->MBR_SEQ;
            $this->data['MBR_ID']           = $result->MBR_ID;
            $this->data['MBR_NM']           = $result->MBR_NM;
            $this->data['MBR_CPH']          = $result->MBR_CPH;
            $this->data['MBR_EMAIL']        = $result->MBR_EMAIL;
            $this->data['MBR_SMS_YN']       = $result->MBR_SMS_YN;
            $this->data['MBR_EMAIL_YN']     = $result->MBR_EMAIL_YN;
            $this->data['MBR_RGST_YMDT']    = $result->MBR_RGST_YMDT;

            $mobile                         = mb_split("-", $this->data['MBR_CPH']);
            $email                          = mb_split("@", $this->data['MBR_EMAIL']);
            $this->data['mobile1']          = $mobile[0];
            $this->data['mobile2']          = $mobile[1];
            $this->data['mobile3']          = $mobile[2];
            $this->data['email1']           = $email[0];
            $this->data['email2']           = $email[1];

            $this->load->view('admin/member/regist', $this->data);
        }

    }
    
    public function registProcess(){
        $this->yield                    = FALSE;

        $MBR_SEQ                        = $this->input->post('MBR_SEQ');
        $MBR_PWD                        = $this->input->post('MBR_PWD');
        $MBR_CPH                        = $this->input->post('MBR_CPH');
        $MBR_EMAIL                      = $this->input->post('MBR_EMAIL');

        $data                           = array("MBR_CPH"=>$MBR_CPH, "MBR_EMAIL"=>$MBR_EMAIL);

        if($MBR_PWD != ""){
            $data['MBR_PWD']            = do_hash($MBR_PWD, 'md5');
        }

        $result                         = $this->m_member->updateProcess($data, $MBR_SEQ);

        echo $result;
    }

    public function deleteProcess(){
        $this->yield                    = FALSE;

        $MBR_SEQ                        = $this->input->post('MBR_SEQ');



        if($MBR_SEQ != ""){

            $result                     = $this->m_member->selectMemberOne($MBR_SEQ);

            if($result->MBR_LEV_YN == "N"){

                $data                   = array("MBR_LEV_YN"=>"Y", "MBR_LEV_YMDT"=>date("Y-m-d H:i:s"));
                $this->result           = $this->m_member->deleteProcess($data, $MBR_SEQ);
            }elseif($result->MBR_LEV_YN == "Y"){
                $this->result           = $this->m_member->perfactDeleteProcess($MBR_SEQ);
            }


            echo $this->result;
        }
    }
    
    
}