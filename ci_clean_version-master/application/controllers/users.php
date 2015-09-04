<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller
{
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[cpassword]');
		if($this->form_validation->run()==TRUE)
		{
			$info['email'] = $this->input->post('email');
			$info['first_name'] = $this->input->post('first_name');
			$info['last_name'] = $this->input->post('last_name');
			$info['password'] = $this->input->post('password');
			$this->load->model('user');
			$this->user->users($info);
		}
		else
		{
			echo "form not validated";
		}
	}
}

?>