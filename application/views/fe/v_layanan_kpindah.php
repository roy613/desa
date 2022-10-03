<div class="modal fade" id="k_pindah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" style="color: white; margin-left:10px">SURAT KETERANGAN PINDAH</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#pindah-1" style="cursor: pointer;">Persyaratan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#pindah-2" style="cursor: pointer;">Formulir</a>
                    </li>
                </ul>
                <section id="features" class="features" style="padding-top: 5px;">
                    <div class="container" data-aos="fade-up">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="pindah-1">
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
                                           Dokumen anda akan diproses pada saat hari dan jam kerja (Senin - Sabtu Pukul 08.00-13.00)
                                        </p>
                                        <p style="text-align: justify; color:red">
                                            Pastikan isi semua form yang ada dengan data yang sebenarnya. Apabila anda <b>tidak bisa</b> menekan tombol proses berarti ada form yang belum diisi.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Tab Content 1 -->

                            <div class="tab-pane" id="pindah-2">
                                <div class="row gy-4">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <h3>Formulir</h3>
                                        <form method="post" action="<?php echo base_url('simpan_fe/pindah') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_nama">Nama</label>
                                                    <input type="text" class="form-control" id="pindah_nama" name="pindah_nama" placeholder="Input Nama Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_nik">NIK</label>
                                                    <input type="number" onkeyup="pindah_ceknik()" class="form-control" id="pindah_nik" name="pindah_nik" placeholder="Input NIK Anda .." required>
                                                    <div id="pindah_notifnik"></div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_jk">Jenis Kelamin</label>
                                                    <select class="form-control" id="pindah_jk" name="pindah_jk" disabled required>
                                                        <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_tptlahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="pindah_tptlahir" name="pindah_tptlahir" placeholder="Input Tempat Lahir .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_tgllahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="pindah_tgllahir" name="pindah_tgllahir" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_kwn">Kewarganegaraan</label>
                                                    <input type="text" class="form-control" id="pindah_kwn" name="pindah_kwn" placeholder="Input Kewarganegaraan .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_agama">Agama</label>
                                                    <select class="form-control" id="pindah_agama" name="pindah_agama" required>
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
                                                    <label for="pindah_statuskwn">Status Perkawinan</label>
                                                    <select class="form-control" id="pindah_statuskwn" name="pindah_statuskwn" required>
                                                        <option selected disabled value="">-- Pilih Status --</option>
                                                        <option>Belum Menikah</option>
                                                        <option>Menikah</option>
                                                        <option>Cerai Mati</option>
                                                        <option>Cerai Hidup</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_pekerjaan">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="pindah_pekerjaan" name="pindah_pekerjaan" placeholder="Input Pekerjaan .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_pendidikan">Pendidikan</label>
                                                    <select class="form-control" id="pindah_pendidikan" name="pindah_pendidikan" required>
                                                        <option selected disabled value="">-- Pilih Pendidikan --</option>
                                                        <option>Tidak Sekolah</option>
                                                        <option>SD</option>
                                                        <option>SMP</option>
                                                        <option>SMA</option>
                                                        <option>Diploma I-III</option>
                                                        <option>Diploma IV / S1</option>
                                                        <option>S2</option>
                                                        <option>S3</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_alamat">Alamat Asal</label>
                                                    <input type="text" class="form-control" id="pindah_alamat" name="pindah_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div>
                                                    <hr style="width: 100%;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-12">
                                                    <label style="padding-bottom: 10px; color:firebrick"><u><b>Alamat Tujuan</b></u></label>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_jalan">Jalan</label>
                                                    <input type="text" class="form-control" id="pindah_jalan" name="pindah_jalan" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_desa">Desa / Kelurahan</label>
                                                    <input type="text" class="form-control" id="pindah_desa" name="pindah_desa" placeholder="Input Nama Desa/kelurahan .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_camat">Kecamatan</label>
                                                    <input type="text" class="form-control" id="pindah_camat" name="pindah_camat" placeholder="Input Kecamatan Tujuan .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_kab">Kabupaten/Kota</label>
                                                    <input type="text" class="form-control" id="pindah_kab" name="pindah_kab" placeholder="Input Kabupaten/Kota Tujuan .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_provinsi">Provinsi</label>
                                                    <input type="text" class="form-control" id="pindah_provinsi" name="pindah_provinsi" placeholder="Input Provinsi Tujuan .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_tglpindah">Rencana Tanggal Pindah</label>
                                                    <input type="date" class="form-control" id="pindah_tglpindah" name="pindah_tglpindah" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pindah_nohp">Nomor Whatsapp Pemohon</label>
                                                    <input type="number" class="form-control" id="pindah_nohp" name="pindah_nohp" placeholder="Input WA Anda .." required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="custom-file">
                                                        <label for="pindah_filegambar">Upload Foto Kartu Keluarga</label>
                                                        <input type="file" class="custom-file-input form-control" name="pindah_filegambar" id="pindah_filegambar" required onchange="pindah_validasi()">
                                                        <div id="pindah_notif"></div>
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