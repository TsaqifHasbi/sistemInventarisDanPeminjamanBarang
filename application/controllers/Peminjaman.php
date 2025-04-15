<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('peminjaman_model');
        $this->load->model('barang_model');
    }

    public function index()
    {
        $data['peminjaman'] = $this->peminjaman_model->get_all_peminjaman();
        $this->load->view('templates/header');
        $this->load->view('peminjaman/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_barang', 'Barang', 'required');
        $this->form_validation->set_rules('peminjam', 'Peminjam', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required');

        $data['barang'] = $this->barang_model->get_all_barang();

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('peminjaman/create', $data);
            $this->load->view('templates/footer');
        } else {
            $id_barang = $this->input->post('id_barang');
            $jumlah = $this->input->post('jumlah');

            // Cek stok tersedia
            $stok = $this->barang_model->get_stok($id_barang);
            if ($stok < $jumlah) {
                $this->session->set_flashdata('error', 'Stok tidak mencukupi');
                redirect('peminjaman/create');
            }

            $data = array(
                'id_barang' => $id_barang,
                'peminjam' => $this->input->post('peminjam'),
                'jumlah' => $jumlah,
                'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'keterangan' => $this->input->post('keterangan')
            );

            $this->peminjaman_model->create_peminjaman($data);
            $this->barang_model->update_stok($id_barang, -$jumlah); // Kurangi stok
            redirect('peminjaman');
        }
    }

    public function kembali($id)
    {
        $peminjaman = $this->peminjaman_model->get_peminjaman($id);

        if ($peminjaman && $peminjaman->status == 'Dipinjam') {
            $data = array(
                'status' => 'Dikembalikan',
                'tgl_kembali' => date('Y-m-d')
            );

            $this->peminjaman_model->update_peminjaman($id, $data);
            $this->barang_model->update_stok($peminjaman->id_barang, $peminjaman->jumlah); // Tambah stok
        }

        redirect('peminjaman');
    }

    public function delete($id)
    {
        $peminjaman = $this->peminjaman_model->get_peminjaman($id);

        if ($peminjaman && $peminjaman->status == 'Dipinjam') {
            $this->barang_model->update_stok($peminjaman->id_barang, $peminjaman->jumlah); // Kembalikan stok jika belum dikembalikan
        }

        $this->peminjaman_model->delete_peminjaman($id);
        redirect('peminjaman');
    }

    public function laporan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tgl_awal', 'Tanggal Awal', 'required');
        $this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir', 'required');

        $data['peminjaman'] = array();

        if ($this->form_validation->run() === TRUE) {
            $tgl_awal = $this->input->post('tgl_awal');
            $tgl_akhir = $this->input->post('tgl_akhir');
            $data['peminjaman'] = $this->peminjaman_model->get_laporan($tgl_awal, $tgl_akhir);
        }

        $this->load->view('templates/header');
        $this->load->view('peminjaman/laporan', $data);
        $this->load->view('templates/footer');
    }

    public function aktif()
    {
        $data['peminjaman'] = $this->peminjaman_model->get_peminjaman_aktif();
        $this->load->view('templates/header');
        $this->load->view('peminjaman/aktif', $data);
        $this->load->view('templates/footer');
    }
}
