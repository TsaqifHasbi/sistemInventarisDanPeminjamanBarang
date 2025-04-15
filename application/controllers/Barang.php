<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('kategori_model');
    }

    public function index()
    {
        $data['barang'] = $this->barang_model->get_all_barang();
        $this->load->view('templates/header');
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required|is_unique[barang.kode_barang]');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');

        $data['kategori'] = $this->kategori_model->get_all_kategori();

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('barang/create', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'stok' => $this->input->post('stok'),
                'deskripsi' => $this->input->post('deskripsi'),
                'id_kategori' => $this->input->post('id_kategori')
            );

            $this->barang_model->create_barang($data);
            redirect('barang');
        }
    }

    public function edit($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');

        $data['barang'] = $this->barang_model->get_barang($id);
        $data['kategori'] = $this->kategori_model->get_all_kategori();

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('barang/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'stok' => $this->input->post('stok'),
                'deskripsi' => $this->input->post('deskripsi'),
                'id_kategori' => $this->input->post('id_kategori')
            );

            $this->barang_model->update_barang($id, $data);
            redirect('barang');
        }
    }

    public function delete($id)
    {
        $this->barang_model->delete_barang($id);
        redirect('barang');
    }
}
