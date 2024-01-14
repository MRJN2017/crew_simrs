<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login(true);
        $this->load->model('User_Model', 'user');

    }

    public function index()
    {
        $this->load->view('login');
    }
    
    public function registration()
    {
        $this->load->view('regis');
    }

    public function addAccount()
    {
        $post = $this->input->post();
        $data = [
            'id' => '',
            'nama' => $post['nama'],
            'username' => $post['username'],
            'password' => password_hash($post['password'], PASSWORD_DEFAULT),
            'level' => "crew",
        ];
        $result = $this->user->insert_data($data);
        if($result){
            redirect('auth');
        }
    }
    



    public function login()
    {
        $this->load->model('User_Model', 'user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $check = $this->user->find_by('username', $username, false);
        if ($check->num_rows() == 1) {
            $user_data = $check->row();
            $verify_password = password_verify($password, $user_data->password);

            if ($verify_password) {
                $this->set_session($user_data);
                redirect('dashboard');
            } else {
                $this->error('Login gagal! <br>Password tidak sesuai');
            }
        } else {
            $this->error('Login gagal! <br>User tidak ditemukan');
        }

        redirect('auth');
    }

    private function set_session($user_data)
    {
        $this->session->set_userdata([
            'id_user' => $user_data->id_user,
            'nama' => $user_data->nama,
            'username' => $user_data->username,
            'level' => $user_data->level,
            'is_login' => true
        ]);

        $this->session->set_flashdata('response', [
            'status' => 'success',
            'message' => 'Selamat Datang ' . $user_data->nama
        ]);
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
