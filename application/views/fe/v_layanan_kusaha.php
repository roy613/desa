<div class="modal fade" id="k_usaha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" style="color: white; margin-left:10px">SURAT KET. USAHA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#usaha-1" style="cursor: pointer;">Persyaratan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#usaha-2" style="cursor: pointer;">Formulir</a>
                    </li>
                </ul>
                <section id="features" class="features" style="padding-top: 5px;">
                    <div class="container" data-aos="fade-up">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="usaha-1">
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
                                        <p style="text-align: justify; color:red">
                                            Pastikan isi semua form yang ada dengan data yang sebenarnya. Apabila anda <b>tidak bisa</b> menekan tombol proses berarti ada form yang belum diisi.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Tab Content 1 -->

                            <div class="tab-pane" id="usaha-2">
                                <div class="row gy-4">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <h3>Formulir</h3>
                                        <form method="post" action="<?php echo base_url('simpan_fe/usaha') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_nama">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="usaha_nama" name="usaha_nama" placeholder="Input Nama Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_nik">NIK</label>
                                                    <input type="number" onkeyup="usaha_ceknik()" class="form-control" id="usaha_nik" name="usaha_nik" placeholder="Input NIK Anda .." required>
                                                    <div id="usaha_notifnik"></div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_jk">Jenis Kelamin</label>
                                                    <select class="form-control" id="usaha_jk" name="usaha_jk" disabled required>
                                                        <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_tptlahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="usaha_tptlahir" name="usaha_tptlahir" placeholder="Input Tempat Lahir Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_tgllahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="usaha_tgllahir" name="usaha_tgllahir" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_pekerjaan">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="usaha_pekerjaan" name="usaha_pekerjaan" placeholder="Input Pekerjaan Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_alamat1">Alamat Pemohon</label>
                                                    <input type="text" class="form-control" id="usaha_alamat1" name="usaha_alamat1" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_alamat">Alamat Usaha (Jalan)</label>
                                                    <input type="text" class="form-control" id="usaha_alamat" name="usaha_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_rt">Alamat (RT)</label>
                                                    <input type="number" class="form-control" id="usaha_rt" name="usaha_rt" placeholder="Input RT Tempat Usaha Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_Usaha">Jenis Usaha</label>
                                                    <input type="text" class="form-control" id="usaha_usaha" name="usaha_usaha" placeholder="Input Jenis Usaha Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="usaha_nohp">Nomor Whatsapp Pemohon</label>
                                                    <input type="number" class="form-control" id="usaha_nohp" name="usaha_nohp" placeholder="Input WA Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="custom-file">
                                                        <label for="usaha_filegambar">Upload Foto Identitas (KTP atau KK)</label>
                                                        <input type="file" class="custom-file-input form-control" name="usaha_filegambar" id="usaha_filegambar" required onchange="usaha_validasi()">
                                                        <div id="usaha_notif"></div>
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