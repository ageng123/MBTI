<?php 
         function encode($msg){
            $ci =& get_instance();
            $ci->load->library('encryption');
            $key = $ci->config->item('encryption_key');
            $ci->encryption->initialize(['key' => $key, 'cipher' => 'aes-256']);
            $encoded = $ci->encryption->encrypt($msg);
            $encoded = str_replace(['/', '+'], ['_', '-'], base64_encode($encoded));
            return $encoded;
        }
        function decode($msg){
            $ci =& get_instance();
            $msg = str_replace(['_','-'], ['/', '+'], base64_decode($msg));
            $key = $ci->config->item('encryption_key');
            $ci->encryption->initialize(['key' => $key, 'cipher' => 'aes-256']);
            $decoded = $ci->encryption->decrypt($msg);
            return $decoded;
        }
?>