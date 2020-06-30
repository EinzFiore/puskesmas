<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_pendaftaran_model');
        $this->load->model('Pasien');
        $this->load->library('form_validation');
        $this->load->model('Tbl_pasien_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        if($data['user']['id_user_level'] == 8){
            $noRekammedisbaru = $this->noRekammedisOtomatis();
            $data = array(
            'button' => 'Tambah',
            'action' => site_url('dashboard/create_action_form'),
            'no_rekamedis' => set_value('no_rekamedis', $noRekammedisbaru),
            'no_ktp' => set_value('no_ktp'),
            'no_bpjs' => set_value('no_bpjs'),
            'nama_pasien' => set_value('nama_pasien'),
            'jenis_kelamin' => set_value('jenis_kelamin'),
            'tempat_lahir' => set_value('tempat_lahir'),
            'tanggal_lahir' => set_value('tanggal_lahir'),
            'alamat' => set_value('alamat'),
            'status_pasien' => set_value('status_pasien'),
         );
            $data['judul'] = 'Dashboard Pasien';
            $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('front/templates_pasien/header', $data);
            $this->load->view('front/templates_pasien/sidebar', $data);
            $this->load->view('front/pasien/index', $data);
            $this->load->view('front/templates_pasien/footer');
        } else {
            $data['judul'] = 'Dashboard Pasien';
            $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('front/templates_pasien/header', $data);
            $this->load->view('front/templates_pasien/sidebar', $data);
            $this->load->view('front/pasien/index', $data);
            $this->load->view('front/templates_pasien/footer');
        }
    }

    function daftar()
    {
        $noreg = noRegistrasiotomatis();
        $data = array(
        'button' => 'Tambah',
        'action' => site_url('dashboard/create_action'),
        'no_registrasi' => set_value('no_registrasi', $noreg),
        'no_rawat' => set_value('no_rawat'),
        'no_rekamedis' => set_value('no_rekamedis'),
        'tanggal_daftar' => set_value('tanggal_daftar'),
        'kode_dokter_penanggung_jawab' => set_value('kode_dokter_penanggung_jawab'),
        'id_poli' => set_value('id_poli'),
        'nama_penanggung_jawab' => set_value('nama_penanggung_jawab'),
        'hubungan_dengan_penanggung_jawab' => set_value('hubungan_dengan_penanggung_jawab'),
        'alamat_penanggung_jawab' => set_value('alamat_penanggung_jawab'),
        'status_pasien' => set_value('status_pasien'),
        'no_bpjs' => set_value('no_bpjs')
    );

        $this->db->select('*');
        $this->db->from('tbl_pasien');
        $this->db->join('tbl_user','tbl_user.id_users = tbl_pasien.user_id');
        $this->db->where('tbl_pasien.user_id',$this->session->userdata('id_users'));
        $data['pasien'] = $this->db->get()->row_array();
        $data['judul'] = 'Daftar';
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->Pasien->data_pendaftar()->row_array();
        $this->load->view('front/templates_pasien/header', $data);
        $this->load->view('front/templates_pasien/sidebar', $data);
        $this->load->view('front/pasien/daftar', $data);
        $this->load->view('front/templates_pasien/footer');
    }

    function daftar_lanjut()
    {
        $data['judul'] = 'Daftar';
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $tgl = date('Y-m-d');
        $data['pendaftar'] = $this->Pasien->data_daftar($tgl)->row_array();
        $this->db->select('*');
        $this->db->from('tbl_jadwal_praktek_dokter');
        $this->db->join('tbl_poli','tbl_poli.id_poli = tbl_jadwal_praktek_dokter.id_poli');
        $this->db->join('tbl_dokter','tbl_dokter.kode_dokter = tbl_jadwal_praktek_dokter.kode_dokter');
        $this->db->join('tbl_pendaftaran','tbl_pendaftaran.no_rawat = tbl_jadwal_praktek_dokter.id_jadwal','LEFT');
        $this->db->where('tbl_jadwal_praktek_dokter.id_poli',$data['pendaftar']['id_poli']);
        $data['jadwal_dokter'] = $this->db->get()->result_array();
        $data['hari'] = array (
            1 => 1,
            2,
            3,
            4,
            5,
            6,
            7
            );

        $data['day'] = date("w");
        $data['dayNext'] = date("w", strtotime("+3 day"));
        $this->load->view('front/templates_pasien/header', $data);
        $this->load->view('front/templates_pasien/sidebar', $data);
        $this->load->view('front/pasien/daftar_lanjut', $data);
        $this->load->view('front/templates_pasien/footer');
    }


    function update_stat()
    {
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $data = array (
            'id_user_level' => 7,
        );
        $this->db->where('email',$this->session->userdata('email'));
        $this->db->update('tbl_user',$data);
        redirect('dashboard');
    }
    
    function update_active()
    {
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $data = array (
            'is_active' => 1,
        );
        $this->db->where('user_id',$this->session->userdata('id_users'));
        $this->db->update('tbl_pasien',$data);
        redirect('dashboard/daftar');
    }

    function noRekammedisOtomatis(){
        $ci = get_instance();
        // mencari kode barang dengan nilai paling besar
        $query = "SELECT max(no_rekamedis) as maxKode FROM tbl_pasien";
        $data = $ci->db->query($query)->row_array();
        $kode = $data['maxKode'];
        $noUrut = (int) substr($kode, 0, 6);
        $noUrut++;
        $kodeBaru = sprintf("%06s", $noUrut);
        return $kodeBaru;
    }

    public function create_action() 
    {

        $tanggal_daftar = $this->input->post('tanggal_daftar',TRUE);

        $data = array(
        'no_rawat' => $this->input->post('no_rawat', TRUE),
        'no_registrasi' => $this->input->post('no_registrasi',TRUE),
        'no_rekamedis' => $this->input->post('no_rekamedis',TRUE),
        'tanggal_daftar' => $this->input->post('tanggal_daftar',TRUE),
        'id_poli' => $this->input->post('id_poli',TRUE),
        'nama_penanggung_jawab' => $this->input->post('nama_penanggung_jawab',TRUE),
        'hubungan_dengan_penanggung_jawab' => $this->input->post('hubungan_dengan_penanggung_jawab',TRUE),
        'alamat_penanggung_jawab' => $this->input->post('alamat_penanggung_jawab',TRUE),
        'status_pasien' => $this->input->post('status_pasien',TRUE),
        'no_bpjs' => $this->input->post('no_bpjs',TRUE),
        'user_id' => $this->session->userdata('id_users'),

        );


            $this->Tbl_pendaftaran_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');  
            redirect(site_url('dashboard/daftar_lanjut'));
    }


    public function create_action_form() 
    {

        $ttl = $this->input->post('tanggal_lahir',TRUE);
            $data = array(
            'no_ktp' => $this->input->post('no_ktp',TRUE),
            'no_bpjs' => $this->input->post('no_bpjs',TRUE),
            'no_rekamedis' => $this->input->post('no_rekamedis', TRUE),
            'nama_pasien' => $this->input->post('nama_pasien',TRUE),
            'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
            'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
            'tanggal_lahir' => date('d-m-Y', strtotime($ttl)),
            'alamat' => $this->input->post('alamat',TRUE),
            'user_id' => $this->session->userdata('id_users'),
            'status_pasien' => $this->input->post('status_pasien',TRUE),
        );
            $this->Tbl_pasien_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');  
            redirect(site_url('dashboard/update_stat'));
    }



    function update_form()
    {
        $data = array(
            'kode_dokter_penanggung_jawab' => $this->input->post('kd_dokter'),
        );
        $this->db->where('user_id',$this->session->userdata('id_users'));
        $this->db->update('tbl_pendaftaran',$data);
        
        redirect(base_url('dashboard/update_active'));
    }

    function signup()
    {
        $data = array(
            'full_name' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'id_user_level' => 8,
            'is_aktif' => "y",
        );
        $this->db->insert('tbl_user',$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert">Akun berhasil dibuat, silahkan login.</div>');
        redirect('auth');
    }
}



/* End of file filename.php */
