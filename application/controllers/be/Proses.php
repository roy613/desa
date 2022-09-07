<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Proses extends CI_Controller
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
    public function ttd_periksa()
	{
		$peg = $this->input->post('peg');
		$data = $this->db->query("SELECT * FROM ttd WHERE tt_nama='" . $peg . "'")->result();
		// var_dump($data);
		$myJSON = json_encode($data);
		echo $myJSON;
	}

    public function tanggal()
    {
        $id = $this->input->post('id');
        $kode = $this->input->post('kode');
        $jenis = $this->input->post('jenis');

        $tglbuat = date('Y-m-d H-i-s');
        $tgl = $this->input->post('tglsurat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');

        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n31 = date('m', strtotime($tgl));
        if ($n31 == "01") {
            $n311 = "I";
        } else if ($n31 == "02") {
            $n311 = "II";
        } else if ($n31 == "03") {
            $n311 = "III";
        } else if ($n31 == "04") {
            $n311 = "IV";
        } else if ($n31 == "05") {
            $n311 = "V";
        } else if ($n31 == "06") {
            $n311 = "VI";
        } else if ($n31 == "07") {
            $n311 = "VII";
        } else if ($n31 == "08") {
            $n311 = "VIII";
        } else if ($n31 == "09") {
            $n311 = "IX";
        } else if ($n31 == "10") {
            $n311 = "X";
        } else if ($n31 == "11") {
            $n311 = "XI";
        } else if ($n31 == "12") {
            $n311 = "XII";
        }
        $n32 = date('Y', strtotime($tgl));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"].$n3f;


        include "phpqrcode/qrlib.php";
        $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
        if (!file_exists($tempdir)) //Buat folder bername temp
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

        $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
        // $nomor3 = $nomor2 + 1;
        $namaqr = 'QR' . $nomor2 . '.png';

        // $maxid = $this->db->query("SELECT MAX(k_id) FROM sket")->result_array();
        // $ab = intval($maxid[0]["MAX(k_id)"]) + 1;
        $codeContents = base_url('lihat_surat/' . base64_encode($kode));
        // $codeContents = "ini masih percobaan";

        QRcode::png($codeContents, $tempdir . $namaqr, QR_ECLEVEL_H, 7, 4);

        $QR = imagecreatefrompng($tempdir . $namaqr);

        $logo = imagecreatefromstring(file_get_contents($logopath));

        imagecolortransparent($logo, imagecolorallocatealpha($logo, 127, 127, 127, 127));
        imagealphablending($logo, true);
        imagesavealpha($logo, true);

        $QR_width = imagesx($QR);
        $QR_height = imagesy($QR);

        $logo_width = imagesx($logo);
        $logo_height = imagesy($logo);

        $logo_qr_width = $QR_width / 4;
        $scale = $logo_width / $logo_qr_width;
        $logo_qr_height = $logo_height / $scale;
        imagecopyresampled($QR, $logo, $QR_width / 2.7, $QR_height / 2.9, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
        imagepng($QR, $tempdir . $namaqr);

        $where = array(
            's_id' => $id
        );

        $data = array(
            's_nosurat' => $nosurat,
            's_qr' => $namaqr,
            's_tglbuat' => $tglbuat,
            's_tglsurat' => $tgl,
            's_ttd' => $ttd,
            's_jabatan' => $jabttd,
            's_kodettd' => $kodettd,
            's_proses' => $buat,
        );
        $this->m_data->update_data($where, $data, 'surat');
        $swal_test = array(
            'tittle' => 'Berhasil !!!',
            'text' => 'Surat Berhasil Di Proses',
        );
        $this->session->set_flashdata($swal_test);
        redirect(base_url('lihat_surat/' . base64_encode($kode)));
    }

    public function tolak_berkas()
    {
        $a = $this->input->post('a');
        $b = 2;
        $tglselesai = date('Y-m-d H-i-s');

        $where = array(
            's_id' => $a
        );

        $data = array(
            's_kodeproses' => $b,
            's_tglselesai' => $tglselesai,
        );
        $this->m_data->update_data($where, $data, 'surat');
    }
    public function selesai_berkas()
    {
        $a = $this->input->post('a');
        $b = 1;
        $tglselesai = date('Y-m-d H-i-s');

        $where = array(
            's_id' => $a
        );

        $data = array(
            's_kodeproses' => $b,
            's_tglselesai' => $tglselesai,
        );
        $this->m_data->update_data($where, $data, 'surat');
    }
}
