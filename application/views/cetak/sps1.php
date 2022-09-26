<style>
    @page {
        sheet-size: A4-L;
    }
</style>
<?php $this->load->view('fungsi'); ?>
<?php foreach ($aaa as $k) { ?>
    <div>
        <html>
        <font face="arial">
            <table border=0 style="margin-top:20px; width:100%; margin-left:0px; font-size:12pt">
                <tr>
                    <td style="text-align: center;">
                        <b><u>SURAT PERNYATAAN STATUS</u></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Yang bertanda tangan dibawah ini :
                    </td>
                </tr>
            </table>
            <table border=0 style="margin-top:0px; width:100%; margin-left:0px; font-size:12pt">
                <tr>
                    <td style="width:35%">
                        Nama
                    </td>
                    <td style="width: 2%;">
                        :
                    </td>
                    <td>
                        <?php echo ucwords($k->n_nama_1); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Bin/Binti
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo ucwords($k->n_nama_11); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tempat/ Tgl Lahir
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo Ucwords($k->n_tptlahir_1); ?>, <?php echo tgl_indo($k->n_tgllahir_1); ?>
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
                        <?php echo ucwords($k->n_agama_1); ?>
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
                        <?php echo ucwords($k->n_job_1); ?>
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
                        Laki-Laki
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
                        <?php echo ucwords($k->n_alamat_1); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">

                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: justify;">
                        Dengan ini saya tersebut diatas menyatakan dengan sebenarnya bahwa saya pada hari/ tanggal ini : <?php echo hariindo(date("D", strtotime($k->n_tglsurat))); ?> / <?php echo tgl_indo($k->n_tglsurat); ?> berstatus : Jejaka / Duda Mati / Duda Cerai, sesuai dengan Surat Pengantar Nikah Model N1 s/d Model N7 yang dikeluarkan oleh kepala desa atau pejabat domisili saya.
                    </td>
                </tr>
                <tr>
                    <td colspan="3">

                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        Selanjutnya saya bermaksud akan melangsungkan pernikahan dengan seseorang :
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo ucwords($k->n_nama_2); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Bin/Binti
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo ucwords($k->n_nama_21); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tempat/ Tgl Lahir
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo Ucwords($k->n_tptlahir_2); ?>, <?php echo tgl_indo($k->n_tgllahir_2); ?>
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
                        <?php echo ucwords($k->n_agama_2); ?>
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
                        <?php echo ucwords($k->n_job_2); ?>
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
                        Perempuan
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
                        <?php echo ucwords($k->n_alamat_2); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">

                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: justify;">
                        Oleh karena itu, bilamana Surat Pernyataan ini <b>TIDAK BENAR</b> atau <b>MENYALAHI ATURAN</b>, maka saya siap dan bersedia <b>DITUNTUT/DIADILI</b> sesuai dengan hukum dan perundang-undangan yang berlaku, sekaligus tidak melibatkan pihak Instansi manapun dan siapapun juga.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: justify;">
                        Demikian Surat Pernyataan ini saya buat diatas meterai cukup, sesuai dengan akal sehat jasmani dan rohani, tanpa pengaruh dan paksaan dari pihak manapun juga serta untuk dipergunakan sebagaimana mestinya.
                    </td>
                </tr>

            </table>
            <table border=0 style="width: 100%; font-size:12pt">
                <tr>
                    <td rowspan="4" style="width: 55%;"></td>
                    <td colspan="3"><br></td>
                </tr>
                <tr>
                    <td style="width:17%">
                        Dibuat di
                    </td>
                    <td style="width:2%">
                        :
                    </td>
                    <td style="width: auto;">
                        Desa Peridan
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
                        <?php echo tgl_indo($k->n_tglsurat); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr style="margin-top:-1px; text-align:left; height:1px; width:93%; color:black">
                    </td>
                </tr>
            </table>
            <table border=0 style="width: 100%; font-size:12pt; margin-top:-10px">
                <tr>
                    <td style="width:30%;"></td>
                    <td style="width:30%;"></td>
                    <td style=" text-align:center;"><b> Yang Membuat Pernyataan,</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:center"> <u><b><?php echo ucwords($k->n_nama_1); ?></b></u></td>
                </tr>
            </table>
            <table border=0 style="width: 100%; font-size:12pt; margin-top:-10px">
                <tr>
                    <td style=" text-align:center;"><b> Mengetahui <br> <?php if ($k->n_mpket == 1) {
                                                                            echo ucwords($k->n_jabttd);
                                                                        } else if ($k->n_mpket == 2) {
                                                                            echo "an. Kepala Desa <br>" . $k->n_jabttd;
                                                                        } ?> Peridan,</b></td>
                    <td style="width:30%;"></td>
                    <td style="width:30%;"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center"> <u><b><?php echo Ucwords($k->n_ttd); ?></b></u></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>



        </font>
    </div>
<?php } ?>