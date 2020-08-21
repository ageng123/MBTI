<?php
class ModelTempatTinggal extends CI_Model{
    protected $table = 'riwayat_tinggal';
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
