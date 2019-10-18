<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://sip6ikmsampang.info/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    
	public function index()
	{
		$json = json_decode($this->curl->simple_get($this->API.'produk-anggota'));
        $data['dataproduk']=$json->data;

		$this->load->view('home/index',$data);
	}
}
