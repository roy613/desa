<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('status') != "telah_login") {
            $this->load->view('v_login1');
        } else {
            redirect(base_url('dashboard'));
        }
    }

    public function aksi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() != false) {
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'pass' => md5($password),
            );
            $this->load->model('m_data');
            $cek = $this->m_data->cek_login('pengguna', $where)->num_rows();
            if ($cek > 0) {
                
                $data = $this->m_data->cek_login('pengguna', $where)->row();
                $data_session = array(
                    'id' => $data->p_id,
                    'username' => $data->username,
                    'status' => 'telah_login'
                );
            
                $this->session->set_userdata($data_session);
                // var_dump($data_session);
                redirect(base_url('dashboard'));
            } else {
                redirect(base_url() . 'login?alert=gagal');
            }
        } else {
            $this->load->view('v_login1');
        }
    }
    public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url() . 'login?alert=logout');
	}
}