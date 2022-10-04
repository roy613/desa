<style>
    .nav-link.active {
        background-color: #05c46b !important;
    }

    .nav-link {
        background-color: rgb(240, 240, 240, .7) !important;
        color :black !important;
        cursor: pointer;
    }
    .form-group{
        padding-bottom: 17px;
    }
</style>

    <div class="modal fade" id="r_pkerja" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                    <h5 class="modal-title" style="color: white; margin-left:10px"> SURAT Pengantar REKOM KERJA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#pkerja-1" style="cursor: pointer;">Persyaratan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#pkerja-2" style="cursor: pointer;">Formulir</a>
                        </li>
                    </ul>
                    <section id="features" class="features" style="padding-top: 5px;">
                        <div class="container" data-aos="fade-up">
                            <div class="tab-content">

                                <div class="tab-pane active show" id="pkerja-1">
                                    <div class="row gy-4">
                                    <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                            <h3>Persyaratan</h3>
                                            <p class="fst-italic">
                                                Silahkan lengkapi dokumen persyaratan dibawah ini untuk melakukan permohonan :
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Foto KTP / Kartu Keluarga (Format jpeg/jpg/png)</li>
                                                <!-- <li><i class="bi bi-check-circle-fill"></i> Surat Pengantar RT</li> -->
                                            </ul>
                                            <p style="text-align: justify;">
                                                Apabila dokumen persyaratan anda telah lengkap, silahkan klik tab formulir (diatas) untuk mengisi formulir permohonan.
                                            </p>
                                            <p style="text-align: justify;">
                                           Dokumen anda akan diproses pada saat hari dan jam kerja (Senin - Jumat Pukul 08.00-13.00)
                                        </p>
                                            <p style="text-align: justify; color:red">
                                                Pastikan isi semua form yang ada dengan data yang sebenarnya. Apabila anda <b>tidak bisa</b> menekan tombol proses berarti ada form yang belum diisi.
                                            </p>
                                        </div>  
                                    </div>
                                </div><!-- End Tab Content 1 -->

                                <div class="tab-pane" id="pkerja-2">
                                    <div class="row gy-4">
                                        <div class="col-lg-12 order-2 order-lg-1">
                                            <h3>Formulir</h3>
                                            <form method="post" action="<?php echo base_url('simpan_fe/pkerja') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_nama">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="pkerja_nama" name="pkerja_nama" placeholder="Input Nama Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_nik">NIK</label>
                                                    <input type="number" onkeyup="pkerja_ceknik()" class="form-control" id="pkerja_nik" name="pkerja_nik" placeholder="Input NIK Anda .."  required>
                                                    <div id="pkerja_notifnik"></div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_jk">Jenis Kelamin</label>
                                                    <select class="form-control" id="pkerja_jk" name="pkerja_jk" disabled required>
                                                        <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_tptlahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="pkerja_tptlahir" name="pkerja_tptlahir" placeholder="Input Tempat Lahir Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_tgllahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="pkerja_tgllahir" name="pkerja_tgllahir" required>
                                                </div>                                                
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_agama">Agama</label>
                                                    <select class="form-control" id="pkerja_agama" name="pkerja_agama" required>
                                                        <option selected disabled value="">-- Pilih Agama --</option>
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katolik</option>
                                                        <option>Hindu</option>
                                                        <option>Budha</option>
                                                        <option>Konghucu</option>
                                                    </select>
                                                </div> 
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_pekerjaan">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="pkerja_pekerjaan" name="pkerja_pekerjaan" placeholder="Input Pekerjaan Anda .." required>
                                                </div>                                       

                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="pkerja_alamat" name="pkerja_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_perusahaan">Perusahaan Tujuan</label>
                                                    <input type="text" class="form-control" id="pkerja_perusahaan" name="pkerja_perusahaan" placeholder="Input Perusahaan Tujuan Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pkerja_nohp">Nomor Whatsapp Pemohon</label>
                                                    <input type="number" class="form-control" id="pkerja_nohp" name="pkerja_nohp" placeholder="Input WA Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="custom-file">
                                                        <label for="pkerja_filegambar">Upload Foto Identitas (KTP atau KK)</label>
                                                        <input type="file" class="custom-file-input form-control" name="pkerja_filegambar" id="pkerja_filegambar" required onchange="pkerja_validasi()">
                                                        <div id="pkerja_notif"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" style="float: right;">Proses</button>
                                        </form>
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

   