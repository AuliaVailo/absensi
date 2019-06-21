<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<h1>Halaman Admin SDM</h1>
<a href="<?=site_url('admin_sdm');?>"> Home </a> || 
<a href="<?=site_url('admin_sdm/validasi');?>"> Validasi Harian </a> || 
<a href="<?=site_url('admin_sdm/laporan');?>"> Laporan Kehadiran </a> || 
<a href="<?=site_url('admin_sdm/about');?>"> Tentang Aplikasi </a> || 
<a href="<?=site_url('admin_sdm/log_out');?>">Logout</a>
<div id="container">
    
<h1>Validasi Harian</h1>
	<div id="body">
            <form action="<?=site_url('admin_sdm/do_validasi');?>" method="POST">
            <table border="1">
                <tr>
                    <th width="25px">No</th>
                    <th width="100px">Nippos/NIK</th>
                    <th width="200px">Nama</th>
                    <th width="100px" align="center">Tanggal</th>
                    <th width="100px" align="center">Jam Masuk</th>
                    <th width="100px" align="center">Jam Masuk</th>
                    <th width="500px">Keterangan</th>
                </tr>
                <?php
                $i = 1;
                foreach ($harian->result() as $row)
                    {
                    if($row->jam_masuk == "" && $row->jam_pulang ==""){
                        $bg_color = 'bgcolor="#ff0000"';
                        $ket = 'Tidak Hadir';
                        $selected_masuk = '';
                        $selected_tidak_masuk = 'selected';
                        $readonly_masuk = '';
                        $readonly_pulang = '';
                    }elseif($row->jam_masuk == "" ){
                        $bg_color = 'bgcolor="#ffff00"';
                        $selected_masuk = 'selected';
                        $selected_tidak_masuk = '';
                        $ket = 'Belum Absen Masuk';
                        $readonly_masuk = '';
                        $readonly_pulang = 'readonly';
                    }elseif($row->jam_pulang ==""){
                        $bg_color = 'bgcolor="#ffff00"';
                        $selected_masuk = 'selected';
                        $selected_tidak_masuk = '';
                        $ket = 'Belum Absen Pulang';
                        $readonly_masuk = 'readonly';
                        $readonly_pulang = '';
                    }else{
                        $bg_color = 'bgcolor="#00ff00"';
                        $ket = 'Hadir';
                        $selected_masuk = 'selected';
                        $selected_tidak_masuk = '';
                        $readonly_masuk = 'readonly';
                        $readonly_pulang = 'readonly';
                    }
                        echo '<tr '.$bg_color.'>';
                            echo '<td><input type="hidden" name="id_'.$i.'" value="'.$row->id_data.'" readonly="" />'.$i.'</td>';
                            echo '<td><input type="hidden" name="nik_nippos_'.$i.'" value="'.$row->nippos.'" readonly="" />'.$row->nippos.'</td>';
                            echo '<td><input type="hidden" name="nama_'.$i.'" value="'.$row->nama.'" readonly="" />'.$row->nama.'</td>';
                            echo '<td><input type="hidden" name="tanggal_'.$i.'" value="'.$row->tanggal.'" readonly="" />'.$row->tanggal.'</td>';
                            echo '<td><input type="time" name="jam_masuk_'.$i.'" value="'.$row->jam_masuk.'" '.$readonly_masuk.' /></td>';
                            echo '<td><input type="time" name="jam_pulang_'.$i.'" value="'.$row->jam_pulang.'" '.$readonly_pulang.' /></td>';
                            echo '<td><input type="text" name="ket_'.$i.'" value="'.$ket.'" style="width: 400px;"/>'
                                    . '<select name="status_kerja_'.$i.'">
                                            <option '.$selected_tidak_masuk.'value="0"> = PILIH =</option>
                                            <option '.$selected_masuk.' value="MASUK">MASUK</option>
                                            <option value="CKSTS">CKSTS</option>
                                            <option value="CKSD">CKSTD</option>
                                            <option value="CTH">CTH</option>
                                            <option value="CKAP">CKAP</option>
                                            <option value="CBS">CBS</option>
                                            <option value="CBM">CBM</option>
                                            <option value="CBSL">CBSL</option>
                                        </select></td>';
                        echo '</tr>';
                        $i++;
                        
                    }
                ;?>
            </table>
                <?php
                //echo $i;
                if ($i > '1'){
                    echo '<input type="submit" name="submit" value="validasi" />';
                    
                }elseif($i < '1'){
                    echo 'Data tidak ada '.anchor(site_url('admin_sdm/validasi'),'kembali');
                }
                ?>
                
            </form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>