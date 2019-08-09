<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Profil_model');
        $this->load->model('Pelanggan_model');
        $this->load->model('Transaksi_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['karyawan'] = $this->db->get_where('tbpelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');

    }
    public function profil()
    {
        # code...
        $email=$this->session->userdata('email');
        $where=array(
            'email'=>$email
        );
        $user=$this->Pelanggan_model->getPelangganbyEmail($where)->result();

        foreach($user as $usr){
            $nik=$usr->nik;
        }
        $profil=array(
            'nik'=>$nik
        );
        $data['profile']=$this->Transaksi_model->getTransaksiNotification($profil)->result_array();
        $data['karyawan']=$this->Profil_model->profil($where)->result();
        $this->load->view('pelanggan/user-profile.php', $data);
    }
    public function editprofil()
    {
        # code...
        $email=$this->session->userdata('email');
        $where=array(
            'email'=>$email
        );
        $data['karyawan']=$this->Profil_model->profil($where)->result();
        $this->load->view('pelanggan/edit-profil.php', $data);
    }
    function updateprofil()
    {
    $email=$this->session->userdata('email');
    $nama = $this->input->post('nmpelanggan');
    $password = $this->input->post('password');
    $phone = $this->input->post('phone');
    $alamat = $this->input->post('alamat');
 
    $data = array(
        'nama' => $nama,
        'password' => $password,
        'no_telepon' => $phone,
        'alamat' => $alamat
    );
 
    $where = array(
        'email' => $email
    );
 
            $this->db->set('nama', $nama);
            $this->db->set('no_telepon', $phone);

            $this->db->set('alamat', $alamat);
            $this->db->where('email', $email);
            $this->db->update('tbpelanggan');

    echo "<script>alert('Data Berhasil di update');history.go(-2);</script>";
    }
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $karyawan = $this->db->get_where('tbpelanggan', ['email' => $email])->row_array();

        //jika karyawannya ada
        if ($karyawan) {
            //jika karyawannya aktif
            if ($karyawan['aktif'] == 1) {
                //cek password
                if (password_verify($password, $karyawan['password'])) {
                    $data = [
                        'email' => $karyawan['email'],
                        'id_jabatan' => $karyawan['id_jabatan'],
                        'nik' => $karyawan['nik']
                    ];
                    $this->session->set_userdata($data);
                    if ($karyawan['id_jabatan'] == 3) {
                        redirect('index');
                    } else {
                         $this->load->view('pelanggan/login');;
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    $this->load->view('pelanggan/login');;
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                 $this->load->view('pelanggan/login');;
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered!</div>');
             $this->load->view('pelanggan/login');;
        }
    }

}
?>