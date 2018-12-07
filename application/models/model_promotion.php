<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_promotion extends CI_Model {
	function get_all_promosi($table)
	{
		$this->db->from($table);
		
		return $this->db->get();
	}
}