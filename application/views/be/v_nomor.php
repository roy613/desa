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
              
              <h5 style="color: dimgrey;">
                PENGATURAN NOMOR SURAT
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
                        <th>JENIS SURAT</th>
                        <th>NOMOR DEPAN</th>
                        <th>NOMOR TENGAH</th>
                        <th>PREVIEW</th>
                        <th style="width:7%">OPSI</th>
                      </tr>

                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($nomor as $p) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo Ucwords($p->da_pelayanan); ?></td>
                          <td><?php echo $p->n_1; ?></td>
                          <td><?php echo $p->n_2; ?></td>
                          <td><?php echo "Nomor : ".$p->n_1."001".$p->n_2.getRomawi(date('m'))."/".date('Y'); ?></td>
                          

                          <td style="text-align: center; width:10%">
                          <a href="javascript:;" onclick="enomor(
                                  '<?php echo $p->da_id; ?>',
                                  '<?php echo Ucwords($p->da_pelayanan); ?>',
                                  '<?php echo $p->n_1; ?>',                                                             
                                  '<?php echo $p->n_2; ?>',                                                             
                              )" class="btn btn-outline-warning" style="font-size: 10pt !important; padding:4px !important" title="edit"><i class="fa fa-edit"></i></a>
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
    <div class="modal fade" id="m_nomor" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel">Atur Penomoran Surat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form method="post" action="<?php echo base_url('be/simpan_be/nomor') ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Jenis Surat</label>
                  <input type="text" name="jenis" id="jenis" class="form-control" disabled>
                  <input type="hidden" name="id" id="id" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nomor Depan</label>
                  <input type="text" name="n_1" id="n_1" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Nomor Tengah</label>
                  <input type="text" name="n_2" id="n_2" class="form-control" required>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" style="float:right" id="tombol1" class="btn btn-sm btn-outline-primary" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>