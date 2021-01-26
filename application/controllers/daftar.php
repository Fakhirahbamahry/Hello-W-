<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() 
	{
        parent::__construct();
		$this->load->model('daftar_model', 'daftar', TRUE);
	}
	public function daftar()
	{
		$nama= $this->input->post('nama');
		$email= $this->input->post('email');
		$pass= $this->input->post('pass');
		$kpass= $this->input->post('kpass');
		echo $nama;
		echo $email;
		echo $pass;
		echo $kpass;
		$cek2=$this->daftar->get_akses1($nama,$email,$pass,$kpass)->result();
		if(count($cek2)>0)
		{
			redirect('welcome/Home');
		}
		else
		{
			redirect('welcome/Home');
		}
	}
	
	
}
