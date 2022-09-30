<!-- body -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Main content -->
          <div class="card">
            <!-- title row -->
            <div class="card-header">
              <a data-toggle="modal" data-target="#m_surat" class="btn btn-sm btn-outline-primary" style="float:right" onclick="empty1()">Buat Surat</a>
              <h5 style="color: dimgrey;">
                KETERANGAN USAHA
              </h5>
              <h6 style="color: dimgrey;">
                APLIKASI LAYANAN ONLINE DESA KARANGAN HILIR
              </h6>
              <!-- /.col -->
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 table-responsive" style="overflow-x:auto">
                  <table id="table2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width:3%">NO</th>
                        <th>NAMA</th>
                        <th>NO SURAT</th>
                        <th>TANGGAL SURAT</th>
                        <th>ALAMAT PEMOHON</th>
                        <th>KET</th>
                        <th style="width:7%">OPSI</th>
                      </tr>

                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($rekom as $p) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo ucwords($p->s_1); ?></td>
                          <td><?php echo $p->s_nosurat; ?></td>
                          <td><?php echo tgl_indo($p->s_tglsurat); ?></td>
                          <td><?php echo $p->s_9; ?></td>
                          <td><?php if ($p->s_kodeproses == 1){
                            echo "Permohonan";
                          } else if ($p->s_kodeproses == 3){
                            echo "Manual";
                          }; ?></td>
                          <td style="text-align: center; width:10%">
                            <table border="0">
                              <tr>
                                <td>
                                  <a target="_blank" class="btn btn-outline-success" href="<?php echo base_url('cetak_ket_usaha/' . base64_encode($p->s_id)) ?>" style="font-size: 10pt !important; padding:4px !important" title="Cetak"><i class="fa fa-print"></i></a>
                                </td>
                                <td>
                                  <a href="#" onclick="edit(
                                  '<?php echo $p->s_id; ?>',
                                  '<?php echo $p->s_tglsurat; ?>',
                                  '<?php echo $p->s_ttd; ?>',
                                  '<?php echo $p->s_jabatan; ?>',
                                  '<?php echo $p->s_kodettd; ?>',  

                                  '<?php echo $p->s_1; ?>',
                                  '<?php echo $p->s_2; ?>',
                                  '<?php echo $p->s_3; ?>',
                                  '<?php echo $p->s_4; ?>',
                                  '<?php echo $p->sd_1; ?>',
                                  '<?php echo $p->s_5; ?>',
                                  '<?php echo $p->s_9; ?>',
                                  '<?php echo $p->s_6; ?>',
                                  '<?php echo $p->s_7; ?>',
                                  '<?php echo $p->s_8; ?>',

                              )" class="btn btn-outline-warning" style="font-size: 10pt !important; padding:4px !important" title="edit"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                  <a href="#" onclick="hapus('<?php echo $p->s_id; ?>')" class="btn btn-outline-danger" style="font-size: 10pt !important; padding:4px !important">
                                    <i class="fa fa-trash" title="Hapus"></i></a>
                                </td>
                                <?php if ($p->s_arsip == null) { ?>
                                  <td>
                                    <a href="#" onclick="arsip('<?php echo $p->s_id; ?>')" class="btn btn-outline-info btn-block" style="font-size: 10pt !important; padding:4px !important">
                                      <i class="fas fa-file-archive" title="arsipkan"></i> </a>
                                  </td>
                                <?php } else { ?>
                                  <td>
                                    <a target="_blank" href="<?php echo base_url('arsip/' . $p->s_arsip) ?>" class="btn btn-outline-secondary btn-block" style="font-size: 10pt !important; padding:4px !important">
                                      <i class="fas fa-search" title="lihat arsip"></i> </a>
                                  </td>
                                <?php } ?>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="m_surat" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel">Buat Surat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form method="post" action="<?php echo base_url('be/simpan_be/usaha') ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="hilang_nama">Nama Lengkap</label>
                      <input type="text" class="form-control" id="usaha_nama" name="usaha_nama" placeholder="Input Nama Pemohon .." required>
                      <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_nik">NIK</label>
                      <input type="number" onkeyup="usaha_ceknik()" class="form-control" id="usaha_nik" name="usaha_nik" placeholder="Input NIK Pemohon .." required>
                      <div id="usaha_notifnik"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_jk">Jenis Kelamin</label>
                      <select class="form-control" id="usaha_jk" name="usaha_jk" disabled required>
                        <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_tptlahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="usaha_tptlahir" name="usaha_tptlahir" placeholder="Input Tempat Lahir Pemohon .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_tgllahir">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="usaha_tgllahir" name="usaha_tgllahir" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" id="usaha_pekerjaan" name="usaha_pekerjaan" placeholder="Input Pekerjaan Pemohon .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_alamat1">Alamat Pemohon</label>
                      <input type="text" class="form-control" id="usaha_alamat1" name="usaha_alamat1" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_alamat">Alamat Usaha (Jalan)</label>
                      <input type="text" class="form-control" id="usaha_alamat" name="usaha_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_rt">Alamat (RT)</label>
                      <input type="number" class="form-control" id="usaha_rt" name="usaha_rt" placeholder="Input RT Tempat Usaha Pemohon .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="usaha_Usaha">Jenis Usaha</label>
                      <input type="text" class="form-control" id="usaha_usaha" name="usaha_usaha" placeholder="Input Jenis Usaha Pemohon .." required>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Tanggal Surat</label>
                      <input type="date" name="tgl_surat" id="tgl_surat" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label>Penandatangan</label>
                      <select name="ttd" id="ttd" class="form-control" onchange="ttd_fungsi()" required>
                        <option selected disabled value="">-- Pilih Penandatangan --</option>
                        <?php foreach ($ttd as $a) { ?>
                          <option value="<?php echo $a->tt_nama; ?>"><?php echo Ucwords($a->tt_jabatan); ?> - <?php echo Ucwords($a->tt_nama); ?></option>
                        <?php } ?>
                      </select>
                      <input type="hidden" class="form-control" id="jabttd" name="jabttd">
                      <input type="hidden" class="form-control" id="kodettd" name="kodettd">
                    </div>
                    <input type="submit" style="float:right" id="tombol1" class="btn btn-sm btn-outline-primary" value="Simpan">
                  </div>
                </div>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="arsip" tabindex="-3" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title" id="exampleModalLabel" style="color: white;">SIMPAN ARSIP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url() . 'be/simpan_be/arsip_usaha' ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="filegambar">Upload Arsip</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="filegambar" id="filegambar">
                          <label class="custom-file-label" for="filegambar">Pilih File</label>
                        </div>
                      </div>
                      <input type="hidden" class="form-control" id="id_1" name="id_1">
                    </div>
                  </div>
                  <div>
                    <p>
                      Catatan : file yang diupload harus berformat Pdf.
                    </p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" id="save" class="btn btn-primary">Proses</button>
            </form>

          </div>
        </div>
      </div>
    </div>

  </section>
</div>