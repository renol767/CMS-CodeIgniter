<?php
	class Contactus_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_contact()
		{
			$query = $this->db->get('contactus');
			return $query->result_array();
		}

		public function delete($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
	}
