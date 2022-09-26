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
                    <p>LAMPIRAN IX</p>
                    <p>KEPUTUSAN DIREKTUR JENDERAL BIMBINGAN MASYARAKAT ISLAM</p>
                    <p>NOMOR 473 TAHUN 2020</p>
                    <p>TENTANG</p>
                    <p>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    FORMULIR SURAT IZIN ORANG TUA
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    Model N5
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; font-size:12pt">
                    <u>SURAT IZIN ORANG TUA</u>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                </td>
            </tr>
            <tr>
                <td style="font-size:12pt">
                    Yang bertanda tangan dibawah ini :
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:0px; width:100%; margin-left:0px; font-size:12pt">
            <tr>
                <td rowspan="8" style="vertical-align: top; width:3%">
                    A.
                </td>
                <td style="width: 4%">
                    1.
                </td>
                <td style="width:35%">
                    Nama Lengkap dan alias
                </td>
                <td style="width: 2%;">
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_nama_11); ?>
                </td>
            </tr>
            <tr>
                <td>
                    2.
                </td>
                <td>
                    Bin
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_bin_11); ?>
                </td>
            </tr>
            <tr>
                <td>
                    3.
                </td>
                <td>
                    Nomor Induk Kependudukan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo $k->n_nik_11; ?>
                </td>
            </tr>
            <tr>
                <td>
                    4.
                </td>
                <td>
                    Tempat dan Tanggal Lahir
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo Ucwords($k->n_tptlahir_11); ?>, <?php echo tgl_indo($k->n_tgllahir_11); ?>
                </td>
            </tr>
            <tr>
                <td>
                    5.
                </td>
                <td>
                    Kewarganegaraan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_kwn_11); ?>
                </td>
            </tr>
            <tr>
                <td>
                    6.
                </td>
                <td>
                    Agama
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_agama_11); ?>
                </td>
            </tr>
            <tr>
                <td>
                    7.
                </td>
                <td>
                    Pekerjaan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_job_11); ?>
                </td>
            </tr>
            <tr>
                <td>
                    8.
                </td>
                <td>
                    Alamat
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_alamat_11); ?>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <br>
                </td>
            </tr>
            <tr>
                <td rowspan="7" style="vertical-align: top;">
                    B.
                </td>
                <td>
                    1.
                </td>
                <td>
                    Nama Lengkap dan alias
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_nama_12); ?>
                </td>
            </tr>
            <tr>
                <td>
                    2.
                </td>
                <td>
                    Binti
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_binti_12); ?>
                </td>
            </tr>
            <tr>
                <td>
                    3.
                </td>
                <td>
                    Tempat dan Tanggal Lahir
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo Ucwords($k->n_tptlahir_12); ?>, <?php echo tgl_indo($k->n_tgllahir_12); ?>
                </td>
            </tr>
            <tr>
                <td>
                    4.
                </td>
                <td>
                    Kewarganegaraan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_kwn_12); ?>
                </td>
            </tr>
            <tr>
                <td>
                    5.
                </td>
                <td>
                    Agama
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_agama_12); ?>
                </td>
            </tr>
            <tr>
                <td>
                    6.
                </td>
                <td>
                    Pekerjaan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_job_12); ?>
                </td>
            </tr>
            <tr>
                <td>
                    7.
                </td>
                <td>
                    Alamat
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_alamat_12); ?>
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:20px; width:100%; margin-left:0px; font-size:12pt">
            <tr>
                <td colspan="5">
                    adalah ayah dan ibu kandung/wali/pengampu dari :
                </td>
            </tr>
            <tr>
                <td rowspan="8" style="vertical-align: top; width: 3%">

                </td>
                <td style="width:4%">
                    1.
                </td>
                <td style="width:35%">
                    Nama Lengkap dan alias
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
                    2.
                </td>
                <td>
                    Bin
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_nama_11); ?>
                </td>
            </tr>
            <tr>
                <td>
                    3.
                </td>
                <td>
                    Nomor Induk Kependudukan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo $k->n_nik_1; ?>
                </td>
            </tr>
            <tr>
                <td>
                    4.
                </td>
                <td>
                    Tempat dan Tanggal Lahir
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo Ucwords($k->n_tptlahir_1); ?>, <?php echo tgl_indo($k->n_tgllahir_1); ?>
                </td>
            </tr>
            <tr>
                <td>
                    5.
                </td>
                <td>
                    Kewarganegaraan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_kwn_1); ?>
                </td>
            </tr>
            <tr>
                <td>
                    6.
                </td>
                <td>
                    Agama
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_agama_1); ?>
                </td>
            </tr>
            <tr>
                <td>
                    7.
                </td>
                <td>
                    Pekerjaan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_job_1); ?>
                </td>
            </tr>
            <tr>
                <td>
                    8.
                </td>
                <td>
                    Alamat
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_alamat_1); ?>
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:20px; width:100%; margin-left:0px; font-size:12pt">
            <tr>
                <td colspan="5">
                    memberikan izin kepada anak kami untuk melakukan pernikahan dengan :
                </td>
            </tr>
            <tr>
                <td rowspan="8" style="vertical-align: top; width: 3%">

                </td>
                <td style="width:4%">
                    1.
                </td>
                <td style="width:35%">
                    Nama Lengkap dan alias
                </td>
                <td style="width: 2%;">
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_nama_2); ?>
                </td>
            </tr>
            <tr>
                <td>
                    2.
                </td>
                <td>
                    Binti
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_nama_21); ?>
                </td>
            </tr>
            <tr>
                <td>
                    3.
                </td>
                <td>
                    Nomor Induk Kependudukan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo $k->n_nik_2; ?>
                </td>
            </tr>
            <tr>
                <td>
                    4.
                </td>
                <td>
                    Tempat dan Tanggal Lahir
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo Ucwords($k->n_tptlahir_2); ?>, <?php echo tgl_indo($k->n_tgllahir_2); ?>
                </td>
            </tr>
            <tr>
                <td>
                    5.
                </td>
                <td>
                    Kewarganegaraan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_kwn_2); ?>
                </td>
            </tr>
            <tr>
                <td>
                    6.
                </td>
                <td>
                    Agama
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_agama_2); ?>
                </td>
            </tr>
            <tr>
                <td>
                    7.
                </td>
                <td>
                    Pekerjaan
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_job_2); ?>
                </td>
            </tr>
            <tr>
                <td>
                    8.
                </td>
                <td>
                    Alamat
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo ucwords($k->n_alamat_2); ?>
                </td>
            </tr>
        </table>

        
    </font>
</div>
<?php } ?>