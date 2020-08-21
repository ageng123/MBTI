<?php
class ModelRiwayatPekerjaan extends CI_Model{
    protected $table = 'riwayat_pekerjaan';
    protected $primaryKey = 'id';
    public function __construct()
    {
       $this->last_update = date('Y-m-d H:i:s');
    }
    public function save()
    {
        return $this->db->insert($this->table, $this);
    }
    public function lastId()
    {
        return $this->db->insert_id();
    }

}
class ModelRiwayatPekerjaanDinas extends CI_Model{
    protected $table = 'data_pekerjaan_luardinas';
    protected $primaryKey = 'id';
    public function __construct()
    {
       $this->last_update = date('Y-m-d H:i:s');
    }
    public function save()
    {
        return $this->db->insert($this->table, $this);
    }
    public function lastId()
    {
        return $this->db->insert_id();
    }

}
