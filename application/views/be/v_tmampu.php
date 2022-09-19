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
                KETERANGAN TIDAK MAMPU
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
                          <td><?php if ($p->s_kodeproses == 1) {
                                echo "Permohonan";
                              } else if ($p->s_kodeproses == 3) {
                                echo "Manual";
                              }; ?></td>
                          <td style="text-align: center; width:10%">
                            <table border="0">
                              <tr>
                                <td>
                                  <a target="_blank" class="btn btn-outline-success" href="<?php echo base_url('cetak_ket_sktm/' . base64_encode($p->s_id)) ?>" style="font-size: 10pt !important; padding:4px !important" title="Cetak"><i class="fa fa-print"></i></a>
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
                                  '<?php echo $p->s_6; ?>',
                                  '<?php echo $p->s_7; ?>',
                                  '<?php echo $p->s_8; ?>',                                 
                                  '<?php echo $p->s_9; ?>',                                 
                                  
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

            <form method="post" action="<?php echo base_url('be/simpan_be/tmampu') ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="tmampu_nama" name="tmampu_nama" placeholder="Input Nama Pemohon .." required>
                      <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                  </div>                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_nik">NIK</label>
                    <input type="number" onkeyup="tmampu_ceknik()" class="form-control" id="tmampu_nik" name="tmampu_nik" placeholder="Input NIK Pemohon .." required>
                    <div id="tmampu_notifnik"></div>
                  </div>
                  </div>                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_jk">Jenis Kelamin</label>
                    <select class="form-control" id="tmampu_jk" name="tmampu_jk" disabled required>
                      <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  </div>                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_tptlahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmampu_tptlahir" name="tmampu_tptlahir" placeholder="Input Tempat Lahir Pemohon .." required>
                  </div>
                  </div>                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_tgllahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tmampu_tgllahir" name="tmampu_tgllahir" required>
                  </div>
                  </div>                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_agama">Agama</label>
                    <select class="form-control" id="tmampu_agama" name="tmampu_agama" required>
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
                    <label for="tmampu_kwn">kewarganegaraan</label>
                    <input type="text" class="form-control" id="tmampu_kwn" name="tmampu_kwn" placeholder="Input Kewarganegaraan Pemohon .." required>
                  </div>
                  </div>                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_statuskwn">Status Perkawinan</label>
                    <select class="form-control" id="tmampu_statuskwn" name="tmampu_statuskwn" required>
                      <option selected disabled value="">-- Pilih Status --</option>
                      <option>Belum Menikah</option>
                      <option>Menikah</option>
                      <option>Janda</option>
                      <option>Duda</option>
                    </select>
                  </div>
                  </div>                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="tmampu_pekerjaan" name="tmampu_pekerjaan" placeholder="Input Pekerjaan Pemohon .." required>
                  </div>
                  </div>                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="tmampu_alamat">Alamat</label>
                    <input type="text" class="form-control" id="tmampu_alamat" name="tmampu_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
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