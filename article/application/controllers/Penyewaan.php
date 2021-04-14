<?php
	Class Penyewaan extends CI_Controller{
		public function index(){
			if (!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Data Penyewaan';
			$data['penyewaan'] = $this->penyewaan_model->get_sewa();

			$this->load->view('templates/header');
			$this->load->view('penyewaan/index', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = 'Create Data';

			$this->form_validation->set_rules('nama_k', 'Nama_k', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('penyewaan/create', $data);
				$this->load->view('templates/footer');
			}else{
				$this->penyewaan_model->create_data();
				$this->session->set_flashdata('data_created', 'Data Berhasil Di Buat');
				redirect('penyewaan');
			}
		}

		public function edit($id){
			$data['title'] = 'Edit Data';
			$where = array('id' =>$id);
			$data['penyewaan'] = $this->penyewaan_model->edit_data($where, 'penyewaan')->result();

			$this->load->view('templates/header');
			$this->load->view('penyewaan/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			$id				= $this->input->post('id');
			$nama_k			= $this->input->post('nama_k');
			$tglsewa		= $this->input->post('tglsewa');
			$tglbalik		= $this->input->post('tglbalik');
			$jenismaterial	= $this->input->post('jenismaterial');

			$data = array(

				'nama_k'		=>$nama_k,
				'tglsewa'		=>$tglsewa,
				'tglbalik'		=>$tglbalik,
				'jenismaterial'	=>$jenismaterial
			);
			$where = array(
				'id'	=>$id
			);

			$this->penyewaan_model->update($where,$data, 'penyewaan');
			$this->session->set_flashdata('data_updated', 'Data Berhasil Di update');
			redirect('penyewaan');
		}

		public function delete($id)
		{
			$where = array('id' => $id);
			$this->penyewaan_model->delete($where, 'penyewaan');
			$this->session->set_flashdata('data_deleted', 'Data Berhasil Di Hapus');
			redirect('penyewaan');
		}

		public function export(){
			$this->load->library('dompdf_gen');

			$data['penyewaan'] = $this->penyewaan_model->get_sewa();

			$this->load->view('penyewaan/laporan_pdf', $data);

			$paper_size = 'A4';
			$orientation = 'potrait';

			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orientation);

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("LaporanPenyewaan_PT BJU.pdf", array('Attachment' =>0));
		}


	}
