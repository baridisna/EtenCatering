<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_promotion');
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
		$data ['data'] = $this->model_promotion->get_all_promosi('promotions');

		$this->load->view('header', $cart);
		$this->load->view('promotion', $data);
	}	
}