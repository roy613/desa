<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Desa Karangan Hilir</title>

  <link href="<?php echo base_url(); ?>assets/img/logokutim.png" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/summernote/summernote-bs4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/be1/plugins/toastr/toastr.min.css">

  <link href="<?php echo base_url(); ?>assets/be1/pertama.css" rel="stylesheet">

  <?php
  function getRomawi($bln)
  {
    switch ($bln) {
      case 1:
        return "I";
        break;
      case 2:
        return "II";
        break;
      case 3:
        return "III";
        break;
      case 4:
        return "IV";
        break;
      case 5:
        return "V";
        break;
      case 6:
        return "VI";
        break;
      case 7:
        return "VII";
        break;
      case 8:
        return "VIII";
        break;
      case 9:
        return "IX";
        break;
      case 10:
        return "X";
        break;
      case 11:
        return "XI";
        break;
      case 12:
        return "XII";
        break;
    }
  }
  function tgl_indo($tanggal)
  {
    $bulan = array(
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
  }

  function tgl_indojam1($string)
  {
    $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    $date = explode(" ", $string)[0];
    $time = explode(" ", $string)[1];

    $tanggal = explode("-", $date)[2];
    $bulan = explode("-", $date)[1];
    $tahun = explode("-", $date)[0];



    return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun . " Pukul " . $time . " ";
  }
  ?>
  <style>
    .notif:hover {
  background-color: #A9A9A9;
}
    </style>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img src="<?php echo base_url(); ?>assets/img/load.gif" height="150" width="150">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <!-- <a class="nav-link" data-toggle="dropdown" onclick="permohonan()" href="#"> -->
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="badge badge-danger navbar-badge"><p id="jumlah_notif"></p></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div id="test"></div>
            <!-- <a href="#" class="dropdown-item notif">
              <div class="media">                
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            </a>             -->
            
            <a href="<?php echo base_url('cek_permohonan'); ?>" class="dropdown-item dropdown-footer">Lihat Semua Permohonan</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user"></i> Welcome, <?php echo Ucwords($this->session->userdata('username')) ?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <p style="margin-left: 15px;"><b>Hak Akses : <?php if ($this->session->userdata('akses') == 1) {
                                                            echo "Administrator";
                                                          } else {
                                                            echo "Operator";
                                                          } ?></b></p>

            <a href="<?php echo base_url('logout'); ?>" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a>


          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->