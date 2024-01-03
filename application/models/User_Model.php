<?php
defined('BASEPATH') or die('No direct script access allowed');

class User_Model extends CI_Model
{
    public function get_all()
    {
        $this->db->where('level', 'crew');
        $result = $this->db->get('users');
        return $result->result();
    }

    public function find_by($field, $value, $return = FALSE)
    {
        $this->db->where($field, $value);
        $data = $this->db->get('users');
        if ($return) {
            return $data->row();
        }
        return $data;
    }

    public function insert_data($data){
        $result = $this->db->insert('users', $data);
        return $result;
    }
}
