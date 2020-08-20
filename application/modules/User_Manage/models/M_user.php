<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_user extends CI_Model {

    function Get_User() {
        $exec = $this->db->select('auth.id, auth.uname')
                ->select('CASE WHEN `auth`.`stat` = 1 THEN "aktif" END AS `status`', false)
                ->from('auth')
                ->where('`auth`.`id`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

}
