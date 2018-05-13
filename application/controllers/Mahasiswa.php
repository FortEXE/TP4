<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();

		$this->API="http://cs-upi-16.com/user/adnankhairi/index.php/server";
		$this->load->library('curl');
	}

	public function index()
	{
		$meta['page_title'] = "list mahasiswa";
		$data['mahasiswas'] = json_decode($this->curl->simple_get($this->API . '/mahasiswas'));
		$this->load->view('template/header', $meta);
		$this->load->view('v_mahasiswas', $data);
		$this->load->view('template/footer');
	}

	public function getbyId($xid)
	{
		$meta['page_title'] = "mahasiswa " . $xid;
		$data['mahasiswas'] = json_decode($this->curl->simple_get($this->API . '/getByIdmahasiswas/'. $xid));
		$this->load->view('template/header', $meta);
		$this->load->view('v_mahasiswas', $data);
		$this->load->view('template/footer');
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
		$data['API'] = $this->API;
		$this->load->view('template/header', $meta);
		$this->load->view('v_tambah', $data);
		$this->load->view('template/footer');
	}

	public function edit($xid)
	{
		$meta['page_title'] = "edit mahasiswa";
		$data['mahasiswas'] = json_decode($this->curl->simple_get($this->API . '/getByIdmahasiswas/'. $xid));
		$data['API'] = $this->API;
		$this->load->view('template/header', $meta);
		$this->load->view('v_edit', $data);
		$this->load->view('template/footer');
	}

	public function hapus($xid)
	{
		$meta['page_title'] = "hapus mahasiswa";
		
		$data['mahasiswas'] = json_decode($this->curl->simple_get($this->API . '/getByIdmahasiswas/'. $xid));
		$data['API'] = $this->API;

		$this->load->view('template/header', $meta);
		$this->load->view('v_hapus', $data);
		$this->load->view('template/footer');
	}

}

?>
