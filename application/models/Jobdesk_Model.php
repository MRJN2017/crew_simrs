<?php
defined('BASEPATH') or die('No direct script access allowed');

class Jobdesk_Model extends CI_Model
{
    public function get_all()
    {
        $result = $this->db->get('tugas');
        return $result->result();
    }

    public function insert_data($data)
    {
        $result = $this->db->insert('tugas', $data);
        return $result;
    }

    public function save_report($data) {
        // Insert data into the database
        $this->db->insert('tugas', $data); // Replace 'your_table' with the actual table name
    }


    public function delete_data($id)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->delete('tugas');
        return $result;
    }

    public function get_divisi(){
        $result = $this->db->get('divisi');
        return $result->result();
    }
}
