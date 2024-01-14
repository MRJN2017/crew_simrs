<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobdesk extends CI_Controller
{
    public function __construct()

    {
        parent::__construct();
        is_login();
        $this->load->model('Jobdesk_Model', 'jobdesk');
    }

    public function index()
    {
        $data['list_user'] = $this->jobdesk->get_all_user();

        return $this->template->load('template', 'list_user', $data);
    }

    public function list_job()
    {
        $data['tugas'] = $this->jobdesk->get_all();
        return $this->template->load('template', 'list_job');
    }

    public function list_jobById(){
        $id_user = $this->uri->segment(3);
        $data['listUserById'] = $this->jobdesk->gerByID($id_user);
        return $this->template->load('template', 'list_job', $data);

    }

    public function form_penanganan(){
        $data['divisi'] = $this->jobdesk->get_divisi();
        return $this->template->load('template', 'penanganan', $data);

    }

    public function save_report() {
        $post = $this->input->post();

        $id = (string) $_SESSION['id_user'];

        $data = [
            'id_tugas' => '',
            'id_user' => $id,
            'tanggal' => $post['tgl'],
            'id_divisi' => $post['name_divisi'],
            'nama_pelapor' => $post['nama_pelapor'],
            'tugas' => $post['ket'],
        ];
        $result = $this->jobdesk->save_report($data);
         
        if($result){
            $response = [
                'status' => 'success',
                'message' => 'Data berhasil Ditambahkan!'
            ];

        }

        $this->session->set_flashdata('response', $response);
        redirect('jobdesk/form_penanganan');

    }

    public function store()
    {
        $index_tugas = $this->input->post('nama_divisi');
        $result = $this->jobdesk->insert_data(['tugas' => $index_tugas]);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Kerjaan berhasil ditambahkan!',
                'data' => $result
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Kerjaan gagal ditambahkan!'
            ];
        }

        return $this->response_json($response);
    }

    private function error($msg)
    {
        $this->session->set_flashdata('error', $msg);
    }
    
    public function response_json($response)
    {
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
