<?php
class Daftar_model extends CI_Model {
	/**
	 * Constructor
	 */
	function __construct() {
        parent::__construct();
	}
	
	// Inisialisasi nama tabel 
	
	function get_akses1($nama,$email,$pass,$kpass)
	{
			$sql="SELECT  * FROM daftar where nama='$nama' and email='$email' and pass='$pass' and kpass='$kpass' ";
		return $this->db->query($sql);
	}
	
	
}
