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
	public function permohonan()
	{
		require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,165]]);
		// $data['aaa'] = $this->db->query("SELECT * FROM spt WHERE s_id='$a'")->result();
		$html = $this->load->view('bukti_regis', "", true);
		// $mpdf->SetHTMLFooter('
		// <table width="100%" style="font-size:10pt">
		// <tr>
		// <td colspan=2>
		// <hr style="margin-bottom:-3px; height:2px; width:100%; color:black">
		// </td>
		// </tr>
		// <tr>
		// <td width="80%" align="left">Created By. Petok APPs For Pemerintah Desa Mandu Dalam Kecamatan Sangkulirang</td>
		// <td width="20%" style="text-align: left;"></td>			
		// </tr>
		// </table>');
		$mpdf->AddPage('P','','','','',
		12,//ml
		13,//mr
		10,//mt
		15,//mb
		1,//mh
		4);//mf
		$mpdf->WriteHTML($html);
		$mpdf->Output('spt.pdf', 'I');
	}
}
