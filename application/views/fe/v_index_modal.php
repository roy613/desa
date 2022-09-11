<style>
    .timeline {
        border-left: 3px solid #727cf5;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
        background: rgba(114, 124, 245, 0.09);
        margin: 0 auto;
        letter-spacing: 0.2px;
        position: relative;
        line-height: 1.4em;
        font-size: 1.03em;
        padding: 50px;
        list-style: none;
        text-align: left;
        max-width: 98%;
    }

    @media (max-width: 767px) {
        .timeline {
            max-width: 98%;
            padding: 25px;
        }
    }

    .timeline h1 {
        font-weight: 300;
        font-size: 1.4em;
    }

    .timeline h2,
    .timeline h3 {
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 8px;
    }

    .timeline .event {
        border-bottom: 1px dashed #e8ebf1;
        padding-top: 5px;
        padding-bottom: 10px;
        margin-bottom: 5px;
        position: relative;
    }

    @media (max-width: 767px) {
        .timeline .event {
            padding-top: 5px;
        }
    }

    .timeline .event:last-of-type {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
    }

    .timeline .event:before,
    .timeline .event:after {
        position: absolute;
        display: block;
        top: 0;
    }

    .timeline .event:before {
        left: 0px;
        content: attr(data-date);
        /* text-align: right; */
        font-weight: 100;
        font-size: 0.9em;
        min-width: 120px;
        text-align: left;
    }

    @media (max-width: 767px) {
        .timeline .event:before {
            left: 0px;
            text-align: left;
        }
    }

    .timeline .event:after {
        -webkit-box-shadow: 0 0 0 3px #727cf5;
        box-shadow: 0 0 0 3px #727cf5;
        left: -55.8px;
        background: #fff;
        border-radius: 50%;
        height: 9px;
        width: 9px;
        content: "";
        top: 5px;
    }

    @media (max-width: 767px) {
        .timeline .event:after {
            left: -31.8px;
        }
    }

    .rtl .timeline {
        border-left: 0;
        text-align: right;
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 4px;
        border-top-left-radius: 4px;
        border-right: 3px solid #727cf5;
    }

    .rtl .timeline .event::before {
        left: 0;
        right: -170px;
    }

    .rtl .timeline .event::after {
        left: 0;
        right: -55.8px;
    }
</style>

<div class="modal fade" id="ceksurat" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="kode" name="kode">
                            <label for="floatingInput">Input Nomor Registrasi Pelayanan</label>
                            <button class="btn btn-outline-primary" onclick="cekresi()" style="float: right; margin-top:15px">Proses</button>
                            <p id="kode_notif"></p>
                        </div>

                    </div>
                    <!-- <div class="col-md-12 mb-3">
                        <label for="proposal_halpermohonan">Silahkan Input Nomor Registrasi Pelayanan Anda</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                    </div> -->
                    <!-- <div class="col-md-4 mb-3"> -->

                    <!-- </div> -->
                    <div class="col-md-12 mb-3">
                        <div class="container" id="status" style="margin-top:15px">
                            <h4>STATUS PERMOHONAN</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="content">
                                        <ul class="timeline">
                                            <li class="event" id="status_pertama">
                                                <h3>Permohonan di Terima</h3>
                                                <p id="tgl_pertama"></p>
                                            </li>
                                            <li class="event" data-date="" id="status_kedua">
                                                <h3>Permohonan di Proses</h3>
                                                <p id="tgl_kedua"> </p>
                                            </li>
                                            <li class="event" data-date="" id="status_ketiga">
                                                <h3>Permohonan Selesai</h3>
                                                <p id="tgl_ketiga"></p>
                                                <p>Dokumen Dapat di Ambil di Kantor Desa</p>
                                                <table border="0">
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-success" style="float: right; margin-top:15px">Puas</button>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger" style="float: right; margin-top:15px">Tidak Puas</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </li>
                                            <li class="event" data-date="" id="status_keempat">
                                                <h3>Permohonan Tidak Bisa di Proses</h3>
                                                <p id="tgl_keempat"></p>
                                                <p>Persyaratan Tidak Lengkap/Tidak Sesuai</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tab-pane -->
        </div>
    </div>
