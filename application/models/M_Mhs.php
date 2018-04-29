
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
}

/* End of file M_Mhs.php */
/* Location: ./application/models/M_Mhs.php */

?>