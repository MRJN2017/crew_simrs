<?php
defined('BASEPATH') or die('No direct script access allowed');

class Patroli_Model extends CI_Model
{
    public function get_all()
    {
        $this->db->select("DATE_FORMAT(a.tanggal, '%d-%m-%Y') AS tanggal,
        a.unit AS unit_poli,
        a.hasil_cek as hasil_cek_poli,
        a.ket as ket_poli,
        
        (SELECT b.unit FROM patroli b WHERE b.unit='LOKET' AND b.tanggal = a.tanggal) as unit_loket,
        (SELECT c.hasil_cek FROM patroli c WHERE c.unit='LOKET' AND c.tanggal = a.tanggal) as hasil_cek_loket,
        (SELECT d.hasil_cek FROM patroli d WHERE d.unit='LOKET' AND d.tanggal = a.tanggal) as ket_loket,
        
        (SELECT f.unit FROM patroli f WHERE f.unit='IGD' AND f.tanggal = a.tanggal) as unit_igd,
        (SELECT g.hasil_cek FROM patroli g WHERE g.unit='IGD' AND g.tanggal = a.tanggal) as hasil_cek_igd,
        (SELECT h.hasil_cek FROM patroli h WHERE h.unit='IGD' AND h.tanggal = a.tanggal) as ket_igd,
        
        (SELECT i.unit FROM patroli i WHERE i.unit='FARMASI' AND i.tanggal = a.tanggal) as unit_farmasi,
        (SELECT j.hasil_cek FROM patroli j WHERE j.unit='FARMASI' AND j.tanggal = a.tanggal) as hasil_cek_farmasi,
        (SELECT k.hasil_cek FROM patroli k WHERE k.unit='FARMASI' AND k.tanggal = a.tanggal) as ket_farmasi,

        (SELECT l.unit FROM patroli l WHERE l.unit='KAMAR OPERASI' AND l.tanggal = a.tanggal) as unit_operasi,
        (SELECT m.hasil_cek FROM patroli m WHERE m.unit='KAMAR OPERASI' AND m.tanggal = a.tanggal) as hasil_cek_operasi,
        (SELECT n.hasil_cek FROM patroli n WHERE n.unit='KAMAR OPERASI' AND n.tanggal = a.tanggal) as ket_operasi,

        ");
        $this->db->where("a.unit='POLI'");
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

    public function get_divisi(){
        $result = $this->db->get('divisi');
        return $result->result();
    }
}
