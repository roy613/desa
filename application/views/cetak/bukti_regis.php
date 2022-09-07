<style>
    @page {
        sheet-size: A4-L;
    }
</style>

<?php $this->load->view('cetak/fungsi'); ?>
<?php $this->load->view('cetak/kop_surat'); ?>
<html>
<font face="arial">
<?php foreach ($aaa as $a) { ?>
    <table border=0 style="margin-top:10px; margin-left:20px; width:100%">
    <tr>
        <td colspan="3" style="text-align: center;">
            <u><b>TANDA TERIMA PERMOHONAN ONLINE</b></u>
        </td>
    </tr>
    <tr>
        <td colspan="3">
<br>
        </td>
    </tr>
    <tr>
        <td style="width:25% ;">
            Nomor Registrasi 
        </td>
        <td style="width:3%">
            :
        </td>
        <td>
            <b><?php echo $a->pe_kode; ?></b>
        </td>
    </tr>
    <tr>
        <td>
            Nama Pemohon
        </td>
        <td>
            :
        </td>
        <td>
        <?php echo ucwords($a->pe_nama); ?>
        </td>
    </tr>
    <?php if ($a->pe_alamat !== null){ ?>
    <tr>
        <td>
            Alamat Pemohon
        </td>
        <td>
            :
        </td>
        <td>
        <?php echo $a->pe_alamat; ?>
        </td>
    </tr>
    <?php } ?>
    <tr>
        <td>
           No. Handphone
        </td>
        <td>
            :
        </td>
        <td>
        <?php echo $a->pe_handphone; ?>
        </td>
    </tr>
    <tr>
        <td>
           Jenis Permohonan
        </td>
        <td>
            :
        </td>
        <td>
            <b><?php echo strtoupper($a->pe_jenispermohonan); ?></b>
        </td>
    </tr>
    <tr>
        <td>
           Waktu Permohonan
        </td>
        <td>
            :
        </td>
        <td>
        <?php echo tgl_indojam1($a->pe_tgl); ?>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="font-size: 8pt;padding-top:15px">
        Keterangan :<br>
            - Permohonan anda telah diterima dan akan segera diproses; <br>
            - Simpan Tanda Terima ini sebagai bukti permohonan anda (bisa di cetak atau di screenshot);<br>
            - Pastikan nomor handphone yang anda masukkan selalu aktif;<br>
            - Anda dapat memeriksa perkembangan proses permohonan anda di menu cek surat www.bihbijb.com atau scan qrcode dibawah ini.
        </td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: right;">
<img src="<?php echo base_url(); ?>permohonan/<?php echo $a->pe_qr; ?>" style="height:110px">
        </td>

    </tr>
    </table>
    <?php } ?>
</font>
</html>