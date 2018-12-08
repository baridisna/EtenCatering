<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->model('model_user');
    }

	public function index()
	{
		$this->load->view('login_view');
	}

	function Auth()
    {
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_customer=$this->model_user->auth_customer($email,$password);
 
        if($cek_customer->num_rows() > 0){ //jika login sebagai customer
                        $data=$cek_customer->row_array();
                $this->session->set_userdata('masuk',TRUE);
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['UserID']);
                    $this->session->set_userdata('ses_email', $data['email']);
                    $this->session->set_userdata('ses_name',$data['name']);
                    $this->session->set_userdata('ses_address', $data['address']);
                    $this->session->set_userdata('ses_postal_code', $data['postal_code']);
                    $this->session->set_userdata('ses_phone', $data['phone']);

                    redirect('Home');
 
        }else{ //jika login sebagai admin
                    $cek_admin=$this->model_user->auth_admin($username,$password);
                    if($cek_admin->num_rows() > 0){
                            $data=$cek_admin->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','2');
                            $this->session->set_userdata('ses_id',$data['UserID']);
                            $this->session->set_userdata('ses_email',$data['email']);
                            $this->session->set_userdata('ses_name',$data['name']);
                            $this->session->set_userdata('ses_phone',$data['phone']);
                            redirect('Admin');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url('/Login');
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah!');
                            redirect($url);
                    }
        }
 
    }
 
    function logout()
    {
        $this->session->sess_destroy();
        $url=base_url('/Login');
        redirect($url);
    }

    function signup()
    {
        $this->load->view('signup_view');
    }

    function get_username()
    {
        $username = $this->input->post('');
        $user_validate = $this->model_user->get_username($username);
    }

    function register()
    {
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('username', 'USERNAME','required|is_unique[user.userID]');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('repass','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('signup_view');
         }else{
 
             $data['userID'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =  $this->input->post('password');

             $customer['userID'] = $this->input->post('username');
             $customer['name'] = $this->input->post('name');
 
             $this->model_user->add_user($data, $customer);
             
             echo "<script>alert('Pendaftaran Berhasil, Silakan Login terlebih dahulu'); window.location='".base_url('Login')."' </script>";
        }
    }

}