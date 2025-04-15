<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_Model extends CI_Model
{

    public function get_all_kategori()
    {
        return $this->db->get('kategori')->result();
    }

    public function get_kategori($id)
    {
        return $this->db->get_where('kategori', array('id_kategori' => $id))->row();
    }

    public function create_kategori($data)
    {
        $this->db->insert('kategori', $data);
        return $this->db->insert_id();
    }

    public function update_kategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori', $data);
    }

    public function delete_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->delete('kategori');
    }
}
