<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cetak_be extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Makassar');
		$this->load->model('m_data');
	}
	public function proposal($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_kodepelayanan='$b'")->result();
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
}