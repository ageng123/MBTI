<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    private function Csrf() {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        return $csrf;
    }

    public function index() {
        $data = [
            'title' => 'Dashboard application',
            'logo' => 'https://cdn.maspriyambodo.com/images/mp_logo.png',
            'username' => $this->session->userdata('nama'),
            'mail' => $this->session->userdata('mail'),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_index', $data, true);
        $this->parser->parse('Templates/Template', $data);
    }

}
