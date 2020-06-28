<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_user_model extends CI_Model
{

    public $table = 'tbl_user';
    public $id = 'id_users';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_users,full_name,email,nama_level,is_aktif');
        $this->datatables->from('tbl_user');
        $this->datatables->add_column('is_aktif', '$1', 'rename_string_is_aktif(is_aktif)');
        //add this line for join
        $this->datatables->join('tbl_user_level', 'tbl_user.id_user_level = tbl_user_level.id_user_level');
        $this->datatables->where('tbl_user_level.id_user_level>1');
        $this->datatables->add_column('action',anchor(site_url('user/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-success btn-sm'))." 
                ".anchor(site_url('user/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_users');
                
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_users', $q);
    $this->db->or_like('full_name', $q);
    $this->db->or_like('email', $q);
    $this->db->or_like('password', $q);
    $this->db->or_like('images', $q);
    $this->db->or_like('id_user_level', $q);
    $this->db->or_like('is_aktif', $q);
    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_users', $q);
    $this->db->or_like('full_name', $q);
    $this->db->or_like('email', $q);
    $this->db->or_like('password', $q);
    $this->db->or_like('images', $q);
    $this->db->or_like('id_user_level', $q);
    $this->db->or_like('is_aktif', $q);
    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

