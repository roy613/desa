<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cetak extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Makassar');
		$this->load->model('m_data');
	}
	public function permohonan($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,165]]);
		$data['aaa'] = $this->db->query("SELECT * FROM permohonan WHERE pe_kode='$b'")->result();
		$html = $this->load->view('cetak/bukti_regis', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('bukti_regis.pdf', 'I');
	}
	public function permohonan1($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,165]]);
		$data['aaa'] = $this->db->query("SELECT * FROM permohonan WHERE pe_kode='$b'")->result();
		$html = $this->load->view('cetak/bukti_regis', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('bukti_regis.pdf', 'D');
	}
}
