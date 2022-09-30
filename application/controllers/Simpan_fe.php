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
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat pengantar menikah'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_nikah' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_nikah' . $nomor3;


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
        
        $stal1 = $this->input->post('stal1');
        $stal2 = $this->input->post('stal2');
        $stal3 = $this->input->post('stal3');
        $stal4 = $this->input->post('stal4');

        $jenis = "surat pengantar menikah";
        $no_hp = $this->input->post('nikah_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 3 surat dibuat admin lewat be.


        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('nikah_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }
        if ($this->upload->do_upload('nikah_filegambar1')) {

            $gambar1 = $this->upload->data();

            $syarat1 = $gambar1['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => "$nama1, $nama2",
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
            'pe_syarat1' => $syarat1,
        );

        $this->m_data->save_data($data1, 'permohonan');

        // save tabel surat
        $data = array(
            's_1' => $nama1,
            's_2' => $nik1,
            's_3' => $job1,
            's_4' => $tempat1,
            'sd_1' => $tgl1,
            's_5' => $agama1,
            's_6' => $kwn1,
            's_7' => $status1,
            's_8' => $alamat1,
            // 'n_rt_1' => $rt1,

            's_9' => $nama11,
            's_10' => $nik11,
            's_11' => $agama11,
            's_12' => $tempat11,
            'sd_2' => $tgl11,
            's_13' => $kwn11,
            's_14' => $job11,
            's_15' => $alamat11,
            's_16' => $bin11,

            's_17' => $nama12,
            's_18' => $nik12,
            's_19' => $agama12,
            's_20' => $tempat12,
            'sd_3' => $tgl12,
            's_21' => $kwn12,
            's_22' => $job12,
            's_23' => $alamat12,
            's_24' => $binti12,

            's_25' => $nama2,
            's_26' => $nik2,
            's_27' => $job2,
            's_28' => $tempat2,
            'sd_4' => $tgl2,
            's_29' => $agama2,
            's_30' => $kwn2,
            's_31' => $status2,
            's_32' => $alamat2,
            // 'n_rt_2' => $rt2,

            's_33' => $nama21,
            's_34' => $nik21,
            's_35' => $agama21,
            's_36' => $tempat21,
            'sd_5' => $tgl21,
            's_37' => $kwn21,
            's_38' => $job21,
            's_39' => $alamat21,
            's_40' => $bin21,

            's_41' => $nama22,
            's_42' => $nik22,
            's_43' => $agama22,
            's_44' => $tempat22,
            'sd_6' => $tgl22,
            's_45' => $kwn22,
            's_46' => $job22,
            's_47' => $alamat22,
            's_48' => $binti22,
            
            's_stal1' => $stal1,
            's_stal2' => $stal2,
            's_stal3' => $stal3,
            's_stal4' => $stal4,

            's_49' => $lokasi,
            'sd_7' => $waktu,
          
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');

        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }

    public function proposal()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat rekomendasi proposal'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_proposal' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_proposal' . $nomor3;

        $s1 = $this->input->post('proposal_nama');
        $s2 = $this->input->post('proposal_perusahaan');
        $s3 = $this->input->post('proposal_nosuratpemohon');
        $s4 = $this->input->post('proposal_halpermohonan');

        $jenis = "surat rekomendasi proposal";
        $no_hp = $this->input->post('proposal_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('proposal_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            's_4' => $s4,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');

        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }

    public function domisili()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat keterangan domisili'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_domisili' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_domisili' . $nomor3;

        $s1 = $this->input->post('domisili_nama');
        $s2 = $this->input->post('domisili_jk');
        $s3 = $this->input->post('domisili_tptlahir');
        $sd1 = $this->input->post('domisili_tgllahir');
        $s4 = $this->input->post('domisili_kewarganegaraan');
        $s5 = $this->input->post('domisili_agama');
        $s6 = $this->input->post('domisili_nik');
        $s7 = $this->input->post('domisili_statuskwn');
        $s8 = $this->input->post('domisili_pekerjaan');
        $s9 = $this->input->post('domisili_alamat');
        $s10 = $this->input->post('domisili_guna');


        $jenis = "surat keterangan domisili";
        $no_hp = $this->input->post('domisili_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('domisili_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            's_8' => $s8,
            's_9' => $s9,
            's_10' => $s10,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');

        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }

    public function kerja()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat rekomendasi kerja'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_kerja' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_kerja' . $nomor3;

        $s1 = $this->input->post('kerja_nama');
        $s2 = $this->input->post('kerja_nik');
        $s3 = $this->input->post('kerja_jk');
        $s4 = $this->input->post('kerja_tptlahir');
        $sd1 = $this->input->post('kerja_tgllahir');
        $s5 = $this->input->post('kerja_agama');
        $s6 = $this->input->post('kerja_pekerjaan');
        $s7 = $this->input->post('kerja_alamat');
        $s8 = $this->input->post('kerja_perusahaan');


        $jenis = "surat rekomendasi kerja";
        $no_hp = $this->input->post('kerja_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('kerja_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            's_8' => $s8,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');
        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }

    public function pkerja()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat pengantar rekom kerja'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_pkerja' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_pkerja' . $nomor3;

        $s1 = $this->input->post('pkerja_nama');
        $s2 = $this->input->post('pkerja_nik');
        $s3 = $this->input->post('pkerja_jk');
        $s4 = $this->input->post('pkerja_tptlahir');
        $sd1 = $this->input->post('pkerja_tgllahir');
        $s5 = $this->input->post('pkerja_agama');
        $s6 = $this->input->post('pkerja_pekerjaan');
        $s7 = $this->input->post('pkerja_alamat');
        $s8 = $this->input->post('pkerja_perusahaan');


        $jenis = "surat pengantar rekom kerja";
        $no_hp = $this->input->post('pkerja_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pkerja_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            's_8' => $s8,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');

        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }
    public function usaha()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat keterangan usaha'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_usaha' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_usaha' . $nomor3;

        $s1 = $this->input->post('usaha_nama');
        $s2 = $this->input->post('usaha_nik');
        $s3 = $this->input->post('usaha_jk');
        $s4 = $this->input->post('usaha_tptlahir');
        $sd1 = $this->input->post('usaha_tgllahir');
        $s5 = $this->input->post('usaha_pekerjaan');
        $s6 = $this->input->post('usaha_alamat');
        $s7 = $this->input->post('usaha_rt');
        $s8 = $this->input->post('usaha_usaha');
        $s9 = $this->input->post('usaha_alamat1');


        $jenis = "surat keterangan usaha";
        $no_hp = $this->input->post('usaha_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('usaha_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            's_8' => $s8,
            's_9' => $s9,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');
        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }
    public function skck()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat pengantar skck'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_pskck' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_pskck' . $nomor3;

        $s1 = $this->input->post('skck_nama');
        $s2 = $this->input->post('skck_nik');
        $s3 = $this->input->post('skck_jk');
        $s4 = $this->input->post('skck_tptlahir');
        $sd1 = $this->input->post('skck_tgllahir');
        $s5 = $this->input->post('skck_kwn');
        $s6 = $this->input->post('skck_agama');
        $s7 = $this->input->post('skck_statuskwn');
        $s8 = $this->input->post('skck_pekerjaan');
        $s9 = $this->input->post('skck_alamat');
        $s10 = $this->input->post('skck_urus');


        $jenis = "surat pengantar skck";
        $no_hp = $this->input->post('skck_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('skck_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            's_8' => $s8,
            's_9' => $s9,
            's_10' => $s10,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');
        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }
    public function tmampu()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat keterangan tidak mampu'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_sktm' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_sktm' . $nomor3;

        $s1 = $this->input->post('tmampu_nama');
        $s2 = $this->input->post('tmampu_nik');
        $s3 = $this->input->post('tmampu_jk');
        $s4 = $this->input->post('tmampu_tptlahir');
        $sd1 = $this->input->post('tmampu_tgllahir');
        $s5 = $this->input->post('tmampu_agama');
        $s6 = $this->input->post('tmampu_kwn');
        $s7 = $this->input->post('tmampu_statuskwn');
        $s8 = $this->input->post('tmampu_pekerjaan');
        $s9 = $this->input->post('tmampu_alamat');


        $jenis = "surat keterangan tidak mampu";
        $no_hp = $this->input->post('tmampu_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('tmampu_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            's_8' => $s8,
            's_9' => $s9,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');
        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }
    public function hilang()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat pengantar kehilangan'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_hilang' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_hilang' . $nomor3;

        $s1 = $this->input->post('hilang_nama');
        $s2 = $this->input->post('hilang_nik');
        $s3 = $this->input->post('hilang_tptlahir');
        $sd1 = $this->input->post('hilang_tgllahir');
        $s4 = $this->input->post('hilang_agama');
        $s5 = $this->input->post('hilang_pekerjaan');
        $s6 = $this->input->post('hilang_alamat');
        $s7 = $this->input->post('hilang_barang');
        $sd2 = $this->input->post('hilang_tglhilang');
        $s8 = $this->input->post('hilang_kwn');


        $jenis = "surat pengantar kehilangan";
        $no_hp = $this->input->post('hilang_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('hilang_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            'sd_2' => $sd2,
            's_8' => $s8,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');

        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }
    public function lahir()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat keterangan kelahiran'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_lahir' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_lahir' . $nomor3;

        $s1 = $this->input->post('lahir_nama');
        $s2 = $this->input->post('lahir_jk');
        $s3 = $this->input->post('lahir_tptlahir');
        $sd1 = $this->input->post('lahir_tgllahir');
        $s4 = $this->input->post('lahir_agama');
        $s5 = $this->input->post('lahir_alamat');
        $s6 = $this->input->post('lahir_anak_ke');

        $s7 = $this->input->post('lahir_nama_a');
        $s8 = $this->input->post('lahir_tptlahir_a');
        $sd2 = $this->input->post('lahir_tgllahir_a');
        $s9 = $this->input->post('lahir_agama_a');
        $s10 = $this->input->post('lahir_pekerjaan_a');
        $s11 = $this->input->post('lahir_alamat_a');

        $s12 = $this->input->post('lahir_nama_b');
        $s13 = $this->input->post('lahir_tptlahir_b');
        $sd3 = $this->input->post('lahir_tgllahir_b');
        $s14 = $this->input->post('lahir_agama_b');
        $s15 = $this->input->post('lahir_pekerjaan_b');
        $s16 = $this->input->post('lahir_alamat_b');


        $jenis = "surat keterangan kelahiran";
        $no_hp = $this->input->post('lahir_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('lahir_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            's_8' => $s8,
            'sd_2' => $sd2,
            's_9' => $s9,
            's_10' => $s10,
            's_11' => $s11,
            's_12' => $s12,
            's_13' => $s13,
            'sd_3' => $sd3,
            's_14' => $s14,
            's_15' => $s15,
            's_16' => $s16,
            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');

        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);


        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }
    public function pindah()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat keterangan pindah'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_pindah' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_pindah' . $nomor3;

        $s1 = $this->input->post('pindah_nama');
        $s2 = $this->input->post('pindah_nik');
        $s3 = $this->input->post('pindah_jk');
        $s4 = $this->input->post('pindah_tptlahir');
        $sd1 = $this->input->post('pindah_tgllahir');
        $s5 = $this->input->post('pindah_kwn');
        $s6 = $this->input->post('pindah_agama');
        $s7 = $this->input->post('pindah_statuskwn');
        $s8 = $this->input->post('pindah_pekerjaan');
        $s9 = $this->input->post('pindah_pendidikan');
        $s10 = $this->input->post('pindah_alamat');

        $s11 = $this->input->post('pindah_jalan');
        $s12 = $this->input->post('pindah_desa');
        $s13 = $this->input->post('pindah_camat');
        $s14 = $this->input->post('pindah_kab');
        $s15 = $this->input->post('pindah_provinsi');
        $sd2 = $this->input->post('pindah_tglpindah');

        $jenis = "surat keterangan pindah";
        $no_hp = $this->input->post('pindah_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pindah_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            's_7' => $s7,
            's_8' => $s8,
            's_9' => $s9,
            's_10' => $s10,
            's_11' => $s11,
            's_12' => $s12,
            's_13' => $s13,
            's_14' => $s14,
            's_15' => $s15,
            'sd_2' => $sd2,

            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');

        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);


        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }
    public function mati()
    {
        $nomor2 = $this->db->query("SELECT * FROM permohonan WHERE pe_jenispermohonan='surat keterangan kematian'")->num_rows();
        $nomor3 = $nomor2 + 1;
        $namaqr = 'DKI_kmtian' . $nomor3 . '.png';
        $koderegistrasi = 'DKI_kmtian' . $nomor3;

        $s1 = $this->input->post('mati_nama');
        $s2 = $this->input->post('mati_tptlahir');
        $sd1 = $this->input->post('mati_tgllahir');
        $s3 = $this->input->post('mati_kwn');
        $s4 = $this->input->post('mati_agama');
        $s5 = $this->input->post('mati_pekerjaan');
        $s6 = $this->input->post('mati_alamat');

        $sd2 = $this->input->post('mati_tglmeninggal');
        $s7 = $this->input->post('mati_pukul');
        $s8 = $this->input->post('mati_tptmeninggal');

        $jenis = "surat keterangan kematian";
        $no_hp = $this->input->post('mati_nohp');
        $tglmohon = date('Y-m-d H-i-s');
        $kode_proses = 1; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        //save ditabel permohonan
        $config['upload_path'] = './syarat/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('mati_filegambar')) {

            $gambar = $this->upload->data();

            $syarat = $gambar['file_name'];
        }

        include "phpqrcode/qrlib.php";
        $tempdir = "permohonan/";
        if (!file_exists($tempdir))
            mkdir($tempdir);

        $bu = base_url();
        $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";


        $ab = base64_encode($koderegistrasi);
        $ac = base_url() . 'periksa/cek';
        $codeContents = "$ac/$ab";

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
            'pe_nama' => $s1,
            'pe_qr' => $namaqr,
            'pe_tgl' => $tglmohon,
            'pe_handphone' => $no_hp,
            'pe_jenispermohonan' => $jenis,
            'pe_syarat' => $syarat,
        );

        $this->m_data->save_data($data1, 'permohonan');

        //save di tabel surat
        $data = array(
            's_1' => $s1,
            's_2' => $s2,
            's_3' => $s3,
            'sd_1' => $sd1,
            's_4' => $s4,
            's_5' => $s5,
            's_6' => $s6,
            'sd_2' => $sd2,
            's_7' => $s7,
            's_8' => $s8,

            's_kodeproses' => $kode_proses,
            's_kodepelayanan' => $koderegistrasi,
            's_jenispelayanan' => $jenis,
        );

        $this->m_data->save_data($data, 'surat');

        //pusher notifikasi

        require_once './vendor/autoload.php';

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a6102b946dc5ba9a26c7',
            '852bfbbfca9ec5b1e9d2',
            '1479096',
            $options
        );

        $kata['message'] = 'Permohonan Baru Diterima';
        $pusher->trigger('my-channel', 'my-event', $kata);

        redirect(base_url("sukses/" . base64_encode($koderegistrasi)));
    }
}
