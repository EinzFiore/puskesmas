<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function index() 
    {
        $data['judul'] = 'Puskesmas';
        $data['dokter'] = $this->db->limit(4)->get('tbl_dokter')->result_array();
        $this->load->view('front/templates/header', $data);
        $this->load->view('front/index', $data);
        $this->load->view('front/templates/footer');
    }
}



/* End of file filename.php */
