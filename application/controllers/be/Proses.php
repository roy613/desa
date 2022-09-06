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

    public function tanggal()
    {
        $id = $this->input->post('id');
        $kode = $this->input->post('kode');
        $tglbuat = date('Y-m-d H-i-s');
        $tgl = $this->input->post('tglsurat');
        $ttd = $this->input->post('ttd');

        include "phpqrcode/qrlib.php";
        $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
        if (!file_exists($tempdir)) //Buat folder bername temp
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

        // $nomor2 = $this->db->query("SELECT * FROM surat WHERE k_jenis=4 ")->num_rows();
        // $nomor3 = $nomor2 + 1;
        // $namaqr = 'qrkkm' . $nomor3 . '.png';
        $namaqr = 'tets.png';

        // $maxid = $this->db->query("SELECT MAX(k_id) FROM sket")->result_array();
        // $ab = intval($maxid[0]["MAX(k_id)"]) + 1;
        // $ac = base_url() . 'kcod';
        $codeContents = "ini masih percobaan";

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
            // 's_nomor' => $nosurat,
            's_tglbuat' => $tglbuat,
            's_tglsurat' => $tgl,
            's_ttd' => $ttd,
        );
        $this->m_data->update_data($where, $data, 'surat');
        $swal_test = array(
            'tittle' => 'Berhasil !!!',
            'text' => 'Surat Berhasil Di Buat',
        );
        $this->session->set_flashdata($swal_test);
        redirect(base_url('lihat_surat/'.base64_encode($kode)));
    }
}
