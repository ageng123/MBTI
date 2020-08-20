<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class Api extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function post_pernyataan()
    {
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $request = json_decode($stream_clean);
        $data = $request->data;
        var_dump(json_decode($data->identitasdiri));
        die;
    }
}
?>