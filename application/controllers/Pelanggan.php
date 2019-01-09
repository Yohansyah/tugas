<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('P_data');
    }

    function pelanggan(){
        $data['pelanggan']= $this->P_data->ambil_data()->result();
        $this->load->view('c_data.php',$data);
    }   
}