<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cetak_be extends CI_Controller
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
	public function proposal($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/r_proposal', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('rekomendasiproposal.pdf', 'I');
	}
	public function kerja($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/r_kerja', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('rekomendasikerja.pdf', 'I');
	}
	public function rkerja($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/r_kerja_kecamatan', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('rekomendasikerja.pdf', 'I');
	}
	public function domisili($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/k_domisili', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('keterangandomisili.pdf', 'I');
	}
	public function lahir($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/k_kelahiran', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('keterangankelahiran.pdf', 'I');
	}
}
