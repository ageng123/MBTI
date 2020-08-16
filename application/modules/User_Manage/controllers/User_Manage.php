<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class User_Manage extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_user');
    }

    private function Csrf() {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        return $csrf;
    }

    private function Dec($enc) {
        $encrypt = str_replace(['-', '_', '~'], ['+', '/', '='], $enc);
        $dec = $this->encryption->decrypt($encrypt);
        return $dec;
    }

    public function index() {
        $data = [
            'title' => 'User Management',
            'username' => $this->session->userdata('nama'),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_index', $data, true);
        $this->parser->parse('Templates/Template', $data);
    }

    public function Get_User() {
        $exec = $this->M_user->Get_User();
        if (sizeof($exec) > 0) {
            $header = 200;
        } else {
            $header = 201;
        }
        $this->output
                ->set_status_header($header)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($exec, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

}
