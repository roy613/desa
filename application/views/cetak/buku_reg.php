<style>
    td {
        padding: 4px;
        height: 40px;
        font-size: 11pt;
    }

    th {
        height: 70px;
        font-size: 13pt;
    }
</style>
<?php $this->load->view('cetak/fungsi'); ?>

<html>
<div>
    <font face="arial">
        <table border=0 style=" width: 100%;margin-top:-20px; margin-left:20px">
            <tr>
                <td style="text-align:center">
                    <h2>BUKU REGISTER PELAYANAN</h2>
                    <h2>DESA KARANGAN HILIR</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <hr style="margin-top:-5px; height:2px; width:70%; text-align:center; color:black">
                </td>
            </tr>
        </table>



        <table border=1 style="border-collapse:collapse; margin-top:15px; width: 100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NOMOR SURAT</th>
                    <th>TANGGAL</th>
                    <th>NAMA PEMOHON</th>
                    <!-- <th?>ALAMAT PEMOHON</th> -->
                    <!-- alamat tidak ada karena tidak semua surat ada alamat pemohon -->
                    <th>PENANDATANGAN</th>
                    <th>JENIS SURAT</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($aaa as $k) { ?>
                    <tr>
                        <td style="text-align:center"><?php echo $no++; ?></td>
                        <td style="text-align:left"><?php echo $k->s_nosurat; ?></td>
                        <td style="text-align:left"><?php echo tgl_indo($k->s_tglsurat); ?></td>
                        <?php if ($k->s_jenispelayanan == "surat pengantar menikah") { ?>
                            <td><?php echo ucwords($k->s_1); ?><br><?php echo ucwords($k->s_25); ?></td>
                        <?php } else { ?>
                            <td style="text-align:left"><?php echo ucwords($k->s_1); ?></td>
                        <?php } ?>
                        <td style="text-align:left"><?php echo ucwords($k->s_jabatan); ?>-<?php echo ucwords($k->s_ttd); ?></td>
                        <td style="text-align:left"><?php echo ucwords($k->s_jenispelayanan); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <table border=0 style="font-size: 12pt; border-collapse:collapse; width: 100%; margin-left:20px; margin-top:30px;">
            <tr>
                <td style="text-align: center; width:55%">

                </td>
                <td style="text-align: center;">
                    Karangan Hilir, <?php echo tgl_indo(date('Y-m-d')); ?><br>
                    <?php foreach ($ttd as $b) { ?>
                        <b><?php echo  Ucwords($b->tt_jabatan); ?></b><br><br>


                        <b><?php echo  Ucwords($b->tt_nama); ?></b>
                    <?php } ?>
                </td>
            </tr>
        </table>
    </font>
</div>

</html>