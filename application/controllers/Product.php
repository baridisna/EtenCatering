<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_product');		
	}

	public function index()
	{
		$data ['data'] = $this->model_product->get_all('products');

		$this->load->view('header');
		$this->load->view('products', $data);
	}

	public function product_detail()
	{
		$id_product = $this->uri->segment(3);
		$data = array('detail' => $this->model_product->product_detail($id_product));

		$this->load->view('header');
		$this->load->view('product', $data);
	}

	public function sort_price()
	{
		$data ['price'] = $this->model_product->get_all('products');

		$this->load->view('header');
		$this->load->view('products', $data);
	}
}