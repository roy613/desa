<style>
    @page {
        sheet-size: A4-L;
    }
</style>

<?php $this->load->view('kop_surat'); ?>
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
    <tr>
        <td>
            Alamat Pemohon
        </td>
        <td>
            :
        </td>
        <td>
            hkjgudyt
        </td>
    </tr>
    <tr>
        <td>
           No. Handphone
        </td>
        <td>
            :
        </td>
        <td>
        <?php echo ucwords($a->pe_handphone); ?>
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
            <b>jhvgjfyufhhghhgiygihbkibiigui</b>
        </td>
    </tr>
    <tr>
        <td>
           Tanggal Permohonan
        </td>
        <td>
            :
        </td>
        <td>
        <?php echo ucwords($a->pe_tgl); ?>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="font-size: 9pt;">
        Keterangan :<br>
            - Permohonan anda telah diterima dan akan segera diproses; <br>
            - Simpan Tanda Terima ini sebagai bukti permohonan anda (bisa di cetak atau di screenshot);<br>
            - Pastikan nomor handphone yang anda masukkan selalu aktif;<br>
            - Anda dapat memeriksa perkembangan proses permohonan anda di menu cek surat www.bihbijb.com atau scan qrcode dibawah ini.
        </td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: right;">
bkjbijboojbkjbk<br>
jhvuyfuvuhvvjhv<br>
guyvuyvyyhhvhhv<br> 
hgcjvjgvjvuvhhv
        </td>

    </tr>
    </table>
    <?php } ?>
</font>
</html>