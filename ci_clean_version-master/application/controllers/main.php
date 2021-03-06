<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('index');
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
	// public function admindash()
	// {
	// 	$this->load->view('admindash');
	// }
	public function editprofile()
	{
		$this->load->view('editprofile');
	}
	public function wall()
	{
		$this->load->model('user');
		$message=$this->user->getmessage();
		$comment= $this->user->getcomments();
		$this->load->view('wall', array('info' => $this->session->userdata('info'),
										'message'=> $message,
										 'comment'=>$comment));
	}
	public function signinerror()
	{
		$this->load->view('signin', array('error' => $this->session->flashdata('error')));
	}
	public function registererror()
	{
		$this->load->view('register', array('error' => $this->session->flashdata('error')));
	}
	public function registersucess()
	{
		$this->load->view('signin', array('sucess'=>$this->session->flashdata('sucess')));
	}
	public function adminuser()
	{
		$this->load->model('user');
		$query = $this->user->get_user();
		$this->load->view('admindash', array('info' => $query));

	}
	public function normaluser()
	{	
		$this->load->model('user');
		$query = $this->user->get_user();
		$this->load->view('normaldash', array('info' => $query));
	}
	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/main/index');
	}
	public function adminsucess()
	{
		$this->load->view('adminuseradd', array('sucess', $this->session->flashdata('sucess')) );
	}
	public function remove($id)
	{	
		$this->load->model('user');
		$this->user->remove($id);
		redirect("/main/adminuser");
	}
	public function editemail()
	{
		$this->load->model('user');
		$this->user->editemail();
	}
	public function updatesucess()
	{
		$this->load->view('editprofile', array('sucess' => $this->session->flashdata('sucess')));
	}
	public function editpassword()
	{
		$this->load->model('user');
		$this->user->editpassword();	
	}

}

//end of main controller