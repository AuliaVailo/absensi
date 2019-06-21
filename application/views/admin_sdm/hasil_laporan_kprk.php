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
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('admin_sdm/validasi_kprk');?>"><i class="fa fa-circle-o"></i> Validasi KPRK</a></li>
            <li><a href="<?=site_url('admin_sdm/validasi_kpc');?>"><i class="fa fa-circle-o"></i> Validasi KPC</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Monitoring Validasi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Laporan</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('admin_sdm/laporan_kprk');?>"><i class="fa fa-book"></i>Laporan Kehadiran KPRK</a></li>
            <li><a href="<?=site_url('admin_sdm/laporan_kpc');?>"><i class="fa fa-book"></i>Laporan Kehadiran KPC</a></li>
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
        <div class="col-lg-12 col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <center>
                <h3>Laporan Kehadiran Karyawan <br/>
                  Bulan : <?=$bulan_hurug;?> <?=$tahun;?> <br/>
                Kantor Pos Tuban 62300</h3>
              </center>
            </div>
            <div class="box-body">

              <table class="table table-bordered table-hover dataTable">
                <thead>
                  <th>No</th>
                  <th>Unit Kerja</th>
                  <th>Jumlah Karyawan Yang Hadir Penuh Bulan Ini</th>
                  <th>Jumlah Karyawan Yang Tidak Hadir Penuh Bulan ini</th>
                  <th>Total Karyawan</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Kantor Pos Tuban 62300</td>
                    <td><?=$jumlah_pegawai_masuk_full;?></td>
                    <td><?=$jumlah_pegawai_masuk_tidak_full;?></td>
                    <td><?=$jumlah_pegawai_all;?></td>
                  </tr>
                </tbody>
              </table>
              <br><br>
              <h3>DATA KARYAWAN YANG TIDAK HADIR PENUH</h3>
              <table class="table table-bordered table-hover dataTable">
                <thead>
                  <th>No</th>
                  <th>Nama Karyawan</th>
                  <th>Nippos</th>
                  <th>Jumlah Tidak Masuk</th>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      if($data_cksts->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Sakit Tanpa Keterangan Dokter</b></td>';
                      }else{

                      }
                    ;?>
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cksts->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                 <tr>
                  <?php
                      if($data_csksd->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Sakit Dengan Keterangan Dokter</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_csksd->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                     <?php
                      if($data_cth->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Tahunan (CTH)</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cth->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_ckap->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Karena Alasan Penting (CKAP)</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_ckap->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_cksts->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Besar</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cbs->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_cksts->num_rows() > 0){
                        echo '<td colspan="4"><b>Masa Persiapan Pensiun</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_mpp->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_cksts->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Bersalin</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cbsl->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_skrs->num_rows() > 0){
                        echo '<td colspan="4"><b>Skorsing</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_skrs->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_mts->num_rows() > 0){
                        echo '<td colspan="4"><b>Mangkir Tidak Sah</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_mts->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_sppd->num_rows() > 0){
                        echo '<td colspan="4"><b>Perjalanan Dinas</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_sppd->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_cbm->num_rows() > 0){
                        echo '<td colspan="4"><b>CBM</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cbm->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_off->num_rows() > 0){
                        echo '<td colspan="4"><b>Off Scurity</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_off->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>

                </tbody>
              </table>

              <h3>DATA KARYAWAN YANG DIPOTONG UANG TRANSPORT</h3>
              <table class="table table-bordered table-hover dataTable">
                <thead>
                  <th>No</th>
                  <th>Nama Karyawan</th>
                  <th>Nippos</th>
                  <th>Jumlah Tidak Masuk</th>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      if($data_cksts->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Sakit Tanpa Keterangan Dokter</b></td>';
                      }else{

                      }
                    ;?>
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cksts->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                 <tr>
                  <?php
                      if($data_csksd->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Sakit Dengan Keterangan Dokter</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_csksd->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  
                  <tr>
                    <?php
                      if($data_ckap->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Karena Alasan Penting (CKAP)</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_ckap->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_cksts->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Besar</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cbs->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_cksts->num_rows() > 0){
                        echo '<td colspan="4"><b>Masa Persiapan Pensiun</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_mpp->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_cksts->num_rows() > 0){
                        echo '<td colspan="4"><b>Cuti Bersalin</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cbsl->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_skrs->num_rows() > 0){
                        echo '<td colspan="4"><b>Skorsing</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_skrs->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_mts->num_rows() > 0){
                        echo '<td colspan="4"><b>Mangkir Tidak Sah</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_mts->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_sppd->num_rows() > 0){
                        echo '<td colspan="4"><b>Perjalanan Dinas</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_sppd->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_cbm->num_rows() > 0){
                        echo '<td colspan="4"><b>CBM</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_cbm->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>
                  <tr>
                    <?php
                      if($data_off->num_rows() > 0){
                        echo '<td colspan="4"><b>Off Scurity</b></td>';
                      }else{

                      }
                    ;?>
                    
                  </tr>
                  <?php
                     $i = 1;
                     foreach ($data_off->result() as $row)
                      {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->nippos.'</td>';
                        echo '<td>'.$row->jml.'</td>';
                        $i++;
                      }
                  ;?>

                </tbody>
              </table>
            </div>
          
          </div>
        </div>
      </div>
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
