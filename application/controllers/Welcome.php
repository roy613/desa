<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		// $this->load->view('fe/f_layanan_proposal');
	}
	public function sukses($a)
	{
		$data['aaa'] = $this->db->query("SELECT * FROM permohonan WHERE pe_kode='$a'")->result();
		$this->load->view('fe/v_header');
		$this->load->view('fe/v_sukses', $data);
		$this->load->view('fe/v_footer');
	}
	public function periksa()
	{
		$this->load->view('fe/v_header');
		$this->load->view('fe/v_index2');
		$this->load->view('fe/v_periksa_modal');
		$this->load->view('fe/v_footer_periksa');
	}
}
