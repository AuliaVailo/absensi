<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }


    public function do_login(){
        //mengambil parameter inputan login
        $user       = $this->input->post('user');
        $password   = md5($this->input->post('password'));
        
        //memeriksa apakah user terdaftar atau tidak
        $query = $this->login_model->cek_user($user)->num_rows();
        
        if($query > 0){
            //cek apakah user dan password sesuai
            $query = $this->login_model->cek_login($user,$password)->num_rows();
            
            if($query > 0){
                $data = array(
                    'user' => $this->input->post('user'),
                    'is_logged_in' => true
                );
                $this->session->set_userdata($data);
                
                if($user == '623KKP'){
                    redirect('admin_kkp');
                }elseif($user == '623kkp'){
                    redirect('admin_kkp');
                }elseif($user == '623SDM'){
                    redirect('admin_sdm');
                }elseif($user == '623sdm'){
                    redirect('admin_sdm');
                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                                Anda tidak berhak mengakses halaman tersebut.
                                      </div>');
                    redirect('/');
                }
                
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                                Login gagal, periksa User dan Password Anda
                                      </div>');
            redirect('/');
            }
        }else{
            echo 'User belum terdaftar '.$query;
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                                User belum terdaftar.
                                      </div>');
            redirect('/');
        }
        
    }

    public function log_out(){
        $this->session->sess_destroy();
        redirect('/', 'refresh' );
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

