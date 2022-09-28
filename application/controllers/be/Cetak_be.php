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
	public function mati($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/k_kematian', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('keterangankematian.pdf', 'I');
	}
	public function pindah($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/k_pindahpenduduk', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('keteranganpindah.pdf', 'I');
	}
	public function sktm($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/k_tidakmampu', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('sktm.pdf', 'I');
	}
	public function skck($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/p_skck', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('pskck.pdf', 'I');
	}
	public function hilang($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/p_kehilangan', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('philang.pdf', 'I');
	}
	public function usaha($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html = $this->load->view('cetak/k_usaha', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('philang.pdf', 'I');
	}
	public function buku()
	{
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_tglsurat ASC")->result();
		$data['ttd'] = $this->db->query("SELECT * FROM ttd WHERE tt_id=1")->result();
		$html = $this->load->view('cetak/buku_reg', $data, true);
		$mpdf->AddPage('L','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('register.pdf', 'I');
	}
	public function nikah1($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html0 = $this->load->view('cetak/fungsi', $data, true);
		$html = $this->load->view('cetak/ppn11', $data, true);
		$html1 = $this->load->view('cetak/ppn21', $data, true);
		$html2 = $this->load->view('cetak/ppn12', $data, true);
		$html3 = $this->load->view('cetak/ppn22', $data, true);
		$html4 = $this->load->view('cetak/pkn', $data, true);
		$html5 = $this->load->view('cetak/ppc', $data, true);
		$html6 = $this->load->view('cetak/pio11', $data, true);
		$html7 = $this->load->view('cetak/pio21', $data, true);
		$html8 = $this->load->view('cetak/pio12', $data, true);
		$html9 = $this->load->view('cetak/pio22', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html1);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html2);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html3);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html4);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html5);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html6);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html7);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html8);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html9);
		$mpdf->Output('Nikah.pdf', 'I');
	}
	public function nikah2($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html0 = $this->load->view('cetak/fungsi', $data, true);
		$html = $this->load->view('cetak/ppn11', $data, true);
		$html1 = $this->load->view('cetak/ppn21', $data, true);
		$html4 = $this->load->view('cetak/pkn', $data, true);
		$html5 = $this->load->view('cetak/ppc', $data, true);
		$html6 = $this->load->view('cetak/pio11', $data, true);
		$html7 = $this->load->view('cetak/pio21', $data, true);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html1);
		
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html4);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html5);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html6);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html7);
		$mpdf->Output('Nikah.pdf', 'I');
	}
	
	public function nikah3($a)
	{
		$b= base64_decode($a);
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,330]]);
		$data['aaa'] = $this->db->query("SELECT * FROM surat WHERE s_id='$b'")->result();
		$html0 = $this->load->view('cetak/fungsi', $data, true);
		$html2 = $this->load->view('cetak/ppn12', $data, true);
		$html3 = $this->load->view('cetak/ppn22', $data, true);
		$html4 = $this->load->view('cetak/pkn', $data, true);
		$html5 = $this->load->view('cetak/ppc', $data, true);
		$html8 = $this->load->view('cetak/pio12', $data, true);
		$html9 = $this->load->view('cetak/pio22', $data, true);
		
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html2);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html3);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html4);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html5);

		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html8);
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html9);
		$mpdf->Output('Nikah.pdf', 'I');
	}
}
