<?php
class Contactus extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$data['title'] = 'Contact Us';
		$data['contactus'] = $this->contactus_model->get_contact();

		$this->load->view('templates/header');
		$this->load->view('contactus/index', $data);
		$this->load->view('templates/footer');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->contactus_model->delete($where, 'contactus');
		$this->session->set_flashdata('data_deleted', 'Data Berhasil Di Hapus');
		redirect('contactus');
	}
}
