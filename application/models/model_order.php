<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_order extends CI_Model {

	public function all_order()
	{
		$query = $this->db->query("SELECT * FROM orders LIMIT 100");
	}

	public function order_cust($id_customer)
	{
		$query = $this->db->query("SELECT * FROM orders LIMIT 100");
	}

	public function add_order_detail($order_detail)
	{
		$this->db->insert('order_detail', $order_detail);

		$query = $this->db->insert_id();

		return $query;
	}

	public function add_orders($orders, $cart_id)
	{
		$this->db->insert_batch('orders', $orders);
		$this->db->update_batch('cart_item', $cart_id, 'cart_id');
	}
}