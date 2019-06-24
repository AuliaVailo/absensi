<?php

class Admin_model extends CI_Model{
    
    //mengecek apakah nippos pada tanggal hari ini sudah absen masuk atau belum
    function cek_user($user){
        $this->db->where('user_id', $user);
        return $this->db->get('user');
    }
    
     function cek_login($user, $password){
        $this->db->where('user_id', $user);
        $this->db->where('password', $password);
        return $this->db->get('user');
    }
    
    function get_datalaporan($awal, $akhir){
        return $this->db->query("SELECT * FROM td_validasi WHERE tanggal BETWEEN '$awal' AND '$akhir'");
        //return $this->db->query("SELECT * FROM v_lap_harian");
    }
    
    function get_harian($tanggal, $where){
        return $this->db->query("SELECT * FROM v_validasi_harian where tanggal = '$tanggal' and status = '0' $where order by nama");
    }
    
    function update_master_validasi($no_validasi){
        $data = array(
            'status_validasi' => '1',
            'tanggal_validasi' => date('Y-m-d')
        );

        $this->db->where('no_validasi', $no_validasi);
        return $this->db->update('tm_validasi', $data);
    }
    
    function get_id_validasi_now(){
        $tanggal = $this->session->userdata('tanggal_validasi');
        return $this->db->query("SELECT no_validasi FROM tm_validasi WHERE tanggal_validasi = '$tanggal'");
    }

    function get_laporan_kprk($bulan, $tahun, $status){
        return $this->db->query("SELECT nama, nippos, status_kerja, COUNT(status_kerja) AS jml 
            FROM v_cari_laporan_bulanan
            WHERE kantor = '62300' AND bulan = '$bulan' AND tahun='$tahun' AND status_kerja = '$status'
            GROUP BY nippos
            ORDER BY nama ASC");
    }

    function count_all_pegawai($kantor){
        return $this->db->query("Select * from pegawai where kd_dtkantor = '$kantor'");
    }

    function count_all_pegawai_tidak_masuk_full($kantor, $bulan, $tahun){
            
        return $this->db->query("SELECT nama, nippos, status_kerja, COUNT(status_kerja) AS jml 
            FROM v_cari_laporan_bulanan
            WHERE kantor = '62300' AND bulan = '$bulan' AND tahun='$tahun'
            AND status_kerja = 'cksts' 
            OR status_kerja = 'cksd'
            OR status_kerja = 'cth'
            OR status_kerja = 'ckap'
            OR status_kerja = 'cbs'
            OR status_kerja = 'cbm'
            OR status_kerja = 'cbsl'
            OR status_kerja = 'skrs'
            OR status_kerja = 'off'
            OR status_kerja = 'mts'
            OR status_kerja = 'sppd'
            OR status_kerja = 'mpp'
            GROUP BY nippos
            ORDER BY nama ASC");
    }

    function get_data_belum_validai(){
        return $this->db->get('v_monitoring_belum_validasi_perbulan');
    }

    function get_data_belum_validai_bulan($bulan){
        $this->db->where('substring(tgl_validasi,1,7)', $bulan);
        return $this->db->get('v_monitoring_belum_validasi_pertanggal');
    }

    function get_lap_harian($tanggal){
        $this->db->where('substring(tgl_valiasi,1,10)', $tanggal);
        $this->db->order_by('kd_dtkantor', 'ASC');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('v_validasi_harian');
    }

    function hari_ini($status){
        if($status == 'hadir'){
            $this->db->where('jam_masuk !=', NULL,'false');
        }elseif($status == 'tidakhadir'){
            $this->db->where('jam_masuk =', NULL,'false');
        }else{

        }
        $this->db->order_by('kd_dtkantor', 'ASC');
        $this->db->order_by('id_bagian', 'ASC');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('v_data_hari_ini');
    }
    
}