<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_Model extends CI_Model
{

    public function get_all_barang()
    {
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        return $this->db->get()->result();
    }

    public function get_barang($id)
    {
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $this->db->where('id_barang', $id);
        return $this->db->get()->row();
    }

    public function create_barang($data)
    {
        $this->db->insert('barang', $data);
        return $this->db->insert_id();
    }

    public function update_barang($id, $data)
    {
        $this->db->where('id_barang', $id);
        return $this->db->update('barang', $data);
    }

    public function delete_barang($id)
    {
        $this->db->where('id_barang', $id);
        return $this->db->delete('barang');
    }

    public function get_stok($id)
    {
        $this->db->select('stok');
        $this->db->where('id_barang', $id);
        return $this->db->get('barang')->row()->stok;
    }

    public function update_stok($id, $jumlah)
    {
        $this->db->set('stok', 'stok' . $jumlah, FALSE);
        $this->db->where('id_barang', $id);
        return $this->db->update('barang');
    }
}
