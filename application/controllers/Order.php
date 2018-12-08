<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
        $this->load->model('model_user');
        $this->load->model('model_order');

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

			$cust_data = $this->model_user->get_customer($userID);

			$data = array(
			'cart_item' => $cart,
			'total_pay' => $total_pay,
			'count_product' => $count_product,
			'cust_data' => $cust_data );

			$this->load->view('header', $data);
			$this->load->view('checkout', $data);
		}	
	}

	function add()
	{
		$userID=$this->session->userdata('ses_id');

		if (empty($userID)) {
			$url=base_url('/Login');
            echo $this->session->set_flashdata('login_first','Login terlebih dahulu! :)');
            redirect($url);
		}
		elseif (!empty($userID)) {
			$cart=$this->model_cart->Cart_customer($userID);
			$cust_data = $this->model_user->get_customer($userID);

			$recipiens = $this->input->post('recipiens_name');
			$cp = $this->input->post('contact_person');
			$pengiriman = $this->input->post('shipping_date');
			$shipping_add = $this->input->post('shipping_address');
			$billing_add = $this->input->post('billing_address');
			$mandiri = $this->input->post('mandiri');
			$onthespot = $this->input->post('onthespot');

			if (empty($mandiri) && !empty($onthespot)) {
				$pembayaran = 'onthespot';
			}
			elseif (empty($onthespot) && !empty($mandiri)) {
				$pembayaran = 'mandiri';
			}

			$order_detail = array(
				'recepients_name' => $recipiens,
				'contact_person' => $cp,
				'shipping_date' => $pengiriman,
				'shipping_address' => $shipping_add,
				'billing_address' => $billing_add,
				'payment_method' => $pembayaran );

			$id_order = $this->model_order->add_order_detail($order_detail);

			foreach ($cart as $key) {
				$orders[] = array(
					'cart_id' => $key->cart_id,
					'order_detail_id' => $id_order );

				$cart_id[] = array(
					'cart_id' => $key->cart_id,
					'status'  => 'non-active' );
			}

			$this->model_order->add_orders($orders, $cart_id);

			redirect('Order/order_success');
		}
	}

	function order_success()
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

			$cust_data = $this->model_user->get_customer($userID);

			$cart = array(
			'total_pay' => $total_pay,
			'count_product' => $count_product);
			
			$this->load->view('header', $cart);
			$this->load->view('done_ordering');
		}
	}

}