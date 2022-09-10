<div class="modal fade" id="k_kelahiran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" style="color: white; margin-left:10px">SURAT KET. KELAHIRAN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#lahir-1" style="cursor: pointer;">Persyaratan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#lahir-2" style="cursor: pointer;">Formulir</a>
                    </li>
                </ul>
                <section id="features" class="features" style="padding-top: 5px;">
                    <div class="container" data-aos="fade-up">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="lahir-1">
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
                                        <p style="text-align: justify; color:red">
                                            Apabila dokumen persyaratan anda telah lengkap, silahkan klik tab formulir (diatas) untuk mengisi formulir permohonan.
                                        </p>
                                        <p style="text-align: justify;">
                                            Pastikan isi semua form yang ada dengan data yang sebenarnya. Apabila anda <b>tidak bisa</b> menekan tombol proses berarti ada form yang belum diisi.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Tab Content 1 -->

                            <div class="tab-pane" id="lahir-2">
                                <div class="row gy-4">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <h3>Formulir</h3>
                                        <form method="post" action="<?php echo base_url('simpan_fe/lahir') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_nama">Nama Anak</label>
                                                    <input type="text" class="form-control" id="lahir_nama" name="lahir_nama" placeholder="Input Nama Anak .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_jk">Jenis Kelamin Anak</label>
                                                    <select class="form-control" id="lahir_jk" name="lahir_jk" required>
                                                        <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_tptlahir">Tempat Lahir Anak</label>
                                                    <input type="text" class="form-control" id="lahir_tptlahir" name="lahir_tptlahir" placeholder="Input Tempat Lahir Anak .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_tgllahir">Tanggal Lahir Anak</label>
                                                    <input type="date" class="form-control" id="lahir_tgllahir" name="lahir_tgllahir" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_agama">Agama Anak</label>
                                                    <select class="form-control" id="lahir_agama" name="lahir_agama" required>
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
                                                    <label for="lahir_alamat">Alamat Anak</label>
                                                    <input type="text" class="form-control" id="lahir_alamat" name="lahir_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_anak_ke">Anak Ke</label>
                                                    <select class="form-control" id="lahir_anak_ke" name="lahir_anak_ke" required>
                                                        <option selected disabled value="">-- Pilihan --</option>
                                                        <option value="1">Anak Pertama</option>
                                                        <option value="2">Anak Kedua</option>
                                                        <option value="3">Anak Ketiga</option>
                                                        <option value="4">Anak Keempat</option>
                                                        <option value="5">Anak Kelima</option>
                                                        <option value="6">Anak Keenam</option>
                                                        <option value="7">Anak Ketujuh</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <hr style="width: 100%;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_nama_a">Nama Ayah</label>
                                                    <input type="text" class="form-control" id="lahir_nama_a" name="lahir_nama_a" placeholder="Input Nama Ayah .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_tptlahir_a">Tempat Lahir Ayah</label>
                                                    <input type="text" class="form-control" id="lahir_tptlahir_a" name="lahir_tptlahir_a" placeholder="Input Tempat Lahir Ayah .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_tgllahir_a">Tanggal Lahir Ayah</label>
                                                    <input type="date" class="form-control" id="lahir_tgllahir_a" name="lahir_tgllahir_a" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_agama_a">Agama Ayah</label>
                                                    <select class="form-control" id="lahir_agama_a" name="lahir_agama_a" required>
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
                                                    <label for="lahir_pekerjaan_a">Pekerjaan Ayah</label>
                                                    <input type="text" class="form-control" id="lahir_pekerjaan_a" name="lahir_pekerjaan_a" placeholder="Input Pekerjaan Ayah .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_alamat_a">Alamat Ayah</label>
                                                    <input type="text" class="form-control" id="lahir_alamat_a" name="lahir_alamat_a" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div>
                                                    <hr style="width: 100%;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_nama_b">Nama Ibu</label>
                                                    <input type="text" class="form-control" id="lahir_nama_b" name="lahir_nama_b" placeholder="Input Nama Ibu .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_tptlahir_b">Tempat Lahir Ibu</label>
                                                    <input type="text" class="form-control" id="lahir_tptlahir_b" name="lahir_tptlahir_b" placeholder="Input Tempat Lahir Ibu .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_tgllahir_b">Tanggal Lahir Ibu</label>
                                                    <input type="date" class="form-control" id="lahir_tgllahir_b" name="lahir_tgllahir_b" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_agama_b">Agama Ibu</label>
                                                    <select class="form-control" id="lahir_agama_b" name="lahir_agama_b" required>
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
                                                    <label for="lahir_pekerjaan_b">Pekerjaan Ibu</label>
                                                    <input type="text" class="form-control" id="lahir_pekerjaan_b" name="lahir_pekerjaan_b" placeholder="Input Pekerjaan Ibu .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_alamat_b">Alamat Ibu</label>
                                                    <input type="text" class="form-control" id="lahir_alamat_b" name="lahir_alamat_b" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div>
                                                    <hr style="width: 100%;">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="lahir_nohp">Nomor Whatsapp Pemohon (Ayah / Ibu)</label>
                                                    <input type="number" class="form-control" id="lahir_nohp" name="lahir_nohp" placeholder="Input WA Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="custom-file">
                                                        <label for="lahir_filegambar">Upload Foto Kartu Keluarga</label>
                                                        <input type="file" class="custom-file-input form-control" name="lahir_filegambar" id="lahir_filegambar" required onchange="lahir_validasi()">
                                                        <div id="lahir_notif"></div>
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