<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>
    <?php foreach ($surat as $k) { ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <?php
                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "sukses") {
                        echo "<div class='alert alert-success'>Surat Berhasil di Proses</div>";
                    } else if ($_GET['alert'] == "gagal") {
                        echo "<div class='alert alert-danger'>Data Berhasil DiHapus</div>";
                    } else if ($_GET['alert'] == "sukses1") {
                        echo "<div class='alert alert-success'>Surat Berhasil di Buat</div>";
                    }
                }
                ?>
                <div class="row">
                    <div class="col-md-4">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid" src="<?php echo base_url(); ?>assets/logo.png" alt="">
                                </div>

                                <h3 class="profile-username text-center"><?php echo $k->s_namadesa; ?></h3>

                                <p class="text-muted text-center"><?php echo $k->s_nounik; ?></p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Pemohon</b> <a class="float-right"><?php echo $k->s_namapemohon; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Jenis Surat</b> <a class="float-right"><?php echo $k->s_jenis; ?></a>
                                    </li>
                                </ul>

                                <?php if ($k->s_tglkec == '0000-00-00') { ?>
                                    <a href="javascript:;" onclick="rekomkerja('<?php echo $k->s_id; ?>')" class="btn btn-primary btn-block"><b>Buat Surat</b></a>
                                <?php } ?>
                                <?php if ($k->s_tglkec !== '0000-00-00') { ?>
                                    <a target="_blank" href="<?php echo base_url() . 'proses/c_rekomkerja/' . $k->s_id; ?>" class="btn btn-info btn-block"><b>Cetak</b></a>
                                <?php } ?>

                                <a target="_blank" href="https://kirimwa.id/petok/<?php echo $k->s_nohp ?>:(uji_coba)_Mohon_Maaf_Syarat_Anda_tidak_lengkap,_Silahkan_lengkapi_lagi!_pesan_ini_dikirim_secara_otomatis_dengan_menggunakan_petokapps._Anda_tidak_perlu_membalasnya._Terima_kasih!!!" class="btn btn-danger btn-block"><b>Syarat Tidak Lengkap</b></a>
                                <a target="_blank" href="https://kirimwa.id/petok/<?php echo $k->s_nohp ?>:(uji_coba)Surat_anda_sudah_selesai_dan_bisa_diambil_di_Kantor_Camat!_pesan_ini_dikirim_secara_otomatis_dengan_menggunakan_petokapps._Anda_tidak_perlu_membalasnya._Terima_kasih!!!" class="btn btn-success btn-block"><b>Surat Selesai</b></a>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Kelengkapan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>

                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
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
                                                        <?php if ($k->s_ktp != null) { ?>
                                                            <div class="col-sm-6">
                                                                <a href="<?php echo base_url(); ?>dasar/<?php echo $k->s_ktp; ?>" target="_blank"><img class="img-fluid mb-3" src="<?php echo base_url(); ?>dasar/<?php echo $k->s_ktp; ?>" alt=""></a>
                                                            </div><?php } ?>
                                                        <?php if ($k->s_prt != null) { ?>
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


                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->

                                        </div>
                                        <!-- /.post -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="timeline">
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">
                                            <!-- timeline time label -->
                                            <div class="time-label">
                                                <span class="bg-danger">
                                                    <?php echo tgl_indo($k->s_tglpermohonan); ?>
                                                </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-envelope bg-success"></i>

                                                <div class="timeline-item">

                                                    <h3 class="timeline-header">Permohonan Di Buat</h3>

                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->


                                            <?php if ($k->s_tglkec !== '0000-00-00') { ?>
                                                <div class="time-label">
                                                    <span class="bg-danger">
                                                        <?php echo tgl_indo($k->s_tglkec); ?>
                                                    </span>
                                                </div>

                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>

                                                    <div class="timeline-item">

                                                        <h3 class="timeline-header">Proses di Kecamatan</h3>

                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->


                                            <div>
                                                <i class="far fa-clock bg-gray"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->


                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    <?php } ?>
    <!-- /.content -->
</div>
<script>
    function rekomkerja(a) {
        $('#idkerja').val(a);
        $('#rkerja').modal('show');

    }
</script>

<div class="modal fade" id="rkerja" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">PANTESA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('proses/rekomkerja1') ?>" enctype="multipart/form-data">
                <p>Silahkan tekan proses apabila ingin membuat surat</p>
                <input type="hidden" id="idkerja" name="idkerja" class="form-control" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" style="float: right;">Proses</button>
                </form>
            </div>
        </div>
    </div>
</div>