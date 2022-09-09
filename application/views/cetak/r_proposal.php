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
                <?php echo $k->s_nosurat ; ?>
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
                <?php echo Ucwords($k->s_2); ?>
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
                    <u><b>Rekomendasi</b></u>
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
        </table>

        <table border=0 style="margin-top:30px; margin-left:90px; width:97%; font-size:12pt">
            <tr>
                <td style="text-align: justify; line-height:23px">
                    Menindaklanjuti Surat Permohonan dari <?php echo Ucwords($k->s_1); ?> Desa Karangan Hilir Kecamatan Karangan,
                    Nomor : <?php echo $k->s_3; ?> tentang Perihal <?php echo $k->s_4; ?> Maka dengan ini kami selaku Pemerintah Desa
                    Karangan Hilir Kecamatan Karangan memberikan Rekomendasi kepada <?php echo Ucwords($k->s_1); ?> untuk
                    mendapatkan bantuan tersebut di atas.
                </td>
            </tr>
            <tr>
                <td style="text-align: justify;">
                    Demikian Rekomendasi ini diberikan agar dapat segera ditindaklanjuti.
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
                                                            echo "an. Kepala Desa <br>".$k->s_jabatan;
                                                        } ?>,</b><br><br><br><br><br>
                                                        <b><u><?php echo Ucwords($k->s_ttd); ?></u></b>
                                                        </td>
            </tr>
        </table>
    <?php } ?>
</font>

</html>