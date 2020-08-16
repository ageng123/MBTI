<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Auth');
    }

    protected function Csrf() {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        return $csrf;
    }

    public function index() {
        if ($this->session->userdata('nama') == "") {
            $data = ['title' => 'Login System', 'logo' => 'https://cdn.maspriyambodo.com/Metronic/assets/media/logos/favicon.ico', 'csrf' => $this->Csrf()];
            $this->parser->parse('V_login', $data);
        } else {
            redirect(base_url('Dashboard/index/'), 'refresh');
        }
    }

    function Login() {
        $data = [
            'uname' => $this->input->post('unametxt', true),
            'pwd' => $this->input->post('pwdtxt', true)
        ];
        $result = $this->M_Auth->Process($data);
        if ($result == true) {
            $session = ['login_stat' => 1, 'id' => $result[0]->id, 'nama' => $result[0]->uname, 'hakakses' => $result[0]->hak_akses];
            $this->session->set_userdata($session);
            redirect(base_url('Dashboard/index/'), 'refresh');
        } else {
            redirect(base_url('Auth/index'), $this->session->set_flashdata('message', '<small id="errmsg" style="color:#ed4956;"> Maaf, username dan password Anda salah. Harap periksa kembali username dan password Anda. </small>'));
        }
    }

    public function Logout() {
        $this->session->sess_destroy();
        redirect(base_url('Auth/index'), 'refresh');
    }

}
