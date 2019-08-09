<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    function profil()
    {
        redirect('admin/index');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function jabatan()
    {
        $data['title'] = 'Jabatan';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $data['jabatan'] = $this->db->get('tbjabatan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/jabatan', $data);
        $this->load->view('templates/footer');
    }

    public function jabatanAccess($id_jabatan)
    {
        $data['title'] = 'Jabatan Access';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $data['jabatan'] = $this->db->get_where('tbjabatan', ['id_jabatan' => $id_jabatan])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('tb_user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/jabatan-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $Id_jabatan = $this->input->post('Idjabatan');

        $data = [
            'id_jabatan' => $Id_jabatan,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('tb_user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('tb_user_access_menu', $data);
        } else {
            $this->db->delete('tb_user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Access Changed!</div>');
    }

    public function karyawan()
    {
        $data['title'] = 'Data Karyawan';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Karyawan_model', 'karyawan');
        $data['kwn'] = $this->karyawan->getKaryawan();
        $data['jabatan'] = $this->db->get('tbjabatan')->result_array();

        $this->form_validation->set_rules('nip', 'Nip', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbkaryawan.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat Rumah', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/karyawan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'foto' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_jabatan' => 2,
                'aktif' => 1,
            ];
            $this->db->insert('tbkaryawan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! you account has been created!</div>');
            redirect('admin/karyawan');
        }
    }

    public function editkaryawan($nip)
    {
        $data['title'] = "Edit Karyawan";
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Karyawan_model', 'karyawan');
        $where = array('nip' => $nip);
        $datas['karyawan'] = $this->karyawan->getKaryawanByNip($where, 'tbkaryawan')->result();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editkaryawan', $datas);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been updated!</div>');
            redirect('admin/karyawan');
        }
    }
    public function update_karyawan()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat' => $this->input->post('alamat'),
        ];
        $where = array('nip' => $this->input->post('nip'));
        $this->db->where($where);
        $this->db->update('tbkaryawan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been updated!</div>');
        redirect('admin/karyawan');
    }
    public function hapuskaryawan($where)
    {
        $this->db->delete('tbkaryawan', array("nip" => $where));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been DELETED!!!!</div>');
        redirect('admin/karyawan');
    }
    public function cariKaryawan()
    {
        $data['title'] = 'Data Karyawan';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Karyawan_model', 'karyawan');
        $data['kwn'] = $this->karyawan->cariDataKaryawan();
        $data['jabatan'] = $this->db->get('tbjabatan')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/karyawan', $data);
        $this->load->view('templates/footer');
    }

    public function barang()
    {
        $data['title'] = ' Data Barang';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Barang_model', 'barang');

        $data['barang'] = $this->barang->getBarang();
        $data['kode_otomatis'] = $this->barang->buat_kode();
        $data['kategori'] = $this->db->get('tbkategori')->result_array();

        $this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('nopol', 'nopol', 'required');
        $this->form_validation->set_rules('merk', 'merk', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/barang', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path'] = './assets/img/barang/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $image = $this->upload->data('file_name');
                $this->db->set('gambar', $image);
            } else {
                echo $this->upload->display_errors();
            }

            $data = [
                'id_barang' => $this->input->post('id_barang'),
                'id_kategori' => $this->input->post('kategori'),
                'nopol' => $this->input->post('nopol'),
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'gambar' => $image,
                'tahun' => $this->input->post('tahun'),
                'warna' => $this->input->post('warna'),
                'harga' => $this->input->post('harga'),
                'status' => $this->input->post('status'),
                'penjelasan' => $this->input->post('keterangan'), //keterangan ini name di view
                'spesifikasi' => $this->input->post('spesifikasi'),
            ];
            $this->db->insert('tbbarang', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New goods added!</div>');
            redirect('admin/barang');
        }
    }
    public function editbarang($id_barang)
    {
        $data['title'] = "Edit Barang";
        $data['kategori'] = $this->db->get('tbkategori')->result_array();
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Barang_model', 'barang');
        $where = array('id_barang' => $id_barang);
        print_r($where);
        $datas['barang'] = $this->barang->getBarangById($where, 'tbbarang')->result();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editbarang', $datas);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your goods has been updated!</div>');
            redirect('admin/barang');
        }
    }
    public function update_barang()
    {
        $data['title'] = 'Edit Barang';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $id_barang = $this->input->post('id_barang');
        $id_kategori = $this->input->post('id_kategori');
        $nopol = $this->input->post('nopol');
        $merk = $this->input->post('merk');
        $jenis = $this->input->post('jenis');
        $kapasitas = $this->input->post('kapasitas');
        $tahun = $this->input->post('tahun');
        $warna = $this->input->post('warna');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');

        //cek jika ada foto yang akan diupload
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['upload_path'] = './assets/img/barang/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['barang']['gambar'];
                if ($old_image != $old_image) {
                    unlink(FCPATH . 'assets/img/barang/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('id_kategori', $id_kategori);
        $this->db->set('nopol', $nopol);
        $this->db->set('merk', $merk);
        $this->db->set('jenis', $jenis);
        $this->db->set('kapasitas', $kapasitas);
        $this->db->set('tahun', $tahun);
        $this->db->set('warna', $warna);
        $this->db->set('harga', $harga);
        $this->db->where('id_barang', $id_barang);
        $this->db->update('tbbarang');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your category has been updated!</div>');
        redirect('admin/barang');
    }
    public function hapusbarang($where)
    {
        $this->db->delete('tbbarang', array("id_barang" => $where));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your goods has been deleted!!!!</div>');
        redirect('admin/barang');
    }
    public function cariBarang()
    {
        $data['title'] = 'Data Barang';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Barang_model', 'barang');
        $data['barang'] = $this->barang->cariDataBarang();
        $data['kategori'] = $this->db->get('tbkategori')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/barang', $data);
        $this->load->view('templates/footer');
    }

    public function kategori()
    {
        $data['title'] = 'Kategori';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $data['kategori'] = $this->db->get('tbkategori')->result_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('tbkategori', ['kategori' => $this->input->post('kategori')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New category added!</div>');
            redirect('admin/kategori');
        }
    }

    public function editkategori($id_kategori)
    {
        $data['title'] = "Edit Kategori";
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Kategori_model', 'kategori');
        $where = array('id_kategori' => $id_kategori);
        $datas['kategori'] = $this->kategori->getKategoriById($where, 'tbkategori')->result();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editkategori', $datas);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your category has been updated!</div>');
            redirect('admin/kategori');
        }
    }
    public function update_kategori()
    {
        # code...
        $data = [
            'id_kategori' => $this->input->post('id_kategori'),
            'kategori' => $this->input->post('kategori'),
        ];
        $where = array('id_kategori' => $this->input->post('id_kategori'));
        $this->db->where($where);
        $this->db->update('tbkategori', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your category has been updated!</div>');
        redirect('admin/kategori');
    }
    public function hapuskategori($where)
    {
        $this->db->delete('tbkategori', array("id_kategori" => $where));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your category has been deleted!!!!</div>');
        redirect('admin/kategori');
    }
    public function krisan()
    {
        $data['title'] = ' Kritik & Saran';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelanggan'] = $this->db->get_where('tbpelanggan', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->model('Krisan_model', 'krisan');

        $data['nik'] = $this->krisan->getKrisan();
        $data['krisan'] = $this->db->get('tbkritiksaran')->result_array();

        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('kritik_saran', 'Kritik & Saran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/krisan', $data);
            $this->load->view('templates/footer');
        } else {

            redirect('admin/krisan');
        }
    }
    public function hapuskrisan($where)
    {
        $this->db->delete('tbkritiksaran', array("id_saran_kritik" => $where));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your comments has been deleted!!!!</div>');
        redirect('admin/krisan');
    }
    public function cariKategori()
    {
        $data['title'] = 'Kategori';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kategori_model', 'kategori');
        $data['kategori'] = $this->kategori->cariDataKategori();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kategori', $data);
        $this->load->view('templates/footer');
    }

    public function laporan()
    {
        $data['title'] = ' Laporan Transaksi';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Laporan_model', 'laporan');

        $data['id_pemesanan'] = $this->laporan->getLaporan();
        $data['laporan'] = $this->laporan->getLaporan();

        $this->form_validation->set_rules('id_transaksi', 'Id Transaksi', 'required');
        $this->form_validation->set_rules('id_pemesanan', 'Id Pemesanan', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('bayar', 'Bayar', 'required');
        $this->form_validation->set_rules('kembali', 'Kembali', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/laporan', $data);
            $this->load->view('templates/footer');
        } else {

            redirect('admin/laporan');
        }
    }
}
