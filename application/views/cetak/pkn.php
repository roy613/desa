<style>
    @page {
        sheet-size: A4-L;
    }
</style>
<?php $this->load->view('fungsi'); ?>
<?php foreach ($aaa as $k) { ?>
<div>
    <html>
    <font face="arial">
        <table border=0 style="margin-top:-20px; width:100%; margin-left:0px; font-size:9pt">
            <tr>
                <td style="padding-left:0px; text-align:left">
                    <p>LAMPIRAN VI</p>
                    <p>KEPUTUSAN DIREKTUR JENDERAL BIMBINGAN MASYARAKAT ISLAM</p>
                    <p>NOMOR 473 TAHUN 2020</p>
                    <p>TENTANG</p>
                    <p>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    FORMULIR PERMOHONAN KEHENDAK NIKAH
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    Model N2
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:-20px; width:100%; margin-left:0px; font-size:12pt">
            <tr>
                <td style="width: 10%;">
                    Perihal
                </td>
                <td style="width: 2%;">
                    :
                </td>
                <td>
                    Permohonan Kehendak Nikah
                </td>
                <td style="text-align: right;">
                Peridan, <?php echo tgl_indo($k->n_tglsurat); ?>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: left;">
                    Kepada Yth. <br>
                    Kepala KUA Kecamatan<br>
                    di Sangkulirang
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:20px; width:100%; margin-left:0px; font-size:12pt">
            <tr>
                <td colspan="3">
                    <span style="color:white">xxxxxx</span> Dengan hormat, kami mengajukan permohonan kehendak nikah untuk atas nama :
                </td>
            </tr>
            <tr>
                <td colspan="3">

                </td>
            </tr>
            <tr>
                <td style="width: 23%;">
                    Calon Suami
                </td>
                <td style="width: 2%;">
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_nama_1); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Calon Istri
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_nama_2); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Hari/ Tanggal/ Pukul
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo hariIndo(date("D", strtotime($k->n_waktu))); ?>, <?php echo tgl_indojam1($k->n_waktu); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Tempat Akad Nikah
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_lokasi); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">

                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:0px; width:100%; margin-left:0px; font-size:12pt">
            <tr>
                <td colspan="2">
                    <span style="color:white">xxxxxx</span> Bersama ini kami sampaikan surat-surat yang diperlukan untuk diperiksa sebagai berikut :
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td style="width: 4%">
                    1.
                </td>
                <td>
                    Surat pengantar nikah dari desa
                </td>
            </tr>
            <tr>
                <td>
                    2.
                </td>
                <td>
                    Persetujuan calon mempelai
                </td>
            </tr>
            <tr>
                <td>
                    3.
                </td>
                <td>
                    Fotokopi KTP
                </td>
            </tr>
            <tr>
                <td>
                    4.
                </td>
                <td>
                    Fotokopi Akte Kelahiran
                </td>
            </tr>
            <tr>
                <td>
                    5.
                </td>
                <td>
                    Fotokopi Kartu Keluarga
                </td>
            </tr>
            <tr>
                <td>
                    6.
                </td>
                <td>
                    Pasfoto 2x3 (3 lembar) berlatar belakang biru
                </td>
            </tr>
            <tr>
                <td>
                    7.
                </td>
                <td>
                    ..............................
                </td>
            </tr>
            <tr>
                <td>
                    8.
                </td>
                <td>
                    ..............................
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span style="color:white">xxxxxx</span> Demikian permohonan ini kami sampaikan, kiranya dapat diperiksa, dihadiri dan dicatat sesuai dengan ketentuan peraturan perundang-undangan.
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:30px; width:100%; margin-left:20px; font-size:12pt">
            <tr>
                <td style="width: 35%;">

                </td>
                <td style="width: 30%;">

                </td>
                <td style="width: 35%;">
                    Wassalam,
                </td>
            </tr>
            <tr>
                <td>
                    Diterima Tanggal ...................
                </td>
                <td>

                </td>
                <td>
                    Pemohon,
                </td>
            </tr>
            <tr>
                <td>
                    Yang Menerima.
                </td>
                <td>

                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Kepala KUA
                </td>
                <td>

                </td>
                <td>
                   
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                </td>
                <td>

                </td>
                <td>
                  
                </td>
            </tr>
            <tr>
                <td>
                    ..............................
                </td>
                <td>

                </td>
                <td>
                ..............................
                </td>
            </tr>
        </table>
    </font>
</div>
<?php }?>