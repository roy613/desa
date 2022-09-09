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
              <!-- <a data-toggle="modal" data-target="#background" class="btn btn-sm btn-primary" style="float:right">Upload Gambar</a> -->
              <a data-toggle="modal" data-target="#m_ttd" class="btn btn-sm btn-outline-primary" style="float:right" onclick="empty1()">Tambah Akun Pengguna</a>
              <h5 style="color: dimgrey;">
                PENANDATANGANAN
              </h5>
              <h6 style="color: dimgrey;">
                APLIKASI LAYANAN ONLINE DESA XXXXXXX
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
                        <th>JABATAN</th>
                        <th>STATUS PENANDATANGANN</th>
                        <th style="width:7%">OPSI</th>
                      </tr>

                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($ttd as $p) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo ucwords($p->tt_nama); ?></td>
                          <td><?php echo ucwords($p->tt_jabatan); ?></td>
                          <td><?php if ($p->tt_ket == 1) {
                                echo "Penandatangan Utama";
                              } else if ($p->tt_ket == 2){
                                echo "Penandatangan Atas Nama";
                              } ?></td>

                          <td style="text-align: center; width:10%">
                            <a href="#" onclick="hapust('<?php echo $p->tt_id; ?>')" class="btn btn-outline-danger" style="font-size: 10pt !important; padding:4px !important">
                              <i class="fa fa-trash" title="Hapus"></i></a>
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
    <div class="modal fade" id="m_ttd" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Penandatangan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form method="post" action="<?php echo base_url('be/simpan_be') ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" required autofocus placeholder="Masukkan username pengguna..">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" name="jab" id="jab" class="form-control" placeholder="Masukkan password anda.." required>
                </div>
                <div class="form-group">
                  <label>Status Penandatangan</label>
                  <select name="status" id="status" class="form-control" required>
                    <option selected disabled value="">-- Pilih Status--</option>
                    <option value="1"> Penandatangan Utama</option>
                    <option value="2"> Penandatangan Atas Nama</option>
                  </select>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" style="float:right" id="tombol1" class="btn btn-sm btn-outline-primary" value="Simpan" disabled>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="mpejabat" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pejabat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form method="post" action="<?php echo base_url('simpan/pejabat') ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Pejabat</label>
                  <input type="text" name="nama" id="nama" class="form-control" required autofocus placeholder="Masukkan nama pejabat..">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan nama jabatan.." required>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" style="float:right" id="tombol2" class="btn btn-sm btn-outline-primary" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>