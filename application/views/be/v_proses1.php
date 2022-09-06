<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        foreach ($surat as $k) { ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <!-- <img class="profile-user-img img-fluid" src="<?php echo base_url(); ?>assets/logo.png" alt=""> -->
                                </div>

                                <h3 class="profile-username text-center">Desa Karangan Hilir</h3>

                                <p class="text-muted text-center"><?php echo $k->pe_kode; ?></p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Jenis Surat</b> <a class="float-right"><?php echo ucwords($k->pe_jenispermohonan); ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Pemohon</b> <a class="float-right"><?php echo Ucwords($k->pe_nama); ?></a>
                                    </li>
                                    <?php if ($k->pe_alamat !== null) { ?>
                                        <li class="list-group-item">
                                            <b>Alamat</b> <a class="float-right"><?php echo $k->pe_alamat; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>


                                <a href="#" onclick="ambil_nomor(
                                    '<?php echo $k->s_id; ?>',
                                    '<?php echo $k->pe_kode; ?>'
                                    )" class="btn btn-outline-primary btn-block"><b>Buat Surat</b></a>

                                <a target="_blank" href="<?php echo base_url('cetak_surat/' . base64_encode($k->pe_kode)); ?>" class="btn btn-outline-info btn-block"><b>Cetak</b></a>

                                <a target="_blank" href="https://kirimwa.id/petok/<?php echo $k->pe_handphone; ?>:(uji_coba)_Mohon_Maaf_Syarat_Anda_tidak_lengkap,_Silahkan_lengkapi_lagi!_pesan_ini_dikirim_secara_otomatis_dengan_menggunakan_petokapps._Anda_tidak_perlu_membalasnya._Terima_kasih!!!" class="btn btn-outline-danger btn-block"><b>Syarat Tidak Lengkap</b></a>
                                <a target="_blank" href="https://kirimwa.id/petok/<?php echo $k->pe_handphone; ?>:(uji_coba)Surat_anda_sudah_selesai_dan_bisa_diambil_di_Kantor_Camat!_pesan_ini_dikirim_secara_otomatis_dengan_menggunakan_petokapps._Anda_tidak_perlu_membalasnya._Terima_kasih!!!" class="btn btn-outline-success btn-block"><b>Surat Selesai</b></a>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-8">
                        <div class="card">
                            <!-- <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Kelengkapan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>

                                </ul>
                            </div> -->
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- <div class="tab-content">
                                    <div class="active tab-pane" id="activity"> -->
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">

                                        <p class="username" style="margin-left: -10px;">Dokumen Kelengkapan</p>

                                    </div>
                                    <!-- /.user-block -->
                                    <div class="row mb-3">
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <?php if ($k->pe_syarat != null) { ?>
                                                    <div class="col-sm-6">
                                                        <a href="<?php echo base_url(); ?>syarat/<?php echo $k->pe_syarat; ?>" target="_blank"><img class="img-fluid mb-3" src="<?php echo base_url(); ?>syarat/<?php echo $k->pe_syarat; ?>" alt=""></a>
                                                    </div><?php } ?>
                                                <!-- <?php if ($k->s_prt != null) { ?>
                                                            <div class="col-sm-6">
                                                                <a href="<?php echo base_url(); ?>dasar/<?php echo $k->s_prt; ?>" target="_blank"><img class="img-fluid mb-3" src="<?php echo base_url(); ?>dasar/<?php echo $k->s_prt; ?>" alt=""></a>
                                                            </div><?php } ?>
                                                        <?php if ($k->s_pdesa != null) { ?>
                                                            <div class="col-sm-6">
                                                                <a href="<?php echo base_url(); ?>dasar/<?php echo $k->s_pdesa; ?>" target="_blank"><img class="img-fluid mb-3" src="<?php echo base_url(); ?>dasar/<?php echo $k->s_pdesa; ?>" alt=""></a>
                                                            </div><?php } ?>
                                                        <?php if ($k->s_s1 != null) { ?>
                                                            <div class="col-sm-6">
                                                                <a href="<?php echo base_url(); ?>dasar/<?php echo $k->s_s1; ?>" target="_blank"><img class="img-fluid mb-3" src="<?php echo base_url(); ?>dasar/<?php echo $k->s_s1; ?>" alt=""></a>
                                                            </div><?php } ?>
                                                        <?php if ($k->s_s2 != null) { ?>
                                                            <div class="col-sm-6">
                                                                <a href="<?php echo base_url(); ?>dasar/<?php echo $k->s_s2; ?>" target="_blank"><img class="img-fluid mb-3" src="<?php echo base_url(); ?>dasar/<?php echo $k->s_s2; ?>" alt=""></a>
                                                            </div><?php } ?>
 -->

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        <?php } ?>
    </section>

    <!-- /.content -->
</div>
<script>
    function ambil_nomor(a, b) {
        $('#id').val(a);
        $('#kode').val(b);
        $('#m_nomor').modal('show');

    }
</script>

<div class="modal fade" id="m_nomor" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <img src="<?php echo base_url(); ?>assets/img/logokutim.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Buat Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('be/proses/tanggal') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" name="tglsurat" id="tglsurat" class="form-control" required>
                        <input type="hidden" id="id" name="id" class="form-control">
                        <input type="hidden" id="kode" name="kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penandatangan</label>
                        <select name="ttd" id="ttd" class="form-control" required>
                            <option selected disabled>-- Pilih Penandatangan --</option>
                            <option>kades</option>
                            <option>sekdes</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" style="float: right;">Proses</button>
                </form>
            </div>
        </div>
    </div>
</div>