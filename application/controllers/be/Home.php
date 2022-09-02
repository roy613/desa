<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Makassar');
        $this->load->model('m_data');
        // if ($this->session->userdata('status') != "telah_login") {
        //     redirect(base_url() . 'login?alert=belum_login');
        // }
    }

    public function index()
    {
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_body');
        $this->load->view('be/v_footer');
    }
    
}
