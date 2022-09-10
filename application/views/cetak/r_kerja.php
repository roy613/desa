<style>
    @page {
        sheet-size: A4-L;
    }
</style>
<?php $this->load->view('cetak/fungsi'); ?>
<?php $this->load->view('cetak/kop_surat'); ?>
<html>
<font face="arial">
    <?php
    foreach ($aaa as $k) { ?>

        <table border=0 style="margin-top:20px; width:100%; font-size:12pt">

            <tr>
                <td style="text-align:left; width: 13%">
                    Nomor
                </td>
                <td style="text-align:center; width:3%">
                    :
                </td>
                <td>
                    <?php echo $k->s_nosurat; ?>
                </td>
                <td>

                </td>
                <td>
                    Kepada
                </td>
            </tr>
            <tr>
                <td style="text-align:left">
                    Lampiran
                </td>
                <td style="text-align:center">
                    :
                </td>
                <td>
                    -
                </td>
                <td style="text-align: right; vertical-align:top">
                    Yth.
                </td>
                <td>
                    Pimpinan <?php echo Ucwords($k->s_8); ?>
                </td>
            </tr>
            <tr>
                <td style="text-align:left">
                    Perihal
                </td>
                <td style="text-align:center">
                    :
                </td>
                <td>
                    <u><b>Rekomendasi Kerja</b></u>
                </td>
                <td style="text-align: right;">

                </td>
                <td>
                    di
                </td>
            </tr>
            <tr>
                <td style="text-align:left">

                </td>
                <td style="text-align:center">

                </td>
                <td>

                </td>
                <td style="text-align: right;">

                </td>
                <td style="padding-left: 20px;">
                    - Tempat
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4" style="text-align: justify;"><br><br>
                    Memperhatikan Surat Permohonan dari Saudara :
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:10px; margin-left:100px; margin-bottom:10px; width:100%; font-size:12pt">
            <tr>
                <td style="width:33%">
                    Nama
                </td>
                <td style="width: 3%;">
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_1); ?>
                </td>
            </tr>
            <tr>
                <td>
                    NIK
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $k->s_2; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Tempat Tanggal Lahir
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_4); ?>, <?php echo tgl_indo($k->sd_1); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_3); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Agama
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_5); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Pekerjaan
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_6); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $k->s_7; ?>
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:0px; margin-left:90px; width:100%; font-size:12pt">
            <tr>
                <td style="text-align: justify;">
                    Dengan ini kami selaku Pemerintah Desa Karangan Hilir memberikan Rekomendasi Kerja kepada nama yang bersangkutan di atas sebagai kelengkapan berkas untuk melamar kerja agar dapat diterima pada Perusahaan <?php echo Ucwords($k->s_8); ?>.
                </td>
            </tr>
            <tr>
                <td style="text-align: justify;">
                    Demikian Rekomendasi ini diberikan, atas bantuan dan kerja sama yang baik diucapkan terima kasih.
                </td>
            </tr>
        </table>
        <table border=0 style="width: 100%; margin-top:30px; font-size:12pt">
            <tr>
                <td style="width:30%;"></td>
                <td style="width:30%;"></td>
                <td style=" text-align:center;">Karangan Hilir, <?php echo tgl_indo($k->s_tglsurat); ?></td>
            </tr>
            <tr>
                <td rowspan="5" style="width:30%; text-align:justify; font-size:8pt"><img src="<?php echo base_url(); ?>temp/<?php echo $k->s_qr; ?>" style="height:110px"><br> Keterangan : QRCODE yang ada pada surat ini bukan Tanda Tangan Digital, melainkan hanya digunakan untuk pelacakan arsip.</td>
                <td style="width:30%;"></td>
                <td style=" text-align:center; vertical-align:top"><b><?php if ($k->s_kodettd == 1) {
                                                                            echo ucwords($k->s_jabatan);
                                                                        } else if ($k->s_kodettd == 2) {
                                                                            echo "an. Kepala Desa <br>" . $k->s_jabatan;
                                                                        } ?>,</b><br><br><br><br>
                    <b><u><?php echo Ucwords($k->s_ttd); ?></u></b>
                </td>
            </tr>
        </table>
    <?php } ?>

</html>