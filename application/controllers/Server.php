<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Server extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Mhs');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function mahasiswas()
	{
		$data = $this->M_Mhs->getAll();

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function getByIdmahasiswas($xid)
	{
		$data = $this->M_Mhs->getbyId($xid);

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}
