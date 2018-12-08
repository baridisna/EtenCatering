<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_product');
		$this->load->model('model_cart');

	}

	public function index()
	{
		$userID=$this->session->userdata('ses_id');

		$cart=$this->model_cart->Cart_customer($userID);

			$count_product=0;
			$total_pay=0;

			if (!empty($cart)) {
				foreach ($cart as $key) {
				$total_cost = $key->total_cost;
				$total_pay = $total_pay + $total_cost;
				$count_product = $count_product + 1;
				}
			}

		$cart = array(
			'total_pay' => $total_pay,
			'count_product' => $count_product );
		$data ['data'] = $this->model_product->get_all();

		$this->load->view('header', $cart);
		$this->load->view('products', $data);
	}

	public function product_detail()
	{
		$userID=$this->session->userdata('ses_id');

		$cart=$this->model_cart->Cart_customer($userID);

			$count_product=0;
			$total_pay=0;

			if (!empty($cart)) {
				foreach ($cart as $key) {
				$total_cost = $key->total_cost;
				$total_pay = $total_pay + $total_cost;
				$count_product = $count_product + 1;
				}
			}

		$cart = array(
			'total_pay' => $total_pay,
			'count_product' => $count_product );

		$id_product = $this->uri->segment(3);
		$data = array(
			'detail' => $this->model_product->product_detail($id_product),
			'jenis' => $this->model_product->product_variant($id_product)
		);
		$this->load->view('header', $cart);
		$this->load->view('product', $data);
	}

	public function product_variant()
	{
		$userID=$this->session->userdata('ses_id');

		$cart=$this->model_cart->Cart_customer($userID);

			$count_product=0;
			$total_pay=0;

			if (!empty($cart)) {
				foreach ($cart as $key) {
				$total_cost = $key->total_cost;
				$total_pay = $total_pay + $total_cost;
				$count_product = $count_product + 1;
				}
			}

		$cart = array(
			'total_pay' => $total_pay,
			'count_product' => $count_product );

		$id_product = $this->uri->segment(3);
		$data = array(
			'variant' => $this->model_product->product_variant($id_product));

		$this->load->view('header', $cart);
		$this->load->view('product', $data);
	}

	public function sort()
	{
		$userID=$this->session->userdata('ses_id');

		$cart=$this->model_cart->Cart_customer($userID);

			$count_product=0;
			$total_pay=0;

			if (!empty($cart)) {
				foreach ($cart as $key) {
				$total_cost = $key->total_cost;
				$total_pay = $total_pay + $total_cost;
				$count_product = $count_product + 1;
				}
			}

		$cart = array(
			'total_pay' => $total_pay,
			'count_product' => $count_product );
		 
		$sort = $this->input->post('sort');
		if ($sort='popular') {
		 	$sortby = 'product_review DESC';
		 }
		else {
			$sortby = 'product_price ASC';
		}
		$origin = $this->input->post('origin');
		$type = $this->input->post('type');
		$data ['data'] = $this->model_product->sort($origin, $type, $sortby);

		$this->load->view('header', $cart);
		$this->load->view('products', $data);
	}
}