<?php

/*
 * Product:        Rnet System of PT RTIGA GLOBAL MEDIA
 * License Type:   Corporate
 * Access Type:    Multi-User
 * License:        https://maspriyambodo.com
 * maspriyambodo@gmail.com
 * 
 * Thank you,
 * maspriyambodo
 */
defined('BASEPATH')OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

    function Process($data) {
        $exec = $this->db->select('auth.id, auth.uname, auth.hak_akses,auth.pwd')
                ->from('auth')
                ->where(['auth.uname' => $data['uname'], 'auth.pwd' => sha1($data['pwd'])])
                ->limit(1)
                ->get();
        if ($exec->num_rows() == 1) {
            return $exec->result();
        } else {
            return false;
        }
    }

    function Role_users() {
        $exec = $this->db->select('md_jabatan.id, md_jabatan.jabatan')
                ->from('md_jabatan')
                ->where([
                    '`md_jabatan`.`stat`' => 1 + false,
                    '`md_jabatan`.`id` !=' => 1 + false
                ])
                ->get()
                ->result();
        return $exec;
    }

    function Auth_SU() {
        $exec = $this->db->select('auth.id, auth.uname, auth.hak_akses')
                ->from('auth')
                ->where([
                    'auth.hak_akses' => 1,
                    'auth.uname' => $this->session->userdata('nama'),
                    'auth.id' => $this->session->userdata('id')
                ])
                ->get();
        if ($exec->num_rows() > 0) {
            return true;
        } else {
            redirect(base_url('Auth/index'), 'refresh');
        }
    }

    public function Finance() {
        $finance_id = $this->db->select('md_jabatan.id')->from('md_jabatan')->where('`md_jabatan`.`stat`', 1, false)->like('md_jabatan.jabatan', 'finance')->get()->result();
        $exec = $this->db->select('auth.id, auth.uname, auth.hak_akses')
                ->from('auth')
                ->where([
                    'auth.hak_akses' => $finance_id[0]->id,
                    'auth.uname' => $this->session->userdata('nama'),
                    'auth.id' => $this->session->userdata('id')
                ])
                ->get();
        if ($exec->num_rows() > 0) {
            return true;
        } else {
            redirect(base_url('Auth/index'), 'refresh');
        }
    }

}
