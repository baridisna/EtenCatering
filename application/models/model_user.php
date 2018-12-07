<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {
	function user($username)
	{
		$query=$this->db->query("SELECT * FROM user where UserID='$username'");
		return $query;
	}

	function auth_customer($email, $password)
	{
		$query=$this->db->query("SELECT * FROM user JOIN customer ON user.UserID = customer.UserID WHERE user.email='$email' AND user.Password='$password'");
		return $query;
	}
	
	function auth_admin($email, $password)
	{
		$query=$this->db->query("SELECT * FROM user JOIN admin ON user.UserID = admin.UserID WHERE user.UserId='$username' AND user.Password='$password'");
		return $query;
	}

	function add_user($data, $customer)
	{
        $this->db->insert('user',$data);
        $this->db->insert('customer', $customer);
	}
}