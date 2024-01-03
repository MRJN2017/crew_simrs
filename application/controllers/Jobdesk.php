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
