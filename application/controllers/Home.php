<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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