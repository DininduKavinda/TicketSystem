<?php
class RegisterModel extends CI_Model{
	function insertUserdata(){
		$data=array(
			'first_name' => $this->input->post('first_name',TRUE),
			'last_name' => $this->input->post('last_name',TRUE),
			'username' => $this->input->post('username',TRUE),
			'login_email' => $this->input->post('login_email',TRUE),
			'phone' => $this->input->post('phone',TRUE),
			'login_password' => sha1($this->input->post('login_password',TRUE)),
		);
		return $this->db->insert('users',$data);
	}
	function loginUserData(){
		$login_email = $this->input->post('login_email');
		$login_password = sha1($this->input->post('login_password'));
		$this->db->where('login_email',$login_email);
		$this->db->where('login_password',$login_password);
		$respond = $this->db->get('users');
		if ($respond->num_rows()==1){
			return $respond->row(0);
			
		}else
		{
			return false;
		}
	}
}
?>
