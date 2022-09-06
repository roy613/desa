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
    public function pengguna()
    {
        $data['guna'] = $this->db->query('SELECT * FROM pengguna')->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_pengguna', $data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_pengguna');
    }
    public function daftar_permohonan()
    {
        $data['daftar'] = $this->db->query('SELECT * FROM permohonan')->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_register', $data);
        $this->load->view('be/v_footer');
    }
    public function lihat_surat()
    {
        // $data['guna'] = $this->db->query('SELECT * FROM pengguna')->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_proses1');
        $this->load->view('be/v_footer');
    }
    
}
