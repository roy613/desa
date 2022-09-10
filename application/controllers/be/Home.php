<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Makassar');
        $this->load->model('m_data');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
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
    public function lihat_surat($a)
    {
        $b = base64_decode($a);
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['surat'] = $this->db->query("SELECT * FROM permohonan INNER JOIN surat ON permohonan.pe_kode=surat.s_kodepelayanan WHERE pe_kode='$b'")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_proses1',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_proses');
    }
    public function lihat_suratnikah($a)
    {
        $b = base64_decode($a);
        $data['surat'] = $this->db->query("SELECT * FROM permohonan INNER JOIN nikah ON permohonan.pe_kode=nikah.n_kodepelayanan WHERE pe_kode='$b")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_proses1',$data);
        $this->load->view('be/v_footer');
    }
    
    public function ttd ()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_ttd',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_ttd');
    }
    public function nomor ()
    {
        $data['nomor'] = $this->db->query("SELECT * FROM daftar_pelayanan")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_nomor',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_nomor');
    }
    public function rekomproposal ()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat rekomendasi proposal' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_rekomproposal',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_rekomproposal');
    }
}
