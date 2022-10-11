<?php
class LoginController extends CI_Controller {
	public function LoginUser(){
		$this->form_validation->set_rules('login_email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('login_password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('Login');
                }
                else
                {					
                   $this->load->model('RegisterModel');
				   $result = $this->RegisterModel->loginUserData();
				   if($result != false){
					$user_data = array(
						'user_id'=>$result->id,
						'first_name'=>$result->first_name,
						'last_name'=>$result->last_name,
						'login_email'=>$result->login_email,
						'phone'=>$result->phone,
						'logged_in'=>TRUE,
					);
					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('msg','Welcome Back');
					redirect('AdminController/index');
				   }else{
					$this->session->set_flashdata('msg','Wrong Email or Password');
					redirect('IndexController/login');
				   }
                }
		}
	}

?>
