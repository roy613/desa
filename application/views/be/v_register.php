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
              <h5 style="color: dimgrey;">
                DAFTAR PERMOHONAN YANG BELUM DI PROSES
              </h5>
              <h6 style="color: dimgrey;">
                APLIKASI LAYANAN ONLINE DESA KARANGAN HILIR
              </h6>

              <!-- /.col -->
            </div>

            <div class="card-body" style="overflow-x:auto">

              <table class="table table-bordered table-striped table-hover" style="font-size: 10pt">
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
                   
                      <tr class='clickable-row' data-href="<?php echo base_url('lihat_surat/'.base64_encode($k->pe_kode)); ?>" style="cursor:pointer; line-height:30px;">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $k->pe_nama; ?></td>
                        <td><?php echo $k->pe_jenispermohonan; ?></td>
                        <td><?php echo $k->pe_kode; ?></td>
                        <td><?php echo tgl_indojam1($k->pe_tgl); ?></td>
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