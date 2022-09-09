<div class="modal fade" id="p_nikah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" style="color: white; margin-left:10px">SURAT PENGANTAR NIKAH</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <label style="margin-bottom: 5px;" for="pilih_nikah">Silahkan Pilih Pengantar Nikah Yang Ingin Anda Buat :</label>
                    <select class="form-select form-select-sm" name="pilih_nikah" id="pilih_nikah" onchange="pilih_nikah_kosong()">
                        <option selected disabled value="">-- Pilih Surat --</option>
                        <option value="1">Surat Untuk Kedua Pengantin</option>
                        <option value="2">Surat Untuk Pengantin Pria</option>
                        <option value="3">Surat Untuk Pengantin Wanita</option>
                    </select>
                </div>
                <p style="font-size:8pt; text-align:justify; margin-top:15px"> Keterangan : <br>
                    1. Silahkan Pilih <b>Surat Untuk Kedua Pengantin</b> Apabila <b>Anda dan Pasangan</b> Berasal Dari Desa Karangan Hilir<br>
                    2. Silahkan Pilih <b>Surat Untuk Pengantin Pria</b> Apabila Anda <b>Pria</b> Berasal Dari Desa Karangan Hilir Sedangkan Pasangan Anda Berasal Dari Desa Lain <br>
                    3. Silahkan Pilih <b>Surat Untuk Pengantin Wanita</b> Apabila Anda <b>Wanita</b> Berasal Dari Desa Karangan Hilir Sedangkan Pasangan Anda Berasal Dari Desa Lain
                </p>
                <button onclick="pilih_nikah()" data-bs-dismiss="modal" id="tombol_nikah" class="btn btn-primary" style="float: right;" disabled>Pilih</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="p_nikah1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" style="color: white; margin-left:10px">SURAT PENGANTAR NIKAH</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#nikah-1" style="cursor: pointer;">Persyaratan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#nikah-2" style="cursor: pointer;">Formulir</a>
                    </li>
                </ul>
                <div class="tab-content">
                            <div class="tab-pane active show" id="nikah-1">
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
                            </div>


                    <!-- End Tab Content 1 -->

                    <div class="tab-pane" id="nikah-2">
                        <div class="row gy-4">
                            <div class="col-lg-12 order-2 order-lg-1">
                                <h3>Formulir</h3>
                                <form method="post" action="<?php echo base_url('simpan_fe/nikah') ?>" enctype="multipart/form-data">

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#satu">Form 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#dua">Form 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tiga">Form 3</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#empat">Form 4</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#lima">Form 5</a>
                                        </li>
                                    </ul>


                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade show active" id="satu" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h6 style="color: red;">
                                                        <b><u>DATA CALON PENGANTIN PRIA</u></b>
                                                    </h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_nama1">Nama Catin Pria</label>
                                                        <input type="text" class="form-control" id="nikah_nama1" name="nikah_nama1" placeholder="Input Nama Catin Pria ..." required>
                                                        <input type="hidden" class="form-control" id="nikah_id" name="nikah_id">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_nik1">NIK Catin Pria</label>
                                                        <input type="number" class="form-control" id="nikah_nik1" name="nikah_nik1" onkeyup="nikah_ceknik1()" placeholder="Input NIK Catin Pria ..." required>
                                                        <div id="nikah_notifnik"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_job1">Pekerjaan Catin Pria</label>
                                                        <input type="text" class="form-control" id="nikah_job1" name="nikah_job1" placeholder="Input Pekerjaan Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_tempat1">Tempat Lahir Catin Pria</label>
                                                        <input type="text" class="form-control" id="nikah_tempat1" name="nikah_tempat1" placeholder="Input Tempat Lahir Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_tgl1">Tanggal Lahir Catin Pria</label>
                                                        <input type="date" class="form-control" id="nikah_tgl1" name="nikah_tgl1" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_agama1">Agama Catin Pria</label>
                                                        <select class="form-control" name="nikah_agama1" id="nikah_agama1" required>
                                                            <option selected disabled value="">-- Pilih Agama --</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katolik</option>
                                                            <option>Budha</option>
                                                            <option>Hindu</option>
                                                            <option>Konghucu</option>
                                                            <option>Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_kwn1">Warga Negara Catin Pria</label>
                                                        <input type="text" class="form-control" id="nikah_kwn1" name="nikah_kwn1" placeholder="Input Kewarganegaraan Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="nikah_status1">Status Catin Pria</label>
                                                        <select class="form-control" name="nikah_status1" id="nikah_status1" required>
                                                            <option selected disabled value="">-- Pilih Status --</option>
                                                            <option value="1">Jejaka</option>
                                                            <option value="2">Duda</option>
                                                            <option value="3">Beristri ke 2</option>
                                                            <option value="4">Beristri ke 3</option>
                                                            <option value="5">Beristri ke 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="nikah_alamat1">Alamat Catin Pria</label>
                                                        <input type="text" class="form-control" id="nikah_alamat1" name="nikah_alamat1" placeholder="Contoh: Jl. M. Ali" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="dua" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h6 style="color: red;">
                                                        <b><u>DATA ORANG TUA CALON PENGANTIN PRIA</u></b>
                                                    </h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_nama11">Nama Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_nama11" name="nikah_nama11" placeholder="Input Nama Ayah Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bnik11">
                                                    <div class="form-group">
                                                        <label for="nikah_nik11">NIK Ayah</label>
                                                        <input type="number" class="form-control" id="nikah_nik11" name="nikah_nik11" onkeyup="nikah_ceknik11()" placeholder="Input NIK Ayah Catin Pria ..." required>
                                                        <div id="nikah_notifnik11"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bagama11">
                                                    <div class="form-group">
                                                        <label for="nikah_agama11">Agama Ayah</label>
                                                        <select class="form-control" name="nikah_agama11" id="nikah_agama11" required>
                                                            <option selected disabled value="">-- Pilih Agama --</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katolik</option>
                                                            <option>Budha</option>
                                                            <option>Hindu</option>
                                                            <option>Konghucu</option>
                                                            <option>Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_bin11">Bin</label>
                                                        <input type="text" class="form-control" id="nikah_bin11" name="nikah_bin11" placeholder="Input Bin Ayah Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_btempat11">
                                                    <div class="form-group">
                                                        <label for="nikah_tempat11">Tempat Lahir Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_tempat11" name="nikah_tempat11" placeholder="Input Tempat Lahir Ayah Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_btgl11">
                                                    <div class="form-group">
                                                        <label for="nikah_tgl11">Tanggal Lahir Ayah</label>
                                                        <input type="date" class="form-control" id="nikah_tgl11" name="nikah_tgl11" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bkwn11">
                                                    <div class="form-group">
                                                        <label for="nikah_kwn11">Warga Negara Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_kwn11" name="nikah_kwn11" placeholder="Input Kewarganegaraan Ayah Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bjob11">
                                                    <div class="form-group">
                                                        <label for="nikah_job11">Pekerjaan Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_job11" name="nikah_job11" placeholder="Input Pekerjaan Ayah Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_balamat11">
                                                    <div class="form-group">
                                                        <label for="nikah_alamat11">Alamat Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_alamat11" name="nikah_alamat11" placeholder="Contoh: Jl. M. Ali" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" id="nikah_garis1">
                                                    <div class="form-group">
                                                        <hr style="margin-top:0px; height:6px; width:100%; color:black">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bnama12">
                                                    <div class="form-group">
                                                        <label for="nikah_nama12">Nama Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_nama12" name="nikah_nama12" placeholder="Input Nama Ibu Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bnik12">
                                                    <div class="form-group">
                                                        <label for="nikah_nik12">NIK Ibu</label>
                                                        <input type="number" class="form-control" id="nikah_nik12" name="nikah_nik12" onkeyup="nikah_ceknik12()" placeholder="Input NIK Ibu Catin Pria ..." required>
                                                        <div id="nikah_notifnik12"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bagama12">
                                                    <div class="form-group">
                                                        <label for="nikah_agama12">Agama Ibu</label>
                                                        <select class="form-control" name="nikah_agama12" id="nikah_agama12" required>
                                                            <option selected disabled value="">-- Pilih Agama --</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katolik</option>
                                                            <option>Budha</option>
                                                            <option>Hindu</option>
                                                            <option>Konghucu</option>
                                                            <option>Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bbinti12">
                                                    <div class="form-group">
                                                        <label for="nikah_binti12">Binti</label>
                                                        <input type="text" class="form-control" id="nikah_binti12" name="nikah_binti12" placeholder="Input Binti Ibu Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_btempat12">
                                                    <div class="form-group">
                                                        <label for="nikah_tempat12">Tempat Lahir Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_tempat12" name="nikah_tempat12" placeholder="Input Tempat Lahir Ibu Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_btgl12">
                                                    <div class="form-group">
                                                        <label for="nikah_tgl12">Tanggal Lahir Ibu</label>
                                                        <input type="date" class="form-control" id="nikah_tgl12" name="nikah_tgl12" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bkwn12">
                                                    <div class="form-group">
                                                        <label for="nikah_kwn12">Warga Negara Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_kwn12" name="nikah_kwn12" placeholder="Input Kewarganegaraan Ibu Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bjob12">
                                                    <div class="form-group">
                                                        <label for="nikah_job12">Pekerjaan Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_job12" name="nikah_job12" placeholder="Input Pekerjaan Ibu Catin Pria ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_balamat12">
                                                    <div class="form-group">
                                                        <label for="nikah_alamat12">Alamat Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_alamat12" name="nikah_alamat12" placeholder="Contoh: Jl. M. Ali" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tiga" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h6 style="color: red;">
                                                        <b><u>DATA CALON PENGANTIN WANITA</u></b>
                                                    </h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_nama2">Nama Catin Wanita</label>
                                                        <input type="text" class="form-control" id="nikah_nama2" name="nikah_nama2" placeholder="Input Nama Catin Wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_nik2">NIK Catin Wanita</label>
                                                        <input type="number" class="form-control" id="nikah_nik2" name="nikah_nik2" onkeyup="nikah_ceknik2()" placeholder="Input NIK Catin Wanita ..." required>
                                                        <div id="nikah_notifnik2"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_job2">Pekerjaan Catin Wanita</label>
                                                        <input type="text" class="form-control" id="nikah_job2" name="nikah_job2" placeholder="Input Pekerjaan Catin Wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_tempat2">Tempat Lahir Catin Wanita</label>
                                                        <input type="text" class="form-control" id="nikah_tempat2" name="nikah_tempat2" placeholder="Input Tempat Lahir Catin Wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_tgl2">Tanggal Lahir Catin Wanita</label>
                                                        <input type="date" class="form-control" id="nikah_tgl2" name="nikah_tgl2" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_agama2">Agama Catin Wanita</label>
                                                        <select class="form-control" name="nikah_agama2" id="nikah_agama2" required>
                                                            <option selected disabled value="">-- Pilih Agama --</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katolik</option>
                                                            <option>Budha</option>
                                                            <option>Hindu</option>
                                                            <option>Konghucu</option>
                                                            <option>Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_kwn2">Warga Negara Catin Wanita</label>
                                                        <input type="text" class="form-control" id="nikah_kwn2" name="nikah_kwn2" placeholder="Input Kewarganegaraan Catin Wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="nikah_status2">Status Catin Wanita</label>
                                                        <select class="form-control" name="nikah_status2" id="nikah_status2" required>
                                                            <option selected disabled value="">-- Pilih Status --</option>
                                                            <option value="1">Perawan</option>
                                                            <option value="2">Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="nikah_alamat2">Alamat Catin Wanita</label>
                                                        <input type="text" class="form-control" id="nikah_alamat2" name="nikah_alamat2" placeholder="Contoh: Jl. M. Ali" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="empat" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h6 style="color: red;">
                                                        <b><u>DATA ORANG TUA CALON PENGANTIN WANITA</u></b>
                                                    </h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_nama21">Nama Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_nama21" name="nikah_nama21" placeholder="Input Nama Ayah Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bnik21">
                                                    <div class="form-group">
                                                        <label for="nikah_nik21">NIK Ayah</label>
                                                        <input type="number" class="form-control" id="nikah_nik21" name="nikah_nik21" onkeyup="nikah_ceknik21()" placeholder="Input NIK Ayah Catin wanita ..." required>
                                                        <div id="nikah_notifnik21"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bagama21">
                                                    <div class="form-group">
                                                        <label for="nikah_agama21">Agama Ayah</label>
                                                        <select class="form-control" name="nikah_agama21" id="nikah_agama21" required>
                                                            <option selected disabled value="">-- Pilih Agama --</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katolik</option>
                                                            <option>Budha</option>
                                                            <option>Hindu</option>
                                                            <option>Konghucu</option>
                                                            <option>Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nikah_bin21">Bin</label>
                                                        <input type="text" class="form-control" id="nikah_bin21" name="nikah_bin21" placeholder="Input Bin Ayah Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_btempat21">
                                                    <div class="form-group">
                                                        <label for="nikah_tempat21">Tempat Lahir Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_tempat21" name="nikah_tempat21" placeholder="Input Tempat Lahir Ayah Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_btgl21">
                                                    <div class="form-group">
                                                        <label for="nikah_tgl21">Tanggal Lahir Ayah</label>
                                                        <input type="date" class="form-control" id="nikah_tgl21" name="nikah_tgl21" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bkwn21">
                                                    <div class="form-group">
                                                        <label for="nikah_kwn21">Warga Negara Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_kwn21" name="nikah_kwn21" placeholder="Input Kewarganegaraan Ayah Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bjob21">
                                                    <div class="form-group">
                                                        <label for="nikah_job21">Pekerjaan Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_job21" name="nikah_job21" placeholder="Input Pekerjaan Ayah Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_balamat21">
                                                    <div class="form-group">
                                                        <label for="nikah_alamat21">Alamat Ayah</label>
                                                        <input type="text" class="form-control" id="nikah_alamat21" name="nikah_alamat21" placeholder="Contoh: Jl. M. Ali" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" id="nikah_garis2">
                                                    <div class="form-group">
                                                        <hr style="margin-top:0px; height:6px; width:100%; color:black">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bnama22">
                                                    <div class="form-group">
                                                        <label for="nikah_nama22">Nama Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_nama22" name="nikah_nama22" placeholder="Input Nama Ibu Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bnik22">
                                                    <div class="form-group">
                                                        <label for="nikah_nik22">NIK Ibu</label>
                                                        <input type="number" class="form-control" id="nikah_nik22" name="nikah_nik22" onkeyup="nikah_ceknik22()" placeholder="Input NIK Ibu Catin wanita ..." required>
                                                        <div id="nikah_notifnik22"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bagama22">
                                                    <div class="form-group">
                                                        <label for="nikah_agama22">Agama Ibu</label>
                                                        <select class="form-control" name="nikah_agama22" id="nikah_agama22" required>
                                                            <option selected disabled value="">-- Pilih Agama --</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katolik</option>
                                                            <option>Budha</option>
                                                            <option>Hindu</option>
                                                            <option>Konghucu</option>
                                                            <option>Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bbinti22">
                                                    <div class="form-group">
                                                        <label for="nikah_binti22">Binti</label>
                                                        <input type="text" class="form-control" id="nikah_binti22" name="nikah_binti22" placeholder="Input Binti Ibu Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_btempat22">
                                                    <div class="form-group">
                                                        <label for="nikah_tempat22">Tempat Lahir Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_tempat22" name="nikah_tempat22" placeholder="Input Tempat Lahir Ibu Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_btgl22">
                                                    <div class="form-group">
                                                        <label for="nikah_tgl22">Tanggal Lahir Ibu</label>
                                                        <input type="date" class="form-control" id="nikah_tgl22" name="nikah_tgl22" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bkwn22">
                                                    <div class="form-group">
                                                        <label for="nikah_kwn22">Warga Negara Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_kwn22" name="nikah_kwn22" placeholder="Input Kewarganegaraan Ibu Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_bjob22">
                                                    <div class="form-group">
                                                        <label for="nikah_job22">Pekerjaan Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_job22" name="nikah_job22" placeholder="Input Pekerjaan Ibu Catin wanita ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="nikah_balamat22">
                                                    <div class="form-group">
                                                        <label for="nikah_alamat22">Alamat Ibu</label>
                                                        <input type="text" class="form-control" id="nikah_alamat22" name="nikah_alamat22" placeholder="Contoh: Jl. M. Ali" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lima" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h6 style="color: red;">
                                                        <b><u>KETERANGAN LAIN-LAIN</u></b>
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="nikah_lokasi">Rencana Lokasi Menikah</label>
                                                        <input type="text" class="form-control" id="nikah_lokasi" name="nikah_lokasi" placeholder="Input Rencana Lokasi Menikah ..." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="nikah_waktu">Rencana Waktu Menikah</label>
                                                        <input type="datetime-local" class="form-control" id="nikah_waktu" name="nikah_waktu" required>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="nikah_tglsrt">Tanggal Penerbitan Surat</label>
                                                        <input type="date" class="form-control" id="nikah_tglsrt" name="nikah_tglsrt" required>
                                                    </div>
                                                </div> -->
                                                <div class="col-sm-6">

                                                </div>
                                            </div>
                                            <button type="submit" id="tombol1" class="btn btn-primary" style="float: right;">Simpan</button>
                                        </div>
                                    </div>

                            </div>
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
