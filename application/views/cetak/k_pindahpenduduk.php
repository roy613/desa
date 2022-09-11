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
                    <h4><b><u>SURAT KETERANGAN PINDAH PENDUDUK</u></b></h4>
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
                    Kewarganegaraan
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
                    Agama
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
                    Status Perkawinan
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_7); ?>
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
                    <?php echo Ucwords($k->s_8); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Pendidikan
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_9); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat Asal
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo Ucwords($k->s_10); ?>
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
                    <?php echo Ucwords($k->s_2); ?>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;">
                    Pindah ke
                </td>
                <td style="vertical-align: top;">
                    :
                </td>
                <td>
                    <table border="" style="width: 100%; font-size:12pt">
                        <tr>
                            <td style="width: 30%;">
                                Jalan
                            </td>
                            <td style="width:3%">
                                :
                            </td>
                            <td>
                                <?php echo Ucwords($k->s_11); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kelurahan/Desa
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo Ucwords($k->s_12); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kecamatan
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo Ucwords($k->s_13); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kabupaten/Kota
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo Ucwords($k->s_14); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Provinsi
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo Ucwords($k->s_15); ?>
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
                                <?php echo tgl_indo($k->sd_2); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    Alasan Pindah
                </td>
                <td>
                    :
                </td>
                <td>
                    Pindah Tempat Tinggal
                </td>
            </tr>
            <tr>
                <td>
                    Pengikut
                </td>
                <td>
                    :
                </td>
                <td>
                    -
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:0px; margin-left:15px; width:100%; font-size:12pt; padding:2px">
            <tr>
                <td style="text-align: justify;">
                    Demikian Surat Pengantar Keterangan Pindah ini diberikan, agar dapat dipergunakan sebagaimana
                    mestinya.
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
</font>

</html>