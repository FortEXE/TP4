<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();

		$this->API="http://localhost/TP4/index.php/Server";
		$this->load->library('curl');
	}

	public function index()
	{
		$meta['page_title'] = "list mahasiswa";
		$data['mahasiswas'] = json_decode($this->curl->simple_get($this->API . '/mahasiswas'));
		$this->load->view('template/header', $meta);
		$this->load->view('v_mahasiswas', $data);
		$this->load->view('template/footer', $data);
	}

	public function tentang()
	{
		$meta['page_title'] = "Tentang";
		$this->load->view('template/header', $meta);
		$this->load->view('v_tentang');
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$meta['page_title'] = "tambah mahasiswa";
		$this->load->view('template/header', $meta);
		$this->load->view('v_tambah');
		$this->load->view('template/footer');
	}

}

?>
