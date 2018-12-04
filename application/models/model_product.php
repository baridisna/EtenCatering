<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_product extends CI_Model {
	public function list_product()
	{
		$query = $this->db->query('SELECT a.product_id, a.product_name, a.photo, MIN(b.price) as price FROM products a JOIN product_variant ON a.product_id = b.product_id GROUP BY product_id LIMIT 50');
		return $query->result();	
	}

	public function product_detail($id_product)
	{
		$query = $this->db->query("SELECT product_id, product_name, product_description, photo, product_satuan, product_box, product_review, product_gubug FROM products WHERE product_id='$id_product'");
		return $query->row();
	}

	public function product_variant($id_product)
	{
		$query = $this->db->query("SELECT * FROM product_variant WHERE product_id='$id_product'");
		return $query->row();
	}

	public function product_bestseller($id_product)
	{
		$query = $this->db->query("SELECT product_id, product_description, photo FROM products WHERE product_id='$id_product'");
		return $query->row();
	}

	function get_all($table)
	{
		$this->db->from($table);
		
		return $this->db->get();
	}

	function get_all_price($table)
	{
		$this->db->from($table);
		$this->db->order_by("product_price", "asc");
		return $this->db->get();
	}

	function get_all_popular($table)
	{
		$this->db->from($table);
		$this->db->order_by("product_review", "desc");
		return $this->db->get();
	}

	function get_all_western($table)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('origin', 'Western');
		$this->db->distinct('origin');
		return $this->db->get();
	}

	function get_all_indonesian($table)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('origin', 'Indonesian');
		$this->db->distinct('origin');
		return $this->db->get();
	}

	function get_all_main($table)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('type', 'Main Course');
		$this->db->distinct('type');
		return $this->db->get();
	}

	function get_all_appetizer($table)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('type', 'Appetizer');
		$this->db->distinct('type');
		return $this->db->get();
	}

	function get_all_dessert($table)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('type', 'Dessert');
		$this->db->distinct('type');
		return $this->db->get();
	}

	public function get($table) {
	   $query=$this->db->get_where('product_price',array('products'=>$products));
	   $result= $query->result_array();
	   if($result==TRUE) {
	     return true;
	     }
	   return false;
	  }
}


?>