<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
        parent::__construct();
        $this->load->model('model_cart');
        $this->load->model('model_product');
    }

	public function index()
	{
		$userID=$this->session->userdata('ses_id');

		if (empty($userID)) {
			$url=base_url('/Login');
            echo $this->session->set_flashdata('login_first','Login terlebih dahulu! :)');
            redirect($url);
		}
		elseif (!empty($userID)) {
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
			'cart_item' => $cart,
			'total_pay' => $total_pay,
			'count_product' => $count_product );

			$this->load->view('header', $data);
			$this->load->view('cart', $data);
		}

		
	}

	public function add_cart()
	{
		$userID=$this->session->userdata('ses_id');

		if (empty($userID)) {
			$url=base_url('/Login');
            echo $this->session->set_flashdata('login_first','Login terlebih dahulu! :)');
            redirect($url);
		}
		elseif (!empty($userID)) {
			$variant=$this->input->post('variant');
			$quantity=$this->input->post('quantity');

			$data = array(
				'variant_id' => $variant,
				'quantity' => $quantity,
				'customer_id' => $userID );

			$this->model_cart->add($data);

			echo "<script>alert('Produk Anda berhasi masuk cart :)'); window.location='".base_url('Product')."' </script>";

		}	
	}

	public function get_product_variant()
	{
		$id_product = $this->input->post('id_product');
		$variant = $this->model_product->product_variant($id_product);

		echo json_encode($variant);
	}

	public function update()
	{
		$id=$this->input->post('cart_id');
		$this->model_cart->edit($id);
	}

	public function delete()
	{
		$id=$this->input->post('id');
		$this->model_cart->delete($id);
		echo $id;

	}

	public function order()
	{
		$userID=$this->session->userdata('ses_id');

		if (empty($userID)) {
			$url=base_url('/Login');
            echo $this->session->set_flashdata('login_first','Login terlebih dahulu! :)');
            redirect($url);
		}
		elseif (!empty($userID)) {
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
			'cart_item' => $cart,
			'total_pay' => $total_pay,
			'count_product' => $count_product );

			$this->load->view('header', $data);
			$this->load->view('checkout', $data);
		}	
	}
}