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
		$data = array('price' =>  $this->model_product->get_all_price('products'));

		$this->load->view('header');
		$this->load->view('products', $data);
	}

	public function sort_popular()
	{
		$data ['popular'] = $this->model_product->get_all_popular('products');

		$this->load->view('header');
		$this->load->view('products', $data);
	}

	public function sort_western()
	{
		$data ['western'] = $this->model_product->get_all_western('products');

		$this->load->view('header');
		$this->load->view('products', $data);
	}

	public function method() {
   $products=$this->input->post('products');
   if($album_name==NULL) {
     echo "fail";
     //prevent direct access to this method
   }
   else {
      $data=$this->model_product->get($products);
      /*if($data==TRUE) {
          echo "<table>";
          echo "<tr><th>id</th><th>image name</th><th>image</th></tr>";
          foreach($data as $dat) {
               echo '<tr><td>'.$dat['id'].'</td>'.$dat['img_name'].'<td><img src="'.base_url.'/images/albums/'.$dat['img_src'].'" height="100" widh="100"/></td></tr>';
            }
          echo "</table>";
       }
      else {
         echo "fail";
       }*/
   }
}
}

