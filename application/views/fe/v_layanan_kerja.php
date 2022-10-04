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

    <div class="modal fade" id="r_kerja" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                    <h5 class="modal-title" style="color: white; margin-left:10px"> SURAT REKOMENDASI KERJA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#kerja-1" style="cursor: pointer;">Persyaratan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kerja-2" style="cursor: pointer;">Formulir</a>
                        </li>
                    </ul>
                    <section id="features" class="features" style="padding-top: 5px;">
                        <div class="container" data-aos="fade-up">
                            <div class="tab-content">

                                <div class="tab-pane active show" id="kerja-1">
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

                                <div class="tab-pane" id="kerja-2">
                                    <div class="row gy-4">
                                        <div class="col-lg-12 order-2 order-lg-1">
                                            <h3>Formulir</h3>
                                            <form method="post" action="<?php echo base_url('simpan_fe/kerja') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_nama">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="kerja_nama" name="kerja_nama" placeholder="Input Nama Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_nik">NIK</label>
                                                    <input type="number" onkeyup="kerja_ceknik()" class="form-control" id="kerja_nik" name="kerja_nik" placeholder="Input NIK Anda .."  required>
                                                    <div id="kerja_notifnik"></div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_jk">Jenis Kelamin</label>
                                                    <select class="form-control" id="kerja_jk" name="kerja_jk" disabled required>
                                                        <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_tptlahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="kerja_tptlahir" name="kerja_tptlahir" placeholder="Input Tempat Lahir Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_tgllahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="kerja_tgllahir" name="kerja_tgllahir" required>
                                                </div>                                                
                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_agama">Agama</label>
                                                    <select class="form-control" id="kerja_agama" name="kerja_agama" required>
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
                                                    <label for="kerja_pekerjaan">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="kerja_pekerjaan" name="kerja_pekerjaan" placeholder="Input Pekerjaan Anda .." required>
                                                </div>                                       

                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="kerja_alamat" name="kerja_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_perusahaan">Perusahaan Tujuan</label>
                                                    <input type="text" class="form-control" id="kerja_perusahaan" name="kerja_perusahaan" placeholder="Input Perusahaan Tujuan Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="kerja_nohp">Nomor Whatsapp Pemohon</label>
                                                    <input type="number" class="form-control" id="kerja_nohp" name="kerja_nohp" placeholder="Input WA Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="custom-file">
                                                        <label for="kerja_filegambar">Upload Foto Identitas (KTP atau KK)</label>
                                                        <input type="file" class="custom-file-input form-control" name="kerja_filegambar" id="kerja_filegambar" required onchange="kerja_validasi()">
                                                        <div id="kerja_notif"></div>
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

   