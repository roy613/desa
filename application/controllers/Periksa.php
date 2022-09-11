<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periksa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Makassar');
		$this->load->model('m_data');
	}
public function cek($a)
	{
		$b = base64_decode($a);
        $data['row'] = $this->db->query("SELECT s_id FROM surat WHERE s_kodepelayanan='" . $b . "'")->num_rows();
        $data['status'] = $this->db->query("SELECT pe_kode, pe_nama, pe_jenispermohonan, pe_tgl, s_tglbuat, s_proses, s_kodeproses, s_tglselesai FROM surat INNER JOIN permohonan ON permohonan.pe_kode=surat.s_kodepelayanan WHERE s_kodepelayanan='" . $b . "'")->result();
		$this->load->view('fe/v_header');
		$this->load->view('fe/v_index2');
		$this->load->view('fe/v_index_modal', $data);
		$this->load->view('fe/v_footer_periksa');
	}
}