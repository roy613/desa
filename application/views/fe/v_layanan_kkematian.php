<div class="modal fade" id="k_kematian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" style="color: white; margin-left:10px">SURAT KETERANGAN KEMATIAN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#mati-1" style="cursor: pointer;">Persyaratan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#mati-2" style="cursor: pointer;">Formulir</a>
                    </li>
                </ul>
                <section id="features" class="features" style="padding-top: 5px;">
                    <div class="container" data-aos="fade-up">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="mati-1">
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

                            <div class="tab-pane" id="mati-2">
                                <div class="row gy-4">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <h3>Formulir</h3>
                                        <form method="post" action="<?php echo base_url('simpan_fe/mati') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="mati_nama">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="mati_nama" name="mati_nama" placeholder="Input Nama Alm .." required>
                                                </div>                                               
                                                <div class="col-md-6 mb-3">
                                                    <label for="mati_tptlahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="mati_tptlahir" name="mati_tptlahir" placeholder="Input Tempat Lahir Alm .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="mati_tgllahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="mati_tgllahir" name="mati_tgllahir" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="mati_rt">kewarganegaraan</label>
                                                    <input type="text" class="form-control" id="mati_kwn" name="mati_kwn" placeholder="Input Kewarganegaraan Alm .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="mati_agama">Agama</label>
                                                    <select class="form-control" id="mati_agama" name="mati_agama" required>
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
                                                    <label for="mati_pekerjaan">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="mati_pekerjaan" name="mati_pekerjaan" placeholder="Input Pekerjaan Alm .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="mati_alamat">Tempat Tinggal Terakhir</label>
                                                    <input type="text" class="form-control" id="mati_alamat" name="mati_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="mati_tglmeninggal">Tanggal Meninggal</label>
                                                    <input type="date" class="form-control" id="mati_tglmeninggal" name="mati_tglmeninggal" required>
                                                </div>
                                                <div class="col-md-9 mb-3">
                                                    <label for="mati_tptmeninggal">Alamat Tempat Meninggal</label>
                                                    <input type="text" class="form-control" id="mati_tptmeninggal" name="mati_tptmeninggal" placeholder="Contoh : Rumah Kediaman di Jl.Pattimura RT. 1 No. 2 " required>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="mati_pukul">Pukul Meninggal</label>
                                                    <input type="time" class="form-control" id="mati_pukul" name="mati_pukul" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="mati_nohp">Nomor Whatsapp Pemohon</label>
                                                    <input type="number" class="form-control" id="mati_nohp" name="mati_nohp" placeholder="Input WA Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="custom-file">
                                                        <label for="mati_filegambar">Upload Foto Identitas (KTP atau KK)</label>
                                                        <input type="file" class="custom-file-input form-control" name="mati_filegambar" id="mati_filegambar" required onchange="mati_validasi()">
                                                        <div id="mati_notif"></div>
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