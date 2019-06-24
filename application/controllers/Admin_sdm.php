<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sdm extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->library('table');
        $this->is_loged_in();
    }

    public function index(){
        //$this->load->view('admin_sdm/dashboard_admin');
        $this->load->view('admin_sdm/dashboard');
    }
    
    function validasi_kprk(){
        $this->load->view('admin_sdm/cari_validasi_kprk');
    }

    function validasi_kpc(){
        $this->load->view('admin_sdm/cari_validasi_kpc');
    }

    function monitoring_validasi(){
        $data_valid = array();
        $data_validasi = $this->admin_model->get_data_belum_validai();
        if($data_validasi->num_rows() > 0){
            $data_valid = $data_validasi->result();
        }

        $data = array(
            'data_valid' => $data_valid,
            'jenis'      => 'bulan'
        );

        $this->load->view('admin_sdm/monitoring_validasi', $data);
    }

    function detail_belum_validasi($bulan){
        $data_bulan = array();
        $data_bulanan = $this->admin_model->get_data_belum_validai_bulan($bulan);
        if($data_bulanan->num_rows() > 0){
            $data_valid = $data_bulanan->result();
        }

        $data = array(
            'data_valid' => $data_valid,
            'jenis'      => 'detail_bulan'
        );

        $this->load->view('admin_sdm/monitoring_validasi', $data);
    }
    
    function cari_validasi($jenis = NULL, $tgl = NULL){

        if($jenis == NULL){
            $jenis_validasi = $this->input->post('jenis_validasi');
        }else{
            $jenis_validasi = $jenis;
        }
        

        if($jenis_validasi == 'kprk'){
            $where = "and kd_dtkantor = '62300'";
        }else{
            $where = "and kd_dtkantor <> '62300'";
        }

        if($tgl == NULL){
            $tanggal = $this->input->post('tanggal');
        }else{
            $tanggal = $tgl;
        }

        
        $data = array(
            'tanggal_validasi' => $tanggal
        );
        $this->session->set_userdata($data);
        
        $data['harian'] = $this->admin_model->get_harian($tanggal,$where);
        
        $this->load->view('admin_sdm/validasi_absensi_kprk', $data);
        /*
        if($jenis_validasi == 'kprk'){
            $this->load->view('admin_sdm/validasi_absensi_kprk', $data);
        }elseif($jenis_validasi == 'kpc'){
            $this->load->view('admin_sdm/validasi_absensi_kpc', $data);
        }
        */
        
    }
    
    function do_validasi_kprk(){
        //cari id_validasi hari ini;
        $query = $this->admin_model->get_id_validasi_now()->result();
        foreach ($query as $row){
            $no_validasi = $row->no_validasi;
        }       
        
        //update master validasi
        $query = $this->admin_model->update_master_validasi($no_validasi);
        
        if($query){
            $jumlah_pegawai = $this->db->count_all('pegawai');
        
            $data =array();
            for($i=1; $i < $jumlah_pegawai+1 ; $i++) {
            $data[$i] = array(
                       'id_data' => $this->input->post('id_'.$i),
                       //'nama' => $this->input->post('nama_'.$i),
                       //'tanggal' => $this->input->post('tanggal_'.$i),
                       'jam_masuk' => $this->input->post('jam_masuk_'.$i),
                       'jam_pulang' => $this->input->post('jam_pulang_'.$i),
                       'ket' => $this->input->post('ket_'.$i),
                       'status' => '1',
                       'status_kerja' => $this->input->post('status_kerja_'.$i),
                       );
            //echo $i;
            }
            $query = $this->db->update_batch('td_validasi', $data, 'id_data');

            if($query){
                $pesan = '<div class="callout callout-success">
                <h4>System Info!</h4>
      
                <p>Validasi berhasil</p>
              </div>';
                $this->session->set_flashdata('pesan', $pesan);
                redirect('admin_sdm/validasi_kprk');
            }
        }
                
        //$this->db->insert_batch('td_validasi', $data);
        
    }

    function do_validasi_kpc(){
        //cari id_validasi hari ini;
        $query = $this->admin_model->get_id_validasi_now()->result();
        foreach ($query as $row){
            $no_validasi = $row->no_validasi;
        }       
        
        //update master validasi
        $query = $this->admin_model->update_master_validasi($no_validasi);
        
        if($query){
            $jumlah_pegawai = $this->db->count_all('pegawai');
        
            $data =array();
            for($i=1; $i < $jumlah_pegawai+1 ; $i++) {
            $data[$i] = array(
                       'id_data' => $this->input->post('id_'.$i),
                       //'nama' => $this->input->post('nama_'.$i),
                       //'tanggal' => $this->input->post('tanggal_'.$i),
                       'jam_masuk' => $this->input->post('jam_masuk_'.$i),
                       'jam_pulang' => $this->input->post('jam_pulang_'.$i),
                       'ket' => $this->input->post('ket_'.$i),
                       'status' => '1',
                       'status_kerja' => $this->input->post('status_kerja_'.$i),
                       );
            //echo $i;
            }
            $query = $this->db->update_batch('td_validasi', $data, 'id_data');

            if($query){
                $this->session->set_flashdata('pesan', 'Validasi berhasil');
                redirect('admin_sdm/validasi_kpc');
            }
        }
                
        //$this->db->insert_batch('td_validasi', $data);
        
    }

    function laporan_harian(){
        $data = array(
            'action'    => site_url('admin_sdm/cari_laporan_harian'),
            'jenis'     => 'harian'
        );

        $this->load->view('admin_sdm/laporan', $data);
    }

    function cari_laporan_harian(){

        $tanggal = $this->input->post('tanggal');

        $laporan_harian = array();
        $query = $this->admin_model->get_lap_harian($tanggal);
        if($query->num_rows() > 0 ){
            $laporan_harian = $query->result();
        }

        $data = array(
            'tanggal'           => $tanggal,
            'jenis'             => 'harian',
            'laporan_harian'    => $laporan_harian
        );

        $this->load->view('admin_sdm/hasil_laporan', $data);
    }

    function laporan_bulanan(){
        $data = array(
            'action'    => site_url('admin_sdm/cari_laporan_bulanan'),
            'jenis'     => 'harian'
        );

        $this->load->view('admin_sdm/laporan', $data);
    }

    function cari_laporan_bulanan(){

        $tanggal = $this->input->post('tanggal');

        $data = array(
            'tanggal'   => $tanggal,
            'jenis'     => 'bulanan'
        );

        $this->load->view('admin_sdm/hasil_laporan', $data);
    }

    function rekap_bulanan(){
        $data = array(
            'action'    => site_url('admin_sdm/cari_laporan_rekapan'),
            'jenis'     => 'rekapan'
        );

        $this->load->view('admin_sdm/laporan', $data);
    }

    function cari_laporan_rekapan(){

        $tanggal = $this->input->post('tanggal');

        $data = array(
            'tanggal'   => $tanggal,
            'jenis'     => 'rekapan'
        );

        $this->load->view('admin_sdm/hasil_laporan', $data);
    }


       
    /*gak dipake

    function laporan(){
        $this->load->view('laporan');
    }
    
    function get_laporan(){
        $awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
        
        $query = $this->admin_model->get_datalaporan($awal, $akhir);
        
        /*
        echo '<table>';
        echo '<tr>';
            echo '<td>No</td>';
            echo '<td>Nippos/Nik</td>';
            echo '<td>Nama</td>';
            echo '<td>Tanggal</td>';
            echo '<td>Jam Masuk</td>';
            echo '<td>Jam Pulang</td>';
        echo '</tr>';
        $i = 1;
        foreach ($query->result() as $row)
        {
            echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td>'.$row->nik_nippos.'</td>';
                echo '<td>'.$row->nama.'</td>';
                echo '<td>'.$row->tanggal.'</td>';
                echo '<td>'.$row->jam_masuk.'</td>';
                echo '<td>'.$row->jam_pulang.'</td>';
                
            echo '</tr>';
            $i++;
        }
        echo '</table>';
         * 
         */
        /*
        echo $this->table->generate($query);
    }

    function laporan_kprk(){
        $this->load->view('admin_sdm/laporan_kprk');
    }

    function cari_laporan_kprk(){
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        if($bulan === '01'){
            $bulan_hurug = "Januari";
        }elseif ($bulan === '02') {
            $bulan_hurug = "Februari";
        }elseif ($bulan === '03') {
            $bulan_hurug = "Maret";
        }elseif ($bulan === '04') {
            $bulan_hurug = "April";
        }elseif ($bulan === '05') {
            $bulan_hurug = "Mei";
        }elseif ($bulan === '06') {
            $bulan_hurug = "Juni";
        }elseif ($bulan === '07') {
            $bulan_hurug = "Juli";
        }elseif ($bulan === '08') {
            $bulan_hurug = "Agustus";
        }elseif ($bulan === '09') {
            $bulan_hurug = "September";
        }elseif ($bulan === '10') {
            $bulan_hurug = "Oktober";
        }elseif ($bulan === '11') {
            $bulan_hurug = "November";
        }elseif ($bulan === '12') {
            $bulan_hurug = "Desember";
        }else{
            $bulan_hurug = "_____________";
        }

        $jumlah_pegawai_all = $this->admin_model->count_all_pegawai($kantor = '62300')->num_rows();
        $jumlah_pegawai_masuk_tidak_full = $this->admin_model->count_all_pegawai_tidak_masuk_full($kantor = '62300', $bulan, $tahun)->num_rows();
        $jumlah_pegawai_masuk_full = $jumlah_pegawai_all - $jumlah_pegawai_masuk_tidak_full;


        //$data = $this->admin_model->get_laporan_kprk($bulan, $tahun);
        //echo $bulan." ".$tahun;

        $data = array(
            'data_cksts' => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'cksts'),
            'data_csksd' => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'cksd'),
            'data_cth'   => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'cth'),
            'data_ckap'  => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'ckap'),
            'data_cbs'   => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'cbs'),
            'data_cbm'   => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'cbm'),
            'data_cbsl'  => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'cbsl'),
            'data_skrs'  => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'skrs'),
            'data_off'   => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'off'),
            'data_mts'   => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'mts'),
            'data_sppd'  => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'sppd'),
            'data_mpp'   => $this->admin_model->get_laporan_kprk($bulan, $tahun, $status = 'mpp'),
            'bulan_hurug' => $bulan_hurug,
            'tahun'      => $tahun,
            'jumlah_pegawai_all' => $jumlah_pegawai_all,
            'jumlah_pegawai_masuk_tidak_full' => $jumlah_pegawai_masuk_tidak_full,
            'jumlah_pegawai_masuk_full' => $jumlah_pegawai_masuk_full,

        );
        
        $this->load->view('admin_sdm/hasil_laporan_kprk', $data);

    }

    */

           
    function about(){
        $this->load->view('abouts');
    }
            
    function is_loged_in(){
        if ($this->session->userdata('is_logged_in') == TRUE) {
            
        } else {
            $this->session->set_flashdata('pesan', 'Silahkan login di sini');
            redirect('/');
        }
    }
    
    function log_out(){
        $this->session->sess_destroy();
        redirect('/');
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

