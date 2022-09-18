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
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat rekomendasi proposal' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_rekomproposal',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_rekomproposal');
    }
    public function rekomkerja ()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat rekomendasi kerja' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_rekomkerja',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_rekomkerja');
    }
    public function pengantar_rkerja ()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat pengantar rekom kerja' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_prkerja',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_prkerja');
    }
    public function pengantar_hilang()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat pengantar kehilangan' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_philang',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_philang');
    }
    public function skck()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat pengantar skck' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_skck',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_skck');
    }
    public function usaha()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan usaha' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_kusaha',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_kusaha');
    }
    public function domisili()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan domisili' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_domisili',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_domisili');
    }
    public function pindah()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan pindah' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_pindah',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_pindah');
    }
    public function mati()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan kematian' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_mati',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_mati');
    }
    public function lahir()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan kelahiran' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_lahir',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_lahir');
    }
    public function tmampu()
    {
        $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
        $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan tidak mampu' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL ORDER BY s_id DESC")->result();
        $this->load->view('be/v_header');
        $this->load->view('be/v_sidebar');
        $this->load->view('be/v_tmampu',$data);
        $this->load->view('be/v_footer');
        $this->load->view('be/f_tmampu');
    }
}
