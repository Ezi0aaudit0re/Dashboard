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
			echo "user found";
		}
	}
}
?>