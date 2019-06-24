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
      <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Data Absensi</h3>
              <p><?=$this->session->flashdata('pesan');?></p>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?=site_url('admin_sdm/cari_validasi');?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="tanggal_absensi" class="col-sm-2 control-label">Jenis Absensi</label>

                  <div class="col-sm-5">
                    <select name="jenis_validasi" class="form-control">
                      <option value="kprk">Kantor Pos Pemeriksa</option>
                      <option value="kpc">Kantor Pos Cabang</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <input type="date" name="tanggal" value="<?=date('Y-m-d');?>" class="form-control"/>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-search"></i>&nbspLihat</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Validasi Harian, Tanggal Absensi : <?=$tanggal_validasi;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <form action="<?=site_url('admin_sdm/do_validasi_kprk');?>" method="POST">
              <table class="table table-hover" >
                <tr>
                    <th width="25px">No</th>
                    <th width="100px">Nippos/NIK</th>
                    <th width="200px">Nama</th>
                    <th width="100px" align="center">Tanggal</th>
                    <th width="100px" align="center">Jam Masuk</th>
                    <th width="100px" align="center">Jam Masuk</th>
                    <th width="500px" colspan="2">Keterangan</th>
                </tr>
                <?php
                $i = 1;
                foreach ($harian->result() as $row)
                    {
                    if($row->jam_masuk == "" && $row->jam_pulang ==""){
                        $bg_color = 'bgcolor="#ff0000"';
                        $ket = 'TIDAK MASUK';
                        $selected_masuk = '';
                        $selected_tidak_masuk = 'selected ';
                        $readonly_masuk = '';
                        $readonly_pulang = '';
                    }elseif($row->jam_masuk == "" ){
                        $bg_color = 'bgcolor="#ffff00"';
                        $selected_masuk = 'selected ';
                        $selected_tidak_masuk = '';
                        $ket = 'BELUM ABSEN MASUK';
                        $readonly_masuk = '';
                        $readonly_pulang = 'readonly';
                    }elseif($row->jam_pulang ==""){
                        $bg_color = 'bgcolor="#ffff00"';
                        $selected_masuk = 'selected ';
                        $selected_tidak_masuk = '';
                        $ket = 'BELUM ABSEN PULANG';
                        $readonly_masuk = 'readonly';
                        $readonly_pulang = '';
                    }else{
                        $bg_color = 'bgcolor="#00ff00"';
                        $ket = 'MASUK';
                        $selected_masuk = 'selected ';
                        $selected_tidak_masuk = '';
                        $readonly_masuk = 'readonly';
                        $readonly_pulang = 'readonly';
                    }
                        echo '<tr>';
                            echo '<td><input type="hidden" name="id_'.$i.'" value="'.$row->id_data.'" readonly="" class="form-control input-sm"/>'.$i.'</td>';
                            echo '<td><input type="hidden" name="nik_nippos_'.$i.'" value="'.$row->nippos.'" readonly="" class="form-control input-sm"/>'.$row->nippos.'</td>';
                            echo '<td><input type="hidden" name="nama_'.$i.'" value="'.$row->nama.'" readonly="" class="form-control input-sm"/>'.$row->nama.'</td>';
                            echo '<td><input type="hidden" name="tanggal_'.$i.'" value="'.$row->tanggal.'" readonly="" class="form-control input-sm"/>'.$row->tanggal.'</td>';
                            echo '<td><input type="time" name="jam_masuk_'.$i.'" value="'.$row->jam_masuk.'" '.$readonly_masuk.' step="1" class="form-control input-sm"/></td>';
                            echo '<td><input type="time" name="jam_pulang_'.$i.'" value="'.$row->jam_pulang.'" '.$readonly_pulang.' step="1" class="form-control input-sm"/></td>';
                            echo '<td  '.$bg_color.'><input type="text" name="ket_'.$i.'" value="'.$ket.'"  class="form-control input-sm" placeholder="Isi dengan Keterangan Kehadiran"/></td>';
                            echo '<td '.$bg_color.'><select name="status_kerja_'.$i.'" class="form-control input-sm" required>
                                            <option '.$selected_tidak_masuk.'value=""> = PILIH =</option>
                                            <option '.$selected_masuk.' value="MASUK">MASUK</option>
                                            <option value="LIBUR TANGGAL MERAH">LIBUR TGL MERAH</option>
                                            <option value="CKSTS">CKSTS</option>
                                            <option value="CKSD">CKSTD</option>
                                            <option value="CTH">CTH</option>
                                            <option value="CKAP">CKAP</option>
                                            <option value="CBS">CBS</option>
                                            <option value="CBM">CBM</option>
                                            <option value="CBSL">CBSL</option>
                                            <option value="MTS">MTS</option>
                                            <option value="MPP">MPP</option>
                                            <option value="SKR">SKORSING</option>
                                            <option value="SPPD">SPPD</option>
                                            <option value="OFFSCR">OFF</option>
                                            <option value="MTS">MTS</option>
                                        </select></td>';
                        echo '</tr>';
                        $i++;
                        
                    }
                ;?>
            </table>
             <?php
                //echo $i;
                if ($i > '1'){
                    echo '<input type="submit" name="submit" value="validasi" class="btn btn-success pull-right"/> <br/><br/>';
                    
                }elseif($i < '1'){
                    echo 'Data tidak ada '.anchor(site_url('admin_sdm/validasi'),'kembali');
                }
                ?>
                
            </form>
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
