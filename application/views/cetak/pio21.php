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
                    Demikian surat izin ini dibuat dengan kesadaran tanpa ada paksaan dari siapapun dan untuk digunakan seperlunya.<br>
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
                Peridan, <?php echo tgl_indo($k->n_tglsurat); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                </td>
            </tr>
            <tr>
                <td style="width: 45%; text-align:center">
                    Ayah/Wali/Pengampu,<br><br><br>
                    <?php echo ucwords($k->n_nama_11); ?>
                </td>
                <td>

                </td>
                <td style="width: 45%; text-align:center">
                    Ibu/Wali/Pengampu,<br><br><br>
                    <?php echo ucwords($k->n_nama_12); ?>
                </td>
            </tr>
        </table>

        
    </font>
</div>
<?php } ?>