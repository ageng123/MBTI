<?php
class ModelRiwayat extends CI_Model{

}
class ModelRiwayatOrganisasi extends CI_Model {

    
    protected $table = 'riwayat_organisasi';
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
class ModalRiwayatPerjuangan extends CI_Model {

    
    protected $table = 'riwayat_cita';
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

class ModelRiwayatPenghargaan extends CI_Model {

    
    protected $table = 'riwayat_penghargaan';
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
class ModelTempatTinggal extends CI_Model {

    
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


