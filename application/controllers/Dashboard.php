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
}



/* End of file filename.php */
