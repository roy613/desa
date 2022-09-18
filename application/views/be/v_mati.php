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
                KETERANGAN KEMATIAN
              </h5>
              <h6 style="color: dimgrey;">
                APLIKASI LAYANAN ONLINE DESA KARANGAN HILIR
              </h6>
              <!-- /.col -->
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 table-responsive" style="overflow-x:auto">
                  <table id="" class="table table-bordered table-striped">
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
                          <td><?php echo $p->s_6; ?></td>
                          <td><?php if ($p->s_kodeproses == 1) {
                                echo "Permohonan";
                              } else if ($p->s_kodeproses == 2) {
                                echo "Manual";
                              }; ?></td>
                          <td style="text-align: center; width:10%">
                            <table border="0">
                              <tr>
                                <td>
                                  <a target="_blank" class="btn btn-outline-success" href="<?php echo base_url('cetak_ket_mati/' . base64_encode($p->s_id)) ?>" style="font-size: 10pt !important; padding:4px !important" title="Cetak"><i class="fa fa-print"></i></a>
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
                                  '<?php echo $p->sd_1; ?>',
                                  '<?php echo $p->s_3; ?>',
                                  '<?php echo $p->s_4; ?>',
                                  '<?php echo $p->s_5; ?>',
                                  '<?php echo $p->s_6; ?>',
                                  '<?php echo $p->sd_2; ?>',
                                  '<?php echo $p->s_7; ?>',
                                  '<?php echo $p->s_8; ?>',                                 
                                  
                              )" class="btn btn-outline-warning" style="font-size: 10pt !important; padding:4px !important" title="edit"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                  <a href="#" onclick="hapus('<?php echo $p->s_id; ?>')" class="btn btn-outline-danger" style="font-size: 10pt !important; padding:4px !important">
                                    <i class="fa fa-trash" title="Hapus"></i></a>
                                </td>
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

            <form method="post" action="<?php echo base_url('be/simpan_be/mati') ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="mati_nama" name="mati_nama" placeholder="Input Nama Alm .." required>
                      <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_tptlahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="mati_tptlahir" name="mati_tptlahir" placeholder="Input Tempat Lahir Alm .." required>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_tgllahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="mati_tgllahir" name="mati_tgllahir" required>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_rt">kewarganegaraan</label>
                    <input type="text" class="form-control" id="mati_kwn" name="mati_kwn" placeholder="Input Kewarganegaraan Alm .." required>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
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
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="mati_pekerjaan" name="mati_pekerjaan" placeholder="Input Pekerjaan Alm .." required>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_alamat">Tempat Tinggal Terakhir</label>
                    <input type="text" class="form-control" id="mati_alamat" name="mati_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_tglmeninggal">Tanggal Meninggal</label>
                    <input type="date" class="form-control" id="mati_tglmeninggal" name="mati_tglmeninggal" required>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_tptmeninggal">Alamat Tempat Meninggal</label>
                    <input type="text" class="form-control" id="mati_tptmeninggal" name="mati_tptmeninggal" placeholder="Contoh : Rumah Kediaman di Jl.Pattimura RT. 1 No. 2 " required>
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="mati_pukul">Pukul Meninggal</label>
                    <input type="time" class="form-control" id="mati_pukul" name="mati_pukul" required>
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



  </section>
</div>