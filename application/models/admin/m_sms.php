<?
class M_sms extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function insert_sms_send($id,$cph,$content) {
        $conn=$this->adodb->Connect();

        $qry="insert into t_sms_send (id,cph,content,reg_date,send_yn) values (?,?,?,now(),?)";

        return $conn->Execute($qry,array($id,$cph,$content,'N'));
    }

    function get_menu_sms_list_count($tp,$exps_yn,$search_word,$start_date,$end_date) {
        $conn=$this->adodb->Connect();

        $where_arr=array();
        $where="";

        if ($tp) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" sm_tp=? ";
            $where_arr[]=$tp;
        }

        if ($exps_yn) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" sm_exps_yn=? ";
            $where_arr[]=$exps_yn;
        }

        if ($search_word) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" sm_msg like ? ";
            $where_arr[]='%'.$search_word.'%';
        }

        if ($start_date) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" ?<=date_format(sm_rgst_ymdt,'%Y-%m-%d') ";
            $where_arr[]=$start_date;
        }

        if ($end_date) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" date_format(sm_rgst_ymdt,'%Y-%m-%d')<=? ";
            $where_arr[]=$end_date;
        }

        $qry="select count(*) from t_sms_menu $where";

        return $conn->GetOne($qry,$where_arr);
    }

    function get_menu_sms_list($tp,$exps_yn,$search_word,$offset,$limit,$start_date,$end_date) {
        $conn=$this->adodb->Connect();

        $where_arr=array();
        $where="";

        if ($tp) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.sm_tp=? ";
            $where_arr[]=$tp;
        }

        if ($exps_yn) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.sm_exps_yn=? ";
            $where_arr[]=$exps_yn;
        }

        if ($search_word) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.sm_msg like ? ";
            $where_arr[]='%'.$search_word.'%';
        }

        if ($start_date) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" ?<=date_format(a.sm_rgst_ymdt,'%Y-%m-%d') ";
            $where_arr[]=$start_date;
        }

        if ($end_date) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" date_format(a.sm_rgst_ymdt,'%Y-%m-%d')<=? ";
            $where_arr[]=$end_date;
        }

        $qry="select a.*,b.cc_nm from t_sms_menu a left join t_comm_cd b on a.sm_tp=b.cc_cd $where order by a.sm_seq desc";

        $res=$conn->SelectLimit($qry,$limit,$offset,$where_arr);

        return $res->GetArray();
    }

    function insert_menu_send_sms($sm_tp,$sm_msg,$sm_exps_yn) {
        $conn=$this->adodb->Connect();

        $qry="insert into t_sms_menu (sm_tp,sm_msg,sm_exps_yn,sm_rgst_ymdt) values (?,?,?,now())";

        return $conn->Execute($qry,array($sm_tp,$sm_msg,$sm_exps_yn));
    }

    function update_menu_send_sms($sm_seq,$sm_tp,$sm_msg,$sm_exps_yn) {
        $conn=$this->adodb->Connect();

        $qry="update t_sms_menu set sm_tp=?,sm_msg=?,sm_exps_yn=? where sm_seq=?";

        return $conn->Execute($qry,array($sm_tp,$sm_msg,$sm_exps_yn,$sm_seq));
    }

    function delete_menu_send_sms($sm_seq) {
        $conn=$this->adodb->Connect();

        $qry="delete from t_sms_menu where sm_seq=?";

        return $conn->Execute($qry,array($sm_seq));
    }

    function get_menu_send_sms($sm_seq) {
        $conn=$this->adodb->Connect();

        $qry="select * from t_sms_menu where sm_seq=?";

        return $conn->GetRow($qry,array($sm_seq));
    }

    function get_admin_rcv_sms_list_count($tp,$exps_yn,$search_word,$start_date,$end_date) {
        $conn=$this->adodb->Connect();

        $where_arr=array();
        $where="";

        if ($tp) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" sa_tp=? ";
            $where_arr[]=$tp;
        }

        if ($exps_yn) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" sa_exps_yn=? ";
            $where_arr[]=$exps_yn;
        }

        if ($search_word) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" sa_msg like ? ";
            $where_arr[]='%'.$search_word.'%';
        }

        if ($start_date) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" ?<=date_format(sa_rgst_ymdt,'%Y-%m-%d') ";
            $where_arr[]=$start_date;
        }

        if ($end_date) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" date_format(sa_rgst_ymdt,'%Y-%m-%d')<=? ";
            $where_arr[]=$end_date;
        }

        $qry="select count(*) from t_sms_adm $where";

        return $conn->GetOne($qry,$where_arr);
    }

    function get_admin_rcv_sms_list($tp,$exps_yn,$search_word,$offset,$limit,$start_date,$end_date) {
        $conn=$this->adodb->Connect();

        $where_arr=array();
        $where="";

        if ($tp) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.sa_tp=? ";
            $where_arr[]=$tp;
        }

        if ($exps_yn) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.sa_exps_yn=? ";
            $where_arr[]=$exps_yn;
        }

        if ($search_word) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.sa_msg like ? ";
            $where_arr[]='%'.$search_word.'%';
        }

        if ($start_date) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" ?<=date_format(a.sa_rgst_ymdt,'%Y-%m-%d') ";
            $where_arr[]=$start_date;
        }

        if ($end_date) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" date_format(a.sa_rgst_ymdt,'%Y-%m-%d')<=? ";
            $where_arr[]=$end_date;
        }

        $qry="select a.*,b.cc_nm from t_sms_adm a left join t_comm_cd b on a.sa_tp=b.cc_cd $where order by a.sa_seq desc";

        $res=$conn->SelectLimit($qry,$limit,$offset,$where_arr);

        return $res->GetArray();
    }

    function insert_admin_rcv_sms($sa_tp,$sa_msg,$sa_exps_yn) {
        $conn=$this->adodb->Connect();

        $qry="insert into t_sms_adm (sa_tp,sa_msg,sa_exps_yn,sa_rgst_ymdt) values (?,?,?,now())";

        return $conn->Execute($qry,array($sa_tp,$sa_msg,$sa_exps_yn));
    }

    function update_admin_rcv_sms($sa_seq,$sa_tp,$sa_msg,$sa_exps_yn) {
        $conn=$this->adodb->Connect();

        $qry="update t_sms_adm set sa_tp=?,sa_msg=?,sa_exps_yn=? where sa_seq=?";

        return $conn->Execute($qry,array($sa_tp,$sa_msg,$sa_exps_yn,$sa_seq));
    }

    function delete_admin_rcv_sms($sa_seq) {
        $conn=$this->adodb->Connect();

        $qry="delete from t_sms_adm where sa_seq=?";

        return $conn->Execute($qry,array($sa_seq));
    }

    function get_admin_rcv_sms($sa_seq) {
        $conn=$this->adodb->Connect();

        $qry="select * from t_sms_adm where sa_seq=?";

        return $conn->GetRow($qry,array($sa_seq));
    }

    function get_send_list_count($tp,$send_yn,$search_word) {
        $conn=$this->adodb->Connect();

        $where_arr=array();
        $where="";

        if ($tp) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" sa_tp=? ";
            $where_arr[]=$tp;
        }

        if ($send_yn) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" send_yn=? ";
            $where_arr[]=$send_yn;
        }

        if ($search_word) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" sa_msg like ? ";
            $where_arr[]='%'.$search_word.'%';
        }

        $qry="select count(*) from t_sms_send $where";

        return $conn->GetOne($qry,$where_arr);
    }

    function get_send_list($tp,$send_yn,$search_word,$offset,$limit) {
        $conn=$this->adodb->Connect();

        $where_arr=array();
        $where="";

        if ($tp) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.sa_tp=? ";
            $where_arr[]=$tp;
        }

        if ($send_yn) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.send_yn=? ";
            $where_arr[]=$send_yn;
        }

        if ($search_word) {
            if ($where) $where.=" and ";
            else $where.=" where ";

            $where.=" a.sa_msg like ? ";
            $where_arr[]='%'.$search_word.'%';
        }

        $qry="select a.*,b.cc_nm from t_sms_send a left join t_comm_cd b on a.tp=b.cc_cd $where order by a.idx desc";

        $res=$conn->SelectLimit($qry,$limit,$offset,$where_arr);

        return $res->GetArray();
    }

    function get_send_sms($idx) {
        $conn=$this->adodb->Connect();

        $qry="select * from t_sms_send where idx=?";

        return $conn->GetRow($qry,array($idx));
    }


    function insert_sms($to,$from,$content) {
        $conn=$this->adodb->Connect("sms");

        $conn->Execute("set names euckr");

        $content=mb_convert_encoding($content,"cp949","utf-8");

        $qry="INSERT INTO SC_TRAN (TR_SENDDATE , TR_SENDSTAT ,TR_MSGTYPE ,TR_PHONE ,TR_CALLBACK , TR_MSG) VALUES (NOW(), '0', '0', ?, ?, ?)";

        $conn->Execute($qry,array($to,$from,$content));

        $conn->Execute("set names utf8");
    }

    function insert_mms($subject,$to,$from,$content,$img) {
        $conn=$this->adodb->Connect("sms");

        $conn->Execute("set names euckr");

        $subject=mb_convert_encoding($subject,"cp949","utf-8");
        $content=mb_convert_encoding($content,"cp949","utf-8");

        $qry="INSERT INTO MMS_MSG (SUBJECT, PHONE, CALLBACK, STATUS, REQDATE, MSG , FILE_CNT, FILE_PATH1, TYPE) VALUES (?, ?, ?, '0', NOW(), ?, '1', ?, '0' )";

        $conn->Execute($qry,array($subject,$to,$from,$content,$img));

        $conn->Execute("set names utf8");
    }
}
?>
