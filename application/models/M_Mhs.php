
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mhs extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function getAll()
	{
		$q = $this->db->select('*')->from('mahasiswas')->get();

		return $q ->result();
	}

	public function getById($xid){

    	$q = $this->db->select('*')->from('mahasiswas')->where('id',$xid)->get();
    	return $q->result();
    }

	public function insertMhs($data){
    	$q = $this->db->insert('mahasiswas', $data);
    }

    public function deleteMhs($data){

    	$q = $this->db->where('id', $data['id']);
    	$q = $this->db->delete('mahasiswas');
    }

    public function updateMhs($data){

    	$q = $this->db->where('id', $data['id']);
    	$q = $this->db->update('mahasiswas', $data);
    }
}

/* End of file M_Mhs.php */
/* Location: ./application/models/M_Mhs.php */

?>