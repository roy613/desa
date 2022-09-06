<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <!-- /.content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Main content -->
          <div class="card">
            <!-- title row -->
            <div class="card-header">

              <!-- <a href="<?php echo base_url() . 'cetak/register'; ?>" target="_blank" class="btn btn-sm btn-primary" style="float:right">Cetak Buku</a> -->
              <h6 style="color: dimgrey;">
               Daftar Permohonan Yang Belum di Proses
              </h6>

              <!-- /.col -->
            </div>

            <div class="card-body" style="overflow-x:auto">

              <table class="table table-bordered table-striped" style="font-size: 10pt">
                <thead>
                  <tr style="background-color: skyblue; text-align:center">
                    <th style="width: 2%">NO</th>
                    <th style="">NAMA PEMOHON</th>
                    <th>JENIS PERMOHONAN</th>
                    <th>KODE PELAYANAN</th>
                    <th>TANGGAL PERMOHONAN</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($daftar as $k) { ?>
                    <tr style="font-size: 10pt;">
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $k->pe_nama; ?></td>
                      <td><?php echo $k->pe_jenispermohonan; ?></td>
                      <td><?php echo $k->pe_kode; ?></td>
                      <td><?php echo tgl_indo($k->pe_tgl); ?></td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>