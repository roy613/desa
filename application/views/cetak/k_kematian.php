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
        <table border=0 style="margin-top:15px; width:100%; font-size:12pt">
            <tr>
                <td style="text-align:center">
                    <h4><b><u>SURAT KETERANGAN KEMATIAN</u></b></h4>
                </td>
            </tr>
            <tr>
                <td style="text-align:center">
                    <p>Nomor : <?php echo $k->s_nosurat; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <br>

                </td>
            </tr>
        </table>
        <p style="margin-left: 15px; font-size:12pt"> Yang bertandatangan di bawah ini menerangkan bahwa :</p>
        <table border=0 style="margin-top:10px; margin-left:20px; margin-bottom:10px; width:100%; font-size:12pt">
            <tr>
                <td style="width:33%">
                    Nama Lengkap
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
                    Tempat Tanggal Lahir
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_2); ?>, <?php echo tgl_indo($k->sd_1); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Warga Negara
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
                    <?php echo Ucwords($k->s_4); ?>
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
                    <?php echo Ucwords($k->s_5); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Tempat Tinggal Terakhir
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $k->s_6; ?>
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:0px; margin-left:15px; width:100%; font-size:12pt; padding:2px">
            <tr>
                <td style="text-align: justify;">
                    Adalah benar warga Desa Karangan Hilir Kecamatan Karangan Kabupaten Kutai Timur dan telah
                    Meninggal Dunia pada hari <?php echo hariIndo(date('D', strtotime($k->sd_2))); ?> Tanggal <?php echo tgl_indo($k->sd_2); ?> Pukul <?php echo $k->s_7; ?> WITA bertempat di <?php echo $k->s_8; ?> Desa Karangan Hilir Kecamatan Karangan Kabupaten Kutai Timur.
                </td>
            </tr>
            <tr>
                <td>

                </td>
            </tr>
            <tr>
                <td style="text-align: justify;">
                    Demikian Surat Keterangan ini diberikan agar dapat dipergunakan sebagaimana mestinya.
                </td>
            </tr>
        </table>
        <table border=0 style="width:100%; font-size:12pt;margin-top:30px; margin-left:400px">
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td style="width:40%">
                    Dibuat di
                </td>
                <td style="width:4%">
                    :
                </td>
                <td>
                    Karangan Hilir
                </td>
            </tr>
            <tr>
                <td>
                    Pada Tanggal
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo tgl_indo($k->s_tglsurat); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr style="margin-top:-1px; height:1px; width:100%; color:black; text-align:left">
                </td>
            </tr>
        </table>
        <table border=0 style="width: 100%;  font-size:12pt">
            <tr>

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
</font>

</html>