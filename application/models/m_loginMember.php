<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_login extends CI_Model
{
    public function checkusername($username)
    {
        //dari tb_member karena sudah ada pemilihan menu dari awal
        $query = $this->db->where("usernmae", $username)->get("tb_member");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkpass($password)
    {
        $query = $this->db->where("password", $password)->get("tb_member");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function verifyMember($data)
    {
        $username = $data['username'];
        $password = $data['password'];

        if (!$this->checkusername($username) == false) {
            return false;
        } else {
            if (!$this->checkpass($password) == false) {
                return false;
            } else {
                return true;
            }
        }
    }
}
