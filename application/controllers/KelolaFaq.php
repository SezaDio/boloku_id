<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class KelolaFaq extends CI_Controller 
	{

		public function _construct()
		{
			parent::_construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('input');
			$this->load->library('form_validation');
			$this->load->library('session');
		}

		public function index()
		{	if($this->session->userdata('admin_logged_in')){
			$this->load->model('faq_models/FaqModels');
			$data['listFaq'] = $this->FaqModels->get_data_faq();
				
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/kelola_faq', $data);
			$this->load->view('skin/admin/footer_admin');
			} else {
				redirect(site_url('Account'));
			}
		}

		function tambah_faq_check() 
		{	if($this->session->userdata('admin_logged_in')){
	        $this->load->model('artikel_models/ArtikelModels');
			$this->load->library('form_validation');

			$tambah = $this->input->post('submit');
			
			if ($tambah == 1) 
			{
				$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
				$this->form_validation->set_rules('jawaban', 'Jawaban', 'required');

				//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
				if (($this->form_validation->run() == TRUE))
				{
					$data_faq=array(
						'pertanyaan'=>$this->input->post('pertanyaan'),
						'jawaban'=>$this->input->post('jawaban')
					);
					$data['dataFaq'] = $data_faq;
				
					$this->db->insert('faq', $data_faq);
					$this->session->set_flashdata('msg_berhasil', 'Data FAQ baru berhasil ditambahkan');
					redirect('KelolaFaq');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data FAQ gagal ditambahkan.');

					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_faq', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->load->view('skin/admin/header_admin');
				$this->load->view('skin/admin/nav_kiri');
				$this->load->view('content_admin/tambah_faq');
				$this->load->view('skin/admin/footer_admin');
			}     
			} else{
				redirect(site_url('Account'));
			}
		}

		//Fungsi melakukan update pada database
		public function edit_faq($id_faq) 
		{	if($this->session->userdata('admin_logged_in')){
			$this->load->model('faq_models/FaqModels');
			$this->load->library('form_validation');

			$edit = $this->input->post('save');

			if (isset($_POST['save']))
			{
				$id_faq = $this->input->post('id_faq');

				$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
				$this->form_validation->set_rules('jawaban', 'Jawaban', 'required');

				$data_faq=array(
								'pertanyaan'=>$this->input->post('pertanyaan'),
								'jawaban'=>$this->input->post('jawaban')
								);
				$data['dataFaq'] = $data_faq;

				//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
				if (($this->form_validation->run() == TRUE))
				{
					
					$this->db->update('faq', $data_faq, array('id_faq'=>$id_faq));
					$this->session->set_flashdata('msg_berhasil', 'Data FAQ berhasil diedit');
					redirect('KelolaFaq');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data FAQ gagal diedit');
					$this->edit_faq();
				}
			}
			else
			{
				$data['faq'] = $this->FaqModels->select_by_id_faq($id_faq)->row();

				$data_faq=array(
								'pertanyaan'=>$data['faq']->pertanyaan,
								'jawaban'=>$data['faq']->jawaban
								);
				$data['dataFaq'] = $data_faq;
			}
			$data['idFaq'] = $id_faq;
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/edit_faq', $data);
			$this->load->view('skin/admin/footer_admin');
			} else {
				redirect(site_url('Account'));
			}
		}

		//Fungsi untuk delete ajax artikel
		public function delete_faq()//$id_produk
		{
			if($this->session->userdata('admin_logged_in')){
			$id_faq = $_POST['id_faq'];
			$this->load->model('faq_models/FaqModels');
			$this->FaqModels->delete_faq($id_faq);

			$this->index();
			} else {
				redirect(site_url('Account'));
			}
		}
	}