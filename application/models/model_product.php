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
		$query = $this->db->query("SELECT product_id, product_name, product_description, photo, product_review FROM products WHERE product_id='$id_product'");
		return $query->row();
	}

	public function product_variant($id_product)
	{
		$query = $this->db->query("SELECT * FROM product_variant WHERE product_id='$id_product'");
		return $query->result();
	}

	// public function product_bestseller($id_product)
	// {
	// 	$query = $this->db->query("SELECT product_id, product_description, photo FROM products WHERE product_id='$id_product'");
	// 	return $query->row();
	// }

	function get_all()
	{
		$query = $this->db->query("SELECT * FROM products");
		return $query->result();
		
	}

	public function cart_item($data)
    {
        $this->db->insert('cart_item', $data);
        $id_product = $this->db->insert_id();
        return (isset($id_product)) ? $id_product : FALSE;
    }

	public function sort($origin, $type, $sortby)
	{
		$query = $this->db->query("SELECT * FROM products WHERE origin='$origin' AND type='$type' ORDER BY $sortby");
		return $query->result();
	}
}
?>