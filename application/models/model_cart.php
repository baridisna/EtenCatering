<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_cart extends CI_Model {

	function Cart_customer($id_customer)
	{
		$query=$this->db->query("SELECT a.cart_id, a.variant_id, a.customer_id, a.quantity, a.quantity*price as total_cost, b.variant_name, b.product_id, b.price as unit_cost, c.product_name, c.photo FROM cart_item a JOIN product_variant b ON a.variant_id=b.variant_id JOIN products c ON b.product_id=c.product_id WHERE a.customer_id='$id_customer'");
		return $query->result();
	}

	function edit($id)
	{
		$this->db->where('cart_id', $id);
		$this->db->update('cart_item', $data);
	}

	function delete($id)
	{
		$this->db->where('cart_id', $id);
		$this->db->delete('cart_item');
	}

}