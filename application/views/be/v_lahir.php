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
                KETERANGAN KELAHIRAN
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
                        <th>NAMA ANAK</th>
                        <th>NO SURAT</th>
                        <th>TANGGAL SURAT</th>
                        <th>NAMA ORTU</th>
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
                          <td> Ayah : <?php echo ucwords($p->s_7); ?>,<br>
                        Ibu : <?php echo ucwords($p->s_12); ?></td>
                          <td><?php if ($p->s_kodeproses == 1) {
                                echo "Permohonan";
                              } else if ($p->s_kodeproses == 2) {
                                echo "Manual";
                              }; ?></td>
                          <td style="text-align: center; width:10%">
                            <table border="0">
                              <tr>
                                <td>
                                  <a target="_blank" class="btn btn-outline-success" href="<?php echo base_url('cetak_ket_lahir/' . base64_encode($p->s_id)) ?>" style="font-size: 10pt !important; padding:4px !important" title="Cetak"><i class="fa fa-print"></i></a>
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
                                  '<?php echo $p->sd_1; ?>',
                                  '<?php echo $p->s_4; ?>',
                                  '<?php echo $p->s_5; ?>',
                                  '<?php echo $p->s_6; ?>',
                                  '<?php echo $p->s_7; ?>',
                                  '<?php echo $p->s_8; ?>',                                 
                                  '<?php echo $p->sd_2; ?>',
                                  '<?php echo $p->s_9; ?>',                                 
                                  '<?php echo $p->s_10; ?>',                                 
                                  '<?php echo $p->s_11; ?>',                                 
                                  '<?php echo $p->s_12; ?>',                                 
                                  '<?php echo $p->s_13; ?>',                                 
                                  '<?php echo $p->sd_3; ?>',                                 
                                  '<?php echo $p->s_14; ?>',                                 
                                  '<?php echo $p->s_15; ?>',                                 
                                  '<?php echo $p->s_16; ?>',                                 
                                  
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

            <form method="post" action="<?php echo base_url('be/simpan_be/lahir') ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_nama">Nama Anak</label>
                      <input type="text" class="form-control" id="lahir_nama" name="lahir_nama" placeholder="Input Nama Anak .." required>
                      <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_jk">Jenis Kelamin Anak</label>
                      <select class="form-control" id="lahir_jk" name="lahir_jk" required>
                        <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_tptlahir">Tempat Lahir Anak</label>
                      <input type="text" class="form-control" id="lahir_tptlahir" name="lahir_tptlahir" placeholder="Input Tempat Lahir Anak .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_tgllahir">Tanggal Lahir Anak</label>
                      <input type="date" class="form-control" id="lahir_tgllahir" name="lahir_tgllahir" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_agama">Agama Anak</label>
                      <select class="form-control" id="lahir_agama" name="lahir_agama" required>
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
                      <label for="lahir_alamat">Alamat Anak</label>
                      <input type="text" class="form-control" id="lahir_alamat" name="lahir_alamat" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_anak_ke">Anak Ke</label>
                      <select class="form-control" id="lahir_anak_ke" name="lahir_anak_ke" required>
                        <option selected disabled value="">-- Pilihan --</option>
                        <option value="1">Anak Pertama</option>
                        <option value="2">Anak Kedua</option>
                        <option value="3">Anak Ketiga</option>
                        <option value="4">Anak Keempat</option>
                        <option value="5">Anak Kelima</option>
                        <option value="6">Anak Keenam</option>
                        <option value="7">Anak Ketujuh</option>
                      </select>
                    </div>
                  </div>            

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_nama_a">Nama Ayah</label>
                      <input type="text" class="form-control" id="lahir_nama_a" name="lahir_nama_a" placeholder="Input Nama Ayah .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_tptlahir_a">Tempat Lahir Ayah</label>
                      <input type="text" class="form-control" id="lahir_tptlahir_a" name="lahir_tptlahir_a" placeholder="Input Tempat Lahir Ayah .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_tgllahir_a">Tanggal Lahir Ayah</label>
                      <input type="date" class="form-control" id="lahir_tgllahir_a" name="lahir_tgllahir_a" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_agama_a">Agama Ayah</label>
                      <select class="form-control" id="lahir_agama_a" name="lahir_agama_a" required>
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
                      <label for="lahir_pekerjaan_a">Pekerjaan Ayah</label>
                      <input type="text" class="form-control" id="lahir_pekerjaan_a" name="lahir_pekerjaan_a" placeholder="Input Pekerjaan Ayah .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_alamat_a">Alamat Ayah</label>
                      <input type="text" class="form-control" id="lahir_alamat_a" name="lahir_alamat_a" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                    </div>
                  </div>
            

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_nama_b">Nama Ibu</label>
                      <input type="text" class="form-control" id="lahir_nama_b" name="lahir_nama_b" placeholder="Input Nama Ibu .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_tptlahir_b">Tempat Lahir Ibu</label>
                      <input type="text" class="form-control" id="lahir_tptlahir_b" name="lahir_tptlahir_b" placeholder="Input Tempat Lahir Ibu .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_tgllahir_b">Tanggal Lahir Ibu</label>
                      <input type="date" class="form-control" id="lahir_tgllahir_b" name="lahir_tgllahir_b" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_agama_b">Agama Ibu</label>
                      <select class="form-control" id="lahir_agama_b" name="lahir_agama_b" required>
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
                      <label for="lahir_pekerjaan_b">Pekerjaan Ibu</label>
                      <input type="text" class="form-control" id="lahir_pekerjaan_b" name="lahir_pekerjaan_b" placeholder="Input Pekerjaan Ibu .." required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lahir_alamat_b">Alamat Ibu</label>
                      <input type="text" class="form-control" id="lahir_alamat_b" name="lahir_alamat_b" placeholder="Contoh : Jl. Pattimura RT.1 No. 2" required>
                    </div>
                  </div>
                  <div>
                    <hr style="width: 100%;">
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