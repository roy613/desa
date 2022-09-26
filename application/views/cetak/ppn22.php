<style>
    @page {
        sheet-size: A4-L;
    }
</style>
<?php foreach ($aaa as $k) { ?>
<div>
    <html>
    <font face="arial">
        <table border=0 style="margin-top:10px; width:100%; margin-left:0px; font-size:12pt; text-align:justify">
            <tr>
                <td>
                    Demikian surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk dipergunakan sebagaimana mestinya.<br>
                </td>
            </tr>
        </table>
        <table border=0 style="margin-top:40px; width:100%; margin-left:0px; font-size:12pt">
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td style="text-align: center;">
                    Karangan Hilir, <?php echo tgl_indo($k->s_tglsurat); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                </td>
            </tr>
            <tr>
                <td style="width: 45%; text-align:left">
                <img src="<?php echo base_url(); ?>temp/<?php echo $k->s_qr; ?>" style="height:110px">
                </td>
                <td>

                </td>
                <td style="width: 45%; text-align:center; vertical-align:top">
                    <?php if ($k->s_kodettd == 1) {
                        echo ucwords($k->s_jabatan);
                    } else if ($k->s_kodettd == 2) {
                        echo "an. Kepala Desa <br>" . $k->s_jabttd;
                    } ?>,</b> <br><br><br>
                    <b><u><?php echo $k->s_ttd; ?></u></b>
                </td>
            </tr>
        </table>


    </font>
</div>
<?php } ?>