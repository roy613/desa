<style>
    @page {
        sheet-size: A4-L;
    }
</style>

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
                <?php if ($k->s_stal3 == 1) {
                            echo Ucwords("Alm. " . $k->s_33);
                        } else {
                            echo ucwords($k->s_33);
                        } ?>
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
                <?php if ($k->s_stal3 == 1) {
                            echo Ucwords("Alm. " . $k->s_40);
                        } else {
                            echo ucwords($k->s_40);
                        } ?>
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
                <?php if ($k->s_stal3 == 1) {
                            echo "-";
                        } else {
                            echo $k->s_34;
                        } ?>
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
                <?php if ($k->s_stal3 == 1) {
                            echo "-";
                        } else {
                            echo Ucwords($k->s_36) . ", " . tgl_indo($k->sd_5);
                        } ?>
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
                <?php if ($k->s_stal3 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->s_37);
                        } ?>
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
                <?php if ($k->s_stal3 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->s_35);
                        } ?>
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
                <?php if ($k->s_stal3 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->s_38);
                        } ?>
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
                <?php if ($k->s_stal3 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->s_39);
                        } ?>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <br>
                </td>
            </tr>
            <tr>
                <td rowspan="8" style="vertical-align: top;">
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
                <?php if ($k->s_stal4 == 1) {
                            echo Ucwords("Almh. " . $k->s_41);
                        } else {
                            echo ucwords($k->s_41);
                        } ?>
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
                <?php if ($k->s_stal4 == 1) {
                            echo Ucwords("Alm. " . $k->s_48);
                        } else {
                            echo ucwords($k->s_48);
                        } ?>
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
                <?php if ($k->s_stal4 == 1) {
                            echo "-";
                        } else {
                            echo $k->s_42;
                        } ?>
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
                <?php if ($k->s_stal4 == 1) {
                            echo "-";
                        } else {
                            echo Ucwords($k->s_44) . ", " . tgl_indo($k->sd_6);
                        } ?>
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
                <?php if ($k->s_stal4 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->s_45);
                        } ?>
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
                <?php if ($k->s_stal4 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->s_43);
                        } ?>
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
                <?php if ($k->s_stal4 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->s_46);
                        } ?>
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
                <?php if ($k->s_stal4 == 1) {
                            echo "-";
                        } else {
                            echo ucwords($k->s_47);
                        } ?>
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
                <?php echo ucwords($k->s_25); ?>
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
                <?php echo ucwords($k->s_33); ?>
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
                <?php echo $k->s_26; ?>
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
                <?php echo Ucwords($k->s_28); ?>, <?php echo tgl_indo($k->sd_4); ?>
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
                <?php echo ucwords($k->s_30); ?>
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
                <?php echo ucwords($k->s_29); ?>
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
                <?php echo ucwords($k->s_27); ?>
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
                <?php echo ucwords($k->s_32); ?>
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
                <?php echo ucwords($k->s_1); ?>
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
                <?php echo ucwords($k->s_9); ?>
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
                <?php echo $k->s_2; ?>
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
                <?php echo Ucwords($k->s_4); ?>, <?php echo tgl_indo($k->sd_1); ?>
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
                <?php echo ucwords($k->s_6); ?>
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
                <?php echo ucwords($k->s_5); ?>
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
                <?php echo ucwords($k->s_3); ?>
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
                <?php echo ucwords($k->s_8); ?>
                </td>
            </tr>
        </table>

        
    </font>
</div>
<?php } ?>