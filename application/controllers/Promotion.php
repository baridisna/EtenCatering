<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_promotion');		
	}

	public function index()
	{
		$data ['data'] = $this->model_promotion->get_all_promosi('promotions');

		$this->load->view('header');
		$this->load->view('promotion', $data);
	}	
}