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
        $kode_proses = 2; //status 1 pemohon masyarakat belum diproses, status 2 surat dibuat admin lewat be.

        $nomor =  $this->db->query("SELECT * FROM daftar_pelayanan WHERE da_pelayanan='$jenis'")->result_array();
        $nomor1 = $this->db->query("SELECT * FROM surat WHERE YEAR(s_tglsurat) = YEAR(NOW())")->num_rows();
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
}
