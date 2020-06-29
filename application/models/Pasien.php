<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Pasien extends CI_Model
{
    function data_daftar()
    {
        $this->db->select('*');
        $this->db->from('tbl_pendaftaran');
        $this->db->join('tbl_dokter','tbl_dokter.kode_dokter = tbl_pendaftaran.kode_dokter_penanggung_jawab');
        $this->db->join('tbl_poli','tbl_poli.id_poli = tbl_pendaftaran.id_poli');
        $this->db->join('tbl_pasien','tbl_pasien.no_rekamedis = tbl_pendaftaran.no_rekamedis');
        $this->db->where('tbl_pendaftaran.user_id',$this->session->userdata('id_users'));
        return $this->db->get();
    }
}



/* End of file filename.php */