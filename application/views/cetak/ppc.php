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
                        <p>LAMPIRAN VIII</p>
                        <p>KEPUTUSAN DIREKTUR JENDERAL BIMBINGAN MASYARAKAT ISLAM</p>
                        <p>NOMOR 473 TAHUN 2020</p>
                        <p>TENTANG</p>
                        <p>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        FORMULIR PERSETUJUAN CALON PENGANTIN
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Model N4
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt">
                        <u>PERSETUJUAN CALON PENGANTIN</u>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 12pt;">
                        Yang bertanda tangan dibawah ini :
                    </td>
                </tr>
            </table>

            <table border=0 style="margin-top:0px; width:100%; margin-left:0px; font-size:12pt">
                <tr>
                    <td rowspan="10" style="vertical-align: top; width:5%">
                        A.
                    </td>
                    <td colspan="4">
                        Calon Suami
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        1.
                    </td>
                    <td style="width: 35%;">
                        Nama Lengkap dan alias
                    </td>
                    <td style="width: 4%;">
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
                        <?php echo ucwords($k->n_tptlahir_1); ?>, <?php echo tgl_indo($k->n_tgllahir_1); ?>
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
                <tr>
                    <td colspan="4">
                        <br>
                    </td>
                </tr>

                <tr>
                    <td rowspan="9" style="vertical-align: top; width:5%">
                        B.
                    </td>
                    <td colspan="4">
                        Calon Istri
                    </td>
                </tr>
                <tr>
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
                        <?php echo ucwords($k->n_tptlahir_2); ?>, <?php echo tgl_indo($k->n_tgllahir_2); ?>
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
            <table border=0 style="margin-top:10px; width:100%; margin-left:0px; font-size:12pt; text-align:justify">
                <tr>
                    <td>
                        Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa ada paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Demikian surat persetujuan ini dibuat untuk digunakan seperlunya.
                    </td>
                </tr>
            </table>
            <table border=0 style="margin-top:40px; width:100%; margin-left:0px; font-size:12pt">
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td style="text-align: center">
                        Peridan, <?php echo tgl_indo($k->n_tglsurat); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                    </td>
                </tr>
                <tr>
                    <td style="width: 45%; text-align:center">
                        Calon Suami,<br><br><br>
                        <?php echo ucwords($k->n_nama_1); ?>
                    </td>
                    <td>

                    </td>
                    <td style="width: 45%; text-align:center">
                        Calon Istri,<br><br><br>
                        <?php echo ucwords($k->n_nama_2); ?>
                    </td>
                </tr>
            </table>
        </font>
    </div>
<?php } ?>