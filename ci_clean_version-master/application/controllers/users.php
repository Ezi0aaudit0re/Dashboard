<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller
{
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique(users.email)');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[cpassword]');
		if($this->form_validation->run()==TRUE)
		{
			$info['email'] = $this->input->post('email');
			$info['first_name'] = $this->input->post('first_name');
			$info['last_name'] = $this->input->post('last_name');
			$info['password'] = $this->input->post('password');
			$this->load->model('user');
			$this->user->users($info);
			redirect('/main/registersucess');
		}
		else
		{
			$this->session->set_flashdata('error', 'Please enter all the correct details');
			redirect ("/main/registererror");
		}
	}
	public function signin()
	{
		$info['email'] = $this->input->post('email');
		$info['password'] = md5($this->input->post('password'));
		$this->load->model('user');
		$this->user->signin($info);

	}
	public function dashboard()
	{
		$this->load->model('user');
		$this->user->dashboard();
	}
	public function adduserbyadmin()
	{	
		$info = $this->input->post();
		$this->load->model('user');
		$this->user->users($info);
		redirect('/main/adminsucess');
	}
}

?>