<?php

class Login_model extends CI_Model{
    
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
    
}