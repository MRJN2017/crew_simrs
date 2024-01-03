<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Patroli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Patroli_Model', 'patroli');
    }

    public function index()
    {
        return $this->template->load('template', 'patroli');
    }

    public function form_penanganan(){
        $data['divisi'] = $this->patroli->get_divisi();
        return $this->template->load('template', 'penanganan', $data);

    }

    public function laporan()
    {
        $data['patroli'] = $this->patroli->get_all();
        return $this->template->load('template', 'list_laporan', $data);
    }

    public function store()
    {

        $post = $this->input->post();
        $cek_tgl = $this->patroli->cek_tanggal($post['tgl']);
        if ($cek_tgl <= 0) {
            $poli = (count($_POST['poli']) > 0) ? implode('-', $_POST['poli']) : "";
            $loket = (count($_POST['loket']) > 0) ? implode('-', $_POST['loket']) : "";
            $igd = (count($_POST['igd']) > 0) ? implode('-', $_POST['igd']) : "";
            $josep1 = (count($_POST['josep1']) > 0) ? implode('-', $_POST['josep1']) : "";
            $farmasi = (count($_POST['farmasi']) > 0) ? implode('-', $_POST['farmasi']) : "";
            // perlu dilakukan pengecekan tanggal 
            switch (isset($poli)) {
                case 1:
                    $data = [
                        'tanggal' => $post['tgl'],
                        'unit' => 'POLI',
                        'hasil_cek' => $poli,
                        'ket' => $post['ket_poli'],
                    ];
                    $result = $this->patroli->insert_data($data);
                    break;
                default:
                    break;
            }
            switch (isset($loket)) {
                case 1:
                    $data2 = [
                        'tanggal' => $post['tgl'],
                        'unit' => 'LOKET',
                        'hasil_cek' => $loket,
                        'ket' => $post['ket_loket'],
                    ];
                    $result = $this->patroli->insert_data($data2);
                    break;
                default:
                    break;
            }
            switch (isset($igd)) {
                case 1:
                    $data2 = [
                        'tanggal' => $post['tgl'],
                        'unit' => 'IGD',
                        'hasil_cek' => $igd,
                        'ket' => $post['ket_igd'],
                    ];
                    $result = $this->patroli->insert_data($data2);
                    break;
                default:
                    # code...
                    break;
            }
            switch (isset($josep1)) {
                case 1:
                    $data2 = [
                        'tanggal' => $post['tgl'],
                        'unit' => 'KAMAR OPERASI',
                        'hasil_cek' => $josep1,
                        'ket' => $post['ket_josep1'],
                    ];
                    $result = $this->patroli->insert_data($data2);
                    break;
                default:
                    # code...
                    break;
            }
            switch (isset($farmasi)) {
                case 1:
                    $data2 = [
                        'tanggal' => $post['tgl'],
                        'unit' => 'FARMASI',
                        'hasil_cek' => $farmasi,
                        'ket' => $post['ket_farmasi'],
                    ];
                    $result = $this->patroli->insert_data($data2);
                    break;
                default:
                    break;
            }

            if ($result) {
                $response = [
                    'status' => 'success',
                    'message' => 'Data Patroli telah ditambahkan!'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Data Patroli gagal ditambahkan'
                ];
            }
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Patroli pada tanggal ' . date('d-m-Y', $post['tgl'] . 'sudah ada !')
            ];
        }
        $this->session->set_flashdata('response', $response);
        redirect('patroli');
    }

    public function excel_hasil_patroli()
    {
        $hasil = $this->patroli->get_all();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Tanggal');
        $sheet->setCellValue('C1', 'Unit Poli');
        $sheet->setCellValue('D1', 'Hasil Cek Poli');
        $sheet->setCellValue('E1', 'Keterangan Poli');

        $sheet->setCellValue('F1', 'Unit Loket');
        $sheet->setCellValue('G1', 'Hasil Cek Loket');
        $sheet->setCellValue('H1', 'Keterangan Loket');

        $sheet->setCellValue('I1', 'Unit IGD');
        $sheet->setCellValue('J1', 'Hasil Cek IGD');
        $sheet->setCellValue('K1', 'Keterangan IGD');

        $sheet->setCellValue('L1', 'Unit Farmasi');
        $sheet->setCellValue('M1', 'Hasil Cek Farmasi');
        $sheet->setCellValue('N1', 'Keterangan Farmasi');

        $sheet->setCellValue('O1', 'Unit Kamar Operasi');
        $sheet->setCellValue('P1', 'Hasil Cek Kamar Operasi');
        $sheet->setCellValue('Q1', 'Keterangan PoKamar Operasili');

        $no = 1;
        $x = 2;
        foreach ($hasil as $row) {
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $row->tanggal);
            $sheet->setCellValue('C' . $x, $row->unit_poli);
            $sheet->setCellValue('D' . $x, $row->hasil_cek_poli, ' Aman');
            $sheet->setCellValue('E' . $x, $row->ket_poli);

            $sheet->setCellValue('F' . $x, $row->unit_loket);
            $sheet->setCellValue('G' . $x, $row->hasil_cek_loket, ' Aman');
            $sheet->setCellValue('H' . $x, $row->ket_loket);

            $sheet->setCellValue('I' . $x, $row->unit_igd);
            $sheet->setCellValue('J' . $x, $row->hasil_cek_igd, ' Aman');
            $sheet->setCellValue('K' . $x, $row->ket_loket);

            $sheet->setCellValue('L' . $x, $row->unit_farmasi);
            $sheet->setCellValue('M' . $x, $row->hasil_cek_farmasi, ' Aman');
            $sheet->setCellValue('N' . $x, $row->ket_farmasi);

            $sheet->setCellValue('O' . $x, $row->unit_operasi);
            $sheet->setCellValue('P' . $x, $row->hasil_cek_operasi, ' Aman');
            $sheet->setCellValue('Q' . $x, $row->ket_operasi);
            $x++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'laporan_Hasil_Patroli';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
