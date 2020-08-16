<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Pernyataan extends CI_Model {

    function index() {
        $exec = $this->db->select('data_diri.nama,data_diri.id, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan,')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id', 'INNER')
                ->where('`data_diri`.`stat`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

    function Detail($id) {
        $exec = $this->db->select('data_diri.id, data_diri.nama, data_diri.nick, data_diri.no_identitas, data_diri.j_k, data_diri.tmp_lahir, data_diri.tgl_lahir, data_diri.suku, data_diri.kewarganegaraan, data_diri.cara_kewarganegaraan, data_diri.agama, data_diri.agama_sebelumnya, data_diri.aliran, data_diri.alamat AS alamat_peserta, data_diri.telepon, data_diri.hobi, data_diri.kebiasaan, data_diri.bahasa, data_diri.foto, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id', 'INNER')
                ->where('`data_diri`.`stat`', 1, false)
                ->where('`data_diri`.`id`', $id, false)
                ->get()
                ->result();
        return $exec;
    }

    function Save($data) {
        $this->db->trans_begin();
        $this->db->insert('data_diri', $data['data_diri']);
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $msg = [
                'msg' => 'error while saving data diri'
            ];
            log_message('error', 'error while saving data diri');
            return $msg;
        } else {
            $this->db->trans_commit();
            $this->Save_2($data);
        }
    }

    private function Save_2($data) {
        $id = $this->db->select('MAX(data_diri.id) AS id_anggota')
                ->from('data_diri')
                ->get()
                ->result();
        $this->db->trans_begin();
        $this->db->set([
            'data_pekerjaan.id' => $id[0]->id_anggota,
            'data_pekerjaan.kesatuan' => $data['data_pekerjaan']['data_pekerjaan.kesatuan'],
            'data_pekerjaan.pekerjaan' => $data['data_pekerjaan']['data_pekerjaan.pekerjaan'],
            'data_pekerjaan.pangkat' => $data['data_pekerjaan']['data_pekerjaan.pangkat']
        ]);
        $this->db->insert('data_pekerjaan');
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            log_message('error', 'error while saving data pekerjaan');
            return redirect(base_url('Dashboard/Pernyataan/index/'), $this->session->set_flashdata('error', 'Data gagal disimpan !'));
        } else {
            $this->db->trans_commit();
            return redirect(base_url('Dashboard/Pernyataan/index/'), $this->session->set_flashdata('message', 'Data berhasil disimpan !'));
        }
    }

}
