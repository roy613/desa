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

                                <?php if ($k->s_tglsurat == null) { ?>
                                    <a href="#" onclick="ambil_nomor(
                                    '<?php echo $k->s_id; ?>',
                                    '<?php echo $k->pe_kode; ?>',
                                    '<?php echo $k->pe_jenispermohonan; ?>',
                                    )" class="btn btn-outline-primary btn-block"><b>Buat Surat</b></a>
                                <?php } ?>

                                <?php if ($k->s_tglsurat !== null) { ?>
                                    <?php if ($k->pe_jenispermohonan == "surat rekomendasi proposal") { ?>
                                        <a target="_blank" href="<?php echo base_url('cetak_rekom_proposal/' . base64_encode($k->pe_kode)); ?>" class="btn btn-outline-info btn-block"><b>Cetak</b></a>
                                    <?php } ?>
                                <?php } ?>

                                <a target=_blank onclick="tolak_berkas(
                                    '<?php echo $k->s_id; ?>',
                                '<?php echo $k->pe_handphone; ?>'
                                )" class="btn btn-outline-danger btn-block"><b>Syarat Tidak Lengkap</b></a>

                                <a onclick="berkas_selesai( 
                                    '<?php echo $k->s_id; ?>',
                                '<?php echo $k->pe_handphone; ?>'
                                )" class="btn btn-outline-success btn-block"><b>Surat Selesai</b></a>

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
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <!-- Post -->
                                        <div class="post">
                                            <div class="user-block">

                                                <p class="username" style="margin-left: -10px;">Dokumen Persyaratan</p>

                                            </div>
                                            <!-- /.user-block -->
                                            <div class="row mb-3">
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <?php if ($k->pe_syarat != null) { ?>
                                                            <div class="col-sm-6">
                                                                <a href="<?php echo base_url(); ?>syarat/<?php echo $k->pe_syarat; ?>" target="_blank"><img class="img-fluid mb-3" src="<?php echo base_url(); ?>syarat/<?php echo $k->pe_syarat; ?>" alt=""></a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->

                                        </div>
                                    </div><!-- /.card-body -->
                                    <div class="tab-pane" id="timeline">
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">
                                            <!-- timeline time label -->
                                            <div class="time-label">
                                                <span class="bg-danger">
                                                    <?php echo tgl_indojam1($k->pe_tgl); ?>
                                                </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-envelope bg-secondary"></i>

                                                <div class="timeline-item">

                                                    <h3 class="timeline-header">Permohonan Di Terima</h3>

                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <?php if (($k->s_tglselesai !== null) && ($k->s_kodeproses == 2)) { ?>
                                                <!-- kode proses 1 artinya diproses kalau 2 di tolak berkas kurang -->
                                                <div class="time-label">
                                                    <span class="bg-success">
                                                        <?php echo tgl_indojam1($k->s_tglselesai); ?>
                                                    </span>
                                                </div>

                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>

                                                    <div class="timeline-item">

                                                        <h3 class="timeline-header">Permohonan di Tolak, Berkas Tidak Lengkap</h3>

                                                    </div>
                                                </div>
                                            <?php } ?>

                                            <?php if (($k->s_tglbuat !== null)  && ($k->s_kodeproses == 1)) { ?>
                                                <div class="time-label">
                                                    <span class="bg-info">
                                                        <?php echo tgl_indojam1($k->s_tglbuat); ?>
                                                    </span>
                                                </div>

                                                <div>
                                                    <i class="fas fa-envelope bg-secondary"></i>

                                                    <div class="timeline-item">

                                                        <h3 class="timeline-header">Dokumen di Buat Oleh <?php echo Ucwords($k->s_proses); ?></h3>

                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if (($k->s_tgledit !== null) && ($k->s_kodeproses == 1)) { ?>
                                                <div class="time-label">
                                                    <span class="bg-warning">
                                                        <?php echo tgl_indojam1($k->s_tgledit); ?>
                                                    </span>
                                                </div>

                                                <div>
                                                    <i class="fas fa-envelope bg-secondary"></i>

                                                    <div class="timeline-item">

                                                        <h3 class="timeline-header">Dokumen di Edit</h3>

                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if (($k->s_tglselesai !== null) && ($k->s_kodeproses == 1)) { ?>
                                                <!-- kode proses 1 artinya diproses kalau 2 di tolak berkas kurang -->
                                                <div class="time-label">
                                                    <span class="bg-success">
                                                        <?php echo tgl_indojam1($k->s_tglselesai); ?>
                                                    </span>
                                                </div>

                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>

                                                    <div class="timeline-item">

                                                        <h3 class="timeline-header">Dokumen Selesai</h3>

                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->

                                            <?php if ($k->s_tglselesai == null) { ?>
                                                <div>
                                                    <i class="far fa-clock bg-gray"></i>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
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
                        <input type="hidden" id="jenis" name="jenis" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penandatangan</label>
                        <select name="ttd" id="ttd" class="form-control" onchange="ttd_fungsi()" required>
                            <option selected disabled>-- Pilih Penandatangan --</option>
                            <?php foreach ($ttd as $a) { ?>
                                <option value="<?php echo $a->tt_nama; ?>"><?php echo Ucwords($a->tt_jabatan); ?> - <?php echo Ucwords($a->tt_nama); ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" class="form-control" id="jabttd" name="jabttd">
                        <input type="hidden" class="form-control" id="kodettd" name="kodettd">
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