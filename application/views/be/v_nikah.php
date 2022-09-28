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
              <a class="btn btn-sm btn-outline-primary dropdown-toggle" data-toggle="dropdown" style="float:right; margin:3px">
                Buat Surat</a>
              <ul class="dropdown-menu">
                <li id="link"><a href="javascript:;" class="btn" onclick="catinDua()">Catin Pria & Wanita</a></li>
                <li id="link"><a href="javascript:;" class="btn" onclick="catinPria()">Catin Pria</a></li>
                <li id="link"><a href="javascript:;" class="btn" onclick="catinWanita()">Catin Wanita</a></li>
                <!-- <li id="link"><a href="javascript:;" class="btn" onclick="sketN6()">Surat Keterangan Kematian N6</a></li> -->
              </ul>
              <h5 style="color: dimgrey;">
                PENGANTAR NIKAH
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
                          <td><?php echo ucwords($p->s_1); ?><br><?php echo ucwords($p->s_25); ?></td>
                          <td><?php echo $p->s_nosurat; ?></td>
                          <td><?php echo tgl_indo($p->s_tglsurat); ?></td>
                          <td><?php echo $p->s_6; ?></td>
                          <td><?php if ($p->s_kodeproses == 1) {
                                echo "Permohonan";
                              } else if ($p->s_kodeproses == 3) {
                                echo "Manual";
                              }; ?></td>
                          <td style="text-align: center; width:10%">
                            <table border="0">
                              <tr>
                                <td>
                                  <?php if ($p->s_17 !== ""  && $p->s_41 !== "") { ?>
                                    <a target="_blank" href="<?php echo base_url('cetak_nikah_1/' . base64_encode($p->s_id)); ?>" class="btn btn-outline-success" style="font-size: 10pt !important; padding:4px !important" title="Cetak"><i class="fa fa-print"></i></a>
                                  <?php } ?>
                                  <?php if ($p->s_17 !== ""  && $p->s_41 == "") { ?>
                                    <a target="_blank" href="<?php echo base_url('cetak_nikah_2/' . base64_encode($p->s_id)); ?>" class="btn btn-outline-success" style="font-size: 10pt !important; padding:4px !important" title="Cetak"><i class="fa fa-print"></i></a>
                                  <?php } ?>
                                  <?php if ($p->s_17 == ""  && $p->s_41 !== "") { ?>
                                    <a target="_blank" href="<?php echo base_url('cetak_nikah_3/' . base64_encode($p->s_id)); ?>" class="btn btn-outline-success" style="font-size: 10pt !important; padding:4px !important" title="Cetak"><i class="fa fa-print"></i></a>
                                  <?php } ?>
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

    <div class="modal fade" id="m_surat" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel">Buat Surat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form method="post" action="<?php echo base_url('be/simpan_be/nikah') ?>" enctype="multipart/form-data">
              <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                  <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#satu" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Form 1</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#dua" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Form 2</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#tiga" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Form 3</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#empat" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Form 4</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#lima" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Form 5</a>
                    </li>
                  </ul>
                </div>


                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="satu" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 style="color: red;">
                            <b><u>DATA CALON PENGANTIN PRIA</u></b>
                          </h6>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_nama1">Nama Catin Pria</label>
                            <input type="text" class="form-control" id="nikah_nama1" name="nikah_nama1" placeholder="Input Nama Catin Pria ..." required>
                            <input type="hidden" class="form-control" id="nikah_kode" name="nikah_kode">
                            <input type="hidden" class="form-control" id="nikah_id" name="nikah_id">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_nik1">NIK Catin Pria</label>
                            <input type="number" class="form-control" id="nikah_nik1" name="nikah_nik1" onkeyup="nikah_ceknik1()" placeholder="Input NIK Catin Pria ..." required>
                            <div id="nikah_notifnik"></div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_job1">Pekerjaan Catin Pria</label>
                            <input type="text" class="form-control" id="nikah_job1" name="nikah_job1" placeholder="Input Pekerjaan Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_tempat1">Tempat Lahir Catin Pria</label>
                            <input type="text" class="form-control" id="nikah_tempat1" name="nikah_tempat1" placeholder="Input Tempat Lahir Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_tgl1">Tanggal Lahir Catin Pria</label>
                            <input type="date" class="form-control" id="nikah_tgl1" name="nikah_tgl1" required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_agama1">Agama Catin Pria</label>
                            <select class="form-control" name="nikah_agama1" id="nikah_agama1" required>
                              <option selected disabled value="">-- Pilih Agama --</option>
                              <option>Islam</option>
                              <option>Kristen</option>
                              <option>Katolik</option>
                              <option>Budha</option>
                              <option>Hindu</option>
                              <option>Konghucu</option>
                              <option>Tidak Ada</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_kwn1">Warga Negara Catin Pria</label>
                            <input type="text" class="form-control" id="nikah_kwn1" name="nikah_kwn1" placeholder="Input Kewarganegaraan Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="nikah_status1">Status Catin Pria</label>
                            <select class="form-control" name="nikah_status1" id="nikah_status1" required>
                              <option selected disabled value="">-- Pilih Status --</option>
                              <option>Jejaka</option>
                              <option>Duda</option>
                              <option>Beristri ke 2</option>
                              <option>Beristri ke 3</option>
                              <option>Beristri ke 4</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-group">
                            <label for="nikah_alamat1">Alamat Catin Pria</label>
                            <input type="text" class="form-control" id="nikah_alamat1" name="nikah_alamat1" placeholder="Contoh: Jl. M. Ali" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="dua" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 style="color: red;">
                            <b><u>DATA ORANG TUA CALON PENGANTIN PRIA</u></b>
                          </h6>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_nama11">Nama Ayah</label><input type="checkbox" id="a1" onclick="alm1()" style="margin-left: 30px;"> Alm.
                            <input type="text" class="form-control" id="nikah_nama11" name="nikah_nama11" placeholder="Input Nama Ayah Catin Pria ..." required>
                            <input type="hidden" class="form-control" id="stal1" name="stal1">
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bnik11">
                          <div class="form-group">
                            <label for="nikah_nik11">NIK Ayah</label>
                            <input type="number" class="form-control" id="nikah_nik11" name="nikah_nik11" onkeyup="nikah_ceknik11()" placeholder="Input NIK Ayah Catin Pria ..." required>
                            <div id="nikah_notifnik11"></div>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bagama11">
                          <div class="form-group">
                            <label for="nikah_agama11">Agama Ayah</label>
                            <select class="form-control" name="nikah_agama11" id="nikah_agama11" required>
                              <option selected disabled value="">-- Pilih Agama --</option>
                              <option>Islam</option>
                              <option>Kristen</option>
                              <option>Katolik</option>
                              <option>Budha</option>
                              <option>Hindu</option>
                              <option>Konghucu</option>
                              <option>Tidak Ada</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_bin11">Bin</label>
                            <input type="text" class="form-control" id="nikah_bin11" name="nikah_bin11" placeholder="Input Bin Ayah Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_btempat11">
                          <div class="form-group">
                            <label for="nikah_tempat11">Tempat Lahir Ayah</label>
                            <input type="text" class="form-control" id="nikah_tempat11" name="nikah_tempat11" placeholder="Input Tempat Lahir Ayah Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_btgl11">
                          <div class="form-group">
                            <label for="nikah_tgl11">Tanggal Lahir Ayah</label>
                            <input type="date" class="form-control" id="nikah_tgl11" name="nikah_tgl11" required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bkwn11">
                          <div class="form-group">
                            <label for="nikah_kwn11">Warga Negara Ayah</label>
                            <input type="text" class="form-control" id="nikah_kwn11" name="nikah_kwn11" placeholder="Input Kewarganegaraan Ayah Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bjob11">
                          <div class="form-group">
                            <label for="nikah_job11">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" id="nikah_job11" name="nikah_job11" placeholder="Input Pekerjaan Ayah Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_balamat11">
                          <div class="form-group">
                            <label for="nikah_alamat11">Alamat Ayah</label>
                            <input type="text" class="form-control" id="nikah_alamat11" name="nikah_alamat11" placeholder="Contoh: Jl. M. Ali" required>
                          </div>
                        </div>
                        <div class="col-sm-12" id="nikah_garis1">
                          <div class="form-group">
                            <hr style="margin-top:0px; height:6px; width:100%; color:black">
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bnama12">
                          <div class="form-group">
                            <label for="nikah_nama12">Nama Ibu</label><input type="checkbox" id="ah1" onclick="almh1()" style="margin-left: 30px;"> Almh.
                            <input type="text" class="form-control" id="nikah_nama12" name="nikah_nama12" placeholder="Input Nama Ibu Catin Pria ..." required>
                            <input type="hidden" class="form-control" id="stal2" name="stal2">
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bnik12">
                          <div class="form-group">
                            <label for="nikah_nik12">NIK Ibu</label>
                            <input type="number" class="form-control" id="nikah_nik12" name="nikah_nik12" onkeyup="nikah_ceknik12()" placeholder="Input NIK Ibu Catin Pria ..." required>
                            <div id="nikah_notifnik12"></div>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bagama12">
                          <div class="form-group">
                            <label for="nikah_agama12">Agama Ibu</label>
                            <select class="form-control" name="nikah_agama12" id="nikah_agama12" required>
                              <option selected disabled value="">-- Pilih Agama --</option>
                              <option>Islam</option>
                              <option>Kristen</option>
                              <option>Katolik</option>
                              <option>Budha</option>
                              <option>Hindu</option>
                              <option>Konghucu</option>
                              <option>Tidak Ada</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bbinti12">
                          <div class="form-group">
                            <label for="nikah_binti12">Binti</label>
                            <input type="text" class="form-control" id="nikah_binti12" name="nikah_binti12" placeholder="Input Binti Ibu Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_btempat12">
                          <div class="form-group">
                            <label for="nikah_tempat12">Tempat Lahir Ibu</label>
                            <input type="text" class="form-control" id="nikah_tempat12" name="nikah_tempat12" placeholder="Input Tempat Lahir Ibu Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_btgl12">
                          <div class="form-group">
                            <label for="nikah_tgl12">Tanggal Lahir Ibu</label>
                            <input type="date" class="form-control" id="nikah_tgl12" name="nikah_tgl12" required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bkwn12">
                          <div class="form-group">
                            <label for="nikah_kwn12">Warga Negara Ibu</label>
                            <input type="text" class="form-control" id="nikah_kwn12" name="nikah_kwn12" placeholder="Input Kewarganegaraan Ibu Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bjob12">
                          <div class="form-group">
                            <label for="nikah_job12">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="nikah_job12" name="nikah_job12" placeholder="Input Pekerjaan Ibu Catin Pria ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_balamat12">
                          <div class="form-group">
                            <label for="nikah_alamat12">Alamat Ibu</label>
                            <input type="text" class="form-control" id="nikah_alamat12" name="nikah_alamat12" placeholder="Contoh: Jl. M. Ali" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tiga" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 style="color: red;">
                            <b><u>DATA CALON PENGANTIN WANITA</u></b>
                          </h6>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_nama2">Nama Catin Wanita</label>
                            <input type="text" class="form-control" id="nikah_nama2" name="nikah_nama2" placeholder="Input Nama Catin Wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_nik2">NIK Catin Wanita</label>
                            <input type="number" class="form-control" id="nikah_nik2" name="nikah_nik2" onkeyup="nikah_ceknik2()" placeholder="Input NIK Catin Wanita ..." required>
                            <div id="nikah_notifnik2"></div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_job2">Pekerjaan Catin Wanita</label>
                            <input type="text" class="form-control" id="nikah_job2" name="nikah_job2" placeholder="Input Pekerjaan Catin Wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_tempat2">Tempat Lahir Catin Wanita</label>
                            <input type="text" class="form-control" id="nikah_tempat2" name="nikah_tempat2" placeholder="Input Tempat Lahir Catin Wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_tgl2">Tanggal Lahir Catin Wanita</label>
                            <input type="date" class="form-control" id="nikah_tgl2" name="nikah_tgl2" required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_agama2">Agama Catin Wanita</label>
                            <select class="form-control" name="nikah_agama2" id="nikah_agama2" required>
                              <option selected disabled value="">-- Pilih Agama --</option>
                              <option>Islam</option>
                              <option>Kristen</option>
                              <option>Katolik</option>
                              <option>Budha</option>
                              <option>Hindu</option>
                              <option>Konghucu</option>
                              <option>Tidak Ada</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_kwn2">Warga Negara Catin Wanita</label>
                            <input type="text" class="form-control" id="nikah_kwn2" name="nikah_kwn2" placeholder="Input Kewarganegaraan Catin Wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="nikah_status2">Status Catin Wanita</label>
                            <select class="form-control" name="nikah_status2" id="nikah_status2" required>
                              <option selected disabled value="">-- Pilih Status --</option>
                              <option>Perawan</option>
                              <option>Janda</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-group">
                            <label for="nikah_alamat2">Alamat Catin Wanita</label>
                            <input type="text" class="form-control" id="nikah_alamat2" name="nikah_alamat2" placeholder="Contoh: Jl. M. Ali" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="empat" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 style="color: red;">
                            <b><u>DATA ORANG TUA CALON PENGANTIN WANITA</u></b>
                          </h6>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_nama21">Nama Ayah</label><input type="checkbox" id="a2" onclick="alm2()" style="margin-left: 30px;"> Alm.
                            <input type="text" class="form-control" id="nikah_nama21" name="nikah_nama21" placeholder="Input Nama Ayah Catin wanita ..." required>
                            <input type="hidden" class="form-control" id="stal3" name="stal3">
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bnik21">
                          <div class="form-group">
                            <label for="nikah_nik21">NIK Ayah</label>
                            <input type="number" class="form-control" id="nikah_nik21" name="nikah_nik21" onkeyup="nikah_ceknik21()" placeholder="Input NIK Ayah Catin wanita ..." required>
                            <div id="nikah_notifnik21"></div>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bagama21">
                          <div class="form-group">
                            <label for="nikah_agama21">Agama Ayah</label>
                            <select class="form-control" name="nikah_agama21" id="nikah_agama21" required>
                              <option selected disabled value="">-- Pilih Agama --</option>
                              <option>Islam</option>
                              <option>Kristen</option>
                              <option>Katolik</option>
                              <option>Budha</option>
                              <option>Hindu</option>
                              <option>Konghucu</option>
                              <option>Tidak Ada</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nikah_bin21">Bin</label>
                            <input type="text" class="form-control" id="nikah_bin21" name="nikah_bin21" placeholder="Input Bin Ayah Catin wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_btempat21">
                          <div class="form-group">
                            <label for="nikah_tempat21">Tempat Lahir Ayah</label>
                            <input type="text" class="form-control" id="nikah_tempat21" name="nikah_tempat21" placeholder="Input Tempat Lahir Ayah Catin wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_btgl21">
                          <div class="form-group">
                            <label for="nikah_tgl21">Tanggal Lahir Ayah</label>
                            <input type="date" class="form-control" id="nikah_tgl21" name="nikah_tgl21" required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bkwn21">
                          <div class="form-group">
                            <label for="nikah_kwn21">Warga Negara Ayah</label>
                            <input type="text" class="form-control" id="nikah_kwn21" name="nikah_kwn21" placeholder="Input Kewarganegaraan Ayah Catin wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bjob21">
                          <div class="form-group">
                            <label for="nikah_job21">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" id="nikah_job21" name="nikah_job21" placeholder="Input Pekerjaan Ayah Catin wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_balamat21">
                          <div class="form-group">
                            <label for="nikah_alamat21">Alamat Ayah</label>
                            <input type="text" class="form-control" id="nikah_alamat21" name="nikah_alamat21" placeholder="Contoh: Jl. M. Ali" required>
                          </div>
                        </div>
                        <div class="col-sm-12" id="nikah_garis2">
                          <div class="form-group">
                            <hr style="margin-top:0px; height:6px; width:100%; color:black">
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bnama22">
                          <div class="form-group">
                            <label for="nikah_nama22">Nama Ibu</label><input type="checkbox" id="ah2" onclick="almh2()" style="margin-left: 30px;"> Almh.
                            <input type="text" class="form-control" id="nikah_nama22" name="nikah_nama22" placeholder="Input Nama Ibu Catin wanita ..." required>
                            <input type="hidden" class="form-control" id="stal4" name="stal4">
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bnik22">
                          <div class="form-group">
                            <label for="nikah_nik22">NIK Ibu</label>
                            <input type="number" class="form-control" id="nikah_nik22" name="nikah_nik22" onkeyup="nikah_ceknik22()" placeholder="Input NIK Ibu Catin wanita ..." required>
                            <div id="nikah_notifnik22"></div>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bagama22">
                          <div class="form-group">
                            <label for="nikah_agama22">Agama Ibu</label>
                            <select class="form-control" name="nikah_agama22" id="nikah_agama22" required>
                              <option selected disabled value="">-- Pilih Agama --</option>
                              <option>Islam</option>
                              <option>Kristen</option>
                              <option>Katolik</option>
                              <option>Budha</option>
                              <option>Hindu</option>
                              <option>Konghucu</option>
                              <option>Tidak Ada</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bbinti22">
                          <div class="form-group">
                            <label for="nikah_binti22">Binti</label>
                            <input type="text" class="form-control" id="nikah_binti22" name="nikah_binti22" placeholder="Input Binti Ibu Catin wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_btempat22">
                          <div class="form-group">
                            <label for="nikah_tempat22">Tempat Lahir Ibu</label>
                            <input type="text" class="form-control" id="nikah_tempat22" name="nikah_tempat22" placeholder="Input Tempat Lahir Ibu Catin wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_btgl22">
                          <div class="form-group">
                            <label for="nikah_tgl22">Tanggal Lahir Ibu</label>
                            <input type="date" class="form-control" id="nikah_tgl22" name="nikah_tgl22" required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bkwn22">
                          <div class="form-group">
                            <label for="nikah_kwn22">Warga Negara Ibu</label>
                            <input type="text" class="form-control" id="nikah_kwn22" name="nikah_kwn22" placeholder="Input Kewarganegaraan Ibu Catin wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_bjob22">
                          <div class="form-group">
                            <label for="nikah_job22">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="nikah_job22" name="nikah_job22" placeholder="Input Pekerjaan Ibu Catin wanita ..." required>
                          </div>
                        </div>
                        <div class="col-sm-4" id="nikah_balamat22">
                          <div class="form-group">
                            <label for="nikah_alamat22">Alamat Ibu</label>
                            <input type="text" class="form-control" id="nikah_alamat22" name="nikah_alamat22" placeholder="Contoh: Jl. M. Ali" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="lima" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 style="color: red;">
                            <b><u>KETERANGAN LAIN-LAIN</u></b>
                          </h6>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="nikah_lokasi">Rencana Lokasi Menikah</label>
                            <input type="text" class="form-control" id="nikah_lokasi" name="nikah_lokasi" placeholder="Input Rencana Lokasi Menikah ..." required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="nikah_waktu">Rencana Waktu Menikah</label>
                            <input type="datetime-local" class="form-control" id="nikah_waktu" name="nikah_waktu" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Tanggal Surat</label>
                            <input type="date" name="tgl_surat" id="tgl_surat" class="form-control" required>
                          </div>
                        </div>
                        <div class="col-md-6">
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


<!-- Modal -->