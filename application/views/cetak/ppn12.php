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
            <table border=0 style="margin-top:0px; width:100%; margin-left:0px; font-size:9pt">
                <tr>
                    <td style="padding-left:0px; text-align:left">
                        <p>LAMPIRAN V</p>
                        <p>KEPUTUSAN DIREKTUR JENDERAL BIMBINGAN MASYARAKAT ISLAM</p>
                        <p>NOMOR 473 TAHUN 2020</p>
                        <p>TENTANG</p>
                        <p>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        FORMULIR PENGANTAR NIKAH
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Model N1
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
                    <td style="width: 35%;">
                        KANTOR DESA
                    </td>
                    <td style="width: 2%;">
                        :
                    </td>
                    <td>
                        PERIDAN
                    </td>
                </tr>
                <tr>
                    <td>
                        KECAMATAN
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        SANGKULIRANG
                    </td>
                </tr>
                <tr>
                    <td>
                        KABUPATEN/KOTA
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        KUTAI TIMUR
                    </td>
                </tr>
            </table>
            <table border=0 style="margin-top:20px; width:100%; margin-left:0px; font-size:12pt">
                <tr>
                    <td style="text-align: center;">
                        <b><u>PENGANTAR NIKAH</u></b>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; padding-top:-6px">
                        Nomor : <?php echo $k->n_nomor; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Yang bertanda tangan dibawah ini menjelaskan dengan sesungguhnya bahwa :
                    </td>
                </tr>
            </table>
            <table border=0 style="margin-top:0px; width:100%; margin-left:0px; font-size:12pt">
                <tr>
                    <td style="width: 4%">
                        1.
                    </td>
                    <td style="width:35%">
                        Nama
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
                        NIK
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
                        3.
                    </td>
                    <td>
                        Jenis Kelamin
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        Perempuan
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
                <tr>
                    <td>
                        9.
                    </td>
                    <td>
                        Status Pernikahan
                    </td>
                    <td>
                        :
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        a. Laki-laki : Jejaka, Duda,
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td style="padding-left: 18px;">
                        atau beristri ke ....
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        -
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        b. Perempuan : Perawan, Janda
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_status_2 == 1) {
                            echo "Perawan";
                        } else {
                            echo "Janda";
                        };
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        Adalah benar anak dari pernikahan seorang pria :
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Nama Lengkap dan alias
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal3 == 1) {
                            echo Ucwords("Alm. " . $k->n_nama_21);
                        } else {
                            echo ucwords($k->n_nama_21);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Nomor Induk Kependudukan (NIK)
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal3 == 1) {
                            echo "-";
                        } else {
                            echo $k->n_nik_21;
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Tempat dan Tanggal Lahir
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal3 == 1) {
                            echo "-";
                        } else {
                            echo Ucwords($k->n_tptlahir_21) . "," . tgl_indo($k->n_tgllahir_21);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Kewarganegaraan
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal3 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->n_kwn_21);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Agama
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal3 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->n_agama_21);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Pekerjaan
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal3 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->n_job_21);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Alamat
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal3 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->n_alamat_21);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        dengan seorang Pria :
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Nama Lengkap dan alias
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal4 == 1) {
                            echo Ucwords("Almh. " . $k->n_nama_22);
                        } else {
                            echo ucwords($k->n_nama_22);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Nomor Induk Kependudukan (NIK)
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal4 == 1) {
                            echo "-";
                        } else {
                            echo $k->n_nik_22;
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Tempat dan Tanggal Lahir
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal4 == 1) {
                            echo "-";
                        } else {
                            echo Ucwords($k->n_tptlahir_22) . "," . tgl_indo($k->n_tgllahir_22);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Kewarganegaraan
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal4 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->n_kwn_22);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Agama
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal4 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->n_agama_22);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Pekerjaan
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal4 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->n_job_22);
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Alamat
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php if ($k->n_stal4 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->n_alamat_22);
                        } ?>
                    </td>
                </tr>
            </table>




        </font>
    </div>
<?php } ?>