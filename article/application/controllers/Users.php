<?php
	class Users extends CI_Controller{
		public function register(){
			if (!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			}else{
				// Encrypt Password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//Set Message
				$this->session->set_flashdata('user_registered', 'Pendaftaran akun berhasil');

				redirect('users/register');
			}
		}
		// Check if username exists
		function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'Username telah dipakai, cobalah username lain');
			if ($this->user_model->check_username_exists($username)){
				return true;
			}else{
				return false;
			}
		}

		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			// Set Message
			$this->session->set_flashdata('user_loggedout',
				'You are now logged out');
			redirect('users/login');
		}

		//Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'Email telah dipakai, coba lagi email lain');
			if ($this->user_model->check_email_exists($email)){
				return true;
			}else{
				return false;
			}
		}

		// Login
		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			}else{

				// Get Username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user_id = $this->user_model->login($username, $password);

				if ($user_id){
					// Create Sesssion
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					//Set Message
					$this->session->set_flashdata('user_loggedin', 'Anda Berhasil Login');

					redirect('posts');
				}else{
					//Set Message
					$this->session->set_flashdata('login_failed', 'Login gagal Username/Password Salah');

					redirect('users/login');
				}
			}
		}

		public function changepassword()
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}

			$data['title'] = 'Change Password';

			$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
			$this->form_validation->set_rules('new_password', 'New Password', 'required');
			$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'matches[new_password]');
			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/changepassword', $data);
				$this->load->view('templates/footer');
			}else{

				$data = array(
					'password' => md5($this->input->post('new_password'))
				);
				$result = $this->user_model->check_old_password($this->session->userdata('user_id'), md5($this->input->post('current_password')));
				if($result > 0 AND $result === true ){
					// updata user data
					$result = $this->user_model->update_user_data($this->session->userdata('user_id'), $data);
					if($result > 0){
						$this->session->set_flashdata('update_password', 'User Password Change.');
						return redirect('users/changepassword');
					}else{
						$this->session->set_flashdata('new_password_error', 'Eror');
						return redirect('users/changepassword');
					}
				}else{
					$this->session->set_flashdata('current_password_error', 'Password Lama Salah');
					return redirect('users/changepassword');
				}
			}
		}
	}
