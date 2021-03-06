<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Pasien extends CI_Model
{
    function data_daftar_pasien()
    {
        $this->db->select('*');
        $this->db->from('tbl_pendaftaran');
        $this->db->join('tbl_user','tbl_user.id_users = tbl_pendaftaran.user_id');
        $this->db->join('tbl_pasien','tbl_pasien.no_rekamedis = tbl_pendaftaran.no_rekamedis');
        $this->db->where('tbl_pasien.user_id',$this->session->userdata('id_users'));
        $this->db->where('tbl_pasien.is_active =',1);
        $this->db->where('tanggal_daftar', date('Y-m-d'));
        return $this->db->get();
    }

    function data_pasien()
    {
        $this->db->select('*');
        $this->db->from('tbl_pasien');
        $this->db->join('tbl_user','tbl_user.id_users = tbl_pasien.user_id');
        $this->db->where('tbl_pasien.user_id',$this->session->userdata('id_users'));
        $this->db->where('tbl_pasien.is_active =',0);
        return $this->db->get();
    }

    function data_pendaftar()
    {
        $this->db->select('*');
        $this->db->from('tbl_pendaftaran');
        $this->db->join('tbl_dokter','tbl_dokter.kode_dokter = tbl_pendaftaran.kode_dokter_penanggung_jawab');
        $this->db->join('tbl_poli','tbl_poli.id_poli = tbl_pendaftaran.id_poli');
        $this->db->join('tbl_pasien','tbl_pasien.no_rekamedis = tbl_pendaftaran.no_rekamedis');
        $this->db->where('tbl_pendaftaran.user_id',$this->session->userdata('id_users'));
        $this->db->where('tanggal_daftar',date('Y-m-d'));
        
        return $this->db->get();
    }

    function data_daftar($tgl)
    {
        $this->db->select('user_id, tanggal_daftar, id_poli');
        $this->db->from('tbl_pendaftaran');
        $this->db->where('user_id',$this->session->userdata('id_users'));
        $this->db->where('tanggal_daftar',$tgl);
        return $this->db->get();
    }

    function riwayat_tindak($no_rawat){
        $this->db->select('*');
        $this->db->from('tbl_riwayat_tindakan');
        $this->db->join('tbl_poli','tbl_poli.id_poli = tbl_riwayat_tindakan.id_poli');
        $this->db->join('tbl_diagnosa_penyakit','tbl_diagnosa_penyakit.kode_diagnosa = tbl_riwayat_tindakan.kode_penyakit');
        $this->db->join('tbl_tindakan','tbl_tindakan.kode_tindakan = tbl_riwayat_tindakan.kode_tindakan');
        $this->db->where('no_rawat',$no_rawat);
        return $this->db->get();
    }

    function riwayat_tindak_all(){
        $this->db->select('tbl_pasien.nama_pasien,tbl_poli.nama_poli,tbl_diagnosa_penyakit.nama_penyakit,tbl_riwayat_tindakan.hasil_periksa,tbl_riwayat_tindakan.tanggal,tbl_pasien.jenis_kelamin,tbl_pasien.is_active,tbl_tindakan.nama_tindakan,tbl_riwayat_tindakan.no_rekamedis');
        $this->db->from('tbl_riwayat_tindakan');
        $this->db->join('tbl_poli','tbl_poli.id_poli = tbl_riwayat_tindakan.id_poli');
        $this->db->join('tbl_diagnosa_penyakit','tbl_diagnosa_penyakit.kode_diagnosa = tbl_riwayat_tindakan.kode_penyakit');
        $this->db->join('tbl_tindakan','tbl_tindakan.kode_tindakan = tbl_riwayat_tindakan.kode_tindakan');
        $this->db->join('tbl_pasien','tbl_pasien.no_rekamedis = tbl_riwayat_tindakan.no_rekamedis');
        $this->db->where('tbl_riwayat_tindakan.user_id',$this->session->userdata('id_users'));
        return $this->db->get();
    }

    function jadwal_dokter($id_poli)
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal_praktek_dokter');
        $this->db->join('tbl_poli','tbl_poli.id_poli = tbl_jadwal_praktek_dokter.id_poli');
        $this->db->join('tbl_dokter','tbl_dokter.kode_dokter = tbl_jadwal_praktek_dokter.kode_dokter');
        $this->db->join('tbl_pendaftaran','tbl_pendaftaran.no_rawat = tbl_jadwal_praktek_dokter.id_jadwal','LEFT');
        $this->db->where('tbl_jadwal_praktek_dokter.id_poli',$id_poli);
        return $this->db->get();
    }

    function waktu($id_poli)
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal_praktek_dokter');
        $this->db->join('tbl_poli','tbl_poli.id_poli = tbl_jadwal_praktek_dokter.id_poli');
        $this->db->join('tbl_dokter','tbl_dokter.kode_dokter = tbl_jadwal_praktek_dokter.kode_dokter');
        $this->db->join('tbl_pendaftaran','tbl_pendaftaran.no_rawat = tbl_jadwal_praktek_dokter.id_jadwal','LEFT');
        $this->db->where('tbl_jadwal_praktek_dokter.id_poli',$id_poli);
        return $this->db->get();
    }

    function list_pasien()
    {
        $this->db->select('tbl_pendaftaran.tanggal_daftar,tbl_pendaftaran.nama_penanggung_jawab,tbl_pendaftaran.hubungan_dengan_penanggung_jawab,tbl_pasien.no_rekamedis,tbl_pasien.nama_pasien,tbl_pasien.jenis_kelamin,tbl_pasien.status_pasien,tbl_poli.nama_poli,tbl_pasien.is_active,tbl_pasien.no_ktp');
        $this->db->from('tbl_pendaftaran');
        $this->db->join('tbl_pasien','tbl_pasien.no_rekamedis = tbl_pendaftaran.no_rekamedis');
        $this->db->join('tbl_poli','tbl_poli.id_poli = tbl_pendaftaran.id_poli');
        $this->db->where('tbl_pendaftaran.user_id',$this->session->userdata('id_users'));
        return $this->db->get();
    }
}



/* End of file filename.php */
