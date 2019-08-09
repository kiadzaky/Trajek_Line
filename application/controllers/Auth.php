<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        # code...
         if ($this->session->userdata('email')) {
            redirect('karyawan');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasinya success
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $karyawan = $this->db->get_where('tbkaryawan', ['email' => $email])->row_array();

        //jika karyawannya ada
        if ($karyawan) {
            //jika karyawannya aktif
            if ($karyawan['aktif'] == 1) {
                //cek password
                if (password_verify($password, $karyawan['password'])) {
                    $data = [
                        'email' => $karyawan['email'],
                        'id_jabatan' => $karyawan['id_jabatan'],
                        'nip' => $karyawan['nip']
                    ];
                    $this->session->set_userdata($data);
                    if ($karyawan['id_jabatan'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('karyawan');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_jabatan');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out!</div>');
        redirect('index');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
