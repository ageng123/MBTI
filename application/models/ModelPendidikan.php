<?php
class ModelPendidikan extends CI_Model{

}
class ModelPendidikanUmum extends CI_Model {

    
    protected $table = 'pendidikan_umum';
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
class ModelPendidikanDinas extends CI_Model {

    
    protected $table = 'pendidikan_kedinasan';
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
class ModelPendidikanLain extends CI_Model {

    
    protected $table = 'pendidikan_lain';
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

