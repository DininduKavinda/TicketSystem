<?php
class AdminController extends CI_Controller{
	public function index(){
		$this->load->view('Dashboard');
	}
	public function Profile(){
		$this->load->view('Profile');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('IndexController/login');
	}
}
?>
