<?php

/*
 * Product:        System of kementerian agama Republik Indonesia
 * License Type:   Government
 * Access Type:    Multi-User
 * License:        https://maspriyambodo.com
 * maspriyambodo@gmail.com
 * 
 * Thank you,
 * maspriyambodo
 */

/**
 * Description of M_Mutasi
 *
 * @author centos
 */
class M_Mutasi extends CI_Model {

    public function index() {
        $exec = $this->db->select('data_diri.nama,data_diri.id, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id', 'LEFT')
                ->where('`data_diri`.`is_active`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

    public function Usulan($id) {
        $exec = $this->db->select('data_diri.nama,data_diri.alamat,data_diri.id,data_diri.foto, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan,data_diri.no_identitas, data_diri.tmp_lahir, data_diri.tgl_lahir, data_diri.alamat, data_diri.telepon')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id', 'LEFT')
                ->where('`data_diri`.`is_active`', 1, false)
                ->where('`data_diri`.`id`', $id, false)
                ->get()
                ->result();
        return $exec;
    }

}
