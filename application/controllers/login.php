<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
		$this->load->model('Login_model', 'login', TRUE);
	}
	public function login()
	{
		$user= $this->input->post('user');
		$pass= $this->input->post('pass');
		echo $user;
		echo $pass;
		$cek=$this->login->get_akses2($user,$pass)->result();
		if(count($cek)>0)
		{
			redirect('welcome/Home');
		}
		else
		{
			redirect('welcome/Home');
		}
	}
	
	
}
