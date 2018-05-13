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

	public function postMahasiswa(){
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
		);

		$insert = $this->M_Mhs->insertMhs($data);

		$response['status'] = '';

		if($insert){
			$response['status'] = 'OK';
		}else {
			$response['status'] = 'FAIL';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function putMahasiswa(){
		$data = array(
			'id' => $this->input->post('id'),
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);

		$update = $this->M_Mhs->updateMhs($data);

		$response['status'] = '';

		if($update){
			$response['status'] = 'OK';
		}else {
			$response['status'] = 'FAIL';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function deleteMahasiswa(){
		$data = array(
			'id' => $this->input->post('id')
		);

		$update = $this->M_Mhs->deleteMhs($data);

		$response['status'] = '';

		if($update){
			$response['status'] = 'OK';
		}else {
			$response['status'] = 'FAIL';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
}
