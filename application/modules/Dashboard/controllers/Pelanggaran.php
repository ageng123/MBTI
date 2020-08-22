<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Pelanggaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model('M_Mutasi');
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
            'title' => 'Dashboard Pelanggaran',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Mutasi->index(),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_pelanggaran', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

    public function Usulan($id) {
        $dec = $this->Dec($id);
        $data = [
            'title' => 'Dashboard Pelanggaran - Input Pelanggaran Anggota',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Mutasi->Usulan($dec),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_pelanggaranusul', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }
    public function getHistory(){
        $id = $_GET['id'];
        $model = new M_Pelanggaran;
        $process = $model->find(['id_personil' => $id]);
        $rows = array();
        foreach($process as $key => $value){
            $row = array();
            $row[] = $key+1;
            $row[] = $value->keterangan;
            $row[] = $value->tanggal_pelanggaran;
            $row[] = $value->created_date;
            $rows[] = $row;
            
        }
        echo json_encode(['data' => $rows]);

    }

}
