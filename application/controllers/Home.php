<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_product');		
	}


	public function index()
	{
		$this->load->view('header');
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
		$this->load->view('header');
		$this->load->view('about_us');
	}

	public function my_account()
	{
		$this->load->view('header');
		$this->load->view('my_account');
	}
}