<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Simpan_fe extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Makassar');
        $this->load->model('m_data');
    }

    public function nikah()
    {
        // include "phpqrcode/qrlib.php";
        // $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
        // if (!file_exists($tempdir)) //Buat folder bername temp
        //     mkdir($tempdir);

        // $bu = base_url();
        // $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

        // $nomor2 = $this->db->query("SELECT * FROM nikah")->num_rows();
        // $nomor3 = $nomor2 + 1;
        // $namaqr = 'qrkpn' . $nomor3 . '.png';

        // $maxid = $this->db->query("SELECT MAX(n_id) FROM nikah")->result_array();
        // $ab = intval($maxid[0]["MAX(n_id)"]) + 1;
        // $ac = base_url() . 'kcod';
        // // $codeContents = "$ac/arsippeng/$ab";
        // $codeContents = "dfgdfgfdgdf df gfd hdfgh gdfh ";

        // QRcode::png($codeContents, $tempdir . $namaqr, QR_ECLEVEL_H, 7, 4);

        // $QR = imagecreatefrompng($tempdir . $namaqr);

        // $logo = imagecreatefromstring(file_get_contents($logopath));

        // imagecolortransparent($logo, imagecolorallocatealpha($logo, 127, 127, 127, 127));
        // imagealphablending($logo, true);
        // imagesavealpha($logo, true);

        // $QR_width = imagesx($QR);
        // $QR_height = imagesy($QR);

        // $logo_width = imagesx($logo);
        // $logo_height = imagesy($logo);

        // $logo_qr_width = $QR_width / 4;
        // $scale = $logo_width / $logo_qr_width;
        // $logo_qr_height = $logo_height / $scale;
        // imagecopyresampled($QR, $logo, $QR_width / 2.7, $QR_height / 2.9, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
        // imagepng($QR, $tempdir . $namaqr);

        //simpan
        // $buat = $this->session->userdata('username');
        // $nomor =  $this->db->query("SELECT * FROM nomor WHERE n_id=7")->result_array();
        // $nomor1 = $this->db->query("SELECT * FROM nikah WHERE YEAR (n_tglsurat) = YEAR(NOW())")->num_rows();

        // if ($nomor[0]["n_2"] == "") {
        //     $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_3"];
        //     $no_jenis = 1;
        // } else {
        //     $nosurat = $nomor[0]["n_1"] . $nomor[0]["n_2"] . $nomor[0]["n_3"];
        //     $no_jenis = 0;
        // }
        $nama1 = $this->input->post('nikah_nama1');
        $nik1 = $this->input->post('nikah_nik1');
        $job1 = $this->input->post('nikah_job1');
        $tempat1 = $this->input->post('nikah_tempat1');
        $tgl1 = $this->input->post('nikah_tgl1');
        $agama1 = $this->input->post('nikah_agama1');
        $kwn1 = $this->input->post('nikah_kwn1');
        $status1 = $this->input->post('nikah_status1');
        $alamat1 = $this->input->post('nikah_alamat1');
        // $rt1 = $this->input->post('rt1');

        $nama11 = $this->input->post('nikah_nama11');
        $nik11 = $this->input->post('nikah_nik11');
        $agama11 = $this->input->post('nikah_agama11');
        $tempat11 = $this->input->post('nikah_tempat11');
        $tgl11 = $this->input->post('nikah_tgl11');
        $kwn11 = $this->input->post('nikah_kwn11');
        $job11 = $this->input->post('nikah_job11');
        $alamat11 = $this->input->post('nikah_alamat11');

        $nama12 = $this->input->post('nikah_nama12');
        $nik12 = $this->input->post('nikah_nik12');
        $agama12 = $this->input->post('nikah_agama12');
        $tempat12 = $this->input->post('nikah_tempat12');
        $tgl12 = $this->input->post('nikah_tgl12');
        $kwn12 = $this->input->post('nikah_kwn12');
        $job12 = $this->input->post('nikah_job12');
        $alamat12 = $this->input->post('nikah_alamat12');

        $nama2 = $this->input->post('nikah_nama2');
        $nik2 = $this->input->post('nikah_nik2');
        $job2 = $this->input->post('nikah_job2');
        $tempat2 = $this->input->post('nikah_tempat2');
        $tgl2 = $this->input->post('nikah_tgl2');
        $agama2 = $this->input->post('nikah_agama2');
        $kwn2 = $this->input->post('nikah_kwn2');
        $status2 = $this->input->post('nikah_status2');
        $alamat2 = $this->input->post('nikah_alamat2');
        // $rt2 = $this->input->post('rt2');

        $nama21 = $this->input->post('nikah_nama21');
        $nik21 = $this->input->post('nikah_nik21');
        $agama21 = $this->input->post('nikah_agama21');
        $tempat21 = $this->input->post('nikah_tempat21');
        $tgl21 = $this->input->post('nikah_tgl21');
        $kwn21 = $this->input->post('nikah_kwn21');
        $job21 = $this->input->post('nikah_job21');
        $alamat21 = $this->input->post('nikah_alamat21');

        $nama22 = $this->input->post('nikah_nama22');
        $nik22 = $this->input->post('nikah_nik22');
        $agama22 = $this->input->post('nikah_agama22');
        $tempat22 = $this->input->post('nikah_tempat22');
        $tgl22 = $this->input->post('nikah_tgl22');
        $kwn22 = $this->input->post('nikah_kwn22');
        $job22 = $this->input->post('nikah_job22');
        $alamat22 = $this->input->post('nikah_alamat22');

        $lokasi = $this->input->post('nikah_lokasi');
        $waktu = $this->input->post('nikah_waktu');
        $bin11 = $this->input->post('nikah_bin11');
        $bin21 = $this->input->post('nikah_bin21');
        $binti12 = $this->input->post('nikah_binti12');
        $binti22 = $this->input->post('nikah_binti22');

        $status = 1; //status 1 pemohon masyarakat belum diproses, status 2 pemohon masyarakat dan sudah diproses, status 3 surat dibuat admin lewat be.

        // $tglsurat = $this->input->post('tglsrt');
        // $ttd = $this->input->post('ttd');
        // $jabttd = $this->input->post('jabttd');
        // $nipttd = $this->input->post('nipttd');
        // $golttd = $this->input->post('golttd');
        // $mpket = $this->input->post('mpket');

        $tglmohon = date('Y-m-d H-i-s');

        $data = array(
            'n_nama_1' => $nama1,
            'n_nik_1' => $nik1,
            'n_job_1' => $job1,
            'n_tptlahir_1' => $tempat1,
            'n_tgllahir_1' => $tgl1,
            'n_agama_1' => $agama1,
            'n_kwn_1' => $kwn1,
            'n_status_1' => $status1,
            'n_alamat_1' => $alamat1,
            // 'n_rt_1' => $rt1,

            'n_nama_11' => $nama11,
            'n_nik_11' => $nik11,
            'n_agama_11' => $agama11,
            'n_tptlahir_11' => $tempat11,
            'n_tgllahir_11' => $tgl11,
            'n_kwn_11' => $kwn11,
            'n_job_11' => $job11,
            'n_alamat_11' => $alamat11,

            'n_nama_12' => $nama12,
            'n_nik_12' => $nik12,
            'n_agama_12' => $agama12,
            'n_tptlahir_12' => $tempat12,
            'n_tgllahir_12' => $tgl12,
            'n_kwn_12' => $kwn12,
            'n_job_12' => $job12,
            'n_alamat_12' => $alamat12,

            'n_nama_2' => $nama2,
            'n_nik_2' => $nik2,
            'n_job_2' => $job2,
            'n_tptlahir_2' => $tempat2,
            'n_tgllahir_2' => $tgl2,
            'n_agama_2' => $agama2,
            'n_kwn_2' => $kwn2,
            'n_status_2' => $status2,
            'n_alamat_2' => $alamat2,
            // 'n_rt_2' => $rt2,

            'n_nama_21' => $nama21,
            'n_nik_21' => $nik21,
            'n_agama_21' => $agama21,
            'n_tptlahir_21' => $tempat21,
            'n_tgllahir_21' => $tgl21,
            'n_kwn_21' => $kwn21,
            'n_job_21' => $job21,
            'n_alamat_21' => $alamat21,

            'n_nama_22' => $nama22,
            'n_nik_22' => $nik22,
            'n_agama_22' => $agama22,
            'n_tptlahir_22' => $tempat22,
            'n_tgllahir_22' => $tgl22,
            'n_kwn_22' => $kwn22,
            'n_job_22' => $job22,
            'n_alamat_22' => $alamat22,

            'n_lokasi' => $lokasi,
            'n_waktu' => $waktu,
            // 'n_tglsurat' => $tglsurat,
            'n_bin_11' => $bin11,
            'n_bin_21' => $bin21,
            'n_binti_12' => $binti12,
            'n_binti_22' => $binti22,

            // 'n_ttd' => $ttd,
            // 'n_nipttd' => $nipttd,
            // 'n_jabttd' => $jabttd,
            // 'n_golttd' => $golttd,
            // 'n_mpket' => $mpket,

            // 'n_buat' => $buat,
            // 'n_qr' => $namaqr,
            // 'n_nojenis' => $no_jenis,
            // 'n_nomor' => $nosurat,
            'n_tglmohon' => $tglmohon,
            'n_status' => $status,
        );

        $this->m_data->save_data($data, 'nikah');

        //untuk save di tabel permohonan

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/"; //Nama folder tempat menyimpan file qrcode
        if (!file_exists($tempdir)) //Buat folder bername temp
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

        $nomor2 = $this->db->query("SELECT * FROM nikah")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_nikah' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_nikah' . $nomor3;

        $ab = base64_encode($nomor3);
        $ac = base_url() . 'sukses';
        $codeContents = "$ac/$ab";
        // $codeContents = "dfgdfgfdgdf df gfd hdfgh gdfh ";

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


        $data1 = array(
            'pe_kode' => $koderegistrasi,
            'pe_nama' => $nama1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //cetak registrasi

        require_once './vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,165]]);
		$data['aaa'] = $this->db->query("SELECT * FROM permohonan WHERE pe_kode='$koderegistrasi'")->result();
		$html = $this->load->view('bukti_regis', "$data", true);
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
        force_download('spt.pdf', NULL);

        redirect(base_url('sukses'));
    }
}