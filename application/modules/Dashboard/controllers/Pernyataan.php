<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Pernyataan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model('M_Pernyataan');
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
            'title' => 'Dashboard application',
            'logo' => 'https://cdn.maspriyambodo.com/images/mp_logo.png',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Pernyataan->index(),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_Pernyataan', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

    public function Petunjuk() {
        $data = [
            'title' => 'Persetujuan dan Petunjuk Pengisian Clearance Test',
            'logo' => 'https://cdn.maspriyambodo.com/images/mp_logo.png',
            'username' => $this->session->userdata('nama'),
            'provinsi' => $this->M_Pernyataan->Provinsi(),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_Pernyataanpetunjuk', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

//    public function Add() {
//        $kodemasuk = $this->Dec($this->input->post('agreement', true));
//        if ($kodemasuk == 86) {
//            $data = [
//                'title' => 'Tambah surat pernyataan',
//                'logo' => 'https://cdn.maspriyambodo.com/images/mp_logo.png',
//                'username' => $this->session->userdata('nama'),
//                'provinsi' => $this->M_Pernyataan->Provinsi(),
//                'csrf' => $this->Csrf()
//            ];
//            $data['content'] = $this->parser->parse('V_Pernyataanadd', $data, true);
//            return $this->parser->parse('Templates/Template', $data);
//        } else {
//            redirect(base_url('Dashboard/Pernyataan/Petunjuk/'), $this->session->set_flashdata('error', 'Anda belum membaca Pernyataan dan Petunjuk Pengisian Clearance Test !'));
//        }
//    }

    public function Add() {
        $data = [
            'title' => 'Tambah surat pernyataan',
            'username' => $this->session->userdata('nama'),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_Pernyataanadd', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

    public function Save() {
        $config['upload_path'] = './assets/images/personil';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $this->input->post('fotos', true) . date('Y_m_d_H:i:s');
        $config['maintain_ratio'] = true;
        $config['file_ext_tolower'] = true;
        $config['remove_spaces'] = true;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('fotos')) {
            redirect(base_url('Dashboard/Pernyataan/Petunjuk/'), $this->session->set_flashdata('error', 'Gagal upload foto !'));
        } else {
            $foto = $this->upload->data();
            $data = [
                'data_diri' => [
                    'data_diri.nama' => $this->input->post('nama', true),
                    'data_diri.agama' => $this->input->post('tmp_lahir', true),
                    'data_diri.tmp_lahir' => $this->input->post('tmp_lahir', true),
                    'data_diri.alamat' => $this->input->post('alamat', true),
                    'data_diri.j_k' => $this->input->post('j_k', true),
                    'data_diri.tgl_lahir' => $this->input->post('tgl_lahir', true),
                    'data_diri.telepon' => $this->input->post('telepon', true),
                    'data_diri.foto' => $foto['file_name'],
                    'data_diri.stat' => 1
                ],
                'data_pekerjaan' => [
                    'data_pekerjaan.kesatuan' => $this->input->post('kesatuan_instansi', true),
                    'data_pekerjaan.pekerjaan' => $this->input->post('gawe', true),
                    'data_pekerjaan.pangkat' => $this->input->post('pgnn', true)
                ]
            ];
            $this->M_Pernyataan->Save($data);
        }
    }

    public function Detail($id) {
        $id_anggota = $this->Dec($id);
        $data = [
            'title' => 'Dashboard application',
            'logo' => 'https://cdn.maspriyambodo.com/images/mp_logo.png',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Pernyataan->Detail($id_anggota),
            'csrf' => $this->Csrf()
        ];
        $data['content'] = $this->parser->parse('V_Pernyataandetail', $data, true);
        return $this->parser->parse('Templates/Template', $data);
    }

    public function Print($id) {
        $id_anggota = $this->Dec($id);
        $data = [
            'title' => 'Print',
            'logo' => 'https://cdn.maspriyambodo.com/images/mp_logo.png',
            'username' => $this->session->userdata('nama'),
            'peserta' => $this->M_Pernyataan->Detail($id_anggota),
            'csrf' => $this->Csrf()
        ];
        return $this->parser->parse('V_Pernyataanprint', $data);
    }
    public function Print_id(){
        $id = decode($_GET['SESSION_ID']);
        $data = [
            'id_anggota' => $id
        ];
        return $this->parser->parse('V_idprint', $data);
    }

}
