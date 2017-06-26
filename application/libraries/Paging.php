<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paging {
    var $base_url	= '';
    var $tot_row	= 0;
    var $cur_page 	= 1;
    var $size		= 20;
    var $block 		= 5;
    var $model 		= '';
    var $model_func	= '';

    // var $pre_blk	= '<<';
    // var $nxt_blk	= '>>';

    // var $pre_blk	= '<img src="/web/images/admin/btn_paging_prev.gif" width="12" height="13" alt="이전"/>';
    // var $nxt_blk	= '<img src="/web/images/admin/btn_paging_next.gif" width="12" height="13" alt="다음"/>';
    var $addParam	= '';

    function __construct($conf = array()){
        if(count($conf)>0){
            $this->init($conf);
        }
    }

    function init($params = array()){
        if (count($params) > 0){
            foreach ($params as $key => $val){
                if (isset($this->$key)){
                    $this->$key = $val;
                }
            }
        }
    }

    public function create_page($size=20){

        $rtn 			= '<ul class="pagination">';

        if ($this->tot_row > 0){

            $cur_blk 	= ceil($this->cur_page / $this->block);
            $tot_page 	= ceil($this->tot_row / $this->size);
            $tot_blk	= ceil($tot_page / $this->block);

            $baseURL	= rtrim($this->base_url, '/');
            $addURL		= ltrim($this->addParam, '/');

            $connect	= strpos($baseURL,'?')?'&':'?';

            if($cur_blk > 1){
                $rtn .= '<li><a href="'.$baseURL.$connect.'page='.(($cur_blk-2)*$this->block + 1).'" >이전</a></li>';

            } else {
                $rtn .= '<li class="disabled"><a href="javascript:;">이전</a></span>';
            }

            $page = ($cur_blk-1)*$this->block + 1;
            while($page <= $tot_page && $page <= ($cur_blk*$this->block)){
                if($page == $this->cur_page){
                    $rtn .= '<li class="active"><a href="javascript:;">'.$page.'</li>';
                } else {
                    $rtn .= '<li><a href="'.$baseURL.$connect.'page='.$page.'" class="gray_link03">'.$page.'</a></li>';
                }
                $page++;
            }

            if($cur_blk < $tot_blk){
                $rtn .= '<li><a href="'.$baseURL.$connect.'page='.(($cur_blk)*$this->block + 1).'" >다음</a></li>';
            } else {
                $rtn .= '<li class="disabled"><a href="javascript:;" >다음</a></li>';
            }

        }
        return $rtn .= '</ul>';
    }

    public function create_front_page($size=20){

        $rtn 			= '';

        if ($this->tot_row > 0){

            $cur_blk 	= ceil($this->cur_page / $this->block);
            $tot_page 	= ceil($this->tot_row / $this->size);
            $tot_blk	= ceil($tot_page / $this->block);

            $baseURL	= rtrim($this->base_url, '/');
            $addURL		= ltrim($this->addParam, '/');

            $connect	= strpos($baseURL,'?')?'&':'?';

            if($cur_blk > 1){
                $rtn .= '<a href="'.$baseURL.$connect.'" class="bt_prv10">&lt;&lt;</a>';
                $rtn .= '<a href="'.$baseURL.$connect.'page='.(($cur_blk-2)*$this->block + 1).'" class="bt_prv">&lt;</a>';
            } else {
                $rtn .= '<a href="javascript:;" class="bt_prv10">&lt;&lt;</a>';
                $rtn .= '<a href="javascript:;" class="bt_prv">&lt;</a>';
            }

            $page = ($cur_blk-1)*$this->block + 1;
            $rtn .='<span class="num_wrap">';
            while($page <= $tot_page && $page <= ($cur_blk*$this->block)){

                if($page == $this->cur_page){
                    $rtn .= '<a href="javascript:;" class="on">'.$page.'</a>';
                } else {
                    $rtn .= '<a href="'.$baseURL.$connect.'page='.$page.'">'.$page.'</a>';
                }
                $page++;
            }
            $rtn .='</span>';

            if($cur_blk < $tot_blk){
                $rtn .= '<a href="'.$baseURL.$connect.'page='.(($cur_blk)*$this->block + 1).'" class="bt_next">&gt;</a>';
                $rtn .= '<a href="'.$baseURL.$connect.'page='.$tot_page.'" class="bt_next10">&gt;&gt;</a>';
            } else {
                $rtn .= '<a href="javascript:;" class="bt_next" >&gt;</a>';
                $rtn .= '<a href="javascript:;" class="bt_next10" >&gt;&gt;</a>';
            }

        }
        return $rtn .= '';
    }
}
?>