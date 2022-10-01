<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Simpan_be extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        function getRomawi($bln)
        {
            switch ($bln) {
                case 1:
                    return "I";
                    break;
                case 2:
                    return "II";
                    break;
                case 3:
                    return "III";
                    break;
                case 4:
                    return "IV";
                    break;
                case 5:
                    return "V";
                    break;
                case 6:
                    return "VI";
                    break;
                case 7:
                    return "VII";
                    break;
                case 8:
                    return "VIII";
                    break;
                case 9:
                    return "IX";
                    break;
                case 10:
                    return "X";
                    break;
                case 11:
                    return "XI";
                    break;
                case 12:
                    return "XII";
                    break;
            }
        }

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

    public function rekomproposal()
    {
        $id = $this->input->post('id');
        $s1 = $this->input->post('nama');
        $s2 = $this->input->post('perusahaan');
        $s3 = $this->input->post('no_suratpemohon');
        $s4 = $this->input->post('perihal_suratpemohon');
        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat rekomendasi proposal";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_qr' => $namaqr,
                's_nojenis' => $no_jenis,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('rekomproposal'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('rekomproposal'));
        }
    }
    public function catat_surat()
    {
        $id = $this->input->post('id');
        $s1 = $this->input->post('csurat_nama');
        $nosurat = $this->input->post('csurat_no');
        $jenis = $this->input->post('csurat_jenis');

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 2; //no jenis 1 otomatis, 2 manual atau offline
        // $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        // $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        // $n311 = getRomawi(date('m', strtotime($tglsurat)));

        // $n32 = date('Y', strtotime($tglsurat));
        // $n3f = $n311 . "/" . $n32;
        // $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            // include "phpqrcode/qrlib.php";
            // $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            // if (!file_exists($tempdir)) //Buat folder bername temp
            //     mkdir($tempdir);

            // $bu = base_url();
            // $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            // $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            // $namaqr = 'QR' . $nomor2 . '.png';

            // $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_nosurat' => $nosurat,
                's_jenispelayanan' => $jenis,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_kodeproses' => $kode_proses,
                's_nojenis' => $no_jenis,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('catat_surat'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_nosurat' => $nosurat,
                's_jenispelayanan' => $jenis,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('catat_surat'));
        }
    }
    public function rekomkerja()
    {
        $id = $this->input->post('id');

        $s1 = $this->input->post('kerja_nama');
        $s2 = $this->input->post('kerja_nik');
        $s3 = $this->input->post('kerja_jk');
        $s4 = $this->input->post('kerja_tptlahir');
        $sd1 = $this->input->post('kerja_tgllahir');
        $s5 = $this->input->post('kerja_agama');
        $s6 = $this->input->post('kerja_pekerjaan');
        $s7 = $this->input->post('kerja_alamat');
        $s8 = $this->input->post('kerja_perusahaan');

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat rekomendasi kerja";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                'sd_1' => $sd1,
                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('rekomkerja'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                'sd_1' => $sd1,
                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('rekomkerja'));
        }
    }
    public function prekomkerja()
    {
        $id = $this->input->post('id');

        $s1 = $this->input->post('kerja_nama');
        $s2 = $this->input->post('kerja_nik');
        $s3 = $this->input->post('kerja_jk');
        $s4 = $this->input->post('kerja_tptlahir');
        $sd1 = $this->input->post('kerja_tgllahir');
        $s5 = $this->input->post('kerja_agama');
        $s6 = $this->input->post('kerja_pekerjaan');
        $s7 = $this->input->post('kerja_alamat');
        $s8 = $this->input->post('kerja_perusahaan');

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat pengantar rekom kerja";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                'sd_1' => $sd1,
                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('prekomkerja'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                'sd_1' => $sd1,
                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('prekomkerja'));
        }
    }
    public function philang()
    {
        $id = $this->input->post('id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat pengantar kehilangan";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                'sd_1' => $sd1,
                'sd_2' => $sd2,
                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kehilangan'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                'sd_1' => $sd1,
                'sd_2' => $sd2,
                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kehilangan'));
        }
    }
    public function skck()
    {
        $id = $this->input->post('id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat pengantar skck";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                's_9' => $s9,
                's_10' => $s10,
                'sd_1' => $sd1,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('skck'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                's_9' => $s9,
                's_10' => $s10,
                'sd_1' => $sd1,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('skck'));
        }
    }
    public function usaha()
    {
        $id = $this->input->post('id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat keterangan usaha";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.
        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                's_9' => $s9,

                'sd_1' => $sd1,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('usaha'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                's_9' => $s9,

                'sd_1' => $sd1,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('usaha'));
        }
    }
    public function domisili()
    {
        $id = $this->input->post('id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat keterangan domisili";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                's_9' => $s9,
                's_10' => $s10,

                'sd_1' => $sd1,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('domisili'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                's_9' => $s9,
                's_10' => $s10,

                'sd_1' => $sd1,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('domisili'));
        }
    }
    public function pindah()
    {
        $id = $this->input->post('id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat keterangan pindah";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
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

                'sd_1' => $sd1,
                'sd_2' => $sd2,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('pindah'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
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

                'sd_1' => $sd1,
                'sd_2' => $sd2,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('pindah'));
        }
    }
    public function mati()
    {
        $id = $this->input->post('id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat keterangan kematian";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,

                'sd_1' => $sd1,
                'sd_2' => $sd2,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kematian'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,

                'sd_1' => $sd1,
                'sd_2' => $sd2,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kematian'));
        }
    }
    public function lahir()
    {
        $id = $this->input->post('id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat keterangan kelahiran";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
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
                's_16' => $s16,

                'sd_1' => $sd1,
                'sd_2' => $sd2,
                'sd_3' => $sd3,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kelahiran'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
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
                's_16' => $s16,

                'sd_1' => $sd1,
                'sd_2' => $sd2,
                'sd_3' => $sd3,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kelahiran'));
        }
    }
    public function tmampu()
    {
        $id = $this->input->post('id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat keterangan tidak mampu";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                's_9' => $s9,

                'sd_1' => $sd1,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('tidak_mampu'));
        } else {
            $where = array(
                's_id' => $id
            );

            $data = array(
                's_1' => $s1,
                's_2' => $s2,
                's_3' => $s3,
                's_4' => $s4,
                's_5' => $s5,
                's_6' => $s6,
                's_7' => $s7,
                's_8' => $s8,
                's_9' => $s9,

                'sd_1' => $sd1,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('tidak_mampu'));
        }
    }
    public function nikah()
    {
        $id = $this->input->post('nikah_id');

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

        $tglsurat = $this->input->post('tgl_surat');
        $ttd = $this->input->post('ttd');
        $jabttd = $this->input->post('jabttd');
        $kodettd = $this->input->post('kodettd');
        $buat = $this->session->userdata('username');
        $tglbuat = date('Y-m-d H-i-s');
        $jenis = "surat pengantar menikah";
        $kode_proses = 3; //status 1 pemohon masyarakat belum diproses, status 2 ditolak, status 3 surat dibuat admin lewat be.

        $no_jenis = 1; //no jenis 1 otomatis, 2 manual atau offline
        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE s_nojenis=1 AND YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
        $n311 = getRomawi(date('m', strtotime($tglsurat)));

        $n32 = date('Y', strtotime($tglsurat));
        $n3f = $n311 . "/" . $n32;
        $nosurat = $nomor[0]["n_1"] . str_pad($nomor1 + 1, 3, '0', STR_PAD_LEFT) . $nomor[0]["n_2"] . $n3f;

        if ($id == 0) {
            include "phpqrcode/qrlib.php";
            $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

            $bu = base_url();
            $logopath = isset($_GET['logo']) ? $_GET['logo'] : "$bu/assets/img/logokutim.png";

            $nomor2 = $this->db->query("SELECT * FROM surat")->num_rows();
            $namaqr = 'QR' . $nomor2 . '.png';

            $codeContents = base_url('lihat_surat/' . base64_encode($nomor2));

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
                's_stal1' => $stal1,
                's_10' => $nik11,
                's_11' => $agama11,
                's_16' => $bin11,
                's_12' => $tempat11,
                'sd_2' => $tgl11,
                's_13' => $kwn11,
                's_14' => $job11,
                's_15' => $alamat11,

                's_17' => $nama12,
                's_stal2' => $stal2,
                's_18' => $nik12,
                's_19' => $agama12,
                's_24' => $binti12,
                's_20' => $tempat12,
                'sd_3' => $tgl12,
                's_21' => $kwn12,
                's_22' => $job12,
                's_23' => $alamat12,

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
                's_stal3' => $stal3,
                's_34' => $nik21,
                's_35' => $agama21,
                's_40' => $bin21,
                's_36' => $tempat21,
                'sd_5' => $tgl21,
                's_37' => $kwn21,
                's_38' => $job21,
                's_39' => $alamat21,

                's_41' => $nama22,
                's_stal4' => $stal4,
                's_42' => $nik22,
                's_43' => $agama22,
                's_48' => $binti22,
                's_44' => $tempat22,
                'sd_6' => $tgl22,
                's_45' => $kwn22,
                's_46' => $job22,
                's_47' => $alamat22,


                's_49' => $lokasi,
                'sd_7' => $waktu,

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_proses' => $buat,
                's_tglbuat' => $tglbuat,
                's_jenispelayanan' => $jenis,
                's_kodeproses' => $kode_proses,
                's_nosurat' => $nosurat,
                's_nojenis' => $no_jenis,
                's_qr' => $namaqr,
            );

            $this->m_data->save_data($data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Buat',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('menikah'));
        } else {
            $where = array(
                's_id' => $id
            );

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

                's_tglsurat' => $tglsurat,
                's_ttd' => $ttd,
                's_jabatan' => $jabttd,
                's_kodettd' => $kodettd,
                's_edit' => $buat,
                's_tgledit' => $tglbuat,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Surat Berhasil Di Edit',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('menikah'));
        }
    }

    public function arsip_proposal()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('rekomproposal'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat rekomendasi proposal' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_rekomproposal', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_rekomproposal');
        }
    }
    public function arsip_kerja()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('rekomkerja'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat rekomendasi kerja' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_rekomkerja', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_rekomkerja');
        }
    }
    public function arsip_pkerja()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('prekomkerja'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat rekomendasi proposal' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_rekomproposal', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_rekomproposal');
        }
    }
    public function arsip_hilang()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kehilangan'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat pengantar kehilangan' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_philang', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_philang');
        }
    }
    public function arsip_skck()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('skck'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat pengantar skck' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_skck', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_skck');
        }
    }
    public function arsip_usaha()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('usaha'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan usaha' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_kusaha', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_kusaha');
        }
    }
    public function arsip_domisili()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('domisili'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan domisili' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_domisili', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_domisili');
        }
    }
    public function arsip_pindah()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('pindah'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan pindah' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_pindah', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_pindah');
        }
    }
    public function arsip_mati()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kematian'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan kematian' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_mati', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_mati');
        }
    }
    public function arsip_lahir()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('kelahiran'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan kelahiran' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_lahir', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_lahir');
        }
    }
    public function arsip_tmampu()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('tidak_mampu'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat keterangan tidak mampu' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_tmampu', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_tmampu');
        }
    }
    public function arsip_nikah()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('menikah'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_jenispelayanan='surat pengantar menikah' AND s_tglhapus IS NULL AND s_tglsurat IS NOT NULL AND s_kodeproses != 2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_nikah', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_nikah');
        }
    }
    public function arsip_csurat()
    {
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('catat_surat'));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['rekom'] = $this->db->query("SELECT * FROM surat WHERE s_tglhapus IS NULL AND s_nojenis=2 ORDER BY s_id DESC")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_csurat', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_csurat');
        }
    }
    public function arsip_proses()
    {
        $kode = $this->input->post('kode_1');
        $config['upload_path'] = './arsip/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $arsip = $this->upload->data();
            $id = $this->input->post('id_1');

            $gambar = $arsip['file_name'];

            $where = array(
                's_id' => $id
            );
            $data = array(
                's_arsip' => $gambar,
            );
            $this->m_data->update_data($where, $data, 'surat');
            $swal_test = array(
                'tittle' => 'Berhasil !!!',
                'text' => 'Arsip Berhasil Di Simpan',
            );
            $this->session->set_flashdata($swal_test);
            redirect(base_url('lihat_surat/' . base64_encode($kode)));
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            // $b = base64_decode($kode);
            $data['ttd'] = $this->db->query("SELECT * FROM ttd")->result();
            $data['surat'] = $this->db->query("SELECT * FROM permohonan INNER JOIN surat ON permohonan.pe_kode=surat.s_kodepelayanan WHERE pe_kode='$kode'")->result();
            $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

            $this->load->view('be/v_header', $jumlah);
            $this->load->view('be/v_sidebar');
            $this->load->view('be/v_proses1', $data);
            $this->load->view('be/v_footer');
            $this->load->view('be/f_proses');
        }
    }
    public function arsip_manual()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $tglarsip = date('Y-m-d H-i-s');

        if (empty($_FILES['filegambar']['name'])) {
            if ($id == 0) {
                $data = array(
                    'a_nama' => $nama,
                    'a_tgl' => $tglarsip,
                );
                $this->m_data->save_data($data, 'arsip_manual');
                $swal_test = array(
                    'tittle' => 'Berhasil !!!',
                    'text' => 'Nama Arsip Berhasil Disimpan, Arsip Belum diUpload',
                );
                $this->session->set_flashdata($swal_test);
                redirect(base_url('arsip_manual'));
            } else {
                $where = array(
                    'a_id' => $id
                );
                $data = array(
                    'a_nama' => $nama,
                    'a_tgl' => $tglarsip,
                );
                $this->m_data->update_data($data, 'arsip_manual');
                $swal_test = array(
                    'tittle' => 'Berhasil !!!',
                    'text' => 'Arsip Berhasil Di Edit',
                );
                $this->session->set_flashdata($swal_test);
                redirect(base_url('arsip_manual'));
            }
        } else {
            $config['upload_path'] = './arsip/';
            $config['allowed_types'] = 'pdf';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('filegambar')) {
                $arsip = $this->upload->data();

                $gambar = $arsip['file_name'];
                if ($id == 0) {
                    $data = array(
                        'a_nama' => $nama,
                        'a_tgl' => $tglarsip,
                        'a_arsip' => $gambar,
                    );
                    $this->m_data->save_data($data, 'arsip_manual');
                    $swal_test = array(
                        'tittle' => 'Berhasil !!!',
                        'text' => 'Nama Arsip Berhasil Disimpan',
                    );
                    $this->session->set_flashdata($swal_test);
                    redirect(base_url('arsip_manual'));
                } else {
                    $where = array(
                        'a_id' => $id
                    );
                    $data = array(
                        'a_nama' => $nama,
                        'a_tgl' => $tglarsip,
                        'a_arsip' => $gambar,
                    );
                    $this->m_data->update_data($data, 'arsip_manual');
                    $swal_test = array(
                        'tittle' => 'Berhasil !!!',
                        'text' => 'Arsip Berhasil Di Edit',
                    );
                    $this->session->set_flashdata($swal_test);
                    redirect(base_url('arsip_manual'));
                }
            } else {
                $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
                $data['rekom'] = $this->db->query("SELECT * FROM arsip_manual ORDER BY a_id DESC")->result();
                $jumlah['a'] = $this->db->query("SELECT s_1, pe_tgl, pe_kode, s_jenispelayanan FROM surat INNER JOIN permohonan ON surat.s_kodepelayanan=permohonan.pe_kode WHERE s_tglsurat IS NULL  AND s_kodeproses=1")->num_rows();

                $this->load->view('be/v_header', $jumlah);
                $this->load->view('be/v_sidebar');
                $this->load->view('be/v_arsipm', $data);
                $this->load->view('be/v_footer');
                $this->load->view('be/f_arsipm');
            }
        }
    }
}
