<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Yield2
{
    function doYield()
    {
        global $OUT;
        $CI =& get_instance();
        $CI->output->set_header("Content-Type: text/html; charset=UTF-8;");
        $output = $CI->output->get_output();
        $type = isset($CI->uri->segments[1]) ? $CI->uri->segments[1] : "";
        $requested = "";
        $CI->yield = isset($CI->yield) ? $CI->yield : TRUE;
        $CI->layout = isset($CI->layout) ? $CI->layout : 'default';
        if ($CI->yield === TRUE){
            if (!preg_match('/(.+).php$/', $CI->layout)){
                $CI->layout .= '.php';
            }
            if($type == "admin"){
                $requested = APPPATH . 'views/admin/layouts/' . $CI->layout;
            }elseif($type == "main" || $type == ""){
                $requested = APPPATH . 'views/layouts/main.php';
            }else{
                $requested = APPPATH . 'views/layouts/sub.php';
            }
            $layout = $CI->load->file($requested, true);
            $view = str_replace("{yield}", $output, $layout);
        }
        else{
            $view = $output;
        }
        $OUT->_display($view);
    }

}
?>