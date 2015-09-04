<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('wall');
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
	public function editprofile()
	{
		$this->load->view('editprofile');
	}
	// public function wall()
	// {
	// 	$this->load->view()
	// }
	
}

//end of main controller