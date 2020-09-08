<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Datafisik extends CI_Model {

    function index() {
        $exec = $this->db->select('data_diri.nama,data_diri.id, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_diri.foto, data_pekerjaan.pangkat, data_pekerjaan.kesatuan,')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id_personil', 'LEFT')
                ->where('`data_diri`.`is_active`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

    function Detail($id) {
        $exec = $this->db->select('data_diri.id, data_diri.nama, data_diri.nick, data_diri.no_identitas, data_diri.j_k, data_diri.tmp_lahir, data_diri.tgl_lahir, data_diri.suku, data_diri.kewarganegaraan, data_diri.cara_kewarganegaraan, data_diri.agama, data_diri.agama_sebelumnya, data_diri.aliran, data_diri.alamat AS alamat_peserta, data_diri.telepon, data_diri.hobi, data_diri.kebiasaan, data_diri.bahasa, data_diri.foto, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id', 'LEFT')
                ->where('`data_diri`.`is_active`', 1, false)
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
            return redirect(base_url('Dashboard/Datafisik/index/'), $this->session->set_flashdata('error', 'Data gagal disimpan !'));
        } else {
            $this->db->trans_commit();
            return redirect(base_url('Dashboard/Datafisik/index/'), $this->session->set_flashdata('message', 'Data berhasil disimpan !'));
        }
    }
    public function save_finger()
    {

    }
    public function save_datafisik()
    {
        $savefinger = [
            'kanan' => $this->save_fingerkanan(),
            'kiri' => $this->save_fingerkiri()
        ];
        $hidung = $this->input->post('hidung');
        $savehidung = [
            'pangkal' => $hidung[1],
            'batang' => $hidung[2],
            'bentuk' => $hidung[3],
            'bengkok' => $hidung[4]
        ];
        $telinga = $this->input->post('Telinga');
        $savetelinga = [
            'menempel' => $telinga[1],
            'bentuk' => $telinga[2]
        ];
        $output = [
            'finger' => $savefinger,
            'hidung' => $savehidung,
            'telinga' => $savetelinga,
        ];
        $this->id_personil = decode($_GET['session_id']);
        $this->hidung = implode('/', $savehidung);
        $this->telinga = implode('/', $savetelinga);
        $this->tempat = $this->input->post('tempat');
        $this->tanggal = $this->input->post('tanggal');
        $this->lembaga = $this->input->post('lembaga');
        $this->langkah = $this->input->post('langkah');
        $this->kaki = $this->input->post('kaki');
        $this->lengan = $this->input->post('tangan');
        $this->bangun_kepala = $this->input->post('kepala');
        $this->rambut = $this->input->post('rambut');
        $this->kening = $this->input->post('kening');
        $this->dahi = $this->input->post('dahi');
        $this->mata = $this->input->post('mata');
        $this->bibir = $this->input->post('bibir');
        $this->tanda_istimewa = $this->input->post('tandaistimewa');
        $this->nama_anak = $this->input->post('anak');
        $this->last_update = date('Y-m-d H:i:s');
        $save = M_Datafisik::saveData($this);
        var_dump($save);
    }
    static function saveData($data){
        $ci =& get_instance();
        $insert = $ci->db->insert('tb_datafisik', $data);
        if($insert):
            return TRUE;
        endif;
        return FALSE;
        
    }
    private function save_fingerkanan()
    {
        $data = $this->input->post('kanan');
        $proses = [
            'jempol' => $data[1],
            'telunjuk' => $data[2],
            'jari_tengah' => $data[3],
            'jari_manis' => $data[4],
            'kelingking' => $data[5]
        ];
        return $proses;
    }
    private function save_fingerkiri()
    {
        $data = $this->input->post('kiri');
        $proses = [
            'jempol' => $data[1],
            'telunjuk' => $data[2],
            'jari_tengah' => $data[3],
            'jari_manis' => $data[4],
            'kelingking' => $data[5]
        ];
        return $proses;
    }

}
