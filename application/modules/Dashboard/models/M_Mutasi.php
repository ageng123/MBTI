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
    protected $table = 'tb_mutasi';
    public function __construct()
    {
        $this->created_date = date('Y-m-d H:i:s');
    }
    public function index() {
        $exec = $this->db->select('data_diri.nama,data_diri.id, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id_personil', 'LEFT')
                ->where('`data_diri`.`is_active`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

    public function Usulan($id) {
        $exec = $this->db->select('data_diri.nama,data_diri.alamat,data_diri.id,data_diri.foto, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan,data_diri.no_identitas, data_diri.tmp_lahir, data_diri.tgl_lahir, data_diri.alamat, data_diri.telepon')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id_personil', 'LEFT')
                ->where('`data_diri`.`is_active`', 1, false)
                ->where('`data_diri`.`id`', $id, false)
                ->get()
                ->result();
        return $exec;
    }
    public function find($params){
        $runQuery = $this->db->select('*')
                        ->where($params)->get($this->table)->result_object();
        return $runQuery;
    }
    public function save(){
        return $this->db->insert($this->table, $this);
    }
    public function getMutasi($id){
        return $this->db->select('a.*, b.nama')->join('data_diri b', 'a.id_personil = b.id')->where('id_mutasi', $id)->get($this->table.' a')->row_object();
    }

}

class M_Pelanggaran extends CI_Model{
    protected $table = 'tb_pelanggaran';
    public function __construct()
    {
        $this->created_date = date('Y-m-d H:i:s');
    }
    public function index() {
        $exec = $this->db->select('data_diri.nama,data_diri.id, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id_personil', 'LEFT')
                ->where('`data_diri`.`is_active`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

    public function Usulan($id) {
        $exec = $this->db->select('data_diri.nama,data_diri.alamat,data_diri.id,data_diri.foto, data_pekerjaan.nip, data_pekerjaan.pekerjaan, data_pekerjaan.pangkat, data_pekerjaan.kesatuan,data_diri.no_identitas, data_diri.tmp_lahir, data_diri.tgl_lahir, data_diri.alamat, data_diri.telepon')
                ->from('data_diri')
                ->join('data_pekerjaan', 'data_diri.id = data_pekerjaan.id_personil', 'LEFT')
                ->where('`data_diri`.`is_active`', 1, false)
                ->where('`data_diri`.`id`', $id, false)
                ->get()
                ->result();
        return $exec;
    }
    public function find($params){
        $runQuery = $this->db->select('*')
                        ->where($params)->get($this->table)->result_object();
        return $runQuery;
    }
    
    public function save(){
        return $this->db->insert($this->table, $this);
    }
    public function getPelanggaran($id){
        return $this->db->select('a.*, b.nama')->join('data_diri b', 'a.id_personil = b.id')->where('id_pelanggaran', $id)->get($this->table.' a')->row_object();
    }
}