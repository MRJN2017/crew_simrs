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
        return $this->template->load('template', 'list_user');
    }

    public function list_job()
    {

        return $this->template->load('template', 'list_job');
    }

    public function form_penanganan(){
        $data['divisi'] = $this->jobdesk->get_divisi();
        return $this->template->load('template', 'penanganan', $data);

    }

    public function save_report() {
        $post = $this->input->post();
        $data = [
            'id_tugas' => '',
            'id_user' => $post['nama'],
            'nama' => $post['nama'],
            'nama' => $post['nama'],
            'username' => $post['username'],
            'password' => password_hash($post['password'], PASSWORD_DEFAULT),
            'level' => "crew",
        ];
        $this->jobdesk->save_report($data);
        redirect('reportcontroller/index');
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

    private function response_json($response)
    {
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
