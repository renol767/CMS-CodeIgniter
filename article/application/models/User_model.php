<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			// User Data Array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $enc_password,
				'address' => $this->input->post('address')
			);

			// Insert User
			return $this->db->insert('users', $data);
		}

		// Log User In
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if ($result->num_rows() == 1){
				return $result->row(0)->id;
			}
		}

		public function update_user_data($user_id, $data){
			$this->db->where('id', $user_id);
			$this->db->set($data);
			$this->db->update('users');
			if ($this->db->affected_rows() > 0 )
				return true;
			else
				return false;
		}

		public function check_old_password($user_id, $old_password){
			$this->db->where('id', $user_id);
			$this->db->where('password', $old_password);
			$query = $this->db->get('users');
			if ($query->num_rows() > 0 )
				return true;
			else
				return false;
		}

		// Check Username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if (empty($query->row_array())){
				return true;
			}else{
				return false;
			}
		}

		// Check Email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if (empty($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
	}
