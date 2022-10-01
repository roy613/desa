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
              <a data-toggle="modal" data-target="#arsip" class="btn btn-sm btn-outline-primary" style="float:right" onclick="empty1()">Simpan Arsip</a>
              <h5 style="color: dimgrey;">
                PENGARSIPAN MANUAL
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
                        <th>NAMA SURAT</th>
                        <th>TANGGAL DI ARSIPKAN</th>
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
                          <td><?php echo ucwords($p->a_nama); ?></td>
                          <td><?php echo tgl_indo($p->a_tgl); ?></td>
                          <td style="text-align: center; width:10%">
                            <table border="0">
                              <tr>
                                <td>
                                  <a href="#" onclick="edit(
                                  '<?php echo $p->a_id; ?>',
                                  '<?php echo $p->a_nama; ?>',                                                 
                                  
                              )" class="btn btn-outline-warning" style="font-size: 10pt !important; padding:4px !important" title="edit"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                  <a href="#" onclick="hapus('<?php echo $p->a_id; ?>')" class="btn btn-outline-danger" style="font-size: 10pt !important; padding:4px !important">
                                    <i class="fa fa-trash" title="Hapus"></i></a>
                                </td>
                                <?php if ($p->a_arsip !== null) { ?>
                                  <td>
                                    <a target="_blank" href="<?php echo base_url('arsip/' . $p->a_arsip) ?>" class="btn btn-outline-secondary btn-block" style="font-size: 10pt !important; padding:4px !important">
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

    <div class="modal fade" id="arsip" tabindex="-3" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel" style="color: white;">SIMPAN ARSIP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url() . 'be/simpan_be/arsip_manual' ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nama">Nama Surat</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Surat .." required>
                      <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="filegambar">Upload Arsip</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="filegambar" id="filegambar">
                          <label class="custom-file-label" for="filegambar">Pilih File</label>
                        </div>
                      </div>
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