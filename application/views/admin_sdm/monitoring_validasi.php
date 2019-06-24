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
      <div class="row">
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Validasi Harian Absensi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" >
              <?php if($jenis=='bulan'): ;?>
                <tr>
                    <th rowspan="2" style="text-align: center;">No</th>
                    <th rowspan="2" style="text-align: center;">Bulan Absensi</th>
                    <th colspan="2" style="text-align: center;">Status Belum Validasi</th>
                    <th rowspan="2" style="text-align: center;">Action</th>
                </tr>
                <tr>
                    <th style="text-align: center;">KPRK</th>
                    <th style="text-align: center;">KPC</th>
                </tr>
                <?php
                $i = 1;
                foreach ($data_valid as $row)
                    {
                      //hitung kpc dan kprk
                      $bulan_kprk = 0;
                      $query_kprk = $this->db->query("SELECT COUNT(tgl_validasi) AS total FROM v_monitoring_belum_validasi_pertanggal_kprk
                      WHERE SUBSTRING(tgl_validasi,1,7) = '$row->bulan'")->row();

                      $bulan_kpc = 0;
                      $query_kpc = $this->db->query("SELECT COUNT(tgl_validasi) AS total FROM v_monitoring_belum_validasi_pertanggal_kpc
                      WHERE SUBSTRING(tgl_validasi,1,7) = '$row->bulan'")->row();

                        echo '<tr>';
                            echo '<td style="text-align: center;">'.$i.'</td>';
                            echo '<td style="text-align: center;">'.$row->bulan.'</td>';
                            echo '<td style="text-align: center;">'.$query_kprk->total.' Hari</td>';
                            echo '<td style="text-align: center;">'.$query_kpc->total.' Hari</td>';
                            echo '<td style="text-align: center;"><a href="'.site_url('admin_sdm/detail_belum_validasi/'.$row->bulan).'" class="btn btn-info"><i class="fa fa-search"></i>Lihat Detail</a></td>';
                        echo '</tr>';
                        $i++;
                        
                    }
                ;?>
                <?php elseif($jenis=='detail_bulan'): ;?>

                <tr>
                    <th rowspan="2" style="text-align: center;">No</th>
                    <th rowspan="2" style="text-align: center;">Bulan Absensi</th>
                    <th colspan="2" style="text-align: center;">Status</th>
                    <th rowspan="2" style="text-align: center;">Action</th>
                </tr>
                <tr>
                    <th style="text-align: center;">KPRK</th>
                    <th style="text-align: center;">KPC</th>
                </tr>
                <?php
                $i = 1;
                foreach ($data_valid as $row)
                    {
                      //hitung total yang belum validasi
                      $total_kprk = 0;
                      $kprk = $this->db->query("SELECT * FROM v_validasi_harian
                      WHERE substring(tgl_valiasi,1,10) = '$row->tgl_validasi' AND kd_dtkantor = '62300' AND STATUS = 0");
                      if($kprk->num_rows() > 0){
                        $total_kprk = $kprk->num_rows();
                      }

                      $total_kpc = 0;
                      $kpc = $this->db->query("SELECT * FROM v_validasi_harian
                      WHERE substring(tgl_valiasi,1,10) = '$row->tgl_validasi' AND kd_dtkantor != '62300' AND STATUS = 0");
                      if($kpc->num_rows() > 0){
                        $total_kpc = $kpc->num_rows();
                      }

                      $status_kprk = 'BELUM VALIDASI';
                      $label_kprk = 'label-danger';
                      $status_kpc = 'BELUM VALIDASI';
                      $label_kpc = 'label-danger';

                      if($total_kprk == 0){
                        $status_kprk = 'SUDAH VALIDASI';
                        $label_kprk = 'label-success';
                      }

                      if($total_kpc == 0){
                        $status_kpc = 'SUDAH VALIDASI';
                        $label_kpc = 'label-success';
                      }

                        echo '<tr>';
                            echo '<td style="text-align: center;">'.$i.'</td>';
                            echo '<td style="text-align: center;">'.$row->tgl_validasi.'</td>';
                            echo '<td style="text-align: center;"><span class="label '.$label_kprk.'">'.$status_kprk.'</span></td>';
                            echo '<td style="text-align: center;"><span class="label '.$label_kpc.'">'.$status_kpc.'</span></td>';
                            echo '<td style="text-align: center;"> 
                                  <a href="'.site_url('admin_sdm/cari_validasi/kprk/'.$row->tgl_validasi).'" class="btn btn-info"><i class="fa fa-search"></i>Lihat Detail KPRK</a>
                                  <a href="'.site_url('admin_sdm/cari_validasi/kpc/'.$row->tgl_validasi).'" class="btn btn-info"><i class="fa fa-search"></i>Lihat Detail KPC</a>
                                  </td>';
                        echo '</tr>';
                        $i++;
                        
                    }
                ;?>

                <?php endif ;?>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- Small boxes (Stat box) -->
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
