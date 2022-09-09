<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Simpan_be extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('m_data');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    public function pengguna()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $status = $this->input->post('status');

        $data = array(
            'username' => $username,
            'pass' => $password,
            'status' => $status,
        );

        $this->m_data->save_data($data, 'pengguna');
        $swal_test = array(
            'tittle' => 'SUKSES !',
            'text' => 'Data Pengguna Telah Berhasil di Simpan',
        );
        $this->session->set_flashdata($swal_test);
        redirect(base_url('pengguna'));
    }

    public function ttd()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jab = $this->input->post('jab');
        $status = $this->input->post('status');

        if ($id == 0) {
            $data = array(
                'tt_nama' => $nama,
                'tt_jabatan' => $jab,
                'tt_ket' => $status,
            );

            $this->m_data->save_data($data, 'ttd');
            $swal_test = array(
                'tittle' => 'SUKSES !',
                'text' => 'Data Penandatangan Telah Berhasil di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('ttd'));
        } else {
            $where = array(
                'tt_id' => $id
            );
            $data = array(
                'tt_nama' => $nama,
                'tt_jabatan' => $jab,
                'tt_ket' => $status,
            );

            $this->m_data->update_data($where, $data, 'ttd');
            $swal_test = array(
                'tittle' => 'SUKSES !',
                'text' => 'Data Penandatangan Telah Berhasil di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('ttd'));
        }
    }
    public function nomor()
    {
        $id = $this->input->post('id');
        $n_1 = $this->input->post('n_1');
        $n_2 = $this->input->post('n_2');

    
            $where = array(
                'da_id' => $id
            );
            $data = array(
                'n_1' => $n_1,
                'n_2' => $n_2,
            );

            $this->m_data->update_data($where, $data, 'daftar_pelayanan');
            $swal_test = array(
                'tittle' => 'SUKSES !',
                'text' => 'Penomoran Surat Telah Berhasil di Atur',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('nomor'));
        
    }
}
