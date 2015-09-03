<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('normaldash');
	}
	public function signin()
	{
		$this->load->view('signin');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function adminadduser()
	{
		$this->load->view('adminuseradd');
	}
	public function admindash()
	{
		$this->load->view('admindash');
	}
}

//end of main controller