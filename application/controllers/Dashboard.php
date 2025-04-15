<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Debug path
        // $view_path = APPPATH . 'views/dashboard/index.php';
        // if (file_exists($view_path)) {
        //     echo "File exists at: " . $view_path;
        // } else {
        //     echo "File NOT found at: " . $view_path;
        // }
        // die();

        $this->load->view('templates/header');
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }
}
