<style>
    .nav-link.active {
        background-color: #05c46b !important;
    }

    .nav-link {
        background-color: rgb(240, 240, 240, .7) !important;
        color :black !important;
    }
</style>
<section>
    <div class="modal fade" id="rekomkerja" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                    <h5 class="modal-title" style="color: white; margin-left:10px"> Desa xxxxxx</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1" style="cursor: pointer;">Persyaratan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2" style="cursor: pointer;">Formulir</a>
                        </li>
                    </ul>
                    <section id="features" class="features" style="padding-top: 5px;">
                        <div class="container" data-aos="fade-up">
                            <div class="tab-content">

                                <div class="tab-pane active show" id="tab-1">
                                    <div class="row gy-4">
                                        <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                            <h3>Persyaratan</h3>
                                            <p class="fst-italic">
                                                Silahkan lengkapi dokumen persyaratan dibawah ini untuk melakukan permohonan :
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Fotokopi KTP</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Surat Pengantar RT</li>
                                            </ul>
                                            <p>
                                                Apabila dokumen persyaratan anda telah lengkap, silahkan klik tab formulir (diatas) untuk mengisi formulir permohonan.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                            <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div><!-- End Tab Content 1 -->

                                <div class="tab-pane" id="tab-2">
                                    <div class="row gy-4">
                                        <div class="col-lg-12 order-2 order-lg-1">
                                            <h3>Undaesenti</h3>
                                            <p>
                                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                culpa qui officia deserunt mollit anim id est laborum
                                            </p>
                                            <p class="fst-italic">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua.
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                                            <img src="assets/img/features-2.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div><!-- End Tab Content 2 -->
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" id="rekomkerja" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                    <h5 class="modal-title" style="color: white; margin-left:5px"> Desa xxxxxx</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <button type="button" href="javascript:;" id="syaratkerja" onclick="syaratkerja()" class="btn btn-success">Persyaratan</button>
                    <button type="button" href="javascript:;" id="alurkerja" onclick="alurkerja()" class="btn btn-secondary">Alur Pelayanan</button>
                    <button type="button" href="javascript:;" id="mohonkerja" onclick="mohonkerja()" class="btn btn-secondary">Permohonan</button>
                    <div id="kerjaalur" style="padding-top: 25px;">
                        <a target="_blank" href="<?php echo base_url(); ?>assets/alur.png"><img class="img-fluid mb-3" src="<?php echo base_url(); ?>assets/alur.png" title="klik untuk memperbesar"></a>
                    </div>
                    <div id="kerjasyarat" style="padding-top: 25px;">
                        <h6>Persyaratan Surat Rekomendasi Kerja :</h6><br>
                        <p style="text-align: justify;"> 1. Fotocopy KTP<br>
                            2. Surat Permohonan Rekomendasi*<br><br>
                            *Surat permohonan akan dibuat otomatis oleh sistem, silahkan cetak dan tanda tangani kemudian bawa ketika mengambil dokumen. <br><br>
                            <b><i>Apakah Persyaratan Anda sudah Lengkap ??? <br>klik permohonan untuk membuat permohonan</i></b></br>
                        </p>
                    </div>
                    <div id="kerjapermohonan" style="padding-top: 25px;">
                        <form method="post" action="<?php echo base_url('simpan/kerja') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Desa</label>
                                        <select class="form-control" name="nama_desa" id="nama_desa" required>
                                            <option value="" selected disabled>- Pilih
                                                Desa -</option>
                                            <?php foreach ($desa as
                                                $a) { ?>
                                                <option><?php echo $a->d_desa; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div style="color:red"><?php echo form_error('nama_desa'); ?> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>NIK</label>
                                        <input type="number" id="nik" name="nik" onkeyup="cek()" class="form-control" placeholder="Masukkan NIK..." value="<?php echo set_value('nik'); ?>" required>
                                        <div id="notif"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group" style="">
                                        <label>Nama Pemohon</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama sesuai KTP ..." value="<?php echo set_value('nama'); ?>" required disabled>
                                        <div style="color:red"><?php echo form_error('nama'); ?> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>Alamat (Jalan)</label>
                                        <input type="text" name="jalan" class="form-control" placeholder="Masukkan nama jalan .." value="<?php echo set_value('jalan'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>Alamat (No Rumah)</label>
                                        <input type="text" name="norumah" class="form-control" placeholder="Masukkan no rumah .." value="<?php echo set_value('norumah'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>Alamat (RT)</label>
                                        <input type="text" name="rt" class="form-control" placeholder="Masukkan rt .." value="<?php echo set_value('rt'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>Alamat (Dusun)</label>
                                        <input type="text" name="dusun" class="form-control" placeholder="Masukkan nama dusun .." value="<?php echo set_value('dusun'); ?>" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tmpt" class="form-control" placeholder="Masukkan tempat lahir..." value="<?php echo set_value('tmpt'); ?>" required>
                                        <div style="color:red"><?php echo form_error('tmpt'); ?> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgllahir" class="form-control" placeholder="Masukkan tanggal lahir..." value="<?php echo set_value('tgllahir'); ?>" required>
                                        <div style="color:red"><?php echo form_error('tgllahir'); ?> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>No Handphone</label>
                                        <input type="number" name="nohp" class="form-control" placeholder="Masukkan no hp ..." required value="<?php echo set_value('nohp'); ?>">
                                        <div style="color:red"><?php echo form_error('nohp'); ?> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>Pendidikan Terakhir</label>
                                        <input type="text" name="pendidikan" class="form-control" placeholder="Masukkan pendidikan ..." required value="<?php echo set_value('pendidikan'); ?>">
                                        <div style="color:red"><?php echo form_error('pendidikan'); ?> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="filektp">Upload fc KTP</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="filektp" id="filektp" required>
                                                <label class="custom-file-label" for="filektp">Pilih dokumen</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="">
                                        <label>Perusahaan yang di tuju</label>
                                        <input type="text" name="perusahaan" class="form-control" placeholder="Masukkan nama perusahaan..." required value="<?php echo set_value('perusahaan'); ?>">
                                        <div style="color:red"><?php echo form_error('perusahaan'); ?> </div>
                                    </div>
                                </div>
                                <div>
                                    <p style="padding-left: 25px;">
                                        <b>*File yang diupload harus dalam format jpg atau jpeg atau png.</b>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button id="kerjaproses" type="submit" class="btn btn-primary" style="float: right;">Proses</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</section>