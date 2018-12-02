<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
	}

	public function product_bestseller()
	{
		// $data['bestseller'] = $this->model_product->product_bestseller('a01');
		$data=$this->model_product->product_bestseller('a01');
		Echo $data->product_id;
		// $this->load->view('home', $data);
		// $this->load->view('header');
	}

	public function about_us()
	{
		$this->load->view('header');
		$this->load->view('about_us');
	}
}