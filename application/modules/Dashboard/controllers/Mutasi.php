<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Mutasi extends CI_Controller {
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
    private function Decrypter($encrypt){
        $dec = $this->encryption->decrypt($encrypt);
        return $dec;
    }

    private function Nosurat() {
        //every first month, number will be reset from 1
        $roman = ['01' => 'I', '02' => 'II', '03' => 'III', '04' => 'IV', '05' => 'V', '06' => 'VI', '07' => 'VII', '08' => 'VIII', '09' => 'IX', '10' => 'X', '11' => 'XI', '12' => 'XII'];
//        $no_of_digit = 4;
//        $number = $this->M_quotation->NumQuotation() + 1;
//        $length = strlen((string) $number);
//        for ($i = $length; $i < $no_of_digit; $i++) {
//            $number = '0' . $number;
//        }
        $nu_quotation = date('d') . '/MTS/' . $roman[date('m')] . '/' . date('Y');
//        $nu_quotation = date('Ymd') . $number;
        return $nu_quotation;
    }

    public function index() {
        $data = [
            'title' => 'Dashboard Mutasi',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Mutasi->index(),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_mutasi', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

    public function Usulan($id) {
        $dec = $this->Dec($id);
        $data = [
            'title' => 'Dashboard Mutasi',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Mutasi->Usulan($dec),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_mutasiusul', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }
    public function getHistoryMutasi(){
        $id = $_GET['id'];
        $model = new M_Mutasi;
        $process = $model->find(['id_personil' => $id]);
        $rows = array();
        foreach($process as $key => $value){
            $row = array();
            $row[] = $key+1;
            $row[] = $value->tanggal_mutasi;
            $row[] = $value->keterangan;
            $row[] = $value->created_date;
            $rows[] = $row;
            
        }
        echo json_encode(['data' => $rows]);
    }
//    public function Save() {
//        $input = [
//            'no_surat' => $this->Nosurat(),
//            'nama' => $this->input->post('nama', true),
//            'pekerjaan' => $this->input->post('pekerjaan', true),
//            'pangkat' => $this->input->post('pangkat', true),
//            'usulan' => $this->input->post('usulan', true),
//            'berlaku' => $this->input->post('berlaku', true),
//            'n_pangkat' => $this->input->post('n_pangkat', true),
//            'jabatan' => $this->input->post('jabatan', true),
//        ];
//        $data = [
//            'title' => 'Dashboard Mutasi',
//            'logo' => '',
//            'username' => $this->session->userdata('nama'),
//            'peserta' => $input,
//            'csrf' => $this->Csrf()
//        ];
//        $data['content'] = $this->parser->parse('V_mutasiprint', $data, true);
//        return $this->parser->parse('Templates/Template', $data);
//    }

    public function Save() {
        $input = [
            'no_surat' => $this->Nosurat(),
            'nama' => 'PRIYAMBODO',
            'pekerjaan' => 'Perwira Pertama',
            'pangkat' => 'Letnan Satu',
            'usulan' => date('Y-m-d'),
            'berlaku' => date('Y-m-d'),
            'n_pangkat' => 'Perwira Pertama',
            'jabatan' => 'KAPTEN',
        ];
        $data = [
            'title' => 'Dashboard Mutasi',
            'logo' => '',
            'username' => $this->session->userdata('nama'),
            'peserta' => $input,
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_mutasiprint', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

}
