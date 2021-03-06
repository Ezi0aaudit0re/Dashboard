<?php
class user extends CI_Model
{
	public function users($info)
	{
		$query = "INSERT INTO users (email, password, first_name, last_name, created_at) VALUES (?, ?, ?, ?, NOW())";
		$values = array($info['email'], md5($info['password']), $info['first_name'], $info['last_name']);
		$this->db->query($query, $values);
		$check = $this->db->query('SELECT * FROM users WHERE email = ?', array($info['email']))->row_array();
		if($check['id'] == 1)
		{
			$this->db->query('UPDATE users SET type = ? WHERE id = ?', array('admin', $check['id']));
		}
		else
		{
			$this->db->query('UPDATE users SET type = ? WHERE id = ?', array('user', $check['id']));
		}
		$this->session->set_flashdata('sucess', 'You have been sucessfully logged in please sigh in now');
		
	}

	public function signin($info)
	{
		$query = $this->db->query('SELECT * FROM users WHERE email = ? AND password = ?', array($info['email'], $info['password']))->row_array();
		if($query == null)
		{
			$this->session->set_flashdata('error', 'Email and password doesnot exist');
			redirect('/main/signinerror');
		}
		else
		{
			$this->session->set_userdata('info', $query);
			redirect('/main/wall');
		}
	}
	public function dashboard()
	{
		$info = $this->session->userdata('info');
		
		if($info['type'] === 'admin')
		{

			redirect('/main/adminuser');
		}
		else
		{
			redirect('/main/normaluser');
		}
	}
	public function get_user()
	{
		return $this->db->query('SELECT id, first_name, last_name, email, created_at, type FROM users')->result_array();
	}
	public function remove($id)
	{
		$this->db->query('DELETE FROM users WHERE id= ?', array($id));
	}
	public function editemail()
	{
		
		$info = $this->input->post();
		$id = $this->session->userdata('info');
		$query = "UPDATE users SET email = ?, first_name = ?, last_name = ? WHERE id = ?;";
		$value = array($info['email'], $info['first_name'], $info['last_name'], $id['id']);
		$this->db->query($query, $value);
		$this->session->set_flashdata('sucess', 'Information was sucessfully updated');
		redirect('/main/updatesucess');
	}
	public function editpassword()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'matches[cpassword]');
		if($this->form_validation->run()==TRUE)
		{
			$info = $this->input->post();
			$id = $this->session->userdata('info');
			$query = "UPDATE users SET password = ? WHERE id=?";
			$value = array(md5($info['password']), $id['id']);
			$this->db->query($query, $value);
			$this->session->set_flashdata('sucess', 'Information was sucessfully updated');
			redirect('/main/updatesucess');
		}
	}
	public function addmessage($message)
	{
		// var_dump($message);
		$id= $this->session->userdata('info');
		$query = "INSERT INTO messages (message, created_at, users_id) VALUES (?, NOW(), ?)";
		$values= array($message['message'], $id['id']);
		$this->db->query($query, $values);
		redirect('/main/wall');
	}
	public function getmessage()
	{
		return $this->db->query('SELECT users.first_name, users.last_name, messages.id, messages.message, messages.created_at FROM users LEFT JOIN messages ON users.id= messages.users_id')->result_array();
	}
	public function addcomment($messageid, $comment)
	{	
		$userid=$this->session->userdata('info');
		// echo $userid['id'];
		$query = "INSERT INTO comments (comment, created_at, messages_id, users_id) VALUES (?, NOW(), ?, ?)";
		$values= array($comment['comment'], $messageid, $userid['id']);
		$this->db->query($query, $values);
		redirect('/main/wall');
	}
	public function getcomments()
	{
		return $this->db->query('SELECT users.first_name, users.last_name, comments.comment, comments.created_at, comments.messages_id FROM users LEFT JOIN comments ON users.id= comments.users_id')->result_array();
	}
}
?>