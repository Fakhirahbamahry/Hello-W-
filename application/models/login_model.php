<?php
class Login_model extends CI_Model {
	/**
	 * Constructor
	 */
	function __construct() {
        parent::__construct();
	}
	
	// Inisialisasi nama tabel 
	
	function get_akses2($user,$pass)
	{
			$sql="SELECT  * FROM login where user='$user' and pass='$pass' ";
		return $this->db->query($sql);
	}
	
	
}
