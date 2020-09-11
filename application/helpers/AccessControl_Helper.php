<?php 
    function isGrantedToAccess(){
        $ci =& get_instance();
        $header_from = $_SERVER['HTTP_ACCESS_CONTROL_ALLOW_ORIGIN'];
        $allow_from = [
            '123.456.7.78', 'localhost', '::1', '127.0.0.1'
        ];
        if(array_search($header_from, $allow_from)):
            return 'Allowed';
        endif;
        return 'Not Allowed';

    }
?>