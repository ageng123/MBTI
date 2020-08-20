<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class Api extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    private function statuscode($status, $message){
        switch($status){
            case 1:
                $data = [
                    'message' => $message,
                    'kode' => 200,
                    'is_success' => true
                ];
            break;
            case 2:
                $data = [
                    'message' => $message,
                    'kode' => 500,
                    'is_success' => false
                ];
            break;
        }
    }
    public function post_pernyataan()
    {
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $request = json_decode($stream_clean);
        $data = $request->data;
        $identitasdiri = json_decode($data->identitasdiri);
        var_dump($identitasdiri);
        die;
    }
}
?>