<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
    }

    public function index()
    {
        $data['kategori'] = $this->kategori_model->get_all_kategori();
        $this->load->view('templates/header');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('kategori/create');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
                'deskripsi' => $this->input->post('deskripsi')
            );

            $this->kategori_model->create_kategori($data);
            redirect('kategori');
        }
    }

    public function edit($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

        $data['kategori'] = $this->kategori_model->get_kategori($id);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('kategori/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
                'deskripsi' => $this->input->post('deskripsi')
            );

            $this->kategori_model->update_kategori($id, $data);
            redirect('kategori');
        }
    }

    public function delete($id)
    {
        $this->kategori_model->delete_kategori($id);
        redirect('kategori');
    }
}
