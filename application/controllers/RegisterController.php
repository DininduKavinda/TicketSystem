<?php

class RegisterController extends CI_Controller {

	public function RegisterUser()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('login_email', 'Email', 'required|valid_email|is_unique[users.login_email]');
		$this->form_validation->set_rules('login_password', 'Password', 'required');
		$this->form_validation->set_rules('login_confirm', 'Password Confirmation', 'required|matches[login_password]');
		$this->form_validation->set_rules('check15', 'Terms & Conditions', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('Register');
                }
                else
                {					
                    $this->load->model('RegisterModel');
					$response = $this->RegisterModel->insertUserdata();
					if ($response){
						$this->session->set_flashdata('msg','Registered Succesfully Please Login in');
						redirect('IndexController/login');
					}
					else{
						$this->session->set_flashdata('msg','Registered Not valid please Register Again');
						redirect('IndexController/register');
					}
                }
	}
}
?>
