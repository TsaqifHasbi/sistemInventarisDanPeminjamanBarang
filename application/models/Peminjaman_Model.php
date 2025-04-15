<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman_Model extends CI_Model
{

    public function get_all_peminjaman()
    {
        $this->db->select('peminjaman.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('peminjaman');
        $this->db->join('barang', 'barang.id_barang = peminjaman.id_barang');
        $this->db->order_by('tgl_pinjam', 'DESC');
        return $this->db->get()->result();
    }

    public function get_peminjaman($id)
    {
        $this->db->select('peminjaman.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('peminjaman');
        $this->db->join('barang', 'barang.id_barang = peminjaman.id_barang');
        $this->db->where('id_peminjaman', $id);
        return $this->db->get()->row();
    }

    public function create_peminjaman($data)
    {
        $this->db->insert('peminjaman', $data);
        return $this->db->insert_id();
    }

    public function update_peminjaman($id, $data)
    {
        $this->db->where('id_peminjaman', $id);
        return $this->db->update('peminjaman', $data);
    }

    public function delete_peminjaman($id)
    {
        $this->db->where('id_peminjaman', $id);
        return $this->db->delete('peminjaman');
    }

    public function get_peminjaman_aktif()
    {
        $this->db->select('peminjaman.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('peminjaman');
        $this->db->join('barang', 'barang.id_barang = peminjaman.id_barang');
        $this->db->where('status', 'Dipinjam');
        return $this->db->get()->result();
    }

    public function get_laporan($tgl_awal, $tgl_akhir)
    {
        $this->db->select('peminjaman.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('peminjaman');
        $this->db->join('barang', 'barang.id_barang = peminjaman.id_barang');
        $this->db->where('tgl_pinjam >=', $tgl_awal);
        $this->db->where('tgl_pinjam <=', $tgl_akhir);
        $this->db->order_by('tgl_pinjam', 'DESC');
        return $this->db->get()->result();
    }
}
