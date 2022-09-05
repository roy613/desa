<div class="modal fade" id="r_proposal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" style="color: white; margin-left:10px">SURAT REKOMENDASI PROPOSAL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#prop-1" style="cursor: pointer;">Persyaratan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#prop-2" style="cursor: pointer;">Formulir</a>
                    </li>
                </ul>
                <section id="features" class="features" style="padding-top: 5px;">
                    <div class="container" data-aos="fade-up">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="prop-1">
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
                                            Pastikan isi semua form yang ada dengan data yang sebenarnya. Apabila anda <b>tidak bisa</b> menekan tombol proses berarti ada form yang belum diisi.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Tab Content 1 -->

                            <div class="tab-pane" id="prop-2">
                                <div class="row gy-4">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <h3>Formulir</h3>
                                        <form method="post" action="<?php echo base_url('simpan_fe/proposal') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="proposal_nama">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="proposal_nama" name="proposal_nama" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="proposal_perusahaan">Perusahaan yang Di Tuju</label>
                                                    <input type="text" class="form-control" id="proposal_perusahaan" name="proposal_perusahaan" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="proposal_nosuratpemohon">Nomor Surat Permohonan</label>
                                                    <input type="text" class="form-control" id="proposal_nosuratpemohon" name="proposal_nosuratpemohon" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="proposal_halpermohonan">Perihal Surat Permohonan</label>
                                                    <input type="text" class="form-control" id="proposal_halpermohonan" name="proposal_halpermohonan" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="proposal_nohp">Nomor Whatsapp Pemohon</label>
                                                    <input type="number" class="form-control" id="proposal_nohp" name="proposal_nohp" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="custom-file">
                                                        <label for="proposal_filegambar">Upload Foto Identitas (KTP atau KK)</label>
                                                        <input type="file" class="custom-file-input form-control" name="proposal_filegambar" id="proposal_filegambar" required onchange="proposal_validasi()">
                                                        <div id="proposal_notif"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" style="float: right;">Proses</button>
                                        </form>
                                    </div>
                                </div><!-- End Tab Content 2 -->
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
</div>