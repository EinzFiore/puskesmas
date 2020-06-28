<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    function index()
    {
        $data['judul'] = 'Dashboard Pasien';
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('front/templates_pasien/header', $data);
        $this->load->view('front/templates_pasien/sidebar', $data);
        $this->load->view('front/pasien/index', $data);
        $this->load->view('front/templates_pasien/footer');
    }
    
    function daftar()
    {
        $noreg = noRegistrasiotomatis();
        $data = array(
        'button' => 'Tambah',
        'action' => site_url('pendaftaran/create_action'),
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

        $data['judul'] = 'Daftar';
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('front/templates_pasien/header', $data);
        $this->load->view('front/templates_pasien/sidebar', $data);
        $this->load->view('front/pasien/daftar', $data);
        $this->load->view('front/templates_pasien/footer');
    }
}



/* End of file filename.php */
