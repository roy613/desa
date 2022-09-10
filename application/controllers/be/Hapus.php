<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hapus extends CI_Controller
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

	public function ttd($id)
    {
        $where = array(
            'tt_id' => $id
        );

        $this->m_data->delete_data($where, 'ttd');
		$swal_test = array(
            'tittle' => 'SUKSES !',
            'text' => 'Data Penandatangan Telah Berhasil diHapus',
        );
        $this->session->set_flashdata($swal_test);
        redirect(base_url('ttd'));
    }    

	public function pengguna($id)
    {
        $where = array(
            'p_id' => $id
        );

        $this->m_data->delete_data($where, 'pengguna');
		$swal_test = array(
            'tittle' => 'SUKSES !',
            'text' => 'Data Pengguna Telah Berhasil diHapus',
        );
        $this->session->set_flashdata($swal_test);
        redirect(base_url('pengguna'));
    }
	public function rekomproposal($id)
    {
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');

        $where = array(
            's_id' => $id
        );

         $data = array(
                's_hapus' => $buat,
                's_tglhapus' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Hapus',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('rekomproposal'));
    }
}