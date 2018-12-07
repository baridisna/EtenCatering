<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
			

			$data = array(
			'total_pay' => $total_pay,
			'count_product' => $count_product );

		$this->load->view('header', $data);
		$this->load->view('home');
	}

	// public function product_bestseller()
	// {
	// 	$data['bestseller'] = $this->model_product->product_bestseller('a01');
	// 	$this->load->view('header');
	// 	$this->load->view('home', $data);
	// }

	public function about_us()
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

		$data = array(
			'total_pay' => $total_pay,
			'count_product' => $count_product );

		$this->load->view('header', $data);
		$this->load->view('about_us');
	}

	public function my_account()
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

		$data = array(
			'total_pay' => $total_pay,
			'count_product' => $count_product );

		$this->load->view('header', $data);
		$this->load->view('my_account');
	}
}