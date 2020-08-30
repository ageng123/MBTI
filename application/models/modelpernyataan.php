<?php
class modelpernyataan extends CI_Model {

    public $nama, 
    $nick, 
    $no_identitas, 
    $j_k, 
    $tmp_lahir, 
    $tgl_lahir,
    $suku,
    $kewarganegaraan, 
    $cara_kewarganegaraan, 
    $agama, 
    $agama_sebelumnya, 
    $aliran, 
    $alamat, 
    $telepon, 
    $hobi, 
    $kebiasaan, 
    $bahasa, 
    $foto, 
    $stat,
    $syscreatedate;
    protected $table = 'data_diri';
    protected $primaryKey = 'id';
    public function __construct()
    {
       $this->syscreatedate = date('Y-m-d H:i:s');
    }
    public function save()
    {
        return $this->db->insert($this->table, $this);
    }
    public function lastId()
    {
        return $this->db->insert_id();
    }
    public function update($id, $data){
        return $this->db->update($this->table, $data, $id);
    }

}
class model_personal extends CI_Model{
    protected $table = 'data_pekerjaan';
    protected $primaryKey = 'id';
    public function save()
    {
        return $this->db->insert($this->table, $this);
    }
}
class ModelPernikahan extends CI_Model {

    
    protected $table = 'data_pasangan';
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
class ModelAyahKandung extends CI_Model {

    
    protected $table = 'tb_ayahkandung';
    protected $primaryKey = 'id_ayahkandung';
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
class ModelAyahTiri extends CI_Model {

    
    protected $table = 'ayah_tiri';
    protected $primaryKey = 'id_ayahtiri';
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
class ModelIbuKandung extends CI_Model {

    
    protected $table = 'ibu_kandung';
    protected $primaryKey = 'id_ayahtiri';
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
class ModelIbuTiri extends CI_Model {

    
    protected $table = 'ibu_tiri';
    protected $primaryKey = 'id_ayahtiri';
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
class ModelMertuaLaki extends CI_Model {

    
    protected $table = 'mertua_laki';
    protected $primaryKey = 'id_ayahtiri';
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
class ModelMertuaPerempuan extends CI_Model {

    
    protected $table = 'mertua_perempuan';
    protected $primaryKey = 'id_ayahtiri';
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
