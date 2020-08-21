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

}
class model_personal extends CI_Model{
    protected $table = 'personal_information';
    protected $primaryKey = 'id';
    public function save()
    {
        var_dump($this);
    }
}
