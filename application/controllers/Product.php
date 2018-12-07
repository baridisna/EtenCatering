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
		$data ['data'] = $this->model_product->get_all();

		$this->load->view('header');
		$this->load->view('products', $data);
	}

	public function product_detail()
	{
		$id_product = $this->uri->segment(3);
		$data = array(
			'detail' => $this->model_product->product_detail($id_product),
			'jenis' => $this->model_product->product_variant($id_product)
		);
		$this->load->view('header');
		$this->load->view('product', $data);
	}

	public function product_variant()
	{
		$id_product = $this->uri->segment(3);
		$data = array(
			'variant' => $this->model_product->product_variant($id_product));

		$this->load->view('header');
		$this->load->view('product', $data);
	}

	public function sort()
	{
		 
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

		$this->load->view('header');
		$this->load->view('products', $data);
	}

	public function add()
	{
		$id_product = $this->uri->segment(3);
		$get = $this->model_product->get_where('products', array('product_id' => $id_product))->row();

        $data = array(
            'id' => $get->product_id,
            'name' => $get->product_name,
            'price' => $get->price,
            'quantity' => 1
        );

         $this->cart->insert($data);

         echo '<script type="text/javascript">window.history.go(-1);</script>';
	}

	function testing()
	{
		$data['detail'] = $this->model_product->product_detail('BRG1');
		
		$this->load->view('testing', $data);	
	}
}