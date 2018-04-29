<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();

		$this->API="http://localhost/webserver/index.php/Server";
		$this->load->library('curl');
	}

	public function index()
	{
		$data['mahasiswas'] = json_decode($this->curl->simple_get($this->API . '/mahasiswas'));
		$this->load->view('v_mahasiswas', $data);
	}

}

?>
