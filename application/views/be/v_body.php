<style>
  .tabelout tr:hover {
    background-color: #71a7e4 !important;
  }
</style>


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
        <!-- <div class="col-12 col-sm-6 col-md-2">
          <div class="info-box" style="background-color: #d9d3e7;">
            <span class="info-box-icon elevation-1" style="background-color: #9c99bd;"><i style="color: dimgray;" class="fas fa-cog"></i></span>

            <div class="info-box-content" style="color: dimgray;">
              <span class="info-box-text">Jumlah Kategori</span>
              <span class="info-box-number">
                10
                <small>%</small>
              </span>
            </div>            
          </div>         
        </div>
        <div class="col-12 col-sm-6 col-md-2">
          <div class="info-box" style="background-color: #d9d3e7;">
            <span class="info-box-icon elevation-1" style="background-color: #9c99bd;"><i style="color: dimgray;" class="fas fa-cog"></i></span>

            <div class="info-box-content" style="color: dimgray;">
              <span class="info-box-text">Jumlah Jenis</span>
              <span class="info-box-number">
                10
                <small>%</small>
              </span>
            </div>            
          </div>         
        </div> -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box" style="background-color: #aedccd;">
            <span class="info-box-icon elevation-1" style="background-color: #279F4B"><i style="color: white;" class="fas fa-coins"></i></span>

            <div class="info-box-content" style="color: #5f4b66;">
              <span class="info-box-text"><b>Total Permohonan</b></span>
              <span class="info-box-number">
                <?php echo number_format($total); ?>
                <small>Dokumen</small>
              </span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box" style="background-color: #ced2f8;">
            <span class="info-box-icon elevation-1" style="background-color: #27619F;"><i style="color: white;" class="far fa-pause-circle"></i></span>

            <div class="info-box-content" style="color: #5f4b66;">
              <span class="info-box-text"><b>Selesai</b></span>
              <span class="info-box-number">
                <?php echo number_format($selesai); ?>
                <small>Dokumen</small>
              </span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <a href="<?php echo base_url('onproses'); ?>">
            <div class="info-box" style="background-color: #caa7b4;">
              <span class="info-box-icon elevation-1" style="background-color: #BD473C;"><i style="color: white;" class="fas fa-dna"></i></span>

              <div class="info-box-content" style="color: #5f4b66">
                <span class="info-box-text"><b>On Proses</b></span>
                <span class="info-box-number">
                  <?php echo number_format($proses); ?>
                  <small>Dokumen</small>
                </span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <a href="<?php echo base_url('tolak'); ?>">
            <div class="info-box" style="background-color: #ffc5f4;">
              <span class="info-box-icon elevation-1" style="background-color: #D118E6;"><i style="color: white;" class="fas fa-exclamation-triangle"></i></span>

              <div class="info-box-content" style="color: #5f4b66;">
                <span class="info-box-text"><b>Di Tolak</b></span>
                <span class="info-box-number">
                  <?php echo number_format($ditolak); ?>
                  <small>Dokumen</small>
                </span>
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-12 col-lg-12">
          <!-- Main content -->
          <div class="invoice p-3 mb-3" style="min-height: 250px !important ;">
            <!-- title row -->
            <div class="col-md-12">
              <h6 style="color: dimgrey;">PERMOHONAN YANG TERAKHIR DI PROSES</h6>
              <table class="table table-responsive table-striped" style="margin-top: 10px">
                <thead>
                  <tr>
                    <th style="width:2%;background-color:transparent !important;font-size:11pt; color:dimgray; text-align:left !important">No</th>
                    <th style="background-color:transparent !important;font-size:11pt; color:dimgray; text-align:left !important">Pemohon</th>
                    <th style="background-color:transparent !important;font-size:11pt; color:dimgray; text-align:left !important">Jenis Permohonan</th>
                    <th style="background-color:transparent !important;font-size:11pt; color:dimgray; text-align:left !important">Proses</th>
                    <th style="background-color:transparent !important;font-size:11pt; color:dimgray; text-align:left !important">Ket</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($surat as $p) {
                  ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo ucwords($p->s_1); ?></td>
                      <td><?php echo ucwords($p->s_jenispelayanan); ?></td>
                      <td><?php echo ucwords($p->s_proses); ?></td>
                      <td><?php if ($p->s_kodeproses == 1 && $p->s_tglsurat !== null && $p->s_tglselesai == null) {
                            echo "On Proses";
                          } else if ($p->s_kodeproses == 1 && $p->s_tglsurat !== null && $p->s_tglselesai !== null) {
                            echo "Selesai";
                          } else if ($p->s_kodeproses == 2 && $p->s_tglselesai !== null) {
                            echo "Ditolak";
                          } ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-12 col-lg-4">
          <div class="invoice p-3 mb-3">
          <h6 style="color: dimgrey;">SURVEI KEPUASAN MASYARAKAT</h6>
          <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
        </div> -->
      </div>
    </div>




  </section>
</div>