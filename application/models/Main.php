<?php
class Main extends CI_Model{
    
}
class No_Surat extends CI_Model{
    protected $table = 'no_surat';
    public function getLastNoSurat($params){
        return $this->db->where($params)->get($this->table)->row_object();
    }
    public function saveNoSurat($params){
        $this->db->where($params)->update($this->table, $this);
        return;
    }
}
?>