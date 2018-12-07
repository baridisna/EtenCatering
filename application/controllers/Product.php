<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
        $this->load->model('model_product');
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('products');
	}

	public function product_detail()
	{
		$this->load->view('header');
		$this->load->view('product');
	}

	function testing()
	{
		$data['detail'] = $this->model_product->product_detail('BRG1');
		
		$this->load->view('testing', $data);	
	}
}