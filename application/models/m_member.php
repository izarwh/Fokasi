<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_member extends CI_Model
{
    public function getprofile($username)
    {
        $query = $this->db->where('username', $username)->get('tb')->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    public function setprofile($data)
    {
    }
}
