<?php
defined('BASEPATH') or die('No direct script access allowed');

class Patroli_Model extends CI_Model
{
    public function get_all()
    {
        $this->db->select("DATE_FORMAT(a.tanggal, '%d-%m-%Y') AS tanggal,
        MAX(CASE WHEN a.unit = 'POLI' THEN a.unit END) AS unit_poli,
        MAX(CASE WHEN a.unit = 'POLI' THEN a.hasil_cek END) AS hasil_cek_poli,
        MAX(CASE WHEN a.unit = 'POLI' THEN a.ket END) AS ket_poli,
        
        MAX(CASE WHEN a.unit = 'LOKET' THEN a.unit END) AS unit_loket,
        MAX(CASE WHEN a.unit = 'LOKET' THEN a.hasil_cek END) AS hasil_cek_loket,
        MAX(CASE WHEN a.unit = 'LOKET' THEN a.ket END) AS ket_loket,
        
        MAX(CASE WHEN a.unit = 'IGD' THEN a.unit END) AS unit_igd,
        MAX(CASE WHEN a.unit = 'IGD' THEN a.hasil_cek END) AS hasil_cek_igd,
        MAX(CASE WHEN a.unit = 'IGD' THEN a.ket END) AS ket_igd,
        
        MAX(CASE WHEN a.unit = 'FARMASI' THEN a.unit END) AS unit_farmasi,
        MAX(CASE WHEN a.unit = 'FARMASI' THEN a.hasil_cek END) AS hasil_cek_farmasi,
        MAX(CASE WHEN a.unit = 'FARMASI' THEN a.ket END) AS ket_farmasi,
    
        MAX(CASE WHEN a.unit = 'KAMAR OPERASI' THEN a.unit END) AS unit_operasi,
        MAX(CASE WHEN a.unit = 'KAMAR OPERASI' THEN a.hasil_cek END) AS hasil_cek_operasi,
        MAX(CASE WHEN a.unit = 'KAMAR OPERASI' THEN a.ket END) AS ket_operasi,
        ");
        $this->db->group_by("tanggal");
        $result = $this->db->get('patroli a');
        return $result->result();
    }
    


    public function cek_tanggal($tgl)
    {
        $this->db->where('tanggal', $tgl);
        $result = $this->db->get('patroli');
        return $result->num_rows();
    }

    public function insert_data($data)
    {
        $result = $this->db->insert('patroli', $data);
        return $result;
    }


}
