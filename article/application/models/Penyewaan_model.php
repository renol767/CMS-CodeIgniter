<?php
	class Penyewaan_model extends CI_Model{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_sewa(){
			$query = $this->db->get('penyewaan');
			return $query->result_array();
		}

		public function edit_data($where,$table){
			return $this->db->get_where($table,$where);
		}

		public function create_data(){
			$data = array(
				'nama_k' => $this->input->post('nama_k'),
				'tglsewa' => $this->input->post('tglsewa'),
				'tglbalik' => $this->input->post('tglbalik'),
				'jenismaterial' => $this->input->post('jenismaterial')
			);
			return $this->db->insert('penyewaan', $data);
		}

		public function update($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function delete($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}
