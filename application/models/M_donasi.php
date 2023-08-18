<?php

class M_donasi extends CI_Model {
    public function getAllUser()
    {
        return $this->db->get('donasi')->result_array();
    }
}