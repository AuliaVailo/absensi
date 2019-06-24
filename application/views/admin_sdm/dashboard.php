<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SAO beta 1.0.0 | Sistem Antrian Online</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('assets/css/skins/_all-skins.min.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url('assets/bower_components/morris.js/morris.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url('assets/bower_components/jvectormap/jquery-jvectormap.css');?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
  <style>
  .table-container {
    height: 25em;
  }
  table {
      display: flex;
      flex-flow: column;
      height: 100%;
      width: 100%;
  }
  table thead {
      /* head takes the height it requires, 
      and it's not scaled when table is resized */
      flex: 0 0 auto;
      width: calc(100% - 0.9em);
  }
  table tbody {
      /* body takes all the remaining available space */
      flex: 1 1 auto;
      display: block;
      overflow-y: scroll;
  }
  table tbody tr {
      width: 100%;
  }
  table thead, table tbody tr {
      display: table;
      table-layout: fixed;
  }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url('admin_sdm');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>AO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SAO</b>beta 1</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url('assets/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrator Abesensi</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('assets/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                <p>
                  Administrator Absensi - Kantor Postuban
                  <small>62300</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('login/log_out');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator SDM</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?=site_url('admin_sdm');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Validasi Absensi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('admin_sdm/validasi_kprk');?>"><i class="fa fa-circle-o"></i> Validasi Absensi</a></li>
            <!--<li><a href="<?=site_url('admin_sdm/validasi_kpc');?>"><i class="fa fa-circle-o"></i> Validasi KPC</a></li>-->
            <li><a href="<?=site_url('admin_sdm/monitoring_validasi');?>"><i class="fa fa-circle-o"></i> Monitoring Validasi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('admin_sdm/laporan_harian');?>"><i class="fa fa-calendar"></i>Laporan Validasi Harian</a></li>
            <li><a href="<?=site_url('admin_sdm/laporan_bulanan');?>"><i class="fa fa-calendar"></i>Laporan Validasi Bulanan</a></li>
            <li><a href="<?=site_url('admin_sdm/rekap_bulanan');?>"><i class="fa fa-book"></i>Rekap Validasi Bulanan</a></li>
          </ul>
        </li>
        <li class="header">Tentang Aplikasi</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Tentang Aplikasi</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Kontak Pengembang</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$persentase_hadir;?><sup style="font-size: 20px">%</sup></h3>

              <p>Hadir</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat lebih detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$persentase_tidakhadir;?><sup style="font-size: 20px">%</sup></h3>

              <p>Belum Hadir</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat lebih detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#belum" data-toggle="tab">Belum Hadir</a></li>
              <li><a href="#hadir" data-toggle="tab">Sudah Hadir</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Laporan Kehadiran Tanggal : <?=date('d-m-Y');?></li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="tab-pane table-container" id="hadir" style="position: relative; min-height: 250px;">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nippos</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Jam Masuk</th>
                      <th>Jam Pulang</th>
                      <th>Lama di Kantor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                      foreach($data_hadir as $row){
                        $jam_masuk = '00:00:00';
                        $jam_pulang = '00:00:00';

                        if($row->jam_masuk != NULL || $row->jam_masuk != ''){
                            $jam_masuk = $row->jam_masuk;
                        }

                        if($row->jam_pulang != NULL || $row->jam_pulang != ''){
                            $jam_pulang = $row->jam_pulang;
                        }

                        $awal  = strtotime($jam_masuk); //waktu awal

                        $akhir = strtotime($jam_pulang); //waktu akhir

                        $diff  = $akhir - $awal;

                        $jam   = floor($diff / (60 * 60));

                        $menit = $diff - $jam * (60 * 60);

                        $lama_di_kantor = $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit';

                        if($jam >= 7 ){
                          if($jam_masuk == '00:00:00'){
                            $bg = 'style="background-color : yellow;"';
                          }else{
                            $bg = 'style="background-color : green;"';
                          }
                          
                        }else{
                          $bg = 'style="background-color : yellow;"';
                        }


                        echo '<tr '.$bg.'>';
                        echo '<td>'.$i.'</td>
                              <td>'.$row->nik_nippos.'</td>
                              <td>'.$row->nama.'</td>
                              <td>'.$row->tanggal.'</td>
                              <td>'.$jam_masuk.'</td>
                              <td>'.$jam_pulang.'</td>
                              <td>'.$lama_di_kantor.'</td>';
                        echo '</tr>';
                        $i++;
                      }
                    ;?>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane table-container active" id="belum" style="position: relative; min-height: 250px;">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nippos</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Jam Masuk</th>
                      <th>Jam Pulang</th>
                      <th>Lama di Kantor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                      foreach($tidak_hadir as $row){
                        $jam_masuk = '00:00:00';
                        $jam_pulang = '00:00:00';

                        if($row->jam_masuk != NULL || $row->jam_masuk != ''){
                            $jam_masuk = $row->jam_masuk;
                        }

                        if($row->jam_pulang != NULL || $row->jam_pulang != ''){
                            $jam_pulang = $row->jam_pulang;
                        }

                        $awal  = strtotime($jam_masuk); //waktu awal

                        $akhir = strtotime($jam_pulang); //waktu akhir

                        $diff  = $akhir - $awal;

                        $jam   = floor($diff / (60 * 60));

                        $menit = $diff - $jam * (60 * 60);

                        $lama_di_kantor = $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit';

                        
                        if($jam >= 7 ){
                          if($jam_masuk == '00:00:00'){
                            $bg = 'style="background-color : yellow;"';
                          }else{
                            $bg = 'style="background-color : green;"';
                          }
                          
                        }else{
                          $bg = 'style="background-color : yellow;"';
                        }


                        echo '<tr '.$bg.'>';
                        echo '<td>'.$i.'</td>
                              <td>'.$row->nik_nippos.'</td>
                              <td>'.$row->nama.'</td>
                              <td>'.$row->tanggal.'</td>
                              <td>'.$jam_masuk.'</td>
                              <td>'.$jam_pulang.'</td>
                              <td>'.$lama_di_kantor.'</td>';
                        echo '</tr>';
                        $i++;
                      }
                    ;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

        </section>
        <!-- /.Left col -->
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('assets/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?=base_url('assets/bower_components/raphael/raphael.min.js');?>"></script>
<script src="<?=base_url('assets/bower_components/morris.js/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?=base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?=base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?=base_url('assets/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?=base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?=base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?=base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?=base_url('assets/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/js/adminlte.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('assets/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/js/demo.js');?>"></script>
</body>
</html>
