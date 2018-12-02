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

	public function bestseller_product($id_product)
	{
		$query = $this->db->query('SELECT a.product_id, a.product_name, a.photo, MIN(b.price) as price FROM products a JOIN product_variant ON a.product_id = b.product_id GROUP BY product_id LIMIT 50');
		return $query->result();
	}

	function get_all($table)
	{
		$this->db->from($table);

		return $this->db->get();
	}

	public function sort_price($id_product)
	{
		$query = $this->db->query('SELECT * FROM products ORDER BY product_price ASC');
		return $query->row();
	}
}
?>