</div>

<div class="modal fade" id="ceksurat1" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <?php
      foreach ($status as $p) {
      ?>
        <div class="modal-body">
          <div class="row">

            <div class="col-md-12 mb-3">
              <div class="container" id="status" style="margin-top:15px">
                <h4><u>STATUS PERMOHONAN</u></h4>
                <div class="row">
                  <div class="col-md-12">
                    <?php if ($row == 0) { ?>
                      <p id="kode_notif" style="color: red;">Kode Registrasi Pelayanan Anda Tidak Terdaftar</p>
                    <?php } else { ?>
                      <table border="0" style="margin-left:0px;color: dimgrey;">
                        <tr>
                          <td>
                            Kode Pelayanan
                          </td>
                          <td>
                            :
                          </td>
                          <td>
                          <?php echo ($p->pe_kode); ?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Nama Pemohon
                          </td>
                          <td>
                            :
                          </td>
                          <td>
                          <?php echo ($p->pe_nama); ?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Jenis Permohonan
                          </td>
                          <td>
                            :
                          </td>
                          <td>
                          <?php echo ($p->pe_jenispermohonan); ?>
                          </td>
                        </tr>
                      </table>
                    <?php } ?>
                  </div>
                  <div class="col-md-12">
                    <div id="content">
                      <?php if ($row !== 0) { ?>
                        <ul class="timeline">
                          <li class="event" id="status_pertama">
                            <h3>Permohonan di Terima</h3>
                            <p id="tgl_pertama"><?php echo tgl_indojam1($p->pe_tgl); ?></p>
                          </li>
                          <?php if ($p->s_tglbuat !== null && $p->s_kodeproses == 1) { ?>
                            <li class="event" data-date="" id="status_kedua">
                              <h3>Permohonan di Proses</h3>
                              <p id="tgl_kedua"><?php echo tgl_indojam1($p->s_tglbuat); ?></p>
                            </li>
                          <?php } ?>
                          <?php if ($p->s_tglselesai !== null && $p->s_kodeproses == 1) { ?>
                            <li class="event" data-date="" id="status_ketiga">
                              <h3>Permohonan Selesai</h3>
                              <p id="tgl_ketiga"><?php echo tgl_indojam1($p->s_tglselesai); ?></p>
                              <p>Dokumen Dapat di Ambil di Kantor Desa</p>
                              <table border="0">
                                <tr>
                                  <td>
                                    <button class="btn btn-outline-success" style="float: right; margin-top:15px">Puas</button>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-danger" style="float: right; margin-top:15px">Tidak Puas</button>
                                  </td>
                                </tr>
                              </table>
                            </li>
                          <?php } ?>
                          <?php if ($p->s_tglselesai !== null && $p->s_kodeproses == 2) { ?>
                            <li class="event" data-date="" id="status_keempat">
                              <h3>Permohonan Tidak Bisa di Proses</h3>
                              <p id="tgl_keempat"><?php echo tgl_indojam1($p->s_tglselesai); ?></p>
                              <p>Persyaratan Tidak Lengkap/Tidak Sesuai</p>
                            </li>
                        </ul>
                      <?php } ?>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- /.tab-pane -->
    </div>
  </div>
</div>



<script>
    function ceksurat() {
        $('#kode').val("");
        document.getElementById("status").style.display = "none";
        document.getElementById("kode_notif").innerHTML = "";
        $('#ceksurat').modal('show');
    }

    function cekresi() {
        var peg = document.getElementById("kode").value;

        if (peg !== (null || "")) {
            $.ajax({
                url: "<?php echo base_url('welcome/cek_resi1') ?>",
                method: "POST",
                data: {
                    peg: peg
                },
                async: false,
                dataType: 'json',
                success: function(data) {

                    if (data.kode == 1) {
                        // alert("tampil");
                        $.ajax({
                            url: "<?php echo base_url('welcome/cek_resi2') ?>",
                            method: "POST",
                            data: {
                                peg: peg
                            },
                            async: false,
                            dataType: 'json',
                            success: function(data) {
                                // document.getElementById("kode_notif").innerHTML = "";
                                // document.getElementById("status_pertama").style.display = "block";
                                // document.getElementById("tgl_pertama").innerHTML = data[0].pe_tgl;
                                // // document.getElementById("status_kedua").style.display = "none";
                                // // document.getElementById("status_kedua").style.display = "none";
                                // // document.getElementById("status_ketiga").style.display = "none";
                                // // document.getElementById("status_keempat").style.display = "none";
                                if (data[0].s_tglbuat == null && data[0].s_kodeproses == 1 && data[0].s_tglselesai == null) {
                                    document.getElementById("kode_notif").innerHTML = "";
                                    document.getElementById("status").style.display = "block";
                                    document.getElementById("tgl_pertama").innerHTML = data[0].pe_tgl;
                                    document.getElementById("status_kedua").style.display = "none";
                                    document.getElementById("status_kedua").style.display = "none";
                                    document.getElementById("status_ketiga").style.display = "none";
                                    document.getElementById("status_keempat").style.display = "none";
                                } else if (data[0].s_tglbuat !== null && data[0].s_kodeproses == 1 && data[0].s_tglselesai == null) {
                                    document.getElementById("kode_notif").innerHTML = "";
                                    document.getElementById("status").style.display = "block";
                                    document.getElementById("tgl_pertama").innerHTML = data[0].pe_tgl;
                                    document.getElementById("status_kedua").style.display = "block";
                                    document.getElementById("tgl_kedua").innerHTML = data[0].s_tglbuat + " By. " + data[0].s_proses;
                                    document.getElementById("status_ketiga").style.display = "none";
                                    document.getElementById("status_keempat").style.display = "none";
                                } else if (data[0].s_tglbuat !== null && data[0].s_tglselesai !== null && data[0].s_kodeproses == 1) {
                                    document.getElementById("kode_notif").innerHTML = "";
                                    document.getElementById("status").style.display = "block";
                                    document.getElementById("tgl_pertama").innerHTML = data[0].pe_tgl;
                                    document.getElementById("status_kedua").style.display = "block";
                                    document.getElementById("tgl_kedua").innerHTML = data[0].s_tglbuat + " By. " + data[0].s_proses;
                                    document.getElementById("status_ketiga").style.display = "block";
                                    document.getElementById("tgl_ketiga").innerHTML = data[0].s_tglselesai;
                                    document.getElementById("status_keempat").style.display = "none";
                                } else if (data[0].s_tglbuat !== null && data[0].s_tglselesai !== null && data[0].s_kodeproses == 2) {
                                    document.getElementById("kode_notif").innerHTML = "";
                                    document.getElementById("status").style.display = "block";
                                    document.getElementById("tgl_pertama").innerHTML = data[0].pe_tgl;
                                    document.getElementById("status_keempat").style.display = "block";
                                    document.getElementById("tgl_keempat").innerHTML = data[0].s_tglselesai;
                                    document.getElementById("status_kedua").style.display = "none";
                                    document.getElementById("status_ketiga").style.display = "none";
                                }
                            }
                        });
                    } else {
                        // alert("tidak tampil");
                        document.getElementById("kode_notif").style.color = "red";
                        document.getElementById("kode_notif").innerHTML = "Kode Registrasi Pelayanan Anda Tidak Terdaftar";
                        document.getElementById("status").style.display = "none";
                    }
                }
            });
        } else {
            document.getElementById("kode_notif").style.color = "red";
            document.getElementById("kode_notif").innerHTML = "Silahkan Input Kode Registrasi Pelayanan Anda";
            document.getElementById("status").style.display = "none";
        }
    }
</script>