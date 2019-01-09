<?php

class P_data extends CI_Model{
    function ambil_data(){
        return $this->db->get('pelanggan');
    }
}