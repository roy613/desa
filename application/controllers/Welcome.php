<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Makassar');
        $this->load->model('m_data');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('fe/v_header');
		$this->load->view('fe/v_index2');
		$this->load->view('fe/v_index_modal');
		$this->load->view('fe/v_footer');
	}
	public function cek_resi()
	{
		// $peg = "dki_proposal5";
		$peg = $this->input->post('peg');
		$data = $this->db->query("SELECT pe_tgl, s_tglbuat, s_proses, s_kodeproses, s_tglselesai FROM surat INNER JOIN permohonan ON permohonan.pe_kode=surat.s_kodepelayanan WHERE s_kodepelayanan='" . $peg . "'")->result();
		// var_dump($data);
		$myJSON = json_encode($data);
		echo $myJSON;
	}
	public function layanan()
	{
		$this->load->view('fe/v_header');
		$this->load->view('fe/v_layanan');
		$this->load->view('fe/v_layanan_kerja');
		$this->load->view('fe/v_layanan_kdomisili');
		$this->load->view('fe/v_layanan_kkelahiran');
		$this->load->view('fe/v_layanan_kkematian');
		$this->load->view('fe/v_layanan_kpindah');
		$this->load->view('fe/v_layanan_kusaha');
		$this->load->view('fe/v_layanan_pkehilangan');
		$this->load->view('fe/v_layanan_pnikah');
		$this->load->view('fe/v_layanan_proposal');
		$this->load->view('fe/v_layanan_pskck');
		$this->load->view('fe/v_layanan_ktmampu');
		$this->load->view('fe/v_footer');
		$this->load->view('fe/f_layanan');
		$this->load->view('fe/f_layanan_nikah');
		$this->load->view('fe/f_layanan_validasi');
	}
	public function sukses($a)
	{
		$b = base64_decode($a);
		$data['aaa'] = $this->db->query("SELECT * FROM permohonan WHERE pe_kode='$b'")->result();
		$this->load->view('fe/v_header');
		$this->load->view('fe/v_sukses', $data);
		$this->load->view('fe/v_footer');
	}
	public function periksa($a)
	{
		$b = base64_decode($a);
		$data['aaa'] = $this->db->query("SELECT * FROM permohonan WHERE pe_kode='$b'")->result();
		$this->load->view('fe/v_header');
		$this->load->view('fe/v_index2');
		$this->load->view('fe/v_periksa_modal');
		$this->load->view('fe/v_footer_periksa');
	}
}
