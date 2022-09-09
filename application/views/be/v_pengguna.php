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
              <a data-toggle="modal" data-target="#fp" class="btn btn-sm btn-outline-primary" style="float:right" onclick="empty1()">Tambah Akun Pengguna</a>
              <h5 style="color: dimgrey;">
                PENGGUNA
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
                        <th>USERNAME</th>
                        <th>HAK AKSES</th>
                        <th style="width:7%">OPSI</th>
                      </tr>

                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($guna as $p) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $p->username; ?></td>
                          <td><?php if ($p->status == 1) {
                                echo "Administrator";
                              } else if ($p->status == 2) {
                                echo "Operator";
                              } ?></td>

                          <td style="text-align: center; width:10%">
                            <a href="javascript:;" onclick="hapusp('<?php echo $p->p_id; ?>')" class="btn btn-outline-danger" style="font-size: 10pt !important; padding:4px !important">
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
    <div class="modal fade" id="fp" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Akun Pengguna</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form method="post" action="<?php echo base_url('be/simpan_be/pengguna') ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" id="username" class="form-control" required autofocus placeholder="Masukkan username pengguna..">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="pass1" id="pass1" class="form-control" onkeyup="cek1()" placeholder="Masukkan password anda.." required>
                  <p id="npass1" style="color: red;"></p>
                </div>
                <div class="form-group">
                  <label> Ulang Password</label>
                  <input type="password" name="password" id="password" class="form-control" onkeyup="cek2()" disabled placeholder="Ketik Ulang password anda.." required>
                  <p id="npass2" style="color: red;"></p>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" id="status" name="status" required>
                    <option selected disabled value="">- Pilih Status -</option>
                    <option value="1">Administrator</option>
                    <option value="2">Operator</option>
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



  </section>
</div>